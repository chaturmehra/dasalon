<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnerMappingController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Services Partner Mapping";
    	$meta_description  = "";
    	$meta_keywords     = "";

        return view('admin/services/partner-mapping/index', compact('title', 'meta_description', 'meta_keywords'));
    }
}
