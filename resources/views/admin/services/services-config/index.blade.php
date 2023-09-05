@extends('admin.layouts.auth.app')
@section('content')

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
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Service Config</h1>
               <!--end::Title-->
               <!--begin::Breadcrumb-->
               <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     <a href="{{ url('/admin/setting') }}" class="text-muted text-hover-primary">Home</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">Service Config</li>
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
            @include('admin.services.tab')
            <!--end::Navbar-->
            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7">
               <div class="card card-flush">
                  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                     <!--begin:::Tabs-->
                     <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#serviceconfig1">Service category and sub category</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#serviceconfig2">Services</a> 
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#serviceconfig3">Recommended package</a> 
                        </li>
                        <!--end:::Tab item-->
                     </ul>
                     <!--end:::Tabs-->
                  </div>
               </div>
               <!--begin::Tab content-->
               <div class="tab-content">
                  <!--begin::Tab pane-->
                  <div class="tab-pane fade active show" id="serviceconfig1" role="tab-panel">
                     <!--begin::Products-->
                     <div class="card card-flush">
                        <div class="card-header">
                           <h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Category</h2>
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
                        <!--begin::Card header-->
                        <div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-5">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <!--begin::Search-->
                              <div class="d-flex align-items-center position-relative my-1">
                                 <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                 <input type="text" data-kt-filter-subtable1="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
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
                                    <button type="button" class="btn btn-primary me-4" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable">
                                    <i class="ki-duotone ki-plus fs-2"></i>Add Category
                                    </button>
                                    <!--end::Add Country-->
                                 </div>
                                 <!--end::Toolbar-->
                                 <!--begin::Modal - Add task-->
                                 <div class="modal fade" tabindex="-1" id="kt_modal_scrollable">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title">Add Category</h5>
                                             <!--begin::Close-->
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                             <!--end::Close-->
                                          </div>
                                          <div class="modal-body">
                                             <!--begin::Form-->
                                             <form class="form" action = "{{ url('admin/services/servicecategory')}}" method = "post" >
                                             @csrf   
                                             <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7">
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label for="kt_docs_select2_country" class="form-label">Select a country</label>
                                                      <div class="form-floating border rounded">
                                                         <select class="form-select" name="country" placeholder="..." id="kt_docs_select2_country">
                                                            <option value="">Select Country</option>
                                                            @foreach(getCountryList() as $con_val)
                                                            <option value="{{$con_val->id}}" data-kt-select2-country="{{asset('/public/assets/media/flags/'.strtolower(str_replace(' ','-',$con_val->name.'.svg')))}}">{{$con_val->name}}</option>
                                                            @endforeach
                                                         </select>
                                                      </div>
                                                      <!--end::Input-->
                                                   </div>
                                                   <!--end::Input group-->
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label class="required fw-semibold fs-6 mb-2">Category</label>
                                                      <!--end::Label-->
                                                      <!--begin::Input-->
                                                      <input type="text" name="category" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Category"/>
                                                      <!--end::Input-->
                                                   </div>
                                                   <!--end::Input group-->
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7 d-flex flex-column">
                                                      <label class="required fw-semibold fs-6 mb-2">Category icon</label>
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
                                                            <input type="file" name="icon" accept=".png, .jpg, .jpeg" />
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
                                 <!--begin::Toolbar-->
                                 <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                    <!--begin::Add Country-->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_2">
                                    <i class="ki-duotone ki-plus fs-2"></i>Add Sub Category
                                    </button>
                                    <!--end::Add Country-->
                                 </div>
                                 <!--end::Toolbar-->
                                 <!--begin::Modal - Add task-->
                                 <div class="modal fade" tabindex="-1" id="kt_modal_scrollable_2">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title">Add Sub Category</h5>
                                             <!--begin::Close-->
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                             <!--end::Close-->
                                          </div>
                                          <div class="modal-body">
                                             <!--begin::Form-->
                                             <form class="form" action = "{{ url('admin/services/servicesubcategory')}}" method = "post" >
                                              @csrf
                                                <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7">
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label class="required fw-semibold fs-6 mb-2">Category</label>
                                                      <!--end::Label-->
                                                      <!--begin::Input-->
                                                      <select class="form-select mb-2" name="category" data-control="select2" data-placeholder="Select a Category...">
                                                      @foreach($sercat as $serc)  
                                                      <option></option>
                                                         <option value="{{$serc->id}}">{{$serc->category}}</option>
                                                         <!-- <option value="2">Face Care</option>
                                                         <option value="3">Nail</option> -->
                                                     @endforeach
                                                      </select>
                                                      <!--end::Input-->
                                                   </div>
                                                   <!--end::Input group-->
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label class="required fw-semibold fs-6 mb-2">Sub Category</label>
                                                      <!--end::Label-->
                                                      <!--begin::Input-->
                                                      <input type="text" name="subcategory" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Sub Category"/>
                                                      <!--end::Input-->
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
                           <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_docs_datatable_subtable1">
                              <!--begin::Table head-->
                              <thead>
                                 <!--begin::Table row-->
                                 <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-100px">S No.</th>
                                    <th class="min-w-150px">Country</th>
                                    <th class="min-w-150px">Category</th>
                                    <th class="min-w-150px">Icon</th>
                                    <th class="min-w-50px">Status</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                    <th class="text-end"></th>
                                 </tr>
                                 <!--end::Table row-->
                              </thead>
                              <!--end::Table head-->
                              <!--begin::Table body-->
                              <tbody class="fw-bold text-gray-600">
                              @if( !empty($sercat) )
                        @foreach($sercat as $key => $ser)
                           @php 
                              $status = $ser->is_active;
                              if($status == 1 ){
                                 $status = "Enabled";
                                 $class 	= "success";
                              }else{
                                 $status = "Disabled";
                                 $class 	= "danger";
                              }
                           @endphp
                         <!--begin::SubTable template-->
                         <tr data-kt-docs-datatable-subtable="subtable_template">
                           <td>{{ $key+1 }}</td>
                           <td>{{ $ser->country }}</td>
                           <td>{{ $ser->category }}</td>
                                
                                    
                                    <!-- <td>
                                       <div class="d-flex align-items-center gap-3">
                                          <div class="d-flex flex-column text-muted">
                                             <a href="#" class="text-dark text-hover-primary fw-bold" data-kt-docs-datatable-subtable="subcat_name">Sub category name</a>
                                          </div>
                                       </div>
                                    </td> -->
                                    <td>{{ $ser->icon }}</td>
                                    <td>
                                       <div class="badge badge-light-{{ $class }} fw-bold" data-kt-docs-datatable-subtable="subcat_status">{{ $status }}</div>
                                    </td>
                                 
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="{{ url('/admin/add-servicecategory/enable-status/'.$ser->id) }}" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="{{ url('/admin/add-servicecategory/disable-status/'.$ser->id) }}" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" data-bs-toggle="modal" data-bs-target="#kt_modal_cat" class="menu-link px-3">Edit</a>
                                          </div>
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                    <td>
                                       <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-docs-datatable-subtable="expand_row">
                                       <span class="svg-icon fs-3 m-0 toggle-off">...</span>
                                       <span class="svg-icon fs-3 m-0 toggle-on">...</span>
                                       </button>
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
                     <!--end::Products-->
                  </div>
                  <!--end::Tab pane-->
                  <!--begin::Tab pane-->
                  <div class="tab-pane fade" id="serviceconfig2" role="tab-panel">
                     <!--begin::Products-->
                     <div class="card card-flush">
                        <div class="card-header">
                           <h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Service name</h2>
                        </div>
                        @if(session()->has('messageservice'))
               <div class="card-header display-message">
                  <div class="alert alert-success">
                     {{ session()->get('messageservice') }}
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
                                 <input type="text" data-kt-filter3="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
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
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_3">
                                    <i class="ki-duotone ki-plus fs-2"></i>Add Service
                                    </button>
                                    <!--end::Add Country-->
                                 </div>
                                 <!--end::Toolbar-->
                                 <!--begin::Modal - Add task-->
                                 <div class="modal fade" tabindex="-1" id="kt_modal_scrollable_3">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title">Add Service</h5>
                                             <!--begin::Close-->
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                             <!--end::Close-->
                                          </div>
                                          <div class="modal-body">
                                             <!--begin::Form-->
                                             <form class="form" action = "{{ url('admin/services/addservice')}}" method = "post">
                                             @csrf   
                                             <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7">
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label class="required fw-semibold fs-6 mb-2">Category</label>
                                                      <!--end::Label-->
                                                      <!--begin::Input-->
                                                      <select class="form-select mb-2 select_category" name="category" data-control="select2" data-placeholder="Select a Category...">
                                                      @foreach($sercat as $serc)     
                                                      <option></option>
                                                         <option value="{{$serc->id}}">{{$serc->category}}</option>
                                                         <!-- <option value="2">Face Care</option>
                                                         <option value="3">Nail</option> -->
                                                     @endforeach
                                                      </select>
                                                      <!--end::Input-->
                                                   </div>
                                                   <!--end::Input group-->
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label class="required fw-semibold fs-6 mb-2">Sub category</label>
                                                      <!--end::Label-->
                                                      <!--begin::Input-->
                                                      <select class="form-select mb-2" name="dis_subcategory" id="dis_subcategory" data-control="select2" data-placeholder="Select a Sub Category...">
                                                         <!-- <option></option>
                                                         <option value="1">Hair Cut style</option>
                                                         <option value="2">Hair Color</option> -->
                                                      </select>
                                                      <!--end::Input-->
                                                   </div>
                                                   <!--end::Input group-->
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label class="required fw-semibold fs-6 mb-2">Service Name</label>
                                                      <!--end::Label-->
                                                      <!--begin::Input-->
                                                      <input type="text" name="servicename" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Service name"/>
                                                      <!--end::Input-->
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
                           <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example3">
                              <thead>
                                 <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">S No.</th>
                                    <th class="min-w-125px">Service name</th>
                                    <th class="min-w-125px">Category name</th>
                                    <th class="min-w-125px">Sub category name</th>
                                    <th class="min-w-125px">Status</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                 </tr>
                              </thead>
                              <tbody class="text-gray-600 fw-semibold">
                              @if( !empty($shares) )
                        @foreach($shares as $key => $share)
                           @php
                              $status = $share->is_active;
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
                                    <td>{{ $share->servicename }}</td>
                                    <td>{{ $share->category }}</td>
                                    <td>{{ $share->servicesubcategory }}</td>
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
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" data-bs-toggle="modal" data-bs-target="#kt_modal_service" class="menu-link px-3">Edit</a>
                                          </div>
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
                  <!--end::Tab pane-->
                  <!--begin::Tab pane-->
                  <div class="tab-pane fade" id="serviceconfig3" role="tab-panel">
                     <div class="card card-flush">
                        <form class="form">
                           <div class="card-body align-items-center py-10">
                              <h1 class="fw-bold text-dark mb-9">Add package</h1>
                              <div class="row">
                                 <div class="col-md-3 fv-row mb-7">
                                    <h3 class="card-title align-items-start flex-column">
                                       <span class="card-label fw-bold text-gray-800 mb-4">Package Name</span>
                                    </h3>
                                 </div>
                                 <div class="col-md-9">
                                    <div class="row">
                                       <div class="col-md-6 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Package name</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Package name" />
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                       <div class="col-md-6 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Gender</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <select aria-label="Gender" data-control="select2" data-placeholder="Gender..." class="form-select mb-2">
                                                <option></option>
                                                <option>Unisex</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                             </select>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3 fv-row mb-7">
                                    <h3 class="card-title align-items-start flex-column">
                                       <span class="card-label fw-bold text-gray-800 mb-4">Package Category</span>
                                    </h3>
                                 </div>
                                 <div class="col-md-9">
                                    <div class="row">
                                       <div class="col-md-6 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Category</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <select aria-label="Category" data-control="select2" data-placeholder="Category..." class="form-select mb-2">
                                                <option></option>
                                                <option>Hair</option>
                                                <option>Face care</option>
                                                <option>Nail</option>
                                             </select>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                       <div class="col-md-6 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Sub Category</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <select aria-label="Sub Category" data-control="select2" data-placeholder="Sub Category..." class="form-select mb-2">
                                                <option></option>
                                                <option>Hair Cut</option>
                                                <option>Hair Color</option>
                                             </select>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3 fv-row mb-7">
                                    <h3 class="card-title align-items-start flex-column">
                                       <span class="card-label fw-bold text-gray-800 mb-4">Add Service</span>
                                    </h3>
                                 </div>
                                 <div class="col-md-9">
                                    <div class="row">
                                       <div class="col-12 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Select Service</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                                                <option></option>
                                                <option value="1">Hair Cut Style</option>
                                                <option value="2">Children Hair Cut</option>
                                                <option value="3">Men Hair Cut</option>
                                                <option value="4">Women Hair Cut</option>
                                             </select>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3 fv-row mb-7">
                                    <h3 class="card-title align-items-start flex-column">
                                       <span class="card-label fw-bold text-gray-800 mb-4">Select Audience</span>
                                    </h3>
                                 </div>
                                 <div class="col-md-9">
                                    <div class="row">
                                       <div class="col-md-4 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Partner type</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                                                <option></option>
                                                <option value="1">Salon</option>
                                                <option value="2">Freelancer</option>
                                                <option value="3">Salon with home service</option>
                                             </select>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                       <div class="col-md-4 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Business type</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                                                <option></option>
                                                <option value="1">Beauty Salon</option>
                                                <option value="2">Hair Salon</option>
                                                <option value="3">Nail Salon</option>
                                                <option value="4">Manicure / Pedicure</option>
                                                <option value="3">Massage / Therapeut</option>
                                                <option value="3">Weight loss</option>
                                                <option value="3">Therapy center</option>
                                                <option value="3">Tattoo & Piercing</option>
                                                <option value="3">Waxing salon</option>
                                                <option value="3">Massage</option>
                                                <option value="3">Spa</option>
                                                <option value="3">General wellness</option>
                                                <option value="3">Aesthetics</option>
                                                <option value="3">Barbershop</option>
                                             </select>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                       <div class="col-md-4 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Unique id</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Unique id" />
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3 fv-row mb-7">
                                    <h3 class="card-title align-items-start flex-column">
                                       <span class="card-label fw-bold text-gray-800 mb-4">Discount</span>
                                    </h3>
                                 </div>
                                 <div class="col-md-9">
                                    <div class="row">
                                       <div class="col-md-4 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Discount</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Discount" />
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3 fv-row offset-md-3">
                                    <button type="submit" class="btn btn-primary mt-5">
                                       <!--begin::Indicator label-->
                                       <span class="indicator-label">Save</span>
                                       <!--end::Indicator label-->
                                       <!--begin::Indicator progress-->
                                       <span class="indicator-progress">Please wait...
                                       <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                       <!--end::Indicator progress-->
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                     <!--begin::Products-->
                     <div class="card card-flush mt-8">
                        <div class="card-header">
                           <h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Manage Package</h2>
                        </div>
                        <!--begin::Card header-->
                        <div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-5">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <!--begin::Search-->
                              <div class="d-flex align-items-center position-relative my-1">
                                 <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                 <input type="text" data-kt-filter-subtable2="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
                              </div>
                              <!--end::Search-->
                           </div>
                           <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_docs_datatable_subtable2">
                              <!--begin::Table head-->
                              <thead>
                                 <!--begin::Table row-->
                                 <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-50px">S No.</th>
                                    <th class="min-w-100px">Created</th>
                                    <th class="min-w-100px">Name</th>
                                    <th class="min-w-100px">Gender</th>
                                    <th class="min-w-50px">Discount</th>
                                    <th class="min-w-100px">Status</th>
                                    <th class="text-end min-w-100px">Action</th>
                                    <th class="text-end"></th>
                                 </tr>
                                 <!--end::Table row-->
                              </thead>
                              <!--end::Table head-->
                              <!--begin::Table body-->
                              <tbody class="fw-bold text-gray-600">
                                 <!--begin::SubTable template-->
                                 <tr data-kt-docs-datatable-subtable="subtable_template" class="d-none">
                                    <td></td>
                                    <td></td>
                                    <td>
                                       <div class="d-flex flex-column text-muted">
                                          <a href="#" class="text-dark text-hover-primary fw-bold" data-kt-docs-datatable-subtable="service_name">Service name</a>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="d-flex flex-column text-muted">
                                          <a href="#" class="text-dark text-hover-primary fw-bold" data-kt-docs-datatable-subtable="service_cat_name">Category name</a>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="d-flex flex-column text-muted">
                                          <a href="#" class="text-dark text-hover-primary fw-bold" data-kt-docs-datatable-subtable="service_subcat_name">Sub category name</a>
                                       </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                 </tr>
                                 <!--end::SubTable template-->
                                 <tr>
                                    <td>1</td>
                                    <td>10 Nov 2021, 10:30 am</td>
                                    <td>Hair cut, shampoo, blow dye</td>
                                    <td>Male</td>
                                    <td>20%</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                    <td>
                                       <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-docs-datatable-subtable="expand_row">
                                       <span class="svg-icon fs-3 m-0 toggle-off">...</span>
                                       <span class="svg-icon fs-3 m-0 toggle-on">...</span>
                                       </button>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>10 Nov 2020, 10:30 am</td>
                                    <td>Facial, D tan</td>
                                    <td>Female</td>
                                    <td>30%</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                    <td>
                                       <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-docs-datatable-subtable="expand_row">
                                       <span class="svg-icon fs-3 m-0 toggle-off">...</span>
                                       <span class="svg-icon fs-3 m-0 toggle-on">...</span>
                                       </button>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>10 Mar 2021, 10:30 am</td>
                                    <td>Manicure, Pedicure, Makeup</td>
                                    <td>Female</td>
                                    <td>10%</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                    <td>
                                       <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-docs-datatable-subtable="expand_row">
                                       <span class="svg-icon fs-3 m-0 toggle-off">...</span>
                                       <span class="svg-icon fs-3 m-0 toggle-on">...</span>
                                       </button>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>10 Nov 2020, 10:30 am</td>
                                    <td>Straightening, Rebonding</td>
                                    <td>Unisex</td>
                                    <td>15%</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                    <td>
                                       <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-docs-datatable-subtable="expand_row">
                                       <span class="svg-icon fs-3 m-0 toggle-off">...</span>
                                       <span class="svg-icon fs-3 m-0 toggle-on">...</span>
                                       </button>
                                    </td>
                                 </tr>
                              </tbody>
                              <!--end::Table body-->
                           </table>
                        </div>
                        <!--end::Card body-->
                     </div>
                     <!--end::Products-->
                  </div>
                  <!--end::Tab pane-->
               </div>
               <!--end::Tab content-->
            </div>
            <!--end::Main column-->
         </div>
         <!--end::Content container-->
      </div>
      <!--end::Content-->
   </div>
   <!--end::Content wrapper-->
