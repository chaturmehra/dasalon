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
		var service_id  = $(this).attr('venue-service-id');
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
		var service_id  = $(this).attr('venue-service-id');
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