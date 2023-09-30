$(document).ready(function(){
	$(".service-category").change(function(event){
		event.preventDefault();
        var category_id = $(this).val();
        var ajaxurl = baseurl+'partner/bookalook/get-subcategory'+'/' + category_id;
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
	$(".edit-service-category").change(function(event){
		event.preventDefault();
        var category_id = $(this).val();
        var ajaxurl = baseurl+'partner/bookalook/get-subcategory'+'/' + category_id;
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

	$(document).on('click', '.status-change', function(event){
		event.preventDefault();
		var status_val  = $(this).attr('status-value');
		var bookalook_id    = $(this).attr('bookalook-id');
		var ajaxurl     = baseurl+'partner/bookalook/edit-bookalook-status'+'/' + bookalook_id+'/'+status_val;
		Swal.fire({
			text: "Are you sure you want to change this book a look status?",
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
							title: "Your have successfully changed book a look status!",
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

	$(document).on('click', '.get-bookalook-detail-by-id', function(event){
		event.preventDefault();
		var bookalook_id    = $(this).attr('bookalook-id');
		if(bookalook_id){
			var ajaxurl = baseurl+'partner/bookalook/get-bookalook-detail-by-id'+'/' + bookalook_id;
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

						$("#partner_book_a_look").val(service_data.pbal_id);

						$(".service-name").text(service_data.servicename);
						$(".service-description").text(service_data.description);

						if (service_data.look_image) {
							var look_image = publicurl+service_data.look_image;
							$("#old_look_image").val(service_data.look_image);
							$(".book-alook-image").css('background-image', 'url('+look_image+')');
						}else{
							var look_image = publicurl+'partner/assets/media/svg/files/blank-image.svg';
							$("#old_look_image").val("");
							$(".book-alook-image").css('background-image', 'url('+look_image+')');
						}

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

						var staff_pricing      = response.staff_pricing;
						$('.booklook-staff-pricing-list').html('');
						if (staff_pricing) {
							$('.booklook-staff-pricing-list').append(staff_pricing);
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