</div>

<!--Edit Category modal -->
<div class="modal fade" tabindex="-1" id="kt_modal_cat">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Category</h5>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
       </div>
       <!--end::Close-->
    </div>

    <div class="modal-body">
     <!--begin::Form-->
     <form class="form">
      <!--begin::Scroll-->
      <div class="d-flex flex-column scroll-y me-n7 pe-7">

         <!--begin::Input group-->
         <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-2">Category</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Category" value="Hair" />
            <!--end::Input-->
         </div>
         <!--end::Input group-->

         <!--begin::Input group-->
         <div class="fv-row mb-7 d-flex flex-column">
            <label class="required fw-semibold fs-6 mb-2">Category icon</label>
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
              <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
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
<!--end::Modal -->

<!--Edit SubCategory modal -->
<div class="modal fade" tabindex="-1" id="kt_modal_subcat">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Sub Category</h5>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
       </div>
       <!--end::Close-->
    </div>

    <div class="modal-body">
     <!--begin::Form-->
     <form class="form">
      <!--begin::Scroll-->
      <div class="d-flex flex-column scroll-y me-n7 pe-7">

         <!--begin::Input group-->
         <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-2">Category</label>
            <!--end::Label-->
            <!--begin::Input-->
            <select class="form-select mb-2" data-control="select2" data-placeholder="Select a Category...">
              <option></option>
              <option value="1" selected>Hair</option>
              <option value="2">Face Care</option>
              <option value="3">Nail</option>
           </select>
           <!--end::Input-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-7">
         <!--begin::Label-->
         <label class="required fw-semibold fs-6 mb-2">Sub category</label>
         <!--end::Label-->
         <!--begin::Input-->
         <input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="sub category" value="Hair Color" />
         <!--end::Input-->
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
<!--end::Modal -->

