@extends('layouts.app')

@section('content')
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Page bg image-->
    <style>body { background-image: url('/dasalon/admin/assets/media/auth/bg10.jpeg'); } [data-bs-theme="dark"] body { background-image: url('/dasalon/admin/assets/media/auth/bg10-dark.jpeg'); }</style>
    <!--end::Page bg image-->
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Aside-->
        <div class="d-flex flex-lg-row-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                <!--begin::Image-->
                <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{asset('/assets/media/auth/agency.png')}}" alt="" />
                <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{asset('/assets/media/auth/agency-dark.png')}}" alt="" />
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
                       <form class="form w-100" method="POST" action="{{ route('partner.register') }}" autocomplete="off">
						    @csrf
							<!--begin::Heading-->
							<div class="text-center mb-11">
								<img alt="Logo" src="{{asset('/assets/media/logos/logo3.png')}}" class="h-60px mb-5">
								<!--begin::Title-->
								<h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
								<!--end::Title-->
							</div>
							<!--begin::Heading-->

							<!--begin::Input group=-->
							<div class="fv-row mb-8">
								<!--begin::Email-->
								<input id="name" type="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus  autocomplete="off">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<!--end::Input group=-->
							<div class="fv-row mb-3">
								<!--begin::Password-->
							 <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required  autocomplete="off">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								<!--end::Password-->
							</div>
							
							<div class="fv-row mb-3">
								<!--begin::Password-->
							 <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  autocomplete="off">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								<!--end::Password-->
							</div>
							<div class="d-grid mb-10">
								<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
									<!--begin::Indicator label-->
									<span class="indicator-label">Sign In</span>
									<!--end::Indicator label-->
									<!--begin::Indicator progress-->
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									<!--end::Indicator progress-->
								</button>
							</div><
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
@endsection
