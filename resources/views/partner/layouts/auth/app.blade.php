@include('partner.layouts.auth.header') 
@include('partner.layouts.auth.sidebar') 
@yield('content')
@include('partner.layouts.auth.footer')
@stack('scripts')