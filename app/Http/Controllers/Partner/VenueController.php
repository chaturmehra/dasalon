<?php

namespace App\Http\Controllers\Partner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Amenity;
use App\Models\Admin\BusinessType;
use App\Models\Partner\Venue;
use App\Models\Partner\VenueMeta;
use Illuminate\Support\Facades\Auth;
use DB;

class VenueController extends Controller
{

	public function index()
	{
		$title             = "Dasalon :: Venue";
		$meta_description  = "";
		$meta_keywords     = "";

		$get_amenities = Amenity::where('status', 1)->get();
		$businesstypes = BusinessType::where('is_active', 1)->get();

		$amenities = [];
		if (!empty($get_amenities)) {
			foreach ($get_amenities as $key => $amenity) {
				$amenity_arr['id'] 					= $amenity['id'];
				$amenity_arr['amenity_name'] 		= $amenity['amenity_name'];
				$amenity_arr['partner_type'] 		= $amenity['partner_type'];
				$amenity_arr['amenity_icon'] 		= $amenity['amenity_icon'];
				$amenity_arr['amenity_type'] 		= $amenity['amenity_type'];
				$amenity_arr['amenity_category'] 	= $amenity['amenity_category'];
				$amenity_arr['status'] 				= $amenity['status'];

				$amenities[$amenity['amenity_category']][] = $amenity_arr;
			}
		}

		$venues 	= Venue::get()->toArray();

		$venue_data_array 	= $this->array_by_ids($venues, "id");
		$venue_ids 			= array_column($venues, 'id');

		$venue_meta 		= $this->get_venue_meta_by_venue_ids($venue_ids);
		$amenity_ids 		= array_column($venue_meta, 'amenity');
		$business_types_ids = array_column($venue_meta, 'venuebusiness');

		/*
		if (!empty($amenity_ids)) {
			$amenity_data 	= $this->get_amenity_by_ids($amenity_ids, $venue_ids);
			echo "<pre>"; print_r($amenity_data); die;
		}*/

		$venue_data_arr = [];
		if ( !empty($venue_data_array) ) {
			$i=0;
			foreach ($venue_data_array as $vkey => $venue_data) {
				$venue_id 			= $venue_data["id"];
				$venue_meta_data 	= $venue_meta[$venue_id];
				// Get amenity name, icon from ids
				if ($amenity_ids) {
					$amenities_ids 		= explode(',', $amenity_ids[$i]);
					$amenity_data 		= $this->get_amenity_by_ids($amenities_ids);
				}else{
					$amenity_data = "";
				}

				$business_type_ids 	= explode(',', $business_types_ids[$i]);
				$business_type_data = $this->get_business_type_by_ids($business_type_ids);

				$venue_data["venue_meta"] = $venue_meta_data;
				$venue_data["amenity_data"] = $amenity_data;
				$venue_data["business_type_data"] = $business_type_data;
				$venue_data_arr[] = $venue_data;

				$i++;
			}
		}

		// echo "<pre>"; print_r($venue_data_arr); die;

		return view('partner/setting/venue/index', compact('title', 'meta_description', 'meta_keywords', 'amenities', 'venue_data_arr', 'businesstypes'));
	}

