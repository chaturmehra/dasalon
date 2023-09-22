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
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Staff</h1>
               <!--end::Title-->
               <!--begin::Breadcrumb-->
               <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     <a href="{{ url('partner/dashbaord') }}" class="text-muted text-hover-primary">Home</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">Staff</li>
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
            @include('partner.staff.tab')
            <!--end::Navbar-->
            <div class="d-flex flex-column flex-row-fluid gap-7">
               
               @include('partner.staff.staff-sub-tab')
               
               <div class="card card-flush">
                  <div class="card-body pb-0">
                     <!--begin::Wrapper-->
                     <div class="d-flex flex-column px-9">
                        <!--begin::Section-->
                        <div class="pt-10 pb-0">
                           <!--begin::Title-->
                           <h3 class="text-dark text-center fw-bold">No Staff added</h3>
                           <!--end::Title-->
                           <!--begin::Text-->
                           <div class="text-center text-gray-600 fw-semibold pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           </div>
                           <!--end::Text-->
                           <!--begin::Action-->
                           <div class="text-center mt-5 mb-9">
                              <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable22">Add Staff</a>
                           </div>
                           <!--end::Action-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Illustration-->
                        <div class="text-center px-4">
                           <img class="mw-100 mh-200px" alt="image" src="{{asset('/public/assets/media/illustrations/sketchy-1/1.png')}}" />
                        </div>
                        <!--end::Illustration-->
                     </div>
                     <!--end::Wrapper-->
                  </div>
               </div>
               <div class="card card-flush mt-8">
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
                  <!--begin::Card header-->
                  <div class="card-header align-items-center pt-5 gap-2 gap-md-5">
                     <!--begin::Card title-->
                     <div class="card-title">
                        <h2>Manage Staff</h2>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card header-->
                  <div class="card-header border-0 pt-0">
                     <!--begin::Card title-->
                     <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                           <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                           <span class="path1"></span>
                           <span class="path2"></span>
                           </i>
                           <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
                        </div>
                        <!--end::Search-->
                     </div>
                     <!--begin::Card title-->
                     <!--begin::Card toolbar-->
                     <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                           <!--begin::Filter-->
                           <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                           <i class="ki-duotone ki-filter fs-2">
                           <span class="path1"></span>
                           <span class="path2"></span>
                           </i>Filter</button>
                           <!--begin::Menu 1-->
                           <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                              <!--begin::Header-->
                              <div class="px-7 py-5">
                                 <div class="fs-5 text-dark fw-bold">Filter Options</div>
                              </div>
                              <!--end::Header-->
                              <!--begin::Separator-->
                              <div class="separator border-gray-200"></div>
                              <!--end::Separator-->
                              <!--begin::Content-->
                              <div class="px-7 py-5" data-kt-user-table-filter="form">
                                 <!--begin::Input group-->
                                 <div class="mb-10">
                                    <label class="form-label fs-6 fw-semibold">Role:</label>
                                    <select class="form-select form-select-solid fw-bold filter-option-roles" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true" name="filter_role">
                                       <option></option>
                                       @if($roles)
                                       @foreach($roles as $key => $role)
                                       <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                                       @endforeach
                                       @endif
                                    </select>
                                 </div>
                                 <!--end::Input group-->
                                 <!--begin::Input group-->
                                 <!-- <div class="mb-10">
                                    <label class="form-label fs-6 fw-semibold">Two Step Verification:</label>
                                    <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="two-step" data-hide-search="true">
                                       <option></option>
                                       <option value="Enabled">Enabled</option>
                                    </select>
                                 </div> -->
                                 <!--end::Input group-->
                                 <!--begin::Actions-->
                                 <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6 filter-Reset" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                    <button type="submit" class="btn btn-primary fw-semibold px-6 filter-by-role" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                                 </div>
                                 <!--end::Actions-->
                              </div>
                              <!--end::Content-->
                           </div>
                           <!--end::Menu 1-->
                           <!--end::Filter-->
                           <!--begin::Export-->
                           <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
                           <i class="ki-duotone ki-exit-up fs-2">
                           <span class="path1"></span>
                           <span class="path2"></span>
                           </i>Export</button>
                           <!--end::Export-->
                           <!--begin::Add user-->
                           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable22">
                           <i class="ki-duotone ki-plus fs-2"></i>Add staff</button>
                           <!--end::Add user-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <!-- <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                           <div class="fw-bold me-5">
                              <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                           </div>
                           <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                        </div> -->
                        <!--end::Group actions-->
                        <!--begin::Modal - Adjust Balance-->
                        <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                           <!--begin::Modal dialog-->
                           <div class="modal-dialog modal-dialog-centered mw-650px">
                              <!--begin::Modal content-->
                              <div class="modal-content">
                                 <!--begin::Modal header-->
                                 <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bold">Export Staff</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                       <i class="ki-duotone ki-cross fs-1">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                    <!--end::Close-->
                                 </div>
                                 <!--end::Modal header-->
                                 <!--begin::Modal body-->
                                 <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                    <!--begin::Form-->
                                    <form id="kt_modal_export_users_formss" class="form" action="#">
                                       <!--begin::Input group-->
                                       <div class="fv-row mb-10">
                                          <!--begin::Label-->
                                          <label class="fs-6 fw-semibold form-label mb-2">Select Roles:</label>
                                          <!--end::Label-->
                                          <!--begin::Input-->
                                          <select name="role" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bold export-roles" name="export_roles">
                                             <option></option>
                                             @if($roles)
                                             @foreach($roles as $key => $role)
                                             <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                                             @endforeach
                                             @endif
                                          </select>
                                          <!--end::Input-->
                                       </div>
                                       <!--end::Input group-->
                                       <!--begin::Input group-->
                                       <div class="fv-row mb-10">
                                          <!--begin::Label-->
                                          <label class="required fs-6 fw-semibold form-label mb-2">Select Export Format:</label>
                                          <!--end::Label-->
                                          <!--begin::Input-->
                                          <select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold export-format" name="export_format">
                                             <option></option>
                                             <option value="excel">Excel</option>
                                             <option value="csv">CSV</option>
                                             <option value="pdf">PDF</option>
                                             <!-- <option value="zip">ZIP</option> -->
                                          </select>
                                          <!--end::Input-->
                                       </div>
                                       <!--end::Input group-->
                                       <!--begin::Actions-->
                                       <div class="text-center">
                                          <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                                          <button type="button" class="btn btn-primary export-staff-by-role" data-kt-users-modal-action="submit">
                                          <span class="indicator-label">Submit</span>
                                          <span class="indicator-progress">Please wait...
                                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                          </button>
                                       </div>
                                       <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                 </div>
                                 <!--end::Modal body-->
                              </div>
                              <!--end::Modal content-->
                           </div>
                           <!--end::Modal dialog-->
                        </div>
                        <!--end::Modal - New Card-->
                     </div>
                     <!--end::Card toolbar-->
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body py-4">
                     <!--begin::Table-->
                     <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                        <thead>
                           <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                              <th class="w-10px pe-2">
                                 <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                 </div>
                              </th>
                              <th class="min-w-125px">User</th>
                              <th class="min-w-125px">Phone</th>
                              <th class="min-w-125px">Role</th>
                              <th class="min-w-125px">Status</th>
                              <th class="min-w-125px">Rating</th>
                              <th class="text-end min-w-100px">Actions</th>
                           </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold staff-lists">

                           @if( !empty($getStaff) )
                           @foreach($getStaff as $skey => $staff)
                           @php
                           if($staff->is_active){
                              $statusVal = 0;
                              $statusText = "Disable";
                           }else{
                              $statusVal = 1;
                              $statusText = "Enable";
                           }

                           $full_name = $staff->name;
                           $name_parts = explode(' ', $full_name);
                           $shortName = '';
                           foreach ($name_parts as $part) {
                              $shortName .= substr($part, 0, 1);
                           }

                           @endphp
                           <tr>
                              <td>
                                 <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="{{ $staff->user_id }}" />
                                 </div>
                              </td>
                              <td class="d-flex align-items-center" id="kt_drawer_editprofile_toggle">
                                 <!--begin:: Avatar -->
                                 <div class="symbol symbol-circle symbol-50px overflow-hidden cursor-pointer me-3" id="kt_drawer_editprofile_toggle">
                                    <a href="javascript:void(0)" staff-id="{{ $staff->user_id }}" class="view-staff">
                                       <div class="symbol-label">
                                          @if(!empty($staff->profile_image))
                                             <img src="{{asset('/public/'.$staff->profile_image)}}" alt="{{ $staff->name }}" class="w-100" />
                                          @else
                                             <span class="symbol-label bg-danger text-inverse-danger fw-bold">{{ $shortName }}</span>
                                          @endif
                                       </div>
                                    </a>
                                 </div>
                                 
                                 <!--end::Avatar-->
                                 <!--begin::User details-->
                                 <div class="d-flex flex-column">
                                    <a href="javascript:void(0)" class="text-gray-800 text-hover-primary mb-1 view-staff" staff-id="{{ $staff->user_id }}">{{ $staff->name }}</a>
                                    <span>{{ $staff->email }}</span>
                                 </div>
                                 <!--begin::User details-->
                              </td>
                              <td>{{ $staff->phone }}</td>
                              <td>{{ $staff->role_name }}</td>
                              <td>
                                 <label class="form-check form-switch form-check-custom form-check-solid">
                                 <input class="form-check-input" type="checkbox" @if($staff->is_active)checked="checked" @endif disabled />
                                 </label>
                                 <!--end::Switch-->
                              </td>
                              <td>
                                 <div class="rating">
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                 </div>
                                 <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">Best Rated</span>
                              </td>
                              <td class="text-end">
                                 <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                 <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                 <!--begin::Menu-->
                                 <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                       <a href="#" class="menu-link px-3 view-staff" id="kt_drawer_editprofile_toggle" staff-id="{{ $staff->user_id }}">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                       <a href="javascript:void(0)" class="menu-link px-3 delete-staff" staff-id="{{ $staff->user_id }}">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                       <a href="javascript:void(0)" class="menu-link px-3 status-change"  status-value="{{ $statusVal }}" staff-id="{{ $staff->user_id }}">{{ $statusText }}
                                       </a>
                                    </div>
                                    <!--end::Menu item-->
                                 </div>
                                 <!--end::Menu-->
                              </td>
                           </tr>
                           @endforeach
                           @endif
                        </tbody>
                     </table>
                     <!--end::Table-->
                  </div>
                  <!--end::Card body-->
               </div>
            </div>
         </div>
         <!--end::Content container-->
      </div>
      <!--end::Content-->
   </div>
   <!--end::Content wrapper-->
