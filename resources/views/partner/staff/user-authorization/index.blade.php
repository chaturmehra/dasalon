@extends('partner.layouts.auth.app')
@section('content') 

<!--Begin:::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
   <!--begin::Content wrapper-->
   <div class="d-flex flex-column flex-column-fluid">
      <!--begin::Toolbar-->
      <div id="kt_app_toolbar" class="app-toolbar pt-6 pb-0">
         <!--begin::Toolbar container-->
         <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
               <!--begin::Title-->
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">User Authorization</h1>
               <!--end::Title-->
               <!--begin::Breadcrumb-->
               <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     <a href="{{ url('partner/dashboard') }}" class="text-muted text-hover-primary">Home</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     <a href="{{ route('staff.index') }}" class="text-muted text-hover-primary">Staff</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">User Authorization</li>
                  <!--end::Item-->
               </ul>
               <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
         </div>
         <!--end::Toolbar container-->
      </div>
      <!--end::Toolbar-->
      <!--begin::Content-->
      <div id="kt_app_content" class="app-content flex-column-fluid">
         <!--begin::Content container-->
         <div id="kt_app_content_container" class="app-container container-xl">
            <div class="d-flex flex-column flex-row-fluid gap-7">
               <div class="card card-flush">
                  <div class="card-header pt-7 min-h-60px">
                     <div class="title">
                        <h3 class="mb-0">
                           <span class="card-label fw-bold text-gray-800 fs-3">User authorization</span>
                        </h3>
                     </div>
                  </div>
                  <!--begin::Card body-->
                  <div class="card-body pt-0">
                     <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-bordered align-middle fs-6 gy-5 mt-7">
                           <!--begin::Table head-->
                           <thead>
                              <!--begin::Table row-->
                              <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                 <th class=""></th>
                                 <th class=""></th>
                                 <th class="">
                                    <strong>Owner</strong>
                                 </th>
                                 <th class="">
                                    <strong>Manager</strong>
                                 </th>
                              </tr>
                              <!--end::Table row-->
                           </thead>
                           <!--end::Table head-->
                           <tbody class="fw-bold text-gray-600">
                              <tr>
                                 <td>
                                    <strong>Access all locations</strong>
                                 </td>
                                 <td></td>
                                 <td>Multiple</td>
                                 <td>Multiple / Single</td>
                              </tr>
                              <tr>
                                 <td>Menu links</td>
                                 <td>Links & button inside the menu pages</td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td>Home</td>
                                 <td></td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Sales(button)</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Appointment(button)</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <strong>Calendar</strong>
                                 </td>
                                 <td></td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Add appointment</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Change appointment</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>View Calendar</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>View all staff calendar</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <strong>Clients</strong>
                                 </td>
                                 <td></td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Create client</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>import clients, upload client register, export clients</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Reviews - view</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Review - reply/report</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <strong>Sales</strong>
                                 </td>
                                 <td></td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Export</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Options Button</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <strong>Catalog</strong>
                                 </td>
                                 <td></td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Add services</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Edit/Enable/Disable services</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Add Packages</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Add Book-a-look</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Edit/Enable/Disable Book-a-look</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Add Vouchers</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Edit/Enable/Disable Vouchers</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Add Memberships</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Edit/Enable/Disable MEmberships</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Add Products</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Edit/Enable/Disable Products</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <strong>Promote</strong>
                                 </td>
                                 <td></td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Promote - My Business</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Promote - My Services</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Promote - My Package</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Promote - My Vouchers</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Promote - My Memberships</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Promote - My Product</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Promote - My Promo COde</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Promo code - Add/manage</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Digital Promotions - Add/manage</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <strong>Reports</strong>
                                 </td>
                                 <td></td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Reports - view</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Reports - download</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <strong>Settings</strong>
                                 </td>
                                 <td></td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Business & Venue</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Staff - view</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Staff - manage</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Payment integration</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Tax</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <strong>Apps</strong>
                                 </td>
                                 <td>Attendance</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Hiring Center</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Marketplace</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Reports</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>FAQ</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Feature Ideas</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <strong>Notification</strong>
                                 </td>
                                 <td>All activities & alerts</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <strong>User Menu</strong>
                                 </td>
                                 <td>My Profile</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>My Statements</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>User Management</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Refer & Earn</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Reviews</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Add Payment method</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox"value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Support</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                              <tr>
                                 <td></td>
                                 <td>Sign Out</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" type="checkbox" checked="checked" value="" />
                                    </label>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <!--end::Table-->
                     </div>
                  </div>
                  <!--end::Card body-->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--end:::Main-->

@endsection