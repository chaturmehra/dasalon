@extends('admin.layouts.auth.app')



@section('content') 

@php
	$getPartnerType = getPartnerType();
@endphp
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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Amenity Config</h1>
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
											<li class="breadcrumb-item text-muted">Amenity Config</li>
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

									<div class="card card-flush">

										<!--begin::Main column-->
										<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

											<div class="card-header align-items-center py-5 gap-2 gap-md-5">
												<!--begin:::Tabs-->
												<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
													<!--begin:::Tab item-->
													<li class="nav-item">
														<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#amenityconfig1">Amenities config</a>
													</li>
													<!--end:::Tab item-->
													<!--begin:::Tab item-->
													<li class="nav-item">
														<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#amenityconfig2">Special attributes config</a>
													</li>
													<!--end:::Tab item-->
												</ul>
												<!--end:::Tabs-->
											</div>

											<!--begin::Tab content-->
											<div class="tab-content">

												<!--begin::Tab pane-->
												<div class="tab-pane fade active show" id="amenityconfig1" role="tab-panel">

													<!--begin::Products-->
													<div class="card card-flush mb-12">
														<!--begin::Card header-->
														<div class="card-header align-items-center pb-5 gap-2 gap-md-5">

															<!--begin::Card title-->
															<div class="card-title">
																<!--begin::Search-->
																<div class="d-flex align-items-center position-relative my-1">
																	<i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
																	<input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Report" id="amenity_search" />
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
																		    <i class="ki-duotone ki-plus fs-2"></i>Add Amenity
																		</button>
																		<!--end::Add Country-->
																	</div>
																	<!--end::Toolbar-->
																	<!--begin::Modal - Add task-->
																	<div class="modal fade" tabindex="-1" id="kt_modal_scrollable_1">
																	    <div class="modal-dialog modal-dialog-scrollable">
																	        <div class="modal-content">
																	            <div class="modal-header">
																	                <h5 class="modal-title">Add Amenity</h5>

																	                <!--begin::Close-->
																	                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																	                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
																	                </div>
																	                <!--end::Close-->
																	            </div>

																	            <div class="modal-body">
																	                <!--begin::Form-->
																					<form class="form" name='amenity-form' enctype="multipart/form-data">
																					<input type="hidden" id="amenity_type" name="amenity_type" value="1">
																						<!--begin::Scroll-->
																						<div class="d-flex flex-column scroll-y me-n7 pe-7">

																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="required fw-semibold fs-6 mb-2">Amenity name</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<input type="text" id="amenity_name" name="amenity_name" class="form-control mb-3 mb-lg-0" placeholder="Amenity name"/>
																								<!--end::Input-->
																							</div>
																							<!--end::Input group-->

																							<!--begin::Input group-->
																							<div class="fv-row mb-7 d-flex flex-column">
																								<label class="required fw-semibold fs-6 mb-2">Amenity icon</label>
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
																								        <input id="amenity_icon" type="file" name="amenity_icon" accept=".png, .jpg, .jpeg" />
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

																							<!--begin::Input group-->
																							
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="required fw-semibold fs-6 mb-2">Partner type</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<select id="partner_type" name="partner_type" class="form-select mb-2" data-control="select2" data-placeholder="Select a Partner type...">
																							    <option></option>
																							    @foreach($getPartnerType as $partnerinfo)
																								<option value="{{$partnerinfo->id}}">{{$partnerinfo->partner_name}}</option>
																								@endforeach
																								</select>
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
															<table class="table align-middle table-row-dashed fs-6 gy-5" id="amenities_table">
																<thead>
																	<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
																		<th class="min-w-125px">S No.</th>
																		<th class="min-w-125px">Amenity name</th>
																		<th class="min-w-125px">Partner type</th>
																		<th class="min-w-125px">Amenity icon</th>
																		<th class="min-w-125px">Status</th>
																		
																	</tr>
																</thead>
																<tbody>		
																	
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
												<div class="tab-pane fade" id="amenityconfig2" role="tab-panel">

													<!--begin::Products-->
													<div class="card card-flush mb-12">
														<!--begin::Card header-->
														<div class="card-header align-items-center pb-5 gap-2 gap-md-5">

															<!--begin::Card title-->
															<div class="card-title">
																<!--begin::Search-->
																<div class="d-flex align-items-center position-relative my-1">
																	<i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
																	<input type="text" data-kt-filter2="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Report" id="special_amenity_search" />
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
																		    <i class="ki-duotone ki-plus fs-2"></i>Add Special Attribute
																		</button>
																		<!--end::Add Country-->
																	</div>
																	<!--end::Toolbar-->
																	<!--begin::Modal - Add task-->
																	<div class="modal fade" tabindex="-1" id="kt_modal_scrollable_2">
																	    <div class="modal-dialog modal-dialog-scrollable">
																	        <div class="modal-content">
																	            <div class="modal-header">
																	                <h5 class="modal-title">Add Special attribute</h5>

																	                <!--begin::Close-->
																	                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																	                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
																	                </div>
																	                <!--end::Close-->
																	            </div>

																	            <div class="modal-body">
																	                <!--begin::Form-->
																					<form class="form" name='special-amenity-form' enctype="multipart/form-data">

																					<input type="hidden" id="special_amenity_type" name="special_amenity_type" value="2">
																						<!--begin::Scroll-->
																						<div class="d-flex flex-column scroll-y me-n7 pe-7">

																							<!--begin::Input group-->
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="required fw-semibold fs-6 mb-2">Special attribute name</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<input type="text" id="special_amenity_name" name="special_amenity_name" class="form-control mb-3 mb-lg-0" placeholder="Special attribute name"/>
																								<!--end::Input-->
																							</div>
																							<!--end::Input group-->

																							<!--begin::Input group-->
																							<div class="fv-row mb-7 d-flex flex-column">
																								<label class="required fw-semibold fs-6 mb-2">Amenity icon</label>
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
																								        <input id="special_amenity_icon" type="file" name="special_amenity_icon" accept=".png, .jpg, .jpeg" />
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

																							<!--begin::Input group-->
																							
																							<div class="fv-row mb-7">
																								<!--begin::Label-->
																								<label class="required fw-semibold fs-6 mb-2">Partner type</label>
																								<!--end::Label-->
																								<!--begin::Input-->
																								<select id="special_partner_type" name="special_partner_type" class="form-select mb-2" data-control="select2" data-placeholder="Select a Partner type...">
																							    <option></option>
																							    @foreach($getPartnerType as $partnerinfo)
																								<option value="{{$partnerinfo->id}}">{{$partnerinfo->partner_name}}</option>
																								@endforeach
																								</select>
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
															<table class="table align-middle table-row-dashed fs-6 gy-5" id="special_amenities_table">
																<thead>
																	<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
																		<th class="min-w-125px">S No.</th>
																		<th class="min-w-125px">Amenity name</th>
																		<th class="min-w-125px">Partner type</th>
																		<th class="min-w-125px">Amenity icon</th>
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
					<!--end:::Main-->


  @endsection
  
  @push('scripts')  
  <script type="text/javascript">
    $(document).ready(function () {
		$('#amenities_table').DataTable({
		   processing: true,
		   serverSide: true,
		   pageLength: 10,
		   ajax: '{{ route("amenity.getAjaxList") }}',
		   columns: [
		      { data: 'id' },
		      { data: 'amenity_name' },
		      { data: 'partner_type' },
		      { data: 'amenity_icon' },
		      { data: 'status' },
		   ]
		});

		oTable = $('#amenities_table').DataTable();
		$('#amenity_search').keyup(function(){
		      oTable.search($(this).val()).draw() ;
		})
    });

