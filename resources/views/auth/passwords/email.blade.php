@extends('layouts.app')

@section('content')
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
					 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" action="{{ route('password.email') }}">
                        @csrf

                        <div class="text-center mb-10">
							<!--begin::Title-->
							<h1 class="text-dark fw-bolder mb-3">Forgot Password ?</h1>
							<!--end::Title-->
							<!--begin::Link-->
							<div class="text-gray-500 fw-semibold fs-6">Enter your email to reset your password.</div>
							<!--end::Link-->
						</div>
						<!--begin::Heading-->
						<!--begin::Input group=-->
						<div class="fv-row mb-8">
							<!--begin::Email-->
							<input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus/>
							@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<!--begin::Actions-->
						<div class="d-flex flex-wrap justify-content-center pb-lg-0">
							<button type="submit" id="kt_password_reset_submit" class="btn btn-primary me-4">
								<!--begin::Indicator label-->
								<span class="indicator-label">Submit</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
							<a href="{{ url('partner/login') }}" class="btn btn-light">Cancel</a>
						</div>
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
@endsection
