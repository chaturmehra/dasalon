<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\AppointmentConfig;
class AppointmentController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Appointment Config";
    	$meta_description  = "";
    	$meta_keywords     = "";
        $task = AppointmentConfig::findOrFail(1);        

        return view('admin/setting/appointment_config/index', compact('title', 'meta_description', 'meta_keywords','task'));
    }

    public function create(Request $request)
    {   
        $id =  1;  
        $getRecord = AppointmentConfig::where('id', $id)->first();
        if($getRecord){ 
            AppointmentConfig::where('id', $getRecord->id)->
            update([ 
        'time_least_count' => $request->time_least_count,  
        'soonest_appointment_booking_time' => $request->soonest_appointment_booking_time,  
        'latest_appointment_booking_time' => $request->latest_appointment_booking_time,  
        'max_booking_allowed' => $request->max_booking_allowed,  
    ]);}
        return redirect()->back()->with('message', 'Appointment Config created successfully.');
    }
}
