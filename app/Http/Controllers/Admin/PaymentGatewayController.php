<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentGatewayController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Payment Gateway Config";
    	$meta_description  = "";
    	$meta_keywords     = "";

        return view('admin/setting/payment_gateway_config/index', compact('title', 'meta_description', 'meta_keywords'));
    }
}
