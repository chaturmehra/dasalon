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
        $client_data = ClientModel::leftJoin('users', 'users.id', '=', 'clients.client_id')
            ->select('clients.*', 'users.id', 'users.name', 'users.phone')
            ->get();
        return view('partner/clients/index')->with('client_data', $client_data);
    }

    public function addClient(Request $request){
         
        $partner_id = Auth::user()->id;
        $validator = Validator::make($request->all(), [
            'name'          => 'required|max:30',
            'email'         => 'required|email|unique:users|max:100',
            'dob'           => 'required',
            'phone'         => 'numeric',
        ]);
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
            $profile_image =  '/uploads/client_images/'.$profile_image;
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

    public function getClientDetail($id){
        $client_data = ClientModel::leftJoin('users', 'users.id', '=', 'clients.client_id')
        ->select('clients.*', 'users.id', 'users.name', 'users.phone','users.email')->where('client_id', $id)->get();
        echo json_encode($client_data);
    }

    public function updateClient(Request $request){
        $client_id = $request->edit_client;
        $validator = Validator::make($request->all(), [
            'edit_name'          => 'required|max:30',
            'edit_email'         => 'required|email|max:100',
            'edit_dob'           => 'required',
            'edit_phone'         => 'numeric',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        User::where('id', $client_id)->update([

            'name'      => $request->edit_name,
            'email'     => $request->edit_email,
            'country'   => "",
            'phone'     =>$request->edit_phone,
            'password'  =>"",
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $profile_image = time().'_image.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/client_images');
            $image->move($destinationPath, $profile_image);
            $profile_image =  '/uploads/client_images/'.$profile_image;
        }else{
            $old_image = $request['old_image'];
            if ($old_image) {
                $profile_image = $old_image;
            }else{
                $profile_image = "";
            }
           
        }
        ClientModel::where('client_id', $client_id)->update([
             'image'=>$profile_image,
             'gender'=>$request->edit_gender,
             'dob'=>$request->edit_dob,
             'address'=>$request->edit_address,
             'notes'=>$request->edit_notes,
        ]);

        return redirect()->back()->with('success', 'Client updated successfully.');

    }

}
