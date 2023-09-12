@extends('partner.layouts.auth.app')
@section('content') 

<!--Begin:::Main-->
<meta name="csrf-token" content="{{ csrf_token() }}">
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
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Staff</h1>
               <!--end::Title-->
               <!--begin::Breadcrumb-->
               <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     <a href="{{ url('partner/dashbaord') }}" class="text-muted text-hover-primary">Home</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">Staff</li>
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
            <!--begin::Navbar-->
            @include('partner.staff.tab')
            <!--end::Navbar-->
            <div class="d-flex flex-column flex-row-fluid gap-7">
               <div class="card card-flush">
                  <div class="card-header align-items-center pt-5 gap-2 gap-md-5">
                     <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                        <li class="nav-item mt-2">
                           <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="attendance.html">
                           Attendance                    
                           </a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                           <a class="nav-link text-active-primary ms-0 me-10 py-5" href="leave.html">
                           Leave                    
                           </a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                           <a class="nav-link text-active-primary ms-0 me-10 py-5" href="permission.html">
                           Permission                   
                           </a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                           <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="user-authorization.html">
                           User Authorization                  
                           </a>
                        </li>
                        <!--end::Nav item-->
                     </ul>
                  </div>
               </div>
               <div class="card card-flush">
                  <div class="card-body pb-0">
                     <!--begin::Wrapper-->
                     <div class="d-flex flex-column px-9">
                        <!--begin::Section-->
                        <div class="pt-10 pb-0">
                           <!--begin::Title-->
                           <h3 class="text-dark text-center fw-bold">No Staff added</h3>
                           <!--end::Title-->
                           <!--begin::Text-->
                           <div class="text-center text-gray-600 fw-semibold pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           </div>
                           <!--end::Text-->
                           <!--begin::Action-->
                           <div class="text-center mt-5 mb-9">
                              <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable22">Add Staff</a>
                           </div>
                           <!--end::Action-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Illustration-->
                        <div class="text-center px-4">
                           <img class="mw-100 mh-200px" alt="image" src="{{asset('/public/assets/media/illustrations/sketchy-1/1.png')}}" />
                        </div>
                        <!--end::Illustration-->
                     </div>
                     <!--end::Wrapper-->
                  </div>
               </div>
               <div class="card card-flush mt-8">
                  @if(session()->has('success'))
                  <div class="card-header display-message">
                     <div class="alert alert-success">
                        {{ session()->get('success') }}
                     </div>
                  </div>
                  @endif
                  @if(session()->has('error'))
                  <div class="card-header display-message">
                     <div class="alert alert-danger">
                        {{ session()->get('error') }}
                     </div>
                  </div>
                  @endif
                  @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
                  @endif
                  <!--begin::Card header-->
                  <div class="card-header align-items-center pt-5 gap-2 gap-md-5">
                     <!--begin::Card title-->
                     <div class="card-title">
                        <h2>Manage Staff</h2>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card header-->
                  <div class="card-header border-0 pt-0">
                     <!--begin::Card title-->
                     <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                           <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                           <span class="path1"></span>
                           <span class="path2"></span>
                           </i>
                           <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
                        </div>
                        <!--end::Search-->
                     </div>
                     <!--begin::Card title-->
                     <!--begin::Card toolbar-->
                     <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                           <!--begin::Filter-->
                           <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                           <i class="ki-duotone ki-filter fs-2">
                           <span class="path1"></span>
                           <span class="path2"></span>
                           </i>Filter</button>
                           <!--begin::Menu 1-->
                           <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                              <!--begin::Header-->
                              <div class="px-7 py-5">
                                 <div class="fs-5 text-dark fw-bold">Filter Options</div>
                              </div>
                              <!--end::Header-->
                              <!--begin::Separator-->
                              <div class="separator border-gray-200"></div>
                              <!--end::Separator-->
                              <!--begin::Content-->
                              <div class="px-7 py-5" data-kt-user-table-filter="form">
                                 <!--begin::Input group-->
                                 <div class="mb-10">
                                    <label class="form-label fs-6 fw-semibold">Role:</label>
                                    <select class="form-select form-select-solid fw-bold filter-option-roles" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true" name="role">
                                       <option></option>
                                       @if($roles)
                                       @foreach($roles as $key => $role)
                                       <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                                       @endforeach
                                       @endif
                                    </select>
                                 </div>
                                 <!--end::Input group-->
                                 <!--begin::Input group-->
                                 <div class="mb-10">
                                    <label class="form-label fs-6 fw-semibold">Two Step Verification:</label>
                                    <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="two-step" data-hide-search="true">
                                       <option></option>
                                       <option value="Enabled">Enabled</option>
                                    </select>
                                 </div>
                                 <!--end::Input group-->
                                 <!--begin::Actions-->
                                 <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                    <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                                 </div>
                                 <!--end::Actions-->
                              </div>
                              <!--end::Content-->
                           </div>
                           <!--end::Menu 1-->
                           <!--end::Filter-->
                           <!--begin::Export-->
                           <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
                           <i class="ki-duotone ki-exit-up fs-2">
                           <span class="path1"></span>
                           <span class="path2"></span>
                           </i>Export</button>
                           <!--end::Export-->
                           <!--begin::Add user-->
                           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable22">
                           <i class="ki-duotone ki-plus fs-2"></i>Add staff</button>
                           <!--end::Add user-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                           <div class="fw-bold me-5">
                              <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                           </div>
                           <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                        </div>
                        <!--end::Group actions-->
                        <!--begin::Modal - Adjust Balance-->
                        <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                           <!--begin::Modal dialog-->
                           <div class="modal-dialog modal-dialog-centered mw-650px">
                              <!--begin::Modal content-->
                              <div class="modal-content">
                                 <!--begin::Modal header-->
                                 <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bold">Export Users</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                       <i class="ki-duotone ki-cross fs-1">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                    <!--end::Close-->
                                 </div>
                                 <!--end::Modal header-->
                                 <!--begin::Modal body-->
                                 <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                    <!--begin::Form-->
                                    <form id="kt_modal_export_users_form" class="form" action="#">
                                       <!--begin::Input group-->
                                       <div class="fv-row mb-10">
                                          <!--begin::Label-->
                                          <label class="fs-6 fw-semibold form-label mb-2">Select Roles:</label>
                                          <!--end::Label-->
                                          <!--begin::Input-->
                                          <select name="role" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bold export-option-roles" name="export_roles">
                                             <option></option>
                                             @if($roles)
                                             @foreach($roles as $key => $role)
                                             <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                                             @endforeach
                                             @endif
                                          </select>
                                          <!--end::Input-->
                                       </div>
                                       <!--end::Input group-->
                                       <!--begin::Input group-->
                                       <div class="fv-row mb-10">
                                          <!--begin::Label-->
                                          <label class="required fs-6 fw-semibold form-label mb-2">Select Export Format:</label>
                                          <!--end::Label-->
                                          <!--begin::Input-->
                                          <select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                             <option></option>
                                             <option value="excel">Excel</option>
                                             <option value="pdf">PDF</option>
                                             <option value="csv">CSV</option>
                                             <option value="zip">ZIP</option>
                                          </select>
                                          <!--end::Input-->
                                       </div>
                                       <!--end::Input group-->
                                       <!--begin::Actions-->
                                       <div class="text-center">
                                          <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                                          <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                          <span class="indicator-label">Submit</span>
                                          <span class="indicator-progress">Please wait...
                                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                          </button>
                                       </div>
                                       <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                 </div>
                                 <!--end::Modal body-->
                              </div>
                              <!--end::Modal content-->
                           </div>
                           <!--end::Modal dialog-->
                        </div>
                        <!--end::Modal - New Card-->
                     </div>
                     <!--end::Card toolbar-->
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body py-4">
                     <!--begin::Table-->
                     <table class="table align-middle table-row-dashed fs-6 gy-5" id="staff_table">
                        <thead>
                           <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                              <th class="w-10px pe-2">
                                 <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#staff_table .form-check-input" value="1" />
                                 </div>
                              </th>
                              <th class="min-w-125px">User</th>
                              <th class="min-w-125px">Phone</th>
                              <th class="min-w-125px">Role</th>
                              <th class="min-w-125px">Status</th>
                              <th class="min-w-125px">Rating</th>
                              <th class="text-end min-w-100px">Actions</th>
                           </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">

                           @if($getStaff)
                           @foreach($getStaff as $skey => $staff)
                           @php
                           if($staff->is_active){
                              $statusVal = 0;
                              $statusText = "Disable";
                           }else{
                              $statusVal = 1;
                              $statusText = "Enable";
                           }
                           @endphp
                           <tr>
                              <td>
                                 <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="{{ $staff->user_id }}" />
                                 </div>
                              </td>
                              <td class="d-flex align-items-center" id="kt_drawer_editprofile_toggle">
                                 <!--begin:: Avatar -->
                                 <div class="symbol symbol-circle symbol-50px overflow-hidden cursor-pointer me-3" id="kt_drawer_editprofile_toggle">
                                    <a href="javascript:void(0)" staff-id="{{ $staff->user_id }}" class="view-staff">
                                       <div class="symbol-label">
                                          <img src="{{asset('/public/'.$staff->profile_image)}}" alt="{{ $staff->name }}" class="w-100" />
                                       </div>
                                    </a>
                                 </div>
                                 <!--end::Avatar-->
                                 <!--begin::User details-->
                                 <div class="d-flex flex-column">
                                    <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $staff->name }}</a>
                                    <span>{{ $staff->email }}</span>
                                 </div>
                                 <!--begin::User details-->
                              </td>
                              <td>{{ $staff->phone }}</td>
                              <td>{{ $staff->role_name }}</td>
                              <td>
                                 <label class="form-check form-switch form-check-custom form-check-solid">
                                 <input class="form-check-input" type="checkbox" @if($staff->is_active)checked="checked" @endif disabled />
                                 </label>
                                 <!--end::Switch-->
                              </td>
                              <td>
                                 <div class="rating">
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                 </div>
                                 <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">Best Rated</span>
                              </td>
                              <td class="text-end">
                                 <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                 <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                 <!--begin::Menu-->
                                 <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                       <a href="#" class="menu-link px-3 view-staff" id="kt_drawer_editprofile_toggle" staff-id="{{ $staff->user_id }}">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                       <a href="javascript:void(0)" class="menu-link px-3 delete-staff" staff-id="{{ $staff->user_id }}">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                       <a href="javascript:void(0)" class="menu-link px-3 status-change"  status-value="{{ $statusVal }}" staff-id="{{ $staff->user_id }}">{{ $statusText }}
                                       </a>
                                    </div>
                                    <!--end::Menu item-->
                                 </div>
                                 <!--end::Menu-->
                              </td>
                           </tr>
                           @endforeach
                           @endif
                        </tbody>
                     </table>
                     <!--end::Table-->
                  </div>
                  <!--end::Card body-->
               </div>
            </div>
         </div>
         <!--end::Content container-->
      </div>
      <!--end::Content-->
   </div>
   <!--end::Content wrapper-->
