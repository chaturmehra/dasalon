@extends('partner.layouts.default.app')

@section('content')

<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
	<!--begin::Page bg image-->
	<style>body { background-image: url("{{ asset('/assets/media/auth/bg10.jpeg') }}"); } [data-bs-theme="dark"] body { background-image: url("{{ asset('/assets/media/auth/bg10-dark.jpeg') }}"); }</style>
	<!--end::Page bg image-->
	<!--begin::Authentication - Sign-in -->
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
					<div class="d-flex flex-center flex-column flex-column-fluid">

						<!--begin::Heading-->
						<div class="text-center mb-11">
							<!--begin::Subtitle-->
							<div class="text-gray-500 fw-semibold fs-6">Tell us more about your business</div>
							<!--end::Subtitle=-->
							<!--begin::Title-->
							<h1 class="text-dark fw-bolder mb-8">Service Provided at</h1>
							<!--end::Title-->
							
						</div>
						<!--begin::Heading-->

						<!--begin::Login options-->
						<div class="row g-3">
							<!--begin::Col-->
							@if(!empty($partnerType))
							@foreach($partnerType as $key => $partner_type)
								<div class="col-md-12">

									<a href="{{ route('service-provided', $partner_type->id) }}" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100 py-5">
									<!-- <i class="fas fa-store me-auto"></i> --><span class="ms-0 text-center">{{ $partner_type->partner_name }}</span></a>
									

								</div>
							@endforeach
							@endif

						</div>
						<!--end::Login options-->
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