<!-- jQuery -->
<script src="{{ asset('/public/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/public/dist/js/adminlte.min.js') }}"></script>

<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('/public/partner/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('/public/partner/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Custom Javascript(used for this page only)-->
<!-- <script src="{{asset('/public/partner/assets/js/custom/authentication/sign-in/general.js')}}"></script>
<script src="{{asset('/public/partner/assets/js/custom/authentication/sign-up/general.js')}}"></script>
<script src="{{asset('/public/partner/assets/js/custom/authentication/reset-password/reset-password.js')}}"></script>
<script src="{{asset('/public/partner/assets/js/custom/authentication/reset-password/new-password.js')}}"></script> -->
<script type="text/javascript">
	jQuery(document).on('click', '.signup_send_otp', function(){
	    event.preventDefault();
	    var phone = jQuery('#signup_mobile').val();
	    //var ajaxurl = 'https://webpristine.co.in/admin/setting/edit-amenity-status/' + mobile;
	    if ( phone !== "" ) {
	        jQuery.ajax({
	            url: "{{ url('sendSMS')}}",
	            data: {phone: phone},
	            headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
	            type:'POST',
	            success:function(response)
	            {
	                //response = JSON.parse(response);
	                //$('.spinner-cls').hide();
	                if (response.status) {
		                new swal("OTP sent successfully on your mobile number: "+phone, {
		                    icon: "success",
		                });
		            }
	            },
	            error:function(error)
	            {
	                new swal("Something went wrong. Please try again.", {
	                    icon: "error",
	                });
	            }
	        });
	    }else{
	        new swal("Mobile number is required.", {
	            icon: "error",
	        });
	    }
	});
	jQuery(document).on('click', '.signup_verify_otp', function(){
	    event.preventDefault();
	    var otp = jQuery('#signup_otp').val();
	    //var ajaxurl = 'https://webpristine.co.in/admin/setting/edit-amenity-status/' + mobile;
	    if ( otp !== "" ) {
	        jQuery.ajax({
	            url: "{{ url('sendOTP')}}",
	            data: {otp: otp},
	            headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
	            type:'POST',
	            success:function(response)
	            {
	            	//alert(response);
	                //response = JSON.parse(response);
	                //console.log("response", response)
	                if (response.status) {
		                new swal("OTP matched successfully.", {
		                    icon: "success",
		                });
		                jQuery('#signup_otp').attr('readonly','true');
	                }else{
	                	new swal("OTP not matched.", {
		                    icon: "success",
		                });
	                }
	            },
	            error:function(error)
	            {
	                new swal("Something went wrong. Please try again.", {
	                    icon: "error",
	                });
	            }
	        });
	    }else{
	        new swal("OTP is required.", {
	            icon: "error",
	        });
	    }
	});
</script>
</body>
</html>