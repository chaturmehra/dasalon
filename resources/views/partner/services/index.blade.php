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
                     <a href="/dasalon/partners/home.html" class="text-muted text-hover-primary">Home</a>
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
                                 <img class="mw-100 mh-200px" alt="image" src="/dasalon/partners/assets/media/illustrations/sketchy-1/1.png" />
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
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" href="#manageservicecatall">
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
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#manageservicecat1">
                                    <!--begin::Title-->
                                    <i class="ki-outline ki-questionnaire-tablet fs-1"></i>
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Hair</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                 </a>
                                 <!--end::Link-->
                              </li>
                              <!--end::Item-->
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#manageservicecat2">
                                    <i class="ki-outline ki-message-notif fs-1"></i>
                                    <!--begin::Title-->
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Face Care</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                 </a>
                                 <!--end::Link-->
                              </li>
                              <!--end::Item-->
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#manageservicecat3">
                                    <i class="ki-outline ki-abstract-26 fs-1"></i>
                                    <!--begin::Title-->
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Nail</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                 </a>
                                 <!--end::Link-->
                              </li>
                              <!--end::Item-->
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
                                    <tbody>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category1</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category1</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category1</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category1</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category4</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category4</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category4</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category4</td>
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
                                    <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable3">Add Service</a>
                                 </div>
                                 <!--end::Action-->
                              </div>
                              <!--end::Section-->
                              <!--begin::Illustration-->
                              <div class="text-center px-4">
                                 <img class="mw-100 mh-200px" alt="image" src="/dasalon/partners/assets/media/illustrations/sketchy-1/1.png" />
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
                                    <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable3">Add Service</a>
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
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" href="#manageservicecathomeall">
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
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#manageservicecathome1">
                                    <!--begin::Title-->
                                    <i class="ki-outline ki-questionnaire-tablet fs-1"></i>
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Hair</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                 </a>
                                 <!--end::Link-->
                              </li>
                              <!--end::Item-->
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#manageservicecathome2">
                                    <i class="ki-outline ki-message-notif fs-1"></i>
                                    <!--begin::Title-->
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Face Care</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                 </a>
                                 <!--end::Link-->
                              </li>
                              <!--end::Item-->
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#manageservicecathome3">
                                    <i class="ki-outline ki-abstract-26 fs-1"></i>
                                    <!--begin::Title-->
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Nail</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                 </a>
                                 <!--end::Link-->
                              </li>
                              <!--end::Item-->
                           </ul>
                           <!--end::Nav-->
                           <div class="tab-content">
                              <div class="tab-pane fade active show" id="manageservicecathomeall">
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
                                    <tbody>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category1</td>
                                          <td>Male</td>
                                          <td>30 min</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category1</td>
                                          <td>Unisex</td>
                                          <td>30 min</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category1</td>
                                          <td>Female</td>
                                          <td>30 min</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category1</td>
                                          <td>Male</td>
                                          <td>30 min</td>
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
                              <div class="tab-pane fade" id="manageservicecathome1">
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
                                    <tbody>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
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
                                          <td>45 min</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
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
                                          <td>45 min</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
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
                                          <td>45 min</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
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
                                          <td>45 min</td>
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
                              <div class="tab-pane fade" id="manageservicecathome2">
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
                                    <tbody>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
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
                                          <td>50 min</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
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
                                          <td>50 min</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
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
                                          <td>50 min</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
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
                                          <td>50 min</td>
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
                              <div class="tab-pane fade" id="manageservicecathome3">
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
                                    <tbody>
                                       <tr>
                                          <td>
                                             <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category4</td>
                                          <td>Male</td>
                                          <td>35 min</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category4</td>
                                          <td>Unisex</td>
                                          <td>35 min</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category4</td>
                                          <td>Female</td>
                                          <td>35 min</td>
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
                                                   <a href="#" id="kt_drawer_example_permanent_toggle">
                                                   <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Hair cut</span>
                                                   <span class="text-muted fw-semibold text-muted d-block fs-7">2hr 30min <br>
                                                   lorem ipsum dolar sit amet
                                                   </span>
                                                   </a>
                                                </div>
                                             </div>
                                          </td>
                                          <td>Sub Category4</td>
                                          <td>Male</td>
                                          <td>35 min</td>
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

