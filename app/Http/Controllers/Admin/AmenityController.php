<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Amenity;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
   
    public function index()
    {
        return view('admin/setting/amenity/index');
    }

    public function storeAmenity(Request $request)
    {

        if ($request->hasFile('amenity_icon')) {
            $image = $request->file('amenity_icon');
            $amenity_icon = time().'_amenity.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/amenity');
            $image->move($destinationPath, $amenity_icon);
            $amenity_icon =  '/uploads/amenity/'.$amenity_icon;
        }

        Amenity::create([
            'amenity_name' => $request->amenity_name,
            'partner_type' => $request->partner_type,
            'amenity_type' => $request->amenity_type,
            'amenity_icon' => $amenity_icon,
        ]);
        
        return true;
    }

    public function getAjaxAmenityList(Request $request)
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
        $totalRecords = Amenity::select('count(*) as allcount')->where('amenities.amenity_type', '=', '1')->count();

        $totalRecordswithFilter = Amenity::select('count(*) as allcount')->where('amenity_name', 'like', '%' .$searchValue . '%')->count();

        $records = Amenity::leftJoin('partner_type', 'amenities.partner_type', '=', 'partner_type.id')
          ->where('amenities.amenity_name', 'like', '%' .$searchValue . '%')
          ->where('amenities.amenity_type', '=', '1')
          ->skip($start)
          ->take($rowperpage)
          ->orderBy('id','desc')
          ->get(['amenities.*','partner_type.partner_name']);

        $data_arr = array();
        $i=0;

        foreach($records as $record){

            $id = $record->id;

            if($record->amenity_icon){
                $amenity_icon = '<img src="'.asset($record->amenity_icon).'" height="95px" widht="95px">';
            }else{
                $amenity_icon = '<img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" height="95px" widht="95px">';
            }

            $status = '<button type="button" class="badge badge-danger on_status" data-id="1" id="' . $id . '">Disabled</button>';
            if($record->status == '1'){
                $status = '<button type="button" class="badge badge-success on_status" data-id="0" id="' . $id . '">Enabled</button>';
            }

            ++$i;
            $data_arr[] = array(
             "id" => $i,
             "amenity_name" => $record->amenity_name,
             "partner_type" => $record->partner_name,
             "amenity_icon" => $amenity_icon,
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

    public function changeAmenityStatus($id,$status){
        $statusupdate = Amenity::where('id', $id)->update([
         'status' => $status,
         ]);
         
         return true;
     }


    public function getAjaxSpecialAmenityList(Request $request)
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
        $totalRecords = Amenity::select('count(*) as allcount')->where('amenities.amenity_type', '=', '2')->count();

        $totalRecordswithFilter = Amenity::select('count(*) as allcount')->where('amenity_name', 'like', '%' .$searchValue . '%')->count();

        $records = Amenity::leftJoin('partner_type', 'amenities.partner_type', '=', 'partner_type.id')
          ->where('amenities.amenity_name', 'like', '%' .$searchValue . '%')
          ->where('amenities.amenity_type', '=', '2')
          ->skip($start)
          ->take($rowperpage)
          ->orderBy('id','desc')
          ->get(['amenities.*','partner_type.partner_name']);

        $data_arr = array();
        $i=0;

        foreach($records as $record){

            $id = $record->id;

            if($record->amenity_icon){
                $amenity_icon = '<img src="'.asset($record->amenity_icon).'" height="95px" widht="95px">';
            }else{
                $amenity_icon = '<img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" height="95px" widht="95px">';
            }

            $status = '<button type="button" class="badge badge-danger special_on_status" data-id="1" id="' . $id . '">Disabled</button>';
            if($record->status == '1'){
                $status = '<button type="button" class="badge badge-success special_on_status" data-id="0" id="' . $id . '">Enabled</button>';
            }

            ++$i;
            $data_arr[] = array(
             "id" => $i,
             "amenity_name" => $record->amenity_name,
             "partner_type" => $record->partner_name,
             "amenity_icon" => $amenity_icon,
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

}
