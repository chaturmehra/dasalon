@extends('admin.layouts.auth.app')
@section('content')

<!--Begin:::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">

		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar pt-3 pt-lg-6">
			<!--begin::Toolbar container-->
			<div id="kt_app_toolbar_container" class="app-container container-xl d-flex flex-stack">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<!--begin::Title-->
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Service Config</h1>

					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="home.html" class="text-muted text-hover-primary">Home</a>
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
			<div id="kt_app_content_container" class="app-container container">

				<!--begin::Navbar-->
				<div class="card mb-5 mb-xxl-8">
					<div class="card-body pt-9 pb-0">

						<!--begin::Details-->
			            <div class="d-flex flex-wrap flex-sm-nowrap">

			            	<!--begin::Info-->
			            	<div class="flex-grow-1">
			            		<!--begin::Title-->
			            		<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
				                    <!--begin::User-->
				                    <div class="d-flex flex-column">
				                        <!--begin::Name-->
				                        <div class="d-flex align-items-center mb-2">
				                            <a href="service.html" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Services</a>
				                            <a href="service.html"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>
				                        </div>
				                        <!--end::Name-->

				                       
				                    </div>
				                    <!--end::User-->

				                </div>
			            		<!--end::Title-->

			            		<!--begin::Stats-->
			            		<div class="d-flex flex-wrap flex-stack">
				                    <!--begin::Wrapper-->
				                    <div class="d-flex flex-column flex-grow-1 pe-8">
				                        <!--begin::Stats-->
				                        <div class="d-flex flex-wrap">
				                            <!--begin::Stat-->
				                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
				                                <!--begin::Number-->
				                                <div class="d-flex align-items-center">
				                                    <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$" data-kt-initialized="1">$4,500</div>
				                                </div>
				                                <!--end::Number-->

				                                <!--begin::Label-->
				                                <div class="fw-semibold fs-6 text-gray-400">Earnings</div>
				                                <!--end::Label-->
				                            </div>
				                            <!--end::Stat-->

				                            <!--begin::Stat-->
				                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
				                                <!--begin::Number-->
				                                <div class="d-flex align-items-center">
				                                    <i class="ki-outline ki-arrow-down fs-3 text-danger me-2"></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="80" data-kt-initialized="1">80</div>
				                                </div>
				                                <!--end::Number-->

				                                <!--begin::Label-->
				                                <div class="fw-semibold fs-6 text-gray-400">Projects</div>
				                                <!--end::Label-->
				                            </div>
				                            <!--end::Stat-->

				                            <!--begin::Stat-->
				                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
				                                <!--begin::Number-->
				                                <div class="d-flex align-items-center">
				                                    <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">%60</div>
				                                </div>
				                                <!--end::Number-->                                

				                              
				                            </div>
				                            <!--end::Stat-->
				                        </div>
				                        <!--end::Stats-->
				                    </div>
				                    <!--end::Wrapper-->

				           
				                </div>
			            		<!--end::Stats-->

			            	</div>
			            	<!--end::Info-->
			            </div>
						<!--end::Details-->

						<!--begin::Navs-->
						@include('admin.services.tab')
						<!--End::Navs-->

					</div>
				</div>
				<!--end::Navbar-->

				<!--begin::Main column-->
				<div class="d-flex flex-column flex-row-fluid gap-7">

					<div class="card card-flush">
						<div class="card-header align-items-center py-5 gap-2 gap-md-5">
							<!--begin:::Tabs-->
							<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
								<!--begin:::Tab item-->
								<li class="nav-item">
									<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#serviceconfig1">Services by Admin</a>
								</li>
								<!--end:::Tab item-->
								<!--begin:::Tab item-->
								<li class="nav-item">
									<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#serviceconfig2">Services by Partner</a> 
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

								<!--begin::Card header-->
								<div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-5">
                                      @if(session()->has('messagestatusrp'))
						               <div class="card-header display-message">
						                  <div class="alert alert-success">
						                     {{ session()->get('messagestatusrp') }}
						                  </div>
						               </div>
						               @endif
						               @if(session()->has('errorstatusrp'))
						               <div class="card-header display-message">
						                  <div class="alert alert-success">
						                     {{ session()->get('errorstatusrp') }}
						                  </div>
						               </div>
						               @endif
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
													<a href="{{url('admin/servicebyadmin/export')}}" class="menu-link px-3" data-kt-export="csv">
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
									<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example2">
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
											$i=1;
											@endphp
											@foreach($service_by_admin as $data)
											@php
        										
        										$is_active = ($data->is_active == '1') ? "enable" : "disable";
    										@endphp
											<tr>
												<td>{{$i++}}</td>
												<td>{{$data->servicename}}</td>
												<td>{{$data->category}}</td>
												<td>{{$data->servicesubcategory}}</td>
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
															<a href="{{url('admin/servicebyadmin/enable-status/'.$data->serviceid)}}" class="menu-link px-3 ">Enable</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="{{url('admin/servicebyadmin/disable-status/'.$data->serviceid)}}" class="menu-link px-3">Disable</a>
														</div>
														<!--end::Menu item-->
														<div class="menu-item px-3">
															<a href="" data-bs-toggle="modal" data-bs-target="#kt_modal_service" class="menu-link px-3 service_by_admin" service_id="{{$data->serviceid}}">Edit</a>
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
						<!--end::Tab pane-->

						<!--begin::Tab pane-->
						@include('admin.services.service.admin_partner')
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
<!--end:::Main-->

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
						<form class="form" action="#" method="POST">
							<!--begin::Scroll-->
							@csrf
							<input type="hidden" name="service_id" id="service_id">
							<div class="d-flex flex-column scroll-y me-n7 pe-7">

								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="required fw-semibold fs-6 mb-2">Category</label>
									<!--end::Label-->
									<!--begin::Input-->
									<select class="form-select mb-2" data-control="select2" data-placeholder="Select a Category..." name="category" id="category">
									    <option></option>
									    @foreach($service_by_admin as $data)
										<option value="{{$data->categoryid}}">{{$data->category}}</option>
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
									<select class="form-select mb-2" data-control="select2" data-placeholder="Select a Sub Category..." name="subcategory" id="subcategory">
									    <option></option>
									    @foreach($service_by_admin as $data)
										<option value="{{$data->subcategoryid}}">{{$data->servicesubcategory}}</option>
										@endforeach
										
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
									<input type="text" name="servicename" id="servicename" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Service name" value="Hair Cut Style" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->

							</div>
							<!--end::Scroll-->

							<!--begin::Actions-->
							<div class="modal-footer">
				                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
				                <button type="button" class="btn btn-primary servicebyadmin-button">
									<span class="indicator-label " service_button="{{$service_by_admin[0]->serviceid}}">Submit</span>
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

