<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Partner\ClientModel;
use Validator;
use Illuminate\Support\Facades\Auth;
class ClientsController extends Controller
{
    public function index()
    {
        return view('partner/clients/index');
    }

    public function addClient(Request $request){
         
        $partner_id = Auth::user()->id;
        $validator = Validator::make($request->all(), [
            'name'          => 'required|max:30',
            'email'         => 'required|email|unique:users|max:100',
            'dob'           => 'required',
            'phone'         => 'numeric',
        ]);
        //echo "check";die;
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $client_id = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'country'   => "",
            'phone'     =>$request->phone,
            'password'  =>"",
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $profile_image = time().'_image.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/client_images');
            $image->move($destinationPath, $profile_image);
            $profile_image =  '/uploads/client_images'.$profile_image;
        }else{
            $profile_image = "";
        }
        $client_data = ClientModel::create([
             'client_id'=>$client_id->id,
             'image'=>$profile_image,
             'gender'=>$request->gender,
             'dob'=>$request->dob,
             'address'=>$request->address,
             'notes'=>$request->notes,
        ]);

        return redirect()->back()->with('success', 'Client added successfully.');
    }
}
