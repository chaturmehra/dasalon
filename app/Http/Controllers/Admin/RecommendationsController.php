<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\ServiceCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\PartnerType;
use App\Models\Admin\RecommendedPackage;
use App\Models\Admin\BusinessType;
use Illuminate\Http\RedirectResponse;

class RecommendationsController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Services Recommendations";
    	$meta_description  = "";
    	$meta_keywords     = "";
        
        $catactive=ServiceCategory::where('is_active', '=', 1)->get();
        $pt=PartnerType::all(); 
        $rp=RecommendedPackage::all();
        $bt=BusinessType::all();
        return view('admin/services/recommendations/index', compact('title', 'meta_description', 'meta_keywords','catactive','pt','rp','bt'));
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
        $s->is_active   = 1;   
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

            $rp->exists         = true;
            $rp->rp_id          = $rp_id;
            $rp->is_active  = 0;
            $rp->updated_at     = date('Y-m-d H:i:s');
            
            // echo "<pre>"; print_r($s->is_active);die;
            
            $rp->save();

            return redirect()->back()->with('messagestatusrp', 'Recommended Package status updated successfully.');
        }else{
            return redirect()->back()->with('errorstatusrp', 'Please select Recommended Package.');
        }
    }
}
