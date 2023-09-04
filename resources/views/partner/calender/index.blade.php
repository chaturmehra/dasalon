@extends('partner.layouts.auth.app')
@section('content') 

<!--Begin:::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
   <!--begin::Content wrapper-->
   <div id="kt_app_content" class="app-content flex-column-fluid">
      <div id="kt_app_content_container" class="app-container container-xl">
         <!--begin::Card-->
         <div class="card">
            <!--begin::Card header-->
            <div class="card-header">
               <h2 class="card-title fw-bold">Calendar</h2>
               <div class="d-flex gap-2 me-auto ms-5">
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
               <div class="card-toolbar">
                  <button class="btn btn-sm btn-flex btn-primary" data-kt-calendar="add">
                     <i class="ki-duotone ki-plus fs-2"></i>Add Event</button>
                  </div>

                  <!--begin::Filter menu-->
                  <div class="d-flex align-items-center ms-3">
                     <!--begin::Menu toggle-->
                     <a href="#" class="btn btn-sm btn-light btn-flex btn-color-gray-700 fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                           <span class="path1"></span>
                           <span class="path2"></span>
                        </i>Location</a>
                        <!--end::Menu toggle-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="" class="menu-link px-3">Location1</a>
                           </div>
                           <!--end::Menu item-->
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="" class="menu-link px-3">Location2</a>
                           </div>
                           <!--end::Menu item-->
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="" class="menu-link px-3">Location3</a>
                           </div>
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="" class="menu-link px-3">Location4</a>
                           </div>

                           <div class="menu-item px-3">
                              <a href="" class="menu-link px-3">Location5</a>
                           </div>

                           <div class="menu-item px-3">
                              <a href="" class="menu-link px-3">Location6</a>
                           </div>
                        </div>
                        <!--end::Menu-->
                     </div>
                     <!--end::Filter menu-->

                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body">
                     <!--begin::Calendar-->
                     <div id="kt_calendar_app"></div>
                     <!--end::Calendar-->
                  </div>
                  <!--end::Card body-->
               </div>
               <!--end::Card-->
            </div>

         </div>
      </div>
      <!--end:::Main-->

