$(document).ready(function(){
	$(".service-category").change(function(){

        var category_id = $(this).val();
        var ajaxurl = baseurl+'partner/get-subcategory'+'/' + category_id;
        $.ajax({
        	url:ajaxurl,
        	type:'GET',
        	beforeSend:function(){
        		$('.spinner-cls').show();
        	},
        	success:function(data)
        	{
        		$('#add-service-sub-category').html(data);
        	}
        });
    });
	$(".edit-service-category").change(function(){

        var category_id = $(this).val();
        var ajaxurl = baseurl+'partner/get-subcategory'+'/' + category_id;
        $.ajax({
        	url:ajaxurl,
        	type:'GET',
        	beforeSend:function(){
        		$('.spinner-cls').show();
        	},
        	success:function(data)
        	{
        		$('#edit-service-sub-category').html(data);
        	}
        });
    });

	$(document).on('click', '.show_hide_venue_services', function(event){
		event.preventDefault();
		var service_id  = $(this).attr('venue-service-id');
		var trClass   = 'partner_venue_service_'+service_id;

		if (service_id == "all") {
			$('.venue-service-lists tr').removeClass('d-none');
		}else {
			$('.venue-service-lists tr').addClass('d-none');
			$('.venue-service-lists tr.'+trClass).removeClass('d-none');
		}
	});
	$(document).on('click', '.show_hide_home_services', function(event){
		event.preventDefault();
		var service_id  = $(this).attr('home-service-id');
		var trClass   = 'partner_home_service_'+service_id;

		if (service_id == "all") {
			$('.home-service-lists tr').removeClass('d-none');
		}else {
			$('.home-service-lists tr').addClass('d-none');
			$('.home-service-lists tr.'+trClass).removeClass('d-none');
		}
	});

	$(document).on('click', '.venue-online-price-view', function(event){
		event.preventDefault();
		var service_id  = $(this).attr('service-id');
		var ajaxurl     = baseurl+'partner/service/get-online-price'+'/' + service_id;

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
				$('.online-service-staff-pricing').html('');
				if (response.status) {
					var pricing = response.data;
					$('.online-service-staff-pricing').append(pricing);
				}
			}
		});
	});

	$(document).on('click', '.venue-offpeak-price-view', function(event){
		event.preventDefault();
		var service_id  = $(this).attr('service-id');
		var ajaxurl     = baseurl+'partner/service/get-offpeak-price'+'/' + service_id;

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
				$('.off-peak-service-staff-pricing').html('');
				if (response.status) {
					var pricing = response.data;
					$('.off-peak-service-staff-pricing').append(pricing);
				}
			}
		});
	});

	$(document).on('click', '.venue-status-change', function(){
		event.preventDefault();
		var status_val  = $(this).attr('status-value');
		var service_id    = $(this).attr('service-id');
		var ajaxurl     = baseurl+'partner/service/edit-service-status'+'/' + service_id+'/'+status_val;
		Swal.fire({
			text: "Are you sure you want to change this service status?",
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
							title: "Your have successfully changed service status!",
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

	$(document).on('click', '.get-service-detail-by-id', function(){
		event.preventDefault();
		var service_id    = $(this).attr('service-id');
		if(service_id){
			var ajaxurl = baseurl+'partner/service/get-service-detail-by-id'+'/' + service_id;
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

						$('.staff-pricing-list').html('');

						var service_data = response.data[0];

						//console.log("service_data", service_data);						

						$("#partner_service_id").val(service_data.ps_id);
						//$("#service_id").val(service_data.service_id);
						$(".service-name").text(service_data.servicename);

						if(service_data.status){
							$(".service-status").text("Active");
						}else{
							$(".service-status").text("Inactive");
						}
						if(service_data.online_price){
							$(".service-online-price").val(service_data.online_price);
						}
						if(service_data.off_peak_price){
							$(".service-off-peak-price").val(service_data.off_peak_price);
						}
						if(service_data.walk_in_price){
							$(".service-walk-in-price").val(service_data.walk_in_price);
						}
						if(service_data.category_id){
							$(".service-category").val(service_data.category_id).trigger('change');
						}
						if(service_data.sub_category_id){
							$(".edit-service-sub-category").val(service_data.sub_category_id).trigger('change');
						}
						if(service_data.duration){
							$(".service-duration").val(service_data.duration).trigger('change');
						}

						if (service_data.gender == "Female"){
							$('.gender-option[value="Female"]').prop("checked", true);
						}else if(service_data.gender == "Male"){
							$('.gender-option[value="Male"]').prop("checked", true);
						}else if(service_data.gender == "Unisex"){
							$('.gender-option[value="Unisex"]').prop("checked", true);
						}

						var venues     = service_data.venues;
						if (venues) {
							var split_venues = venues.split(",");
							$.each(split_venues, function(index, value) {
								$(".service-venues[value="+value+"]").prop("checked", true);
							});
						}

						var staff_pricing      = response.staff_pricing_html;

						if (staff_pricing) {
							console.log("staff_pricing", staff_pricing)
							$('.staff-pricing-list').append(staff_pricing);

							/*var html_content = [];
							var final_content = [];
							$.each(json_staff_pricing, function(index, value) {
								html_content = addStaffPricing(index, value);
								final_content.push(html_content);
							});
							$('.editadvancesettingdiv .mon .monday').html(final_content);
*/
						}

					}
				}
			});
		}
	});

});

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
