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

					<div class="card-header pt-10">
						<h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Roles</h2>
					</div>

					<!--begin::Card header-->
					<div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-0">

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
									<th class="min-w-125px">Harry</th>
									<th class="min-w-125px">Aman</th>
									<th class="min-w-125px">Lokesh</th>
									<th class="min-w-125px">Tom</th>
									<th class="min-w-125px">Sam</th>
									<th class="min-w-125px">Lita</th>
									<th class="min-w-125px">Manveer</th>
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
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
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
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
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
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
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
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
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
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
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
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
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
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
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
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
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
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
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
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
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
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
									<td>
										<div class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input h-25px w-45px" type="checkbox" value="" id="flexSwitchDefault"/>
											<label class="form-check-label" for="flexSwitchDefault"></label>
										</div>
									</td>
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
					</div>
					<!--end::Card body-->									

				</div>

			</div>
			<!--end::Content wrapper-->
		</div>
	</div>
</div>
@endsection