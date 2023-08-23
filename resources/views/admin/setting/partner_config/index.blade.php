@extends('admin.layouts.auth.app')



@section('content') 
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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Partner Config</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="/dasalon/admin/home.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->

											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Partner Config</li>
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
						@include('admin.setting.tab')
									<!--end::Navbar-->

									<div class="">

										<!--begin::Main column-->
										<div class="d-flex flex-column flex-row-fluid gap-7">

											<div class="card card-flush">
												<div class="card-header align-items-center py-5 gap-2 gap-md-5">
													<!--begin:::Tabs-->
													<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
														<!--begin:::Tab item-->
														<li class="nav-item">
															<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#partnerconfig1">Partner type & properties</a>
														</li>
														<!--end:::Tab item-->
														<!--begin:::Tab item-->
														<li class="nav-item">
															<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#partnerconfig2">Profile registration config</a>
														</li>
														<!--end:::Tab item-->
													</ul>
													<!--end:::Tabs-->
												</div>
											</div>

											<!--begin::Tab content-->
											<div class="tab-content">

												<!--begin::Tab pane-->
												<div class="tab-pane fade active show" id="partnerconfig1" role="tab-panel">

													<!--begin::Products-->
													<div class="card card-flush">
														<!--begin::Card header-->
														<div class="card-header align-items-center py-5 gap-2 gap-md-5">

															<!--begin::Card title-->
															<div class="card-title">
																<!--begin::Search-->
																<div class="d-flex align-items-center position-relative my-1">
																	<i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
																	<input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Report" />
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
																		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_2">
																		    <i class="ki-duotone ki-plus fs-2"></i>Add Property
																		</button>
																		<!--end::Add Country-->
																	</div>
																	<!--end::Toolbar-->
																	<!--begin::Modal - Add task-->
																	<div class="modal fade" tabindex="-1" id="kt_modal_scrollable_2">
																	    <div class="modal-dialog modal-dialog-scrollable">
																	        <div class="modal-content">
																	            <div class="modal-header">
																	                <h5 class="modal-title">Add Property</h5>

																	                <!--begin::Close-->
																	                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																	                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
																	                </div>
																	                <!--end::Close-->
																	            </div>

																	            <div class="modal-body">
																	                <!--begin::Form-->
																					<form class="form" name="partnertypeproperty_form" method="post" action="">
																						<!--begin::Scroll-->
																						<div class="d-flex flex-column scroll-y me-n7 pe-7">

																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="required fw-semibold fs-6 mb-2">Property name</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<input type="text" name="property" id="property" class="form-control mb-3 mb-lg-0" placeholder="Property name" required/>
																								<!--end::Input-->
																							</div>
																							<!--end::Input group-->

																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="required fw-semibold fs-6 mb-2">Remarks</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<input type="text" name="remark" id="remark" class="form-control mb-3 mb-lg-0" placeholder="Remarks" required/>
																								<!--end::Input-->
																							</div>
																							<!--end::Input group-->
																							
																							
																							
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="required fw-semibold fs-6 mb-2">Options</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<select name="option" id="option" aria-label="Select an Option" data-control="select2" data-placeholder="Select a Option..." class="form-select mb-2" required>
																								<option></option>
																								<option value="no-option">No-Option</option>
																								<option value="dropdown">Dropdown </option>
																								<option value="checkbox">Checkbox</option>																					
																							</select>
																								<!--end::Input-->
																							</div>




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
															<table class="table align-middle table-row-dashed fs-6 gy-5" id="partnertypeproperties-table">
																<thead>
																
																	<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
																		<th class="min-w-125px">Properties</th>
																		<th class="min-w-125px">Remarks</th>
																		@foreach($showall as $show)
																		<th class="min-w-125px">{{$show->partner_name}}</th>
																		@endforeach 
																	</tr>
																		 
																</thead>
																<tbody class="text-gray-600 fw-semibold">
																@foreach($showallp as $showp)
																<tr>
																
																<td>{{$showp->property}}</td>  
                                                                <td>@if($showp->option=='checkbox')
																	<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																
																@elseif($showp->option=='dropdown')
																
																	<select class="form-select" data-control="select2" data-placeholder="Select an option">
																			    <option></option>
																			    <option value="1">within 5KM</option>
																			    <option value="2">within 10KM</option>
																			    <option value="3">within 20KM</option>
																			    <option value="4">within city</option>
																			</select>
																
																@else  {{$showp->remark}}
																@endif
																</td>  
                                                                @foreach($showall as $show)
																<td>
																	@if($show->partner_name)
																 <div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
 																	@endif
																 </td>  
																 @endforeach
																  
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
												<!--end::Tab pane-->

												<!--begin::Tab pane-->
												<div class="tab-pane fade" id="partnerconfig2" role="tab-panel">

													<!--begin::Products-->
													<div class="card card-flush">

														<!--begin::Card header-->
														<div class="card-header align-items-center pb-5 gap-2 gap-md-5">
															<!--begin::Card title-->
															<div class="card-title">
																<!--begin::Search-->
																<div class="d-flex align-items-center position-relative my-1">
																	<i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
																	<input type="text" data-kt-filter2="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Report" id="search_role"/>
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
																		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_1">
																		    <i class="ki-duotone ki-plus fs-2"></i>Add role
																		</button>
																		<!--end::Add Country-->
																	</div>
																	<!--end::Toolbar-->
																	<!--begin::Modal - Add task-->
																	<div class="modal fade" tabindex="-1" id="kt_modal_scrollable_1">
																	    <div class="modal-dialog modal-dialog-scrollable">
																	        <div class="modal-content">
																	            <div class="modal-header">
																	                <h5 class="modal-title">Add role</h5>

																	                <!--begin::Close-->
																	                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																	                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
																	                </div>
																	                <!--end::Close-->
																	            </div>

																	            <div class="modal-body">
																	                <!--begin::Form-->
																					<form class="form" name="role_form" method="post" action="">
																						<!--begin::Scroll-->
																						<div class="d-flex flex-column scroll-y me-n7 pe-7">

																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="required fw-semibold fs-6 mb-2">Role name</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<input type="text" name="role_name" id="role_name" class="form-control mb-3 mb-lg-0" placeholder="Partner display name"/>
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
															<table class="table align-middle table-row-dashed fs-6 gy-5" id="role-table">
																<thead>
																	<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
																		<th class="min-w-125px">S No.</th>
																		<th class="min-w-125px">Role name</th>
																		<th class="min-w-125px">Status</th>
																	</tr>
																</thead>
																<tbody class="text-gray-600 fw-semibold">
																</tbody>
															</table>
														<!--end::Table-->
														</div>
														<!--end::Card body-->

													</div>
													<!--end::Products-->


													<!--begin::Products-->
													<div class="card card-flush mt-8">

														<div class="card-header">
															<h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Profile and Feature</h2>
														</div>

														<!--begin::Card header-->
														<div class="card-header align-items-center py-5 gap-2 gap-md-5">
															<!--begin::Card title-->
															<div class="card-title">
																<!--begin::Search-->
																<div class="d-flex align-items-center position-relative my-1">
																	<i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
																	<input type="text" data-kt-filter3="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Report" />
																</div>
																<!--end::Search-->
															</div>
															<!--end::Card title-->
														</div>
														<!--end::Card header-->

														<!--begin::Card body-->
														<div class="card-body pt-0">
															<!--begin::Table-->
															<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example3">
																<thead>
																	<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
																		<th class="min-w-125px">S No.</th>
																		<th class="min-w-125px">Features</th>
																		<th class="min-w-125px">Owner</th>
																		<th class="min-w-125px">Manager</th>
																		<th class="min-w-125px">Staff</th>
																	</tr>
																</thead>
																<tbody class="text-gray-600 fw-semibold">
																	<tr>
																		<td>1</td>
																		<td>Registration</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td>2</td>
																		<td>Service set up </td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td>3</td>
																		<td>da Salon Membership</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td>4</td>
																		<td>Custom set up</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td>5</td>
																		<td>Packages</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td>6</td>
																		<td>Clients list</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																		<td>
																			<div class="form-check form-switch form-check-custom form-check-solid me-10">
																				<input class="form-check-input h-25px w-50px" name="" type="checkbox" value="" id="status" checked="checked" />
																				<label class="form-check-label" for="status"></label>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
															<!--end::Table-->

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


								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->

						</div>
						<!--end::Content wrapper-->
					</div>



  @endsection
  
  @push('scripts')
    