<!--begin::Modal - Add task-->
<div class="modal fade multistepform_venue" id="kt_modal_scrollable2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-xl">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="fw-bold text-dark">Add Service</h1>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body py-0">
            <!--begin::Scroll-->
            <div class="d-flex flex-column scroll-y me-n7 pe-7">
               <form class="form mx-auto" novalidate="novalidate">
                  <div class="card-body align-items-center py-10">
                     <div class="row align-items-end">
                        <div class="col-12 fv-row mb-7">
                           <div class="row">
                              <div class="col-md-3 fv-row mb-7">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800 mb-4">Select venue</span>
                                 </h3>
                              </div>
                              <div class="col-md-9 mb-7">
                                 <label class="fw-semibold fs-6 mb-2">Visible to owner</label>
                                 <!--begin::Input-->
                                 <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select venue" multiple>
                                    <option></option>
                                    <option value="1">Venue1</option>
                                    <option value="2">Venue2</option>
                                    <option value="2">Venue3</option>
                                    <option value="2">Venue4</option>
                                    <option value="2">Venue5</option>
                                    <option value="2">Venue6</option>
                                 </select>
                                 <!--end::Input-->
                              </div>
                              <div class="col-md-3 fv-row mb-7">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800 mb-4">Category</span>
                                 </h3>
                              </div>
                              <div class="col-md-9">
                                 <!--begin::Body-->
                                 <div class="card-body d-flex flex-column justify-content-between pb-5 px-0 pt-0">
                                    <!--begin::Nav-->
                                    <ul class="nav nav-pills nav-pills-custom mb-3 mx-9" id="category">
                                       <!--begin::Item-->
                                       <li class="nav-item mb-3 me-3 me-lg-6">
                                          <!--begin::Link-->
                                          <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" href="#package_cat1">
                                             <!--begin::Title-->
                                             <i class="ki-outline ki-questionnaire-tablet fs-1"></i>
                                             <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Hair</span>
                                             <!--end::Title-->
                                             <!--begin::Bullet-->
                                             <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                             <!--end::Bullet-->
                                          </a>
                                          <!--end::Link-->
                                       </li>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <li class="nav-item mb-3 me-3 me-lg-6">
                                          <!--begin::Link-->
                                          <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#package_cat2">
                                             <i class="ki-outline ki-message-notif fs-1"></i>
                                             <!--begin::Title-->
                                             <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Face Care</span>
                                             <!--end::Title-->
                                             <!--begin::Bullet-->
                                             <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                             <!--end::Bullet-->
                                          </a>
                                          <!--end::Link-->
                                       </li>
                                       <!--end::Item-->
                                       <!--begin::Item-->
                                       <li class="nav-item mb-3 me-3 me-lg-6">
                                          <!--begin::Link-->
                                          <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#package_cat3">
                                             <i class="ki-outline ki-abstract-26 fs-1"></i>
                                             <!--begin::Title-->
                                             <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Nail</span>
                                             <!--end::Title-->
                                             <!--begin::Bullet-->
                                             <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                             <!--end::Bullet-->
                                          </a>
                                          <!--end::Link-->
                                       </li>
                                       <!--end::Item-->
                                    </ul>
                                    <!--end::Nav-->
                                 </div>
                                 <!--end: Card Body-->
                              </div>
                              <div class="col-12">
                                 <!--begin::Tab Content-->
                                 <div class="tab-content">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade active show" id="package_cat1">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <h3 class="card-title align-items-start flex-column mb-10">
                                                <span class="card-label fw-bold text-gray-800 mb-4">Sub Category</span>
                                             </h3>
                                             <!--begin::Nav-->
                                             <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2 d-flex flex-column gap-5 mx-5 subcatcol">
                                                <!--begin::Item-->
                                                <li class="nav-item">
                                                   <!--begin::Link-->
                                                   <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#package_subcat1_1" aria-selected="true" role="tab">
                                                   <span class="subcategory">Subcat1_1</span> <span>(4)</span>
                                                   </a>
                                                   <!--end::Link-->
                                                </li>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <li class="nav-item">
                                                   <!--begin::Link-->
                                                   <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#package_subcat1_2" aria-selected="false" role="tab">
                                                   <span class="subcategory">Subcat1_2</span> <span>(2)</span>
                                                   </a>
                                                   <!--end::Link-->
                                                </li>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <li class="nav-item">
                                                   <!--begin::Link-->
                                                   <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#package_subcat1_3" aria-selected="false" role="tab">
                                                   <span class="subcategory">Subcat1_3</span> <span>(3)</span>
                                                   </a>
                                                   <!--end::Link-->
                                                </li>
                                                <!--end::Item-->
                                             </ul>
                                             <!--end::Nav-->
                                          </div>
                                          <div class="col-md-9">
                                             <!--begin::Tab Content-->
                                             <div class="tab-content">
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade active show" id="package_subcat1_1">
                                                   <div class="searchboxdiv">
                                                      <div class="searchbox">
                                                         <i class="fas fa-search"></i>
                                                         <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                      </div>
                                                   </div>
                                                   <div class="select_service">
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_1_1</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_1_2</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_1_3</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade" id="package_subcat1_2">
                                                   <div class="searchboxdiv">
                                                      <div class="searchbox">
                                                         <i class="fas fa-search"></i>
                                                         <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                      </div>
                                                   </div>
                                                   <div class="select_service">
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_2_1</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_2_2</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_2_3</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade" id="package_subcat1_3">
                                                   <div class="searchboxdiv">
                                                      <div class="searchbox">
                                                         <i class="fas fa-search"></i>
                                                         <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                      </div>
                                                   </div>
                                                   <div class="select_service">
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_3_1</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_3_2</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_3_3</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!--end::Tap pane-->
                                             </div>
                                             <!--end::Tab Content-->
                                          </div>
                                       </div>
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="package_cat2">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <h3 class="card-title align-items-start flex-column mb-10">
                                                <span class="card-label fw-bold text-gray-800 mb-4">Sub Category</span>
                                             </h3>
                                             <!--begin::Nav-->
                                             <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2 d-flex flex-column gap-5 mx-5 subcatcol">
                                                <!--begin::Item-->
                                                <li class="nav-item">
                                                   <!--begin::Link-->
                                                   <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#package_subcat2_1" aria-selected="true" role="tab">
                                                   <span class="subcategory">Subcat2_1</span> <span>(4)</span>
                                                   </a>
                                                   <!--end::Link-->
                                                </li>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <li class="nav-item">
                                                   <!--begin::Link-->
                                                   <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#package_subcat2_2" aria-selected="false" role="tab">
                                                   <span class="subcategory">Subcat2_2</span> <span>(2)</span>
                                                   </a>
                                                   <!--end::Link-->
                                                </li>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <li class="nav-item">
                                                   <!--begin::Link-->
                                                   <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#package_subcat2_3" aria-selected="false" role="tab">
                                                   <span class="subcategory">Subcat2_3</span> <span>(3)</span>
                                                   </a>
                                                   <!--end::Link-->
                                                </li>
                                                <!--end::Item-->
                                             </ul>
                                             <!--end::Nav-->
                                          </div>
                                          <div class="col-md-9">
                                             <!--begin::Tab Content-->
                                             <div class="tab-content">
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade active show" id="package_subcat2_1">
                                                   <div class="searchboxdiv">
                                                      <div class="searchbox">
                                                         <i class="fas fa-search"></i>
                                                         <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                      </div>
                                                   </div>
                                                   <div class="select_service">
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_1_1</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_1_2</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_1_3</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade" id="package_subcat2_2">
                                                   <div class="searchboxdiv">
                                                      <div class="searchbox">
                                                         <i class="fas fa-search"></i>
                                                         <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                      </div>
                                                   </div>
                                                   <div class="select_service">
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_2_1</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_2_2</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_2_3</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade" id="package_subcat2_3">
                                                   <div class="searchboxdiv">
                                                      <div class="searchbox">
                                                         <i class="fas fa-search"></i>
                                                         <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                      </div>
                                                   </div>
                                                   <div class="select_service">
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_3_1</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_3_2</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_3_3</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!--end::Tap pane-->
                                             </div>
                                             <!--end::Tab Content-->
                                          </div>
                                       </div>
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="package_cat3">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <h3 class="card-title align-items-start flex-column mb-10">
                                                <span class="card-label fw-bold text-gray-800 mb-4">Sub Category</span>
                                             </h3>
                                             <!--begin::Nav-->
                                             <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2 d-flex flex-column gap-5 mx-5 subcatcol">
                                                <!--begin::Item-->
                                                <li class="nav-item">
                                                   <!--begin::Link-->
                                                   <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#package_subcat3_1" aria-selected="true" role="tab">
                                                   <span class="subcategory">Subcat3_1</span> <span>(4)</span>
                                                   </a>
                                                   <!--end::Link-->
                                                </li>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <li class="nav-item">
                                                   <!--begin::Link-->
                                                   <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#package_subcat3_2" aria-selected="false" role="tab">
                                                   <span class="subcategory">Subcat3_2</span> <span>(2)</span>
                                                   </a>
                                                   <!--end::Link-->
                                                </li>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <li class="nav-item">
                                                   <!--begin::Link-->
                                                   <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#package_subcat3_3" aria-selected="false" role="tab">
                                                   <span class="subcategory">Subcat3_3</span> <span>(3)</span>
                                                   </a>
                                                   <!--end::Link-->
                                                </li>
                                                <!--end::Item-->
                                             </ul>
                                             <!--end::Nav-->
                                          </div>
                                          <div class="col-md-9">
                                             <!--begin::Tab Content-->
                                             <div class="tab-content">
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade active show" id="package_subcat3_1">
                                                   <div class="searchboxdiv">
                                                      <div class="searchbox">
                                                         <i class="fas fa-search"></i>
                                                         <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                      </div>
                                                   </div>
                                                   <div class="select_service">
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_1_1</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_1_2</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_1_3</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade" id="package_subcat3_2">
                                                   <div class="searchboxdiv">
                                                      <div class="searchbox">
                                                         <i class="fas fa-search"></i>
                                                         <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                      </div>
                                                   </div>
                                                   <div class="select_service">
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_2_1</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_2_2</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_2_3</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade" id="package_subcat3_3">
                                                   <div class="searchboxdiv">
                                                      <div class="searchbox">
                                                         <i class="fas fa-search"></i>
                                                         <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                      </div>
                                                   </div>
                                                   <div class="select_service">
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_3_1</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_3_2</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div>
                                                         <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_3_3</span>
                                                            <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                            <span class="me-4">2hr 30min</span> 
                                                            <span>lorem ipsum dolar sit amet</span>
                                                            </span>
                                                         </h3>
                                                         <label class="form-check">
                                                            <div class="form-check form-check-custom form-check-solid">
                                                               <input class="form-check-input" type="radio" name="service_radio"/>
                                                               <div class="form-check-label">
                                                                  Select
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!--end::Tap pane-->
                                             </div>
                                             <!--end::Tab Content-->
                                          </div>
                                       </div>
                                    </div>
                                    <!--end::Tap pane-->
                                 </div>
                                 <!--end::Tab Content-->
                              </div>
                           </div>
                        </div>
                        <!--begin::Label-->
                        <label class="required fw-semibold fs-6 mb-2">Staff</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                           <option></option>
                           <option value="1">John</option>
                           <option value="2">Robbin</option>
                           <option value="3">Stella</option>
                        </select>
                        <!--end::Input-->
                        <div class="col-12 card">
                           <div class="card-body brdr variationDiv d-none mt-5">
                              <div class="row mt-5">
                                 <div class="col-sm-6 mb-6">
                                    <!--begin::Label-->
                                    <label class="required fw-semibold fs-6 mb-2">Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="service_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Service name" value="" />
                                    <!--end::Input-->
                                 </div>
                                 <div class="col-sm-6 mb-6">
                                    <!--begin::Label-->
                                    <label class="required fw-semibold fs-6 mb-2">Gender</label>
                                    <!--end::Label-->
                                    <div class="d-flex flex-wrap gap-5">
                                       <div class="form-check form-check-custom form-check-solid">
                                          <input class="form-check-input me-2" type="radio" id="unisex" value="Unisex" name="gender"/>
                                          <label class="fw-semibold fs-6" for="unisex">Unisex</label>
                                       </div>
                                       <div class="form-check form-check-custom form-check-solid">
                                          <input class="form-check-input me-2" type="radio" id="male" value="Male" name="gender"/>
                                          <label class="fw-semibold fs-6" for="male">Male only</label>
                                       </div>
                                       <div class="form-check form-check-custom form-check-solid">
                                          <input class="form-check-input me-2" type="radio" id="female" value="Female" name="gender"/>
                                          <label class="fw-semibold fs-6" for="female">Female only</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-12 mb-6">
                                    <div class="d-flex flex-column">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Description</label>
                                       <!--end::Label-->
                                       <textarea class="form-control" name="service_placeholder" data-kt-autosize="true" placeholder="Description"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-sm-3">
                                    <div class="d-flex flex-column gap-2">
                                       <label class="fw-semibold fs-6 mb-2">Duration</label>
                                       <!--begin::Input-->
                                       <input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Duration" value="" />
                                       <!--end::Input-->
                                    </div>
                                 </div>
                                 <div class="col-sm-3">
                                    <div class="d-flex flex-column gap-1">
                                       <label class="fw-semibold fs-6 mb-2">Walkin Price</label>
                                       <div class="input-group mb-5">
                                          <span class="input-group-text">$</span>
                                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                                          <span class="input-group-text">.00</span>
                                       </div>
                                       <!--end::Input group-->
                                    </div>
                                 </div>
                                 <div class="col-sm-3">
                                    <div class="d-flex flex-column gap-1">
                                       <label class="fw-semibold fs-6 mb-2">Online Price</label>
                                       <div class="input-group mb-5">
                                          <span class="input-group-text">$</span>
                                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                                          <span class="input-group-text">.00</span>
                                       </div>
                                       <!--end::Input group-->
                                    </div>
                                 </div>
                                 <div class="col-sm-3">
                                    <div class="d-flex flex-column gap-1">
                                       <label class="fw-semibold fs-6 mb-2">Off Peak Price</label>
                                       <div class="input-group mb-5">
                                          <span class="input-group-text">$</span>
                                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                                          <span class="input-group-text">.00</span>
                                       </div>
                                       <!--end::Input group-->
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="row align-items-end">
                                       <div class="col-md-8 fv-row mb-7">
                                          <!--begin::Label-->
                                          <label class="required fw-semibold fs-6 mb-2">Staff</label>
                                          <!--end::Label-->
                                          <!--begin::Input-->
                                          <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                                             <option></option>
                                             <option value="1">John</option>
                                             <option value="2">Robbin</option>
                                             <option value="3">Stella</option>
                                          </select>
                                          <!--end::Input-->
                                       </div>
                                       <div class="col-md-4 fv-row mb-7">
                                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricing1" data-bs-dismiss="modal">
                                          Pricing
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="btn btn-icon btn-sm btn-active-light-primary closebtnabs" onclick="remVariationDiv(this)">
                                 <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                           <button type="button" class="btn btn-primary my-5 me-4 d-none addVar" onclick="showSerPrDur()">
                           Add variation
                           </button>
                           <!--end::Input group-->
                           <button type="button" class="btn btn-primary my-5">
                           Save
                           </button>
                           <!--end::Input group-->
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <!--end::Scroll-->
         </div>
      </div>
   </div>
