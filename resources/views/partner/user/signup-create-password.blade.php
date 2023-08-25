@extends('partner.layouts.default.app')

@section('content')


<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
	<!--begin::Page bg image-->
	<style>body { background-image: url("{{ asset('/assets/media/auth/bg10.jpeg') }}"); } [data-bs-theme="dark"] body { background-image: url("{{ asset('/assets/media/auth/bg10-dark.jpeg') }}"); }</style>
	<!--end::Page bg image-->
	<!--begin::Authentication - Sign-up -->
	<div class="d-flex flex-column flex-lg-row flex-column-fluid">
		<!--begin::Aside-->
		<div class="d-flex flex-lg-row-fluid">
			<!--begin::Content-->
			<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
				<!--begin::Image-->
				<img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{ asset('/assets/media/auth/agency.png') }}" alt="" />
				<img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{ asset('/assets/media/auth/agency-dark.png') }}" alt="" />
				<!--end::Image-->
				<!--begin::Title-->
				<h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Fast, Efficient and Productive</h1>
				<!--end::Title-->
				<!--begin::Text-->
				<div class="text-gray-600 fs-base text-center fw-semibold">In this kind of post,
				<a href="#" class="opacity-75-hover text-primary me-1">the blogger</a>introduces a person they’ve interviewed
				<br />and provides some background information about
				<a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>and their
				<br />work following this is a transcript of the interview.</div>
				<!--end::Text-->
			</div>
			<!--end::Content-->
		</div>
		<!--begin::Aside-->
		<!--begin::Body-->
		<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
			<!--begin::Wrapper-->
			<div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
					<!--begin::Wrapper-->
					<div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">

						<!--begin::Form-->
						<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="" action="{{ route('create-password') }}" method="post">
							@csrf
							<input type="hidden" name="user_email" value="{{ isset($email) ? $email : '' }}">
							<input type="hidden" name="user_id" value="{{ isset($user_id) ? $user_id : '' }}">
							<!--begin::Heading-->
							<div class="text-center mb-11">
								<!--begin::Title-->
								<h1 class="text-dark fw-bolder mb-3">Hello, {{ isset($name) ? $name : '' }}</h1>
								<!--end::Title-->
								<!--begin::Subtitle-->
								<div class="text-gray-500 fw-semibold fs-6">Create your account password</div>
								<!--end::Subtitle=-->
							</div>
							<!--begin::Heading-->

							<!--begin::Col-->
							<div class="text-center">
								<!--begin::Title-->
								<h4 class="text-dark fw-bolder mb-3">{{ isset($email) ? $email : '' }}</h4>
								<!--end::Title-->
							</div>
							<!--end::Col-->

							<div class="fv-row mb-8" data-kt-password-meter="true">
								@if(session()->has('success'))
								<div class="card-header display-message">
									<div class="alert alert-success">
										{{ session()->get('success') }}
									</div>
								</div>
								@endif
								@if(session()->has('error'))
								<div class="card-header display-message">
									<div class="alert alert-danger">
										{{ session()->get('error') }}
									</div>
								</div>
								@endif
								@if ($errors->any())
								<div class="card-header display-message">
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								</div>
								@endif
								<!--begin::Wrapper-->
								<div class="mb-1">
									<!--begin::Input wrapper-->
									<div class="position-relative mb-3">
										<input class="form-control bg-transparent" type="password" placeholder="Enter Password" name="password" autocomplete="off" required />
										<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
											<i class="ki-outline ki-eye-slash fs-2"></i>
											<i class="ki-outline ki-eye fs-2 d-none"></i>
										</span>
										@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<!--end::Input wrapper-->
									<!--begin::Meter-->
									<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
									</div>
									<!--end::Meter-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Hint-->
								<div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
								<!--end::Hint-->
							</div>
							<!--end::Input group=-->
							<!--end::Input group=-->
							<div class="fv-row mb-8">
								<!--begin::Repeat Password-->
								<input placeholder="Confirm Password" name="confirm_password" type="password" autocomplete="off" class="form-control bg-transparent" required />
								@error('confirm_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								<!--end::Repeat Password-->
							</div>
							<!--end::Input group=-->
							<!--begin::Accept-->
							<div class="fv-row mb-8">
								<label class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" name="toc" value="1" required />
									<span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the
									<a href="#" class="ms-1 link-primary">Terms</a></span>
									@error('toc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</label>
							</div>
							<!--end::Accept-->
							<!--begin::Submit button-->
							<div class="d-grid mb-10">
								<button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
									<!--begin::Indicator label-->
									<span class="indicator-label">Save Password</span>
									<!--end::Indicator label-->
									<!--begin::Indicator progress-->
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									<!--end::Indicator progress-->
								</button>
							</div>
							<!--end::Submit button-->

						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->

				</div>
				<!--end::Content-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Body-->
	</div>
	<!--end::Authentication - Sign-up-->
</div>
<!--end::Root-->


@endsection