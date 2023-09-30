<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Amenity;
use App\Models\Admin\AmenityCategory;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;

class AmenityController extends Controller
{

    public function index()
    {
        return view('admin/setting/amenity/index');
    }

    public function storeAmenity(Request $request)
    {
     $validator = Validator::make($request->all(), [

        'amenity_name'     => 'required|unique:amenities',
       

    ]);

    if ($validator->fails()) {
        if($request->ajax()){ 
            $response = array(
                'status' => 0,
                'message' => $validator->errors()
            );
        } 
    } else{

        if ($request->hasFile('amenity_icon')) {
            $image = $request->file('amenity_icon');
            $amenity_icon = time().'_amenity.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/amenity');
            $image->move($destinationPath, $amenity_icon);
            $amenity_icon =  '/uploads/amenity/'.$amenity_icon;
        }

        if($request->amenity_type == 1){
            $acat_name= AmenityCategory::where('amenity_category', $request->amenity_category);
            

            if( !$acat_name->count() ) {
                $acat_id = AmenityCategory::create([
                    'amenity_category' => $request->amenity_category,
                ]);
                
                $acat_id = $acat_id->id;
            } else {
                $acat_id = $acat_name->first()->id;
            }
        }else{
            $acat_id = "";
        }

        Amenity::create([
            'amenity_name' => $request->amenity_name,
            'amenity_category' => isset($acat_id) ? $acat_id : "",
            'partner_type' => $request->partner_type,
            'amenity_type' => $request->amenity_type,
            'amenity_icon' => $amenity_icon,
        ]);
        
        $response = array(
            'status' => 1,
            'message' => 'Amenity has been created successfully!'
        );
    }
    
    if($request->ajax()){ 
        echo json_encode( $response );
    } else {
        return true;
    }
}

public function getAjaxAmenityList(Request $request)
{
        $draw               = $request->get('draw');
        $start              = $request->get("start");
        $rowperpage         = $request->get("length");

        $columnIndex_arr    = $request->get('order');
        $columnName_arr     = $request->get('columns');
        $order_arr          = $request->get('order');
        $search_arr         = $request->get('search');

        $columnIndex        = $columnIndex_arr[0]['column']; 
        $columnName         = $columnName_arr[$columnIndex]['data']; 
        $columnSortOrder    = $order_arr[0]['dir']; 
        $searchValue        = $search_arr['value']; 

        $totalRecords       = Amenity::select('count(*) as allcount')->where('amenities.amenity_type', '=', '1')->count();


        $totalRecordswithFilter = Amenity::select('count(*) as allcount')->where('amenity_name', 'like', '%' .$searchValue . '%')->where('amenities.amenity_type', '=', '1')->count();

        $records = Amenity::leftJoin('partner_type', 'amenities.partner_type', '=', 'partner_type.id')
        ->leftJoin('amenity_categories', 'amenities.amenity_category', '=', 'amenity_categories.id')
        ->where('amenities.amenity_name', 'like', '%' .$searchValue . '%')
        ->where('amenities.amenity_type', '=', '1')
        ->skip($start)
        ->take($rowperpage)
        ->orderBy('id','desc')
        ->get(['amenities.*','partner_type.partner_name','amenity_categories.amenity_category']);

       
        $data_arr = array();
        $i=0;

        foreach($records as $record){

            $id = $record->id;

            if($record->amenity_icon){
                $amenity_icon = '<img src="'.asset('public'.$record->amenity_icon).'" height="95px" widht="95px">';
            }else{
                $amenity_icon = '<img src="' . asset("public/assets/media/avatars/blank.png") . '"  height="95px" width="95px"';
            }

            $status = '<button type="button" class="badge badge-danger on_status" data-id="1" id="' . $id . '">Disabled</button>';
            if($record->status == '1'){
                $status = '<button type="button" class="badge badge-success on_status" data-id="0" id="' . $id . '">Enabled</button>';
            }

            ++$i;
            $data_arr[] = array(
               "id" => $i,
               "amenity_name"     => $record->amenity_name,
               "amenity_category" => $record->amenity_category,
               "partner_type"     => $record->partner_name,
               "amenity_icon"     => $amenity_icon,
               "status"           => $status,
           );
        }

        $response = array(
         "draw"                 => intval($draw),
         "iTotalRecords"        => $totalRecords,
         "iTotalDisplayRecords" => $totalRecordswithFilter,
         "aaData"               => $data_arr
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
        $draw               = $request->get('draw');
        $start              = $request->get("start");
        $rowperpage         = $request->get("length"); 
        $columnIndex_arr    = $request->get('order');
        $columnName_arr     = $request->get('columns');
        $order_arr          = $request->get('order');
        $search_arr         = $request->get('search');
       
        $columnIndex        = $columnIndex_arr[0]['column']; 
        $columnName         = $columnName_arr[$columnIndex]['data']; 
        $columnSortOrder    = $order_arr[0]['dir']; 
        $searchValue        = $search_arr['value']; 
              
        $totalRecords = Amenity::where('amenities.amenity_type', '=', '2')->count();

        $totalRecordswithFilter = Amenity::select('count(*) as allcount')->where('amenity_name', 'like', '%' .$searchValue . '%')->where('amenities.amenity_type', '=', '2')->count();

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
                $amenity_icon = '<img src="'.asset('public'.$record->amenity_icon).'" height="95px" widht="95px">';
            }else{
                $amenity_icon = '<img src="' . asset("public/assets/media/avatars/blank.png") . '"  height="95px" width="95px"';
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
         "draw"                 => intval($draw),
         "iTotalRecords"        => $totalRecords,
         "iTotalDisplayRecords" => $totalRecordswithFilter,
         "aaData" => $data_arr
     );

        echo json_encode($response);

    }

}
