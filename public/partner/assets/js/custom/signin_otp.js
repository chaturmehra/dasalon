jQuery(document).on('click', '.send_otp', function(){
    event.preventDefault();
    var phone = jQuery('#mobile').val();
    //var ajaxurl = 'https://webpristine.co.in/admin/setting/edit-amenity-status/' + mobile;
    if ( phone !== "" ) {
        jQuery.ajax({
            url: "{{ url('sendSMS')}}",
            data: {phone: phone},
            type:'POST',
            success:function(response)
            {
                //response = JSON.parse(response);
                //$('.spinner-cls').hide();
                swal("OTP sent successfully on your mobile number: "+phone, {
                    icon: "success",
                });
            },
            error:function(error)
            {
                swal("Something went wrong. Please try again.", {
                    icon: "error",
                });
            }
        });
    }else{
        swal("Mobile number is required.", {
            icon: "error",
        });
    }
});