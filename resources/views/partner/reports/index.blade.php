@extends('partner.layouts.auth.app')
@section('content') 
<!--Begin:::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
   <!--begin::Content wrapper-->
   <div class="d-flex flex-column flex-column-fluid">

      <!--begin::Toolbar-->
      <div id="kt_app_toolbar" class="app-toolbar pt-3 pt-lg-6">
         <!--begin::Toolbar container-->
         <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
               <!--begin::Title-->
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Reports</h1>
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
                  <li class="breadcrumb-item text-muted">Reports</li>
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
               
            <div class="card card-flush">
               <!--begin::Header-->
               <div class="card-header position-relative py-0 border-bottom-2">
                  <!--begin::Nav-->
                  <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3">
                     <!--begin::Item-->
                     <li class="nav-item p-0 ms-0 me-8">
                        <!--begin::Link-->
                        <a class="nav-link btn btn-color-muted active px-0" data-bs-toggle="tab" href="#reportssales1">
                           <!--begin::Subtitle-->
                           <span class="nav-text fw-semibold fs-4 mb-3">Sales by staff</span>
                           <!--end::Subtitle-->
                           <!--begin::Bullet-->
                           <span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                           <!--end::Bullet-->
                        </a>
                        <!--end::Link-->
                     </li>
                     <!--end::Item-->
                     <!--begin::Item-->
                     <li class="nav-item p-0 ms-0">
                        <!--begin::Link-->
                        <a class="nav-link btn btn-color-muted px-0" data-bs-toggle="tab" href="#reportssales2">
                           <!--begin::Subtitle-->
                           <span class="nav-text fw-semibold fs-4 mb-3">Sales by client</span>
                           <!--end::Subtitle-->
                           <!--begin::Bullet-->
                           <span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                           <!--end::Bullet-->
                        </a>
                        <!--end::Link-->
                     </li>
                     <!--end::Item-->
                  </ul>
                  <!--end::Nav-->
               </div>
               <!--end::Header-->


               <!--begin::Tab Content-->
               <div class="tab-content">
                  <!--begin::Tap pane-->
                  <div class="tab-pane fade show active" id="reportssales1">

                     <!--begin::Card header-->
                     <div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-5">

                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                           <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                           <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                              <!--begin::Display range-->
                              <div class="text-gray-600 fw-bold">Loading date range...</div>
                              <!--end::Display range-->
                              <i class="ki-outline ki-calendar-8 fs-1 ms-2 me-0"></i>
                           </div>
                           <!--end::Daterangepicker-->
                        </div>
                        <!--end::Toolbar-->

                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1 me-auto">
                           <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                           <input type="text" data-kt-filter-reportsaletable1="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
                        </div>
                        <!--end::Search-->

                        <!--begin::Filter menu-->
                        <div class="d-flex align-items-center ms-3">
                           <!--begin::Menu toggle-->
                           <a href="#" class="btn btn-sm btn-light btn-flex btn-color-gray-700 fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                           <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                              <span class="path1"></span>
                              <span class="path2"></span>
                           </i>Filter</a>
                           <!--end::Menu toggle-->
                           <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                 <a href="" class="menu-link px-3">All</a>
                              </div>
                              <!--end::Menu item-->
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                 <a href="" class="menu-link px-3">Service</a>
                              </div>
                              <!--end::Menu item-->
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                 <a href="" class="menu-link px-3">Package</a>
                              </div>
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                 <a href="" class="menu-link px-3">Voucher</a>
                              </div>

                              <div class="menu-item px-3">
                                 <a href="" class="menu-link px-3">Membership</a>
                              </div>

                              <div class="menu-item px-3">
                                 <a href="" class="menu-link px-3">Product</a>
                              </div>
                           </div>
                           <!--end::Menu-->
                        </div>
                        <!--end::Filter menu-->

                        <div class="m-0">
                           <!--begin::Export dropdown-->
                           <button type="button" class="btn btn-sm btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                              <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span class="path2"></span></i>
                              Export
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

                        <div class="d-flex gap-2 me-auto ms-5 w-100">
                           <!--begin::Users group-->
                           <div class="symbol-group symbol-hover flex-nowrap">
                              <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="All">
                                 <span class="symbol-label bg-warning text-inverse-warning fw-bold">All</span>
                              </div>
                           </div>
                           <!--begin::Users group-->
                           <div class="symbol-group symbol-hover flex-nowrap">
                              <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Alan Warden">
                                 <span class="symbol-label bg-warning text-inverse-warning fw-bold">AW</span>
                              </div>
                           </div>
                           <!--end::Users group-->
                           <!--begin::Users group-->
                           <div class="symbol-group symbol-hover flex-nowrap">
                              <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                 <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                              </div>
                           </div>
                           <!--end::Users group-->
                           <!--begin::Users group-->
                           <div class="symbol-group symbol-hover flex-nowrap">
                              <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Susan Redwood">
                                 <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                              </div>
                           </div>
                           <!--begin::Users group-->
                           <div class="symbol-group symbol-hover flex-nowrap">
                              <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Melody Macy">
                                 <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                              </div>
                           </div>
                           <!--end::Users group-->
                        </div>

                     </div>
                     <!--end::Card header-->

                     <!--begin::Body-->
                     <div class="card-body pb-3">
                     
                        <div class="table-responsive">
                           <table class="table table-bordered align-middle table-row-dashed fs-6 gy-4 tdmid " id="reports_sales_table1">

                              <!--begin::Table head-->
                              <thead>
                                 <!--begin::Table row-->
                                 <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th>Sales id</th>
                                    <th>Sales date</th>
                                    <th>Staff name</th>
                                    <th>Item type</th>
                                    <th>Item name</th>
                                    <th>Price</th>
                                    <th class="text-end">Commission Earned</th>
                                 </tr>
                                 <!--end::Table row-->
                              </thead>
                              <!--end::Table head-->

                              <!--begin::Table body-->
                              <tbody class="fw-bold text-gray-600 alntop">

                                 <tr>
                                    <td>#XGY-346</td>
                                    <td>4 Jun, 2023</td>
                                    <td>
                                       <div class="symbol-group symbol-hover flex-nowrap">
                                          <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                             <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                          </div>
                                       </div>
                                    </td>
                                    <td>Service</td>
                                    <td>Hair cut</td>
                                    <td>$25</td>
                                    <td class="text-end">$20</td>
                                 </tr>

                                 <tr>
                                    <td>#XGY-346</td>
                                    <td>4 Jun, 2023</td>
                                    <td>
                                       <div class="symbol-group symbol-hover flex-nowrap">
                                          <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                             <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                          </div>
                                       </div>
                                    </td>
                                    <td>Membership</td>
                                    <td>Gold Membership</td>
                                    <td>$1500</td>
                                    <td class="text-end">$20</td>
                                 </tr>

                                 <tr>
                                    <td>#XGY-346</td>
                                    <td>4 Jun, 2023</td>
                                    <td>
                                       <div class="symbol-group symbol-hover flex-nowrap">
                                          <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                             <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                          </div>
                                       </div>
                                    </td>
                                    <td>Product</td>
                                    <td>Men grooming</td>
                                    <td>$58</td>
                                    <td class="text-end">$20</td>
                                 </tr>

                                 <tr>
                                    <td>#XGY-346</td>
                                    <td>4 Jun, 2023</td>
                                    <td>
                                       <div class="symbol-group symbol-hover flex-nowrap">
                                          <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                             <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                          </div>
                                       </div>
                                    </td>
                                    <td>Voucher</td>
                                    <td>Voucher1</td>
                                    <td>$99</td>
                                    <td class="text-end">$11</td>
                                 </tr>

                              </tbody>
                              <!--end::Table body-->

                           </table>
                        </div>

                     </div>
                     <!--end: Card Body-->

                  </div>
                  <!--end::Tap pane-->
                  <!--begin::Tap pane-->
                  <div class="tab-pane fade" id="reportssales2">

                     <!--begin::Card header-->
                     <div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-5">

                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                           <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                           <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                              <!--begin::Display range-->
                              <div class="text-gray-600 fw-bold">Loading date range...</div>
                              <!--end::Display range-->
                              <i class="ki-outline ki-calendar-8 fs-1 ms-2 me-0"></i>
                           </div>
                           <!--end::Daterangepicker-->
                        </div>
                        <!--end::Toolbar-->

                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1 me-auto">
                           <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                           <input type="text" data-kt-filter-reportsaletable2="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
                        </div>
                        <!--end::Search-->

                        <!--begin::Filter menu-->
                        <div class="d-flex align-items-center ms-3">
                           <!--begin::Menu toggle-->
                           <a href="#" class="btn btn-sm btn-light btn-flex btn-color-gray-700 fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                           <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                              <span class="path1"></span>
                              <span class="path2"></span>
                           </i>Filter</a>
                           <!--end::Menu toggle-->
                           <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                 <a href="" class="menu-link px-3">All</a>
                              </div>
                              <!--end::Menu item-->
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                 <a href="" class="menu-link px-3">Service</a>
                              </div>
                              <!--end::Menu item-->
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                 <a href="" class="menu-link px-3">Package</a>
                              </div>
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                 <a href="" class="menu-link px-3">Voucher</a>
                              </div>

                              <div class="menu-item px-3">
                                 <a href="" class="menu-link px-3">Membership</a>
                              </div>

                              <div class="menu-item px-3">
                                 <a href="" class="menu-link px-3">Product</a>
                              </div>
                           </div>
                           <!--end::Menu-->
                        </div>
                        <!--end::Filter menu-->

                        <div class="m-0">
                           <!--begin::Export dropdown-->
                           <button type="button" class="btn btn-sm btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                              <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span class="path2"></span></i>
                              Export
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
                     <!--end::Card header-->

                     <!--begin::Body-->
                     <div class="card-body pb-3">
                     
                        <div class="table-responsive">
                           <table class="table table-bordered align-middle table-row-dashed fs-6 gy-4 tdmid " id="reports_sales_table2">

                              <!--begin::Table head-->
                              <thead>
                                 <!--begin::Table row-->
                                 <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th>Sales id</th>
                                    <th>Sales date</th>
                                    <th>Client source</th>
                                    <th>Client Name</th>
                                    <th>Item type</th>
                                    <th>Item name</th>
                                    <th>Price</th>
                                    <th class="text-end">Sales status</th>
                                 </tr>
                                 <!--end::Table row-->
                              </thead>
                              <!--end::Table head-->

                              <!--begin::Table body-->
                              <tbody class="fw-bold text-gray-600 alntop">

                                 <tr>
                                    <td>#XGY-346</td>
                                    <td>4 Jun, 2023</td>
                                    <td>Friend</td>
                                    <td>
                                       <div class="symbol-group symbol-hover flex-nowrap">
                                          <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                             <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                          </div>
                                       </div>
                                    </td>
                                    <td>Service</td>
                                    <td>Hair cut</td>
                                    <td>$25</td>
                                    <td class="text-end">Completed</td>
                                 </tr>

                                 <tr>
                                    <td>#XGY-346</td>
                                    <td>4 Jun, 2023</td>
                                    <td>Friend</td>
                                    <td>
                                       <div class="symbol-group symbol-hover flex-nowrap">
                                          <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                             <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                          </div>
                                       </div>
                                    </td>
                                    <td>Membership</td>
                                    <td>Gold Membership</td>
                                    <td>$1500</td>
                                    <td class="text-end">Pending</td>
                                 </tr>

                                 <tr>
                                    <td>#XGY-346</td>
                                    <td>4 Jun, 2023</td>
                                    <td>Friend</td>
                                    <td>
                                       <div class="symbol-group symbol-hover flex-nowrap">
                                          <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                             <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                          </div>
                                       </div>
                                    </td>
                                    <td>Product</td>
                                    <td>Men grooming</td>
                                    <td>$58</td>
                                    <td class="text-end">Completed</td>
                                 </tr>

                                 <tr>
                                    <td>#XGY-346</td>
                                    <td>4 Jun, 2023</td>
                                    <td>Friend</td>
                                    <td>
                                       <div class="symbol-group symbol-hover flex-nowrap">
                                          <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                             <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                          </div>
                                       </div>
                                    </td>
                                    <td>Voucher</td>
                                    <td>Voucher1</td>
                                    <td>$75</td>
                                    <td class="text-end">Pending</td>
                                 </tr>

                              </tbody>
                              <!--end::Table body-->

                           </table>
                        </div>

                     </div>
                     <!--end: Card Body-->

                  </div>
                  <!--end::Tap pane-->
               </div>
               <!--end::Tab Content-->
               
            </div>

         </div>
         <!--end::Content container-->
      </div>
      <!--end::Content-->
      

   </div>
   <!--end::Content wrapper-->
