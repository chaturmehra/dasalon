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

          $("#staff_id").val(staff_data[0].user_id);
          $("#staff-name").text(staff_data[0].name);
          $("#staff-email").text(staff_data[0].email);
          $("#staff-phone").text(staff_data[0].phone);
          $("#staff-gender").text(staff_data[0].gender);
          $("#staff-joining-date").text(staff_data[0].joining_date);
          $("#staff-facebook").text(staff_data[0].facebook);
          $("#staff-instagram").text(staff_data[0].instagram);
          $("#staff-working-days").text(staff_data[0].staff_working_days);
          $("#staff-venues").text(staff_data[0].venues);
        }
    }
  });
});

$(document).on('click', '.update-staff-detail', function(){
  event.preventDefault();
  var staff_id = $('#staff_id').val();
  
  if(staff_id){
    var ajaxurl = baseurl+'partner/staff/get-staff-detail-by-id'+'/' + staff_id;
    $.ajax({
      url: ajaxurl,
      type:'GET',
      beforeSend:function(){
        $('.spinner-cls').show();
      },
      success:function(response)
      {
        $('.spinner-cls').hide();
        response = JSON.parse(response);

        if (response.status) {
          var staff_data = response.data[0];
          if (staff_data.profile_image) {
            var profile_image = publicurl+staff_data.profile_image;
            $("#old_profile_image").val(staff_data.profile_image);
            $(".edit-profile-image").css('background-image', 'url('+profile_image+')');
          }

          $("#edit_staff_id").val(staff_data.user_id);
          $("#main_staff_id").val(staff_data.staff_id);
          $("#edit-staff-name").val(staff_data.name);
          $("#edit-staff-phone").val(staff_data.phone);
          $("#edit-staff-email").val(staff_data.email);
          $("#edit-role").val(staff_data.staff_role).trigger('change');

          if (staff_data.online_status){
            $('#edit-online-status').prop('checked', true);
          }
          if (staff_data.is_active){
            $('#edit-staff-status').prop('checked', true);
          }

          if (staff_data.gender){
            $('#edit-gender').val(staff_data.gender).trigger('change');
          }
          
          $("#edit-joining-date").val(staff_data.joining_date);
          $("#edit-profile-description").val(staff_data.profile_description);
          $("#edit-facebook").val(staff_data.facebook);
          $("#edit-instagram").val(staff_data.instagram);

          var venues     = staff_data.venues;
          if (venues) {
            var split_venues = venues.split(",");
            $.each(split_venues, function(index, value) {
              $(".edit-venues[value="+value+"]").prop("checked", true);
            });
          }

          var staff_working_days = staff_data.staff_working_days;
          if (staff_working_days) {
            var working_days = staff_working_days.split(",");
            $.each(working_days, function(index, value) {
              $(".edit-working-days[value="+value+"]").prop("checked", true);
              $(".editadvancesettingdiv .add-staff-days .d-flex."+value).removeClass('d-none');
            });
          }

          if(staff_data.staff_advance_setting){
            $('.edit_advance_setting').prop('checked', true);
            $('.edit.staff-add-setting-div').removeClass('d-none');

            $("#edit-schedule-type").val(staff_data.schedule_type);
            $("#edit-start-date").val(staff_data.start_date);
            $("#edit-end-date").val(staff_data.end_date);
            $("#edit-end-date-type").val(staff_data.end_date_type);

            if (staff_data.schedule_type) {
              $("#edit-schedule-type").val(staff_data.schedule_type).trigger('change');
              $('.edit.posrel').removeClass('d-none');
              $('.end-date-type-option').addClass('d-none');
            }
          }

          var monday_hours      = staff_data.monday_hours;
          var tuesday_hours     = staff_data.tuesday_hours;
          var wednesday_hours   = staff_data.wednesday_hours;
          var thursday_hours    = staff_data.thursday_hours;
          var friday_hours      = staff_data.friday_hours;
          var saturday_hours    = staff_data.saturday_hours;
          var sunday_hours      = staff_data.sunday_hours;

          if (monday_hours) {
            var json_monday_hours = JSON.parse(monday_hours);
            var monday_hours_start = json_monday_hours["'start'"];
            var monday_hours_end   = json_monday_hours["'end'"];

            const combinedArray = monday_hours_start.map((startTime, index) => ({
              start: startTime,
              end: monday_hours_end[index]
            }));

            var html_content = [];
            var final_content = [];
            $.each(combinedArray, function(index1, value) {
              html_content = addShift(index1, value, "monday");
              final_content.push(html_content);
            });
            $('.editadvancesettingdiv .mon .monday').html(final_content);
            
          }
          if (tuesday_hours) {
            var json_tuesday_hours = JSON.parse(tuesday_hours);
            var tuesday_hours_start = json_tuesday_hours["'start'"];
            var tuesday_hours_end   = json_tuesday_hours["'end'"];

            const combinedArray = tuesday_hours_start.map((startTime, index) => ({
              start: startTime,
              end: tuesday_hours_end[index]
            }));

            var html_content = [];
            var final_content = [];
            $.each(combinedArray, function(index1, value) {
              html_content = addShift(index1, value, "tuesday");
              final_content.push(html_content);
            });

            $('.editadvancesettingdiv .tue .tuesday').html(html_content);
            
          }
          if (wednesday_hours) {
            var json_wednesday_hours = JSON.parse(wednesday_hours);
            var wednesday_hours_start = json_wednesday_hours["'start'"];
            var wednesday_hours_end   = json_wednesday_hours["'end'"];

            const combinedArray = wednesday_hours_start.map((startTime, index) => ({
              start: startTime,
              end: wednesday_hours_end[index]
            }));

            var html_content = [];
            var final_content = [];
            $.each(combinedArray, function(index1, value) {
              html_content = addShift(index1, value, "wednesday");
              final_content.push(html_content);
            });

             $('.editadvancesettingdiv .wed .wednesday').html(html_content);
            
          }
          if (thursday_hours) {
            var json_thursday_hours = JSON.parse(thursday_hours);
            var thursday_hours_start = json_thursday_hours["'start'"];
            var thursday_hours_end   = json_thursday_hours["'end'"];

            const combinedArray = thursday_hours_start.map((startTime, index) => ({
              start: startTime,
              end: thursday_hours_end[index]
            }));

            var html_content = [];
            var final_content = [];
            $.each(combinedArray, function(index1, value) {
              html_content = addShift(index1, value, "thursday");
              final_content.push(html_content);
            });
            $('.editadvancesettingdiv .thu .thursday').html(html_content);
            
          }
          if (friday_hours) {
            var json_friday_hours = JSON.parse(friday_hours);
            var friday_hours_start = json_friday_hours["'start'"];
            var friday_hours_end   = json_friday_hours["'end'"];

            const combinedArray = friday_hours_start.map((startTime, index) => ({
              start: startTime,
              end: friday_hours_end[index]
            }));

            var html_content = [];
            var final_content = [];
            $.each(combinedArray, function(index1, value) {
              html_content = addShift(index1, value, "friday");
              final_content.push(html_content);
            });
            $('.editadvancesettingdiv .fri .friday').html(html_content);
            
          }
          if (saturday_hours) {
            var json_saturday_hours = JSON.parse(saturday_hours);
            var saturday_hours_start = json_saturday_hours["'start'"];
            var saturday_hours_end   = json_saturday_hours["'end'"];

            const combinedArray = saturday_hours_start.map((startTime, index) => ({
              start: startTime,
              end: saturday_hours_end[index]
            }));

            var html_content = [];
            var final_content = [];
            $.each(combinedArray, function(index1, value) {
              html_content = addShift(index1, value, "saturday");
              final_content.push(html_content);
            });
            $('.editadvancesettingdiv .sat .saturday').html(html_content);

            
          }
          if (sunday_hours) {
            var json_sunday_hours = JSON.parse(sunday_hours);
            var sunday_hours_start = json_sunday_hours["'start'"];
            var sunday_hours_end   = json_sunday_hours["'end'"];

            const combinedArray = sunday_hours_start.map((startTime, index) => ({
              start: startTime,
              end: sunday_hours_end[index]
            }));

            var html_content = [];
            var final_content = [];
            $.each(combinedArray, function(index1, value) {
              html_content = addShift(index1, value, "sunday");
              final_content.push(html_content);
            });
            $('.editadvancesettingdiv .sun .sunday').html(html_content);

          }
          
        }
      }
    });
  }
});

