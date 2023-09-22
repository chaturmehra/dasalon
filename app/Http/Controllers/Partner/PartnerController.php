<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Token;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
Use Response;
use Validator;
use Imagick;
use DB;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;

class PartnerController extends Controller
{

    public function registerParter(Request $request)
    {

        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'role'      =>  1,
        ]);

        $token = Str::random(64);

        $expires_in = Carbon::now()->addDays(4)->timestamp;

        //create a new token 
        $newToken = new Token;
        $newToken->code = $token;
        $newToken->status = 0;
        $newToken->expires_in = $expires_in;
        $newToken->user_id = $user->id;
        $newToken->save();

        //email details
        Mail::send('mail-template/emailVerification', ['token' => $token , 'user' => $user], function($message) use($request){
            $message->to($request->email);
            $message->subject('Email Verification Mail');
        });

        return redirect('/');
    }

    public function verifyAccount(Request $request,  $token)
    {
        $verifyUser = Token::where('code', $token)->first();
        $message = 'Sorry your email cannot be identified.';

        if(!is_null($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->email_verified_at) {
                $verifyUser->user->email_verified_at = Carbon::now();
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }
        
        $adored_listing = User::leftjoin('user_details', 'users.id', '=', 'user_details.user_id')->where('role_id', '3')->get(['users.id','user_details.profile_image','user_details.cover_image','users.name','users.username','user_details.docs_verification as verified']);
        
        return redirect('/partner/login');
        //return redirect()->route('front.thank-you',compact('adored_listing'));

    }

    public function resetPassword(Request $request, $token)
    {
        $verifyUser = Token::leftjoin('users', 'users.id', '=', 'tokens.user_id')->where('code', $token)->get(['users.id', 'users.name','users.email']);
        
        if( !empty($verifyUser) ){
            $email  = $verifyUser[0]->email;
            $name   = $verifyUser[0]->name;
            $user_id   = $verifyUser[0]->id;
            return view('partner/user/signup-create-password', compact('email', 'name', 'user_id'));
        }else{
            return view('/partner/login');
        }
        //return redirect()->route('front.thank-you',compact('adored_listing'));

    }

    public function redirectToProvider($provider)
    {
        try {

            return Socialite::driver($provider)->redirect();

        } catch (\Exception $e) {
            // Log the error (optional)
            \Log::error('Socialite redirect error: ' . $e->getMessage());

            // Redirect to the login page with an error message
            return redirect('/partner/login')->with('error', 'Unable to authenticate with ' . $provider);
        }
    }

    public function handleProviderCallback($provider)
    {
        try {
            $response = Socialite::driver($provider)->user();

            $name   = $response->name;
            $email  = $response->email;
            $check_record = User::whereEmail($email)->first();

            if (empty($check_record)) {

                $service_provided = Session::get('service_provided_id');

                $user = User::create([
                    'name'      => $name,
                    'email'     => $email,
                    'phone'     => "",
                    'country'   => "",
                    'role'      => 1,
                ]);

                $user_detail_data = [
                    'user_id'           => $user->id,
                    'provider'          => isset($provider) ? $provider : "",
                    'service_provided'  => isset($service_provided) ? $service_provided : "",
                ];

                Session::put('user_detail_data', $user_detail_data);

                return view('partner/user/signup-mobile-verification');

            }else{
                $check_status = isset($check_record->is_active) ? $check_record->is_active : "";
                if ($check_record) {
                    $check_role = isset($check_record->role) ? $check_record->role : "";

                    Auth::login($check_record);
                    if ($check_role) {
                        return redirect()->intended('/partner/dashboard');   
                    }else{
                        return redirect()->intended('/admin/dashboard');
                    }
                }else{
                    return redirect('/user/signup')->with('error', 'Email already exists.');
                }
            }
        } catch (\Exception $e) {
            \Log::error('Socialite callback error: ' . $e->getMessage());

            return redirect('/partner/login')->with('error', 'Unable to authenticate with ' . $provider);
        }
    }

    public function signupWithEmail(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'email'  => 'required|email|unique:users|max:100',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $email  = $request->email;

        $check_record = User::whereEmail($email)->first();
        if (empty($check_record)) {

            $email = Session::put('email', $email);

            $service_provided   = Session::get('service_provided_id');

            if ($service_provided) {
                return view('partner/user/signup-mobile-verification');
            }else{
                return view('partner/user/customer-signup-mobile-verification');
            }

        }else{
            return redirect()->back()->with('error', 'Email already exists.');
        }
    }

    public function storeBusinessDetail(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'businessname'  => 'required|max:30',
            'phone'         => 'required',
            'otp'           => 'required|numeric',
            'websitename'   => 'nullable|url',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $signin_otp = Session::get('signin_otp');
        if ($signin_otp != $request->otp) {
            return redirect()->back()->with('error', 'OTP not match.');
        }

        $service_provided   = Session::get('service_provided_id');
        $user_detail_data   = Session::get('user_detail_data');

        $email   = Session::get('email');
        // If partner wants login with email
        if ( !empty($email) && !empty($service_provided) ) {

            $user = User::create([
                'name'      => $request->businessname,
                'email'     => $email,
                'phone'     => $request->phone,
                'country'   => "",
                'role'      => 1,
                'is_active' => 1,
            ]);

            $userDetails = [
                'business_name'     => $request->businessname,
                'website'           => $request->websitename,
                'user_id'           => $user->id,
                'provider'          => "",
                'service_provided'  => $service_provided,
            ];

            $userDetails = UserDetails::create($userDetails);

            $this->createPasswordLinkEmail($email, $request->businessname, $user->id);
            //return view('partner/user/signup-complete');
            return redirect('partner/user/signup-complete')->with('success', 'We have sent to a create password link in your mail. Please check.');

        }else{

            $userDetails = [
                'business_name'     => $request->businessname,
                'website'           => $request->websitename,
                'user_id'           => $user_detail_data["user_id"],
                'provider'          => $user_detail_data["provider"],
                'service_provided'  => $user_detail_data["service_provided"],
            ];

            $userDetails = UserDetails::create($userDetails);

            $user = User::where('id', $user_detail_data["user_id"])->update([
                'phone'      => $request->phone,
                'is_active'  => 1,
            ]);

            Session::forget('user_detail_data');
            Session::forget('service_provided_id');

            return view('partner/user/signup-complete');
        }
    }

    public function signupReturnWithEmail()
    {
        $service_provided   = Session::get('service_provided_id');

        if ($service_provided) {
            return view('partner/user/signup-mobile-verification');
        }else{
            return view('partner/user/customer-signup-mobile-verification');
        }
    }

    public function storeCustomerDetail(Request $request)
    {

        $email   = Session::get('email');

        $validator = Validator::make($request->all(), [
            'name'      => 'required|max:30',
            'phone'     => 'required',
            'otp'       => 'required|numeric',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $signin_otp = Session::get('signin_otp');
        if ($signin_otp != $request->otp) {
            return redirect()->back()->with('error', 'OTP not match.');
        }

        $user = User::create([
            'name'      => $request->name,
            'email'     => $email,
            'phone'     => $request->phone,
            'country'   => "",
            'role'      => 2,
            'is_active' => 1,
        ]);

        $this->createPasswordLinkEmail($email, $request->name, $user->id);

        return redirect('/partner/login')->with('success', 'We have sent to a create password link you mail. Please check.');

        //return view('/');
    }

    public function createPassword(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'toc'       => 'required',
            'password'  => ['required', Password::min(8)
                        ->letters()
                        ->mixedCase()
                        ->numbers()
                        ->symbols()
                    ],
            'confirm_password'    => 'same:password',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user_id    = $request->user_id;
        $email      = $request->user_email;
        $password   = Hash::make($request->password);

        User::where('id', $user_id)->where('email', $email)->update([
            'password'      => $password,
            'is_active'  => 1,
        ]);

        return redirect('/partner/login')->with('success', 'You have successfully created password. Please login now.');

    }

    public function createPasswordLinkEmail($email, $name, $user_id)
    {
        if (!empty($email)) {

            $token = Str::random(64);

            $expires_in = Carbon::now()->addDays(4)->timestamp;

            //create a new token 
            $newToken               = new Token;
            $newToken->code         = $token;
            $newToken->status       = 0;
            $newToken->expires_in   = $expires_in;
            $newToken->user_id      = $user_id;
            $newToken->save();

            // echo $email; die;

            //email details
            Mail::send('mail-template/createPassword', ['token' => $token, 'name' => $name, 'email' => $email], function($message) use($email){
                $message->to($email);
                $message->subject('Reset password Mail');
            });

            Session::forget('user_detail_data');
            Session::forget('service_provided_id');
            Session::forget('email');
            Session::forget('signin_otp');

            return true;
            //return view('partner/user/signup-mobile-verification');
            //return redirect('/')->with('success', 'We have sent to a create password link you mail. Please check.');
        }else{
            return redirect()->back()->with('error', 'Email already exists.');
        }
    }
}
