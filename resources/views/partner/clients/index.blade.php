@extends('partner.layouts.auth.app')
@section('content') 

@php 
extract( $stats );
@endphp
<!--Begin:::error popup-->

<!--Begin:::error popup-->

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
                           @php
                           if($client_data){
                              $total_client=0;
                              foreach($client_data as $client){
                                   $client->id;
                                   $total_client++;
                              }
                           } 
                           @endphp
                           <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">{{$total_client}}</span>
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
                           <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">{{$totalMonth}}</span>
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
                           <span class="fs-2 fw-bold text-dark me-2 lh-1 ls-n2">{{$totalPreviousMonth}}</span>
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
                        <div class="card-header display-message">
                           <div class="alert alert-danger">
                              <ul>
                                 @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                                 @endforeach
                              </ul>
                           </div>
                        </div>
                     @endif
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
                        <form action="{{ route('sorting') }}" method="GET">
                             @csrf
                             <button href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                 Sorting
                                 <i class="ki-duotone ki-down fs-5 ms-1"></i>
                             </button>
                             <!--begin::Menu-->
                             <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3">
                                     <a href="{{url('partner/client/sorting?sort=name_asc')}}" title="" class="menu-link px-3" >Name (A-Z) </a>
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3">
                                     <a href="{{url('partner/client/sorting?sort=name_desc')}}" title=""class="menu-link px-3" >Name (Z-A) </a>
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3">
                                    <a href="{{url('partner/client/sorting?sort=gender_asc')}}" title=""class="menu-link px-3" >Gender(A-Z)</a>
                                 </div>
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3">
                                    <a href="{{url('partner/client/sorting?sort=gender_desc')}}" title="" class="menu-link px-3" >Gender(Z-A)</a>
                                 </div>
                                 <div class="menu-item px-3">
                                     <a href="{{url('partner/client/sorting?sort=created_at_asc')}}" title="" class="menu-link px-3" >Created at (oldest first)</a>
                                 </div>
                                 <div class="menu-item px-3">
                                    <a href="{{url('partner/client/sorting?sort=created_at_desc')}}" title="" class="menu-link px-3" >Created at (newest first)</a>
                                 </div>
                             </div>
                         </form>
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

                              <a class="menu-link px-3" href='{{url("partner/client/export")}}' target="_blank" download>
                                    Export clients(csv)
                              </a>
                              </form>
                              
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
                     @if($client_data)
                        @foreach($client_data as $client)
                        @php
                         $birth_day = isset($client->birth_day)?$client->birth_day:0;

                         $birth_month = isset($client->birth_month)?$client->birth_month:0;

                         $birth_year = $client->birth_year;
 
                         if( $birth_year){
                           $birth_year = '-'.$birth_year;
                         }
                         else{
                            $birth_year = '' ;
                         }
                         $monthNames = [
                           '','Jan', 'Feb', 'Mar', 'Apr',
                          'May', 'Jun', 'Jul', 'Aug',
                          'Sep', 'Oct', 'Nov', 'Dec'
                        ];
                         $dob = $birth_day.'-'.$monthNames[$birth_month].''.$birth_year;
                         @endphp
                     <tr>
                        <td>
                           <a href="#" class="client-view-click" id="kt_drawer_example_permanent_toggle" view-id="{{ $client->id }}">

                              <div class="d-flex align-items-center">
                                 <div class="symbol symbol-50px me-3">
                                    @php
                                     if ($client->image) {
                                         $data = asset('public/' . $client->image);
                                         echo '<img src="' . $data . '" class="" />';
                                     } else {
                                         $name = $client->name;
                                         $name_parts = explode(' ', $name);
                                         $shortName = '';
                                         foreach ($name_parts as $part) {
                                             $shortName .= substr($part, 0, 1);
                                         }
                                         echo '<span class="symbol-label bg-danger text-inverse-danger fw-bold">' . $shortName . '</span>';
                                     }
                                 @endphp
                                 </div>
                                 <div class="d-flex justify-content-start flex-column">
                                    <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6" >{{ $client->name }}</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7" >{{$client->phone}}</span>
                                 </div>
                              </div>
                           </a>
                        </td>
                        <td>
                           <span class="text-gray-800 fw-bold d-block mb-1 fs-6">{{$client->gender}}</span>
                           <span class="fw-semibold text-gray-400 d-block">{{$dob}}</span>
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
                           <div class="d-flex gap-3 justify-content-end ">
                              <a href="#"class="btn btn-bg-light  btn-color-muted btn-active-color-primary btn-sm px-4 client-view-click" id="kt_drawer_example_permanent_toggle" view-id="{{ $client->id }}">View</a>
                              <a class="btn btn-bg-light client-edit_on-click btn-color-muted btn-active-color-primary btn-sm px-4" client_edit_id="{{ $client->id }}" data-bs-toggle="modal" data-bs-target="#edit_client_scrollable">Edit</a>
                           </div>
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
   </div>