</div>
<!--end:::Main-->

<!--begin::Modal - Add commission-->
@include('partner.staff.modal.commission')
<!--end::Modal - Add commission-->

<!--begin::Modal - Add task-->
@include('partner.staff.modal.synccalendar')
<!--end::Modal - Add task-->

<!--begin::Modal - Add task-->
@include('partner.staff.modal.add-staff')
<!--end::Modal - Add task-->
<!--begin::Drawer-->
<div
   id="kt_drawer_example_notification"
   class="bg-white"
   data-kt-drawer="true"
   data-kt-drawer-activate="true"
   data-kt-drawer-toggle="#kt_drawer_example_notification_toggle"
   data-kt-drawer-close="#kt_drawer_example_notification_close"
   data-kt-drawer-overlay="true"
   data-kt-drawer-permanent="true"
   data-kt-drawer-width="{default:'300px', 'md': '700px', 'xl': '950px'}"
   >
   <!--begin::Card-->
   <div class="card rounded-0 w-100 brlft bggrey">
      <!--begin::Card header-->
      <div class="card-header pe-5">
         <!--begin::Title-->
         <div class="card-title">
            Notification
         </div>
         <!--end::Title-->
         <!--begin::Card toolbar-->
         <div class="card-toolbar">
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="kt_drawer_example_notification_close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <!--end::Card toolbar-->
      </div>
      <!--end::Card header-->
      <!--begin::Card body-->
      <div class="hover-scroll-overlay-y pt-3 px-5">
         <div class="card card-flush">
            <div class="card-body py-5">
               <!--begin:::Tabs-->
               <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold">
                  <!--begin:::Tab item-->
                  <li class="nav-item">
                     <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#headernotification">Notification</a>
                  </li>
                  <!--end:::Tab item-->
                  <!--begin:::Tab item-->
                  <li class="nav-item">
                     <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#headeractivity">Activity</a>
                  </li>
                  <!--end:::Tab item-->
                  <!--begin:::Tab item-->
                  <li class="nav-item">
                     <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#headeralert">Alert</a>
                  </li>
                  <!--end:::Tab item-->
                  <!--begin:::Tab item-->
                  <li class="nav-item">
                     <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#headerappointment">Appointment & Sales</a>
                  </li>
                  <!--end:::Tab item-->
               </ul>
               <!--end:::Tabs-->
            </div>
         </div>
         <!--begin:::Tab content-->
         <div class="tab-content" id="myTabContent">
            <!--begin:::Tab pane-->
            <div class="tab-pane fade show active" id="headernotification" role="tabpanel">
               <div class="card card-flush mt-6">
                  <div class="card-header align-items-center pt-10 pb-5 gap-2 gap-md-5">
                     <!--begin::Search-->
                     <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="d-flex align-items-center position-relative">
                           <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                           <input type="text" class="form-control form-control-solid w-100 ps-12" placeholder="Filter by Client Name" />
                        </div>
                        <div class="d-flex align-items-center gap-2">
                           <label class="form-label mb-0">Date:</label>
                           <input class="form-control form-control-solid" placeholder="Pick date rage" id="kt_daterangepicker_1"/>
                        </div>
                     </div>
                     <!--end::Search-->
                  </div>
                  <div class="card-body">
                     <div class="d-flex flex-column gap-4">
                        <div class="p-5 brdr">
                           <div class="d-flex">
                              <div class="symbol symbol-100px symbol-circle me-3 mb-4">
                                 <img src="{{asset('/public/assets/media/avatars/300-3.jpg')}}" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column gap-1">
                                 <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                                 <a href="https://wa.me/9587456915">
                                 <i class="fa-brands fa-whatsapp"></i>
                                 <span class="text-gray-400 fw-semibold fs-6">9587456915</span>
                                 </a>
                                 <div class="rating mt-1">
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                 </div>
                                 <span class="text-gray-400 fs-6 mt-6">Trust all is well. We've missed you at our salon for the past 45 days. Currently, we're featuring exciting offers and discounts. To secure your spot, kindly book your appointment in advance</span>
                              </div>
                              <div class="w-300px">
                                 <span class="text-gray-400 fs-6">7 jul 2023</span>
                                 <span class="text-gray-400 fs-6">1:30 pm</span>
                              </div>
                           </div>
                        </div>
                        <div class="p-5 brdr">
                           <div class="d-flex">
                              <div class="symbol symbol-100px symbol-circle me-3 mb-4">
                                 <img src="{{asset('/public/assets/media/avatars/300-3.jpg')}}" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column gap-1">
                                 <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                                 <a href="https://wa.me/9587456915">
                                 <i class="fa-brands fa-whatsapp"></i>
                                 <span class="text-gray-400 fw-semibold fs-6">9587456915</span>
                                 </a>
                                 <div class="rating mt-1">
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                 </div>
                                 <span class="text-gray-400 fs-6 mt-6">Trust all is well. We've missed you at our salon for the past 45 days. Currently, we're featuring exciting offers and discounts. To secure your spot, kindly book your appointment in advance</span>
                              </div>
                              <div class="w-300px">
                                 <span class="text-gray-400 fs-6">7 jul 2023</span>
                                 <span class="text-gray-400 fs-6">1:30 pm</span>
                              </div>
                           </div>
                        </div>
                        <div class="p-5 brdr">
                           <div class="d-flex">
                              <div class="symbol symbol-100px symbol-circle me-3 mb-4">
                                 <img src="{{asset('/public/assets/media/avatars/300-3.jpg')}}" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column gap-1">
                                 <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                                 <a href="https://wa.me/9587456915">
                                 <i class="fa-brands fa-whatsapp"></i>
                                 <span class="text-gray-400 fw-semibold fs-6">9587456915</span>
                                 </a>
                                 <div class="rating mt-1">
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                 </div>
                                 <span class="text-gray-400 fs-6 mt-6">Trust all is well. We've missed you at our salon for the past 45 days. Currently, we're featuring exciting offers and discounts. To secure your spot, kindly book your appointment in advance</span>
                              </div>
                              <div class="w-300px">
                                 <span class="text-gray-400 fs-6">7 jul 2023</span>
                                 <span class="text-gray-400 fs-6">1:30 pm</span>
                              </div>
                           </div>
                        </div>
                        <div class="p-5 brdr">
                           <div class="d-flex">
                              <div class="symbol symbol-100px symbol-circle me-3 mb-4">
                                 <img src="{{asset('/public/assets/media/avatars/300-3.jpg')}}" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column gap-1">
                                 <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                                 <a href="https://wa.me/9587456915">
                                 <i class="fa-brands fa-whatsapp"></i>
                                 <span class="text-gray-400 fw-semibold fs-6">9587456915</span>
                                 </a>
                                 <div class="rating mt-1">
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                 </div>
                                 <span class="text-gray-400 fs-6 mt-6">Trust all is well. We've missed you at our salon for the past 45 days. Currently, we're featuring exciting offers and discounts. To secure your spot, kindly book your appointment in advance</span>
                              </div>
                              <div class="w-300px">
                                 <span class="text-gray-400 fs-6">7 jul 2023</span>
                                 <span class="text-gray-400 fs-6">1:30 pm</span>
                              </div>
                           </div>
                        </div>
                        <div class="p-5 brdr">
                           <div class="d-flex">
                              <div class="symbol symbol-100px symbol-circle me-3 mb-4">
                                 <img src="{{asset('/public/assets/media/avatars/300-3.jpg')}}" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column gap-1">
                                 <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                                 <a href="https://wa.me/9587456915">
                                 <i class="fa-brands fa-whatsapp"></i>
                                 <span class="text-gray-400 fw-semibold fs-6">9587456915</span>
                                 </a>
                                 <div class="rating mt-1">
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                 </div>
                                 <span class="text-gray-400 fs-6 mt-6">Trust all is well. We've missed you at our salon for the past 45 days. Currently, we're featuring exciting offers and discounts. To secure your spot, kindly book your appointment in advance</span>
                              </div>
                              <div class="w-300px">
                                 <span class="text-gray-400 fs-6">7 jul 2023</span>
                                 <span class="text-gray-400 fs-6">1:30 pm</span>
                              </div>
                           </div>
                        </div>
                        <div class="p-5 brdr">
                           <div class="d-flex">
                              <div class="symbol symbol-100px symbol-circle me-3 mb-4">
                                 <img src="{{asset('/public/assets/media/avatars/300-3.jpg')}}" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column gap-1">
                                 <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                                 <a href="https://wa.me/9587456915">
                                 <i class="fa-brands fa-whatsapp"></i>
                                 <span class="text-gray-400 fw-semibold fs-6">9587456915</span>
                                 </a>
                                 <div class="rating mt-1">
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                 </div>
                                 <span class="text-gray-400 fs-6 mt-6">Trust all is well. We've missed you at our salon for the past 45 days. Currently, we're featuring exciting offers and discounts. To secure your spot, kindly book your appointment in advance</span>
                              </div>
                              <div class="w-300px">
                                 <span class="text-gray-400 fs-6">7 jul 2023</span>
                                 <span class="text-gray-400 fs-6">1:30 pm</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--end:::Tab pane-->
               </div>
            </div>
            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="headeractivity" role="tabpanel">
               <!--begin::Timeline-->
               <div class="card mt-6">
                  <!--begin::Card head-->
                  <div class="card-header card-header-stretch">
                     <!--begin::Title-->
                     <div class="card-title d-flex align-items-center">
                        <i class="ki-duotone ki-calendar-8 fs-1 text-primary me-3 lh-0">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                        <span class="path6"></span>
                        </i>
                        <h3 class="fw-bold m-0 text-gray-800">Jan 23, 2023</h3>
                     </div>
                     <!--end::Title-->
                     <!--begin::Toolbar-->
                     <div class="card-toolbar m-0">
                        <!--begin::Tab nav-->
                        <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bold" role="tablist">
                           <li class="nav-item" role="presentation">
                              <a id="kt_activity_today_tab" class="nav-link justify-content-center text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_activity_today">Today</a>
                           </li>
                           <li class="nav-item" role="presentation">
                              <a id="kt_activity_week_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_week">Week</a>
                           </li>
                           <li class="nav-item" role="presentation">
                              <a id="kt_activity_month_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_month">Month</a>
                           </li>
                           <li class="nav-item" role="presentation">
                              <a id="kt_activity_year_tab" class="nav-link justify-content-center text-active-gray-800 text-hover-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_year">2023</a>
                           </li>
                        </ul>
                        <!--end::Tab nav-->
                     </div>
                     <!--end::Toolbar-->
                  </div>
                  <!--end::Card head-->
                  <!--begin::Card body-->
                  <div class="card-body">
                     <!--begin::Tab Content-->
                     <div class="tab-content">
                        <!--begin::Tab panel-->
                        <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_activity_today_tab">
                           <!--begin::Timeline-->
                           <div class="timeline">
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       <span class="path3"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                             <img src="{{asset('/public/assets/media/avatars/300-14.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                    <!--begin::Timeline details-->
                                    <div class="overflow-auto pb-5">
                                       <!--begin::Record-->
                                       <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                          <!--begin::Title-->
                                          <a href="../../demo1/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
                                          <!--end::Title-->
                                          <!--begin::Label-->
                                          <div class="min-w-175px pe-2">
                                             <span class="badge badge-light text-muted">Application Design</span>
                                          </div>
                                          <!--end::Label-->
                                          <!--begin::Users-->
                                          <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                             <!--begin::User-->
                                             <div class="symbol symbol-circle symbol-25px">
                                                <img src="{{asset('/public/assets/media/avatars/300-2.jpg')}}" alt="img" />
                                             </div>
                                             <!--end::User-->
                                             <!--begin::User-->
                                             <div class="symbol symbol-circle symbol-25px">
                                                <img src="{{asset('/public/assets/media/avatars/300-14.jpg')}}" alt="img" />
                                             </div>
                                             <!--end::User-->
                                             <!--begin::User-->
                                             <div class="symbol symbol-circle symbol-25px">
                                                <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
                                             </div>
                                             <!--end::User-->
                                          </div>
                                          <!--end::Users-->
                                          <!--begin::Progress-->
                                          <div class="min-w-125px pe-2">
                                             <span class="badge badge-light-primary">In Progress</span>
                                          </div>
                                          <!--end::Progress-->
                                          <!--begin::Action-->
                                          <a href="../../demo1/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                          <!--end::Action-->
                                       </div>
                                       <!--end::Record-->
                                       <!--begin::Record-->
                                       <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                          <!--begin::Title-->
                                          <a href="../../demo1/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
                                          <!--end::Title-->
                                          <!--begin::Label-->
                                          <div class="min-w-175px">
                                             <span class="badge badge-light text-muted">CRM System Development</span>
                                          </div>
                                          <!--end::Label-->
                                          <!--begin::Users-->
                                          <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                             <!--begin::User-->
                                             <div class="symbol symbol-circle symbol-25px">
                                                <img src="{{asset('/public/assets/media/avatars/300-20.jpg')}}" alt="img" />
                                             </div>
                                             <!--end::User-->
                                             <!--begin::User-->
                                             <div class="symbol symbol-circle symbol-25px">
                                                <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
                                             </div>
                                             <!--end::User-->
                                          </div>
                                          <!--end::Users-->
                                          <!--begin::Progress-->
                                          <div class="min-w-125px">
                                             <span class="badge badge-light-success">Completed</span>
                                          </div>
                                          <!--end::Progress-->
                                          <!--begin::Action-->
                                          <a href="../../demo1/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                          <!--end::Action-->
                                       </div>
                                       <!--end::Record-->
                                    </div>
                                    <!--end::Timeline details-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-flag fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n2">
                                    <!--begin::Timeline heading-->
                                    <div class="overflow-auto pe-3">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                             <img src="{{asset('/public/assets/media/avatars/300-1.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       <span class="path3"></span>
                                       <span class="path4"></span>
                                       <span class="path5"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="mb-5 pe-3">
                                       <!--begin::Title-->
                                       <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                             <img src="{{asset('/public/assets/media/avatars/300-23.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                    <!--begin::Timeline details-->
                                    <div class="overflow-auto pb-5">
                                       <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                          <!--begin::Item-->
                                          <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                             <!--begin::Icon-->
                                             <img alt="" class="w-30px me-3" src="{{asset('/public/assets/media/svg/files/pdf.svg')}}" />
                                             <!--end::Icon-->
                                             <!--begin::Info-->
                                             <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="../../demo1/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-400">1.9mb</div>
                                                <!--end::Number-->
                                             </div>
                                             <!--begin::Info-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                             <!--begin::Icon-->
                                             <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{asset('/public/assets/media/svg/files/doc.svg')}}" />
                                             <!--end::Icon-->
                                             <!--begin::Info-->
                                             <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-400">18kb</div>
                                                <!--end::Number-->
                                             </div>
                                             <!--end::Info-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-aligns-center">
                                             <!--begin::Icon-->
                                             <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{asset('/public/assets/media/svg/files/css.svg')}}" />
                                             <!--end::Icon-->
                                             <!--begin::Info-->
                                             <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-400">20mb</div>
                                                <!--end::Number-->
                                             </div>
                                             <!--end::Icon-->
                                          </div>
                                          <!--end::Item-->
                                       </div>
                                    </div>
                                    <!--end::Timeline details-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">Task
                                          <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                          <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:
                                       </div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                             <img src="{{asset('/public/assets/media/avatars/300-14.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                             <img src="{{asset('/public/assets/media/avatars/300-2.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                    <!--begin::Timeline details-->
                                    <div class="overflow-auto pb-5">
                                       <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                          <!--begin::Item-->
                                          <div class="overlay me-10">
                                             <!--begin::Image-->
                                             <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="{{asset('/public/assets/media/stock/600x400/img-29.jpg')}}" />
                                             </div>
                                             <!--end::Image-->
                                             <!--begin::Link-->
                                             <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                             </div>
                                             <!--end::Link-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="overlay me-10">
                                             <!--begin::Image-->
                                             <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="{{asset('/public/assets/media/stock/600x400/img-31.jpg')}}" />
                                             </div>
                                             <!--end::Image-->
                                             <!--begin::Link-->
                                             <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                             </div>
                                             <!--end::Link-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="overlay">
                                             <!--begin::Image-->
                                             <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="{{asset('/public/assets/media/stock/600x400/img-40.jpg')}}" />
                                             </div>
                                             <!--end::Image-->
                                             <!--begin::Link-->
                                             <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                             </div>
                                             <!--end::Link-->
                                          </div>
                                          <!--end::Item-->
                                       </div>
                                    </div>
                                    <!--end::Timeline details-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">New case
                                          <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project
                                       </div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="overflow-auto pb-5">
                                          <!--begin::Wrapper-->
                                          <div class="d-flex align-items-center mt-1 fs-6">
                                             <!--begin::Info-->
                                             <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                             <!--end::Info-->
                                             <!--begin::User-->
                                             <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                             <!--end::User-->
                                          </div>
                                          <!--end::Wrapper-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                             <img src="{{asset('/public/assets/media/avatars/300-4.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                    <!--begin::Timeline details-->
                                    <div class="overflow-auto pb-5">
                                       <!--begin::Notice-->
                                       <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                          <!--begin::Icon-->
                                          <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">
                                          <span class="path1"></span>
                                          <span class="path2"></span>
                                          <span class="path3"></span>
                                          </i>
                                          <!--end::Icon-->
                                          <!--begin::Wrapper-->
                                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                             <!--begin::Content-->
                                             <div class="mb-3 mb-md-0 fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
                                                <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                                             </div>
                                             <!--end::Content-->
                                             <!--begin::Action-->
                                             <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                                             <!--end::Action-->
                                          </div>
                                          <!--end::Wrapper-->
                                       </div>
                                       <!--end::Notice-->
                                    </div>
                                    <!--end::Timeline details-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-basket fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       <span class="path3"></span>
                                       <span class="path4"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">New order
                                          <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation
                                       </div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                           </div>
                           <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_activity_week" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_week_tab">
                           <!--begin::Timeline-->
                           <div class="timeline">
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-flag fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n2">
                                    <!--begin::Timeline heading-->
                                    <div class="overflow-auto pe-3">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                             <img src="{{asset('/public/assets/media/avatars/300-1.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       <span class="path3"></span>
                                       <span class="path4"></span>
                                       <span class="path5"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="mb-5 pe-3">
                                       <!--begin::Title-->
                                       <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                             <img src="{{asset('/public/assets/media/avatars/300-23.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                    <!--begin::Timeline details-->
                                    <div class="overflow-auto pb-5">
                                       <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                          <!--begin::Item-->
                                          <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                             <!--begin::Icon-->
                                             <img alt="" class="w-30px me-3" src="{{asset('/public/assets/media/svg/files/pdf.svg')}}" />
                                             <!--end::Icon-->
                                             <!--begin::Info-->
                                             <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="../../demo1/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-400">1.9mb</div>
                                                <!--end::Number-->
                                             </div>
                                             <!--begin::Info-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                             <!--begin::Icon-->
                                             <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{asset('/public/assets/media/svg/files/doc.svg')}}" />
                                             <!--end::Icon-->
                                             <!--begin::Info-->
                                             <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-400">18kb</div>
                                                <!--end::Number-->
                                             </div>
                                             <!--end::Info-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-aligns-center">
                                             <!--begin::Icon-->
                                             <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{asset('/public/assets/media/svg/files/css.svg')}}" />
                                             <!--end::Icon-->
                                             <!--begin::Info-->
                                             <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-400">20mb</div>
                                                <!--end::Number-->
                                             </div>
                                             <!--end::Icon-->
                                          </div>
                                          <!--end::Item-->
                                       </div>
                                    </div>
                                    <!--end::Timeline details-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">Task
                                          <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                          <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:
                                       </div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                             <img src="{{asset('/public/assets/media/avatars/300-14.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                             <img src="{{asset('/public/assets/media/avatars/300-2.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                    <!--begin::Timeline details-->
                                    <div class="overflow-auto pb-5">
                                       <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                          <!--begin::Item-->
                                          <div class="overlay me-10">
                                             <!--begin::Image-->
                                             <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="{{asset('/public/assets/media/stock/600x400/img-29.jpg')}}" />
                                             </div>
                                             <!--end::Image-->
                                             <!--begin::Link-->
                                             <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                             </div>
                                             <!--end::Link-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="overlay me-10">
                                             <!--begin::Image-->
                                             <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="{{asset('/public/assets/media/stock/600x400/img-31.jpg')}}" />
                                             </div>
                                             <!--end::Image-->
                                             <!--begin::Link-->
                                             <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                             </div>
                                             <!--end::Link-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="overlay">
                                             <!--begin::Image-->
                                             <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="{{asset('/public/assets/media/stock/600x400/img-40.jpg')}}" />
                                             </div>
                                             <!--end::Image-->
                                             <!--begin::Link-->
                                             <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                             </div>
                                             <!--end::Link-->
                                          </div>
                                          <!--end::Item-->
                                       </div>
                                    </div>
                                    <!--end::Timeline details-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">New case
                                          <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project
                                       </div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="overflow-auto pb-5">
                                          <!--begin::Wrapper-->
                                          <div class="d-flex align-items-center mt-1 fs-6">
                                             <!--begin::Info-->
                                             <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                             <!--end::Info-->
                                             <!--begin::User-->
                                             <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                             <!--end::User-->
                                          </div>
                                          <!--end::Wrapper-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                           </div>
                           <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_activity_month" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_month_tab">
                           <!--begin::Timeline-->
                           <div class="timeline">
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                             <img src="{{asset('/public/assets/media/avatars/300-2.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                    <!--begin::Timeline details-->
                                    <div class="overflow-auto pb-5">
                                       <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                          <!--begin::Item-->
                                          <div class="overlay me-10">
                                             <!--begin::Image-->
                                             <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="{{asset('/public/assets/media/stock/600x400/img-29.jpg')}}" />
                                             </div>
                                             <!--end::Image-->
                                             <!--begin::Link-->
                                             <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                             </div>
                                             <!--end::Link-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="overlay me-10">
                                             <!--begin::Image-->
                                             <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="{{asset('/public/assets/media/stock/600x400/img-31.jpg')}}" />
                                             </div>
                                             <!--end::Image-->
                                             <!--begin::Link-->
                                             <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                             </div>
                                             <!--end::Link-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="overlay">
                                             <!--begin::Image-->
                                             <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="{{asset('/public/assets/media/stock/600x400/img-40.jpg')}}" />
                                             </div>
                                             <!--end::Image-->
                                             <!--begin::Link-->
                                             <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                             </div>
                                             <!--end::Link-->
                                          </div>
                                          <!--end::Item-->
                                       </div>
                                    </div>
                                    <!--end::Timeline details-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">New case
                                          <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project
                                       </div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="overflow-auto pb-5">
                                          <!--begin::Wrapper-->
                                          <div class="d-flex align-items-center mt-1 fs-6">
                                             <!--begin::Info-->
                                             <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                             <!--end::Info-->
                                             <!--begin::User-->
                                             <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                             <!--end::User-->
                                          </div>
                                          <!--end::Wrapper-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-basket fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       <span class="path3"></span>
                                       <span class="path4"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">New order
                                          <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation
                                       </div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-flag fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n2">
                                    <!--begin::Timeline heading-->
                                    <div class="overflow-auto pe-3">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                             <img src="{{asset('/public/assets/media/avatars/300-1.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       <span class="path3"></span>
                                       <span class="path4"></span>
                                       <span class="path5"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="mb-5 pe-3">
                                       <!--begin::Title-->
                                       <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                             <img src="{{asset('/public/assets/media/avatars/300-23.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                    <!--begin::Timeline details-->
                                    <div class="overflow-auto pb-5">
                                       <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                          <!--begin::Item-->
                                          <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                             <!--begin::Icon-->
                                             <img alt="" class="w-30px me-3" src="{{asset('/public/assets/media/svg/files/pdf.svg')}}" />
                                             <!--end::Icon-->
                                             <!--begin::Info-->
                                             <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="../../demo1/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-400">1.9mb</div>
                                                <!--end::Number-->
                                             </div>
                                             <!--begin::Info-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                             <!--begin::Icon-->
                                             <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{asset('/public/assets/media/svg/files/doc.svg')}}" />
                                             <!--end::Icon-->
                                             <!--begin::Info-->
                                             <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-400">18kb</div>
                                                <!--end::Number-->
                                             </div>
                                             <!--end::Info-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-aligns-center">
                                             <!--begin::Icon-->
                                             <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{asset('/public/assets/media/svg/files/css.svg')}}" />
                                             <!--end::Icon-->
                                             <!--begin::Info-->
                                             <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-400">20mb</div>
                                                <!--end::Number-->
                                             </div>
                                             <!--end::Icon-->
                                          </div>
                                          <!--end::Item-->
                                       </div>
                                    </div>
                                    <!--end::Timeline details-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">Task
                                          <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                          <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:
                                       </div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                             <img src="{{asset('/public/assets/media/avatars/300-14.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                           </div>
                           <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_activity_year" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_year_tab">
                           <!--begin::Timeline-->
                           <div class="timeline">
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       <span class="path3"></span>
                                       <span class="path4"></span>
                                       <span class="path5"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="mb-5 pe-3">
                                       <!--begin::Title-->
                                       <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                             <img src="{{asset('/public/assets/media/avatars/300-23.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                    <!--begin::Timeline details-->
                                    <div class="overflow-auto pb-5">
                                       <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                          <!--begin::Item-->
                                          <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                             <!--begin::Icon-->
                                             <img alt="" class="w-30px me-3" src="{{asset('/public/assets/media/svg/files/pdf.svg')}}" />
                                             <!--end::Icon-->
                                             <!--begin::Info-->
                                             <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="../../demo1/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-400">1.9mb</div>
                                                <!--end::Number-->
                                             </div>
                                             <!--begin::Info-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                             <!--begin::Icon-->
                                             <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{asset('/public/assets/media/svg/files/doc.svg')}}" />
                                             <!--end::Icon-->
                                             <!--begin::Info-->
                                             <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-400">18kb</div>
                                                <!--end::Number-->
                                             </div>
                                             <!--end::Info-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="d-flex flex-aligns-center">
                                             <!--begin::Icon-->
                                             <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{asset('/public/assets/media/svg/files/css.svg')}}" />
                                             <!--end::Icon-->
                                             <!--begin::Info-->
                                             <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-400">20mb</div>
                                                <!--end::Number-->
                                             </div>
                                             <!--end::Icon-->
                                          </div>
                                          <!--end::Item-->
                                       </div>
                                    </div>
                                    <!--end::Timeline details-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">Task
                                          <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                          <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:
                                       </div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                             <img src="{{asset('/public/assets/media/avatars/300-14.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                             <img src="{{asset('/public/assets/media/avatars/300-2.jpg')}}" alt="img" />
                                          </div>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                    <!--begin::Timeline details-->
                                    <div class="overflow-auto pb-5">
                                       <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                          <!--begin::Item-->
                                          <div class="overlay me-10">
                                             <!--begin::Image-->
                                             <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="{{asset('/public/assets/media/stock/600x400/img-29.jpg')}}" />
                                             </div>
                                             <!--end::Image-->
                                             <!--begin::Link-->
                                             <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                             </div>
                                             <!--end::Link-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="overlay me-10">
                                             <!--begin::Image-->
                                             <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="{{asset('/public/assets/media/stock/600x400/img-31.jpg')}}" />
                                             </div>
                                             <!--end::Image-->
                                             <!--begin::Link-->
                                             <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                             </div>
                                             <!--end::Link-->
                                          </div>
                                          <!--end::Item-->
                                          <!--begin::Item-->
                                          <div class="overlay">
                                             <!--begin::Image-->
                                             <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="{{asset('/public/assets/media/stock/600x400/img-40.jpg')}}" />
                                             </div>
                                             <!--end::Image-->
                                             <!--begin::Link-->
                                             <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                             </div>
                                             <!--end::Link-->
                                          </div>
                                          <!--end::Item-->
                                       </div>
                                    </div>
                                    <!--end::Timeline details-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mb-10 mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">New case
                                          <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project
                                       </div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="overflow-auto pb-5">
                                          <!--begin::Wrapper-->
                                          <div class="d-flex align-items-center mt-1 fs-6">
                                             <!--begin::Info-->
                                             <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                             <!--end::Info-->
                                             <!--begin::User-->
                                             <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                             <!--end::User-->
                                          </div>
                                          <!--end::Wrapper-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                              <!--begin::Timeline item-->
                              <div class="timeline-item">
                                 <!--begin::Timeline line-->
                                 <div class="timeline-line w-40px"></div>
                                 <!--end::Timeline line-->
                                 <!--begin::Timeline icon-->
                                 <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                       <i class="ki-duotone ki-basket fs-2 text-gray-500">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       <span class="path3"></span>
                                       <span class="path4"></span>
                                       </i>
                                    </div>
                                 </div>
                                 <!--end::Timeline icon-->
                                 <!--begin::Timeline content-->
                                 <div class="timeline-content mt-n1">
                                    <!--begin::Timeline heading-->
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">New order
                                          <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation
                                       </div>
                                       <!--end::Title-->
                                       <!--begin::Description-->
                                       <div class="d-flex align-items-center mt-1 fs-6">
                                          <!--begin::Info-->
                                          <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                          <!--end::Info-->
                                          <!--begin::User-->
                                          <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                          <!--end::User-->
                                       </div>
                                       <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                 </div>
                                 <!--end::Timeline content-->
                              </div>
                              <!--end::Timeline item-->
                           </div>
                           <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->
                     </div>
                     <!--end::Tab Content-->
                  </div>
                  <!--end::Card body-->
               </div>
               <!--end::Timeline-->
            </div>
            <!--end:::Tab pane-->
            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="headeralert" role="tabpanel">
               <div class="card mt-6">
                  <!--begin::Card body-->
                  <div class="card-body">
                     <div class="d-flex flex-column gap-4">
                        <div class="d-flex flex-column gap-4">
                           <span class="text-gray-800 fw-bold fs-4">Fill your August calendar with a blast campaign <i class="ki-duotone ki-rocket">
                           <i class="path1"></i>
                           <i class="path2"></i>
                           </i></span>
                           <span class="text-gray-600 fs-6">Last month, partners who sent a blast campaign had an average return on investment of 243%. Instantly reach your clients with a blast email or text message and get booked up for August</span>
                           <span class="text-gray-400 fs-6">20 days ago</span>
                           <div>
                              <a href="#" class="btn btn-sm btn-primary px-6">Send a campaign</a>
                           </div>
                        </div>
                        <div class="separator my-4"></div>
                        <div class="d-flex flex-column gap-4">
                           <span class="text-gray-800 fw-bold fs-4">Fill your August calendar with a blast campaign <i class="ki-duotone ki-rocket">
                           <i class="path1"></i>
                           <i class="path2"></i>
                           </i></span>
                           <span class="text-gray-600 fs-6">Last month, partners who sent a blast campaign had an average return on investment of 243%. Instantly reach your clients with a blast email or text message and get booked up for August</span>
                           <span class="text-gray-400 fs-6">20 days ago</span>
                           <div>
                              <a href="#" class="btn btn-sm btn-primary px-6">Send a campaign</a>
                           </div>
                        </div>
                        <div class="separator my-4"></div>
                        <div class="d-flex flex-column gap-4">
                           <span class="text-gray-800 fw-bold fs-4">Fill your August calendar with a blast campaign <i class="ki-duotone ki-rocket">
                           <i class="path1"></i>
                           <i class="path2"></i>
                           </i></span>
                           <span class="text-gray-600 fs-6">Last month, partners who sent a blast campaign had an average return on investment of 243%. Instantly reach your clients with a blast email or text message and get booked up for August</span>
                           <span class="text-gray-400 fs-6">20 days ago</span>
                           <div>
                              <a href="#" class="btn btn-sm btn-primary px-6">Send a campaign</a>
                           </div>
                        </div>
                        <div class="separator my-4"></div>
                        <div class="d-flex flex-column gap-4">
                           <span class="text-gray-800 fw-bold fs-4">Fill your August calendar with a blast campaign <i class="ki-duotone ki-rocket">
                           <i class="path1"></i>
                           <i class="path2"></i>
                           </i></span>
                           <span class="text-gray-600 fs-6">Last month, partners who sent a blast campaign had an average return on investment of 243%. Instantly reach your clients with a blast email or text message and get booked up for August</span>
                           <span class="text-gray-400 fs-6">20 days ago</span>
                           <div>
                              <a href="#" class="btn btn-sm btn-primary px-6">Send a campaign</a>
                           </div>
                        </div>
                        <div class="separator my-4"></div>
                        <div class="d-flex flex-column gap-4">
                           <span class="text-gray-800 fw-bold fs-4">Fill your August calendar with a blast campaign <i class="ki-duotone ki-rocket">
                           <i class="path1"></i>
                           <i class="path2"></i>
                           </i></span>
                           <span class="text-gray-600 fs-6">Last month, partners who sent a blast campaign had an average return on investment of 243%. Instantly reach your clients with a blast email or text message and get booked up for August</span>
                           <span class="text-gray-400 fs-6">20 days ago</span>
                           <div>
                              <a href="#" class="btn btn-sm btn-primary px-6">Send a campaign</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--end::Card body-->
               </div>
            </div>
            <!--end:::Tab pane-->
            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="headerappointment" role="tabpanel">
               <div class="card mt-6">
                  <!--begin::Card body-->
                  <div class="card-body">
                     <!--begin::Accordion-->
                     <div class="accordion accordion-icon-collapse" id="kt_accordion_3">
                        <!--begin::Item-->
                        <div class="mb-5">
                           <!--begin::Header-->
                           <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse" data-bs-target="#kt_accordion_3_item_1">
                              <div class="d-flex justify-content-between align-items-center w-100">
                                 <div class="d-flex w-75">
                                    <span class="accordion-icon">
                                    <i class="ki-duotone ki-plus-square fs-3 accordion-icon-off"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                    <i class="ki-duotone ki-minus-square fs-3 accordion-icon-on"><span class="path1"></span><span class="path2"></span></i>
                                    </span>
                                    <h3 class="fs-4 fw-semibold mb-0 ms-4"><a href="#">#23498</a> Feedback and Review received from customer</h3>
                                 </div>
                                 <div class="d-flex gap-2">
                                    <span class="text-gray-600 fs-6">11:57 AM</span>
                                    <span class="text-gray-600 fs-6">8 Aug 2023</span>
                                 </div>
                              </div>
                           </div>
                           <!--end::Header-->
                           <!--begin::Body-->
                           <div id="kt_accordion_3_item_1" class="collapse show ps-10" data-bs-parent="#kt_accordion_3">
                              <div class="d-flex flex-column gap-2">
                                 <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex w-75">
                                       <span class="fs-6 text-gray-600">appointment status changed to completed from started</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                       <span class="text-gray-600 fs-6">10:31 AM</span>
                                       <span class="text-gray-600 fs-6">8 Aug 2023</span>
                                    </div>
                                 </div>
                                 <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex w-75">
                                       <span class="fs-6 text-gray-600">status changed to started</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                       <span class="text-gray-600 fs-6">10:31 AM</span>
                                       <span class="text-gray-600 fs-6">8 Aug 2023</span>
                                    </div>
                                 </div>
                                 <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex w-75">
                                       <span class="fs-6 text-gray-600">Staff Ravi assigned to Service</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                       <span class="text-gray-600 fs-6">10:31 AM</span>
                                       <span class="text-gray-600 fs-6">8 Aug 2023</span>
                                    </div>
                                 </div>
                                 <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex w-75">
                                       <span class="fs-6 text-gray-600">status changed to confirm</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                       <span class="text-gray-600 fs-6">10:31 AM</span>
                                       <span class="text-gray-600 fs-6">8 Aug 2023</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--end::Body-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="mb-5">
                           <!--begin::Header-->
                           <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_3_item_2">
                              <div class="d-flex justify-content-between align-items-center w-100">
                                 <div class="d-flex w-75">
                                    <span class="accordion-icon">
                                    <i class="ki-duotone ki-plus-square fs-3 accordion-icon-off"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                    <i class="ki-duotone ki-minus-square fs-3 accordion-icon-on"><span class="path1"></span><span class="path2"></span></i>
                                    </span>
                                    <h3 class="fs-4 fw-semibold mb-0 ms-4"><a href="#">#23498</a> Feedback and Review received from customer</h3>
                                 </div>
                                 <div class="d-flex gap-2">
                                    <span class="text-gray-600 fs-6">11:57 AM</span>
                                    <span class="text-gray-600 fs-6">8 Aug 2023</span>
                                 </div>
                              </div>
                           </div>
                           <!--end::Header-->
                           <!--begin::Body-->
                           <div id="kt_accordion_3_item_2" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_3">
                              <div class="d-flex flex-column gap-2">
                                 <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex w-75">
                                       <span class="fs-6 text-gray-600">appointment status changed to completed from started</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                       <span class="text-gray-600 fs-6">10:31 AM</span>
                                       <span class="text-gray-600 fs-6">8 Aug 2023</span>
                                    </div>
                                 </div>
                                 <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex w-75">
                                       <span class="fs-6 text-gray-600">status changed to started</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                       <span class="text-gray-600 fs-6">10:31 AM</span>
                                       <span class="text-gray-600 fs-6">8 Aug 2023</span>
                                    </div>
                                 </div>
                                 <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex w-75">
                                       <span class="fs-6 text-gray-600">Staff Ravi assigned to Service</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                       <span class="text-gray-600 fs-6">10:31 AM</span>
                                       <span class="text-gray-600 fs-6">8 Aug 2023</span>
                                    </div>
                                 </div>
                                 <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex w-75">
                                       <span class="fs-6 text-gray-600">status changed to confirm</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                       <span class="text-gray-600 fs-6">10:31 AM</span>
                                       <span class="text-gray-600 fs-6">8 Aug 2023</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--end::Body-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="mb-5">
                           <!--begin::Header-->
                           <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_3_item_3">
                              <div class="d-flex justify-content-between align-items-center w-100">
                                 <div class="d-flex w-75">
                                    <span class="accordion-icon">
                                    <i class="ki-duotone ki-plus-square fs-3 accordion-icon-off"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                    <i class="ki-duotone ki-minus-square fs-3 accordion-icon-on"><span class="path1"></span><span class="path2"></span></i>
                                    </span>
                                    <h3 class="fs-4 fw-semibold mb-0 ms-4"><a href="#">#23498</a> Feedback and Review received from customer</h3>
                                 </div>
                                 <div class="d-flex gap-2">
                                    <span class="text-gray-600 fs-6">11:57 AM</span>
                                    <span class="text-gray-600 fs-6">8 Aug 2023</span>
                                 </div>
                              </div>
                           </div>
                           <!--end::Header-->
                           <!--begin::Body-->
                           <div id="kt_accordion_3_item_3" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_3">
                              <div class="d-flex flex-column gap-2">
                                 <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex w-75">
                                       <span class="fs-6 text-gray-600">appointment status changed to completed from started</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                       <span class="text-gray-600 fs-6">10:31 AM</span>
                                       <span class="text-gray-600 fs-6">8 Aug 2023</span>
                                    </div>
                                 </div>
                                 <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex w-75">
                                       <span class="fs-6 text-gray-600">status changed to started</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                       <span class="text-gray-600 fs-6">10:31 AM</span>
                                       <span class="text-gray-600 fs-6">8 Aug 2023</span>
                                    </div>
                                 </div>
                                 <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex w-75">
                                       <span class="fs-6 text-gray-600">Staff Ravi assigned to Service</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                       <span class="text-gray-600 fs-6">10:31 AM</span>
                                       <span class="text-gray-600 fs-6">8 Aug 2023</span>
                                    </div>
                                 </div>
                                 <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex w-75">
                                       <span class="fs-6 text-gray-600">status changed to confirm</span>
                                    </div>
                                    <div class="d-flex gap-2">
                                       <span class="text-gray-600 fs-6">10:31 AM</span>
                                       <span class="text-gray-600 fs-6">8 Aug 2023</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--end::Body-->
                        </div>
                        <!--end::Item-->
                     </div>
                     <!--end::Accordion-->
                  </div>
                  <!--end::Card body-->
               </div>
            </div>
            <!--end:::Tab pane-->
         </div>
      </div>
      <!--end::Card body-->
   </div>
   <!--end::Card-->
