<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Partner\Staff;
use App\Models\Partner\StaffAttendance;
use Illuminate\Support\Facades\Auth;
use Validator;

class StaffAttendanceController extends Controller
{
    public function index()
	{
		$title             = "Dasalon :: Staff Attendance";
		$meta_description  = "";
		$meta_keywords     = "";

		$partner_id 		= Auth::user()->id;

		$staff 		= Staff::where('partner_id', $partner_id);
		$getStaff 	= $staff->select(['staff.staff_id', 'staff.user_id', 'users.name', 'users.email', 'users.phone', 'role.role_name'])
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->leftJoin('role', 'role.id', '=', 'staff.staff_role')
                ->orderBy('staff.staff_id', 'DESC')
                ->where('users.is_active', 1)
                ->get();

       	$staffs 		= Staff::where('partner_id', $partner_id);
		$staffAttendance 	= $staffs->select(['staff.staff_id', 'staff.user_id', 'users.name', 'users.email', 'users.phone', 'staff_attendance.date', 'staff_attendance.check_in', 'staff_attendance.check_out'])
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->leftJoin('staff_attendance', 'staff_attendance.staff_id', '=', 'staff.user_id')
                ->orderBy('staff.staff_id', 'DESC')
                ->where('users.is_active', 1)
                ->get();
        // echo "<pre>"; print_r($staffAttendance); die;
		return view('partner/staff/attendance/index', compact('title', 'meta_description', 'meta_keywords', 'getStaff', 'staffAttendance'));
	}

	public function checkinAttendance(Request $request)
	{

		$validator = Validator::make($request->all(), [
            'check_in'  => 'required',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $todayDate = date('Y-m-d');

        if ( !empty($request->staff_id) ) {
        	$staffAttendance = StaffAttendance::where('staff_id', $request->staff_id)->where('date', $todayDate)->get();

        	if ( !$staffAttendance->isEmpty() ) {
        		StaffAttendance::where('staff_id', $request->staff_id)->update([
        			'date'     		=> $todayDate,
        			'check_in'     	=> $request->check_in,
        		]);
        	}else{
        		StaffAttendance::create([
        			'staff_id'      => $request->staff_id,
        			'date'     		=> $todayDate,
        			'check_in'     	=> $request->check_in,
        		]);
        	}

        	return redirect()->back()->with('success', 'Attendance submitted.');
        }else{
        	return redirect()->back()->with('error', 'Somthing went wrong. Please try again.');
        }
	}

	public function checkoutAttendance(Request $request)
	{
		
		$validator = Validator::make($request->all(), [
            'check_out'  => 'required',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $todayDate = date('Y-m-d');
        if ( !empty($request->staff_id) ) {
	        $staffAttendance = StaffAttendance::where('staff_id', $request->staff_id)->where('date', $todayDate)->get();

	        if ( !$staffAttendance->isEmpty() ) {
	        	StaffAttendance::where('staff_id', $request->staff_id)->update([
	        		'date'     		=> $todayDate,
	        		'check_out'     => $request->check_out,
	        	]);
	        }else{
				StaffAttendance::create([
					'staff_id'      => $request->staff_id,
					'date'     		=> $todayDate,
					'check_out'     => $request->check_out,
				]);
			}

			return redirect()->back()->with('success', 'Attendance submitted.');
		}else{
        	return redirect()->back()->with('error', 'Somthing went wrong. Please try again.');
        }
	}

	public function getStaffDetailFillAttendance($id)
	{
		$staff 			= Staff::where('user_id', $id);
		$staffDetail 	= $staff->select('users.name', 'users.id')
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->get();

		if ( !empty($id) && !empty($staffDetail) ) {
			$response = array(
				"status" 	=> 1,
				"data" 		=> $staffDetail,
			);
		}else{
			$response = array(
				"status" 	=> 0,
				"message" 	=> "Data not found",
			);
		}
		
		echo json_encode($response);
	}

	public function filterAttendanceByDate($start_date, $end_date)
	{
		/*if ($start_date != $end_date)
    		whereBetween('staff_attendance.date', [$start_date, $end_date]);
    	}else{
        	->where('staff_attendance.date', $start_date)
        }*/
		$partner_id 	= Auth::user()->id;
		$staff 			= Staff::where('partner_id', $partner_id);
		$staffAttendance 	= $staff->select(['staff.staff_id', 'staff.user_id', 'users.name', 'users.email', 'users.phone', 'staff_attendance.date', 'staff_attendance.check_in', 'staff_attendance.check_out'])
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->leftJoin('staff_attendance', 'staff_attendance.staff_id', '=', 'staff.user_id')
                ->orderBy('staff.staff_id', 'DESC')
            	->where('staff_attendance.date', $start_date)
                ->get();

		if ( !$staffAttendance->isEmpty() ) {
			$response = array(
				"status" 	=> 1,
				"data" 		=> $staffAttendance,
			);
		}else{
			$response = array(
				"status" 	=> 0,
				"message" 	=> "Data not found",
			);
		}
		
		echo json_encode($response);
	}
}