</div>
<!--end::Modal - Add task-->
<!--begin::Modal - Add task-->
<div class="modal fade multistepform_venue" id="kt_modal_scrollable3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-xl">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Add Service</h5>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <!--begin::Scroll-->
            <div class="d-flex flex-column scroll-y me-n7 pe-7">
               <form class="form mx-auto" novalidate="novalidate">
                  <div class="row align-items-end">
                     <div class="col-12 fv-row mb-7">
                        <div class="row">
                           <div class="col-md-3 fv-row mb-7">
                              <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 mb-4">Select venue</span>
                              </h3>
                           </div>
                           <div class="col-md-9 mb-7">
                              <label class="fw-semibold fs-6 mb-2">Visible to owner</label>
                              <!--begin::Input-->
                              <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select venue" multiple>
                                 <option></option>
                                 <option value="1">Venue1</option>
                                 <option value="2">Venue2</option>
                                 <option value="2">Venue3</option>
                                 <option value="2">Venue4</option>
                                 <option value="2">Venue5</option>
                                 <option value="2">Venue6</option>
                              </select>
                              <!--end::Input-->
                           </div>
                           <div class="col-md-3 fv-row mb-7">
                              <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 mb-4">Category</span>
                              </h3>
                           </div>
                           <div class="col-md-9">
                              <!--begin::Body-->
                              <div class="card-body d-flex flex-column justify-content-between pb-5 px-0 pt-0">
                                 <!--begin::Nav-->
                                 <ul class="nav nav-pills nav-pills-custom mb-3 mx-9" id="category">
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                       <!--begin::Link-->
                                       <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" href="#home_package_cat1">
                                          <!--begin::Title-->
                                          <i class="ki-outline ki-questionnaire-tablet fs-1"></i>
                                          <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Hair</span>
                                          <!--end::Title-->
                                          <!--begin::Bullet-->
                                          <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                          <!--end::Bullet-->
                                       </a>
                                       <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                       <!--begin::Link-->
                                       <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#home_package_cat2">
                                          <i class="ki-outline ki-message-notif fs-1"></i>
                                          <!--begin::Title-->
                                          <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Face Care</span>
                                          <!--end::Title-->
                                          <!--begin::Bullet-->
                                          <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                          <!--end::Bullet-->
                                       </a>
                                       <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                       <!--begin::Link-->
                                       <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#home_package_cat3">
                                          <i class="ki-outline ki-abstract-26 fs-1"></i>
                                          <!--begin::Title-->
                                          <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Nail</span>
                                          <!--end::Title-->
                                          <!--begin::Bullet-->
                                          <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                          <!--end::Bullet-->
                                       </a>
                                       <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                 </ul>
                                 <!--end::Nav-->
                              </div>
                              <!--end: Card Body-->
                           </div>
                           <div class="col-12">
                              <!--begin::Tab Content-->
                              <div class="tab-content">
                                 <!--begin::Tap pane-->
                                 <div class="tab-pane fade active show" id="home_package_cat1">
                                    <div class="row">
                                       <div class="col-md-3">
                                          <h3 class="card-title align-items-start flex-column mb-10">
                                             <span class="card-label fw-bold text-gray-800 mb-4">Sub Category</span>
                                          </h3>
                                          <!--begin::Nav-->
                                          <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2 d-flex flex-column gap-5 mx-5 subcatcol">
                                             <!--begin::Item-->
                                             <li class="nav-item">
                                                <!--begin::Link-->
                                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#home_package_subcat1_1" aria-selected="true" role="tab">
                                                <span class="subcategory">Subcat1_1</span> <span>(4)</span>
                                                </a>
                                                <!--end::Link-->
                                             </li>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <li class="nav-item">
                                                <!--begin::Link-->
                                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#home_package_subcat1_2" aria-selected="false" role="tab">
                                                <span class="subcategory">Subcat1_2</span> <span>(2)</span>
                                                </a>
                                                <!--end::Link-->
                                             </li>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <li class="nav-item">
                                                <!--begin::Link-->
                                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#home_package_subcat1_3" aria-selected="false" role="tab">
                                                <span class="subcategory">Subcat1_3</span> <span>(3)</span>
                                                </a>
                                                <!--end::Link-->
                                             </li>
                                             <!--end::Item-->
                                          </ul>
                                          <!--end::Nav-->
                                       </div>
                                       <div class="col-md-9">
                                          <!--begin::Tab Content-->
                                          <div class="tab-content">
                                             <!--begin::Tap pane-->
                                             <div class="tab-pane fade active show" id="home_package_subcat1_1">
                                                <div class="searchboxdiv">
                                                   <div class="searchbox">
                                                      <i class="fas fa-search"></i>
                                                      <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                   </div>
                                                   <div>
                                                      <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                   </div>
                                                </div>
                                                <div class="select_service">
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_1_1</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_1_2</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_1_3</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                </div>
                                             </div>
                                             <!--end::Tap pane-->
                                             <!--begin::Tap pane-->
                                             <div class="tab-pane fade" id="home_package_subcat1_2">
                                                <div class="searchboxdiv">
                                                   <div class="searchbox">
                                                      <i class="fas fa-search"></i>
                                                      <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                   </div>
                                                   <div>
                                                      <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                   </div>
                                                </div>
                                                <div class="select_service">
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_2_1</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_2_2</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_2_3</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                </div>
                                             </div>
                                             <!--end::Tap pane-->
                                             <!--begin::Tap pane-->
                                             <div class="tab-pane fade" id="home_package_subcat1_3">
                                                <div class="searchboxdiv">
                                                   <div class="searchbox">
                                                      <i class="fas fa-search"></i>
                                                      <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                   </div>
                                                   <div>
                                                      <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                   </div>
                                                </div>
                                                <div class="select_service">
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_3_1</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_3_2</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_3_3</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                </div>
                                             </div>
                                             <!--end::Tap pane-->
                                          </div>
                                          <!--end::Tab Content-->
                                       </div>
                                    </div>
                                 </div>
                                 <!--end::Tap pane-->
                                 <!--begin::Tap pane-->
                                 <div class="tab-pane fade" id="home_package_cat2">
                                    <div class="row">
                                       <div class="col-md-3">
                                          <h3 class="card-title align-items-start flex-column mb-10">
                                             <span class="card-label fw-bold text-gray-800 mb-4">Sub Category</span>
                                          </h3>
                                          <!--begin::Nav-->
                                          <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2 d-flex flex-column gap-5 mx-5 subcatcol">
                                             <!--begin::Item-->
                                             <li class="nav-item">
                                                <!--begin::Link-->
                                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#home_package_subcat2_1" aria-selected="true" role="tab">
                                                <span class="subcategory">Subcat2_1</span> <span>(4)</span>
                                                </a>
                                                <!--end::Link-->
                                             </li>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <li class="nav-item">
                                                <!--begin::Link-->
                                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#home_package_subcat2_2" aria-selected="false" role="tab">
                                                <span class="subcategory">Subcat2_2</span> <span>(2)</span>
                                                </a>
                                                <!--end::Link-->
                                             </li>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <li class="nav-item">
                                                <!--begin::Link-->
                                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#home_package_subcat2_3" aria-selected="false" role="tab">
                                                <span class="subcategory">Subcat2_3</span> <span>(3)</span>
                                                </a>
                                                <!--end::Link-->
                                             </li>
                                             <!--end::Item-->
                                          </ul>
                                          <!--end::Nav-->
                                       </div>
                                       <div class="col-md-9">
                                          <!--begin::Tab Content-->
                                          <div class="tab-content">
                                             <!--begin::Tap pane-->
                                             <div class="tab-pane fade active show" id="home_package_subcat2_1">
                                                <div class="searchboxdiv">
                                                   <div class="searchbox">
                                                      <i class="fas fa-search"></i>
                                                      <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                   </div>
                                                   <div>
                                                      <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                   </div>
                                                </div>
                                                <div class="select_service">
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_1_1</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_1_2</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_1_3</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                </div>
                                             </div>
                                             <!--end::Tap pane-->
                                             <!--begin::Tap pane-->
                                             <div class="tab-pane fade" id="home_package_subcat2_2">
                                                <div class="searchboxdiv">
                                                   <div class="searchbox">
                                                      <i class="fas fa-search"></i>
                                                      <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                   </div>
                                                   <div>
                                                      <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                   </div>
                                                </div>
                                                <div class="select_service">
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_2_1</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_2_2</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_2_3</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                </div>
                                             </div>
                                             <!--end::Tap pane-->
                                             <!--begin::Tap pane-->
                                             <div class="tab-pane fade" id="home_package_subcat2_3">
                                                <div class="searchboxdiv">
                                                   <div class="searchbox">
                                                      <i class="fas fa-search"></i>
                                                      <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                   </div>
                                                   <div>
                                                      <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                   </div>
                                                </div>
                                                <div class="select_service">
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_3_1</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_3_2</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_3_3</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                </div>
                                             </div>
                                             <!--end::Tap pane-->
                                          </div>
                                          <!--end::Tab Content-->
                                       </div>
                                    </div>
                                 </div>
                                 <!--end::Tap pane-->
                                 <!--begin::Tap pane-->
                                 <div class="tab-pane fade" id="home_package_cat3">
                                    <div class="row">
                                       <div class="col-md-3">
                                          <h3 class="card-title align-items-start flex-column mb-10">
                                             <span class="card-label fw-bold text-gray-800 mb-4">Sub Category</span>
                                          </h3>
                                          <!--begin::Nav-->
                                          <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2 d-flex flex-column gap-5 mx-5 subcatcol">
                                             <!--begin::Item-->
                                             <li class="nav-item">
                                                <!--begin::Link-->
                                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#home_package_subcat3_1" aria-selected="true" role="tab">
                                                <span class="subcategory">Subcat3_1</span> <span>(4)</span>
                                                </a>
                                                <!--end::Link-->
                                             </li>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <li class="nav-item">
                                                <!--begin::Link-->
                                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#home_package_subcat3_2" aria-selected="false" role="tab">
                                                <span class="subcategory">Subcat3_2</span> <span>(2)</span>
                                                </a>
                                                <!--end::Link-->
                                             </li>
                                             <!--end::Item-->
                                             <!--begin::Item-->
                                             <li class="nav-item">
                                                <!--begin::Link-->
                                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#home_package_subcat3_3" aria-selected="false" role="tab">
                                                <span class="subcategory">Subcat3_3</span> <span>(3)</span>
                                                </a>
                                                <!--end::Link-->
                                             </li>
                                             <!--end::Item-->
                                          </ul>
                                          <!--end::Nav-->
                                       </div>
                                       <div class="col-md-9">
                                          <!--begin::Tab Content-->
                                          <div class="tab-content">
                                             <!--begin::Tap pane-->
                                             <div class="tab-pane fade active show" id="home_package_subcat3_1">
                                                <div class="searchboxdiv">
                                                   <div class="searchbox">
                                                      <i class="fas fa-search"></i>
                                                      <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                   </div>
                                                   <div>
                                                      <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                   </div>
                                                </div>
                                                <div class="select_service">
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_1_1</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_1_2</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_1_3</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                </div>
                                             </div>
                                             <!--end::Tap pane-->
                                             <!--begin::Tap pane-->
                                             <div class="tab-pane fade" id="home_package_subcat3_2">
                                                <div class="searchboxdiv">
                                                   <div class="searchbox">
                                                      <i class="fas fa-search"></i>
                                                      <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                   </div>
                                                   <div>
                                                      <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                   </div>
                                                </div>
                                                <div class="select_service">
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_2_1</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_2_2</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_2_3</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                </div>
                                             </div>
                                             <!--end::Tap pane-->
                                             <!--begin::Tap pane-->
                                             <div class="tab-pane fade" id="home_package_subcat3_3">
                                                <div class="searchboxdiv">
                                                   <div class="searchbox">
                                                      <i class="fas fa-search"></i>
                                                      <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                   </div>
                                                   <div>
                                                      <a href="javascript:void(0)" class="btn btn-sm btn-primary px-6 d-none" onclick="addNewSer(this)">Add Service</a>
                                                   </div>
                                                </div>
                                                <div class="select_service">
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_3_1</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_3_2</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                   <div>
                                                      <h3 class="card-title align-items-start flex-column">
                                                         <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_3_3</span>
                                                         <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                         <span class="me-4">2hr 30min</span> 
                                                         <span>lorem ipsum dolar sit amet</span>
                                                         </span>
                                                      </h3>
                                                      <label class="form-check">
                                                         <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio" name="service_radio_home"/>
                                                            <div class="form-check-label">
                                                               Select
                                                            </div>
                                                         </div>
                                                      </label>
                                                   </div>
                                                </div>
                                             </div>
                                             <!--end::Tap pane-->
                                          </div>
                                          <!--end::Tab Content-->
                                       </div>
                                    </div>
                                 </div>
                                 <!--end::Tap pane-->
                              </div>
                              <!--end::Tab Content-->
                           </div>
                        </div>
                     </div>
                     <div class="col-12 card">
                        <div class="card-body brdr variationDiv d-none mt-5">
                           <div class="row mt-5">
                              <div class="col-sm-6 mb-6">
                                 <!--begin::Label-->
                                 <label class="required fw-semibold fs-6 mb-2">Name</label>
                                 <!--end::Label-->
                                 <!--begin::Input-->
                                 <input type="text" name="service_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Service name" value="" />
                                 <!--end::Input-->
                              </div>
                              <div class="col-sm-6 mb-6">
                                 <!--begin::Label-->
                                 <label class="required fw-semibold fs-6 mb-2">Gender</label>
                                 <!--end::Label-->
                                 <div class="d-flex flex-wrap gap-5">
                                    <div class="form-check form-check-custom form-check-solid">
                                       <input class="form-check-input me-2" type="radio" id="unisex" value="Unisex" name="gender"/>
                                       <label class="fw-semibold fs-6" for="unisex">Unisex</label>
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid">
                                       <input class="form-check-input me-2" type="radio" id="male" value="Male" name="gender"/>
                                       <label class="fw-semibold fs-6" for="male">Male</label>
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid">
                                       <input class="form-check-input me-2" type="radio" id="female" value="Female" name="gender"/>
                                       <label class="fw-semibold fs-6" for="female">Female</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12 mb-6">
                                 <div class="d-flex flex-column">
                                    <!--begin::Label-->
                                    <label class="required fw-semibold fs-6 mb-2">Description</label>
                                    <!--end::Label-->
                                    <textarea class="form-control" name="service_placeholder" data-kt-autosize="true" placeholder="Description"></textarea>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="d-flex flex-column gap-2">
                                    <label class="fw-semibold fs-6 mb-2">Duration</label>
                                    <!--begin::Input-->
                                    <input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Duration" value="" />
                                    <!--end::Input-->
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="d-flex flex-column gap-2">
                                    <label class="fw-semibold fs-6 mb-2">Distance</label>
                                    <!--begin::Input-->
                                    <input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Distance" value="" />
                                    <!--end::Input-->
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="d-flex flex-column gap-1">
                                    <label class="fw-semibold fs-6 mb-2">Price</label>
                                    <div class="input-group mb-5">
                                       <span class="input-group-text">$</span>
                                       <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                                       <span class="input-group-text">.00</span>
                                    </div>
                                    <!--end::Input group-->
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="row align-items-end">
                                    <div class="col-md-8 fv-row mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Staff</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                                          <option></option>
                                          <option value="1">John</option>
                                          <option value="2">Robbin</option>
                                          <option value="3">Stella</option>
                                       </select>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-4 fv-row mb-7">
                                       <!--begin::Add Country-->
                                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricing2" data-bs-dismiss="modal">
                                       Pricing
                                       </button>
                                       <!--end::Add Country-->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="btn btn-icon btn-sm btn-active-light-primary closebtnabs" onclick="remVariationDiv(this)">
                              <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary my-5 me-4 d-none addVar" onclick="showSerPrDur2()">
                        Add variation
                        </button>
                        <!--end::Input group-->
                        <button type="button" class="btn btn-primary my-5">
                        Save
                        </button>
                        <!--end::Input group-->
                     </div>
                  </div>
               </form>
            </div>
            <!--end::Scroll-->
         </div>
      </div>
   </div>
