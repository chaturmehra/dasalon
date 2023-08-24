<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OffersManagementController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Services Offers Management";
    	$meta_description  = "";
    	$meta_keywords     = "";

        return view('admin/services/offers-management/index', compact('title', 'meta_description', 'meta_keywords'));
    }
}
