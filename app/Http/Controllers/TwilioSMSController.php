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
    public function index(Request $Request)
    {
    	$otp = random_int(100000, 999999);

    	$receiverNumber = $request->phone;
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

    		return redirect()->back()->with('success', 'SMS sent successfully on your given mobile number.');
    		//dd('SMS Sent Successfully.');

    	} catch (Exception $e) {
    		dd("Error: ". $e->getMessage());
    	}
    }
}
