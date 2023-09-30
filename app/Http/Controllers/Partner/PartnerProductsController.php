<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner\Venue;
use App\Models\Partner\VenueMeta;
use App\Models\Partner\PartnerProducts;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;

class PartnerProductsController extends Controller
{
    public function index()
    {
    	
    	$title             = "Dasalon :: Products";
		$meta_description  = "";
		$meta_keywords     = "";

		$partner_id 		= Auth::user()->id;

        $venues 			= Venue::where('partner_id', $partner_id)->get()->toArray();
		
		$venue_data_array 	= $this->array_by_ids($venues, "id");
		$venue_ids 			= array_column($venues, 'id');
		$venue_meta 		= $this->get_venue_meta_by_venue_ids($venue_ids);

		$venue_data_arr = [];
		if ( !empty($venue_data_array) ) {
			$i=0;
			foreach ($venue_data_array as $vkey => $venue_data) {
				$venue_id 			= $venue_data["id"];
				$venue_meta_data 	= $venue_meta[$venue_id];

				$venue_data["venue_meta"] = $venue_meta_data;
				$venue_data_arr[] = $venue_data;

				$i++;
			}
		}

        $productLists 	= $this->PartnerProductsLists($partner_id);
        
		$partner_country_config = getPartnerCountryConfig($partner_id);

        return view('partner/services/products/index', compact('title', 'meta_description', 'meta_keywords', 'productLists', 'partner_country_config', 'venue_data_arr'));
    }

    public function productsStore(Request $request)
	{
		$partner_id = Auth::user()->id;
		$validator = Validator::make($request->all(), [
            'brand_name'      		=> 'required',
            'product_category'      => 'required',
            'product_type'      	=> 'required',
            'product_name'   		=> 'required|unique:partner_products',
            'description'    		=> 'required',
            'measure'      			=> 'required',
            'measure_value'        	=> 'required',
            /*'supply_price'      	=> 'required',
            'selling_price'   		=> 'required|integer',
            'markup_price'    		=> 'required|integer',*/
            'sku'      				=> 'required',
            'supplier'        		=> 'required',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
// echo "<pre>"; print_r($request->all()); die;
        if( !empty($request['stock_management']) ){
			if ( !empty($request['stock_management']['venue_id']) || !empty($request['stock_management']['stock_quantity']) || !empty($request['stock_management']['stock_level']) || !empty($request['stock_management']['reorder_qty']) ) {
				$stock_management 		= json_encode($request['stock_management']);
			}
		}

		/*$venues = "";
		if ( !empty($request['venues']) ) {
			$venues = implode(',', $request['venues']);
		}*/

		if ($request->hasFile('product_image')) {
			$image = $request->file('product_image');
			$product_image = time().'_product_image.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/product-images');
			$image->move($destinationPath, $product_image);
			$product_image =  '/uploads/product-images/'.$product_image;
		}else{
			$product_image = "";
		}

		$PartnerProducts = PartnerProducts::create([
			'partner_id'      	=> $partner_id,
			'brand_name'   		=> 1,
			'product_category'  => 1,
			'product_type'  	=> 1,
			'product_name'    	=> $request->product_name,
			'description' 		=> $request->description,
			'measure'  			=> $request->measure,
			'measure_value' 	=> $request->measure_value,
			'supply_price'   	=> $request->supply_price,
			'selling_price'     => $request->selling_price,
			'markup_price'  	=> $request->markup_price,
			'sku'    			=> $request->sku,
			'supplier' 			=> 1,
			'product_image'  	=> isset($product_image) ? $product_image : "",
			'stock_management' 	=> isset($stock_management) ? $stock_management : "",
			'status'      		=> isset($request->product_status) ? 1 : 0,
		]);

		return redirect()->back()->with('success', 'Partner product created successfully.');
	}

    public function productsUpdate(Request $request)
	{
		$partner_id = Auth::user()->id;
		$validator = Validator::make($request->all(), [
            'brand_name'      		=> 'required',
            'product_category'      => 'required',
            'product_type'      	=> 'required',
            'product_name'   		=> 'required|unique:partner_products',
            'description'    		=> 'required',
            'measure'      			=> 'required',
            'measure_value'        	=> 'required',
            /*'supply_price'      	=> 'required',
            'selling_price'   		=> 'required|integer',
            'markup_price'    		=> 'required|integer',*/
            'sku'      				=> 'required',
            'supplier'        		=> 'required',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

		$venues = "";
		if ( !empty($request['venues']) ) {
			$venues = implode(',', $request['venues']);
		}

		if ($request->hasFile('product_image')) {
			$image = $request->file('product_image');
			$product_image = time().'_product_image.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/uploads/product-images');
			$image->move($destinationPath, $product_image);
			$product_image =  '/uploads/product-images/'.$product_image;
		}else{
			$old_product_image = $request['old_product_image'];
			if ($old_product_image) {
				$product_image = $old_product_image;
			}else{
				$product_image = "";
			}
		}

		$PartnerProducts = PartnerProducts::where('id', $request->product_id)->update([
			'partner_id'      	=> $partner_id,
			'brand_name'   		=> $request->brand_name,
			'product_category'  => $product_category,
			'product_type'  	=> $request->product_type,
			'supply_price'   	=> $request->supply_price,
			'selling_price'     => $request->selling_price,
			'markup_price'  	=> $request->markup_price,
			'sku'    			=> $request->sku,
			'supplier' 			=> $request->supplier,
			'product_image'  	=> isset($product_image) ? $product_image : "",
			'stock_management' 	=> $request->stock_management,
		]);

		return redirect()->back()->with('success', 'Partner product updated successfully.');
	}

	public function array_by_ids($array, $column, $multi_arr=false)
	{
		$formatted_arr = [];
		if ( !empty($array) ) {
			foreach ($array as $key => $arr) {
				if ($multi_arr) {
					$formatted_arr[$arr[$column]][] = $arr; 
				}else{
					$formatted_arr[$arr[$column]] = $arr; 
				}
			}
		}

		return $formatted_arr;
	}

	public function get_venue_meta_by_venue_ids($venue_ids){
		$venue_meta = VenueMeta::whereIn("venue_id", $venue_ids)->get();
		$vanue_meta_data = [];
		foreach ($venue_meta as $key => $meta) { 
			$vanue_meta_data[$meta["venue_id"]][$meta["meta_key"]] = $meta["meta_value"];
		}
		return $vanue_meta_data;
	}

    public function PartnerProductsLists($partner_id)
    {
    	$PartnerProducts = PartnerProducts::where('partner_id', $partner_id)->get();
    	
    	return $PartnerProducts;
    }

    public function deleteProduct($id){
		PartnerProducts::where('id', $id)->delete();
		
		return true;
	}

	public function getproductsDetailById($id)
	{
    	$partnerProductsLists = PartnerProducts::where('id', $id)->get();

    	$partner_id 		= Auth::user()->id;

		if ( !empty($id) && !$partnerProductsLists->isEmpty() ) {

			$response = array(
				"status" 			=> 1,
				"data" 				=> $partnerProductsLists,
			);
		}else{
			$response = array(
				"status" 	=> 0,
				"message" 	=> "Data not found",
			);
		}
		
		echo json_encode($response);
	}
}
