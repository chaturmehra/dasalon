jQuery(document).on('click', '.update-venue-detail', function(){
  event.preventDefault();
  var venue_id = jQuery(this).attr('venue-id');
  if(venue_id){
    var ajaxurl = baseurl+'partner/get-venue-detail-by-id'+'/' + venue_id;
    jQuery.ajax({
      url: ajaxurl,
      type:'GET',
      beforeSend:function(){
        jQuery('.spinner-cls').show();
      },
      success:function(response)
      {
        jQuery('.spinner-cls').hide();
        response = JSON.parse(response);

        if (response.status) {
          var venues_data = response.venues;
          var venues_meta = response.venue_meta;

          jQuery("#edit_venue_id").val(venues_data.id);
          jQuery("#edit_venue_name").val(venues_data.name);
          jQuery("#edit_venue_email").val(venues_data.email);
          jQuery("#edit_venue_phone").val(venues_data.phone);
          jQuery("#edit_venue_address").val(venues_data.address);
          jQuery("#edit_venue_billing_details").val(venues_data.billing_details);

          jQuery("#edit_venue_business_address").val(venues_meta.business_address);
          jQuery("#edit_venue_business_aptsuite").val(venues_meta.business_aptsuite);
          jQuery("#edit_venue_business_location").val(venues_meta.business_location);
          jQuery("#edit_venue_city").val(venues_meta.city);
          jQuery("#edit_venue_country").val(venues_meta.country);
          jQuery("#edit_venue_directions").val(venues_meta.directions);
          jQuery("#edit_venue_district").val(venues_meta.district);
          jQuery("#edit_venue_region").val(venues_meta.region);
          jQuery("#edit_venue_postcode").val(venues_meta.postcode);

          jQuery(".edit_operating_open_hours").val(venues_meta.operating_open_hours);
          jQuery(".edit_operating_close_hours").val(venues_meta.operating_close_hours);

          var featured = publicurl+venues_meta.featured;
          var imgother1 = publicurl+venues_meta.imgother1;
          var imgother2 = publicurl+venues_meta.imgother2;
          var imgother3 = publicurl+venues_meta.imgother3;
          var imgother4 = publicurl+venues_meta.imgother4;

          jQuery("#edit_featured_img").css('background-image', 'url('+featured+')');
          jQuery("#edit_otherimg1").css('background-image', 'url('+imgother1+')');
          jQuery("#edit_otherimg2").css('background-image', 'url('+imgother2+')');
          jQuery("#edit_otherimg3").css('background-image', 'url('+imgother3+')');
          jQuery("#edit_otherimg4").css('background-image', 'url('+imgother4+')');
          
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
            jQuery('.edit_gender_restriction#unisex').prop('checked', true);
          }else if(gender_restriction == "Male"){
            jQuery('.edit_gender_restriction#male').prop('checked', true);
          }else if(gender_restriction == "Female"){
            jQuery('.edit_gender_restriction#female').prop('checked', true);
          }

          if (openhours == "open_for_selected_hours"){
            jQuery('.edit_openhours#openhoursnav1').prop('checked', true);
            jQuery('.edit#operatinghourstab1').addClass('active');
            jQuery('.edit#operatinghourstab2').removeClass('active');
            jQuery('.edit#operatinghourstab3').removeClass('active');
          }else if(openhours == "always_open"){
            jQuery('.edit_openhours#openhoursnav2').prop('checked', true);
            jQuery('.edit#operatinghourstab2').addClass('active');
            jQuery('.edit#operatinghourstab1').removeClass('active');
            jQuery('.edit#operatinghourstab3').removeClass('active');
          }else if(openhours == "appointment_only"){
            jQuery('.edit_openhours#openhoursnav3').prop('checked', true);
            jQuery('.edit#operatinghourstab3').addClass('active');
            jQuery('.edit#operatinghourstab1').removeClass('active');
            jQuery('.edit#operatinghourstab2').removeClass('active');
          }

          if(business_address_check){
            jQuery('.edit_business_address_check').prop('checked', true);
          }

          if(advance_setting){
            jQuery('.edit_advance_setting').prop('checked', true);
            jQuery('.edit-add-close-op-hours').removeClass('d-none');
          }

          var amenity     = venues_meta.amenity;
          if (amenity) {
            var split_amenity = amenity.split(",");
            jQuery.each(split_amenity, function(index, value) {
              jQuery(".edit_venue_amenity[value="+value+"]").prop("checked", true);
            });
          }

          var business_type   = venues_meta.venuebusiness;
          if (business_type) {
            var split_bt = business_type.split(",");
            jQuery.each(split_bt, function(index, value) {
              jQuery(".edit_venuebusiness[value="+value+"]").prop("checked", true);
            });
          }

          if (operating_days) {
            var op_days = operating_days.split(",");
            jQuery.each(op_days, function(index, value) {
              jQuery(".edit_operating_days[value="+value+"]").prop("checked", true);
              jQuery(".edit-advance-setting-op-hours tr."+value).removeClass('d-none');
              jQuery(".edit-off-peakphours tr."+value).removeClass('d-none');
            });
          }

          if (always_open) {
            var al_open = always_open.split(",");
            jQuery.each(al_open, function(index, value) {
              jQuery(".edit_always_open[value="+value+"]").prop("checked", true);
            });
          }

          if (appointment_only) {
            var app_only = appointment_only.split(",");
            jQuery.each(app_only, function(index, value) {
              jQuery(".edit_appointment_only[value="+value+"]").prop("checked", true);
            });
          }

          if (adv_setting_mon) {
            var json_adv_set_mon = JSON.parse(adv_setting_mon);
            var adv_set_mon_open = json_adv_set_mon["'open'"];
            jQuery("#edit_adv_setting_mon_open").val(adv_set_mon_open);

            var adv_set_mon_close = json_adv_set_mon["'close'"];
            jQuery("#edit_adv_setting_mon_close").val(adv_set_mon_close);

            var adv_set_mon_timeset_open = json_adv_set_mon["'timeset_open'"];
            if (adv_set_mon_timeset_open) {
              jQuery("#edit_adv_setting_mon_timeset_open").val(adv_set_mon_timeset_open);
              jQuery(".edit-mon.addweekoff").hide();
              jQuery(".edit-mon.divweekoff").show();
            }

            var adv_set_mon_timeset_close = json_adv_set_mon["'timeset_close'"];
            if (adv_set_mon_timeset_close) {
              jQuery("#edit_adv_setting_mon_timeset_close").val(adv_set_mon_timeset_close);
              jQuery(".edit-mon.addweekoff").hide();
              jQuery(".edit-mon.divweekoff").show();
            }
          }

          if (adv_setting_tue) {
            var json_adv_set_tue = JSON.parse(adv_setting_tue);
            var adv_set_tue_open = json_adv_set_tue["'open'"];
            jQuery("#edit_adv_setting_tue_open").val(adv_set_tue_open);

            var adv_set_tue_close = json_adv_set_tue["'close'"];
            jQuery("#edit_adv_setting_tue_close").val(adv_set_tue_close);

            var adv_set_tue_timeset_open = json_adv_set_tue["'timeset_open'"];
            if (adv_set_tue_timeset_open) {
              jQuery("#edit_adv_setting_tue_timeset_open").val(adv_set_tue_timeset_open);
              jQuery(".edit-tue.addweekoff").hide();
              jQuery(".edit-tue.divweekoff").show();
            }

            var adv_set_tue_timeset_close = json_adv_set_tue["'timeset_close'"];
            if (adv_set_tue_timeset_close) {
              jQuery("#edit_adv_setting_tue_timeset_close").val(adv_set_tue_timeset_close);
              jQuery(".edit-tue.addweekoff").hide();
              jQuery(".edit-tue.divweekoff").show();
            }
          }

          if (adv_setting_wed) {
            var json_adv_set_wed = JSON.parse(adv_setting_wed);
            var adv_set_wed_open = json_adv_set_wed["'open'"];
            jQuery("#edit_adv_setting_wed_open").val(adv_set_wed_open);

            var adv_set_wed_close = json_adv_set_wed["'close'"];
            jQuery("#edit_adv_setting_wed_close").val(adv_set_wed_close);

            var adv_set_wed_timeset_open = json_adv_set_wed["'timeset_open'"];
            if (adv_set_wed_timeset_open) {
              jQuery("#edit_adv_setting_wed_timeset_open").val(adv_set_wed_timeset_open);
              jQuery(".edit-wed.addweekoff").hide();
              jQuery(".edit-wed.divweekoff").show();
            }

            var adv_set_wed_timeset_close = json_adv_set_wed["'timeset_close'"];
            if (adv_set_wed_timeset_close) {
              jQuery("#edit_adv_setting_wed_timeset_close").val(adv_set_wed_timeset_close);
              jQuery(".edit-wed.addweekoff").hide();
              jQuery(".edit-wed.divweekoff").show();
            }
          }

          if (adv_setting_thu) {
            var json_adv_set_thu = JSON.parse(adv_setting_thu);
            var adv_set_thu_open = json_adv_set_thu["'open'"];
            jQuery("#edit_adv_setting_thu_open").val(adv_set_thu_open);

            var adv_set_thu_close = json_adv_set_thu["'close'"];
            jQuery("#edit_adv_setting_thu_close").val(adv_set_thu_close);

            var adv_set_thu_timeset_open = json_adv_set_thu["'timeset_open'"];
            if (adv_set_thu_timeset_open) {
              jQuery("#edit_adv_setting_thu_timeset_open").val(adv_set_thu_timeset_open);
              jQuery(".edit-thu.addweekoff").hide();
              jQuery(".edit-thu.divweekoff").show();
            }

            var adv_set_thu_timeset_close = json_adv_set_thu["'timeset_close'"];
            if (adv_set_thu_timeset_close) {
              jQuery("#edit_adv_setting_thu_timeset_close").val(adv_set_thu_timeset_close);
              jQuery(".edit-thu.addweekoff").hide();
              jQuery(".edit-thu.divweekoff").show();
            }
          }

          if (adv_setting_fri) {
            var json_adv_set_fri = JSON.parse(adv_setting_fri);
            var adv_set_fri_open = json_adv_set_fri["'open'"];
            jQuery("#edit_adv_setting_fri_open").val(adv_set_fri_open);

            var adv_set_fri_close = json_adv_set_fri["'close'"];
            jQuery("#edit_adv_setting_fri_close").val(adv_set_fri_close);

            var adv_set_fri_timeset_open = json_adv_set_fri["'timeset_open'"];
            if (adv_set_fri_timeset_open) {
              jQuery("#edit_adv_setting_fri_timeset_open").val(adv_set_fri_timeset_open);
              jQuery(".edit-fri.addweekoff").hide();
              jQuery(".edit-fri.divweekoff").show();
            }

            var adv_set_fri_timeset_close = json_adv_set_fri["'timeset_close'"];
            if (adv_set_fri_timeset_close) {
              jQuery("#edit_adv_setting_fri_timeset_close").val(adv_set_fri_timeset_close);
              jQuery(".edit-fri.addweekoff").hide();
              jQuery(".edit-fri.divweekoff").show();
            }
          }

          if (adv_setting_sat) {
            var json_adv_set_sat = JSON.parse(adv_setting_sat);
            var adv_set_sat_open = json_adv_set_sat["'open'"];
            jQuery("#edit_adv_setting_sat_open").val(adv_set_sat_open);

            var adv_set_sat_close = json_adv_set_sat["'close'"];
            jQuery("#edit_adv_setting_sat_close").val(adv_set_sat_close);

            var adv_set_sat_timeset_open = json_adv_set_sat["'timeset_open'"];
            if (adv_set_sat_timeset_open) {
              jQuery("#edit_adv_setting_sat_timeset_open").val(adv_set_sat_timeset_open);
              jQuery(".edit-sat.addweekoff").hide();
              jQuery(".edit-sat.divweekoff").show();
            }

            var adv_set_sat_timeset_close = json_adv_set_sat["'timeset_close'"];
            if (adv_set_sat_timeset_close) {
              jQuery("#edit_adv_setting_sat_timeset_close").val(adv_set_sat_timeset_close);
              jQuery(".edit-sat.addweekoff").hide();
              jQuery(".edit-sat.divweekoff").show();
            }
          }

          if (adv_setting_sun) {
            var json_adv_set_sun = JSON.parse(adv_setting_sun);
            var adv_set_sun_open = json_adv_set_sun["'open'"];
            jQuery("#edit_adv_setting_sun_open").val(adv_set_sun_open);

            var adv_set_sun_close = json_adv_set_sun["'close'"];
            jQuery("#edit_adv_setting_sun_close").val(adv_set_sun_close);

            var adv_set_sun_timeset_open = json_adv_set_sun["'timeset_open'"];
            if (adv_set_sun_timeset_open) {
              jQuery("#edit_adv_setting_sun_timeset_open").val(adv_set_sun_timeset_open);
              jQuery(".edit-sun.addweekoff").hide();
              jQuery(".edit-sun.divweekoff").show();
            }

            var adv_set_sun_timeset_close = json_adv_set_sun["'timeset_close'"];
            if (adv_set_sun_timeset_close) {
              jQuery("#edit_adv_setting_sun_timeset_close").val(adv_set_sun_timeset_close);
              jQuery(".edit-sun.addweekoff").hide();
              jQuery(".edit-sun.divweekoff").show();
            }
          }

          if (off_peak_hour_mon) {
            var json_off_peak_hour_mon = JSON.parse(off_peak_hour_mon);

            var off_peak_hour_mon_start = json_off_peak_hour_mon["'start'"];
            var off_peak_hour_mon_end = json_off_peak_hour_mon["'end'"];
            if (off_peak_hour_mon_start || off_peak_hour_mon_end) {
              jQuery("#edit_off_peak_hour_mon_start").val(off_peak_hour_mon_start);
              jQuery("#edit_off_peak_hour_mon_end").val(off_peak_hour_mon_end);
              jQuery(".edit-oph-mon-se.addweekoff").hide();
              jQuery(".edit-oph-mon-se.divweekoff").show();
            }

            var off_peak_hour_mon_timeset_open = json_off_peak_hour_mon["'timeset_open'"];
            var off_peak_hour_mon_timeset_close = json_off_peak_hour_mon["'timeset_close'"];
            if (off_peak_hour_mon_timeset_open || off_peak_hour_mon_timeset_close) {
              jQuery("#edit_off_peak_hour_mon_timeset_open").val(off_peak_hour_mon_timeset_open);
              jQuery("#edit_off_peak_hour_mon_timeset_close").val(off_peak_hour_mon_timeset_close);
              jQuery(".edit-oph-mon-to.addweekoff").hide();
              jQuery(".edit-oph-mon-to.divweekoff").show();
            }
          }

          if (off_peak_hour_tue) {
            var json_off_peak_hour_tue = JSON.parse(off_peak_hour_tue);

            var off_peak_hour_tue_start = json_off_peak_hour_tue["'start'"];
            var off_peak_hour_tue_end = json_off_peak_hour_tue["'end'"];
            if (off_peak_hour_tue_start || off_peak_hour_tue_end) {
              jQuery("#edit_off_peak_hour_tue_start").val(off_peak_hour_tue_start);
              jQuery("#edit_off_peak_hour_tue_end").val(off_peak_hour_tue_end);
              jQuery(".edit-oph-tue-se.addweekoff").hide();
              jQuery(".edit-oph-tue-se.divweekoff").show();
            }

            var off_peak_hour_tue_timeset_open = json_off_peak_hour_tue["'timeset_open'"];
            var off_peak_hour_tue_timeset_close = json_off_peak_hour_tue["'timeset_close'"];
            if (off_peak_hour_tue_timeset_open || off_peak_hour_tue_timeset_close) {
              jQuery("#edit_off_peak_hour_tue_timeset_open").val(off_peak_hour_tue_timeset_open);
              jQuery("#edit_off_peak_hour_tue_timeset_close").val(off_peak_hour_tue_timeset_close);
              jQuery(".edit-oph-tue-to.addweekoff").hide();
              jQuery(".edit-oph-tue-to.divweekoff").show();
            }
          }

          if (off_peak_hour_wed) {
            var json_off_peak_hour_wed = JSON.parse(off_peak_hour_wed);

            var off_peak_hour_wed_start = json_off_peak_hour_wed["'start'"];
            var off_peak_hour_wed_end = json_off_peak_hour_wed["'end'"];
            if (off_peak_hour_wed_start || off_peak_hour_wed_end) {
              jQuery("#edit_off_peak_hour_wed_start").val(off_peak_hour_wed_start);
              jQuery("#edit_off_peak_hour_wed_end").val(off_peak_hour_wed_end);
              jQuery(".edit-oph-wed-se.addweekoff").hide();
              jQuery(".edit-oph-wed-se.divweekoff").show();
            }

            var off_peak_hour_wed_timeset_open = json_off_peak_hour_wed["'timeset_open'"];
            var off_peak_hour_wed_timeset_close = json_off_peak_hour_wed["'timeset_close'"];
            if (off_peak_hour_wed_timeset_open || off_peak_hour_wed_timeset_close) {
              jQuery("#edit_off_peak_hour_wed_timeset_open").val(off_peak_hour_wed_timeset_open);
              jQuery("#edit_off_peak_hour_wed_timeset_close").val(off_peak_hour_wed_timeset_close);
              jQuery(".edit-oph-wed-to.addweekoff").hide();
              jQuery(".edit-oph-wed-to.divweekoff").show();
            }
          }

          if (off_peak_hour_thu) {
            var json_off_peak_hour_thu = JSON.parse(off_peak_hour_thu);

            var off_peak_hour_thu_start = json_off_peak_hour_thu["'start'"];
            var off_peak_hour_thu_end = json_off_peak_hour_thu["'end'"];
            if (off_peak_hour_thu_start || off_peak_hour_thu_end) {
              jQuery("#edit_off_peak_hour_thu_start").val(off_peak_hour_thu_start);
              jQuery("#edit_off_peak_hour_thu_end").val(off_peak_hour_thu_end);
              jQuery(".edit-oph-thu-se.addweekoff").hide();
              jQuery(".edit-oph-thu-se.divweekoff").show();
            }

            var off_peak_hour_thu_timeset_open = json_off_peak_hour_thu["'timeset_open'"];
            var off_peak_hour_thu_timeset_close = json_off_peak_hour_thu["'timeset_close'"];
            if (off_peak_hour_thu_timeset_open || off_peak_hour_thu_timeset_close) {
              jQuery("#edit_off_peak_hour_thu_timeset_open").val(off_peak_hour_thu_timeset_open);
              jQuery("#edit_off_peak_hour_thu_timeset_close").val(off_peak_hour_thu_timeset_close);
              jQuery(".edit-oph-thu-to.addweekoff").hide();
              jQuery(".edit-oph-thu-to.divweekoff").show();
            }
          }

          if (off_peak_hour_fri) {
            var json_off_peak_hour_fri = JSON.parse(off_peak_hour_fri);

            var off_peak_hour_fri_start = json_off_peak_hour_fri["'start'"];
            var off_peak_hour_fri_end = json_off_peak_hour_fri["'end'"];
            if (off_peak_hour_fri_start || off_peak_hour_fri_end) {
              jQuery("#edit_off_peak_hour_fri_start").val(off_peak_hour_fri_start);
              jQuery("#edit_off_peak_hour_fri_end").val(off_peak_hour_fri_end);
              jQuery(".edit-oph-fri-se.addweekoff").hide();
              jQuery(".edit-oph-fri-se.divweekoff").show();
            }

            var off_peak_hour_fri_timeset_open = json_off_peak_hour_fri["'timeset_open'"];
            var off_peak_hour_fri_timeset_close = json_off_peak_hour_fri["'timeset_close'"];
            if (off_peak_hour_fri_timeset_open || off_peak_hour_fri_timeset_close) {
              jQuery("#edit_off_peak_hour_fri_timeset_open").val(off_peak_hour_fri_timeset_open);
              jQuery("#edit_off_peak_hour_fri_timeset_close").val(off_peak_hour_fri_timeset_close);
              jQuery(".edit-oph-fri-to.addweekoff").hide();
              jQuery(".edit-oph-fri-to.divweekoff").show();
            }
          }

          if (off_peak_hour_sat) {
            var json_off_peak_hour_sat = JSON.parse(off_peak_hour_sat);

            var off_peak_hour_sat_start = json_off_peak_hour_sat["'start'"];
            var off_peak_hour_sat_end = json_off_peak_hour_sat["'end'"];
            if (off_peak_hour_sat_start || off_peak_hour_sat_end) {
              jQuery("#edit_off_peak_hour_sat_start").val(off_peak_hour_sat_start);
              jQuery("#edit_off_peak_hour_sat_end").val(off_peak_hour_sat_end);
              jQuery(".edit-oph-sat-se.addweekoff").hide();
              jQuery(".edit-oph-sat-se.divweekoff").show();
            }

            var off_peak_hour_sat_timeset_open = json_off_peak_hour_sat["'timeset_open'"];
            var off_peak_hour_sat_timeset_close = json_off_peak_hour_sat["'timeset_close'"];
            if (off_peak_hour_sat_timeset_open || off_peak_hour_sat_timeset_close) {
              jQuery("#edit_off_peak_hour_sat_timeset_open").val(off_peak_hour_sat_timeset_open);
              jQuery("#edit_off_peak_hour_sat_timeset_close").val(off_peak_hour_sat_timeset_close);
              jQuery(".edit-oph-sat-to.addweekoff").hide();
              jQuery(".edit-oph-sat-to.divweekoff").show();
            }
          }

          if (off_peak_hour_sun) {
            var json_off_peak_hour_sun = JSON.parse(off_peak_hour_sun);

            var off_peak_hour_sun_start = json_off_peak_hour_sun["'start'"];
            var off_peak_hour_sun_end = json_off_peak_hour_sun["'end'"];
            if (off_peak_hour_sun_start || off_peak_hour_sun_end) {
              jQuery("#edit_off_peak_hour_sun_start").val(off_peak_hour_sun_start);
              jQuery("#edit_off_peak_hour_sun_end").val(off_peak_hour_sun_end);
              jQuery(".edit-oph-sun-se.addweekoff").hide();
              jQuery(".edit-oph-sun-se.divweekoff").show();
            }

            var off_peak_hour_sun_timeset_open = json_off_peak_hour_sun["'timeset_open'"];
            var off_peak_hour_sun_timeset_close = json_off_peak_hour_sun["'timeset_close'"];
            if (off_peak_hour_sun_timeset_open || off_peak_hour_sun_timeset_close) {
              jQuery("#edit_off_peak_hour_sun_timeset_open").val(off_peak_hour_sun_timeset_open);
              jQuery("#edit_off_peak_hour_sun_timeset_close").val(off_peak_hour_sun_timeset_close);
              jQuery(".edit-oph-sun-to.addweekoff").hide();
              jQuery(".edit-oph-sun-to.divweekoff").show();
            }
          }
          
        }
      }
    });
  }
});

