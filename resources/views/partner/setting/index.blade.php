@extends('partner.layouts.auth.app')
@section('content') 
<!--Begin:::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">

		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar pt-6 pb-0">
			<!--begin::Toolbar container-->
			<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<!--begin::Title-->
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Settings</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="{{ url('admin/dashboard') }}" class="text-muted text-hover-primary">Home</a>
						</li>
						<!--end::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Settings</li>
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
			<div id="kt_app_content_container" class="app-container container-xl">	

				<!--begin::Row-->
				<div class="row g-5 g-xl-10">

					<!--begin::Col-->
					<div class="col-xl-6">
						<!--begin::List widget 21-->
						<div class="card card-flush h-xl-100">
							<!--begin::Header-->
							<div class="card-header align-items-center border-0 pt-5">
								<a href="{{ route('venue.index') }}" class="card-title align-items-start flex-column">
									<span class="card-label fw-bold text-gray-800">Business & Venue</span>
									<span class="text-gray-400 mt-1 fw-semibold fs-6">Manage all setup related to your venue</span>
								</a>
								<!--begin::Statistics-->
								<div class="d-flex align-items-center w-100 mw-125px">
									<!--begin::Progress-->
									<div class="progress h-6px w-100 me-2 bg-light-warning">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<!--end::Progress-->
									<!--begin::Value-->
									<span class="text-gray-400 fw-semibold">87%</span>
									<!--end::Value-->
								</div>
								<!--end::Statistics-->
								<a href="{{ route('venue.index') }}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
									<i class="ki-outline ki-arrow-right fs-2"></i>                    
								</a>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body pt-5">
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<span class="symbol-label bg-light-info">
												<i class="ki-duotone ki-abstract-24 fs-2x text-info">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Business & Venue details</a>
											<!--end::Title-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<span class="symbol-label bg-light-info">
												<i class="ki-duotone ki-abstract-24 fs-2x text-info">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Venue address</a>
											<!--end::Title-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<span class="symbol-label bg-light-info">
												<i class="ki-duotone ki-abstract-24 fs-2x text-info">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Venue Photos</a>
											<!--end::Title-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<span class="symbol-label bg-light-info">
												<i class="ki-duotone ki-abstract-24 fs-2x text-info">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Venue - business type</a>
											<!--end::Title-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<span class="symbol-label bg-light-info">
												<i class="ki-duotone ki-abstract-24 fs-2x text-info">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Operating hours</a>
											<!--end::Title-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<span class="symbol-label bg-light-info">
												<i class="ki-duotone ki-abstract-24 fs-2x text-info">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Off peak hours</a>
											<!--end::Title-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<span class="symbol-label bg-light-info">
												<i class="ki-duotone ki-abstract-24 fs-2x text-info">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Amenities</a>
											<!--end::Title-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::List widget 21-->
					</div>
					<!--end::Col-->

					<!--begin::Col-->
					<div class="col-xl-6">
						<!--begin::List widget 21-->
						<div class="card card-flush h-xl-100">
							<!--begin::Header-->
							<div class="card-header align-items-center border-0 pt-5">
								<a href="staff.html" class="card-title align-items-start flex-column">
									<span class="card-label fw-bold text-gray-800">Staff</span>
									<span class="text-gray-400 mt-1 fw-semibold fs-6">Manage all setup related to your team</span>
								</a>
								<!--begin::Statistics-->
								<div class="d-flex align-items-center w-100 mw-125px">
									<!--begin::Progress-->
									<div class="progress h-6px w-100 me-2 bg-light-warning">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<!--end::Progress-->
									<!--begin::Value-->
									<span class="text-gray-400 fw-semibold">87%</span>
									<!--end::Value-->
								</div>
								<!--end::Statistics-->
								<a href="staff.html" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
									<i class="ki-outline ki-arrow-right fs-2"></i>                    
								</a>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body pt-5">
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<span class="symbol-label bg-light-info">
												<i class="ki-duotone ki-abstract-24 fs-2x text-info">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Staff name, Phone no., Email</a>
											<!--end::Title-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<span class="symbol-label bg-light-info">
												<i class="ki-duotone ki-abstract-24 fs-2x text-info">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Staff role</a>
											<!--end::Title-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<span class="symbol-label bg-light-info">
												<i class="ki-duotone ki-abstract-24 fs-2x text-info">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Enable/Disable staff</a>
											<!--end::Title-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<span class="symbol-label bg-light-info">
												<i class="ki-duotone ki-abstract-24 fs-2x text-info">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Enable service booking</a>
											<!--end::Title-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<span class="symbol-label bg-light-info">
												<i class="ki-duotone ki-abstract-24 fs-2x text-info">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Start date</a>
											<!--end::Title-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<span class="symbol-label bg-light-info">
												<i class="ki-duotone ki-abstract-24 fs-2x text-info">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Commission</a>
											<!--end::Title-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-3">
											<span class="symbol-label bg-light-info">
												<i class="ki-duotone ki-abstract-24 fs-2x text-info">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Social media link</a>
											<!--end::Title-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::List widget 21-->
					</div>
					<!--end::Col-->

					<!--begin::Col-->
					<div class="col-xl-6">
						<!--begin::List widget 21-->
						<div class="card card-flush h-xl-100">
							<!--begin::Header-->
							<div class="card-header align-items-center border-0 pt-5">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold text-gray-800">Catalog</span>
									<span class="text-gray-400 mt-1 fw-semibold fs-6">Your offerings, all in one place</span>
								</h3>
								<!--begin::Statistics-->
								<div class="d-flex align-items-center w-100 mw-125px">
									<!--begin::Progress-->
									<div class="progress h-6px w-100 me-2 bg-light-warning">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<!--end::Progress-->
									<!--begin::Value-->
									<span class="text-gray-400 fw-semibold">87%</span>
									<!--end::Value-->
								</div>
								<!--end::Statistics-->
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body pt-5">
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="services.html" class="text-gray-800 fw-bold text-hover-primary fs-6">Services</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="services.html" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="packages.html" class="text-gray-800 fw-bold text-hover-primary fs-6">Packages</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="packages.html" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="add-book-a-look-service.html" class="text-gray-800 fw-bold text-hover-primary fs-6">Book a look</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="add-book-a-look-service.html" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="vouchers.html" class="text-gray-800 fw-bold text-hover-primary fs-6">Vouchers</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="vouchers.html" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="memberships.html" class="text-gray-800 fw-bold text-hover-primary fs-6">Memberships</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="memberships.html" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="products.html" class="text-gray-800 fw-bold text-hover-primary fs-6">Products</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="products.html" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::List widget 21-->
					</div>
					<!--end::Col-->

					<!--begin::Col-->
					<div class="col-xl-6">
						<!--begin::List widget 21-->
						<div class="card card-flush h-xl-100">
							<!--begin::Header-->
							<div class="card-header align-items-center border-0 pt-5">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold text-gray-800">Promote</span>
									<span class="text-gray-400 mt-1 fw-semibold fs-6">Promote your catalog items</span>
								</h3>
								<!--begin::Statistics-->
								<div class="d-flex align-items-center w-100 mw-125px">
									<!--begin::Progress-->
									<div class="progress h-6px w-100 me-2 bg-light-warning">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<!--end::Progress-->
									<!--begin::Value-->
									<span class="text-gray-400 fw-semibold">87%</span>
									<!--end::Value-->
								</div>
								<!--end::Statistics-->
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body pt-5">
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Promote - Business</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Promote - Services</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Promote - Packages</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Promote - Vouchers</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Promote - Memberships</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Promote - Products</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::List widget 21-->
					</div>
					<!--end::Col-->

					<!--begin::Col-->
					<div class="col-xl-6">
						<!--begin::List widget 21-->
						<div class="card card-flush h-xl-100">
							<!--begin::Header-->
							<div class="card-header align-items-center border-0 pt-5">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold text-gray-800">Clients</span>
									<span class="text-gray-400 mt-1 fw-semibold fs-6">Manage your client contacts & related info</span>
								</h3>
								<!--begin::Statistics-->
								<div class="d-flex align-items-center w-100 mw-125px">
									<!--begin::Progress-->
									<div class="progress h-6px w-100 me-2 bg-light-warning">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<!--end::Progress-->
									<!--begin::Value-->
									<span class="text-gray-400 fw-semibold">87%</span>
									<!--end::Value-->
								</div>
								<!--end::Statistics-->
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body pt-5">
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Clients list</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Reviews</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Client notifications</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::List widget 21-->
					</div>
					<!--end::Col-->

					<!--begin::Col-->
					<div class="col-xl-6">
						<!--begin::List widget 21-->
						<div class="card card-flush h-xl-100">
							<!--begin::Header-->
							<div class="card-header align-items-center border-0 pt-5">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bold text-gray-800">Sales</span>
									<span class="text-gray-400 mt-1 fw-semibold fs-6">Manage your sales & related items</span>
								</h3>
								<!--begin::Statistics-->
								<div class="d-flex align-items-center w-100 mw-125px">
									<!--begin::Progress-->
									<div class="progress h-6px w-100 me-2 bg-light-warning">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<!--end::Progress-->
									<!--begin::Value-->
									<span class="text-gray-400 fw-semibold">87%</span>
									<!--end::Value-->
								</div>
								<!--end::Statistics-->
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body pt-5">
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Payment integration</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center me-5">
										<!--begin::Symbol-->
										<div class="prdimg me-3">
											<img src="{{ asset('/public/partner/assets/media/svg/brand-logos/volicity-9.svg') }}">
										</div>
										<!--end::Symbol-->
										<!--begin::Content-->
										<div class="me-5">
											<!--begin::Title-->
											<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Tax</a>
											<!--end::Title-->
											<span class="text-muted fw-semibold d-block fs-7">subtitle</span>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
									<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
										<i class="ki-outline ki-arrow-right fs-2"></i> 
									</a>
								</div>
								<!--end::Item-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::List widget 21-->
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
</div>
<!--End:::Main-->
@endsection