$(document).on('click', '.add-commission', function(){
  event.preventDefault();
  var add_service    = $('#add_service').val();
  var add_book_look  = $('#add_book_look').val();
  var add_package    = $('#add_package').val();
  var add_voucher    = $('#add_voucher').val();
  var add_membership = $('#add_membership').val();
  var add_product    = $('#add_product').val();

  if (add_service !="" || add_book_look !="" || add_package !="" || add_voucher !="" || add_membership !="" || add_product !="" ) {
    var commission_data = {
      add_service: add_service,
      add_book_look: add_book_look,
      add_package: add_package,
      add_voucher: add_voucher,
      add_membership: add_membership,
      add_product: add_product,
    }

    if (commission_data) {
      $("#add_commission_data").val(JSON.stringify(commission_data));
    }
  }
});

$(document).on('click', '.update-commission', function(){
  event.preventDefault();
  var edit_service    = $('#edit_service').val();
  var edit_book_look  = $('#edit_book_look').val();
  var edit_package    = $('#edit_package').val();
  var edit_voucher    = $('#edit_voucher').val();
  var edit_membership = $('#edit_membership').val();
  var edit_product    = $('#edit_product').val();

  if (edit_service !="" || edit_book_look !="" || edit_package !="" || edit_voucher !="" || edit_membership !="" || edit_product !="" ) {
    var commission_data = {
      edit_service: edit_service,
      edit_book_look: edit_book_look,
      edit_package: edit_package,
      edit_voucher: edit_voucher,
      edit_membership: edit_membership,
      edit_product: edit_product,
    }

    if (commission_data) {
      $("#edit_commission_data").val(JSON.stringify(commission_data));
    }
  }
});

