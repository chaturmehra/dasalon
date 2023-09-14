$(document).on('click', '.modal_attendance_check', function(event){
  event.preventDefault();
  var staff_id    = $(this).attr('staff-id');
  var ajaxurl     = baseurl+'partner/staff/get-staff-detail-fill-attendance'+'/' + staff_id;
  
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

        $(".att_staff_name").text(staff_data[0].name);
        $(".att_staff_id").val(staff_data[0].id);
      }
    }
  });
});

$(document).on('click', '.show_hide_staff_attendance', function(event){
  event.preventDefault();
  var staff_id    = $(this).attr('staff-id');
  var trClass   = 'staff_'+staff_id;

  if (staff_id == "all") {
    $('.attendance-register tr').removeClass('d-none');
  }else {
    $('.attendance-register tr').addClass('d-none');
    $('.attendance-register tr.'+trClass).removeClass('d-none');
  }
});

$('.attendance-daterangepicker').on('apply.daterangepicker', function (ev, picker) {
    // The selected date range will be available in the 'picker' object
    var startDate = picker.startDate.format('YYYY-MM-DD');
    var endDate   = picker.endDate.format('YYYY-MM-DD');

    // You can use the selected start and end date as needed
    console.log('Start Date: ' + startDate);
    console.log('End Date: ' + endDate);

    var ajaxurl     = baseurl+'partner/staff/filter-attendance-by-date'+'/'+startDate+'/'+endDate;

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

          $(".att_staff_name").text(staff_data[0].name);
          $(".att_staff_id").val(staff_data[0].id);
        }
      }
    });
});