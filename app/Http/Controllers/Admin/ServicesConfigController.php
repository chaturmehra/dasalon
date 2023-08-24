<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesConfigController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Services Config";
    	$meta_description  = "";
    	$meta_keywords     = "";

        return view('admin/services/services-config/index', compact('title', 'meta_description', 'meta_keywords'));
    }
}
