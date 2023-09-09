$(document).on('click', '.update-venue-detail', function(){
  event.preventDefault();
  var venue_id = $(this).attr('venue-id');
  if(venue_id){
    var ajaxurl = baseurl+'partner/get-venue-detail-by-id'+'/' + venue_id;
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
          var venues_data = response.venues;
          var venues_meta = response.venue_meta;

          $("#edit_venue_id").val(venues_data.id);
          $("#edit_venue_name").val(venues_data.name);
          $("#edit_venue_email").val(venues_data.email);
          $("#edit_venue_phone").val(venues_data.phone);
          $("#edit_venue_address").val(venues_data.address);
          $("#edit_venue_billing_details").val(venues_data.billing_details);

          $("#edit_venue_business_address").val(venues_meta.business_address);
          $("#edit_venue_business_aptsuite").val(venues_meta.business_aptsuite);
          $("#edit_venue_business_location").val(venues_meta.business_location);
          $("#edit_venue_city").val(venues_meta.city);
          $("#edit_venue_country").val(venues_meta.country);
          $("#edit_venue_directions").val(venues_meta.directions);
          $("#edit_venue_district").val(venues_meta.district);
          $("#edit_venue_region").val(venues_meta.region);
          $("#edit_venue_postcode").val(venues_meta.postcode);

          $(".edit_operating_open_hours").val(venues_meta.operating_open_hours);
          $(".edit_operating_close_hours").val(venues_meta.operating_close_hours);

          var featured = publicurl+venues_meta.featured;
          var imgother1 = publicurl+venues_meta.imgother1;
          var imgother2 = publicurl+venues_meta.imgother2;
          var imgother3 = publicurl+venues_meta.imgother3;
          var imgother4 = publicurl+venues_meta.imgother4;
          $("#edit_featured_img").css('background-image', 'url('+featured+')');
          $("#edit_otherimg1").css('background-image', 'url('+imgother1+')');
          $("#edit_otherimg2").css('background-image', 'url('+imgother2+')');
          $("#edit_otherimg3").css('background-image', 'url('+imgother3+')');
          $("#edit_otherimg4").css('background-image', 'url('+imgother4+')');
            //$("#country").val(country_id).trigger('change');
            var gender_restriction = venues_meta.gender_restriction;
            var openhours = venues_meta.openhours;
            var business_address_check = venues_meta.business_address_check;
            var operating_days = venues_meta.operating_days;
            var always_open = venues_meta.always_open;
            var appointment_only = venues_meta.appointment_only;
            var advance_setting = venues_meta.advance_setting;

            if (gender_restriction == "Unisex"){
              $('.edit_gender_restriction#unisex').prop('checked', true);
            }else if(gender_restriction == "Male"){
              $('.edit_gender_restriction#male').prop('checked', true);
            }else if(gender_restriction == "Female"){
              $('.edit_gender_restriction#female').prop('checked', true);
            }
            if (openhours == "open_for_selected_hours"){
              $('.edit_openhours#openhoursnav1').prop('checked', true);
              $('.edit#operatinghourstab1').addClass('active');
              $('.edit#operatinghourstab2').removeClass('active');
              $('.edit#operatinghourstab3').removeClass('active');
            }else if(openhours == "always_open"){
              $('.edit_openhours#openhoursnav2').prop('checked', true);
              $('.edit#operatinghourstab2').addClass('active');
              $('.edit#operatinghourstab1').removeClass('active');
              $('.edit#operatinghourstab3').removeClass('active');
            }else if(openhours == "appointment_only"){
              $('.edit_openhours#openhoursnav3').prop('checked', true);
              $('.edit#operatinghourstab3').addClass('active');
              $('.edit#operatinghourstab1').removeClass('active');
              $('.edit#operatinghourstab2').removeClass('active');
            }
            if(business_address_check){
              $('.edit_business_address_check').prop('checked', true);
            }
            if(advance_setting){
              $('.edit_advance_setting').prop('checked', true);
              $('.edit-add-close-op-hours').removeClass('d-none');
            }

            var amenity     = venues_meta.amenity;
            if (amenity) {
              var split_amenity = amenity.split(",");
              $.each(split_amenity, function(index, value) {
                $(".edit_venue_amenity[value="+value+"]").prop("checked", true);
              });
            }

            var business_type   = venues_meta.venuebusiness;
            if (business_type) {
              var split_bt = business_type.split(",");
              $.each(split_bt, function(index, value) {
                $(".edit_venuebusiness[value="+value+"]").prop("checked", true);
              });
            }

            if (operating_days) {
              var op_days = operating_days.split(",");
              $.each(op_days, function(index, value) {
                $(".edit_operating_days[value="+value+"]").prop("checked", true);
                $(".edit-advance-setting-op-hours tr."+value).removeClass('d-none');
                $(".edit-off-peakphours tr."+value).removeClass('d-none');
              });
            }
            if (always_open) {
              var al_open = always_open.split(",");
              $.each(al_open, function(index, value) {
                $(".edit_always_open[value="+value+"]").prop("checked", true);
              });
            }
            if (appointment_only) {
              var app_only = appointment_only.split(",");
              $.each(app_only, function(index, value) {
                $(".edit_appointment_only[value="+value+"]").prop("checked", true);
              });
            }
          }
        }
      });
}
});

function initMap() {
  google.maps.event.addDomListener(window, 'load', initialize);

  function initialize() {
    var input = document.getElementById('business_location');
    console.log("input", input)
    var autocomplete = new google.maps.places.Autocomplete(input);
    console.log("autocomplete", autocomplete)
    autocomplete.addListener('place_changed', function () {
      var place = autocomplete.getPlace();
      console.log("place", place)
        /*$('#latitude').val(place.geometry['location'].lat());
        $('#longitude').val(place.geometry['location'].lng());

        $("#latitudeArea").removeClass("d-none");
        $("#longtitudeArea").removeClass("d-none");*/
      });
  }
}