<!--begin::Modal - New Product-->
<div class="modal fade" id="kt_modal_add_event" data-backdrop="false" tabindex="-1" aria-hidden="true">
   <!--begin::Modal dialog-->
   <div class="modal-dialog modal-dialog-centered mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
         <!--begin::Form-->
         <form class="form" action="#" id="kt_modal_add_event_form">
            <!--begin::Modal header-->
            <div class="modal-header">
               <!--begin::Modal title-->
               <h2 class="fw-bold" data-kt-calendar="title">Add Event</h2>
               <!--end::Modal title-->
               <!--begin::Close-->
               <div class="btn btn-icon btn-sm btn-active-icon-primary" id="kt_modal_add_event_close">
                  <i class="ki-duotone ki-cross fs-1">
                  <span class="path1"></span>
                  <span class="path2"></span>
                  </i>
               </div>
               <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-10 px-lg-17">
               <!--begin::Input group-->
               <div class="fv-row mb-9">
                  <!--begin::Label-->
                  <label class="fs-6 fw-semibold required mb-2">Event Name</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_name" />
                  <!--end::Input-->
               </div>
               <!--end::Input group-->
               <!--begin::Input group-->
               <div class="fv-row mb-9">
                  <!--begin::Label-->
                  <label class="fs-6 fw-semibold mb-2">Event Description</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_description" />
                  <!--end::Input-->
               </div>
               <!--end::Input group-->
               <!--begin::Input group-->
               <div class="fv-row mb-9">
                  <!--begin::Label-->
                  <label class="fs-6 fw-semibold mb-2">Event Location</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_location" />
                  <!--end::Input-->
               </div>
               <!--end::Input group-->
               <!--begin::Input group-->
               <div class="fv-row mb-9">
                  <!--begin::Checkbox-->
                  <label class="form-check form-check-custom form-check-solid">
                  <input class="form-check-input" type="checkbox" value="" id="kt_calendar_datepicker_allday" />
                  <span class="form-check-label fw-semibold" for="kt_calendar_datepicker_allday">All Day</span>
                  </label>
                  <!--end::Checkbox-->
               </div>
               <!--end::Input group-->
               <!--begin::Input group-->
               <div class="row row-cols-lg-2 g-10">
                  <div class="col">
                     <div class="fv-row mb-9">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2 required">Event Start Date</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid" name="calendar_event_start_date" placeholder="Pick a start date" id="kt_calendar_datepicker_start_date" />
                        <!--end::Input-->
                     </div>
                  </div>
                  <div class="col" data-kt-calendar="datepicker">
                     <div class="fv-row mb-9">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">Event Start Time</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid" name="calendar_event_start_time" placeholder="Pick a start time" id="kt_calendar_datepicker_start_time" />
                        <!--end::Input-->
                     </div>
                  </div>
               </div>
               <!--end::Input group-->
               <!--begin::Input group-->
               <div class="row row-cols-lg-2 g-10">
                  <div class="col">
                     <div class="fv-row mb-9">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2 required">Event End Date</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid" name="calendar_event_end_date" placeholder="Pick a end date" id="kt_calendar_datepicker_end_date" />
                        <!--end::Input-->
                     </div>
                  </div>
                  <div class="col" data-kt-calendar="datepicker">
                     <div class="fv-row mb-9">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold mb-2">Event End Time</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid" name="calendar_event_end_time" placeholder="Pick a end time" id="kt_calendar_datepicker_end_time" />
                        <!--end::Input-->
                     </div>
                  </div>
               </div>
               <!--end::Input group-->
            </div>
            <!--end::Modal body-->
            <!--begin::Modal footer-->
            <div class="modal-footer flex-center">
               <!--begin::Button-->
               <button type="reset" id="kt_modal_add_event_cancel" class="btn btn-light me-3">Cancel</button>
               <!--end::Button-->
               <!--begin::Button-->
               <button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
               <span class="indicator-label">Submit</span>
               <span class="indicator-progress">Please wait...
               <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
               </button>
               <!--end::Button-->
            </div>
            <!--end::Modal footer-->
         </form>
         <!--end::Form-->
      </div>
   </div>
</div>
<!--end::Modal - New Product-->
<!--begin::Modal - New Product-->
<div class="modal fade" id="kt_modal_view_event" data-backdrop="false" tabindex="-1" aria-hidden="true">
   <!--begin::Modal dialog-->
   <div class="modal-dialog modal-dialog-centered mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
         <!--begin::Modal header-->
         <div class="modal-header border-0 justify-content-end">
            <!--begin::Edit-->
            <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Edit Event" id="kt_modal_view_event_edit">
               <i class="ki-duotone ki-pencil fs-2">
               <span class="path1"></span>
               <span class="path2"></span>
               </i>
            </div>
            <!--end::Edit-->
            <!--begin::Edit-->
            <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Delete Event" id="kt_modal_view_event_delete">
               <i class="ki-duotone ki-trash fs-2">
               <span class="path1"></span>
               <span class="path2"></span>
               <span class="path3"></span>
               <span class="path4"></span>
               <span class="path5"></span>
               </i>
            </div>
            <!--end::Edit-->
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary" data-bs-toggle="tooltip" title="Hide Event" data-bs-dismiss="modal">
               <i class="ki-duotone ki-cross fs-2x">
               <span class="path1"></span>
               <span class="path2"></span>
               </i>
            </div>
            <!--end::Close-->
         </div>
         <!--end::Modal header-->
         <!--begin::Modal body-->
         <div class="modal-body pt-0 pb-20 px-lg-17">
            <!--begin::Row-->
            <div class="d-flex">
               <!--begin::Icon-->
               <i class="ki-duotone ki-calendar-8 fs-1 text-muted me-5">
               <span class="path1"></span>
               <span class="path2"></span>
               <span class="path3"></span>
               <span class="path4"></span>
               <span class="path5"></span>
               <span class="path6"></span>
               </i>
               <!--end::Icon-->
               <div class="mb-9">
                  <!--begin::Event name-->
                  <div class="d-flex align-items-center mb-2">
                     <span class="fs-3 fw-bold me-3" data-kt-calendar="event_name"></span>
                     <span class="badge badge-light-success" data-kt-calendar="all_day"></span>
                  </div>
                  <!--end::Event name-->
                  <!--begin::Event description-->
                  <div class="fs-6" data-kt-calendar="event_description"></div>
                  <!--end::Event description-->
               </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="d-flex align-items-center mb-2">
               <!--begin::Bullet-->
               <span class="bullet bullet-dot h-10px w-10px bg-success ms-2 me-7"></span>
               <!--end::Bullet-->
               <!--begin::Event start date/time-->
               <div class="fs-6">
                  <span class="fw-bold">Starts</span>
                  <span data-kt-calendar="event_start_date"></span>
               </div>
               <!--end::Event start date/time-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="d-flex align-items-center mb-9">
               <!--begin::Bullet-->
               <span class="bullet bullet-dot h-10px w-10px bg-danger ms-2 me-7"></span>
               <!--end::Bullet-->
               <!--begin::Event end date/time-->
               <div class="fs-6">
                  <span class="fw-bold">Ends</span>
                  <span data-kt-calendar="event_end_date"></span>
               </div>
               <!--end::Event end date/time-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="d-flex align-items-center">
               <!--begin::Icon-->
               <i class="ki-duotone ki-geolocation fs-1 text-muted me-5">
               <span class="path1"></span>
               <span class="path2"></span>
               </i>
               <!--end::Icon-->
               <!--begin::Event location-->
               <div class="fs-6" data-kt-calendar="event_location"></div>
               <!--end::Event location-->
            </div>
            <!--end::Row-->
         </div>
         <!--end::Modal body-->
      </div>
   </div>
