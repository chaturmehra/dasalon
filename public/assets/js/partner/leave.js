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