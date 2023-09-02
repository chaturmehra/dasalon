<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\SettingController as SettingController;
use App\Http\Controllers\Partner\SettingController as PartnerSettingController;
use App\Http\Controllers\Partner\UserController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Partner\VenueController;
use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Admin\ParterConfigController;
use App\Http\Controllers\Partner\PartnerController;
use App\Http\Controllers\Admin\SystemAdminController;
use App\Http\Controllers\Admin\SystemManagerController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\PaymentGatewayController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\OrderManagementController;
use App\Http\Controllers\Admin\ServicesConfigController;
use App\Http\Controllers\Admin\PartnerMappingController;
use App\Http\Controllers\Admin\RecommendationsController;
use App\Http\Controllers\Admin\OffersManagementController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get("user-flow",[UserController::class,'index'])->name('register');
Route::get("user/signin",[UserController::class,'signinForm'])->name('email-form');
Route::middleware(['auth','user-role:partner,admin'])->group(function()
{
 Route::get("/admin/dashboard",[HomeController::class,'userHome'])->name('home');
});

Route::middleware(['auth'])->group(function()
{
    //Route::get('/admin/settings',[SettingController::class,'index'])->name('settings.index');
    //Route::post('admin/settings',[SettingController::class,'create']);

    Route::get('admin/settings', [SystemAdminController::class, 'index']);
    Route::post('admin/add-admin', [SystemAdminController::class, 'store']);
    Route::get('admin/add-admin/enable-status/{id}', [SystemAdminController::class, 'enabled']);
    Route::get('admin/add-admin/disable-status/{id}', [SystemAdminController::class, 'disabled']);
    Route::get('admin/system-admin-manage/{id}', [SystemAdminController::class, 'edit_view']);
    Route::post('admin/update-system-admin-manage/{id}', [SystemAdminController::class, 'update']);

    Route::get('admin/add-system-manager', [SystemManagerController::class, 'index']);
    Route::get('admin/edit-system-manager/{id}', [SystemManagerController::class, 'edit']);
    Route::post('admin/add-system-manager', [SystemManagerController::class, 'store']);
    Route::post('admin/update-system-manager/{id}', [SystemManagerController::class, 'update']);
    Route::get('admin/view-manager-roles', [SystemManagerController::class, 'view_manager_roles']);
    Route::get('admin/system-manager/enable-status/{id}', [SystemManagerController::class, 'enabled']);
    Route::get('admin/system-manager/disable-status/{id}', [SystemManagerController::class, 'disabled']);

    Route::get('admin/settings/amenity',[AmenityController::class,'index'])->name('settings.amenity');
    Route::post('admin/settings/saveamenity',[AmenityController::class,'storeAmenity'])->name('settings.saveAmenity');
    Route::get('amenity-list',[AmenityController::class,'getAjaxAmenityList'])->name('amenity.getAjaxList');
    Route::get('admin/setting/edit-amenity-status/{id}/{status}', [AmenityController::class,'changeAmenityStatus']);
    Route::get('special-amenity-list',[AmenityController::class,'getAjaxSpecialAmenityList'])->name('specialamenity.getAjaxList');
    Route::get('admin/setting/get-state/{id}', [CountryController::class,'getStateAjax']);
    Route::get('admin/setting/get-city/{id}', [CountryController::class,'getCityAjax']);
	Route::get('admin/settings/country-config',[CountryController::class,'index'])->name('settings.country');
	Route::get('admin/settings/partner-config',[ParterConfigController::class,'index'])->name('settings.role');

    Route::post('admin/save_country',[CountryController::class,'saveCountry'])->name('settings.saveCountry');
    Route::post('admin/save_franchise',[CountryController::class,'saveFranchise'])->name('settings.saveFranchise');
    Route::post('admin/save_partnertype',[CountryController::class,'savePartnerType'])->name('settings.savePartnerType');
    Route::post('admin/save_partnerdetails',[CountryController::class,'savePartnerDetails'])->name('settings.savePartnerDetails');
    Route::post('admin/save_disablecity',[CountryController::class,'saveDisableCity'])->name('settings.saveDisableCity');
    Route::post('admin/save_role',[ParterConfigController::class,'saveRole'])->name('settings.saveRole');
    Route::post('admin/save_partnertypeproperty',[ParterConfigController::class,'savepartnertypeProperty'])->name('settings.savepartnertypeProperty');

Route::post('admin/save_country',[CountryController::class,'saveCountry'])->name('settings.saveCountry');
Route::post('admin/save_franchise',[CountryController::class,'saveFranchise'])->name('settings.saveFranchise');
Route::post('admin/save_partnertype',[CountryController::class,'savePartnerType'])->name('settings.savePartnerType');
Route::post('admin/save_partnerdetails',[CountryController::class,'savePartnerDetails'])->name('settings.savePartnerDetails');
Route::post('admin/save_disablecity',[CountryController::class,'saveDisableCity'])->name('settings.saveDisableCity');
Route::post('admin/save_role',[ParterConfigController::class,'saveRole'])->name('settings.saveRole');
Route::post('admin/save_partnertypeproperty',[ParterConfigController::class,'savepartnertypeProperty'])->name('settings.savepartnertypeProperty');
Route::post('admin/save_profilefeature',[ParterConfigController::class,'saveprofileFeature'])->name('settings.saveprofilefeature');
    Route::get('country-list',[CountryController::class,'getAjaxList'])->name('country.getAjaxList');
    Route::get('franchise-list',[CountryController::class,'getFranchiseAjaxList'])->name('franchise.getAjaxList');
    Route::get('partnertype-list',[CountryController::class,'getPartnerTypeAjaxList'])->name('partnertype.getAjaxList');
    Route::get('partnerdetails-list',[CountryController::class,'getPartnerDetailsAjaxList'])->name('partnerdetails.getAjaxList');
    Route::get('disablecity-list',[CountryController::class,'getDisableCityAjaxList'])->name('disablecity.getAjaxList');
    Route::get('role-list',[ParterConfigController::class,'getAjaxList'])->name('role.getAjaxList');

    Route::get('admin/setting/edit-country-status/{id}/{status}', [CountryController::class,'changeCountryStatus']);
    Route::get('admin/setting/edit-franchise-status/{id}/{status}', [CountryController::class,'changeFranchiseStatus']);
    Route::get('admin/setting/edit-partnertype-status/{id}/{status}', [CountryController::class,'changePartnerTypeStatus']);
    Route::get('admin/setting/edit-partnerdetails-status/{id}/{status}', [CountryController::class,'changePartnerDetailsStatus']);
    Route::get('admin/setting/edit-disablecity-status/{id}/{status}', [CountryController::class,'changeDisableCityStatus']);
    Route::get('admin/setting/edit-role-status/{id}/{status}', [ParterConfigController::class,'changeRoleStatus']);

    Route::get('admin/setting/edit-salon-status/{id}/{statussalon}', [ParterConfigController::class,'changeSalonStatus']);	

Route::post('admin/settings/edit-profilefeature-status', [ParterConfigController::class,'changeProfilefeaturepermission']);
Route::get('admin/setting/edit-property-status', [ParterConfigController::class,'changePropertypermission']);
Route::get('admin/setting/edit-country-status/{id}/{status}', [CountryController::class,'changeCountryStatus']);
Route::get('admin/setting/edit-franchise-status/{id}/{status}', [CountryController::class,'changeFranchiseStatus']);
Route::get('admin/setting/edit-partnertype-status/{id}/{status}', [CountryController::class,'changePartnerTypeStatus']);
Route::get('admin/setting/edit-partnerdetails-status/{id}/{status}', [CountryController::class,'changePartnerDetailsStatus']);
Route::get('admin/setting/edit-disablecity-status/{id}/{status}', [CountryController::class,'changeDisableCityStatus']);
Route::get('admin/setting/edit-role-status/{id}/{status}', [ParterConfigController::class,'changeRoleStatus']);


Route::get('partner/settings',[PartnerSettingController::class,'index'])->name('settings.indexp');
Route::get('partner/venue-setting',[VenueController::class,'index'])->name('venue.index');
    Route::get('partner/settings',[PartnerSettingController::class,'index'])->name('settings.index');
    Route::get('partner/venue-setting',[VenueController::class,'index'])->name('venue.index');

    Route::get('admin/settings/appointment',[AppointmentController::class,'index'])->name('settings.appointment');

    Route::get('admin/settings/subscription',[SubscriptionController::class,'index'])->name('settings.subscription');

    Route::get('admin/settings/payment-gateway',[PaymentGatewayController::class,'index'])->name('settings.payment-gateway');

    Route::get('admin/services',[ServiceController::class,'index'])->name('services.index');
    Route::get('admin/services/order-management',[OrderManagementController::class,'index'])->name('services.order-management');
    Route::get('admin/services/services-config',[ServicesConfigController::class,'index'])->name('services.services-config');
    Route::get('admin/services/partner-mapping',[PartnerMappingController::class,'index'])->name('services.partner-mapping');
    Route::get('admin/services/recommendations',[RecommendationsController::class,'index'])->name('services.recommendations');
    Route::get('admin/services/offers-management',[OffersManagementController::class,'index'])->name('services.offers-management');
});

/*Partner Route*/

Route::post('register-partner',  [PartnerController::class,'registerParter'])->name('partner.register');
Route::get('account/verify/{token}',  [PartnerController::class,'verifyAccount'])->name('partner.verify');

Route::get('login/{provider}', [PartnerController::class,'redirectToProvider'])->name('social.login');
Route::get('login/{provider}/callback', [PartnerController::class,'handleProviderCallback']);