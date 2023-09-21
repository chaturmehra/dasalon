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
		$staffLeave = $staff->select(['staff.staff_id', 'staff.user_id', 'users.name', 'users.email', 'users.phone', 'staff_leave.start', 'staff_leave.end', 'staff_leave.leave_remarks', 'staff_leave.leave_status', 'staff.profile_image', 'staff_leave.sl_id'])
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->leftJoin('staff_leave', 'staff_leave.staff_id', '=', 'staff.user_id')
                ->orderBy('staff.staff_id', 'DESC')
                ->where('users.is_active', 1)
                ->where('staff_leave.start', '!=', NULL)
                ->get();

        $getTakenLeave    = $this->getAllLeaveCount($partner_id, '<=');
        $getPlannedLeave  = $this->getAllLeaveCount($partner_id, '>=');

        $countTakenLeave    = $this->allLeaveCount($getTakenLeave);
        $countPlannedLeave  = $this->allLeaveCount($getPlannedLeave);
       
		return view('partner/staff/leave/index', compact('title', 'meta_description', 'meta_keywords', 'staffLeave', 'countTakenLeave', 'countPlannedLeave'));
	}

	public function storeLeave(Request $request)
	{

		$validator = Validator::make($request->all(), [
            'staff_id'  	=> 'required',
            'start_date'  	=> 'required|date',
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
        		'leave_status'     	=> 1,
        	]);

        	return redirect()->back()->with('success', 'Leave submitted successfully.');
        }else{
        	return redirect()->back()->with('error', 'Somthing went wrong. Please try again.');
        }
	}

    public function updateLeave(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'staff_id'      => 'required',
            'start_date'    => 'required|date',
            'end_date'      => 'required|date|after:start_date',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $sl_id = $request->staff_leave_id;
        if ( !empty($request->staff_leave_id) ) {
            StaffLeave::where('sl_id', $sl_id)->update([
                'staff_id'          => $request->staff_id,
                'start'             => $request->start_date,
                'end'               => $request->end_date,
                'leave_remarks'     => $request->leave_remarks,
            ]);

            return redirect()->back()->with('success', 'Leave updated successfully.');
        }else{
            return redirect()->back()->with('error', 'Somthing went wrong. Please try again.');
        }
    }

    public function getAllLeaveCount($partner_id, $type)
    {
        $staffLeave = Staff::where('partner_id', $partner_id)
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->leftJoin('staff_leave', 'staff_leave.staff_id', '=', 'staff.user_id')
                ->where('users.is_active', 1)
                ->where('staff_leave.start', $type, DATE(NOW()))
                ->get();

        return $staffLeave;
    }

    public function allLeaveCount($leaveType)
    {
        $totalLeave = [];
        if ( !$leaveType->isEmpty() ) {
            foreach ($leaveType as $key => $value) {
                $start_date = $value->start; 
                $start_end  = $value->end;
                $ts1 = strtotime($start_date);
                $ts2 = strtotime($start_end);    
                if($ts1 && $ts2){
                    $date_diff = $ts2 - $ts1;
                    $days = floor($date_diff / (60 * 60 * 24));

                    $totalLeave[] = $days;
                }
            }
        }
        if ($totalLeave) {
            $countLeave = array_sum($totalLeave);
        }else{
            $countLeave = 0;
        }

        return $countLeave; 
    }

    public function getLeaveStatusByStaffId($staff_id){

        $partner_id         = Auth::user()->id;
        if ($staff_id == "all") {
            $getTakenLeave    = $this->getAllLeaveCount($partner_id, '<=');
            $getPlannedLeave  = $this->getAllLeaveCount($partner_id, '>=');
        }else{
            $getTakenLeave    = $this->staffAllLeaveById($partner_id, $staff_id, '<=');
            $getPlannedLeave  = $this->staffAllLeaveById($partner_id, $staff_id, '>=');
        }

        $countTakenLeave    = $this->allLeaveCount($getTakenLeave);
        $countPlannedLeave  = $this->allLeaveCount($getPlannedLeave);
        
        $response = array(
            "status"             => 1,
            "countTakenLeave"    => $countTakenLeave,
            "countPlannedLeave"  => $countPlannedLeave,
        );

        echo json_encode($response);
    }

    public function leaveCancel($staff_leave_id){

        $status = StaffLeave::where("sl_id", $staff_leave_id)
            ->update([
                'leave_status'   => 0,
            ]);
        if ($status) {
            $response = array(
                "status"     => 1,
                "message"    => "Your have successfully cancel leave!.",
            );
        }else{
            $response = array(
                "status"     => 0,
                "message"    => "Somthing went wrong. Please try again.",
            );
        }

        echo json_encode($response);
    }

    public function getLeaveDetail($staff_id){

        $partner_id = Auth::user()->id;
        $staff      = Staff::where('partner_id', $partner_id);
        $staffLeave = $staff->select(['staff.staff_id', 'staff.user_id', 'users.name', 'users.email', 'users.phone', 'staff_leave.start', 'staff_leave.end', 'staff_leave.leave_remarks', 'staff_leave.leave_status', 'staff.profile_image'])
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->leftJoin('staff_leave', 'staff_leave.staff_id', '=', 'staff.user_id')
                ->orderBy('staff.staff_id', 'DESC')
                ->where('users.is_active', 1)
                ->where('staff_leave.sl_id', $staff_id)
                ->get();

        if ( !empty($staff_id) && !$staffLeave->isEmpty() ) {
            $response = array(
                "status"  => 1,
                "data"    => $staffLeave,
            );
        }else{
            $response = array(
                "status"    => 0,
                "message"   => "Data not found",
            );
        }
        echo json_encode($response);
    }

    public function staffAllLeaveById($partner_id, $staff_id, $type){

        $staffLeaveData = Staff::where('partner_id', $partner_id)
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->leftJoin('staff_leave', 'staff_leave.staff_id', '=', 'staff.user_id')
                ->where('users.is_active', 1)
                ->where('staff_leave.staff_id', $staff_id)
                ->where('staff_leave.start', $type, DATE(NOW()))
                ->get();

        return $staffLeaveData;
    }
}
