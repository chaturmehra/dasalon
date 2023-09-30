<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner\Venue;
use App\Models\Partner\VenueMeta;
use App\Models\Partner\PartnerVouchers;
use App\Models\Partner\PartnerService;
use App\Models\Admin\Service;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;

class PartnerVouchersController extends Controller
{
    public function index()
    {
    	
    	$title             = "Dasalon :: Vouchers";
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

		$partnerServices = PartnerService::where('partner_id', $partner_id);
		$partnerServicesArr = $partnerServices->select(['services.servicename as name', 'partner_services.walk_in_price as walkin', 'partner_services.online_price as online', 'partner_services.off_peak_price as offpeak', 'partner_services.walk_in_price as price', 'partner_services.duration as time', 'partner_services.off_peak_price as duration'])
                ->leftJoin('services', 'services.serviceid', '=', 'partner_services.service_id')
                ->where('services.is_active', 1)
                ->get();

        $partnerServicesArr = json_encode($partnerServicesArr);

        $voucherLists 	= $this->partnervouchersLists($partner_id);
        
		$partner_country_config = getPartnerCountryConfig($partner_id);

        return view('partner/services/vouchers/index', compact('title', 'meta_description', 'meta_keywords', 'venue_data_arr', 'partnerServicesArr', 'voucherLists', 'partner_country_config'));
    }

    public function vouchersStore(Request $request)
	{
		$partner_id = Auth::user()->id;
		$validator = Validator::make($request->all(), [
            'voucher_name'      	=> 'required|unique:partner_vouchers',
            'venues'        		=> 'required',
            'gender_option'     	=> 'required',
            'number_session'     	=> 'required|integer',
            'validity'      		=> 'required',
            'total_service_value'   => 'required|integer',
            'voucher_price'    		=> 'required|integer',
            'duration'    			=> 'required',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

		$venues = "";
		if ( !empty($request['venues']) ) {
			$venues = implode(',', $request['venues']);
		}

		$service_json_val = $request->selected_services;
	
		if(!empty($service_json_val)){
			$service_ids 	= [];
			$json_data 		= json_decode($service_json_val, true);
			foreach ($json_data as $value) {

				$checkService 	= Service::where('servicename', $value["value"])->get();

				if( $checkService->isEmpty() ){
					$insertedID = Service::create([
						'categoryid' 	=> $request->category,
						'subcategoryid' => $request->sub_category,
						'servicename' 	=> $value["value"],
						'is_active' 	=> 1,
						'created_by' 	=> $partner_id,
					]);

					$service_ids[] = $insertedID->serviceid;
				}else{
					$check_service_id = isset($checkService[0]->serviceid) ? $checkService[0]->serviceid : "";
					$service_ids[]    = $check_service_id;
				}
			}
			$service_ids   = implode(',', $service_ids);
		}else{
			$service_ids   = '';
		}

		$Partnervouchers = Partnervouchers::create([
			'partner_id'      	=> $partner_id,
			'voucher_name'     	=> $request->voucher_name,
			'service_ids'     	=> $service_ids,
			'venues'     		=> $venues,
			'gender'      		=> $request->gender_option,
			'duration'     		=> $request->duration,
			'number_session'    => $request->number_session,
			'validity'    		=> $request->validity,
			'total_service_value' => $request->total_service_value,
			'voucher_price'    	=> $request->voucher_price,
			'description' 		=> $request->description,
			'status'      		=> isset($request->service_status) ? 1 : 0,
		]);

		return redirect()->back()->with('success', 'Partner voucher created successfully.');
	}

    public function vouchersUpdate(Request $request)
	{
		$partner_id = Auth::user()->id;
		$validator = Validator::make($request->all(), [
            'venues'        		=> 'required',
            'gender_option'     	=> 'required',
            'number_session'     	=> 'required|integer',
            'validity'      		=> 'required',
            'total_service_value'   => 'required|integer',
            'voucher_price'    		=> 'required|integer',
            'duration'    			=> 'required',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

		$venues = "";
		if ( !empty($request['venues']) ) {
			$venues = implode(',', $request['venues']);
		}


		$service_json_val = $request->selected_services;
	
		if(!empty($service_json_val)){
			$service_ids 	= [];
			$json_data 		= json_decode($service_json_val, true);
			foreach ($json_data as $value) {

				$checkService 	= Service::where('servicename', $value["value"])->get();

				if( $checkService->isEmpty() ){
					$insertedID = Service::create([
						'categoryid' 	=> $request->category,
						'subcategoryid' => $request->sub_category,
						'servicename' 	=> $value["value"],
						'is_active' 	=> 1,
						'created_by' 	=> $partner_id,
					]);

					$service_ids[] = $insertedID->serviceid;
				}else{
					$check_service_id = isset($checkService[0]->serviceid) ? $checkService[0]->serviceid : "";
					$service_ids[]    = $check_service_id;
				}
			}
			$service_ids   = implode(',', $service_ids);
		}else{
			$service_ids   = '';
		}

		$Partnervouchers = Partnervouchers::where('pv_id', $request->pv_id)->update([
			'partner_id'      	=> $partner_id,
			'venues'     		=> $venues,
			'service_ids'     	=> $service_ids,
			'gender'      		=> $request->gender_option,
			'duration'     		=> $request->duration,
			'number_session'    => $request->number_session,
			'validity'    		=> $request->validity,
			'total_service_value' => $request->total_service_value,
			'voucher_price'    	=> $request->voucher_price,
			'description' 		=> $request->description,
		]);

		return redirect()->back()->with('success', 'Partner voucher updated successfully.');
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

    public function partnervouchersLists($partner_id)
    {
    	$Partnervouchers = Partnervouchers::where('partner_id', $partner_id);
    	$partnervoucherssLists	= $Partnervouchers->select('partner_vouchers.*', 'services.servicename')
    		->leftJoin('services', 'services.serviceid', '=', 'partner_vouchers.service_ids')
	    	->orderBy('partner_vouchers.pv_id', 'DESC')
	    	->get();
    	
    	return $partnervoucherssLists;
    }

    public function changevouchersStatus($id,$status){
		$statusupdate = Partnervouchers::where('pv_id', $id)->update([
			'status' => $status,
		]);

		return true;
	}

	public function getvouchersDetailById($pv_id)
	{
    	$partnervouchers = Partnervouchers::where('pv_id', $pv_id);
    	$partnervouchersLists	= $partnervouchers->select(['partner_vouchers.*', 'services.servicename'])
	    	->leftJoin('services', 'services.serviceid', '=', 'partner_vouchers.service_ids')
	    	->get();

    	$partner_id 		= Auth::user()->id;

		if ( !empty($pv_id) && !$partnervouchersLists->isEmpty() ) {
			$service_ids = $partnervouchersLists[0]->service_ids;
			$serviceNameArr = [];
			if ( !empty($service_ids) ) {
				$service_ids = explode(',', $service_ids);
				foreach ($service_ids as $skey => $service_id) {
					$servicename 	= Service::where('serviceid', $service_id)->first()->servicename;
					$serviceNameArr[] = $servicename;
				}
			}
			if ($serviceNameArr) {
				$serviceNameArr = implode(',', $serviceNameArr);
			}

			$response = array(
				"status" 			=> 1,
				"data" 				=> $partnervouchersLists,
				"serviceNameArr" 	=> $serviceNameArr,
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
