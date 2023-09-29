@extends('partner.layouts.auth.app')
@section('content') 
<meta name="csrf-token" content="{{ csrf_token() }}" />
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
                     <a href="{{ url('/partner/dashboard') }}" class="text-muted text-hover-primary">Home</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">Settings</li>
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
         <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="card card-flush">
               <div class="card-body pt-10 pb-0">
               	@if(session()->has('success'))
               	<div class="display-message">
               		<div class="alert alert-success">
               			{{ session()->get('success') }}
               		</div>
               	</div>
               	@endif
               	@if(session()->has('error'))
               	<div class="display-message">
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
                  <!--begin::Details-->
                  <div class="d-flex flex-wrap flex-sm-nowrap gap-8">
                     <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                        @if($loggedUserDetail[0]->business_logo)
                           <img src="{{ asset('/public/'.$loggedUserDetail[0]->business_logo) }}" alt="{{@Auth::user()->name}}">
                        @else
                           <img src="{{ asset('/public/partner/assets/media/avatars/blank.png') }}" alt="{{@Auth::user()->name}}">
                        @endif
                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                     </div>
                     <!--begin::Info-->
                     <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                           <!--begin::User-->
                           <div class="d-flex flex-column">
                              <!--begin::Name-->
                              <div class="d-flex align-items-center mb-2">
                                 <a href="" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Business Details</a>
                                 <a href="#"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>
                              </div>
                              <!--end::Name-->
                           </div>
                           <!--end::User-->
                        </div>
                        <!--end::Title-->
                        <div class="d-flex flex-wrap gap-5 mb-5 cntct-info">
                           @if($loggedUserDetail[0]->website)
                           <div>
                              <a href="{{ $loggedUserDetail[0]->website }}" target="_blank">
                              <i class="fas fa-globe fs-1"></i>
                              </a>
                           </div>
                           @endif
                           @if($loggedUserDetail[0]->facebook)
                           <div>
                              <a href="{{ $loggedUserDetail[0]->facebook }}" target="_blank">
                              <i class="fab fa-facebook-f fs-1"></i>
                              </a>
                           </div>
                           @endif
                           @if($loggedUserDetail[0]->instagram)
                           <div>
                              <a href="{{ $loggedUserDetail[0]->instagram }}" target="_blank">
                              <i class="fab fa-instagram fs-1"></i>
                              </a>
                           </div>
                           @endif
                           <div>
                              <a href="tel:{{@Auth::user()->phone}}">
                              <i class="fas fa-phone"></i>
                              <span class="text-gray-400 fw-semibold fs-6">{{@Auth::user()->phone}}</span>
                              </a>
                           </div>
                           <div>
                              <a href="mailto:{{@Auth::user()->email}}">
                              <i class="fas fa-envelope"></i>
                              <span class="text-gray-400 fw-semibold fs-6">{{@Auth::user()->email}}</span>
                              </a>
                           </div>
                        </div>
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
                     <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <div class="card-toolbar">
                           <div class="d-flex justify-content-end gap-3" data-kt-user-table-toolbar="base">
                              <span data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Edit customer details" data-kt-initialized="1">
                                 <a href="#" class="btn btn-light-primary on-business-detail" data-bs-toggle="modal" data-bs-target="#kt_modal_businessdetail" partner-id="{{@Auth::user()->id}}">Edit</a>
                              </span>
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable">
                              <i class="ki-duotone ki-plus fs-2"></i>Add new Venue
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--end::Details-->
                  <div class="d-flex justify-content-between">
                     <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                        <li class="nav-item mt-2">
                           <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="venue-setting.html">
                           Venue                    
                           </a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                           <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('staff.index') }}">
                           Staff                    
                           </a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                           <a class="nav-link text-active-primary ms-0 me-10 py-5" href="">
                           Online Booking                    
                           </a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                           <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="">
                           Account Info                  
                           </a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                           <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="">
                           Integration              
                           </a>
                        </li>
                        <!--end::Nav item-->
                     </ul>
                     <div class="mb-5">
                        <!--begin::Label-->
                        <label class="required fw-semibold fs-6 mb-2">Select Venue</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select class="form-select form-select-solid filter-option-venue" data-control="select2" data-placeholder="Select an option" data-allow-clear="true">
                           <option></option>
                           @if($venue_data_arr)
                           @foreach($venue_data_arr as $vkey => $venue_value)
                           <option value="{{ $venue_value['id']}}" @if($vkey == 0) {{ "selected" }} @endif>{{ $venue_value['name'] }}</option>
                           @endforeach
                           @endif
                        </select>
                        <!--end::Input-->
                     </div>
                  </div>
               </div>
            </div>
            <!--begin::Layout-->
            @if($venue_data_arr)
            @foreach($venue_data_arr as $key => $venue_data)
            <div class="venue-lists venue_{{ $venue_data['id'] }} @if($key != '0') {{ 'd-none' }} @endif">
               <div class="d-flex flex-column flex-lg-row mt-8">
                  <!--begin::Sidebar-->
                  <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
                     <div class="possticky">
                        <!--begin::Card-->
                        <div class="card mb-5 mb-xl-8">
                           <!--begin::Card body-->
                           <div class="card-body">
                              <!--begin::Details toggle-->
                              <div class="d-flex flex-stack fs-4 py-3">
                                 <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Venue Details
                                    <span class="ms-2 rotate-180">
                                    <i class="ki-duotone ki-down fs-3"></i>
                                    </span>
                                 </div>
                                 <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
                                 <a href="#" class="btn btn-sm btn-light-primary update-venue-detail" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details" venue-id="{{ $venue_data['id'] }}">Edit</a>
                                 </span>
                              </div>
                              <!--end::Details toggle-->
                              <div class="separator"></div>
                              <!--begin::Details content-->
                              <div id="kt_user_view_details" class="collapse show">
                                 <div class="pb-5 fs-6">
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5">Venue name</div>
                                    <div class="text-gray-600">
                                       {{ isset($venue_data['name']) ? $venue_data['name'] : "" }}
                                    </div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5">Address</div>
                                    <div class="text-gray-600">
                                       {{ isset($venue_data['address']) ? $venue_data['address'] : "" }}
                                    </div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5">Phone</div>
                                    <div class="text-gray-600">
                                       <a href="#" class="text-gray-600 text-hover-primary">{{ isset($venue_data['phone']) ? $venue_data['phone'] : "" }}</a>
                                    </div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5">Email</div>
                                    <div class="text-gray-600">{{ isset($venue_data['email']) ? $venue_data['email'] : "" }}</div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5">Billing Details</div>
                                    <div class="text-gray-600">{{ isset($venue_data['billing_details']) ? $venue_data['billing_details'] : "" }}</div>
                                    <!--begin::Details item-->
                                    <!--begin::Details item-->
                                    <div class="fw-bold mt-5">Last Login</div>
                                    <div class="text-gray-600">10 March, 2023, 11:30 am</div>
                                    <!--begin::Details item-->
                                 </div>
                              </div>
                              <!--end::Details content-->
                           </div>
                           <!--end::Card body-->
                        </div>
                        <div class="card card-flush py-4 flex-row-fluid">
                           <!--begin::Card header-->
                           <div class="card-header">
                              <div class="card-title">
                                 <h2>Gender</h2>
                              </div>
                           </div>
                           <!--end::Card header-->
                           <!--begin::Card body-->
                           <div class="card-body pt-0">
                              <span class="d-flex align-items-center justify-content-between">
                                 <!--begin::Icon-->
                                 <i class="ki-duotone ki-profile-circle fs-3hx">
                                 <span class="path1"></span>
                                 <span class="path2"></span>
                                 <span class="path3"></span>
                                 </i>
                                 <!--end::Icon-->
                                 <!--begin::Info-->
                                 <span class="ms-4">
                                 <span class="fs-3 fw-bold text-gray-900 d-block">{{ isset($venue_data['venue_meta']['gender_restriction']) ? $venue_data['venue_meta']['gender_restriction'] : "" }}</span>
                                 </span>
                                 <!--end::Info-->
                              </span>
                              <!--end::Label-->
                           </div>
                           <!--end::Card body-->
                        </div>
                     </div>
                  </div>
                  <div class="flex-lg-row-fluid ms-lg-10 mb-10">
                     <!--begin::Engage widget 7-->
                     <div class="card card-flush">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                           <!--begin::Title-->
                           <h3 class="card-title align-items-start flex-column">
                              <span class="card-label fw-bold text-dark">Venue Photos</span>
                           </h3>
                           <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-7">
                           <!--begin::Row-->
                           <div class="row">
                              <!--begin::Col-->
                              @if( !empty($venue_data['venue_meta']['featured']) )
                              <div class="col-md-7 mb-11 mb-md-0">
                                 <!--begin::Overlay-->
                                 <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('/public/'.$venue_data['venue_meta']['featured']) }}" target="_blank">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded mb-3" style="height: 266px;background-image:url({{ asset('/public/'.$venue_data['venue_meta']['featured']) }}"></div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                       <i class="ki-duotone ki-eye fs-3x text-white">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       <span class="path3"></span>
                                       </i>
                                    </div>
                                    <!--end::Action-->
                                 </a>
                                 <!--end::Overlay-->
                                 <!--begin::Info-->
                                 <div class="m-0">
                                    <!--begin::Title-->
                                    <span class="text-gray-800 text-hover-primary fs-3 d-block mb-2">Featured</span>
                                    <!--end::Title-->
                                 </div>
                                 <!--end::Info-->
                              </div>
                              @endif
                              <!--end::Col-->
                              <div class="col-md-5 mb-11 mb-md-0">
                                 <div class="row">
                                 	@if( !empty($venue_data['venue_meta']['imgother1']) )
                                    <div class="col-md-6 mb-11 mb-md-0">
                                       <!--begin::Overlay-->
                                       <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('/public/'.$venue_data['venue_meta']['imgother1']) }}" target="_blank">
                                          <!--begin::Image-->
                                          <div class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-100px card-rounded mb-3" style="height: 266px;background-image:url({{ asset('/public/'.$venue_data['venue_meta']['imgother1']) }}"></div>
                                          <!--end::Image-->
                                          <!--begin::Action-->
                                          <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                             <i class="ki-duotone ki-eye fs-3x text-white">
                                             <span class="path1"></span>
                                             <span class="path2"></span>
                                             <span class="path3"></span>
                                             </i>
                                          </div>
                                          <!--end::Action-->
                                       </a>
                                       <!--end::Overlay-->
                                    </div>
                                    @endif
                                    @if( !empty($venue_data['venue_meta']['imgother2']) )
                                    <div class="col-md-6 mb-11 mb-md-0">
                                       <!--begin::Overlay-->
                                       <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('/public/'.$venue_data['venue_meta']['imgother2']) }}" target="_blank">
                                          <!--begin::Image-->
                                          <div class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-100px card-rounded mb-3" style="height: 266px;background-image:url({{ asset('/public/'.$venue_data['venue_meta']['imgother2']) }}"></div>
                                          <!--end::Image-->
                                          <!--begin::Action-->
                                          <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                             <i class="ki-duotone ki-eye fs-3x text-white">
                                             <span class="path1"></span>
                                             <span class="path2"></span>
                                             <span class="path3"></span>
                                             </i>
                                          </div>
                                          <!--end::Action-->
                                       </a>
                                       <!--end::Overlay-->
                                    </div>
                                    @endif
                                    @if( !empty($venue_data['venue_meta']['imgother3']) )
                                    <div class="col-md-6 mb-11 mb-md-0">
                                       <!--begin::Overlay-->
                                       <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('/public/'.$venue_data['venue_meta']['imgother3']) }}" target="_blank">
                                          <!--begin::Image-->
                                          <div class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-100px card-rounded mb-3" style="height: 266px;background-image:url({{ asset('/public/'.$venue_data['venue_meta']['imgother3']) }}"></div>
                                          <!--end::Image-->
                                          <!--begin::Action-->
                                          <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                             <i class="ki-duotone ki-eye fs-3x text-white">
                                             <span class="path1"></span>
                                             <span class="path2"></span>
                                             <span class="path3"></span>
                                             </i>
                                          </div>
                                          <!--end::Action-->
                                       </a>
                                       <!--end::Overlay-->
                                    </div>
                                    @endif
                                    @if( !empty($venue_data['venue_meta']['imgother4']) )
                                    <div class="col-md-6 mb-11 mb-md-0">
                                       <!--begin::Overlay-->
                                       <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('/public/'.$venue_data['venue_meta']['imgother4']) }}" target="_blank">
                                          <!--begin::Image-->
                                          <div class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-100px card-rounded mb-3" style="height: 266px;background-image:url({{ asset('/public/'.$venue_data['venue_meta']['imgother4']) }}"></div>
                                          <!--end::Image-->
                                          <!--begin::Action-->
                                          <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                             <i class="ki-duotone ki-eye fs-3x text-white">
                                             <span class="path1"></span>
                                             <span class="path2"></span>
                                             <span class="path3"></span>
                                             </i>
                                          </div>
                                          <!--end::Action-->
                                       </a>
                                       <!--end::Overlay-->
                                    </div>
                                    @endif
                                    <div class="col">
                                       <!--begin::Title-->
                                       <span class="text-gray-800 text-hover-primary fs-3 d-block mb-2">Others</span>
                                       <!--end::Title-->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--end::Row-->
                        </div>
                        <!--end::Card body-->
                     </div>
                     <!--end::Engage widget 7-->
                     <div class="card card-flush mt-8">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                           <!--begin::Title-->
                           <h3 class="card-title align-items-start flex-column">
                              <span class="card-label fw-bold text-dark">Business Type</span>
                           </h3>
                           <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <div class="card-body">
                           <div class="row">
                              
                           	@if( !empty($venue_data['business_type_data']) )
                           	@foreach($venue_data['business_type_data'] as $business_type)
                              <div class="col-md-6 mb-5">
                                 <!--begin::Option-->
                                 <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center">
                                    <!-- <div class="icn ms-3">
                                       <img src="{{ asset('/public/partner/assets/media/icons/duotune/layouts/lay001.svg') }}"/>
                                    </div> -->
                                    <!--begin::Info-->
                                    <span class="ms-3">
                                       <h3 class="card-title align-items-start flex-column">
                                          <span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ $business_type['business_type'] }}</span>
                                          <!-- <span class="text-gray-400 fw-semibold d-block fs-6">lorem ipsum dolar sit amet
                                          </span> -->
                                       </h3>
                                    </span>
                                    <!--end::Info-->
                                 </label>
                                 <!--end::Option-->
                              </div>
                              @endforeach
                              @endif

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card card-flush">
                  <!--begin::Header-->
                  <div class="card-header pt-7">
                     <!--begin::Title-->
                     <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Amenities</span>
                     </h3>
                     <!--end::Title-->
                  </div>
                  <!--end::Header-->
                  <div class="card-body">
                     <div class="row">
                     	@if( !empty($venue_data['amenity_data']) )
                     	@foreach($venue_data['amenity_data'] as $amenity)
                     	<div class="col-md-3 col-sm-6 mb-5">
                     		<!--begin::Option-->
                     		<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center">
                     			<div class="icn ms-3">
                     				<img src="{{ asset('/public/'.$amenity['amenity_icon']) }}">
                     			</div>
                     			<!--begin::Info-->
                     			<span class="ms-3">
                     				<h3 class="card-title align-items-start flex-column">
                     					<span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ $amenity['amenity_name']}}</span>
                     				</h3>
                     			</span>
                     			<!--end::Info-->
                     		</label>
                     	</div>
                     	@endforeach
                     	@endif
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
            @endif
         </div>
         <!--end::Content container-->
      </div>
      <!--end::Content-->
   </div>
   <!--end::Content wrapper-->
