@extends('admin.layouts.auth.app')
@section('content')

<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
   <!--begin::Content wrapper-->
   <div class="d-flex flex-column flex-column-fluid">
      <!--begin::Toolbar-->
      <div id="kt_app_toolbar" class="app-toolbar pt-3 pt-lg-6">
         <!--begin::Toolbar container-->
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
                     <a href="{{ url('/admin/settings') }}" class="text-muted text-hover-primary">Home</a>
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
<!--begin::Main column-->
<div class="d-flex flex-column flex-row-fluid gap-7">

<!--begin::Tab content-->
<div class="tab-content">
            


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
<!--begin::Card header-->
<div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-5">

<!--begin::Card title-->
<div class="card-title">
   <!--begin::Search-->
   <div class="d-flex align-items-center position-relative my-1">
      <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
      <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report">
   </div>
   <!--end::Search-->
</div>
<!--end::Card title-->

<!--begin::Card toolbar-->
<div class="card-toolbar">
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
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 close_form" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <!--begin::Form-->
            <form class="form" action = "{{ url('admin/services/servicecategory')}}"  enctype="multipart/form-data" method = "post" >
            @csrf  
            <!--begin::Scroll-->
               <div class="d-flex flex-column scroll-y me-n7 pe-7">
                 
                  <!--begin::Input group-->
                  <div class="fv-row mb-7">
                     <!--begin::Label-->
                     <label class="required fw-semibold fs-6 mb-2">Category</label>
                     <!--end::Label-->
                     <!--begin::Input-->
                     <input type="text" name="category" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Category"   autocomplete="off" required/>
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
                           title="Please select icon">
                           <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                           <!--begin::Inputs-->
                           <input type="file" name="icon" accept=".png, .jpg, .jpeg" required/>
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

 </div>
<!--end::Card header-->

<!--begin::Card body-->
            <div class="card-body pt-0">

               <div id="kt_datatable_example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-4 dataTable no-footer" id="kt_datatable_example1">
                  <!--begin::Table head-->
                  <thead>
                     <!--begin::Table row-->
                     <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0"><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_datatable_example1" rowspan="1" colspan="1" aria-label="S No.: activate to sort column ascending" style="width: 108.344px;">S No.</th><th class="min-w-150px sorting" tabindex="0" aria-controls="kt_datatable_example1" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" style="width: 163.281px;">Country</th><th class="min-w-150px sorting" tabindex="0" aria-controls="kt_datatable_example1" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 163.281px;">Category</th><th class="min-w-150px sorting" tabindex="0" aria-controls="kt_datatable_example1" rowspan="1" colspan="1" aria-label="Icon: activate to sort column ascending" style="width: 163.281px;">Icon</th><th class="min-w-50px sorting" tabindex="0" aria-controls="kt_datatable_example1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 66.6719px;">Status</th><th class="text-end min-w-100px sorting" tabindex="0" aria-controls="kt_datatable_example1" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 109.141px;">Actions</th></tr>
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
      $class   = "success";
   }else{
      $status = "Disabled";
      $class   = "danger";
   }
@endphp
 <!--begin::SubTable template-->
 <tr>
   <td>{{ $key+1 }}</td>
   <td>{{ $ser->country }}</td>
   <td>{{ $ser->category }}</td>
            <td>
         @if( !empty( $ser->icon) )
            <img id="avatar" name="avatar" accept=".png, .jpg, .jpeg" src="{{asset('/public/uploads/category')}}/{{ $ser->icon }}" style="width: 2em;"/>
         @endif
            </td>
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
                     <a href="javascript:void(0)" category-id="{{ $ser->id}}" data-bs-toggle="modal" data-bs-target="#kt_modal_cat" class="menu-link px-3 edit-category">Edit</a>
                  </div>
               </div>
               <!--end::Menu-->
            </td>
      
         </tr>
         @endforeach
@endif
</tbody>
<!--end::Table body-->
</table></div></div>

</div>
<!--end::Card body-->

</div>
<!--end::Products-->

<!--begin::Products-->
<div class="card card-flush mt-8">

<div class="card-header">
<h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Sub Category</h2>
</div>
@if(session()->has('messagesubcat'))
<div class="card-header display-message">
<div class="alert alert-success">
   {{ session()->get('messagesubcat') }}
</div>
</div>
@endif
@if(session()->has('messagessc'))
<div class="card-header display-message">
<div class="alert alert-success">
   {{ session()->get('messagessc') }}
</div>
</div>
@endif
@if(session()->has('errorssc'))
<div class="card-header display-message">
<div class="alert alert-danger">
   {{ session()->get('errorssc') }}
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
      <input type="text" data-kt-filter2="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report">
   </div>
   <!--end::Search-->
