<div class="card mb-5 mb-xxl-8">
	<div class="card-body pt-9 pb-0">

		<!--begin::Details-->
		<div class="d-flex flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="flex-grow-1">
				<!--begin::Title-->
				<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
					<!--begin::User-->
					<div class="d-flex flex-column">
						<!--begin::Name-->
						<div class="d-flex align-items-center mb-2">
							<?php 
							if(Request::is('admin/settings/amenity')){
								echo '<a href="'.route('settings.amenity').'" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Order Management</a>
								<a href="'.route('settings.amenity').'"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>';
							}elseif(Request::is('admin/settings/country-config')){
								echo '<a href="'.route('settings.country').'" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Service Config</a>
								<a href="'.route('settings.country').'"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>';
							}elseif(Request::is('admin/settings/subscription')){
								echo '<a href="'.route('settings.subscription').'" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Partner - Service mapping</a>
								<a href="'.route('settings.subscription').'"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>';
							}elseif(Request::is('admin/settings/appointment')){
								echo '<a href="'.route('settings.appointment').'" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Recommendations (package)</a>
								<a href="'.route('settings.appointment').'"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>';
							}elseif(Request::is('admin/settings/payment-gateway')){
								echo '<a href="'.route('settings.payment-gateway').'" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Offers Management</a>
								<a href="'.route('settings.payment-gateway').'"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>';
							}
							elseif(Request::is('settings')){
								echo '<a href="'.route('settings.index').'" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Service Log</a>
								<a href="'.route('settings.index').'"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>';
							}
							?>

						</div>
						<!--end::Name-->
					</div>
					<!--end::User-->

				</div>
				<!--end::Title-->



			</div>
			<!--end::Info-->
		</div>
		<!--end::Details-->

		<!--begin::Navs-->
		<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5  {{ Request::is('admin/services/order-management') ? 'active' : '' }}" href="{{route('services.order-management')}}">
					Order Management                    
				</a>
			</li>
			<!--end::Nav item-->
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5 {{ Request::is('admin/services/services-config') ? 'active' : '' }}" href="{{route('services.services-config')}}">
					Service Config                   
				</a>
			</li>
			<!--end::Nav item-->
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5 {{ Request::is('admin/services/partner-mapping') ? 'active' : '' }}" href="{{route('services.partner-mapping')}}">
					Partner - Service mapping                   
				</a>
			</li>
			<!--end::Nav item-->

			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5 {{ Request::is('admin/services/recommendations') ? 'active' : '' }}" href="{{route('services.recommendations')}}">
					Recommendations (package)                   
				</a>
			</li>
			<!--end::Nav item-->
			<!--begin::Nav item-->
			<li class="nav-item mt-2">
				<a class="nav-link text-active-primary ms-0 me-10 py-5 {{ Request::is('admin/services/offers-management') ? 'active' : '' }}" href="{{route('services.offers-management')}}">
					Offers Management                   
				</a>
			</li>
			<!--end::Nav item-->
		</ul>
		<!--End::Navs-->

	</div>
</div>