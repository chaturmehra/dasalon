<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffUserAuthorizationController extends Controller
{
    public function index()
	{
		$title             = "Dasalon :: Staff User Authorization";
		$meta_description  = "";
		$meta_keywords     = "";

		return view('partner/staff/user-authorization/index', compact('title', 'meta_description', 'meta_keywords'));
	}
}