</div>
<!--end::Card title-->

<!--begin::Card toolbar-->
<div class="card-toolbar">
   <!--begin::Add Country-->
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_2">
       <i class="ki-duotone ki-plus fs-2"></i>Add Sub Category
   </button>
   <!--end::Add Country-->
</div>
<!--end::Toolbar-->


<div class="modal fade" tabindex="-1" id="kt_modal_scrollable_2">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title">Add Sub Category</h5>
                                             <!--begin::Close-->
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 close_form" data-bs-dismiss="modal" aria-label="Close">
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
                                                      @foreach($catactive as $serc)  
                                                      <option></option>
                                                         <option value="{{$serc->id}}">{{$serc->category}}</option>
                                       
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





                                       </div>
                                       <!--end::Card header-->

                                       <!--begin::Card body-->
                                       <div class="card-body pt-0">

                                          <div id="kt_datatable_example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-4 dataTable no-footer" id="kt_datatable_example2">
                                             <!--begin::Table head-->
                                             <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0"><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_datatable_example2" rowspan="1" colspan="1" aria-label="S No.: activate to sort column ascending" style="width: 108.344px;">S No.</th><th class="min-w-150px sorting" tabindex="0" aria-controls="kt_datatable_example2" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending" style="width: 163.281px;">Country</th><th class="min-w-150px sorting" tabindex="0" aria-controls="kt_datatable_example2" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 163.281px;">Category</th><th class="min-w-150px sorting" tabindex="0" aria-controls="kt_datatable_example2" rowspan="1" colspan="1" aria-label="Subcategory: activate to sort column ascending" style="width: 163.281px;">Subcategory</th><th class="min-w-50px sorting" tabindex="0" aria-controls="kt_datatable_example2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 66.6719px;">Status</th><th class="text-end min-w-100px sorting" tabindex="0" aria-controls="kt_datatable_example2" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 109.141px;">Actions</th></tr>
                                                <!--end::Table row-->
                                             </thead>
                                             <!--end::Table head-->


                                             <!--begin::Table body-->
                                             <tbody class="fw-bold text-gray-600">

                                                


                                                  @if( !empty($serSubcat) )
                                             @foreach($serSubcat as $sKey => $serSub)
                                                @php 
                                                   $statusS = $serSub->status;
                                                   if($statusS == 1 ){
                                                      $statusS = "Enabled";
                                                      $classS   = "success";
                                                   }else{
                                                      $statusS = "Disabled";
                                                      $classS   = "danger";
                                                   }
                                                @endphp 

                                             <tr class="odd">
                                                   <td>{{ $sKey+1 }}</td>
                                                   <td>{{$serSub->country}}</td>
                                                   <td>{{$serSub->category}}</td>
                                                   <td data-order="Invalid date">{{$serSub->servicesubcategory}}</td>
                                                   <td>
                                                      <div class="badge badge-light-{{$classS}} fw-bold">{{$statusS }}</div>
                                                   </td>
                                                   <td class="text-end">
                                                      <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                      <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                      <!--begin::Menu-->
                                                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="{{ url('/admin/subcategory/enable-status/'.$serSub->servicesubcategoryid ) }}" class="menu-link px-3">Enable</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <!--begin::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="{{ url('/admin/subcategory/disable-status/'.$serSub->servicesubcategoryid ) }}" class="menu-link px-3">Disable</a>
                                                         </div>
                                                         <!--end::Menu item-->
                                                         <div class="menu-item px-3">
                                                            <a href="javascript:void(0)" subcategory-id="{{ $serSub->servicesubcategoryid}}" data-bs-toggle="modal" data-bs-target="#kt_modal_subcat" class="menu-link px-3 edit-subcategory">Edit</a>
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
                                    </div>

                                 </div>
                                       <!--end::Card body-->

                              </div>
                                    <!--end::Products-->

                        </div>

                  </div>
                        <!--end::Content-->
            </div>
