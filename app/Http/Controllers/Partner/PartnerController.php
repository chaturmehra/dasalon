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

class PartnerController extends Controller
{

    public function registerParter(Request $request)
    {

        //dd($request);
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => Hash::make($request->password),
            'role'=>1,
        ]);
                
        $userDetails = UserDetails::create([
            'user_id'=>$user->id,
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
        
        return redirect('/');
        //return redirect()->route('front.thank-you',compact('adored_listing'));

    }
}
