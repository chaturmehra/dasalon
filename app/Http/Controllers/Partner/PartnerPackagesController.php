<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnerPackagesController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Book A Look";
		$meta_description  = "";
		$meta_keywords     = "";

        return view('partner/services/packages/index', compact('title', 'meta_description', 'meta_keywords'));
    }
}
