<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner\Staff;
use App\Models\Partner\Venue;
use App\Models\Partner\VenueMeta;
use App\Models\Partner\PartnerPackages;
use App\Models\Partner\PartnerService;
use App\Models\Admin\Service;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;

class PartnerPackagesController extends Controller
{
    public function index()
    {
    	
    	$title             = "Dasalon :: Packages";
		$meta_description  = "";
		$meta_keywords     = "";

		$partner_id 		= Auth::user()->id;

		$staff 		= Staff::where('partner_id', $partner_id);
		$getStaff 	= $staff->select(['staff.staff_id', 'staff.user_id', 'staff.partner_id', 'users.name', 'staff.profile_image'])
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->orderBy('staff.staff_id', 'DESC')
                ->get();

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

        $packageLists 	= $this->partnerPackagesLists($partner_id);
        
		$partner_country_config = getPartnerCountryConfig($partner_id);

        return view('partner/services/packages/index', compact('title', 'meta_description', 'meta_keywords', 'getStaff', 'venue_data_arr', 'partnerServicesArr', 'packageLists', 'partner_country_config'));
    }

    public function packagesStore(Request $request)
	{
		$partner_id = Auth::user()->id;
		$validator = Validator::make($request->all(), [
            'package_name'      => 'required|unique:partner_packages',
            'venues'        	=> 'required',
            'gender_option'     => 'required',
            'walk_in_price'     => 'nullable|integer|gt:online_price',
            'online_price'      => 'nullable|integer|gt:off_peak_price',
            'off_peak_price'    => 'required|integer|lt:online_price',
            'duration'    		=> 'required',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $staff_pricing = "";
		if( !empty($request['kt_ecommerce_add_packages_conditions']) ){
			if ( !empty($request['kt_ecommerce_add_packages_conditions'][0]['staff_id']) || !empty($request['kt_ecommerce_add_packages_conditions'][0]['online_price']) || !empty($request['kt_ecommerce_add_packages_conditions'][0]['off_peak_price']) ) {
				$staff_pricing 		= json_encode($request['kt_ecommerce_add_packages_conditions']);
			}
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

		$PartnerPackages = PartnerPackages::create([
			'partner_id'      	=> $partner_id,
			'package_name'     	=> $request->package_name,
			'service_ids'     	=> $service_ids,
			'venues'     		=> $venues,
			'gender'      		=> $request->gender_option,
			'duration'     		=> $request->duration,
			'total_price'     	=> $request->total_price,
			'total_duration'    => $request->total_duration,
			'walk_in_price'     => $request->walk_in_price,
			'online_price'     	=> $request->online_price,
			'off_peak_price'    => $request->off_peak_price,
			'description' 		=> $request->description,
			'staff_pricing'   	=> isset($staff_pricing) ? $staff_pricing : "",
			'status'      		=> isset($request->service_status) ? 1 : 0,
		]);

		return redirect()->back()->with('success', 'Partner package created successfully.');
	}

    public function packagesUpdate(Request $request)
	{
		$partner_id = Auth::user()->id;
		$validator = Validator::make($request->all(), [
            'venues'        	=> 'required',
            'gender_option'     => 'required',
            'walk_in_price'     => 'nullable|integer|gt:online_price',
            'online_price'      => 'nullable|integer|gt:off_peak_price',
            'off_peak_price'    => 'required|integer|lt:online_price',
            'duration'    		=> 'required',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // echo "<pre>"; print_r($request->all()); die;
        if( !empty($request['kt_ecommerce_edit_booklook_conditions']) ){
			if ( !empty($request['kt_ecommerce_edit_booklook_conditions'][0]['staff_id']) || !empty($request['kt_ecommerce_edit_booklook_conditions'][0]['online_price']) || !empty($request['kt_ecommerce_edit_booklook_conditions'][0]['off_peak_price']) ) {
				$staff_pricing 		= json_encode($request['kt_ecommerce_edit_booklook_conditions']);
			}
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

		$PartnerPackages = PartnerPackages::where('pp_id', $request->pp_id)->update([
			'partner_id'      	=> $partner_id,
			'venues'     		=> $venues,
			'service_ids'     	=> $service_ids,
			'gender'      		=> $request->gender_option,
			'duration'     		=> $request->duration,
			'walk_in_price'     => $request->walk_in_price,
			'online_price'     	=> $request->online_price,
			'off_peak_price'    => $request->off_peak_price,
			'staff_pricing'   	=> isset($staff_pricing) ? $staff_pricing : "",
		]);

		return redirect()->back()->with('success', 'Partner package updated successfully.');
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

    public function partnerPackagesLists($partner_id)
    {
    	//\DB::enableQueryLog();
    	$PartnerPackages = PartnerPackages::where('partner_id', $partner_id);
    	$PartnerPackagessLists	= $PartnerPackages->select('partner_packages.*', 'services.servicename')
    		->leftJoin('services', 'services.serviceid', '=', 'partner_packages.service_ids')
	    	->orderBy('partner_packages.pp_id', 'DESC')
	    	->get();
    	
	    //$results = DB::select("SELECT partner_packages.*, GROUP_CONCAT(`services`.`servicename`) AS service_name FROM partner_packages LEFT JOIN services ON FIND_IN_SET(`services`.`serviceid`,`partner_packages`.`service_ids`) > 0 WHERE `partner_packages`.`partner_id` = ".$partner_id." GROUP BY `partner_packages`.`pp_id`" );
	  

	    /*$PartnerPackagessLists	= $PartnerPackages->select("partner_packages.*",\DB::raw("GROUP_CONCAT(services.servicename) as service_name"))
	    	->leftjoin("services",\DB::raw("FIND_IN_SET(services.serviceid,partner_packages.service_ids)"),">",\DB::raw("'0'"))
	    	//->leftJoin('services', 'services.serviceid', '=', 'partner_packages.service_ids')
	    	->orderBy('partner_packages.pp_id', 'DESC')
	    	->get();*/

	    /*$PartnerPackagessLists = \DB::table('partner_packages')
            ->select('partner_packages.*', \DB::raw( 'GROUP_CONCAT(services.servicename) as service_name') )
            ->leftjoin( 'services', \DB::raw( 'FIND_IN_SET(services.serviceid,partner_packages.service_ids)' ), DB::raw(">"), \DB::raw("'0'") )
            //->leftJoin('services', 'services.serviceid', '=', 'partner_packages.service_ids')
            ->where('partner_packages.partner_id', $partner_id)
            ->groupBy('partner_packages.pp_id')
            ->get();*/


        //$PartnerPackagessLists = DB::select("SELECT `partner_packages`.*, GROUP_CONCAT(services.servicename) AS service_name FROM `partner_packages` LEFT JOIN  `services` ON FIND_IN_SET(services.serviceid, partner_packages.service_ids) > 0 WHERE  `partner_packages`.`partner_id` = 26 GROUP BY `partner_packages`.`pp_id`, `partner_packages`.`partner_id` ");

		/*$query = DB::getQueryLog();
		dd($query);*/
    	return $PartnerPackagessLists;
    }

    public function changePackagesStatus($id,$status){
		$statusupdate = PartnerPackages::where('pp_id', $id)->update([
			'status' => $status,
		]);

		return true;
	}

	public function getPackagesDetailById($pp_id)
	{
    	$PartnerPackages = PartnerPackages::where('pp_id', $pp_id);
    	$partnerPackagesLists	= $PartnerPackages->select(['partner_packages.*', 'services.servicename'])
	    	->leftJoin('services', 'services.serviceid', '=', 'partner_packages.service_ids')
	    	->get();

    	$partner_id 		= Auth::user()->id;

    	$staff 		= Staff::where('partner_id', $partner_id);
    	$getStaff 	= $staff->select(['staff.staff_id', 'staff.user_id', 'staff.partner_id', 'users.name', 'staff.profile_image'])
    	->leftJoin('users', 'users.id', '=', 'staff.user_id')
    	->orderBy('staff.staff_id', 'DESC')
    	->get();

		if ( !empty($pp_id) && !$partnerPackagesLists->isEmpty() ) {
			$staff_pricing = $partnerPackagesLists[0]->staff_pricing;
			$service_ids = $partnerPackagesLists[0]->service_ids;
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
			$staff_pricing_html = "";
			if ($staff_pricing) {
				$json_data = json_decode($staff_pricing);
				if ( !empty($json_data) ) {
					foreach($json_data as $key => $value){

						$staff_id = $value->staff_id;
						$staff_pricing_html.= '<div data-repeater-item="" class="form-group d-flex align-items-end gap-5"><div class="row mt-7"><div class="col-sm-4">
                        <label class="required fw-semibold fs-6 mb-2">Staff</label>
                        <div class="form-floating border rounded">
                          <select class="form-select form-select-transparent kt_docs_select2_users" data-placeholder="Select an option" name="kt_ecommerce_edit_booklook_conditions['.$key.'][staff_id]">
                            <option></option>';
                            if( !empty($getStaff) ){
	                            foreach($getStaff as $staff){
	                            	$selected = ($staff->user_id == $staff_id) ? 'selected' : '';
		                            if($staff->profile_image){
		                              $path = asset('/public'.$staff->profile_image);
		                            }else{
		                              $path = asset('/public/partner/assets/media/avatars/blank.png');
		                            }
	                            	$staff_pricing_html.= '<option value="'.$staff->user_id.'" data-kt-select2-user="'.$path.'" '.$selected.'>'.$staff->name.'</option>';
	                            }
                            }
                          $staff_pricing_html.= '</select>
                        </div>
                      </div>  

                      <div class="col-sm-4">
                        <div class="d-flex flex-column gap-1">
                          <label class="fw-semibold fs-6 mb-2">Online Price</label>
                          <div class="input-group mb-0">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="kt_ecommerce_edit_booklook_conditions['.$key.'][online_price]" value="'.$value->online_price.'"/>
                            <span class="input-group-text">.00</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="d-flex flex-column gap-1">
                          <label class="fw-semibold fs-6 mb-2">Off Peak Price</label>
                          <div class="input-group mb-0">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="kt_ecommerce_edit_booklook_conditions['.$key.'][off_peak_price]" value="'.$value->off_peak_price.'"/>
                            <span class="input-group-text">.00</span>
                          </div>
                        </div>
                      </div></div><button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                      <i class="ki-duotone ki-cross fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </button>
                  </div>';
					}
				}
			}

			$response = array(
				"status" 			=> 1,
				"data" 				=> $partnerPackagesLists,
				"staff_pricing" 	=> $staff_pricing_html,
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
