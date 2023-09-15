@extends('partner.layouts.auth.app')
@section('content') 

<!--Begin:::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
   <!--begin::Content wrapper-->
   <div id="kt_app_content" class="app-content flex-column-fluid">
      <div id="kt_app_content_container" class="app-container container-xl">
         <div class="row mb-7 nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom apptmntnav">
            <div class="col mb-4 mb-md-0">
               <a class=" active" data-bs-toggle="tab" href="#appointmentall" aria-selected="true" role="tab" tabindex="-1">
                  <div class="card card-flush p-5 align-items-start">
                     <div class="d-flex align-items-center">
                        <!--begin::Amount-->
                        <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">All</span>
                        <!--end::Amount-->
                     </div>
                     <span class="text-gray-400 pt-1 fw-semibold fs-6">Clients</span> 
                     <div class="d-flex align-items-center justify-content-between mt-10 w-100">
                        <div class="d-flex flex-column">
                           <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">87</span>
                           <span class="text-gray-400 pt-1 fw-semibold fs-8">Total no.</span>
                        </div>
                        <div class="d-flex flex-column">
                           <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2 text-end">$1834</span>
                           <span class="text-gray-400 pt-1 fw-semibold fs-8 text-end">Expected sales</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col mb-4 mb-md-0">
               <a class="" data-bs-toggle="tab" href="#appointment1" aria-selected="false" role="tab" tabindex="-1">
                  <div class="card card-flush p-5 align-items-start">
                     <div class="d-flex align-items-center">
                        <!--begin::Amount-->
                        <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">This Month</span>
                        <!--end::Amount-->
                     </div>
                     <span class="text-gray-400 pt-1 fw-semibold fs-6">Clients visited this month</span>
                     <div class="d-flex align-items-center justify-content-between mt-10 w-100">
                        <div class="d-flex flex-column">
                           <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">87</span>
                           <span class="text-gray-400 pt-1 fw-semibold fs-8">Total no.</span>
                        </div>
                        <div class="d-flex flex-column">
                           <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2 text-end">$1834</span>
                           <span class="text-gray-400 pt-1 fw-semibold fs-8 text-end">Expected sales</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col mb-4 mb-md-0">
               <a class="" data-bs-toggle="tab" href="#appointment2" aria-selected="false" role="tab" tabindex="-1">
                  <div class="card card-flush p-5 align-items-start">
                     <div class="d-flex align-items-center">
                        <!--begin::Amount-->
                        <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">Last Month</span>
                        <!--end::Amount-->
                     </div>
                     <span class="text-gray-400 pt-1 fw-semibold fs-6">Clients visited last month</span> 
                     <div class="d-flex align-items-center justify-content-between mt-10 w-100">
                        <div class="d-flex flex-column">
                           <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">87</span>
                           <span class="text-gray-400 pt-1 fw-semibold fs-8">Total no.</span>
                        </div>
                        <div class="d-flex flex-column">
                           <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2 text-end">$1834</span>
                           <span class="text-gray-400 pt-1 fw-semibold fs-8 text-end">Expected sales</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col mb-4 mb-md-0">
               <a class="" data-bs-toggle="tab" href="#appointment3" aria-selected="false" role="tab" tabindex="-1">
                  <div class="card card-flush p-5 align-items-start">
                     <div class="d-flex align-items-center">
                        <!--begin::Amount-->
                        <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">Expiring Membership</span>
                        <!--end::Amount-->
                     </div>
                     <span class="text-gray-400 pt-1 fw-semibold fs-6">List of expiring membership</span>
                     <div class="d-flex align-items-center justify-content-between mt-10 w-100">
                        <div class="d-flex flex-column">
                           <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">87</span>
                           <span class="text-gray-400 pt-1 fw-semibold fs-8">Total no.</span>
                        </div>
                        <div class="d-flex flex-column">
                           <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2 text-end">$1834</span>
                           <span class="text-gray-400 pt-1 fw-semibold fs-8 text-end">Expected sales</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col mb-4 mb-md-0">
               <a class="" data-bs-toggle="tab" href="#appointment4" aria-selected="false" role="tab" tabindex="-1">
                  <div class="card card-flush p-5 align-items-start">
                     <div class="d-flex align-items-center">
                        <!--begin::Amount-->
                        <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">Expiring Vouchers</span>
                        <!--end::Amount-->
                     </div>
                     <span class="text-gray-400 pt-1 fw-semibold fs-6">List of Expiring Vouchers</span>
                     <div class="d-flex align-items-center justify-content-between mt-10 w-100">
                        <div class="d-flex flex-column">
                           <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">87</span>
                           <span class="text-gray-400 pt-1 fw-semibold fs-8">Total no.</span>
                        </div>
                        <div class="d-flex flex-column">
                           <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2 text-end">$1834</span>
                           <span class="text-gray-400 pt-1 fw-semibold fs-8 text-end">Completed sales</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="card card-flush">
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
               <!--begin::Card title-->
               <div class="card-title">
                  <!--begin::Search-->
                  <div class="d-flex align-items-center position-relative my-1">
                     <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                     <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search">
                  </div>
                  <!--end::Search-->
               </div>
               <!--end::Card title-->
               <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                  <!--begin::Actions-->
                  <div class="d-flex align-items-center gap-2 gap-lg-3">
                     <!--begin::Filter menu-->
                     <div class="m-0">
                        <!--begin::Menu toggle-->
                        <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        </i>Filter</a>
                        <!--end::Menu toggle-->
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641d50f7884f2">
                           <!--begin::Header-->
                           <div class="px-7 py-5">
                              <div class="fs-5 text-dark fw-bold">Filter Options</div>
                           </div>
                           <!--end::Header-->
                           <!--begin::Menu separator-->
                           <div class="separator border-gray-200"></div>
                           <!--end::Menu separator-->
                           <!--begin::Form-->
                           <div class="px-7 py-5">
                              <!--begin::Input group-->
                              <div class="mb-10">
                                 <!--begin::Input-->
                                 <div>
                                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option">
                                       <option></option>
                                       <option value="1">Online or walk-in</option>
                                       <option value="2">Gender</option>
                                    </select>
                                 </div>
                                 <!--end::Input-->
                              </div>
                              <!--end::Input group-->
                              <!--begin::Actions-->
                              <div class="d-flex justify-content-end">
                                 <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                 <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                              </div>
                              <!--end::Actions-->
                           </div>
                           <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                     </div>
                     <!--end::Filter menu-->
                     <div class="m-0">
                        <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Sorting
                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="" class="menu-link px-3">name (A-Z)</a>
                           </div>
                           <!--end::Menu item-->
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="" class="menu-link px-3">name (Z-A)</a>
                           </div>
                           <!--end::Menu item-->
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="" class="menu-link px-3">Gender (A-Z)</a>
                           </div>
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="" class="menu-link px-3">Gender (Z-A)</a>
                           </div>
                           <div class="menu-item px-3">
                              <a href="" class="menu-link px-3">Created at (oldest first)</a>
                           </div>
                           <div class="menu-item px-3">
                              <a href="" class="menu-link px-3">Created at (newest first)</a>
                           </div>
                        </div>
                        <!--end::Menu-->
                     </div>
                     <div class="m-0">
                        <!--begin::Export dropdown-->
                        <button type="button" class="btn btn-sm btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span class="path2"></span></i>
                        Options
                        </button>
                        <!--begin::Menu-->
                        <div id="kt_datatable_example_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#importclient">
                              Import Clients
                              </a>
                           </div>
                           <!--end::Menu item-->
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#clientregister">
                              Upload client register
                              </a>
                           </div>
                           <!--end::Menu item-->
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3">
                              Export clients(csv)
                              </a>
                           </div>
                           <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Export dropdown-->
                        <!--begin::Hide default export buttons-->
                        <div id="kt_datatable_example_buttons" class="d-none"></div>
                        <!--end::Hide default export buttons-->
                     </div>
                     <!--begin::Primary button-->
                     <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable">Create</a>
                     <!--end::Primary button-->
                  </div>
                  <!--end::Actions-->
               </div>
            </div>
            <div class="card-body align-items-center justify-content-between py-5 gap-2 gap-md-5">
               <!--begin::Table-->
               <table class="table table-row-dashed align-middle gs-0 gy-3 my-0" id="kt_datatable_example1">
                  <!--begin::Table head-->
                  <thead>
                     <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                        <th class="w-175px text-start">Client name</th>
                        <th class="w-100px text-start">Gender</th>
                        <th class="w-100px text-start">Sales</th>
                        <th class="w-150px text-start">Offers</th>
                        <th class="w-150px text-start">Rating</th>
                        <th class="w-150px text-end"></th>
                     </tr>
                  </thead>
                  <!--end::Table head-->
                  <!--begin::Table body-->
                  <tbody>
                     <tr>
                        <td>
                           <a href="#" id="kt_drawer_example_permanent_toggle">
                              <div class="d-flex align-items-center">
                                 <div class="symbol symbol-50px me-3">
                                    <img src="{{ asset('/public/partner/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                                 </div>
                                 <div class="d-flex justify-content-start flex-column">
                                    <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">9856251457</span>
                                 </div>
                              </div>
                           </a>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold d-block mb-1 fs-6">Female</span>
                           <span class="fw-semibold text-gray-400 d-block">19-Aug-2019</span>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold d-block mb-1 fs-6">$876</span>
                           <span class="fw-semibold text-gray-400 d-block">visit: 58</span>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold fs-6">Voucher: expiring <br>   
                           Mem: None</span>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold d-block mb-1 fs-6">
                              <div class="rating">
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                              </div>
                           </span>
                           <span class="fw-semibold text-gray-400 d-block">Reviews: 13</span>
                        </td>
                        <td>
                           <div class="d-flex gap-3 justify-content-end">
                              <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">View</a>
                              <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <a href="#" id="kt_drawer_example_permanent_toggle">
                              <div class="d-flex align-items-center">
                                 <div class="symbol symbol-50px me-3">
                                    <img src="{{ asset('/public/partner/assets/media/avatars/300-10.jpg') }}" class="" alt="" />
                                 </div>
                                 <div class="d-flex justify-content-start flex-column">
                                    <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">7845125963</span>
                                 </div>
                              </div>
                           </a>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold d-block mb-1 fs-6">Female</span>
                           <span class="fw-semibold text-gray-400 d-block">19-Aug-2019</span>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold d-block mb-1 fs-6">$876</span>
                           <span class="fw-semibold text-gray-400 d-block">visit: 58</span>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold fs-6">Voucher: expiring <br>   
                           Mem: None</span>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold d-block mb-1 fs-6">
                              <div class="rating">
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                              </div>
                           </span>
                           <span class="fw-semibold text-gray-400 d-block">Reviews: 13</span>
                        </td>
                        <td>
                           <div class="d-flex gap-3 justify-content-end">
                              <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">View</a>
                              <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <a href="#" id="kt_drawer_example_permanent_toggle">
                              <div class="d-flex align-items-center">
                                 <div class="symbol symbol-50px me-3">
                                    <img src="{{ asset('/public/partner/assets/media/avatars/300-9.jpg') }}" class="" alt="" />
                                 </div>
                                 <div class="d-flex justify-content-start flex-column">
                                    <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">7845123659</span>
                                 </div>
                              </div>
                           </a>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold d-block mb-1 fs-6">Female</span>
                           <span class="fw-semibold text-gray-400 d-block">19-Aug-2019</span>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold d-block mb-1 fs-6">$876</span>
                           <span class="fw-semibold text-gray-400 d-block">visit: 58</span>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold fs-6">Voucher: expiring <br>   
                           Mem: None</span>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold d-block mb-1 fs-6">
                              <div class="rating">
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                              </div>
                           </span>
                           <span class="fw-semibold text-gray-400 d-block">Reviews: 13</span>
                        </td>
                        <td>
                           <div class="d-flex gap-3 justify-content-end">
                              <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">View</a>
                              <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <a href="#" id="kt_drawer_example_permanent_toggle">
                              <div class="d-flex align-items-center">
                                 <div class="symbol symbol-50px me-3">
                                    <img src="{{ asset('/public/partner/assets/media/avatars/300-2.jpg') }}" class="" alt="" />
                                 </div>
                                 <div class="d-flex justify-content-start flex-column">
                                    <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">8521479638</span>
                                 </div>
                              </div>
                           </a>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold d-block mb-1 fs-6">Female</span>
                           <span class="fw-semibold text-gray-400 d-block">19-Aug-2019</span>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold d-block mb-1 fs-6">$876</span>
                           <span class="fw-semibold text-gray-400 d-block">visit: 58</span>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold fs-6">Voucher: expiring <br>   
                           Mem: None</span>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold d-block mb-1 fs-6">
                              <div class="rating">
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                              </div>
                           </span>
                           <span class="fw-semibold text-gray-400 d-block">Reviews: 13</span>
                        </td>
                        <td>
                           <div class="d-flex gap-3 justify-content-end">
                              <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">View</a>
                              <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <a href="#" id="kt_drawer_example_permanent_toggle">
                              <div class="d-flex align-items-center">
                                 <div class="symbol symbol-50px me-3">
                                    <img src="{{ asset('/public/partner/assets/media/avatars/300-1.jpg') }}" class="" alt="" />
                                 </div>
                                 <div class="d-flex justify-content-start flex-column">
                                    <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ralph Edwards</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">4578125963</span>
                                 </div>
                              </div>
                           </a>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold d-block mb-1 fs-6">Female</span>
                           <span class="fw-semibold text-gray-400 d-block">19-Aug-2019</span>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold d-block mb-1 fs-6">$876</span>
                           <span class="fw-semibold text-gray-400 d-block">visit: 58</span>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold fs-6">Voucher: expiring <br>   
                           Mem: None</span>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold d-block mb-1 fs-6">
                              <div class="rating">
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                 </div>
                              </div>
                           </span>
                           <span class="fw-semibold text-gray-400 d-block">Reviews: 13</span>
                        </td>
                        <td>
                           <div class="d-flex gap-3 justify-content-end">
                              <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">View</a>
                              <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                           </div>
                        </td>
                     </tr>
                  </tbody>
                  <!--end::Table body-->
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<!--end:::Main-->

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
         data-kt-drawer-width="{default:'300px', 'md': '700px', 'xl': '950px'}"
         >
         <!--begin::Card-->
         <div class="card rounded-0 w-100">
            <!--begin::Card header-->
            <div class="card-header pe-5">
               <!--begin::Title-->
               <div class="card-title">
                  Customer Details
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
            <div class="card-body hover-scroll-overlay-y px-0 pt-0">
               <div class="card card-flush">
                  <div class="card-body pt-10 pb-0">
                     <!--begin::Details-->
                     <div class="d-flex flex-wrap flex-sm-nowrap gap-8">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                           <img src="/dasalon/partners/assets/media/avatars/300-1.jpg') }}" alt="image">
                           <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                        </div>
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                           <!--begin::Title-->
                           <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                              <!--begin::User-->
                              <div class="d-flex flex-column">
                                 <!--begin::Name-->
                                 <div class="d-flex flex-column mb-2">
                                    <a href="" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Max Smith</a>
                                    <div class="fs-5 fw-semibold text-muted mb-6">Software Enginer</div>
                                 </div>
                                 <!--end::Name-->
                              </div>
                              <!--end::User-->
                           </div>
                           <!--end::Title-->
                           <div class="d-flex flex-wrap gap-5 mb-5 cntct-info">
                              <div>
                                 <a href="https://wa.me/9587456915">
                                 <i class="fa-brands fa-whatsapp"></i>
                                 <span class="text-gray-400 fw-semibold fs-6">9587456915</span>
                                 </a>
                              </div>
                              <div>
                                 <a href="mailto:client1@gmail.com">
                                 <i class="fas fa-envelope"></i>
                                 <span class="text-gray-400 fw-semibold fs-6">client1@gmail.com</span>
                                 </a>
                              </div>
                           </div>
                           <div class="d-flex flex-column gap-5 mt-5">
                              <div class="d-flex gap-5">
                                 <div class="fw-bold">Date Of Birth</div>
                                 <div class="text-gray-600">01 January, 2001</div>
                              </div>
                              <div class="d-flex gap-5">
                                 <div class="fw-bold mt-5">Address</div>
                                 <div class="text-gray-600">101 Collin Street,
                                    <br>Melbourne 3000 VIC
                                    <br>Australia
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--end::Info-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                           <div class="card-toolbar">
                              <div class="d-flex gap-2 justify-content-end" data-kt-user-table-toolbar="base">
                                 <a href="sales.html" class="btn btn-sm btn-light">Sales</a>
                                 <a href="new-appointment.html" class="btn btn-sm btn-primary">Appointment</a>
                              </div>
                           </div>
                        </div>
                        <!--end::Details-->
                     </div>
                     <!--begin::Stats-->
                     <div class="d-flex flex-wrap flex-stack mt-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-grow-1 pe-8">
                           <!--begin::Stats-->
                           <div class="d-flex flex-wrap">
                              <!--begin::Stat-->
                              <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                 <!--begin::Number-->
                                 <div class="d-flex align-items-center">
                                    <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    
                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$" data-kt-initialized="1">6900</div>
                                 </div>
                                 <!--end::Number-->
                                 <!--begin::Label-->
                                 <div class="fw-semibold fs-6 text-gray-400">Total sales</div>
                                 <!--end::Label-->
                              </div>
                              <!--end::Stat-->
                              <!--begin::Stat-->
                              <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                 <!--begin::Number-->
                                 <div class="d-flex align-items-center">
                                    <i class="ki-outline ki-arrow-down fs-3 text-danger me-2"></i>                                    
                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="80" data-kt-initialized="1">130</div>
                                 </div>
                                 <!--end::Number-->
                                 <!--begin::Label-->
                                 <div class="fw-semibold fs-6 text-gray-400">Bookings</div>
                                 <!--end::Label-->
                              </div>
                              <!--end::Stat-->
                              <!--begin::Stat-->
                              <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                 <!--begin::Number-->
                                 <div class="d-flex align-items-center">
                                    <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    
                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">500</div>
                                 </div>
                                 <!--end::Number-->                                
                                 <!--begin::Label-->
                                 <div class="fw-semibold fs-6 text-gray-400">Completed</div>
                                 <!--end::Label-->
                              </div>
                              <!--end::Stat-->
                              <!--begin::Stat-->
                              <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                 <!--begin::Number-->
                                 <div class="d-flex align-items-center">
                                    <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    
                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">6900</div>
                                 </div>
                                 <!--end::Number-->                                
                                 <!--begin::Label-->
                                 <div class="fw-semibold fs-6 text-gray-400">Cancelled</div>
                                 <!--end::Label-->
                              </div>
                              <!--end::Stat-->
                              <!--begin::Stat-->
                              <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                 <!--begin::Number-->
                                 <div class="d-flex align-items-center">
                                    <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    
                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">130</div>
                                 </div>
                                 <!--end::Number-->                                
                                 <!--begin::Label-->
                                 <div class="fw-semibold fs-6 text-gray-400">No-show</div>
                                 <!--end::Label-->
                              </div>
                              <!--end::Stat-->
                              <!--begin::Stat-->
                              <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                 <!--begin::Number-->
                                 <div class="d-flex align-items-center">
                                    <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    
                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">4.2</div>
                                 </div>
                                 <!--end::Number-->                                
                                 <!--begin::Label-->
                                 <div class="fw-semibold fs-6 text-gray-400">Completed</div>
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
                  <!--begin::Content-->
                  <div class="flex-lg-row-fluid">
                     <div class="card-body pb-0">
                        <!--begin:::Tabs-->
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-5">
                           <!--begin:::Tab item-->
                           <li class="nav-item">
                              <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#clientsappointments">Appointments</a>
                           </li>
                           <!--end:::Tab item-->
                           <!--begin:::Tab item-->
                           <li class="nav-item">
                              <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#clientssales">Sales</a>
                           </li>
                           <!--end:::Tab item-->
                           <!--begin:::Tab item-->
                           <li class="nav-item">
                              <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#clientsmembership">Membership</a>
                           </li>
                           <!--end:::Tab item-->
                           <!--begin:::Tab item-->
                           <li class="nav-item">
                              <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#clientsvouchers">Vouchers</a>
                           </li>
                           <!--end:::Tab item-->
                           <!--begin:::Tab item-->
                           <li class="nav-item">
                              <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#clientsactivity">Activity</a>
                           </li>
                           <!--end:::Tab item-->
                           <!--begin:::Tab item-->
                           <li class="nav-item">
                              <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#clientsreviews">Reviews</a>
                           </li>
                           <!--end:::Tab item-->
                           <!--begin:::Tab item-->
                           <li class="nav-item">
                              <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#clientsinfo">Info</a>
                           </li>
                           <!--end:::Tab item-->
                        </ul>
                        <!--end:::Tabs-->
                     </div>
                     <!--begin:::Tab content-->
                     <div class="tab-content" id="myTabContent">
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade show active" id="clientsappointments" role="tabpanel">
                           <div class="card card-flush">
                              <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                 <!--begin::Card title-->
                                 <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                       <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                       <input type="text" data-kt-filter1="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search">
                                    </div>
                                    <!--end::Search-->
                                 </div>
                                 <!--end::Card title-->
                                 <!--begin::Card toolbar-->
                                 <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <!--begin::Daterangepicker-->
                                    <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_customer_orders_daterangepicker" />
                                    <!--end::Daterangepicker-->
                                    <!--begin::Filter-->
                                    <div class="w-150px">
                                       <!--begin::Select2-->
                                       <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
                                          <option></option>
                                          <option value="all">All</option>
                                          <option value="active">New</option>
                                          <option value="locked">Confirmed</option>
                                          <option value="disabled">Completed</option>
                                       </select>
                                       <!--end::Select2-->
                                    </div>
                                    <!--end::Filter-->
                                    <!--begin::Filter menu-->
                                    <div class="m-0">
                                       <!--begin::Menu toggle-->
                                       <a href="#" class="btn btn-sm btn-light btn-flex btn-color-gray-700 fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                       <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>Filter</a>
                                       <!--end::Menu toggle-->
                                       <!--begin::Menu 1-->
                                       <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641d50f7884f2">
                                          <!--begin::Header-->
                                          <div class="px-7 py-5">
                                             <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                          </div>
                                          <!--end::Header-->
                                          <!--begin::Menu separator-->
                                          <div class="separator border-gray-200"></div>
                                          <!--end::Menu separator-->
                                          <!--begin::Form-->
                                          <div class="px-7 py-5">
                                             <!--begin::Input group-->
                                             <div class="mb-10">
                                                <!--begin::Input-->
                                                <div>
                                                   <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option">
                                                      <option></option>
                                                      <option value="1">Online or walk-in</option>
                                                      <option value="2">Gender</option>
                                                      <option value="2">Status</option>
                                                   </select>
                                                </div>
                                                <!--end::Input-->
                                             </div>
                                             <!--end::Input group-->
                                             <!--begin::Actions-->
                                             <div class="d-flex justify-content-end">
                                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                             </div>
                                             <!--end::Actions-->
                                          </div>
                                          <!--end::Form-->
                                       </div>
                                       <!--end::Menu 1-->
                                    </div>
                                    <!--end::Filter menu-->
                                 </div>
                                 <!--end::Card toolbar-->
                              </div>
                              <div class="card-body align-items-center justify-content-between py-5 gap-2 gap-md-5">
                                 <table class="table align-middle gs-4 gy-4 tdmid" id="kt_datatable_client1">
                                    <!--begin::Table head-->
                                    <thead>
                                       <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                          <th class="min-w-150px">Date and time</th>
                                          <th class="min-w-100px">Service</th>
                                          <th class="min-w-100px">Price</th>
                                          <th class="min-w-100px text-end"></th>
                                       </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                       <tr>
                                          <td>
                                             <div class="d-flex">
                                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                                <div class="d-flex flex-column gap-5">
                                                   <span class="text-gray-800 fw-bold d-block fs-6">14 April, 2023</span>
                                                   <span class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 AM</span>
                                                </div>
                                             </div>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">Hair cut</span>
                                             <span class="text-gray-600 d-block fs-6">2 hours</span>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 d-block mb-2 fw-normal fs-4">$99</span>
                                             <span class="badge badge-success">New</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Manage
                                             <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                             <!--begin::Menu-->
                                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Assign</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Cancel</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="system-admin-manage.html" class="menu-link px-3">Re-schedule</a>
                                                </div>
                                                <!--end::Menu item-->
                                             </div>
                                             <!--end::Menu-->
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="d-flex">
                                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-60px mh-100 me-4 bg-warning"></span>
                                                <div class="d-flex flex-column gap-5">
                                                   <span class="text-gray-800 fw-bold d-block fs-6">14 April, 2023</span>
                                                   <span class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 AM</span>
                                                </div>
                                             </div>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">Hair cut</span>
                                             <span class="text-gray-600 d-block fs-6">2 hours</span>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 d-block mb-2 fw-normal fs-4">$99</span>
                                             <span class="badge badge-secondary">Confirmed</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Manage
                                             <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                             <!--begin::Menu-->
                                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="" class="menu-link px-3">Cancel</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                   <a href="system-admin-manage.html" class="menu-link px-3">Re-schedule</a>
                                                </div>
                                                <!--end::Menu item-->
                                             </div>
                                             <!--end::Menu-->
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="d-flex">
                                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-60px mh-100 me-4 bg-success"></span>
                                                <div class="d-flex flex-column gap-5">
                                                   <span class="text-gray-800 fw-bold d-block fs-6">14 April, 2023</span>
                                                   <span class="text-gray-800 fw-semibold fs-2">10:20 - 11:00 AM</span>
                                                </div>
                                             </div>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">Hair cut</span>
                                             <span class="text-gray-600 d-block fs-6">2 hours</span>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 d-block mb-2 fw-normal fs-4">$99</span>
                                             <span class="badge badge-primary">Completed</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-sm btn-light">View</a>
                                          </td>
                                       </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                 </table>
                              </div>
                           </div>
                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="clientssales" role="tabpanel">
                           <div class="card card-flush">
                              <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                 <!--begin::Card title-->
                                 <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                       <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                       <input type="text" data-kt-filter-cl2="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search">
                                    </div>
                                    <!--end::Search-->
                                 </div>
                                 <!--end::Card title-->
                                 <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <!--begin::Filters-->
                                    <div class="d-flex flex-stack flex-wrap gap-4">
                                       <!--begin::Destination-->
                                       <div class="d-flex align-items-center fw-bold">
                                          <!--begin::Label-->
                                          <div class="text-muted fs-7 me-2">Type</div>
                                          <!--end::Label-->
                                          <!--begin::Select-->
                                          <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                             <option></option>
                                             <option value="0" selected="selected">Service</option>
                                             <option value="1">Package</option>
                                             <option value="2">Voucher</option>
                                             <option value="3">Membership & top up</option>
                                             <option value="4">Product</option>
                                          </select>
                                          <!--end::Select-->
                                       </div>
                                       <!--end::Destination-->
                                       <!--begin::Status-->
                                       <div class="d-flex align-items-center fw-bold">
                                          <!--begin::Label-->
                                          <div class="text-muted fs-7 me-2">Status</div>
                                          <!--end::Label-->
                                          <!--begin::Select-->
                                          <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
                                             <option></option>
                                             <option value="0" selected="selected">Paid</option>
                                             <option value="1">Unpaid</option>
                                             <option value="2">Cancelled</option>
                                             <option value="3">Refund</option>
                                          </select>
                                          <!--end::Select-->
                                       </div>
                                       <!--end::Status-->
                                    </div>
                                    <!--begin::Filters-->
                                 </div>
                              </div>
                              <div class="card-body align-items-center justify-content-between py-5 gap-2 gap-md-5">
                                 <!--begin::Table-->
                                 <table class="table align-middle table-row-dashed fs-6 gy-3 tdmid" id="kt_datatable_client2">
                                    <!--begin::Table head-->
                                    <thead>
                                       <!--begin::Table row-->
                                       <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                          <th class="w-100px">Sales ID</th>
                                          <th class="w-100px">Item</th>
                                          <th class="w-150px">Date</th>
                                          <th class="w-100px">Price</th>
                                          <th class="text-end pe-3 min-w-100px">Status</th>
                                          <th class="text-end pe-0 min-w-75px">payment</th>
                                       </tr>
                                       <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">
                                       <tr>
                                          <!--end::Item-->
                                          <!--begin::Product ID-->
                                          <td>#XGY-356</td>
                                          <!--end::Product ID-->
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">Hair cut</span>
                                             <span class="text-gray-600 d-block fs-6">2 hours</span>
                                          </td>
                                          <!--begin::Date added-->
                                          <td>
                                             <span class="text-gray-800">
                                             02 Apr, 2023
                                             </span>
                                          </td>
                                          <!--end::Date added-->
                                          <!--begin::Price-->
                                          <td>$1,230</td>
                                          <!--end::Price-->
                                          <!--begin::Status-->
                                          <td class="text-end">
                                             <span class="badge py-3 px-4 fs-7 badge-light-success">Paid</span>
                                          </td>
                                          <!--end::Status-->
                                          <!--begin::Qty-->
                                          <td class="text-end">
                                             <span class="text-dark fw-bold">Cash</span>
                                          </td>
                                          <!--end::Qty-->
                                       </tr>
                                       <tr>
                                          <!--end::Item-->
                                          <!--begin::Product ID-->
                                          <td>#YHD-047</td>
                                          <!--end::Product ID-->
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">Hair cut</span>
                                             <span class="text-gray-600 d-block fs-6">2 hours</span>
                                          </td>
                                          <!--begin::Date added-->
                                          <td>
                                             <span class="text-gray-800">
                                             01 Apr, 2023
                                             </span>
                                          </td>
                                          <!--end::Date added-->
                                          <!--begin::Price-->
                                          <td>$1,060</td>
                                          <!--end::Price-->
                                          <!--begin::Status-->
                                          <td class="text-end">
                                             <span class="badge py-3 px-4 fs-7 badge-light-secondary">Unpaid</span>
                                          </td>
                                          <!--end::Status-->
                                          <!--begin::Qty-->
                                          <td class="text-end">
                                             <span class="text-dark fw-bold">Voucher</span>
                                          </td>
                                          <!--end::Qty-->
                                       </tr>
                                       <tr>
                                          <!--end::Item-->
                                          <!--begin::Product ID-->
                                          <td>#SRR-678</td>
                                          <!--end::Product ID-->
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">Hair cut</span>
                                             <span class="text-gray-600 d-block fs-6">2 hours</span>
                                          </td>
                                          <!--begin::Date added-->
                                          <td>
                                             <span class="text-gray-800">
                                             24 Mar, 2023
                                             </span>
                                          </td>
                                          <!--end::Date added-->
                                          <!--begin::Price-->
                                          <td>$64</td>
                                          <!--end::Price-->
                                          <!--begin::Status-->
                                          <td class="text-end">
                                             <span class="badge py-3 px-4 fs-7 badge-light-danger">Cancelled</span>
                                          </td>
                                          <!--end::Status-->
                                          <!--begin::Qty-->
                                          <td class="text-end">
                                             <span class="text-dark fw-bold">Giftcard</span>
                                          </td>
                                          <!--end::Qty-->
                                       </tr>
                                       <tr>
                                          <!--end::Item-->
                                          <!--begin::Product ID-->
                                          <td>#PXF-578</td>
                                          <!--end::Product ID-->
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">Hair cut</span>
                                             <span class="text-gray-600 d-block fs-6">2 hours</span>
                                          </td>
                                          <!--begin::Date added-->
                                          <td>
                                             <span class="text-gray-800">
                                             24 Mar, 2023
                                             </span>
                                          </td>
                                          <!--end::Date added-->
                                          <!--begin::Price-->
                                          <td>$1,060</td>
                                          <!--end::Price-->
                                          <!--begin::Status-->
                                          <td class="text-end">
                                             <span class="badge py-3 px-4 fs-7 badge-light-warning">Refund</span>
                                          </td>
                                          <!--end::Status-->
                                          <!--begin::Qty-->
                                          <td class="text-end">
                                             <span class="text-dark fw-bold">Card</span>
                                          </td>
                                          <!--end::Qty-->
                                       </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                 </table>
                                 <!--end::Table-->
                              </div>
                           </div>
                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="clientsmembership" role="tabpanel">
                           <div class="card card-flush">
                              <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                 <!--begin::Card title-->
                                 <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                       <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                       <input type="text" data-kt-filter-cl3="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search">
                                    </div>
                                    <!--end::Search-->
                                 </div>
                                 <!--end::Card title-->
                                 <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <!--begin::Filter-->
                                    <div class="w-150px">
                                       <!--begin::Select2-->
                                       <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
                                          <option></option>
                                          <option value="all">Active</option>
                                          <option value="active">Expiring</option>
                                          <option value="locked">Expired</option>
                                       </select>
                                       <!--end::Select2-->
                                    </div>
                                    <!--end::Filter-->
                                 </div>
                              </div>
                              <div class="card-body align-items-center justify-content-between py-5 gap-2 gap-md-5">
                                 <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_datatable_client3">
                                    <!--begin::Table head-->
                                    <thead>
                                       <!--begin::Table row-->
                                       <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                          <th class="w-250px">Membership</th>
                                          <th class="w-150px">Value left</th>
                                          <th class="w-100px">Valid till</th>
                                          <th class="w-100px"></th>
                                       </tr>
                                       <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600 alntop">
                                       <tr>
                                          <td>
                                             <a href="#" id="kt_drawer_example_permanent_toggle2">
                                                <div class="d-flex gap-3">
                                                   <div data-qa="color-sample-blue" class="color-ind">
                                                      <div class="color-ind-single blue divlg" title="blue">
                                                         <img src="{{ asset('/public/partner/assets/media/svg/voucher.svg') }}">
                                                      </div>
                                                   </div>
                                                   <div class="d-flex justify-content-start flex-column">
                                                      <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Membership1</span>
                                                      <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                      lorem ipsum dolar sit amet
                                                      </span>
                                                   </div>
                                                </div>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">$200</span>
                                             <span class="text-gray-600 d-block fs-6">$1200</span>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">08 Nov 2024</span>
                                             <span class="badge badge-success">Active</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                             <i class="ki-duotone ki-black-right fs-2 text-gray-500" id="kt_drawer_example_permanent_toggle3"></i>               
                                             </a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <a href="#" id="kt_drawer_example_permanent_toggle2">
                                                <div class="d-flex gap-3">
                                                   <div data-qa="color-sample-dark" class="color-ind">
                                                      <div class="color-ind-single dark divlg" title="dark">
                                                         <img src="{{ asset('/public/partner/assets/media/svg/voucher.svg') }}">
                                                      </div>
                                                   </div>
                                                   <div class="d-flex justify-content-start flex-column">
                                                      <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Membership2</span>
                                                      <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                      lorem ipsum dolar sit amet
                                                      </span>
                                                   </div>
                                                </div>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">$200</span>
                                             <span class="text-gray-600 d-block fs-6">$1200</span>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">08 Nov 2024</span>
                                             <span class="badge badge-secondary">Expired</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                             <i class="ki-duotone ki-black-right fs-2 text-gray-500" id="kt_drawer_example_permanent_toggle3"></i>               
                                             </a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <a href="#" id="kt_drawer_example_permanent_toggle2">
                                                <div class="d-flex gap-3">
                                                   <div data-qa="color-sample-green" class="color-ind">
                                                      <div class="color-ind-single green divlg" title="green">
                                                         <img src="{{ asset('/public/partner/assets/media/svg/voucher.svg') }}">
                                                      </div>
                                                   </div>
                                                   <div class="d-flex justify-content-start flex-column">
                                                      <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Membership3</span>
                                                      <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                      lorem ipsum dolar sit amet
                                                      </span>
                                                   </div>
                                                </div>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">$200</span>
                                             <span class="text-gray-600 d-block fs-6">$1200</span>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">08 Nov 2024</span>
                                             <span class="badge badge-success">Active</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                             <i class="ki-duotone ki-black-right fs-2 text-gray-500" id="kt_drawer_example_permanent_toggle3"></i>               
                                             </a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <a href="#" id="kt_drawer_example_permanent_toggle2">
                                                <div class="d-flex gap-3">
                                                   <div data-qa="color-sample-orange" class="color-ind">
                                                      <div class="color-ind-single orange divlg" title="orange">
                                                         <img src="{{ asset('/public/partner/assets/media/svg/voucher.svg') }}">
                                                      </div>
                                                   </div>
                                                   <div class="d-flex justify-content-start flex-column">
                                                      <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Membership4</span>
                                                      <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                      lorem ipsum dolar sit amet
                                                      </span>
                                                   </div>
                                                </div>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">$200</span>
                                             <span class="text-gray-600 d-block fs-6">$1200</span>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">08 Nov 2024</span>
                                             <span class="badge badge-secondary">Expired</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                             <i class="ki-duotone ki-black-right fs-2 text-gray-500" id="kt_drawer_example_permanent_toggle3"></i>               
                                             </a>
                                          </td>
                                       </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                 </table>
                              </div>
                           </div>
                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="clientsvouchers" role="tabpanel">
                           <div class="card card-flush">
                              <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                 <!--begin::Card title-->
                                 <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                       <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                       <input type="text" data-kt-filter-cl4="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search">
                                    </div>
                                    <!--end::Search-->
                                 </div>
                                 <!--end::Card title-->
                                 <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <!--begin::Filter-->
                                    <div class="w-150px">
                                       <!--begin::Select2-->
                                       <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
                                          <option></option>
                                          <option value="all">Active</option>
                                          <option value="active">Expiring</option>
                                          <option value="locked">Expired</option>
                                       </select>
                                       <!--end::Select2-->
                                    </div>
                                    <!--end::Filter-->
                                 </div>
                              </div>
                              <div class="card-body align-items-center justify-content-between py-5 gap-2 gap-md-5">
                                 <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_datatable_client4">
                                    <!--begin::Table head-->
                                    <thead>
                                       <!--begin::Table row-->
                                       <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                          <th class="w-250px">Vouchers</th>
                                          <th class="w-100px">Price</th>
                                          <th class="w-100px">Sessions</th>
                                          <th class="w-100px">Valid Till</th>
                                          <th class="w-100px"></th>
                                       </tr>
                                       <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600 alntop">
                                       <tr>
                                          <td>
                                             <a href="#" id="kt_drawer_example_permanent_toggle4">
                                                <div class="d-flex gap-3">
                                                   <div data-qa="color-sample-blue" class="color-ind">
                                                      <div class="color-ind-single blue" title="blue">
                                                      </div>
                                                   </div>
                                                   <div class="d-flex justify-content-start flex-column">
                                                      <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Voucher1</span>
                                                      <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                      Hair cut, shampoo, blow dye
                                                      </span>
                                                   </div>
                                                </div>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">$200</span>
                                             <span class="text-gray-600 d-block fs-6">$1200</span>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">6</span>
                                             <span class="text-gray-600 d-block fs-6">Total:10</span>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">08 Nov 2024</span>
                                             <span class="badge badge-success">Active</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                             <i class="ki-duotone ki-black-right fs-2 text-gray-500" id="kt_drawer_example_permanent_toggle4"></i>               
                                             </a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <a href="#" id="kt_drawer_example_permanent_toggle4">
                                                <div class="d-flex gap-3">
                                                   <div data-qa="color-sample-dark" class="color-ind">
                                                      <div class="color-ind-single dark" title="dark">
                                                      </div>
                                                   </div>
                                                   <div class="d-flex justify-content-start flex-column">
                                                      <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Voucher2</span>
                                                      <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                      Facial, D tan
                                                      </span>
                                                   </div>
                                                </div>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">$200</span>
                                             <span class="text-gray-600 d-block fs-6">$1200</span>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">6</span>
                                             <span class="text-gray-600 d-block fs-6">Total:10</span>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">08 Nov 2024</span>
                                             <span class="badge badge-secondary">Expired</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                             <i class="ki-duotone ki-black-right fs-2 text-gray-500" id="kt_drawer_example_permanent_toggle4"></i>               
                                             </a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <a href="#" id="kt_drawer_example_permanent_toggle4">
                                                <div class="d-flex gap-3">
                                                   <div data-qa="color-sample-green" class="color-ind">
                                                      <div class="color-ind-single green" title="green">
                                                      </div>
                                                   </div>
                                                   <div class="d-flex justify-content-start flex-column">
                                                      <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Voucher3</span>
                                                      <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                      Manicure, Pedicure, Makeup
                                                      </span>
                                                   </div>
                                                </div>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">$200</span>
                                             <span class="text-gray-600 d-block fs-6">$1200</span>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">6</span>
                                             <span class="text-gray-600 d-block fs-6">Total:10</span>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">08 Nov 2024</span>
                                             <span class="badge badge-success">Active</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                             <i class="ki-duotone ki-black-right fs-2 text-gray-500" id="kt_drawer_example_permanent_toggle4"></i>               
                                             </a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <a href="#" id="kt_drawer_example_permanent_toggle4">
                                                <div class="d-flex gap-3">
                                                   <div data-qa="color-sample-orange" class="color-ind">
                                                      <div class="color-ind-single orange" title="orange">
                                                      </div>
                                                   </div>
                                                   <div class="d-flex justify-content-start flex-column">
                                                      <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Voucher4</span>
                                                      <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                      Straightening, Rebonding
                                                      </span>
                                                   </div>
                                                </div>
                                             </a>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">$200</span>
                                             <span class="text-gray-600 d-block fs-6">$1200</span>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">6</span>
                                             <span class="text-gray-600 d-block fs-6">Total:10</span>
                                          </td>
                                          <td>
                                             <span class="text-gray-800 fw-bold fs-4">08 Nov 2024</span>
                                             <span class="badge badge-secondary">Expired</span>
                                          </td>
                                          <td class="text-end">
                                             <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                             <i class="ki-duotone ki-black-right fs-2 text-gray-500" id="kt_drawer_example_permanent_toggle4"></i>               
                                             </a>
                                          </td>
                                       </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                 </table>
                              </div>
                           </div>
                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="clientsactivity" role="tabpanel">
                           <div class="card card-flush">
                              <div class="card-header align-items-center py-5 pb-0 gap-2 gap-md-5">
                                 <div class="card-toolbar flex-row-fluid gap-5">
                                    <!--begin::Filter menu-->
                                    <div class="m-0">
                                       <!--begin::Menu toggle-->
                                       <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                       <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>Filter</a>
                                       <!--end::Menu toggle-->
                                       <!--begin::Menu 1-->
                                       <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641d50f7884f2">
                                          <!--begin::Header-->
                                          <div class="px-7 py-5">
                                             <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                          </div>
                                          <!--end::Header-->
                                          <!--begin::Menu separator-->
                                          <div class="separator border-gray-200"></div>
                                          <!--end::Menu separator-->
                                          <!--begin::Form-->
                                          <div class="px-7 py-5">
                                             <!--begin::Input group-->
                                             <div class="mb-10">
                                                <!--begin::Input-->
                                                <div>
                                                   <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option">
                                                      <option></option>
                                                      <option value="1">Online or walk-in</option>
                                                      <option value="2">Gender</option>
                                                      <option value="3">Status</option>
                                                   </select>
                                                </div>
                                                <!--end::Input-->
                                             </div>
                                             <!--end::Input group-->
                                             <!--begin::Actions-->
                                             <div class="d-flex justify-content-end">
                                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                             </div>
                                             <!--end::Actions-->
                                          </div>
                                          <!--end::Form-->
                                       </div>
                                       <!--end::Menu 1-->
                                    </div>
                                    <!--end::Filter menu-->
                                 </div>
                              </div>
                              <div class="card-body">
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
                                             <div class="fs-5 fw-semibold mb-2">16 june, 2023</div>
                                             <!--end::Title-->
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-14.jpg') }}" alt="img" />
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
                                             <div class="fs-5 fw-semibold mb-2">16 june, 2023</div>
                                             <!--end::Title-->
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-1.jpg') }}" alt="img" />
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
                                             <div class="fs-5 fw-semibold mb-2">16 june, 2023</div>
                                             <!--end::Title-->
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-23.jpg') }}" alt="img" />
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
                                             <div class="fs-5 fw-semibold mb-2">16 june, 2023</div>
                                             <!--end::Title-->
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-14.jpg') }}" alt="img" />
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
                                             <div class="fs-5 fw-semibold mb-2">16 june, 2023</div>
                                             <!--end::Title-->
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-2.jpg') }}" alt="img" />
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
                                             <div class="fs-5 fw-semibold mb-2">16 june, 2023</div>
                                             <!--end::Title-->
                                             <!--begin::Title-->
                                             <div class="fs-5 fw-semibold mb-2">New case
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project
                                             </div>
                                             <!--end::Title-->
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
                                             <div class="fs-5 fw-semibold mb-2">16 june, 2023</div>
                                             <!--end::Title-->
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-4.jpg') }}" alt="img" />
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
                                             <div class="fs-5 fw-semibold mb-2">16 june, 2023</div>
                                             <!--end::Title-->
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
                           </div>
                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="clientsreviews" role="tabpanel">
                           <div class="card card-flush">
                              <div class="card-body">
                                 <!--begin::Filter menu-->
                                 <div class="m-0 d-flex justify-content-end">
                                    <!--begin::Menu toggle-->
                                    <a href="#" class="btn btn-sm btn-light btn-flex btn-color-gray-700 fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    </i>Filter</a>
                                    <!--end::Menu toggle-->
                                    <!--begin::Menu 1-->
                                    <div class="menu menu-sub menu-sub-dropdown w-400px w-md-500px" data-kt-menu="true" id="kt_menu_641d517c39798">
                                       <!--begin::Header-->
                                       <div class="px-7 py-5">
                                          <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                       </div>
                                       <!--end::Header-->
                                       <!--begin::Menu separator-->
                                       <div class="separator border-gray-200"></div>
                                       <!--end::Menu separator-->
                                       <!--begin::Form-->
                                       <div class="px-7 py-5">
                                          <!--begin::Input group-->
                                          <div class="mb-10">
                                             <!--begin::Label-->
                                             <label class="form-label fw-semibold">Locations</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <div>
                                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="All locations" data-dropdown-parent="#kt_menu_641d517c39798" data-allow-clear="true">
                                                   <option></option>
                                                   <option value="1">Location1</option>
                                                   <option value="2">Location2</option>
                                                   <option value="2">Location3</option>
                                                </select>
                                             </div>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                          <!--begin::Input group-->
                                          <div class="mb-10">
                                             <!--begin::Label-->
                                             <label class="form-label fw-semibold">Team Members</label>
                                             <!--end::Label-->
                                             <div class="form-floating border rounded">
                                                <select class="form-select form-select-transparent kt_docs_select2_users" data-placeholder="Select an option">
                                                   <option></option>
                                                   <option value="0" data-kt-select2-user="assets/media/avatars/300-25.jpg') }}">Brian Cox</option>
                                                   <option value="1" data-kt-select2-user="assets/media/avatars/300-9.jpg') }}">Francis Mitcham</option>
                                                   <option value="0" data-kt-select2-user="assets/media/avatars/300-23.jpg') }}">Dan Wilson</option>
                                                   <option value="1" data-kt-select2-user="assets/media/avatars/300-12.jpg') }}">Ana Crown</option>
                                                   <option value="0" data-kt-select2-user="assets/media/avatars/300-13.jpg') }}">John Miller</option>
                                                   <option value="1" data-kt-select2-user="assets/media/avatars/300-21.jpg') }}">Ethan Wilder</option>
                                                   <option value="0" data-kt-select2-user="assets/media/avatars/300-6.jpg') }}">Emma Smith</option>
                                                   <option value="1" data-kt-select2-user="assets/media/avatars/300-1.jpg') }}">Max Smith</option>
                                                </select>
                                             </div>
                                          </div>
                                          <!--end::Input group-->
                                          <!--begin::Input group-->
                                          <div class="mb-10">
                                             <!--begin::Label-->
                                             <label class="form-label fw-semibold">Rating</label>
                                             <!--end::Label-->
                                             <!--begin::Options-->
                                             <div class="row revtab">
                                                <div class="col-4">
                                                   <!--begin::Options-->
                                                   <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                   <input class="form-check-input" type="checkbox" value="1" onchange="revrating(this)" />
                                                   <span class="form-check-label">All</span>
                                                   </label>
                                                   <!--end::Options-->
                                                </div>
                                                <div class="col-4">
                                                   <!--begin::Options-->
                                                   <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                   <input class="form-check-input" type="checkbox" value="2" onchange="revrating(this)" />
                                                   <span class="form-check-label">5 stars</span>
                                                   </label>
                                                   <!--end::Options-->
                                                </div>
                                                <div class="col-4">
                                                   <!--begin::Options-->
                                                   <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                   <input class="form-check-input" type="checkbox" value="3" onchange="revrating(this)" />
                                                   <span class="form-check-label">4 stars</span>
                                                   </label>
                                                   <!--end::Options-->
                                                </div>
                                                <div class="col-4">
                                                   <!--begin::Options-->
                                                   <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                   <input class="form-check-input" type="checkbox" value="4" onchange="revrating(this)" />
                                                   <span class="form-check-label">3 stars</span>
                                                   </label>
                                                   <!--end::Options-->
                                                </div>
                                                <div class="col-4">
                                                   <!--begin::Options-->
                                                   <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                   <input class="form-check-input" type="checkbox" value="5" onchange="revrating(this)" />
                                                   <span class="form-check-label">2 stars</span>
                                                   </label>
                                                   <!--end::Options-->
                                                </div>
                                                <div class="col-4">
                                                   <!--begin::Options-->
                                                   <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                   <input class="form-check-input" type="checkbox" value="6" onchange="revrating(this)" />
                                                   <span class="form-check-label">1 star</span>
                                                   </label>
                                                   <!--end::Options-->
                                                </div>
                                             </div>
                                             <!--end::Options-->
                                          </div>
                                          <!--end::Input group-->
                                          <div class="mb-10">
                                             <a href="">Clear all filters</a>
                                          </div>
                                          <!--begin::Actions-->
                                          <div class="d-flex justify-content-end">
                                             <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                             <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                          </div>
                                          <!--end::Actions-->
                                       </div>
                                       <!--end::Form-->
                                    </div>
                                    <!--end::Menu 1-->
                                 </div>
                                 <!--end::Filter menu-->
                                 <div class="row">
                                    <div class="col-12">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex flex-column px-9 brdr mt-10">
                                          <!--begin::Section-->
                                          <div class="pt-10 pb-0">
                                             <!--begin::Title-->
                                             <h3 class="text-dark text-center fw-bold">No reviews</h3>
                                             <!--end::Title-->
                                             <!--begin::Text-->
                                             <div class="text-center text-gray-600 fw-semibold pt-1">This client hasn't left any reviews.
                                             </div>
                                             <!--end::Text-->
                                          </div>
                                          <!--end::Section-->
                                          <!--begin::Illustration-->
                                          <div class="text-center px-4">
                                             <div class="rating justify-content-center pb-10">
                                                <div class="rating-label checked">
                                                   <i class="ki-duotone ki-star fs-1x"></i>
                                                </div>
                                             </div>
                                          </div>
                                          <!--end::Illustration-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <div class="col-md-6">
                                       <!--begin::Feeds Widget 2-->
                                       <div class="card mb-5 mb-xl-8">
                                          <!--begin::Body-->
                                          <div class="card-body pb-0">
                                             <!--begin::Header-->
                                             <div class="d-flex align-items-center mb-5">
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center flex-grow-1">
                                                   <!--begin::Avatar-->
                                                   <div class="symbol symbol-45px me-5">
                                                      <img src="{{ asset('/public/partner/assets/media/avatars/300-23.jpg') }}" alt="" />
                                                   </div>
                                                   <!--end::Avatar-->
                                                   <!--begin::Info-->
                                                   <div class="d-flex flex-column">
                                                      <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Nick Logan</a>
                                                      <span class="text-gray-400 fw-bold">PHP, SQLite, Artisan CLI</span>
                                                   </div>
                                                   <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Menu-->
                                                <div class="my-0">
                                                   <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                   <i class="ki-duotone ki-category fs-6">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                   <span class="path3"></span>
                                                   <span class="path4"></span>
                                                   </i>
                                                   </button>
                                                   <!--begin::Menu 2-->
                                                   <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu separator-->
                                                      <div class="separator mb-3 opacity-75"></div>
                                                      <!--end::Menu separator-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="#" class="menu-link px-3">New Ticket</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="#" class="menu-link px-3">New Customer</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                         <!--begin::Menu item-->
                                                         <a href="#" class="menu-link px-3">
                                                         <span class="menu-title">New Group</span>
                                                         <span class="menu-arrow"></span>
                                                         </a>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu sub-->
                                                         <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                               <a href="#" class="menu-link px-3">Admin Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                               <a href="#" class="menu-link px-3">Staff Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                               <a href="#" class="menu-link px-3">Member Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                         </div>
                                                         <!--end::Menu sub-->
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="#" class="menu-link px-3">New Contact</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu separator-->
                                                      <div class="separator mt-3 opacity-75"></div>
                                                      <!--end::Menu separator-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                         </div>
                                                      </div>
                                                      <!--end::Menu item-->
                                                   </div>
                                                   <!--end::Menu 2-->
                                                </div>
                                                <!--end::Menu-->
                                             </div>
                                             <!--end::Header-->
                                             <!--begin::Post-->
                                             <div class="mb-5">
                                                <!--begin::Text-->
                                                <p class="text-gray-800 fw-normal mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</p>
                                                <!--end::Text-->
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center mb-5">
                                                   <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                                   <i class="ki-duotone ki-message-text-2 fs-2">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                   <span class="path3"></span>
                                                   </i>120</a>
                                                   <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                                   <i class="ki-duotone ki-heart fs-2">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                   </i>15</a>
                                                </div>
                                                <!--end::Toolbar-->
                                             </div>
                                             <!--end::Post-->
                                             <!--begin::Separator-->
                                             <div class="separator mb-4"></div>
                                             <!--end::Separator-->
                                             <!--begin::Reply input-->
                                             <form class="position-relative mb-6">
                                                <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
                                                <div class="position-absolute top-0 end-0 me-n5">
                                                   <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                                   <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
                                                   </span>
                                                   <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                                   <i class="ki-duotone ki-geolocation fs-2 mb-3">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                   </i>
                                                   </span>
                                                </div>
                                             </form>
                                             <!--edit::Reply input-->
                                          </div>
                                          <!--end::Body-->
                                       </div>
                                       <!--end::Feeds Widget 2-->
                                    </div>
                                    <div class="col-md-6">
                                       <!--begin::Feeds Widget 2-->
                                       <div class="card mb-5 mb-xl-8">
                                          <!--begin::Body-->
                                          <div class="card-body pb-0">
                                             <!--begin::Header-->
                                             <div class="d-flex align-items-center mb-5">
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center flex-grow-1">
                                                   <!--begin::Avatar-->
                                                   <div class="symbol symbol-45px me-5">
                                                      <img src="{{ asset('/public/partner/assets/media/avatars/300-23.jpg') }}" alt="" />
                                                   </div>
                                                   <!--end::Avatar-->
                                                   <!--begin::Info-->
                                                   <div class="d-flex flex-column">
                                                      <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Nick Logan</a>
                                                      <span class="text-gray-400 fw-bold">PHP, SQLite, Artisan CLI</span>
                                                   </div>
                                                   <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Menu-->
                                                <div class="my-0">
                                                   <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                   <i class="ki-duotone ki-category fs-6">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                   <span class="path3"></span>
                                                   <span class="path4"></span>
                                                   </i>
                                                   </button>
                                                   <!--begin::Menu 2-->
                                                   <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu separator-->
                                                      <div class="separator mb-3 opacity-75"></div>
                                                      <!--end::Menu separator-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="#" class="menu-link px-3">New Ticket</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="#" class="menu-link px-3">New Customer</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                         <!--begin::Menu item-->
                                                         <a href="#" class="menu-link px-3">
                                                         <span class="menu-title">New Group</span>
                                                         <span class="menu-arrow"></span>
                                                         </a>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu sub-->
                                                         <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                               <a href="#" class="menu-link px-3">Admin Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                               <a href="#" class="menu-link px-3">Staff Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                               <a href="#" class="menu-link px-3">Member Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                         </div>
                                                         <!--end::Menu sub-->
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="#" class="menu-link px-3">New Contact</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu separator-->
                                                      <div class="separator mt-3 opacity-75"></div>
                                                      <!--end::Menu separator-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                         </div>
                                                      </div>
                                                      <!--end::Menu item-->
                                                   </div>
                                                   <!--end::Menu 2-->
                                                </div>
                                                <!--end::Menu-->
                                             </div>
                                             <!--end::Header-->
                                             <!--begin::Post-->
                                             <div class="mb-5">
                                                <!--begin::Text-->
                                                <p class="text-gray-800 fw-normal mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</p>
                                                <!--end::Text-->
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center mb-5">
                                                   <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                                   <i class="ki-duotone ki-message-text-2 fs-2">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                   <span class="path3"></span>
                                                   </i>120</a>
                                                   <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                                   <i class="ki-duotone ki-heart fs-2">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                   </i>15</a>
                                                </div>
                                                <!--end::Toolbar-->
                                             </div>
                                             <!--end::Post-->
                                             <!--begin::Separator-->
                                             <div class="separator mb-4"></div>
                                             <!--end::Separator-->
                                             <!--begin::Reply input-->
                                             <form class="position-relative mb-6">
                                                <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
                                                <div class="position-absolute top-0 end-0 me-n5">
                                                   <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                                   <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
                                                   </span>
                                                   <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                                   <i class="ki-duotone ki-geolocation fs-2 mb-3">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                   </i>
                                                   </span>
                                                </div>
                                             </form>
                                             <!--edit::Reply input-->
                                          </div>
                                          <!--end::Body-->
                                       </div>
                                       <!--end::Feeds Widget 2-->
                                    </div>
                                    <div class="col-md-6">
                                       <!--begin::Feeds Widget 2-->
                                       <div class="card mb-5 mb-xl-8">
                                          <!--begin::Body-->
                                          <div class="card-body pb-0">
                                             <!--begin::Header-->
                                             <div class="d-flex align-items-center mb-5">
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center flex-grow-1">
                                                   <!--begin::Avatar-->
                                                   <div class="symbol symbol-45px me-5">
                                                      <img src="{{ asset('/public/partner/assets/media/avatars/300-23.jpg') }}" alt="" />
                                                   </div>
                                                   <!--end::Avatar-->
                                                   <!--begin::Info-->
                                                   <div class="d-flex flex-column">
                                                      <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Nick Logan</a>
                                                      <span class="text-gray-400 fw-bold">PHP, SQLite, Artisan CLI</span>
                                                   </div>
                                                   <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Menu-->
                                                <div class="my-0">
                                                   <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                   <i class="ki-duotone ki-category fs-6">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                   <span class="path3"></span>
                                                   <span class="path4"></span>
                                                   </i>
                                                   </button>
                                                   <!--begin::Menu 2-->
                                                   <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu separator-->
                                                      <div class="separator mb-3 opacity-75"></div>
                                                      <!--end::Menu separator-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="#" class="menu-link px-3">New Ticket</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="#" class="menu-link px-3">New Customer</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                         <!--begin::Menu item-->
                                                         <a href="#" class="menu-link px-3">
                                                         <span class="menu-title">New Group</span>
                                                         <span class="menu-arrow"></span>
                                                         </a>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu sub-->
                                                         <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                               <a href="#" class="menu-link px-3">Admin Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                               <a href="#" class="menu-link px-3">Staff Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                               <a href="#" class="menu-link px-3">Member Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                         </div>
                                                         <!--end::Menu sub-->
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="#" class="menu-link px-3">New Contact</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu separator-->
                                                      <div class="separator mt-3 opacity-75"></div>
                                                      <!--end::Menu separator-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                         </div>
                                                      </div>
                                                      <!--end::Menu item-->
                                                   </div>
                                                   <!--end::Menu 2-->
                                                </div>
                                                <!--end::Menu-->
                                             </div>
                                             <!--end::Header-->
                                             <!--begin::Post-->
                                             <div class="mb-5">
                                                <!--begin::Text-->
                                                <p class="text-gray-800 fw-normal mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</p>
                                                <!--end::Text-->
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center mb-5">
                                                   <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                                   <i class="ki-duotone ki-message-text-2 fs-2">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                   <span class="path3"></span>
                                                   </i>120</a>
                                                   <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                                   <i class="ki-duotone ki-heart fs-2">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                   </i>15</a>
                                                </div>
                                                <!--end::Toolbar-->
                                             </div>
                                             <!--end::Post-->
                                             <!--begin::Separator-->
                                             <div class="separator mb-4"></div>
                                             <!--end::Separator-->
                                             <!--begin::Reply input-->
                                             <form class="position-relative mb-6">
                                                <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
                                                <div class="position-absolute top-0 end-0 me-n5">
                                                   <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                                   <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
                                                   </span>
                                                   <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                                   <i class="ki-duotone ki-geolocation fs-2 mb-3">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                   </i>
                                                   </span>
                                                </div>
                                             </form>
                                             <!--edit::Reply input-->
                                          </div>
                                          <!--end::Body-->
                                       </div>
                                       <!--end::Feeds Widget 2-->
                                    </div>
                                    <div class="col-md-6">
                                       <!--begin::Feeds Widget 2-->
                                       <div class="card mb-5 mb-xl-8">
                                          <!--begin::Body-->
                                          <div class="card-body pb-0">
                                             <!--begin::Header-->
                                             <div class="d-flex align-items-center mb-5">
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center flex-grow-1">
                                                   <!--begin::Avatar-->
                                                   <div class="symbol symbol-45px me-5">
                                                      <img src="{{ asset('/public/partner/assets/media/avatars/300-23.jpg') }}" alt="" />
                                                   </div>
                                                   <!--end::Avatar-->
                                                   <!--begin::Info-->
                                                   <div class="d-flex flex-column">
                                                      <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Nick Logan</a>
                                                      <span class="text-gray-400 fw-bold">PHP, SQLite, Artisan CLI</span>
                                                   </div>
                                                   <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Menu-->
                                                <div class="my-0">
                                                   <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                   <i class="ki-duotone ki-category fs-6">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                   <span class="path3"></span>
                                                   <span class="path4"></span>
                                                   </i>
                                                   </button>
                                                   <!--begin::Menu 2-->
                                                   <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu separator-->
                                                      <div class="separator mb-3 opacity-75"></div>
                                                      <!--end::Menu separator-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="#" class="menu-link px-3">New Ticket</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="#" class="menu-link px-3">New Customer</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                         <!--begin::Menu item-->
                                                         <a href="#" class="menu-link px-3">
                                                         <span class="menu-title">New Group</span>
                                                         <span class="menu-arrow"></span>
                                                         </a>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu sub-->
                                                         <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                               <a href="#" class="menu-link px-3">Admin Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                               <a href="#" class="menu-link px-3">Staff Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                               <a href="#" class="menu-link px-3">Member Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                         </div>
                                                         <!--end::Menu sub-->
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="#" class="menu-link px-3">New Contact</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu separator-->
                                                      <div class="separator mt-3 opacity-75"></div>
                                                      <!--end::Menu separator-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                         </div>
                                                      </div>
                                                      <!--end::Menu item-->
                                                   </div>
                                                   <!--end::Menu 2-->
                                                </div>
                                                <!--end::Menu-->
                                             </div>
                                             <!--end::Header-->
                                             <!--begin::Post-->
                                             <div class="mb-5">
                                                <!--begin::Text-->
                                                <p class="text-gray-800 fw-normal mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</p>
                                                <!--end::Text-->
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center mb-5">
                                                   <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                                   <i class="ki-duotone ki-message-text-2 fs-2">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                   <span class="path3"></span>
                                                   </i>120</a>
                                                   <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                                   <i class="ki-duotone ki-heart fs-2">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                   </i>15</a>
                                                </div>
                                                <!--end::Toolbar-->
                                             </div>
                                             <!--end::Post-->
                                             <!--begin::Separator-->
                                             <div class="separator mb-4"></div>
                                             <!--end::Separator-->
                                             <!--begin::Reply input-->
                                             <form class="position-relative mb-6">
                                                <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
                                                <div class="position-absolute top-0 end-0 me-n5">
                                                   <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                                   <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i>
                                                   </span>
                                                   <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                                   <i class="ki-duotone ki-geolocation fs-2 mb-3">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                   </i>
                                                   </span>
                                                </div>
                                             </form>
                                             <!--edit::Reply input-->
                                          </div>
                                          <!--end::Body-->
                                       </div>
                                       <!--end::Feeds Widget 2-->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="clientsinfo" role="tabpanel">
                           <div class="card card-flush">
                              <div class="card-body">
                                 <div class="d-flex flex-column gap-8">
                                    <div class="d-flex gap-4 align-items-baseline">
                                       <h3 class="card-title align-items-start flex-column mb-0">
                                          <span class="card-label fw-bold text-gray-800 mb-4">Phone no.</span>
                                       </h3>
                                       <span class="text-gray-400 fw-semibold d-block fs-6">
                                       7584698542
                                       </span>
                                    </div>
                                    <div class="d-flex gap-4 align-items-baseline">
                                       <h3 class="card-title align-items-start flex-column mb-0">
                                          <span class="card-label fw-bold text-gray-800 mb-4">Email</span>
                                       </h3>
                                       <span class="text-gray-400 fw-semibold d-block fs-6">
                                       client@gmail.com
                                       </span>
                                    </div>
                                    <div class="d-flex gap-4 align-items-baseline">
                                       <h3 class="card-title align-items-start flex-column mb-0">
                                          <span class="card-label fw-bold text-gray-800 mb-4">Gender</span>
                                       </h3>
                                       <span class="text-gray-400 fw-semibold d-block fs-6">
                                       Male
                                       </span>
                                    </div>
                                    <div class="d-flex gap-4 align-items-baseline">
                                       <h3 class="card-title align-items-start flex-column mb-0">
                                          <span class="card-label fw-bold text-gray-800 mb-4">Date of birth</span>
                                       </h3>
                                       <span class="text-gray-400 fw-semibold d-block fs-6">
                                       15 March, 2004
                                       </span>
                                    </div>
                                    <div class="d-flex gap-4 align-items-baseline">
                                       <h3 class="card-title align-items-start flex-column mb-0">
                                          <span class="card-label fw-bold text-gray-800 mb-4">Address</span>
                                       </h3>
                                       <span class="text-gray-400 fw-semibold d-block fs-6">
                                       lorem ipsum dolar sit amet, lorem ipsum dolar sit amet
                                       </span>
                                    </div>
                                 </div>
                                 <div class="card-body brdr mt-10">
                                    <div class="d-flex justify-content-between">
                                       <span class="card-label fw-bold text-gray-800 fs-3">Client notes</span>
                                       <!--begin::Filter menu-->
                                       <div class="m-0 d-flex justify-content-end">
                                          <!--begin::Menu toggle-->
                                          <a href="#" class="btn btn-sm btn-primary px-6" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">add notes</a>
                                          <!--end::Menu toggle-->
                                          <!--begin::Menu 1-->
                                          <div class="menu menu-sub menu-sub-dropdown w-400px w-md-500px" data-kt-menu="true" id="kt_menu_641d517c39798">
                                             <!--begin::Form-->
                                             <div class="px-7 py-5">
                                                <!--begin::basic autosize textarea-->
                                                <div class="rounded border d-flex flex-column p-10">
                                                   <label for="" class="form-label">Add notes</label>
                                                   <textarea class="form-control" data-kt-autosize="true"></textarea>
                                                </div>
                                                <!--end::basic autosize textarea-->
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-end">
                                                   <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                   <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                </div>
                                                <!--end::Actions-->
                                             </div>
                                             <!--end::Form-->
                                          </div>
                                          <!--end::Menu 1-->
                                       </div>
                                       <!--end::Filter menu-->
                                    </div>
                                    <hr class="my-8">
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-4 fw-bold mb-2">16 june, 2023</div>
                                       <!--end::Title-->
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">lorem ipsum dolar sit amet lorem ipsum dolar sit amet lorem ipsum dolar sit amet</div>
                                       <!--end::Title-->
                                       <div class="text-muted me-2 fs-7">Max allowed character is 140</div>
                                    </div>
                                    <div class="pe-3 mb-5">
                                       <!--begin::Title-->
                                       <div class="fs-4 fw-bold mb-2">16 june, 2023</div>
                                       <!--end::Title-->
                                       <!--begin::Title-->
                                       <div class="fs-5 fw-semibold mb-2">lorem ipsum dolar sit amet lorem ipsum dolar sit amet lorem ipsum dolar sit amet</div>
                                       <!--end::Title-->
                                       <div class="text-muted me-2 fs-7">Max allowed character is 140</div>
                                    </div>
                                    <div class="d-flex justify-content-end mt-6">
                                       <ul class="pagination">
                                          <li class="paginate_button page-item previous disabled" id="">
                                             <a href="#" tabindex="0" class="page-link">
                                             <i class="previous"></i>
                                             </a>
                                          </li>
                                          <li class="paginate_button page-item active">
                                             <a href="#" tabindex="0" class="page-link">1</a>
                                          </li>
                                          <li class="paginate_button page-item next disabled" id="">
                                             <a href="#" tabindex="0" class="page-link">
                                             <i class="next"></i>
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--end:::Tab pane-->
                     </div>
                     <!--end:::Tab content-->
                  </div>
                  <!--end::Content-->
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
            data-kt-drawer-width="{default:'300px', 'md': '500px'}"
            >
            <!--begin::Card-->
            <div class="card rounded-0 w-100 brlft">
               <!--begin::Card header-->
               <div class="card-header pe-5">
                  <!--begin::Title-->
                  <div class="card-title">
                     Membership Details
                  </div>
                  <!--end::Title-->
                  <!--begin::Card toolbar-->
                  <div class="card-toolbar">
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
               <div class="card-body hover-scroll-overlay-y pt-3">
                  <div class="card card-flush">
                     <div class="card-body brdr p-8">
                        <div data-qa="voucher-preview-color-blue" class="email_preview_in6 mb-0" id="clrbgdiv">
                           <span class="svgdiv" data-qa="location-avatar">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81 81">
                                 <g fill="none" fill-rule="evenodd">
                                    <path d="M0 0h81v81H0z"></path>
                                    <path stroke="#6C4BF6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M37.0488 56.2195v-9.3658h6.2439v9.3658"></path>
                                    <path stroke="#6C4BF6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M27.683 42.9512v13.2683h24.9755V42.9512M57.3415 34.3659c-.0631 2.6473-2.2588 4.743-4.9062 4.6829a4.9647 4.9647 0 01-4.0882-2.0964 5.0341 5.0341 0 01-8.1764 0 5.0341 5.0341 0 01-8.1764 0 4.9647 4.9647 0 01-4.0882 2.0964c-2.6473.0602-4.843-2.0356-4.9061-4.683L29.2439 25h21.8537l6.2439 9.3659z"></path>
                                 </g>
                              </svg>
                           </span>
                           <p class="pcls1 pcls6 pcls7 pcls8" data-qa="salon-name">YJ Salon</p>
                           <p class="pcls1 pcls2 pcls9" data-qa="location-description">Your location address will appear here</p>
                           <div class="email_preview_in7">
                              <p class="pcls1 pcls2" data-qa="value-text">Voucher value</p>
                              <div class="email_preview_in8">
                                 <p class="pcls1 pcls10" data-qa="remaining-value">SGD 250.00
                                 </p>
                              </div>
                           </div>
                           <p class="pcls1 pcls2 pcls11" data-qa="code">Voucher code: 
                              <span class="">XXXXXX</span>
                           </p>
                           <button class="email_preview_in8" data-qa="book-now-button">
                              <div class="btndiv"></div>
                              <div class="btndiv2 mb-5">
                                 <p class="pcls1 pcls2 pcls12">Book now</p>
                              </div>
                           </button>
                           <div class="email_preview_in9">
                              <p class="pcls1 pcls2 pcls13" data-qa="validity-period">Valid for 3 years</p>
                              <p class="pcls1 pcls2" data-qa="usage-limit-text">For multiple-use until redeemed</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--end::Card body-->
            </div>
            <!--end::Card-->
         </div>
         <!--end::Drawer-->
         <!--begin::Drawer-->
         <div
            id="kt_drawer_example_permanent3"
            class="bg-white"
            data-kt-drawer="true"
            data-kt-drawer-activate="true"
            data-kt-drawer-toggle="#kt_drawer_example_permanent_toggle3"
            data-kt-drawer-close="#kt_drawer_example_permanent_close3"
            data-kt-drawer-overlay="true"
            data-kt-drawer-permanent="true"
            data-kt-drawer-width="{default:'300px', 'md': '500px'}"
            >
            <!--begin::Card-->
            <div class="card rounded-0 w-100 brlft">
               <!--begin::Card header-->
               <div class="card-header pe-5">
                  <!--begin::Title-->
                  <div class="card-title">
                     Past Transaction
                  </div>
                  <!--end::Title-->
                  <!--begin::Card toolbar-->
                  <div class="card-toolbar">
                     <!--begin::Close-->
                     <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="kt_drawer_example_permanent_close3">
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
                                 <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Hair cut</a>
                                 <!--end::Title-->
                                 <!--begin::Desc-->
                                 <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">2 hours</span>
                                 <!--end::Desc-->
                              </div>
                              <!--end::Content-->
                           </div>
                           <!--end::Section-->
                           <!--begin::Wrapper-->
                           <div class="d-flex align-items-center">
                              <!--begin::Number-->
                              <span class="text-gray-800 fw-bold fs-4 me-3 text-end">-$50</span>
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
                                 <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Hair cut</a>
                                 <!--end::Title-->
                                 <!--begin::Desc-->
                                 <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">2 hours</span>
                                 <!--end::Desc-->
                              </div>
                              <!--end::Content-->
                           </div>
                           <!--end::Section-->
                           <!--begin::Wrapper-->
                           <div class="d-flex align-items-center">
                              <!--begin::Number-->
                              <span class="text-gray-800 fw-bold fs-4 me-3 text-end">-$50</span>
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
                                 <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Hair cut</a>
                                 <!--end::Title-->
                                 <!--begin::Desc-->
                                 <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">2 hours</span>
                                 <!--end::Desc-->
                              </div>
                              <!--end::Content-->
                           </div>
                           <!--end::Section-->
                           <!--begin::Wrapper-->
                           <div class="d-flex align-items-center">
                              <!--begin::Number-->
                              <span class="text-gray-800 fw-bold fs-4 me-3 text-end">-$50</span>
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
                                 <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Hair cut</a>
                                 <!--end::Title-->
                                 <!--begin::Desc-->
                                 <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">2 hours</span>
                                 <!--end::Desc-->
                              </div>
                              <!--end::Content-->
                           </div>
                           <!--end::Section-->
                           <!--begin::Wrapper-->
                           <div class="d-flex align-items-center">
                              <!--begin::Number-->
                              <span class="text-gray-800 fw-bold fs-4 me-3 text-end">-$50</span>
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
                                 <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Hair cut</a>
                                 <!--end::Title-->
                                 <!--begin::Desc-->
                                 <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">2 hours</span>
                                 <!--end::Desc-->
                              </div>
                              <!--end::Content-->
                           </div>
                           <!--end::Section-->
                           <!--begin::Wrapper-->
                           <div class="d-flex align-items-center">
                              <!--begin::Number-->
                              <span class="text-gray-800 fw-bold fs-4 me-3 text-end">-$50</span>
                              <!--end::Number-->
                           </div>
                           <!--end::Wrapper-->
                        </div>
                        <!--end::Item-->
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
            id="kt_drawer_example_permanent4"
            class="bg-white"
            data-kt-drawer="true"
            data-kt-drawer-activate="true"
            data-kt-drawer-toggle="#kt_drawer_example_permanent_toggle4"
            data-kt-drawer-close="#kt_drawer_example_permanent_close4"
            data-kt-drawer-overlay="true"
            data-kt-drawer-permanent="true"
            data-kt-drawer-width="{default:'300px', 'md': '500px'}"
            >
            <!--begin::Card-->
            <div class="card rounded-0 w-100 brlft">
               <!--begin::Card header-->
               <div class="card-header pe-5">
                  <!--begin::Title-->
                  <div class="card-title">
                     Voucher Details
                  </div>
                  <!--end::Title-->
                  <!--begin::Card toolbar-->
                  <div class="card-toolbar">
                     <!--begin::Close-->
                     <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="kt_drawer_example_permanent_close4">
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
                     <!--begin::Item-->
                     <div class="d-flex flex-stack ctmwd">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-5">
                           <!--begin::Content-->
                           <div class="me-5">
                              <!--begin::Title-->
                              <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Voucher Name</a>
                              <!--end::Title-->
                           </div>
                           <!--end::Content-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                           <!--begin::Number-->
                           <span class="text-gray-800 fw-bold fs-4 me-3 text-end">Voucher1</span>
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
                              <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Voucher Category</a>
                              <!--end::Title-->
                           </div>
                           <!--end::Content-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                           <!--begin::Number-->
                           <span class="text-gray-800 fw-bold fs-4 me-3 text-end">Hair</span>
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
                              <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Voucher Sub Category</a>
                              <!--end::Title-->
                           </div>
                           <!--end::Content-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                           <!--begin::Number-->
                           <span class="text-gray-800 fw-bold fs-4 me-3 text-end">Hair Subcat</span>
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
                              <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Services</a>
                              <!--end::Title-->
                              <!--end::Desc-->
                           </div>
                           <!--end::Content-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                           <!--begin::Number-->
                           <span class="text-gray-800 fw-bold fs-4 me-3 text-end">Hair cut, Hair wash, Rebonding</span>
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
                              <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Sessions</a>
                              <!--end::Title-->
                              <!--end::Desc-->
                           </div>
                           <!--end::Content-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                           <!--begin::Number-->
                           <span class="text-gray-800 fw-bold fs-4 me-3 text-end">6</span>
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
                              <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Validity</a>
                              <!--end::Title-->
                              <!--end::Desc-->
                           </div>
                           <!--end::Content-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                           <!--begin::Number-->
                           <span class="text-gray-800 fw-bold fs-4 me-3 text-end">1 year</span>
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
                              <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Price</a>
                              <!--end::Title-->
                              <!--end::Desc-->
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
                              <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Retail Price</a>
                              <!--end::Title-->
                              <!--end::Desc-->
                           </div>
                           <!--end::Content-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                           <!--begin::Number-->
                           <span class="text-gray-800 fw-bold fs-4 me-3 text-end">$45</span>
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
                              <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Description</a>
                              <!--end::Title-->
                              <!--end::Desc-->
                           </div>
                           <!--end::Content-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                           <!--begin::Number-->
                           <span class="text-gray-800 fw-bold fs-4 me-3 text-end">lorem ipsum dolar sit amet</span>
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
                              <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Venue</a>
                              <!--end::Title-->
                              <!--end::Desc-->
                           </div>
                           <!--end::Content-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center">
                           <!--begin::Number-->
                           <span class="text-gray-800 fw-bold fs-4 me-3 text-end">Alexandra road, YJ Salons - Punggol</span>
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
      <!--begin::Modals-->
      
      <div class="modal fade" id="importclient" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-xl">
            <div class="modal-content">
               <div class="modal-header">
                  <!--begin::Card header-->
                  <div class="card-header pt-7" id="kt_chat_contacts_header">
                     <!--begin::Card title-->
                     <div class="card-title">
                        <h2>Import Clients</h2>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--end::Card header-->
                  <!--begin::Close-->
                  <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                     <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                  </div>
                  <!--end::Close-->
               </div>
               <div class="modal-body">
                  <!--begin::Wrapper-->
                  <div class="w-75 m-auto">
                     <!--begin::Contacts-->
                     <div class="card card-flush h-lg-100 importclientdiv mb-10">
                        <div class="d-flex flex-column gap-5 align-items-center">
                           <span class="fs-4 fw-semibold text-muted">Import clients</span>
                           <span class="text-gray-900 fs-1 fw-bold">Upload file</span>
                           <p class="text-gray-800 fs-4">Upload a CSV file with your client data, or download and fill the template below. <a href="#">Learn more</a></p>
                        </div>
                        <div class="card-body brdr">
                           <label>
                              <input type="file" accept=".csv" />
                              <div>
                                 <span>
                                    <svg viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M10.554 12.974a6.25 6.25 0 1 0-1.553 12.305H12a.75.75 0 0 1 0 1.5H9a7.754 7.754 0 0 1-7.401-5.472 7.75 7.75 0 0 1 9.327-9.786.75.75 0 1 1-.372 1.453Z" fill="#6950f3"></path>
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M22.925 7.255a9.25 9.25 0 0 0-12.175 8.774.75.75 0 0 1-1.5 0 10.75 10.75 0 1 1 19.35 6.45.75.75 0 1 1-1.2-.9 9.25 9.25 0 0 0-4.475-14.324Z" fill="#6950f3"></path>
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M19 15.28a.75.75 0 0 1 .53.219l4.243 4.243a.75.75 0 0 1-1.06 1.06L19 17.09l-3.712 3.712a.75.75 0 0 1-1.061-1.06l4.243-4.243a.75.75 0 0 1 .53-.22Z" fill="#6950f3"></path>
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M19 15.28a.75.75 0 0 1 .75.75v10a.75.75 0 0 1-1.5 0v-10a.75.75 0 0 1 .75-.75Z" fill="#6950f3"></path>
                                    </svg>
                                 </span>
                              </div>
                              <p>Upload CSV file</p>
                           </label>
                           <div>
                              <p class="text-gray-800 fs-4 mb-0">Don’t have a file? Fill our template with your client information and upload.</p>
                              <a class="fs-4" href="#">Download template</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary my-5">
                        Save
                        </button>
                        <!--end::Input group-->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--end::Modals-->

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
                                       <img src="{{ asset('/public/partner/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
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
                                       <img src="{{ asset('/public/partner/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
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
                                       <img src="{{ asset('/public/partner/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
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
                                       <img src="{{ asset('/public/partner/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
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
                                       <img src="{{ asset('/public/partner/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
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
                                       <img src="{{ asset('/public/partner/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-14.jpg') }}" alt="img" />
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
                                                      <img src="{{ asset('/public/partner/assets/media/avatars/300-2.jpg') }}" alt="img" />
                                                   </div>
                                                   <!--end::User-->
                                                   <!--begin::User-->
                                                   <div class="symbol symbol-circle symbol-25px">
                                                      <img src="{{ asset('/public/partner/assets/media/avatars/300-14.jpg') }}" alt="img" />
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
                                                      <img src="{{ asset('/public/partner/assets/media/avatars/300-20.jpg') }}" alt="img" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-1.jpg') }}" alt="img" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-23.jpg') }}" alt="img" />
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
                                                   <img alt="" class="w-30px me-3" src="{{ asset('/public/partner/assets/media/svg/files/pdf.svg') }}" />
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
                                                   <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{ asset('/public/partner/assets/media/svg/files/doc.svg') }}" />
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
                                                   <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{ asset('/public/partner/assets/media/svg/files/css.svg') }}" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-14.jpg') }}" alt="img" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-2.jpg') }}" alt="img" />
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
                                                      <img alt="img" class="rounded w-150px" src="{{ asset('/public/partner/assets/media/stock/600x400/img-29.jpg') }}" />
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
                                                      <img alt="img" class="rounded w-150px" src="{{ asset('/public/partner/assets/media/stock/600x400/img-31.jpg') }}" />
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
                                                      <img alt="img" class="rounded w-150px" src="{{ asset('/public/partner/assets/media/stock/600x400/img-40.jpg') }}" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-4.jpg') }}" alt="img" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-1.jpg') }}" alt="img" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-23.jpg') }}" alt="img" />
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
                                                   <img alt="" class="w-30px me-3" src="{{ asset('/public/partner/assets/media/svg/files/pdf.svg') }}" />
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
                                                   <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{ asset('/public/partner/assets/media/svg/files/doc.svg') }}" />
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
                                                   <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{ asset('/public/partner/assets/media/svg/files/css.svg') }}" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-14.jpg') }}" alt="img" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-2.jpg') }}" alt="img" />
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
                                                      <img alt="img" class="rounded w-150px" src="{{ asset('/public/partner/assets/media/stock/600x400/img-29.jpg') }}" />
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
                                                      <img alt="img" class="rounded w-150px" src="{{ asset('/public/partner/assets/media/stock/600x400/img-31.jpg') }}" />
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
                                                      <img alt="img" class="rounded w-150px" src="{{ asset('/public/partner/assets/media/stock/600x400/img-40.jpg') }}" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-2.jpg') }}" alt="img" />
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
                                                      <img alt="img" class="rounded w-150px" src="{{ asset('/public/partner/assets/media/stock/600x400/img-29.jpg') }}" />
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
                                                      <img alt="img" class="rounded w-150px" src="{{ asset('/public/partner/assets/media/stock/600x400/img-31.jpg') }}" />
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
                                                      <img alt="img" class="rounded w-150px" src="{{ asset('/public/partner/assets/media/stock/600x400/img-40.jpg') }}" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-1.jpg') }}" alt="img" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-23.jpg') }}" alt="img" />
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
                                                   <img alt="" class="w-30px me-3" src="{{ asset('/public/partner/assets/media/svg/files/pdf.svg') }}" />
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
                                                   <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{ asset('/public/partner/assets/media/svg/files/doc.svg') }}" />
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
                                                   <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{ asset('/public/partner/assets/media/svg/files/css.svg') }}" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-14.jpg') }}" alt="img" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-23.jpg') }}" alt="img" />
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
                                                   <img alt="" class="w-30px me-3" src="{{ asset('/public/partner/assets/media/svg/files/pdf.svg') }}" />
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
                                                   <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{ asset('/public/partner/assets/media/svg/files/doc.svg') }}" />
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
                                                   <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{ asset('/public/partner/assets/media/svg/files/css.svg') }}" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-14.jpg') }}" alt="img" />
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
                                                   <img src="{{ asset('/public/partner/assets/media/avatars/300-2.jpg') }}" alt="img" />
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
                                                      <img alt="img" class="rounded w-150px" src="{{ asset('/public/partner/assets/media/stock/600x400/img-29.jpg') }}" />
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
                                                      <img alt="img" class="rounded w-150px" src="{{ asset('/public/partner/assets/media/stock/600x400/img-31.jpg') }}" />
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
                                                      <img alt="img" class="rounded w-150px" src="{{ asset('/public/partner/assets/media/stock/600x400/img-40.jpg') }}" />
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
<!--add_client-->
@include('partner.clients.model.add_client') 
<!--upload_client_register-->
@include('partner.clients.model.upload_client_register')
@endsection
@push('scripts')

