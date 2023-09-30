<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Admin\PartnerType;
use App\Models\Admin\Country;
use App\Models\Admin\CountryConfig;
use App\Models\Admin\Amenity;
use App\Models\Admin\AmenityCategory;
use App\Models\Admin\Service;
use App\Models\Admin\ServiceCategory;
use App\Models\User;

function getPartnerType(){
	$partnertype = PartnerType::get();
	return $partnertype;
}

function getCountryList(){
	$countryList = Country::get();
	return $countryList;
}

function getCountryConfigList(){
	$countryList = CountryConfig::leftJoin('countries', 'country_config.country_id', '=', 'countries.id')->where('status',1)->get(['name','iso2','countries.id']);
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
	$amenitycategory   = array_column($amenitycategories, 'amenity_category');
	return $amenitycategory;
}

function getServices(){
    $services  = Service::where('is_active', 1)->get()->toArray();
    $services_name  = array_column($services, 'servicename');
    return $services_name;
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


function getSelectedCountry(){
    return $country = session ()->get('country'); 
}

function durationScheduling(){
    $durationScheduling = [
        '15 mins'           => '15 mins',
        '30 mins'           => '30 mins',
        '45 mins'           => '45 mins',
        '1 hour'            => '1 hour',
        '1 hour 30 mins'    => '1 hour 30 mins',
        '2 hour'            => '2 hour',
    ];
    return $durationScheduling;
}
function voucherValidity(){
    $voucherValidity = [
        '14 days'       => '14 days',
        '1 month'       => '1 month',
        '2 months'      => '2 months',
        '3 months'      => '3 months',
        '4 months'      => '4 months',
        '6 months'      => '6 months',
        '1 year'        => '1 year',
        '3 years'       => '3 years',
        '5 years'       => '5 years',
        'Never'         => 'Never',
    ];
    return $voucherValidity;
}

if (!function_exists('getPartnerCountryConfig')) {
    function getPartnerCountryConfig($partner_id)
    {
        $partner_country_config = User::select(['country_config.currency_sign', 'country_config.no_length', 'country_config.pin', 'country_config.country_code', 'country_config.short_name', 'country_config.currency_code'])
        ->leftJoin('country_config', 'users.country', '=', 'country_config.country_id')
        ->where('users.id', $partner_id)
        ->first();

        return $partner_country_config;
    }
}

if (!function_exists('getUserCountry')) {
    function getUserCountry()
    {
        // Get the user's IP address
        $userIp = request()->ip();

        if ($userIp == "::1") {
            $userIp = "127.0.0.1";
        }
        
        // Make a request to the IP geolocation API
        $response = file_get_contents("http://ip-api.com/json/{$userIp}");
        $data = json_decode($response);

        // Check if the request was successful and return the country code
        if ($data && $data->status === 'success') {
            return $data->countryCode;
        }else{
           return "IN"; 
        }
    }
}

