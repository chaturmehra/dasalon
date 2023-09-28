@if(Request::is('partner/reports'))
	<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper2">
@endif
<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
	<!--begin::Sidebar primary-->
	<div class="app-sidebar-primary">
		<!--begin::Sidebar navbar-->
		<div class="app-sidebar-nav flex-grow-1 hover-scroll-overlay-y px-5 pt-2" id="kt_app_sidebar_primary_nav" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header, #kt_app_sidebar_primary_header, #kt_app_sidebar_primary_footer" data-kt-scroll-wrappers="#kt_app_content, #kt_app_sidebar_primary_nav" data-kt-scroll-offset="5px">
			<!--begin::Nav-->
			<ul class="nav">
				<!--begin::Navbar item-->
				<li class="nav-item py-1">
					<!--begin::Navbar link-->
					<a href="{{ url('/partner/dashboard') }}" class="nav-link py-4 px-1 btn asidenav {{ Request::is('partner/dashoard') ? 'active' : '' }}">
						<i class="ki-outline ki-questionnaire-tablet fs-1"></i>
						<span class="pt-2 fs-9 fs-lg-7 fw-bold">Home</span>
					</a>

					<!--end::Navbar link-->
				</li>
				<!--end::Navbar item-->
				<!--begin::Navbar item-->
				<li class="nav-item py-1">
					<!--begin::Navbar link-->
					<a href="{{ route('calender.index') }}" class="nav-link py-4 px-1 btn asidenav {{ Request::is('partner/calender') ? 'active' : '' }}">
						<i class="ki-outline ki-abstract-26 fs-1"></i>
						<span class="pt-2 fs-9 fs-lg-7 fw-bold">Calender</span>
					</a>
					<!--end::Navbar link-->
				</li>
				<!--end::Navbar item-->
				<!--begin::Navbar item-->
				<li class="nav-item py-1">
					<!--begin::Navbar link-->
					<a href="{{ route('appointments.index') }}" class="nav-link py-4 px-1 btn asidenav {{ Request::is('partner/appointments') ? 'active' : '' }}">
						<i class="ki-outline ki-notification-status fs-1"></i>
						<span class="pt-2 fs-9 fs-lg-7 fw-bold">Appointments</span>
					</a>
					<!--end::Navbar link-->
				</li>
				<!--end::Navbar item-->
				<!--begin::Navbar item-->
				<li class="nav-item py-1">
					<!--begin::Navbar link-->
					<a href="{{ route('clients.index') }}" class="nav-link py-4 px-1 btn asidenav {{ Request::is('partner/clients') ? 'active' : '' }}">
						<i class="ki-outline ki-message-notif fs-1"></i>
						<span class="pt-2 fs-9 fs-lg-7 fw-bold">Clients</span>
					</a>
					<!--end::Navbar link-->
				</li>
				<!--end::Navbar item-->
				<!--begin::Navbar item-->
				<li class="nav-item py-1">
					<!--begin::Navbar link-->
					<a href="{{ route('services.index') }}" class="nav-link py-4 px-1 btn asidenav {{ Request::is('partner/services') || Request::is('partner/bookalook') || Request::is('partner/packages') ? 'active' : '' }}">
						<i class="ki-outline ki-rocket fs-1"></i>
						<span class="pt-2 fs-9 fs-lg-7 fw-bold">Catalog</span>
					</a>
					<!--end::Navbar link-->
				</li>
				<!--end::Navbar item-->
				<!--begin::Navbar item-->
				<li class="nav-item py-1">
					<!--begin::Navbar link-->
					<a href="{{ route('promote.index') }}" class="nav-link py-4 px-1 btn asidenav {{ Request::is('partner/promote') ? 'active' : '' }}">
						<i class="ki-outline ki-chart-line fs-1"></i>
						<span class="pt-2 fs-9 fs-lg-7 fw-bold">Promote</span>
					</a>
					<!--end::Navbar link-->
				</li>
				<!--end::Navbar item-->

				<!--begin::Navbar item-->
				<li class="nav-item py-1">
					<!--begin::Navbar link-->
					<a href="{{ route('reports.index') }}" class="nav-link py-4 px-1 btn asidenav {{ Request::is('partner/reports') ? 'active' : '' }}">
						<i class="ki-outline ki-chart-line fs-1"></i>
						<span class="pt-2 fs-9 fs-lg-7 fw-bold">Reports</span>
					</a>
					<!--end::Navbar link-->
				</li>
				<!--end::Navbar item-->
				<!--begin::Navbar item-->
				<li class="nav-item py-1">
					<!--begin::Navbar link-->
					<a href="{{ url('partner/settings') }}" class="nav-link py-4 px-1 btn asidenav {{ Request::is('partner/settings') || Request::is('partner/venue-setting') || Request::is('partner/staff') || Request::is('partner/staff/attendance') || Request::is('partner/staff/leave') || Request::is('partner/staff/user-authorization') ? 'active' : '' }}">
						<i class="ki-outline ki-chart-line fs-1"></i>
						<span class="pt-2 fs-9 fs-lg-7 fw-bold">Settings</span>
					</a>
					<!--end::Navbar link-->
				</li>
				<!--end::Navbar item-->
			</ul>
			<!--end::Nav-->
		</div>
		<!--end::Sidebar navbar-->

	</div>
	<!--end::Sidebar primary-->
	@if(Request::is('partner/reports'))
		@include('partner.layouts.auth.secondary-sidebar')
	@endif
</div>
<!--end::Sidebar-->
