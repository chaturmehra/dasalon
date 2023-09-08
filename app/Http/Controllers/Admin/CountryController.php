<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\CountryConfig;
use App\Models\Admin\PartnerType;
use App\Models\Admin\Cities;
use App\Models\Admin\States;
use App\Models\Admin\PartnerDetails;
use App\Models\Admin\DisableCity;
use App\Models\Admin\Franchise;
use Illuminate\Http\Request;
use App\Models\Admin\BusinessType;
use Illuminate\Http\RedirectResponse; 

class CountryController extends Controller
{
   
    public function index()
    {
        $bts=BusinessType::all();
        return view('admin/setting/country/index',compact('bts'));
    }

    public function countryList()
    {
        return view('admin/setting/country-list');
    }
	
 	public function saveCountry(Request $request){
    //    echo "<pre>"; print_r($request->status); die;
		 CountryConfig::create([
            'country_id' => $request->country,
			'country_code' => $request->country_code,
			'currency_code' => $request->currency_code,
			'currency_sign' => $request->currency_sign,
			'short_name' => $request->short_name,
			'language' => $request->language,
			'no_length' => $request->no_lenght,
			'pin' => $request->pin,
			'status' => $request->status,
        ]);
		return response()->json(['status'=>true]);
	}
	
	public function saveFranchise(Request $request){
		
		 Franchise::create([
            'franchise_country' => $request->franchise_country,
			'franchise_name' => $request->franchise_name,
			'status' => '1',
        ]);
		return response()->json(['status'=>true]);
	}
	
	public function saveDisableCity(Request $request){
		
		 $city=implode(',',$request->dis_city);
		 DisableCity::create([
            'country' => $request->dis_country,
			'state' => $request->dis_state,
			'city' => $city,
			'status' => '1',
        ]);
		return response()->json(['status'=>true]);
	}
	
	public function savePartnerType(Request $request){
		
		 PartnerType::create([
            'partner_name' => $request->partner_type,
			'status' => '1',
        ]);
		return response()->json(['status'=>true]);
	}

    public function store(Request $request): RedirectResponse
    {
        $bt = new BusinessType;
        $bt->businesstype 		= $request->businesstype;
        $bt->is_active 	= 1;
        $bt->save();
        return redirect()->back()->with('message', 'Business Type created successfully.');
    }

    public function enabledbt($bt_id): RedirectResponse
    {
        if($bt_id){
            $bt = new BusinessType;

            $bt->exists       = true;
            $bt->bt_id           = $bt_id;
            $bt->is_active    = 1;
            $bt->updated_at   = date('Y-m-d H:i:s');

            $bt->save();

            return redirect()->back()->with('statusbt', 'Business Type status updated successfully.');
        }else{
            return redirect()->back()->with('errorstatusbt', 'Please select Business Type.');
        }
    }

    public function disabledbt($bt_id): RedirectResponse
    {
    	if($bt_id){
	        $bt = new BusinessType;

	        $bt->exists 		= true;
	        $bt->bt_id 			= $bt_id;
	        $bt->is_active 	= 0;
	        $bt->updated_at 	= date('Y-m-d H:i:s');
            
            // echo "<pre>"; print_r($s->is_active);die;
            
	        $bt->save();

	        return redirect()->back()->with('statusbt', 'Business Type status updated successfully.');
	    }else{
	    	return redirect()->back()->with('errorstatusbt', 'Please select Business Type.');
	    }
    }
	
	public function savePartnerDetails(Request $request){
		
		 PartnerDetails::create([
		    'country' => $request->country,
            'partner_type' => $request->partner_type,
            'partner_name' => $request->partner_name,
			'status' => '1',
        ]);
		return response()->json(['status'=>true]);
	}
	
