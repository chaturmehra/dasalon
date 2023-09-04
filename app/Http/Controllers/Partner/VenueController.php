<?php

namespace App\Http\Controllers\Partner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VenueController extends Controller
{
   
    public function index()
    {
    	$title             = "Dasalon :: Venue";
    	$meta_description  = "";
    	$meta_keywords     = "";

        return view('partner/setting/venue/index', compact('title', 'meta_description', 'meta_keywords'));
    }
}