<!--end::Content wrapper-->
@include('admin.services.services-config.service')
<!--Edit Category modal -->
<div class="modal fade" tabindex="-1" id="kt_modal_cat">
          <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Edit Category</h5>

                      <!--begin::Close-->
                      <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 close_form" data-bs-dismiss="modal" aria-label="Close">
                          <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                      </div>
                      <!--end::Close-->
                  </div>

                  <div class="modal-body">
                      <!--begin::Form-->
                  <form class="form"  method="post" action="{{ url('admin/update-servicecategory')}}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="category_id" id="category_id">
                     <!--begin::Scroll-->
                     <div class="d-flex flex-column scroll-y me-n7 pe-7">

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                           <!--begin::Label-->
                           <label class="required fw-semibold fs-6 mb-2">Category</label>
                           <!--end::Label-->
                           <!--begin::Input-->
                           <input type="text" id="category" name="category" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Category" />
                           <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-7 d-flex flex-column">
                           <label class="required fw-semibold fs-6 mb-2">Category icon</label>
                           <div class="image-input image-input-empty" data-kt-image-input="true">
                               <!--begin::Image preview wrapper-->
                               <div class="image-input-wrapper w-125px h-125px edit-cat-icon"></div>
                               <!--end::Image preview wrapper-->

                               <!--begin::Edit button-->
                               <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                               data-kt-image-input-action="change"
                               data-bs-toggle="tooltip"
                               data-bs-dismiss="click"
                               title="Change avatar">
                                   <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>

                                   <!--begin::Inputs-->
                                   <input type="file" id="avatar" name="avatar" accept=".png, .jpg, .jpeg" />
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
                      <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 close_form" data-bs-dismiss="modal" aria-label="Close">
                          <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                      </div>
                      <!--end::Close-->
                  </div>

                  <div class="modal-body">
                      <!--begin::Form-->
                  <form class="form" method="post" action="{{ url('admin/update-servicesubcategory')}}" >
                      @csrf

                      <input type="hidden" name="subcategory_id" id="subcategory_id">
                     <!--begin::Scroll-->
                     <div class="d-flex flex-column scroll-y me-n7 pe-7">

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                           <!--begin::Label-->
                           <label class="required fw-semibold fs-6 mb-2">Category</label>
                           <!--end::Label-->
                           <!--begin::Input-->
                          
                           <select class="form-select mb-2" name="scategory" id="scategory" data-control="select2" data-placeholder="Select a Category...">
                              
                               <option></option>
                                 @foreach($catactive as $ca)
                               <option value="{{$ca->id}}">{{$ca->category}}</option>
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
                           <input type="text" name="subcategory" id="subcategory" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="sub category" value="Hair Color" />

                          
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
                      <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 close_form" data-bs-dismiss="modal" aria-label="Close">
                          <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                      </div>
                      <!--end::Close-->
                  </div>

                  <div class="modal-body">
                      <!--begin::Form-->
                  <form class="form"method="post" action="#" >
                  @csrf
                  <input type="hidden" name="service_id" id="service_id">  
                  <!--begin::Scroll-->
                     <div class="d-flex flex-column scroll-y me-n7 pe-7">

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                           <!--begin::Label-->
                           <label class="required fw-semibold fs-6 mb-2">Category</label>
                           <!--end::Label-->
                           <!--begin::Input-->
                           <select class="form-select mb-2" name="edit_category" id="edit_category" data-control="select2" data-placeholder="Select a Category...">
                               @foreach($catactive as $serv)
                              <option value="{{$serv->id}}">{{$serv->category}}</option>
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
                           <select class="form-select mb-2  subcategoryid" name="edit_subcategory" id="edit_subcategory" data-control="select2" data-placeholder="Select a Sub Category...">
                              @foreach ($serSubcat as $data) {
                              <option value="{{$data->servicesubcategoryid}}">{{$data->servicesubcategory}}</option>
                              @endforeach
                           </select>
                           <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <div class="fv-row mb-7">
                           <!--begin::Label-->
                           <label class="fw-semibold fs-6 mb-2">Description</label>
                           <!--end::Label-->
                           <!--begin::Input-->
                           <textarea type="text" name="edit_description" id="edit_description" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Description" value="Description" rows="4" cols="50"></textarea>
                           <!--end::Input-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                           <!--begin::Label-->
                           <label class="required fw-semibold fs-6 mb-2">Service Name</label>
                           <!--end::Label-->
                           <!--begin::Input-->
                           <input type="text" name="edit_servicename" id="edit_servicename" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Service name" />
                           <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                     </div>
                     <!--end::Scroll-->

                     <!--begin::Actions-->
                     <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
                            <button type="button" class="btn btn-primary edit_service-button">
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
   $(document).on('click', '.edit-category', function(){
        event.preventDefault();
        var id = $(this).attr('category-id');
        
            $.ajax({
            url:"{{ url('admin/edit-servicecategory')}}"+'/' + id,
            type:'GET',
                beforeSend:function(){
                     $('.spinner-cls').show();
               },
                success:function(data)
                {
                  var img_path = "{{ asset('public/uploads/category/') }}";
                  $('.spinner-cls').hide();
                  $("#category").val(data.category);
                  $("#category_id").val(data.id);
                  $(".edit-cat-icon").css('background-image', 'url('+img_path+'/'+data.icon+')');
              
              
                $('#kt_docs_datatable_subtable1').DataTable().ajax.reload();
                }
            });
         });




   $(document).on('click', '.edit-subcategory', function(){
        event.preventDefault();
        var id = $(this).attr('subcategory-id');
        
            $.ajax({
            url:"{{ url('admin/edit-servicesubcategory')}}"+'/' + id,
            type:'GET',
                beforeSend:function(){
                     $('.spinner-cls').show();
               },
                success:function(data)
                {
                console.log("data", data)
                  $('.spinner-cls').hide();
                  $("#scategory").val(data.categoryid).trigger('change');
                  $("#subcategory").val(data.servicesubcategory);
                  $("#subcategory_id").val(data.servicesubcategoryid);
                $('#kt_datatable_example2').DataTable().ajax.reload();
                }
            });
         });

  

        $(document).on('click', '.edit-service', function(){
        event.preventDefault();
        var serviceid = $(this).attr('service-id');
            $.ajax({
            url:"{{ url('admin/edit-service')}}" +'/' + serviceid,
            type:'GET',
                beforeSend:function(){
                     $('.spinner-cls').show();
               },
                success:function(data)
                { 
                 
                  $('.spinner-cls').hide();
                  $("#edit_category").val(data[0].categoryid).trigger('change');
                  $("#edit_subcategory").val(data[0].subcategoryid).trigger('change');
                  $("#edit_servicename").val(data[0].servicename);
                  $("#service_id").val(data[0].serviceid); 
                  $("#edit_description").val(data[0].description);           
                  //$('#kt_datatable_example3').DataTable().ajax.reload();
                }
            });
        });



         function moreSubtable(table, dataIt, rowIt, nCol, tableNo, dateCh=false) {
            var datatable;
            var template;
            let initDatatable = () => {
               if(dateCh) {
                  let tableRows = table.querySelectorAll('tbody tr');

                  tableRows.forEach(row => {
                     let dateRow = row.querySelectorAll('td');
                     let realDate = moment(dateRow[1].innerHTML, "DD MMM YYYY, LT").format(); 
                     if (!row.closest('[data-kt-docs-datatable-subtable="subtable_template"]')) {
                        dateRow[1].setAttribute('data-order', realDate);
                        dateRow[1].innerText = moment(realDate).fromNow();
                     }
                  });
               }

               let subtable = document.querySelector('[data-kt-docs-datatable-subtable="subtable_template"]');
               template = subtable.cloneNode(true);
               datatable = $(table).DataTable({
                  "info": false,
                  'order': [],
                  "lengthChange": false,
                  'pageLength': (nCol-1),
                  'ordering': false,
                  'paging': false,
                  'columnDefs': [
                     { orderable: false, targets: 0 }, 
                     { orderable: false, targets: (nCol-1) }, 
                  ]
               });

               datatable.on('draw', function () {
                  resetSubtable();
                  handleActionButton();
               });
            }
            let data = dataIt;
            let handleActionButton = () => {
               let buttons = table.querySelectorAll('[data-kt-docs-datatable-subtable="expand_row"]');

               let rowItems = rowIt;
               console.log('hello', rowItems)
               buttons.forEach((button, index) => {
                  button.addEventListener('click', e => {
                     e.stopImmediatePropagation();
                     e.preventDefault();

                     let row = button.closest('tr');
                     let rowClasses = ['isOpen', 'border-bottom-0'];

                    
                     let demoData = [];

                     console.log('hello', rowItems)
                     for (var j = 0; j < rowItems[index]; j++) {
                        demoData.push(data[index][j]);
                     }
                     
                     if (row.classList.contains('isOpen')) {
                       
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
<script type="text/javascript">
    $(document).on('click', '.edit_service-button', function() {
          var serviceId   = $('#service_id').val(); 
          var category    = $('#edit_category').val();
          alert(category) 
          var subcategory = $('#edit_subcategory').val(); 
          var servicename = $('#edit_servicename').val();
          var description = $('#edit_description').val();
          $.ajax({
              method: 'POST',
              url: '{{url("admin/update-service")}}', 
              data: {
                  _token: '{{ csrf_token() }}' ,
                  service_id: serviceId,
                 edit_category: category,
                 edit_subcategory: subcategory,
                 edit_servicename: servicename,
                 edit_description :description
              },
              success: function(response) {
              Swal.fire({
                  text: response.message,
                  icon: response.status === 'success' ? "success" : "error",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: {
                      confirmButton: "btn btn-primary"
                  }}).then((result) => {
                   if (result.isConfirmed) {
                  location.reload();
               }
              });
              },
              error: function(error) {
                  console.error(error);
              }
          });
});          
</script>
@endpush