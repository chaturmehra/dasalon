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
use App\Models\Admin\PartnerType;

class UserController extends Controller
{

    public function index()
    {
        return view('partner/user/index');
    }

    public function signupForm()
    {
    	
        return view('partner/user/email-form');
    }

    public function signinForm()
    {
        
        return view('partner/user/sign-in');
    }

    public function signupServiceProvided()
    {
    	$partnerType = PartnerType::where('status', 1)->get();
        return view('partner/user/signup-service-provided', compact('partnerType'));
    }

    public function signinFormProvided(Request $request, $id)
    {
    	Session::put('service_provided_id', $id);

        return redirect('/user/signup');
    }

    public function bookService()
    {
        
        Session::forget('user_detail_data');
        Session::forget('service_provided_id');
        Session::forget('email');
        Session::forget('signin_otp');

        return redirect('/user/signup');
    }
}
