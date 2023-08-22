<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Token;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
Use Response;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        dd('res');
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role'=>2,
            'password' => Hash::make($data['password']),
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
        

        //return redirect()->route('front.thank-you',compact('adored_listing'));
    }
}
