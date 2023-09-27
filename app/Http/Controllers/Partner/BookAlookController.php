<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner\Staff;
use App\Models\Partner\Venue;
use App\Models\Partner\VenueMeta;
use App\Models\Partner\BookAlook;
use App\Models\Admin\ServiceCategory;
use App\Models\Admin\ServiceSubCategory;
use App\Models\Admin\Service;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class BookAlookController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Book A Look";
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

		$bookaLookLists 	= $this->partnerBookAlookLists($partner_id);

        $partner_country_config = getPartnerCountryConfig($partner_id);

        return view('partner/services/book-a-look/index', compact('title', 'meta_description', 'meta_keywords', 'getStaff', 'venue_data_arr', 'categories', 'subcategories', 'bookaLookLists', 'partner_country_config'));
    }

    public function bookalookStore(Request $request)
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

		if ($request->hasFile('look_image')) {
			$image = $request->file('look_image');
			$look_image = time().'_look_image.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/bookalook');
			$image->move($destinationPath, $look_image);
			$look_image =  '/uploads/bookalook/'.$look_image;
		}else{
			$look_image = "";
		}

		$BookAlook = BookAlook::create([
			'partner_id'      	=> $partner_id,
			'category_id'     	=> $request->category,
			'sub_category_id'   => $request->sub_category,
			'service_id'     	=> $service_id,
			'venues'     		=> $venues,
			'gender'      		=> $request->gender_option,
			'duration'     		=> $request->duration,
			'look_image'     	=> $request->look_image,
			'walk_in_price'     => $request->walk_in_price,
			'online_price'     	=> $request->online_price,
			'off_peak_price'    => $request->off_peak_price,
			'description' 		=> $request->description,
			'staff_pricing'   	=> isset($staff_pricing) ? $staff_pricing : "",
			'status'      		=> isset($request->service_status) ? 1 : 0,
		]);

		return redirect()->back()->with('success', 'Book a look created successfully.');
	}

    public function bookalookUpdate(Request $request)
	{
		$partner_id = Auth::user()->id;
		$validator = Validator::make($request->all(), [
            'category'  		=> 'required',
            'sub_category'  	=> 'required',
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

		if ($request->hasFile('look_image')) {
			$image = $request->file('look_image');
			$look_image = time().'_look_image.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/bookalook');
			$image->move($destinationPath, $look_image);
			$look_image =  '/uploads/bookalook/'.$look_image;
		}else{
			$old_look_image = $request['old_look_image'];
			if ($old_look_image) {
				$look_image = $old_look_image;
			}else{
				$look_image = "";
			}
		}

		$BookAlook = BookAlook::where('pbal_id', $request->pbal_id)->update([
			'partner_id'      	=> $partner_id,
			'category_id'     	=> $request->category,
			'sub_category_id'   => $request->sub_category,
			'venues'     		=> $venues,
			'gender'      		=> $request->gender_option,
			'duration'     		=> $request->duration,
			'look_image'     	=> $look_image,
			'walk_in_price'     => $request->walk_in_price,
			'online_price'     	=> $request->online_price,
			'off_peak_price'    => $request->off_peak_price,
			'staff_pricing'   	=> isset($staff_pricing) ? $staff_pricing : "",
		]);

		return redirect()->back()->with('success', 'Book a look updated successfully.');
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

	public function getBookalookSubcategoryByAjax($category_id){

        $getSubcategory = ServiceSubCategory::where('categoryid','=',$category_id)->where('status', '=', 1)->orderBy('servicesubcategoryid','asc')->get();
        $html = "<option></option>";
        foreach ($getSubcategory as $subcategory) {
            $html .= '<option value="'.$subcategory->servicesubcategoryid.'">'.$subcategory->servicesubcategory.'</option>';
        }
        echo $html;
    }

    public function partnerBookAlookLists($partner_id)
    {
    	$BookAlooks = BookAlook::where('partner_id', $partner_id);
    	$BookAlooksLists	= $BookAlooks->select(['partner_book_a_look.pbal_id', 'partner_book_a_look.gender', 'partner_book_a_look.walk_in_price', 'partner_book_a_look.online_price', 'partner_book_a_look.off_peak_price', 'partner_book_a_look.status', 'partner_book_a_look.description', 'partner_book_a_look.duration', 'service_categories.category', 'service_categories.icon', 'service_sub_categories.servicesubcategory', 'services.servicename', 'partner_book_a_look.look_image'])
	    	->leftJoin('services', 'services.serviceid', '=', 'partner_book_a_look.service_id')
	    	->leftJoin('service_categories', 'service_categories.id', '=', 'partner_book_a_look.category_id')
	    	->leftJoin('service_sub_categories', 'service_sub_categories.servicesubcategoryid', '=', 'partner_book_a_look.sub_category_id')
	    	->orderBy('partner_book_a_look.pbal_id', 'DESC')
	    	->get();

    	return $BookAlooksLists;
    }

    public function changeBookalookStatus($id,$status){
		$statusupdate = BookAlook::where('pbal_id', $id)->update([
			'status' => $status,
		]);

		return true;
	}

	public function getBookalookDetailById($pbal_id)
	{
    	//$BookAlooksLists	= BookAlook::where('pbal_id', $id)->get();

    	$BookAlook = BookAlook::where('pbal_id', $pbal_id);
    	$partnerBookAlookLists	= $BookAlook->select(['partner_book_a_look.*', 'services.servicename'])
	    	->leftJoin('services', 'services.serviceid', '=', 'partner_book_a_look.service_id')
	    	->get();

    	$partner_id 		= Auth::user()->id;

    	$staff 		= Staff::where('partner_id', $partner_id);
    	$getStaff 	= $staff->select(['staff.staff_id', 'staff.user_id', 'staff.partner_id', 'users.name', 'staff.profile_image'])
    	->leftJoin('users', 'users.id', '=', 'staff.user_id')
    	->orderBy('staff.staff_id', 'DESC')
    	->get();

    	$partner_country_config = getPartnerCountryConfig($partner_id);

		if ( !empty($pbal_id) && !$partnerBookAlookLists->isEmpty() ) {
			$staff_pricing = $partnerBookAlookLists[0]->staff_pricing;
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
                            <span class="input-group-text">'.$partner_country_config->currency_sign.'</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="kt_ecommerce_edit_booklook_conditions['.$key.'][online_price]" value="'.$value->online_price.'"/>
                            <span class="input-group-text">.00</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="d-flex flex-column gap-1">
                          <label class="fw-semibold fs-6 mb-2">Off Peak Price</label>
                          <div class="input-group mb-0">
                            <span class="input-group-text">'.$partner_country_config->currency_sign.'</span>
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
			// echo "staff_pricing <pre>"; print_r($staff_pricing); die;
			$response = array(
				"status" 		=> 1,
				"data" 			=> $partnerBookAlookLists,
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
