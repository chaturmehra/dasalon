<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;
class SubscriptionController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Subscription Config";
    	$meta_description  = "";
    	$meta_keywords     = "";
        $subc=SubscriptionPlan::all();
        return view('admin/setting/subscription_config/index', compact('title', 'meta_description', 'meta_keywords','subc'));
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
