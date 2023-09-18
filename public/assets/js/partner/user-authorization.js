$(document).ready(function() {
  $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  $('.on-status-check').on('click', '.user-auth-permission', function(event) {
    event.preventDefault();

    var role_id     = $(this).attr('data-role');
    var page        = $(this).attr('data-page');
    var subpage     = $(this).attr('data-subpage');

    if ($(this).prop("checked")) {
      status = 1;
    } else {
      status = 0;
    }

    var ajaxurl     = baseurl+'partner/staff/store-user-authorization';

    var formData = {
      role_id: role_id,
      page: page,
      subpage: subpage,
      property_value: status,
    }
    
    $.ajax({
      url: ajaxurl,
      data: formData,
      type:'POST',
      // contentType: false,
      // processData: false,
      beforeSend:function(){
        $('.spinner-cls').show();
      },
      success:function(response)
      {
        $('.spinner-cls').hide();
        response = JSON.parse(response);

        if (response.status) {
          var msg = response.message;
          Swal.fire({
            title: msg,
            icon: "success",
            buttonsStyling: !1,
            confirmButtonText: "Ok, got it!",
            customClass: {
              confirmButton: "btn fw-bold btn-primary"
            }
          })
        }else{
          var msg = response.message;
          Swal.fire({
            title: msg,
            icon: "success",
            buttonsStyling: !1,
            confirmButtonText: "Ok, got it!",
            customClass: {
              confirmButton: "btn fw-bold btn-primary"
            }
          })
        }
      },
      error: function(xhr, status, error) {
            console.error('Error:', error);
        }
    });
  })
});