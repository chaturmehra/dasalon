@extends('partner.layouts.auth.app')
@section('content') 

<!--Begin:::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
   <!--begin::Content wrapper-->
   <div class="d-flex flex-column flex-column-fluid">

      <!--begin::Toolbar-->
      <div id="kt_app_toolbar" class="app-toolbar pt-6 pb-0">
         <!--begin::Toolbar container-->
         <div id="kt_app_toolbar_container" class="app-container container-xl d-flex flex-stack">
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
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">Membership</li>
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
                                           <a href="{{ route('memberships.index') }}" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Memberships</a>
                                           <a href="{{ route('memberships.index') }}"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>
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
                                                   <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$" data-kt-initialized="1">$4,500</div>
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
                                                   <i class="ki-outline ki-arrow-down fs-3 text-danger me-2"></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="80" data-kt-initialized="1">80</div>
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
                                                   <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">%60</div>
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

                     @include('partner.services.tab')

               </div>
            </div>
            <!--end::Navbar-->

            <div class="card card-flush">

               <div class="card-body pb-0">

                  <!--begin::Wrapper-->
                  <div class="d-flex flex-column px-9">
                     <!--begin::Section-->
                     <div class="pt-10 pb-0">
                        <!--begin::Title-->
                        <h3 class="text-dark text-center fw-bold">No Memberships added</h3>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="text-center text-gray-600 fw-semibold pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        </div>
                        <!--end::Text-->
                        <!--begin::Action-->
                        <div class="text-center mt-5 mb-9">
                           <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable22">Add Memberships</a>
                        </div>
                        <!--end::Action-->
                     </div>
                     <!--end::Section-->
                     <!--begin::Illustration-->
                     <div class="text-center px-4">
                        <img class="mw-100 mh-200px" alt="image" src="{{ asset('/public/assets/media/illustrations/sketchy-1/1.png') }}" />
                     </div>
                     <!--end::Illustration-->
                  </div>
                  <!--end::Wrapper-->

               </div>

            </div>

            <!--begin::Products-->
            <div class="card card-flush mt-8">

               <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                  <!--begin:::Tabs-->
                  <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                     <!--begin:::Tab item-->
                     <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#managetbl">Manage Membership</a>
                     </li>
                     <!--end:::Tab item-->
                     <!--begin:::Tab item-->
                     <!--end:::Tab item-->
                  </ul>
                  <!--end:::Tabs-->
               </div>

               <div class="tab-content">

                  <div class="tab-pane fade active show" id="managetbl" role="tab-panel">

                     <!--begin::Card header-->
                     <div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-5">

                        <!--begin::Card title-->
                        <div class="card-title">
                           <!--begin::Search-->
                           <div class="d-flex align-items-center position-relative my-1">
                              <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                              <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
                           </div>
                           <!--end::Search-->
                        </div>
                        <!--end::Card title-->

                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                           <div class="card-toolbar">
                              <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">

                                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable22">
                                     <i class="ki-duotone ki-plus fs-2"></i>Add Memberships
                                 </button>

                              </div>
                           </div>
                        </div>

                     </div>
                     <!--end::Card header-->

                     <!--begin::Card body-->
                     <div class="card-body pt-0">

                        <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_datatable_example1">
                           <!--begin::Table head-->
                           <thead>
                              <!--begin::Table row-->
                              <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                 <th>Name</th>
                                 <th>Type</th>
                                 <th>Price</th>
                                 <th>Validity</th>
                                 <th>Qty. sold</th>
                                 <th>Status</th>
                                 <th class="text-end">Action</th>
                              </tr>
                              <!--end::Table row-->
                           </thead>
                           <!--end::Table head-->


                           <!--begin::Table body-->
                           <tbody class="fw-bold text-gray-600 alntop">

                              @if(!empty($membershipLists))
                               @foreach($membershipLists as $key => $membsershipList)
                               @php 
                                  $status = $membsershipList['status']; 
                                  if($status){
                                     $text = "Enabled";
                                     $class = "success";
                                     $statusVal = 0;
                                     $statusText = "Disable";
                                  }else{
                                     $text = "Disabled";
                                     $class = "danger";
                                     $statusVal = 1;
                                     $statusText = "Enable";
                                  }

                               @endphp

                              <tr>
                                 <td>
                                    <a href="javascript:void(0)" id="kt_drawer_example_permanent_toggle2" class="get-membership-detail-by-id" membership-id="{{ $membsershipList['pm_id'] }}">
                                       <div class="d-flex gap-6">
                                          <div data-qa="color-sample-blue" class="color-ind">
                                             <div class="color-ind-single {{ $membsershipList['membership_color'] }} divlg" title="blue">
                                                <img src="{{ asset('/public/assets/media/svg/voucher.svg') }}">
                                             </div>
                                          </div>
                                          <div class="d-flex justify-content-start flex-column">
                                             <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $membsershipList['membership_name'] }}</span>
                                             <span class="text-muted fw-semibold text-muted d-block fs-7">
                                                {{ $membsershipList['description'] }}
                                             </span>
                                          </div>
                                       </div>
                                    </a>
                                 </td>
                                 <td>Membership Type</td>
                                 <td>
                                    <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $partner_country_config->currency_sign }}{{ $membsershipList['membership_price'] }}</span>
                                 </td>
                                 <td>{{ $membsershipList['validity'] }}</td>
                                 <td>12</td>
                                 <td>
                                    <span class="badge badge-light-{{$class}}">{{ $text }}</span>
                                 </td>
                                 <td class="text-end">
                                    <a href="javascript:void(0)" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="javascript:void(0)" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3 get-membership-detail-by-id" membership-id="{{ $membsershipList['pm_id'] }}">Edit</a>
                                       </div>
                                       <!--end::Menu item-->

                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                        <a href="javascript:void(0)" class="menu-link px-3 status-change" status-value="{{ $statusVal }}" membership-id="{{ $membsershipList['pm_id'] }}">{{ $statusText }}
                                        </a>
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
                     <!--end::Card body-->

                  </div>

               </div>

            </div>
            <!--end::Products-->

         </div>
         <!--end::Content container-->
      </div>
      <!--end::Content-->
      

   </div>
   <!--end::Content wrapper-->
</div>
<!--end:::Main-->

<!--begin::Modals-->

@include('partner.services.memberships.modal.add')
@include('partner.services.memberships.modal.edit')
<!--end::Modals-->

@endsection
@push('scripts')
<script type="text/javascript">
   function clrChange(e) {
      let bgDiv = document.getElementById('clrbgdiv');
      bgDiv.className = 'email_preview_in6 ' + e.classList[1];
      let allElem = document.querySelectorAll('.color-ind');
      for(let i=0; i<allElem.length; i++) {
         if(allElem[i].classList.contains('active')) {
            allElem[i].classList.remove('active')
         }
      }
      e.parentElement.classList.add('active');
   }  

   function clrChange2(e) {
      let bgDiv = document.getElementById('clrbgdiv2');

      bgDiv.className = 'email_preview_in6 ' + e.classList[1];
      let allElem = document.querySelectorAll('.color-ind2');
      for(let i=0; i<allElem.length; i++) {
         if(allElem[i].classList.contains('active')) {
            allElem[i].classList.remove('active')
         }
      }
      e.parentElement.classList.add('active');
      $("#membership_color").val(e.classList[1]);
   }
</script>
<script src="{{asset('/public/assets/js/partner/membership.js')}}" type="text/javascript"></script>
@endpush