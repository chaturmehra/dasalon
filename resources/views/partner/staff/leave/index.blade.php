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
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Leave</h1>
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
                  <li class="breadcrumb-item text-muted">
                     <a href="{{ route('staff.index') }}" class="text-muted text-hover-primary">Staff</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">Leave</li>
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
            <div class="d-flex flex-column flex-row-fluid gap-7">
               <!--begin::Card header-->
               <div class="d-flex align-items-center py-5 justify-content-between">
                  <h3 class="mb-0">
                     <span class="card-label fw-bold text-gray-800">Leave</span>
                  </h3>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_attendance_staff_apply">
                     Apply Leave
                  </button>
               </div>
               <!--end::Card header-->
               <div class="card card-flush">
                  <!--begin::Card header-->
                  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
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
                     <!--begin::Nav-->
                     <ul class="nav nav-pills nav-pills-custom">
                        <!--begin::Item-->
                        <li class="nav-item">
                           <!--begin::Link-->
                           <a class="active show_hide_staff_leave" data-bs-toggle="pill" href="javascript:void(0)" staff-id="all">
                              <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="All">
                                 <span class="symbol-label bg-warning text-inverse-warning fw-bold">All</span>
                              </div>
                           </a>
                           <!--end::Link-->
                        </li>
                        @if($staffLeave)
                        @foreach($staffLeave->unique() as $namekey => $staff_name)
                        @php
                        $full_name = $staff_name->name;
                        $name_parts = explode(' ', $full_name);
                        $shortName = '';
                        foreach ($name_parts as $part) {
                           $shortName .= substr($part, 0, 1);
                        }

                        @endphp
                        <li class="nav-item">
                           <!--begin::Link-->
                           <a data-bs-toggle="pill" href="javascript:void(0)" staff-id="{{ $staff_name->user_id }}" class="show_hide_staff_leave">
                              <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="{{ $staff_name->name }}">
                                 <span class="symbol-label bg-danger text-inverse-danger fw-bold">{{ strtoupper($shortName) }}</span>
                              </div>
                           </a>
                           <!--end::Link-->
                        </li>
                        @endforeach
                        @endif

                     </ul>
                     <!--end::Nav-->
                     <!--begin::Card toolbar-->
                     <div class="card-toolbar">
                        <div class="d-flex flex-column gap-2 w-200px">
                           <div class="d-flex justify-content-between">
                              <span class="text-gray-800 fw-semibold">Name</span>
                              <span class="text-gray-800 fw-semibold">All</span>
                           </div>
                           <div class="d-flex justify-content-between">
                              <span class="text-gray-800 fw-semibold">Leave status(Taken)</span>
                              <span class="text-gray-800 fw-semibold">22</span>
                           </div>
                           <div class="d-flex justify-content-between">
                              <span class="text-gray-800 fw-semibold">Leave status(Planned)</span>
                              <span class="text-gray-800 fw-semibold">6</span>
                           </div>
                        </div>
                     </div>
                     <!--end::Card toolbar-->
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-0">
                     <!--begin::Tab Content-->
                     <div class="tab-content">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade active show">
                           <!--begin::Table-->
                           <table class="table align-middle table-row-dashed fs-6 gy-5">
                              <!--begin::Table head-->
                              <thead>
                                 <!--begin::Table row-->
                                 <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-100px">Name</th>
                                    <th class="min-w-50px">Leave start</th>
                                    <th class="min-w-100px">Leave end</th>
                                    <th class="min-w-100px">Total no. of days</th>
                                    <th class="min-w-50px">Leave status</th>
                                    <th class="min-w-50px">Remarks (Reason for holiday)</th>
                                 </tr>
                                 <!--end::Table row-->
                              </thead>
                              <!--end::Table head-->
                              <tbody class="fw-bold text-gray-600 leave-lists">
                                 @if(!empty($staffLeave))
                                 @foreach($staffLeave as $key => $staff)
                                 @php 
                                    $start_date = $staff->start; 
                                    $start_end = $staff->end; 
                                    if($start_date){
                                       $formatted_start  = date("j F", strtotime($start_date));
                                    }else{
                                       $formatted_start  = "";
                                    }
                                    if($start_end){
                                       $formatted_end  = date("j F", strtotime($start_end));
                                    }else{
                                       $formatted_end  = "";
                                    }

                                    $ts1 = strtotime($start_date);
                                    $ts2 = strtotime($start_end);    
                                    if($ts1 && $ts2){
                                       $date_diff = $ts2 - $ts1;
                                       $days = floor($date_diff / (60 * 60 * 24));
                                    }else{
                                       $days = "";
                                    }
                                 
                                 @endphp
                                 <tr class="staff_{{$staff->user_id}}">
                                    <td>{{ $staff->name }}</td>
                                    <td>{{ $formatted_start }}</td>
                                    <td>{{ $formatted_end }}</td>
                                    <td>{{ $days }}</td>
                                    <td>{{ $staff->leave_status }}</td>
                                    <td>{{ $staff->leave_remarks }}</td>
                                 </tr>
                                 @endforeach
                                 @endif
                              </tbody>
                           </table>
                           <!--end::Table-->
                        </div>
                     </div>
                  </div>
                  <!--end::Card body-->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!--end:::Main-->

<!--begin::Modal - Add commission-->
@include('partner.staff.leave.modal.apply-leave')
<!--end::Modal - Add commission-->

@endsection
@push('scripts')
<script src="{{asset('/public/assets/js/partner/leave.js')}}" type="text/javascript"></script>
@endpush()