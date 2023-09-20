jQuery(document).on('click', '.client-edit_on-click', function (e) {
    e.preventDefault();
    var client_edit_id = jQuery(this).attr("client_edit_id");
    if (client_edit_id) {
        var ajaxurl = baseurl + 'partner/client/client_detail/' + client_edit_id; 
        $.ajax({
            url: ajaxurl,
            type: 'GET',
            dataType: 'json',
            success:function(data) {
                    $("#edit_client_id").val(data[0].client_id);
                    $("#id").val(data[0].id);
                    $("#edit_name").val(data[0].name);
                    $("#edit_phone").val(data[0].phone);
                    $("#edit_email").val(data[0].email);
                    $("#edit_dob").val(data[0].dob);
                    $("#edit_notes").val(data[0].notes);
                    if (data[0].image) {
                     var profile_image = publicurl+data[0].image;
                     $("#old_image").val(data[0].image);
                     $(".edit-image").css('background-image', 'url('+profile_image+')');
                   }
                    $("#edit_gender").val(data[0].gender).trigger('change');
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    }
});


 jQuery(document).on("click", ".client-on-click", function(e){
      e.preventDefault();
        var client_id = jQuery(this).attr("client-id");
        $.ajax({
            url: baseurl+'partner/client/client_detail/'+client_id,
            type: 'GET',
            dataType: 'json',
            success:function(data) {
                 $('#name').text(data[0].name);
                 $('#phone').text(data[0].phone);
                 $('#email').text(data[0].email);
                 $('#address').text(data[0].address);

                 $('#dob').text(data[0].dob);
                 if(data[0].image){
                       $('#image').attr('src',baseurl + 'public' + data[0].image);
                 }
                 else{
                     $('#image').attr('src' ,baseurl +'public/assets/media/avatars/blank.png');
                 }
                 

   
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
});
