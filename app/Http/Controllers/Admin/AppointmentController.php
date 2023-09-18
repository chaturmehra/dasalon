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
        $task = AppointmentConfig::first();        

        return view('admin/setting/appointment_config/index', compact('title', 'meta_description', 'meta_keywords','task'));
    }

    public function create(Request $request)
    {    
        $getRecord = AppointmentConfig::first();
        if($getRecord){ 
            AppointmentConfig::where('id', $getRecord->id)->
            update([ 
        'time_least_count' => $request->time_least_count,  
        'soonest_appointment_booking_time' => $request->soonest_appointment_booking_time,  
        'latest_appointment_booking_time' => $request->latest_appointment_booking_time,  
        'max_booking_allowed' => $request->max_booking_allowed,  
    ]);}
    else{
        $ap = new AppointmentConfig;  
         $ap->time_least_count =  $request->get('time_least_count');  
         $ap->soonest_appointment_booking_time = $request->get('soonest_appointment_booking_time');  
         $ap->latest_appointment_booking_time = $request->get('latest_appointment_booking_time');  
         $ap->max_booking_allowed = $request->get('max_booking_allowed');  
         $ap->save();
    }
        return redirect()->back()->with('message', 'Appointment Config created successfully.');
    }
}
