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
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Settings</h1>
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
                  <li class="breadcrumb-item text-muted">Services</li>
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
            <div class="card mb-5 mb-xxl-8">
               <div class="card-body pt-9 pb-0">
                  <!--begin::Details-->
                  <div class="d-flex flex-wrap flex-sm-nowrap">
                     <!--begin::Info-->
                     <div class="flex-grow-1">
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
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                           <!--begin::User-->
                           <div class="d-flex flex-column">
                              <!--begin::Name-->
                              <div class="d-flex align-items-center mb-2">
                                 <a href="services.html" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Services</a>
                                 <a href="#"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>
                              </div>
                              <!--end::Name-->
                           </div>
                           <!--end::User-->
                        </div>
                        <!--end::Title-->
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap flex-stack">
                           <!--begin::Wrapper-->
                           <div class="d-flex flex-column flex-grow-1 pe-8">
                              <!--begin::Stats-->
                              <div class="d-flex flex-wrap">
                                 <!--begin::Stat-->
                                 <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                       <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    
                                       <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$" data-kt-initialized="1">$4,500</div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-400">Earnings</div>
                                    <!--end::Label-->
                                 </div>
                                 <!--end::Stat-->
                                 <!--begin::Stat-->
                                 <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                       <i class="ki-outline ki-arrow-down fs-3 text-danger me-2"></i>                                    
                                       <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="80" data-kt-initialized="1">80</div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-400">Projects</div>
                                    <!--end::Label-->
                                 </div>
                                 <!--end::Stat-->
                                 <!--begin::Stat-->
                                 <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                       <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    
                                       <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">%60</div>
                                    </div>
                                    <!--end::Number-->                                
                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-400">Success Rate</div>
                                    <!--end::Label-->
                                 </div>
                                 <!--end::Stat-->
                              </div>
                              <!--end::Stats-->
                           </div>
                           <!--end::Wrapper-->
                        </div>
                        <!--end::Stats-->
                     </div>
                     <!--end::Info-->
                  </div>
                  <!--end::Details-->
                  <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                     <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="services.html">
                        Services                    
                        </a>
                     </li>
                     <!--end::Nav item-->
                     <!--begin::Nav item-->
                     <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="add-book-a-look-service.html">
                        Book a look                    
                        </a>
                     </li>
                     <!--end::Nav item-->
                     <!--begin::Nav item-->
                     <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="packages.html">
                        Packages             
                        </a>
                     </li>
                     <!--end::Nav item-->
                     <!--begin::Nav item-->
                     <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="vouchers.html">
                        Vouchers                  
                        </a>
                     </li>
                     <!--end::Nav item-->
                     <!--begin::Nav item-->
                     <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="memberships.html">
                        Memberships                    
                        </a>
                     </li>
                     <!--end::Nav item-->
                     <!--begin::Nav item-->
                     <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="products.html">
                        Products                    
                        </a>
                     </li>
                     <!--end::Nav item-->
                  </ul>
               </div>
            </div>
            <!--end::Navbar-->
            <div class="d-flex flex-column flex-row-fluid gap-7">
               <div class="card card-flush">
                  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                     <!--begin:::Tabs-->
                     <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#servicevenue">At Venue</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#servicehome">At home</a>
                        </li>
                        <!--end:::Tab item-->
                     </ul>
                     <!--end:::Tabs-->
                  </div>
               </div>
               <div class="tab-content">
                  <div class="tab-pane fade active show" id="servicevenue" role="tab-panel">
                     <div class="card card-flush">
                        <div class="card-body pb-0">
                           <!--begin::Wrapper-->
                           <div class="d-flex flex-column px-9">
                              <!--begin::Section-->
                              <div class="pt-10 pb-0">
                                 <!--begin::Title-->
                                 <h3 class="text-dark text-center fw-bold">No service added</h3>
                                 <!--end::Title-->
                                 <!--begin::Text-->
                                 <div class="text-center text-gray-600 fw-semibold pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                 </div>
                                 <!--end::Text-->
                                 <!--begin::Action-->
                                 <div class="text-center mt-5 mb-9">
                                    <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable22">Add Service</a>
                                 </div>
                                 <!--end::Action-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Illustration-->
                              <div class="text-center px-4">
                                 <img class="mw-100 mh-200px" alt="image" src="{{ asset('/public/partner/assets/media/illustrations/sketchy-1/1.png') }}" />
                              </div>
                              <!--end::Illustration-->
                           </div>
                           <!--end::Wrapper-->
                        </div>
                     </div>
                     <div class="card card-flush mt-8">
                        <!--begin::Card header-->
                        <div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-0">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <h2>Manage Service</h2>
                           </div>
                           <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card header-->
                        <div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-0">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <!--begin::Search-->
                              <div class="d-flex align-items-center position-relative my-1">
                                 <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                 <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search" />
                              </div>
                              <!--end::Search-->
                           </div>
                           <!--end::Card title-->
                           <!--begin::Card toolbar-->
                           <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                              <!--begin::Filter-->
                              <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="tooltip" title="Coming Soon">
                              <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i>
                              Filter
                              </button>
                              <!--end::Filter-->
                              <!--begin::Card toolbar-->
                              <div class="card-toolbar">
                                 <!--begin::Toolbar-->
                                 <div class="d-flex justify-content-end flex-column" data-kt-user-table-toolbar="base">
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable22">Add Service</a>
                                 </div>
                                 <!--end::Toolbar-->
                              </div>
                              <!--end::Card toolbar-->
                           </div>
                           <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <!--begin::Nav-->
                           <ul class="nav nav-pills nav-pills-custom mb-3" id="category">
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active show_hide_venue_services" data-bs-toggle="pill" href="javascript:void(0)" venue-service-id="all">
                                    <!--begin::Title-->
                                    <i class="ki-outline ki-questionnaire-tablet fs-1"></i>
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">All</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                 </a>
                                 <!--end::Link-->
                              </li>
                              <!--end::Item-->

                              @if(!empty($partnerVenueServicesLists))
                              @foreach($partnerVenueServicesLists->unique() as $catvKey => $venuecategory)
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 show_hide_venue_services" data-bs-toggle="pill" href="javascript:void(0)" venue-service-id="{{ $venuecategory->ps_id }}">
                                    <!--begin::Title-->
                                    <i class="ki-outline ki-questionnaire-tablet fs-1"></i>
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">{{ $venuecategory->category }}</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                 </a>
                                 <!--end::Link-->
                              </li>
                              <!--end::Item-->
                              @endforeach
                              @endif

                              
                           </ul>
                           <!--end::Nav-->
                           <div class="tab-content">
                              <div class="tab-pane fade active show" id="manageservicecatall">
                                 <table class="table align-middle table-hover gs-4 gy-4 tdmid" id="kt_datatable_example1">
                                    <!--begin::Table head-->
                                    <thead>
                                       <tr class="fw-bold text-muted bg-light">
                                          <th class="ps-4 rounded-start min-w-150px">Service Name</th>
                                          <th class="min-w-100px">Sub Category</th>
                                          <th class="min-w-70px">Gender</th>
                                          <th class="min-w-100px">Walk-in</th>
                                          <th class="min-w-100px">Online</th>
                                          <th class="min-w-100px">Off Peak</th>
                                          <th>Status</th>
                                          <th class="text-end">Action</th>
                                       </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="venue-service-lists">
                                       @if(!empty($partnerVenueServicesLists))
                                       @foreach($partnerVenueServicesLists as $venueKey => $venue_service)
                                       @php 
                                          $status = $venue_service['status']; 
                                          if($status){
                                             $text = "Enabled";
                                             $class = "success";
                                          }else{
                                             $text = "Disabled";
                                             $class = "danger";
                                          }
                                       @endphp
                                       <tr class="partner_venue_service_{{ $venue_service['ps_id'] }}">
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle22">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $venue_service['servicename'] }}</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $venue_service['duration'] }}<br>
                                                   {{ $venue_service['description'] }}
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>{{ $venue_service['servicesubcategory'] }}</td>
                                          <td>{{ $venue_service['gender'] }}</td>
                                          <td>
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $venue_service['walk_in_price'] }}</span>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable4">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 mt-5">{{ $venue_service['online_price'] }}</span>
                                             <span class="text-muted fw-semibold text-muted d-block fs-7">Contain Staff Pricing</span>
                                             </a>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable5">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 mt-5">{{ $venue_service['off_peak_price'] }}</span>
                                             <span class="text-muted fw-semibold text-muted d-block fs-7">Contain Staff Pricing</span>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="badge badge-light-{{$class}}">{{ $text }}</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                             <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                             <!--begin::Menu-->
                                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle22" class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Enable</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Disable</a>
                                                </div>
                                             </div>
                                             <!--end::Menu-->
                                          </td>
                                       </tr>
                                       @endforeach
                                       @endif
                                    </tbody>
                                    <!--end::Table body-->
                                 </table>
                              </div>
                              <div class="tab-pane fade" id="manageservicecat1">
                                 <table class="table align-middle table-hover gs-4 gy-4 tdmid" id="kt_datatable_example1">
                                    <!--begin::Table head-->
                                    <thead>
                                       <tr class="fw-bold text-muted bg-light">
                                          <th class="ps-4 rounded-start min-w-150px">Service Name</th>
                                          <th class="min-w-100px">Sub Category</th>
                                          <th class="min-w-70px">Gender</th>
                                          <th class="min-w-100px">Walk-in</th>
                                          <th class="min-w-100px">Online</th>
                                          <th class="min-w-100px">Off Peak</th>
                                          <th>Status</th>
                                          <th class="text-end">Action</th>
                                       </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category2</td>
                                          <td>Male</td>
                                          <td>
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$8,000,000</span>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable4">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 mt-5">$5,400</span>
                                             <span class="text-muted fw-semibold text-muted d-block fs-7">Contain Staff Pricing</span>
                                             </a>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable5">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 mt-5">$5,400</span>
                                             <span class="text-muted fw-semibold text-muted d-block fs-7">Contain Staff Pricing</span>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="badge badge-light-success">Enabled</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                             <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                             <!--begin::Menu-->
                                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Enable</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Disable</a>
                                                </div>
                                             </div>
                                             <!--end::Menu-->
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category2</td>
                                          <td>Unisex</td>
                                          <td>
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$8,000,000</span>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable4">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable5">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="badge badge-light-success">Enabled</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                             <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                             <!--begin::Menu-->
                                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Enable</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Disable</a>
                                                </div>
                                             </div>
                                             <!--end::Menu-->
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category2</td>
                                          <td>Female</td>
                                          <td>
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$8,000,000</span>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable4">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable5">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="badge badge-light-success">Enabled</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                             <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                             <!--begin::Menu-->
                                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Enable</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Disable</a>
                                                </div>
                                             </div>
                                             <!--end::Menu-->
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category2</td>
                                          <td>Male</td>
                                          <td>
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$8,000,000</span>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable4">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable5">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="badge badge-light-danger">Disabled</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                             <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                             <!--begin::Menu-->
                                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Enable</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Disable</a>
                                                </div>
                                             </div>
                                             <!--end::Menu-->
                                          </td>
                                       </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                 </table>
                              </div>
                              <div class="tab-pane fade" id="manageservicecat2">
                                 <table class="table align-middle table-hover gs-4 gy-4 tdmid" id="kt_datatable_example1">
                                    <!--begin::Table head-->
                                    <thead>
                                       <tr class="fw-bold text-muted bg-light">
                                          <th class="ps-4 rounded-start min-w-150px">Service Name</th>
                                          <th class="min-w-100px">Sub Category</th>
                                          <th class="min-w-70px">Gender</th>
                                          <th class="min-w-100px">Walk-in</th>
                                          <th class="min-w-100px">Online</th>
                                          <th class="min-w-100px">Off Peak</th>
                                          <th>Status</th>
                                          <th class="text-end">Action</th>
                                       </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category3</td>
                                          <td>Male</td>
                                          <td>
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$8,000,000</span>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable4">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 mt-5">$5,400</span>
                                             <span class="text-muted fw-semibold text-muted d-block fs-7">Contain Staff Pricing</span>
                                             </a>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable5">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 mt-5">$5,400</span>
                                             <span class="text-muted fw-semibold text-muted d-block fs-7">Contain Staff Pricing</span>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="badge badge-light-success">Enabled</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                             <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                             <!--begin::Menu-->
                                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Enable</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Disable</a>
                                                </div>
                                             </div>
                                             <!--end::Menu-->
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category3</td>
                                          <td>Unisex</td>
                                          <td>
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$8,000,000</span>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable4">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable5">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="badge badge-light-success">Enabled</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                             <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                             <!--begin::Menu-->
                                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Enable</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Disable</a>
                                                </div>
                                             </div>
                                             <!--end::Menu-->
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category3</td>
                                          <td>Female</td>
                                          <td>
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$8,000,000</span>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable4">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable5">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="badge badge-light-success">Enabled</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                             <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                             <!--begin::Menu-->
                                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Enable</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Disable</a>
                                                </div>
                                             </div>
                                             <!--end::Menu-->
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category3</td>
                                          <td>Male</td>
                                          <td>
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$8,000,000</span>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable4">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable5">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="badge badge-light-danger">Disabled</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                             <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                             <!--begin::Menu-->
                                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Enable</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Disable</a>
                                                </div>
                                             </div>
                                             <!--end::Menu-->
                                          </td>
                                       </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                 </table>
                              </div>
                              <div class="tab-pane fade" id="manageservicecat3">
                                 <table class="table align-middle table-hover gs-4 gy-4 tdmid" id="kt_datatable_example1">
                                    <!--begin::Table head-->
                                    <thead>
                                       <tr class="fw-bold text-muted bg-light">
                                          <th class="ps-4 rounded-start min-w-150px">Service Name</th>
                                          <th class="min-w-100px">Sub Category</th>
                                          <th class="min-w-70px">Gender</th>
                                          <th class="min-w-100px">Walk-in</th>
                                          <th class="min-w-100px">Online</th>
                                          <th class="min-w-100px">Off Peak</th>
                                          <th>Status</th>
                                          <th class="text-end">Action</th>
                                       </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category3</td>
                                          <td>Male</td>
                                          <td>
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$8,000,000</span>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable4">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 mt-5">$5,400</span>
                                             <span class="text-muted fw-semibold text-muted d-block fs-7">Contain Staff Pricing</span>
                                             </a>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable5">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 mt-5">$5,400</span>
                                             <span class="text-muted fw-semibold text-muted d-block fs-7">Contain Staff Pricing</span>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="badge badge-light-success">Enabled</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                             <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                             <!--begin::Menu-->
                                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Enable</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Disable</a>
                                                </div>
                                             </div>
                                             <!--end::Menu-->
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category3</td>
                                          <td>Unisex</td>
                                          <td>
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$8,000,000</span>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable4">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable5">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="badge badge-light-success">Enabled</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                             <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                             <!--begin::Menu-->
                                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Enable</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Disable</a>
                                                </div>
                                             </div>
                                             <!--end::Menu-->
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category3</td>
                                          <td>Female</td>
                                          <td>
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$8,000,000</span>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable4">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable5">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="badge badge-light-success">Enabled</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                             <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                             <!--begin::Menu-->
                                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Enable</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Disable</a>
                                                </div>
                                             </div>
                                             <!--end::Menu-->
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category3</td>
                                          <td>Male</td>
                                          <td>
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$8,000,000</span>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable4">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable5">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</span>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="badge badge-light-danger">Disabled</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                             <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                             <!--begin::Menu-->
                                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Enable</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Disable</a>
                                                </div>
                                             </div>
                                             <!--end::Menu-->
                                          </td>
                                       </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                 </table>
                              </div>
                           </div>
                        </div>
                        <!--end::Card body-->
                     </div>
                  </div>
                  <div class="tab-pane fade" id="servicehome" role="tab-panel">
                     <div class="card card-flush">
                        <div class="card-body pb-0">
                           <!--begin::Wrapper-->
                           <div class="d-flex flex-column px-9">
                              <!--begin::Section-->
                              <div class="pt-10 pb-0">
                                 <!--begin::Title-->
                                 <h3 class="text-dark text-center fw-bold">No service added</h3>
                                 <!--end::Title-->
                                 <!--begin::Text-->
                                 <div class="text-center text-gray-600 fw-semibold pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                 </div>
                                 <!--end::Text-->
                                 <!--begin::Action-->
                                 <div class="text-center mt-5 mb-9">
                                    <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable33">Add Service</a>
                                 </div>
                                 <!--end::Action-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Illustration-->
                              <div class="text-center px-4">
                                 <img class="mw-100 mh-200px" alt="image" src="{{ asset('/public/partner/assets/media/illustrations/sketchy-1/1.png') }}" />
                              </div>
                              <!--end::Illustration-->
                           </div>
                           <!--end::Wrapper-->
                        </div>
                     </div>
                     <div class="card card-flush mt-8">
                        <!--begin::Card header-->
                        <div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-0">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <h2>Manage Service</h2>
                           </div>
                           <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card header-->
                        <div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-0">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <!--begin::Search-->
                              <div class="d-flex align-items-center position-relative my-1">
                                 <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                 <input type="text" data-kt-filter2="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search" />
                              </div>
                              <!--end::Search-->
                           </div>
                           <!--end::Card title-->
                           <!--begin::Card toolbar-->
                           <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                              <!--begin::Card toolbar-->
                              <div class="card-toolbar">
                                 <!--begin::Filter-->
                                 <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="tooltip" title="Coming Soon">
                                 <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i>
                                 Filter
                                 </button>
                                 <!--end::Filter-->
                                 <!--begin::Toolbar-->
                                 <div class="d-flex justify-content-end flex-column" data-kt-user-table-toolbar="base">
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable33">Add Service</a>
                                 </div>
                                 <!--end::Toolbar-->
                              </div>
                              <!--end::Card toolbar-->
                           </div>
                           <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <!--begin::Nav-->
                           <ul class="nav nav-pills nav-pills-custom mb-3" id="category">
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active show_hide_home_services" data-bs-toggle="pill" href="javascript:void(0)" home-service-id="all">
                                    <!--begin::Title-->
                                    <i class="ki-outline ki-questionnaire-tablet fs-1"></i>
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">All</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                 </a>
                                 <!--end::Link-->
                              </li>
                              <!--end::Item-->
                              @if(!empty($partnerHomeServicesLists))
                              @foreach($partnerHomeServicesLists->unique() as $catKey => $category)
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 show_hide_home_services" data-bs-toggle="pill" href="javascript:void(0)" home-service-id="{{ $category->ps_id }}">
                                    <!--begin::Title-->
                                    <i class="ki-outline ki-questionnaire-tablet fs-1"></i>
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">{{ $category->category }}</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                 </a>
                                 <!--end::Link-->
                              </li>
                              <!--end::Item-->
                              @endforeach
                              @endif
                           </ul>
                           <!--end::Nav-->
                           <div class="tab-content">
                              <div class="tab-pane fade active show">
                                 <table class="table align-middle table-hover gs-4 gy-4 tdmid" id="kt_datatable_example2">
                                    <!--begin::Table head-->
                                    <thead>
                                       <tr class="fw-bold text-muted bg-light">
                                          <th class="ps-4 rounded-start min-w-150px">Service Name</th>
                                          <th class="min-w-100px">Sub Category</th>
                                          <th class="min-w-70px">Gender</th>
                                          <th class="min-w-70px">Distance</th>
                                          <th class="min-w-100px">Walk-in</th>
                                          <th class="min-w-100px">Online</th>
                                          <th class="min-w-100px">Off Peak</th>
                                          <th>Status</th>
                                          <th class="text-end">Action</th>
                                       </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="home-service-lists">

                                       @if(!empty($partnerHomeServicesLists))
                                       @foreach($partnerHomeServicesLists as $venueKey => $home_service)
                                       @php 
                                          $status = $home_service['status']; 
                                          if($status){
                                             $text = "Enabled";
                                             $class = "success";
                                          }else{
                                             $text = "Disabled";
                                             $class = "danger";
                                          }
                                       @endphp
                                       <tr class="partner_home_service_{{ $home_service['ps_id'] }}">
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle22">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $home_service['servicename'] }}</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $home_service['duration'] }}<br>
                                                   {{ $home_service['description'] }}
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>{{ $home_service['servicesubcategory'] }}</td>
                                          <td>{{ $home_service['gender'] }}</td>
                                          <td>
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $home_service['walk_in_price'] }}</span>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable4">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 mt-5">{{ $home_service['online_price'] }}</span>
                                             <span class="text-muted fw-semibold text-muted d-block fs-7">Contain Staff Pricing</span>
                                             </a>
                                          </td>
                                          <td>
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable5">
                                             <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 mt-5">{{ $home_service['off_peak_price'] }}</span>
                                             <span class="text-muted fw-semibold text-muted d-block fs-7">Contain Staff Pricing</span>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="badge badge-light-{{$class}}">{{ $text }}</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                             <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                             <!--begin::Menu-->
                                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle22" class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Enable</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Disable</a>
                                                </div>
                                             </div>
                                             <!--end::Menu-->
                                          </td>
                                       </tr>
                                       @endforeach
                                       @endif

                                    </tbody>
                                    <!--end::Table body-->
                                 </table>
                              </div>
                           </div>
                        </div>
                        <!--end::Card body-->
                     </div>
                  </div>
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

<!--begin::Modals-->

@include('partner.services.modal.online-staff-pricing')
@include('partner.services.modal.off-peak-staff-pricing')
@include('partner.services.modal.add-service')
@include('partner.services.modal.home-add-service')
@include('partner.services.modal.update-service')
@include('partner.services.modal.update-home-service')
<!--end::Modals-->

@endsection
@push('scripts')
<script type="text/javascript">
   var input_add_service = document.querySelector("#kt_tagify_service");
   var input_add_home_service = document.querySelector("#kt_tagify_home_service");
   var service_list = "@php echo implode(',', getServices()); @endphp";
   service_list = service_list.split(",");
   

   function productDrp(input, list) {
      new Tagify(input, {
          whitelist: list,
          maxTags: 1,
          dropdown: {
              maxItems: 40,           // <- mixumum allowed rendered suggestions
              classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
              enabled: 0,             // <- show suggestions on focus
              closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
          }
      });
   }

   productDrp(input_add_service, service_list);
   productDrp(input_add_home_service, service_list);
</script>

<script src="{{asset('/public/assets/js/partner/services.js')}}" type="text/javascript"></script>
@endpush