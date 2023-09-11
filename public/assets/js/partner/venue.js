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
          
          var gender_restriction = venues_meta.gender_restriction;
          var openhours = venues_meta.openhours;
          var business_address_check = venues_meta.business_address_check;
          var operating_days = venues_meta.operating_days;
          var always_open = venues_meta.always_open;
          var appointment_only = venues_meta.appointment_only;
          var advance_setting = venues_meta.advance_setting;

          var adv_setting_mon = venues_meta.adv_setting_mon;
          var adv_setting_tue = venues_meta.adv_setting_tue;
          var adv_setting_wed = venues_meta.adv_setting_wed;
          var adv_setting_thu = venues_meta.adv_setting_thu;
          var adv_setting_fri = venues_meta.adv_setting_fri;
          var adv_setting_sat = venues_meta.adv_setting_sat;
          var adv_setting_sun = venues_meta.adv_setting_sun;

          var off_peak_hour_mon = venues_meta.off_peak_hour_mon;
          var off_peak_hour_tue = venues_meta.off_peak_hour_tue;
          var off_peak_hour_wed = venues_meta.off_peak_hour_wed;
          var off_peak_hour_thu = venues_meta.off_peak_hour_thu;
          var off_peak_hour_fri = venues_meta.off_peak_hour_fri;
          var off_peak_hour_sat = venues_meta.off_peak_hour_sat;
          var off_peak_hour_sun = venues_meta.off_peak_hour_sun;

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

          if (adv_setting_mon) {
            var json_adv_set_mon = JSON.parse(adv_setting_mon);
            var adv_set_mon_open = json_adv_set_mon["'open'"];
            $("#edit_adv_setting_mon_open").val(adv_set_mon_open);

            var adv_set_mon_close = json_adv_set_mon["'close'"];
            $("#edit_adv_setting_mon_close").val(adv_set_mon_close);

            var adv_set_mon_timeset_open = json_adv_set_mon["'timeset_open'"];
            if (adv_set_mon_timeset_open) {
              $("#edit_adv_setting_mon_timeset_open").val(adv_set_mon_timeset_open);
              $(".edit-mon.addweekoff").hide();
              $(".edit-mon.divweekoff").show();
            }

            var adv_set_mon_timeset_close = json_adv_set_mon["'timeset_close'"];
            if (adv_set_mon_timeset_close) {
              $("#edit_adv_setting_mon_timeset_close").val(adv_set_mon_timeset_close);
              $(".edit-mon.addweekoff").hide();
              $(".edit-mon.divweekoff").show();
            }
          }

          if (adv_setting_tue) {
            var json_adv_set_tue = JSON.parse(adv_setting_tue);
            var adv_set_tue_open = json_adv_set_tue["'open'"];
            $("#edit_adv_setting_tue_open").val(adv_set_tue_open);

            var adv_set_tue_close = json_adv_set_tue["'close'"];
            $("#edit_adv_setting_tue_close").val(adv_set_tue_close);

            var adv_set_tue_timeset_open = json_adv_set_tue["'timeset_open'"];
            if (adv_set_tue_timeset_open) {
              $("#edit_adv_setting_tue_timeset_open").val(adv_set_tue_timeset_open);
              $(".edit-tue.addweekoff").hide();
              $(".edit-tue.divweekoff").show();
            }

            var adv_set_tue_timeset_close = json_adv_set_tue["'timeset_close'"];
            if (adv_set_tue_timeset_close) {
              $("#edit_adv_setting_tue_timeset_close").val(adv_set_tue_timeset_close);
              $(".edit-tue.addweekoff").hide();
              $(".edit-tue.divweekoff").show();
            }
          }

          if (adv_setting_wed) {
            var json_adv_set_wed = JSON.parse(adv_setting_wed);
            var adv_set_wed_open = json_adv_set_wed["'open'"];
            $("#edit_adv_setting_wed_open").val(adv_set_wed_open);

            var adv_set_wed_close = json_adv_set_wed["'close'"];
            $("#edit_adv_setting_wed_close").val(adv_set_wed_close);

            var adv_set_wed_timeset_open = json_adv_set_wed["'timeset_open'"];
            if (adv_set_wed_timeset_open) {
              $("#edit_adv_setting_wed_timeset_open").val(adv_set_wed_timeset_open);
              $(".edit-wed.addweekoff").hide();
              $(".edit-wed.divweekoff").show();
            }

            var adv_set_wed_timeset_close = json_adv_set_wed["'timeset_close'"];
            if (adv_set_wed_timeset_close) {
              $("#edit_adv_setting_wed_timeset_close").val(adv_set_wed_timeset_close);
              $(".edit-wed.addweekoff").hide();
              $(".edit-wed.divweekoff").show();
            }
          }

          if (adv_setting_thu) {
            var json_adv_set_thu = JSON.parse(adv_setting_thu);
            var adv_set_thu_open = json_adv_set_thu["'open'"];
            $("#edit_adv_setting_thu_open").val(adv_set_thu_open);

            var adv_set_thu_close = json_adv_set_thu["'close'"];
            $("#edit_adv_setting_thu_close").val(adv_set_thu_close);

            var adv_set_thu_timeset_open = json_adv_set_thu["'timeset_open'"];
            if (adv_set_thu_timeset_open) {
              $("#edit_adv_setting_thu_timeset_open").val(adv_set_thu_timeset_open);
              $(".edit-thu.addweekoff").hide();
              $(".edit-thu.divweekoff").show();
            }

            var adv_set_thu_timeset_close = json_adv_set_thu["'timeset_close'"];
            if (adv_set_thu_timeset_close) {
              $("#edit_adv_setting_thu_timeset_close").val(adv_set_thu_timeset_close);
              $(".edit-thu.addweekoff").hide();
              $(".edit-thu.divweekoff").show();
            }
          }

          if (adv_setting_fri) {
            var json_adv_set_fri = JSON.parse(adv_setting_fri);
            var adv_set_fri_open = json_adv_set_fri["'open'"];
            $("#edit_adv_setting_fri_open").val(adv_set_fri_open);

            var adv_set_fri_close = json_adv_set_fri["'close'"];
            $("#edit_adv_setting_fri_close").val(adv_set_fri_close);

            var adv_set_fri_timeset_open = json_adv_set_fri["'timeset_open'"];
            if (adv_set_fri_timeset_open) {
              $("#edit_adv_setting_fri_timeset_open").val(adv_set_fri_timeset_open);
              $(".edit-fri.addweekoff").hide();
              $(".edit-fri.divweekoff").show();
            }

            var adv_set_fri_timeset_close = json_adv_set_fri["'timeset_close'"];
            if (adv_set_fri_timeset_close) {
              $("#edit_adv_setting_fri_timeset_close").val(adv_set_fri_timeset_close);
              $(".edit-fri.addweekoff").hide();
              $(".edit-fri.divweekoff").show();
            }
          }

          if (adv_setting_sat) {
            var json_adv_set_sat = JSON.parse(adv_setting_sat);
            var adv_set_sat_open = json_adv_set_sat["'open'"];
            $("#edit_adv_setting_sat_open").val(adv_set_sat_open);

            var adv_set_sat_close = json_adv_set_sat["'close'"];
            $("#edit_adv_setting_sat_close").val(adv_set_sat_close);

            var adv_set_sat_timeset_open = json_adv_set_sat["'timeset_open'"];
            if (adv_set_sat_timeset_open) {
              $("#edit_adv_setting_sat_timeset_open").val(adv_set_sat_timeset_open);
              $(".edit-sat.addweekoff").hide();
              $(".edit-sat.divweekoff").show();
            }

            var adv_set_sat_timeset_close = json_adv_set_sat["'timeset_close'"];
            if (adv_set_sat_timeset_close) {
              $("#edit_adv_setting_sat_timeset_close").val(adv_set_sat_timeset_close);
              $(".edit-sat.addweekoff").hide();
              $(".edit-sat.divweekoff").show();
            }
          }

          if (adv_setting_sun) {
            var json_adv_set_sun = JSON.parse(adv_setting_sun);
            var adv_set_sun_open = json_adv_set_sun["'open'"];
            $("#edit_adv_setting_sun_open").val(adv_set_sun_open);

            var adv_set_sun_close = json_adv_set_sun["'close'"];
            $("#edit_adv_setting_sun_close").val(adv_set_sun_close);

            var adv_set_sun_timeset_open = json_adv_set_sun["'timeset_open'"];
            if (adv_set_sun_timeset_open) {
              $("#edit_adv_setting_sun_timeset_open").val(adv_set_sun_timeset_open);
              $(".edit-sun.addweekoff").hide();
              $(".edit-sun.divweekoff").show();
            }

            var adv_set_sun_timeset_close = json_adv_set_sun["'timeset_close'"];
            if (adv_set_sun_timeset_close) {
              $("#edit_adv_setting_sun_timeset_close").val(adv_set_sun_timeset_close);
              $(".edit-sun.addweekoff").hide();
              $(".edit-sun.divweekoff").show();
            }
          }

          if (off_peak_hour_mon) {
            var json_off_peak_hour_mon = JSON.parse(off_peak_hour_mon);

            var off_peak_hour_mon_start = json_off_peak_hour_mon["'start'"];
            var off_peak_hour_mon_end = json_off_peak_hour_mon["'end'"];
            if (off_peak_hour_mon_start || off_peak_hour_mon_end) {
              $("#edit_off_peak_hour_mon_start").val(off_peak_hour_mon_start);
              $("#edit_off_peak_hour_mon_end").val(off_peak_hour_mon_end);
              $(".edit-oph-mon-se.addweekoff").hide();
              $(".edit-oph-mon-se.divweekoff").show();
            }

            var off_peak_hour_mon_timeset_open = json_off_peak_hour_mon["'timeset_open'"];
            var off_peak_hour_mon_timeset_close = json_off_peak_hour_mon["'timeset_close'"];
            if (off_peak_hour_mon_timeset_open || off_peak_hour_mon_timeset_close) {
              $("#edit_off_peak_hour_mon_timeset_open").val(off_peak_hour_mon_timeset_open);
              $("#edit_off_peak_hour_mon_timeset_close").val(off_peak_hour_mon_timeset_close);
              $(".edit-oph-mon-to.addweekoff").hide();
              $(".edit-oph-mon-to.divweekoff").show();
            }
          }

          if (off_peak_hour_tue) {
            var json_off_peak_hour_tue = JSON.parse(off_peak_hour_tue);

            var off_peak_hour_tue_start = json_off_peak_hour_tue["'start'"];
            var off_peak_hour_tue_end = json_off_peak_hour_tue["'end'"];
            if (off_peak_hour_tue_start || off_peak_hour_tue_end) {
              $("#edit_off_peak_hour_tue_start").val(off_peak_hour_tue_start);
              $("#edit_off_peak_hour_tue_end").val(off_peak_hour_tue_end);
              $(".edit-oph-tue-se.addweekoff").hide();
              $(".edit-oph-tue-se.divweekoff").show();
            }

            var off_peak_hour_tue_timeset_open = json_off_peak_hour_tue["'timeset_open'"];
            var off_peak_hour_tue_timeset_close = json_off_peak_hour_tue["'timeset_close'"];
            if (off_peak_hour_tue_timeset_open || off_peak_hour_tue_timeset_close) {
              $("#edit_off_peak_hour_tue_timeset_open").val(off_peak_hour_tue_timeset_open);
              $("#edit_off_peak_hour_tue_timeset_close").val(off_peak_hour_tue_timeset_close);
              $(".edit-oph-tue-to.addweekoff").hide();
              $(".edit-oph-tue-to.divweekoff").show();
            }
          }

          if (off_peak_hour_wed) {
            var json_off_peak_hour_wed = JSON.parse(off_peak_hour_wed);

            var off_peak_hour_wed_start = json_off_peak_hour_wed["'start'"];
            var off_peak_hour_wed_end = json_off_peak_hour_wed["'end'"];
            if (off_peak_hour_wed_start || off_peak_hour_wed_end) {
              $("#edit_off_peak_hour_wed_start").val(off_peak_hour_wed_start);
              $("#edit_off_peak_hour_wed_end").val(off_peak_hour_wed_end);
              $(".edit-oph-wed-se.addweekoff").hide();
              $(".edit-oph-wed-se.divweekoff").show();
            }

            var off_peak_hour_wed_timeset_open = json_off_peak_hour_wed["'timeset_open'"];
            var off_peak_hour_wed_timeset_close = json_off_peak_hour_wed["'timeset_close'"];
            if (off_peak_hour_wed_timeset_open || off_peak_hour_wed_timeset_close) {
              $("#edit_off_peak_hour_wed_timeset_open").val(off_peak_hour_wed_timeset_open);
              $("#edit_off_peak_hour_wed_timeset_close").val(off_peak_hour_wed_timeset_close);
              $(".edit-oph-wed-to.addweekoff").hide();
              $(".edit-oph-wed-to.divweekoff").show();
            }
          }

          if (off_peak_hour_thu) {
            var json_off_peak_hour_thu = JSON.parse(off_peak_hour_thu);

            var off_peak_hour_thu_start = json_off_peak_hour_thu["'start'"];
            var off_peak_hour_thu_end = json_off_peak_hour_thu["'end'"];
            if (off_peak_hour_thu_start || off_peak_hour_thu_end) {
              $("#edit_off_peak_hour_thu_start").val(off_peak_hour_thu_start);
              $("#edit_off_peak_hour_thu_end").val(off_peak_hour_thu_end);
              $(".edit-oph-thu-se.addweekoff").hide();
              $(".edit-oph-thu-se.divweekoff").show();
            }

            var off_peak_hour_thu_timeset_open = json_off_peak_hour_thu["'timeset_open'"];
            var off_peak_hour_thu_timeset_close = json_off_peak_hour_thu["'timeset_close'"];
            if (off_peak_hour_thu_timeset_open || off_peak_hour_thu_timeset_close) {
              $("#edit_off_peak_hour_thu_timeset_open").val(off_peak_hour_thu_timeset_open);
              $("#edit_off_peak_hour_thu_timeset_close").val(off_peak_hour_thu_timeset_close);
              $(".edit-oph-thu-to.addweekoff").hide();
              $(".edit-oph-thu-to.divweekoff").show();
            }
          }

          if (off_peak_hour_fri) {
            var json_off_peak_hour_fri = JSON.parse(off_peak_hour_fri);

            var off_peak_hour_fri_start = json_off_peak_hour_fri["'start'"];
            var off_peak_hour_fri_end = json_off_peak_hour_fri["'end'"];
            if (off_peak_hour_fri_start || off_peak_hour_fri_end) {
              $("#edit_off_peak_hour_fri_start").val(off_peak_hour_fri_start);
              $("#edit_off_peak_hour_fri_end").val(off_peak_hour_fri_end);
              $(".edit-oph-fri-se.addweekoff").hide();
              $(".edit-oph-fri-se.divweekoff").show();
            }

            var off_peak_hour_fri_timeset_open = json_off_peak_hour_fri["'timeset_open'"];
            var off_peak_hour_fri_timeset_close = json_off_peak_hour_fri["'timeset_close'"];
            if (off_peak_hour_fri_timeset_open || off_peak_hour_fri_timeset_close) {
              $("#edit_off_peak_hour_fri_timeset_open").val(off_peak_hour_fri_timeset_open);
              $("#edit_off_peak_hour_fri_timeset_close").val(off_peak_hour_fri_timeset_close);
              $(".edit-oph-fri-to.addweekoff").hide();
              $(".edit-oph-fri-to.divweekoff").show();
            }
          }

          if (off_peak_hour_sat) {
            var json_off_peak_hour_sat = JSON.parse(off_peak_hour_sat);

            var off_peak_hour_sat_start = json_off_peak_hour_sat["'start'"];
            var off_peak_hour_sat_end = json_off_peak_hour_sat["'end'"];
            if (off_peak_hour_sat_start || off_peak_hour_sat_end) {
              $("#edit_off_peak_hour_sat_start").val(off_peak_hour_sat_start);
              $("#edit_off_peak_hour_sat_end").val(off_peak_hour_sat_end);
              $(".edit-oph-sat-se.addweekoff").hide();
              $(".edit-oph-sat-se.divweekoff").show();
            }

            var off_peak_hour_sat_timeset_open = json_off_peak_hour_sat["'timeset_open'"];
            var off_peak_hour_sat_timeset_close = json_off_peak_hour_sat["'timeset_close'"];
            if (off_peak_hour_sat_timeset_open || off_peak_hour_sat_timeset_close) {
              $("#edit_off_peak_hour_sat_timeset_open").val(off_peak_hour_sat_timeset_open);
              $("#edit_off_peak_hour_sat_timeset_close").val(off_peak_hour_sat_timeset_close);
              $(".edit-oph-sat-to.addweekoff").hide();
              $(".edit-oph-sat-to.divweekoff").show();
            }
          }

          if (off_peak_hour_sun) {
            var json_off_peak_hour_sun = JSON.parse(off_peak_hour_sun);

            var off_peak_hour_sun_start = json_off_peak_hour_sun["'start'"];
            var off_peak_hour_sun_end = json_off_peak_hour_sun["'end'"];
            if (off_peak_hour_sun_start || off_peak_hour_sun_end) {
              $("#edit_off_peak_hour_sun_start").val(off_peak_hour_sun_start);
              $("#edit_off_peak_hour_sun_end").val(off_peak_hour_sun_end);
              $(".edit-oph-sun-se.addweekoff").hide();
              $(".edit-oph-sun-se.divweekoff").show();
            }

            var off_peak_hour_sun_timeset_open = json_off_peak_hour_sun["'timeset_open'"];
            var off_peak_hour_sun_timeset_close = json_off_peak_hour_sun["'timeset_close'"];
            if (off_peak_hour_sun_timeset_open || off_peak_hour_sun_timeset_close) {
              $("#edit_off_peak_hour_sun_timeset_open").val(off_peak_hour_sun_timeset_open);
              $("#edit_off_peak_hour_sun_timeset_close").val(off_peak_hour_sun_timeset_close);
              $(".edit-oph-sun-to.addweekoff").hide();
              $(".edit-oph-sun-to.divweekoff").show();
            }
          }
          
        }
      }
    });
  }
});


