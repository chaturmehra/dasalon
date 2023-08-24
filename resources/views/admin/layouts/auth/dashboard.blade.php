@extends('admin.layouts.auth.app')

@section('content') 
<section>
    <!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-fluid">

				<div class="mb-xl-10 toastmsg">
					<div class="toast show bg-primary p-5" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
					    <div class="toast-body">
					    	<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
					        <div class="row gy-5 g-xl-10">
					        	<div class="col-md-9">
					        		<h4 class="mb-5">Learn how to get started on Dasalon</h4>
							        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							        <a href="#" class="btn btn-sm btn-flex align-self-center px-3 justify-content-center bg-white">Book Appointment with our expert</a>
					        	</div>
					        	<div class="col-md-3">
					        		<img src="{{ asset('/assets/media/illustrations/misc/upgrade.svg') }}" width="150">
					        	</div>
					        </div>
					    </div>
					</div>
				</div>

				<!--begin::Row-->
				<div class="row gy-5 g-xl-10">
					<!--begin::Col-->
					<div class="col-sm-6 col-xl-2 mb-xl-10">
						<!--begin::Card widget 2-->
						<div class="card h-lg-100">
							<!--begin::Body-->
							<div class="card-body d-flex justify-content-between align-items-start flex-column">
								<!--begin::Icon-->
								<div class="m-0">
									<i class="ki-outline ki-compass fs-2hx text-gray-600"></i>
								</div>
								<!--end::Icon-->
								<!--begin::Section-->
								<div class="d-flex flex-column my-7">
									<!--begin::Number-->
									<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">327</span>
									<!--end::Number-->
									<!--begin::Follower-->
									<div class="m-0">
										<span class="fw-semibold fs-6 text-gray-400">Recent Sales</span>
									</div>
									<!--end::Follower-->
								</div>
								<!--end::Section-->
								<!--begin::Badge-->
								<span class="badge badge-light-success fs-base">
								<i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.1%</span>
								<!--end::Badge-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Card widget 2-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-sm-6 col-xl-2 mb-xl-10">
						<!--begin::Card widget 2-->
						<div class="card h-lg-100">
							<!--begin::Body-->
							<div class="card-body d-flex justify-content-between align-items-start flex-column">
								<!--begin::Icon-->
								<div class="m-0">
									<i class="ki-outline ki-chart-simple fs-2hx text-gray-600"></i>
								</div>
								<!--end::Icon-->
								<!--begin::Section-->
								<div class="d-flex flex-column my-7">
									<!--begin::Number-->
									<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">27,5M</span>
									<!--end::Number-->
									<!--begin::Follower-->
									<div class="m-0">
										<span class="fw-semibold fs-6 text-gray-400">Recent Appointments</span>
									</div>
									<!--end::Follower-->
								</div>
								<!--end::Section-->
								<!--begin::Badge-->
								<span class="badge badge-light-success fs-base">
								<i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.1%</span>
								<!--end::Badge-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Card widget 2-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-sm-6 col-xl-2 mb-xl-10">
						<!--begin::Card widget 2-->
						<div class="card h-lg-100">
							<!--begin::Body-->
							<div class="card-body d-flex justify-content-between align-items-start flex-column">
								<!--begin::Icon-->
								<div class="m-0">
									<i class="ki-outline ki-abstract-39 fs-2hx text-gray-600"></i>
								</div>
								<!--end::Icon-->
								<!--begin::Section-->
								<div class="d-flex flex-column my-7">
									<!--begin::Number-->
									<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">149M</span>
									<!--end::Number-->
									<!--begin::Follower-->
									<div class="m-0">
										<span class="fw-semibold fs-6 text-gray-400">Total Clients</span>
									</div>
									<!--end::Follower-->
								</div>
								<!--end::Section-->
								<!--begin::Badge-->
								<span class="badge badge-light-danger fs-base">
								<i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.47%</span>
								<!--end::Badge-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Card widget 2-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-sm-6 col-xl-2 mb-xl-10">
						<!--begin::Card widget 2-->
						<div class="card h-lg-100">
							<!--begin::Body-->
							<div class="card-body d-flex justify-content-between align-items-start flex-column">
								<!--begin::Icon-->
								<div class="m-0">
									<i class="ki-outline ki-map fs-2hx text-gray-600"></i>
								</div>
								<!--end::Icon-->
								<!--begin::Section-->
								<div class="d-flex flex-column my-7">
									<!--begin::Number-->
									<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">89M</span>
									<!--end::Number-->
									<!--begin::Follower-->
									<div class="m-0">
										<span class="fw-semibold fs-6 text-gray-400">C Total Visit</span>
									</div>
									<!--end::Follower-->
								</div>
								<!--end::Section-->
								<!--begin::Badge-->
								<span class="badge badge-light-success fs-base">
								<i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.1%</span>
								<!--end::Badge-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Card widget 2-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
						<!--begin::Card widget 2-->
						<div class="card h-lg-100">
							<!--begin::Body-->
							<div class="card-body d-flex justify-content-between align-items-start flex-column">
								<!--begin::Icon-->
								<div class="m-0">
									<i class="ki-outline ki-abstract-35 fs-2hx text-gray-600"></i>
								</div>
								<!--end::Icon-->
								<!--begin::Section-->
								<div class="d-flex flex-column my-7">
									<!--begin::Number-->
									<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">72.4%</span>
									<!--end::Number-->
									<!--begin::Follower-->
									<div class="m-0">
										<span class="fw-semibold fs-6 text-gray-400">Returning Clients</span>
									</div>
									<!--end::Follower-->
								</div>
								<!--end::Section-->
								<!--begin::Badge-->
								<span class="badge badge-light-danger fs-base">
								<i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.647%</span>
								<!--end::Badge-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Card widget 2-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
						<!--begin::Card widget 2-->
						<div class="card h-lg-100">
							<!--begin::Body-->
							<div class="card-body d-flex justify-content-between align-items-start flex-column">
								<!--begin::Icon-->
								<div class="m-0">
									<i class="ki-outline ki-abstract-26 fs-2hx text-gray-600"></i>
								</div>
								<!--end::Icon-->
								<!--begin::Section-->
								<div class="d-flex flex-column my-7">
									<!--begin::Number-->
									<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">106M</span>
									<!--end::Number-->
									<!--begin::Follower-->
									<div class="m-0">
										<span class="fw-semibold fs-6 text-gray-400">New Clients</span>
									</div>
									<!--end::Follower-->
								</div>
								<!--end::Section-->
								<!--begin::Badge-->
								<span class="badge badge-light-success fs-base">
								<i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.1%</span>
								<!--end::Badge-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Card widget 2-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
				<!--begin::Row-->
				<div class="row gy-5 g-xl-10">

					<!--begin::Col-->
					<div class="col-xl-12 mb-5 mb-xl-10">
						<!--begin::Table widget 6-->
						<div class="card card-flush h-xl-100">
							<!--begin::Header-->
							<div class="card-header pt-7">
								<!--begin::Title-->
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold text-gray-800">Leading Agents by Category</span>
									<span class="text-gray-400 mt-1 fw-semibold fs-6">Total 424,567 deliveries</span>
								</h3>
								<!--end::Title-->
								<!--begin::Toolbar-->
								<div class="card-toolbar">
									<a href="../../demo31/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">Add Product</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body">
								<!--begin::Nav-->
								<ul class="nav nav-pills nav-pills-custom mb-3">
									<!--begin::Item-->
									<li class="nav-item mb-3 me-3 me-lg-6">
										<!--begin::Link-->
										<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_1">
											<!--begin::Icon-->
											<div class="nav-icon mb-3">
												<i class="ki-outline ki-truck fs-1"></i>
											</div>
											<!--end::Icon-->
											<!--begin::Title-->
											<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Van</span>
											<!--end::Title-->
											<!--begin::Bullet-->
											<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="nav-item mb-3 me-3 me-lg-6">
										<!--begin::Link-->
										<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_2">
											<!--begin::Icon-->
											<div class="nav-icon mb-3">
												<i class="ki-outline ki-bus fs-1"></i>
											</div>
											<!--end::Icon-->
											<!--begin::Title-->
											<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Train</span>
											<!--end::Title-->
											<!--begin::Bullet-->
											<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="nav-item mb-3 me-3 me-lg-6">
										<!--begin::Link-->
										<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_3">
											<!--begin::Icon-->
											<div class="nav-icon mb-3">
												<i class="ki-outline ki-logistic fs-1"></i>
											</div>
											<!--end::Icon-->
											<!--begin::Title-->
											<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Drone</span>
											<!--end::Title-->
											<!--begin::Bullet-->
											<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
									</li>
									<!--end::Item-->
								</ul>
								<!--end::Nav-->
								<!--begin::Tab Content-->
								<div class="tab-content">
									<!--begin::Tap pane-->
									<div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
												<!--begin::Table head-->
												<thead>
													<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
														<th class="p-0 w-200px w-xxl-450px"></th>
														<th class="p-0 min-w-150px"></th>
														<th class="p-0 min-w-150px"></th>
														<th class="p-0 min-w-190px"></th>
														<th class="p-0 w-50px"></th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="symbol symbol-40px me-3">
																	<img src="{{ asset('/assets/media/avatars/300-1.jpg') }}" class="" alt="" />
																</div>
																<div class="d-flex justify-content-start flex-column">
																	<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
																	<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																</div>
															</div>
														</td>
														<td>
															<span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
															<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
															<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
														</td>
														<td>
															<div class="rating">
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
															</div>
															<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																<i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="symbol symbol-40px me-3">
																	<img src="{{ asset('/assets/media/avatars/300-2.jpg') }}" class="" alt="" />
																</div>
																<div class="d-flex justify-content-start flex-column">
																	<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
																	<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																</div>
															</div>
														</td>
														<td>
															<span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
															<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
															<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
														</td>
														<td>
															<div class="rating">
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
															</div>
															<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																<i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="symbol symbol-40px me-3">
																	<img src="{{ asset('/assets/media/avatars/300-12.jpg') }}" class="" alt="" />
																</div>
																<div class="d-flex justify-content-start flex-column">
																	<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																	<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																</div>
															</div>
														</td>
														<td>
															<span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
															<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
															<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
														</td>
														<td>
															<div class="rating">
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
															</div>
															<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																<i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="symbol symbol-40px me-3">
																	<img src="{{ asset('/assets/media/avatars/300-11.jpg') }}" class="" alt="" />
																</div>
																<div class="d-flex justify-content-start flex-column">
																	<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
																	<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																</div>
															</div>
														</td>
														<td>
															<span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
															<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
															<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
														</td>
														<td>
															<div class="rating">
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
															</div>
															<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																<i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="symbol symbol-40px me-3">
																	<img src="{{ asset('/assets/media/avatars/300-13.jpg') }}" class="" alt="" />
																</div>
																<div class="d-flex justify-content-start flex-column">
																	<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
																	<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																</div>
															</div>
														</td>
														<td>
															<span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
															<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
															<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
														</td>
														<td>
															<div class="rating">
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
															</div>
															<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																<i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
															</a>
														</td>
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
										</div>
										<!--end::Table-->
									</div>
									<!--end::Tap pane-->
									<!--begin::Tap pane-->
									<div class="tab-pane fade" id="kt_stats_widget_6_tab_2">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
												<!--begin::Table head-->
												<thead>
													<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
														<th class="p-0 w-200px w-xxl-450px"></th>
														<th class="p-0 min-w-150px"></th>
														<th class="p-0 min-w-150px"></th>
														<th class="p-0 min-w-190px"></th>
														<th class="p-0 w-50px"></th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="symbol symbol-40px me-3">
																	<img src="{{ asset('/assets/media/avatars/300-11.jpg') }}" class="" alt="" />
																</div>
																<div class="d-flex justify-content-start flex-column">
																	<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
																	<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																</div>
															</div>
														</td>
														<td>
															<span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
															<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
															<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
														</td>
														<td>
															<div class="rating">
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
															</div>
															<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																<i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="symbol symbol-40px me-3">
																	<img src="{{ asset('/assets/media/avatars/300-13.jpg') }}" class="" alt="" />
																</div>
																<div class="d-flex justify-content-start flex-column">
																	<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
																	<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																</div>
															</div>
														</td>
														<td>
															<span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
															<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
															<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
														</td>
														<td>
															<div class="rating">
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
															</div>
															<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																<i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="symbol symbol-40px me-3">
																	<img src="{{ asset('/assets/media/avatars/300-1.jpg') }}" class="" alt="" />
																</div>
																<div class="d-flex justify-content-start flex-column">
																	<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
																	<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																</div>
															</div>
														</td>
														<td>
															<span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
															<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
															<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
														</td>
														<td>
															<div class="rating">
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
															</div>
															<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																<i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="symbol symbol-40px me-3">
																	<img src="{{ asset('/assets/media/avatars/300-2.jpg') }}" class="" alt="" />
																</div>
																<div class="d-flex justify-content-start flex-column">
																	<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
																	<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																</div>
															</div>
														</td>
														<td>
															<span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
															<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
															<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
														</td>
														<td>
															<div class="rating">
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
															</div>
															<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																<i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="symbol symbol-40px me-3">
																	<img src="{{ asset('/assets/media/avatars/300-12.jpg') }}" class="" alt="" />
																</div>
																<div class="d-flex justify-content-start flex-column">
																	<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																	<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																</div>
															</div>
														</td>
														<td>
															<span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
															<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
															<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
														</td>
														<td>
															<div class="rating">
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
															</div>
															<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																<i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
															</a>
														</td>
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
										</div>
										<!--end::Table-->
									</div>
									<!--end::Tap pane-->
									<!--begin::Tap pane-->
									<div class="tab-pane fade" id="kt_stats_widget_6_tab_3">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
												<!--begin::Table head-->
												<thead>
													<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
														<th class="p-0 w-200px w-xxl-450px"></th>
														<th class="p-0 min-w-150px"></th>
														<th class="p-0 min-w-150px"></th>
														<th class="p-0 min-w-190px"></th>
														<th class="p-0 w-50px"></th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="symbol symbol-40px me-3">
																	<img src="{{ asset('/assets/media/avatars/300-1.jpg') }}" class="" alt="" />
																</div>
																<div class="d-flex justify-content-start flex-column">
																	<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
																	<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																</div>
															</div>
														</td>
														<td>
															<span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
															<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
															<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
														</td>
														<td>
															<div class="rating">
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
															</div>
															<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																<i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="symbol symbol-40px me-3">
																	<img src="{{ asset('/assets/media/avatars/300-11.jpg') }}" class="" alt="" />
																</div>
																<div class="d-flex justify-content-start flex-column">
																	<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
																	<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																</div>
															</div>
														</td>
														<td>
															<span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
															<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
															<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
														</td>
														<td>
															<div class="rating">
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
															</div>
															<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																<i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="symbol symbol-40px me-3">
																	<img src="{{ asset('/assets/media/avatars/300-13.jpg') }}" class="" alt="" />
																</div>
																<div class="d-flex justify-content-start flex-column">
																	<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
																	<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																</div>
															</div>
														</td>
														<td>
															<span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
															<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
															<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
														</td>
														<td>
															<div class="rating">
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
															</div>
															<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																<i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="symbol symbol-40px me-3">
																	<img src="{{ asset('/assets/media/avatars/300-12.jpg') }}" class="" alt="" />
																</div>
																<div class="d-flex justify-content-start flex-column">
																	<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																	<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																</div>
															</div>
														</td>
														<td>
															<span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
															<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
															<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
														</td>
														<td>
															<div class="rating">
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
															</div>
															<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																<i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="symbol symbol-40px me-3">
																	<img src="{{ asset('/assets/media/avatars/300-2.jpg') }}" class="" alt="" />
																</div>
																<div class="d-flex justify-content-start flex-column">
																	<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
																	<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																</div>
															</div>
														</td>
														<td>
															<span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
															<span class="fw-semibold text-gray-400 d-block">Deliveries</span>
														</td>
														<td>
															<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
															<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
														</td>
														<td>
															<div class="rating">
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-outline ki-star fs-6"></i>
																</div>
															</div>
															<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																<i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
															</a>
														</td>
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
										</div>
										<!--end::Table-->
									</div>
									<!--end::Tap pane-->
								</div>
								<!--end::Tab Content-->
							</div>
							<!--end: Card Body-->
						</div>
						<!--end::Table widget 6-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
				<!--begin::Row-->
				<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
					<!--begin::Col-->
					<div class="col-xxl-4">
						<!--begin::Engage widget 1-->
						<div class="card h-md-100" dir="ltr">
							<!--begin::Body-->
							<div class="card-body d-flex flex-column flex-center">
								<!--begin::Heading-->
								<div class="mb-2">
									<!--begin::Title-->
									<h1 class="fw-semibold text-gray-800 text-center lh-lg">Try out our
									<br />new
									<span class="fw-bolder">Invoice Manager</span></h1>
									<!--end::Title-->
									<!--begin::Illustration-->
									<div class="py-10 text-center">
										<img src="{{ asset('/assets/media/svg/illustrations/easy/2.svg') }}" class="theme-light-show w-200px" alt="" />
										<img src="{{ asset('/assets/media/svg/illustrations/easy/2-dark.svg') }}" class="theme-dark-show w-200px" alt="" />
									</div>
									<!--end::Illustration-->
								</div>
								<!--end::Heading-->
								<!--begin::Links-->
								<div class="text-center mb-1">
									<!--begin::Link-->
									<a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_new_address" data-bs-toggle="modal">Try Now</a>
									<!--end::Link-->
									<!--begin::Link-->
									<a class="btn btn-sm btn-light" href="../../demo31/dist/apps/user-management/users/view.html">Learn More</a>
									<!--end::Link-->
								</div>
								<!--end::Links-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Engage widget 1-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-xxl-8">
						<!--begin::Chart widget 38-->
						<div class="card card-flush h-md-100">
							<!--begin::Header-->
							<div class="card-header pt-7">
								<!--begin::Title-->
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold text-gray-800">LOI Issued by Departments</span>
									<span class="text-gray-400 mt-1 fw-semibold fs-6">Counted in Millions</span>
								</h3>
								<!--end::Title-->
								<!--begin::Toolbar-->
								<div class="card-toolbar">
									<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
									<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
										<!--begin::Display range-->
										<div class="text-gray-600 fw-bold">Loading date range...</div>
										<!--end::Display range-->
										<i class="ki-outline ki-calendar-8 fs-1 ms-2 me-0"></i>
									</div>
									<!--end::Daterangepicker-->
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body d-flex align-items-end px-0 pt-3 pb-5">
								<!--begin::Chart-->
								<div id="kt_charts_widget_38_chart" class="h-325px w-100 min-h-auto ps-4 pe-6"></div>
								<!--end::Chart-->
							</div>
							<!--end: Card Body-->
						</div>
						<!--end::Chart widget 38-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
				<!--begin::Row-->
				<div class="row g-5 g-xl-10">
					<!--begin::Col-->
					<div class="col-xxl-4">
						<!--begin::Chart widget 25-->
						<div class="card card-flush h-md-100">
							<!--begin::Header-->
							<div class="card-header pt-7">
								<!--begin::Title-->
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold text-dark">Warephase stats</span>
									<span class="text-gray-400 pt-2 fw-semibold fs-6">8k social visitors</span>
								</h3>
								<!--end::Title-->
								<!--begin::Toolbar-->
								<div class="card-toolbar">
									<!--begin::Nav-->
									<ul class="nav" id="kt_chart_widget_19_tabs">
										<li class="nav-item">
											<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_chart_widget_25_tab_1" href="#kt_chart_widget_25_tab_content_1">2023</a>
										</li>
										<li class="nav-item">
											<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light active fw-bold px-4" data-bs-toggle="tab" id="kt_chart_widget_25_tab_2" href="#kt_chart_widget_25_tab_content_2">Month</a>
										</li>
									</ul>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body pt-0">
								<!--begin::Tab Content (ishlamayabdi)-->
								<div class="tab-content">
									<!--begin::Tap pane-->
									<div class="tab-pane fade" id="kt_chart_widget_25_tab_content_1">
										<!--begin::Chart-->
										<div id="kt_charts_widget_25_chart_1" class="w-100 h-400px"></div>
										<!--end::Chart-->
									</div>
									<!--end::Tap pane-->
									<!--begin::Tap pane-->
									<div class="tab-pane fade active show" id="kt_chart_widget_25_tab_content_2">
										<!--begin::Chart-->
										<div id="kt_charts_widget_25_chart_2" class="w-100 h-400px"></div>
										<!--end::Chart-->
									</div>
									<!--end::Tap pane-->
								</div>
								<!--end::Tab Content-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Chart widget 25-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-xxl-8">
						<!--begin::Chart widget 24-->
						<div class="card card-flush overflow-hidden h-md-100">
							<!--begin::Header-->
							<div class="card-header py-5">
								<!--begin::Title-->
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold text-dark">Human Resources</span>
									<span class="text-gray-400 mt-1 fw-semibold fs-6">Reports by states and ganders</span>
								</h3>
								<!--end::Title-->
								<!--begin::Toolbar-->
								<div class="card-toolbar">
									<!--begin::Menu-->
									<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
										<i class="ki-outline ki-dots-square fs-1"></i>
									</button>
									<!--begin::Menu 2-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator mb-3 opacity-75"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">New Ticket</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">New Customer</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
											<!--begin::Menu item-->
											<a href="#" class="menu-link px-3">
												<span class="menu-title">New Group</span>
												<span class="menu-arrow"></span>
											</a>
											<!--end::Menu item-->
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Admin Group</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Staff Group</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Member Group</a>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">New Contact</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator mt-3 opacity-75"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content px-3 py-3">
												<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
											</div>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu 2-->
									<!--end::Menu-->
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Header-->
							<!--begin::Card body-->
							<div class="card-body pt-0">
								<!--begin::Chart-->
								<div id="kt_charts_widget_24" class="min-h-auto" style="height: 400px"></div>
								<!--end::Chart-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Chart widget 24-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
	<!--begin::Footer-->
	<div id="kt_app_footer" class="app-footer">
		<!--begin::Footer container-->
		<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
			<!--begin::Copyright-->
			<div class="text-dark order-2 order-md-1">
				<span class="text-muted fw-semibold me-1">2023&copy;</span>
				<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Dasalon</a>
			</div>
			<!--end::Copyright-->
			<!--begin::Menu-->
			<!-- <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
				<li class="menu-item">
					<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
				</li>
				<li class="menu-item">
					<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
				</li>
				<li class="menu-item">
					<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
				</li>
			</ul> -->
			<!--end::Menu-->
		</div>
		<!--end::Footer container-->
	</div>
	<!--end::Footer-->
</div>
<!--end:::Main-->

</section>
  @endsection