@extends('admin.layouts.auth.app')
@section('content') 

<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">

		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-fluid">

				<div class="card card-flush">
					
					<!--begin::Form-->
					<form class="form mb-6" action="{{ url('/admin/update-system-manager/'.$manager_detail->id) }}" method="post">
						@csrf

						<div class="card-body pt-10 pb-0">
							
							@if(session()->has('message'))
							<div class="display-message">
								<div class="alert alert-success">
									{{ session()->get('message') }}
								</div>
							</div>
							@endif
							@if(session()->has('error'))
							<div class="display-message">
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

							<h1 class="fw-bold text-dark mb-9">Edit Information</h1>
							<!--begin::Input group-->
							<div class="row mb-5">

								<!--begin::Col-->
								<div class="col-md-6 fv-row mb-7">
									<!--begin::Label-->
									<label class="fs-5 fw-semibold mb-2">Name</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" placeholder="" name="name" value="{{ $manager_detail->name }}" />
									<!--end::Input-->
								</div>
								<!--end::Col-->

								<!--begin::Col-->
								<div class="col-md-6 fv-row mb-7">
									<!--end::Label-->
									<label class="fs-5 fw-semibold mb-2">Phone</label>
									<!--end::Label-->
									<!--end::Input-->
									<input type="text" class="form-control form-control-solid" placeholder="" name="phone" value="{{ $manager_detail->phone }}" />
									<!--end::Input-->
								</div>
								<!--end::Col-->

								<!--begin::Col-->
								<div class="col-md-6 fv-row mb-7">
									<!--end::Label-->
									<label class="fs-5 fw-semibold mb-2">Email</label>
									<!--end::Label-->
									<!--end::Input-->
									<input type="email" class="form-control form-control-solid" placeholder="" name="email" value="{{ $manager_detail->email }}" />
									<!--end::Input-->
								</div>
								<!--end::Col-->

								<!--begin::Input group-->
								<div class="col-md-6 fv-row mb-7">
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
												type="password" placeholder="" name="new_password" autocomplete="off" />

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

							<!--begin::Input group-->
							<div class="col-md-6 fv-row mb-7">
								<!--begin::Main wrapper-->
								<div class="fv-row" data-kt-password-meter="true">
									<!--begin::Wrapper-->
									<div class="mb-1">
										<!--begin::Label-->
										<label class="form-label fw-semibold fs-6 mb-2">
											Confirm Password
										</label>
										<!--end::Label-->

										<!--begin::Input wrapper-->
										<div class="position-relative mb-3">
											<input class="form-control form-control-lg form-control-solid"
											type="password" placeholder="" name="confirm_password" autocomplete="off" />

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
					<!--end::Input group-->

				</div>

				<div class="card-header">
					<h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Roles</h2>
				</div>

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

				</div>
				<!--end::Card header-->

				<!--begin::Card body-->
				<div class="card-body pt-0">
					<!--begin::Table-->
					<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example1">
						<thead>
							<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
								<th class="min-w-125px">S NO.</th>
								<th class="min-w-125px">Pages</th>
								<th class="min-w-125px">Sub Pages</th>
								<th class="min-w-125px">Role</th>
							</tr>
						</thead>
						<tbody class="text-gray-600 fw-semibold">
							<tr>
								<td>1</td>
								<td>Settings</td>
								<td>Country Config</td>
								<td>
									<div class="form-check form-switch form-check-custom form-check-solid">
										<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
										<label class="form-check-label" for="flexSwitchDefault"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Settings</td>
								<td>Partner Config</td>
								<td>
									<div class="form-check form-switch form-check-custom form-check-solid">
										<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
										<label class="form-check-label" for="flexSwitchDefault"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Settings</td>
								<td>Subscription Config</td>
								<td>
									<div class="form-check form-switch form-check-custom form-check-solid">
										<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
										<label class="form-check-label" for="flexSwitchDefault"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Settings</td>
								<td>Appointment Config</td>
								<td>
									<div class="form-check form-switch form-check-custom form-check-solid">
										<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
										<label class="form-check-label" for="flexSwitchDefault"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Settings</td>
								<td>Amenity & Special Attributes</td>
								<td>
									<div class="form-check form-switch form-check-custom form-check-solid">
										<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
										<label class="form-check-label" for="flexSwitchDefault"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Settings</td>
								<td>Payment Gateway</td>
								<td>
									<div class="form-check form-switch form-check-custom form-check-solid">
										<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
										<label class="form-check-label" for="flexSwitchDefault"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Service</td>
								<td>Order Management</td>
								<td>
									<div class="form-check form-switch form-check-custom form-check-solid">
										<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
										<label class="form-check-label" for="flexSwitchDefault"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>8</td>
								<td>Service</td>
								<td>Service Config</td>
								<td>
									<div class="form-check form-switch form-check-custom form-check-solid">
										<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
										<label class="form-check-label" for="flexSwitchDefault"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>9</td>
								<td>Service</td>
								<td>Partner - Service mapping</td>
								<td>
									<div class="form-check form-switch form-check-custom form-check-solid">
										<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
										<label class="form-check-label" for="flexSwitchDefault"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>10</td>
								<td>Service</td>
								<td>Recommendations (package)</td>
								<td>
									<div class="form-check form-switch form-check-custom form-check-solid">
										<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
										<label class="form-check-label" for="flexSwitchDefault"></label>
									</div>
								</td>
							</tr>
							<tr>
								<td>11</td>
								<td>Service</td>
								<td>Offers Management</td>
								<td>
									<div class="form-check form-switch form-check-custom form-check-solid">
										<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
										<label class="form-check-label" for="flexSwitchDefault"></label>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<!--end::Table-->

					<!--begin::Submit-->
					<button type="submit" class="btn btn-primary mt-8">
						<!--begin::Indicator label-->
						<span class="indicator-label">Add System User</span>
						<!--end::Indicator label-->
						<!--begin::Indicator progress-->
						<span class="indicator-progress">Please wait...
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							<!--end::Indicator progress-->
						</button>
						<!--end::Submit-->
					</div>
					<!--end::Card body-->
					
				</form>
				<!--end::Form-->

			</div>

		</div>
		<!--end::Content wrapper-->
	</div>
	
</div>
</div>

@endsection