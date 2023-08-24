<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Appointment Config";
    	$meta_description  = "";
    	$meta_keywords     = "";

        return view('admin/setting/appointment_config/index', compact('title', 'meta_description', 'meta_keywords'));
    }
}