	public function getAjaxList(Request $request){
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
         $totalRecords = CountryConfig::leftJoin('countries', 'country_config.country_id', '=', 'countries.id')->where('countries.name', 'like', '%' .$searchValue . '%')->skip($start)->take($rowperpage)->orderBy($columnName,$columnSortOrder)->count();
        $totalRecordswithFilter = CountryConfig::leftJoin('countries', 'country_config.country_id', '=', 'countries.id')->where('countries.name', 'like', '%' .$searchValue . '%')->skip($start)->take($rowperpage)->orderBy($columnName,$columnSortOrder)->count();
		
   
        // Fetch records
        $records = CountryConfig::leftJoin('countries', 'country_config.country_id', '=', 'countries.id')->where('countries.name', 'like', '%' .$searchValue . '%')->skip($start)->take($rowperpage)->orderBy($columnName,$columnSortOrder)->get(['country_config.*','countries.name']);
   
        $data_arr = array();
		   
        foreach($records as $record){
			$status = '<button type="submit" class="badge badge-danger on_status" data-id="1" id="' . $record->id . '">DEACTIVE</button>';
            if($record->status == '1'){
                $status = '<button type="submit" class="badge badge-success on_status" data-id="0" id="' . $record->id . '">ACTIVE</button>';
            }
        
           $data_arr[] = array(
             "country_id" => $record->name,
			 "country_code" => $record->country_code,
			 "currency_code" => $record->currency_code,
			 "currency_sign" => $record->currency_sign,
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
	
	    public function changeCountryStatus($id,$status){
        $statusupdate = CountryConfig::where('id', $id)->update([
         'status' => $status,
         ]);
         
         return true;
     }
	 
	 public function changeDisableCityStatus($id,$status){
        $statusupdate = DisableCity::where('id', $id)->update([
         'status' => $status,
         ]);
         
         return true;
     }
	 
	 public function changeFranchiseStatus($id,$status){
        $statusupdate = Franchise::where('id', $id)->update([
         'status' => $status,
         ]);
         
         return true;
     }
	 
	 public function changePartnerTypeStatus($id,$status){
        $statusupdate = PartnerType::where('id', $id)->update([
         'status' => $status,
         ]);
         
         return true;
     }
	 
	  public function changePartnerDetailsStatus($id,$status){
        $statusupdate = PartnerDetails::where('id', $id)->update([
         'status' => $status,
         ]);
         
         return true;
     }
	 
	 public function getFranchiseAjaxList(Request $request){
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
         $totalRecords = Franchise::leftJoin('countries', 'franchise.franchise_country', '=', 'countries.id')->where('countries.name', 'like', '%' .$searchValue . '%')->skip($start)->take($rowperpage)->orderBy($columnName,$columnSortOrder)->count();
        $totalRecordswithFilter = Franchise::leftJoin('countries', 'franchise.franchise_country', '=', 'countries.id')->where('countries.name', 'like', '%' .$searchValue . '%')->skip($start)->take($rowperpage)->orderBy($columnName,$columnSortOrder)->count();
		
   
        // Fetch records
        $records = Franchise::leftJoin('countries', 'franchise.franchise_country', '=', 'countries.id')->where('countries.name', 'like', '%' .$searchValue . '%')->skip($start)->take($rowperpage)->orderBy($columnName,$columnSortOrder)->get(['franchise.*','countries.name']);
   
        $data_arr = array();
		$i=1;
        foreach($records as $record){
			$status = '<button type="submit" class="badge badge-danger on_status_franchise" data-id="1" id="' . $record->id . '">DEACTIVE</button>';
            if($record->status == '1'){
                $status = '<button type="submit" class="badge badge-success on_status_franchise" data-id="0" id="' . $record->id . '">ACTIVE</button>';
            }
        
           $data_arr[] = array(
		     "id" => $i,
             "franchise_country" => $record->name,
			 "franchise_name" => $record->franchise_name,
			 "status" => $status,
           );
		   $i++;
        }
   
        $response = array(
           "draw" => intval($draw),
           "iTotalRecords" => $totalRecords,
           "iTotalDisplayRecords" => $totalRecordswithFilter,
           "aaData" => $data_arr
        );
   
        echo json_encode($response);
    }
	
		 public function getpartnerTypeAjaxList(Request $request){
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
         $totalRecords = PartnerType::where('partner_name', 'like', '%' .$searchValue . '%')->skip($start)->take($rowperpage)->orderBy($columnName,$columnSortOrder)->count();
        $totalRecordswithFilter = PartnerType::where('partner_name', 'like', '%' .$searchValue . '%')->skip($start)->take($rowperpage)->orderBy($columnName,$columnSortOrder)->count();
		
   
        // Fetch records
        $records = PartnerType::where('partner_name', 'like', '%' .$searchValue . '%')->skip($start)->take($rowperpage)->orderBy($columnName,$columnSortOrder)->get();
   
        $data_arr = array();
		$i=1;
        foreach($records as $record){
			$status = '<button type="submit" class="badge badge-danger on_status_partner_type" data-id="1" id="' . $record->id . '">DEACTIVE</button>';
            if($record->status == '1'){
                $status = '<button type="submit" class="badge badge-success on_status_partner_type" data-id="0" id="' . $record->id . '">ACTIVE</button>';
            }
        
           $data_arr[] = array(
		     "id" => $i,
             "partner_name" => $record->partner_name,
			 "status" => $status,
           );
		   $i++;
        }
   
        $response = array(
           "draw" => intval($draw),
           "iTotalRecords" => $totalRecords,
           "iTotalDisplayRecords" => $totalRecordswithFilter,
           "aaData" => $data_arr
        );
   
        echo json_encode($response);
    }
	
	public function getpartnerDetailsAjaxList(Request $request){
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
         $totalRecords = PartnerDetails::leftJoin('countries', 'partner_details.country', '=', 'countries.id')->leftJoin('partner_type', 'partner_details.partner_type', '=', 'partner_type.id')->where('countries.name', 'like', '%' .$searchValue . '%')->skip($start)->take($rowperpage)->orderBy($columnName,$columnSortOrder)->count();
        $totalRecordswithFilter = PartnerDetails::leftJoin('countries', 'partner_details.country', '=', 'countries.id')->leftJoin('partner_type', 'partner_details.partner_type', '=', 'partner_type.id')->where('countries.name', 'like', '%' .$searchValue . '%')->skip($start)->take($rowperpage)->orderBy($columnName,$columnSortOrder)->count();
		
   
        // Fetch records
        $records = PartnerDetails::leftJoin('countries', 'partner_details.country', '=', 'countries.id')->leftJoin('partner_type', 'partner_details.partner_type', '=', 'partner_type.id')->where('countries.name', 'like', '%' .$searchValue . '%')->skip($start)->take($rowperpage)->orderBy($columnName,$columnSortOrder)->get(['partner_details.*','countries.name','partner_type.partner_name']);
   
        $data_arr = array();
		$i=1;
        foreach($records as $record){
			$status = '<button type="submit" class="badge badge-danger on_status_partnar_dtl" data-id="1" id="' . $record->id . '">DEACTIVE</button>';
            if($record->status == '1'){
                $status = '<button type="submit" class="badge badge-success on_status_partnar_dtl" data-id="0" id="' . $record->id . '">ACTIVE</button>';
            }
        
           $data_arr[] = array(
		     "id" => $i,
			 "country" => $record->name,
			 "partner_type" => $record->partner_name,
             "partner_name" => $record->partner_name,
			 "status" => $status,
           );
		   $i++;
        }
   
        $response = array(
           "draw" => intval($draw),
           "iTotalRecords" => $totalRecords,
           "iTotalDisplayRecords" => $totalRecordswithFilter,
           "aaData" => $data_arr
        );
   
        echo json_encode($response);
    }
	
		public function getDisableCityAjaxList(Request $request){
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
         $totalRecords = DisableCity::leftJoin('countries', 'disable_city.country', '=', 'countries.id')->leftJoin('states', 'states.id', '=', 'disable_city.state')->where('countries.name', 'like', '%' .$searchValue . '%')->skip($start)->take($rowperpage)->orderBy($columnName,$columnSortOrder)->count();
        $totalRecordswithFilter = DisableCity::leftJoin('countries', 'disable_city.country', '=', 'countries.id')->leftJoin('states', 'states.id', '=', 'disable_city.state')->where('countries.name', 'like', '%' .$searchValue . '%')->skip($start)->take($rowperpage)->orderBy($columnName,$columnSortOrder)->count();
		
   
        // Fetch records
        $records = DisableCity::leftJoin('countries', 'disable_city.country', '=', 'countries.id')->leftJoin('states', 'states.id', '=', 'disable_city.state')->where('countries.name', 'like', '%' .$searchValue . '%')->skip($start)->take($rowperpage)->orderBy($columnName,$columnSortOrder)->get(['countries.name as country','states.name as state','disable_city.city as city','disable_city.status','disable_city.id']);
   
        $data_arr = array();
		$i=1;
        foreach($records as $record){
			$city_val=array();
			$city_arr=explode(',',$record->city);
			$cities = Cities::whereIn('cities.id',$city_arr)->get();
		    foreach($cities as $val){
				$city_val[]=$val->name;
			}
			$city=implode(',',$city_val);
			$status = '<button type="submit" class="badge badge-danger on_status_disable" data-id="1" id="' . $record->id . '">DEACTIVE</button>';
            if($record->status == '1'){
                $status = '<button type="submit" class="badge badge-success on_status_disable" data-id="0" id="' . $record->id . '">ACTIVE</button>';
            }
        
           $data_arr[] = array(
		     "id" => $i,
			 "country" => $record->country,
			 "state" => $record->state,
             "city" => $city,
			 "status" => $status,
           );
		   $i++;
        }
   
        $response = array(
           "draw" => intval($draw),
           "iTotalRecords" => $totalRecords,
           "iTotalDisplayRecords" => $totalRecordswithFilter,
           "aaData" => $data_arr
        );
   
        echo json_encode($response);
    }

    public function getStateAjax($country_id){

        $getState = States::where('country_id','=',$country_id)->orderBy('name','asc')->get(['id','name']);
        
        foreach ($getState as $getAll) {
            echo '<option value="'.$getAll->id.'">'.$getAll->name.'</option>';
        }
    }

    public function getCityAjax($state_id){

        $getCity = Cities::where('state_id','=',$state_id)->orderBy('name','asc')->get(['id','name']);
        
        foreach ($getCity as $getAll) {
            echo '<option value="'.$getAll->id.'">'.$getAll->name.'</option>';
        }
    }
}
