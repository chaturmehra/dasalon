<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Twilio\Rest\Client;

class TwilioSMSController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
    	$otp = random_int(100000, 999999);

    	//$receiverNumber = $request->phone;
    	$receiverNumber = "+917827881909";
    	$message 		= "Your Daslon OTP is: ".$otp;

    	try {

    		Session::put('signin_otp', $otp);

    		$account_sid 	= env("TWILIO_SID");
    		$auth_token 	= env("TWILIO_AUTH_TOKEN");
    		$twilio_number 	= env("TWILIO_NUMBER");

    		$client = new Client($account_sid, $auth_token);
    		$client->messages->create($receiverNumber, [
    			'from' => $twilio_number, 
    			'body' => $message
    		]);

    		//return redirect()->back()->with('success', 'SMS sent successfully on your given mobile number.');
    		//dd('SMS Sent Successfully.');

    		return response()->json(['status' => true]);

    	} catch (Exception $e) {
    		dd("Error: ". $e->getMessage());
    	}
    }

    public function verify_otp(Request $request)
    {
    	$otp 	= $request->otp;

    	try {

    		$signin_otp = Session::get('signin_otp');
    		if ($otp == $signin_otp) {
    			return response()->json(['status' => true]);
    		}else{
    			return response()->json(['status' => false]);
    		}

    	} catch (Exception $e) {
    		dd("Error: ". $e->getMessage());
    	}
    }
}
