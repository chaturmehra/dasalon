@extends('partner.layouts.default.app')

@section('content')

<!--begin::Root-->
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="d-flex flex-column flex-root" id="kt_app_root">
	<!--begin::Page bg image-->
	<style>body { background-image: url("{{ asset('/public/assets/media/auth/bg10.jpeg') }}"); } [data-bs-theme="dark"] body { background-image: url("{{ asset('/public/assets/media/auth/bg10-dark.jpeg') }}"); }</style>
	<!--end::Page bg image-->
	<!--begin::Authentication - Sign-in -->
	<div class="d-flex flex-column flex-lg-row flex-column-fluid">
		<!--begin::Aside-->
		<div class="d-flex flex-lg-row-fluid">
			<!--begin::Content-->
			<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
				<!--begin::Image-->
				<img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{ asset('/public/assets/media/auth/agency.png') }}" alt="" />
				<img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{ asset('/public/assets/media/auth/agency-dark.png') }}" alt="" />
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
						<form class="form w-100" novalidate="novalidate" id="kt_sign_in_forms" data-kt-redirect-url="" action="{{ route('customer.customer-detail') }}" method="post">
							@csrf
							<!--begin::Heading-->
							<div class="text-center mb-11">
								<!--begin::Title-->
								<h1 class="text-dark fw-bolder mb-3">Create a customer account</h1>
								<!--end::Title-->
								<!--begin::Subtitle-->
								<div class="text-gray-500 fw-semibold fs-6">Create your new account, by completing below details.</div>
								<!--end::Subtitle=-->
							</div>
							<!--begin::Heading-->

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

							<!--begin::Input group=-->
							<div class="fv-row mb-8">
								<!--begin::Email-->
								<input type="text" placeholder="Name" name="name" autocomplete="off" class="form-control bg-transparent" required="required" value="{{ old('name') }}" />
								<!--end::Email-->
							</div>

							<div class="fv-row mb-8">
								<div class="d-flex gap-3">
									<!--begin::Email-->
									<input type="text" placeholder="Mobile Number" id="signup_mobile" name="phone" autocomplete="off" class="form-control bg-transparent phone-number-intl" required="required" value="{{ old('phone') }}" />

									<input type="hidden" class="country-code-intl" name="country_code">
									<!--end::Email-->
									<a href="javascript:void(0)" class="btn btn-sm btn-light btn-active-light-primary px-2 w-100px d-flex align-items-center justify-content-center signup_send_otp">Send OTP</a>
								</div>
							</div>

							<div class="fv-row mb-8">
								<div class="d-flex gap-3">
									<!--begin::Email-->
									<input type="text" placeholder="Enter OTP" name="otp" required="required" id="signup_otp" autocomplete="off" class="form-control bg-transparent" value="{{ old('otp') }}"/>
									<!--end::Email-->
									<a href="javascript:void(0)" class="btn btn-sm btn-light btn-active-light-primary px-2 w-100px d-flex align-items-center justify-content-center signup_verify_otp">Verify OTP</a>
								</div>
							</div>


							<!--begin::Submit button-->
							<div class="d-grid mb-10">
								<button type="submit" id="kt_sign_in_submits" class="btn btn-primary">
									<!--begin::Indicator label-->
									<span class="indicator-label">Submit</span>
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
	<!--end::Authentication - Sign-in-->
</div>
<!--end::Root-->
<!-- @php

loadScript("public/partner/assets/js/custom/signin_otp.js");

@php -->

{{-- App\Helpers\helpers::loadScript("public/partner/assets/js/custom/signin_otp.js") --}}

@endsection
@push('scripts')

@endpush
