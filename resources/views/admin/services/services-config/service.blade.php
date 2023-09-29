<!--begin::Tab pane-->
<div class="card card-flush mt-8">
   <!--begin::Products-->
   <div class="card card-flush">
      <div class="card-header">
         <h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Service</h2>
      </div>
          @if(session()->has('messageservice'))
         <div class="card-header display-message">
            <div class="alert alert-success">
               {{ session()->get('messageservice') }}
            </div>
         </div>
         @endif
         @if(session()->has('messageus'))
         <div class="card-header display-message">
            <div class="alert alert-success">
               {{ session()->get('messageus') }}
            </div>
         </div>
         @endif
         @if(session()->has('messagestatus'))
         <div class="card-header display-message">
            <div class="alert alert-success">
               {{ session()->get('messagestatus') }}
            </div>
         </div>
         @endif
         @if(session()->has('errorstatus'))
         <div class="card-header display-message">
            <div class="alert alert-danger">
               {{ session()->get('errorstatus') }}
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
                     <form class="form" action = "#" method = "post">
                     @csrf  
                     <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7">
                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                              <!--begin::Label-->
                              <label class="required fw-semibold fs-6 mb-2">Category</label>
                              <!--end::Label-->
                              <!--begin::Input-->
                              <select class="form-select mb-2 select_category" name="category" id="category" data-control="select2" data-placeholder="Select a Category...">
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
                              <label class="required fw-semibold fs-6 mb-2">Sub category</label>
                              <!--end::Label-->
                              <!--begin::Input-->
                              <select class="form-select mb-2" name="dis_subcategory" id="dis_subcategory" data-control="select2" data-placeholder="Select a Sub Category...">
                              </select>
                              <!--end::Input-->
                           </div>
                           <!--end::Input group-->
                           <div class="fv-row mb-7">
                           <!--begin::Label-->
                           <label class="fw-semibold fs-6 mb-2">Description</label>
                           <!--end::Label-->
                           <!--begin::Input-->
                           <textarea type="text" name="description" id="description" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Description" value="Description" rows="4" cols="50"></textarea>
                           <!--end::Input-->
                        </div>
                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                              <!--begin::Label-->
                              <label class="required fw-semibold fs-6 mb-2">Service Name</label>
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input type="text" name="servicename"  id="servicename"class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Service name"/>
                              <!--end::Input-->
                           </div>
                           <!--end::Input group-->
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="modal-footer">
                           <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
                           <button type="button" class="btn btn-primary service-button">
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
                  $statusservice = $share->is_active;
                  if($statusservice==1){
                     $statusservice = "Enabled";
                     $class   = "success";
                  }else{
                     $statusservice = "Disabled";
                     $class   = "danger";
                  }
               @endphp  
            <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $share->servicename }}</td>
                  <td>{{ $share->category }}</td>
                  <td>{{ $share->servicesubcategory }}</td>
                  <td>
                    
                     <div class="badge badge-light-{{ $class }} fw-bold">{{ $statusservice }}</div>
                  </td>
                  <td class="text-end">
                     <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                     <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                     <!--begin::Menu-->
                     <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                           <a href="{{ url('/admin/add-service/enable-status/'.$share->serviceid) }}" class="menu-link px-3">Enable</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                           <a href="{{ url('/admin/add-service/disable-status/'.$share->serviceid) }}" class="menu-link px-3">Disable</a>
                        </div>
                        <!--end::Menu item-->
                        <div class="menu-item px-3">
                           <a href="javascript:void(0)" service-id="{{ $share->serviceid}}" data-bs-toggle="modal" data-bs-target="#kt_modal_service" class="menu-link px-3 edit-service">Edit</a>
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
@push('scripts')
<script>
jQuery(document).on('click', '.service-button', function() {
    var serviceId   = $('#service_id').val(); 
    var description   = $('#description').val(); 

    var category    = $('#category').val(); 
    var subcategory = $('#dis_subcategory').val(); 
    var servicename = $('#servicename').val();
    $.ajax({
        method: 'POST',
        url: '{{url("admin/services/addservice")}}', 
        data: {
            _token: '{{ csrf_token() }}' ,
            description: description,
            category: category,
            dis_subcategory: subcategory,
            servicename: servicename
        },
        success: function(response) {
        Swal.fire({
            text: response.message,
            icon: response.status === 'success' ? "success" : "error",
            buttonsStyling: !1,
            confirmButtonText: "Ok, got it!",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        }).then((result) => {
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