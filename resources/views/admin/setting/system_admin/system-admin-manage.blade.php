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
					<form class="form mb-12" action="{{ url('/admin/update-system-admin-manage/'.$user_detail->id) }}" method="post">
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
							<h1 class="fw-bold text-dark mb-9">Manage System Admin</h1>
							<!--begin::Input group-->
							<div class="row">
								
								<!--begin::Col-->
								<div class="col-md-6 fv-row mb-7">
									<!--begin::Label-->
									<label class="fs-5 fw-semibold mb-2">Name</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" class="form-control form-control-solid" placeholder="" name="name" value="{{ $user_detail->name }}" />
									<!--end::Input-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row mb-7">
									<!--end::Label-->
									<label class="fs-5 fw-semibold mb-2">Phone</label>
									<!--end::Label-->
									<!--end::Input-->
									<input type="text" class="form-control form-control-solid" placeholder="" name="phone" value="{{ $user_detail->phone }}" />
									<!--end::Input-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row mb-7">
									<!--end::Label-->
									<label class="fs-5 fw-semibold mb-2">Email</label>
									<!--end::Label-->
									<!--end::Input-->
									<input type="email" class="form-control form-control-solid" placeholder="" name="email" value="{{ $user_detail->email }}" />
									<!--end::Input-->
								</div>

								<div class="col-md-6 fv-row mb-7">
                                    <!--begin::Label-->
                                    <label for="kt_docs_select2_country" class="fs-5 fw-semibold mb-2">Select a country</label>
                                    <div class="form-floating border rounded">
                                    	<select class="form-select" name="country" placeholder="..." id="kt_docs_select2_country" required>
                                    		<option value="">Select Country</option>
                                    		@foreach(getCountryList() as $con_val)
                                    		<option value="{{$con_val->id}}" data-kt-select2-country="{{asset('/public/assets/media/flags/'.strtolower(str_replace(' ','-',$con_val->name.'.svg')))}}">{{$con_val->name}}</option>
                                    		@endforeach
                                    	</select>
                                    </div>
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
					<!--begin::Submit-->
					<button type="submit" class="btn btn-primary mt-5">
						<!--begin::Indicator label-->
						<span class="indicator-label">Manage</span>
						<!--end::Indicator label-->
						<!--begin::Indicator progress-->
						<span class="indicator-progress">Please wait...
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							<!--end::Indicator progress-->
						</button>
						<!--end::Submit-->
					</div>
				</form>
			</div>
		</div>
		<!--end::Content container-->
	</div>
	<!--begin::Content-->
</div>
<!--end::Content wrapper-->
</div>
@endsection