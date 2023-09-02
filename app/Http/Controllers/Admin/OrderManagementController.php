<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderManagementController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Services Order Management";
    	$meta_description  = "";
    	$meta_keywords     = "";

        return view('admin/services/order-management/index', compact('title', 'meta_description', 'meta_keywords'));
    }
}
