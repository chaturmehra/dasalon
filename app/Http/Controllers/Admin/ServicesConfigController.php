<?php

namespace App\Http\Controllers\Admin;
use App\Models\Admin\ServiceCategory;
use App\Models\Admin\Service;
use App\Models\Admin\ServiceSubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\PartnerType;
use App\Models\Admin\RecommendedPackage;
class ServicesConfigController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Services Config";
    	$meta_description  = "";
    	$meta_keywords     = "";
        $sercat=ServiceCategory::all();
        $shares = DB::table('services')
       ->leftjoin('service_categories', 'services.categoryid', '=', 'service_categories.id')
        ->leftjoin('service_sub_categories', 'service_sub_categories.servicesubcategoryid', '=', 'services.subcategoryid')
       ->select('services.serviceid','services.is_active','services.servicename','service_categories.category','service_sub_categories.servicesubcategory')
        ->get();
        $pt=PartnerType::all(); 
        $rp=RecommendedPackage::all();
        return view('admin/services/services-config/index', compact('title', 'meta_description', 'meta_keywords','sercat','shares','pt','rp'));
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
        $ssc->categoryid =  $request->get('category');  
        $ssc->servicesubcategory = $request->get('subcategory');  
        $ssc->save();
        return redirect()->back()->with('message', 'Service SubCategory created successfully.');
    }

    public function getSubcategoryAjax($category_id){

        $getSubcategory = ServiceSubCategory::where('categoryid','=',$category_id)->orderBy('servicesubcategory','asc')->get(['servicesubcategoryid','servicesubcategory']);
        // echo "<pre>"; print_r($getSubcategory);die;
        foreach ($getSubcategory as $getAll) {
            echo '<option value="'.$getAll->servicesubcategoryid.'">'.$getAll->servicesubcategory.'</option>';
        }
    }

    public function addservice(Request $request)
    {
    	
        $s = new Service;  
        $s->categoryid =  $request->get('category');  
        $s->subcategoryid = $request->get('dis_subcategory');
        $s->servicename = $request->get('servicename');
        $s->is_active 	= 1;   
        $s->save();
        return redirect()->back()->with('messageservice', 'Services created successfully.');
    }

    public function enabledservice($serviceid): RedirectResponse
    {
        if($serviceid){
            $s = new Service;

            $s->exists       = true;
            $s->serviceid           = $serviceid;
            $s->is_active    = 1;
            $s->updated_at   = date('Y-m-d H:i:s');

            $s->save();

            return redirect()->back()->with('messagestatus', 'Service status updated successfully.');
        }else{
            return redirect()->back()->with('errorstatus', 'Please select Service.');
        }
    }

    public function disabledservice($serviceid): RedirectResponse
    {
    	if($serviceid){
	        $s = new Service;

	        $s->exists 		= true;
	        $s->serviceid 			= $serviceid;
	        $s->is_active 	= 0;
	        $s->updated_at 	= date('Y-m-d H:i:s');
            
            // echo "<pre>"; print_r($s->is_active);die;
            
	        $s->save();

	        return redirect()->back()->with('messagestatus', 'Service status updated successfully.');
	    }else{
	    	return redirect()->back()->with('errorstatus', 'Please select Service.');
	    }
    }

    public function getServiceAjax($subcategory_id){
        
        $getService = Service::where('subcategoryid','=',$subcategory_id)->orderBy('servicename','asc')->get(['serviceid','servicename']);
        // echo "<pre>"; print_r($getService);die;
        foreach ($getService as $gets) {
            echo '<option value="'.$gets->serviceid.'">'.$gets->servicename.'</option>';
        }
    }

    public function addrecommendedpackage(Request $request)
    {
    	
        $s = new RecommendedPackage;  
        $s->packagename =  $request->get('packagename');  
        $s->gender = $request->get('gender');
        $s->categoryid = $request->get('categoryid');
        $s->subcategoryid = $request->get('getdis_subcategory');
        $s->serviceid = $request->get('dis_service');
        $s->partnerid = $request->get('partnerid');
        $s->businesstypeid = $request->get('businesstypeid');
        $s->uniqueid = $request->get('uniqueid');
        $s->discount = $request->get('discount');
        $s->is_active 	= 1;   
        $s->save();
        return redirect()->back()->with('messagerp', 'Recommended Package created successfully.');
    }
}
