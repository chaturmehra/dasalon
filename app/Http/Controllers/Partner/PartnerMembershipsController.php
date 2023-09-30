<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner\Venue;
use App\Models\Partner\VenueMeta;
use App\Models\Partner\PartnerMemberships;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;

class PartnerMembershipsController extends Controller
{
    public function index()
    {
    	
    	$title             = "Dasalon :: Memberships";
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

        $membershipLists 	= $this->PartnerMembershipsLists($partner_id);
        
		$partner_country_config = getPartnerCountryConfig($partner_id);

        return view('partner/services/memberships/index', compact('title', 'meta_description', 'meta_keywords', 'membershipLists', 'partner_country_config', 'venue_data_arr'));
    }

    public function membershipsStore(Request $request)
	{
		$partner_id = Auth::user()->id;
		$validator = Validator::make($request->all(), [
            'membership_name'      	=> 'required|unique:partner_memberships',
            'venues'        		=> 'required',
            'validity'      		=> 'required',
            'total_value'   		=> 'required|integer',
            'membership_price'    	=> 'required|integer',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

		$venues = "";
		if ( !empty($request['venues']) ) {
			$venues = implode(',', $request['venues']);
		}

		$PartnerMemberships = PartnerMemberships::create([
			'partner_id'      	=> $partner_id,
			'membership_name'   => $request->membership_name,
			'venues'     		=> $venues,
			'membership_color'  => $request->membership_color,
			'validity'    		=> $request->validity,
			'total_value' 		=> $request->total_value,
			'membership_price'  => $request->membership_price,
			'description' 		=> $request->membership_description,
			'status'      		=> isset($request->membership_status) ? 1 : 0,
		]);

		return redirect()->back()->with('success', 'Partner membership created successfully.');
	}

    public function membershipsUpdate(Request $request)
	{
		$partner_id = Auth::user()->id;
		$validator = Validator::make($request->all(), [
            'venues'        		=> 'required',
            'validity'      		=> 'required',
            'total_value'   		=> 'required|integer',
            'membership_price'    	=> 'required|integer',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

		$venues = "";
		if ( !empty($request['venues']) ) {
			$venues = implode(',', $request['venues']);
		}

		$PartnerMemberships = PartnerMemberships::where('pm_id', $request->pm_id)->update([
			'partner_id'      	=> $partner_id,
			'venues'     		=> $venues,
			'validity'    		=> $request->validity,
			'total_value' 		=> $request->total_value,
			'membership_price'  => $request->membership_price,
		]);

		return redirect()->back()->with('success', 'Partner membership updated successfully.');
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

    public function PartnerMembershipsLists($partner_id)
    {
    	$partnerMemberships = PartnerMemberships::where('partner_id', $partner_id)->get();
    	
    	return $partnerMemberships;
    }

    public function changemembershipsStatus($id,$status){
		$statusupdate = PartnerMemberships::where('pm_id', $id)->update([
			'status' => $status,
		]);

		return true;
	}

	public function getmembershipsDetailById($pm_id)
	{
    	$PartnerMembershipsLists = PartnerMemberships::where('pm_id', $pm_id)->get();

    	$partner_id 		= Auth::user()->id;

		if ( !empty($pm_id) && !$PartnerMembershipsLists->isEmpty() ) {

			$response = array(
				"status" 			=> 1,
				"data" 				=> $PartnerMembershipsLists,
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
