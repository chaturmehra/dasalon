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
                ->orderBy('staff_attendance.sa_id', 'DESC')
                ->where('users.is_active', 1)
                ->get();

        // By default get last 30 days data of Attendance Analytics 
        $today_date 	= date('Y-m-d');
        $last_30_date 	= date('Y-m-d', strtotime('today - 30 days'));
       	$Apexstaff 		= Staff::where('partner_id', $partner_id);

		$apexStaffAttendance 	= $Apexstaff->select(['staff.staff_id', 'staff.user_id', 'users.name', 'users.email', 'users.phone', 'staff_attendance.date', 'staff_attendance.check_in', 'staff_attendance.check_out'])
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->leftJoin('staff_attendance', 'staff_attendance.staff_id', '=', 'staff.user_id')
                ->orderBy('staff_attendance.sa_id', 'DESC')
                ->where('users.is_active', 1)
                ->whereBetween('staff_attendance.date', [$last_30_date, $today_date])
                ->get();
        $apexChartArray = "";
        if (!$apexStaffAttendance->isEmpty()) {
        	$apexCart = "";
        	foreach ($apexStaffAttendance as $key => $value) {
        		$ts1 = strtotime($value['check_in']);
				$ts2 = strtotime($value['check_out']);    
				if($ts1 && $ts2){
					$seconds_diff = $ts2 - $ts1;                            
					$time = ($seconds_diff/3600);
				}else{
					$time = 0;
				}
        		$staffdata[$value['name']][] = $time;

        		$apexCart = $staffdata;
        	}
        	$apexChartArray = array();
        	$apexChartAvgArray = array();

        	foreach ($apexCart as $sumkey => $apexChartArr) {
        		$sum = array_sum($apexChartArr);
        		$apexChartArray[$sumkey] = $sum;

        		$average = array_sum($apexChartArr) / count($apexChartArr);
        		$apexChartAvgArray[$sumkey] = $average;
        	}
        }

		return view('partner/staff/attendance/index', compact('title', 'meta_description', 'meta_keywords', 'getStaff', 'staffAttendance', 'apexChartArray', 'apexChartAvgArray'));
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
        		StaffAttendance::where('staff_id', $request->staff_id)->where('date', $todayDate)->update([
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
	        	StaffAttendance::where('staff_id', $request->staff_id)->where('date', $todayDate)->update([
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

       	$todayDate 	= date('Y-m-d');
        $staffAttendance = StaffAttendance::where('staff_id', $id)->where('date', $todayDate)->get();
        if( !$staffAttendance->isEmpty() ) {
        	$check_in 	= $staffAttendance[0]->check_in;
        	$check_out 	= $staffAttendance[0]->check_out;
        }else{
        	$check_in 	= "";
        	$check_out 	= "";
        }

		if ( !empty($id) && !$staffDetail->isEmpty() ) {
			$response = array(
				"status" 	=> 1,
				"data" 		=> $staffDetail,
				"check_in" 	=> $check_in,
				"check_out" => $check_out,
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
		
		$partner_id 	= Auth::user()->id;
		$staff 			= Staff::where('partner_id', $partner_id);
		$staffAttendance 	= $staff->select(['staff.staff_id', 'staff.user_id', 'users.name', 'users.email', 'users.phone', 'staff_attendance.date', 'staff_attendance.check_in', 'staff_attendance.check_out'])
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->leftJoin('staff_attendance', 'staff_attendance.staff_id', '=', 'staff.user_id')
                ->orderBy('staff.staff_id', 'DESC')
            	->whereBetween('staff_attendance.date', [$start_date, $end_date])
                ->get();
        $html = "";
		if ( !$staffAttendance->isEmpty() ) {
			foreach($staffAttendance as $key => $value){
				$date = $value->date; 
				$formatted_date = date("d M, D", strtotime($date));
				$ts1 = strtotime($value->check_in);
				$ts2 = strtotime($value->check_out);    
				if($ts1 && $ts2){
					$seconds_diff = $ts2 - $ts1;                            
					$time = ($seconds_diff/3600)." hr";
				}else{
					$time = "NA";
				}

				$html.= '<tr class="staff_'.$value->user_id.'">
				<td>'.$value->name.'</td>
				<td>'.$formatted_date.'</td>
				<td>'.$value->check_in.'</td>
				<td>'.$value->check_out.'</td>
				<td>'.$time.'</td>
				</tr>';
			}
			$response = array(
				"status" 	=> 1,
				"data" 		=> $html,
			);
		}else{
			$html = '<tr>
			<td colspan="5">No Data Found.</td>
			</tr>';
			$response = array(
				"status" 	=> 0,
				"data" 		=> $html,
				"message" 	=> "Data not found",
			);
		}
		
		echo json_encode($response);
	}

	public function attendanceAnalytics($start_date, $end_date)
	{
		
		$partner_id 	= Auth::user()->id;
		$staff 			= Staff::where('partner_id', $partner_id);
		$apexStaffAttendance 	= $staff->select(['staff.staff_id', 'staff.user_id', 'users.name', 'users.email', 'users.phone', 'staff_attendance.date', 'staff_attendance.check_in', 'staff_attendance.check_out'])
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->leftJoin('staff_attendance', 'staff_attendance.staff_id', '=', 'staff.user_id')
                ->orderBy('staff_attendance.sa_id', 'DESC')
            	->whereBetween('staff_attendance.date', [$start_date, $end_date])
                ->get();

        $html = "";
		if ( !$apexStaffAttendance->isEmpty() ) {
			$apexCart = "";
			foreach ($apexStaffAttendance as $key => $value) {
				$ts1 = strtotime($value['check_in']);
				$ts2 = strtotime($value['check_out']);    
				if($ts1 && $ts2){
					$seconds_diff = $ts2 - $ts1;                            
					$time = ($seconds_diff/3600);
				}else{
					$time = 0;
				}
				$staffdata[$value['name']][] = $time;

				$apexCart = $staffdata;
			}
			$apexChartArray = array();
			$apexChartAvgArray = array();

			foreach ($apexCart as $sumkey => $apexChartArr) {
				$sum = array_sum($apexChartArr);
				$apexChartArray[$sumkey] = $sum;

				$average = array_sum($apexChartArr) / count($apexChartArr);
				$apexChartAvgArray[$sumkey] = $average;
			}
			
			$response = array(
				"status" 			=> 1,
				"apexChartArray" 	=> $apexChartArray,
				"apexChartAvgArray" => $apexChartAvgArray,
			);
		}else{
			$response = array(
				"status" 		=> 0,
				"message" 		=> "No data found.",
			);
		}
		
		echo json_encode($response);
	}
}
