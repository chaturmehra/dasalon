<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo() {
        $role = Auth::user()->role;
        switch ($role) {
            case 'admin':
                return route('admin.dashboard');
                //return redirect('/admin/dashboard');
                break;
            case 'system manager':
                return route('admin.dashboard');
                //return redirect('/admin/dashboard');
                break; 
            case 'partner':
                return route('partner.dashboard');
                //return redirect('/partner/dashboard');
                break; 
            case 'manager':
                return route('manager.dashboard');
                //return redirect('/manager/dashboard');
                break; 

            default:
                return '/'; 
                break;
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


}