</div>
<!--end:::Main-->


@include('partner.setting.venue.modal.add-venue-modal')

@include('partner.setting.venue.modal.update-venue-modal')
@include('partner.setting.venue.modal.change-email')
@include('partner.setting.venue.modal.change-phone')
@include('partner.setting.venue.modal.verify-old-email')
@include('partner.setting.venue.modal.verify-old-phone')
@include('partner.setting.venue.modal.update-business-detail')

@endsection
@push('scripts')
<script>
   // Multistep form
   
   var element = document.querySelector("#kt_stepper_example_basic");
   
   // Initialize Stepper
   var stepper = new KTStepper(element);
   
   // Handle next step
   stepper.on("kt.stepper.next", function (stepper) {
       stepper.goNext(); // go next step
   });
   
   // Handle previous step
   stepper.on("kt.stepper.previous", function (stepper) {
       stepper.goPrevious(); // go previous step
   }); 


   var element1 = document.querySelector("#kt_stepper_example_basic_update");
   
   // Initialize Stepper
   var stepper1 = new KTStepper(element1);
   
   // Handle next step
   stepper1.on("kt.stepper.next", function (stepper1) {
       stepper1.goNext(); // go next step
   });
   
   // Handle previous step
   stepper1.on("kt.stepper.previous", function (stepper1) {
       stepper1.goPrevious(); // go previous step
   });