	public function storeVenues(Request $request)
	{
		$partner_id = Auth::user()->id;
		$venue = Venue::create([
			'partner_id' 		=> $partner_id,
			'name' 				=> $request->venue_name,
			'address' 			=> "",
			'phone' 			=> $request->phone_number,
			'email' 			=> $request->email,
			'billing_details' 	=> $request->billing_details,
		]);

		$business_address_check = $request->business_address_check;

		if( empty($business_address_check) ){

			if( !empty($request->business_location) ){
				$this->add_venue_meta($venue->id, 'business_location', $request->business_location);
			}
			if( !empty($request->business_address) ){
				$this->add_venue_meta($venue->id, 'business_address', $request->business_address);
			}
			if( !empty($request->business_aptsuite) ){
				$this->add_venue_meta($venue->id, 'business_aptsuite', $request->business_aptsuite);
			}
			if( !empty($request->district) ){
				$this->add_venue_meta($venue->id, 'district', $request->district);
			}
			if( !empty($request->city) ){
				$this->add_venue_meta($venue->id, 'city', $request->city);
			}
			if( !empty($request->region) ){
				$this->add_venue_meta($venue->id, 'region', $request->region);
			}
			if( !empty($request->postcode) ){
				$this->add_venue_meta($venue->id, 'postcode', $request->postcode);
			}
			if( !empty($request->country) ){
				$this->add_venue_meta($venue->id, 'country', $request->country);
			}
			if( !empty($request->directions) ){
				$this->add_venue_meta($venue->id, 'directions', $request->directions);
			}
			if( !empty($request->latitude) ){
				$this->add_venue_meta($venue->id, 'latitude', $request->latitude);
			}
			if( !empty($request->longitude) ){
				$this->add_venue_meta($venue->id, 'longitude', $request->longitude);
			}

			$this->add_venue_meta($venue->id, 'business_address_check', "");
		}else{
			$this->add_venue_meta($venue->id, 'business_address_check', $business_address_check);
		}

		if( !empty($request->gender_restriction) ){
			$this->add_venue_meta($venue->id, 'gender_restriction', $request->gender_restriction);
		}
		if( !empty($request->venuebusiness) ){
			$venuebusiness = implode(',', $request->venuebusiness);
			$this->add_venue_meta($venue->id, 'venuebusiness', $venuebusiness);
		}

		$openhours = isset($request->openhours) ? $request->openhours : "";
		$advance_setting = isset($request->advance_setting) ? $request->advance_setting : "";
		
		if ($openhours) {	        
			$this->add_venue_meta($venue->id, 'openhours', $openhours);
		}
		if ($openhours == "open_for_selected_hours") {
			if( !empty($request->operating_days) ){
				$operating_days = implode(',', $request->operating_days);
				$this->add_venue_meta($venue->id, 'operating_days', $operating_days);
			}
			if( !empty($request->operating_open_hours) ){
				$this->add_venue_meta($venue->id, 'operating_open_hours', $request->operating_open_hours);
			}
			if( !empty($request->operating_close_hours) ){
				$this->add_venue_meta($venue->id, 'operating_close_hours', $request->operating_close_hours);
			}
			if ( !empty($advance_setting) ) {
				$this->add_venue_meta($venue->id, 'advance_setting', 1);

				$adv_setting_mon = $request->adv_setting_mon;
				$adv_setting_tue = $request->adv_setting_tue;
				$adv_setting_wed = $request->adv_setting_wed;
				$adv_setting_thu = $request->adv_setting_thu;
				$adv_setting_fri = $request->adv_setting_fri;
				$adv_setting_sat = $request->adv_setting_sat;
				$adv_setting_sun = $request->adv_setting_sun;

				$off_peak_hour_mon = $request->off_peak_hour_mon;
				$off_peak_hour_tue = $request->off_peak_hour_tue;
				$off_peak_hour_wed = $request->off_peak_hour_wed;
				$off_peak_hour_thu = $request->off_peak_hour_thu;
				$off_peak_hour_fri = $request->off_peak_hour_fri;
				$off_peak_hour_sat = $request->off_peak_hour_sat;
				$off_peak_hour_sun = $request->off_peak_hour_sun;

				if( !empty($adv_setting_mon) ){
					if ( !empty($adv_setting_mon["'open'"]) || !empty($adv_setting_mon["'close'"]) || !empty($adv_setting_mon["'timeset_open'"]) || !empty($adv_setting_mon["'timeset_close'"]) ) {
						$adv_setting_mon = json_encode($adv_setting_mon);
						$this->add_venue_meta($venue->id, 'adv_setting_mon', $adv_setting_mon);
					}
				}
				if( !empty($adv_setting_tue) ){
					if ( !empty($adv_setting_tue["'open'"]) || !empty($adv_setting_tue["'close'"]) || !empty($adv_setting_tue["'timeset_open'"]) || !empty($adv_setting_tue["'timeset_close'"]) ) {
						$adv_setting_tue = json_encode($adv_setting_tue);
						$this->add_venue_meta($venue->id, 'adv_setting_tue', $adv_setting_tue);
					}
				}
				if( !empty($adv_setting_wed) ){
					if ( !empty($adv_setting_wed["'open'"]) || !empty($adv_setting_wed["'close'"]) || !empty($adv_setting_wed["'timeset_open'"]) || !empty($adv_setting_wed["'timeset_close'"]) ) {
						$adv_setting_wed = json_encode($adv_setting_wed);
						$this->add_venue_meta($venue->id, 'adv_setting_wed', $adv_setting_wed);
					}
				}
				if( !empty($adv_setting_thu) ){
					if ( !empty($adv_setting_thu["'open'"]) || !empty($adv_setting_thu["'close'"]) || !empty($adv_setting_thu["'timeset_open'"]) || !empty($adv_setting_thu["'timeset_close'"]) ) {
						$adv_setting_thu = json_encode($adv_setting_thu);
						$this->add_venue_meta($venue->id, 'adv_setting_thu', $adv_setting_thu);
					}
				}
				if( !empty($adv_setting_fri) ){
					if ( !empty($adv_setting_fri["'open'"]) || !empty($adv_setting_fri["'close'"]) || !empty($adv_setting_fri["'timeset_open'"]) || !empty($adv_setting_fri["'timeset_close'"]) ) {
						$adv_setting_fri = json_encode($adv_setting_fri);
						$this->add_venue_meta($venue->id, 'adv_setting_fri', $adv_setting_fri);
					}
				}
				if( !empty($adv_setting_sat) ){
					if ( !empty($adv_setting_sat["'open'"]) || !empty($adv_setting_sat["'close'"]) || !empty($adv_setting_sat["'timeset_open'"]) || !empty($adv_setting_sat["'timeset_close'"]) ) {
						$adv_setting_sat = json_encode($adv_setting_sat);
						$this->add_venue_meta($venue->id, 'adv_setting_sat', $adv_setting_sat);
					}
				}
				if( !empty($adv_setting_sun) ){
					if ( !empty($adv_setting_sun["'open'"]) || !empty($adv_setting_sun["'close'"]) || !empty($adv_setting_sun["'timeset_open'"]) || !empty($adv_setting_sun["'timeset_close'"]) ) {
						$adv_setting_sun = json_encode($adv_setting_sun);
						$this->add_venue_meta($venue->id, 'adv_setting_sun', $adv_setting_sun);
					}
				}
				if( !empty($off_peak_hour_mon) ){
					if ( !empty($off_peak_hour_mon["'start'"]) || !empty($off_peak_hour_mon["'end'"]) || !empty($off_peak_hour_mon["'timeset_open'"]) || !empty($off_peak_hour_mon["'timeset_close'"]) ) {
						$off_peak_hour_mon = json_encode($off_peak_hour_mon);
						$this->add_venue_meta($venue->id, 'off_peak_hour_mon', $off_peak_hour_mon);
					}
				}
				if( !empty($off_peak_hour_tue) ){
					if ( !empty($off_peak_hour_tue["'start'"]) || !empty($off_peak_hour_tue["'end'"]) || !empty($off_peak_hour_tue["'timeset_open'"]) || !empty($off_peak_hour_tue["'timeset_close'"]) ) {
						$off_peak_hour_tue = json_encode($off_peak_hour_tue);
						$this->add_venue_meta($venue->id, 'off_peak_hour_tue', $off_peak_hour_tue);
					}
				}
				if( !empty($off_peak_hour_wed) ){
					if ( !empty($off_peak_hour_wed["'start'"]) || !empty($off_peak_hour_wed["'end'"]) || !empty($off_peak_hour_wed["'timeset_open'"]) || !empty($off_peak_hour_wed["'timeset_close'"]) ) {
						$off_peak_hour_wed = json_encode($off_peak_hour_wed);
						$this->add_venue_meta($venue->id, 'off_peak_hour_wed', $off_peak_hour_wed);
					}
				}
				if( !empty($off_peak_hour_thu) ){
					if ( !empty($off_peak_hour_thu["'start'"]) || !empty($off_peak_hour_thu["'end'"]) || !empty($off_peak_hour_thu["'timeset_open'"]) || !empty($off_peak_hour_thu["'timeset_close'"]) ) {
						$off_peak_hour_thu = json_encode($off_peak_hour_thu);
						$this->add_venue_meta($venue->id, 'off_peak_hour_thu', $off_peak_hour_thu);
					}
				}
				if( !empty($off_peak_hour_fri) ){
					if ( !empty($off_peak_hour_fri["'start'"]) || !empty($off_peak_hour_fri["'end'"]) || !empty($off_peak_hour_fri["'timeset_open'"]) || !empty($off_peak_hour_fri["'timeset_close'"]) ) {
						$off_peak_hour_fri = json_encode($off_peak_hour_fri);
						$this->add_venue_meta($venue->id, 'off_peak_hour_fri', $off_peak_hour_fri);
					}
				}
				if( !empty($off_peak_hour_sat) ){
					if ( !empty($off_peak_hour_sat["'start'"]) || !empty($off_peak_hour_sat["'end'"]) || !empty($off_peak_hour_sat["'timeset_open'"]) || !empty($off_peak_hour_sat["'timeset_close'"]) ) {
						$off_peak_hour_sat = json_encode($off_peak_hour_sat);
						$this->add_venue_meta($venue->id, 'off_peak_hour_sat', $off_peak_hour_sat);
					}
				}
				if( !empty($off_peak_hour_sun) ){
					if ( !empty($off_peak_hour_sun["'start'"]) || !empty($off_peak_hour_sun["'end'"]) || !empty($off_peak_hour_sun["'timeset_open'"]) || !empty($off_peak_hour_sun["'timeset_close'"]) ) {
						$off_peak_hour_sun = json_encode($off_peak_hour_sun);
						$this->add_venue_meta($venue->id, 'off_peak_hour_sun', $off_peak_hour_sun);
					}
				}
			}
		}
		if ($openhours == "always_open") {	        
			if( !empty($request->always_open) ){
				$always_open = implode(',', $request->always_open);
				$this->add_venue_meta($venue->id, 'always_open', $always_open);
			}
		}
		if ($openhours == "appointment_only") {
			if( !empty($request->appointment_only) ){
				$appointment_only = implode(',', $request->appointment_only);
				$this->add_venue_meta($venue->id, 'appointment_only', $appointment_only);
			}
		}

		if( !empty($request->amenity) ){
			$amenity = implode(',', $request->amenity);
			$this->add_venue_meta($venue->id, 'amenity', $amenity);
		}

		if ($request->hasFile('featured')) {
			$image = $request->file('featured');
			$featured = time().'_featured.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/featured');
			$image->move($destinationPath, $featured);
			$featured =  '/uploads/featured/'.$featured;
		}
		if ($request->hasFile('imgother1')) {
			$image = $request->file('imgother1');
			$imgother1 = time().'_imgother1.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/imgother');
			$image->move($destinationPath, $imgother1);
			$imgother1 =  '/uploads/imgother/'.$imgother1;
		}
		if ($request->hasFile('imgother2')) {
			$image = $request->file('imgother2');
			$imgother2 = time().'_imgother2.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/imgother');
			$image->move($destinationPath, $imgother2);
			$imgother2 =  '/uploads/imgother/'.$imgother2;
		}
		if ($request->hasFile('imgother3')) {
			$image = $request->file('imgother3');
			$imgother3 = time().'_imgother3.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/imgother');
			$image->move($destinationPath, $imgother3);
			$imgother3 =  '/uploads/imgother/'.$imgother3;
		}
		if ($request->hasFile('imgother4')) {
			$image = $request->file('imgother4');
			$imgother4 = time().'_imgother4.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/imgother');
			$image->move($destinationPath, $imgother4);
			$imgother4 =  '/uploads/imgother/'.$imgother4;
		}
		if( !empty($featured) ){
			$this->add_venue_meta($venue->id, 'featured', $featured);
		}
		if( !empty($imgother1) ){
			$this->add_venue_meta($venue->id, 'imgother1', $imgother1);
		}
		if( !empty($imgother2) ){
			$this->add_venue_meta($venue->id, 'imgother2', $imgother2);
		}
		if( !empty($imgother3) ){
			$this->add_venue_meta($venue->id, 'imgother3', $imgother3);
		}
		if( !empty($request->imgother4) ){
			$this->add_venue_meta($venue->id, 'imgother4', $request->imgother4);
		}

		return redirect()->back()->with('success', 'Venue added successfully.');
	}

	public function updateVenues(Request $request)
	{
		$partner_id = Auth::user()->id;
		$venue_id 	= $request->venue_id;

		Venue::where('id', $venue_id)->update([
			'partner_id' 		=> $partner_id,
			'name' 				=> $request->venue_name,
			'address' 			=> "",
			'phone' 			=> $request->phone_number,
			'email' 			=> $request->email,
			'billing_details' 	=> $request->billing_details,
		]);

		$business_address_check = $request->business_address_check;

		if( empty($business_address_check) ){

			$get_business_location = $this->get_update_venue_meta($venue_id, 'business_location');
			if(count($get_business_location) > 0 ){
				$this->add_venue_meta($venue_id, 'business_location', $request->business_location);
			}else{
				if( !empty($request->business_location) ){
					$this->add_venue_meta($venue_id, 'business_location', $request->business_location);
				}
			}

			$get_business_address = $this->get_update_venue_meta($venue_id, 'business_address');
			if(count($get_business_address) > 0 ){
				$this->add_venue_meta($venue_id, 'business_address', $request->business_address);
			}else{
				if( !empty($request->business_address) ){
					$this->add_venue_meta($venue_id, 'business_address', $request->business_address);
				}
			}

			$get_business_aptsuite = $this->get_update_venue_meta($venue_id, 'business_aptsuite');
			if(count($get_business_aptsuite) > 0 ){
				$this->add_venue_meta($venue_id, 'business_aptsuite', $request->business_aptsuite);
			}else{
				if( !empty($request->business_aptsuite) ){
					$this->add_venue_meta($venue_id, 'business_aptsuite', $request->business_aptsuite);
				}
			}

			$get_district = $this->get_update_venue_meta($venue_id, 'district');
			if(count($get_district) > 0 ){
				$this->add_venue_meta($venue_id, 'district', $request->district);
			}else{
				if( !empty($request->district) ){
					$this->add_venue_meta($venue_id, 'district', $request->district);
				}
			}

			$get_city = $this->get_update_venue_meta($venue_id, 'city');
			if(count($get_city) > 0 ){
				$this->add_venue_meta($venue_id, 'city', $request->city);
			}else{
				if( !empty($request->city) ){
					$this->add_venue_meta($venue_id, 'city', $request->city);
				}
			}

			$get_region = $this->get_update_venue_meta($venue_id, 'region');
			if(count($get_region) > 0 ){
				$this->add_venue_meta($venue_id, 'region', $request->region);
			}else{
				if( !empty($request->region) ){
					$this->add_venue_meta($venue_id, 'region', $request->region);
				}
			}

			$get_postcode = $this->get_update_venue_meta($venue_id, 'postcode');
			if(count($get_postcode) > 0 ){
				$this->add_venue_meta($venue_id, 'postcode', $request->postcode);
			}else{
				if( !empty($request->postcode) ){
					$this->add_venue_meta($venue_id, 'postcode', $request->postcode);
				}
			}

			$get_country = $this->get_update_venue_meta($venue_id, 'country');
			if(count($get_country) > 0 ){
				$this->add_venue_meta($venue_id, 'country', $request->country);
			}else{
				if( !empty($request->country) ){
					$this->add_venue_meta($venue_id, 'country', $request->country);
				}
			}

			$get_directions = $this->get_update_venue_meta($venue_id, 'directions');
			if(count($get_directions) > 0 ){
				$this->add_venue_meta($venue_id, 'directions', $request->directions);
			}else{
				if( !empty($request->directions) ){
					$this->add_venue_meta($venue_id, 'directions', $request->directions);
				}
			}
			if( !empty($request->latitude) ){
				$this->add_venue_meta($venue_id, 'latitude', $request->latitude);
			}
			if( !empty($request->longitude) ){
				$this->add_venue_meta($venue_id, 'longitude', $request->longitude);
			}

			$this->add_venue_meta($venue_id, 'business_address_check', "");
		}else{
			$this->add_venue_meta($venue_id, 'business_address_check', $business_address_check);
		}

		$get_gender_restriction = $this->get_update_venue_meta($venue_id, 'gender_restriction');
		if(count($get_gender_restriction) > 0 ){
			$this->add_venue_meta($venue_id, 'gender_restriction', $request->gender_restriction);
		}else{
			if( !empty($request->gender_restriction) ){
				$this->add_venue_meta($venue_id, 'gender_restriction', $request->gender_restriction);
			}
		}

		$get_venuebusiness = $this->get_update_venue_meta($venue_id, 'venuebusiness');
		if(count($get_venuebusiness) > 0 ){
			$venuebusiness = implode(',', $request->venuebusiness);
			$this->add_venue_meta($venue_id, 'venuebusiness', $venuebusiness);
		}else{
			if( !empty($request->venuebusiness) ){
				$venuebusiness = implode(',', $request->venuebusiness);
				$this->add_venue_meta($venue_id, 'venuebusiness', $venuebusiness);
			}
		}

		$openhours = isset($request->openhours) ? $request->openhours : "";
		$advance_setting = isset($request->advance_setting) ? $request->advance_setting : "";

		if ($openhours) {	        
			$this->add_venue_meta($venue_id, 'openhours', $openhours);
		}

		if ($openhours == "open_for_selected_hours") {
			if( !empty($request->operating_days) ){
				$operating_days = implode(',', $request->operating_days);
				$this->add_venue_meta($venue_id, 'operating_days', $operating_days);
			}
			if( !empty($request->operating_open_hours) ){
				$this->add_venue_meta($venue_id, 'operating_open_hours', $request->operating_open_hours);
			}
			if( !empty($request->operating_close_hours) ){
				$this->add_venue_meta($venue_id, 'operating_close_hours', $request->operating_close_hours);
			}
			if ( !empty($advance_setting) ) {

				$this->add_venue_meta($venue_id, 'advance_setting', 1);

				$adv_setting_mon = $request->adv_setting_mon;
				$adv_setting_tue = $request->adv_setting_tue;
				$adv_setting_wed = $request->adv_setting_wed;
				$adv_setting_thu = $request->adv_setting_thu;
				$adv_setting_fri = $request->adv_setting_fri;
				$adv_setting_sat = $request->adv_setting_sat;
				$adv_setting_sun = $request->adv_setting_sun;

				$off_peak_hour_mon = $request->off_peak_hour_mon;
				$off_peak_hour_tue = $request->off_peak_hour_tue;
				$off_peak_hour_wed = $request->off_peak_hour_wed;
				$off_peak_hour_thu = $request->off_peak_hour_thu;
				$off_peak_hour_fri = $request->off_peak_hour_fri;
				$off_peak_hour_sat = $request->off_peak_hour_sat;
				$off_peak_hour_sun = $request->off_peak_hour_sun;

				if( !empty($adv_setting_mon) ){
					if ( !empty($adv_setting_mon["'open'"]) || !empty($adv_setting_mon["'close'"]) || !empty($adv_setting_mon["'timeset_open'"]) || !empty($adv_setting_mon["'timeset_close'"]) ) {
						$adv_setting_mon = json_encode($adv_setting_mon);
						$this->add_venue_meta($venue_id, 'adv_setting_mon', $adv_setting_mon);
					}
				}
				if( !empty($adv_setting_tue) ){
					if ( !empty($adv_setting_tue["'open'"]) || !empty($adv_setting_tue["'close'"]) || !empty($adv_setting_tue["'timeset_open'"]) || !empty($adv_setting_tue["'timeset_close'"]) ) {
						$adv_setting_tue = json_encode($adv_setting_tue);
						$this->add_venue_meta($venue_id, 'adv_setting_tue', $adv_setting_tue);
					}
				}
				if( !empty($adv_setting_wed) ){
					if ( !empty($adv_setting_wed["'open'"]) || !empty($adv_setting_wed["'close'"]) || !empty($adv_setting_wed["'timeset_open'"]) || !empty($adv_setting_wed["'timeset_close'"]) ) {
						$adv_setting_wed = json_encode($adv_setting_wed);
						$this->add_venue_meta($venue_id, 'adv_setting_wed', $adv_setting_wed);
					}
				}
				if( !empty($adv_setting_thu) ){
					if ( !empty($adv_setting_thu["'open'"]) || !empty($adv_setting_thu["'close'"]) || !empty($adv_setting_thu["'timeset_open'"]) || !empty($adv_setting_thu["'timeset_close'"]) ) {
						$adv_setting_thu = json_encode($adv_setting_thu);
						$this->add_venue_meta($venue_id, 'adv_setting_thu', $adv_setting_thu);
					}
				}
				if( !empty($adv_setting_fri) ){
					if ( !empty($adv_setting_fri["'open'"]) || !empty($adv_setting_fri["'close'"]) || !empty($adv_setting_fri["'timeset_open'"]) || !empty($adv_setting_fri["'timeset_close'"]) ) {
						$adv_setting_fri = json_encode($adv_setting_fri);
						$this->add_venue_meta($venue_id, 'adv_setting_fri', $adv_setting_fri);
					}
				}
				if( !empty($adv_setting_sat) ){
					if ( !empty($adv_setting_sat["'open'"]) || !empty($adv_setting_sat["'close'"]) || !empty($adv_setting_sat["'timeset_open'"]) || !empty($adv_setting_sat["'timeset_close'"]) ) {
						$adv_setting_sat = json_encode($adv_setting_sat);
						$this->add_venue_meta($venue_id, 'adv_setting_sat', $adv_setting_sat);
					}
				}
				if( !empty($adv_setting_sun) ){
					if ( !empty($adv_setting_sun["'open'"]) || !empty($adv_setting_sun["'close'"]) || !empty($adv_setting_sun["'timeset_open'"]) || !empty($adv_setting_sun["'timeset_close'"]) ) {
						$adv_setting_sun = json_encode($adv_setting_sun);
						$this->add_venue_meta($venue_id, 'adv_setting_sun', $adv_setting_sun);
					}
				}
				if( !empty($off_peak_hour_mon) ){
					if ( !empty($off_peak_hour_mon["'start'"]) || !empty($off_peak_hour_mon["'end'"]) || !empty($off_peak_hour_mon["'timeset_open'"]) || !empty($off_peak_hour_mon["'timeset_close'"]) ) {
						$off_peak_hour_mon = json_encode($off_peak_hour_mon);
						$this->add_venue_meta($venue_id, 'off_peak_hour_mon', $off_peak_hour_mon);
					}
				}
				if( !empty($off_peak_hour_tue) ){
					if ( !empty($off_peak_hour_tue["'start'"]) || !empty($off_peak_hour_tue["'end'"]) || !empty($off_peak_hour_tue["'timeset_open'"]) || !empty($off_peak_hour_tue["'timeset_close'"]) ) {
						$off_peak_hour_tue = json_encode($off_peak_hour_tue);
						$this->add_venue_meta($venue_id, 'off_peak_hour_tue', $off_peak_hour_tue);
					}
				}
				if( !empty($off_peak_hour_wed) ){
					if ( !empty($off_peak_hour_wed["'start'"]) || !empty($off_peak_hour_wed["'end'"]) || !empty($off_peak_hour_wed["'timeset_open'"]) || !empty($off_peak_hour_wed["'timeset_close'"]) ) {
						$off_peak_hour_wed = json_encode($off_peak_hour_wed);
						$this->add_venue_meta($venue_id, 'off_peak_hour_wed', $off_peak_hour_wed);
					}
				}
				if( !empty($off_peak_hour_thu) ){
					if ( !empty($off_peak_hour_thu["'start'"]) || !empty($off_peak_hour_thu["'end'"]) || !empty($off_peak_hour_thu["'timeset_open'"]) || !empty($off_peak_hour_thu["'timeset_close'"]) ) {
						$off_peak_hour_thu = json_encode($off_peak_hour_thu);
						$this->add_venue_meta($venue_id, 'off_peak_hour_thu', $off_peak_hour_thu);
					}
				}
				if( !empty($off_peak_hour_fri) ){
					if ( !empty($off_peak_hour_fri["'start'"]) || !empty($off_peak_hour_fri["'end'"]) || !empty($off_peak_hour_fri["'timeset_open'"]) || !empty($off_peak_hour_fri["'timeset_close'"]) ) {
						$off_peak_hour_fri = json_encode($off_peak_hour_fri);
						$this->add_venue_meta($venue_id, 'off_peak_hour_fri', $off_peak_hour_fri);
					}
				}
				if( !empty($off_peak_hour_sat) ){
					if ( !empty($off_peak_hour_sat["'start'"]) || !empty($off_peak_hour_sat["'end'"]) || !empty($off_peak_hour_sat["'timeset_open'"]) || !empty($off_peak_hour_sat["'timeset_close'"]) ) {
						$off_peak_hour_sat = json_encode($off_peak_hour_sat);
						$this->add_venue_meta($venue_id, 'off_peak_hour_sat', $off_peak_hour_sat);
					}
				}
				if( !empty($off_peak_hour_sun) ){
					if ( !empty($off_peak_hour_sun["'start'"]) || !empty($off_peak_hour_sun["'end'"]) || !empty($off_peak_hour_sun["'timeset_open'"]) || !empty($off_peak_hour_sun["'timeset_close'"]) ) {
						$off_peak_hour_sun = json_encode($off_peak_hour_sun);
						$this->add_venue_meta($venue_id, 'off_peak_hour_sun', $off_peak_hour_sun);
					}
				}
			}

			$this->add_venue_meta($venue_id, 'always_open', "");
			$this->add_venue_meta($venue_id, 'appointment_only', "");
		}
		if ($openhours == "always_open") {
			if( !empty($request->always_open) ){
				$always_open = implode(',', $request->always_open);
				$this->add_venue_meta($venue_id, 'always_open', $always_open);
			}

			$this->add_venue_meta($venue_id, 'appointment_only', "");
		}
		if ($openhours == "appointment_only") {
			if( !empty($request->appointment_only) ){
				$appointment_only = implode(',', $request->appointment_only);
				$this->add_venue_meta($venue_id, 'appointment_only', $appointment_only);
			}

			$this->add_venue_meta($venue_id, 'always_open', "");
		}
		
		if( !empty($request->amenity) ){
			$amenity = implode(',', $request->amenity);
			$this->add_venue_meta($venue_id, 'amenity', $amenity);
		}

		if ($request->hasFile('featured')) {
			$image = $request->file('featured');
			$featured = time().'_featured.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/featured');
			$image->move($destinationPath, $featured);
			$featured =  '/uploads/featured/'.$featured;
		}
		if ($request->hasFile('imgother1')) {
			$image = $request->file('imgother1');
			$imgother1 = time().'_imgother1.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/imgother');
			$image->move($destinationPath, $imgother1);
			$imgother1 =  '/uploads/imgother/'.$imgother1;
		}
		if ($request->hasFile('imgother2')) {
			$image = $request->file('imgother2');
			$imgother2 = time().'_imgother2.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/imgother');
			$image->move($destinationPath, $imgother2);
			$imgother2 =  '/uploads/imgother/'.$imgother2;
		}
		if ($request->hasFile('imgother3')) {
			$image = $request->file('imgother3');
			$imgother3 = time().'_imgother3.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/imgother');
			$image->move($destinationPath, $imgother3);
			$imgother3 =  '/uploads/imgother/'.$imgother3;
		}
		if ($request->hasFile('imgother4')) {
			$image = $request->file('imgother4');
			$imgother4 = time().'_imgother4.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/imgother');
			$image->move($destinationPath, $imgother4);
			$imgother4 =  '/uploads/imgother/'.$imgother4;
		}
		if( !empty($featured) ){
			$this->add_venue_meta($venue_id, 'featured', $featured);
		}
		if( !empty($imgother1) ){
			$this->add_venue_meta($venue_id, 'imgother1', $imgother1);
		}
		if( !empty($imgother2) ){
			$this->add_venue_meta($venue_id, 'imgother2', $imgother2);
		}
		if( !empty($imgother3) ){
			$this->add_venue_meta($venue_id, 'imgother3', $imgother3);
		}
		if( !empty($imgother4) ){
			$this->add_venue_meta($venue_id, 'imgother4', $imgother4);
		}

		return redirect()->back()->with('success', 'Venue updated successfully.');
	}

	public function add_venue_meta($cid, $key, $value){
		//\DB::enableQueryLog();
		$tbl_name 	= 'venues';
		$tbl_name1 	= 'venue_meta';
		$query = DB::table($tbl_name1)
		->Join($tbl_name, $tbl_name.'.id', '=', $tbl_name1.'.venue_id')
		->where($tbl_name.'.id', '=', $cid)
		->where($tbl_name1.'.meta_key', '=', $key)
		->get();
		$info 	= $query->toArray();
		if(count($info) > 0){
			$result = DB::table($tbl_name1)->where('venue_id', $info['0']->venue_id)->where('meta_key', $key)->update(['meta_value' => $value]);
		}else{
			$result = DB::table($tbl_name1)->insert(['venue_id' => $cid, 'meta_key' => $key, 'meta_value' => $value]);
		}
		return $result;
	}

	public function get_venue_meta_by_venue_ids($venue_ids){
		$venue_meta = VenueMeta::whereIn("venue_id", $venue_ids)->get();
		$vanue_meta_data = [];
		foreach ($venue_meta as $key => $meta) { 
			$vanue_meta_data[$meta["venue_id"]][$meta["meta_key"]] = $meta["meta_value"];
		}
		return $vanue_meta_data;
	}

	public function get_amenity_by_ids($amenity_ids){

		$amenity_data = Amenity::whereIn("id", $amenity_ids)->get()->toArray();

		$amenities_data_arr = [];
		foreach ($amenity_data as $amkey => $value) { 
			$amenities_data["amenity_id"] 	= $value["id"];
			$amenities_data["amenity_name"] = $value["amenity_name"];
			$amenities_data["amenity_icon"] = $value["amenity_icon"];
			$amenities_data["amenity_category"] = $value["amenity_category"];

			$amenities_data_arr[] = $amenities_data;
		}
		return $amenities_data_arr;
	}

	public function get_business_type_by_ids($business_type_ids){

		$bt_data = BusinessType::whereIn("bt_id", $business_type_ids)->get()->toArray();

		$bt_data_arr = [];
		foreach ($bt_data as $amkey => $value) { 
			$btype_data["bt_id"] 			= $value["bt_id"];
			$btype_data["business_type"] 	= $value["businesstype"];

			$bt_data_arr[] = $btype_data;
		}
		return $bt_data_arr;
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

	public function getVenueDetailById($id)
	{
		$venues 	= Venue::find($id)->toArray();
		if ( !empty($id) && !empty($venues) ) {
			$venue_meta = $this->get_metadata($id);
			if ($venue_meta) {
				extract($venue_meta);
			}
			$response = array(
				"status" 		=> 1,
				"venues" 		=> $venues,
				"venue_meta" 	=> $venue_meta,
			);
		}else{
			$response = array(
				"status" 	=> 0,
				"message" 	=> "Data not found",
			);
		}
		
		// echo "<pre>"; print_r($response); die;
		echo json_encode($response);
	}

	public function get_metadata($venue_id) {

		$venue_metadata = DB::table('venue_meta')->select('meta_key', 'meta_value')->where('venue_id', $venue_id)->get();

		if($venue_metadata !== FALSE && $venue_metadata->count() > 0){
			if($venue_metadata !== FALSE && $venue_metadata->count() > 0){
				$venue_metadata = $venue_metadata->toArray();
				foreach ($venue_metadata as $key => $value) {
					$outputData[$value->meta_key] = $value->meta_value;
				}
			}else{
				$outputData = '';
			}
			return $outputData;
		}else{
			return NULL;
		}
	}

	/*Check if value is blank or not*/
	public function get_update_venue_meta($vid, $key){
		$query 		= DB::table('venue_meta')->where('venue_id', $vid)->where('meta_key', $key)->get();
		$result 	= $query->toArray();
		return $result;
	}
}
