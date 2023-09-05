<?php

namespace App\Http\Controllers\Partner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Amenity;
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
    	$amenities = [];
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

    	// echo "<pre>"; print_r($amenityArr); die;

        return view('partner/setting/venue/index', compact('title', 'meta_description', 'meta_keywords', 'amenities'));
    }

    public function storeVenues(Request $request)
    {
    	$partner_id = Auth::user()->id;
    	// echo "partner_id <pre>"; print_r($partner_id); die;
    	// echo "request <pre>"; print_r($request->all()); die;
    	$venue = Venue::create([
            'partner_id' 		=> $partner_id,
            'name' 				=> $request->venue_name,
            'address' 			=> $request->address,
            'phone' 			=> $request->phone_number,
            'email' 			=> $request->email,
            'billing_details' 	=> $request->billing_details,
        ]);

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
        if( !empty($request->business_address_check) ){
        	$this->add_venue_meta($venue->id, 'business_address_check', $request->business_address_check);
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
	        if ($advance_setting) {
	        	if( !empty($request->adv_setting_open) ){
	        		$this->add_venue_meta($venue->id, 'adv_setting_open', $request->adv_setting_open);
	        	}
	        	if( !empty($request->adv_setting_close) ){
	        		$this->add_venue_meta($venue->id, 'adv_setting_close', $request->adv_setting_close);
	        	}
	        	if( !empty($request->adv_setting_timeset_open) ){
	        		$this->add_venue_meta($venue->id, 'adv_setting_timeset_open', $request->adv_setting_timeset_open);
	        	}
	        	if( !empty($request->adv_setting_timeset_close) ){
	        		$this->add_venue_meta($venue->id, 'adv_setting_timeset_close', $request->adv_setting_timeset_close);
	        	}
	        }
	    }
	    if ($openhours == "always_open") {	        
	        if( !empty($request->always_open) ){
	        	$this->add_venue_meta($venue->id, 'always_open', $request->always_open);
	        }
	    }
	    if ($openhours == "appointment_only") {
	        if( !empty($request->appointment_only) ){
	        	$this->add_venue_meta($venue->id, 'appointment_only', $request->appointment_only);
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
        if( !empty($request->featured) ){
        	$this->add_venue_meta($venue->id, 'featured', $request->featured);
        }
        if( !empty($request->imgother1) ){
        	$this->add_venue_meta($venue->id, 'imgother1', $request->imgother1);
        }
        if( !empty($request->imgother2) ){
        	$this->add_venue_meta($venue->id, 'imgother2', $request->imgother2);
        }
        if( !empty($request->imgother3) ){
        	$this->add_venue_meta($venue->id, 'imgother3', $request->imgother3);
        }
        if( !empty($request->imgother4) ){
        	$this->add_venue_meta($venue->id, 'imgother4', $request->imgother4);
        }

        return redirect()->back()->with('success', 'Venue added successfully.');
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
}
