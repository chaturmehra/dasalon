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
        $(".check-in-time").val(response.check_in);
        $(".check-out-time").val(response.check_out);
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
        $('.attendance-register').html('');
        if (response.status) {
          var staff_data = response.data;
          $('.attendance-register').append(staff_data);
        }else{
          var staff_data = response.data;
          $('.attendance-register').append(staff_data);
        }
      }
    });
});

$('.attendance-analytics-filter').on('apply.daterangepicker', function (ev, picker) {

    var updateChart = KTChartsWidgetAttendance.getInstance().self;
    var updateAvgChart = KTChartsWidgetAvgWrkHr.getInstance().self;

    // The selected date range will be available in the 'picker' object
    var startDate = picker.startDate.format('YYYY-MM-DD');
    var endDate   = picker.endDate.format('YYYY-MM-DD');

    var ajaxurl     = baseurl+'partner/staff/attendance-analytics'+'/'+startDate+'/'+endDate;

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

          var apexChartArray       = response.apexChartArray;
          var apexChartAvgArray   = response.apexChartAvgArray;

          var seriesData = Object.values(apexChartArray).map(value => value.toString());
          var categoriesData = Object.keys(apexChartArray);
          var seriesAvgData = Object.values(apexChartAvgArray).map(value => value.toString());
          
          updateChart.updateOptions({
            xaxis: {
              categories: categoriesData,
            },
          });
          updateChart.updateSeries([{
            name: 'Spent time',
            data: seriesData
          }]);
          updateAvgChart.updateSeries([{
            name: 'Average Working Hour',
            data: seriesAvgData
          }]);

        }else{
          updateChart.updateSeries([{
            name: 'Spent time',
            data: [""]
          }]);
          updateAvgChart.updateSeries([{
            name: 'Average Working Hour',
            data: [""]
          }]);
          updateChart.updateOptions({
            xaxis: {
              categories: [""]
            },
          });
        }
      }
    });
});