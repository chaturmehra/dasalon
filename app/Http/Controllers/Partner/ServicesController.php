<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner\Staff;
use App\Models\Partner\Venue;
use App\Models\Partner\VenueMeta;
use App\Models\Partner\PartnerService;
use App\Models\Admin\ServiceCategory;
use App\Models\Admin\ServiceSubCategory;
use App\Models\Admin\Service;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class ServicesController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Services";
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

		$categories = ServiceCategory::where('is_active', '=', 1)->get();
		$subcategories = ServiceSubCategory::where('status', '=', 1)->get();

		$partnerVenueServicesLists 	= $this->partnerServicesLists($partner_id, 'at_venue');
		$partnerHomeServicesLists 	= $this->partnerServicesLists($partner_id, 'at_home');

        // echo "<pre>"; print_r($partnerServicesDet); die;

        return view('partner/services/index', compact('title', 'meta_description', 'meta_keywords', 'getStaff', 'venue_data_arr', 'categories', 'subcategories', 'partnerVenueServicesLists', 'partnerHomeServicesLists'));
    }

    public function serviceStore(Request $request)
	{
		$partner_id = Auth::user()->id;
		$validator = Validator::make($request->all(), [
            'category'  		=> 'required',
            'sub_category'  	=> 'required',
            'service_name'      => 'required',
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
		if( !empty($request['kt_ecommerce_add_category_conditions']) ){
			if ( !empty($request['kt_ecommerce_add_category_conditions'][0]['staff_id']) || !empty($request['kt_ecommerce_add_category_conditions'][0]['online_price']) || !empty($request['kt_ecommerce_add_category_conditions'][0]['off_peak_price']) ) {
				$staff_pricing 		= json_encode($request['kt_ecommerce_add_category_conditions']);
			}
		}else if( !empty($request['staff_pricing']) ){
			if ( !empty($request['staff_pricing']['staff_id'][0]) || !empty($request['kt_ecommerce_add_category_conditions']['online_price'][0]) || !empty($request['kt_ecommerce_add_category_conditions']['off_peak_price'][0]) ) {
				$staff_pricing 		= json_encode($request['staff_pricing']);
			}
		}

		$venues = "";
		if ( !empty($request['venues']) ) {
			$venues = implode(',', $request['venues']);
		}

		$service_json_val = $request->service_name;
		
		if(!empty($service_json_val)){
			$json_data = json_decode($service_json_val, true);
			
			$checkService 	= Service::where('servicename', $json_data[0]["value"])->get();
			if( $checkService->isEmpty() ) {
				$insertedID = Service::create([
					'categoryid' 	=> $request->category,
					'subcategoryid' => $request->sub_category,
					'servicename' 	=> $json_data[0]["value"],
					'is_active' 	=> 1,
					'created_by' 	=> $partner_id,
				]);

				$service_id = $insertedID->serviceid;

			}else{
				$check_service_id = isset($checkService[0]->serviceid) ? $checkService[0]->serviceid : "";
				$service_id    = $check_service_id;
			}
			
		}else{
			$service_id   = '';
		}

		$partnerService = PartnerService::create([
			'partner_id'      	=> $partner_id,
			'service_type'     	=> $request->service_type,
			'category_id'     	=> $request->category,
			'sub_category_id'   => $request->sub_category,
			'service_id'     	=> $service_id,
			'venues'     		=> $venues,
			'gender'      		=> $request->gender_option,
			'duration'     		=> $request->duration,
			'distance'     		=> $request->distance,
			'walk_in_price'     => $request->walk_in_price,
			'online_price'     	=> $request->online_price,
			'off_peak_price'    => $request->off_peak_price,
			'description' 		=> $request->description,
			'staff_pricing'   	=> $staff_pricing,
			'status'      		=> isset($request->service_status) ? 1 : 0,
		]);

		return redirect()->back()->with('success', 'Service created successfully.');
	}

    public function serviceUpdate(Request $request)
	{
		$partner_id = Auth::user()->id;
		$validator = Validator::make($request->all(), [
            'category'  		=> 'required',
            'sub_category'  	=> 'required',
            'service_name'      => 'required',
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
        
        if( !empty($request['kt_ecommerce_add_category_conditions']) ){
			if ( !empty($request['kt_ecommerce_add_category_conditions'][0]['staff_id']) || !empty($request['kt_ecommerce_add_category_conditions'][0]['online_price']) || !empty($request['kt_ecommerce_add_category_conditions'][0]['off_peak_price']) ) {
				$staff_pricing 		= json_encode($request['kt_ecommerce_add_category_conditions']);
			}
		}else if( !empty($request['staff_pricing']) ){
			if ( !empty($request['staff_pricing']['staff_id'][0]) || !empty($request['kt_ecommerce_add_category_conditions']['online_price'][0]) || !empty($request['kt_ecommerce_add_category_conditions']['off_peak_price'][0]) ) {
				$staff_pricing 		= json_encode($request['staff_pricing']);
			}
		}

		$venues = "";
		if ( !empty($request['venues']) ) {
			$venues = implode(',', $request['venues']);
		}

		$service_json_val = $request->service_name;
		
		if(!empty($service_json_val)){
			$json_data = json_decode($service_json_val, true);
			
			$checkService 	= Service::where('servicename', $json_data[0]["value"])->get();
			if( $checkService->isEmpty() ) {
				$insertedID = Service::create([
					'categoryid' 	=> $request->category,
					'subcategoryid' => $request->sub_category,
					'servicename' 	=> $json_data[0]["value"],
					'is_active' 	=> 1,
					'created_by' 	=> $partner_id,
				]);

				$service_id = $insertedID->serviceid;

			}else{
				$check_service_id = isset($checkService[0]->serviceid) ? $checkService[0]->serviceid : "";
				$service_id    = $check_service_id;
			}
		}else{
			$service_id   = '';
		}

		$partnerService = PartnerService::where('ps_id', $request->ps_id)->update([
			'partner_id'      	=> $partner_id,
			'service_type'     	=> $request->service_type,
			'category_id'     	=> $request->category,
			'sub_category_id'   => $request->sub_category,
			'service_id'     	=> $service_id,
			'venues'     		=> $venues,
			'gender'      		=> $request->gender_option,
			'duration'     		=> $request->duration,
			'distance'     		=> $request->distance,
			'walk_in_price'     => $request->walk_in_price,
			'online_price'     	=> $request->online_price,
			'off_peak_price'    => $request->off_peak_price,
			'description' 		=> $request->description,
			'staff_pricing'   	=> $staff_pricing,
			'status'      		=> isset($request->service_status) ? 1 : 0,
		]);

		return redirect()->back()->with('success', 'Service updated successfully.');
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

	public function getServiceSubcategoryByAjax($category_id){

        $getSubcategory = ServiceSubCategory::where('categoryid','=',$category_id)->where('status', '=', 1)->orderBy('servicesubcategoryid','asc')->get();
        $html = "<option></option>";
        foreach ($getSubcategory as $subcategory) {
            $html .= '<option value="'.$subcategory->servicesubcategoryid.'">'.$subcategory->servicesubcategory.'</option>';
        }
        echo $html;
    }

	public function getOnlinePrice($id){

        $getSubcategory = PartnerService::where('ps_id','=',$id)->get();
        
        if ( !empty($id) && !$getSubcategory->isEmpty() ) {
        	$online_price 	= $getSubcategory[0]['online_price'];
        	$staff_pricing 	= $getSubcategory[0]['staff_pricing'];

        	$json_data = "";
        	if ( !empty($staff_pricing) ) {
        		$json_data = json_decode($staff_pricing);
        	}
        	$html = '<tr>
        	<td>Normal</td>
        	<td>'.$online_price.'</td>
        	</tr>';
        	if ( !empty($json_data) ) {
	        	foreach($json_data as $key => $value){

	        		$staffName = User::where('id', $value->staff_id)->first(['name'])->name;

	        		$html.= '<tr>
	        		<td>'.$staffName.'</td>
	        		<td>
	        		<div class="input-group mb-5">
	        		<span class="input-group-text">$</span>
	        		<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="'.$value->online_price.'" disabled />
	        		<span class="input-group-text">.00</span>
	        		</div>
	        		</td>
	        		</tr>';
	        	}
        	}

        	$response = array(
        		"status" 	=> 1,
        		"data" 		=> $html,
        	);
        }else{
        	$response = array(
        		"status" 	=> 0,
        		"message" 	=> "Data not found",
        	);
        }

        echo json_encode($response);
    }

	public function getOffPeakPrice($id){

        $getSubcategory = PartnerService::where('ps_id','=',$id)->get();
        
        if ( !empty($id) && !$getSubcategory->isEmpty() ) {
        	$off_peak_price = $getSubcategory[0]['off_peak_price'];
        	$staff_pricing 	= $getSubcategory[0]['staff_pricing'];

        	$json_data = "";
        	if ( !empty($staff_pricing) ) {
        		$json_data = json_decode($staff_pricing);
        	}

        	$html = '<tr>
        	<td>Normal</td>
        	<td>'.$off_peak_price.'</td>
        	</tr>';
        	if ( !empty($json_data) ) {
	        	foreach($json_data as $key => $value){
	        		$staffName = User::where('id', $value->staff_id)->first(['name'])->name;
	        		
	        		$html.= '<tr>
	        		<td>'.$staffName.'</td>
	        		<td>
	        		<div class="input-group mb-5">
	        		<span class="input-group-text">$</span>
	        		<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="'.$value->off_peak_price.'" disabled />
	        		<span class="input-group-text">.00</span>
	        		</div>
	        		</td>
	        		</tr>';
	        	}
        	}

        	$response = array(
        		"status" 	=> 1,
        		"data" 		=> $html,
        	);
        }else{
        	$response = array(
        		"status" 	=> 0,
        		"message" 	=> "Data not found",
        	);
        }

        echo json_encode($response);
    }

    public function partnerServicesLists($partner_id, $service_type)
    {
    	$partnerServices = PartnerService::where('partner_id', $partner_id);
    	$partnerServicesLists	= $partnerServices->select(['partner_services.ps_id', 'partner_services.gender', 'partner_services.walk_in_price', 'partner_services.online_price', 'partner_services.off_peak_price', 'partner_services.status', 'partner_services.description', 'partner_services.duration', 'service_categories.category', 'service_categories.icon', 'service_sub_categories.servicesubcategory', 'services.servicename', 'partner_services.distance'])
	    	->leftJoin('services', 'services.serviceid', '=', 'partner_services.service_id')
	    	->leftJoin('service_categories', 'service_categories.id', '=', 'partner_services.category_id')
	    	->leftJoin('service_sub_categories', 'service_sub_categories.servicesubcategoryid', '=', 'partner_services.sub_category_id')
	    	->orderBy('partner_services.ps_id', 'DESC')
	    	->where('service_type', $service_type)
	    	->get();

    	return $partnerServicesLists;
    }

    public function changeServiceStatus($id,$status){
		$statusupdate = PartnerService::where('ps_id', $id)->update([
			'status' => $status,
		]);

		return true;
	}

	public function getServiceDetailById($ps_id)
	{
    	//$partnerServicesLists	= PartnerService::where('ps_id', $id)->get();

    	$partnerServices = PartnerService::where('ps_id', $ps_id);
    	$partnerServicesLists	= $partnerServices->select(['partner_services.*', 'services.servicename'])
	    	->leftJoin('services', 'services.serviceid', '=', 'partner_services.service_id')
	    	->get();

    	$partner_id 		= Auth::user()->id;

    	$staff 		= Staff::where('partner_id', $partner_id);
    	$getStaff 	= $staff->select(['staff.staff_id', 'staff.user_id', 'staff.partner_id', 'users.name', 'staff.profile_image'])
    	->leftJoin('users', 'users.id', '=', 'staff.user_id')
    	->orderBy('staff.staff_id', 'DESC')
    	->get();

		if ( !empty($ps_id) && !$partnerServicesLists->isEmpty() ) {
			$staff_pricing = $partnerServicesLists[0]->staff_pricing;
			$staff_pricing_html = "";
			if ($staff_pricing) {
				$json_data = json_decode($staff_pricing);
				if ( !empty($json_data) ) {
					foreach($json_data as $key => $value){
						// echo "<pre>"; print_r($value); die;
						$staff_id = $value->staff_id;
						$staff_pricing_html.= '<div class="col-sm-4">
                        <label class="required fw-semibold fs-6 mb-2">Staff</label>
                        <div class="form-floating border rounded">
                          <select class="form-select form-select-transparent kt_docs_select2_users" data-placeholder="Select an option" name="staff_pricing[staff_id][]">
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
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="staff_pricing[online_price][]" value="'.$value->online_price.'"/>
                            <span class="input-group-text">.00</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="d-flex flex-column gap-1">
                          <label class="fw-semibold fs-6 mb-2">Off Peak Price</label>
                          <div class="input-group mb-0">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="staff_pricing[off_peak_price][]" value="'.$value->off_peak_price.'"/>
                            <span class="input-group-text">.00</span>
                          </div>
                        </div>
                      </div>';
					}
				}
			}
			// echo "staff_pricing <pre>"; print_r($staff_pricing); die;
			$response = array(
				"status" 		=> 1,
				"data" 			=> $partnerServicesLists,
				"staff_pricing" => $staff_pricing_html,
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