<!--Edit service name modal -->
<div class="modal fade" tabindex="-1" id="kt_modal_service">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Service</h5>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
       </div>
       <!--end::Close-->
    </div>

    <div class="modal-body">
     <!--begin::Form-->
     <form class="form">
      <!--begin::Scroll-->
      <div class="d-flex flex-column scroll-y me-n7 pe-7">

         <!--begin::Input group-->
         <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-2">Category</label>
            <!--end::Label-->
            <!--begin::Input-->
            <select class="form-select mb-2" data-control="select2" data-placeholder="Select a Category...">
              <option></option>
              <option value="1" selected>Hair</option>
              <option value="2">Face Care</option>
              <option value="3">Nail</option>
           </select>
           <!--end::Input-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-7">
         <!--begin::Label-->
         <label class="required fw-semibold fs-6 mb-2">Sub category</label>
         <!--end::Label-->
         <!--begin::Input-->
         <select class="form-select mb-2" data-control="select2" data-placeholder="Select a Sub Category...">
           <option></option>
           <option value="1">Hair Cut style</option>
           <option value="2" selected>Hair Color</option>
        </select>
        <!--end::Input-->
     </div>
     <!--end::Input group-->

     <!--begin::Input group-->
     <div class="fv-row mb-7">
      <!--begin::Label-->
      <label class="required fw-semibold fs-6 mb-2">Service Name</label>
      <!--end::Label-->
      <!--begin::Input-->
      <input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Service name" value="Hair Cut Style" />
      <!--end::Input-->
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
<!--end::Modal -->

