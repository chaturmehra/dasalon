<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Subscription Config";
    	$meta_description  = "";
    	$meta_keywords     = "";

        return view('admin/setting/subscription_config/index', compact('title', 'meta_description', 'meta_keywords'));
    }
}
