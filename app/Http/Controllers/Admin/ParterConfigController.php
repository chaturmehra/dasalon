<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Role;
use Illuminate\Http\Request;
use App\Models\Admin\PartnerTypeProperty;
use App\Models\Admin\PartnerType;
class ParterConfigController extends Controller
{
   
    public function index()
    {
        $showallp=PartnerTypeProperty::all();
        $showall=PartnerType::all();
        return view('admin/setting/partner_config/index', compact('showallp','showall')); 
       
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
        $rowperpage = $request->get("length"); // Rows display per page
   
        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');
   
        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

                // Total records
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


public function changeSalonStatus($id,$statussalon){
    $statusupdate = PartnerTypeProperty::where('id', $id)->update([
     'Salon_status' => $statussalon,
     ]);
     
     return true;
 }
}