<script>
// Wait for the DOM to be ready
$(function() {
 
  $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
	
   $('#role-table').DataTable({
   processing: true,
   serverSide: true,
   pageLength: 10,
   filter: true,
   lengthChange: false,
   ajax: '{{ route("role.getAjaxList") }}',
   columns: [
      { data: 'id' },
      { data: 'role_name' },
	  { data: 'status' },
   ]
});
oTable1 = $('#role-table').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
$('#search_role').keyup(function(){
      oTable1.search($(this).val()).draw() ;
})
  $("form[name='role_form']").validate({
    rules: {
      role_name: "required",
	},
   
    submitHandler: function(form) {
     var formData = {
      role_name: $("#role_name").val(),
    };
	console.log(formData);
	  $.ajax({
				url:'{{ url('admin/save_role')}}',
				data: formData,
				type: "POST",
				success:function(data)
				{
				  document.role_form.reset();
				  $('#kt_modal_scrollable_1').modal('hide');
				  $('#role-table').DataTable().ajax.reload();
				  swal("Your role created successfully!", {
					icon: "success",
				  });
				}
				});
		}
  });
});
 $(document).on('click', '.on_status', function(){
        event.preventDefault();
        var id = $(this).attr('id');
        var data_id = $(this).attr('data-id');
        swal({
          title: "Are you sure?",
          text: "To change status this role?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if(willDelete){
            $.ajax({
            url:'{{ url('admin/setting/edit-role-status')}}'+'/' + id+'/'+data_id,
            type:'GET',
                beforeSend:function(){
                  $('.spinner-cls').show();
            },
                success:function(data)
                {
                  $('.spinner-cls').hide();
                  swal("Your role status has been changed!", {
                icon: "success",
              });
                $('#role-table').DataTable().ajax.reload();
                }
            });
          }
          });
        });
    </script>

<script>
// Wait for the DOM to be ready
$(function() {
	
oTable2 = $('#partnertypeproperties-table').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
$('#search_partnertypeproperty').keyup(function(){
      oTable2.search($(this).val()).draw() ;
})
  $("form[name='partnertypeproperty_form']").validate({
    rules: {
      property: "required",
	  remark: "required",
	  option: "required",
	},
   
    submitHandler: function(form) {
     var formData = {
      property: $("#property").val(),
	  remark: $("#remark").val(),
	  option: $("#option").val(),
    };
	console.log(formData);
	  $.ajax({
				url:'{{ url('admin/save_partnertypeproperty')}}',
				data: formData,
				type: "POST",
				success:function(data)
				{
				  document.partnertypeproperty_form.reset();
				  $('#kt_modal_scrollable_2').modal('hide');
				  $('#partnertypeproperties-table').DataTable().ajax.reload();
				  swal("Your partner type property created successfully!", {
					icon: "success",
				  });
				}
				});
		}
  });
});

    </script>
	@endpush
	
	