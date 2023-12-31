@extends('partner.layouts.default.app')

@section('content')

<!--begin::Root-->
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
						<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="" action="#">
							<!--begin::Heading-->
							<div class="text-center mb-11">
								<div class="cst-icn mb-10">
									<i class="far fa-handshake"></i>
								</div>
								<!--begin::Title-->
								<h1 class="text-dark fw-bolder mb-3">Congratulations! your business account is ready</h1>
								<!--end::Title-->
								<!--begin::Subtitle-->
								<!-- <div class="text-gray-500 fw-semibold fs-6">Set your account password by clicking on the link sent to your email id</div> -->
								<!--end::Subtitle=-->
							</div>
							<!--begin::Heading-->

							<!--begin::Submit button-->
							<div class="d-grid mb-10">
								<a href="{{ url('/partner/login') }}" id="kt_sign_in_submits" class="btn btn-primary">
									<!--begin::Indicator label-->
									<span class="indicator-label">Partner login</span>
									<!--end::Indicator label-->
									<!--begin::Indicator progress-->
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									<!--end::Indicator progress-->
								</a>
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

@endsection