$(function() {
 
  $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  $("form[name='amenity-form']").validate({
    rules: {
      amenity_name: "required",
	  amenity_icon: "required",
	  partner_type: "required",
	},
   
    submitHandler: function(form) {

      var formData = new FormData();
      var amenity_name = $('#amenity_name').val();
      var partner_type = $('#partner_type').val();
      var amenity_type = $('#amenity_type').val();
      var amenity_icon = $('#amenity_icon').prop('files')[0];
      var url = "{{ route('settings.saveAmenity') }}";

      formData.append('amenity_name', amenity_name);
      formData.append('partner_type', partner_type);
      formData.append('amenity_type', amenity_type);
      formData.append('amenity_icon', amenity_icon);

      	$.ajax({

            url: url,
            type: 'POST',
            contentType: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: (response) => {
            	$('#kt_modal_scrollable_1').modal('hide');
            	$('#amenities_table').DataTable().ajax.reload();
                swal("Your amenity has been created!", {
                icon: "success",
              });
            },

            error: (response) => {

                console.log(response);

            }

        });
    }
  });


  	$('#special_amenities_table').DataTable({
		   processing: true,
		   serverSide: true,
		   pageLength: 10,
		   ajax: '{{ route("specialamenity.getAjaxList") }}',
		   columns: [
		      { data: 'id' },
		      { data: 'amenity_name' },
		      { data: 'partner_type' },
		      { data: 'amenity_icon' },
		      { data: 'status' },
		   ]
		});

		oTable = $('#special_amenities_table').DataTable();
		$('#special_amenity_search').keyup(function(){
		      oTable.search($(this).val()).draw() ;
		})
    });

  $("form[name='special-amenity-form']").validate({
    rules: {
      special_amenity_name: "required",
	  special_amenity_icon: "required",
	  special_partner_type: "required",
	},
   
    submitHandler: function(form) {

      var formData = new FormData();
      var special_amenity_name = $('#special_amenity_name').val();
      var special_partner_type = $('#special_partner_type').val();
      var special_amenity_type = $('#special_amenity_type').val();
      var special_amenity_icon = $('#special_amenity_icon').prop('files')[0];
      var url = "{{ route('settings.saveAmenity') }}";

      formData.append('amenity_name', special_amenity_name);
      formData.append('partner_type', special_partner_type);
      formData.append('amenity_type', special_amenity_type);
      formData.append('amenity_icon', special_amenity_icon);

      	$.ajax({

            url: url,
            type: 'POST',
            contentType: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: (response) => {
            	$('#kt_modal_scrollable_2').modal('hide');
            	$('#special_amenities_table').DataTable().ajax.reload();
                swal("Your amenity has been created!", {
                icon: "success",
              });
            },

            error: (response) => {

                console.log(response);

            }

        });
    }
  });

 $(document).on('click', '.on_status', function(){
        event.preventDefault();
        var id = $(this).attr('id');
        var data_id = $(this).attr('data-id');
        var ajaxurl = 'https://webpristine.co.in/admin/setting/edit-amenity-status/' + id+'/'+data_id;
        swal({
          title: "Are you sure?",
          text: "To change status this country?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if(willDelete){
            $.ajax({
            url:ajaxurl,
            type:'GET',
                beforeSend:function(){
                  $('.spinner-cls').show();
            },
                success:function(data)
                {
                  $('.spinner-cls').hide();
                  swal("Your country status has been changed!", {
                icon: "success",
              });
                $('#amenities_table').DataTable().ajax.reload();
                }
            });
          }
          });
        });

 	 $(document).on('click', '.special_on_status', function(){
        event.preventDefault();
        var id = $(this).attr('id');
        var data_id = $(this).attr('data-id');
        var ajaxurl = 'https://webpristine.co.in/admin/setting/edit-amenity-status/' + id+'/'+data_id;
        swal({
          title: "Are you sure?",
          text: "To change status this country?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if(willDelete){
            $.ajax({
            url:ajaxurl,
            type:'GET',
                beforeSend:function(){
                  $('.spinner-cls').show();
            },
                success:function(data)
                {
                  $('.spinner-cls').hide();
                  swal("Your country status has been changed!", {
                icon: "success",
              });
                $('#special_amenities_table').DataTable().ajax.reload();
                }
            });
          }
          });
        });
</script>
@endpush