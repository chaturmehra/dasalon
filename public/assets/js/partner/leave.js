$(document).on('click', '.show_hide_staff_leave', function(event){
  event.preventDefault();
  var staff_id  = $(this).attr('staff-id');
  var staff_name  = $(this).attr('staff-name');
  var trClass   = 'staff_'+staff_id;

  if (staff_id == "all") {
    $('.leave-lists tr').removeClass('d-none');
  }else {
    $('.leave-lists tr').addClass('d-none');
    $('.leave-lists tr.'+trClass).removeClass('d-none');
  }

  $('.staff-name').text(staff_name);
  var ajaxurl = baseurl+'partner/staff/get-leave-status-by-staff-id'+'/' + staff_id;
  $.ajax({
    url:ajaxurl,
    type:'GET',
    beforeSend:function(){
      $('.spinner-cls').show();
    },
    success:function(response)
    {
      response = JSON.parse(response);
      if (response.status) {
        $('.count-taken-leave').text(response.countTakenLeave);
        $('.count-planned-leave').text(response.countPlannedLeave);
      }
    }
  });
  
});

$(document).on('click', '.staff-leave-update', function(event){
  event.preventDefault();
  var staff_id    = $(this).attr('staff-id');

  var ajaxurl = baseurl+'partner/staff/get-leave-detail'+'/' + staff_id;
  $.ajax({
    url:ajaxurl,
    type:'GET',
    beforeSend:function(){
      $('.spinner-cls').show();
    },
    success:function(response)
    {
      response = JSON.parse(response);

      if (response.status) {
        var leave_data = response.data[0];
        
        $('.update_staff_id').val(leave_data.staff_id);
        $('#update-staff-id').val(leave_data.user_id).trigger('change');
        $('.update.leave_remarks').val(leave_data.leave_remarks);
        $('.update.leave_start_date').val(leave_data.start);
        $('.update.leave_end_date').val(leave_data.end);
        $('.update-staff-id').val(leave_data.sl_id);
      }
    }
  });
  
});

$(document).on('click', '.staff-leave-cancel', function(event){
  event.preventDefault();
  var staff_leave_id    = $(this).attr('staff-leave-id');

  var ajaxurl = baseurl+'partner/staff/leave-cancel'+'/' + staff_leave_id;

  Swal.fire({
    text: "Are you sure you want to cancel leave?",
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
        success:function(response)
        {
          $('.spinner-cls').hide();
          response = JSON.parse(response);

          if (response.status) {
            Swal.fire({
              title: response.message,
              icon: "success",
              buttonsStyling: !1,
              confirmButtonText: "Ok, got it!",
              customClass: {
                confirmButton: "btn fw-bold btn-primary"
              }
            })
          }else{
            Swal.fire({
              title: response.message,
              icon: "error",
              buttonsStyling: !1,
              confirmButtonText: "Ok, got it!",
              customClass: {
                confirmButton: "btn fw-bold btn-primary"
              }
            })
          }
          location.reload();
        }
      });
    }
  });
});

function validateLeaveForm(){
  
    var staff_id   = jQuery('.kt_docs_select2_users').val();
    var start_date = jQuery('.leave_start_date').val();
    var end_date   = jQuery('.leave_end_date').val();
    var leave_remarks   = jQuery('.leave_remarks').val();
    console.log('staff_id', start_date)
    if(!staff_id || !start_date || !end_date || !leave_remarks ){
        Swal.fire({
          text: "Please fill all the mandatory fields.",
          icon: "error",
          buttonsStyling: !1,
          confirmButtonText: "Ok, got it!",
          customClass: {
            confirmButton: "btn btn-primary"
          }
        })
        return false;    // in failure case
    }        
    return true;    // in success case
}