</div>
<!--end::Modal - Add task-->
<!--begin::Modal - Add task-->
<div class="modal fade pricingmodal" tabindex="-1" id="pricing1">
   <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Staff Pricing</h5>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable2" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <!--begin::Scroll-->
            <div class="d-flex flex-column scroll-y me-n7 pe-7">
               <table class="table align-middle table-row-dashed fs-6 gy-5">
                  <thead>
                     <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-125px">Staff</th>
                        <th class="min-w-125px">Online</th>
                        <th class="min-w-125px">Off Peak</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Normal</td>
                        <td>25</td>
                        <td>20</td>
                     </tr>
                     <tr>
                        <td>John</td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                     </tr>
                     <tr>
                        <td>Robbin</td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                     </tr>
                     <tr>
                        <td>Stella</td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <!--end::Scroll-->
         </div>
      </div>
   </div>
</div>
<!--end::Modal - Add task-->
<!--begin::Modal - Add task-->
<div class="modal fade pricingmodal" tabindex="-1" id="pricing2">
   <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Staff Pricing</h5>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable3" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <!--begin::Scroll-->
            <div class="d-flex flex-column scroll-y me-n7 pe-7">
               <table class="table align-middle table-row-dashed fs-6 gy-5">
                  <thead>
                     <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-125px">Staff</th>
                        <th class="min-w-125px">Online</th>
                        <th class="min-w-125px">Off Peak</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Normal</td>
                        <td>25</td>
                        <td>20</td>
                     </tr>
                     <tr>
                        <td>John</td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                     </tr>
                     <tr>
                        <td>Robbin</td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                     </tr>
                     <tr>
                        <td>Stella</td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <!--end::Scroll-->
         </div>
      </div>
   </div>
</div>
<!--end::Modal - Add task-->
<!--begin::Modal - Add task-->
<div class="modal fade pricingmodal" id="kt_modal_scrollable4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Staff Pricing</h5>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <!--begin::Scroll-->
            <div class="d-flex flex-column scroll-y me-n7 pe-7">
               <table class="table align-middle table-row-dashed fs-6 gy-5">
                  <thead>
                     <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-125px">Staff</th>
                        <th class="min-w-125px">Online</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Normal</td>
                        <td>25</td>
                     </tr>
                     <tr>
                        <td>John</td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="27" disabled />
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                     </tr>
                     <tr>
                        <td>Robbin</td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="29" disabled/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                     </tr>
                     <tr>
                        <td>Stella</td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="30" disabled/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <!--end::Scroll-->
         </div>
      </div>
   </div>
</div>
<!--end::Modal - Add task-->
<!--begin::Modal - Add task-->
<div class="modal fade pricingmodal" id="kt_modal_scrollable5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Staff Pricing</h5>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <!--begin::Scroll-->
            <div class="d-flex flex-column scroll-y me-n7 pe-7">
               <table class="table align-middle table-row-dashed fs-6 gy-5">
                  <thead>
                     <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-125px">Staff</th>
                        <th class="min-w-125px">Off Peak</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Normal</td>
                        <td>20</td>
                     </tr>
                     <tr>
                        <td>John</td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="23" disabled/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                     </tr>
                     <tr>
                        <td>Robbin</td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="25" disabled/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                     </tr>
                     <tr>
                        <td>Stella</td>
                        <td>
                           <!--begin::Input group-->
                           <div class="input-group mb-5">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="27" disabled/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <!--end::Input group-->
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <!--end::Scroll-->
         </div>
      </div>
   </div>
