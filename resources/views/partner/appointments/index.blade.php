@extends('partner.layouts.auth.app')
@section('content') 
<!--Begin:::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
   <!--begin::Content-->
   <div id="kt_app_content" class="app-content flex-column-fluid">
      <!--begin::Content container-->
      <div id="kt_app_content_container" class="app-container container-xl">
         <div class="d-flex gap-5 mb-8 align-items-center">
            <span class="fs-2 fw-bold text-dark">Date: </span>
            <!--begin::Daterangepicker-->
            <input class="form-control w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_customer_orders_daterangepicker2" />
            <!--end::Daterangepicker-->
         </div>
         <div class="row mb-7 nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom apptmntnav">
            <div class="col mb-4 mb-md-0">
               <a class=" active" data-bs-toggle="tab" href="#appointmentall" aria-selected="true" role="tab" tabindex="-1">
                  <div class="card card-flush p-5 align-items-start">
                     <div class="d-flex align-items-center">
                        <!--begin::Amount-->
                        <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">All</span>
                        <!--end::Amount-->
                     </div>
                     <span class="text-gray-400 pt-1 fw-semibold fs-6">Appointments</span> 
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
                        <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">Today's</span>
                        <!--end::Amount-->
                     </div>
                     <span class="text-gray-400 pt-1 fw-semibold fs-6">Appointments</span>
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
                        <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">New</span>
                        <!--end::Amount-->
                     </div>
                     <span class="text-gray-400 pt-1 fw-semibold fs-6">Appointments</span> 
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
                        <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">Confirmed</span>
                        <!--end::Amount-->
                     </div>
                     <span class="text-gray-400 pt-1 fw-semibold fs-6">Appointments</span>
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
                        <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">Completed</span>
                        <!--end::Amount-->
                     </div>
                     <span class="text-gray-400 pt-1 fw-semibold fs-6">Appointments</span>
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
         <div class="tab-content mt-7">
            <div class="tab-pane fade active show" id="appointmentall" role="tabpanel">
               <div class="card card-flush" id="serviceview1">
                  <!--begin::Card header-->
                  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                     <!--begin::Card title-->
                     <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                           <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                           <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search by Reference number/ client name/ number" />
                        </div>
                        <!--end::Search-->
                     </div>
                     <!--end::Card title-->
                     <!--begin::Card toolbar-->
                     <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <div class="m-0">
                           <label class="form-check form-switch form-check-custom form-check-solid me-10">
                           <input class="form-check-input h-30px w-50px" type="checkbox" value="" onchange="serviceview(this)" />
                           <span class="form-check-label fs-6 fw-bold text-dark me-2">
                           Service View
                           </span>
                           </label>
                        </div>
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
                           <div class="menu menu-sub menu-sub-dropdown w-350px w-md-400px" data-kt-menu="true" id="kt_menu_641d50f7884f2">
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
                                    <label class="form-label fw-semibold">Team member</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                       <select class="form-select form-select-sm form-select form-select-sm-solid" data-kt-select2="true" data-placeholder="All team members">
                                          <option></option>
                                          <option value="1">Sam</option>
                                          <option value="2">Sofie</option>
                                          <option value="2">Lana</option>
                                       </select>
                                    </div>
                                    <!--end::Input-->
                                 </div>
                                 <!--end::Input group-->
                                 <!--begin::Input group-->
                                 <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Channel</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                       <select class="form-select form-select-sm form-select form-select-sm-solid" data-kt-select2="true" data-placeholder="All channels">
                                          <option></option>
                                          <option value="1">Channel 1</option>
                                          <option value="2">Channel 2</option>
                                          <option value="2">Channel 3</option>
                                       </select>
                                    </div>
                                    <!--end::Input-->
                                 </div>
                                 <!--end::Input group-->
                                 <!--begin::Input group-->
                                 <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                       <select class="form-select form-select-sm form-select form-select-sm-solid" data-kt-select2="true" data-placeholder="All Status">
                                          <option></option>
                                          <option value="1">new</option>
                                          <option value="2">confirmed</option>
                                          <option value="2">completed</option>
                                          <option value="2">cancelled</option>
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
                           <!--begin::Menu toggle-->
                           <a href="#" class="btn btn-sm btn-light btn-flex btn-color-gray-700 fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Scheduled Date (newest first)</a>
                           <!--end::Menu toggle-->
                           <!--begin::Menu 1-->
                           <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641d50f7884f2">
                              <!--begin::Form-->
                              <div class="d-flex flex-column p-7 gap-4">
                                 <label class="form-check form-check-custom">
                                 <input class="form-check-input" type="radio" value="" checked="checked" name="sorting"/>
                                 <span class="form-check-label">
                                 Created Date (oldest first)
                                 </span>
                                 </label>
                                 <label class="form-check form-check-custom">
                                 <input class="form-check-input" type="radio" value="" name="sorting"/>
                                 <span class="form-check-label">
                                 Created Date (newest first)
                                 </span>
                                 </label>
                                 <label class="form-check form-check-custom">
                                 <input class="form-check-input" type="radio" value="" name="sorting"/>
                                 <span class="form-check-label">
                                 Scheduled Date (oldest first)
                                 </span>
                                 </label>
                                 <label class="form-check form-check-custom">
                                 <input class="form-check-input" type="radio" value="" name="sorting"/>
                                 <span class="form-check-label">
                                 Scheduled Date (newest first)
                                 </span>
                                 </label>
                                 <label class="form-check form-check-custom">
                                 <input class="form-check-input" type="radio" value="" name="sorting"/>
                                 <span class="form-check-label">
                                 Duration (shortest first)
                                 </span>
                                 </label>
                                 <label class="form-check form-check-custom">
                                 <input class="form-check-input" type="radio" value="" name="sorting"/>
                                 <span class="form-check-label">
                                 Duration (longest first)
                                 </span>
                                 </label>
                                 <label class="form-check form-check-custom">
                                 <input class="form-check-input" type="radio" value="" name="sorting"/>
                                 <span class="form-check-label">
                                 Price (lowest first)
                                 </span>
                                 </label>
                                 <label class="form-check form-check-custom">
                                 <input class="form-check-input" type="radio" value="" name="sorting"/>
                                 <span class="form-check-label">
                                 Price (highest first)
                                 </span>
                                 </label>
                              </div>
                              <!--end::Form-->
                           </div>
                           <!--end::Menu 1-->
                        </div>
                        <div class="m-0">
                           <!--begin::Export dropdown-->
                           <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                           <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span class="path2"></span></i>
                           Export Report
                           </button>
                           <!--begin::Menu-->
                           <div id="kt_datatable_example_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                 <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                 Export as PDF
                                 </a>
                              </div>
                              <!--end::Menu item-->
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                 <a href="#" class="menu-link px-3" data-kt-export="excel">
                                 Export as Excel
                                 </a>
                              </div>
                              <!--end::Menu item-->
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                 <a href="#" class="menu-link px-3" data-kt-export="csv">
                                 Export as CSV
                                 </a>
                              </div>
                              <!--end::Menu item-->
                           </div>
                           <!--end::Menu-->
                           <!--end::Export dropdown-->
                        </div>
                     </div>
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-0">
                     <!--begin::Table-->
                     <!--begin::Table-->
                     <table class="table align-middle table-row-dashed fs-6 gy-5 tdmid" id="kt_datatable_example1">
                        <!--begin::Table head-->
                        <thead>
                           <!--begin::Table row-->
                           <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                              <th class="min-w-150px">Order #</th>
                              <th class="min-w-100px">Client</th>
                              <th class="min-w-150px">Date</th>
                              <th class="min-w-100px">Services</th>
                              <th class="min-w-150px">Staff</th>
                              <th class="min-w-100px">Price</th>
                              <th class="min-w-100px">Status</th>
                           </tr>
                           <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <tbody class="fw-bold text-gray-600">
                           <tr>
                              <td>
                                 <a href="#" id="kt_drawer_example_permanent_toggle5">
                                    <div class="d-flex align-items-center">
                                       <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                       <span class="text-gray-600 d-block fs-6"># R63YHJ8K2</span>
                                    </div>
                                 </a>
                              </td>
                              <td>
                                 <a href="#" id="kt_drawer_example_permanent_toggle">
                                 <span class="text-gray-600 d-block fs-6">John Doe</span>
                                 </a>
                              </td>
                              <td>
                                 <div class="d-flex flex-column gap-2">
                                    <span>10:20 - 11:00 AM</span>
                                    <span>14 April, 2023</span>
                                 </div>
                              </td>
                              <td>
                                 <div class="d-flex flex-column gap-2">
                                    <span>Hair cut and gentle blow dry</span>
                                    <span>1 hr 20 min</span>
                                 </div>
                              </td>
                              <td>
                                 <!--begin::Users group-->
                                 <div class="symbol-group symbol-hover flex-nowrap">
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Alan Warden">
                                       <span class="symbol-label bg-warning text-inverse-warning fw-bold">AW</span>
                                    </div>
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                       <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Susan Redwood">
                                       <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Melody Macy">
                                       <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                    </div>
                                 </div>
                                 <!--end::Users group-->
                              </td>
                              <td>$125</td>
                              <td>
                                 <span class="badge badge-warning">New</span>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <a href="#" id="kt_drawer_example_permanent_toggle5">
                                    <div class="d-flex align-items-center">
                                       <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-success"></span>
                                       <span class="text-gray-600 d-block fs-6"># 3CC8273U1</span>
                                    </div>
                                 </a>
                              </td>
                              <td>Walk in</td>
                              <td>
                                 <div class="d-flex flex-column gap-2">
                                    <span>10:20 - 11:00 AM</span>
                                    <span>14 April, 2023</span>
                                 </div>
                              </td>
                              <td>
                                 <div class="d-flex flex-column gap-2">
                                    <span>Manicure & Pedicure</span>
                                    <span>1 hr</span>
                                 </div>
                              </td>
                              <td>
                                 <!--begin::Users group-->
                                 <div class="symbol-group symbol-hover flex-nowrap">
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Alan Warden">
                                       <span class="symbol-label bg-warning text-inverse-warning fw-bold">AW</span>
                                    </div>
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                       <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Susan Redwood">
                                       <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Melody Macy">
                                       <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                    </div>
                                 </div>
                                 <!--end::Users group-->
                              </td>
                              <td>$45</td>
                              <td>
                                 <span class="badge badge-success">Confirm</span>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <!--end::Table-->
                     <!--end::Table-->
                  </div>
                  <!--end::Card body-->
               </div>
               <div class="card card-flush d-none" id="serviceview2">
                  <!--begin::Card header-->
                  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                     <!--begin::Card title-->
                     <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                           <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                           <input type="text" data-kt-filter2="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search by Reference number/ client name/ number" />
                        </div>
                        <!--end::Search-->
                     </div>
                     <!--end::Card title-->
                     <!--begin::Card toolbar-->
                     <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <div class="m-0">
                           <label class="form-check form-switch form-check-custom form-check-solid me-10">
                           <input class="form-check-input h-30px w-50px" type="checkbox" value="" checked onchange="serviceview2(this)" />
                           <span class="form-check-label fs-6 fw-bold text-dark me-2">
                           Service View
                           </span>
                           </label>
                        </div>
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
                           <div class="menu menu-sub menu-sub-dropdown w-350px w-md-400px" data-kt-menu="true" id="kt_menu_641d50f7884f2">
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
                                    <label class="form-label fw-semibold">Team member</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                       <select class="form-select form-select-sm form-select form-select-sm-solid" data-kt-select2="true" data-placeholder="All team members">
                                          <option></option>
                                          <option value="1">Sam</option>
                                          <option value="2">Sofie</option>
                                          <option value="2">Lana</option>
                                       </select>
                                    </div>
                                    <!--end::Input-->
                                 </div>
                                 <!--end::Input group-->
                                 <!--begin::Input group-->
                                 <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Channel</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                       <select class="form-select form-select-sm form-select form-select-sm-solid" data-kt-select2="true" data-placeholder="All channels">
                                          <option></option>
                                          <option value="1">Channel 1</option>
                                          <option value="2">Channel 2</option>
                                          <option value="2">Channel 3</option>
                                       </select>
                                    </div>
                                    <!--end::Input-->
                                 </div>
                                 <!--end::Input group-->
                                 <!--begin::Input group-->
                                 <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                       <select class="form-select form-select-sm form-select form-select-sm-solid" data-kt-select2="true" data-placeholder="All Status">
                                          <option></option>
                                          <option value="1">new</option>
                                          <option value="2">confirmed</option>
                                          <option value="2">completed</option>
                                          <option value="2">cancelled</option>
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
                           <!--begin::Menu toggle-->
                           <a href="#" class="btn btn-sm btn-light btn-flex btn-color-gray-700 fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Scheduled Date (newest first)</a>
                           <!--end::Menu toggle-->
                           <!--begin::Menu 1-->
                           <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641d50f7884f2">
                              <!--begin::Form-->
                              <div class="d-flex flex-column p-7 gap-4">
                                 <label class="form-check form-check-custom">
                                 <input class="form-check-input" type="radio" value="" checked="checked" name="sorting"/>
                                 <span class="form-check-label">
                                 Created Date (oldest first)
                                 </span>
                                 </label>
                                 <label class="form-check form-check-custom">
                                 <input class="form-check-input" type="radio" value="" name="sorting"/>
                                 <span class="form-check-label">
                                 Created Date (newest first)
                                 </span>
                                 </label>
                                 <label class="form-check form-check-custom">
                                 <input class="form-check-input" type="radio" value="" name="sorting"/>
                                 <span class="form-check-label">
                                 Scheduled Date (oldest first)
                                 </span>
                                 </label>
                                 <label class="form-check form-check-custom">
                                 <input class="form-check-input" type="radio" value="" name="sorting"/>
                                 <span class="form-check-label">
                                 Scheduled Date (newest first)
                                 </span>
                                 </label>
                                 <label class="form-check form-check-custom">
                                 <input class="form-check-input" type="radio" value="" name="sorting"/>
                                 <span class="form-check-label">
                                 Duration (shortest first)
                                 </span>
                                 </label>
                                 <label class="form-check form-check-custom">
                                 <input class="form-check-input" type="radio" value="" name="sorting"/>
                                 <span class="form-check-label">
                                 Duration (longest first)
                                 </span>
                                 </label>
                                 <label class="form-check form-check-custom">
                                 <input class="form-check-input" type="radio" value="" name="sorting"/>
                                 <span class="form-check-label">
                                 Price (lowest first)
                                 </span>
                                 </label>
                                 <label class="form-check form-check-custom">
                                 <input class="form-check-input" type="radio" value="" name="sorting"/>
                                 <span class="form-check-label">
                                 Price (highest first)
                                 </span>
                                 </label>
                              </div>
                              <!--end::Form-->
                           </div>
                           <!--end::Menu 1-->
                        </div>
                        <div class="m-0">
                           <!--begin::Export dropdown-->
                           <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                           <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span class="path2"></span></i>
                           Export Report
                           </button>
                           <!--begin::Menu-->
                           <div id="kt_datatable_example_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                 <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                 Export as PDF
                                 </a>
                              </div>
                              <!--end::Menu item-->
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                 <a href="#" class="menu-link px-3" data-kt-export="excel">
                                 Export as Excel
                                 </a>
                              </div>
                              <!--end::Menu item-->
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                 <a href="#" class="menu-link px-3" data-kt-export="csv">
                                 Export as CSV
                                 </a>
                              </div>
                              <!--end::Menu item-->
                           </div>
                           <!--end::Menu-->
                           <!--end::Export dropdown-->
                        </div>
                     </div>
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-0">
                     <!--begin::Table-->
                     <!--begin::Table-->
                     <table class="table align-middle table-row-dashed fs-6 gy-5 tdmid" id="kt_datatable_example2">
                        <!--begin::Table head-->
                        <thead>
                           <!--begin::Table row-->
                           <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                              <th class="min-w-150px">Order #</th>
                              <th class="min-w-100px">Client</th>
                              <th class="min-w-150px">Date</th>
                              <th class="min-w-100px">Service</th>
                              <th class="min-w-150px">Staff</th>
                              <th class="min-w-100px">Price</th>
                              <th class="min-w-100px">Status</th>
                           </tr>
                           <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <tbody class="fw-bold text-gray-600">
                           <tr>
                              <td>
                                 <a href="#" id="kt_drawer_example_permanent_toggle5">
                                    <div class="d-flex align-items-center">
                                       <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                       <span class="text-gray-600 d-block fs-6"># R63YHJ8K2</span>
                                    </div>
                                 </a>
                              </td>
                              <td>Walk in</td>
                              <td>
                                 <div class="d-flex flex-column gap-2">
                                    <span>10:20 - 11:00 AM</span>
                                    <span>14 April, 2023</span>
                                 </div>
                              </td>
                              <td>
                                 <div class="d-flex flex-column gap-2">
                                    <span>Hair cut and gentle blow dry</span>
                                    <span>1 hr 20 min</span>
                                 </div>
                              </td>
                              <td>
                                 <!--begin::Users group-->
                                 <div class="symbol-group symbol-hover flex-nowrap">
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Alan Warden">
                                       <span class="symbol-label bg-warning text-inverse-warning fw-bold">AW</span>
                                    </div>
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                       <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Susan Redwood">
                                       <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Melody Macy">
                                       <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                    </div>
                                 </div>
                                 <!--end::Users group-->
                              </td>
                              <td>$45</td>
                              <td>
                                 <span class="badge badge-warning">New</span>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <a href="#" id="kt_drawer_example_permanent_toggle5">
                                    <div class="d-flex align-items-center">
                                       <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-success"></span>
                                       <span class="text-gray-600 d-block fs-6"># R63YHJ8K2</span>
                                    </div>
                                 </a>
                              </td>
                              <td>Walk in</td>
                              <td>
                                 <div class="d-flex flex-column gap-2">
                                    <span>12:20 AM - 1:00 PM</span>
                                    <span>11 Jul, 2023</span>
                                 </div>
                              </td>
                              <td>
                                 <div class="d-flex flex-column gap-2">
                                    <span>Hair gel application</span>
                                    <span>40 min</span>
                                 </div>
                              </td>
                              <td>
                                 <!--begin::Users group-->
                                 <div class="symbol-group symbol-hover flex-nowrap">
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Alan Warden">
                                       <span class="symbol-label bg-warning text-inverse-warning fw-bold">AW</span>
                                    </div>
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                       <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Susan Redwood">
                                       <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Melody Macy">
                                       <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                    </div>
                                 </div>
                                 <!--end::Users group-->
                              </td>
                              <td>$25</td>
                              <td>
                                 <span class="badge badge-warning">New</span>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <a href="#" id="kt_drawer_example_permanent_toggle5">
                                    <div class="d-flex align-items-center">
                                       <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-success"></span>
                                       <span class="text-gray-600 d-block fs-6"># 3CC8273U1</span>
                                    </div>
                                 </a>
                              </td>
                              <td>John Doe</td>
                              <td>
                                 <div class="d-flex flex-column gap-2">
                                    <span>10:45 AM - 11:45 AM</span>
                                    <span>11 Jul, 2023</span>
                                 </div>
                              </td>
                              <td>
                                 <div class="d-flex flex-column gap-2">
                                    <span>Manicure & Pedicure</span>
                                    <span>1 hour</span>
                                 </div>
                              </td>
                              <td>
                                 <!--begin::Users group-->
                                 <div class="symbol-group symbol-hover flex-nowrap">
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Alan Warden">
                                       <span class="symbol-label bg-warning text-inverse-warning fw-bold">AW</span>
                                    </div>
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                       <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Susan Redwood">
                                       <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                    <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Melody Macy">
                                       <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                    </div>
                                 </div>
                                 <!--end::Users group-->
                              </td>
                              <td>$125</td>
                              <td>
                                 <span class="badge badge-warning">New</span>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <!--end::Table-->
                     <!--end::Table-->
                  </div>
                  <!--end::Card body-->
               </div>
            </div>
            <div class="tab-pane fade" id="appointment1" role="tabpanel">
               <div class="card card-flush">
                  <!--begin::Card header-->
                  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
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
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-0">
                     <!--begin::Table-->
                     <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example2">
                        <!--begin::Table head-->
                        <thead>
                           <!--begin::Table row-->
                           <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                              <th class="min-w-150px">Date and time</th>
                              <th class="min-w-100px">Service</th>
                              <th class="min-w-100px">Customer Name</th>
                              <th class="min-w-50px">Status</th>
                              <th class="min-w-100px">Price</th>
                              <th class="min-w-100px text-end">Action</th>
                           </tr>
                           <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <tbody class="fw-bold text-gray-600">
                           <tr>
                              <td>
                                 <div class="d-flex">
                                    <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="d-flex flex-column gap-5">
                                       <span>14 April, 2023</span>
                                       <span>10:20 - 11:00 AM</span>
                                    </div>
                                 </div>
                              </td>
                              <td>Hair cut</td>
                              <td>harry</td>
                              <td>
                                 <span class="badge badge-success">New</span>
                              </td>
                              <td>Rs 450</td>
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
                                    <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="d-flex flex-column gap-5">
                                       <span>15 April, 2023</span>
                                       <span>10:20 - 11:00 AM</span>
                                    </div>
                                 </div>
                              </td>
                              <td>Hair Wash</td>
                              <td>Tom</td>
                              <td>
                                 <span class="badge badge-success">New</span>
                              </td>
                              <td>Rs 450</td>
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
                                    <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="d-flex flex-column gap-5">
                                       <span>16 April, 2023</span>
                                       <span>10:20 - 11:00 AM</span>
                                    </div>
                                 </div>
                              </td>
                              <td>Hair Wash</td>
                              <td>Tom</td>
                              <td>
                                 <span class="badge badge-success">New</span>
                              </td>
                              <td>Rs 450</td>
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
                                    <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="d-flex flex-column gap-5">
                                       <span>17 April, 2023</span>
                                       <span>10:20 - 11:00 AM</span>
                                    </div>
                                 </div>
                              </td>
                              <td>Hair Wash</td>
                              <td>Tom</td>
                              <td>
                                 <span class="badge badge-success">New</span>
                              </td>
                              <td>Rs 450</td>
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
                        </tbody>
                     </table>
                     <!--end::Table-->
                  </div>
                  <!--end::Card body-->
               </div>
            </div>
            <div class="tab-pane fade" id="appointment2" role="tabpanel">
               <div class="card card-flush">
                  <!--begin::Card header-->
                  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                     <!--begin::Card title-->
                     <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                           <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                           <input type="text" data-kt-filter3="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search" />
                        </div>
                        <!--end::Search-->
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-0">
                     <!--begin::Table-->
                     <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example3">
                        <!--begin::Table head-->
                        <thead>
                           <!--begin::Table row-->
                           <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                              <th class="min-w-150px">Date and time</th>
                              <th class="min-w-100px">Service</th>
                              <th class="min-w-100px">Customer Name</th>
                              <th class="min-w-50px">Status</th>
                              <th class="min-w-100px">Price</th>
                              <th class="min-w-100px text-end">Action</th>
                           </tr>
                           <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <tbody class="fw-bold text-gray-600">
                           <tr>
                              <td>
                                 <div class="d-flex">
                                    <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="d-flex flex-column gap-5">
                                       <span>14 April, 2023</span>
                                       <span>10:20 - 11:00 AM</span>
                                    </div>
                                 </div>
                              </td>
                              <td>Hair cut</td>
                              <td>harry</td>
                              <td>
                                 <span class="badge badge-success">New</span>
                              </td>
                              <td>Rs 450</td>
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
                                    <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="d-flex flex-column gap-5">
                                       <span>15 April, 2023</span>
                                       <span>10:20 - 11:00 AM</span>
                                    </div>
                                 </div>
                              </td>
                              <td>Hair Wash</td>
                              <td>Tom</td>
                              <td>
                                 <span class="badge badge-success">New</span>
                              </td>
                              <td>Rs 450</td>
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
                                    <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="d-flex flex-column gap-5">
                                       <span>16 April, 2023</span>
                                       <span>10:20 - 11:00 AM</span>
                                    </div>
                                 </div>
                              </td>
                              <td>Hair Wash</td>
                              <td>Tom</td>
                              <td>
                                 <span class="badge badge-success">New</span>
                              </td>
                              <td>Rs 450</td>
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
                                    <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="d-flex flex-column gap-5">
                                       <span>17 April, 2023</span>
                                       <span>10:20 - 11:00 AM</span>
                                    </div>
                                 </div>
                              </td>
                              <td>Hair Wash</td>
                              <td>Tom</td>
                              <td>
                                 <span class="badge badge-success">New</span>
                              </td>
                              <td>Rs 450</td>
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
                        </tbody>
                     </table>
                     <!--end::Table-->
                  </div>
                  <!--end::Card body-->
               </div>
            </div>
            <div class="tab-pane fade" id="appointment3" role="tabpanel">
               <div class="card card-flush">
                  <!--begin::Card header-->
                  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                     <!--begin::Card title-->
                     <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                           <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                           <input type="text" data-kt-filter4="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search" />
                        </div>
                        <!--end::Search-->
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-0">
                     <!--begin::Table-->
                     <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example4">
                        <!--begin::Table head-->
                        <thead>
                           <!--begin::Table row-->
                           <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                              <th class="min-w-150px">Date and time</th>
                              <th class="min-w-100px">Service</th>
                              <th class="min-w-100px">Customer Name</th>
                              <th class="min-w-50px">Status</th>
                              <th class="min-w-100px">Price</th>
                              <th class="min-w-100px text-end">Action</th>
                           </tr>
                           <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <tbody class="fw-bold text-gray-600">
                           <tr>
                              <td>
                                 <div class="d-flex">
                                    <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-60px mh-100 me-4 bg-warning"></span>
                                    <div class="d-flex flex-column gap-5">
                                       <span>14 April, 2023</span>
                                       <span>10:20 - 11:00 AM</span>
                                    </div>
                                 </div>
                              </td>
                              <td>Hair cut</td>
                              <td>harry</td>
                              <td>
                                 <span class="badge badge-secondary">Confirmed</span>
                              </td>
                              <td>Rs 450</td>
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
                                    <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-60px mh-100 me-4 bg-warning"></span>
                                    <div class="d-flex flex-column gap-5">
                                       <span>15 April, 2023</span>
                                       <span>10:20 - 11:00 AM</span>
                                    </div>
                                 </div>
                              </td>
                              <td>Hair Wash</td>
                              <td>Tom</td>
                              <td>
                                 <span class="badge badge-secondary">Confirmed</span>
                              </td>
                              <td>Rs 450</td>
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
                                    <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-60px mh-100 me-4 bg-warning"></span>
                                    <div class="d-flex flex-column gap-5">
                                       <span>16 April, 2023</span>
                                       <span>10:20 - 11:00 AM</span>
                                    </div>
                                 </div>
                              </td>
                              <td>Hair Wash</td>
                              <td>Tom</td>
                              <td>
                                 <span class="badge badge-secondary">Confirmed</span>
                              </td>
                              <td>Rs 450</td>
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
                                    <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-60px mh-100 me-4 bg-warning"></span>
                                    <div class="d-flex flex-column gap-5">
                                       <span>17 April, 2023</span>
                                       <span>10:20 - 11:00 AM</span>
                                    </div>
                                 </div>
                              </td>
                              <td>Hair Wash</td>
                              <td>Tom</td>
                              <td>
                                 <span class="badge badge-secondary">Confirmed</span>
                              </td>
                              <td>Rs 450</td>
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
                        </tbody>
                     </table>
                     <!--end::Table-->
                  </div>
                  <!--end::Card body-->
               </div>
            </div>
            <div class="tab-pane fade" id="appointment4" role="tabpanel">
               <div class="card card-flush">
                  <!--begin::Card header-->
                  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                     <!--begin::Card title-->
                     <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                           <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                           <input type="text" data-kt-filter5="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search" />
                        </div>
                        <!--end::Search-->
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-0">
                     <!--begin::Table-->
                     <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example5">
                        <!--begin::Table head-->
                        <thead>
                           <!--begin::Table row-->
                           <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                              <th class="min-w-150px">Date and time</th>
                              <th class="min-w-100px">Service</th>
                              <th class="min-w-100px">Customer Name</th>
                              <th class="min-w-50px">Status</th>
                              <th class="min-w-100px">Price</th>
                              <th class="min-w-100px text-end">Action</th>
                           </tr>
                           <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <tbody class="fw-bold text-gray-600">
                           <tr>
                              <td>
                                 <div class="d-flex">
                                    <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-60px mh-100 me-4 bg-success"></span>
                                    <div class="d-flex flex-column gap-5">
                                       <span>14 April, 2023</span>
                                       <span>10:20 - 11:00 AM</span>
                                    </div>
                                 </div>
                              </td>
                              <td>Hair cut</td>
                              <td>harry</td>
                              <td>
                                 <span class="badge badge-primary">Completed</span>
                              </td>
                              <td>Rs 450</td>
                              <td class="text-end">
                                 <a href="#" class="btn btn-sm btn-light">View</a>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="d-flex">
                                    <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-60px mh-100 me-4 bg-success"></span>
                                    <div class="d-flex flex-column gap-5">
                                       <span>15 April, 2023</span>
                                       <span>10:20 - 11:00 AM</span>
                                    </div>
                                 </div>
                              </td>
                              <td>Hair Wash</td>
                              <td>Tom</td>
                              <td>
                                 <span class="badge badge-primary">Completed</span>
                              </td>
                              <td>Rs 450</td>
                              <td class="text-end">
                                 <a href="#" class="btn btn-sm btn-light">View</a>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="d-flex">
                                    <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-60px mh-100 me-4 bg-success"></span>
                                    <div class="d-flex flex-column gap-5">
                                       <span>16 April, 2023</span>
                                       <span>10:20 - 11:00 AM</span>
                                    </div>
                                 </div>
                              </td>
                              <td>Hair Wash</td>
                              <td>Tom</td>
                              <td>
                                 <span class="badge badge-primary">Completed</span>
                              </td>
                              <td>Rs 450</td>
                              <td class="text-end">
                                 <a href="#" class="btn btn-sm btn-light">View</a>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div class="d-flex">
                                    <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-60px mh-100 me-4 bg-success"></span>
                                    <div class="d-flex flex-column gap-5">
                                       <span>17 April, 2023</span>
                                       <span>10:20 - 11:00 AM</span>
                                    </div>
                                 </div>
                              </td>
                              <td>Hair Wash</td>
                              <td>Tom</td>
                              <td>
                                 <span class="badge badge-primary">Completed</span>
                              </td>
                              <td>Rs 450</td>
                              <td class="text-end">
                                 <a href="#" class="btn btn-sm btn-light">View</a>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <!--end::Table-->
                  </div>
                  <!--end::Card body-->
               </div>
            </div>
         </div>
      </div>
      <!--end::Content container-->
   </div>
   <!--end::Content-->
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
                                <img src="/dasalon/partners/assets/media/avatars/300-1.jpg" alt="image">
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
                                 <br>Australia</div>
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
                                             <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$" data-kt-initialized="1">6900</div>
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
                                             <i class="ki-outline ki-arrow-down fs-3 text-danger me-2"></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="80" data-kt-initialized="1">130</div>
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
                                             <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">500</div>
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
                                             <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">6900</div>
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
                                             <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">130</div>
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
                                             <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">4.2</div>
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
                                       <select class="form-select form-select-sm form-select form-select-sm-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
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
                                                   <select class="form-select form-select-sm form-select form-select-sm-solid" data-control="select2" data-placeholder="Select an option">
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
                                          <select class="form-select form-select-sm form-select form-select-sm-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto border-0" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
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
                                          <select class="form-select form-select-sm form-select form-select-sm-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto border-0" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
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
                                       <select class="form-select form-select-sm form-select form-select-sm-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
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
                                                         <img src="assets/media/svg/voucher.svg">
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
                                                         <img src="assets/media/svg/voucher.svg">
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
                                                         <img src="assets/media/svg/voucher.svg">
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
                                                         <img src="assets/media/svg/voucher.svg">
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
                                       <select class="form-select form-select-sm form-select form-select-sm-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
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
                                                   <select class="form-select form-select-sm form-select form-select-sm-solid" data-control="select2" data-placeholder="Select an option">
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
                                                   <img src="assets/media/avatars/300-14.jpg" alt="img" />
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
                                                   <img src="assets/media/avatars/300-1.jpg" alt="img" />
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
                                                   <img src="assets/media/avatars/300-23.jpg" alt="img" />
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
                                             <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                                             <!--end::Title-->
                                             <!--begin::Description-->
                                             <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                                   <img src="assets/media/avatars/300-14.jpg" alt="img" />
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
                                                   <img src="assets/media/avatars/300-2.jpg" alt="img" />
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
                                             <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
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
                                                   <img src="assets/media/avatars/300-4.jpg" alt="img" />
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
                                             <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
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
                                                <select class="form-select form-select-sm form-select form-select-sm-solid" data-kt-select2="true" data-placeholder="All locations" data-dropdown-parent="#kt_menu_641d517c39798" data-allow-clear="true">
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
                                             <!--begin::Input-->
                                             <div>
                                                <select class="form-select form-select-sm form-select form-select-sm-solid" data-kt-select2="true" data-placeholder="All team members" data-dropdown-parent="#kt_menu_641d517c39798" data-allow-clear="true">
                                                   <option></option>
                                                   <option value="1">member1</option>
                                                   <option value="2">member2</option>
                                                   <option value="2">member3</option>
                                                </select>
                                             </div>
                                             <!--end::Input-->
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
                                                      <img src="assets/media/avatars/300-23.jpg" alt="" />
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
                                                      <img src="assets/media/avatars/300-23.jpg" alt="" />
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
                                                      <img src="assets/media/avatars/300-23.jpg" alt="" />
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
                                                      <img src="assets/media/avatars/300-23.jpg" alt="" />
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

      <!--begin::Drawer-->
      <div
          id="kt_drawer_example_permanent5"
          class="bg-white"
          data-kt-drawer="true"
          data-kt-drawer-activate="true"
          data-kt-drawer-toggle="#kt_drawer_example_permanent_toggle5"
          data-kt-drawer-close="#kt_drawer_example_permanent_close5"
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
                      Appointment
                  </div>
                  <!--end::Title-->

                  <!--begin::Card toolbar-->
                  <div class="card-toolbar">
                      <!--begin::Close-->
                      <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="kt_drawer_example_permanent_close5">
                          <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                      </div>
                      <!--end::Close-->
                  </div>
                  <!--end::Card toolbar-->
              </div>
              <!--end::Card header-->

              <!--begin::Card body-->
              <div class="hover-scroll-overlay-y pt-3 px-5">

               <div class="row">
                  
                  <div class="col-md-6">
                     
                     <div class="card card-flush h-100">
                  
                        <div class="card-body">

                           <div class="d-flex flex-column gap-3">
                              <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">Appointment</span>
                              <div class="d-flex gap-3">
                                 <span class="text-gray-400 fw-semibold fs-6">Order no:</span>
                                 <span class="text-gray-600 d-block fs-6"># 3CC8273U1</span>
                              </div>
                              <div class="d-flex gap-3">
                                 <span class="text-gray-400 fw-semibold fs-6">Payment status:</span>
                                 <span class="text-gray-600 d-block fs-6">Completed</span>
                              </div>
                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-md-6">
                     
                     <div class="card card-flush h-100">
                  
                        <div class="card-body">

                           <div class="d-flex align-items-start">

                              <div>
                                 <div class="symbol symbol-50px symbol-circle me-3 mb-4">
                                    <img src="assets/media/avatars/300-3.jpg" class="" alt="" />
                                 </div>
                                 <div class="d-flex gap-2">
                                       <a href="#">
                                          <i class="ki-duotone ki-heart-circle fs-2">
                                          <i class="path1"></i>
                                          <i class="path2"></i>
                                       </i>
                                       </a>
                                       <a href="#">
                                          <i class="ki-duotone ki-star fs-2"></i>
                                       </a>
                                    </div>
                              </div>

                              <div class="d-flex justify-content-start flex-column gap-2 ms-4">
                                 <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                                 <a href="mailto:emma@gmail.com">
                                       <i class="fas fa-envelope"></i>
                                       <span class="text-gray-400 fw-semibold fs-6">emma@gmail.com</span>
                                    </a>
                                 <a href="https://wa.me/9587456915">
                                       <i class="fa-brands fa-whatsapp"></i>
                                       <span class="text-gray-400 fw-semibold fs-6">9587456915</span>
                                    </a>
                              </div>

                              <div class="ms-auto">
                                 <a href="#" class="editbtn" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <span class="fs-2">...</span>
                                 </a>
                                 <!--begin::Menu-->
                                 <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                       <a href="#" class="menu-link px-3">View profile</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                       <a href="#" class="menu-link px-3">Remove from checkout</a>
                                    </div>
                                    <!--end::Menu item-->
                                 </div>
                                 <!--end::Menu-->
                              </div>

                           </div>

                        </div>

                     </div>
                     
                  </div>

               </div>

               <div class="card card-flush mt-2">
                  
                  <div class="card-body">
                     
                     <!--begin:::Tabs-->
                     <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-4">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#orderdetails">Details</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4 position-relative" data-bs-toggle="tab" href="#ordernotes">Notes
                              <span class="position-absolute top-0 start-100 translate-middle badge badge-circle badge-danger">5</span>
                           </a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#orderactivity">Activity</a>
                        </li>
                        <!--end:::Tab item-->
                     </ul>
                     <!--end:::Tabs-->

                     <!--begin:::Tab content-->
                     <div class="tab-content" id="myTabContent">

                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade show active" id="orderdetails" role="tabpanel">

                           <div class="d-flex justify-content-between align-items-center">
                              
                              <div class="d-flex gap-5">
                                 <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">Date: </span>
                                 <span class="text-gray-400 fw-semibold fs-6">Sunday, 18 Jun, 2023</span>
                                 <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                                    <i class="ki-duotone ki-pencil fs-6">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                    </i>
                                 </a>
                              </div>

                              <div class="d-flex gap-5">

                                 <div>
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Status</a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="" class="menu-link px-3">All</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="system-admin-manage.html" class="menu-link px-3">New</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="system-admin-manage.html" class="menu-link px-3">Confirmed</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="system-admin-manage.html" class="menu-link px-3">Completed</a>
                                       </div>
                                       <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                 </div>

                                 <div>
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
                                 </div>

                                 <a href="#">
                                    <i class="ki-duotone ki-calendar fs-1x">
                                     <i class="path1"></i>
                                     <i class="path2"></i>
                                    </i>
                                 </a>
                              </div>

                           </div>

                           <div class="d-flex flex-column gap-5 mt-5">

                              <div class="mt-2">
                                 <span class="text-gray-900 fs-2 fw-bold me-1">Service</span>
                              </div>
                              
                              <div class="bxshdw overflow-hidden">

                                 <div class="app_page_service">
                                    <div class="position-relative">
                                       <div class="position-absolute start-0 top-0 w-7px h-100 rounded-2 bg-success"></div>
                                    </div>
                                    <div class="d-flex flex-column gap-3 w-100 py-5 pe-5">

                                       <div class="d-flex justify-content-between align-items-end">

                                          <div class="d-flex flex-column gap-3">
                                             <div class="d-flex gap-3 align-items-center">
                                                <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Body massage</span>
                                                <a href="#" id="kt_drawer_example_permanent_toggle6">
                                                   <i class="ki-duotone ki-pencil fs-6">
                                                      <span class="path1"></span>
                                                      <span class="path2"></span>
                                                   </i>
                                                </a>
                                             </div>
                                             <div class="d-flex gap-3 align-items-center">
                                                <div>
                                                   <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                         <i class="ki-duotone ki-information-2 fs-2">
                                                         <i class="path1 clrblck op1"></i>
                                                         <i class="path2 clrwht"></i>
                                                         <i class="path3 clrwht"></i>
                                                      </i>
                                                      </a>
                                                   <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                      <div class="p-4">
                                                         <span class="text-gray-400 fw-semibold fs-6">Body Massage Description</span>
                                                      </div>
                                                   </div>
                                                </div>
                                                   <span class="badge badge-warning">
                                                      <i class="bi bi-gender-ambiguous me-2 fs-3 clrwht"></i>
                                                      Unisex
                                                   </span>
                                                   <a href="#" class="d-flex align-items-center">
                                                      <i class="ki-duotone ki-star fs-6 me-1"></i>
                                                      <span class="fw-semibold fs-8 text-gray-800">Voucher</span>
                                                   </a>
                                                   <div class="add_edit_staff">
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                         <i class="ki-duotone ki-plus-circle fs-2x">
                                                          <i class="path1"></i>
                                                          <i class="path2"></i>
                                                      </i>
                                                   </a>
                                                   <!--begin::Menu-->
                                                   <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                   </div>
                                                   <!--end::Menu-->
                                                   </div>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-400 fw-semibold fs-6">12:00 PM - 12:45 PM (45 min)</span>
                                                   <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                                                   <i class="ki-duotone ki-pencil fs-6">
                                                      <span class="path1"></span>
                                                      <span class="path2"></span>
                                                   </i>
                                                </a>
                                                </div>
                                          </div>

                                          <div class="d-flex flex-column gap-3 ms-auto me-4 align-self-center">
                                             <div class="d-flex gap-3 max-w-300px justify-content-end flex-wrap">
                                                <span class="badge badge-primary">Voucher Applied</span>
                                             </div>
                                          </div>

                                          <div class="d-flex flex-column gap-3">
                                             <div class="d-flex gap-5 justify-content-between">
                                                   <span class="fw-semibold fs-6 text-gray-400">Price :</span>
                                                   <span class="fw-semibold fs-6 text-gray-400">SGD 29</span>
                                                </div>
                                                <div class="d-flex gap-5 justify-content-between">
                                                   <span class="fw-semibold fs-6 text-gray-800">Offer Price :</span>
                                                   <span class="fw-semibold fs-6 text-gray-800">SGD 0</span>
                                                </div>
                                                <a href="" class="d-flex align-items-center justify-content-end">
                                                <i class="bi bi-trash3-fill fs-2x clrred"></i>
                                             </a>
                                          </div>

                                       </div>

                                    </div>
                                 </div>

                              </div>


                              <div class="bxshdw overflow-hidden">

                                 <div class="app_page_service">
                                    <div class="position-relative">
                                       <div class="position-absolute start-0 top-0 w-7px h-100 rounded-2 bg-success"></div>
                                    </div>
                                    <div class="d-flex flex-column gap-3 w-100 py-5 pe-5">

                                       <div class="d-flex justify-content-between align-items-end">

                                          <div class="d-flex flex-column gap-3">
                                             <div class="d-flex gap-3 align-items-center">
                                                <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Face cleaning</span>
                                                <a href="#" id="kt_drawer_example_permanent_toggle6">
                                                   <i class="ki-duotone ki-pencil fs-6">
                                                      <span class="path1"></span>
                                                      <span class="path2"></span>
                                                   </i>
                                                </a>
                                             </div>
                                             <div class="d-flex gap-3 align-items-center">
                                                <div>
                                                   <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                         <i class="ki-duotone ki-information-2 fs-2">
                                                         <i class="path1 clrblck op1"></i>
                                                         <i class="path2 clrwht"></i>
                                                         <i class="path3 clrwht"></i>
                                                      </i>
                                                      </a>
                                                   <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                      <div class="p-4">
                                                         <span class="text-gray-400 fw-semibold fs-6">Face Description</span>
                                                      </div>
                                                   </div>
                                                </div>
                                                   <span class="badge badge-info">
                                                      <i class="bi bi-gender-male me-2 fs-3 clrwht"></i>
                                                      Male
                                                   </span>
                                                   <a href="#" class="d-flex align-items-center">
                                                      <i class="ki-duotone ki-heart-circle fs-2 me-1">
                                                      <i class="path1"></i>
                                                      <i class="path2 clrpnk"></i>
                                                   </i>
                                                      <span class="fw-semibold fs-8 text-gray-800">Package</span>
                                                   </a>
                                                   <div class="add_edit_staff">
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                         <i class="ki-duotone ki-plus-circle fs-2x">
                                                          <i class="path1"></i>
                                                          <i class="path2"></i>
                                                      </i>
                                                   </a>
                                                   <!--begin::Menu-->
                                                   <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                      <!--begin::Menu item-->
                                                      <div class="menu-item px-3">
                                                         <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                      </div>
                                                      <!--end::Menu item-->
                                                   </div>
                                                   <!--end::Menu-->
                                                   </div>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-400 fw-semibold fs-6">12:00 PM - 12:45 PM (45 min)</span>
                                                   <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                                                   <i class="ki-duotone ki-pencil fs-6">
                                                      <span class="path1"></span>
                                                      <span class="path2"></span>
                                                   </i>
                                                </a>
                                                </div>
                                          </div>

                                          <div class="d-flex flex-column gap-3 ms-auto me-4 align-self-center">
                                             <div class="d-flex gap-3 max-w-300px justify-content-end flex-wrap">
                                                <span class="badge badge-primary">Gift Card applied</span>
                                                <span class="badge badge-primary">Promo Code applied</span>
                                             </div>
                                          </div>

                                          <div class="d-flex flex-column gap-3">
                                             <div class="d-flex gap-5 justify-content-between">
                                                   <span class="fw-semibold fs-6 text-gray-400">Price :</span>
                                                   <span class="fw-semibold fs-6 text-gray-400">SGD 35</span>
                                                </div>
                                                <div class="d-flex gap-5 justify-content-between">
                                                   <span class="fw-semibold fs-6 text-gray-800">Offer Price :</span>
                                                   <span class="fw-semibold fs-6 text-gray-800">SGD 0</span>
                                                </div>
                                                <a href="" class="d-flex align-items-center justify-content-end">
                                                <i class="bi bi-trash3-fill fs-2x clrred"></i>
                                             </a>
                                          </div>

                                       </div>

                                    </div>
                                 </div>

                              </div>

                              <div class="mt-2">
                                 <span class="text-gray-900 fs-2 fw-bold me-1">Voucher</span>
                              </div>

                              <div class="bxshdw overflow-hidden">

                                 <div class="d-flex flex-column gap-3 w-100 p-5">

                                    <div class="d-flex justify-content-between align-items-end">

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-3 align-items-center">
                                             <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">The best hair day - 12 months</span>
                                             <a href="#" id="kt_drawer_example_permanent_toggle6">
                                                <i class="ki-duotone ki-pencil fs-6">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                </i>
                                             </a>
                                          </div>
                                          <div class="d-flex gap-3 align-items-center">
                                             <div>
                                                <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                      <i class="ki-duotone ki-information-2 fs-2">
                                                      <i class="path1 clrblck op1"></i>
                                                      <i class="path2 clrwht"></i>
                                                      <i class="path3 clrwht"></i>
                                                   </i>
                                                   </a>
                                                <!--begin::Menu 1-->
                                                <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                   
                                                   <!--begin::Form-->
                                                   <div class="p-4">

                                                      <span class="text-gray-800 fw-bold fs-6 w-100">Services</span>
                                                      <ul>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Hair cut</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Blow dry</span>
                                                         </li>
                                                      </ul>
                                                      <span class="text-gray-800 fw-bold fs-6 mt-4 w-100">Package</span>
                                                      <span class="text-gray-400 fw-semibold fs-6 mt-4 w-100">The Pamper Package</span>
                                                      <ul>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Face scrub</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Body massage</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Pedicure</span>
                                                         </li>
                                                      </ul>

                                                   </div>
                                                   <!--end::Form-->
                                                </div>
                                                <!--end::Menu 1-->
                                             </div>
                                                <span class="badge badge-danger">
                                                   <i class="bi bi-gender-female me-2 fs-3 clrwht"></i>
                                                   Female
                                                </span>
                                                <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                <div class="add_edit_staff">
                                                   <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                      <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                      <span class="symbol-label bg-warning text-inverse-warning fw-bold">AW</span>
                                                   </div>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                </div>
                                             </div>
                                             <div class="d-flex gap-3 align-items-center">
                                                <div>
                                                <span class="text-gray-400 fw-semibold fs-6">Sessions:</span>
                                                <span class="fw-semibold fs-6 text-gray-800">12</span>
                                             </div>

                                             <div>
                                                <span class="text-gray-400 fw-semibold fs-6">Validity:</span>
                                                <span class="fw-semibold fs-6 text-gray-800">1 year</span>
                                             </div>
                                             </div>
                                       </div>

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-5 justify-content-between">
                                                <span class="fw-semibold fs-6 text-gray-400">Service value :</span>
                                                <span class="fw-semibold fs-6 text-gray-400">SGD 1350</span>
                                             </div>
                                             <div class="d-flex gap-5 justify-content-between">
                                                <span class="fw-semibold fs-6 text-gray-800">Voucher Price :</span>
                                                <span class="fw-semibold fs-6 text-gray-800">SGD 950</span>
                                             </div>
                                             <a href="" class="d-flex align-items-center justify-content-end">
                                             <i class="bi bi-trash3-fill fs-2x clrred"></i>
                                          </a>
                                       </div>

                                    </div>

                                 </div>

                              </div>


                              <div class="mt-2">
                                 <span class="text-gray-900 fs-2 fw-bold me-1">Membership</span>
                              </div>

                              <div class="bxshdw overflow-hidden">

                                 <div class="d-flex flex-column gap-3 w-100 p-5">

                                    <div class="d-flex justify-content-between align-items-end">

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-3 align-items-center">
                                             <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">The VIP Members</span>
                                             <a href="#" id="kt_drawer_example_permanent_toggle6">
                                                <i class="ki-duotone ki-pencil fs-6">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                </i>
                                             </a>
                                          </div>
                                          <div class="d-flex gap-3 align-items-center">
                                             <div>
                                                <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                      <i class="ki-duotone ki-information-2 fs-2">
                                                      <i class="path1 clrblck op1"></i>
                                                      <i class="path2 clrwht"></i>
                                                      <i class="path3 clrwht"></i>
                                                   </i>
                                                   </a>
                                                <!--begin::Menu 1-->
                                                <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                   
                                                   <!--begin::Form-->
                                                   <div class="p-4">

                                                      <span class="text-gray-400 fw-semibold fs-6">The VIP Members Description</span>

                                                   </div>
                                                   <!--end::Form-->
                                                </div>
                                                <!--end::Menu 1-->
                                             </div>
                                                <div class="add_edit_staff">
                                                   <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                      <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                      <span class="symbol-label bg-warning text-inverse-warning fw-bold">AW</span>
                                                   </div>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                </div>
                                             </div>
                                             <div class="d-flex gap-3 align-items-center">
                                             <div>
                                                <span class="text-gray-400 fw-semibold fs-6">Validity:</span>
                                                <span class="fw-semibold fs-6 text-gray-800">No expiry</span>
                                             </div>
                                             </div>
                                       </div>

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-5 justify-content-between">
                                                <span class="fw-semibold fs-6 text-gray-400">Total service value :</span>
                                                <span class="fw-semibold fs-6 text-gray-400">SGD 2900</span>
                                             </div>
                                             <div class="d-flex gap-5 justify-content-between">
                                                <span class="fw-semibold fs-6 text-gray-800">Membership Price :</span>
                                                <span class="fw-semibold fs-6 text-gray-800">SGD 2000</span>
                                             </div>
                                             <a href="" class="d-flex align-items-center justify-content-end">
                                             <i class="bi bi-trash3-fill fs-2x clrred"></i>
                                          </a>
                                       </div>

                                    </div>

                                 </div>

                              </div>


                              <div class="mt-2">
                                 <span class="text-gray-900 fs-2 fw-bold me-1">Product</span>
                              </div>

                              <div class="bxshdw overflow-hidden">

                                 <div class="d-flex flex-column gap-3 w-100 p-5">

                                    <div class="d-flex justify-content-between align-items-end">

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-3 align-items-center">
                                             <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Silky smooth hair shampoo</span>
                                             <a href="#" id="kt_drawer_example_permanent_toggle6">
                                                <i class="ki-duotone ki-pencil fs-6">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                </i>
                                             </a>
                                          </div>
                                          <div class="d-flex gap-3 align-items-center">
                                             <div>
                                                <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                      <i class="ki-duotone ki-information-2 fs-2">
                                                      <i class="path1 clrblck op1"></i>
                                                      <i class="path2 clrwht"></i>
                                                      <i class="path3 clrwht"></i>
                                                   </i>
                                                   </a>
                                                <!--begin::Menu 1-->
                                                <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                   
                                                   <!--begin::Form-->
                                                   <div class="p-4">

                                                      <span class="text-gray-400 fw-semibold fs-6">Silky smooth hair shampoo Description</span>

                                                   </div>
                                                   <!--end::Form-->
                                                </div>
                                                <!--end::Menu 1-->
                                             </div>
                                             <span class="fw-semibold fs-6 text-gray-800">400 ml</span>
                                             <span class="fw-semibold fs-6 text-gray-800">Loreal</span>
                                                <div class="add_edit_staff">
                                                   <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                      <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                      <span class="symbol-label bg-warning text-inverse-warning fw-bold">AW</span>
                                                   </div>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                </div>
                                             </div>
                                             <div class="d-flex gap-3 align-items-center">
                                             <a href="#" class="d-flex align-items-center gap-2">
                                                   <i class="fa-light fa-prescription-bottle"></i>
                                                   <span class="fw-semibold fs-8 text-gray-800">Herbal</span>
                                                </a>
                                             <div>
                                                <span class="text-gray-400 fw-semibold fs-6">Stock:</span>
                                                <span class="fw-semibold fs-6 text-gray-800">143</span>
                                             </div>
                                             </div>
                                       </div>

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-5 justify-content-between">
                                                <span class="fw-semibold fs-6 text-gray-800">Price :</span>
                                                <span class="fw-semibold fs-6 text-gray-800">SGD 19</span>
                                             </div>
                                             <div class="d-flex gap-5 justify-content-between align-items-end">
                                                <span class="fw-semibold fs-6 text-gray-400">Quantity :</span>
                                                <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="100" data-kt-dialer-step="1" data-kt-dialer-decimals="0">

                                                         <!--begin::Decrease control-->
                                                         <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                             <i class="ki-outline ki-minus fs-4"></i>
                                                         </button>
                                                         <!--end::Decrease control-->
                                                         
                                                         <input type="text" class="form-control border-0 text-center p-0 fs-4 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="qty" name="quantity" readonly="" value="1">
                                                         <!--end::Input control-->

                                                         <!--begin::Increase control-->
                                                         <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                             <i class="ki-outline ki-plus fs-4"></i>
                                                         </button>
                                                         <!--end::Increase control-->
                                                     </div>
                                             </div>
                                             <a href="" class="d-flex align-items-center justify-content-end">
                                             <i class="bi bi-trash3-fill fs-2x clrred"></i>
                                          </a>
                                       </div>

                                    </div>

                                 </div>

                              </div>


                              <div class="mt-2">
                                 <span class="text-gray-900 fs-2 fw-bold me-1">Package</span>
                              </div>

                              <div class="bxshdw overflow-hidden">

                                 <div class="d-flex flex-column gap-3 w-100 p-5">

                                    <div class="d-flex justify-content-between align-items-end">

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-3 align-items-center">
                                             <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">The Holiday Vibe</span>
                                             <a href="#" id="kt_drawer_example_permanent_toggle6">
                                                <i class="ki-duotone ki-pencil fs-6">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                </i>
                                             </a>
                                          </div>
                                          <div class="d-flex gap-3 align-items-center">
                                             <div>
                                                <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                      <i class="ki-duotone ki-information-2 fs-2">
                                                      <i class="path1 clrblck op1"></i>
                                                      <i class="path2 clrwht"></i>
                                                      <i class="path3 clrwht"></i>
                                                   </i>
                                                   </a>
                                                <!--begin::Menu 1-->
                                                <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                   
                                                   <!--begin::Form-->
                                                   <div class="p-4">

                                                      <span class="text-gray-800 fw-bold fs-6">The Pamper Package</span>
                                                      <ul>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Face scrub</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Body massage</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Pedicure</span>
                                                         </li>
                                                      </ul>

                                                   </div>
                                                   <!--end::Form-->
                                                </div>
                                                <!--end::Menu 1-->
                                             </div>
                                             <span class="badge badge-info">
                                                   <i class="bi bi-gender-male me-2 fs-3 clrwht"></i>
                                                   Male
                                                </span>
                                                <a href="#" class="d-flex align-items-center">
                                                   <i class="ki-duotone ki-heart-circle fs-2 me-1">
                                                   <i class="path1"></i>
                                                   <i class="path2 clrpnk"></i>
                                                </i>
                                                   <span class="fw-semibold fs-8 text-gray-800">Package</span>
                                                </a>
                                                <div class="add_edit_staff">
                                                   <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                      <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                      <span class="symbol-label bg-warning text-inverse-warning fw-bold">AW</span>
                                                   </div>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                </div>
                                             </div>
                                             <div class="d-flex gap-3 align-items-center">
                                             <span class="text-gray-400 fw-semibold fs-6">2:30 - 3:00 PM (30 min)</span>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                                                <i class="ki-duotone ki-pencil fs-6">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                </i>
                                             </a>
                                             </div>
                                       </div>

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-5 justify-content-between">
                                                <span class="fw-semibold fs-6 text-gray-800">Price :</span>
                                                <span class="fw-semibold fs-6 text-gray-800">SGD 35</span>
                                             </div>
                                             <a href="" class="d-flex align-items-center justify-content-end">
                                             <i class="bi bi-trash3-fill fs-2x clrred"></i>
                                          </a>
                                       </div>

                                    </div>

                                 </div>

                              </div>

                              <a href="#" id="kt_drawer_example_permanent_toggle6" class="d-inline-flex align-items-center gap-2 icnclr mt-2">
                                 <i class="bi bi-plus-circle fs-2"></i>
                                 <span>Add more items</span>
                              </a>

                           </div>

                        </div>
                        <!--end:::Tab pane-->

                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="ordernotes" role="tabpanel">

                           <!--begin::Wrapper-->
                           <div class="d-flex flex-column px-9 brdr mt-10 text-center">
                              <!--begin::Section-->
                              <div class="py-10">
                                 <i class="ki-duotone ki-note-2 mb-5 fs-big">
                                  <i class="path1"></i>
                                  <i class="path2"></i>
                                  <i class="path3"></i>
                                  <i class="path4"></i>
                                 </i>
                                 <!--begin::Title-->
                                 <h3 class="text-dark text-center fw-bold">No appointment notes</h3>
                                 <!--end::Title-->
                                 <!--begin::Text-->
                                 <div class="text-center text-gray-600 fw-semibold pt-1">This appointment has no notes.
                                 </div>
                                 <!--end::Text-->

                                 <!--begin::Menu toggle-->
                                 <a href="#" class="btn btn-sm btn-primary px-6 mt-5" data-bs-toggle="modal" data-bs-target="#kt_modal_2">add a note</a>
                                 <!--end::Menu toggle-->
                                 
                              </div>
                              <!--end::Section-->
                              
                           </div>
                           <!--end::Wrapper-->

                           <div class="d-flex gap-4 justify-content-between p-5 brdr mt-10 w-100">
                              <div class="fs-5 fw-semibold mb-2">lorem ipsum dolar sit amet lorem ipsum dolar sit amet lorem ipsum dolar sit amet</div>
                              <div>
                                 <a href="#" class="editbtn" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <span class="fs-2">...</span>
                                 </a>
                                 <!--begin::Menu-->
                                 <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                       <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_3">Edit appointment notes</a>
                                    </div>
                                    <!--end::Menu item-->
                                 </div>
                                 <!--end::Menu-->
                              </div>
                           </div>

                        </div>
                        <!--end:::Tab pane-->

                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="orderactivity" role="tabpanel">

                           <!--begin::Wrapper-->
                           <div class="d-flex flex-column gap-4 p-5 brdr">
                              <div class="d-flex gap-4">
                                 <div class="position-relative appactivity">
                                    <i class="ki-duotone ki-profile-circle fs-big">
                                     <i class="path1"></i>
                                     <i class="path2"></i>
                                     <i class="path3"></i>
                                    </i>
                                    <span class="position-absolute top-75 start-75 translate-middle  badge badge-circle badge-success">
                                       <i class="ki-duotone ki-check clrwht"></i>
                                    </span>
                                 </div>
                                 <div class="d-flex flex-column gap-2">
                                    <span class="text-gray-800 fs-4 fw-semibold">Appointment Created</span>
                                    <span class="text-gray-400 fs-4">03 Jul 2023 at 10:54pm</span>
                                 </div>
                              </div>
                              <div>
                                 <span class="text-gray-600 fs-4">Booked by Sonu, reference CC8273U1</span>
                              </div>
                           </div>

                        </div>
                        <!--end:::Tab pane-->

                     </div>

                  </div>

               </div>

               <div class="card card-flush mt-4">
            
                  <div class="card-body">

                     <!--begin:::Tabs-->
                     <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-4">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#app_voucher">Voucher</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#app_giftcard">Gift card</a>
                        </li>
                        <!--end:::Tab item-->
                     </ul>
                     <!--end:::Tabs-->

                     <!--begin:::Tab content-->
                     <div class="tab-content" id="myTabContent">

                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade show active" id="app_voucher" role="tabpanel">

                           <div class="d-flex flex-column gap-4">

                              <div class="d-flex justify-content-between align-items-center">
                                 
                                 <div class="d-flex gap-4 bggrey p-2">
                                    <span class="fw-bold fs-6 text-gray-800">6 months of look of love</span>
                                    <span class="fw-semibold fs-6 text-gray-400">(10/20)</span>
                                    <span class="fw-semibold fs-6 text-gray-400">expiry: 25 Jul 2024</span>
                                 </div>

                                 <span class="fw-semibold fs-6 text-gray-400">Applicable on 3 services</span>

                                 <a href="#" class="btn btn-sm btn-secondary">Remove</a>

                              </div>

                              <div class="d-flex justify-content-between align-items-center">
                                 
                                 <div class="d-flex gap-4 bggrey p-2">
                                    <span class="fw-bold fs-6 text-gray-800">Smooth leg through the year</span>
                                    <span class="fw-semibold fs-6 text-gray-400">(8/8)</span>
                                    <span class="fw-semibold fs-6 text-gray-400">expiry: 23 Dec 2023</span>
                                 </div>

                                 <span class="fw-semibold fs-6 text-gray-400">Applicable on 0 services</span>

                                 <a href="#" class="btn btn-sm btn-secondary">Apply</a>

                              </div>

                           </div>

                        </div>
                        <!--begin:::Tab pane-->

                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="app_giftcard" role="tabpanel">

                           <div class="d-flex flex-column gap-4">

                              <div class="d-flex justify-content-between align-items-center">
                                 
                                 <div class="d-flex gap-4 bggrey p-2">
                                    <span class="fw-bold fs-6 text-gray-800">6 months of look of love</span>
                                    <span class="fw-semibold fs-6 text-gray-400">(10/20)</span>
                                    <span class="fw-semibold fs-6 text-gray-400">expiry: 25 Jul 2024</span>
                                 </div>

                                 <span class="fw-semibold fs-6 text-gray-400">Applicable on 3 services</span>

                                 <a href="#" class="btn btn-sm btn-secondary">Remove</a>

                              </div>

                              <div class="d-flex justify-content-between align-items-center">
                                 
                                 <div class="d-flex gap-4 bggrey p-2">
                                    <span class="fw-bold fs-6 text-gray-800">Smooth leg through the year</span>
                                    <span class="fw-semibold fs-6 text-gray-400">(8/8)</span>
                                    <span class="fw-semibold fs-6 text-gray-400">expiry: 23 Dec 2023</span>
                                 </div>

                                 <span class="fw-semibold fs-6 text-gray-400">Applicable on 0 services</span>

                                 <a href="#" class="btn btn-sm btn-secondary">Apply</a>

                              </div>

                           </div>

                        </div>
                        <!--end:::Tab pane-->

                     </div>
                     <!--end:::Tab content-->

                  </div>

               </div>

               <div class="row mt-4 mb-6">
                  
                  <div class="col-md-7">

                     <div class="card card-flush h-100">
            
                        <div class="card-body">

                           <!--begin:::Tabs-->
                           <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-4">
                              <!--begin:::Tab item-->
                              <li class="nav-item">
                                 <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#app_membership">Membership</a>
                              </li>
                              <!--end:::Tab item-->
                              <!--begin:::Tab item-->
                              <li class="nav-item">
                                 <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#app_promo">Promo</a>
                              </li>
                              <!--end:::Tab item-->
                           </ul>
                           <!--end:::Tabs-->

                           <!--begin:::Tab content-->
                           <div class="tab-content" id="myTabContent">

                              <!--begin:::Tab pane-->
                              <div class="tab-pane fade show active" id="app_membership" role="tabpanel">

                                 <div class="d-flex flex-column gap-4">

                                    <div class="d-flex justify-content-between align-items-center">
                                       
                                       <div class="d-flex gap-4 bggrey p-2">
                                          <span class="fw-bold fs-6 text-gray-800">The VIP member</span>
                                          <span class="fw-semibold fs-6 text-gray-400">$280</span>
                                          <span class="fw-semibold fs-6 text-gray-400">expiry: Never</span>
                                       </div>

                                       <a href="#" class="btn btn-sm btn-secondary">Apply</a>

                                    </div>

                                 </div>

                              </div>
                              <!--begin:::Tab pane-->

                              <!--begin:::Tab pane-->
                              <div class="tab-pane fade" id="app_promo" role="tabpanel">

                                 <div class="d-flex flex-column gap-4">

                                    <div class="d-flex justify-content-between align-items-center">
                                       
                                       <div class="d-flex gap-4 bggrey p-2">
                                          <span class="fw-bold fs-6 text-gray-800">The VIP member</span>
                                          <span class="fw-semibold fs-6 text-gray-400">$280</span>
                                          <span class="fw-semibold fs-6 text-gray-400">expiry: Never</span>
                                       </div>

                                       <a href="#" class="btn btn-sm btn-secondary">Apply</a>

                                    </div>

                                 </div>

                              </div>
                              <!--end:::Tab pane-->

                           </div>
                           <!--end:::Tab content-->

                        </div>

                     </div>

                  </div>

                  <div class="col-md-5">

                     <div class="card card-flush h-100">
            
                        <div class="card-body">

                           <div class="row">
                              
                              <div class="col-7 text-end my-2">
                                 <span class="fs-6 fw-semibold text-400">Services(2) :</span>
                              </div>
                              <div class="col-5 my-2">
                                 <span class="fs-6 fw-bold text-800">SGD 64</span>
                              </div>

                              <div class="col-7 text-end my-2">
                                 <span class="fs-6 fw-semibold text-400">Vouchers(1) :</span>
                              </div>
                              <div class="col-5 my-2">
                                 <span class="fs-6 fw-bold text-800">SGD 950</span>
                              </div>

                              <div class="col-7 text-end my-2">
                                 <span class="fs-2 fw-semibold text-400">Total</span>
                              </div>
                              <div class="col-5 my-2">
                                 <span class="fs-2 fw-bold text-800">SGD 1014</span>
                              </div>

                              <div class="col-7 text-end my-2">
                                 <span class="fs-6 fw-semibold clrblue">Offer discount</span>
                              </div>
                              <div class="col-5 my-2">
                                 <span class="fs-6 fw-bold clrblue">SGD 344</span>
                              </div>

                              <div class="col-7 text-end my-2">
                                 <span class="fs-2 fw-bold text-400">To pay</span>
                              </div>
                              <div class="col-5 my-2">
                                 <span class="fs-2 fw-bold text-800">SGD 670</span>
                              </div>

                              <div class="col-12 d-flex justify-content-end gap-2 my-2">
                                 <a href="#" class="btn btn-sm btn-primary px-6">Save</a>
                                 <a href="#" class="btn btn-sm btn-primary px-6">Checkout</a>
                              </div>

                           </div>

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
          id="kt_drawer_example_permanent6"
          class="bg-white"
          data-kt-drawer="true"
          data-kt-drawer-activate="true"
          data-kt-drawer-toggle="#kt_drawer_example_permanent_toggle6"
          data-kt-drawer-close="#kt_drawer_example_permanent_close6"
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
                      Add Items
                  </div>
                  <!--end::Title-->

                  <!--begin::Card toolbar-->
                  <div class="card-toolbar">
                      <!--begin::Close-->
                      <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="kt_drawer_example_permanent_close6">
                          <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                      </div>
                      <!--end::Close-->
                  </div>
                  <!--end::Card toolbar-->
              </div>
              <!--end::Card header-->

              <!--begin::Card body-->
              <div class="hover-scroll-overlay-y pt-3 px-5">

               <div class="card card-flush mt-2">
                  
                  <div class="card-body">
                     
                     <!--begin:::Tabs-->
                     <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-4">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#add_item_service">Services</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#add_item_package">Package</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#add_item_voucher">Voucher</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#add_item_membership">Membership</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#add_item_product">Product</a>
                        </li>
                        <!--end:::Tab item-->
                     </ul>
                     <!--end:::Tabs-->

                     <!--begin:::Tab content-->
                     <div class="tab-content" id="myTabContent">

                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade show active" id="add_item_service" role="tabpanel">

                           <!--begin::Nav-->
                           <ul class="nav nav-pills nav-pills-custom mb-3" id="category">
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" href="#add_item1">

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
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#add_item2">

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
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#add_item3">
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
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#add_item4">
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
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#add_item5">
                                    <i class="ki-outline ki-abstract-26 fs-1"></i>
                                    <!--begin::Title-->
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Waxing</span>
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

                           <!--begin::Tab Content-->
                           <div class="tab-content">

                              <!--begin::Tap pane-->
                              <div class="tab-pane fade active show" id="add_item1">

                                 <div class="d-flex flex-column gap-5">

                                    <div class="searchboxdiv mb-0">
                                       <div class="searchbox">
                                          <i class="fas fa-search"></i>
                                          <input type="text" placeholder="search" name="search-box" value="">
                                       </div>
                                       <div>
                                          <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                             <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                             </i>Filter
                                          </a>
                                          <!--begin::Menu-->
                                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">

                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="" class="menu-link px-3">Gender</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Off-Peak Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Staff Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Voucher</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Package</a>
                                             </div>
                                             <!--end::Menu item-->
                                          </div>
                                          <!--end::Menu-->
                                       </div>
                                    </div>

                                    <div class="mt-2">
                                       <span class="text-gray-900 fs-4 fw-bold me-1">Hair (2)</span>
                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Hair cut</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         <div class="p-4">
                                                            <span class="text-gray-400 fw-semibold fs-6">Hair cut Description</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                      <span class="badge badge-info">
                                                         <i class="bi bi-gender-male me-2 fs-3 clrwht"></i>
                                                         Male
                                                      </span>
                                                      <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-heart-circle fs-2 me-1">
                                                         <i class="path1"></i>
                                                         <i class="path2 clrpnk"></i>
                                                      </i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Package</span>
                                                      </a>
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-star fs-6 me-1"></i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Voucher</span>
                                                      </a>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">

                                                <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype1" checked="true">
                                                           <span class="form-check-label">
                                                               Walk-in
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>35</span>
                                                       </span>
                                                   </div>

                                                   <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype1">
                                                           <span class="form-check-label">
                                                               Off Peak
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>29</span>
                                                       </span>
                                                   </div>

                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Hair cut & blow dry</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         <div class="p-4">
                                                            <span class="text-gray-400 fw-semibold fs-6">Hair cut & blow dry Description</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                      <span class="badge badge-info">
                                                         <i class="bi bi-gender-male me-2 fs-3 clrwht"></i>
                                                         Male
                                                      </span>
                                                      <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-heart-circle fs-2 me-1">
                                                         <i class="path1"></i>
                                                         <i class="path2 clrpnk"></i>
                                                      </i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Package</span>
                                                      </a>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">

                                                <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype2" checked="true">
                                                           <span class="form-check-label">
                                                               Walk-in
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>35</span>
                                                       </span>
                                                   </div>

                                                   <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype2">
                                                           <span class="form-check-label">
                                                               Off Peak
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>29</span>
                                                       </span>
                                                   </div>
                                                
                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>

                                          </div>

                                       </div>

                                    </div>


                                    <div class="mt-2">
                                       <span class="text-gray-900 fs-4 fw-bold me-1">Face care (2)</span>
                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Face cleaning</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         <div class="p-4">
                                                            <span class="text-gray-400 fw-semibold fs-6">Face cleaning Description</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                      <span class="badge badge-info">
                                                         <i class="bi bi-gender-male me-2 fs-3 clrwht"></i>
                                                         Male
                                                      </span>
                                                      <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-heart-circle fs-2 me-1">
                                                         <i class="path1"></i>
                                                         <i class="path2 clrpnk"></i>
                                                      </i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Package</span>
                                                      </a>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">

                                                <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype3" checked="true">
                                                           <span class="form-check-label">
                                                               Walk-in
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>35</span>
                                                       </span>
                                                   </div>

                                                   <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype3">
                                                           <span class="form-check-label">
                                                               Off Peak
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>29</span>
                                                       </span>
                                                   </div>

                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Dermaplaning</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         <div class="p-4">
                                                            <span class="text-gray-400 fw-semibold fs-6">Dermaplaning Description</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                      <span class="badge badge-danger">
                                                         <i class="bi bi-gender-female me-2 fs-3 clrwht"></i>
                                                         Female
                                                      </span>
                                                      <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-heart-circle fs-2 me-1">
                                                         <i class="path1"></i>
                                                         <i class="path2 clrpnk"></i>
                                                      </i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Package</span>
                                                      </a>
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-star fs-6 me-1"></i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Voucher</span>
                                                      </a>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">

                                                <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype4" checked="true">
                                                           <span class="form-check-label">
                                                               Walk-in
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>35</span>
                                                       </span>
                                                   </div>

                                                   <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype4">
                                                           <span class="form-check-label">
                                                               Off Peak
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>29</span>
                                                       </span>
                                                   </div>

                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>

                                          </div>

                                       </div>

                                    </div>


                                    <div class="mt-2">
                                       <span class="text-gray-900 fs-4 fw-bold me-1">Body care (1)</span>
                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Body massage</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         <div class="p-4">
                                                            <span class="text-gray-400 fw-semibold fs-6">Body massage Description</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                      <span class="badge badge-warning">
                                                         <i class="bi bi-gender-ambiguous me-2 fs-3 clrwht"></i>
                                                         Unisex
                                                      </span>
                                                      <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-star fs-6 me-1"></i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Voucher</span>
                                                      </a>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">

                                                <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype5" checked="true">
                                                           <span class="form-check-label">
                                                               Walk-in
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>35</span>
                                                       </span>
                                                   </div>

                                                   <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype5">
                                                           <span class="form-check-label">
                                                               Off Peak
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>29</span>
                                                       </span>
                                                   </div>

                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>
                              <!--end::Tap pane-->

                              <!--begin::Tap pane-->
                              <div class="tab-pane fade" id="add_item2">

                                 <div class="d-flex flex-column gap-5">

                                    <div class="searchboxdiv mb-0">
                                       <div class="searchbox">
                                          <i class="fas fa-search"></i>
                                          <input type="text" placeholder="search" name="search-box" value="">
                                       </div>
                                       <div>
                                          <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                             <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                             </i>Filter
                                          </a>
                                          <!--begin::Menu-->
                                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">

                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="" class="menu-link px-3">Gender</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Off-Peak Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Staff Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Voucher</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Package</a>
                                             </div>
                                             <!--end::Menu item-->
                                          </div>
                                          <!--end::Menu-->
                                       </div>
                                    </div>

                                    <div class="mt-2">
                                       <span class="text-gray-900 fs-4 fw-bold me-1">Hair (2)</span>
                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Hair cut</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         <div class="p-4">
                                                            <span class="text-gray-400 fw-semibold fs-6">Hair cut Description</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                      <span class="badge badge-info">
                                                         <i class="bi bi-gender-male me-2 fs-3 clrwht"></i>
                                                         Male
                                                      </span>
                                                      <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-heart-circle fs-2 me-1">
                                                         <i class="path1"></i>
                                                         <i class="path2 clrpnk"></i>
                                                      </i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Package</span>
                                                      </a>
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-star fs-6 me-1"></i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Voucher</span>
                                                      </a>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">

                                                <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype6" checked="true">
                                                           <span class="form-check-label">
                                                               Walk-in
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>35</span>
                                                       </span>
                                                   </div>

                                                   <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype6">
                                                           <span class="form-check-label">
                                                               Off Peak
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>29</span>
                                                       </span>
                                                   </div>

                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Hair cut & blow dry</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         <div class="p-4">
                                                            <span class="text-gray-400 fw-semibold fs-6">Hair cut & blow dry Description</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                      <span class="badge badge-info">
                                                         <i class="bi bi-gender-male me-2 fs-3 clrwht"></i>
                                                         Male
                                                      </span>
                                                      <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-heart-circle fs-2 me-1">
                                                         <i class="path1"></i>
                                                         <i class="path2 clrpnk"></i>
                                                      </i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Package</span>
                                                      </a>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">

                                                <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype7" checked="true">
                                                           <span class="form-check-label">
                                                               Walk-in
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>35</span>
                                                       </span>
                                                   </div>

                                                   <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype7">
                                                           <span class="form-check-label">
                                                               Off Peak
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>29</span>
                                                       </span>
                                                   </div>
                                                
                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>
                              <!--end::Tap pane-->

                              <!--begin::Tap pane-->
                              <div class="tab-pane fade" id="add_item3">

                                 <div class="d-flex flex-column gap-5">

                                    <div class="searchboxdiv mb-0">
                                       <div class="searchbox">
                                          <i class="fas fa-search"></i>
                                          <input type="text" placeholder="search" name="search-box" value="">
                                       </div>
                                       <div>
                                          <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                             <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                             </i>Filter
                                          </a>
                                          <!--begin::Menu-->
                                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">

                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="" class="menu-link px-3">Gender</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Off-Peak Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Staff Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Voucher</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Package</a>
                                             </div>
                                             <!--end::Menu item-->
                                          </div>
                                          <!--end::Menu-->
                                       </div>
                                    </div>

                                    <div class="mt-2">
                                       <span class="text-gray-900 fs-4 fw-bold me-1">Face care (2)</span>
                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Face cleaning</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         <div class="p-4">
                                                            <span class="text-gray-400 fw-semibold fs-6">Face cleaning Description</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                      <span class="badge badge-info">
                                                         <i class="bi bi-gender-male me-2 fs-3 clrwht"></i>
                                                         Male
                                                      </span>
                                                      <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-heart-circle fs-2 me-1">
                                                         <i class="path1"></i>
                                                         <i class="path2 clrpnk"></i>
                                                      </i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Package</span>
                                                      </a>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">

                                                <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype8" checked="true">
                                                           <span class="form-check-label">
                                                               Walk-in
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>35</span>
                                                       </span>
                                                   </div>

                                                   <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype8">
                                                           <span class="form-check-label">
                                                               Off Peak
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>29</span>
                                                       </span>
                                                   </div>

                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Dermaplaning</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         <div class="p-4">
                                                            <span class="text-gray-400 fw-semibold fs-6">Dermaplaning Description</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                      <span class="badge badge-danger">
                                                         <i class="bi bi-gender-female me-2 fs-3 clrwht"></i>
                                                         Female
                                                      </span>
                                                      <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-heart-circle fs-2 me-1">
                                                         <i class="path1"></i>
                                                         <i class="path2 clrpnk"></i>
                                                      </i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Package</span>
                                                      </a>
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-star fs-6 me-1"></i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Voucher</span>
                                                      </a>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">

                                                <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype9" checked="true">
                                                           <span class="form-check-label">
                                                               Walk-in
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>35</span>
                                                       </span>
                                                   </div>

                                                   <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype9">
                                                           <span class="form-check-label">
                                                               Off Peak
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>29</span>
                                                       </span>
                                                   </div>

                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>
                              <!--end::Tap pane-->

                              <!--begin::Tap pane-->
                              <div class="tab-pane fade" id="add_item4">

                                 <div class="d-flex flex-column gap-5">

                                    <div class="searchboxdiv mb-0">
                                       <div class="searchbox">
                                          <i class="fas fa-search"></i>
                                          <input type="text" placeholder="search" name="search-box" value="">
                                       </div>
                                       <div>
                                          <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                             <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                             </i>Filter
                                          </a>
                                          <!--begin::Menu-->
                                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">

                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="" class="menu-link px-3">Gender</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Off-Peak Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Staff Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Voucher</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Package</a>
                                             </div>
                                             <!--end::Menu item-->
                                          </div>
                                          <!--end::Menu-->
                                       </div>
                                    </div>

                                    <div class="mt-2">
                                       <span class="text-gray-900 fs-4 fw-bold me-1">Face care (2)</span>
                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Face cleaning</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         <div class="p-4">
                                                            <span class="text-gray-400 fw-semibold fs-6">Face cleaning Description</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                      <span class="badge badge-info">
                                                         <i class="bi bi-gender-male me-2 fs-3 clrwht"></i>
                                                         Male
                                                      </span>
                                                      <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-heart-circle fs-2 me-1">
                                                         <i class="path1"></i>
                                                         <i class="path2 clrpnk"></i>
                                                      </i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Package</span>
                                                      </a>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">

                                                <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype10" checked="true">
                                                           <span class="form-check-label">
                                                               Walk-in
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>35</span>
                                                       </span>
                                                   </div>

                                                   <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype10">
                                                           <span class="form-check-label">
                                                               Off Peak
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>29</span>
                                                       </span>
                                                   </div>

                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Dermaplaning</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         <div class="p-4">
                                                            <span class="text-gray-400 fw-semibold fs-6">Dermaplaning Description</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                      <span class="badge badge-danger">
                                                         <i class="bi bi-gender-female me-2 fs-3 clrwht"></i>
                                                         Female
                                                      </span>
                                                      <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-heart-circle fs-2 me-1">
                                                         <i class="path1"></i>
                                                         <i class="path2 clrpnk"></i>
                                                      </i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Package</span>
                                                      </a>
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-star fs-6 me-1"></i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Voucher</span>
                                                      </a>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">

                                                <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype11" checked="true">
                                                           <span class="form-check-label">
                                                               Walk-in
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>35</span>
                                                       </span>
                                                   </div>

                                                   <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype11">
                                                           <span class="form-check-label">
                                                               Off Peak
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>29</span>
                                                       </span>
                                                   </div>

                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>
                              <!--end::Tap pane-->

                              <!--begin::Tap pane-->
                              <div class="tab-pane fade" id="add_item5">

                                 <div class="d-flex flex-column gap-5">

                                    <div class="searchboxdiv mb-0">
                                       <div class="searchbox">
                                          <i class="fas fa-search"></i>
                                          <input type="text" placeholder="search" name="search-box" value="">
                                       </div>
                                       <div>
                                          <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                             <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                             </i>Filter
                                          </a>
                                          <!--begin::Menu-->
                                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">

                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="" class="menu-link px-3">Gender</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Off-Peak Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Staff Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Voucher</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Package</a>
                                             </div>
                                             <!--end::Menu item-->
                                          </div>
                                          <!--end::Menu-->
                                       </div>
                                    </div>

                                    <div class="mt-2">
                                       <span class="text-gray-900 fs-4 fw-bold me-1">Face care (2)</span>
                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Face cleaning</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         <div class="p-4">
                                                            <span class="text-gray-400 fw-semibold fs-6">Face cleaning Description</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                      <span class="badge badge-info">
                                                         <i class="bi bi-gender-male me-2 fs-3 clrwht"></i>
                                                         Male
                                                      </span>
                                                      <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-heart-circle fs-2 me-1">
                                                         <i class="path1"></i>
                                                         <i class="path2 clrpnk"></i>
                                                      </i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Package</span>
                                                      </a>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">

                                                <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype12" checked="true">
                                                           <span class="form-check-label">
                                                               Walk-in
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>35</span>
                                                       </span>
                                                   </div>

                                                   <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype12">
                                                           <span class="form-check-label">
                                                               Off Peak
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>29</span>
                                                       </span>
                                                   </div>

                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Dermaplaning</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         <div class="p-4">
                                                            <span class="text-gray-400 fw-semibold fs-6">Dermaplaning Description</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                      <span class="badge badge-danger">
                                                         <i class="bi bi-gender-female me-2 fs-3 clrwht"></i>
                                                         Female
                                                      </span>
                                                      <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-heart-circle fs-2 me-1">
                                                         <i class="path1"></i>
                                                         <i class="path2 clrpnk"></i>
                                                      </i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Package</span>
                                                      </a>
                                                      <a href="#" class="d-flex align-items-center">
                                                         <i class="ki-duotone ki-star fs-6 me-1"></i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Voucher</span>
                                                      </a>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">

                                                <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype13" checked="true">
                                                           <span class="form-check-label">
                                                               Walk-in
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>35</span>
                                                       </span>
                                                   </div>

                                                   <div class="d-flex gap-5 justify-content-between">
                                                   <label class="form-check">
                                                           <input class="form-check-input" type="radio" value="" name="pricetype13">
                                                           <span class="form-check-label">
                                                               Off Peak
                                                           </span>
                                                       </label>
                                                       <span class="fw-semibold fs-6 text-gray-800">
                                                         SGD <span>29</span>
                                                       </span>
                                                   </div>

                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>
                              <!--end::Tap pane-->

                           </div>
                           <!--end::Tab Content-->

                        </div>
                        <!--end:::Tab pane-->

                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="add_item_package" role="tabpanel">

                           <div class="d-flex flex-column gap-5">

                              <div class="searchboxdiv mb-0">
                                 <div class="searchbox">
                                    <i class="fas fa-search"></i>
                                    <input type="text" placeholder="search" name="search-box" value="">
                                 </div>
                                 <div>
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                       <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                          <span class="path1"></span>
                                          <span class="path2"></span>
                                       </i>Filter
                                    </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">

                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="" class="menu-link px-3">Gender</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="system-admin-manage.html" class="menu-link px-3">Off-Peak Price</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="system-admin-manage.html" class="menu-link px-3">Staff Price</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="system-admin-manage.html" class="menu-link px-3">Voucher</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="system-admin-manage.html" class="menu-link px-3">Package</a>
                                       </div>
                                       <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                 </div>
                              </div>

                              <div class="bxshdw overflow-hidden">

                                 <div class="d-flex flex-column gap-3 w-100 p-5">

                                    <div class="d-flex justify-content-between align-items-end">

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-3 align-items-center">
                                             <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">The Pamper Package</span>
                                          </div>
                                          <div class="d-flex gap-3 align-items-center">
                                             <div>
                                                <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                      <i class="ki-duotone ki-information-2 fs-2">
                                                      <i class="path1 clrblck op1"></i>
                                                      <i class="path2 clrwht"></i>
                                                      <i class="path3 clrwht"></i>
                                                   </i>
                                                   </a>
                                                   <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                   <div class="p-4">
                                                      <span class="text-gray800 fw-semibold fs-6 w-100">The Pamper Package</span>
                                                      <ul>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Face scrub</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Body massage</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Pedicure</span>
                                                         </li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </div>
                                                <span class="badge badge-info">
                                                   <i class="bi bi-gender-male me-2 fs-3 clrwht"></i>
                                                   Male
                                                </span>
                                                <span class="fw-semibold fs-6 text-gray-800">95 min</span>
                                                <div class="add_edit_staff">
                                                   <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                      <i class="ki-duotone ki-plus-circle fs-2x">
                                                       <i class="path1"></i>
                                                       <i class="path2"></i>
                                                   </i>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                </div>
                                             </div>
                                             <div class="d-flex gap-3">
                                                <a href="#" class="d-flex align-items-center">
                                                   <i class="ki-duotone ki-star fs-6 me-1"></i>
                                                   <span class="fw-semibold fs-8 text-gray-800">Voucher</span>
                                                </a>
                                             </div>
                                       </div>

                                       <div class="d-flex flex-column gap-3">

                                          <div class="d-flex gap-5 justify-content-between">
                                             <label class="form-check">
                                                     <input class="form-check-input" type="radio" value="" name="pricetype14" checked="true">
                                                     <span class="form-check-label">
                                                         Walk-in
                                                     </span>
                                                 </label>
                                                 <span class="fw-semibold fs-6 text-gray-800">
                                                   SGD <span>105</span> <span class="text-decor-line">(120)</span>
                                                 </span>
                                             </div>

                                             <div class="d-flex gap-5 justify-content-between">
                                             <label class="form-check">
                                                     <input class="form-check-input" type="radio" value="" name="pricetype14">
                                                     <span class="form-check-label">
                                                         Off Peak
                                                     </span>
                                                 </label>
                                                 <span class="fw-semibold fs-6 text-gray-800">
                                                   SGD <span>99</span> <span class="text-decor-line">(110)</span>
                                                 </span>
                                             </div>

                                         </div>

                                         <div class="d-flex flex-column gap-3">

                                             <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                              <div class="bxshdw overflow-hidden">

                                 <div class="d-flex flex-column gap-3 w-100 p-5">

                                    <div class="d-flex justify-content-between align-items-end">

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-3 align-items-center">
                                             <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">The Perfect Pair</span>
                                          </div>
                                          <div class="d-flex gap-3 align-items-center">
                                             <div>
                                                <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                      <i class="ki-duotone ki-information-2 fs-2">
                                                      <i class="path1 clrblck op1"></i>
                                                      <i class="path2 clrwht"></i>
                                                      <i class="path3 clrwht"></i>
                                                   </i>
                                                   </a>
                                                   <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                   <div class="p-4">
                                                      <span class="text-gray-800 fw-semibold fs-6 w-100">The Perfect Pair</span>
                                                      <ul>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Face scrub</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Body massage</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Pedicure</span>
                                                         </li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </div>
                                                <span class="badge badge-info">
                                                   <i class="bi bi-gender-male me-2 fs-3 clrwht"></i>
                                                   Male
                                                </span>
                                                <span class="fw-semibold fs-6 text-gray-800">105 min</span>
                                                <div class="add_edit_staff">
                                                   <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                      <i class="ki-duotone ki-plus-circle fs-2x">
                                                       <i class="path1"></i>
                                                       <i class="path2"></i>
                                                   </i>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                </div>
                                             </div>
                                       </div>

                                       <div class="d-flex flex-column gap-3">

                                          <div class="d-flex gap-5 justify-content-between">
                                             <label class="form-check">
                                                     <input class="form-check-input" type="radio" value="" name="pricetype15" checked="true">
                                                     <span class="form-check-label">
                                                         Walk-in
                                                     </span>
                                                 </label>
                                                 <span class="fw-semibold fs-6 text-gray-800">
                                                   SGD <span>135</span> <span class="text-decor-line">(145)</span>
                                                 </span>
                                             </div>

                                             <div class="d-flex gap-5 justify-content-between">
                                             <label class="form-check">
                                                     <input class="form-check-input" type="radio" value="" name="pricetype15">
                                                     <span class="form-check-label">
                                                         Off Peak
                                                     </span>
                                                 </label>
                                                 <span class="fw-semibold fs-6 text-gray-800">
                                                   SGD <span>129</span> <span class="text-decor-line">(140)</span>
                                                 </span>
                                             </div>

                                         </div>

                                         <div class="d-flex flex-column gap-3">

                                             <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                              <div class="bxshdw overflow-hidden">

                                 <div class="d-flex flex-column gap-3 w-100 p-5">

                                    <div class="d-flex justify-content-between align-items-end">

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-3 align-items-center">
                                             <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">The Ultimate Indulgence</span>
                                          </div>
                                          <div class="d-flex gap-3 align-items-center">
                                             <div>
                                                <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                      <i class="ki-duotone ki-information-2 fs-2">
                                                      <i class="path1 clrblck op1"></i>
                                                      <i class="path2 clrwht"></i>
                                                      <i class="path3 clrwht"></i>
                                                   </i>
                                                   </a>
                                                   <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                   <div class="p-4">
                                                      <span class="text-gray-800 fw-semibold fs-6 w-100">The Ultimate Indulgence</span>
                                                      <ul>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Face scrub</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Body massage</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Pedicure</span>
                                                         </li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </div>
                                                <span class="badge badge-info">
                                                   <i class="bi bi-gender-male me-2 fs-3 clrwht"></i>
                                                   Male
                                                </span>
                                                <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                <div class="add_edit_staff">
                                                   <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                      <i class="ki-duotone ki-plus-circle fs-2x">
                                                       <i class="path1"></i>
                                                       <i class="path2"></i>
                                                   </i>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                </div>
                                             </div>
                                       </div>

                                       <div class="d-flex flex-column gap-3">

                                          <div class="d-flex gap-5 justify-content-between">
                                             <label class="form-check">
                                                     <input class="form-check-input" type="radio" value="" name="pricetype16" checked="true">
                                                     <span class="form-check-label">
                                                         Walk-in
                                                     </span>
                                                 </label>
                                                 <span class="fw-semibold fs-6 text-gray-800">
                                                   SGD <span>35</span> <span class="text-decor-line">(40)</span>
                                                 </span>
                                             </div>

                                             <div class="d-flex gap-5 justify-content-between">
                                             <label class="form-check">
                                                     <input class="form-check-input" type="radio" value="" name="pricetype16">
                                                     <span class="form-check-label">
                                                         Off Peak
                                                     </span>
                                                 </label>
                                                 <span class="fw-semibold fs-6 text-gray-800">
                                                   SGD <span>29</span> <span class="text-decor-line">(35)</span>
                                                 </span>
                                             </div>

                                         </div>

                                         <div class="d-flex flex-column gap-3">

                                             <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                              <div class="bxshdw overflow-hidden">

                                 <div class="d-flex flex-column gap-3 w-100 p-5">

                                    <div class="d-flex justify-content-between align-items-end">

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-3 align-items-center">
                                             <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">The Holiday Vibe</span>
                                          </div>
                                          <div class="d-flex gap-3 align-items-center">
                                             <div>
                                                <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                      <i class="ki-duotone ki-information-2 fs-2">
                                                      <i class="path1 clrblck op1"></i>
                                                      <i class="path2 clrwht"></i>
                                                      <i class="path3 clrwht"></i>
                                                   </i>
                                                   </a>
                                                   <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                   <div class="p-4">
                                                      <span class="text-gray-800 fw-semibold fs-6 w-100">The Holiday Vibe</span>
                                                      <ul>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Face scrub</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Body massage</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Pedicure</span>
                                                         </li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </div>
                                                <span class="badge badge-danger">
                                                   <i class="bi bi-gender-female me-2 fs-3 clrwht"></i>
                                                   Female
                                                </span>
                                                <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                <div class="add_edit_staff">
                                                   <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                      <i class="ki-duotone ki-plus-circle fs-2x">
                                                       <i class="path1"></i>
                                                       <i class="path2"></i>
                                                   </i>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                </div>
                                             </div>
                                             <div class="d-flex gap-3">
                                                <a href="#" class="d-flex align-items-center">
                                                   <i class="ki-duotone ki-star fs-6 me-1"></i>
                                                   <span class="fw-semibold fs-8 text-gray-800">Voucher</span>
                                                </a>
                                             </div>
                                       </div>

                                       <div class="d-flex flex-column gap-3">

                                          <div class="d-flex gap-5 justify-content-between">
                                             <label class="form-check">
                                                     <input class="form-check-input" type="radio" value="" name="pricetype17" checked="true">
                                                     <span class="form-check-label">
                                                         Walk-in
                                                     </span>
                                                 </label>
                                                 <span class="fw-semibold fs-6 text-gray-800">
                                                   SGD <span>135</span> <span class="text-decor-line">(145)</span>
                                                 </span>
                                             </div>

                                             <div class="d-flex gap-5 justify-content-between">
                                             <label class="form-check">
                                                     <input class="form-check-input" type="radio" value="" name="pricetype17">
                                                     <span class="form-check-label">
                                                         Off Peak
                                                     </span>
                                                 </label>
                                                 <span class="fw-semibold fs-6 text-gray-800">
                                                   SGD <span>129</span> <span class="text-decor-line">(140)</span>
                                                 </span>
                                             </div>

                                         </div>

                                         <div class="d-flex flex-column gap-3">

                                             <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>
                        <!--end:::Tab pane-->

                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="add_item_voucher" role="tabpanel">

                           <div class="d-flex flex-column gap-5">

                              <div class="searchboxdiv mb-0">
                                 <div class="searchbox">
                                    <i class="fas fa-search"></i>
                                    <input type="text" placeholder="search" name="search-box" value="">
                                 </div>
                                 <div>
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                       <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                          <span class="path1"></span>
                                          <span class="path2"></span>
                                       </i>Filter
                                    </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">

                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="" class="menu-link px-3">Gender</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="system-admin-manage.html" class="menu-link px-3">Off-Peak Price</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="system-admin-manage.html" class="menu-link px-3">Staff Price</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="system-admin-manage.html" class="menu-link px-3">Voucher</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="system-admin-manage.html" class="menu-link px-3">Package</a>
                                       </div>
                                       <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                 </div>
                              </div>

                              <div class="bxshdw overflow-hidden">

                                 <div class="d-flex flex-column gap-3 w-100 p-5">

                                    <div class="d-flex justify-content-between align-items-end">

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-3 align-items-center">
                                             <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">The best hair day - 12 months</span>
                                          </div>
                                          <div class="d-flex gap-3 align-items-center">
                                             <div>
                                                <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                      <i class="ki-duotone ki-information-2 fs-2">
                                                      <i class="path1 clrblck op1"></i>
                                                      <i class="path2 clrwht"></i>
                                                      <i class="path3 clrwht"></i>
                                                   </i>
                                                   </a>
                                                <!--begin::Menu 1-->
                                                <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                   
                                                   <!--begin::Form-->
                                                   <div class="p-4">

                                                      <span class="text-gray-800 fw-bold fs-6 w-100">Services</span>
                                                      <ul>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Hair cut</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Blow dry</span>
                                                         </li>
                                                      </ul>
                                                      <span class="text-gray-800 fw-bold fs-6 mt-4 w-100">Package</span>
                                                      <span class="text-gray-400 fw-semibold fs-6 mt-4 w-100">The Pamper Package</span>
                                                      <ul>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Face scrub</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Body massage</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Pedicure</span>
                                                         </li>
                                                      </ul>

                                                   </div>
                                                   <!--end::Form-->
                                                </div>
                                                <!--end::Menu 1-->
                                             </div>
                                                <span class="badge badge-danger">
                                                   <i class="bi bi-gender-female me-2 fs-3 clrwht"></i>
                                                   Female
                                                </span>
                                                <span class="fw-semibold fs-6 text-gray-800">45 min</span>
                                                <div class="add_edit_staff">
                                                   <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                      <i class="ki-duotone ki-plus-circle fs-2x">
                                                       <i class="path1"></i>
                                                       <i class="path2"></i>
                                                   </i>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                </div>
                                             </div>
                                             <div class="d-flex gap-3 align-items-center">
                                                <div>
                                                <span class="text-gray-400 fw-semibold fs-6">Sessions:</span>
                                                <span class="fw-semibold fs-6 text-gray-800">12</span>
                                             </div>

                                             <div>
                                                <span class="text-gray-400 fw-semibold fs-6">Validity:</span>
                                                <span class="fw-semibold fs-6 text-gray-800">1 year</span>
                                             </div>
                                             </div>
                                       </div>

                                       <div class="d-flex flex-column gap-3 align-items-end">
                                          <div class="d-flex gap-5 justify-content-between">
                                                <span class="fw-semibold fs-6 text-gray-400">Service value :</span>
                                                <span class="fw-semibold fs-6 text-gray-400">SGD 1350</span>
                                             </div>
                                             <div class="d-flex gap-5 justify-content-between">
                                                <span class="fw-semibold fs-6 text-gray-800">Voucher Price :</span>
                                                <span class="fw-semibold fs-6 text-gray-800">SGD 950</span>
                                             </div>
                                             <div>
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>
                                       </div>

                                    </div>

                                 </div>

                              </div>

                              <div class="bxshdw overflow-hidden">

                                 <div class="d-flex flex-column gap-3 w-100 p-5">

                                    <div class="d-flex justify-content-between align-items-end">

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-3 align-items-center">
                                             <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">6 months of Look of Love</span>
                                          </div>
                                          <div class="d-flex gap-3 align-items-center">
                                             <div>
                                                <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                      <i class="ki-duotone ki-information-2 fs-2">
                                                      <i class="path1 clrblck op1"></i>
                                                      <i class="path2 clrwht"></i>
                                                      <i class="path3 clrwht"></i>
                                                   </i>
                                                   </a>
                                                <!--begin::Menu 1-->
                                                <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                   
                                                   <!--begin::Form-->
                                                   <div class="p-4">

                                                      <span class="text-gray-800 fw-bold fs-6 w-100">Services</span>
                                                      <ul>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Hair cut</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Blow dry</span>
                                                         </li>
                                                      </ul>
                                                      <span class="text-gray-800 fw-bold fs-6 mt-4 w-100">Package</span>
                                                      <span class="text-gray-400 fw-semibold fs-6 mt-4 w-100">The Pamper Package</span>
                                                      <ul>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Face scrub</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Body massage</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Pedicure</span>
                                                         </li>
                                                      </ul>

                                                   </div>
                                                   <!--end::Form-->
                                                </div>
                                                <!--end::Menu 1-->
                                             </div>
                                                <span class="badge badge-danger">
                                                   <i class="bi bi-gender-female me-2 fs-3 clrwht"></i>
                                                   Female
                                                </span>
                                                <span class="fw-semibold fs-6 text-gray-800">105 min</span>
                                                <div class="add_edit_staff">
                                                   <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                      <i class="ki-duotone ki-plus-circle fs-2x">
                                                       <i class="path1"></i>
                                                       <i class="path2"></i>
                                                   </i>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                </div>
                                             </div>
                                             <div class="d-flex gap-3 align-items-center">
                                                <div>
                                                <span class="text-gray-400 fw-semibold fs-6">Sessions:</span>
                                                <span class="fw-semibold fs-6 text-gray-800">20</span>
                                             </div>

                                             <div>
                                                <span class="text-gray-400 fw-semibold fs-6">Validity:</span>
                                                <span class="fw-semibold fs-6 text-gray-800">2 years</span>
                                             </div>
                                             </div>
                                       </div>

                                       <div class="d-flex flex-column gap-3 align-items-end">
                                          <div class="d-flex gap-5 justify-content-between">
                                                <span class="fw-semibold fs-6 text-gray-400">Service value :</span>
                                                <span class="fw-semibold fs-6 text-gray-400">SGD 800</span>
                                             </div>
                                             <div class="d-flex gap-5 justify-content-between">
                                                <span class="fw-semibold fs-6 text-gray-800">Voucher Price :</span>
                                                <span class="fw-semibold fs-6 text-gray-800">SGD 620</span>
                                             </div>
                                             <div>
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>
                                       </div>

                                    </div>

                                 </div>

                              </div>

                              <div class="bxshdw overflow-hidden">

                                 <div class="d-flex flex-column gap-3 w-100 p-5">

                                    <div class="d-flex justify-content-between align-items-end">

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-3 align-items-center">
                                             <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">6 Smooth leg throughout the year</span>
                                          </div>
                                          <div class="d-flex gap-3 align-items-center">
                                             <div>
                                                <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                      <i class="ki-duotone ki-information-2 fs-2">
                                                      <i class="path1 clrblck op1"></i>
                                                      <i class="path2 clrwht"></i>
                                                      <i class="path3 clrwht"></i>
                                                   </i>
                                                   </a>
                                                <!--begin::Menu 1-->
                                                <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                   
                                                   <!--begin::Form-->
                                                   <div class="p-4">

                                                      <span class="text-gray-800 fw-bold fs-6 w-100">Services</span>
                                                      <ul>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Hair cut</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Blow dry</span>
                                                         </li>
                                                      </ul>
                                                      <span class="text-gray-800 fw-bold fs-6 mt-4 w-100">Package</span>
                                                      <span class="text-gray-400 fw-semibold fs-6 mt-4 w-100">The Pamper Package</span>
                                                      <ul>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Face scrub</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Body massage</span>
                                                         </li>
                                                         <li>
                                                            <span class="text-gray-400 fw-semibold fs-6">Pedicure</span>
                                                         </li>
                                                      </ul>

                                                   </div>
                                                   <!--end::Form-->
                                                </div>
                                                <!--end::Menu 1-->
                                             </div>
                                                <span class="badge badge-danger">
                                                   <i class="bi bi-gender-female me-2 fs-3 clrwht"></i>
                                                   Female
                                                </span>
                                                <span class="fw-semibold fs-6 text-gray-800">120 min</span>
                                                <div class="add_edit_staff">
                                                   <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                      <i class="ki-duotone ki-plus-circle fs-2x">
                                                       <i class="path1"></i>
                                                       <i class="path2"></i>
                                                   </i>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                </div>
                                             </div>
                                             <div class="d-flex gap-3 align-items-center">
                                                <div>
                                                <span class="text-gray-400 fw-semibold fs-6">Sessions:</span>
                                                <span class="fw-semibold fs-6 text-gray-800">8</span>
                                             </div>

                                             <div>
                                                <span class="text-gray-400 fw-semibold fs-6">Validity:</span>
                                                <span class="fw-semibold fs-6 text-gray-800">6 months</span>
                                             </div>
                                             </div>
                                       </div>

                                       <div class="d-flex flex-column gap-3 align-items-end">
                                          <div class="d-flex gap-5 justify-content-between">
                                                <span class="fw-semibold fs-6 text-gray-400">Service value :</span>
                                                <span class="fw-semibold fs-6 text-gray-400">SGD 1440</span>
                                             </div>
                                             <div class="d-flex gap-5 justify-content-between">
                                                <span class="fw-semibold fs-6 text-gray-800">Voucher Price :</span>
                                                <span class="fw-semibold fs-6 text-gray-800">SGD 1020</span>
                                             </div>
                                             <div>
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>
                                       </div>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>
                        <!--end:::Tab pane-->

                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="add_item_membership" role="tabpanel">

                           <div class="d-flex flex-column gap-5">

                              <div class="searchboxdiv mb-0">
                                 <div class="searchbox">
                                    <i class="fas fa-search"></i>
                                    <input type="text" placeholder="search" name="search-box" value="">
                                 </div>
                                 <div>
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                       <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                          <span class="path1"></span>
                                          <span class="path2"></span>
                                       </i>Filter
                                    </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">

                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="" class="menu-link px-3">Gender</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="system-admin-manage.html" class="menu-link px-3">Off-Peak Price</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="system-admin-manage.html" class="menu-link px-3">Staff Price</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="system-admin-manage.html" class="menu-link px-3">Voucher</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="system-admin-manage.html" class="menu-link px-3">Package</a>
                                       </div>
                                       <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                 </div>
                              </div>

                              <div class="bxshdw overflow-hidden">

                                 <div class="d-flex flex-column gap-3 w-100 p-5">

                                    <div class="d-flex justify-content-between align-items-end">

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-3 align-items-center">
                                             <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">The Loyality Club</span>
                                             <a href="#" id="kt_drawer_example_permanent_toggle6">
                                                <i class="ki-duotone ki-pencil fs-6">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                </i>
                                             </a>
                                          </div>
                                          <div class="d-flex gap-3 align-items-center">
                                             <div>
                                                <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                      <i class="ki-duotone ki-information-2 fs-2">
                                                      <i class="path1 clrblck op1"></i>
                                                      <i class="path2 clrwht"></i>
                                                      <i class="path3 clrwht"></i>
                                                   </i>
                                                   </a>
                                                <!--begin::Menu 1-->
                                                <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                   
                                                   <!--begin::Form-->
                                                   <div class="p-4">

                                                      <span class="text-gray-400 fw-semibold fs-6">The The Loyality Club Description</span>

                                                   </div>
                                                   <!--end::Form-->
                                                </div>
                                                <!--end::Menu 1-->
                                             </div>
                                                <div class="add_edit_staff">
                                                   <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                      <i class="ki-duotone ki-plus-circle fs-2x">
                                                       <i class="path1"></i>
                                                       <i class="path2"></i>
                                                   </i>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                </div>
                                             </div>
                                             <div class="d-flex gap-3 align-items-center">
                                             <div>
                                                <span class="text-gray-400 fw-semibold fs-6">Validity:</span>
                                                <span class="fw-semibold fs-6 text-gray-800">2 years</span>
                                             </div>
                                             </div>
                                       </div>

                                       <div class="d-flex flex-column gap-3 align-items-end">
                                          <div class="d-flex gap-5 justify-content-between">
                                                <span class="fw-semibold fs-6 text-gray-800">Membership Price :</span>
                                                <span class="fw-semibold fs-6 text-gray-800">SGD 1020</span>
                                             </div>
                                             <div>
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>
                                       </div>

                                    </div>

                                 </div>

                              </div>

                              <div class="bxshdw overflow-hidden">

                                 <div class="d-flex flex-column gap-3 w-100 p-5">

                                    <div class="d-flex justify-content-between align-items-end">

                                       <div class="d-flex flex-column gap-3">
                                          <div class="d-flex gap-3 align-items-center">
                                             <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">The VIP Members</span>
                                             <a href="#" id="kt_drawer_example_permanent_toggle6">
                                                <i class="ki-duotone ki-pencil fs-6">
                                                   <span class="path1"></span>
                                                   <span class="path2"></span>
                                                </i>
                                             </a>
                                          </div>
                                          <div class="d-flex gap-3 align-items-center">
                                             <div>
                                                <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                      <i class="ki-duotone ki-information-2 fs-2">
                                                      <i class="path1 clrblck op1"></i>
                                                      <i class="path2 clrwht"></i>
                                                      <i class="path3 clrwht"></i>
                                                   </i>
                                                   </a>
                                                <!--begin::Menu 1-->
                                                <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                   
                                                   <!--begin::Form-->
                                                   <div class="p-4">

                                                      <span class="text-gray-400 fw-semibold fs-6">The The VIP Members Description</span>

                                                   </div>
                                                   <!--end::Form-->
                                                </div>
                                                <!--end::Menu 1-->
                                             </div>
                                                <div class="add_edit_staff">
                                                   <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                      <i class="ki-duotone ki-plus-circle fs-2x">
                                                       <i class="path1"></i>
                                                       <i class="path2"></i>
                                                   </i>
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                   <!--begin::Menu item-->
                                                   <div class="menu-item px-3">
                                                      <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                   </div>
                                                   <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                </div>
                                             </div>
                                             <div class="d-flex gap-3 align-items-center">
                                             <div>
                                                <span class="text-gray-400 fw-semibold fs-6">Validity:</span>
                                                <span class="fw-semibold fs-6 text-gray-800">No expiry</span>
                                             </div>
                                             </div>
                                       </div>

                                       <div class="d-flex flex-column gap-3 align-items-end">
                                             <div class="d-flex gap-5 justify-content-between">
                                                <span class="fw-semibold fs-6 text-gray-800">Membership Price :</span>
                                                <span class="fw-semibold fs-6 text-gray-800">SGD 2000</span>
                                             </div>
                                             <div>
                                                <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                   <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                </a>
                                             </div>
                                       </div>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>
                        <!--end:::Tab pane-->

                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="add_item_product" role="tabpanel">

                           <!--begin::Nav-->
                           <ul class="nav nav-pills nav-pills-custom mb-3" id="category">
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" href="#add_product1">

                                    <!--begin::Title-->
                                    <i class="ki-outline ki-questionnaire-tablet fs-1"></i>
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Shampoo</span>
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
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#add_product2">

                                    <!--begin::Title-->
                                    <i class="ki-outline ki-questionnaire-tablet fs-1"></i>
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Face Wash</span>
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
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#add_product3">
                                    <i class="ki-outline ki-message-notif fs-1"></i>
                                    <!--begin::Title-->
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Face Cream</span>
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
                                 <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#add_product4">
                                    <i class="ki-outline ki-abstract-26 fs-1"></i>
                                    <!--begin::Title-->
                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 mt-3 catname">Conditioner</span>
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

                           <!--begin::Tab Content-->
                           <div class="tab-content">

                              <!--begin::Tap pane-->
                              <div class="tab-pane fade active show" id="add_product1">

                                 <div class="d-flex flex-column gap-5">

                                    <div class="searchboxdiv mb-0">
                                       <div class="searchbox">
                                          <i class="fas fa-search"></i>
                                          <input type="text" placeholder="search" name="search-box" value="">
                                       </div>
                                       <div>
                                          <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                             <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                             </i>Filter
                                          </a>
                                          <!--begin::Menu-->
                                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">

                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="" class="menu-link px-3">Gender</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Off-Peak Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Staff Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Voucher</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Package</a>
                                             </div>
                                             <!--end::Menu item-->
                                          </div>
                                          <!--end::Menu-->
                                       </div>
                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Silky smooth hair shampoo</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <!--begin::Menu 1-->
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         
                                                         <!--begin::Form-->
                                                         <div class="p-4">

                                                            <span class="text-gray-400 fw-semibold fs-6">Silky smooth hair shampoo Description</span>

                                                         </div>
                                                         <!--end::Form-->
                                                      </div>
                                                      <!--end::Menu 1-->
                                                   </div>
                                                   <span class="fw-semibold fs-6 text-gray-800">400 ml</span>
                                                   <span class="fw-semibold fs-6 text-gray-800">Loreal</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                   <a href="#" class="d-flex align-items-center gap-2">
                                                         <i class="fa-light fa-prescription-bottle"></i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Herbal</span>
                                                      </a>
                                                   <div>
                                                      <span class="text-gray-400 fw-semibold fs-6">Stock:</span>
                                                      <span class="fw-semibold fs-6 text-gray-800">143</span>
                                                   </div>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-6">
                                                      <div class="d-flex gap-2 justify-content-between">
                                                      <label class="form-check">
                                                              <input class="form-check-input" type="radio" value="" name="productprice1" checked="true">
                                                              <span class="form-check-label">
                                                                  Price
                                                              </span>
                                                          </label>
                                                          <span class="fw-semibold fs-6 text-gray-800">
                                                            SGD <span>19</span>
                                                          </span>
                                                      </div>

                                                      <div class="d-flex gap-2 justify-content-between">
                                                      <label class="form-check">
                                                              <input class="form-check-input" type="radio" value="" name="productprice1">
                                                              <span class="form-check-label">
                                                                  Special Price
                                                              </span>
                                                          </label>
                                                          <span class="fw-semibold fs-6 text-gray-800">
                                                            SGD <span>17</span>
                                                          </span>
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-5 justify-content-between align-items-end">
                                                      <span class="fw-semibold fs-6 text-gray-400">Quantity :</span>
                                                      <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="100" data-kt-dialer-step="1" data-kt-dialer-decimals="0">

                                                               <!--begin::Decrease control-->
                                                               <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                                   <i class="ki-outline ki-minus fs-4"></i>
                                                               </button>
                                                               <!--end::Decrease control-->
                                                               
                                                               <input type="text" class="form-control border-0 text-center p-0 fs-4 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="qty" name="quantity" readonly="" value="1">
                                                               <!--end::Input control-->

                                                               <!--begin::Increase control-->
                                                               <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                                   <i class="ki-outline ki-plus fs-4"></i>
                                                               </button>
                                                               <!--end::Increase control-->
                                                           </div>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <div>
                                                      <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                         <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                      </a>
                                                   </div>
                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>
                              <!--end::Tap pane-->

                              <!--begin::Tap pane-->
                              <div class="tab-pane fade" id="add_product2">

                                 <div class="d-flex flex-column gap-5">

                                    <div class="searchboxdiv mb-0">
                                       <div class="searchbox">
                                          <i class="fas fa-search"></i>
                                          <input type="text" placeholder="search" name="search-box" value="">
                                       </div>
                                       <div>
                                          <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                             <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                             </i>Filter
                                          </a>
                                          <!--begin::Menu-->
                                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">

                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="" class="menu-link px-3">Gender</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Off-Peak Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Staff Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Voucher</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Package</a>
                                             </div>
                                             <!--end::Menu item-->
                                          </div>
                                          <!--end::Menu-->
                                       </div>
                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Face wash</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <!--begin::Menu 1-->
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         
                                                         <!--begin::Form-->
                                                         <div class="p-4">

                                                            <span class="text-gray-400 fw-semibold fs-6">Face wash Description</span>

                                                         </div>
                                                         <!--end::Form-->
                                                      </div>
                                                      <!--end::Menu 1-->
                                                   </div>
                                                   <span class="fw-semibold fs-6 text-gray-800">400 ml</span>
                                                   <span class="fw-semibold fs-6 text-gray-800">Loreal</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                   <a href="#" class="d-flex align-items-center gap-2">
                                                         <i class="fa-light fa-prescription-bottle"></i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Herbal</span>
                                                      </a>
                                                   <div>
                                                      <span class="text-gray-400 fw-semibold fs-6">Stock:</span>
                                                      <span class="fw-semibold fs-6 text-gray-800">143</span>
                                                   </div>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-6">
                                                      <div class="d-flex gap-2 justify-content-between">
                                                      <label class="form-check">
                                                              <input class="form-check-input" type="radio" value="" name="productprice1" checked="true">
                                                              <span class="form-check-label">
                                                                  Price
                                                              </span>
                                                          </label>
                                                          <span class="fw-semibold fs-6 text-gray-800">
                                                            SGD <span>19</span>
                                                          </span>
                                                      </div>

                                                      <div class="d-flex gap-2 justify-content-between">
                                                      <label class="form-check">
                                                              <input class="form-check-input" type="radio" value="" name="productprice1">
                                                              <span class="form-check-label">
                                                                  Special Price
                                                              </span>
                                                          </label>
                                                          <span class="fw-semibold fs-6 text-gray-800">
                                                            SGD <span>17</span>
                                                          </span>
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-5 justify-content-between align-items-end">
                                                      <span class="fw-semibold fs-6 text-gray-400">Quantity :</span>
                                                      <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="100" data-kt-dialer-step="1" data-kt-dialer-decimals="0">

                                                               <!--begin::Decrease control-->
                                                               <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                                   <i class="ki-outline ki-minus fs-4"></i>
                                                               </button>
                                                               <!--end::Decrease control-->
                                                               
                                                               <input type="text" class="form-control border-0 text-center p-0 fs-4 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="qty" name="quantity" readonly="" value="1">
                                                               <!--end::Input control-->

                                                               <!--begin::Increase control-->
                                                               <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                                   <i class="ki-outline ki-plus fs-4"></i>
                                                               </button>
                                                               <!--end::Increase control-->
                                                           </div>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <div>
                                                      <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                         <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                      </a>
                                                   </div>
                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>
                              <!--end::Tap pane-->

                              <!--begin::Tap pane-->
                              <div class="tab-pane fade" id="add_product3">

                                 <div class="d-flex flex-column gap-5">

                                    <div class="searchboxdiv mb-0">
                                       <div class="searchbox">
                                          <i class="fas fa-search"></i>
                                          <input type="text" placeholder="search" name="search-box" value="">
                                       </div>
                                       <div>
                                          <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                             <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                             </i>Filter
                                          </a>
                                          <!--begin::Menu-->
                                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">

                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="" class="menu-link px-3">Gender</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Off-Peak Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Staff Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Voucher</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Package</a>
                                             </div>
                                             <!--end::Menu item-->
                                          </div>
                                          <!--end::Menu-->
                                       </div>
                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Face Cream</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <!--begin::Menu 1-->
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         
                                                         <!--begin::Form-->
                                                         <div class="p-4">

                                                            <span class="text-gray-400 fw-semibold fs-6">Face Cream Description</span>

                                                         </div>
                                                         <!--end::Form-->
                                                      </div>
                                                      <!--end::Menu 1-->
                                                   </div>
                                                   <span class="fw-semibold fs-6 text-gray-800">400 ml</span>
                                                   <span class="fw-semibold fs-6 text-gray-800">Loreal</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                   <a href="#" class="d-flex align-items-center gap-2">
                                                         <i class="fa-light fa-prescription-bottle"></i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Herbal</span>
                                                      </a>
                                                   <div>
                                                      <span class="text-gray-400 fw-semibold fs-6">Stock:</span>
                                                      <span class="fw-semibold fs-6 text-gray-800">143</span>
                                                   </div>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-6">
                                                      <div class="d-flex gap-2 justify-content-between">
                                                      <label class="form-check">
                                                              <input class="form-check-input" type="radio" value="" name="productprice1" checked="true">
                                                              <span class="form-check-label">
                                                                  Price
                                                              </span>
                                                          </label>
                                                          <span class="fw-semibold fs-6 text-gray-800">
                                                            SGD <span>19</span>
                                                          </span>
                                                      </div>

                                                      <div class="d-flex gap-2 justify-content-between">
                                                      <label class="form-check">
                                                              <input class="form-check-input" type="radio" value="" name="productprice1">
                                                              <span class="form-check-label">
                                                                  Special Price
                                                              </span>
                                                          </label>
                                                          <span class="fw-semibold fs-6 text-gray-800">
                                                            SGD <span>17</span>
                                                          </span>
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-5 justify-content-between align-items-end">
                                                      <span class="fw-semibold fs-6 text-gray-400">Quantity :</span>
                                                      <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="100" data-kt-dialer-step="1" data-kt-dialer-decimals="0">

                                                               <!--begin::Decrease control-->
                                                               <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                                   <i class="ki-outline ki-minus fs-4"></i>
                                                               </button>
                                                               <!--end::Decrease control-->
                                                               
                                                               <input type="text" class="form-control border-0 text-center p-0 fs-4 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="qty" name="quantity" readonly="" value="1">
                                                               <!--end::Input control-->

                                                               <!--begin::Increase control-->
                                                               <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                                   <i class="ki-outline ki-plus fs-4"></i>
                                                               </button>
                                                               <!--end::Increase control-->
                                                           </div>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <div>
                                                      <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                         <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                      </a>
                                                   </div>
                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>
                              <!--end::Tap pane-->

                              <!--begin::Tap pane-->
                              <div class="tab-pane fade" id="add_product4">

                                 <div class="d-flex flex-column gap-5">

                                    <div class="searchboxdiv mb-0">
                                       <div class="searchbox">
                                          <i class="fas fa-search"></i>
                                          <input type="text" placeholder="search" name="search-box" value="">
                                       </div>
                                       <div>
                                          <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                             <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                             </i>Filter
                                          </a>
                                          <!--begin::Menu-->
                                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">

                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="" class="menu-link px-3">Gender</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Off-Peak Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Staff Price</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Voucher</a>
                                             </div>
                                             <!--end::Menu item-->
                                             <!--begin::Menu item-->
                                             <div class="menu-item px-3">
                                                <a href="system-admin-manage.html" class="menu-link px-3">Package</a>
                                             </div>
                                             <!--end::Menu item-->
                                          </div>
                                          <!--end::Menu-->
                                       </div>
                                    </div>

                                    <div class="bxshdw overflow-hidden">

                                       <div class="d-flex flex-column gap-3 w-100 p-5">

                                          <div class="d-flex justify-content-between align-items-end">

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-3 align-items-center">
                                                   <span class="text-gray-900 text-hover-primary fs-3 fw-bold me-1">Conditioner</span>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                   <div>
                                                      <a href="#" class="d-flex" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-information-2 fs-2">
                                                            <i class="path1 clrblck op1"></i>
                                                            <i class="path2 clrwht"></i>
                                                            <i class="path3 clrwht"></i>
                                                         </i>
                                                         </a>
                                                      <!--begin::Menu 1-->
                                                      <div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true">
                                                         
                                                         <!--begin::Form-->
                                                         <div class="p-4">

                                                            <span class="text-gray-400 fw-semibold fs-6">Conditioner Description</span>

                                                         </div>
                                                         <!--end::Form-->
                                                      </div>
                                                      <!--end::Menu 1-->
                                                   </div>
                                                   <span class="fw-semibold fs-6 text-gray-800">400 ml</span>
                                                   <span class="fw-semibold fs-6 text-gray-800">Loreal</span>
                                                      <div class="add_edit_staff">
                                                         <a href="#" class="d-flex" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="add staff">
                                                            <i class="ki-duotone ki-plus-circle fs-2x">
                                                             <i class="path1"></i>
                                                             <i class="path2"></i>
                                                         </i>
                                                      </a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Harry</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Sofie</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="system-admin-manage.html" class="menu-link px-3">Joseph</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                      </div>
                                                      <!--end::Menu-->
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-3 align-items-center">
                                                   <a href="#" class="d-flex align-items-center gap-2">
                                                         <i class="fa-light fa-prescription-bottle"></i>
                                                         <span class="fw-semibold fs-8 text-gray-800">Herbal</span>
                                                      </a>
                                                   <div>
                                                      <span class="text-gray-400 fw-semibold fs-6">Stock:</span>
                                                      <span class="fw-semibold fs-6 text-gray-800">143</span>
                                                   </div>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <div class="d-flex gap-6">
                                                      <div class="d-flex gap-2 justify-content-between">
                                                      <label class="form-check">
                                                              <input class="form-check-input" type="radio" value="" name="productprice1" checked="true">
                                                              <span class="form-check-label">
                                                                  Price
                                                              </span>
                                                          </label>
                                                          <span class="fw-semibold fs-6 text-gray-800">
                                                            SGD <span>19</span>
                                                          </span>
                                                      </div>

                                                      <div class="d-flex gap-2 justify-content-between">
                                                      <label class="form-check">
                                                              <input class="form-check-input" type="radio" value="" name="productprice1">
                                                              <span class="form-check-label">
                                                                  Special Price
                                                              </span>
                                                          </label>
                                                          <span class="fw-semibold fs-6 text-gray-800">
                                                            SGD <span>17</span>
                                                          </span>
                                                      </div>
                                                   </div>
                                                   <div class="d-flex gap-5 justify-content-between align-items-end">
                                                      <span class="fw-semibold fs-6 text-gray-400">Quantity :</span>
                                                      <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="100" data-kt-dialer-step="1" data-kt-dialer-decimals="0">

                                                               <!--begin::Decrease control-->
                                                               <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                                   <i class="ki-outline ki-minus fs-4"></i>
                                                               </button>
                                                               <!--end::Decrease control-->
                                                               
                                                               <input type="text" class="form-control border-0 text-center p-0 fs-4 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="qty" name="quantity" readonly="" value="1">
                                                               <!--end::Input control-->

                                                               <!--begin::Increase control-->
                                                               <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                                   <i class="ki-outline ki-plus fs-4"></i>
                                                               </button>
                                                               <!--end::Increase control-->
                                                           </div>
                                                   </div>
                                             </div>

                                             <div class="d-flex flex-column gap-3">
                                                <div>
                                                      <a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3">
                                                         <i class="ki-outline ki-plus-square fs-3"></i>Add
                                                      </a>
                                                   </div>
                                             </div>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>
                              <!--end::Tap pane-->

                           </div>
                           <!--end::Tab Content-->

                        </div>
                        <!--end:::Tab pane-->

                     </div>

                  </div>

               </div>

              </div>
              <!--end::Card body-->
          </div>
          <!--end::Card-->
      </div>
      <!--end::Drawer-->


      <!--begin::Modal-->
      <div class="modal fade" tabindex="-1" id="kt_modal_1">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Edit date & time</h5>
                      <!--begin::Close-->
                      <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                          <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                      </div>
                      <!--end::Close-->
                  </div>

                  <div class="modal-body">
                      <div class="input-group" id="kt_td_picker_modal" data-td-target-input="nearest" data-td-target-toggle="nearest">
                          <input id="kt_td_picker_modal_input" type="text" class="form-control" data-td-target="#kt_td_picker_modal"/>
                          <span class="input-group-text" data-td-target="#kt_td_picker_modal" data-td-toggle="datetimepicker">
                              <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
                          </span>
                      </div>
                  </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
              </div>
          </div>
      </div>
      <!--end::Modal-->


      <div class="modal fade" tabindex="-1" id="kt_modal_2">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h3 class="modal-title">Add appointment notes</h3>

                      <!--begin::Close-->
                      <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                          <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                      </div>
                      <!--end::Close-->
                  </div>

                  <div class="modal-body">
                   <label for="" class="form-label">Appointment notes</label>
                   <textarea class="form-control" data-kt-autosize="true" placeholder="Add appointment notes"></textarea>
                  </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-light">Cancel</button>
                      <button type="button" class="btn btn-primary">Save</button>
                  </div>
              </div>
          </div>
      </div>


      <div class="modal fade" tabindex="-1" id="kt_modal_3">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h3 class="modal-title">Edit appointment notes</h3>

                      <!--begin::Close-->
                      <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                          <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                      </div>
                      <!--end::Close-->
                  </div>

                  <div class="modal-body">
                   <label for="" class="form-label">Appointment notes</label>
                   <textarea class="form-control" data-kt-autosize="true" placeholder="Edit appointment notes">lorem ipsum dolar sit amet</textarea>
                  </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-light">Cancel</button>
                      <button type="button" class="btn btn-primary">Save</button>
                  </div>
              </div>
          </div>
      </div>
@endsection