jQuery(document).on('click', '.on-business-detail', function(){
  event.preventDefault();
  var partner_id    = jQuery(this).attr('partner-id');
  var ajaxurl     = baseurl+'partner/get-business-detail'+'/' + partner_id;
  
  jQuery.ajax({
    url:ajaxurl,
    type:'GET',
    beforeSend:function(){
      jQuery('.spinner-cls').show();
    },
    success:function(response)
    {
      jQuery('.spinner-cls').hide();
      response = JSON.parse(response);

        if (response.status) {
          var partner_data = response.data;

          jQuery("#business_name").val(partner_data[0].business_name);
          jQuery("#business_email").val(partner_data[0].email);
          jQuery("#business_phone").val(partner_data[0].phone);
          jQuery("#business_website").val(partner_data[0].website);
          jQuery("#business_instagram").val(partner_data[0].instagram);
          jQuery("#business_facebook").val(partner_data[0].facebook);

          var business_logo = partner_data[0].business_logo;
          if(business_logo){
            jQuery("#old_business_logo").val(business_logo);
            jQuery(".business-logo").css('background-image', 'url('+publicurl+business_logo+')');
          }
        }
    }
  });
});

jQuery(document).on('click', '.old-phone-send-otp', function(){
  event.preventDefault();
  var phone = jQuery('#business_phone').val();
  
  if ( phone !== "" ) {
      var ajaxurl = baseurl+'sendSMS';
      jQuery.ajax({
          url: ajaxurl,
          data: {phone: phone},
          headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
          type:'POST',
          success:function(response)
          {
              //response = JSON.parse(response);
              //jQuery('.spinner-cls').hide();
              if (response.status) {
                Swal.fire({
                  text: "OTP sent successfully on your mobile number: "+phone,
                  icon: "success",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: {
                    confirmButton: "btn btn-primary"
                  }
                })

                jQuery('#changephoneotp').modal('show');
                jQuery('#kt_modal_businessdetail').modal('hide');
            }
          },
          error:function(error)
          {
              Swal.fire({
                text: "Something went wrong. Please try again.",
                icon: "error",
                buttonsStyling: !1,
                confirmButtonText: "Ok, got it!",
                customClass: {
                  confirmButton: "btn btn-primary"
                }
              })
          }
      });
  }else{
      Swal.fire({
        text: "Mobile number is required.",
        icon: "error",
        buttonsStyling: !1,
        confirmButtonText: "Ok, got it!",
        customClass: {
          confirmButton: "btn btn-primary"
        }
      })
  }
});

