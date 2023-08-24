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
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Country Config</h1>
               <!--end::Title-->
               <!--begin::Breadcrumb-->
               <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     <a href="{{ url('/admin') }}" class="text-muted text-hover-primary">Home</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">Country Config</li>
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
            <!--begin::Products-->
            <div class="card card-flush mb-8">
               <div class="card-header">
                  <h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">System Admin</h2>
               </div>
               @if(session()->has('message'))
               <div class="card-header display-message">
                  <div class="alert alert-success">
                     {{ session()->get('message') }}
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
               <div class="card-header">
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
               </div>
               @endif
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
                  <!--begin::Card toolbar-->
                  <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                     <!--begin::Card toolbar-->
                     <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                           <!--begin::Add Country-->
                           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable">
                           <i class="ki-duotone ki-plus fs-2"></i>Add Admin
                           </button>
                           <!--end::Add Country-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Modal - Add task-->
                        <div class="modal fade" tabindex="-1" id="kt_modal_scrollable">
                           <div class="modal-dialog modal-dialog-scrollable">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title">Add Admin</h5>
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                       <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                    </div>
                                    <!--end::Close-->
                                 </div>
                                 <div class="modal-body">
                                    <!--begin::Form-->
                                    <form class="form" action="{{ url('/admin/add-admin') }}" method="post">
                                       @csrf
                                       <!--begin::Scroll-->
                                       <div class="d-flex flex-column scroll-y me-n7 pe-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row mb-7">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Name</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Name"/>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                          
                                          <!--begin::Input group-->
                                          <div class="fv-row mb-7">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Phone</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <input type="text" name="phone" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Phone"/>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                          <!--begin::Input group-->
                                          <div class="fv-row mb-7">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Email</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Email"/>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                          <!--begin::Input group-->
                                          <div class="fv-row mb-7">
                                             <!--begin::Main wrapper-->
                                             <div class="fv-row" data-kt-password-meter="true">
                                                <!--begin::Wrapper-->
                                                <div class="mb-1">
                                                   <!--begin::Label-->
                                                   <label class="form-label fw-semibold fs-6 mb-2">
                                                   Password
                                                   </label>
                                                   <!--end::Label-->
                                                   <!--begin::Input wrapper-->
                                                   <div class="position-relative mb-3">
                                                      <input class="form-control form-control-lg form-control-solid"
                                                         type="password" placeholder="Enter password" name="password" autocomplete="off" />
                                                      <!--begin::Visibility toggle-->
                                                      <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                         data-kt-password-meter-control="visibility">
                                                      <i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                                      <i class="ki-duotone ki-eye d-none fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                                      </span>
                                                      <!--end::Visibility toggle-->
                                                   </div>
                                                   <!--end::Input wrapper-->
                                                   <!--begin::Highlight meter-->
                                                   <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                                      <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                      <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                      <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                      <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                                   </div>
                                                   <!--end::Highlight meter-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Hint-->
                                                <div class="text-muted">
                                                   Use 8 or more characters with a mix of letters, numbers & symbols.
                                                </div>
                                                <!--end::Hint-->
                                             </div>
                                             <!--end::Main wrapper-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                       <!--end::Scroll-->
                                       <!--begin::Actions-->
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
                                          <button type="submit" class="btn btn-primary">
                                          <span class="indicator-label">Submit</span>
                                          <span class="indicator-progress">Please wait...
                                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                          </span>
                                          </button>
                                       </div>
                                       <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--end::Modal - Add task-->
                     </div>
                     <!--end::Card toolbar-->
                  </div>
                  <!--end::Card toolbar-->
               </div>
               <!--end::Card header-->
               <!--begin::Card body-->
               <div class="card-body pt-0">
                  <!--begin::Table-->
                  <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example1">
                     <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                           <th class="min-w-125px">S No.</th>
                           <th class="min-w-125px">Name</th>
                           <th class="min-w-125px">Phone</th>
                           <th class="min-w-125px">Email</th>
                           <th class="min-w-125px">Status</th>
                           <th class="text-end min-w-100px">Actions</th>
                        </tr>
                     </thead>
                     <tbody class="text-gray-600 fw-semibold">
                        @if( !empty($settings) )
                        @foreach($settings as $key => $setting)
                           @php
                              $status = $setting->is_active;
                              if($status == 1 ){
                                 $status = "Enabled";
                                 $class 	= "success";
                              }else{
                                 $status = "Disabled";
                                 $class 	= "danger";
                              }
                           @endphp
                        <tr>
                           <td>{{ $key+1 }}</td>
                           <td>{{ $setting->name }}</td>
                           <td>{{ $setting->phone }}</td>
                           <td>{{ $setting->email }}</td>
                           <td>
                              <div class="badge badge-light-{{ $class }} fw-bold">{{ $status }}</div>
                           </td>
                           <td class="text-end">
                              <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                              <i class="ki-duotone ki-down fs-5 ms-1"></i>
                              </a>
                              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                 <div class="menu-item px-3">
                                    <a href="{{ url('/admin/add-admin/enable-status/'.$setting->id) }}" class="menu-link px-3">Enable</a>
                                 </div>
                                 <div class="menu-item px-3">
                                    <a href="{{ url('/admin/add-admin/disable-status/'.$setting->id) }}" class="menu-link px-3">Disable</a>
                                 </div>
                                 <div class="menu-item px-3">
                                    <a href="{{ url('/admin/system-admin-manage/'.$setting->id) }}" class="menu-link px-3">Edit</a>
                                 </div>
                              </div>
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
            <!--end::Products-->
            <!--begin::Products-->
            <div class="card card-flush">
               <div class="card-header">
                  <h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">System Manager</h2>
               </div>
               @if(session()->has('status-message'))
               <div class="card-header display-message">
                  <div class="alert alert-success">
                     {{ session()->get('status-message') }}
                  </div>
               </div>
               @endif
               @if(session()->has('status-error'))
               <div class="card-header display-message">
                  <div class="alert alert-danger">
                     {{ session()->get('status-error') }}
                  </div>
               </div>
               @endif
               <!--begin::Card header-->
               <div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-5">
                  <!--begin::Card title-->
                  
                  <div class="card-title">
                     <!--begin::Search-->
                     <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                        <input type="text" data-kt-filter2="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
                     </div>
                     <!--end::Search-->
                  </div>
                  <!--end::Card title-->
                  <!--begin::Card toolbar-->
                  <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                     <!--begin::Card toolbar-->
                     <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                           <!--begin::Add Country-->
                           <a href="{{ url('/admin/view-manager-roles') }}" class="btn btn-primary me-5">
                           <i class="ki-duotone ki-plus fs-2"></i>View Roles
                           </a>
                           <!--end::Add Country-->
                           <!--begin::Add Country-->
                           <a href="{{ url('/admin/add-system-manager') }}" class="btn btn-primary">
                           <i class="ki-duotone ki-plus fs-2"></i>Add Manager
                           </a>
                           <!--end::Add Country-->
                        </div>
                        <!--end::Toolbar-->
                     </div>
                     <!--end::Card toolbar-->
                  </div>
                  <!--end::Card toolbar-->
               </div>
               <!--end::Card header-->
               <!--begin::Card body-->
               <div class="card-body pt-0">
                  <!--begin::Table-->
                  <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example1">
                     <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                           <th class="min-w-125px">S No.</th>
                           <th class="min-w-125px">Name</th>
                           <th class="min-w-125px">Phone</th>
                           <th class="min-w-125px">Email</th>
                           <th class="min-w-125px">Status</th>
                           <th class="text-end min-w-100px">Actions</th>
                        </tr>
                     </thead>
                     <tbody class="text-gray-600 fw-semibold">
                        
                        @if( !empty($system_users) )
                        @foreach($system_users as $key => $system_user)
                           @php
                              $status = $system_user->is_active;
                              if($status == 1 ){
                                 $status = "Enabled";
                                 $class   = "success";
                              }else{
                                 $status = "Disabled";
                                 $class   = "danger";
                              }
                           @endphp
                        <tr>
                           <td>{{ $key+1 }}</td>
                           <td>{{ $system_user->name }}</td>
                           <td>{{ $system_user->phone }}</td>
                           <td>{{ $system_user->email }}</td>
                           <td>
                              <div class="badge badge-light-{{ $class }} fw-bold">{{ $status }}</div>
                           </td>
                           <td class="text-end">
                              <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                              <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                              <!--begin::Menu-->
                              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3">
                                    <a href="{{ url('/admin/system-manager/enable-status/'.$system_user->id) }}" class="menu-link px-3">Enable</a>
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3">
                                    <a href="{{ url('/admin/system-manager/disable-status/'.$system_user->id) }}" class="menu-link px-3">Disable</a>
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3">
                                    <a href="{{ url('/admin/edit-system-manager/'.$system_user->id) }}" class="menu-link px-3">Edit</a>
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
            <!--end::Products-->
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