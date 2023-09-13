<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner\Staff;
use App\Models\Partner\StaffCommission;
use App\Models\Partner\Venue;
use App\Models\Partner\VenueMeta;
use App\Models\Admin\Role;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    public function index()
	{
		$title             = "Dasalon :: Staff";
		$meta_description  = "";
		$meta_keywords     = "";

		$partner_id 		= Auth::user()->id;

		$venues 			= Venue::where('partner_id', $partner_id)->get()->toArray();
		
		$venue_data_array 	= $this->array_by_ids($venues, "id");
		$venue_ids 			= array_column($venues, 'id');
		$venue_meta 		= $this->get_venue_meta_by_venue_ids($venue_ids);

		$venue_data_arr = [];
		if ( !empty($venue_data_array) ) {
			$i=0;
			foreach ($venue_data_array as $vkey => $venue_data) {
				$venue_id 			= $venue_data["id"];
				$venue_meta_data 	= $venue_meta[$venue_id];

				$venue_data["venue_meta"] = $venue_meta_data;
				$venue_data_arr[] = $venue_data;

				$i++;
			}
		}

		$roles 		= Role::where('status', 1)->get();

		$staff 		= Staff::where('partner_id', $partner_id);
		$getStaff 	= $staff->select(['staff.staff_id', 'staff.user_id', 'staff.partner_id', 'users.name', 'users.email', 'users.phone', 'users.is_active', 'staff.profile_image', 'role.role_name'])
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->leftJoin('role', 'role.id', '=', 'staff.staff_role')
                ->orderBy('staff.staff_id', 'DESC')
                ->get();

		return view('partner/staff/index', compact('title', 'meta_description', 'meta_keywords', 'venue_data_arr', 'roles', 'getStaff'));
	}

	public function store(Request $request)
	{
		$partner_id = Auth::user()->id;
		$validator = Validator::make($request->all(), [
            'name'  		=> 'required|max:30',
            'email'  		=> 'required|email|unique:users|max:100',
            'phone'         => 'required',
            'venues'        => 'required',
            'gender'        => 'required',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

		$staff = User::create([
			'name'      => $request->name,
			'email'     => $request->email,
			'phone'     => $request->phone,
			'is_active' => isset($request->staff_status) ? 1 : 0,
			'country'   => "",
			'role'      => 4,
		]);

		$monday_hours = $tuesday_hours = $wednesday_hours = $thursday_hours = $friday_hours = $saturday_hours = $sunday_hours = "";
		if( !empty($request['monday_hours']) ){
			if ( !empty($request['monday_hours']["'start'"][0]) || !empty($request['monday_hours']["'end'"][0])) {
				$monday_hours 		= json_encode($request['monday_hours']);
			}
		}
		if( !empty($request['tuesday_hours']) ){
			if ( !empty($request['tuesday_hours']["'start'"][0]) || !empty($request['tuesday_hours']["'end'"][0])) {
				$tuesday_hours 		= json_encode($request['tuesday_hours']);
			}
		}
		if( !empty($request['wednesday_hours']) ){
			if ( !empty($request['wednesday_hours']["'start'"][0]) || !empty($request['wednesday_hours']["'end'"][0])) {
				$wednesday_hours 	= json_encode($request['wednesday_hours']);
			}
		}
		if( !empty($request['thursday_hours']) ){
			if ( !empty($request['thursday_hours']["'start'"][0]) || !empty($request['thursday_hours']["'end'"][0])) {
				$thursday_hours 	= json_encode($request['thursday_hours']);
			}
		}
		if( !empty($request['friday_hours']) ){
			if ( !empty($request['friday_hours']["'start'"][0]) || !empty($request['friday_hours']["'end'"][0])) {
				$friday_hours 		= json_encode($request['friday_hours']);
			}
		}
		if( !empty($request['saturday_hours']) ){
			if ( !empty($request['saturday_hours']["'start'"][0]) || !empty($request['saturday_hours']["'end'"][0])) {
				$saturday_hours 	= json_encode($request['saturday_hours']);
			}
		}
		if( !empty($request['sunday_hours']) ){
			if ( !empty($request['sunday_hours']["'start'"][0]) || !empty($request['sunday_hours']["'end'"][0])) {
				$sunday_hours 		= json_encode($request['sunday_hours']);
			}
		}

		if ($request->hasFile('profile_image')) {
			$image = $request->file('profile_image');
			$profile_image = time().'_profile_image.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/staff');
			$image->move($destinationPath, $profile_image);
			$profile_image =  '/uploads/staff/'.$profile_image;
		}else{
			$profile_image = "";
		}
		$venues = "";
		$staff_working_days = "";
		if ( !empty($request['venues']) ) {
			$venues = implode(',', $request['venues']);
		}
		if ( !empty($request['staff_working_days']) ) {
			$staff_working_days = implode(',', $request['staff_working_days']);
		}

		$staff_id = Staff::create([
			'user_id'      			=> $staff->id,
			'partner_id'      		=> $partner_id,
			'gender'     			=> $request['gender'],
			'facebook'     			=> $request['facebook'],
			'instagram' 			=> $request['instagram'],
			'online_status'   		=> isset($request['online_status']) ? 1 : 0,
			'staff_role'      		=> $request['staff_role'],
			'profile_image'      	=> $profile_image,
			'profile_description'   => $request['profile_description'],
			'joining_date'     		=> $request['joining_date'],
			'venues'     			=> $venues,
			'staff_working_days' 	=> $staff_working_days,
			'staff_advance_setting' => isset($request['staff_advance_setting']) ? 1 : 0,
			'schedule_type'      	=> $request['schedule_type'],
			'start_date'      		=> $request['start_date'],
			'end_date'     			=> $request['end_date'],
			'end_date_type'     	=> $request['end_date_type'],
			'monday_hours'     		=> isset($monday_hours) ? $monday_hours : "",
			'tuesday_hours' 		=> isset($tuesday_hours) ? $tuesday_hours : "",
			'wednesday_hours'   	=> isset($wednesday_hours) ? $wednesday_hours : "",
			'thursday_hours'      	=> isset($thursday_hours) ? $thursday_hours : "",
			'friday_hours'      	=> isset($friday_hours) ? $friday_hours : "",
			'saturday_hours'     	=> isset($saturday_hours) ? $saturday_hours : "",
			'sunday_hours'     		=> isset($sunday_hours) ? $sunday_hours : "",
		]);

		if ( !empty($request['commission_data']) ) {
			$commission_data = json_decode($request['commission_data']);

			StaffCommission::create([
				'staff_id'      => $staff_id->staff_id,
				'service'      	=> $commission_data->add_service,
				'book_look'     => $commission_data->add_book_look,
				'package'     	=> $commission_data->add_package,
				'voucher'     	=> $commission_data->add_voucher,
				'membership' 	=> $commission_data->add_membership,
				'product' 		=> $commission_data->add_product,
			]);
			
		}
		return redirect()->back()->with('success', 'Staff created successfully.');
	}

	public function changeStaffStatus($id,$status){
		$statusupdate = User::where('id', $id)->update([
			'is_active' => $status,
		]);

		return true;
	}

	public function deleteStaff($id){
		User::where('id', $id)->delete();
		Staff::where('user_id', $id)->delete();
		
		return true;
	}

	public function viewStaff($id){
		$staff 		= Staff::where('user_id', $id);
		$getStaff 	= $staff->select(['staff.staff_id', 'staff.user_id', 'staff.partner_id', 'users.name', 'users.email', 'users.phone', 'users.is_active', 'staff.profile_image', 'role.role_name', 'staff.gender', 'staff.facebook', 'staff.instagram', 'staff.profile_description', 'staff.joining_date', 'staff.staff_working_days'])
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->leftJoin('role', 'role.id', '=', 'Staff.staff_role')
                ->orderBy('staff.staff_id', 'DESC')
                ->get();
        if ( !empty($getStaff) ) {
        	$response = array(
        		"status" 	=> 1,
        		"data" 		=> $getStaff,
        	);
        }else{
        	$response = array(
        		"status" 	=> 0,
        		"message" 	=> "No data found",
        	);
        }
        
		
		echo json_encode($response);
	}

	public function getCommissionByStaffId($staff_id){
		$staffCommission = StaffCommission::where('staff_id', $staff_id)->get();
        if ( !$staffCommission->isEmpty() ) {
        	$response = array(
        		"status" 	=> 1,
        		"data" 		=> $staffCommission,
        	);
        }else{
        	$response = array(
        		"status" 	=> 0,
        		"message" 	=> "No data found",
        	);
        }
        
		
		echo json_encode($response);
	}

	public function updateStaff(Request $request)
	{
		$user_id 	= $request->user_id;
		$staff_id 	= $request->staff_id;
		
		$partner_id = Auth::user()->id;
		$validator = Validator::make($request->all(), [
            'name'  		=> 'required|max:30',
            'email'  		=> 'required|email|max:100',
            'phone'         => 'required',
            'venues'        => 'required',
            'gender'        => 'required',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

		User::where('id', $user_id)->update([
			'name'      => $request->name,
			'email'     => $request->email,
			'phone'     => $request->phone,
			'is_active' => isset($request->staff_status) ? 1 : 0,
			'country'   => "",
		]);

		$monday_hours = $tuesday_hours = $wednesday_hours = $thursday_hours = $friday_hours = $saturday_hours = $sunday_hours = "";
		if( !empty($request['monday_hours']) ){
			if ( !empty($request['monday_hours']["'start'"][0]) || !empty($request['monday_hours']["'end'"][0])) {
				$monday_hours 		= json_encode($request['monday_hours']);
			}
		}
		if( !empty($request['tuesday_hours']) ){
			if ( !empty($request['tuesday_hours']["'start'"][0]) || !empty($request['tuesday_hours']["'end'"][0])) {
				$tuesday_hours 		= json_encode($request['tuesday_hours']);
			}
		}
		if( !empty($request['wednesday_hours']) ){
			if ( !empty($request['wednesday_hours']["'start'"][0]) || !empty($request['wednesday_hours']["'end'"][0])) {
				$wednesday_hours 	= json_encode($request['wednesday_hours']);
			}
		}
		if( !empty($request['thursday_hours']) ){
			if ( !empty($request['thursday_hours']["'start'"][0]) || !empty($request['thursday_hours']["'end'"][0])) {
				$thursday_hours 	= json_encode($request['thursday_hours']);
			}
		}
		if( !empty($request['friday_hours']) ){
			if ( !empty($request['friday_hours']["'start'"][0]) || !empty($request['friday_hours']["'end'"][0])) {
				$friday_hours 		= json_encode($request['friday_hours']);
			}
		}
		if( !empty($request['saturday_hours']) ){
			if ( !empty($request['saturday_hours']["'start'"][0]) || !empty($request['saturday_hours']["'end'"][0])) {
				$saturday_hours 	= json_encode($request['saturday_hours']);
			}
		}
		if( !empty($request['sunday_hours']) ){
			if ( !empty($request['sunday_hours']["'start'"][0]) || !empty($request['sunday_hours']["'end'"][0])) {
				$sunday_hours 		= json_encode($request['sunday_hours']);
			}
		}

		if ($request->hasFile('profile_image')) {
			$image = $request->file('profile_image');
			$profile_image = time().'_profile_image.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/staff');
			$image->move($destinationPath, $profile_image);
			$profile_image =  '/uploads/staff/'.$profile_image;
		}else{
			$old_profile_image = $request['old_profile_image'];
			if ($old_profile_image) {
				$profile_image = $old_profile_image;
			}else{
				$profile_image = "";
			}
		}
		$venues = "";
		$staff_working_days = "";
		if ( !empty($request['venues']) ) {
			$venues = implode(',', $request['venues']);
		}
		if ( !empty($request['staff_working_days']) ) {
			$staff_working_days = implode(',', $request['staff_working_days']);
		}

		Staff::where('user_id', $user_id)->update([
			'partner_id'      		=> $partner_id,
			'gender'     			=> $request['gender'],
			'facebook'     			=> $request['facebook'],
			'instagram' 			=> $request['instagram'],
			'online_status'   		=> isset($request['online_status']) ? 1 : 0,
			'staff_role'      		=> $request['staff_role'],
			'profile_image'      	=> $profile_image,
			'profile_description'   => $request['profile_description'],
			'joining_date'     		=> $request['joining_date'],
			'venues'     			=> $venues,
			'staff_working_days' 	=> $staff_working_days,
			'staff_advance_setting' => isset($request['staff_advance_setting']) ? 1 : 0,
			'schedule_type'      	=> $request['schedule_type'],
			'start_date'      		=> $request['start_date'],
			'end_date'     			=> $request['end_date'],
			'end_date_type'     	=> $request['end_date_type'],
			'monday_hours'     		=> isset($monday_hours) ? $monday_hours : "",
			'tuesday_hours' 		=> isset($tuesday_hours) ? $tuesday_hours : "",
			'wednesday_hours'   	=> isset($wednesday_hours) ? $wednesday_hours : "",
			'thursday_hours'      	=> isset($thursday_hours) ? $thursday_hours : "",
			'friday_hours'      	=> isset($friday_hours) ? $friday_hours : "",
			'saturday_hours'     	=> isset($saturday_hours) ? $saturday_hours : "",
			'sunday_hours'     		=> isset($sunday_hours) ? $sunday_hours : "",
		]);

		if ( !empty($request['commission_data']) ) {
			$commission_data = json_decode($request['commission_data']);

			$staffCommission = StaffCommission::where('staff_id', $staff_id)->get()->toArray();
			if ( !empty($staffCommission) ) {
				StaffCommission::where('staff_id', $staff_id)->update([
					'service'      	=> $commission_data->edit_service,
					'book_look'     => $commission_data->edit_book_look,
					'package'     	=> $commission_data->edit_package,
					'voucher'     	=> $commission_data->edit_voucher,
					'membership' 	=> $commission_data->edit_membership,
					'product' 		=> $commission_data->edit_product,
				]);
			}else{
				StaffCommission::create([
					'staff_id'      => $staff_id,
					'service'      	=> $commission_data->edit_service,
					'book_look'     => $commission_data->edit_book_look,
					'package'     	=> $commission_data->edit_package,
					'voucher'     	=> $commission_data->edit_voucher,
					'membership' 	=> $commission_data->edit_membership,
					'product' 		=> $commission_data->edit_product,
				]);
			}
			
		}

		return redirect()->back()->with('success', 'Staff updated successfully.');
	}

	public function getStaffDetailById($id)
	{
		$staff 		= Staff::where('user_id', $id);
		$getStaff 	= $staff->select('*')
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->get();

		if ( !empty($id) && !empty($getStaff) ) {
			$response = array(
				"status" 	=> 1,
				"data" 		=> $getStaff,
			);
		}else{
			$response = array(
				"status" 	=> 0,
				"message" 	=> "Data not found",
			);
		}
		
		echo json_encode($response);
	}

	public function array_by_ids($array, $column, $multi_arr=false)
	{
		$formatted_arr = [];
		if ( !empty($array) ) {
			foreach ($array as $key => $arr) {
				if ($multi_arr) {
					$formatted_arr[$arr[$column]][] = $arr; 
				}else{
					$formatted_arr[$arr[$column]] = $arr; 
				}
			}
		}

		return $formatted_arr;
	}

	public function get_venue_meta_by_venue_ids($venue_ids){
		$venue_meta = VenueMeta::whereIn("venue_id", $venue_ids)->get();
		$vanue_meta_data = [];
		foreach ($venue_meta as $key => $meta) { 
			$vanue_meta_data[$meta["venue_id"]][$meta["meta_key"]] = $meta["meta_value"];
		}
		return $vanue_meta_data;
	}
}