// Initialize the Google Places API
function initMap() {
  function initialize() {
    
    var addinput = document.getElementById('business_location');
    var updateinput = document.getElementById('edit_venue_business_location');
    var addAutocomplete = new google.maps.places.Autocomplete(addinput);
    var updateAutocomplete = new google.maps.places.Autocomplete(updateinput);

    addVenueAddress(addAutocomplete);

    updateVenueAddress(updateAutocomplete);

  }
  google.maps.event.addDomListener(window, 'load', initialize);
}

function addVenueAddress(addAutocomplete) {
  addAutocomplete.addListener('place_changed', function () {
      var place = addAutocomplete.getPlace();
      if (!place.geometry) {
        // Place details are not available for this place.
        return;
      }

      // Fetch additional details using the Geocoding API
      var geocoder = new google.maps.Geocoder();
      geocoder.geocode({ placeId: place.place_id }, function (results, status) {
        if (status === 'OK') {
          var result = results[0];
          var address      = '';
          var country      = '';
          var state        = '';
          var district     = '';
          var city         = '';
          var postcode     = '';
          var region       = '';
          var latitude     = '';
          var longitude    = '';
          // console.log("result", result);
          result.address_components.forEach(function (component) {
            // console.log("component", component);
            if (component.types.includes('country')) {
              country = component.long_name;
            } else if (component.types.includes('administrative_area_level_1')) {
              state = component.long_name;
            } else if (component.types.includes('administrative_area_level_3')) {
              district = component.long_name;
            } else if (component.types.includes('locality')) {
              city = component.long_name;
            } else if (component.types.includes('postal_code')) {
              postcode = component.long_name;
            } else if (component.types.includes('administrative_area_level_2')) {
              region = component.long_name;
            } else if (component.types.includes('neighborhood')) {
              address = component.long_name;
            }
          });

          latitude = result.geometry.location.lat();
          longitude = result.geometry.location.lng();

          $("#add_venue_business_address").val(address); 
          $("#add_venue_city").val(city);
          $("#add_venue_country").val(country);
          $("#add_venue_district").val(district);
          $("#add_venue_region").val(state);
          $("#add_venue_postcode").val(postcode);
          $("#add_venue_latitude").val(latitude);
          $("#add_venue_longitude").val(longitude);

          addDragendMarker(latitude, longitude);

        } else {
          console.error('Geocoding request failed due to:', status);
        }
      });
    });
}