jQuery(document).on('click', '.verify-partner-old-phone', function(){
  event.preventDefault();
  var otp = jQuery('.verify-old-phone-otp').val();

  if ( otp !== "" ) {
      var ajaxurl = baseurl+'sendOTP';
      jQuery.ajax({
          url: ajaxurl,
          data: {otp: otp},
          headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
          type:'POST',
          success:function(response)
          {

              if (response.status) {
                Swal.fire({
                  text: "OTP matched successfully.",
                  icon: "success",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: {
                    confirmButton: "btn btn-primary"
                  }
                })

                jQuery('#changephone').modal('show');
                jQuery('#changephoneotp').modal('hide');
              }else{
                Swal.fire({
                  text: "OTP not matched.",
                  icon: "error",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: {
                    confirmButton: "btn btn-primary"
                  }
                })
              }
          },
          error:function(error)
          {
              Swal.fire({
                text: "Something went wrong. Please try again.",
                icon: "error",
                buttonsStyling: !1,
                confirmButtonText: "Ok, got it!",
                customClass: {
                  confirmButton: "btn btn-primary"
                }
              })
          }
      });
  }else{
      Swal.fire({
        text: "Please fill required fields!",
        icon: "error",
        buttonsStyling: !1,
        confirmButtonText: "Ok, got it!",
        customClass: {
          confirmButton: "btn btn-primary"
        }
      })
  }
});

