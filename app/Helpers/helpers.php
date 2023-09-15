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

function scheduleType(){
    $scheduleTypeList = [
        '1'  => 'Every week',
        '2'  => 'Every two week',
        '3'  => 'Every three week',
        '4'  => 'Every month',
        '5'  => 'Every six month',
    ];
    return $scheduleTypeList;
}

function adminpagewithsubpage(){
    $pagewithsubpageList =
    [
        'Settings' => [
            'Country Config',
            'Partner Config',
            'Subscription Config',
            'Appointment Config',
            'Amenity & Special Attributes',
            'Payment Gateway'
        ],
        'Service' => [
            'Order Management',
            'Service Config',
            'Partner - Service mapping',
            'Recommendations (package)', 
            'Offers Management'
        ]
    ];
    return $pagewithsubpageList;
}

function userAuthorization(){
    $userAuthorization =
    [
        'Home' => [
            'Sales(button)',
            'Appointment(button)',
        ],
        'Calendar' => [
            'Add appointment',
            'Change appointment',
            'View Calendar',
            'View all staff calendar',
        ],
        'Clients' => [
            'Create client',
            'import clients, upload client register, export clients',
            'Reviews - view',
            'Review - reply/report',
        ],
        'Sales' => [
            'Export',
            'Options Button',
        ]
    ];
    return $userAuthorization;
}