function updateVenueAddress(updateAutocomplete) {
  updateAutocomplete.addListener('place_changed', function () {
      var place = updateAutocomplete.getPlace();
      if (!place.geometry) {
        // Place details are not available for this place.
        return;
      }

      // Fetch additional details using the Geocoding API
      var geocoder = new google.maps.Geocoder();
      geocoder.geocode({ placeId: place.place_id }, function (results, status) {
        if (status === 'OK') {
          var result = results[0];
          var address      = '';
          var country      = '';
          var state        = '';
          var district     = '';
          var city         = '';
          var postcode     = '';
          var region       = '';
          var latitude     = '';
          var longitude    = '';
          // console.log("result", result);
          result.address_components.forEach(function (component) {
            // console.log("component", component);
            if (component.types.includes('country')) {
              country = component.long_name;
            } else if (component.types.includes('administrative_area_level_1')) {
              state = component.long_name;
            } else if (component.types.includes('administrative_area_level_3')) {
              district = component.long_name;
            } else if (component.types.includes('locality')) {
              city = component.long_name;
            } else if (component.types.includes('postal_code')) {
              postcode = component.long_name;
            } else if (component.types.includes('administrative_area_level_2')) {
              region = component.long_name;
            } else if (component.types.includes('neighborhood')) {
              address = component.long_name;
            }
          });

          latitude = result.geometry.location.lat();
          longitude = result.geometry.location.lng();

          $("#edit_venue_business_address").val(address);
          $("#edit_venue_city").val(city);
          $("#edit_venue_country").val(country);
          $("#edit_venue_district").val(district);
          $("#edit_venue_region").val(state);
          $("#edit_venue_postcode").val(postcode);
          $("#edit_venue_latitude").val(latitude);
          $("#edit_venue_longitude").val(longitude);

          editDragendMarker(latitude, longitude);
          
        } else {
          console.error('Geocoding request failed due to:', status);
        }
      });
    });
}

