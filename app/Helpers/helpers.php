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

if (!function_exists('loadScript')) {
    function loadScript( $src = "" ) {
        global $footerScripts;
        if( !empty( $src ) ) {
            $footerScripts[] = $src;
        } else {
            if( !empty( $footerScripts ) ) {
                foreach($footerScripts as $key => $script ) {
                    echo '<script src="'. url() . $script .'"></script>';
                }
            }
        }
    } 
}

?>