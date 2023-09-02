<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class SystemAdminController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
    	$title             = "Dasalon :: Settings";
    	$meta_description  = "";
    	$meta_keywords     = "";

    	$settings        = User::where("role", "Admin")->latest()->get();
        $system_users    = User::where("role", "System Manager")->latest()->get();

    	return view('admin/setting/system_admin/index', compact('title', 'meta_description', 'meta_keywords', 'settings', 'system_users'));
    }

    public function store(Request $request): RedirectResponse
    {
    	$validator = Validator::make($request->all(), [
            'name' 		=> 'required|max:40',
            'email' 	=> 'required|unique:users|max:100',
            //'password' 	=> 'required|alpha_num|min:8',
            'password' 	=> ['required', Password::min(8)
			            ->letters()
			            ->mixedCase()
			            ->numbers()
			            ->symbols()
			            //->uncompromised()
			        ]
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User;

        $user->name 		= $request->name;
        $user->email 		= $request->email;
        $user->password 	= Hash::make($request->password);
        $user->phone 		= $request->phone;
        $user->country 		= $request->country;
        $user->is_active 	= 1;
        $user->role 		= "0";

        $user->save();

        return redirect()->back()->with('message', 'Admin created successfully.');
    }

    public function edit_view($id)
    {
        $title = "Dasalon :: Update System Admin";
        $meta_description = "";
        $meta_keywords = "";

        $user_detail = User::find($id);

    	return view('admin/setting/system_admin/system-admin-manage', compact('title', 'meta_description', 'meta_keywords', 'user_detail'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required|max:40',
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
        if ($request->new_password) {
            $user->password     = Hash::make($request->new_password);
        }
        $user->phone        = $request->phone;
        $user->country      = $request->country;

        $user->save();

        return redirect()->back()->with('message', 'Admin updated successfully.');
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

            return redirect()->back()->with('message', 'Admin status updated successfully.');
        }else{
            return redirect()->back()->with('error', 'Please select admin.');
        }
    }

    public function disabled($id): RedirectResponse
    {
    	if($id){
	        $user = new User;

	        $user->exists 		= true;
	        $user->id 			= $id;
	        $user->is_active 	= 0;
	        $user->updated_at 	= date('Y-m-d H:i:s');

	        $user->save();

	        return redirect()->back()->with('message', 'Admin status updated successfully.');
	    }else{
	    	return redirect()->back()->with('error', 'Please select admin.');
	    }
    }
}