</script>
<script type="text/javascript">
   let opDiv1 = document.querySelector('.showopHrDiv1');
   function showopHrDiv(e) {
   	if(e.checked && opDiv1.classList.contains('d-none')) {
   		opDiv1.classList.remove('d-none');
   	}
   	else {
   		opDiv1.classList.add('d-none')
   	}
   }

   let opDiv11 = document.querySelector('.showopEditHrDiv1');
   function showopEditHrDiv(e) {
   	if(e.checked && opDiv11.classList.contains('d-none')) {
   		opDiv11.classList.remove('d-none');
   	}
   	else {
   		opDiv11.classList.add('d-none')
   	}
   }
   
   function showOpDivData(e) {
   
       let checkBoxInput = document.querySelector('.working-days').children;
       let opHrIndRow1 = document.querySelectorAll('.showopHrDiv1 > table > tbody >tr');
       let opHrIndRow2 = document.querySelectorAll('.showopHrDiv2 > table > tbody >tr');
   
       for(let i=0; i<checkBoxInput.length; i++) {
           if(e.checked && checkBoxInput[i].querySelector('input') == e) {
               opHrIndRow1[i].classList.remove('d-none');
               opHrIndRow2[i].classList.remove('d-none');
   
           }
           else if(!e.checked && checkBoxInput[i].querySelector('input') == e) {
               opHrIndRow1[i].classList.add('d-none');  
               opHrIndRow2[i].classList.add('d-none'); 
   
   
               let opHrIndRowDivWeek1 = opHrIndRow1[i].querySelectorAll('.divweekoff');
               for(let i=0; i<opHrIndRowDivWeek1.length; i++) {
               	opHrIndRowDivWeek1[i].style.display = "none";
               	opHrIndRowDivWeek1[i].previousElementSibling.style.display="block";
               }
   
               let opHrIndRowDivWeek2 = opHrIndRow2[i].querySelectorAll('.divweekoff');
               for(let i=0; i<opHrIndRowDivWeek2.length; i++) {
               	opHrIndRowDivWeek2[i].style.display = "none";
               	opHrIndRowDivWeek2[i].previousElementSibling.style.display="block";
               }
   
   
               let inputTime1 = opHrIndRow1[i].querySelectorAll('.kt_td_picker_time_only > input')   
   			for(let i=0; i<inputTime1.length; i++) {
   		        inputTime1[i].value = '';
   		    }
   		    let inputTime2 = opHrIndRow2[i].querySelectorAll('.kt_td_picker_time_only > input')   
   			for(let i=0; i<inputTime2.length; i++) {
   		        inputTime2[i].value = '';
   		    }          
           }
       }
   
   }
   function showOpEditDivData(e) {
   
       let checkBoxInput = document.querySelector('.edit-working-days').children;
       let opHrIndRow1 = document.querySelectorAll('.showopEditHrDiv1 > table > tbody >tr');
       let opHrIndRow2 = document.querySelectorAll('.showopEditHrDiv2 > table > tbody >tr');
   
       for(let i=0; i<checkBoxInput.length; i++) {
           if(e.checked && checkBoxInput[i].querySelector('input') == e) {
               opHrIndRow1[i].classList.remove('d-none');
               opHrIndRow2[i].classList.remove('d-none');
   
           }
           else if(!e.checked && checkBoxInput[i].querySelector('input') == e) {
               opHrIndRow1[i].classList.add('d-none');  
               opHrIndRow2[i].classList.add('d-none'); 
   
   
               let opHrIndRowDivWeek1 = opHrIndRow1[i].querySelectorAll('.divweekoff');
               for(let i=0; i<opHrIndRowDivWeek1.length; i++) {
               	opHrIndRowDivWeek1[i].style.display = "none";
               	opHrIndRowDivWeek1[i].previousElementSibling.style.display="block";
               }
   
               let opHrIndRowDivWeek2 = opHrIndRow2[i].querySelectorAll('.divweekoff');
               for(let i=0; i<opHrIndRowDivWeek2.length; i++) {
               	opHrIndRowDivWeek2[i].style.display = "none";
               	opHrIndRowDivWeek2[i].previousElementSibling.style.display="block";
               }
   
   
               let inputTime1 = opHrIndRow1[i].querySelectorAll('.kt_td_picker_time_only > input')   
   			for(let i=0; i<inputTime1.length; i++) {
   		        inputTime1[i].value = '';
   		    }
   		    let inputTime2 = opHrIndRow2[i].querySelectorAll('.kt_td_picker_time_only > input')   
   			for(let i=0; i<inputTime2.length; i++) {
   		        inputTime2[i].value = '';
   		    }          
           }
       }
   
   }
</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" async defer></script>

<script src="{{asset('/public/assets/js/partner/venue.js')}}" type="text/javascript"></script>
@endpush
