<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner\UserAuthorization;
use Illuminate\Http\RedirectResponse;

class StaffUserAuthorizationController extends Controller
{
    public function index()
	{
		$title             = "Dasalon :: Staff User Authorization";
		$meta_description  = "";
		$meta_keywords     = "";

		$getpermission = UserAuthorization::get();

		return view('partner/staff/user-authorization/index', compact('title', 'meta_description', 'meta_keywords', 'getpermission'));
	}

	public function storeAuthorization(Request $request)
    {

    	$role_id 		=  $request->role_id;  
    	$page 			=  $request->page;  
    	$subpage 		=  $request->subpage;  
    	$property_value =  $request->property_value;  

    	$onlyPage 	= UserAuthorization::where('page', $page)->whereNull('subpage')->where('role_id', $role_id)->get()->toArray();
    	$subPage 	= UserAuthorization::where('role_id', $role_id)->where('page', $page)->where('subpage', $subpage)->get()->toArray();

    	if ( !empty($onlyPage) && empty($subpage) ) {
    		$record_id = $onlyPage[0]['id'];
    		UserAuthorization::where('id', $record_id)->update([
    			'page'      		=> $page,
    			'subpage'      		=> NULL,
    			'role_id'     		=> $role_id,
    			'property_value'    => $property_value
    		]);

    		$response = array(
				"status" 	=> 1,
				"message" 	=> "Data updated successfully.",
			);

    	}else if(!empty($subPage)){
    		$record_id = $subPage[0]['id'];
    		UserAuthorization::where('id', $record_id)->update([
    			'page'      		=> $page,
    			'subpage'      		=> $subpage,
    			'role_id'     		=> $role_id,
    			'property_value'    => $property_value
    		]);

    		$response = array(
				"status" 	=> 1,
				"message" 	=> "Data updated successfully.",
			);
    	}else{
    		UserAuthorization::create([
    			'page'      		=> $page,
    			'subpage'      		=> $subpage,
    			'role_id'     		=> $role_id,
    			'property_value'    => $property_value
    		]);

    		$response = array(
				"status" 	=> 0,
				"message" 	=> "Data inserted successfully.",
			);
    	}

    	echo json_encode($response);
    }

}