</div>
<!--end::Drawer-->
<!--begin::Drawer-->
@include('partner.staff.modal.view')
<!--end::Drawer-->
<!--end::Modals-->

@endsection

@push('scripts')
<script type="text/javascript">

   // CUSTOM JS
   function showStaffDataN(e) {

      let checkBoxInput = document.querySelector('.staffworkingdays').children;
      let advancesettingdiv = document.querySelectorAll('.advancesettingdiv');
      let staffInd = document.querySelectorAll('.staff-ind-shift');

      for(let i=0; i<checkBoxInput.length; i++) {
         if(e.checked && checkBoxInput[i].querySelector('input') == e) {
            for(let j=0; j<advancesettingdiv.length; j++) {
               let staffInd = advancesettingdiv[j].querySelectorAll('.staff-ind-shift');
               staffInd[i].classList.remove('d-none');
            }
         }
         else if(!e.checked && checkBoxInput[i].querySelector('input') == e) {
            for(let j=0; j<advancesettingdiv.length; j++) {
               let staffInd = advancesettingdiv[j].querySelectorAll('.staff-ind-shift');
               staffInd[i].classList.add('d-none')	
            }			    
         }
      }

   }

   function delStaffTime(e) {
      e.parentElement.remove();
   }

   function showStaffSettingDiv(e) {
      let staffDiv = document.querySelector('.staff-add-setting-div');
      if(e.checked && staffDiv.classList.contains('d-none')) {
         staffDiv.classList.remove('d-none');
      }
      else {
         staffDiv.classList.add('d-none')
      }
   }

   let cloneDiv = document.querySelector('.single-add-shift-div').cloneNode(true);
   function duplicateStaffTime(e) {
      let dupCloneDiv = cloneDiv.cloneNode(true);		
      let timep = dupCloneDiv.querySelectorAll('.kt_td_picker_time_only');
      for(let i=0; i<timep.length; i++) {
         timePick(timep[i]);
      }
      let appBef = e.parentElement;
      appBef.parentNode.insertBefore(dupCloneDiv, e.parentElement);
   }

   function timePick(elem) {
      new tempusDominus.TempusDominus(elem, {
         display: {
            viewMode: "clock",
            components: {
               decades: false,
               year: false,
               month: false,
               date: false,
               hours: true,
               minutes: true,
               seconds: false
            }
         }
      });
   }

   let advancesettingdivpar = document.querySelector('.advancesettingdiv').parentElement;

   function weekSelect(e) {
      let advancesettingdiv = document.querySelector('.advancesettingdiv').cloneNode(true);
      advancesettingdivpar.replaceChildren();
      for(let i=0; i<Number(e.value); i++) {
         let advancesettingdivCln = advancesettingdiv.cloneNode(true);
         let timep = advancesettingdivCln.querySelectorAll('.kt_td_picker_time_only');
         for(let i=0; i<timep.length; i++) {
            timep[i].querySelector('input').value='';
            timePick(timep[i]);
         }
         advancesettingdivpar.append(advancesettingdivCln);
         if(Number(e.value) === 5) {
            break;
         }
      }
   }

   let event_plcHolder;
   setTimeout(function() {
      event_plcHolder = document.querySelector('select.end-date').nextElementSibling.querySelector('.select2-selection__placeholder');
   }, 1000);

   function workinghrend(e) {
      if(Number(e.value) === 2) {
         e.parentElement.previousElementSibling.classList.remove('d-none');
         e.parentElement.previousElementSibling.querySelector('.kt_datepicker').value='';
         e.options[e.selectedIndex].text = '';
         e.value = '';
         e.parentElement.classList.add('d-none');

         let event_nextsib = e.nextElementSibling.querySelector('.select2-selection__rendered');
         event_nextsib.textContent='';
         event_nextsib.removeAttribute("title");
         event_nextsib.append(event_plcHolder);
      }
   }

   function delworkinghrend(e) {
      e.parentElement.classList.add('d-none');
      e.parentElement.nextElementSibling.classList.remove('d-none');
   }

</script>

<script type="text/javascript">
	$("#kt_daterangepicker_1").daterangepicker();
</script>
<script src="{{asset('/public/assets/js/partner/staff.js')}}" type="text/javascript"></script>
@endpush()