@endsection

@push('scripts')
<script type="text/javascript">
         function moreSubtable(table, dataIt, rowIt, nCol, tableNo, dateCh=false) {
            var datatable;
            var template;

            // Private methods
            let initDatatable = () => {
               // Set date data order
               if(dateCh) {
                  let tableRows = table.querySelectorAll('tbody tr');

                  tableRows.forEach(row => {
                     let dateRow = row.querySelectorAll('td');
                     let realDate = moment(dateRow[1].innerHTML, "DD MMM YYYY, LT").format(); // select date from 2nd column in table

                     // Skip template
                     if (!row.closest('[data-kt-docs-datatable-subtable="subtable_template"]')) {
                        dateRow[1].setAttribute('data-order', realDate);
                        dateRow[1].innerText = moment(realDate).fromNow();
                     }
                  });
               }

               // Get subtable template
               let subtable = document.querySelector('[data-kt-docs-datatable-subtable="subtable_template"]');
               template = subtable.cloneNode(true);
               template.classList.remove('d-none');

               // Remove subtable template
               subtable.parentNode.removeChild(subtable);

               // Init datatable --- more info on datatables: https://datatables.net/manual/
               datatable = $(table).DataTable({
                  "info": false,
                  'order': [],
                  "lengthChange": false,
                  'pageLength': (nCol-1),
                  'ordering': false,
                  'paging': false,
                  'columnDefs': [
                     { orderable: false, targets: 0 }, // Disable ordering on column 0 (checkbox)
                     { orderable: false, targets: (nCol-1) }, // Disable ordering on column 6 (actions)
                  ]
               });

               // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
               datatable.on('draw', function () {
                  resetSubtable();
                  handleActionButton();
               });
            }

            // Subtable data sample
            let data = dataIt;

            // Handle action button
            let handleActionButton = () => {
               let buttons = table.querySelectorAll('[data-kt-docs-datatable-subtable="expand_row"]');

               // Sample row items counter --- for demo purpose only, remove this variable in your project
               let rowItems = rowIt;
               console.log('hello', rowItems)
               buttons.forEach((button, index) => {
                  button.addEventListener('click', e => {
                     e.stopImmediatePropagation();
                     e.preventDefault();

                     let row = button.closest('tr');
                     let rowClasses = ['isOpen', 'border-bottom-0'];

                     // Get total number of items to generate --- for demo purpose only, remove this code snippet in your project
                     let demoData = [];

                     console.log('hello', rowItems)
                     for (var j = 0; j < rowItems[index]; j++) {
                        demoData.push(data[index][j]);
                     }
                     // End of generating demo data

                     // Handle subtable expanded state
                     if (row.classList.contains('isOpen')) {
                        // Remove all subtables from current order row
                        while (row.nextSibling && row.nextSibling.getAttribute('data-kt-docs-datatable-subtable') === 'subtable_template') {
                           row.nextSibling.parentNode.removeChild(row.nextSibling);
                        }
                        row.classList.remove(...rowClasses);
                        button.classList.remove('active');
                     } else {
                        populateTemplate(demoData.reverse(), row);
                        row.classList.add(...rowClasses);
                        button.classList.add('active');
                     }
                  });
               });
            }

            // Populate template with content/data -- content/data can be replaced with relevant data from database or API
            let populateTemplate = (data, target) => {
               data.forEach((d, index) => {
                  // Clone template node
                  let newTemplate = template.cloneNode(true);

                  if(tableNo === 1) {
                     // Select data elements
                     let name = newTemplate.querySelector('[data-kt-docs-datatable-subtable="subcat_name"]');
                     let status = newTemplate.querySelector('[data-kt-docs-datatable-subtable="subcat_status"]');

                     // Populate elements with data
                     name.innerText = d.name;
                     status.innerText = d.status;
                  }

                  if(tableNo === 2) {
                     // Select data elements
                     let name = newTemplate.querySelector('[data-kt-docs-datatable-subtable="service_name"]');
                     let cat = newTemplate.querySelector('[data-kt-docs-datatable-subtable="service_cat_name"]');
                     let subcat = newTemplate.querySelector('[data-kt-docs-datatable-subtable="service_subcat_name"]');

                     // Populate elements with data
                     name.innerText = d.name;
                     cat.innerText = d.cat;
                     subcat.innerText = d.subcat;
                  }

                  // New template border controller
                  // When only 1 row is available
                  if (data.length === 1) {
                     let borderClasses = ['rounded', 'rounded-end-0'];
                     newTemplate.querySelectorAll('td')[0].classList.add(...borderClasses);
                     borderClasses = ['rounded', 'rounded-start-0'];
                     newTemplate.querySelectorAll('td')[nCol-3].classList.add(...borderClasses);

                     // Remove bottom border
                     newTemplate.classList.add('border-bottom-0');
                  } else {
                     // When multiple rows detected
                     if (index === (data.length - 1)) { // first row
                        let borderClasses = ['rounded-start', 'rounded-bottom-0'];
                        newTemplate.querySelectorAll('td')[0].classList.add(...borderClasses);
                        borderClasses = ['rounded-end', 'rounded-bottom-0'];
                        newTemplate.querySelectorAll('td')[nCol-3].classList.add(...borderClasses);
                     }
                     if (index === 0) { // last row
                        let borderClasses = ['rounded-start', 'rounded-top-0'];
                        newTemplate.querySelectorAll('td')[0].classList.add(...borderClasses);
                        borderClasses = ['rounded-end', 'rounded-top-0'];
                        newTemplate.querySelectorAll('td')[nCol-3].classList.add(...borderClasses);

                        // Remove bottom border on last row
                        newTemplate.classList.add('border-bottom-0');
                     }
                  }

                  // Insert new template into table
                  let tbody = table.querySelector('tbody');
                  tbody.insertBefore(newTemplate, target.nextSibling);
               });
            }

            // Reset subtable
            let resetSubtable = () => {
               let subtables = document.querySelectorAll('[data-kt-docs-datatable-subtable="subtable_template"]');
               subtables.forEach(st => {
                  st.parentNode.removeChild(st);
               });

               let rows = table.querySelectorAll('tbody tr');
               rows.forEach(r => {
                  r.classList.remove('isOpen');
                  if (r.querySelector('[data-kt-docs-datatable-subtable="expand_row"]')) {
                     r.querySelector('[data-kt-docs-datatable-subtable="expand_row"]').classList.remove('active');
                  }
               });
            }

            initDatatable();
            handleActionButton();

            if(tableNo === 1) {
               let filterSearch = document.querySelector('[data-kt-filter-subtable1="search"]');
                 filterSearch.addEventListener('keyup', function (e) {
                     datatable.search(e.target.value).draw();
                 });
            }

            if(tableNo === 2) {
               let filterSearch = document.querySelector('[data-kt-filter-subtable2="search"]');
                 filterSearch.addEventListener('keyup', function (e) {
                     datatable.search(e.target.value).draw();
                 });
            }

         }

         var table1 = document.querySelector("#kt_docs_datatable_subtable1");
         let data1 = [
               [
                  {
                     name: 'Hair Color',
                     status: 'Enabled'
                  },
                  {
                     name: 'Hair Cut',
                     status: 'Enabled'
                  }
               ],
               [
                  {
                     name: 'D-Tan',
                     status: 'Enabled'
                  },
                  {
                     name: 'Face CleanUp',
                     status: 'Enabled'
                  }
               ],
               [
                  {
                     name: 'Nail subcat1',
                     status: 'Enabled'
                  },
                  {
                     name: 'Nail subcat2',
                     status: 'Enabled'
                  }
               ]
         ];
         let rowItems1 = [2, 2, 2];
         moreSubtable(table1, data1, rowItems1, 7, 1);

         var table2 = document.querySelector("#kt_docs_datatable_subtable2");
         let data2 = [
               [
                  {
                     name: 'Hair Dye',
                     cat: 'Hair',
                     subcat: 'Hair Color'
                  },
                  {
                     name: 'Shampoo',
                     cat: 'Hair',
                     subcat: 'Spa'
                  },
                  {
                     name: 'Hair Cut',
                     cat: 'Hair',
                     subcat: 'Hair Cut'
                  }
               ],
               [
                  {
                     name: 'Facial',
                     cat: 'Face Care',
                     subcat: 'Face Care subcat1'
                  },
                  {
                     name: 'D tan',
                     cat: 'Face Care',
                     subcat: 'Face Care subcat2'
                  }
               ],
               [
                  {
                     name: 'Manicure',
                     cat: 'Nails',
                     subcat: 'Nails Subcat1'
                  },
                  {
                     name: 'Pedicure',
                     cat: 'Nails',
                     subcat: 'Nails Subcat1'
                  },
                  {
                     name: 'Makeup',
                     cat: 'Face Care',
                     subcat: 'Face Care subcat1'
                  }
               ],
               [
                  {
                     name: 'Straightening',
                     cat: 'Hairs',
                     subcat: 'Hairs Subcat1'
                  },
                  {
                     name: 'Rebonding',
                     cat: 'Hairs',
                     subcat: 'Hairs Subcat2'
                  }
               ]
         ];
         let rowItems2 = [3, 2, 3, 2];
         moreSubtable(table2, data2, rowItems2, 8, 2, true);
         
      </script>
@endpush