jQuery(document).on('click', '.phone-send-otp', function(){
  event.preventDefault();
  var phone = jQuery('.verify-phone').val();
  
  if ( phone !== "" ) {
      var ajaxurl = baseurl+'sendSMS';
      jQuery.ajax({
          url: ajaxurl,
          data: {phone: phone},
          headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
          type:'POST',
          success:function(response)
          {
              //response = JSON.parse(response);
              //jQuery('.spinner-cls').hide();
              if (response.status) {
                Swal.fire({
                  text: "OTP sent successfully on your mobile number: "+phone,
                  icon: "success",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: {
                    confirmButton: "btn btn-primary"
                  }
                })
            }
          },
          error:function(error)
          {
              Swal.fire({
                text: "Something went wrong. Please try again.",
                icon: "error",
                buttonsStyling: !1,
                confirmButtonText: "Ok, got it!",
                customClass: {
                  confirmButton: "btn btn-primary"
                }
              })
          }
      });
  }else{
      Swal.fire({
        text: "Mobile number is required.",
        icon: "error",
        buttonsStyling: !1,
        confirmButtonText: "Ok, got it!",
        customClass: {
          confirmButton: "btn btn-primary"
        }
      })
  }
});

jQuery(document).on('click', '.verify-partner-phone', function(){
  event.preventDefault();
  var otp = jQuery('.verify-phone-otp').val();
  var phone = jQuery('.verify-phone').val();

  if ( phone !== "" && otp !== "" ) {
      var ajaxurl = baseurl+'sendOTP';
      jQuery.ajax({
          url: ajaxurl,
          data: {otp: otp},
          headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
          type:'POST',
          success:function(response)
          {

              if (response.status) {
                Swal.fire({
                  text: "OTP matched successfully.",
                  icon: "success",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: {
                    confirmButton: "btn btn-primary"
                  }
                })

                jQuery("#business_phone").val(phone);
                jQuery(".changephoneclick").trigger("click");
              }else{
                Swal.fire({
                  text: "OTP not matched.",
                  icon: "error",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: {
                    confirmButton: "btn btn-primary"
                  }
                })
              }
          },
          error:function(error)
          {
              Swal.fire({
                text: "Something went wrong. Please try again.",
                icon: "error",
                buttonsStyling: !1,
                confirmButtonText: "Ok, got it!",
                customClass: {
                  confirmButton: "btn btn-primary"
                }
              })
          }
      });
  }else{
      Swal.fire({
        text: "Please fill required fields!",
        icon: "error",
        buttonsStyling: !1,
        confirmButtonText: "Ok, got it!",
        customClass: {
          confirmButton: "btn btn-primary"
        }
      })
  }
});

