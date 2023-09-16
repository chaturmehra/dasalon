<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin\Onboarding;

class SubscriptionController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Subscription Config";
    	$meta_description  = "";
    	$meta_keywords     = "";
        $subc=SubscriptionPlan::all();
        // DB::enableQueryLog();
        
         $onboardtype=Onboarding::leftjoin('countries', 'countries.id', '=', 'onboardings.gperiod_country')->get()->toArray();
        // echo "<pre>";print_r($onboardtype);die;

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
        return view('admin/setting/subscription_config/index', compact('title', 'meta_description', 'meta_keywords','subc','subtypeOne','subtypeTwo','onboardFees','onboardtype'));
    }

    public function createOnboarding(Request $request)
    {
    $gp1=$request->get('gperiod_type1');  
      $gp1=isset($gp1)?$gp1: NULL;
               
      $gp2 = $request->get('gperiod_type2');
       $gp2=isset($gp2)?$gp2: NULL;
       
      $gp3=$request->get('gperiod_type3');
      $gp3= isset($gp3)?$gp3: NULL;
      
      

        $onb = new Onboarding;  
        $onb->gperiod_country =  $request->get('gperiod_country');  
        $onb->gperiod_type1 = $gp1;  
        $onb->gperiod_type2 =  $gp2;  
        $onb->gperiod_type3 = $gp3;  
        
        $onb->save();
        return redirect()->back()->with('messageonb', 'Onboarding created successfully.');
    }

     public function gettypeOneAjax($gperiod_country_id){ 
         // DB::enableQueryLog();
        $gettypeOne = Onboarding::where('gperiod_country','=',$gperiod_country_id)->get(['gperiod_type1'])->toArray();
        // $quries = DB::getQueryLog();
        // dd($quries);
        // echo $gettypeOne; die;
        // echo "<pre>";print_r($gettypeOne);die;
        /*foreach ($gettypeOne as $getAll) {
                
            //'value="'.$getAll->gperiod_type1.'"';

        }*/

        $response = [
            'status'=>true, 
            'gperiod_type1'=> $gettypeOne[0]['gperiod_type1']
        ];
        echo json_encode($response);
            //echo response()->json(['status'=>true, 'gperiod_type1'=> $gettypeOne[0]['gperiod_type1']]);
    }

    public function gettypeTwoAjax($gperiod_country_id1){ 
    
        $gettypeTwo = Onboarding::where('gperiod_country','=',$gperiod_country_id1)->get(['gperiod_type2'])->toArray();
       
           
        $responset = [
            'status'=>true, 
            'gperiod_type2'=> $gettypeTwo[0]['gperiod_type2']
        ];
        echo json_encode($responset);
            
    }

    public function getfeeAjax($gperiod_country_id2){ 
    
        $getOnboard = Onboarding::where('gperiod_country','=',$gperiod_country_id2)->get(['gperiod_type3'])->toArray();
       
           
        $responseO = [
            'status'=>true, 
            'gperiod_type3'=> $getOnboard[0]['gperiod_type3']
        ];
        echo json_encode($responseO);
            
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
