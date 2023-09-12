$(document).on('click', '.status-change', function(){
  event.preventDefault();
  var status_val  = $(this).attr('status-value');
  var staff_id    = $(this).attr('staff-id');
  var ajaxurl     = baseurl+'partner/staff/edit-staff-status'+'/' + staff_id+'/'+status_val;
  Swal.fire({
    text: "Are you sure you want to change this staff status?",
    icon: "warning",
    showCancelButton: !0,
    buttonsStyling: !1,
    confirmButtonText: "Yes, change!",
    cancelButtonText: "No, cancel",
    customClass: {
      confirmButton: "btn fw-bold btn-danger",
      cancelButton: "btn fw-bold btn-active-light-primary"
    }
  })
  .then((willChange) => {
    if(willChange.value){
      $.ajax({
        url:ajaxurl,
        type:'GET',
        beforeSend:function(){
          $('.spinner-cls').show();
        },
        success:function(data)
        {
          $('.spinner-cls').hide();
          Swal.fire({
            title: "Your have successfully changed staff status!",
            icon: "success",
            buttonsStyling: !1,
            confirmButtonText: "Ok, got it!",
            customClass: {
              confirmButton: "btn fw-bold btn-primary"
            }
          })
          location.reload();
        }
      });
    }
  });
});

$(document).on('click', '.delete-staff', function(){
  event.preventDefault();
  var staff_id    = $(this).attr('staff-id');
  var ajaxurl     = baseurl+'partner/staff/delete-staff'+'/' + staff_id;
  Swal.fire({
    text: "Are you sure you want to delete this staff?",
    icon: "warning",
    showCancelButton: !0,
    buttonsStyling: !1,
    confirmButtonText: "Yes, delete!",
    cancelButtonText: "No, cancel",
    customClass: {
      confirmButton: "btn fw-bold btn-danger",
      cancelButton: "btn fw-bold btn-active-light-primary"
    }
  })
  .then((willDelete) => {
    if(willDelete.value){
      $.ajax({
        url:ajaxurl,
        type:'GET',
        beforeSend:function(){
          $('.spinner-cls').show();
        },
        success:function(data)
        {
          $('.spinner-cls').hide();
          Swal.fire({
            title: "Your have successfully deleted this staff!",
            icon: "success",
            buttonsStyling: !1,
            confirmButtonText: "Ok, got it!",
            customClass: {
              confirmButton: "btn fw-bold btn-primary"
            }
          })
          location.reload();
        }
      });
    }
  });
});

$(document).on('click', '.view-staff', function(){
  event.preventDefault();
  var staff_id    = $(this).attr('staff-id');
  var ajaxurl     = baseurl+'partner/staff/view-staff'+'/' + staff_id;
  
  $.ajax({
    url:ajaxurl,
    type:'GET',
    beforeSend:function(){
      $('.spinner-cls').show();
    },
    success:function(response)
    {
      $('.spinner-cls').hide();
      response = JSON.parse(response);

        if (response.status) {
          var staff_data = response.data;
          // console.log("staff_data", staff_data[0]);
          $("#staff-name").text(staff_data[0].name);
          $("#staff-email").text(staff_data[0].email);
          $("#staff-phone").text(staff_data[0].phone);
        }
    }
  });
    
});