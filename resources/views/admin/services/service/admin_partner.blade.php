<div class="tab-pane fade" id="serviceconfig2" role="tab-panel">

	<!--begin::Products-->
	<div class="card card-flush">

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

				<div class="m-0">
					<!--begin::Export dropdown-->
					<button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
						<i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span class="path2"></span></i>
						Export Report 
					</button>
					<!--begin::Menu-->
					<div id="kt_datatable_example_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
						<!--begin::Menu item-->
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="{{url('admin/servicebypartner/export')}}" class="menu-link px-3" data-kt-export="csv">
							Export as CSV
							</a>
						</div>
						<!--end::Menu item-->
					</div>
					<!--end::Menu-->
					<!--end::Export dropdown-->
				</div>

			</div>

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
						<th class="min-w-125px">No. of partner</th>
						<th class="min-w-125px">Status</th>
						<th class="text-end min-w-100px">Actions</th>
					</tr>
				</thead>
				<tbody class="text-gray-600 fw-semibold">
                    @php
					$j=1;
					@endphp
					@foreach($service_by_partner as $partner_data)
					@php
						$is_active = ($partner_data->is_active == '1') ? "enable" : "disable";
						//echo $partner_data->serviceid;die;
					@endphp
					<tr>
						<td>{{$j++}}</td>
						<td>{{$partner_data->servicename}}</td>
						<td>{{$partner_data->category}}</td>
						<td>{{$partner_data->servicesubcategory}}</td>
						<td>
							<a href="#">
								10
							</a>
						</td>
						<td>
							<div class="badge {{ $is_active == 'enable' ? 'badge-light-success' : 'badge-light-danger' }} fw-bold">{{$is_active}}</div>
						</td>
						<td class="text-end">
							<a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
							<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="{{url('admin/servicebypartner/enable-status/'.$partner_data->serviceid)}}" class="menu-link px-3">Enable</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="{{url('admin/servicebypartner/disable-status/'.$partner_data->serviceid)}}" class="menu-link px-3">Disable</a>
								</div>
								<!--end::Menu item-->
								<div class="menu-item px-3">
									<a href="" data-bs-toggle="modal" data-bs-target="#kt_modal_service2" class="menu-link px-3 service_by_partner" partner_id="{{$partner_data->serviceid}}">Edit</a>
								</div>

							</div>
							<!--end::Menu-->
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<!--end::Table-->
		</div>
		<!--end::Card body-->

	</div>
	<!--end::Products-->

</div>

<div class="modal fade" tabindex="-1" id="kt_modal_service2">
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
						<form class="form" action="#" method="POST">
							<!--begin::Scroll-->
							@csrf
							<input type="hidden" name="partner_id" id="partner_id">
							<div class="d-flex flex-column scroll-y me-n7 pe-7">

								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="required fw-semibold fs-6 mb-2">Category</label>
									<!--end::Label-->
									<!--begin::Input-->
									<select class="form-select mb-2" data-control="select2" data-placeholder="Select a Category..." name="partner_category" id="partner_category">
									    <option></option>
										@foreach($service_by_partner as $patner_data)
										<option value="{{$patner_data->categoryid}}">{{$patner_data->category}}</option>
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
									<select class="form-select mb-2" data-control="select2" data-placeholder="Select a Sub Category..." name="partner_subcategory" id="partner_subcategory">
									    <option></option>
										@foreach($service_by_partner as $patner_data)
										<option value="{{$patner_data->subcategoryid}}">{{$patner_data->servicesubcategory}}</option>
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
									<textarea type="text" name="partner_description" id="partner_description" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Description" value="Description" rows="4" cols="50"></textarea>
									<!--end::Input-->
								</div>
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="required fw-semibold fs-6 mb-2">Service Name</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" name="partner_servicename" id="partner_servicename"class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Service name" value="Hair Cut Style" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->

							</div>
							<!--end::Scroll-->

							<!--begin::Actions-->
							<div class="modal-footer">
				                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
				                <button type="button" class="btn btn-primary servicebypartner-button">
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
@push('scripts')
<script>
	jQuery(document).on('click', '.service_by_partner', function(){
        event.preventDefault();
        var partner_id = $(this).attr('partner_id');
        $.ajax({
            url:'{{url("admin/servicebypartner/edit-service")}}'+'/' + partner_id,
            type:'GET',
            dataType: 'json',
             beforeSend:function(){
                     $('.spinner-cls').show();
             },
             success:function(data)
                {
                  $('.spinner-cls').hide();
                  //console.log(data[0].categoryid);
                  $("#partner_category").val(data[0].categoryid).trigger('change');
                  $("#partner_subcategory").val(data[0].subcategoryid).trigger('change');
                  $("#partner_servicename").val(data[0].servicename);
                  $("#partner_description").val(data[0].servicename);
                  $("#partner_id").val(data[0].serviceid);              
                }
            });
        });
</script>
<script>
jQuery(document).on('click', '.servicebypartner-button', function() {
    var serviceId   = $('#partner_id').val(); 
    var category    = $('#partner_category').val(); 
    //alert(serviceId);
    var subcategory = $('#partner_subcategory').val(); 
    var servicename = $('#partner_servicename').val();
    var description = $('#partner_description').val();
    $.ajax({
        method: 'POST',
        url: '{{url("admin/servicebypartner/update-service")}}', 
        data: {
            _token: '{{ csrf_token() }}' ,
            partner_id			: serviceId,
            partner_category	: category,
            partner_subcategory	: subcategory,
            partner_servicename	: servicename,
            partner_description: description
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