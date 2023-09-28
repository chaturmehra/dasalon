<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferManagementVoucherController extends Controller
{
    public function index()
    {
    	$title             = "Dasalon :: Services Offers Management";
    	$meta_description  = "";
    	$meta_keywords     = "";

        return view('admin/services/offers-management/voucher', compact('title', 'meta_description', 'meta_keywords'));
    }
}