jQuery(document).on('click', '.old-email-send-otp', function(){
  event.preventDefault();
  var email  = jQuery('#business_email').val();
  var name   = jQuery('#business_name').val();

  if ( email !== "" ) {
      var ajaxurl = baseurl+'partner/sendEmail';
      jQuery.ajax({
          url: ajaxurl,
          data: {email: email, name: name},
          headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
          type:'POST',
          success:function(response)
          {
              if (response.status) {
                Swal.fire({
                  text: "OTP sent successfully on your email address: "+email,
                  icon: "success",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: {
                    confirmButton: "btn btn-primary"
                  }
                })

                jQuery('#changeemailotp').modal('show');
                jQuery('#kt_modal_businessdetail').modal('hide');
            }
          },
          error:function(error)
          {
              Swal.fire({
                text: "Something went wrong. Please try again.",
                icon: "error",
                buttonsStyling: !1,
                confirmButtonText: "Ok, got it!",
                customClass: {
                  confirmButton: "btn btn-primary"
                }
              })
          }
      });
  }else{
      Swal.fire({
        text: "Email is required.",
        icon: "error",
        buttonsStyling: !1,
        confirmButtonText: "Ok, got it!",
        customClass: {
          confirmButton: "btn btn-primary"
        }
      })
  }
});