</div>
<!--end::Modal - New Product-->
<!--end::Modals-->
<div class="menu menu-sub menu-sub-dropdown w-250px" data-kt-menu="true" id="kt_modal_view_event_new">
   <!--begin::Form-->
   <div class="p-4">
      <!--begin::Row-->
      <div class="d-flex">
         <!--begin::Icon-->
         <i class="ki-duotone ki-calendar-8 fs-1 text-muted me-5">
         <span class="path1"></span>
         <span class="path2"></span>
         <span class="path3"></span>
         <span class="path4"></span>
         <span class="path5"></span>
         <span class="path6"></span>
         </i>
         <!--end::Icon-->
         <div class="mb-9">
            <!--begin::Event name-->
            <div class="d-flex align-items-center mb-2">
               <span class="fs-3 fw-bold me-3" data-kt-calendar="event_name"></span>
               <span class="badge badge-light-success" data-kt-calendar="all_day"></span>
            </div>
            <!--end::Event name-->
            <!--begin::Event description-->
            <div class="fs-6" data-kt-calendar="event_description"></div>
            <!--end::Event description-->
         </div>
      </div>
      <!--end::Row-->
      <!--begin::Row-->
      <div class="d-flex align-items-center mb-2">
         <!--begin::Bullet-->
         <span class="bullet bullet-dot h-10px w-10px bg-success ms-2 me-7"></span>
         <!--end::Bullet-->
         <!--begin::Event start date/time-->
         <div class="fs-6">
            <span class="fw-bold">Starts</span>
            <span data-kt-calendar="event_start_date"></span>
         </div>
         <!--end::Event start date/time-->
      </div>
      <!--end::Row-->
      <!--begin::Row-->
      <div class="d-flex align-items-center mb-9">
         <!--begin::Bullet-->
         <span class="bullet bullet-dot h-10px w-10px bg-danger ms-2 me-7"></span>
         <!--end::Bullet-->
         <!--begin::Event end date/time-->
         <div class="fs-6">
            <span class="fw-bold">Ends</span>
            <span data-kt-calendar="event_end_date"></span>
         </div>
         <!--end::Event end date/time-->
      </div>
      <!--end::Row-->
      <!--begin::Row-->
      <div class="d-flex align-items-center">
         <!--begin::Icon-->
         <i class="ki-duotone ki-geolocation fs-1 text-muted me-5">
         <span class="path1"></span>
         <span class="path2"></span>
         </i>
         <!--end::Icon-->
         <!--begin::Event location-->
         <div class="fs-6" data-kt-calendar="event_location"></div>
         <!--end::Event location-->
      </div>
      <!--end::Row-->
   </div>
   <!--end::Form-->