<script type="text/javascript">
         // Class definition
         var KTDatatablesExample = function () {
             // Shared variables
             var table;
             var datatable;
         
             // Private functions
             var initDatatable = function () {
         
                 // Init datatable --- more info on datatables: https://datatables.net/manual/
                 datatable = $(table).DataTable({
                     "info": false,
                     'order': [],
                     'pageLength': 10,
                     "scrollX": true
                 });
             }
         
         
             // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
             var handleSearchDatatable = () => {
                 const filterSearch = document.querySelector('[data-kt-filter="search"]');
                 filterSearch.addEventListener('keyup', function (e) {
                     datatable.search(e.target.value).draw();
                 });
             }
         
             // Public methods
             return {
                 init: function () {
                     table = document.querySelector('#kt_datatable_client');
         
                     if ( !table ) {
                         return;
                     }
         
                     initDatatable();
                     handleSearchDatatable();
                 }
             };
         }();
         
         
         // Class definition
         var KTDatatablesExample1 = function () {
             // Shared variables
             var table;
             var datatable;
         
             // Private functions
             var initDatatable = function () {
         
                 // Init datatable --- more info on datatables: https://datatables.net/manual/
                 datatable = $(table).DataTable({
                     "info": false,
                     'order': [],
                     'pageLength': 10,
                 });
             }
         
         
             // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
             var handleSearchDatatable = () => {
                 const filterSearch = document.querySelector('[data-kt-filter1="search"]');
                 filterSearch.addEventListener('keyup', function (e) {
                     datatable.search(e.target.value).draw();
                 });
             }
         
             // Public methods
             return {
                 init: function () {
                     table = document.querySelector('#kt_datatable_client1');
         
                     if ( !table ) {
                         return;
                     }
         
                     initDatatable();
                     handleSearchDatatable();
                 }
             };
         }();
         
         
         // Class definition
         var KTDatatablesExample2 = function () {
             // Shared variables
             var table;
             var datatable;
         
             // Private functions
             var initDatatable = function () {
         
                 // Init datatable --- more info on datatables: https://datatables.net/manual/
                 datatable = $(table).DataTable({
                     "info": false,
                     'order': [],
                     'pageLength': 10
                 });
             }
         
         
             // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
             var handleSearchDatatable = () => {
                 const filterSearch = document.querySelector('[data-kt-filter-cl2="search"]');
                 filterSearch.addEventListener('keyup', function (e) {
                     datatable.search(e.target.value).draw();
                 });
             }
         
             // Public methods
             return {
                 init: function () {
                     table = document.querySelector('#kt_datatable_client2');
         
                     if ( !table ) {
                         return;
                     }
         
                     initDatatable();
                     handleSearchDatatable();
                 }
             };
         }();
         
         
         // Class definition
         var KTDatatablesExample3 = function () {
             // Shared variables
             var table;
             var datatable;
         
             // Private functions
             var initDatatable = function () {
         
                 // Init datatable --- more info on datatables: https://datatables.net/manual/
                 datatable = $(table).DataTable({
                     "info": false,
                     'order': [],
                     'pageLength': 10
                 });
             }
         
         
             // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
             var handleSearchDatatable = () => {
                 const filterSearch = document.querySelector('[data-kt-filter-cl3="search"]');
                 filterSearch.addEventListener('keyup', function (e) {
                     datatable.search(e.target.value).draw();
                 });
             }
         
             // Public methods
             return {
                 init: function () {
                     table = document.querySelector('#kt_datatable_client3');
         
                     if ( !table ) {
                         return;
                     }
         
                     initDatatable();
                     handleSearchDatatable();
                 }
             };
         }();
         
         
         // Class definition
         var KTDatatablesExample4 = function () {
             // Shared variables
             var table;
             var datatable;
         
             // Private functions
             var initDatatable = function () {
         
                 // Init datatable --- more info on datatables: https://datatables.net/manual/
                 datatable = $(table).DataTable({
                     "info": false,
                     'order': [],
                     'pageLength': 10
                 });
             }
         
         
             // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
             var handleSearchDatatable = () => {
                 const filterSearch = document.querySelector('[data-kt-filter-cl4="search"]');
                 filterSearch.addEventListener('keyup', function (e) {
                     datatable.search(e.target.value).draw();
                 });
             }
         
             // Public methods
             return {
                 init: function () {
                     table = document.querySelector('#kt_datatable_client4');
         
                     if ( !table ) {
                         return;
                     }
         
                     initDatatable();
                     handleSearchDatatable();
                 }
             };
         }();
         
      </script>
      <script type="text/javascript">
         // Init daterangepicker
           var initDaterangepicker = () => {
               var start = moment().subtract(29, "days");
               var end = moment();
               var input = $("#kt_ecommerce_report_customer_orders_daterangepicker");
         
               function cb(start, end) {
                   input.html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
               }
         
               input.daterangepicker({
                   startDate: start,
                   endDate: end,
                   ranges: {
                       "Today": [moment(), moment()],
                       "Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
                       "Last 7 Days": [moment().subtract(6, "days"), moment()],
                       "Last 30 Days": [moment().subtract(29, "days"), moment()],
                       "This Month": [moment().startOf("month"), moment().endOf("month")],
                       "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
                   }
               }, cb);
         
               cb(start, end);
           }
           initDaterangepicker();
      </script>
      <script type="text/javascript">
         // Handle status filter dropdown
            var handleStatusFilter = () => {
                const filterStatus = document.querySelector('[data-kt-ecommerce-order-filter="status"]');
                $(filterStatus).on('change', e => {
                    let value = e.target.value;
                    if (value === 'all') {
                        value = '';
                    }
                    datatable.column(2).search(value).draw();
                });
            }
      </script>
      <script>
         function revrating(e) {
            if(e.checked) {
               e.parentElement.classList.add('active');
            }
            else {
               e.parentElement.classList.remove('active');
            }
         }
         
         // Init dropzone
         var myDropzone = new Dropzone("#kt_modal_create_campaign_files_upload", {
            url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            accept: function(file, done) {
               if (file.name == "wow.jpg') }}") {
                  done("Naha, you don't.");
               } else {
                  done();
               }
            }
         });
      </script>

@endpush