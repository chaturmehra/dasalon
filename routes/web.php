<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\SettingController as SettingController;
use App\Http\Controllers\Partner\SettingController as PartnerSettingController;
use App\Http\Controllers\Partner\UserController;
use App\Http\Controllers\Partner\VenueController;
use App\Http\Controllers\Partner\PartnerController;
use App\Http\Controllers\Partner\CalenderController;
use App\Http\Controllers\Partner\AppointmentsController;
use App\Http\Controllers\Partner\ClientsController;
use App\Http\Controllers\Partner\ServicesController;
use App\Http\Controllers\Partner\PromoteController;
use App\Http\Controllers\Partner\ReportsController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Admin\ParterConfigController;
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
use App\Http\Controllers\TwilioSMSController;
use App\Http\Controllers\Partner\StaffController;
use App\Http\Controllers\Partner\StaffAttendanceController;
use App\Http\Controllers\Partner\StaffLeaveController;
use App\Http\Controllers\Partner\StaffUserAuthorizationController;
use App\Http\Controllers\Partner\ExportController;


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
    return view('partner/user/sign-in');
});
Route::get('/admin/login', function () {
    return view('welcome');
});

Route::get("/partner/login", [UserController::class, 'signinForm']);

Auth::routes();
Route::get("user-flow", [UserController::class, 'index']);
Route::get("user/signup", [UserController::class, 'signupForm'])->name('email-form');
Route::get("user/book-a-service", [UserController::class, 'bookService'])->name('book-a-service');
Route::get("user/signup/{id}", [UserController::class, 'signinFormProvided'])->name('service-provided');
Route::get("user/signup-service-provided", [UserController::class, 'signupServiceProvided'])->name('signup-service-provided');
Route::middleware(['auth', 'user-role:admin'])->group(function () {
    Route::get("/admin/dashboard", [HomeController::class, 'userHome'])->name('home');
});
Route::middleware(['auth', 'user-role:partner'])->group(function () {
    Route::get("/partner/dashboard", [HomeController::class, 'userHome'])->name('home');
});

