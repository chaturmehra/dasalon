<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class SubscriptionController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Subscription Config";
    	$meta_description  = "";
    	$meta_keywords     = "";
        $subc=SubscriptionPlan::all();
        // DB::enableQueryLog();
        $subtypeOne = DB::table('users')
        ->leftjoin('user_details', 'users.id', '=', 'user_details.user_id')
        ->leftjoin('countries', 'countries.id', '=', 'user_details.country')
        ->select('countries.name as countryname','users.name','users.email','users.phone','user_details.business_name','user_details.country'
        ,'users.is_active','users.id')->get();
        // $querylog =  DB::getQueryLog();
        // dd($querylog);

        $subtypeTwo = DB::table('users')
        ->leftjoin('user_details', 'users.id', '=', 'user_details.user_id')
        ->leftjoin('countries', 'countries.id', '=', 'user_details.country')
        ->select('countries.name as countryname','users.name','users.email','users.phone','user_details.business_name','user_details.country'
        ,'users.is_active','users.id')->get();

        $onboardFees = DB::table('users')
        ->leftjoin('user_details', 'users.id', '=', 'user_details.user_id')
        ->leftjoin('countries', 'countries.id', '=', 'user_details.country')
        ->select('countries.name as countryname','users.name','users.email','users.phone','user_details.business_name','user_details.country'
        ,'users.is_active','users.id')->get();
        return view('admin/setting/subscription_config/index', compact('title', 'meta_description', 'meta_keywords','subc','subtypeOne','subtypeTwo','onboardFees'));
    }

    public function create(Request $request)
    {
    	
        $sp = new SubscriptionPlan;  
        $sp->planname =  $request->get('planname');  
        $sp->cost = $request->get('cost');  
        $sp->country = $request->get('country');  
        $sp->frequency = $request->get('frequency');  
        $sp->is_active 	= 1;
        $sp->save();
        return redirect()->back()->with('message', 'Subscription Plan created successfully.');
    }

    public function enabledsub($id): RedirectResponse
    {
        if($id){
            $gid = new User;

            $gid->exists       = true;
            $gid->id           = $id;
            $gid->is_active    = 1;
            $gid->updated_at   = date('Y-m-d H:i:s');

            $gid->save();

            return redirect()->back()->with('status', 'status updated successfully.');
        }else{
            return redirect()->back()->with('errorstatus', 'Please select Subscription.');
        }
    }

    public function disabledsub($id): RedirectResponse
    {
    	if($id){
	        $gid = new User;

	        $gid->exists 		= true;
	        $gid->id 			= $id;
	        $gid->is_active 	= 0;
	        $gid->updated_at 	= date('Y-m-d H:i:s');
            
            // echo "<pre>"; print_r($s->is_active);die;
            
	        $gid->save();

	        return redirect()->back()->with('status', 'status updated successfully.');
	    }else{
	    	return redirect()->back()->with('errorstatus', 'Please select Subscription.');
	    }
    }

    public function enabled($id): RedirectResponse
    {
        if($id){
            $sp = new SubscriptionPlan;

            $sp->exists       = true;
            $sp->id           = $id;
            $sp->is_active    = 1;
            $sp->updated_at   = date('Y-m-d H:i:s');

            $sp->save();

            return redirect()->back()->with('message', 'Subscription Plan status updated successfully.');
        }else{
            return redirect()->back()->with('error', 'Please select Subscription Plan.');
        }
    }

    public function disabled($id): RedirectResponse
    {
    	if($id){
	        $sp = new SubscriptionPlan;

	        $sp->exists 		= true;
	        $sp->id 			= $id;
	        $sp->is_active 	= 0;
	        $sp->updated_at 	= date('Y-m-d H:i:s');

	        $sp->save();

	        return redirect()->back()->with('message', 'Subscription Plan status updated successfully.');
	    }else{
	    	return redirect()->back()->with('error', 'Please select Subscription Plan.');
	    }
    }
}