</div>
<!--end:::Main-->

<!--begin::Modal - Add commission-->
@include('partner.staff.modal.add-commission')
@include('partner.staff.modal.edit-commission')
<!--end::Modal - Add commission-->

<!--begin::Modal - Add task-->
@include('partner.staff.modal.synccalendar')
@include('partner.staff.modal.edit-synccalendar')
<!--end::Modal - Add task-->

<!--begin::Modal - Add task-->
@include('partner.staff.modal.add-staff')
@include('partner.staff.modal.edit-staff')
<!--end::Modal - Add task-->
<!--begin::Drawer-->

<!--end::Drawer-->
<!--begin::Drawer-->
@include('partner.staff.modal.view')
<!--end::Drawer-->
<!--end::Modals-->

@endsection

@push('scripts')
<script type="text/javascript">

   // CUSTOM JS
   function showStaffDataN(e) {

      let checkBoxInput = document.querySelector('.staffworkingdays').children;
      let advancesettingdiv = document.querySelectorAll('.advancesettingdiv');
      let staffInd = document.querySelectorAll('.staff-ind-shift');

      for(let i=0; i<checkBoxInput.length; i++) {
         if(e.checked && checkBoxInput[i].querySelector('input') == e) {
            for(let j=0; j<advancesettingdiv.length; j++) {
               let staffInd = advancesettingdiv[j].querySelectorAll('.staff-ind-shift');
               staffInd[i].classList.remove('d-none');
            }
         }
         else if(!e.checked && checkBoxInput[i].querySelector('input') == e) {
            for(let j=0; j<advancesettingdiv.length; j++) {
               let staffInd = advancesettingdiv[j].querySelectorAll('.staff-ind-shift');
               staffInd[i].classList.add('d-none')	
            }			    
         }
      }

   }

   function showEditStaffDataN(e) {

      let checkBoxInput = document.querySelector('.editstaffworkingdays').children;
      let advancesettingdiv = document.querySelectorAll('.editadvancesettingdiv');
      let staffInd = document.querySelectorAll('.edit.staff-ind-shift');

      for(let i=0; i<checkBoxInput.length; i++) {
         if(e.checked && checkBoxInput[i].querySelector('input') == e) {
            for(let j=0; j<advancesettingdiv.length; j++) {
               let staffInd = advancesettingdiv[j].querySelectorAll('.edit.staff-ind-shift');
               staffInd[i].classList.remove('d-none');
            }
         }
         else if(!e.checked && checkBoxInput[i].querySelector('input') == e) {
            for(let j=0; j<advancesettingdiv.length; j++) {
               let staffInd = advancesettingdiv[j].querySelectorAll('.edit.staff-ind-shift');
               staffInd[i].classList.add('d-none') 
            }            
         }
      }

   }

   function delStaffTime(e) {
      e.parentElement.remove();
   }

   function showStaffSettingDiv(e) {
      let staffDiv = document.querySelector('.staff-add-setting-div');
      if(e.checked && staffDiv.classList.contains('d-none')) {
         staffDiv.classList.remove('d-none');
      }
      else {
         staffDiv.classList.add('d-none')
      }
   }

   function showEditStaffSettingDiv(e) {
      let staffDiv = document.querySelector('.edit.staff-add-setting-div');
      if(e.checked && staffDiv.classList.contains('d-none')) {
         staffDiv.classList.remove('d-none');
      }
      else {
         staffDiv.classList.add('d-none')
      }
   }

   let cloneDiv = document.querySelector('.single-add-shift-div').cloneNode(true);
   function duplicateStaffTime(e) {
      let dupCloneDiv = cloneDiv.cloneNode(true);		
      let timep = dupCloneDiv.querySelectorAll('.kt_td_picker_time_only');
      for(let i=0; i<timep.length; i++) {
         timePick(timep[i]);
      }
      let appBef = e.parentElement;
      appBef.parentNode.insertBefore(dupCloneDiv, e.parentElement);
   }

   function timePick(elem) {
      new tempusDominus.TempusDominus(elem, {
         display: {
            viewMode: "clock",
            components: {
               decades: false,
               year: false,
               month: false,
               date: false,
               hours: true,
               minutes: true,
               seconds: false
            }
         }
      });
   }

   let advancesettingdivpar = document.querySelector('.advancesettingdiv').parentElement;

   function weekSelect(e) {
      let advancesettingdiv = document.querySelector('.advancesettingdiv').cloneNode(true);
      advancesettingdivpar.replaceChildren();
      for(let i=0; i<Number(e.value); i++) {
         let advancesettingdivCln = advancesettingdiv.cloneNode(true);
         let timep = advancesettingdivCln.querySelectorAll('.kt_td_picker_time_only');
         for(let i=0; i<timep.length; i++) {
            timep[i].querySelector('input').value='';
            timePick(timep[i]);
         }
         advancesettingdivpar.append(advancesettingdivCln);
         if(Number(e.value) === 5) {
            break;
         }
      }
   }

   let event_plcHolder;
   setTimeout(function() {
      event_plcHolder = document.querySelector('select.end-date').nextElementSibling.querySelector('.select2-selection__placeholder');
   }, 1000);

   function workinghrend(e) {
      if(Number(e.value) === 2) {
         e.parentElement.previousElementSibling.classList.remove('d-none');
         e.parentElement.previousElementSibling.querySelector('.kt_datepicker').value='';
         e.options[e.selectedIndex].text = '';
         e.value = '';
         e.parentElement.classList.add('d-none');

         let event_nextsib = e.nextElementSibling.querySelector('.select2-selection__rendered');
         event_nextsib.textContent='';
         event_nextsib.removeAttribute("title");
         event_nextsib.append(event_plcHolder);
      }
   }

   function delworkinghrend(e) {
      e.parentElement.classList.add('d-none');
      e.parentElement.nextElementSibling.classList.remove('d-none');
   }

</script>

<script type="text/javascript">
	$("#kt_daterangepicker_1").daterangepicker();
</script>
<script src="{{asset('/public/assets/js/partner/staff.js')}}" type="text/javascript"></script>
@endpush()