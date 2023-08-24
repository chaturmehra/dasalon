<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

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
        $user->is_active    = 1;
        $user->role         = "System Manager";

        $user->save();

        return redirect()->back()->with('message', 'System admin created successfully.');
    }

    public function edit($id)
    {
    	$manager_detail = User::find($id);

    	$title             = "Dasalon :: Edit System Manager";
    	$meta_description  = "";
    	$meta_keywords     = "";
    	return view('admin/setting/system_admin/edit-system-manager', compact('title', 'meta_description', 'meta_keywords', 'manager_detail'));
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
        if ($request->new_password) {
            $user->password     = Hash::make($request->new_password);
        }
        $user->phone        = $request->phone;

        $user->save();

        return redirect()->back()->with('message', 'System admin updated successfully.');
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
