<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class SettingController extends Controller
{
   
    public function index()
    {
        $user=User::all();
               
				return view('admin/setting/index',compact('user'));
                // return view('admin/setting/index');
    }
    public function create(Request $request){
				$user = new User;
                $user->name = $request->input('name');
                $user->country =  $request->input('country');
                $user->phone =  $request->input('phone');
				$user->email = $request->input('email');
				$user->password = $request->input('new_password');
				$user->save();
				return redirect()->back()->with('status',"Admin Add successfully");
			}

          
}
