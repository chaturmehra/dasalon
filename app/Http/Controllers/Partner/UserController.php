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

class UserController extends Controller
{

    public function index()
    {
        return view('partner/user/index');
    }

    public function signinForm()
    {
        return view('partner/user/email-form');
    }
}
