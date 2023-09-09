<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href=""/>
		<title>{{ isset($title) ? $title : "Dasalon" }}</title>
		<meta charset="utf-8" />
		<meta name="description" content="{{ isset($meta_description) ? $meta_description : '' }}" />
		<meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : '' }}" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="{{ isset($title) ? $title : '' }}" />
		<meta property="og:url" content="{{ Request::url() }}" />
		<meta property="og:site_name" content="Dasalon" />
		<link rel="canonical" href="{{ Request::url() }}" />
		<link rel="shortcut icon" href="{{ asset('/public/partner/assets/media/logos/logo1.png') }}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{ asset('/public/partner/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('/public/partner/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('/public/partner/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('/public/partner/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('/public/partner/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('/public/assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script type="text/javascript">var baseurl="{{ asset('/') }}";</script>
		<script type="text/javascript">var publicurl="{{ asset('/public') }}";</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-stacked="true" data-kt-app-sidebar-secondary-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header">
					<!--begin::Header container-->
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<!--begin::Header logo-->
						<div class="app-header-logo d-flex align-items-center ps-lg-2 me-lg-13">
							<!--begin::Mobile toggle-->
							<div class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px ms-n2 me-2 d-flex d-lg-none" id="kt_app_sidebar_mobile_toggle">
								<i class="ki-outline ki-abstract-14 fs-1"></i>
							</div>
							<!--end::Mobile toggle-->
							<!--begin::Logo image-->
							<a href="/dasalon-html/partners/home.html">
								<img alt="Logo" src="{{ asset('/public/assets/media/logos/logo3.png') }}" class="h-60px" />
							</a>
							<!--end::Logo image-->
						</div>
						<!--end::Header logo-->
						<!--begin::Header wrapper-->
						<div class="d-flex align-items-stretch justify-content-center flex-lg-grow-1">
							<!--begin::Navbar-->
							<div class="app-navbar flex-shrink-0 flex-grow-1">


								<div class="header-middle d-flex">
									<!--begin::Search-->
									<div class="app-navbar-item align-items-stretch me-0 me-lg-3">
										<!--begin::Search-->
										<div id="kt_header_search" class="header-search d-flex align-items-center w-100 w-lg-500px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
											<!--begin::Tablet and mobile search toggle-->
											<div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
												<div class="d-flex btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-35px h-md-35px">
													<i class="ki-outline ki-magnifier fs-1"></i>
												</div>
											</div>
											<!--end::Tablet and mobile search toggle-->
											<!--begin::Form(use d-none d-lg-block classes for responsive search)-->
											<form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
												<!--begin::Hidden input(Added to disable form autocomplete)-->
												<input type="hidden" />
												<!--end::Hidden input-->
												<!--begin::Icon-->
												<i class="ki-outline ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"></i>
												<!--end::Icon-->
												<!--begin::Input-->
												<input type="text" class="search-input form-control ps-13" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
												<!--end::Input-->
												<!--begin::Spinner-->
												<span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
													<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
												</span>
												<!--end::Spinner-->
												<!--begin::Reset-->
												<span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
													<i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
												</span>
												<!--end::Reset-->
											</form>
											<!--end::Form-->
											<!--begin::Menu-->
											<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
												<!--begin::Wrapper-->
												<div data-kt-search-element="wrapper">
													<!--begin::Recently viewed-->
													<div data-kt-search-element="results" class="d-none">
														<!--begin::Items-->
														<div class="scroll-y mh-200px mh-lg-350px">
															<!--begin::Category title-->
															<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
															<!--end::Category title-->
															<!--begin::Item-->
															<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<img src="{{ asset('/public/assets/media/avatars/300-6.jpg') }}" alt="" />
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column justify-content-start fw-semibold">
																	<span class="fs-6 fw-semibold">Karina Clark</span>
																	<span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
																</div>
																<!--end::Title-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<img src="{{ asset('/public/assets/media/avatars/300-2.jpg') }}" alt="" />
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column justify-content-start fw-semibold">
																	<span class="fs-6 fw-semibold">Olivia Bold</span>
																	<span class="fs-7 fw-semibold text-muted">Software Engineer</span>
																</div>
																<!--end::Title-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<img src="{{ asset('/public/assets/media/avatars/300-9.jpg') }}" alt="" />
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column justify-content-start fw-semibold">
																	<span class="fs-6 fw-semibold">Ana Clark</span>
																	<span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
																</div>
																<!--end::Title-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<img src="{{ asset('/public/assets/media/avatars/300-14.jpg') }}" alt="" />
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column justify-content-start fw-semibold">
																	<span class="fs-6 fw-semibold">Nick Pitola</span>
																	<span class="fs-7 fw-semibold text-muted">Art Director</span>
																</div>
																<!--end::Title-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<img src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" alt="" />
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column justify-content-start fw-semibold">
																	<span class="fs-6 fw-semibold">Edward Kulnic</span>
																	<span class="fs-7 fw-semibold text-muted">System Administrator</span>
																</div>
																<!--end::Title-->
															</a>
															<!--end::Item-->
															<!--begin::Category title-->
															<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
															<!--end::Category title-->
															<!--begin::Item-->
															<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<img class="w-20px h-20px" src="{{ asset('/public/assets/media/svg/brand-logos/volicity-9.svg') }}" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column justify-content-start fw-semibold">
																	<span class="fs-6 fw-semibold">Company Rbranding</span>
																	<span class="fs-7 fw-semibold text-muted">UI Design</span>
																</div>
																<!--end::Title-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<img class="w-20px h-20px" src="{{ asset('/public/assets/media/svg/brand-logos/tvit.svg') }}" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column justify-content-start fw-semibold">
																	<span class="fs-6 fw-semibold">Company Re-branding</span>
																	<span class="fs-7 fw-semibold text-muted">Web Development</span>
																</div>
																<!--end::Title-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<img class="w-20px h-20px" src="{{ asset('/public/assets/media/svg/misc/infography.svg') }}" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column justify-content-start fw-semibold">
																	<span class="fs-6 fw-semibold">Business Analytics App</span>
																	<span class="fs-7 fw-semibold text-muted">Administration</span>
																</div>
																<!--end::Title-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<img class="w-20px h-20px" src="{{ asset('/public/assets/media/svg/brand-logos/leaf.svg') }}" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column justify-content-start fw-semibold">
																	<span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
																	<span class="fs-7 fw-semibold text-muted">Marketing</span>
																</div>
																<!--end::Title-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<img class="w-20px h-20px" src="{{ asset('/public/assets/media/svg/brand-logos/tower.svg') }}" alt="" />
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column justify-content-start fw-semibold">
																	<span class="fs-6 fw-semibold">Tower Group Website</span>
																	<span class="fs-7 fw-semibold text-muted">Google Adwords</span>
																</div>
																<!--end::Title-->
															</a>
															<!--end::Item-->
															<!--begin::Category title-->
															<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
															<!--end::Category title-->
															<!--begin::Item-->
															<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-outline ki-notepad fs-2 text-primary"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column">
																	<span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
																	<span class="fs-7 fw-semibold text-muted">#45670</span>
																</div>
																<!--end::Title-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-outline ki-frame fs-2 text-primary"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column">
																	<span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
																	<span class="fs-7 fw-semibold text-muted">#45690</span>
																</div>
																<!--end::Title-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-outline ki-message-text-2 fs-2 text-primary"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column">
																	<span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
																	<span class="fs-7 fw-semibold text-muted">#21090</span>
																</div>
																<!--end::Title-->
															</a>
															<!--end::Item-->
															<!--begin::Item-->
															<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-outline ki-profile-circle fs-2 text-primary"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column">
																	<span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
																	<span class="fs-7 fw-semibold text-muted">#34560</span>
																</div>
																<!--end::Title-->
															</a>
															<!--end::Item-->
														</div>
														<!--end::Items-->
													</div>
													<!--end::Recently viewed-->
													<!--begin::Recently viewed-->
													<div class="" data-kt-search-element="main">
														<!--begin::Heading-->
														<div class="d-flex flex-stack fw-semibold mb-4">
															<!--begin::Label-->
															<span class="text-muted fs-6 me-2">Recently Searched:</span>
															<!--end::Label-->
															<!--begin::Toolbar-->
															<div class="d-flex" data-kt-search-element="toolbar">
																<!--begin::Preferences toggle-->
																<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
																	<i class="ki-outline ki-setting-2 fs-2"></i>
																</div>
																<!--end::Preferences toggle-->
																<!--begin::Advanced search toggle-->
																<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
																	<i class="ki-outline ki-down fs-2"></i>
																</div>
																<!--end::Advanced search toggle-->
															</div>
															<!--end::Toolbar-->
														</div>
														<!--end::Heading-->
														<!--begin::Items-->
														<div class="scroll-y mh-200px mh-lg-325px">
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-outline ki-laptop fs-2 text-primary"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
																	<span class="fs-7 text-muted fw-semibold">#45789</span>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-outline ki-chart-simple fs-2 text-primary"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
																	<span class="fs-7 text-muted fw-semibold">#84050</span>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-outline ki-chart fs-2 text-primary"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
																	<span class="fs-7 text-muted fw-semibold">#84250</span>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
																	<span class="fs-7 text-muted fw-semibold">#67945</span>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-outline ki-sms fs-2 text-primary"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
																	<span class="fs-7 text-muted fw-semibold">#84250</span>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-outline ki-bank fs-2 text-primary"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
																	<span class="fs-7 text-muted fw-semibold">#45690</span>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
																	<span class="fs-7 text-muted fw-semibold">#24005</span>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Items-->
													</div>
													<!--end::Recently viewed-->
													<!--begin::Empty-->
													<div data-kt-search-element="empty" class="text-center d-none">
														<!--begin::Icon-->
														<div class="pt-10 pb-10">
															<i class="ki-outline ki-search-list fs-4x opacity-50"></i>
														</div>
														<!--end::Icon-->
														<!--begin::Message-->
														<div class="pb-15 fw-semibold">
															<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
															<div class="text-muted fs-7">Please try again with a different query</div>
														</div>
														<!--end::Message-->
													</div>
													<!--end::Empty-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Preferences-->
												<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
													<!--begin::Heading-->
													<h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
													<!--end::Heading-->
													<!--begin::Input group-->
													<div class="mb-5">
														<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-5">
														<!--begin::Radio group-->
														<div class="nav-group nav-group-fluid">
															<!--begin::Option-->
															<label>
																<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
																<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
															</label>
															<!--end::Option-->
															<!--begin::Option-->
															<label>
																<input type="radio" class="btn-check" name="type" value="users" />
																<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
															</label>
															<!--end::Option-->
															<!--begin::Option-->
															<label>
																<input type="radio" class="btn-check" name="type" value="orders" />
																<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
															</label>
															<!--end::Option-->
															<!--begin::Option-->
															<label>
																<input type="radio" class="btn-check" name="type" value="projects" />
																<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
															</label>
															<!--end::Option-->
														</div>
														<!--end::Radio group-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-5">
														<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-5">
														<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-5">
														<!--begin::Radio group-->
														<div class="nav-group nav-group-fluid">
															<!--begin::Option-->
															<label>
																<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
																<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
															</label>
															<!--end::Option-->
															<!--begin::Option-->
															<label>
																<input type="radio" class="btn-check" name="attachment" value="any" />
																<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
															</label>
															<!--end::Option-->
														</div>
														<!--end::Radio group-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-5">
														<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
															<option value="next">Within the next</option>
															<option value="last">Within the last</option>
															<option value="between">Between</option>
															<option value="on">On</option>
														</select>
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-8">
														<!--begin::Col-->
														<div class="col-6">
															<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-6">
															<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
																<option value="days">Days</option>
																<option value="weeks">Weeks</option>
																<option value="months">Months</option>
																<option value="years">Years</option>
															</select>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="d-flex justify-content-end">
														<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
														<a href="../../demo31/dist/pages/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
													</div>
													<!--end::Actions-->
												</form>
												<!--end::Preferences-->
												<!--begin::Preferences-->
												<form data-kt-search-element="preferences" class="pt-1 d-none">
													<!--begin::Heading-->
													<h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
													<!--end::Heading-->
													<!--begin::Input group-->
													<div class="pb-4 border-bottom">
														<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
															<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
															<input class="form-check-input" type="checkbox" value="1" checked="checked" />
														</label>
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="py-4 border-bottom">
														<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
															<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
															<input class="form-check-input" type="checkbox" value="1" checked="checked" />
														</label>
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="py-4 border-bottom">
														<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
															<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
															<input class="form-check-input" type="checkbox" value="1" />
														</label>
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="py-4 border-bottom">
														<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
															<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
															<input class="form-check-input" type="checkbox" value="1" checked="checked" />
														</label>
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="py-4 border-bottom">
														<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
															<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
															<input class="form-check-input" type="checkbox" value="1" />
														</label>
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="d-flex justify-content-end pt-7">
														<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
														<button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
													</div>
													<!--end::Actions-->
												</form>
												<!--end::Preferences-->
											</div>
											<!--end::Menu-->
										</div>
										<!--end::Search-->
									</div>
									<!--end::Search-->
									<a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
									<i class="ki-outline ki-plus-square fs-3"></i>Sales</a>
									<a href="#" class="btn btn-sm btn-flex btn-primary align-self-center ms-5 ms-lg-5 px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
									<i class="ki-outline ki-plus-square fs-3"></i>Appointment</a>
								</div>


								
								<div class="header-right d-flex">
									<!--begin::Quick Links-->
									<div class="app-navbar-item ms-3 ms-md-6">
										<!--begin::Menu- wrapper-->
										<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-35px h-md-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<i class="ki-outline ki-calendar fs-1"></i>
										</div>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
											<!--begin::Heading-->
											<div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url({{ asset('/public/assets/media/misc/menu-header-bg.jpg') }}">
												<!--begin::Title-->
												<h3 class="text-white fw-semibold mb-3">Quick Links</h3>
												<!--end::Title-->
												<!--begin::Status-->
												<span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending tasks</span>
												<!--end::Status-->
											</div>
											<!--end::Heading-->
											<!--begin:Nav-->
											<div class="row g-0">
												<!--begin:Item-->
												<div class="col-6">
													<a href="../../demo31/dist/apps/projects/budget.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
														<i class="ki-outline ki-dollar fs-3x text-primary mb-2"></i>
														<span class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>
														<span class="fs-7 text-gray-400">eCommerce</span>
													</a>
												</div>
												<!--end:Item-->
												<!--begin:Item-->
												<div class="col-6">
													<a href="../../demo31/dist/apps/projects/settings.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
														<i class="ki-outline ki-sms fs-3x text-primary mb-2"></i>
														<span class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>
														<span class="fs-7 text-gray-400">Console</span>
													</a>
												</div>
												<!--end:Item-->
												<!--begin:Item-->
												<div class="col-6">
													<a href="../../demo31/dist/apps/projects/list.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
														<i class="ki-outline ki-abstract-41 fs-3x text-primary mb-2"></i>
														<span class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>
														<span class="fs-7 text-gray-400">Pending Tasks</span>
													</a>
												</div>
												<!--end:Item-->
												<!--begin:Item-->
												<div class="col-6">
													<a href="../../demo31/dist/apps/projects/users.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
														<i class="ki-outline ki-briefcase fs-3x text-primary mb-2"></i>
														<span class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>
														<span class="fs-7 text-gray-400">Latest cases</span>
													</a>
												</div>
												<!--end:Item-->
											</div>
											<!--end:Nav-->
											<!--begin::View more-->
											<div class="py-2 text-center border-top">
												<a href="../../demo31/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
												<i class="ki-outline ki-arrow-right fs-5"></i></a>
											</div>
											<!--end::View more-->
										</div>
										<!--end::Menu-->
										<!--end::Menu wrapper-->
									</div>
									<!--end::Quick Links-->
									<!--begin::My apps links-->
									<div class="app-navbar-item ms-3 ms-md-6">
										<!--begin::Menu wrapper-->
										<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-35px h-md-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<i class="ki-outline ki-abstract-26 fs-1"></i>
										</div>
										<!--begin::My apps-->
										<div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px" data-kt-menu="true">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">My Apps</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n3" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end">
															<i class="ki-outline ki-setting-3 fs-2"></i>
														</button>
														<!--begin::Menu 3-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
															<!--begin::Heading-->
															<div class="menu-item px-3">
																<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
															</div>
															<!--end::Heading-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Create Invoice</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link flex-stack px-3">Create Payment
																<span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																	<i class="ki-outline ki-information fs-6"></i>
																</span></a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Generate Bill</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
																<a href="#" class="menu-link px-3">
																	<span class="menu-title">Subscription</span>
																	<span class="menu-arrow"></span>
																</a>
																<!--begin::Menu sub-->
																<div class="menu-sub menu-sub-dropdown w-175px py-4">
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Plans</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Billing</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Statements</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu separator-->
																	<div class="separator my-2"></div>
																	<!--end::Menu separator-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3">
																			<!--begin::Switch-->
																			<label class="form-check form-switch form-check-custom form-check-solid">
																				<!--begin::Input-->
																				<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																				<!--end::Input-->
																				<!--end::Label-->
																				<span class="form-check-label text-muted fs-6">Recuring</span>
																				<!--end::Label-->
																			</label>
																			<!--end::Switch-->
																		</div>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu sub-->
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3 my-1">
																<a href="#" class="menu-link px-3">Settings</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu 3-->
														<!--end::Menu-->
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body py-5">
													<!--begin::Scroll-->
													<div class="mh-450px scroll-y me-n5 pe-5">
														<!--begin::Row-->
														<div class="row g-2">
															<!--begin::Col-->
															<div class="col-4">
																<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																	<img src="{{ asset('/public/assets/media/svg/brand-logos/amazon.svg') }}" class="w-25px h-25px mb-2" alt="" />
																	<span class="fw-semibold">AWS</span>
																</a>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-4">
																<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																	<img src="{{ asset('/public/assets/media/svg/brand-logos/angular-icon-1.svg') }}" class="w-25px h-25px mb-2" alt="" />
																	<span class="fw-semibold">AngularJS</span>
																</a>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-4">
																<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																	<img src="{{ asset('/public/assets/media/svg/brand-logos/atica.svg') }}" class="w-25px h-25px mb-2" alt="" />
																	<span class="fw-semibold">Atica</span>
																</a>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-4">
																<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																	<img src="{{ asset('/public/assets/media/svg/brand-logos/beats-electronics.svg') }}" class="w-25px h-25px mb-2" alt="" />
																	<span class="fw-semibold">Music</span>
																</a>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-4">
																<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																	<img src="{{ asset('/public/assets/media/svg/brand-logos/codeigniter.svg') }}" class="w-25px h-25px mb-2" alt="" />
																	<span class="fw-semibold">Codeigniter</span>
																</a>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-4">
																<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																	<img src="{{ asset('/public/assets/media/svg/brand-logos/bootstrap-4.svg') }}" class="w-25px h-25px mb-2" alt="" />
																	<span class="fw-semibold">Bootstrap</span>
																</a>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-4">
																<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																	<img src="{{ asset('/public/assets/media/svg/brand-logos/google-tag-manager.svg') }}" class="w-25px h-25px mb-2" alt="" />
																	<span class="fw-semibold">GTM</span>
																</a>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-4">
																<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																	<img src="{{ asset('/public/assets/media/svg/brand-logos/disqus.svg') }}" class="w-25px h-25px mb-2" alt="" />
																	<span class="fw-semibold">Disqus</span>
																</a>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-4">
																<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																	<img src="{{ asset('/public/assets/media/svg/brand-logos/dribbble-icon-1.svg') }}" class="w-25px h-25px mb-2" alt="" />
																	<span class="fw-semibold">Dribble</span>
																</a>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-4">
																<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																	<img src="{{ asset('/public/assets/media/svg/brand-logos/google-play-store.svg') }}" class="w-25px h-25px mb-2" alt="" />
																	<span class="fw-semibold">Play Store</span>
																</a>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-4">
																<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																	<img src="{{ asset('/public/assets/media/svg/brand-logos/google-podcasts.svg') }}" class="w-25px h-25px mb-2" alt="" />
																	<span class="fw-semibold">Podcasts</span>
																</a>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-4">
																<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																	<img src="{{ asset('/public/assets/media/svg/brand-logos/figma-1.svg') }}" class="w-25px h-25px mb-2" alt="" />
																	<span class="fw-semibold">Figma</span>
																</a>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-4">
																<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																	<img src="{{ asset('/public/assets/media/svg/brand-logos/github.svg') }}" class="w-25px h-25px mb-2" alt="" />
																	<span class="fw-semibold">Github</span>
																</a>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-4">
																<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																	<img src="{{ asset('/public/assets/media/svg/brand-logos/gitlab.svg') }}" class="w-25px h-25px mb-2" alt="" />
																	<span class="fw-semibold">Gitlab</span>
																</a>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-4">
																<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																	<img src="{{ asset('/public/assets/media/svg/brand-logos/instagram-2-1.svg') }}" class="w-25px h-25px mb-2" alt="" />
																	<span class="fw-semibold">Instagram</span>
																</a>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-4">
																<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
																	<img src="{{ asset('/public/assets/media/svg/brand-logos/pinterest-p.svg') }}" class="w-25px h-25px mb-2" alt="" />
																	<span class="fw-semibold">Pinterest</span>
																</a>
															</div>
															<!--end::Col-->
														</div>
														<!--end::Row-->
													</div>
													<!--end::Scroll-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
										</div>
										<!--end::My apps-->
										<!--end::Menu wrapper-->
									</div>
									<!--end::My apps links-->
									<!--begin::Notifications-->
									<div class="app-navbar-item ms-3 ms-md-6">
										<!--begin::Menu- wrapper-->
										<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-35px h-md-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<i class="ki-outline ki-notification-on fs-1"></i>
											<div class="badge badge-circle badge-danger position-absolute translate-middle bottom-0 ms-10 mt-10 h-15px w-15px fs-9">5</div>
										</div>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
											<!--begin::Heading-->
											<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url({{ asset('/public/assets/media/misc/menu-header-bg.jpg') }}">
												<!--begin::Title-->
												<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
												<span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
												<!--end::Title-->
												<!--begin::Tabs-->
												<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
													<li class="nav-item">
														<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
													</li>
													<li class="nav-item">
														<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
													</li>
													<li class="nav-item">
														<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
													</li>
												</ul>
												<!--end::Tabs-->
											</div>
											<!--end::Heading-->
											<!--begin::Tab content-->
											<div class="tab-content">
												<!--begin::Tab panel-->
												<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
													<!--begin::Items-->
													<div class="scroll-y mh-325px my-5 px-8">
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center">
																<!--begin::Symbol-->
																<div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-primary">
																		<i class="ki-outline ki-abstract-28 fs-2 text-primary"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="mb-0 me-2">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
																	<div class="text-gray-400 fs-7">Phase 1 development</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">1 hr</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center">
																<!--begin::Symbol-->
																<div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-danger">
																		<i class="ki-outline ki-information fs-2 text-danger"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="mb-0 me-2">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
																	<div class="text-gray-400 fs-7">Confidential staff documents</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">2 hrs</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center">
																<!--begin::Symbol-->
																<div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-warning">
																		<i class="ki-outline ki-briefcase fs-2 text-warning"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="mb-0 me-2">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
																	<div class="text-gray-400 fs-7">Corporeate staff profiles</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">5 hrs</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center">
																<!--begin::Symbol-->
																<div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-success">
																		<i class="ki-outline ki-abstract-12 fs-2 text-success"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="mb-0 me-2">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
																	<div class="text-gray-400 fs-7">New frontend admin theme</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">2 days</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center">
																<!--begin::Symbol-->
																<div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-primary">
																		<i class="ki-outline ki-colors-square fs-2 text-primary"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="mb-0 me-2">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
																	<div class="text-gray-400 fs-7">Product launch status update</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">21 Jan</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center">
																<!--begin::Symbol-->
																<div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-info">
																		<i class="ki-outline ki-picture fs-2 text-info"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="mb-0 me-2">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
																	<div class="text-gray-400 fs-7">Collection of banner images</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">21 Jan</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center">
																<!--begin::Symbol-->
																<div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-warning">
																		<i class="ki-outline ki-color-swatch fs-2 text-warning"></i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="mb-0 me-2">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
																	<div class="text-gray-400 fs-7">Collection of SVG icons</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">20 March</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Items-->
													<!--begin::View more-->
													<div class="py-3 text-center border-top">
														<a href="../../demo31/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
														<i class="ki-outline ki-arrow-right fs-5"></i></a>
													</div>
													<!--end::View more-->
												</div>
												<!--end::Tab panel-->
												<!--begin::Tab panel-->
												<div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column px-9">
														<!--begin::Section-->
														<div class="pt-10 pb-0">
															<!--begin::Title-->
															<h3 class="text-dark text-center fw-bold">Get Pro Access</h3>
															<!--end::Title-->
															<!--begin::Text-->
															<div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
															<!--end::Text-->
															<!--begin::Action-->
															<div class="text-center mt-5 mb-9">
																<a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
															</div>
															<!--end::Action-->
														</div>
														<!--end::Section-->
														<!--begin::Illustration-->
														<div class="text-center px-4">
															<img class="mw-100 mh-200px" alt="image" src="{{ asset('/public/assets/media/illustrations/sketchy-1/1.png') }}" />
														</div>
														<!--end::Illustration-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Tab panel-->
												<!--begin::Tab panel-->
												<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
													<!--begin::Items-->
													<div class="scroll-y mh-325px my-5 px-8">
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-success me-4">200 OK</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">Just now</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">2 hrs</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-success me-4">200 OK</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">5 hrs</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">2 days</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-success me-4">200 OK</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">1 week</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-success me-4">200 OK</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">Mar 5</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">May 15</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">Apr 3</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">Jun 30</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">Jul 10</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">Sep 10</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center me-2">
																<!--begin::Code-->
																<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
																<!--end::Code-->
																<!--begin::Title-->
																<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">Dec 10</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Items-->
													<!--begin::View more-->
													<div class="py-3 text-center border-top">
														<a href="../../demo31/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
														<i class="ki-outline ki-arrow-right fs-5"></i></a>
													</div>
													<!--end::View more-->
												</div>
												<!--end::Tab panel-->
											</div>
											<!--end::Tab content-->
										</div>
										<!--end::Menu-->
										<!--end::Menu wrapper-->
									</div>
									<!--end::Notifications-->
									<!--begin::User menu-->
									<div class="app-navbar-item ms-3 ms-md-6" id="kt_header_user_menu_toggle">
										<!--begin::Menu wrapper-->
										<div class="cursor-pointer symbol symbol-30px symbol-md-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<img class="symbol symbol-circle symbol-30px symbol-md-35px" src="{{ asset('/public/assets/media/avatars/300-1.jpg') }}" alt="user" />
										</div>
										<!--begin::User account menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img alt="Logo" src="{{ asset('/public/assets/media/avatars/300-1.jpg') }}" />
													</div>
													<!--end::Avatar-->
													<!--begin::Username-->
													<div class="d-flex flex-column">
														<div class="fw-bold d-flex align-items-center fs-5">{{@Auth::user()->name}}
														<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
														<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{@Auth::user()->email}}</a>
													</div>
													<!--end::Username-->
												</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="../../demo31/dist/account/overview.html" class="menu-link px-5">My Profile</a>
											</div>
											<!--end::Menu item-->

											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="subscription.html" class="menu-link px-5">Subscription</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="mystatement.html" class="menu-link px-5">My statement</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="../../demo31/dist/apps/projects/list.html" class="menu-link px-5">
													<span class="menu-text">My Projects</span>
													<span class="menu-badge">
														<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
													</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
												<a href="#" class="menu-link px-5">
													<span class="menu-title">My Subscription</span>
													<span class="menu-arrow"></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo31/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo31/dist/account/billing.html" class="menu-link px-5">Billing</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo31/dist/account/statements.html" class="menu-link px-5">Payments</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo31/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
														<span class="ms-2" data-bs-toggle="tooltip" title="View your statements">
															<i class="ki-outline ki-information fs-7"></i>
														</span></a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator my-2"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3">
															<label class="form-check form-switch form-check-custom form-check-solid">
																<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																<span class="form-check-label text-muted fs-7">Notifications</span>
															</label>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="../../demo31/dist/account/statements.html" class="menu-link px-5">My Statements</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
												<a href="#" class="menu-link px-5">
													<span class="menu-title position-relative">Mode
													<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
														<i class="ki-outline ki-night-day theme-light-show fs-2"></i>
														<i class="ki-outline ki-moon theme-dark-show fs-2"></i>
													</span></span>
												</a>
												<!--begin::Menu-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
													<!--begin::Menu item-->
													<div class="menu-item px-3 my-0">
														<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
															<span class="menu-icon" data-kt-element="icon">
																<i class="ki-outline ki-night-day fs-2"></i>
															</span>
															<span class="menu-title">Light</span>
														</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3 my-0">
														<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
															<span class="menu-icon" data-kt-element="icon">
																<i class="ki-outline ki-moon fs-2"></i>
															</span>
															<span class="menu-title">Dark</span>
														</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3 my-0">
														<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
															<span class="menu-icon" data-kt-element="icon">
																<i class="ki-outline ki-screen fs-2"></i>
															</span>
															<span class="menu-title">System</span>
														</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
												<a href="#" class="menu-link px-5">
													<span class="menu-title position-relative">Language
													<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
													<img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('/public/assets/media/flags/united-states.svg') }}" alt="" /></span></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo31/dist/account/settings.html" class="menu-link d-flex px-5 active">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="{{ asset('/public/assets/media/flags/united-states.svg') }}" alt="" />
														</span>English</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo31/dist/account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="{{ asset('/public/assets/media/flags/spain.svg') }}" alt="" />
														</span>Spanish</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo31/dist/account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="{{ asset('/public/assets/media/flags/germany.svg') }}" alt="" />
														</span>German</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo31/dist/account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="{{ asset('/public/assets/media/flags/japan.svg') }}" alt="" />
														</span>Japanese</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo31/dist/account/settings.html" class="menu-link d-flex px-5">
														<span class="symbol symbol-20px me-4">
															<img class="rounded-1" src="{{ asset('/public/assets/media/flags/france.svg') }}" alt="" />
														</span>French</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5 my-1">
												<a href="../../demo31/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="menu-link px-5">Sign Out</a>
											</div>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              @csrf
                                              </form>
											<!--end::Menu item-->
										</div>
										<!--end::User account menu-->
										<!--end::Menu wrapper-->
									</div>
									<!--end::User menu-->
								</div>

								<!--begin::Header menu toggle-->
								<div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
									<div class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
										<i class="ki-outline ki-text-align-left fs-1"></i>
									</div>
								</div>
								<!--end::Header menu toggle-->
							</div>
							<!--end::Navbar-->
						</div>
						<!--end::Header wrapper-->
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