</div>
<!--end::Modal - Add task-->
<!--begin::Modal - Add task-->
<div class="modal fade" id="kt_modal_scrollable22" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-xl">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="fw-bold text-dark">Add Service</h1>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <!--begin::Scroll-->
            <div class="d-flex flex-column scroll-y me-n7 pe-7">
               <!--begin::Form-->
               <form class="form d-flex flex-column flex-lg-row">
                  <!--begin::Aside column-->
                  <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-400px mb-7 me-lg-10">
                     <!--begin::Status-->
                     <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <h2 class="required fs-3">Category</h2>
                           </div>
                           <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <!--begin::Select2-->
                           <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
                              <option></option>
                              <option value="published" selected="selected">Hair</option>
                              <option value="draft">Facial</option>
                              <option value="scheduled">Skin care</option>
                           </select>
                           <!--end::Select2-->
                           <!--begin::Description-->
                           <div class="text-muted fs-7">List of service category</div>
                           <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card header-->
                        <div class="card-header">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <h2 class="required fs-3">Sub category</h2>
                           </div>
                           <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <!--begin::Select2-->
                           <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
                              <option></option>
                              <option value="published" selected="selected">Hair cut</option>
                              <option value="draft">spa</option>
                              <option value="scheduled">Pedicure</option>
                              <option value="scheduled">Menicure</option>
                           </select>
                           <!--end::Select2-->
                           <!--begin::Description-->
                           <div class="text-muted fs-7">List of service category</div>
                           <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                     </div>
                     <!--end::Status-->
                     <!--begin::Status-->
                     <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <h2 class="required fs-3">Service Status</h2>
                           </div>
                           <!--end::Card title-->
                           <div class="card-toolbar">
                              <label class="form-check form-switch form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="" checked="checked" />
                              </label>
                           </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <!--begin::Description-->
                           <div class="text-muted fs-7">The service will not be available for online booking if disabled. Disabled services are available for walk-in or offline usage.</div>
                           <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                     </div>
                     <!--end::Status-->
                     <!--begin::Location-->
                     <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <div class="d-flex flex-column gap-1">
                                 <h2 class="required fs-3">Create Service - Locations</h2>
                                 <span class="text-gray-400 fs-7">Service will be created at all chosen locations</span>
                              </div>
                           </div>
                           <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <div class="row">
                              <!--begin::Col-->
                              <div class="col-md-12 mb-5">
                                 <!--begin::Option-->
                                 <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center flex-wrap">
                                    <!--begin::Radio-->
                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                    <input class="form-check-input" type="checkbox" value="" checked/>
                                    </span>
                                    <!--end::Radio-->
                                    <div class="quantity-icn ms-3">
                                       <img src="assets/media/svg/salon.svg">
                                    </div>
                                    <!--begin::Info-->
                                    <span class="mt-3 w-100">
                                       <h3 class="card-title align-items-start flex-column">
                                          <span class="card-label fw-bold text-gray-800 fs-4 mb-4">Alexandra road</span>
                                          <span class="text-muted d-block fw-light fs-7 mt-1">Alexandra Central Mall, 321 Alexandra Road, Singapore (Bukit Merah)
                                          </span>
                                       </h3>
                                    </span>
                                    <!--end::Info-->
                                 </label>
                                 <!--end::Option-->
                              </div>
                              <!--end::Col-->
                              <!--begin::Col-->
                              <div class="col-md-12">
                                 <!--begin::Option-->
                                 <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center flex-wrap">
                                    <!--begin::Radio-->
                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckVenue2" checked/>
                                    </span>
                                    <!--end::Radio-->
                                    <div class="quantity-icn ms-3">
                                       <img src="assets/media/svg/salon.svg">
                                    </div>
                                    <!--begin::Info-->
                                    <span class="mt-3 w-100">
                                       <h3 class="card-title align-items-start flex-column">
                                          <span class="card-label fw-bold text-gray-800 fs-4 mb-4">YJ Salons - Punggol</span>
                                          <span class="text-muted d-block fw-light fs-7 mt-1">Punggol Park, Hougang Avenue 10, Singapore (Hougang)
                                          </span>
                                       </h3>
                                    </span>
                                    <!--end::Info-->
                                 </label>
                                 <!--end::Option-->
                              </div>
                              <!--end::Col-->
                           </div>
                        </div>
                        <!--end::Card body-->
                     </div>
                     <!--end::Location-->
                  </div>
                  <!--end::Aside column-->
                  <!--begin::Main column-->
                  <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10 w-75">
                     <div class="d-flex flex-column gap-7 gap-lg-10">
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                           <!--begin::Card header-->
                           <div class="card-header">
                              <div class="card-title">
                                 <h2 class="required fs-3">Service name</h2>
                              </div>
                           </div>
                           <!--end::Card header-->
                           <!--begin::Card body-->
                           <div class="card-body pt-0">
                              <!--begin::Input group-->
                              <div class="fv-row">
                                 <!--begin::Input-->
                                 <input class="form-control d-flex align-items-center" value="" placeholder="Add service" id="kt_tagify_service" />
                                 <!--end::Input-->
                                 <!--begin::Description-->
                                 <div class="text-muted fs-7 mt-1">A service name is required and recommended to be unique</div>
                                 <!--end::Description-->
                              </div>
                              <!--end::Input group-->
                           </div>
                           <!--end::Card header-->
                           <!--begin::Card header-->
                           <div class="card-header">
                              <div class="card-title">
                                 <h2 class="required fs-3">Description</h2>
                              </div>
                           </div>
                           <!--end::Card header-->
                           <!--begin::Card body-->
                           <div class="card-body pt-0">
                              <!--begin::Input group-->
                              <div class="fv-row">
                                 <!--begin::Input-->
                                 <textarea class="form-control mb-2" data-kt-autosize="true" placeholder="Description"></textarea>
                                 <!--end::Input-->
                                 <!--begin::Description-->
                                 <div class="text-muted fs-7">Provide a description to the service for better understanding. This will be visible to online clients.</div>
                                 <!--end::Description-->
                              </div>
                              <!--end::Input group-->
                           </div>
                           <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                        <!--begin::Pricing-->
                        <div class="card card-flush py-4">
                           <!--begin::Card header-->
                           <div class="card-header">
                              <div class="card-title">
                                 <h2 class="required fs-3">Gender</h2>
                              </div>
                           </div>
                           <!--end::Card header-->
                           <!--begin::Card body-->
                           <div class="card-body pt-0">
                              <!--begin::Input group-->
                              <div class="fv-row mb-2">
                                 <!--begin::Row-->
                                 <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9">
                                    <!--begin::Col-->
                                    <div class="col">
                                       <!--begin::Option-->
                                       <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
                                          <!--begin::Radio-->
                                          <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                          <input class="form-check-input" type="radio" name="gender_option" value="1" checked="checked" />
                                          </span>
                                          <!--end::Radio-->
                                          <!--begin::Info-->
                                          <span class="badge badge-danger ms-4">
                                          <i class="bi bi-gender-female me-2 fs-3 clrwht"></i>
                                          Female
                                          </span>
                                          <!--end::Info-->
                                       </label>
                                       <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                       <!--begin::Option-->
                                       <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
                                          <!--begin::Radio-->
                                          <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                          <input class="form-check-input" type="radio" name="gender_option" value="2" />
                                          </span>
                                          <!--end::Radio-->
                                          <!--begin::Info-->
                                          <span class="badge badge-info ms-4">
                                          <i class="bi bi-gender-male me-2 fs-3 clrwht"></i>
                                          Male
                                          </span>
                                          <!--end::Info-->
                                       </label>
                                       <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                       <!--begin::Option-->
                                       <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
                                          <!--begin::Radio-->
                                          <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                          <input class="form-check-input" type="radio" name="gender_option" value="3" />
                                          </span>
                                          <!--end::Radio-->
                                          <!--begin::Info-->
                                          <span class="badge badge-warning ms-4">
                                          <i class="bi bi-gender-ambiguous me-2 fs-3 clrwht"></i>
                                          Unisex
                                          </span>
                                          <!--end::Info-->
                                       </label>
                                       <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                 </div>
                                 <!--end::Row-->
                              </div>
                              <!--end::Input group-->
                           </div>
                           <!--end::Card body-->
                           <!--begin::Card header-->
                           <div class="card-header">
                              <div class="card-title">
                                 <h2 class="required fs-3">Duration</h2>
                              </div>
                           </div>
                           <!--end::Card header-->
                           <!--begin::Card body-->
                           <div class="card-body pt-0">
                              <!--begin::Input group-->
                              <div class="fv-row">
                                 <!--begin::Tax-->
                                 <div class="d-flex flex-wrap gap-5">
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                       <!--begin::Input-->
                                       <input type="text" class="form-control mb-2" placeholder="Duration" value="" />
                                       <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                 </div>
                                 <!--end:Tax-->
                              </div>
                              <!--end::Input group-->
                           </div>
                           <!--end::Card body-->
                        </div>
                        <!--end::Pricing-->
                        <!--begin::Pricing-->
                        <div class="card card-flush py-4">
                           <!--begin::Card header-->
                           <div class="card-header">
                              <div class="card-title">
                                 <div class="d-flex flex-column gap-3 mb-4">
                                    <h2>Pricing</h2>
                                 </div>
                              </div>
                           </div>
                           <!--end::Card header-->
                           <!--begin::Card body-->
                           <div class="card-body pt-0">
                              <!--begin::Input group-->
                              <div class="fv-row">
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <div class="d-flex flex-column gap-1">
                                          <label class="required fw-semibold fs-6">Walk-in price</label>
                                          <div class="input-group mb-2">
                                             <span class="input-group-text">$</span>
                                             <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                                             <span class="input-group-text">.00</span>
                                          </div>
                                          <div class="text-muted fs-7">Price for anyone who walks into the salon without an appointment</div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="d-flex flex-column gap-1">
                                          <label class="required fw-semibold fs-6">Online Price</label>
                                          <div class="input-group mb-2">
                                             <span class="input-group-text">$</span>
                                             <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                                             <span class="input-group-text">.00</span>
                                          </div>
                                          <div class="text-muted fs-7">Price available to clients who book their services online in advance</div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="d-flex flex-column gap-1">
                                          <label class="required fw-semibold fs-6">Off Peak Price</label>
                                          <div class="input-group mb-2">
                                             <span class="input-group-text">$</span>
                                             <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                                             <span class="input-group-text">.00</span>
                                          </div>
                                          <div class="text-muted fs-7">A discounted price, available to people who walk-in during the salon's off peak hours.</div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!--end::Input group-->
                           </div>
                           <!--end::Card body-->
                        </div>
                        <div class="card card-flush py-4">
                           <!--begin::Card header-->
                           <div class="card-header">
                              <div class="card-title">
                                 <div class="d-flex flex-column gap-3">
                                    <h2>Staff pricing</h2>
                                    <span class="text-muted fs-7">Add staff to service, so that customer can book online appointment with their choice of staff</span>
                                    <span class="text-muted fs-7">A premium price for a service, available to clients who request a specific stylist who specializes in a particular service (optional)</span>
                                 </div>
                              </div>
                           </div>
                           <!--end::Card header-->
                           <!--begin::Card body-->
                           <div class="card-body pt-0">
                              <!--begin::Input group-->
                              <div class="fv-row">
                                 <!--begin::Input group-->
                                 <div  data-kt-ecommerce-catalog-add-category="auto-options">
                                    <!--begin::Repeater-->
                                    <div id="kt_ecommerce_add_category_conditions">
                                       <!--begin::Form group-->
                                       <div class="form-group">
                                          <div data-repeater-list="kt_ecommerce_add_category_conditions" class="d-flex flex-column gap-0">
                                             <div data-repeater-item="" class="form-group d-flex align-items-end gap-5">
                                                <div class="row mt-7">
                                                   <div class="col-sm-4">
                                                      <!--begin::Label-->
                                                      <label class="required fw-semibold fs-6 mb-2">Staff</label>
                                                      <!--end::Label-->
                                                      <select class="form-select" data-placeholder="Select an option" data-kt-ecommerce-catalog-add-category="condition_type">
                                                         <option></option>
                                                         <option value="1">John</option>
                                                         <option value="2">Robbin</option>
                                                         <option value="3">Stella</option>
                                                      </select>
                                                      <!--end::Input-->
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <div class="d-flex flex-column gap-1">
                                                         <label class="fw-semibold fs-6 mb-2">Online Price</label>
                                                         <div class="input-group mb-0">
                                                            <span class="input-group-text">$</span>
                                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                                                            <span class="input-group-text">.00</span>
                                                         </div>
                                                         <!--end::Input group-->
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <div class="d-flex flex-column gap-1">
                                                         <label class="fw-semibold fs-6 mb-2">Off Peak Price</label>
                                                         <div class="input-group mb-0">
                                                            <span class="input-group-text">$</span>
                                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                                                            <span class="input-group-text">.00</span>
                                                         </div>
                                                         <!--end::Input group-->
                                                      </div>
                                                   </div>
                                                </div>
                                                <!--begin::Button-->
                                                <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                                                <i class="ki-duotone ki-cross fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </button>
                                                <!--end::Button-->
                                             </div>
                                          </div>
                                       </div>
                                       <!--end::Form group-->
                                       <!--begin::Form group-->
                                       <div class="form-group mt-5">
                                          <!--begin::Button-->
                                          <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                                          <i class="ki-duotone ki-plus fs-2"></i>Add another condition</button>
                                          <!--end::Button-->
                                       </div>
                                       <!--end::Form group-->
                                    </div>
                                    <!--end::Repeater-->
                                 </div>
                                 <!--end::Input group-->
                              </div>
                              <!--end::Input group-->
                           </div>
                           <!--end::Card body-->
                        </div>
                        <!--end::Pricing-->
                     </div>
                     <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="#" class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                        <span class="indicator-label">Save Changes</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                     </div>
                  </div>
                  <!--end::Main column-->
               </form>
               <!--end::Form-->
            </div>
            <!--end::Scroll-->
         </div>
      </div>
   </div>