</div>
<!--end::Menu 1-->
<!--begin::Drawer-->
<div
   id="kt_drawer_example_permanent5"
   class="bg-white"
   data-kt-drawer="true"
   data-kt-drawer-activate="true"
   data-kt-drawer-toggle="#kt_drawer_example_permanent_toggle5"
   data-kt-drawer-close="#kt_drawer_example_permanent_close5"
   data-kt-drawer-overlay="false"
   data-kt-drawer-permanent="true"
   data-kt-drawer-width="{default:'300px', 'md': '700px', 'xl': '950px'}"
   >
   <!--begin::Card-->
   <div class="card rounded-0 w-100 brlft bggrey">
      <!--begin::Card header-->
      <div class="card-header pe-5">
         <!--begin::Title-->
         <div class="card-title" data-kt-calendar="titlenew">
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
                           <span class="text-gray-600 d-block fs-6"></span>
                        </div>
                        <div class="d-flex gap-3">
                           <span class="text-gray-400 fw-semibold fs-6">Payment status:</span>
                           <span class="text-gray-600 d-block fs-6"></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="card card-flush h-100">
                  <div class="card-body">
                     <a href="#" id="kt_drawer_example_permanent_toggle7" class="d-flex align-items-center gap-4 p-5 btn btn-outline btn-outline-dashed text-start lightbluebg">
                        <div>
                           <i class="ki-outline ki-plus-circle fs-1x text-primary"></i>
                        </div>
                        <div class="d-flex flex-column">
                           <span class="text-gray-800 fs-4 fw-semibold">Add client</span>
                           <span class="text-gray-400 fs-4">add client or leave it blank for walk-in client</span>
                        </div>
                     </a>
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
                           <span class="text-gray-400 fw-semibold fs-6"
                              id="newappointmenttime">Sunday, 18 Jun, 2023</span>
                        </div>
                        <div class="d-flex gap-5">
                           <div class="d-none">
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
                           <div class="d-none">
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
                        <a href="#" id="kt_drawer_example_permanent_toggle6" class="d-flex align-items-center gap-4 p-5 btn btn-outline btn-outline-dashed text-start lightbluebg">
                           <div>
                              <i class="ki-outline ki-plus-circle fs-1x text-primary"></i>
                           </div>
                           <div class="d-flex flex-column">
                              <span class="text-gray-800 fs-4 fw-semibold">Add item</span>
                              <span class="text-gray-400 fs-4">add service, voucher, membership, etc</span>
                           </div>
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
   id="kt_drawer_example_permanent8"
   class="bg-white"
   data-kt-drawer="true"
   data-kt-drawer-activate="true"
   data-kt-drawer-toggle="#kt_drawer_example_permanent_toggle8"
   data-kt-drawer-close="#kt_drawer_example_permanent_close8"
   data-kt-drawer-overlay="false"
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
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="kt_drawer_example_permanent_close8">
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
                                                <span class="text-gray-400 fw-semibold fs-6">The The VIP Members Description</span>
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
   data-kt-drawer-overlay="false"
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
<!--begin::Drawer-->
<div
   id="kt_drawer_example_permanent7"
   class="bg-white"
   data-kt-drawer="true"
   data-kt-drawer-activate="true"
   data-kt-drawer-toggle="#kt_drawer_example_permanent_toggle7"
   data-kt-drawer-close="#kt_drawer_example_permanent_close7"
   data-kt-drawer-overlay="false"
   data-kt-drawer-permanent="true"
   data-kt-drawer-width="{default:'300px', 'md': '500px'}"
   >
   <!--begin::Card-->
   <div class="card rounded-0 w-100 brlft">
      <!--begin::Card header-->
      <div class="card-header pe-5">
         <!--begin::Title-->
         <div class="card-title">
            Add Client
         </div>
         <!--end::Title-->
         <!--begin::Card toolbar-->
         <div class="card-toolbar">
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="kt_drawer_example_permanent_close7">
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
            <div class="d-flex justify-content-center">
               <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable" class="d-flex align-items-center justify-content-center gap-4">
               <i class="ki-outline ki-plus-circle fs-2x text-primary"></i>
               <span class="fw-semibold text-primar">Create new client</span>
               </a>
            </div>
            <!--begin::Search-->
            <div id="kt_client_search" class="header-search d-flex align-items-center w-100 mt-4" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
               <!--begin::Tablet and mobile search toggle-->
               <div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
                  <div class="d-flex btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-35px h-md-35px">
                     <i class="ki-outline ki-magnifier fs-1"></i>
                  </div>
               </div>
               <!--end::Tablet and mobile search toggle-->
               <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
               <form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                  <!--begin::Hidden input(Added to disable form autocomplete)-->
                  <input type="hidden" />
                  <!--end::Hidden input-->
                  <!--begin::Icon-->
                  <i class="ki-outline ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"></i>
                  <!--end::Icon-->
                  <!--begin::Input-->
                  <input type="text" class="search-input form-control ps-13" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                  <!--end::Input-->
                  <!--begin::Spinner-->
                  <span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                  <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                  </span>
                  <!--end::Spinner-->
                  <!--begin::Reset-->
                  <span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
                  <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
                  </span>
                  <!--end::Reset-->
               </form>
               <!--end::Form-->
               <!--begin::Menu-->
               <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-475px">
                  <!--begin::Wrapper-->
                  <div data-kt-search-element="wrapper">
                     <!--begin::Recently viewed-->
                     <div data-kt-search-element="results" class="d-none">
                        <!--begin::Items-->
                        <div class="scroll-y mh-200px mh-lg-350px">
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="symbol symbol-50px me-3">
                                 <img src="assets/media/avatars/300-3.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">9856251457</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">info@gmail.com</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="symbol symbol-50px me-3">
                                 <img src="assets/media/avatars/300-10.jpg" class="" alt="">
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">7845125963</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">info@gmail.com</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="symbol symbol-50px me-3">
                                 <img src="assets/media/avatars/300-9.jpg" class="" alt="">
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">7845123659</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">info@gmail.com</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="symbol symbol-50px me-3">
                                 <img src="assets/media/avatars/300-2.jpg" class="" alt="">
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">8521479638</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">info@gmail.com</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                 <img src="assets/media/avatars/300-11.jpg" alt="" />
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="d-flex flex-column justify-content-start fw-semibold">
                                 <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">8521479638</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">info@gmail.com</span>
                              </div>
                              <!--end::Title-->
                           </a>
                           <!--end::Item-->
                        </div>
                        <!--end::Items-->
                     </div>
                     <!--end::Recently viewed-->
                     <!--begin::Recently viewed-->
                     <div class="" data-kt-search-element="main">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack fw-semibold mb-4">
                           <!--begin::Label-->
                           <span class="text-muted fs-6 me-2">Recently Searched:</span>
                           <!--end::Label-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Items-->
                        <div class="scroll-y mh-200px mh-lg-325px">
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="symbol symbol-50px me-3">
                                 <img src="assets/media/avatars/300-3.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">9856251457</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">info@gmail.com</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="symbol symbol-50px me-3">
                                 <img src="assets/media/avatars/300-10.jpg" class="" alt="">
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">7845125963</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">info@gmail.com</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="symbol symbol-50px me-3">
                                 <img src="assets/media/avatars/300-9.jpg" class="" alt="">
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">7845123659</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">info@gmail.com</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="symbol symbol-50px me-3">
                                 <img src="assets/media/avatars/300-2.jpg" class="" alt="">
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">8521479638</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">info@gmail.com</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <!--begin::Symbol-->
                              <div class="symbol symbol-40px me-4">
                                 <img src="assets/media/avatars/300-11.jpg" alt="" />
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="d-flex flex-column justify-content-start fw-semibold">
                                 <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">8521479638</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-7">info@gmail.com</span>
                              </div>
                              <!--end::Title-->
                           </a>
                           <!--end::Item-->
                        </div>
                        <!--end::Items-->
                     </div>
                     <!--end::Recently viewed-->
                     <!--begin::Empty-->
                     <div data-kt-search-element="empty" class="text-center d-none">
                        <!--begin::Icon-->
                        <div class="pt-10 pb-10">
                           <i class="ki-outline ki-search-list fs-4x opacity-50"></i>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Message-->
                        <div class="pb-15 fw-semibold">
                           <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                           <div class="text-muted fs-7">Please try again with a different query</div>
                        </div>
                        <!--end::Message-->
                     </div>
                     <!--end::Empty-->
                  </div>
                  <!--end::Wrapper-->
               </div>
               <!--end::Menu-->
            </div>
            <!--end::Search-->
         </div>
         <!--end::Items-->
      </div>
      <!--end: Card Body-->
   </div>
   <!--end::Card-->