var map;
var marker;

function addDragendMarker(latitude, longitude) {
  var initialLocation = { lat: latitude, lng: longitude }; // Initial map center
  map = new google.maps.Map(document.getElementById('add-gmap'), {
    center: initialLocation,
    zoom: 8
  });

  // Create a draggable marker
  marker = new google.maps.Marker({
    map: map,
    draggable: true,
    position: initialLocation
  });

  // Event listener for when the marker is dragged
  marker.addListener('dragend', function() {
    var draggedPosition = marker.getPosition();
    var geocoder = new google.maps.Geocoder();

    // Perform reverse geocoding to get location details
    geocoder.geocode({ location: draggedPosition }, function(results, status) {
      if (status === 'OK' && results[0]) {
        var addressComponents = results[0].address_components;
        var country     = '';
        var state       = '';
        var district    = '';
        var city        = '';
        var postcode    = '';
        var region      = '';
        var address     = '';
        var street_number     = '';
        var route     = '';
        var sublocality_level_2     = '';
        var sublocality_level_1     = '';

        addressComponents.forEach(function(component) {
          
          if (component.types.includes('country')) {
            country = component.long_name;
          } else if (component.types.includes('administrative_area_level_1')) {
            state = component.long_name;
          } else if (component.types.includes('administrative_area_level_3')) {
            district = component.long_name;
          } else if (component.types.includes('locality')) {
            city = component.long_name;
          } else if (component.types.includes('postal_code')) {
            postcode = component.long_name;
          } else if (component.types.includes('administrative_area_level_2')) {
            region = component.long_name;
          } else if (component.types.includes('street_number')) {
            street_number = component.long_name;
          } else if (component.types.includes('route')) {
            route = component.long_name;
          } else if (component.types.includes('sublocality_level_2')) {
            sublocality_level_2 = component.long_name;
          } else if (component.types.includes('sublocality_level_1')) {
            sublocality_level_1 = component.long_name;
          }
        });

        address = street_number+', '+route+', '+sublocality_level_2+', '+sublocality_level_1;

        var latitude = draggedPosition.lat();
        var longitude = draggedPosition.lng();

        // Use the location details as needed
        $("#business_location").val(address);
        $("#add_venue_business_address").val(address); 
        $("#add_venue_city").val(city);
        $("#add_venue_country").val(country);
        $("#add_venue_district").val(district);
        $("#add_venue_region").val(state);
        $("#add_venue_postcode").val(postcode);
        $("#add_venue_latitude").val(latitude);
        $("#add_venue_longitude").val(longitude);

      } else {
        console.error('Geocoder failed due to:', status);
      }
    });
  });
}
function editDragendMarker(latitude, longitude) {
  var initialLocation = { lat: latitude, lng: longitude }; // Initial map center
  map = new google.maps.Map(document.getElementById('edit-map'), {
    center: initialLocation,
    zoom: 8
  });

  // Create a draggable marker
  marker = new google.maps.Marker({
    map: map,
    draggable: true,
    position: initialLocation
  });

  // Event listener for when the marker is dragged
  marker.addListener('dragend', function() {
    var draggedPosition = marker.getPosition();
    var geocoder = new google.maps.Geocoder();

    // Perform reverse geocoding to get location details
    geocoder.geocode({ location: draggedPosition }, function(results, status) {
      if (status === 'OK' && results[0]) {
        var addressComponents = results[0].address_components;
        var country     = '';
        var state       = '';
        var district    = '';
        var city        = '';
        var postcode    = '';
        var region      = '';
        var address     = '';
        var street_number     = '';
        var route             = '';
        var sublocality_level_2     = '';
        var sublocality_level_1     = '';

        addressComponents.forEach(function(component) {

          if (component.types.includes('country')) {
            country = component.long_name;
          } else if (component.types.includes('administrative_area_level_1')) {
            state = component.long_name;
          } else if (component.types.includes('administrative_area_level_3')) {
            district = component.long_name;
          } else if (component.types.includes('locality')) {
            city = component.long_name;
          } else if (component.types.includes('postal_code')) {
            postcode = component.long_name;
          } else if (component.types.includes('administrative_area_level_2')) {
            region = component.long_name;
          } else if (component.types.includes('street_number')) {
            street_number = component.long_name;
          } else if (component.types.includes('route')) {
            route = component.long_name;
          } else if (component.types.includes('sublocality_level_2')) {
            sublocality_level_2 = component.long_name;
          } else if (component.types.includes('sublocality_level_1')) {
            sublocality_level_1 = component.long_name;
          }
        });

        address = street_number+', '+route+', '+sublocality_level_2+', '+sublocality_level_1;

        var latitude = draggedPosition.lat();
        var longitude = draggedPosition.lng();

        // Use the location details as needed
        $("#edit_venue_business_address").val(address);
        $("#edit_venue_business_location").val(address);
        $("#edit_venue_city").val(city);
        $("#edit_venue_country").val(country);
        $("#edit_venue_district").val(district);
        $("#edit_venue_region").val(state);
        $("#edit_venue_postcode").val(postcode);
        $("#edit_venue_latitude").val(latitude);
        $("#edit_venue_longitude").val(longitude);

      } else {
        console.error('Geocoder failed due to:', status);
      }
    });
  });
}