</div>
<!--end::Modal - Add task-->
<!--begin::Drawer-->
<div
   id="kt_drawer_example_permanent"
   class="bg-white"
   data-kt-drawer="true"
   data-kt-drawer-activate="true"
   data-kt-drawer-toggle="#kt_drawer_example_permanent_toggle"
   data-kt-drawer-close="#kt_drawer_example_permanent_close"
   data-kt-drawer-overlay="true"
   data-kt-drawer-permanent="true"
   data-kt-drawer-width="{default:'300px', 'md': '500px'}"
   >
   <!--begin::Card-->
   <div class="card rounded-0 w-100">
      <!--begin::Card header-->
      <div class="card-header pe-5">
         <!--begin::Title-->
         <div class="card-title">
            Service Details
         </div>
         <!--end::Title-->
         <!--begin::Card toolbar-->
         <div class="card-toolbar">
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="kt_drawer_example_permanent_close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <!--end::Card toolbar-->
      </div>
      <!--end::Card header-->
      <!--begin::Card body-->
      <div class="card-body hover-scroll-overlay-y pt-3">
         <!--begin::Body-->
         <div class="pt-5">
            <!--begin::Items-->
            <div class="">
               <!--begin::Item-->
               <div class="d-flex flex-stack ctmwd">
                  <!--begin::Section-->
                  <div class="d-flex align-items-center me-5">
                     <!--begin::Content-->
                     <div class="me-5">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Duration</a>
                        <!--end::Title-->
                     </div>
                     <!--end::Content-->
                  </div>
                  <!--end::Section-->
                  <!--begin::Wrapper-->
                  <div class="d-flex align-items-center">
                     <!--begin::Number-->
                     <span class="text-gray-800 fw-bold fs-4 me-3 text-end">2 hours</span>
                     <!--end::Number-->
                  </div>
                  <!--end::Wrapper-->
               </div>
               <!--end::Item-->
               <!--begin::Separator-->
               <div class="separator separator-dashed my-3"></div>
               <!--end::Separator-->
               <!--begin::Item-->
               <div class="d-flex flex-stack ctmwd">
                  <!--begin::Section-->
                  <div class="d-flex align-items-center me-5">
                     <!--begin::Content-->
                     <div class="me-5">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Walkin Price</a>
                        <!--end::Title-->
                     </div>
                     <!--end::Content-->
                  </div>
                  <!--end::Section-->
                  <!--begin::Wrapper-->
                  <div class="d-flex align-items-center">
                     <!--begin::Number-->
                     <span class="text-gray-800 fw-bold fs-4 me-3 text-end">$50</span>
                     <!--end::Number-->
                  </div>
                  <!--end::Wrapper-->
               </div>
               <!--end::Item-->
               <!--begin::Separator-->
               <div class="separator separator-dashed my-3"></div>
               <!--end::Separator-->
               <!--begin::Item-->
               <div class="d-flex flex-stack ctmwd">
                  <!--begin::Section-->
                  <div class="d-flex align-items-center me-5">
                     <!--begin::Content-->
                     <div class="me-5">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Online Price</a>
                        <!--end::Title-->
                     </div>
                     <!--end::Content-->
                  </div>
                  <!--end::Section-->
                  <!--begin::Wrapper-->
                  <div class="d-flex align-items-center">
                     <!--begin::Number-->
                     <span class="text-gray-800 fw-bold fs-4 me-3 text-end">$55</span>
                     <!--end::Number-->
                  </div>
                  <!--end::Wrapper-->
               </div>
               <!--end::Item-->
               <!--begin::Separator-->
               <div class="separator separator-dashed my-3"></div>
               <!--end::Separator-->
               <!--begin::Item-->
               <div class="d-flex flex-stack ctmwd">
                  <!--begin::Section-->
                  <div class="d-flex align-items-center me-5">
                     <!--begin::Content-->
                     <div class="me-5">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Off Peak Price</a>
                        <!--end::Title-->
                     </div>
                     <!--end::Content-->
                  </div>
                  <!--end::Section-->
                  <!--begin::Wrapper-->
                  <div class="d-flex align-items-center">
                     <!--begin::Number-->
                     <span class="text-gray-800 fw-bold fs-4 me-3 text-end">-$55</span>
                     <!--end::Number-->
                  </div>
                  <!--end::Wrapper-->
               </div>
               <!--end::Item-->
               <!--begin::Separator-->
               <div class="separator separator-dashed my-3"></div>
               <!--end::Separator-->
               <!--begin::Item-->
               <div class="d-flex flex-stack ctmwd">
                  <!--begin::Section-->
                  <div class="d-flex align-items-center me-5">
                     <!--begin::Content-->
                     <div class="me-5">
                        <!--begin::Title-->
                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Staff</a>
                        <!--end::Title-->
                     </div>
                     <!--end::Content-->
                  </div>
                  <!--end::Section-->
                  <!--begin::Wrapper-->
                  <div class="d-flex align-items-center">
                     <!--begin::Number-->
                     <span class="text-gray-800 fw-bold fs-4 me-3 text-end">Stella</span>
                     <!--end::Number-->
                  </div>
                  <!--end::Wrapper-->
               </div>
               <!--end::Item-->
               <!--begin::Separator-->
               <div class="separator separator-dashed my-3"></div>
               <!--end::Separator-->
               <div class="d-flex flex-stack ctmwd justify-content-end">
                  <a href="#" class="btn btn-sm btn-primary px-6">Edit</a>
               </div>
            </div>
            <!--end::Items-->
         </div>
         <!--end: Card Body-->
      </div>
      <!--end::Card body-->
   </div>
   <!--end::Card-->
