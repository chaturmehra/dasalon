<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Admin\PartnerType;
use App\Models\Admin\Country;
use App\Models\Admin\CountryConfig;
use App\Models\Admin\Amenity;
use App\Models\Admin\AmenityCategory;

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
function adminAmenityCategories(){
    $amenityList = [
        'Venue'         => 'Venue',
        'Access'        => 'Access',
        'Products Used' => 'Products Used',
        'Brands'        => 'Brands',
    ];
    return $amenityList;
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
function getAmenityCategory(){
	$amenitycategories = AmenityCategory::get()->toArray();

	$amenitycategory = array_column($amenitycategories, 'amenity_category');
	// $amenitycategory0 = array_values($amenitycategory);

	// echo "<pre>"; print_r($amenitycategory); 
	return $amenitycategory;
}