<script>
	jQuery(document).on('click', '.service_by_admin', function(){
        event.preventDefault();
        var service_id = $(this).attr('service_id');
        $.ajax({
            url:'{{url("admin/servicebyadmin/edit-service")}}'+'/' + service_id,
            type:'GET',
            dataType: 'json',
             beforeSend:function(){
                     $('.spinner-cls').show();
             },
             success:function(data)
                {
                  $('.spinner-cls').hide();
                  $("#category").val(data[0].categoryid).trigger('change');
                  $("#subcategory").val(data[0].subcategoryid).trigger('change');
                  $("#servicename").val(data[0].servicename);
                  $("#service_id").val(data[0].serviceid);              
                }
            });
        });
</script>
<script>
jQuery(document).on('click', '.servicebyadmin-button', function() {
    var serviceId   = $('#service_id').val(); 
    var category    = $('#category').val(); 
    var subcategory = $('#subcategory').val(); 
    var servicename = $('#servicename').val();
    $.ajax({
        method: 'POST',
        url: '{{url("admin/servicebyadmin/update-service")}}', 
        data: {
            _token: '{{ csrf_token() }}' ,
            service_id: serviceId,
            category: category,
            subcategory: subcategory,
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
        });
        },
        error: function(error) {
            console.error(error);
        }
    });
});
</script>
@endpush