</div>
<!--end::Drawer-->
<!--begin::Drawer-->
<div
   id="kt_drawer_example_permanent2"
   class="bg-white"
   data-kt-drawer="true"
   data-kt-drawer-activate="true"
   data-kt-drawer-toggle="#kt_drawer_example_permanent_toggle2"
   data-kt-drawer-close="#kt_drawer_example_permanent_close2"
   data-kt-drawer-overlay="true"
   data-kt-drawer-permanent="true"
   data-kt-drawer-width="{default:'300px', 'md': '700px', 'xl': '950px'}"
   >
   <!--begin::Card-->
   <div class="card rounded-0 w-100">
      <!--begin::Card header-->
      <div class="card-header pe-5">
         <!--begin::Title-->
         <div class="card-title">
            <div class="d-flex flex-column gap-3 mb-4">
               <h2>Full face threading</h2>
               <span class="text-gray-400 fs-6">This involves removing unwanted hair from the entire face, including the forehead, cheeks, chin and neck</span>
            </div>
         </div>
         <!--end::Title-->
         <!--begin::Card toolbar-->
         <div class="card-toolbar">
            <div class="d-flex gap-3 me-3">
               <span class="text-gray-800 fs-6">Status:</span>
               <span class="text-gray-400 fs-6">Active</span>
            </div>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="kt_drawer_example_permanent_close2">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <!--end::Card toolbar-->
      </div>
      <!--end::Card header-->
      <!--begin::Card body-->
      <div class="card-body hover-scroll-overlay-y py-10">
         <!--begin::Form-->
         <form class="form d-flex flex-column flex-lg-row" id="serviceeditform">
            <div class="d-flex flex-column gap-7 gap-lg-10">
               <div class="card card-flush p-4">
                  <div class="row align-items-end">
                     <div class="col-md-6 my-3">
                        <div class="card-title">
                           <h2 class="required fs-3">Category</h2>
                        </div>
                        <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
                           <option></option>
                           <option value="published" selected="selected">Hair</option>
                           <option value="draft" selected="">Facial</option>
                           <option value="scheduled">Skin care</option>
                        </select>
                     </div>
                     <div class="col-md-6 my-3">
                        <!--begin::Card title-->
                        <div class="card-title">
                           <h2 class="required fs-3">Sub category</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Select2-->
                        <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
                           <option></option>
                           <option value="published" selected="selected">Hair cut</option>
                           <option value="draft">spa</option>
                           <option value="scheduled">Pedicure</option>
                           <option value="scheduled">Menicure</option>
                        </select>
                        <!--end::Select2-->
                     </div>
                  </div>
               </div>
               <div class="card card-flush p-4">
                  <div class="row align-items-end">
                     <div class="col-md-6 my-3">
                        <div class="card-title">
                           <h2 class="required fs-3">Gender</h2>
                        </div>
                        <div class="d-flex gap-4">
                           <!--begin::Col-->
                           <div>
                              <!--begin::Option-->
                              <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start py-5 px-4">
                                 <!--begin::Radio-->
                                 <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                 <input class="form-check-input" type="radio" name="gender_option" value="1" />
                                 </span>
                                 <!--end::Radio-->
                                 <!--begin::Info-->
                                 <span class="badge badge-danger ms-4">
                                 <i class="bi bi-gender-female me-2 fs-3 clrwht"></i>
                                 Female
                                 </span>
                                 <!--end::Info-->
                              </label>
                              <!--end::Option-->
                           </div>
                           <!--end::Col-->
                           <!--begin::Col-->
                           <div>
                              <!--begin::Option-->
                              <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start py-5 px-4">
                                 <!--begin::Radio-->
                                 <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                 <input class="form-check-input" type="radio" name="gender_option" value="2" checked="checked" />
                                 </span>
                                 <!--end::Radio-->
                                 <!--begin::Info-->
                                 <span class="badge badge-info ms-4">
                                 <i class="bi bi-gender-male me-2 fs-3 clrwht"></i>
                                 Male
                                 </span>
                                 <!--end::Info-->
                              </label>
                              <!--end::Option-->
                           </div>
                           <!--end::Col-->
                           <!--begin::Col-->
                           <div>
                              <!--begin::Option-->
                              <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start py-5 px-4">
                                 <!--begin::Radio-->
                                 <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                 <input class="form-check-input" type="radio" name="gender_option" value="3" />
                                 </span>
                                 <!--end::Radio-->
                                 <!--begin::Info-->
                                 <span class="badge badge-warning ms-4">
                                 <i class="bi bi-gender-ambiguous me-2 fs-3 clrwht"></i>
                                 Unisex
                                 </span>
                                 <!--end::Info-->
                              </label>
                              <!--end::Option-->
                           </div>
                           <!--end::Col-->
                        </div>
                     </div>
                     <div class="col-md-6 my-3">
                        <!--begin::Card title-->
                        <div class="card-title">
                           <h2 class="required fs-3">Duration</h2>
                        </div>
                        <!--end::Card title-->
                        <input type="text" name="" class="form-control mb-3 mb-lg-0" placeholder="Duration" value="" />
                     </div>
                  </div>
               </div>
               <div class="card card-flush p-4">
                  <div class="card-title">
                     <div class="d-flex flex-column gap-3 mb-4">
                        <h2>Pricing</h2>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-4">
                        <div class="d-flex flex-column gap-1">
                           <label class="required fw-semibold fs-6">Walk-in price</label>
                           <div class="input-group mb-2">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <div class="text-muted fs-7">Price for anyone who walks into the salon without an appointment</div>
                           <!--end::Input group-->
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="d-flex flex-column gap-1">
                           <label class="required fw-semibold fs-6">Online Price</label>
                           <div class="input-group mb-2">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <div class="text-muted fs-7">Price available to clients who book their services online in advance</div>
                           <!--end::Input group-->
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="d-flex flex-column gap-1">
                           <label class="required fw-semibold fs-6">Off Peak Price</label>
                           <div class="input-group mb-2">
                              <span class="input-group-text">$</span>
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                              <span class="input-group-text">.00</span>
                           </div>
                           <div class="text-muted fs-7">A discounted price, available to people who walk-in during the salon's off peak hours.</div>
                           <!--end::Input group-->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card card-flush p-4">
                  <div class="card-title">
                     <div class="d-flex flex-column gap-3">
                        <h2>Staff pricing</h2>
                        <span class="text-muted fs-7">Add staff to service, so that customer can book online appointment with their choice of staff</span>
                        <span class="text-muted fs-7">A premium price for a service, available to clients who request a specific stylist who specializes in a particular service (optional)</span>
                     </div>
                  </div>
                  <!--begin::Input group-->
                  <div  data-kt-ecommerce-catalog-add-category="auto-options">
                     <!--begin::Repeater-->
                     <div id="kt_ecommerce_add_category_conditions">
                        <!--begin::Form group-->
                        <div class="form-group">
                           <div data-repeater-list="kt_ecommerce_add_category_conditions" class="d-flex flex-column gap-0">
                              <div data-repeater-item="" class="form-group d-flex align-items-end gap-5">
                                 <div class="row mt-7">
                                    <div class="col-sm-4">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Staff</label>
                                       <!--end::Label-->
                                       <select class="form-select" data-placeholder="Select an option" data-kt-ecommerce-catalog-add-category="condition_type">
                                          <option></option>
                                          <option value="1">John</option>
                                          <option value="2">Robbin</option>
                                          <option value="3">Stella</option>
                                       </select>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="d-flex flex-column gap-1">
                                          <label class="fw-semibold fs-6 mb-2">Online Price</label>
                                          <div class="input-group mb-0">
                                             <span class="input-group-text">$</span>
                                             <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                                             <span class="input-group-text">.00</span>
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="d-flex flex-column gap-1">
                                          <label class="fw-semibold fs-6 mb-2">Off Peak Price</label>
                                          <div class="input-group mb-0">
                                             <span class="input-group-text">$</span>
                                             <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                                             <span class="input-group-text">.00</span>
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>
                                 </div>
                                 <!--begin::Button-->
                                 <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                                 <i class="ki-duotone ki-cross fs-2">
                                 <span class="path1"></span>
                                 <span class="path2"></span>
                                 </i>
                                 </button>
                                 <!--end::Button-->
                              </div>
                           </div>
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group mt-5">
                           <!--begin::Button-->
                           <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                           <i class="ki-duotone ki-plus fs-2"></i>Add another condition</button>
                           <!--end::Button-->
                        </div>
                        <!--end::Form group-->
                     </div>
                     <!--end::Repeater-->
                  </div>
                  <!--end::Input group-->
               </div>
               <div class="card card-flush p-4">
                  <div class="card-title">
                     <div class="d-flex flex-column gap-3 mb-4">
                        <h2>Venue</h2>
                     </div>
                  </div>
                  <div class="row align-items-end">
                     <!--begin::Col-->
                     <div class="col-md-6 mb-4">
                        <!--begin::Option-->
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckVenue1">
                           <!--begin::Radio-->
                           <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                           <input class="form-check-input" type="checkbox" value="" id="flexCheckVenue1" checked/>
                           </span>
                           <!--end::Radio-->
                           <div class="quantity-icn ms-3">
                              <img src="assets/media/svg/salon.svg">
                           </div>
                           <!--begin::Info-->
                           <span class="ms-3">
                              <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 fs-4 mb-4">Alexandra road</span>
                                 <span class="text-muted d-block fw-light fs-7 mt-1">Alexandra Central Mall, 321 Alexandra Road, Singapore (Bukit Merah)
                                 </span>
                              </h3>
                           </span>
                           <!--end::Info-->
                        </label>
                        <!--end::Option-->
                     </div>
                     <!--end::Col-->
                     <!--begin::Col-->
                     <div class="col-md-6 mb-4">
                        <!--begin::Option-->
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckVenue2">
                           <!--begin::Radio-->
                           <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                           <input class="form-check-input" type="checkbox" value="" id="flexCheckVenue2" checked/>
                           </span>
                           <!--end::Radio-->
                           <div class="quantity-icn ms-3">
                              <img src="assets/media/svg/salon.svg">
                           </div>
                           <!--begin::Info-->
                           <span class="ms-3">
                              <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 fs-4 mb-4">YJ Salons - Punggol</span>
                                 <span class="text-muted d-block fw-light fs-7 mt-1">Punggol Park, Hougang Avenue 10, Singapore (Hougang)
                                 </span>
                              </h3>
                           </span>
                           <!--end::Info-->
                        </label>
                        <!--end::Option-->
                     </div>
                     <!--end::Col-->
                     <!--begin::Col-->
                     <div class="col-md-6 mb-4">
                        <!--begin::Option-->
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckVenue1">
                           <!--begin::Radio-->
                           <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                           <input class="form-check-input" type="checkbox" value="" id="flexCheckVenue1" checked/>
                           </span>
                           <!--end::Radio-->
                           <div class="quantity-icn ms-3">
                              <img src="assets/media/svg/salon.svg">
                           </div>
                           <!--begin::Info-->
                           <span class="ms-3">
                              <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 fs-4 mb-4">Alexandra road</span>
                                 <span class="text-muted d-block fw-light fs-7 mt-1">Alexandra Central Mall, 321 Alexandra Road, Singapore (Bukit Merah)
                                 </span>
                              </h3>
                           </span>
                           <!--end::Info-->
                        </label>
                        <!--end::Option-->
                     </div>
                     <!--end::Col-->
                     <!--begin::Col-->
                     <div class="col-md-6 mb-4">
                        <!--begin::Option-->
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckVenue2">
                           <!--begin::Radio-->
                           <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                           <input class="form-check-input" type="checkbox" value="" id="flexCheckVenue2" checked/>
                           </span>
                           <!--end::Radio-->
                           <div class="quantity-icn ms-3">
                              <img src="assets/media/svg/salon.svg">
                           </div>
                           <!--begin::Info-->
                           <span class="ms-3">
                              <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 fs-4 mb-4">YJ Salons - Punggol</span>
                                 <span class="text-muted d-block fw-light fs-7 mt-1">Punggol Park, Hougang Avenue 10, Singapore (Hougang)
                                 </span>
                              </h3>
                           </span>
                           <!--end::Info-->
                        </label>
                        <!--end::Option-->
                     </div>
                     <!--end::Col-->
                  </div>
               </div>
               <div class="d-flex justify-content-end">
                  <!--begin::Button-->
                  <a href="#" class="btn btn-light me-5">Cancel</a>
                  <!--end::Button-->
                  <!--begin::Button-->
                  <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                  <span class="indicator-label">Save Changes</span>
                  <span class="indicator-progress">Please wait...
                  <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                  </button>
                  <!--end::Button-->
               </div>
            </div>
         </form>
      </div>
      <!--end::Card-->
   </div>
