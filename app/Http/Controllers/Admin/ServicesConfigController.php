<?php

namespace App\Http\Controllers\Admin;
use App\Models\Admin\ServiceCategory;
use App\Models\Admin\Service;
use App\Models\Admin\ServiceSubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class ServicesConfigController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Services Config";
    	$meta_description  = "";
    	$meta_keywords     = "";
        $sercat   =ServiceCategory::all();
        $catactive =ServiceCategory::where('is_active', '=', 1)->get();
        $shares = DB::table('services')
       ->leftjoin('service_categories', 'services.categoryid', '=', 'service_categories.id')
        ->leftjoin('service_sub_categories', 'service_sub_categories.servicesubcategoryid', '=', 'services.subcategoryid')
       ->select('services.serviceid','services.is_active','services.servicename','service_categories.category',
       'service_sub_categories.servicesubcategoryid','service_sub_categories.servicesubcategory')
        ->get();
        
         //echo "12345<pre>";print_r($catactive);die;
        $serSubcat=ServiceSubCategory::leftJoin('service_categories', 'service_categories.id', '=', 'service_sub_categories.categoryid')->get(['service_sub_categories.servicesubcategoryid',
            'service_sub_categories.servicesubcategory','service_sub_categories.status','service_categories.category','service_categories.country']);

       //echo "12345<pre>";print_r($serSubcat);die;
        return view('admin/services/services-config/index', compact('title', 'meta_description', 'meta_keywords','sercat','serSubcat','catactive','shares'));
    }

    public function create(Request $request)
    {
    	
        $sc = new ServiceCategory;  
        $sc->country =  getSelectedCountry();  
        $sc->category = $request->get('category');  

        if($request->file('icon')){
            $file= $request->file('icon');
            $filename=$file->getClientOriginalName();
            $file-> move(public_path('uploads/category'), $filename);
            $sc->icon= $filename;
        } 
        $sc->is_active 	= 1;
        $sc->save();
        return redirect()->back()->with('message', 'Service category created successfully.');
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

            return redirect()->back()->with('message', 'Service category status updated successfully.');
        }else{
            return redirect()->back()->with('error', 'Please select service category.');
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

	        return redirect()->back()->with('message', 'Service category status updated successfully.');
	    }else{
	    	return redirect()->back()->with('error', 'Please select service category.');
	    }
    }

    public function edit($id)
    {
        $sc =ServiceCategory::find($id);
        return $sc;
    }

       public function editSubcat($id)
    {
        $ssc =ServiceSubCategory::find($id);
        $ssc = $ssc->leftjoin('service_categories', 'service_sub_categories.categoryid', '=', 'service_categories.id')
        ->where('service_sub_categories.servicesubcategoryid', $id)
        ->first();
        return $ssc;
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
        return redirect()->back()->with('message','Service category updated successfully');
    }

    public function updateSubcat(Request $request)
    {
        $ssc = ServiceSubCategory::find($request->get('subcategory_id'));
        $ssc->categoryid=$request->input('scategory');
        $ssc->servicesubcategory=$request->input('subcategory');
        $ssc->update();
        return redirect()->back()->with('messagesubcat','Service sub-category updated successfully');
    }

    public function store(Request $request)
    {
    	
        $ssc = new ServiceSubCategory;  
        $ssc->categoryid =  $request->get('category');  
        $ssc->servicesubcategory = $request->get('subcategory');  
        $ssc->save();
        return redirect()->back()->with('messagesubcat', 'Service sub-category created successfully.');
    }

     public function enabledSubcat($id): RedirectResponse
    {
        if($id){
            $ssc = new ServiceSubCategory;

            $ssc->exists       = true;
            $ssc->servicesubcategoryid= $id;
            $ssc->status    = 1;
            $ssc->updated_at   = date('Y-m-d H:i:s');

            $ssc->save();

            return redirect()->back()->with('messagessc', 'Service sub-category status updated successfully.');
        }else{
            return redirect()->back()->with('errorssc', 'Please select service sub-category.');
        }
    }

    public function disabledSubcat($id): RedirectResponse
    {
        if($id){
            $ssc = new ServiceSubCategory;

            $ssc->exists         = true;
            $ssc->servicesubcategoryid = $id;
            $ssc->status  = 0;
            $ssc->updated_at     = date('Y-m-d H:i:s');

            $ssc->save();

            return redirect()->back()->with('messagessc', 'Service sub-category status updated successfully.');
        }else{
            return redirect()->back()->with('errorssc', 'Please select service sub-category.');
        }
    }

    public function getSubcategoryAjax($category_id){
        
      
        $getSubcategory = ServiceSubCategory::where('categoryid','=',$category_id)->orderBy('servicesubcategory','asc')->get(['servicesubcategoryid','servicesubcategory']);

        foreach ($getSubcategory as $getAll) {
            echo '<option value="'.$getAll->servicesubcategoryid.'">'.$getAll->servicesubcategory.'</option>';
        }
    }

    public function addservice(Request $request)
    {   $description=$request->get('description');
    	$validator = Validator::make($request->all(), [
            'category'            => 'required',
            'dis_subcategory'     => 'required',
            'servicename'         => 'required',
            
        ], [

             'category.required' => 'The category field is required',
             'dis_subcategory.required' => 'The sub-category is required',
             'servicename.required' => 'The service name is required',
        ]);
 
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => 'Something Wronge']);
        }else{
            $s = new Service;  
            $s->categoryid      = $request->get('category');  
            $s->subcategoryid   = $request->get('dis_subcategory');
            $s->servicename     = $request->get('servicename');
            $s->description     = isset($description)?$description:"";
            $s->is_active       = 1;   
            $s->save();
            return response()->json(['status' => 'success', 'message' => 'Service added successfully']);
        }
        
    }

    public function enabledservice($serviceid): RedirectResponse
    {
        if($serviceid){
            $s = new Service;

            $s->exists       = true;
            $s->serviceid    = $serviceid;
            $s->is_active    = 1;
            $s->updated_at   = date('Y-m-d H:i:s');

            $s->save();

            return redirect()->back()->with('messagestatus', 'Service status updated successfully.');
        }else{
            return redirect()->back()->with('errorstatus', 'Please select service.');
        }
    }

    public function disabledservice($serviceid): RedirectResponse
    {
    	if($serviceid){
	        $s = new Service;

	        $s->exists 		= true;
	        $s->serviceid 	= $serviceid;
	        $s->is_active 	= 0;
	        $s->updated_at 	= date('Y-m-d H:i:s');
	        $s->save();

	        return redirect()->back()->with('messagestatus', 'Service status updated successfully.');
	    }else{
	    	return redirect()->back()->with('errorstatus', 'Please select service.');
	    }
    }

    public function getServiceAjax($subcategory_id){
        
        $getService = Service::where('subcategoryid','=',$subcategory_id)->orderBy('servicename','asc')->get(['serviceid','servicename']);
       
        foreach ($getService as $gets) {
            echo '<option value="'.$gets->serviceid.'">'.$gets->servicename.'</option>';
        }
    }

    public function edit_view($serviceid){
        
        $s = Service::where('serviceid', $serviceid)->get();
       if (!$s) {
            return response()->json(['error' => 'Service not found'], 404);
        }
        return response()->json($s);
    }

    
    public function updateservice(Request $request)
    {   

        $s = Service::find($request->get('service_id'));
        $validator = Validator::make($request->all(), [
            'edit_category'           => 'required',
            'edit_subcategory'        => 'required',
            'edit_servicename'        => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => 'Something Wronge']);
        }
        else{
        $s->categoryid=$request->get('edit_category');
        $s->subcategoryid=$request->get('edit_subcategory');
        $s->servicename=$request->get('edit_servicename');
        $s->description=$request->get('edit_description');
        $s->save();
        return response()->json(['status' => 'success', 'message' => 'Service updated successfully']);
        }
        
    }

    

  
}