jQuery(document).on('click', '.verify-partner-old-email', function(){
  event.preventDefault();
  var otp = jQuery('.verify-old-email-otp').val();
  
  if ( otp !== "" ) {
      var ajaxurl = baseurl+'sendOTP';
      jQuery.ajax({
          url: ajaxurl,
          data: {otp: otp},
          headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
          type:'POST',
          success:function(response)
          {
              if (response.status) {
                Swal.fire({
                  text: "OTP matched successfully.",
                  icon: "success",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: {
                    confirmButton: "btn btn-primary"
                  }
                })

                //jQuery(".changeemailclick").trigger("click");
                jQuery('#changeemail').modal('show');
                jQuery('#changeemailotp').modal('hide');
              }else{
                Swal.fire({
                  text: "OTP not matched.",
                  icon: "error",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: {
                    confirmButton: "btn btn-primary"
                  }
                })                
              }
          },
          error:function(error)
          {
              Swal.fire({
                text: "Something went wrong. Please try again.",
                icon: "error",
                buttonsStyling: !1,
                confirmButtonText: "Ok, got it!",
                customClass: {
                  confirmButton: "btn btn-primary"
                }
              })
          }
      });
  }else{
      Swal.fire({
        text: "Please fill required fields!",
        icon: "error",
        buttonsStyling: !1,
        confirmButtonText: "Ok, got it!",
        customClass: {
          confirmButton: "btn btn-primary"
        }
      })
  }
});

