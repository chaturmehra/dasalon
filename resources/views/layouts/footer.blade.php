<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('/public/assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('/public/assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('/public/assets/js/custom/authentication/sign-in/general.js')}}"></script>
		<script src="{{asset('/public/assets/js/custom/authentication/sign-up/general.js')}}"></script>
		<script src="{{asset('/public/assets/js/custom/authentication/reset-password/reset-password.js')}}"></script>
		<script src="{{asset('/public/assets/js/custom/authentication/reset-password/new-password.js')}}"></script>
		
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
