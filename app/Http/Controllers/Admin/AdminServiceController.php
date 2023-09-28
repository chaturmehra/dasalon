<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\ServiceCategory;
use App\Models\Admin\Service;
use App\Models\Admin\ServiceSubCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use SplFileObject;
use Illuminate\Support\Facades\Validator;
class AdminServiceController extends Controller
{
    public function index(Request $request)
    {
    	$title             = "Dasalon :: Service";
    	$meta_description  = "";
    	$meta_keywords     = "";
        

       	$service_by_admin = Service::leftjoin('service_categories','service_categories.id','=','services.categoryid')->leftjoin('service_sub_categories','service_sub_categories.servicesubcategoryid','=','services.subcategoryid')->select('services.*','service_categories.category','service_sub_categories.servicesubcategory')->where('services.created_by', '=', 0)->get();
             // $servicename =  $service_by_admin[0]->servicename;
             // $number_of_service= Service::where('servicename','=',$servicename)->count();
        //,'number_of_service'
             //echo"<pre>";print_r($number_of_service);die;


       	$service_by_partner = Service::leftjoin('service_categories','service_categories.id','=','services.categoryid')->leftjoin('service_sub_categories','service_sub_categories.servicesubcategoryid','=','services.subcategoryid')->select('services.*','service_categories.category','service_sub_categories.servicesubcategory',)->where('services.created_by', '!=', 0)->get();
        
        return view('admin/services/service/index', compact('title', 'meta_description', 'meta_keywords','service_by_admin','service_by_partner'));
    }

    public function enableByAdmin($id): RedirectResponse
    {
        if($id){
            $rp = new Service;

            $rp->exists       = true;
            $rp->serviceid    = $id;
            $rp->is_active    = 1;
            $rp->updated_at   = date('Y-m-d H:i:s');

            $rp->save();

            return redirect()->back()->with('messagestatusrp', 'Service by admin status updated successfully.');
        }else{
            return redirect()->back()->with('errorstatusrp', 'Please select Service by admin enable updated.');
        }
    }

    public function disableByAdmin($id): RedirectResponse
    {
        if($id){
            $rp = new Service;

            $rp->exists         = true;
            $rp->serviceid      = $id;
            $rp->is_active      = 0;
            $rp->updated_at     = date('Y-m-d H:i:s');
            
            $rp->save();

            return redirect()->back()->with('messagestatusrp', 'Service by admin status updated successfully.');
        }else{
            return redirect()->back()->with('errorstatusrp', 'Please select Service by admin disable updated.');
        }
    }


    public function editAdmin($service_id){
    	
    	$admin= Service::leftjoin('service_categories','service_categories.id','=','services.categoryid')->leftjoin('service_sub_categories','service_sub_categories.servicesubcategoryid','=','services.subcategoryid')->select('services.*','service_categories.category','service_sub_categories.servicesubcategory')->where('services.created_by', '=', 0)->where('serviceid', '=', $service_id)->get();
        echo json_encode($admin);
    }

    
    public function updateAdmin(Request $request)
    {
        $s = Service::find($request->get('service_id'));
        $validator = Validator::make($request->all(), [
            'category'           => 'required',
            'subcategory'        => 'required',
            'servicename'        => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => 'Something Wronge']);
        }
        else{
            $s->categoryid = $request->get('category');
            $s->subcategoryid = $request->get('subcategory');
            $s->servicename = $request->get('servicename');
            $s->save();
            return response()->json(['status' => 'success', 'message' => 'Service updated successfully']);
        }
              
    }

    public function exportAdmin(){
        $service_by_admin = Service::leftjoin('service_categories','service_categories.id','=','services.categoryid')->leftjoin('service_sub_categories','service_sub_categories.servicesubcategoryid','=','services.subcategoryid')->select('services.*','service_categories.category','service_sub_categories.servicesubcategory')->where('services.created_by', '=', 0)->get();

        $csvFileName = "service_by_admin.csv";
        $csvFile = new SplFileObject(storage_path('app/' . $csvFileName), 'w');

        $csvFile->fputcsv(['S.NO',
        'Service Name', 'Category Name', 'Subcategory Name', 'Number Of Partner'
        ]);
        
        $i=1;
        foreach ($service_by_admin as $row) {
                $csvFile->fputcsv([
                	$i++,
                    $row->servicename,
                    $row->category,
                    $row->servicesubcategory,
                    
            ]);
        }
    }
    

    public function enableByPartner($id): RedirectResponse
    {
        if($id){
            $rp = new Service;

            $rp->exists       = true;
            $rp->serviceid    = $id;
            $rp->is_active    = 1;
            $rp->updated_at   = date('Y-m-d H:i:s');

            $rp->save();

            return redirect()->back()->with('messagestatusrp', 'Service by partner status updated successfully.');
        }else{
            return redirect()->back()->with('errorstatusrp', 'Please select Service by admin partner updated.');
        }
    }

    public function disableByPartner($id): RedirectResponse
    {
        if($id){
            $rp = new Service;

            $rp->exists         = true;
            $rp->serviceid      = $id;
            $rp->is_active      = 0;
            $rp->updated_at     = date('Y-m-d H:i:s');
            
            $rp->save();

            return redirect()->back()->with('messagestatusrp', 'Service by partner status updated successfully.');
        }else{
            return redirect()->back()->with('errorstatusrp', 'Please select Service by partner disable updated.');
        }
    }


    public function editPartner($partner_id){
    	$partner = Service::leftjoin('service_categories', 'service_categories.id', '=', 'services.categoryid')
			    ->leftJoin('service_sub_categories', 'service_sub_categories.servicesubcategoryid', '=', 'services.subcategoryid')
			    ->select('services.*', 'service_categories.category', 'service_sub_categories.servicesubcategory')
			    ->where('services.created_by', '!=', 0)
			    ->where('serviceid', '=', $partner_id)
			    ->get();
        echo json_encode($partner);
    }

    
    public function updatePartner(Request $request)
    {
        $s = Service::find($request->get('partner_id'));
        $validator = Validator::make($request->all(), [
            'partner_category'           => 'required',
            'partner_subcategory'        => 'required',
            'partner_servicename'        => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => 'Something Wronge']);
        }
        else{
           $s->categoryid=$request->get('partner_category');
           $s->subcategoryid=$request->get('partner_subcategory');
           $s->servicename=$request->get('partner_servicename');
           $s->save();
            return response()->json(['status' => 'success', 'message' => 'Service updated successfully']);
        }
    }

    public function exportPartner(){
        $service_by_partner = Service::leftjoin('service_categories','service_categories.id','=','services.categoryid')->leftjoin('service_sub_categories','service_sub_categories.servicesubcategoryid','=','services.subcategoryid')->select('services.*','service_categories.category','service_sub_categories.servicesubcategory',)->where('services.created_by', '=', 1)->get();

        $csvFileName = "service_by_partner.csv";
        $csvFile = new SplFileObject(storage_path('app/' . $csvFileName), 'w');

        $csvFile->fputcsv(['S.NO',
        'Service Name', 'Category Name', 'Subcategory Name', 'Number Of Partner'
        ]);
        
        $i=1;
        foreach ($service_by_partner as $row) {
                $csvFile->fputcsv([
                	$i++,
                    $row->servicename,
                    $row->category,
                    $row->servicesubcategory,
                    
            ]);
        }

        $csvFile = null;
        return response()->download(storage_path('app/' . $csvFileName));

    }

}    