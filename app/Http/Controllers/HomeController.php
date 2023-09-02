<?php

namespace App\Http\Controllers;
Use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function userHome()
    {
        if(Auth::user()->role == "admin"){
            return view('admin/layouts/auth/dashboard');
        }else{
            return view('partner/layouts/auth/dashboard');
        }
    }
}
