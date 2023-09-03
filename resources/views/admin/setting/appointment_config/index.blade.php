@extends('admin.layouts.auth.app')

@section('content')

<!--Begin:::Main-->
<meta name="csrf-token" content="{{ csrf_token() }}">
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
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Appointment Config</h1>
               <!--end::Title-->
               <!--begin::Breadcrumb-->
               <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     <a href="{{ url('/admin/settings') }}" class="text-muted text-hover-primary">Home</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">Appointment Config</li>
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
            <!--begin::Navbar-->
            @include('admin.setting.tab')
            <!--end::Navbar-->
            <div class="card card-flush">
               <!--begin::Main column-->
               <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                  <div class="card card-flush">
                  @if(session()->has('message'))
               <div class="card-header display-message">
                  <div class="alert alert-success">
                     {{ session()->get('message') }}
                  </div>
               </div>
               @endif
                     <!--begin::Form-->
                     <form action = "{{ url('admin/settings/appointment')}}" method = "post" class="form">
                     @csrf  
                     <div class="card-body align-items-center py-10">
                           <!--begin::Title-->
                           <h1 class="fw-bold text-dark mb-9">scheduling</h1>
                           <!--end::Title-->   
                           <div class="row">
                              <div class="col-md-6 fv-row mb-7">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800 mb-4">Define time least count, Soonest appointment booking time, Latest appointment booking time</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-5">Set how far in advance clients can book online, and lead time for when clients can cancel or reschedule</span>
                                 </h3>
                              </div>
                              <div class="col-md-6 fv-row mb-7">
                                 <div class="card-body brdr">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Define time least count</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <select aria-label="Leastcouunt" name="time_least_count" data-control="select2" data-placeholder="Least count..." class="form-select mb-2">
                                          <option value="" {{ ( $task->time_least_count=="") ? 'selected' : '' }}></option>
                                          <option value="15 mins" {{ ( $task->time_least_count=="15 mins") ? 'selected' : '' }}>15 mins</option>
                                          <option value="30 mins" {{ ( $task->time_least_count=="30 mins") ? 'selected' : '' }}>30 mins</option>
                                          <option value="45 mins" {{ ( $task->time_least_count=="45 mins") ? 'selected' : '' }}>45 mins</option>
                                          <option value="1 hour" {{ ( $task->time_least_count=="1 hour") ? 'selected' : '' }}>1 hour</option>
                                          <option value="1 hour 30 mins" {{ ( $task->time_least_count=="1 hour 30 mins") ? 'selected' : '' }}>1 hour 30 mins</option>
                                          <option value="2 hour" {{ ( $task->time_least_count=="2 hour") ? 'selected' : '' }}>2 hour</option>
                                       </select>
                                       <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Define Soonest Appointment booking time</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <select aria-label="Soonest Appointment booking time" name="soonest_appointment_booking_time" data-control="select2" data-placeholder="Soonest Appointment booking time..." class="form-select mb-2">
                                          <option value="" {{ ( $task->soonest_appointment_booking_time=="") ? 'selected' : '' }}></option>
                                          <option value="Upto 15 mins before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 15 mins before start time") ? 'selected' : '' }}>Upto 15 mins before start time</option>
                                          <option value="Upto 30 mins before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 30 mins before start time") ? 'selected' : '' }}>Upto 30 mins before start time</option>
                                          <option value="Upto 1 hour before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 1 hour before start time") ? 'selected' : '' }}>Upto 1 hour before start time</option>
                                          <option value="Upto 2 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 2 hours before start time") ? 'selected' : '' }}>Upto 2 hours before start time</option>
                                          <option value="Upto 3 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 3 hours before start time") ? 'selected' : '' }}>Upto 3 hours before start time</option>
                                          <option value="Upto 4 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 4 hours before start time") ? 'selected' : '' }}>Upto 4 hours before start time</option>
                                          <option value="Upto 5 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 5 hours before start time") ? 'selected' : '' }}>Upto 5 hours before start time</option>
                                          <option value="Upto 6 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 6 hours before start time") ? 'selected' : '' }}>Upto 6 hours before start time</option>
                                          <option value="Upto 7 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 7 hours before start time") ? 'selected' : '' }}>Upto 7 hours before start time</option>
                                          <option value="Upto 8 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 8 hours before start time") ? 'selected' : '' }}>Upto 8 hours before start time</option>
                                          <option value="Upto 9 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 9 hours before start time") ? 'selected' : '' }}>Upto 9 hours before start time</option>
                                          <option value="Upto 10 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 10 hours before start time") ? 'selected' : '' }}>Upto 10 hours before start time</option>
                                          <option value="Upto 11 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 11 hours before start time") ? 'selected' : '' }}>Upto 11 hours before start time</option>
                                          <option value="Upto 12 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 12 hours before start time") ? 'selected' : '' }}>Upto 12 hours before start time</option>
                                          <option value="Upto 13 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 13 hours before start time") ? 'selected' : '' }}>Upto 13 hours before start time</option>
                                          <option value="Upto 14 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 14 hours before start time") ? 'selected' : '' }}>Upto 14 hours before start time</option>
                                          <option value="Upto 15 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 15 hours before start time") ? 'selected' : '' }}>Upto 15 hours before start time</option>
                                          <option value="Upto 16 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 16 hours before start time") ? 'selected' : '' }}>Upto 16 hours before start time</option>
                                          <option value="Upto 17 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 17 hours before start time") ? 'selected' : '' }}>Upto 17 hours before start time</option>
                                          <option value="Upto 18 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 18 hours before start time") ? 'selected' : '' }}>Upto 18 hours before start time</option>
                                          <option value="Upto 19 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 19 hours before start time") ? 'selected' : '' }}>Upto 19 hours before start time</option>
                                          <option value="Upto 20 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 20 hours before start time") ? 'selected' : '' }}>Upto 20 hours before start time</option>
                                          <option value="Upto 21 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 21 hours before start time") ? 'selected' : '' }}>Upto 21 hours before start time</option>
                                          <option value="Upto 22 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 22 hours before start time") ? 'selected' : '' }}>Upto 22 hours before start time</option>
                                          <option value="Upto 23 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 23 hours before start time") ? 'selected' : '' }}>Upto 23 hours before start time</option>
                                          <option value="Upto 24 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 24 hours before start time") ? 'selected' : '' }}>Upto 24 hours before start time</option>
                                          <option value="Upto 48 hours before start time" {{ ( $task->soonest_appointment_booking_time=="Upto 48 hours before start time") ? 'selected' : '' }}>Upto 48 hours before start time</option>
                                       </select>
                                       <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Define - Latest appointment booking time</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <select aria-label="Latest appointment booking time" name="latest_appointment_booking_time" data-control="select2" data-placeholder="Latest appointment booking time..." class="form-select mb-2">
                                          <option value="" {{ ( $task->latest_appointment_booking_time=="") ? 'selected' : '' }}></option>
                                          <option value="No more than 6 months in the future" {{ ( $task->latest_appointment_booking_time=="No more than 6 months in the future") ? 'selected' : '' }}>No more than 6 months in the future</option>
                                          <option value="No more than 5 months in the future" {{ ( $task->latest_appointment_booking_time=="No more than 5 months in the future") ? 'selected' : '' }}>No more than 5 months in the future</option>
                                          <option value="No more than 4 months in the future" {{ ( $task->latest_appointment_booking_time=="No more than 4 months in the future") ? 'selected' : '' }}>No more than 4 months in the future</option>
                                          <option value="No more than 3 months in the future" {{ ( $task->latest_appointment_booking_time=="No more than 3 months in the future") ? 'selected' : '' }}>No more than 3 months in the future</option>
                                          <option value="No more than 2 months in the future" {{ ( $task->latest_appointment_booking_time=="No more than 2 months in the future") ? 'selected' : '' }}>No more than 2 months in the future</option>
                                          <option value="No more than 1 month in the future" {{ ( $task->latest_appointment_booking_time=="No more than 1 month in the future") ? 'selected' : '' }}>No more than 1 month in the future</option>
                                       </select>
                                       <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                 </div>
                              </div>
                              <div class="col-md-6 fv-row mb-7">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800 mb-4">Allow double booking </span>
                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-5">Set max booking by same user OR same IP address </span>
                                 </h3>
                              </div>
                              <div class="col-md-6 fv-row">
                                 <div class="card-body brdr">
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Max booking allowed</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <select aria-label="Max booking allowed" name="max_booking_allowed" data-control="select2" data-placeholder="Max booking allowed..." class="form-select mb-2">
                                          <option value="" {{ ( $task->max_booking_allowed=="") ? 'selected' : '' }}></option>
                                          <option value="4" {{ ( $task->max_booking_allowed=="4") ? 'selected' : '' }}>4</option>
                                          <option value="5" {{ ( $task->max_booking_allowed=="5") ? 'selected' : '' }}>5</option>
                                          <option value="6" {{ ( $task->max_booking_allowed=="6") ? 'selected' : '' }}>6</option>
                                          <option value="7" {{ ( $task->max_booking_allowed=="7") ? 'selected' : '' }}>7</option>
                                          <option value="8" {{ ( $task->max_booking_allowed=="8") ? 'selected' : '' }}>8</option>
                                          <option value="9" {{ ( $task->max_booking_allowed=="9") ? 'selected' : '' }}>9</option>
                                          <option value="10" {{ ( $task->max_booking_allowed=="10") ? 'selected' : '' }}>10</option>
                                       </select>
                                       <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                 </div>
                              </div>
                              <div class="col-md-6 offset-md-6 fv-row">
                                 <!--begin::Submit-->
                                 <button type="submit" class="btn btn-primary mt-8">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">Add</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                 </button>
                                 <!--end::Submit-->
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <!--end::Main column-->
            </div>
         </div>
         <!--end::Content container-->
      </div>
      <!--end::Content-->
   </div>
   <!--end::Content wrapper-->
</div>
<!--end:::Main-->

@endsection
