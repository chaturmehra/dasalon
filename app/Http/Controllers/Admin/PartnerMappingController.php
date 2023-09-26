<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ServiceCategory;
use App\Models\Admin\ServiceSubCategory;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Admin\PartnerMapping;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\BusinessType;
use Illuminate\Support\Facades\DB;
class PartnerMappingController extends Controller
{

    public function index()
    {
    	$title                 = "Dasalon :: Services Partner Mapping";
    	$meta_description      = "";
    	$meta_keywords         = "";

        $businesstpes          = BusinessType::all();
        $ServiceCategory       = ServiceCategory::where('is_active', '=', 1)->get();
        
         $service_data =  PartnerMapping::leftjoin('service_categories','service_categories.id','=','partner_service_mapping.service_id')->leftjoin('service_sub_categories','service_sub_categories.servicesubcategoryid','=','partner_service_mapping.subcategory_id')->leftjoin('business_types','business_types.bt_id', '=','partner_service_mapping.business_id')->select('service_categories.category','service_sub_categories.servicesubcategory','business_types.businesstype','partner_service_mapping.id','partner_service_mapping.status')->get();
        
        return view('admin/services/partner-mapping/index', compact('title', 'meta_description', 'meta_keywords','ServiceCategory','businesstpes','service_data'));
    }

    public function addServiceMapping(Request $request){
        $partnermapping                 = new PartnerMapping;
        $partnermapping->service_id     =$request->get('servicecategory');
        
        $partnermapping->subcategory_id =$request->get('getdis_subcategory');
        $bussiness=$request->get('businesstypeid');
        $partnermapping->business_id   = isset($bussiness)?$bussiness:0;
        $partnermapping->status        = 0;
        $partnermapping->save();

        return redirect()->back()->with('success', 'Service mapping Added successfully.');
    }

    public function statuServiceMapping(Request $request)
    {   DB::enableQueryLog();
        $p_id   = $request->p_id;
        $status = $request->status;
        if ($status == "true") {
            $statusValue = 1;
        }else{
            $statusValue = 0;
        }
        
        PartnerMapping::where('id', $p_id)->update([
            'status' => $statusValue,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        $response = [
            'status' => 'success',
            'message' => 'Successfully Update.',
        ];

        return response()->json($response);
    }



}
