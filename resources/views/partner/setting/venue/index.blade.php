@extends('partner.layouts.auth.app')
@section('content') 
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
                     <a href="{{ url('admin/dashboard') }}" class="text-muted text-hover-primary">Home</a>
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
                        <img src="{{ asset('/public/partner/assets/media/avatars/300-1.jpg') }}" alt="image">
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
                           <div>
                              <a href="">
                              <i class="fas fa-globe fs-1"></i>
                              </a>
                           </div>
                           <div>
                              <a href="">
                              <i class="fab fa-facebook-f fs-1"></i>
                              </a>
                           </div>
                           <div>
                              <a href="">
                              <i class="fab fa-instagram fs-1"></i>
                              </a>
                           </div>
                           <div>
                              <a href="">
                              <i class="fas fa-phone"></i>
                              <span class="text-gray-400 fw-semibold fs-6">{{@Auth::user()->phone}}</span>
                              </a>
                           </div>
                           <div>
                              <a href="">
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
                           <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable">
                              <i class="ki-duotone ki-plus fs-2"></i>Add new Venue
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--end::Details-->
                  <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                     <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="venue-setting.html">
                        Venue                    
                        </a>
                     </li>
                     <!--end::Nav item-->
                     <!--begin::Nav item-->
                     <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="staff.html">
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
               </div>
            </div>
            <!--begin::Layout-->
            @if($venue_data_arr)
            @foreach($venue_data_arr as $key => $venue_data)
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
                              <a href="#" class="btn btn-sm btn-light-primary update-venue-detail" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details" venue-id="{{ $venue_data['id']}}">Edit</a>
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
                                    {{ $venue_data['name'] }}
                                 </div>
                                 <!--begin::Details item-->
                                 <!--begin::Details item-->
                                 <div class="fw-bold mt-5">Address</div>
                                 <div class="text-gray-600">
                                    {{ $venue_data['address'] }}
                                 </div>
                                 <!--begin::Details item-->
                                 <!--begin::Details item-->
                                 <div class="fw-bold mt-5">Phone</div>
                                 <div class="text-gray-600">
                                    <a href="#" class="text-gray-600 text-hover-primary">{{ $venue_data['phone'] }}</a>
                                 </div>
                                 <!--begin::Details item-->
                                 <!--begin::Details item-->
                                 <div class="fw-bold mt-5">Email</div>
                                 <div class="text-gray-600">{{ $venue_data['email'] }}</div>
                                 <!--begin::Details item-->
                                 <!--begin::Details item-->
                                 <div class="fw-bold mt-5">Billing Details</div>
                                 <div class="text-gray-600">{{ $venue_data['billing_details'] }}</div>
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
                              <span class="fs-3 fw-bold text-gray-900 d-block">{{ $venue_data['venue_meta']['gender_restriction'] }}</span>
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
<div class="modal fade multistepform_venue" id="kt_modal_scrollable" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-xl">
      <div class="modal-content modal-rounded">
         <div class="modal-header py-7 d-flex justify-content-between">
            <h2>Venue detail</h2>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <!--begin::Stepper-->
            <div class="stepper stepper-pills" id="kt_stepper_example_basic">
               <!--begin::Nav-->
               <div class="stepper-nav flex-center flex-wrap mb-10 justify-content-between gap-5">
                  <!--begin::Step 1-->
                  <div class="stepper-item current" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Venue details
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 1-->
                  <!--begin::Step 2-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Venue address
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 2-->
                  <!--begin::Step 3-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Venue Photos
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 3-->
                  <!--begin::Step 4-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Business type
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 4-->
                  <!--begin::Step 5-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Operating hours
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 5-->
                  <!--begin::Step 6-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Off Peak hours
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 6-->
                  <!--begin::Step 7-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Amenities
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 7-->
                  <!--begin::Step 8-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Complete
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 8-->
               </div>
               <!--end::Nav-->
               <!--begin::Form-->
               <form class="mx-auto" novalidate="novalidate" id="kt_stepper_example_basic_form" action="{{ url('partner/store-venue-setting') }}" method="post" enctype="multipart/form-data">
               	@csrf
                  <!--begin::Group-->
                  <div class="mb-5">
                     <!--begin::Step 1-->
                     <div class="current" data-kt-stepper-element="content">
                        <div class="row align-items-end">
                           <div class="col-12 mb-7">
                              <div class="fv-row">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800 mb-4">Venue name</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-6 my-3">This is the location name of your business. <br>	
                                    Recommended to enter your location name if you have multiple venues
                                    </span>
                                 </h3>
                                 <!--begin::Input-->
                                 <input type="text" name="venue_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Venue name" required>
                                 <!--end::Input-->
                              </div>
                           </div>
                           <div class="col-12 mb-7">
                              <div class="fv-row">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800 mb-4">Address</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-6 my-3">This is the location name of your business. <br>	
                                    Recommended to enter your location name if you have multiple venues
                                    </span>
                                 </h3>
                                 <!--begin::Input-->
                                 <input type="text" name="address" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Venue name" required>
                                 <!--end::Input-->
                              </div>
                           </div>
                           <div class="col-12 mb-7">
                              <div class="fv-row">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800 mb-4">Phone number</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-6 my-3">Phone number of this venue which will appear on the Business profile of this venue
                                    </span>
                                 </h3>
                                 <!--begin::Input-->
                                 <input type="text" name="phone_number" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Phone Number" required>
                                 <!--end::Input-->
                              </div>
                           </div>
                           <div class="col-12 mb-7">
                              <div class="fv-row">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800 mb-4">Email address</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-6 my-3">Venue manager email address
                                    </span>
                                 </h3>
                                 <!--begin::Input-->
                                 <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Email address" required>
                                 <!--end::Input-->
                              </div>
                           </div>
                           <div class="col-12 mb-7">
                              <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 mb-4">Billing details</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-6 mt-5">Select amenities available
                                 </span>
                              </h3>
                              <input type="text" name="billing_details" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Business name - venue name" value="" required>
                           </div>
                        </div>
                     </div>
                     <!--end::Step 1-->
                     <!--begin::Step 2-->
                     <div data-kt-stepper-element="content">
                        <div class="d-flex-flex-column">
                           <div class="d-flex flex-column scroll-y me-n7 pe-7">
                              <!--begin::Input group-->
                              <div class="fv-row mb-7">
                                 <!--begin::Label-->
                                 <label class="required fw-semibold fs-6 mb-2">Where's your business located?</label>
                                 <!--end::Label-->
                                 <!--begin::Input-->
                                 <input type="text" id="business_location" name="business_location" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="business locationn" value="" required/>
                                 <!--end::Input-->
                              </div>
                              <!--end::Input group-->
                           </div>
                           <!--end::Scroll-->
                           <div class="card">
                              <div class="card-body brdr">
                                 <div class="row">
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Address</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="business_address" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Address" value="" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <div class="mb-0">
                                          <label class="form-label">Apt./Suite etc</label>
                                          <!--begin::Input-->
                                          <input type="text" name="business_aptsuite" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Apt./Suite" value="" required>
                                          <!--end::Input-->
                                       </div>
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">District</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="district" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="District" value="" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">City</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="city" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="City" value="" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Region</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="region" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Region" value="" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Postcode</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="postcode" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Postcode" value="" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Country</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="country" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Country" value="" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <div class="mb-0">
                                          <label class="form-label">Directions</label>
                                          <textarea class="form-control form-control form-control-solid" data-kt-autosize="true" placeholder="Directions" value="" name="directions"></textarea>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-check my-10">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="business_address_check" />
                              <label class="form-check-label" for="flexCheckDefault">
                              I dont have a business address(mobile and online services only)
                              </label>
                           </div>
                           <div class="card">
                              <div class="card-body brdr">
                                 <span class="card-label fw-bold text-gray-800 mb-4">Map location</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-6 mt-5">Drag the map so the pin matches the exact location of your business location
                                 </span>
                                 <hr>
                                 <div class="row">
                                    <div class="col-12 map">
                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.664954374128!2d103.8950833744703!3d1.3777013986092788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da163beca5d721%3A0xe869e5868a79ea59!2sPunggol%20Park!5e0!3m2!1sen!2sin!4v1683635051463!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--end::Step 2-->
                     <!--begin::Step 3-->
                     <div data-kt-stepper-element="content">
                        <div class="row w-100">
                           <div class="col-md-3">
                              <!--begin::Input group-->
                              <div class="fv-row mb-7 d-flex flex-column">
                                 <label class="required fw-semibold fs-6 mb-5">Add Featured Image</label>
                                 <div class="image-input image-input-empty" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-125px h-125px"></div>
                                    <!--end::Image preview wrapper-->
                                    <!--begin::Edit button-->
                                    <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                       data-kt-image-input-action="change"
                                       data-bs-toggle="tooltip"
                                       data-bs-dismiss="click"
                                       title="Change avatar">
                                       <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                                       <!--begin::Inputs-->
                                       <input type="file" name="featured" accept=".png, .jpg, .jpeg" required/>
                                       <input type="hidden" name="avatar_remove" />
                                       <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->
                                    <!--begin::Cancel button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                       data-kt-image-input-action="cancel"
                                       data-bs-toggle="tooltip"
                                       data-bs-dismiss="click"
                                       title="Cancel avatar">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Cancel button-->
                                    <!--begin::Remove button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                       data-kt-image-input-action="remove"
                                       data-bs-toggle="tooltip"
                                       data-bs-dismiss="click"
                                       title="Remove avatar">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Remove button-->
                                 </div>
                                 <!--end::Image input-->
                              </div>
                              <!--end::Input group-->
                           </div>
                           <div class="col-md-9">
                              <!--begin::Input group-->
                              <div class="fv-row mb-7 d-flex flex-column">
                                 <label class="required fw-semibold fs-6 mb-5">Add other Images</label>
                                 <div class="d-flex flex-wrap gap-5 align-items-end">
                                    <div class="image-input image-input-empty" data-kt-image-input="true">
                                       <!--begin::Image preview wrapper-->
                                       <div class="image-input-wrapper w-125px h-125px"></div>
                                       <!--end::Image preview wrapper-->
                                       <!--begin::Edit button-->
                                       <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="change"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Change avatar">
                                          <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                                          <!--begin::Inputs-->
                                          <input type="file" name="imgother1" accept=".png, .jpg, .jpeg" required/>
                                          <input type="hidden" name="avatar_remove" />
                                          <!--end::Inputs-->
                                       </label>
                                       <!--end::Edit button-->
                                       <!--begin::Cancel button-->
                                       <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="cancel"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Cancel avatar">
                                       <i class="ki-outline ki-cross fs-3"></i>
                                       </span>
                                       <!--end::Cancel button-->
                                       <!--begin::Remove button-->
                                       <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="remove"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Remove avatar">
                                       <i class="ki-outline ki-cross fs-3"></i>
                                       </span>
                                       <!--end::Remove button-->
                                    </div>
                                    <div class="image-input image-input-empty" data-kt-image-input="true">
                                       <!--begin::Image preview wrapper-->
                                       <div class="image-input-wrapper w-125px h-125px"></div>
                                       <!--end::Image preview wrapper-->
                                       <!--begin::Edit button-->
                                       <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="change"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Change avatar">
                                          <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                                          <!--begin::Inputs-->
                                          <input type="file" name="imgother2" accept=".png, .jpg, .jpeg" required/>
                                          <input type="hidden" name="avatar_remove" />
                                          <!--end::Inputs-->
                                       </label>
                                       <!--end::Edit button-->
                                       <!--begin::Cancel button-->
                                       <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="cancel"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Cancel avatar">
                                       <i class="ki-outline ki-cross fs-3"></i>
                                       </span>
                                       <!--end::Cancel button-->
                                       <!--begin::Remove button-->
                                       <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="remove"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Remove avatar">
                                       <i class="ki-outline ki-cross fs-3"></i>
                                       </span>
                                       <!--end::Remove button-->
                                    </div>
                                    <div class="image-input image-input-empty" data-kt-image-input="true">
                                       <!--begin::Image preview wrapper-->
                                       <div class="image-input-wrapper w-125px h-125px"></div>
                                       <!--end::Image preview wrapper-->
                                       <!--begin::Edit button-->
                                       <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="change"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Change avatar">
                                          <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                                          <!--begin::Inputs-->
                                          <input type="file" name="imgother3" accept=".png, .jpg, .jpeg" required/>
                                          <input type="hidden" name="avatar_remove" />
                                          <!--end::Inputs-->
                                       </label>
                                       <!--end::Edit button-->
                                       <!--begin::Cancel button-->
                                       <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="cancel"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Cancel avatar">
                                       <i class="ki-outline ki-cross fs-3"></i>
                                       </span>
                                       <!--end::Cancel button-->
                                       <!--begin::Remove button-->
                                       <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="remove"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Remove avatar">
                                       <i class="ki-outline ki-cross fs-3"></i>
                                       </span>
                                       <!--end::Remove button-->
                                    </div>
                                    <div class="image-input image-input-empty" data-kt-image-input="true">
                                       <!--begin::Image preview wrapper-->
                                       <div class="image-input-wrapper w-125px h-125px"></div>
                                       <!--end::Image preview wrapper-->
                                       <!--begin::Edit button-->
                                       <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="change"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Change avatar">
                                          <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                                          <!--begin::Inputs-->
                                          <input type="file" name="imgother4" accept=".png, .jpg, .jpeg" required/>
                                          <input type="hidden" name="avatar_remove" />
                                          <!--end::Inputs-->
                                       </label>
                                       <!--end::Edit button-->
                                       <!--begin::Cancel button-->
                                       <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="cancel"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Cancel avatar">
                                       <i class="ki-outline ki-cross fs-3"></i>
                                       </span>
                                       <!--end::Cancel button-->
                                       <!--begin::Remove button-->
                                       <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="remove"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Remove avatar">
                                       <i class="ki-outline ki-cross fs-3"></i>
                                       </span>
                                       <!--end::Remove button-->
                                    </div>
                                 </div>
                              </div>
                              <!--end::Input group-->
                           </div>
                        </div>
                     </div>
                     <!--end::Step 3-->
                     <!--begin::Step 4-->
                     <div data-kt-stepper-element="content">
                        <div class="row">
                           <div class="col-md-6 mb-7">
                              <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 mb-4">Gender restriction</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-6 mt-5">If you are business caters to a specific gender, please chose here
                              </h3>
                           </div>
                           <div class="col-md-6 mb-7">
                              <div class="fv-row mb-7">
                                 <div class="d-flex flex-wrap gap-5">
                                    <div class="form-check form-check-custom form-check-solid">
                                       <input class="form-check-input me-2" type="radio" id="unisex" value="Unisex" name="gender_restriction"/>
                                       <label class="fw-semibold fs-6" for="unisex">Unisex</label>
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid">
                                       <input class="form-check-input me-2" type="radio" id="male" value="Male" name="gender_restriction"/>
                                       <label class="fw-semibold fs-6" for="male">Male Only</label>
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid">
                                       <input class="form-check-input me-2" type="radio" id="female" value="Female" name="gender_restriction"/>
                                       <label class="fw-semibold fs-6" for="female">Female Only</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <hr class="mt-0 mb-10">
                           <div class="col-md-6 mb-7">
                              <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 mb-4">Venue Business Type</span>
                              </h3>
                           </div>
                           <div class="col-md-6 mb-7">
                              <div class="fv-row mb-7">
                                 <div class="row">
                                    @if(!empty($businesstypes))
                                    @foreach($businesstypes as $businesstype)
                                    <div class="col-md-6 mb-5">
                                       <!--begin::Option-->
                                       <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center">
                                          <!--begin::Radio-->
                                          <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                          <input class="form-check-input add_venuebusiness" type="checkbox" value="{{ $businesstype->bt_id }}" name="venuebusiness[]" />
                                          </span>
                                          <!--end::Radio-->
                                          <!-- <div class="icn ms-3">
                                             <img src="{{ asset('/public/partner/assets/media/icons/duotune/communication/com001.svg') }}">
                                          </div> -->
                                          <!--begin::Info-->
                                          <span class="ms-3">
                                             <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ $businesstype->businesstype }}</span>
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
                     <!--end::Step 4-->
                     <!--begin::Step 5-->
                     <div data-kt-stepper-element="content">
                        <div class="card card-flush w-100">
                           <!--begin::Card header-->
                           <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                              <!--begin::Card title-->
                              <div class="card-title">
                                 <h2>Operating hours</h2>
                              </div>
                              <!--end::Card title-->
                           </div>
                           <!--end::Card header-->
                           <div class="card-body pt-0">
                              <!--begin:::Tabs-->
                              <div class="d-flex gap-5 openhoursnav">
                                 <!--begin:::Tab item-->
                                 <div class="form-check form-check-custom">
                                    <input class="form-check-input" type="radio" checked value="open_for_selected_hours" name="openhours" id="openhoursnav1" onclick="funcShowDiv()" />
                                    <label class="form-check-label nav-link" for="openhoursnav1" onclick="funcShowDiv()">
                                    Open for selected hours
                                    </label>
                                 </div>
                                 <!--end:::Tab item-->
                                 <!--begin:::Tab item-->
                                 <div class="form-check form-check-custom">
                                    <input class="form-check-input" type="radio" value="always_open" name="openhours" id="openhoursnav2" onclick="funcShowDiv()"/>
                                    <label class="form-check-label nav-link" for="openhoursnav2" onclick="funcShowDiv()">
                                    Always open
                                    </label>
                                 </div>
                                 <!--end:::Tab item-->
                                 <!--begin:::Tab item-->
                                 <div class="form-check form-check-custom">
                                    <input class="form-check-input" type="radio" value="appointment_only" name="openhours" id="openhoursnav3" onclick="funcShowDiv()"/>
                                    <label class="form-check-label nav-link" for="openhoursnav3" onclick="funcShowDiv()">
                                    By appointment only
                                    </label>
                                 </div>
                                 <!--end:::Tab item-->
                              </div>
                              <!--end:::Tabs-->
                              <hr class="my-10">
                              <div class="operatingdiv active" id="operatinghourstab1">
                                 <h3 class="card-title mb-7">
                                    <span class="card-label fw-bold text-gray-800">Open for selected hours</span>
                                 </h3>
                                 <div class="card-body brdr">
                                    <h3 class="card-title mb-7">
                                       <span class="card-label fw-bold text-gray-800">Operating days</span>
                                    </h3>
                                    <div class="d-flex align-items-center flex-wrap gap-4 mb-10">
                                       <div class="form-check d-flex align-items-center gap-5 px-0 working-days">
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="operating_days[]" value="mon" id="selhours1" onchange="showOpDivData(this)"/>
                                             <label class="form-check-label" for="selhours1">
                                             Mon
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="operating_days[]" value="tue" id="selhours2" onchange="showOpDivData(this)"/>
                                             <label class="form-check-label" for="selhours2">
                                             Tue
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="operating_days[]" value="wed" id="selhours3" onchange="showOpDivData(this)"/>
                                             <label class="form-check-label" for="selhours3">
                                             Wed
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="operating_days[]" value="thu" id="selhours4" onchange="showOpDivData(this)"/>
                                             <label class="form-check-label" for="selhours4">
                                             Thu
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="operating_days[]" value="fri" id="selhours5" onchange="showOpDivData(this)"/>
                                             <label class="form-check-label" for="selhours5">
                                             Fri
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="operating_days[]" value="sat" id="selhours6" onchange="showOpDivData(this)"/>
                                             <label class="form-check-label" for="selhours6">
                                             Sat
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" name="operating_days[]" value="sun" id="selhours7" onchange="showOpDivData(this)"/>
                                             <label class="form-check-label" for="selhours7">
                                             Sun
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                    <h3 class="card-title mb-7">
                                       <span class="card-label fw-bold text-gray-800">Operating hours</span>
                                    </h3>
                                    <div class="d-flex align-items-center flex-wrap gap-4 mb-7">
                                       <div class="mb-7 mb-sm-0">
                                          <label for="" class="form-label">Open</label>
                                          <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                             <input type="text" name="operating_open_hours" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                             <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                             <i class="ki-outline ki-time fs-3"></i>
                                             </span>
                                          </div>
                                       </div>
                                       <div>
                                          <label for="" class="form-label">Close</label>
                                          <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                             <input type="text" name="operating_close_hours" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                             <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                             <i class="ki-outline ki-time fs-3"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div>
                                       <label class="form-check form-switch form-check-custom form-check-solid">
                                       <input class="form-check-input" name="advance_setting" type="checkbox" onchange="showopHrDiv(this)"/>
                                       <span class="form-check-label">
                                       Advance setting
                                       </span>
                                       </label>
                                    </div>
                                    <div class="card-body brdr showopHrDiv1 d-none mt-8">
                                       <h3 class="card-title mb-7">
                                          <span class="card-label fw-bold text-gray-800">Add closed period during operating hours</span>
                                       </h3>
                                       <!--begin::Table-->
                                       <table class="table align-middle table-row-dashed fs-6 gy-5">
                                          <thead>
                                             <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-125px">Days</th>
                                                <th class="min-w-150px">Open</th>
                                                <th class="min-w-150px">Close</th>
                                                <th class="min-w-150px">Add time set</th>
                                                <th class="min-w-150px"></th>
                                             </tr>
                                          </thead>
                                          <tbody class="text-gray-600 fw-semibold">
                                             <tr class="d-none">
                                                <td>
                                                   Mon
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" name="adv_setting_open[]" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                         <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" name="adv_setting_close[]" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                         <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td colspan="2">
                                                   <button type="button" class="btn btn-primary addweekoff">
                                                   Add
                                                   </button>
                                                   <div class="divweekoff">
                                                      <div class="d-flex flex-wrap inpttimewd">
                                                         <div class="mb-7 mb-sm-0">
                                                            <label for="" class="form-label">Open</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" name="adv_setting_timeset_open[]" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div>
                                                            <label for="" class="form-label">Close</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" name="adv_setting_timeset_close[]" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="d-none">
                                                <td>
                                                   Tue
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_open[]"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                         <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_close[]"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                         <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td colspan="2">
                                                   <button type="button" class="btn btn-primary addweekoff">
                                                   Add
                                                   </button>
                                                   <div class="divweekoff">
                                                      <div class="d-flex flex-wrap inpttimewd">
                                                         <div class="mb-7 mb-sm-0">
                                                            <label for="" class="form-label">Open</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_timeset_open[]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div>
                                                            <label for="" class="form-label">Close</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_timeset_close[]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="d-none">
                                                <td>
                                                   Wed
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_open[]"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                         <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_close[]"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                         <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td colspan="2">
                                                   <button type="button" class="btn btn-primary addweekoff">
                                                   Add
                                                   </button>
                                                   <div class="divweekoff">
                                                      <div class="d-flex flex-wrap inpttimewd">
                                                         <div class="mb-7 mb-sm-0">
                                                            <label for="" class="form-label">Open</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_timeset_open[]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div>
                                                            <label for="" class="form-label">Close</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_timeset_close[]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="d-none">
                                                <td>
                                                   Thu
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_open[]"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                         <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_close[]"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                         <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td colspan="2">
                                                   <button type="button" class="btn btn-primary addweekoff">
                                                   Add
                                                   </button>
                                                   <div class="divweekoff">
                                                      <div class="d-flex flex-wrap inpttimewd">
                                                         <div class="mb-7 mb-sm-0">
                                                            <label for="" class="form-label">Open</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_timeset_open[]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div>
                                                            <label for="" class="form-label">Close</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_timeset_close[]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="d-none">
                                                <td>
                                                   Fri
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_open[]"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                         <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_close[]"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                         <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td colspan="2">
                                                   <button type="button" class="btn btn-primary addweekoff">
                                                   Add
                                                   </button>
                                                   <div class="divweekoff">
                                                      <div class="d-flex flex-wrap inpttimewd">
                                                         <div class="mb-7 mb-sm-0">
                                                            <label for="" class="form-label">Open</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_timeset_open[]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div>
                                                            <label for="" class="form-label">Close</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_timeset_close[]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="d-none">
                                                <td>
                                                   Sat
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_open[]"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                         <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_close[]"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                         <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td colspan="2">
                                                   <button type="button" class="btn btn-primary addweekoff">
                                                   Add
                                                   </button>
                                                   <div class="divweekoff">
                                                      <div class="d-flex flex-wrap inpttimewd">
                                                         <div class="mb-7 mb-sm-0">
                                                            <label for="" class="form-label">Open</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_timeset_open[]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div>
                                                            <label for="" class="form-label">Close</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_timeset_close[]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="d-none">
                                                <td>
                                                   Sun
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_open[]"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                         <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_close[]"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                         <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td colspan="2">
                                                   <button type="button" class="btn btn-primary addweekoff">
                                                   Add
                                                   </button>
                                                   <div class="divweekoff">
                                                      <div class="d-flex flex-wrap inpttimewd">
                                                         <div class="mb-7 mb-sm-0">
                                                            <label for="" class="form-label">Open</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_timeset_open[]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div>
                                                            <label for="" class="form-label">Close</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="adv_setting_timeset_close[]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                       <!--end::Table-->
                                    </div>
                                 </div>
                              </div>
                              <div class="operatingdiv" id="operatinghourstab2">
                                 <h3 class="card-title mb-7">
                                    <span class="card-label fw-bold text-gray-800">Always open</span>
                                 </h3>
                                 <div class="card-body brdr">
					               
									   <!--begin::Table-->
									   <table class="table align-middle table-row-dashed fs-6 gy-5">
									      <thead>
									         <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
									            <th class="min-w-125px">Operating days</th>
									            <th class="min-w-125px">Operating hours</th>
									         </tr>
									      </thead>
									      <tbody class="text-gray-600 fw-semibold">
									         <tr>
									            <td>
									               <div class="form-check">
									                  <input class="form-check-input" type="checkbox" value="mon" id="operatingd1" name="always_open[]" />
									                  <label class="form-check-label" for="operatingd1">
									                  Mon
									                  </label>
									               </div>
									            </td>
									            <td>24 hours</td>
									         </tr>
									         <tr>
									            <td>
									               <div class="form-check">
									                  <input class="form-check-input" name="always_open[]" type="checkbox" value="tue" id="operatingd2" />
									                  <label class="form-check-label" for="operatingd2">
									                  Tue
									                  </label>
									               </div>
									            </td>
									            <td>24 hours</td>
									         </tr>
									         <tr>
									            <td>
									               <div class="form-check">
									                  <input class="form-check-input" type="checkbox" name="always_open[]" value="wed" id="operatingd3" />
									                  <label class="form-check-label" for="operatingd3">
									                  Wed
									                  </label>
									               </div>
									            </td>
									            <td>24 hours</td>
									         </tr>
									         <tr>
									            <td>
									               <div class="form-check">
									                  <input class="form-check-input" type="checkbox" name="always_open[]" value="thu" id="operatingd4" />
									                  <label class="form-check-label" for="operatingd4">
									                  Thu
									                  </label>
									               </div>
									            </td>
									            <td>24 hours</td>
									         </tr>
									         <tr>
									            <td>
									               <div class="form-check">
									                  <input class="form-check-input" type="checkbox" name="always_open[]" value="fri" id="operatingd5" />
									                  <label class="form-check-label" for="operatingd5">
									                  Fri
									                  </label>
									               </div>
									            </td>
									            <td>24 hours</td>
									         </tr>
									         <tr>
									            <td>
									               <div class="form-check">
									                  <input class="form-check-input" type="checkbox" name="always_open[]" value="sat" id="operatingd6" />
									                  <label class="form-check-label" for="operatingd6">
									                  Sat
									                  </label>
									               </div>
									            </td>
									            <td>24 hours</td>
									         </tr>
									         <tr>
									            <td>
									               <div class="form-check">
									                  <input class="form-check-input" type="checkbox" name="always_open[]" value="sun" id="operatingd7" />
									                  <label class="form-check-label" for="operatingd7">
									                  Sun
									                  </label>
									               </div>
									            </td>
									            <td>24 hours</td>
									         </tr>
									         <!-- <tr>
									            <td class="pb-0">
									               <button type="submit" class="btn btn-primary">
									               <span class="indicator-label">Submit</span>
									               <span class="indicator-progress">Please wait...
									               <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
									               </span>
									               </button>
									            </td>
									         </tr> -->
									      </tbody>
									   </table>
									   <!--end::Table-->
									
									</div>
									</div>
									<div class="operatingdiv" id="operatinghourstab3">
									   <h3 class="card-title mb-7">
									      <span class="card-label fw-bold text-gray-800">By appointment only</span>
									   </h3>
									   <div class="card-body brdr">
									      
									         <!--begin::Table-->
									         <table class="table align-middle table-row-dashed fs-6 gy-5">
									            <thead>
									               <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
									                  <th class="min-w-125px">Operating days</th>
									                  <th class="min-w-125px">Operating hours</th>
									               </tr>
									            </thead>
									            <tbody class="text-gray-600 fw-semibold">
									               <tr>
									                  <td>
									                     <div class="form-check">
									                        <input class="form-check-input" type="checkbox" name="appointment_only[]" value="mon" id="apponly1" />
									                        <label class="form-check-label" for="apponly1">
									                        Mon
									                        </label>
									                     </div>
									                  </td>
									                  <td>By appointment only</td>
									               </tr>
									               <tr>
									                  <td>
									                     <div class="form-check">
									                        <input class="form-check-input" type="checkbox" name="appointment_only[]" value="tue" id="apponly2" />
									                        <label class="form-check-label" for="apponly2">
									                        Tue
									                        </label>
									                     </div>
									                  </td>
									                  <td>By appointment only</td>
									               </tr>
									               <tr>
									                  <td>
									                     <div class="form-check">
									                        <input class="form-check-input" type="checkbox" name="appointment_only[]" value="wed" id="apponly3" />
									                        <label class="form-check-label" for="apponly3">
									                        Wed
									                        </label>
									                     </div>
									                  </td>
									                  <td>By appointment only</td>
									               </tr>
									               <tr>
									                  <td>
									                     <div class="form-check">
									                        <input class="form-check-input" type="checkbox" name="appointment_only[]" value="thu" id="apponly4" />
									                        <label class="form-check-label" for="apponly4">
									                        Thu
									                        </label>
									                     </div>
									                  </td>
									                  <td>By appointment only</td>
									               </tr>
									               <tr>
									                  <td>
									                     <div class="form-check">
									                        <input class="form-check-input" type="checkbox" name="appointment_only[]" value="fri" id="apponly5" />
									                        <label class="form-check-label" for="apponly5">
									                        Fri
									                        </label>
									                     </div>
									                  </td>
									                  <td>By appointment only</td>
									               </tr>
									               <tr>
									                  <td>
									                     <div class="form-check">
									                        <input class="form-check-input" type="checkbox" name="appointment_only[]" value="sat" id="apponly6" />
									                        <label class="form-check-label" for="apponly6">
									                        Sat
									                        </label>
									                     </div>
									                  </td>
									                  <td>By appointment only</td>
									               </tr>
									               <tr>
									                  <td>
									                     <div class="form-check">
									                        <input class="form-check-input" type="checkbox" name="appointment_only[]" value="sun" id="apponly7" />
									                        <label class="form-check-label" for="apponly7">
									                        Sun
									                        </label>
									                     </div>
									                  </td>
									                  <td>By appointment only</td>
									               </tr>
									               <!-- <tr>
									                  <td class="pb-0">
									                     <button type="submit" class="btn btn-primary">
									                     <span class="indicator-label">Submit</span>
									                     <span class="indicator-progress">Please wait...
									                     <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
									                     </span>
									                     </button>
									                  </td>
									               </tr> -->
									            </tbody>
									         </table>
									         <!--end::Table-->
									      
									   </div>
									</div>
									</div>
									</div>
									</div>
									<!--end::Step 5-->
									<!--begin::Step 6-->
									<div data-kt-stepper-element="content">
									   <div class="card card-flush w-100">
									      <div class="card-body pt-0">
									         <div class="mt-10 showopHrDiv2">
									            <table class="table align-middle table-row-dashed fs-6 gy-5">
									               <thead>
									                  <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
									                     <th class="min-w-125px">Day</th>
									                     <th class="min-w-150px">Add off peak hour</th>
									                     <th class="min-w-150px"></th>
									                     <th class="min-w-150px">Add off time set</th>
									                     <th class="min-w-150px"></th>
									                  </tr>
									               </thead>
									               <tbody>
									                  <tr class="d-none">
									                     <td>Mon</td>
									                     <td colspan="2">
									                        <button type="button" class="btn btn-primary addweekoff">
									                        Add
									                        </button>
									                        <div class="divweekoff">
									                           <div class="d-flex flex-wrap inpttimewd">
									                              <div class="mb-7 mb-sm-0">
									                                 <label for="" class="form-label">off peak start</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"
									                                    name="off_peak_hour_start[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div>
									                                 <label for="" class="form-label">off peak end</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_end[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
									                                 <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
									                              </div>
									                           </div>
									                        </div>
									                     </td>
									                     <td colspan="2">
									                        <button type="button" class="btn btn-primary addweekoff">
									                        Add
									                        </button>
									                        <div class="divweekoff">
									                           <div class="d-flex flex-wrap inpttimewd">
									                              <div class="mb-7 mb-sm-0">
									                                 <label for="" class="form-label">Open</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_open[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div>
									                                 <label for="" class="form-label">Close</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_close[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
									                                 <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
									                              </div>
									                           </div>
									                        </div>
									                     </td>
									                  </tr>
									                  <tr class="d-none">
									                     <td>Tue</td>
									                     <td colspan="2">
									                        <button type="button" class="btn btn-primary addweekoff">
									                        Add
									                        </button>
									                        <div class="divweekoff">
									                           <div class="d-flex flex-wrap inpttimewd">
									                              <div class="mb-7 mb-sm-0">
									                                 <label for="" class="form-label">off peak start</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_start[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div>
									                                 <label for="" class="form-label">off peak end</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_end[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
									                                 <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
									                              </div>
									                           </div>
									                        </div>
									                     </td>
									                     <td colspan="2">
									                        <button type="button" class="btn btn-primary addweekoff">
									                        Add
									                        </button>
									                        <div class="divweekoff">
									                           <div class="d-flex flex-wrap inpttimewd">
									                              <div class="mb-7 mb-sm-0">
									                                 <label for="" class="form-label">Open</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_open[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div>
									                                 <label for="" class="form-label">Close</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_close[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
									                                 <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
									                              </div>
									                           </div>
									                        </div>
									                     </td>
									                  </tr>
									                  <tr class="d-none">
									                     <td>Wed</td>
									                     <td colspan="2">
									                        <button type="button" class="btn btn-primary addweekoff">
									                        Add
									                        </button>
									                        <div class="divweekoff">
									                           <div class="d-flex flex-wrap inpttimewd">
									                              <div class="mb-7 mb-sm-0">
									                                 <label for="" class="form-label">off peak start</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_start[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div>
									                                 <label for="" class="form-label">off peak end</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_end[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
									                                 <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
									                              </div>
									                           </div>
									                        </div>
									                     </td>
									                     <td colspan="2">
									                        <button type="button" class="btn btn-primary addweekoff">
									                        Add
									                        </button>
									                        <div class="divweekoff">
									                           <div class="d-flex flex-wrap inpttimewd">
									                              <div class="mb-7 mb-sm-0">
									                                 <label for="" class="form-label">Open</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_open[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div>
									                                 <label for="" class="form-label">Close</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_close[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
									                                 <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
									                              </div>
									                           </div>
									                        </div>
									                     </td>
									                  </tr>
									                  <tr class="d-none">
									                     <td>Thu</td>
									                     <td colspan="2">
									                        <button type="button" class="btn btn-primary addweekoff">
									                        Add
									                        </button>
									                        <div class="divweekoff">
									                           <div class="d-flex flex-wrap inpttimewd">
									                              <div class="mb-7 mb-sm-0">
									                                 <label for="" class="form-label">off peak start</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_start[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div>
									                                 <label for="" class="form-label">off peak end</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_end[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
									                                 <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
									                              </div>
									                           </div>
									                        </div>
									                     </td>
									                     <td colspan="2">
									                        <button type="button" class="btn btn-primary addweekoff">
									                        Add
									                        </button>
									                        <div class="divweekoff">
									                           <div class="d-flex flex-wrap inpttimewd">
									                              <div class="mb-7 mb-sm-0">
									                                 <label for="" class="form-label">Open</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_open[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div>
									                                 <label for="" class="form-label">Close</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_close[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
									                                 <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
									                              </div>
									                           </div>
									                        </div>
									                     </td>
									                  </tr>
									                  <tr class="d-none">
									                     <td>Fri</td>
									                     <td colspan="2">
									                        <button type="button" class="btn btn-primary addweekoff">
									                        Add
									                        </button>
									                        <div class="divweekoff">
									                           <div class="d-flex flex-wrap inpttimewd">
									                              <div class="mb-7 mb-sm-0">
									                                 <label for="" class="form-label">off peak start</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_start[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div>
									                                 <label for="" class="form-label">off peak end</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_end[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
									                                 <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
									                              </div>
									                           </div>
									                        </div>
									                     </td>
									                     <td colspan="2">
									                        <button type="button" class="btn btn-primary addweekoff">
									                        Add
									                        </button>
									                        <div class="divweekoff">
									                           <div class="d-flex flex-wrap inpttimewd">
									                              <div class="mb-7 mb-sm-0">
									                                 <label for="" class="form-label">Open</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_open[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div>
									                                 <label for="" class="form-label">Close</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_close[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
									                                 <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
									                              </div>
									                           </div>
									                        </div>
									                     </td>
									                  </tr>
									                  <tr class="d-none">
									                     <td>Sat</td>
									                     <td colspan="2">
									                        <button type="button" class="btn btn-primary addweekoff">
									                        Add
									                        </button>
									                        <div class="divweekoff">
									                           <div class="d-flex flex-wrap inpttimewd">
									                              <div class="mb-7 mb-sm-0">
									                                 <label for="" class="form-label">off peak start</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_start[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div>
									                                 <label for="" class="form-label">off peak end</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_end[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
									                                 <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
									                              </div>
									                           </div>
									                        </div>
									                     </td>
									                     <td colspan="2">
									                        <button type="button" class="btn btn-primary addweekoff">
									                        Add
									                        </button>
									                        <div class="divweekoff">
									                           <div class="d-flex flex-wrap inpttimewd">
									                              <div class="mb-7 mb-sm-0">
									                                 <label for="" class="form-label">Open</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_open[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div>
									                                 <label for="" class="form-label">Close</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_close[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
									                                 <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
									                              </div>
									                           </div>
									                        </div>
									                     </td>
									                  </tr>
									                  <tr class="d-none">
									                     <td>Sun</td>
									                     <td colspan="2">
									                        <button type="button" class="btn btn-primary addweekoff">
									                        Add
									                        </button>
									                        <div class="divweekoff">
									                           <div class="d-flex flex-wrap inpttimewd">
									                              <div class="mb-7 mb-sm-0">
									                                 <label for="" class="form-label">off peak start</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_start[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div>
									                                 <label for="" class="form-label">off peak end</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_end[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
									                                 <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
									                              </div>
									                           </div>
									                        </div>
									                     </td>
									                     <td colspan="2">
									                        <button type="button" class="btn btn-primary addweekoff">
									                        Add
									                        </button>
									                        <div class="divweekoff">
									                           <div class="d-flex flex-wrap inpttimewd">
									                              <div class="mb-7 mb-sm-0">
									                                 <label for="" class="form-label">Open</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_open[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div>
									                                 <label for="" class="form-label">Close</label>
									                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
									                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_close[]"/>
									                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
									                                    <i class="ki-outline ki-time fs-3"></i>
									                                    </span>
									                                 </div>
									                              </div>
									                              <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
									                                 <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
									                              </div>
									                           </div>
									                        </div>
									                     </td>
									                  </tr>
									               </tbody>
									            </table>
									         </div>
									      </div>
									   </div>
									</div>
									<!--end::Step 6-->
									<!--begin::Step 7-->
									<div data-kt-stepper-element="content">
									   <!--begin::Scroll-->
									   <div class="d-flex flex-column me-n7 pe-7 gap-7 amenities-tab">
									   	@if($amenities)
									   	@foreach($amenities as $key => $amenity)

									   		@if($key == "Venue")
									   		<span class="card-label fw-bold text-gray-800 mb-4">{{ $key }}</span>
									   		<div class="row">
									   			@foreach($amenity as $am_val)
									   			<div class="col-md-4 mb-5">
									   				<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckammenity1">
									   					<!--begin::Radio-->
									   					<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
									   						<input class="form-check-input" type="checkbox" value="{{ $am_val['id'] }}" id="flexCheckammenity{{$key}}" name="amenity[]" />
									   					</span>
									   					<!--end::Radio-->
									   					<div class="icn ms-3">
									   						<img src="{{ asset('public'.$am_val['amenity_icon']) }}">
									   					</div>
									   					<!--begin::Info-->
									   					<span class="ms-3">
									   						<h3 class="card-title align-items-start flex-column">
									   							<span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ $am_val['amenity_name'] }}</span>
									   						</h3>
									   					</span>
									   					<!--end::Info-->
									   				</label>
									   			</div>
									   			@endforeach
									   		</div>
									   		@endif

									   		@if($key == "Access")
									   		<span class="card-label fw-bold text-gray-800 mb-4">{{ $key }}</span>
									   		<div class="row">
									   			@foreach($amenity as $am_val)
									   			<div class="col-md-4 mb-5">
									   				<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckammenity1">
									   					<!--begin::Radio-->
									   					<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
									   						<input class="form-check-input" type="checkbox" value="{{ $am_val['id'] }}" id="flexCheckammenityaccess{{$key}}" name="amenity[]"/>
									   					</span>
									   					<!--end::Radio-->
									   					<div class="icn ms-3">
									   						<img src="{{ asset('public'.$am_val['amenity_icon']) }}">
									   					</div>
									   					<!--begin::Info-->
									   					<span class="ms-3">
									   						<h3 class="card-title align-items-start flex-column">
									   							<span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ $am_val['amenity_name'] }}</span>
									   						</h3>
									   					</span>
									   					<!--end::Info-->
									   				</label>
									   			</div>
									   			@endforeach
									   		</div>
									   		@endif

									   		@if($key == "Products Used")
									   		<span class="card-label fw-bold text-gray-800 mb-4">{{ $key }}</span>
									   		<div class="row">
									   			@foreach($amenity as $am_val)
									   			<div class="col-md-4 mb-5">
									   				<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckammenity1">
									   					<!--begin::Radio-->
									   					<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
									   						<input class="form-check-input" type="checkbox" value="{{ $am_val['id'] }}" id="flexCheckammenityprod{{$key}}" name="amenity[]"/>
									   					</span>
									   					<!--end::Radio-->
									   					<div class="icn ms-3">
									   						<img src="{{ asset('public'.$am_val['amenity_icon']) }}">
									   					</div>
									   					<!--begin::Info-->
									   					<span class="ms-3">
									   						<h3 class="card-title align-items-start flex-column">
									   							<span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ $am_val['amenity_name'] }}</span>
									   						</h3>
									   					</span>
									   					<!--end::Info-->
									   				</label>
									   			</div>
									   			@endforeach
									   		</div>
									   		@endif

									   		@if($key == "Brands")
									   		<span class="card-label fw-bold text-gray-800 mb-4">{{ $key }}</span>
									   		<div class="row">
									   			@foreach($amenity as $am_val)
									   			<div class="col-md-4 mb-5">
									   				<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckammenity1">
									   					<!--begin::Radio-->
									   					<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
									   						<input class="form-check-input" type="checkbox" value="{{ $am_val['id'] }}" id="flexCheckammenitybrand{{$key}}" name="amenity[]"/>
									   					</span>
									   					<!--end::Radio-->
									   					<div class="icn ms-3">
									   						<img src="{{ asset('public'.$am_val['amenity_icon']) }}">
									   					</div>
									   					<!--begin::Info-->
									   					<span class="ms-3">
									   						<h3 class="card-title align-items-start flex-column">
									   							<span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ $am_val['amenity_name'] }}</span>
									   						</h3>
									   					</span>
									   					<!--end::Info-->
									   				</label>
									   			</div>
									   			@endforeach
									   		</div>
									   		@endif

									     @endforeach
									     @endif

									   </div>
									   <!--end::Scroll-->
									</div>
									<!--end::Step 7-->
									<!--begin::Step 8-->
									<div data-kt-stepper-element="content">
									   <div class="w-100">
									      <!--begin::Heading-->
									      <div class="pb-12 text-center">
									         <!--begin::Title-->
									         <h1 class="fw-bold text-dark">Venue details Completed</h1>
									         <!--end::Title-->
									         <!--begin::Description-->
									         <div class="fw-semibold text-muted fs-4">You will receive an email with with the summary of your newly Venue Setup</div>
									         <!--end::Description-->
									      </div>
									      <!--end::Heading-->
									      <!--begin::Illustration-->
									      <div class="text-center px-4">
									         <img src="{{ asset('/public/partner/assets/media/illustrations/sketchy-1/9.png') }}" alt="" class="mww-100 mh-350px" />
									      </div>
									      <!--end::Illustration-->
									   </div>
									</div>
									<!--end::Step 8-->
									</div>
									<!--end::Group-->
									<!--begin::Actions-->
									<div class="d-flex flex-stack mt-10">
									   <!--begin::Wrapper-->
									   <div class="me-2">
									      <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
									      Back
									      </button>
									   </div>
									   <!--end::Wrapper-->
									   <!--begin::Wrapper-->
									   <div>
									      <button type="submit" class="btn btn-primary" data-kt-stepper-action="submit">
									      <span class="indicator-label">
									      Submit
									      </span>
									      <span class="indicator-progress">
									      Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
									      </span>
									      </button>
									      <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
									      Continue
									      </button>
									   </div>
									   <!--end::Wrapper-->
									</div>
									<!--end::Actions-->
									</form>
									<!--end::Form-->
            </div>
            <!--end::Stepper-->
         </div>
      </div>
   </div>
</div>

<div class="modal fade multistepform_venue" id="kt_modal_update_details" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-xl">
      <div class="modal-content modal-rounded">
         <div class="modal-header py-7 d-flex justify-content-between">
            <h2>Update Venue detail</h2>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <!--begin::Stepper-->
            <div class="stepper stepper-pills" id="kt_stepper_example_basic_update">
               <!--begin::Nav-->
               <div class="stepper-nav flex-center flex-wrap mb-10 justify-content-between gap-5">
                  <!--begin::Step 1-->
                  <div class="stepper-item current" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Venue details
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 1-->
                  <!--begin::Step 2-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Venue address
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 2-->
                  <!--begin::Step 3-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Venue Photos
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 3-->
                  <!--begin::Step 4-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Business type
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 4-->
                  <!--begin::Step 5-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Operating hours
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 5-->
                  <!--begin::Step 6-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Off Peak hours
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 6-->
                  <!--begin::Step 7-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Amenities
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 7-->
                  <!--begin::Step 8-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Complete
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 8-->
               </div>
               <!--end::Nav-->
               <!--begin::Form-->
               <form class="mx-auto" novalidate="novalidate" id="kt_stepper_example_basic_edit_form" action="{{ url('partner/update-venue-setting') }}" method="post" enctype="multipart/form-data">
               	@csrf
               	<input type="hidden" name="venue_id" id="edit_venue_id">
                  <!--begin::Group-->
                  <div class="mb-5">
                     <!--begin::Step 1-->
                     <div class="current" data-kt-stepper-element="content">
                        <div class="row align-items-end">
                           <div class="col-12 mb-7">
                              <div class="fv-row">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800 mb-4">Venue name</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-6 my-3">This is the location name of your business. <br>	
                                    Recommended to enter your location name if you have multiple venues
                                    </span>
                                 </h3>
                                 <!--begin::Input-->
                                 <input type="text" name="venue_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Venue name" id="edit_venue_name" required>
                                 <!--end::Input-->
                              </div>
                           </div>
                           <div class="col-12 mb-7">
                              <div class="fv-row">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800 mb-4">Address</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-6 my-3">This is the location name of your business. <br>	
                                    Recommended to enter your location name if you have multiple venues
                                    </span>
                                 </h3>
                                 <!--begin::Input-->
                                 <input type="text" name="address" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Venue name" id="edit_venue_address" required>
                                 <!--end::Input-->
                              </div>
                           </div>
                           <div class="col-12 mb-7">
                              <div class="fv-row">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800 mb-4">Phone number</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-6 my-3">Phone number of this venue which will appear on the Business profile of this venue
                                    </span>
                                 </h3>
                                 <!--begin::Input-->
                                 <input type="text" name="phone_number" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Phone Number" id="edit_venue_phone" required>
                                 <!--end::Input-->
                              </div>
                           </div>
                           <div class="col-12 mb-7">
                              <div class="fv-row">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800 mb-4">Email address</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-6 my-3">Venue manager email address
                                    </span>
                                 </h3>
                                 <!--begin::Input-->
                                 <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0" id="edit_venue_email" placeholder="Email address" required>
                                 <!--end::Input-->
                              </div>
                           </div>
                           <div class="col-12 mb-7">
                              <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 mb-4">Billing details</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-6 mt-5">Select amenities available
                                 </span>
                              </h3>
                              <input type="text" name="billing_details" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Business name - venue name" id="edit_venue_billing_details" required>
                           </div>
                        </div>
                     </div>
                     <!--end::Step 1-->
                     <!--begin::Step 2-->
                     <div data-kt-stepper-element="content">
                        <div class="d-flex-flex-column">
                           <div class="d-flex flex-column scroll-y me-n7 pe-7">
                              <!--begin::Input group-->
                              <div class="fv-row mb-7">
                                 <!--begin::Label-->
                                 <label class="required fw-semibold fs-6 mb-2">Where's your business located?</label>
                                 <!--end::Label-->
                                 <!--begin::Input-->
                                 <input type="text" name="business_location" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="business locationn" id="edit_venue_business_location" required/>
                                 <!--end::Input-->
                              </div>
                              <!--end::Input group-->
                           </div>
                           <!--end::Scroll-->
                           <div class="card">
                              <div class="card-body brdr">
                                 <div class="row">
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Address</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="business_address" class="form-control form-control-solid mb-3 mb-lg-0" id="edit_venue_business_address" placeholder="Address" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <div class="mb-0">
                                          <label class="form-label">Apt./Suite etc</label>
                                          <!--begin::Input-->
                                          <input type="text" name="business_aptsuite" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Apt./Suite" id="edit_venue_business_aptsuite"  required>
                                          <!--end::Input-->
                                       </div>
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">District</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="district" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="District" id="edit_venue_district" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">City</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="city" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="City" id="edit_venue_city" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Region</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="region" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Region" id="edit_venue_region" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Postcode</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="postcode" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Postcode" id="edit_venue_postcode" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Country</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="country" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Country" id="edit_venue_country" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <div class="mb-0">
                                          <label class="form-label">Directions</label>
                                          <textarea class="form-control form-control form-control-solid" data-kt-autosize="true" placeholder="Directions" id="edit_venue_directions" name="directions"></textarea>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-check my-10">
                              <input class="form-check-input edit_business_address_check" type="checkbox" id="flexCheckDefault" name="business_address_check" />
                              <label class="form-check-label" for="flexCheckDefault">
                              I dont have a business address(mobile and online services only)
                              </label>
                           </div>
                           <div class="card">
                              <div class="card-body brdr">
                                 <span class="card-label fw-bold text-gray-800 mb-4">Map location</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-6 mt-5">Drag the map so the pin matches the exact location of your business location
                                 </span>
                                 <hr>
                                 <div class="row">
                                    <div class="col-12 map">
                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.664954374128!2d103.8950833744703!3d1.3777013986092788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da163beca5d721%3A0xe869e5868a79ea59!2sPunggol%20Park!5e0!3m2!1sen!2sin!4v1683635051463!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--end::Step 2-->
                     <!--begin::Step 3-->
                     <div data-kt-stepper-element="content">
                        <div class="row w-100">
                           <div class="col-md-3">
                              <!--begin::Input group-->
                              <div class="fv-row mb-7 d-flex flex-column">
                                 <label class="required fw-semibold fs-6 mb-5">Add Featured Image</label>
                                 <div class="image-input image-input-empty" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-125px h-125px" id="edit_featured_img"></div>
                                    <!--end::Image preview wrapper-->
                                    <!--begin::Edit button-->
                                    <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                       data-kt-image-input-action="change"
                                       data-bs-toggle="tooltip"
                                       data-bs-dismiss="click"
                                       title="Change avatar">
                                       <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                                       <!--begin::Inputs-->
                                       <input type="file" name="featured" accept=".png, .jpg, .jpeg" required/>
                                       <input type="hidden" name="avatar_remove" />
                                       <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->
                                    <!--begin::Cancel button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                       data-kt-image-input-action="cancel"
                                       data-bs-toggle="tooltip"
                                       data-bs-dismiss="click"
                                       title="Cancel avatar">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Cancel button-->
                                    <!--begin::Remove button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                       data-kt-image-input-action="remove"
                                       data-bs-toggle="tooltip"
                                       data-bs-dismiss="click"
                                       title="Remove avatar">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Remove button-->
                                 </div>
                                 <!--end::Image input-->
                              </div>
                              <!--end::Input group-->
                           </div>
                           <div class="col-md-9">
                              <!--begin::Input group-->
                              <div class="fv-row mb-7 d-flex flex-column">
                                 <label class="required fw-semibold fs-6 mb-5">Add other Images</label>
                                 <div class="d-flex flex-wrap gap-5 align-items-end">
                                    <div class="image-input image-input-empty" data-kt-image-input="true">
                                       <!--begin::Image preview wrapper-->
                                       <div class="image-input-wrapper w-125px h-125px" id="edit_otherimg1"></div>
                                       <!--end::Image preview wrapper-->
                                       <!--begin::Edit button-->
                                       <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="change"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Change avatar">
                                          <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                                          <!--begin::Inputs-->
                                          <input type="file" name="imgother1" accept=".png, .jpg, .jpeg" required/>
                                          <input type="hidden" name="avatar_remove" />
                                          <!--end::Inputs-->
                                       </label>
                                       <!--end::Edit button-->
                                       <!--begin::Cancel button-->
                                       <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="cancel"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Cancel avatar">
                                       <i class="ki-outline ki-cross fs-3"></i>
                                       </span>
                                       <!--end::Cancel button-->
                                       <!--begin::Remove button-->
                                       <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="remove"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Remove avatar">
                                       <i class="ki-outline ki-cross fs-3"></i>
                                       </span>
                                       <!--end::Remove button-->
                                    </div>
                                    <div class="image-input image-input-empty" data-kt-image-input="true">
                                       <!--begin::Image preview wrapper-->
                                       <div class="image-input-wrapper w-125px h-125px" id="edit_otherimg2"></div>
                                       <!--end::Image preview wrapper-->
                                       <!--begin::Edit button-->
                                       <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="change"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Change avatar">
                                          <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                                          <!--begin::Inputs-->
                                          <input type="file" name="imgother2" accept=".png, .jpg, .jpeg" required/>
                                          <input type="hidden" name="avatar_remove" />
                                          <!--end::Inputs-->
                                       </label>
                                       <!--end::Edit button-->
                                       <!--begin::Cancel button-->
                                       <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="cancel"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Cancel avatar">
                                       <i class="ki-outline ki-cross fs-3"></i>
                                       </span>
                                       <!--end::Cancel button-->
                                       <!--begin::Remove button-->
                                       <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="remove"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Remove avatar">
                                       <i class="ki-outline ki-cross fs-3"></i>
                                       </span>
                                       <!--end::Remove button-->
                                    </div>
                                    <div class="image-input image-input-empty" data-kt-image-input="true">
                                       <!--begin::Image preview wrapper-->
                                       <div class="image-input-wrapper w-125px h-125px" id="edit_otherimg3"></div>
                                       <!--end::Image preview wrapper-->
                                       <!--begin::Edit button-->
                                       <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="change"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Change avatar">
                                          <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                                          <!--begin::Inputs-->
                                          <input type="file" name="imgother3" accept=".png, .jpg, .jpeg" required/>
                                          <input type="hidden" name="avatar_remove" />
                                          <!--end::Inputs-->
                                       </label>
                                       <!--end::Edit button-->
                                       <!--begin::Cancel button-->
                                       <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="cancel"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Cancel avatar">
                                       <i class="ki-outline ki-cross fs-3"></i>
                                       </span>
                                       <!--end::Cancel button-->
                                       <!--begin::Remove button-->
                                       <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="remove"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Remove avatar">
                                       <i class="ki-outline ki-cross fs-3"></i>
                                       </span>
                                       <!--end::Remove button-->
                                    </div>
                                    <div class="image-input image-input-empty" data-kt-image-input="true">
                                       <!--begin::Image preview wrapper-->
                                       <div class="image-input-wrapper w-125px h-125px" id="edit_otherimg4"></div>
                                       <!--end::Image preview wrapper-->
                                       <!--begin::Edit button-->
                                       <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="change"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Change avatar">
                                          <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                                          <!--begin::Inputs-->
                                          <input type="file" name="imgother4" accept=".png, .jpg, .jpeg" required/>
                                          <input type="hidden" name="avatar_remove" />
                                          <!--end::Inputs-->
                                       </label>
                                       <!--end::Edit button-->
                                       <!--begin::Cancel button-->
                                       <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="cancel"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Cancel avatar">
                                       <i class="ki-outline ki-cross fs-3"></i>
                                       </span>
                                       <!--end::Cancel button-->
                                       <!--begin::Remove button-->
                                       <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                          data-kt-image-input-action="remove"
                                          data-bs-toggle="tooltip"
                                          data-bs-dismiss="click"
                                          title="Remove avatar">
                                       <i class="ki-outline ki-cross fs-3"></i>
                                       </span>
                                       <!--end::Remove button-->
                                    </div>
                                 </div>
                              </div>
                              <!--end::Input group-->
                           </div>
                        </div>
                     </div>
                     <!--end::Step 3-->
                     <!--begin::Step 4-->
                     <div data-kt-stepper-element="content">
                        <div class="row">
                           <div class="col-md-6 mb-7">
                              <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 mb-4">Gender restriction</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-6 mt-5">If you are business caters to a specific gender, please chose here
                              </h3>
                           </div>
                           <div class="col-md-6 mb-7">
                              <div class="fv-row mb-7">
                                 <div class="d-flex flex-wrap gap-5">
                                    <div class="form-check form-check-custom form-check-solid">
                                       <input class="form-check-input me-2 edit_gender_restriction" type="radio" id="unisex" value="Unisex" name="gender_restriction"/>
                                       <label class="fw-semibold fs-6" for="unisex">Unisex</label>
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid">
                                       <input class="form-check-input me-2 edit_gender_restriction" type="radio" id="male" value="Male" name="gender_restriction"/>
                                       <label class="fw-semibold fs-6" for="male">Male Only</label>
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid">
                                       <input class="form-check-input me-2 edit_gender_restriction" type="radio" id="female" value="Female" name="gender_restriction"/>
                                       <label class="fw-semibold fs-6" for="female">Female Only</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <hr class="mt-0 mb-10">
                           <div class="col-md-6 mb-7">
                              <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 mb-4">Venue Business Type</span>
                              </h3>
                           </div>
                           <div class="col-md-6 mb-7">
                              <div class="fv-row mb-7">
                                 <div class="row">
                                    @if(!empty($businesstypes))
                                    @foreach($businesstypes as $businesstype)
                                    <div class="col-md-6 mb-5">
                                       <!--begin::Option-->
                                       <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center">
                                          <!--begin::Radio-->
                                          <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                          <input class="form-check-input edit_venuebusiness" type="checkbox" value="{{ $businesstype->bt_id }}" name="venuebusiness[]" />
                                          </span>
                                          <!--end::Radio-->
                                          <!-- <div class="icn ms-3">
                                             <img src="{{ asset('/public/partner/assets/media/icons/duotune/communication/com001.svg') }}">
                                          </div> -->
                                          <!--begin::Info-->
                                          <span class="ms-3">
                                             <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ $businesstype->businesstype }}</span>
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
                     <!--end::Step 4-->
                     <!--begin::Step 5-->
                    <div data-kt-stepper-element="content">
					   <div class="card card-flush w-100">
					      <!--begin::Card header-->
					      <div class="card-header align-items-center py-5 gap-2 gap-md-5">
					         <!--begin::Card title-->
					         <div class="card-title">
					            <h2>Operating hours</h2>
					         </div>
					         <!--end::Card title-->
					      </div>
					      <!--end::Card header-->
					      <div class="card-body pt-0">
					         <!--begin:::Tabs-->
					         <div class="d-flex gap-5 openhoursnav">
					            <!--begin:::Tab item-->
					            <div class="form-check form-check-custom">
					               <input class="form-check-input edit_openhours" type="radio" value="open_for_selected_hours" name="openhours" id="openhoursnav1" onclick="funcShowDiv()" />
					               <label class="form-check-label nav-link" for="openhoursnav1" onclick="funcShowDiv()">
					               Open for selected hours
					               </label>
					            </div>
					            <!--end:::Tab item-->
					            <!--begin:::Tab item-->
					            <div class="form-check form-check-custom">
					               <input class="form-check-input edit_openhours" type="radio" value="always_open" name="openhours" id="openhoursnav2" onclick="funcShowDiv()"/>
					               <label class="form-check-label nav-link" for="openhoursnav2" onclick="funcShowDiv()">
					               Always open
					               </label>
					            </div>
					            <!--end:::Tab item-->
					            <!--begin:::Tab item-->
					            <div class="form-check form-check-custom">
					               <input class="form-check-input edit_openhours" type="radio" value="appointment_only" name="openhours" id="openhoursnav3" onclick="funcShowDiv()"/>
					               <label class="form-check-label nav-link" for="openhoursnav3" onclick="funcShowDiv()">
					               By appointment only
					               </label>
					            </div>
					            <!--end:::Tab item-->
					         </div>
					         <!--end:::Tabs-->
					         <hr class="my-10">
					         <div class="operatingdiv edit" id="operatinghourstab1">
					            <h3 class="card-title mb-7">
					               <span class="card-label fw-bold text-gray-800">Open for selected hours</span>
					            </h3>
					            <div class="card-body brdr">
					               <h3 class="card-title mb-7">
					                  <span class="card-label fw-bold text-gray-800">Operating days</span>
					               </h3>
					               <div class="d-flex align-items-center flex-wrap gap-4 mb-10">
					                  <div class="form-check d-flex align-items-center gap-5 px-0 edit-working-days">
					                     <div class="form-check">
					                        <input class="form-check-input edit_operating_days" type="checkbox" name="operating_days[]" value="mon" id="selhours1" onchange="showOpEditDivData(this)"/>
					                        <label class="form-check-label" for="selhours1">
					                        Mon
					                        </label>
					                     </div>
					                     <div class="form-check">
					                        <input class="form-check-input edit_operating_days" type="checkbox" name="operating_days[]" value="tue" id="selhours2" onchange="showOpEditDivData(this)"/>
					                        <label class="form-check-label" for="selhours2">
					                        Tue
					                        </label>
					                     </div>
					                     <div class="form-check">
					                        <input class="form-check-input edit_operating_days" type="checkbox" name="operating_days[]" value="wed" id="selhours3" onchange="showOpEditDivData(this)"/>
					                        <label class="form-check-label" for="selhours3">
					                        Wed
					                        </label>
					                     </div>
					                     <div class="form-check">
					                        <input class="form-check-input edit_operating_days" type="checkbox" name="operating_days[]" value="thu" id="selhours4" onchange="showOpEditDivData(this)"/>
					                        <label class="form-check-label" for="selhours4">
					                        Thu
					                        </label>
					                     </div>
					                     <div class="form-check">
					                        <input class="form-check-input edit_operating_days" type="checkbox" name="operating_days[]" value="fri" id="selhours5" onchange="showOpEditDivData(this)"/>
					                        <label class="form-check-label" for="selhours5">
					                        Fri
					                        </label>
					                     </div>
					                     <div class="form-check">
					                        <input class="form-check-input edit_operating_days" type="checkbox" name="operating_days[]" value="sat" id="selhours6" onchange="showOpEditDivData(this)"/>
					                        <label class="form-check-label" for="selhours6">
					                        Sat
					                        </label>
					                     </div>
					                     <div class="form-check">
					                        <input class="form-check-input edit_operating_days" type="checkbox" name="operating_days[]" value="sun" id="selhours7" onchange="showOpEditDivData(this)"/>
					                        <label class="form-check-label" for="selhours7">
					                        Sun
					                        </label>
					                     </div>
					                  </div>
					               </div>
					               <h3 class="card-title mb-7">
					                  <span class="card-label fw-bold text-gray-800">Operating hours</span>
					               </h3>
					               <div class="d-flex align-items-center flex-wrap gap-4 mb-7">
					                  <div class="mb-7 mb-sm-0">
					                     <label for="" class="form-label">Open</label>
					                     <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                        <input type="text" name="operating_open_hours" class="form-control edit_operating_open_hours" data-td-target=".kt_td_picker_time_only"/>
					                        <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                        <i class="ki-outline ki-time fs-3"></i>
					                        </span>
					                     </div>
					                  </div>
					                  <div>
					                     <label for="" class="form-label">Close</label>
					                     <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                        <input type="text" name="operating_close_hours" class="form-control edit_operating_close_hours" data-td-target=".kt_td_picker_time_only"/>
					                        <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                        <i class="ki-outline ki-time fs-3"></i>
					                        </span>
					                     </div>
					                  </div>
					               </div>
					               <div>
					                  <label class="form-check form-switch form-check-custom form-check-solid">
					                  <input class="form-check-input edit_advance_setting" name="advance_setting" type="checkbox" onchange="showopEditHrDiv(this)"/>
					                  <span class="form-check-label">
					                  Advance setting
					                  </span>
					                  </label>
					               </div>
					               <div class="card-body brdr showopEditHrDiv1 d-none mt-8 edit-add-close-op-hours">
					                  <h3 class="card-title mb-7">
					                     <span class="card-label fw-bold text-gray-800">Add closed period during operating hours</span>
					                  </h3>
					                  <!--begin::Table-->
					                  <table class="table align-middle table-row-dashed fs-6 gy-5">
					                     <thead>
					                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
					                           <th class="min-w-125px">Days</th>
					                           <th class="min-w-150px">Open</th>
					                           <th class="min-w-150px">Close</th>
					                           <th class="min-w-150px">Add time set</th>
					                           <th class="min-w-150px"></th>
					                        </tr>
					                     </thead>
					                     <tbody class="text-gray-600 fw-semibold edit-advance-setting-op-hours">
					                        <tr class="d-none mon">
					                           <td>
					                              Mon
					                           </td>
					                           <td>
					                              <div>
					                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                    <input type="text" name="adv_setting_open[]" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                    <i class="ki-outline ki-time fs-3"></i>
					                                    </span>
					                                 </div>
					                              </div>
					                           </td>
					                           <td>
					                              <div>
					                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                    <input type="text" name="adv_setting_close[]" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                    <i class="ki-outline ki-time fs-3"></i>
					                                    </span>
					                                 </div>
					                              </div>
					                           </td>
					                           <td colspan="2">
					                              <button type="button" class="btn btn-primary addweekoff">
					                              Add
					                              </button>
					                              <div class="divweekoff">
					                                 <div class="d-flex flex-wrap inpttimewd">
					                                    <div class="mb-7 mb-sm-0">
					                                       <label for="" class="form-label">Open</label>
					                                       <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                          <input type="text" name="adv_setting_timeset_open[]" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                          <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                          <i class="ki-outline ki-time fs-3"></i>
					                                          </span>
					                                       </div>
					                                    </div>
					                                    <div>
					                                       <label for="" class="form-label">Close</label>
					                                       <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                          <input type="text" name="adv_setting_timeset_close[]" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                          <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                          <i class="ki-outline ki-time fs-3"></i>
					                                          </span>
					                                       </div>
					                                    </div>
					                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					                                       <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					                                    </div>
					                                 </div>
					                              </div>
					                           </td>
					                        </tr>
					                        <tr class="d-none tue">
					                           <td>
					                              Tue
					                           </td>
					                           <td>
					                              <div>
					                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                    <i class="ki-outline ki-time fs-3"></i>
					                                    </span>
					                                 </div>
					                              </div>
					                           </td>
					                           <td>
					                              <div>
					                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                    <i class="ki-outline ki-time fs-3"></i>
					                                    </span>
					                                 </div>
					                              </div>
					                           </td>
					                           <td colspan="2">
					                              <button type="button" class="btn btn-primary addweekoff">
					                              Add
					                              </button>
					                              <div class="divweekoff">
					                                 <div class="d-flex flex-wrap inpttimewd">
					                                    <div class="mb-7 mb-sm-0">
					                                       <label for="" class="form-label">Open</label>
					                                       <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                          <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                          <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                          <i class="ki-outline ki-time fs-3"></i>
					                                          </span>
					                                       </div>
					                                    </div>
					                                    <div>
					                                       <label for="" class="form-label">Close</label>
					                                       <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                          <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                          <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                          <i class="ki-outline ki-time fs-3"></i>
					                                          </span>
					                                       </div>
					                                    </div>
					                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					                                       <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					                                    </div>
					                                 </div>
					                              </div>
					                           </td>
					                        </tr>
					                        <tr class="d-none wed">
					                           <td>
					                              Wed
					                           </td>
					                           <td>
					                              <div>
					                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                    <i class="ki-outline ki-time fs-3"></i>
					                                    </span>
					                                 </div>
					                              </div>
					                           </td>
					                           <td>
					                              <div>
					                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                    <i class="ki-outline ki-time fs-3"></i>
					                                    </span>
					                                 </div>
					                              </div>
					                           </td>
					                           <td colspan="2">
					                              <button type="button" class="btn btn-primary addweekoff">
					                              Add
					                              </button>
					                              <div class="divweekoff">
					                                 <div class="d-flex flex-wrap inpttimewd">
					                                    <div class="mb-7 mb-sm-0">
					                                       <label for="" class="form-label">Open</label>
					                                       <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                          <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                          <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                          <i class="ki-outline ki-time fs-3"></i>
					                                          </span>
					                                       </div>
					                                    </div>
					                                    <div>
					                                       <label for="" class="form-label">Close</label>
					                                       <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                          <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                          <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                          <i class="ki-outline ki-time fs-3"></i>
					                                          </span>
					                                       </div>
					                                    </div>
					                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					                                       <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					                                    </div>
					                                 </div>
					                              </div>
					                           </td>
					                        </tr>
					                        <tr class="d-none thu">
					                           <td>
					                              Thu
					                           </td>
					                           <td>
					                              <div>
					                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                    <i class="ki-outline ki-time fs-3"></i>
					                                    </span>
					                                 </div>
					                              </div>
					                           </td>
					                           <td>
					                              <div>
					                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                    <i class="ki-outline ki-time fs-3"></i>
					                                    </span>
					                                 </div>
					                              </div>
					                           </td>
					                           <td colspan="2">
					                              <button type="button" class="btn btn-primary addweekoff">
					                              Add
					                              </button>
					                              <div class="divweekoff">
					                                 <div class="d-flex flex-wrap inpttimewd">
					                                    <div class="mb-7 mb-sm-0">
					                                       <label for="" class="form-label">Open</label>
					                                       <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                          <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                          <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                          <i class="ki-outline ki-time fs-3"></i>
					                                          </span>
					                                       </div>
					                                    </div>
					                                    <div>
					                                       <label for="" class="form-label">Close</label>
					                                       <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                          <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                          <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                          <i class="ki-outline ki-time fs-3"></i>
					                                          </span>
					                                       </div>
					                                    </div>
					                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					                                       <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					                                    </div>
					                                 </div>
					                              </div>
					                           </td>
					                        </tr>
					                        <tr class="d-none fri">
					                           <td>
					                              Fri
					                           </td>
					                           <td>
					                              <div>
					                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                    <i class="ki-outline ki-time fs-3"></i>
					                                    </span>
					                                 </div>
					                              </div>
					                           </td>
					                           <td>
					                              <div>
					                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                    <i class="ki-outline ki-time fs-3"></i>
					                                    </span>
					                                 </div>
					                              </div>
					                           </td>
					                           <td colspan="2">
					                              <button type="button" class="btn btn-primary addweekoff">
					                              Add
					                              </button>
					                              <div class="divweekoff">
					                                 <div class="d-flex flex-wrap inpttimewd">
					                                    <div class="mb-7 mb-sm-0">
					                                       <label for="" class="form-label">Open</label>
					                                       <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                          <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                          <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                          <i class="ki-outline ki-time fs-3"></i>
					                                          </span>
					                                       </div>
					                                    </div>
					                                    <div>
					                                       <label for="" class="form-label">Close</label>
					                                       <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                          <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                          <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                          <i class="ki-outline ki-time fs-3"></i>
					                                          </span>
					                                       </div>
					                                    </div>
					                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					                                       <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					                                    </div>
					                                 </div>
					                              </div>
					                           </td>
					                        </tr>
					                        <tr class="d-none sat">
					                           <td>
					                              Sat
					                           </td>
					                           <td>
					                              <div>
					                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                    <i class="ki-outline ki-time fs-3"></i>
					                                    </span>
					                                 </div>
					                              </div>
					                           </td>
					                           <td>
					                              <div>
					                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                    <i class="ki-outline ki-time fs-3"></i>
					                                    </span>
					                                 </div>
					                              </div>
					                           </td>
					                           <td colspan="2">
					                              <button type="button" class="btn btn-primary addweekoff">
					                              Add
					                              </button>
					                              <div class="divweekoff">
					                                 <div class="d-flex flex-wrap inpttimewd">
					                                    <div class="mb-7 mb-sm-0">
					                                       <label for="" class="form-label">Open</label>
					                                       <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                          <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                          <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                          <i class="ki-outline ki-time fs-3"></i>
					                                          </span>
					                                       </div>
					                                    </div>
					                                    <div>
					                                       <label for="" class="form-label">Close</label>
					                                       <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                          <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                          <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                          <i class="ki-outline ki-time fs-3"></i>
					                                          </span>
					                                       </div>
					                                    </div>
					                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					                                       <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					                                    </div>
					                                 </div>
					                              </div>
					                           </td>
					                        </tr>
					                        <tr class="d-none sun">
					                           <td>
					                              Sun
					                           </td>
					                           <td>
					                              <div>
					                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                    <i class="ki-outline ki-time fs-3"></i>
					                                    </span>
					                                 </div>
					                              </div>
					                           </td>
					                           <td>
					                              <div>
					                                 <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                    <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                    <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                    <i class="ki-outline ki-time fs-3"></i>
					                                    </span>
					                                 </div>
					                              </div>
					                           </td>
					                           <td colspan="2">
					                              <button type="button" class="btn btn-primary addweekoff">
					                              Add
					                              </button>
					                              <div class="divweekoff">
					                                 <div class="d-flex flex-wrap inpttimewd">
					                                    <div class="mb-7 mb-sm-0">
					                                       <label for="" class="form-label">Open</label>
					                                       <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                          <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                          <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                          <i class="ki-outline ki-time fs-3"></i>
					                                          </span>
					                                       </div>
					                                    </div>
					                                    <div>
					                                       <label for="" class="form-label">Close</label>
					                                       <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					                                          <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"/>
					                                          <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					                                          <i class="ki-outline ki-time fs-3"></i>
					                                          </span>
					                                       </div>
					                                    </div>
					                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					                                       <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					                                    </div>
					                                 </div>
					                              </div>
					                           </td>
					                        </tr>
					                     </tbody>
					                  </table>
					                  <!--end::Table-->
					               </div>
					            </div>
					         </div>
					         <div class="operatingdiv edit" id="operatinghourstab2">
					            <h3 class="card-title mb-7">
					               <span class="card-label fw-bold text-gray-800">Always open</span>
					            </h3>
					            <div class="card-body brdr">
					               <!--begin::Table-->
					               <table class="table align-middle table-row-dashed fs-6 gy-5">
					                  <thead>
					                     <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
					                        <th class="min-w-125px">Operating days</th>
					                        <th class="min-w-125px">Operating hours</th>
					                     </tr>
					                  </thead>
					                  <tbody class="text-gray-600 fw-semibold">
					                     <tr>
					                        <td>
					                           <div class="form-check">
					                              <input class="form-check-input edit_always_open" type="checkbox" value="mon" id="operatingd1" name="always_open[]" />
					                              <label class="form-check-label" for="operatingd1">
					                              Mon
					                              </label>
					                           </div>
					                        </td>
					                        <td>24 hours</td>
					                     </tr>
					                     <tr>
					                        <td>
					                           <div class="form-check">
					                              <input class="form-check-input edit_always_open" name="always_open[]" type="checkbox" value="tue" id="operatingd2" />
					                              <label class="form-check-label" for="operatingd2">
					                              Tue
					                              </label>
					                           </div>
					                        </td>
					                        <td>24 hours</td>
					                     </tr>
					                     <tr>
					                        <td>
					                           <div class="form-check">
					                              <input class="form-check-input edit_always_open" type="checkbox" name="always_open[]" value="wed" id="operatingd3" />
					                              <label class="form-check-label" for="operatingd3">
					                              Wed
					                              </label>
					                           </div>
					                        </td>
					                        <td>24 hours</td>
					                     </tr>
					                     <tr>
					                        <td>
					                           <div class="form-check">
					                              <input class="form-check-input edit_always_open" type="checkbox" name="always_open[]" value="thu" id="operatingd4" />
					                              <label class="form-check-label" for="operatingd4">
					                              Thu
					                              </label>
					                           </div>
					                        </td>
					                        <td>24 hours</td>
					                     </tr>
					                     <tr>
					                        <td>
					                           <div class="form-check">
					                              <input class="form-check-input edit_always_open" type="checkbox" name="always_open[]" value="fri" id="operatingd5" />
					                              <label class="form-check-label" for="operatingd5">
					                              Fri
					                              </label>
					                           </div>
					                        </td>
					                        <td>24 hours</td>
					                     </tr>
					                     <tr>
					                        <td>
					                           <div class="form-check">
					                              <input class="form-check-input edit_always_open" type="checkbox" name="always_open[]" value="sat" id="operatingd6" />
					                              <label class="form-check-label" for="operatingd6">
					                              Sat
					                              </label>
					                           </div>
					                        </td>
					                        <td>24 hours</td>
					                     </tr>
					                     <tr>
					                        <td>
					                           <div class="form-check">
					                              <input class="form-check-input edit_always_open" type="checkbox" name="always_open[]" value="sun" id="operatingd7" />
					                              <label class="form-check-label" for="operatingd7">
					                              Sun
					                              </label>
					                           </div>
					                        </td>
					                        <td>24 hours</td>
					                     </tr>
					                     <!-- <tr>
					                        <td class="pb-0">
					                           <button type="submit" class="btn btn-primary">
					                           <span class="indicator-label">Submit</span>
					                           <span class="indicator-progress">Please wait...
					                           <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
					                           </span>
					                           </button>
					                        </td>
					                        </tr> -->
					                  </tbody>
					               </table>
					               <!--end::Table-->
					            </div>
					         </div>
					         <div class="operatingdiv edit" id="operatinghourstab3">
					            <h3 class="card-title mb-7">
					               <span class="card-label fw-bold text-gray-800">By appointment only</span>
					            </h3>
					            <div class="card-body brdr">
					               <!--begin::Table-->
					               <table class="table align-middle table-row-dashed fs-6 gy-5">
					                  <thead>
					                     <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
					                        <th class="min-w-125px">Operating days</th>
					                        <th class="min-w-125px">Operating hours</th>
					                     </tr>
					                  </thead>
					                  <tbody class="text-gray-600 fw-semibold">
					                     <tr>
					                        <td>
					                           <div class="form-check">
					                              <input class="form-check-input edit_appointment_only" type="checkbox" name="appointment_only[]" value="mon" id="apponly1" />
					                              <label class="form-check-label" for="apponly1">
					                              Mon
					                              </label>
					                           </div>
					                        </td>
					                        <td>By appointment only</td>
					                     </tr>
					                     <tr>
					                        <td>
					                           <div class="form-check">
					                              <input class="form-check-input edit_appointment_only" type="checkbox" name="appointment_only[]" value="tue" id="apponly2" />
					                              <label class="form-check-label" for="apponly2">
					                              Tue
					                              </label>
					                           </div>
					                        </td>
					                        <td>By appointment only</td>
					                     </tr>
					                     <tr>
					                        <td>
					                           <div class="form-check">
					                              <input class="form-check-input edit_appointment_only" type="checkbox" name="appointment_only[]" value="wed" id="apponly3" />
					                              <label class="form-check-label" for="apponly3">
					                              Wed
					                              </label>
					                           </div>
					                        </td>
					                        <td>By appointment only</td>
					                     </tr>
					                     <tr>
					                        <td>
					                           <div class="form-check">
					                              <input class="form-check-input edit_appointment_only" type="checkbox" name="appointment_only[]" value="thu" id="apponly4" />
					                              <label class="form-check-label" for="apponly4">
					                              Thu
					                              </label>
					                           </div>
					                        </td>
					                        <td>By appointment only</td>
					                     </tr>
					                     <tr>
					                        <td>
					                           <div class="form-check">
					                              <input class="form-check-input edit_appointment_only" type="checkbox" name="appointment_only[]" value="fri" id="apponly5" />
					                              <label class="form-check-label" for="apponly5">
					                              Fri
					                              </label>
					                           </div>
					                        </td>
					                        <td>By appointment only</td>
					                     </tr>
					                     <tr>
					                        <td>
					                           <div class="form-check">
					                              <input class="form-check-input edit_appointment_only" type="checkbox" name="appointment_only[]" value="sat" id="apponly6" />
					                              <label class="form-check-label" for="apponly6">
					                              Sat
					                              </label>
					                           </div>
					                        </td>
					                        <td>By appointment only</td>
					                     </tr>
					                     <tr>
					                        <td>
					                           <div class="form-check">
					                              <input class="form-check-input edit_appointment_only" type="checkbox" name="appointment_only[]" value="sun" id="apponly7" />
					                              <label class="form-check-label" for="apponly7">
					                              Sun
					                              </label>
					                           </div>
					                        </td>
					                        <td>By appointment only</td>
					                     </tr>
					                     <!-- <tr>
					                        <td class="pb-0">
					                           <button type="submit" class="btn btn-primary">
					                           <span class="indicator-label">Submit</span>
					                           <span class="indicator-progress">Please wait...
					                           <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
					                           </span>
					                           </button>
					                        </td>
					                        </tr> -->
					                  </tbody>
					               </table>
					               <!--end::Table-->
					            </div>
					         </div>
					      </div>
					   </div>
					</div>
					<!--end::Step 5-->
					<!--begin::Step 6-->
					<div data-kt-stepper-element="content">
					   <div class="card card-flush w-100">
					      <div class="card-body pt-0">
					         <div class="mt-10 showopEditHrDiv2 edit-off-peakphours">
					            <table class="table align-middle table-row-dashed fs-6 gy-5">
					            	<thead>
					            		<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
					            			<th class="min-w-125px">Day</th>
					            			<th class="min-w-150px">Add off peak hour</th>
					            			<th class="min-w-150px"></th>
					            			<th class="min-w-150px">Add off time set</th>
					            			<th class="min-w-150px"></th>
					            		</tr>
					            	</thead>
					            	<tbody>
					            		<tr class="d-none mon">
					            			<td>Mon</td>
					            			<td colspan="2">
					            				<button type="button" class="btn btn-primary addweekoff">
					            					Add
					            				</button>
					            				<div class="divweekoff">
					            					<div class="d-flex flex-wrap inpttimewd">
					            						<div class="mb-7 mb-sm-0">
					            							<label for="" class="form-label">off peak start</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"
					            								name="off_peak_hour_start[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div>
					            							<label for="" class="form-label">off peak end</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_end[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					            							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					            						</div>
					            					</div>
					            				</div>
					            			</td>
					            			<td colspan="2">
					            				<button type="button" class="btn btn-primary addweekoff">
					            					Add
					            				</button>
					            				<div class="divweekoff">
					            					<div class="d-flex flex-wrap inpttimewd">
					            						<div class="mb-7 mb-sm-0">
					            							<label for="" class="form-label">Open</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_open[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div>
					            							<label for="" class="form-label">Close</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_close[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					            							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					            						</div>
					            					</div>
					            				</div>
					            			</td>
					            		</tr>
					            		<tr class="d-none tue">
					            			<td>Tue</td>
					            			<td colspan="2">
					            				<button type="button" class="btn btn-primary addweekoff">
					            					Add
					            				</button>
					            				<div class="divweekoff">
					            					<div class="d-flex flex-wrap inpttimewd">
					            						<div class="mb-7 mb-sm-0">
					            							<label for="" class="form-label">off peak start</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_start[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div>
					            							<label for="" class="form-label">off peak end</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_end[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					            							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					            						</div>
					            					</div>
					            				</div>
					            			</td>
					            			<td colspan="2">
					            				<button type="button" class="btn btn-primary addweekoff">
					            					Add
					            				</button>
					            				<div class="divweekoff">
					            					<div class="d-flex flex-wrap inpttimewd">
					            						<div class="mb-7 mb-sm-0">
					            							<label for="" class="form-label">Open</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_open[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div>
					            							<label for="" class="form-label">Close</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_close[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					            							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					            						</div>
					            					</div>
					            				</div>
					            			</td>
					            		</tr>
					            		<tr class="d-none wed">
					            			<td>Wed</td>
					            			<td colspan="2">
					            				<button type="button" class="btn btn-primary addweekoff">
					            					Add
					            				</button>
					            				<div class="divweekoff">
					            					<div class="d-flex flex-wrap inpttimewd">
					            						<div class="mb-7 mb-sm-0">
					            							<label for="" class="form-label">off peak start</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_start[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div>
					            							<label for="" class="form-label">off peak end</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_end[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					            							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					            						</div>
					            					</div>
					            				</div>
					            			</td>
					            			<td colspan="2">
					            				<button type="button" class="btn btn-primary addweekoff">
					            					Add
					            				</button>
					            				<div class="divweekoff">
					            					<div class="d-flex flex-wrap inpttimewd">
					            						<div class="mb-7 mb-sm-0">
					            							<label for="" class="form-label">Open</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_open[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div>
					            							<label for="" class="form-label">Close</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_close[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					            							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					            						</div>
					            					</div>
					            				</div>
					            			</td>
					            		</tr>
					            		<tr class="d-none thu">
					            			<td>Thu</td>
					            			<td colspan="2">
					            				<button type="button" class="btn btn-primary addweekoff">
					            					Add
					            				</button>
					            				<div class="divweekoff">
					            					<div class="d-flex flex-wrap inpttimewd">
					            						<div class="mb-7 mb-sm-0">
					            							<label for="" class="form-label">off peak start</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_start[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div>
					            							<label for="" class="form-label">off peak end</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_end[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					            							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					            						</div>
					            					</div>
					            				</div>
					            			</td>
					            			<td colspan="2">
					            				<button type="button" class="btn btn-primary addweekoff">
					            					Add
					            				</button>
					            				<div class="divweekoff">
					            					<div class="d-flex flex-wrap inpttimewd">
					            						<div class="mb-7 mb-sm-0">
					            							<label for="" class="form-label">Open</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_open[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div>
					            							<label for="" class="form-label">Close</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_close[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					            							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					            						</div>
					            					</div>
					            				</div>
					            			</td>
					            		</tr>
					            		<tr class="d-none fri">
					            			<td>Fri</td>
					            			<td colspan="2">
					            				<button type="button" class="btn btn-primary addweekoff">
					            					Add
					            				</button>
					            				<div class="divweekoff">
					            					<div class="d-flex flex-wrap inpttimewd">
					            						<div class="mb-7 mb-sm-0">
					            							<label for="" class="form-label">off peak start</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_start[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div>
					            							<label for="" class="form-label">off peak end</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_end[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					            							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					            						</div>
					            					</div>
					            				</div>
					            			</td>
					            			<td colspan="2">
					            				<button type="button" class="btn btn-primary addweekoff">
					            					Add
					            				</button>
					            				<div class="divweekoff">
					            					<div class="d-flex flex-wrap inpttimewd">
					            						<div class="mb-7 mb-sm-0">
					            							<label for="" class="form-label">Open</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_open[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div>
					            							<label for="" class="form-label">Close</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_close[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					            							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					            						</div>
					            					</div>
					            				</div>
					            			</td>
					            		</tr>
					            		<tr class="d-none sat">
					            			<td>Sat</td>
					            			<td colspan="2">
					            				<button type="button" class="btn btn-primary addweekoff">
					            					Add
					            				</button>
					            				<div class="divweekoff">
					            					<div class="d-flex flex-wrap inpttimewd">
					            						<div class="mb-7 mb-sm-0">
					            							<label for="" class="form-label">off peak start</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_start[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div>
					            							<label for="" class="form-label">off peak end</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_end[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					            							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					            						</div>
					            					</div>
					            				</div>
					            			</td>
					            			<td colspan="2">
					            				<button type="button" class="btn btn-primary addweekoff">
					            					Add
					            				</button>
					            				<div class="divweekoff">
					            					<div class="d-flex flex-wrap inpttimewd">
					            						<div class="mb-7 mb-sm-0">
					            							<label for="" class="form-label">Open</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_open[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div>
					            							<label for="" class="form-label">Close</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_close[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					            							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					            						</div>
					            					</div>
					            				</div>
					            			</td>
					            		</tr>
					            		<tr class="d-none sun">
					            			<td>Sun</td>
					            			<td colspan="2">
					            				<button type="button" class="btn btn-primary addweekoff">
					            					Add
					            				</button>
					            				<div class="divweekoff">
					            					<div class="d-flex flex-wrap inpttimewd">
					            						<div class="mb-7 mb-sm-0">
					            							<label for="" class="form-label">off peak start</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_start[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div>
					            							<label for="" class="form-label">off peak end</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_end[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					            							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					            						</div>
					            					</div>
					            				</div>
					            			</td>
					            			<td colspan="2">
					            				<button type="button" class="btn btn-primary addweekoff">
					            					Add
					            				</button>
					            				<div class="divweekoff">
					            					<div class="d-flex flex-wrap inpttimewd">
					            						<div class="mb-7 mb-sm-0">
					            							<label for="" class="form-label">Open</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_open[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div>
					            							<label for="" class="form-label">Close</label>
					            							<div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
					            								<input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_time_set_close[]"/>
					            								<span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
					            									<i class="ki-outline ki-time fs-3"></i>
					            								</span>
					            							</div>
					            						</div>
					            						<div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
					            							<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					            						</div>
					            					</div>
					            				</div>
					            			</td>
					            		</tr>
					            	</tbody>
					            </table>
					         </div>
					      </div>
					   </div>
					</div>
					<!--end::Step 6-->
					<!--begin::Step 7-->
					<div data-kt-stepper-element="content">
					   <!--begin::Scroll-->
					   <div class="d-flex flex-column me-n7 pe-7 gap-7 amenities-tab">
					      @if(!empty($amenities))
					      @foreach($amenities as $key => $amenity)
					      @if($key == "Venue")
					      <span class="card-label fw-bold text-gray-800 mb-4">{{ $key }}</span>
					      <div class="row">
					         @foreach($amenity as $am_val)
					         <div class="col-md-4 mb-5">
					            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckammenity1">
					               <!--begin::Radio-->
					               <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
					               <input class="form-check-input edit_venue_amenity" type="checkbox" value="{{ $am_val['id'] }}" id="flexCheckammenity{{$key}}" name="amenity[]" />
					               </span>
					               <!--end::Radio-->
					               <div class="icn ms-3">
					                  <img src="{{ asset('public'.$am_val['amenity_icon']) }}">
					               </div>
					               <!--begin::Info-->
					               <span class="ms-3">
					                  <h3 class="card-title align-items-start flex-column">
					                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ $am_val['amenity_name'] }}</span>
					                  </h3>
					               </span>
					               <!--end::Info-->
					            </label>
					         </div>
					         @endforeach
					      </div>
					      @endif
					      @if($key == "Access")
					      <span class="card-label fw-bold text-gray-800 mb-4">{{ $key }}</span>
					      <div class="row">
					         @foreach($amenity as $am_val)
					         <div class="col-md-4 mb-5">
					            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckammenity1">
					               <!--begin::Radio-->
					               <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
					               <input class="form-check-input edit_venue_amenity" type="checkbox" value="{{ $am_val['id'] }}" id="flexCheckammenityaccess{{$key}}" name="amenity[]"/>
					               </span>
					               <!--end::Radio-->
					               <div class="icn ms-3">
					                  <img src="{{ asset('public'.$am_val['amenity_icon']) }}">
					               </div>
					               <!--begin::Info-->
					               <span class="ms-3">
					                  <h3 class="card-title align-items-start flex-column">
					                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ $am_val['amenity_name'] }}</span>
					                  </h3>
					               </span>
					               <!--end::Info-->
					            </label>
					         </div>
					         @endforeach
					      </div>
					      @endif
					      @if($key == "Products Used")
					      <span class="card-label fw-bold text-gray-800 mb-4">{{ $key }}</span>
					      <div class="row">
					         @foreach($amenity as $am_val)
					         <div class="col-md-4 mb-5">
					            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckammenity1">
					               <!--begin::Radio-->
					               <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
					               <input class="form-check-input edit_venue_amenity" type="checkbox" value="{{ $am_val['id'] }}" id="flexCheckammenityprod{{$key}}" name="amenity[]"/>
					               </span>
					               <!--end::Radio-->
					               <div class="icn ms-3">
					                  <img src="{{ asset('public'.$am_val['amenity_icon']) }}">
					               </div>
					               <!--begin::Info-->
					               <span class="ms-3">
					                  <h3 class="card-title align-items-start flex-column">
					                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ $am_val['amenity_name'] }}</span>
					                  </h3>
					               </span>
					               <!--end::Info-->
					            </label>
					         </div>
					         @endforeach
					      </div>
					      @endif
					      @if($key == "Brands")
					      <span class="card-label fw-bold text-gray-800 mb-4">{{ $key }}</span>
					      <div class="row">
					         @foreach($amenity as $am_val)
					         <div class="col-md-4 mb-5">
					            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckammenity1">
					               <!--begin::Radio-->
					               <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
					               <input class="form-check-input edit_venue_amenity" type="checkbox" value="{{ $am_val['id'] }}" id="flexCheckammenitybrand{{$key}}" name="amenity[]"/>
					               </span>
					               <!--end::Radio-->
					               <div class="icn ms-3">
					                  <img src="{{ asset('public'.$am_val['amenity_icon']) }}">
					               </div>
					               <!--begin::Info-->
					               <span class="ms-3">
					                  <h3 class="card-title align-items-start flex-column">
					                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ $am_val['amenity_name'] }}</span>
					                  </h3>
					               </span>
					               <!--end::Info-->
					            </label>
					         </div>
					         @endforeach
					      </div>
					      @endif
					      @endforeach
					      @endif
					   </div>
					   <!--end::Scroll-->
					</div>
					<!--end::Step 7-->
					<!--begin::Step 8-->
					<div data-kt-stepper-element="content">
					   <div class="w-100">
					      <!--begin::Heading-->
					      <div class="pb-12 text-center">
					         <!--begin::Title-->
					         <h1 class="fw-bold text-dark">Venue details Completed</h1>
					         <!--end::Title-->
					         <!--begin::Description-->
					         <div class="fw-semibold text-muted fs-4">You will receive an email with with the summary of your newly Venue Setup</div>
					         <!--end::Description-->
					      </div>
					      <!--end::Heading-->
					      <!--begin::Illustration-->
					      <div class="text-center px-4">
					         <img src="{{ asset('/public/partner/assets/media/illustrations/sketchy-1/9.png') }}" alt="" class="mww-100 mh-350px" />
					      </div>
					      <!--end::Illustration-->
					   </div>
					</div>
					<!--end::Step 8-->
					</div>
					<!--end::Group-->
					<!--begin::Actions-->
					<div class="d-flex flex-stack mt-10">
					   <!--begin::Wrapper-->
					   <div class="me-2">
					      <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
					      Back
					      </button>
					   </div>
					   <!--end::Wrapper-->
					   <!--begin::Wrapper-->
					   <div>
					      <button type="submit" class="btn btn-primary" data-kt-stepper-action="submit">
					      <span class="indicator-label">
					      Submit
					      </span>
					      <span class="indicator-progress">
					      Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
					      </span>
					      </button>
					      <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
					      Continue
					      </button>
					   </div>
					   <!--end::Wrapper-->
					</div>
					<!--end::Actions-->
				</form>
				<!--end::Form-->
			</div>
            <!--end::Stepper-->
         </div>
      </div>
   </div>
</div>

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

<script type="text/javascript">
	

</script>
<!-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places&callback=initMap" async defer></script> -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" async defer></script>

<script>
	

	/*function initMap() {
		function initialize() {
			var area = new google.maps.places.Autocomplete(
				document.getElementById('business_location'),
				{ 
					types: ['(cities)']
				});
			google.maps.event.addListener(area, 'place_changed', function() {
				var place = area.getPlace();
            console.log(place);
            // $("#area").val(place.formatted_address);
            // $("#city").val(place.name);
            // $("#lat").val(place.geometry.location.lat());
            // $("#lng").val(place.geometry.location.lng());
        });
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	}*/

	// Add a click event listener to the marker
	/*google.maps.event.addListener(marker, 'click', function() {
        // Perform reverse geocoding to get the address
        var geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(marker.getPosition().lat(), marker.getPosition().lng());

        geocoder.geocode({'latLng': latlng}, function(results, status) {
        	if (status == google.maps.GeocoderStatus.OK) {
        		if (results[0]) {
                    // Display the address in an alert or another element on your webpage
                    alert("Address: " + results[0].formatted_address);
                }
            } else {
            	alert("Geocoder failed due to: " + status);
            }
        });
    });*/
</script>

<script src="{{asset('/public/assets/js/partner/venue.js')}}" type="text/javascript"></script>
@endpush