jQuery(document).on('click', '.email-send-otp', function(){
  event.preventDefault();
  var email = jQuery('.verify-email').val();
  var name = jQuery('#business_name').val();

  if ( email !== "" ) {
      var ajaxurl = baseurl+'partner/sendEmail';
      jQuery.ajax({
          url: ajaxurl,
          data: {email: email, name: name},
          headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
          type:'POST',
          success:function(response)
          {
              if (response.status) {
                Swal.fire({
                  text: "OTP sent successfully on your email address: "+email,
                  icon: "success",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: {
                    confirmButton: "btn btn-primary"
                  }
                })
            }
          },
          error:function(error)
          {
              Swal.fire({
                text: "Something went wrong. Please try again.",
                icon: "error",
                buttonsStyling: !1,
                confirmButtonText: "Ok, got it!",
                customClass: {
                  confirmButton: "btn btn-primary"
                }
              })
          }
      });
  }else{
      Swal.fire({
        text: "Email is required.",
        icon: "error",
        buttonsStyling: !1,
        confirmButtonText: "Ok, got it!",
        customClass: {
          confirmButton: "btn btn-primary"
        }
      })
  }
});

jQuery(document).on('click', '.verify-partner-email', function(){
  event.preventDefault();
  var otp = jQuery('.verify-email-otp').val();
  var email = jQuery('.verify-email').val();
  
  if ( email !== "" && otp !== "" ) {
      var ajaxurl = baseurl+'sendOTP';
      jQuery.ajax({
          url: ajaxurl,
          data: {otp: otp},
          headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
          type:'POST',
          success:function(response)
          {
              if (response.status) {
                Swal.fire({
                  text: "OTP matched successfully.",
                  icon: "success",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: {
                    confirmButton: "btn btn-primary"
                  }
                })
                jQuery("#business_email").val(email);
                jQuery(".changeemailclick").trigger("click");
              }else{
                Swal.fire({
                  text: "OTP not matched.",
                  icon: "error",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: {
                    confirmButton: "btn btn-primary"
                  }
                })
              }
          },
          error:function(error)
          {
              Swal.fire({
                text: "Something went wrong. Please try again.",
                icon: "error",
                buttonsStyling: !1,
                confirmButtonText: "Ok, got it!",
                customClass: {
                  confirmButton: "btn btn-primary"
                }
              })
          }
      });
  }else{
      Swal.fire({
        text: "Please fill required fields!",
        icon: "error",
        buttonsStyling: !1,
        confirmButtonText: "Ok, got it!",
        customClass: {
          confirmButton: "btn btn-primary"
        }
      })
  }
});


