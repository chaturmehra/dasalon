<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner\Staff;

class StaffController extends Controller
{
    public function index()
	{
		$title             = "Dasalon :: Staff";
		$meta_description  = "";
		$meta_keywords     = "";

		//$get_amenities = Amenity::where('status', 1)->get();
		//$businesstypes = BusinessType::where('is_active', 1)->get();

		return view('partner/staff/index', compact('title', 'meta_description', 'meta_keywords'));
	}
}
