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
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
<script>	

    jQuery(document).ready(function() { 
      var browserUser = "{{ getUserCountry() }}";

      const input = document.querySelector("#signup_mobile");
      var countryCodeInput = jQuery('.country-code-intl');
      countryCodeInput.val(browserUser);

      window.intlTelInput(input, {
      	initialCountry: browserUser,
      	utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
      });

      jQuery('.iti__country-list li').click(function(){
        var country_code = jQuery(this).data('country-code');
        jQuery(".country-code-intl").val(country_code.toUpperCase());
      })
    });

</script>
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
		                Swal.fire({
		                	text: "OTP sent successfully on your mobile number: "+phone,
		                	icon: "success",
		                	buttonsStyling: !1,
		                	confirmButtonText: "Ok, got it!",
		                	customClass: {
		                		confirmButton: "btn btn-primary"
		                	}
		                })
		            }
	            },
	            error:function(error)
	            {
	                Swal.fire({
	                	text: "Something went wrong. Please try again.",
	                	icon: "error",
	                	buttonsStyling: !1,
	                	confirmButtonText: "Ok, got it!",
	                	customClass: {
	                		confirmButton: "btn btn-primary"
	                	}
	                })
	            }
	        });
	    }else{
	        Swal.fire({
	        	text: "Mobile number is required.",
	        	icon: "error",
	        	buttonsStyling: !1,
	        	confirmButtonText: "Ok, got it!",
	        	customClass: {
	        		confirmButton: "btn btn-primary"
	        	}
	        })
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
		                Swal.fire({
		                	text: "OTP matched successfully.",
		                	icon: "success",
		                	buttonsStyling: !1,
		                	confirmButtonText: "Ok, got it!",
		                	customClass: {
		                		confirmButton: "btn btn-primary"
		                	}
		                })
		                jQuery('#signup_otp').attr('readonly','true');
	                }else{
		                Swal.fire({
		                	text: "OTP not matched.",
		                	icon: "error",
		                	buttonsStyling: !1,
		                	confirmButtonText: "Ok, got it!",
		                	customClass: {
		                		confirmButton: "btn btn-primary"
		                	}
		                })
	                }
	            },
	            error:function(error)
	            {
	                Swal.fire({
	                	text: "Something went wrong. Please try again.",
	                	icon: "error",
	                	buttonsStyling: !1,
	                	confirmButtonText: "Ok, got it!",
	                	customClass: {
	                		confirmButton: "btn btn-primary"
	                	}
	                })
	            }
	        });
	    }else{
	        Swal.fire({
	        	text: "OTP is required!",
	        	icon: "error",
	        	buttonsStyling: !1,
	        	confirmButtonText: "Ok, got it!",
	        	customClass: {
	        		confirmButton: "btn btn-primary"
	        	}
	        })
	    }
	});
</script>
</body>
</html>