</div>
<!--end:::Main-->

<!--begin::Drawer-->
@include('partner.clients.model.client_details')
@include('partner.clients.model.edit_client')
      <!--begin::Modals-->
      @include('partner.clients.model.import_client')
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
                  <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 close_form" id="kt_drawer_example_notification_close">
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
@include('partner.clients.model.edit_client') 
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

<script>
   jQuery(document).on("click", ".client-view-click", function(e){
      e.preventDefault();
        var view_id = jQuery(this).attr("view-id");
        $.ajax({
            url: baseurl+'partner/client/client_detail/'+view_id,
            type: 'GET',
            dataType: 'json',
            success:function(data) {
                 $('#name').text(data[0].name);
                 $('#phone').text(data[0].phone);
                 $('#email').text(data[0].email);
                 var address = data[0].address;
                 if (address) {
                  var json_address = JSON.parse(address);
                  //$('#address').text(json_address);
                  var final_content = [];
                  var html_content = [];
                  $.each(json_address, function(index, value) {
                     html_content = addressHTMLView(index+1, value);
                     final_content.push(html_content);
                  });
                  $('.address-view-detail').html(final_content);
                 }else{
                  $('.address-view-detail').html("");
                 }
                 var birth_day = data[0].birth_day; 
                 var birth_month = data[0].birth_month; 
                 var birth_year = data[0].birth_year; 
                 var monthNames = [
                     '','Jan', 'Feb', 'Mar', 'Apr',
                    'May', 'Jun', 'Jul', 'Aug',
                    'Sep', 'Oct', 'Nov', 'Dec'
                  ];
                  var formattedDob;
                  if(birth_year){
                      formattedDob = birth_day + '-' + monthNames[birth_month] + '-' + birth_year;
                  }else{
                      formattedDob = birth_day + '-' + monthNames[birth_month];
                  }
                 $('#dob').text(formattedDob)
                 if(data[0].image){
                       $('#image').attr('src',baseurl + 'public' + data[0].image);
                 }
                 else{
                     $('#image').attr('src' ,baseurl +'public/assets/media/avatars/blank.png');
                 }
   
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

   function addressHTMLView(index, address){
      var html = '<div class="d-flex gap-5"><div class="fw-bold mt-5">Address '+index+'</div><div class="text-gray-600 mt-5">'+address+'</div></div>';
      return html;
   }
</script>
<script type="text/javascript">

   let textareaCount = 0;

   function addTextarea() {
    textareaCount++;

    const textareaContainer = document.getElementById('textareaContainer');

    const containerDiv = document.createElement('div');
    containerDiv.classList.add('textarea-container');

     // Create a new textarea
     const textarea = document.createElement('textarea');
     textarea.placeholder = 'Add Address ' + textareaCount;
     textarea.name = 'address[]';
     textarea.classList.add('form-control');
     
     const iconSpan = document.createElement('span');
     iconSpan.innerHTML = '<i class="bi bi-dash-circle fs-2"></i>';
     iconSpan.addEventListener('click', () => {
        textareaContainer.removeChild(containerDiv);
        // textareaContainer.removeChild(iconSpan);
        textareaCount--;
     });

     // Append textarea and remove button to the container
     containerDiv.appendChild(textarea);
     containerDiv.appendChild(iconSpan);

     textareaContainer.appendChild(containerDiv);
   }
   function addEditTextarea() {
    textareaCount++;

    const textareaContainerEdit = document.getElementById('textareaContainerEdit');

    const containerDiv = document.createElement('div');
    containerDiv.classList.add('textarea-container');

     // Create a new textarea
     const textarea = document.createElement('textarea');
     textarea.placeholder = 'Add Address ' + textareaCount;
     textarea.name = 'address[]';
     textarea.classList.add('form-control');
     
     const iconSpan = document.createElement('span');
     iconSpan.innerHTML = '<i class="bi bi-dash-circle fs-2"></i>';
     iconSpan.addEventListener('click', () => {
        textareaContainerEdit.removeChild(containerDiv);
        // textareaContainer.removeChild(iconSpan);
        textareaCount--;
     });

     // Append textarea and remove button to the container
     containerDiv.appendChild(textarea);
     containerDiv.appendChild(iconSpan);

     textareaContainerEdit.appendChild(containerDiv);
   }

   var defaultvalue = "";
   function numberHandler(input){
      const value = input.value.trim();
      const regex = /\b(1?[1-9]|[12][0-9]|3[01])\b/g;
      if (value != "" && !regex.test(value)) {
         input.value = defaultvalue;
      }else{
         defaultvalue = input.value;
      }
   }

</script>
@endpush