</div>
<!--end::Drawer-->
<div class="modal fade" id="kt_modal_scrollable" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-xl">
      <div class="modal-content">
         <div class="modal-header">
            <!--begin::Card header-->
            <div class="card-header pt-7" id="kt_chat_contacts_header">
               <!--begin::Card title-->
               <div class="card-title">
                  <h2>Add New Client</h2>
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
            <!--begin::Contacts-->
            <div class="card card-flush h-lg-100">
               <!--begin::Card body-->
               <div class="card-body pt-5">
                  <!--begin::Form-->
                  <form id="" class="form">
                     <!--begin::Row-->
                     <div class="row">
                        <!--begin::Col-->
                        <div class="col-md-3">
                           <!--begin::Input group-->
                           <div class="mb-7">
                              <!--begin::Label-->
                              <label class="fs-6 fw-semibold mb-3">
                              <span>Update Avatar</span>
                              <span class="ms-1" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg.">
                              <i class="ki-duotone ki-information fs-7">
                              <span class="path1"></span>
                              <span class="path2"></span>
                              <span class="path3"></span>
                              </i>
                              </span>
                              </label>
                              <!--end::Label-->
                              <!--begin::Image input wrapper-->
                              <div class="mt-1">
                                 <!--begin::Image placeholder-->
                                 <style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
                                 <!--end::Image placeholder-->
                                 <!--begin::Image input-->
                                 <div class="image-input image-input-outline image-input-placeholder image-input-empty image-input-empty" data-kt-image-input="true">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-100px h-100px" style="background-image: url('')"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Edit-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                       <i class="ki-duotone ki-pencil fs-7">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                       <!--begin::Inputs-->
                                       <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                       <input type="hidden" name="avatar_remove" />
                                       <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit-->
                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki-duotone ki-cross fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    </i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="ki-duotone ki-cross fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    </i>
                                    </span>
                                    <!--end::Remove-->
                                 </div>
                                 <!--end::Image input-->
                              </div>
                              <!--end::Image input wrapper-->
                           </div>
                           <!--end::Input group-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-9">
                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                              <!--begin::Label-->
                              <label class="fs-6 fw-semibold form-label mt-3">
                              <span class="required">Name</span>
                              </label>
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input type="text" class="form-control form-control-solid" name="name" value="" />
                              <!--end::Input-->
                           </div>
                           <!--end::Input group-->
                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                              <!--begin::Label-->
                              <label class="fs-6 fw-semibold form-label mt-3">
                              <span>Gender</span>
                              </label>
                              <!--end::Label-->
                              <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" data-dropdown-parent="#kt_modal_scrollable">
                                 <option></option>
                                 <option value="1">Male</option>
                                 <option value="2">Female</option>
                                 <option value="3">Non binary</option>
                                 <option value="4">Unknown</option>
                              </select>
                           </div>
                           <!--end::Input group-->
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Input group-->
                     <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mt-3">
                        <span>Phone no.</span>
                        </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="phone" value="" />
                        <!--end::Input-->
                     </div>
                     <!--end::Input group-->
                     <!--begin::Input group-->
                     <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mt-3">
                        <span class="required">Email id</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="email" class="form-control form-control-solid" name="email" value="" />
                        <!--end::Input-->
                     </div>
                     <!--end::Input group-->
                     <!--begin::Input group-->
                     <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mt-3">
                        <span class="required">Date of birth</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control kt_datepicker w-100" placeholder="DOB"/>
                        <!--end::Input-->
                     </div>
                     <!--end::Input group-->
                     <!--begin::Input group-->
                     <div class="fv-row mb-7">
                        <div class="brdr">
                           <!--begin::Label-->
                           <label class="fs-6 fw-semibold form-label mt-3 p-4 pb-0">
                           <span>Address</span>
                           </label>
                           <!--end::Label-->
                           <hr>
                           <a href="#" class="d-flex align-items-center gap-2 icnclr p-4 pt-0 pb-5 mt-5">
                           <i class="bi bi-plus-circle fs-2"></i>
                           <span>Add new address</span>
                           </a>
                        </div>
                     </div>
                     <!--end::Input group-->
                     <!--begin::Input group-->
                     <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mt-3">
                        <span>Notes</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <textarea class="form-control form-control-solid" name="notes"></textarea>
                        <!--end::Input-->
                     </div>
                     <!--end::Input group-->
                     <!--begin::Separator-->
                     <div class="separator mb-6"></div>
                     <!--end::Separator-->
                     <!--begin::Action buttons-->
                     <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                        <span class="indicator-label">Save</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                     </div>
                     <!--end::Action buttons-->
                  </form>
                  <!--end::Form-->
               </div>
               <!--end::Card body-->
            </div>
            <!--end::Contacts-->
         </div>
      </div>
   </div>
