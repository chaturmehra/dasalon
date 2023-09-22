$(document).on('click', '.show_hide_staff_leave', function(event){
  event.preventDefault();
  var staff_id  = $(this).attr('staff-id');
  var trClass   = 'staff_'+staff_id;

  if (staff_id == "all") {
    $('.leave-lists tr').removeClass('d-none');
  }else {
    $('.leave-lists tr').addClass('d-none');
    $('.leave-lists tr.'+trClass).removeClass('d-none');
  }
  
});

function validateLeaveForm(){
  
    var staff_id   = jQuery('.kt_docs_select2_users').val();
    var start_date = jQuery('.venleave_start_date').val();
    var end_date   = jQuery('.leave_end_date').val();
    var leave_remarks   = jQuery('.leave_remarks').val();
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