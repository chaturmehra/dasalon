<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use App\Models\Admin\SystemManagerPermission;
use DB;
class SystemManagerController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Add System Manager";
    	$meta_description  = "";
    	$meta_keywords     = "";

    	return view('admin/setting/system_admin/add-system-manager', compact('title', 'meta_description', 'meta_keywords'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required|max:40',
            'phone'     => 'required|max:13',
            'email'     => 'required|unique:users|max:100',
            'password'  => ['required', Password::min(8)
                        ->letters()
                        ->mixedCase()
                        ->numbers()
                        ->symbols()
                        //->uncompromised()
                    ],
            'confirm_password'    => 'required|same:password',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User;

        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->password     = Hash::make($request->new_password);
        $user->phone        = $request->phone;
        $user->country      = "";
        $user->is_active    = 1;
        $user->role         = 3;

        $user->save();

        $user_id = $user->id; 
        $property_value =  $request->get('property_value');
        // echo "<pre>";print_r($property_value);die;

        // echo "<pre>";
        // print_r($page);
        // print_r($subpage);
        // print_r($property_value);
        // die;


    // if($page){
    //     $page = json_encode($page);
    // }
    // if($subpage){
    //     $subpage = json_encode($subpage);
    // }
    // if($property_value){
    //     $property_value = json_encode($property_value);

    // }
    $adminpagewithsubpage = adminpagewithsubpage();
    foreach($adminpagewithsubpage as $page=> $subpages)
			{
          foreach( $subpages as $key => $subpage )
              {
                // echo "<pre";print_r($property_value[$page][$subpage]);die;
                $perm = new SystemManagerPermission; 
                $perm->page =  $page;  
                $perm->subpage = $subpage;
                $perm->user_id = $user_id;  
                $perm->property_value = isset($property_value[$page][$subpage])?$property_value[$page][$subpage]:0;   
                $perm->save();

              }        
                        }
           
        return redirect('/admin/settings')->with('message', 'System admin created successfully.');
    }       


    public function edit($id)
    {
    	$manager_detail = User::find($id);
        
    	$title             = "Dasalon :: Edit System Manager";
    	$meta_description  = "";
    	$meta_keywords     = "";
            
    //    DB::enableQueryLog();
         $usersysmanagerperm = SystemManagerPermission::leftJoin('users', 'users.id', '=', 'system_manager_permissions.user_id')
         ->where('system_manager_permissions.user_id',$id)->get();
        // $querylog =  DB::getQueryLog();
        //  dd($querylog);
    
        // echo "<pre>";print_r($usersysmanagerperm);die;
        // $prop_valu=$usersysmanagerperm->pluck('property_value');
        // foreach($prop_valu as $prop_val ) {        
        //   }}
        // echo "<pre>";print_r($prop_valu);die;
    // }
        // if($perm==$id) {
            
            // echo "<pre>";print_r($perm);die;
        // }
        // echo "<pre>";print_r($perm);die;


    	return view('admin/setting/system_admin/edit-system-manager', compact('title', 'meta_description', 'meta_keywords', 'manager_detail','usersysmanagerperm'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required|max:40',
            'phone'     => 'required|max:13',
            'email'     => 'required|max:100|unique:users,email,'.$id,
            'new_password'  => ['nullable', Password::min(8)
                        ->letters()
                        ->mixedCase()
                        ->numbers()
                        ->symbols()
                    ],
            'confirm_password'    => 'same:new_password',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User;
        $user->exists       = true;
        $user->id           = $id;
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->country      = "";
        if ($request->new_password) {
            $user->password     = Hash::make($request->new_password);
        }
        $user->phone        = $request->phone;

        $user->save();

    $property_value =  $request->get('property_value');  
    
    $adminpagewithsubpage = adminpagewithsubpage();
    foreach($adminpagewithsubpage as $page=> $subpages)
			{
          foreach( $subpages as $key => $subpage )
              {
                SystemManagerPermission::where('user_id', $user->id)->where('page', $page)
               -> where('subpage', $subpage)->
                update([
                    
                  'property_value' => 
                  isset($property_value[$page][$subpage])?$property_value[$page][$subpage]:0,  
                 
                    
                ]);
            }
            }
    // DB::enableQueryLog();
    // $getRecordperm = SystemManagerPermission::where('user_id', $user->id)->get();
                    //  echo "<pre>";print_r($getRecordperm);die;
        //  $querylog =  DB::getQueryLog();
        //  dd($querylog);
    // if($getRecordperm){
        
       
         
        return redirect('/admin/settings')->with('message', 'System admin updated successfully.');
    }

    public function enabled($id): RedirectResponse
    {
        if($id){
            $user = new User;

            $user->exists       = true;
            $user->id           = $id;
            $user->is_active    = 1;
            $user->updated_at   = date('Y-m-d H:i:s');

            $user->save();

            return redirect()->back()->with('status-message', 'System admin status updated successfully.');
        }else{
            return redirect()->back()->with('status-error', 'Please select syatem admin.');
        }
    }

    public function disabled($id): RedirectResponse
    {
        if($id){
            $user = new User;

            $user->exists       = true;
            $user->id           = $id;
            $user->is_active    = 0;
            $user->updated_at   = date('Y-m-d H:i:s');

            $user->save();

            return redirect()->back()->with('status-message', 'System admin status updated successfully.');
        }else{
            return redirect()->back()->with('status-error', 'Please select syatem admin.');
        }
    }

    public function view_manager_roles()
    {
    	$title             = "Dasalon :: View Manager Roles";
    	$meta_description  = "";
    	$meta_keywords     = "";
    	return view('admin/setting/system_admin/view-manager-roles', compact('title', 'meta_description', 'meta_keywords'));
    }
}
