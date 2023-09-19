<?php

namespace App\Http\Controllers\Partner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
   
    public function index()
    {
        return view('partner/setting/index');
    }
}
