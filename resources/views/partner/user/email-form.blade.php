@extends('partner.layouts.default.app')



@section('content') 


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
						<!-- <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="" action="#"> -->
							<!--begin::Heading-->
							<div class="text-center mb-11">
								<!--begin::Title-->
								@php $service_provided = Session::get('service_provided_id'); 
								@endphp
								<h1 class="text-dark fw-bolder mb-3">da Salon for @if($service_provided) {{ "business" }} @else {{ "customer "}} @endif</h1>
								<!--end::Title-->
								<!--begin::Subtitle-->
								<div class="text-gray-500 fw-semibold fs-6">
									@if($service_provided)
										Create an account or log in to manage your business
									@else
										Create an account or log in to book and manage your appointments.
									@endif
								</div>
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
							<form class="form w-100" novalidate="novalidate" action="{{ route('sign-up-email') }}" method="post">
								@csrf
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="email" placeholder="Email" name="email" autocomplete="off" required="required" class="form-control bg-transparent" />
									<!--end::Email-->
								</div>

								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_in_submits" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Continue</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Submit button-->
							</form>
							<!--begin::Separator-->
							<div class="separator separator-content my-14">
								<span class="w-125px text-gray-500 fw-semibold fs-7">Or</span>
							</div>
							<!--end::Separator-->

							<!--begin::Login options-->
							<div class="row g-3 mb-12">
								<!--begin::Col-->
								<div class="col-md-12">
									<!--begin::Google link=-->
									<a href="{{ route('social.login', 'facebook') }}" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
									<img alt="Logo" src="{{ asset('/public/assets/media/svg/brand-logos/facebook-4.svg') }}" class="h-15px me-3" />Continue with Facebook</a>
									<!--end::Google link=-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-12">
									<!--begin::Google link=-->
									<a href="{{ route('social.login', 'google') }}" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
									<img alt="Logo" src="{{ asset('/public/assets/media/svg/brand-logos/google-icon.svg') }}" class="h-15px me-3" />Continue with Google</a>
									<!--end::Google link=-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-12">
									<!--begin::Google link=-->
									<a href="{{ route('social.login', 'apple') }}" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
									<img alt="Logo" src="{{ asset('/public/assets/media/svg/brand-logos/apple-black.svg') }}" class="h-15px me-3" />Continue with Apple</a>
									<!--end::Google link=-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Login options-->

							<h4 class="text-dark fw-bolder mb-3 text-center">Customer booking?</h4>
							<div class="text-gray-500 text-center fw-semibold fs-6">
									If you are a customer widhing to book a service <br>
								<a href="#" class="link-primary">Sign up as a customer</a>
							</div>

						<!-- </form> -->
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


   @endsection
