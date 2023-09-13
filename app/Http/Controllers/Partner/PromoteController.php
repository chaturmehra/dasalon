<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromoteController extends Controller
{
    public function index()
    {
        return view('partner/promote/index');
    }
}