jQuery(document).on('change', '.filter-option-venue', function(event){
  event.preventDefault();

  var venue_id   = $('.filter-option-venue option:selected').val();
  var listClass  = 'venue_'+venue_id;

  var findCLass = jQuery('#kt_app_content_container .venue-lists');

  if(findCLass.hasClass(listClass)) {
    jQuery('#kt_app_content_container .venue-lists').addClass('d-none');
    jQuery('#kt_app_content_container .venue-lists.'+listClass).removeClass('d-none');
  }else{
    findCLass.addClass('d-none');
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

          jQuery("#add_venue_business_address").val(address); 
          jQuery("#add_venue_city").val(city);
          jQuery("#add_venue_country").val(country);
          jQuery("#add_venue_district").val(district);
          jQuery("#add_venue_region").val(state);
          jQuery("#add_venue_postcode").val(postcode);
          jQuery("#add_venue_latitude").val(latitude);
          jQuery("#add_venue_longitude").val(longitude);

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

          jQuery("#edit_venue_business_address").val(address);
          jQuery("#edit_venue_city").val(city);
          jQuery("#edit_venue_country").val(country);
          jQuery("#edit_venue_district").val(district);
          jQuery("#edit_venue_region").val(state);
          jQuery("#edit_venue_postcode").val(postcode);
          jQuery("#edit_venue_latitude").val(latitude);
          jQuery("#edit_venue_longitude").val(longitude);

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
        var add1;
        var add2;
        var add3;
        var add4;
        if (street_number) {
          add1 = street_number+', ';
        }
        if (route) {
          add2 = route+', ';
        }
        if (sublocality_level_2) {
          add3 = sublocality_level_2+', ';
        }
        if (sublocality_level_1) {
          add4 = sublocality_level_1;
        }
        address = add1+add2+add3+add4;

        var latitude = draggedPosition.lat();
        var longitude = draggedPosition.lng();

        // Use the location details as needed
        jQuery("#business_location").val(address);
        jQuery("#add_venue_business_address").val(address); 
        jQuery("#add_venue_city").val(city);
        jQuery("#add_venue_country").val(country);
        jQuery("#add_venue_district").val(district);
        jQuery("#add_venue_region").val(state);
        jQuery("#add_venue_postcode").val(postcode);
        jQuery("#add_venue_latitude").val(latitude);
        jQuery("#add_venue_longitude").val(longitude);

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

        var add1;
        var add2;
        var add3;
        var add4;
        if (street_number) {
          add1 = street_number+', ';
        }
        if (route) {
          add2 = route+', ';
        }
        if (sublocality_level_2) {
          add3 = sublocality_level_2+', ';
        }
        if (sublocality_level_1) {
          add4 = sublocality_level_1;
        }
        address = add1+add2+add3+add4;

        var latitude = draggedPosition.lat();
        var longitude = draggedPosition.lng();

        // Use the location details as needed
        jQuery("#edit_venue_business_address").val(address);
        jQuery("#edit_venue_business_location").val(address);
        jQuery("#edit_venue_city").val(city);
        jQuery("#edit_venue_country").val(country);
        jQuery("#edit_venue_district").val(district);
        jQuery("#edit_venue_region").val(state);
        jQuery("#edit_venue_postcode").val(postcode);
        jQuery("#edit_venue_latitude").val(latitude);
        jQuery("#edit_venue_longitude").val(longitude);

      } else {
        console.error('Geocoder failed due to:', status);
      }
    });
  });
}

var defaultvalue = "";
function numberHandler(input){
  const value = input.value.trim();
  const regex = /^[0-9\b]+$/;
  if (value != "" && !regex.test(value)) {
    input.value = defaultvalue;
  }else{
    defaultvalue = input.value;
  }
}
function numberOtpHandler(input){
  const value = input.value.trim();
  const regex = /^[0-9\b]+$/;
  if (value != "" && !regex.test(value)) {
    input.value = defaultvalue;
  }else{
    defaultvalue = input.value;
  }
}

function validateForm(){
  
    var vname      = jQuery('.add-venue-name').val();
    var vemail     = jQuery('.venue-email').val();
    var vphone     = jQuery('.venue-phone-number').val();
    var vaddress   = jQuery('.venue-business-location').val();
    var vfeatured  = jQuery('.venue-featured').val();
    if(vname != "" && vemail != "" && vphone != "" && vaddress != "" && vfeatured != "" ){
        return true;    // in success case
    } else{
      if(!vname){
        validationError("name");
        return false;
      }
      if(!vemail){
        validationError("email");
        return false;
      }
      if(!vphone){
        validationError("phone");
        return false;
      }
      if(!vaddress){
        validationError("address");
        return false;
      }
      if(!vfeatured){
        validationError("featured image");
        return false;
      }
    }       
    
}

function validationError(field){
  Swal.fire({
    text: "Venue "+ field +" is mandatory.",
    icon: "error",
    buttonsStyling: !1,
    confirmButtonText: "Ok, got it!",
    customClass: {
      confirmButton: "btn btn-primary"
    }
  })
}