</div>
<!--end::Drawer-->
<!--end::Modals-->

@endsection
@push('scripts')
<script type="text/javascript">
         var input_add_service = document.querySelector("#kt_tagify_service");
         var service_list = ['Service1', 'Service2', 'Service3', 'Service4', 'Service5', 'Service6', 'Service7', 'Service8', 'Service9', 'Service10'];
         

         function productDrp(input, list) {
            new Tagify(input, {
                whitelist: list,
                maxTags: 20,
                dropdown: {
                    maxItems: 40,           // <- mixumum allowed rendered suggestions
                    classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
                    enabled: 0,             // <- show suggestions on focus
                    closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
                }
            });
         }

         productDrp(input_add_service, service_list);
      </script>

      <script type="text/javascript">
         let modalSer1, modalSer2, variationDiv1, variationDivPar1, variationDiv2, variationDivPar2, addVar1, addVar2;
         modalSer1 = document.getElementById('kt_modal_scrollable2');
         modalSer2 = document.getElementById('kt_modal_scrollable3');

         window.addEventListener("DOMContentLoaded", (event) => {

            variationDiv1 = modalSer1.querySelector('.variationDiv');
            variationDivPar1 = variationDiv1.parentElement;
            variationDiv1.classList.remove('d-none');
            variationDiv1.parentNode.removeChild(variationDiv1);
            addVar1 = modalSer1.querySelector('.addVar');

            variationDiv2 = modalSer2.querySelector('.variationDiv');
            variationDivPar2 = variationDiv2.parentElement;
            variationDiv2.classList.remove('d-none');
            variationDiv2.parentNode.removeChild(variationDiv2);
            addVar2 = modalSer2.querySelector('.addVar');
         });


         let inputRadio = document.querySelectorAll('input[name="service_radio"]');
         let inputRadioHome = document.querySelectorAll('input[name="service_radio_home"]');

         for(let i=0; i<inputRadio.length; i++) {
            inputRadio[i].addEventListener("change", e => {
               for(let j=0; j<inputRadio.length; j++) {
                  inputRadio[j].nextElementSibling.textContent = "Select";
                  inputRadio[j].nextElementSibling.classList.remove('selected');
               }
               e.target.nextElementSibling.textContent = "Selected";
               e.target.nextElementSibling.classList.add('selected');
               if(e.target.checked) {
                  let text = e.target.closest('label.form-check').parentElement.querySelector('.service_individual').textContent;
                  createVariation(text, variationDivPar1, variationDiv1, addVar1);
               }
            });
         }

         for(let i=0; i<inputRadioHome.length; i++) {
            inputRadioHome[i].addEventListener("change", e => {
               for(let j=0; j<inputRadioHome.length; j++) {
                  inputRadioHome[j].nextElementSibling.textContent = "Select";
                  inputRadioHome[j].nextElementSibling.classList.remove('selected');
               }
               e.target.nextElementSibling.textContent = "Selected";
               e.target.nextElementSibling.classList.add('selected');
               if(e.target.checked) {
                  let text = e.target.closest('label.form-check').parentElement.querySelector('.service_individual').textContent;
                  createVariation(text, variationDivPar2, variationDiv2, addVar2);
               }
            });
         }

         function createVariation(serTxt, variationDivParElem, variationDivElem, addVar) {
            if(variationDivParElem.children.length > 0) {
               alert('Are  you sure you want to continue without saving previous variations');
               variationDivParElem.replaceChildren();
               addVar.classList.add('d-none');
            }
            variationDivCln = variationDivElem.cloneNode(true);
            variationDivCln.querySelector('[name="service_name"]').value = serTxt;
            variationDivCln.querySelector('[name="service_placeholder"]').value = 'lorem ipsum dolar sit amet';
            variationDivParElem.append(variationDivCln);
            addVar.classList.remove('d-none');
         }


         function showSerPrDur() {
            let newVarDiv = variationDivPar1.lastChild.cloneNode(true);
            variationDivPar1.append(newVarDiv);
         }

         function showSerPrDur2() {
            let newVarDiv = variationDivPar2.lastChild.cloneNode(true);
            variationDivPar2.append(newVarDiv);
         }

         function createCstmVariation(variationDivParElem, variationDivElem, addVar) {
            if(variationDivParElem.children.length > 0) {
               alert('Are  you sure you want to continue without saving previous variations');
               variationDivParElem.replaceChildren();
            }
            variationDivCln = variationDivElem.cloneNode(true);
            variationDivParElem.append(variationDivCln);
            addVar.classList.remove('d-none');
         }

         let searchBox = document.querySelectorAll('[name="search-box"]');
         for(let j=0; j<searchBox.length; j++) {
            searchBox[j].addEventListener('keyup', function (e) {
               let count=0;
               let addBtn = e.target.parentElement.nextElementSibling.querySelector('a');
               let currSerNm = e.target.closest('.searchboxdiv').nextElementSibling.children;
               for(let i=0; i<currSerNm.length; i++) {
                  if(currSerNm[i].querySelector('.service_individual').textContent.toLowerCase().includes(e.target.value.toLowerCase())) {
                     if(currSerNm[i].classList.contains("d-none")) {
                        currSerNm[i].classList.remove("d-none");
                     }
                     currSerNm[i].classList.add("d-flex");
                  }
                  else {
                     if(currSerNm[i].classList.contains("d-flex")) {
                        currSerNm[i].classList.remove("d-flex");
                     }
                     currSerNm[i].classList.add("d-none");
                     count++;
                  }
               }
               if(count === currSerNm.length) {
                  addBtn.classList.remove('d-none');
               }
               else {
                  addBtn.classList.add('d-none');
               }
              });
         }

         let newSerElem = document.querySelector('.select_service > div').cloneNode(true);
         newSerElem.querySelector('.service_individual').textContent = '';
         newSerElem.querySelector('.service-description').firstElementChild.textContent = '';
         newSerElem.querySelector('.service-description').lastElementChild.textContent = '';

           function addNewSer(e) {
            let newSerText = e.closest('.searchboxdiv').querySelector('.searchbox > input').value;
            let serDivElem = e.closest('.searchboxdiv').nextElementSibling;
            let serDivElemChild = serDivElem.children;
            let newSerElemCln = newSerElem.cloneNode(true);
            newSerElemCln.querySelector('.service_individual').textContent = newSerText;

            newSerElemCln.querySelector('.form-check-input').setAttribute("onchange", "funcAddEvent(this)");
            serDivElem.append(newSerElemCln);
            e.closest('.searchboxdiv').querySelector('.searchbox > input').value = '';
            for(let i=0; i<serDivElemChild.length; i++) {
               if(serDivElemChild[i].classList.contains('d-none')) {
                  serDivElemChild[i].classList.remove('d-none');
                  serDivElemChild[i].classList.add('d-flex');
               }
            }
            e.classList.add('d-none');
           }

           function remVariationDiv(e) {
            
            if(e.closest('.card') == variationDivPar1) {
               if(variationDivPar1.children.length === 1) {
                  addVar1.classList.add('d-none');
                  for(let i=0; i<inputRadio.length; i++) {
                     if(inputRadio[i].checked) {
                        inputRadio[i].checked = false;
                        inputRadio[i].nextElementSibling.textContent = "Select";
                        inputRadio[i].nextElementSibling.classList.remove('selected');
                     }
                  }
               }
            }
            else if(e.closest('.card') == variationDivPar2) {
               if(variationDivPar2.children.length === 1) {
                  addVar2.classList.add('d-none');
                  for(let i=0; i<inputRadioHome.length; i++) {
                     if(inputRadioHome[i].checked) {
                        inputRadioHome[i].checked = false;
                        inputRadio[i].nextElementSibling.textContent = "Select";
                        inputRadio[i].nextElementSibling.classList.remove('selected');
                     }
                  }
               }
            }
            e.parentElement.remove();
           }

           function funcAddEvent(e) {
            let serAttrName = e.getAttribute(name);      
            // console.log(e, serAttrName)         
            //for(let j=0; j<inputRadio.length; j++) {
            //    inputRadio[j].nextElementSibling.textContent = "Select";
            //    inputRadio[j].nextElementSibling.classList.remove('selected');
            // }
            // e.target.nextElementSibling.textContent = "Selected";
            // e.target.nextElementSibling.classList.add('selected');
            // if(e.target.checked) {
            //    let text = e.target.closest('label.form-check').parentElement.querySelector('.service_individual').textContent;
            //    createVariation(text, variationDivPar1, variationDiv1);
            //    checkChild(variationDivPar1);
            // }
           }

      </script>

@endpush