$(document).on('click', '.get-commission-by-id', function(){
  event.preventDefault();
  var staff_id    = $('#main_staff_id').val();
  var ajaxurl     = baseurl+'partner/staff/get-commission-by-staff-id'+'/' + staff_id;
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
        var commission_data = response.data;

        $("#edit_service").val(commission_data[0].service);
        $("#edit_book_look").val(commission_data[0].book_look);
        $("#edit_package").val(commission_data[0].package);
        $("#edit_voucher").val(commission_data[0].voucher);
        $("#edit_membership").val(commission_data[0].membership);
        $("#edit_product").val(commission_data[0].product);
      }
    }
  });
});

$(document).on('click', '.filter-by-role', function(){
  event.preventDefault();
  var selected_id   = $('.filter-option-roles option:selected').val();
  
  var ajaxurl     = baseurl+'partner/staff/filter-by-role'+'/' + selected_id;
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

      $('#kt_table_users .staff-lists').html('');
      if (response.status) {
        var staff_data = response.data;
        $('#kt_table_users .staff-lists').append(staff_data);
      }else{
        var staff_data = response.data;
        $('#kt_table_users .staff-lists').append(staff_data);
      }
    }
  });
});

$(document).on('click', '.filter-Reset', function(){
  event.preventDefault();
  
  var ajaxurl     = baseurl+'partner/staff/filter-reset';
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

      $('#kt_table_users .staff-lists').html('');
      if (response.status) {
        var staff_data = response.data;
        $('#kt_table_users .staff-lists').append(staff_data);
      }else{
        var staff_data = response.data;
        $('#kt_table_users .staff-lists').append(staff_data);
      }
    }
  });
});

$(document).on('click', '.export-staff-by-role', function(){
  event.preventDefault();
  var selected_id   = $('.export-roles option:selected').val();
  var format        = $('.export-format option:selected').val();
  
  var ajaxurl     = baseurl+'partner/staff/export-staff-by-role'+'/' + selected_id+'/' + format;
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
          text: "Staff list has been successfully exported!",
          icon: "success",
          buttonsStyling: !1,
          confirmButtonText: "Ok, got it!",
          customClass: { confirmButton: "btn btn-primary" },
        })
      }else{
        Swal.fire({
          text: "Somthing went wrong. Please try again!",
          icon: "error",
          buttonsStyling: !1,
          confirmButtonText: "Ok, got it!",
          customClass: { confirmButton: "btn btn-primary" },
        })
      }
    }
  });
});

function addShift(index, value, day){
  var start = day+"_hours['start'][]";
  var end   = day+"_hours['end'][]";
  var html = '<div class="d-flex flex-wrap gap-5 single-add-shift-div"><div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest"><input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="start" value="'+value.start+'" name="'+start+'" /><span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker"><i class="ki-outline ki-time fs-3"></i></span></div><div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest"><input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="end" value="'+value.end+'" name="'+end+'" /><span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker"><i class="ki-outline ki-time fs-3"></i></span></div><div class="btn btn-icon btn-sm btn-active-light-primary ms-auto btncls" onclick="delStaffTime(this)"><i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i></div></div>';
  return html;
}

var defaultvalue = "";
function numberHandler(input){
  const value = input.value.trim();
  const regex = /^(0|[1-9][0-9]?|100)$/;
  if (value != "" && !regex.test(value)) {
    input.value = defaultvalue;
  }else{
    defaultvalue = input.value;
  }
}

