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
									<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Country Config</h1>
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
										<li class="breadcrumb-item text-muted">Country Config</li>
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
								<!--begin::Navbar-->
								
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
														<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#partnerconfig1">Country config</a>
													</li>
													<!--end:::Tab item-->
													<!--begin:::Tab item-->
													<li class="nav-item">
														<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#partnerconfig2">Partner type & country</a>
													</li>
													<!--end:::Tab item-->
													<!--begin:::Tab item-->
													<li class="nav-item">
														<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#partnerconfig3">Franchise list (Country)</a> 
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
																<input type="text" data-kt-ecommerce-order-filter="search" id="search_country" class="form-control form-control-solid w-250px ps-12" placeholder="Search" />
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
																	    <i class="ki-duotone ki-plus fs-2"></i>Add Country
																	</button>
																	<!--end::Add Country-->

																</div>
																<!--end::Toolbar-->
																<!--begin::Modal - Add task-->

																<div class="modal fade" tabindex="-1" id="kt_modal_scrollable_2">
																    <div class="modal-dialog modal-dialog-scrollable">
																        <div class="modal-content">
																            <div class="modal-header">
																                <h5 class="modal-title">Add Country</h5>

																                <!--begin::Close-->
																                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
																                </div>
																                <!--end::Close-->
																            </div>

																            <div class="modal-body">
																                <!--begin::Form-->
																				<form class="form" name="country_form" method="post" action="">
																					<!--begin::Scroll-->
																					<div class="d-flex flex-column scroll-y me-n7 pe-7">

																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label for="kt_docs_select2_country" class="form-label">Select a country</label>
																							<div class="form-floating border rounded">
																							    <select class="form-select" placeholder="..." id="kt_docs_select2_country" name="country">
																							        <option value="">Select Country</option>
																									@foreach(getCountryList() as $con_val)
																	                                <option value="{{$con_val->id}}" data-kt-select2-country="{{asset('/assets/media/flags/'.strtolower(str_replace(' ','-',$con_val->name.'.svg')))}}">{{$con_val->name}}</option>
																									@endforeach
																	                               
																							    </select>
																							</div>
																							<!--end::Input-->
																						</div>
																						<!--end::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label class="required fw-semibold fs-6 mb-2">Country Code</label>
																							<!--end::Label-->
																							<!--begin::Input-->
																							<input type="text" name="country_code"  id="country_code" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Country Code"/>
																							<!--end::Input-->
																						</div>
																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label class="required fw-semibold fs-6 mb-2">Currency Code</label>
																							<!--end::Label-->
																							<!--begin::Input-->
																							<input type="text" name="currency_code" id="currency_code" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Currency Code"/>
																							<!--end::Input-->
																						</div>
																						<!--end::Input group-->

																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label class="required fw-semibold fs-6 mb-2">Currency Sign</label>
																							<!--end::Label-->
																							<!--begin::Input-->
																							<input type="text" name="currency_sign" id="currency_sign" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Currency Sign"/>
																							<!--end::Input-->
																						</div>
																						<!--end::Input group-->

																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label class="required fw-semibold fs-6 mb-2">Country Short Name</label>
																							<!--end::Label-->
																							<!--begin::Input-->
																							<input type="text" name="short_name" id="short_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Country Short Name"/>
																							<!--end::Input-->
																						</div>
																						<!--end::Input group-->

																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label class="required fw-semibold fs-6 mb-2">Language</label>
																							<!--end::Label-->
																							<!--begin::Input-->
																							<select name="language" id="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a Language..." class="form-select mb-2">
																								<option></option>
																								<option value="id">Bahasa Indonesia - Indonesian</option>
																								<option value="msa">Bahasa Melayu - Malay</option>
																								<option value="ca">Català - Catalan</option>
																								<option value="cs">Čeština - Czech</option>
																								<option value="da">Dansk - Danish</option>
																								<option value="de">Deutsch - German</option>
																								<option value="en">English</option>
																								<option value="en-gb">English UK - British English</option>
																								<option value="es">Español - Spanish</option>
																								<option value="fil">Filipino</option>
																								<option value="fr">Français - French</option>
																								<option value="ga">Gaeilge - Irish (beta)</option>
																								<option value="gl">Galego - Galician (beta)</option>
																								<option value="hr">Hrvatski - Croatian</option>
																								<option value="it">Italiano - Italian</option>
																								<option value="hu">Magyar - Hungarian</option>
																								<option value="nl">Nederlands - Dutch</option>
																								<option value="no">Norsk - Norwegian</option>
																								<option value="pl">Polski - Polish</option>
																								<option value="pt">Português - Portuguese</option>
																								<option value="ro">Română - Romanian</option>
																								<option value="sk">Slovenčina - Slovak</option>
																								<option value="fi">Suomi - Finnish</option>
																								<option value="sv">Svenska - Swedish</option>
																								<option value="vi">Tiếng Việt - Vietnamese</option>
																								<option value="tr">Türkçe - Turkish</option>
																								<option value="el">Ελληνικά - Greek</option>
																								<option value="bg">Български език - Bulgarian</option>
																								<option value="ru">Русский - Russian</option>
																								<option value="sr">Српски - Serbian</option>
																								<option value="uk">Українська мова - Ukrainian</option>
																								<option value="he">עִבְרִית - Hebrew</option>
																								<option value="ur">اردو - Urdu (beta)</option>
																								<option value="ar">العربية - Arabic</option>
																								<option value="fa">فارسی - Persian</option>
																								<option value="mr">मराठी - Marathi</option>
																								<option value="hi">हिन्दी - Hindi</option>
																								<option value="bn">বাংলা - Bangla</option>
																								<option value="gu">ગુજરાતી - Gujarati</option>
																								<option value="ta">தமிழ் - Tamil</option>
																								<option value="kn">ಕನ್ನಡ - Kannada</option>
																								<option value="th">ภาษาไทย - Thai</option>
																								<option value="ko">한국어 - Korean</option>
																								<option value="ja">日本語 - Japanese</option>
																								<option value="zh-cn">简体中文 - Simplified Chinese</option>
																								<option value="zh-tw">繁體中文 - Traditional Chinese</option>
																							</select>
																							<!--end::Input-->
																						</div>
																						<!--end::Input group-->

																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label class="required fw-semibold fs-6 mb-2">Phone Number Length</label>
																							<!--end::Label-->
																							<!--begin::Input-->
																							<input type="text" name="no_lenght" id="no_lenght" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Phone Number Length" />
																							<!--end::Input-->
																						</div>
																						<!--end::Input group-->

																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label class="required fw-semibold fs-6 mb-2">PIN</label>
																							<!--end::Label-->
																							<!--begin::Input-->
																							<input type="text" name="pin" id="pin" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="PIN" />
																							<!--end::Input-->
																						</div>
																						<!--end::Input group-->

																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label class="required fw-semibold fs-6 mb-2">Status</label>
																							<!--end::Label-->
																							<div class="form-check form-switch form-check-custom form-check-solid me-10">
																								<input class="form-check-input h-30px w-50px" name="status" type="checkbox" value="1" id="status" checked="checked" />
																								<label class="form-check-label" for="status">Status</label>
																							</div>
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
														<table class="table align-middle table-row-dashed fs-6 gy-5" id="country-table">
															<thead>
																<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
																	<th class="min-w-125px">Country</th>
																	<th class="min-w-125px">Country Code</th>
																	<th class="min-w-125px">Currency Code</th>
																	<th class="min-w-125px">Currency Sign</th>
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

											<!--begin::Tab pane-->
											<div class="tab-pane fade" id="partnerconfig2" role="tab-panel">

												<!--begin::Products-->
												<div class="card card-flush mb-8">
													<!--begin::Card header-->
													<div class="card-header align-items-center py-5 gap-2 gap-md-5">

														<!--begin::Card title-->
														<div class="card-title">
															<!--begin::Search-->
															<div class="d-flex align-items-center position-relative my-1">
																<i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
																<input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
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
																	    <i class="ki-duotone ki-plus fs-2"></i>Add Partner type
																	</button>
																	<!--end::Add Country-->

																</div>
																<!--end::Toolbar-->

 
																<!--begin::Modal - Add task-->
																<div class="modal fade" tabindex="-1" id="kt_modal_scrollable_3">
																    <div class="modal-dialog modal-dialog-scrollable">
																        <div class="modal-content">
																            <div class="modal-header">
																                <h5 class="modal-title">Add Partner type</h5>

																                <!--begin::Close-->
																                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
																                </div>
																                <!--end::Close-->
																            </div>

																            <div class="modal-body">
																                <!--begin::Form-->
																				<form class="form" name="partnertype_form" method="post" action="">
																					<!--begin::Scroll-->
																					<div class="d-flex flex-column scroll-y me-n7 pe-7">

																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label class="required fw-semibold fs-6 mb-2">Partner type</label>
																							<!--end::Label-->
																							<!--begin::Input-->
																							<input type="text" name="partner_type" id="partner_type" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Partner type"/>
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
														<table class="table align-middle table-row-dashed fs-6 gy-5" id="partnertype-table">
															<thead>
																<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
																	<th class="min-w-125px">S No.</th>
																	<th class="min-w-125px">Partner type</th>
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

												<div class="card card-flush mb-8">

													<div class="card-header">
														<h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Partner type & Country definition</h2>
													</div>

													<!--begin::Card header-->
													<div class="card-header align-items-center pb-5 gap-2 gap-md-5">

														<!--begin::Card title-->
														<div class="card-title">
															<!--begin::Search-->
															<div class="d-flex align-items-center position-relative my-1">
																<i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
																<input type="text" data-kt-filter2="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" id="search_partnerdetails"/>
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
																	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_4">
																	    <i class="ki-duotone ki-plus fs-2"></i>Add Partner details
																	</button>
																	<!--end::Add Country-->
																</div>
																<!--end::Toolbar-->
																<!--begin::Modal - Add task-->
																<div class="modal fade" tabindex="-1" id="kt_modal_scrollable_4">
																    <div class="modal-dialog modal-dialog-scrollable">
																        <div class="modal-content">
																            <div class="modal-header">
																                <h5 class="modal-title">Add Partner details</h5>
  
																                <!--begin::Close-->
																                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
																                </div>
																                <!--end::Close-->
																            </div>

																            <div class="modal-body">
																                <!--begin::Form-->
																				<form class="form" name="partnerdetails_form" method="post" action="">
																					<!--begin::Scroll-->
																					<div class="d-flex flex-column scroll-y me-n7 pe-7">

																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label for="kt_docs_select2_country2" class="form-label">Select a country</label>
																							<div class="form-floating border rounded">
																							    <select class="form-select" placeholder="..." id="kt_docs_select2_country2" name="country_prdtl">
																								<option value="">Select Country</option>
																							       @foreach(getCountryList() as $con_val)
																	                                <option value="{{$con_val->id}}" data-kt-select2-country="{{asset('/assets/media/flags/'.strtolower(str_replace(' ','-',$con_val->name.'.svg')))}}">{{$con_val->name}}</option>
																									@endforeach
																							    </select>
																							</div>
																							<!--end::Input-->
																						</div>
																						<!--end::Input group-->

																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label class="required fw-semibold fs-6 mb-2">Partner type</label>
																							<!--end::Label-->
																							<!--begin::Input-->
																							<select class="form-select mb-2" name="partner_type" id="partner_type_dtl" data-control="select2" data-placeholder="Select a Partner type...">
																							    <option value="">Select Partner Type</option>
																								@foreach(getPartnerType() as $par_val)
																	                                <option value="{{$par_val->id}}">{{$par_val->partner_name}}</option>
																									@endforeach
																							</select>
																							<!--end::Input-->
																						</div>
																						<!--end::Input group-->


																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label class="required fw-semibold fs-6 mb-2">Partner display name</label>
																							<!--end::Label-->
																							<!--begin::Input-->
																							<input type="text" name="partner_name" id="partner_name" class="form-control mb-3 mb-lg-0" placeholder="Partner display name" id="search_partnertype"/>
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
														<table class="table align-middle table-row-dashed fs-6 gy-5" id="partnerdetails-table">
															<thead>
																<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
																	<th class="min-w-125px">S No.</th>
																	<th class="min-w-125px">Country name</th>
																	<th class="min-w-125px">Partner type</th>
																	<th class="min-w-125px">Partner display name</th>
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

												<div class="card card-flush">
													<div class="card-body pt-8 pb-0">
														<!--begin::Form-->
														<form class="form" name="disable_form" id="disable_form" method="post" action="">
															<!--begin::Scroll-->
															<div class="row align-items-end">

																<div class="col-md-3 mb-7">
																	<label for="kt_docs_select2_country3" class="form-label">Select a country</label>
																	<div class="form-floating border rounded">
																	    <select class="form-select" placeholder="..." name="dis_country" id="kt_docs_select2_country3">
																	      <option value="">Select Country</option>
																			@foreach(getCountryList() as $con_val)
																			<option value="{{$con_val->id}}" data-kt-select2-country="{{asset('/assets/media/flags/'.strtolower(str_replace(' ','-',$con_val->name.'.svg')))}}">{{$con_val->name}}</option>
																			@endforeach
																	    </select>
																	</div>
																</div>

																<div class="col-md-3 mb-7">
																	<!--begin::Label-->
																	<label class="required fw-semibold fs-6 mb-2">Select State</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select class="form-select form-select-solid" name="dis_state" id="dis_state" data-control="select2" data-placeholder="Select an option">
																	    <option value="">Select State</option>
																	    <option value="1">Uttar Pradesh</option>
																	    <option value="2">Haryana</option>
																	    <option value="2">Maharashtra</option>
																	    <option value="2">Assam</option>
																	    <option value="2">Uttarakhand</option>
																	    <option value="2">Bihar</option>
																	</select>
																	<!--end::Input-->
																</div>

																<div class="col-md-3 mb-7">
																	<!--begin::Label-->
																	<label class="required fw-semibold fs-6 mb-2">Enter City</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select class="form-select form-select-solid" name="dis_city" id="dis_city" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
															            <option value="">Select City</option>
															            <option value="1">Noida</option>
															            <option value="2">Dehradun</option>
															            <option value="3">Lucknow</option>
															            <option value="4">Gurugram</option>
															            <option value="5">Meerut</option>
														        </select>

																	<!--end::Input-->
																</div>

																<!--begin::Actions-->
																<div class="col-md-3 mb-7">
																	<button type="submit" class="btn btn-primary">
																		<span class="indicator-label">Add</span>
																		<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																</div>
																<!--end::Actions-->

															</div>
															<!--end::Scroll-->
														</form>
														<!--end::Form-->
													</div>

													<div class="card-header">
														<h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Disable City</h2>
													</div>

													<!--begin::Card header-->
													<div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-0">

														<!--begin::Card title-->
														<div class="card-title">
															<!--begin::Search-->
															<div class="d-flex align-items-center position-relative my-1">
																<i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
																<input type="text" data-kt-filter5="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search" id="search_disablecity"/>
															</div>
															<!--end::Search-->
														</div>
														<!--end::Card title-->

													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<!--begin::Table-->
														<table class="table align-middle table-row-dashed fs-6 gy-5" id="disable-table">
															<thead>
																<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
																	<th class="min-w-125px">S No.</th>
																	<th class="min-w-125px">Country</th>
																	<th class="min-w-125px">State</th>
																	<th class="min-w-125px">City</th>
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


											</div>
											<!--end::Tab pane-->

											<!--begin::Tab pane-->
											<div class="tab-pane fade" id="partnerconfig3" role="tab-panel">
												<!--begin::Products-->
												<div class="card card-flush mb-12">
													<!--begin::Card header-->
													<div class="card-header align-items-center py-5 gap-2 gap-md-5">

														<!--begin::Card title-->
														<div class="card-title">
															<!--begin::Search-->
															<div class="d-flex align-items-center position-relative my-1">
																<i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
																<input type="text" data-kt-filter3="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
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
																	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_5">
																	    <i class="ki-duotone ki-plus fs-2"></i>Add Franchise
																	</button>
																	<!--end::Add Country-->
																</div>
																<!--end::Toolbar-->
																<!--begin::Modal - Add task-->
																<!--begin::Modal - Add task-->
																<div class="modal fade" tabindex="-1" id="kt_modal_scrollable_5">
																    <div class="modal-dialog modal-dialog-scrollable">
																        <div class="modal-content">
																            <div class="modal-header">
																                <h5 class="modal-title">Add Franchise</h5>

																                <!--begin::Close-->
																                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
																                </div>
																                <!--end::Close-->
																            </div>

																            <div class="modal-body">
																                <!--begin::Form-->
																				<form class="form" name="franchise_form" method="post" action="">
																					<!--begin::Scroll-->
																					<div class="d-flex flex-column scroll-y me-n7 pe-7">

																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<label for="kt_docs_select2_country4" class="form-label">Select a country</label>
																							<div class="form-floating border rounded">
																							    <select class="form-select" placeholder="..." id="kt_docs_select2_country4" name="franchise_country">
																							        <option value="">Select Country</option>
																									@foreach(getCountryList() as $con_val)
																	                                <option value="{{$con_val->id}}" data-kt-select2-country="{{asset('/assets/media/flags/'.strtolower(str_replace(' ','-',$con_val->name.'.svg')))}}">{{$con_val->name}}</option>
																									@endforeach
																							    </select>
																							</div>
																						</div>
																						<!--end::Input group-->

																						<!--begin::Input group-->
																						<div class="fv-row mb-7">
																							<!--begin::Label-->
																							<label class="required fw-semibold fs-6 mb-2">Franchise Name</label>
																							<!--end::Label-->
																							<!--begin::Input-->
																							<input type="text" name="franchise_name" id="franchise_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Franchise name"/>
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
														<table class="table align-middle table-row-dashed fs-6 gy-5" id="franchise-table">
															<thead>
																<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
																	<th class="min-w-125px">S No.</th>
																	<th class="min-w-125px">Country name</th>
																	<th class="min-w-125px">Franchise name</th>
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
	
   $('#country-table').DataTable({
   processing: true,
   serverSide: true,
   pageLength: 10,
   filter: true,
   lengthChange: false,
   ajax: '{{ route("country.getAjaxList") }}',
   columns: [
      { data: 'country_id' },
      { data: 'country_code' },
	  { data: 'currency_code' },
      { data: 'currency_sign' },
	  { data: 'status' },
   ]
});
oTable = $('#country-table').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
$('#search_country').keyup(function(){
      oTable.search($(this).val()).draw() ;
})
  $("form[name='country_form']").validate({
    rules: {
      country: "required",
	  country_code: "required",
	  currency_code: "required",
	  currency_sign: "required",
	  short_name: "required",
	  language: "required",
	  no_lenght: "required",
      pin: "required",
	},
   
    submitHandler: function(form) {
     var formData = {
      country: $("#kt_docs_select2_country").val(),
      country_code: $("#country_code").val(),
      currency_code: $("#currency_code").val(),
	  currency_sign: $("#currency_sign").val(),
      short_name: $("#short_name").val(),
      language: $("#language").val(),
	  no_lenght: $("#no_lenght").val(),
      pin: $("#pin").val(),
	  status: $("#status").val(),
    };
	console.log(formData);
	  $.ajax({
				url:'https://webpristine.co.in/admin/save_country',
				data: formData,
				type: "POST",
				success:function(data)
				{
				  document.country_form.reset();
				  $('#kt_modal_scrollable_2').modal('hide');
				  $('#country-table').DataTable().ajax.reload();
				  swal("Your country created successfully!", {
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
          text: "To change status this country?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if(willDelete){
            $.ajax({
            url:'https://webpristine.co.in/admin/setting/edit-country-status/' + id+'/'+data_id,
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
                $('#country-table').DataTable().ajax.reload();
                }
            });
          }
          });
        });
    </script>
	
	<script>
// Wait for the DOM to be ready
$(function() {
	
   $('#franchise-table').DataTable({
   processing: true,
   serverSide: true,
   pageLength: 10,
   filter: true,
   lengthChange: false,
   ajax: '{{ route("franchise.getAjaxList") }}',
   columns: [
      { data: 'id' },
      { data: 'franchise_country' },
      { data: 'franchise_name' },
	  { data: 'status' },
   ]
});
oTable = $('#franchise-table').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
$('#search_franchise').keyup(function(){
      oTable.search($(this).val()).draw() ;
})
  $("form[name='franchise_form']").validate({
    rules: {
      franchise_country: "required",
	  franchise_name: "required",
	},
   
    submitHandler: function(form) {
     var formData = {
      franchise_country: $("#kt_docs_select2_country4").val(),
      franchise_name: $("#franchise_name").val(),
    };
	  $.ajax({
				url:'https://webpristine.co.in/admin/save_franchise',
				data: formData,
				type: "POST",
				success:function(data)
				{
				  document.country_form.reset();
				  $('#kt_modal_scrollable_5').modal('hide');
				  $('#franchise-table').DataTable().ajax.reload();
				  swal("Your franchise created successfully!", {
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
          text: "To change status this franchise?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if(willDelete){
            $.ajax({
            url:'https://webpristine.co.in/admin/setting/edit-franchise-status/' + id+'/'+data_id,
            type:'GET',
                beforeSend:function(){
                  $('.spinner-cls').show();
            },
                success:function(data)
                {
                  $('.spinner-cls').hide();
                  swal("Your franchise status has been changed!", {
                icon: "success",
              });
                $('#franchise-table').DataTable().ajax.reload();
                }
            });
          }
          });
        });
    </script>
	
		<script>
// Wait for the DOM to be ready
$(function() {
	
   $('#partnertype-table').DataTable({
   processing: true,
   serverSide: true,
   pageLength: 10,
   filter: true,
   lengthChange: false,
   ajax: '{{ route("partnertype.getAjaxList") }}',
   columns: [
      { data: 'id' },
      { data: 'partner_name' },
	  { data: 'status' },
   ]
});
oTable = $('#partnertype-table').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
$('#search_partnertype').keyup(function(){
      oTable.search($(this).val()).draw() ;
})
  $("form[name='partnertype_form']").validate({
    rules: {
      partner_type: "required",
	},
   
    submitHandler: function(form) {
     var formData = {
      partner_type: $("#partner_type").val(),
    };
	  $.ajax({
				url:'https://webpristine.co.in/admin/save_partnertype',
				data: formData,
				type: "POST",
				success:function(data)
				{
				  document.country_form.reset();
				  $('#kt_modal_scrollable_3').modal('hide');
				  $('#partnertype-table').DataTable().ajax.reload();
				  swal("Your partner type created successfully!", {
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
          text: "To change status this partner type?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if(willDelete){
            $.ajax({
            url:'https://webpristine.co.in/admin/setting/edit-partnertype-status/' + id+'/'+data_id,
            type:'GET',
                beforeSend:function(){
                  $('.spinner-cls').show();
            },
                success:function(data)
                {
                  $('.spinner-cls').hide();
                  swal("Your partner type status has been changed!", {
                icon: "success",
              });
                $('#partnertype-table').DataTable().ajax.reload();
                }
            });
          }
          });
        });
    </script>
	
	
			<script>
// Wait for the DOM to be ready
$(function() {
	
   $('#partnerdetails-table').DataTable({
   processing: true,
   serverSide: true,
   pageLength: 10,
   filter: true,
   lengthChange: false,
   ajax: '{{ route("partnerdetails.getAjaxList") }}',
   columns: [
      { data: 'id' },
	  { data: 'country' },
      { data: 'partner_type' },
	  { data: 'partner_name' },
	  { data: 'status' },
   ]
});
oTable = $('#partnerdetails-table').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
$('#search_partnerdetails').keyup(function(){
      oTable.search($(this).val()).draw() ;
})
  $("form[name='partnerdetails_form']").validate({
    rules: {
      partner_type: "required",
	  country_prdtl: "required",
	  partner_name: "required",
	},
   
    submitHandler: function(form) {
     var formData = {
	  country: $("#kt_docs_select2_country2").val(),
      partner_type: $("#partner_type_dtl").val(),
	  partner_name: $("#partner_name").val(),
    };
	  $.ajax({
				url:'https://webpristine.co.in/admin/save_partnerdetails',
				data: formData,
				type: "POST",
				success:function(data)
				{
				  document.country_form.reset();
				  $('#kt_modal_scrollable_4').modal('hide');
				  $('#partnerdetails-table').DataTable().ajax.reload();
				  swal("Your partner details created successfully!", {
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
          text: "To change status this partner details?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if(willDelete){
            $.ajax({
            url:'https://webpristine.co.in/admin/setting/edit-partnerdetails-status/' + id+'/'+data_id,
            type:'GET',
                beforeSend:function(){
                  $('.spinner-cls').show();
            },
                success:function(data)
                {
                  $('.spinner-cls').hide();
                  swal("Your partner details status has been changed!", {
                icon: "success",
              });
                $('#partnerdetails-table').DataTable().ajax.reload();
                }
            });
          }
          });
        });
    </script>
	
				<script>
// Wait for the DOM to be ready
$(function() {
	
   $('#disable-table').DataTable({
   processing: true,
   serverSide: true,
   pageLength: 10,
   filter: true,
   lengthChange: false,
   ajax: '{{ route("disablecity.getAjaxList") }}',
   columns: [
      { data: 'id' },
	  { data: 'country' },
      { data: 'state' },
	  { data: 'city' },
	  { data: 'status' },
   ]
});
oTable = $('#disable-table').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
$('#search_disablecity').keyup(function(){
      oTable.search($(this).val()).draw() ;
})
  $("form[name='disable_form']").validate({
    rules: {
      dis_country: "required",
	  dis_state: "required",
	  dis_city: "required",
	},
   
    submitHandler: function(form) {
     var formData = {
	  dis_country: $("#kt_docs_select2_country3").val(),
      dis_state: $("#dis_state").val(),
	  dis_city: $("#dis_city").val(),
    };
	console.log($("#dis_city").val());
	  $.ajax({
				url:'https://webpristine.co.in/admin/save_disablecity',
				data: formData,
				type: "POST",
				success:function(data)
				{
				  document.country_form.reset();
				  $('#disable-table').DataTable().ajax.reload();
				  swal("Your city created successfully!", {
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
          text: "To change status this city?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if(willDelete){
            $.ajax({
            url:'https://webpristine.co.in/admin/setting/edit-disablecity-status/' + id+'/'+data_id,
            type:'GET',
                beforeSend:function(){
                  $('.spinner-cls').show();
            },
                success:function(data)
                {
                  $('.spinner-cls').hide();
                  swal("Your city status has been changed!", {
                icon: "success",
              });
                $('#disable-table').DataTable().ajax.reload();
                }
            });
          }
          });
        });
    </script>
@endpush