</div>
<!--end:::Main-->
@if(Request::is('partner/reports'))
   </div>
@endif
@endsection
@push('scripts')
<script type="text/javascript">
         // Class definition
         var KTDatatablesReportSale1 = function () {
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
                 const filterSearch = document.querySelector('[data-kt-filter-reportsaletable1="search"]');
                 filterSearch.addEventListener('keyup', function (e) {
                     datatable.search(e.target.value).draw();
                 });
             }

             // Public methods
             return {
                 init: function () {
                     table = document.querySelector('#reports_sales_table1');

                     if ( !table ) {
                         return;
                     }

                     initDatatable();
                     handleSearchDatatable();
                 }
             };
         }();


         // Class definition
         var KTDatatablesReportSale2 = function () {
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
                 const filterSearch = document.querySelector('[data-kt-filter-reportsaletable2="search"]');
                 filterSearch.addEventListener('keyup', function (e) {
                     datatable.search(e.target.value).draw();
                 });
             }

             // Public methods
             return {
                 init: function () {
                     table = document.querySelector('#reports_sales_table2');

                     if ( !table ) {
                         return;
                     }

                     initDatatable();
                     handleSearchDatatable();
                 }
             };
         }();


         // On document ready
         KTUtil.onDOMContentLoaded(function () {
             KTDatatablesReportSale1.init();
             KTDatatablesReportSale2.init();
         });
      </script>
@endpush