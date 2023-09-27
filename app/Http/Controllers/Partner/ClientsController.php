<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response; 
use App\Models\User;
use App\Models\Partner\ClientModel;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Helpers\CsvHelper;
use SplFileObject;
class ClientsController extends Controller
{   

    public function index()
    {
        $client_data = ClientModel::leftJoin('users', 'users.id', '=', 'clients.client_id')
            ->select('clients.*', 'users.id', 'users.name', 'users.phone')
            ->get();
            
        $stats = $this->getStats();
        return view('partner/clients/index')->with('client_data',$client_data)->with('stats',$stats);   
    }

    public function getStats() {
        $totalMonth = ClientModel::getCurrentMonthCount();
        $totalPreviousMonth = ClientModel::getCurrentPreviousMonthCount();


        return array(
            'totalMonth' => $totalMonth,
            'totalPreviousMonth' => $totalPreviousMonth,
        );
    }

    public function addClient(Request $request){
         
        $partner_id = Auth::user()->id;
        $validator = Validator::make($request->all(), [
            'name'          => 'required|max:30',
            'email'         => 'required|email|unique:users|max:100',
            'birth_day'     => 'required|numeric|digits_between:1,2|min:1|max:31',
            'birth_month'   => 'required',
            'phone'         => 'numeric',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $client_id = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'country'   => isset($request->country_code) ? $request->country_code : "",
            'phone'     => $request->phone,
            'password'  => "",
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
             'client_id'    =>$client_id->id,
             'image'        =>$profile_image,
             'gender'       =>isset($request->gender)?$request->gender:"",
             'birth_day'    =>isset($request->birth_day)?$request->birth_day:0,
             'birth_month'  =>$request->birth_month,
             'birth_year'   =>isset($request->birth_year)?$request->birth_year:"",
             'address'      =>isset($request->address)?$request->address:"",
             'notes'        =>isset($request->notes)?$request->notes:"",
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
            'edit_birth_day'     => 'required|numeric|digits_between:1,2|min:1|max:31',
            'edit_birth_month'   => 'required',
            'edit_phone'         => 'numeric',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        User::where('id', $client_id)->update([
            'name'      => $request->edit_name,
            'email'     => $request->edit_email,
            'country'   => isset($request->country_code) ? $request->country_code : "",
            'phone'     => $request->edit_phone,
            'password'  => "",
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
             'image'        =>$profile_image,
             'gender'       =>isset($request->edit_gender)?$request->edit_gender:"",
             'birth_day'    =>$request->edit_birth_day,
             'birth_month'  =>$request->edit_birth_month,
             'birth_year'   =>isset($request->edit_birth_year)?$request->edit_birth_year:"",
             'address'      =>isset($request->edit_address)?$request->edit_address:"",
             'notes'        =>isset($request->edit_notes)?$request->edit_notes:"",
        ]);

        return redirect()->back()->with('success', 'Client updated successfully.');

    }


    public function importClient(Request $request){

        if ($request->hasFile('file')) {
        $file     = $request->file('file');
        $imagePath = $file->getPathName();
        $data     = csvToArray($imagePath);
            foreach ($data as $record) {
                $client_id = User::create([
                    'name'          => $record['name'],
                    'email'         => $record['email'],
                    'country'       => isset($record['country'])?$record['country']:"",
                    'phone'         =>$record['phone'],
                    'password'      =>"",
                ]);
                
                $client_data = ClientModel::create([
                     'client_id'    =>$client_id->id,
                     'image'        =>isset($record['image'])?$record['image']:"",
                     'gender'       =>isset($record['gender'])?$record['gender']:"",
                     'birth_day'    =>$record['birth_day'],
                     'birth_month'  =>$record['birth_month'],
                     'birth_year'   =>isset($record['birth_year'])?$record['birth_year']:"",
                     'address'      =>isset($record['address'])?$record['address']:"",
                     'notes'        =>isset($record['notes'])?$record['notes']:"",
                ]);  
            }

        }
        return redirect('index')->with('success', 'Import successfully.');

    }  

    public function exportClient(){
        $client_data = ClientModel::leftJoin('users', 'users.id', '=', 'clients.client_id')
        ->select('clients.*', 'users.name', 'users.phone','users.email')->get();

        $csvFileName = "client_data.csv";
        $csvFile = new SplFileObject(storage_path('app/' . $csvFileName), 'w');

        $csvFile->fputcsv([
        'Name', 'Phone', 'Email', 'Gender', 'Birth Days','Birth Months','Birth Years', 'Address', 'Notes'
        ]);
        
        foreach ($client_data as $row) {
                $csvFile->fputcsv([
                    $row->name,
                    $row->phone,
                    $row->email,
                    $row->gender,
                    $row->birth_day,
                    $row->birth_month,
                    $row->birth_year,
                    $row->address,
                    $row->notes
            ]);
        }

        $csvFile = null;
        return response()->download(storage_path('app/' . $csvFileName));

    }


    public function sortClient(Request $request)
    {
        $stats = $this->getStats();
        $sortBy = $request->input('sort');
        switch ($sortBy) {
            case 'name_asc':
                $client_data = ClientModel::leftJoin('users', 'users.id', '=', 'clients.client_id')->orderBy('users.name','asc')->get();
                break;
            case 'name_desc':
                $client_data = ClientModel::leftJoin('users', 'users.id', '=', 'clients.client_id')->orderBy('users.name','desc')->get();
                break;
            case 'gender_asc':
                $client_data = ClientModel::leftJoin('users', 'users.id', '=', 'clients.client_id')->orderBy('clients.gender','asc')->get();
                break;
            case 'gender_desc':
                $client_data = ClientModel::leftJoin('users', 'users.id', '=', 'clients.client_id')->orderBy('clients.gender','desc')->get();
                break; 
            case 'created_at_asc':
                $client_data = ClientModel::leftJoin('users', 'users.id', '=', 'clients.client_id')->orderBy('clients.created_at','asc')->get();
                break; 
            case 'created_at_desc':
                $client_data = ClientModel::leftJoin('users', 'users.id', '=', 'clients.client_id')->orderBy('clients.created_at','desc')->get();
                break;            
            default:
                $client_data = ClientModel::all();
        }
        return view('partner/clients/index', ['client_data' => $client_data, 'stats' => $stats]);
    }


}
