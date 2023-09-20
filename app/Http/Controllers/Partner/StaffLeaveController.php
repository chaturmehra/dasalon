<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Partner\Staff;
use App\Models\Partner\StaffLeave;
use Illuminate\Support\Facades\Auth;
use Validator;

class StaffLeaveController extends Controller
{
    public function index()
	{
		$title             = "Dasalon :: Staff Leave";
		$meta_description  = "";
		$meta_keywords     = "";

		$partner_id 		= Auth::user()->id;


       	$staff 		= Staff::where('partner_id', $partner_id);
		$staffLeave = $staff->select(['staff.staff_id', 'staff.user_id', 'users.name', 'users.email', 'users.phone', 'staff_leave.start', 'staff_leave.end', 'staff_leave.leave_remarks', 'staff_leave.leave_status', 'staff.profile_image'])
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->leftJoin('staff_leave', 'staff_leave.staff_id', '=', 'staff.user_id')
                ->orderBy('staff.staff_id', 'DESC')
                ->where('users.is_active', 1)
                ->get();
                
		return view('partner/staff/leave/index', compact('title', 'meta_description', 'meta_keywords', 'staffLeave'));
	}

	public function storeLeave(Request $request)
	{

		$validator = Validator::make($request->all(), [
            'staff_id'  	=> 'required',
            'start_date'  	=> 'required|date|after:today',
            'end_date'  	=> 'required|date|after:start_date',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ( !empty($request->staff_id) ) {
        	StaffLeave::create([
        		'staff_id'      	=> $request->staff_id,
        		'start'     		=> $request->start_date,
        		'end'     			=> $request->end_date,
        		'leave_remarks'     => $request->leave_remarks,
        		'leave_status'     	=> $request->leave_status,
        	]);

        	return redirect()->back()->with('success', 'Leave submitted successfully.');
        }else{
        	return redirect()->back()->with('error', 'Somthing went wrong. Please try again.');
        }
	}
}