</div>
<div class="event_tooltip d-none">
   <div class="d-flex flex-column gap-3">
      <div class="d-flex gap-4 align-items-center">
         <!--begin::Users group-->
         <div class="symbol-group symbol-hover flex-nowrap justify-content-end">
            <div class="symbol symbol-35px">
               <span class="symbol-label bg-warning text-inverse-warning fw-bold" attr_client_shortname="client_shortname"></span>
            </div>
         </div>
         <!--end::Users group-->
         <div class="d-flex flex-column">
            <span class="text-gray-800 fw-bold fs-4" attr_client_name="client_name"></span>
            <span class="text-gray-600 d-block fs-7" attr_client_no="client_no"></span>
         </div>
      </div>
      <div>
         <span class="badge badge-light-dark d-none newclient">New Client</span>
      </div>
      <hr class="my-2">
      <div class="d-flex justify-content-between align-items-center">
         <div class="d-flex flex-column">
            <span tooltip-time="time" class="text-gray-400 fs-7"></span>
            <span tooltip-title="title" class="text-gray-800 fw-bold fs-4"></span>
            <span class="text-gray-400 fs-7"><span tooltip-duration="duration"></span> with <span tooltip-staffname="staffname"></span></span>
         </div>
         <div>
            <span tooltip-price="price" class="text-gray-800 fw-bold fs-4"></span>
         </div>
      </div>
   </div>
</div>
<div class="event_details d-none">
   <!--begin::Users group-->
   <div class="symbol-group symbol-hover flex-nowrap justify-content-end d-none" attr_staff="staff_shortname">
      <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="">
         <span class="symbol-label bg-warning text-inverse-warning fw-bold"></span>
      </div>
   </div>
   <!--end::Users group-->
   <!--begin::Users group-->
   <div class="symbol-group symbol-hover flex-nowrap justify-content-end d-none" attr_staffimg="staff_img">
      <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="">
         <img alt="Pic" src="" />
      </div>
   </div>
   <!--end::Users group-->
</div>
<div attr_client="client_name" class="d-none"></div>
<span data-kt-element="bullet" class="bullet bullet-vertical bullet-vertical-cstm d-flex align-items-center me-2 bg-info d-none" id="status_info"></span>
<span data-kt-element="bullet" class="bullet bullet-vertical bullet-vertical-cstm d-flex align-items-center me-2 bg-warning d-none" id="status_warning"></span>
<span data-kt-element="bullet" class="bullet bullet-vertical bullet-vertical-cstm d-flex align-items-center me-2 bg-success d-none" id="status_success"></span>
@endsection