Route::middleware(['auth'])->group(function () {
    //Route::get('/admin/settings',[SettingController::class,'index'])->name('settings.index');
    //Route::post('admin/settings',[SettingController::class,'create']);

    Route::get('admin/settings', [SystemAdminController::class, 'index']);
    Route::post('admin/add-admin', [SystemAdminController::class, 'store']);
    Route::get('admin/add-admin/enable-status/{id}', [SystemAdminController::class, 'enabled']);
    Route::get('admin/add-admin/disable-status/{id}', [SystemAdminController::class, 'disabled']);
    Route::get('admin/system-admin-manage/{id}', [SystemAdminController::class, 'edit_view']);
    Route::post('admin/update-system-admin-manage/{id}', [SystemAdminController::class, 'update']);


    Route::get('admin/add-sub/enable-status/{id}', [SubscriptionController::class, 'enabled']);
    Route::get('admin/add-sub/disable-status/{id}', [SubscriptionController::class, 'disabled']);
    Route::post('admin/settings/subscriptionplan', [SubscriptionController::class, 'create']);

    Route::get('admin/add-system-manager', [SystemManagerController::class, 'index']);
    Route::get('admin/edit-system-manager/{id}', [SystemManagerController::class, 'edit']);
    Route::post('admin/add-system-manager', [SystemManagerController::class, 'store']);
    Route::post('admin/update-system-manager/{id}', [SystemManagerController::class, 'update']);
    Route::get('admin/view-manager-roles', [SystemManagerController::class, 'view_manager_roles']);
    Route::get('admin/system-manager/enable-status/{id}', [SystemManagerController::class, 'enabled']);
    Route::get('admin/system-manager/disable-status/{id}', [SystemManagerController::class, 'disabled']);

    // Route::get('admin/settings',[SettingController::class,'showall'])->name('settings.showall');
    /*Route::get('admin/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('admin/settings', [SettingController::class, 'create']);*/
    Route::get('admin/settings/amenity', [AmenityController::class, 'index'])->name('settings.amenity');
    Route::post('admin/settings/saveamenity', [AmenityController::class, 'storeAmenity'])->name('settings.saveAmenity');
    Route::get('amenity-list', [AmenityController::class, 'getAjaxAmenityList'])->name('amenity.getAjaxList');
    Route::get('admin/setting/edit-amenity-status/{id}/{status}', [AmenityController::class, 'changeAmenityStatus']);
    Route::get('special-amenity-list', [AmenityController::class, 'getAjaxSpecialAmenityList'])->name('specialamenity.getAjaxList');
    Route::get('admin/setting/get-state/{id}', [CountryController::class, 'getStateAjax']);
    Route::get('admin/setting/get-city/{id}', [CountryController::class, 'getCityAjax']);
    Route::get('admin/settings/country-config', [CountryController::class, 'index'])->name('settings.country');
    Route::get('admin/settings/partner-config', [ParterConfigController::class, 'index'])->name('settings.role');

    Route::post('admin/save_country', [CountryController::class, 'saveCountry'])->name('settings.saveCountry');
    Route::post('admin/save_franchise', [CountryController::class, 'saveFranchise'])->name('settings.saveFranchise');
    Route::post('admin/save_partnertype', [CountryController::class, 'savePartnerType'])->name('settings.savePartnerType');
    Route::post('admin/save_partnerdetails', [CountryController::class, 'savePartnerDetails'])->name('settings.savePartnerDetails');
    Route::post('admin/save_disablecity', [CountryController::class, 'saveDisableCity'])->name('settings.saveDisableCity');
    Route::post('admin/save_role', [ParterConfigController::class, 'saveRole'])->name('settings.saveRole');
    Route::post('admin/save_partnertypeproperty', [ParterConfigController::class, 'savepartnertypeProperty'])->name('settings.savepartnertypeProperty');

    Route::get('country-list', [CountryController::class, 'getAjaxList'])->name('country.getAjaxList');
    Route::get('franchise-list', [CountryController::class, 'getFranchiseAjaxList'])->name('franchise.getAjaxList');
    Route::get('partnertype-list', [CountryController::class, 'getPartnerTypeAjaxList'])->name('partnertype.getAjaxList');
    Route::get('partnerdetails-list', [CountryController::class, 'getPartnerDetailsAjaxList'])->name('partnerdetails.getAjaxList');
    Route::get('disablecity-list', [CountryController::class, 'getDisableCityAjaxList'])->name('disablecity.getAjaxList');
    Route::get('role-list', [ParterConfigController::class, 'getAjaxList'])->name('role.getAjaxList');

    Route::post('admin/save_profilefeature', [ParterConfigController::class, 'saveprofileFeature'])->name('settings.saveprofilefeature');

    Route::get('admin/setting/edit-country-status/{id}/{status}', [CountryController::class, 'changeCountryStatus']);
    Route::get('admin/setting/edit-franchise-status/{id}/{status}', [CountryController::class, 'changeFranchiseStatus']);
    Route::get('admin/setting/edit-partnertype-status/{id}/{status}', [CountryController::class, 'changePartnerTypeStatus']);
    Route::get('admin/setting/edit-partnerdetails-status/{id}/{status}', [CountryController::class, 'changePartnerDetailsStatus']);
    Route::get('admin/setting/edit-disablecity-status/{id}/{status}', [CountryController::class, 'changeDisableCityStatus']);
    Route::get('admin/setting/edit-role-status/{id}/{status}', [ParterConfigController::class, 'changeRoleStatus']);

    Route::get('admin/setting/edit-salon-status/{id}/{statussalon}', [ParterConfigController::class, 'changeSalonStatus']);

    Route::get('admin/services/services-config/get-subcategory/{id}', [ServicesConfigController::class, 'getStateAjax']);

    Route::get('admin/settings/payment-gateway', [PaymentGatewayController::class, 'index'])->name('settings.payment-gateway');

    Route::get('admin/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('admin/services/order-management', [OrderManagementController::class, 'index'])->name('services.order-management');
    Route::get('admin/services/services-config', [ServicesConfigController::class, 'index'])->name('services.services-config');
    Route::get('admin/services/partner-mapping', [PartnerMappingController::class, 'index'])->name('services.partner-mapping');
    Route::get('admin/services/recommendations', [RecommendationsController::class, 'index'])->name('services.recommendations');
    Route::get('admin/services/offers-management', [OffersManagementController::class, 'index'])->name('services.offers-management');
    Route::post('admin/settings/edit-profilefeature-status', [ParterConfigController::class, 'changeProfilefeaturepermission']);
    Route::get('admin/setting/edit-property-status', [ParterConfigController::class, 'changePropertypermission']);

    Route::get('admin/settings/appointment', [AppointmentController::class, 'index'])->name('settings.appointment');
    Route::post('admin/settings/appointment', [AppointmentController::class, 'create']);
    Route::get('admin/settings/subscription', [SubscriptionController::class, 'index'])->name('settings.subscription');

    Route::post('admin/services/servicecategory', [ServicesConfigController::class, 'create']);

    Route::get('admin/add-servicecategory/enable-status/{id}', [ServicesConfigController::class, 'enabled']);
    Route::get('admin/add-servicecategory/disable-status/{id}', [ServicesConfigController::class, 'disabled']);


    Route::post('admin/services/servicesubcategory', [ServicesConfigController::class, 'store']);

    Route::get('partner/settings', [PartnerSettingController::class, 'index'])->name('settings.index');

    Route::get('partner/venue-setting', [VenueController::class, 'index'])->name('venue.index');
    Route::post('partner/store-venue-setting', [VenueController::class, 'storeVenues']);
    Route::post('partner/update-venue-setting', [VenueController::class, 'updateVenues']);
    Route::get('partner/get-venue-detail-by-id/{id}', [VenueController::class, 'getVenueDetailById']);
    Route::get('partner/get-business-detail/{id}', [VenueController::class, 'getBusinessDetail']);
    Route::post('partner/update-business-detail', [VenueController::class, 'updateBusinessDetail']);
    Route::post('partner/sendEmail', [VenueController::class, 'sendPartnerEmail']);

    Route::get('partner/calender', [CalenderController::class, 'index'])->name('calender.index');
    Route::get('partner/appointments', [AppointmentsController::class, 'index'])->name('appointments.index');
    Route::get('partner/clients', [ClientsController::class, 'index'])->name('clients.index');

    Route::get('partner/services', [ServicesController::class, 'index'])->name('services.index');
    Route::get('partner/get-subcategory/{id}', [ServicesController::class, 'getServiceSubcategoryByAjax']);
    Route::post('partner/service/store', [ServicesController::class, 'serviceStore']);
    Route::post('partner/service/update', [ServicesController::class, 'serviceUpdate']);
    Route::get('partner/service/get-online-price/{id}', [ServicesController::class, 'getOnlinePrice']);

    Route::get('partner/promote', [PromoteController::class, 'index'])->name('promote.index');
    Route::get('partner/reports', [ReportsController::class, 'index'])->name('reports.index');

    Route::get('admin/services/services-config/get-subcategory/{id}', [ServicesConfigController::class, 'getSubcategoryAjax']);
    Route::get('admin/services/services-config/get-service/{id}', [ServicesConfigController::class, 'getServiceAjax']);

    Route::get('admin/add-service/enable-status/{serviceid}', [ServicesConfigController::class, 'enabledservice']);
    Route::get('admin/add-service/disable-status/{serviceid}', [ServicesConfigController::class, 'disabledservice']);

    Route::post('admin/services/addservice', [ServicesConfigController::class, 'addservice']);
    //Route::post('admin/services/servicesubcategory',[ServicesConfigController::class,'store']);

    Route::get('admin/edit-servicecategory/{id}', [ServicesConfigController::class, 'edit']);

    Route::post('admin/update-servicecategory', [ServicesConfigController::class, 'update']);
    Route::get('admin/edit-service/{serviceid}', [ServicesConfigController::class, 'edit_view']);
    Route::post('admin/update-service', [ServicesConfigController::class, 'updateservice']);

    Route::post('admin/add-businesstype', [CountryController::class, 'store']);
    Route::get('admin/businesstype/enable-status/{bt_id}', [CountryController::class, 'enabledbt']);
    Route::get('admin/businesstype/disable-status/{bt_id}', [CountryController::class, 'disabledbt']);

    Route::get('partner/staff', [StaffController::class, 'index'])->name('staff.index');
    Route::post('partner/staff/store', [StaffController::class, 'store']);
    Route::get('partner/staff/edit-staff-status/{id}/{status}', [StaffController::class, 'changeStaffStatus']);
    Route::get('partner/staff/delete-staff/{id}', [StaffController::class, 'deleteStaff']);
    Route::get('partner/staff/view-staff/{id}', [StaffController::class, 'viewStaff']);
    Route::get('partner/staff/get-staff-detail-by-id/{id}', [StaffController::class, 'getStaffDetailById']);
    Route::get('partner/staff/get-commission-by-staff-id/{id}', [StaffController::class, 'getCommissionByStaffId']);
    Route::post('partner/staff/update-staff', [StaffController::class, 'updateStaff']);
    Route::get('partner/staff/filter-by-role/{id}', [StaffController::class, 'filterByRole']);
    Route::get('partner/staff/filter-reset', [StaffController::class, 'filterReset']);

    Route::get('partner/staff/attendance', [StaffAttendanceController::class, 'index'])->name('attendance.index');
    Route::get('partner/staff/get-staff-detail-fill-attendance/{id}', [StaffAttendanceController::class, 'getStaffDetailFillAttendance']);
    Route::post('partner/staff/checkin-attendance', [StaffAttendanceController::class, 'checkinAttendance']);
    Route::post('partner/staff/checkout-attendance', [StaffAttendanceController::class, 'checkoutAttendance']);
    Route::post('partner/staff/checkin-attendance-update', [StaffAttendanceController::class, 'checkinAttendanceUpdate']);
    Route::post('partner/staff/checkout-attendance-update', [StaffAttendanceController::class, 'checkoutAttendanceUpdate']);
    Route::get('partner/staff/filter-attendance-by-date/{start_date}/{end_date}', [StaffAttendanceController::class, 'filterAttendanceByDate']);
    Route::get('partner/staff/attendance-analytics/{start_date}/{end_date}', [StaffAttendanceController::class, 'attendanceAnalytics']);
    Route::get('partner/staff/get-staff-attendance-by-date/{id}/{date}', [StaffAttendanceController::class, 'getStaffAttendanceByDate']);

    Route::get('partner/staff/leave', [StaffLeaveController::class, 'index'])->name('leave.index');
    Route::post('partner/staff/leave', [StaffLeaveController::class, 'storeLeave']);

    Route::get('partner/staff/user-authorization', [StaffUserAuthorizationController::class, 'index'])->name('user-authorization.index');
    Route::post('partner/staff/store-user-authorization', [StaffUserAuthorizationController::class, 'storeAuthorization']);

    Route::get('admin/typeone/enable-status/{id}', [SubscriptionController::class, 'enabledsub']);
    Route::get('admin/typeone/disable-status/{id}', [SubscriptionController::class, 'disabledsub']);

    Route::get('partner/staff/export-staff-by-role/{id}/{type}', [ExportController::class, 'exportStaffByRole']);

    Route::post('admin/settings/onboarding', [SubscriptionController::class, 'createOnboarding']);
    Route::get('admin/settings/subscription/get-typeone/{id}', [SubscriptionController::class, 'gettypeOneAjax']);
    Route::get('admin/settings/subscription/get-typetwo/{id}', [SubscriptionController::class, 'gettypeTwoAjax']);
    Route::get('admin/settings/subscription/get-fees/{id}', [SubscriptionController::class, 'getfeeAjax']);

    Route::get('admin/subcategory/enable-status/{id}', [ServicesConfigController::class, 'enabledSubcat']);
    Route::get('admin/subcategory/disable-status/{id}', [ServicesConfigController::class, 'disabledSubcat']);
    Route::get('admin/edit-servicesubcategory/{id}', [ServicesConfigController::class, 'editSubcat']);
    Route::post('admin/update-servicesubcategory', [ServicesConfigController::class, 'updateSubcat']);

    Route::post('admin/services/recommendedpackage', [RecommendationsController::class, 'addrecommendedpackage']);
    Route::get('admin/rp/enable-status/{rp_id}', [RecommendationsController::class, 'enabledrp']);
    Route::get('admin/rp/disable-status/{rp_id}', [RecommendationsController::class, 'disabledrp']);

});

/*Partner Route*/

Route::post('register-partner', [PartnerController::class, 'registerParter'])->name('partner.register');
Route::post('user/partner-business-detail', [PartnerController::class, 'storeBusinessDetail'])->name('partner.partner-business-detail');
Route::post('user/customer-detail', [PartnerController::class, 'storeCustomerDetail'])->name('customer.customer-detail');
Route::get('account/verify/{token}', [PartnerController::class, 'verifyAccount'])->name('partner.verify');
Route::get('account/reset/{token}', [PartnerController::class, 'resetPassword'])->name('partner.reset');

Route::get('login/{provider}', [PartnerController::class, 'redirectToProvider'])->name('social.login');
Route::get('login/{provider}/callback', [PartnerController::class, 'handleProviderCallback']);
Route::get('sign-up-email', [PartnerController::class, 'signupReturnWithEmail']);
Route::post('sign-up-email', [PartnerController::class, 'signupWithEmail'])->name('sign-up-email');
Route::post('account/create-password', [PartnerController::class, 'createPassword'])->name('create-password');

Route::post('sendSMS', [TwilioSMSController::class, 'index']);
Route::post('sendOTP', [TwilioSMSController::class, 'verify_otp']);