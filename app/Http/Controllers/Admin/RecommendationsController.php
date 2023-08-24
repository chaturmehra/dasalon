<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecommendationsController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Services Recommendations";
    	$meta_description  = "";
    	$meta_keywords     = "";

        return view('admin/services/recommendations/index', compact('title', 'meta_description', 'meta_keywords'));
    }
}
