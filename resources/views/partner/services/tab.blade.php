<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
	<li class="nav-item mt-2">
		<a class="nav-link text-active-primary ms-0 me-10 py-5 {{ Request::is('partner/services') ? 'active' : '' }}" href="{{ route('services.index') }}">
			Services
		</a>
	</li>
	<!--end::Nav item-->
	<!--begin::Nav item-->
	<li class="nav-item mt-2">
		<a class="nav-link text-active-primary ms-0 me-10 py-5 {{ Request::is('partner/bookalook') ? 'active' : '' }}" href="{{ route('bookalook.index') }}">
			Book a look
		</a>
	</li>
	<!--end::Nav item-->
	<!--begin::Nav item-->
	<li class="nav-item mt-2">
		<a class="nav-link text-active-primary ms-0 me-10 py-5 {{ Request::is('partner/packages') ? 'active' : '' }}" href="{{ route('packages.index') }}">
			Packages
		</a>
	</li>
	<!--end::Nav item-->
	<!--begin::Nav item-->
	<li class="nav-item mt-2">
		<a class="nav-link text-active-primary ms-0 me-10 py-5 {{ Request::is('partner/vouchers') ? 'active' : '' }}" href="{{ route('vouchers.index') }}">
			Vouchers
		</a>
	</li>
	<!--end::Nav item-->
	<!--begin::Nav item-->
	<li class="nav-item mt-2">
		<a class="nav-link text-active-primary ms-0 me-10 py-5 {{ Request::is('partner/memberships') ? 'active' : '' }}" href="{{ route('memberships.index') }}">
			Memberships
		</a>
	</li>
	<!--end::Nav item-->
	<!--begin::Nav item-->
	<li class="nav-item mt-2">
		<a class="nav-link text-active-primary ms-0 me-10 py-5 " href="products.html">
			Products
		</a>
	</li>
	<!--end::Nav item-->
</ul>