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
