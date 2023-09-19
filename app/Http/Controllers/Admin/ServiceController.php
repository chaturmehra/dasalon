<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Services";
    	$meta_description  = "";
    	$meta_keywords     = "";

        return view('admin/services/index', compact('title', 'meta_description', 'meta_keywords'));
    }
}
