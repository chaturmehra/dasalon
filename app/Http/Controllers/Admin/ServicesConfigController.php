<?php

namespace App\Http\Controllers\Admin;
use App\Models\Admin\ServiceCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
class ServicesConfigController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Services Config";
    	$meta_description  = "";
    	$meta_keywords     = "";
        $sercat=ServiceCategory::all();
        
        return view('admin/services/services-config/index', compact('title', 'meta_description', 'meta_keywords','sercat'));
    }

    public function create(Request $request)
    {
    	
        $sc = new ServiceCategory;  
        $sc->country =  $request->get('country');  
        $sc->category = $request->get('category');  
        $sc->icon = $request->get('icon');  
        $sc->is_active 	= 1;
        $sc->save();
        return redirect()->back()->with('message', 'Service Category created successfully.');
    }

    public function enabled($id): RedirectResponse
    {
        if($id){
            $sc = new ServiceCategory;

            $sc->exists       = true;
            $sc->id           = $id;
            $sc->is_active    = 1;
            $sc->updated_at   = date('Y-m-d H:i:s');

            $sc->save();

            return redirect()->back()->with('message', 'Service Category status updated successfully.');
        }else{
            return redirect()->back()->with('error', 'Please select Service Category.');
        }
    }

    public function disabled($id): RedirectResponse
    {
    	if($id){
	        $sc = new ServiceCategory;

	        $sc->exists 		= true;
	        $sc->id 			= $id;
	        $sc->is_active 	= 0;
	        $sc->updated_at 	= date('Y-m-d H:i:s');

	        $sc->save();

	        return redirect()->back()->with('message', 'Service Category status updated successfully.');
	    }else{
	    	return redirect()->back()->with('error', 'Please select Service Category.');
	    }
    }

    public function store(Request $request)
    {
    	
        $ssc = new ServiceSubCategory;  
        $ssc->category =  $request->get('category');  
        $ssc->subcategory = $request->get('subcategory');  
        $ssc->save();
        return redirect()->back()->with('message', 'Service SubCategory created successfully.');
    }
}
