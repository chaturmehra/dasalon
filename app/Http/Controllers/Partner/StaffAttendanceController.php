<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Partner\Staff;
use Illuminate\Support\Facades\Auth;

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

		return view('partner/staff/attendance/index', compact('title', 'meta_description', 'meta_keywords', 'getStaff'));
	}
}
