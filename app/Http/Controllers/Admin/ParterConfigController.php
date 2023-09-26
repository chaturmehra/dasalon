<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Role;
use Illuminate\Http\Request;
use App\Models\Admin\PartnerTypeProperty;
use App\Models\Admin\PartnerType;
use App\Models\ProfileFeature;
use App\Models\PartnerTypePropertyPermission;
use App\Models\Admin\ProfileFeaturePermission;
use DB;
class ParterConfigController extends Controller
{
   
    public function index()
    {
        $showallp = PartnerTypeProperty::leftJoin('partner_type_property_permissions', 'partner_type_properties.id', '=', 'partner_type_property_permissions.partner_type_property_id')->get();
 
        $showpfp = ProfileFeature::leftJoin('profile_feature_permissions', 'profile_features.id', '=', 'profile_feature_permissions.profilefeature_id')->get()->toArray();

        $profile_feature_perm = [];
        if( !empty($showpfp) ) {
          foreach($showpfp as $key => $arr ) {
            $profile_feature_perm[$arr["profilefeature_id"]][$arr["role_id"]] = $arr;
          }
        }

        $showall=PartnerType::all();
        $roleall=Role::all();
        return view('admin/setting/partner_config/index', compact('showallp','showall','showpfp','roleall','profile_feature_perm')); 
       
    }

    public function saveRole(Request $request)
    {

        Role::create([
            'role_name' => $request->role_name,
        ]);
        
        return true;
    }

    public function getAjaxList(Request $request)
    { 
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); 
   
        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');
   
        $columnIndex = $columnIndex_arr[0]['column']; 
        $columnName = $columnName_arr[$columnIndex]['data'];  
        $columnSortOrder = $order_arr[0]['dir']; 
        $searchValue = $search_arr['value']; 

        $totalRecords = Role::select('count(*) as allcount')->where('role.role_name', '=', '1')->count();

        $totalRecordswithFilter = Role::select('count(*) as allcount')->where('role.role_name', 'like', '%' .$searchValue . '%')->count();

        $records = Role::where('role.role_name', 'like', '%' .$searchValue . '%')
          ->skip($start)
          ->take($rowperpage)
          ->orderBy('id','desc')
          ->get();

        $data_arr = array();
        $i=0;

        foreach($records as $record){

            $id = $record->id;


			$status = '<button type="submit" class="badge badge-danger on_status" data-id="1" id="' . $record->id . '">DEACTIVE</button>';
            if($record->status == '1'){
                $status = '<button type="submit" class="badge badge-success on_status" data-id="0" id="' . $record->id . '">ACTIVE</button>';
            }
            ++$i;
            $data_arr[] = array(
             "id" => $i,
             "role_name" => $record->role_name,
             "status" => $status,
           );
        }

        $response = array(
           "draw" => intval($draw),
           "iTotalRecords" => $totalRecords,
           "iTotalDisplayRecords" => $totalRecordswithFilter,
           "aaData" => $data_arr
        );
   
        echo json_encode($response);

    }

    public function changeRoleStatus($id,$status){
        $statusupdate = Role::where('id', $id)->update([
         'status' => $status,
         ]);
         
         return true;
     }

     public function savepartnertypeProperty(Request $request)
     {
 
        PartnerTypeProperty::create([
             'property' => $request->property,
             'remark' => $request->remark,
             'option' => $request->option,
         ]);
         
         return true;
     }


   public function changePropertypermission(Request $request){
    $property_id =  $request->get('property_id');  
    $partner_type_id =  $request->get('partner_type_id');  
    $getRecord = PartnerTypePropertyPermission::where('partner_type_property_id', $property_id)->where('partner_type_id', $partner_type_id)->first();
   
    if($getRecord){
        PartnerTypePropertyPermission::where('id', $getRecord->id)->
        update([
           'partner_type_property_id' =>$getRecord->partner_type_property_id,  
           'partner_type_id' => $getRecord->partner_type_id,  
          'property_value' => $request->property_value,  
           'remarkpermission' => $request->remark, 
            
        ]);
         }
       else{
         $permission = new PartnerTypePropertyPermission;  
         $permission->partner_type_property_id =  $request->get('property_id');  
         $permission->partner_type_id = $request->get('partner_type_id');  
         $permission->property_value = $request->get('property_value');  
         $permission->remarkpermission = $request->get('remark');  
         $permission->save();
       }
       return true; 
     }

     public function saveprofileFeature(Request $request)
     {
        $request->validate (["feature"=>"required |unique:profile_features"]);
        ProfileFeature::create([
             'feature' => $request->feature,
         ]);
         
         return redirect()->back();
     }


     public function changeProfilefeaturepermission(Request $request){

        $profilefeature_id =  $request->get('profilefeature_id');  
        $role_id =  $request->get('role_id');  

        $getRecord = ProfileFeaturePermission::where('profilefeature_id', $profilefeature_id)->where('role_id', $role_id)->first();
       
        if($getRecord){
            ProfileFeaturePermission::where('profilefeaturepermission_id', $getRecord->profilefeaturepermission_id)->
            update([
               'profilefeature_id' =>$getRecord->profilefeature_id,  
               'role_id' => $getRecord->role_id,  
              'property_value' => $request->property_value,   
            ]);
        }
           else{
             $perm = new ProfileFeaturePermission;  
             $perm->profilefeature_id =  $request->get('profilefeature_id');  
             $perm->role_id = $request->get('role_id');  
             $perm->property_value = $request->get('property_value');   
             $perm->save();
           }
           return true; 
         }
}
