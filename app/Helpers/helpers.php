<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Admin\PartnerType;
use App\Models\Admin\Country;
use App\Models\Admin\CountryConfig;

function getPartnerType(){
	$partnertype = PartnerType::get();
	return $partnertype;
}

function getCountryList(){
	$countryList = Country::get();
	return $countryList;
}

function getCountryConfigList(){
	$countryList = CountryConfig::leftJoin('countries', 'country_config.country_id', '=', 'countries.id')->where('status',1)->get(['name','countries.id']);
	return $countryList;
}

?>