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
use App\Models\Admin\BusinessType;

class ServicesConfigController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Services Config";
    	$meta_description  = "";
    	$meta_keywords     = "";
        $sercat=ServiceCategory::all();
        $catactive=ServiceCategory::where('is_active', '=', 1)->get();
        $shares = DB::table('services')
       ->leftjoin('service_categories', 'services.categoryid', '=', 'service_categories.id')
        ->leftjoin('service_sub_categories', 'service_sub_categories.servicesubcategoryid', '=', 'services.subcategoryid')
       ->select('services.serviceid','services.is_active','services.servicename','service_categories.category',
       'service_sub_categories.servicesubcategoryid','service_sub_categories.servicesubcategory')
        ->get();
        $pt=PartnerType::all(); 
        $rp=RecommendedPackage::all();
        $bt=BusinessType::all();
        return view('admin/services/services-config/index', compact('title', 'meta_description', 'meta_keywords','sercat','catactive','shares','pt','rp','bt'));
    }

    public function create(Request $request)
    {
    	
    //    $request->validate(['icon'=>'required']);
        $sc = new ServiceCategory;  
        $sc->country =  $request->get('country');  
        $sc->category = $request->get('category');  

        if($request->file('icon')){
            $file= $request->file('icon');
            $filename=$file->getClientOriginalName();
            $file-> move(public_path('uploads/category'), $filename);
            $sc->icon= $filename;
        } 
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

    public function edit($id)
    {
        $sc =ServiceCategory::find($id);
        return $sc;
    }

    public function update(Request $request)
    {
        $sc = ServiceCategory::find($request->get('category_id'));
        $sc->category=$request->input('category');
    
        if($request->file('avatar')){
            $file= $request->file('avatar');
            $filename=$file->getClientOriginalName();
            $file-> move(public_path('uploads/category'), $filename);
            $sc->icon= $filename;
        }
        $sc->update();
        return redirect()->back()->with('message','Service Category Updated Successfully');
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

    public function edit_view($serviceid){
        $s =Service::find($serviceid);
        return $s;
    }

    
    public function updateservice(Request $request)
    {
        $s = Service::find($request->get('service_id'));
        $s->categoryid=$request->input('categoryid');
        $s->subcategoryid=$request->input('dis_subcategory3');
        $s->servicename=$request->input('servicename');
        $s->update();
        return redirect()->back()->with('messageus','Service Updated Successfully');
    }

    public function addrecommendedpackage(Request $request)
    {
    	$but=implode(", ", $request->get('businesstypeid'));
        $service=implode(", ",$request->get('dis_service'));
        $partnerid=implode(", ", $request->get('partnerid'));
        $s = new RecommendedPackage;  
        $s->packagename =  $request->get('packagename');  
        $s->gender = $request->get('gender');
        $s->categoryid = $request->get('categoryid');
        $s->subcategoryid = $request->get('getdis_subcategory');
        $s->serviceid = $service;
        $s->partnerid = $partnerid;
        $s->businesstypeid = $but;
        $s->uniqueid = $request->get('uniqueid');
        $s->discount = $request->get('discount');
        $s->is_active 	= 1;   
        $s->save();
        return redirect()->back()->with('messagerp', 'Recommended Package created successfully.');
    }

    public function enabledrp($rp_id): RedirectResponse
    {
        if($rp_id){
            $rp = new RecommendedPackage;

            $rp->exists       = true;
            $rp->rp_id           = $rp_id;
            $rp->is_active    = 1;
            $rp->updated_at   = date('Y-m-d H:i:s');

            $rp->save();

            return redirect()->back()->with('messagestatusrp', 'Recommended Package status updated successfully.');
        }else{
            return redirect()->back()->with('errorstatusrp', 'Please select Recommended Package.');
        }
    }

    public function disabledrp($rp_id): RedirectResponse
    {
    	if($rp_id){
	        $rp = new RecommendedPackage;

	        $rp->exists 		= true;
	        $rp->rp_id 			= $rp_id;
	        $rp->is_active 	= 0;
	        $rp->updated_at 	= date('Y-m-d H:i:s');
            
            // echo "<pre>"; print_r($s->is_active);die;
            
	        $rp->save();

	        return redirect()->back()->with('messagestatusrp', 'Recommended Package status updated successfully.');
	    }else{
	    	return redirect()->back()->with('errorstatusrp', 'Please select Recommended Package.');
	    }
    }
}