/*function initMap() {
  function initialize() {
    var area = new google.maps.places.Autocomplete(
      document.getElementById('business_location'),
      { 
        types: ['(cities)']
      });
    google.maps.event.addListener(area, 'place_changed', function() {
      var place = area.getPlace();
      console.log(place);
            // $("#area").val(place.formatted_address);
            // $("#city").val(place.name);
            // $("#lat").val(place.geometry.location.lat());
            // $("#lng").val(place.geometry.location.lng());
          });
  }
  google.maps.event.addDomListener(window, 'load', initialize);
}*/

/*function initMap() {

  function initialize() {
    var input = document.getElementById('business_location');
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.addListener('place_changed', function () {
      var place = autocomplete.getPlace();
      console.log("place", place);

        $("#edit_venue_business_address").val(venues_meta.business_address);
        $("#edit_venue_business_aptsuite").val(venues_meta.business_aptsuite);
        $("#edit_venue_business_location").val(venues_meta.business_location);
        $("#edit_venue_city").val(venues_meta.city);
        $("#edit_venue_country").val(venues_meta.country);
        $("#edit_venue_directions").val(venues_meta.directions);
        $("#edit_venue_district").val(venues_meta.district);
        $("#edit_venue_region").val(venues_meta.region);
        $("#edit_venue_postcode").val(venues_meta.postcode);

        $('#latitude').val(place.geometry['location'].lat());
        $('#longitude').val(place.geometry['location'].lng());

        $("#latitudeArea").removeClass("d-none");
        $("#longtitudeArea").removeClass("d-none");
      });
  }
  google.maps.event.addDomListener(window, 'load', initialize);

}*/