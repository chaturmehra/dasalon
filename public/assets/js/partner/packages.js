$(document).ready(function(){
	$(document).on('click', '.status-change', function(event){
		event.preventDefault();
		var status_val  = $(this).attr('status-value');
		var package_id  = $(this).attr('package-id');
		var ajaxurl     = baseurl+'partner/packages/edit-packages-status'+'/' + package_id+'/'+status_val;
		Swal.fire({
			text: "Are you sure you want to change this package status?",
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
							title: "Your have successfully changed package status!",
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

	$(document).on('click', '.get-package-detail-by-id', function(event){
		event.preventDefault();
		var package_id    = $(this).attr('package-id');
		if(package_id){
			var ajaxurl = baseurl+'partner/packages/get-package-detail-by-id'+'/' + package_id;
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

						$("#partner_package_id").val(service_data.pp_id);
						$(".package-name").text(service_data.package_name);
						$(".package-description").text(service_data.description);
						
						if (response.serviceNameArr) {
							$(".edit-service-option").val(response.serviceNameArr);
						}
						if(service_data.status){
							$(".package-status").text("Active");
						}else{
							$(".package-status").text("Inactive");
						}
						if(service_data.online_price){
							$(".package-online-price").val(service_data.online_price);
						}
						if(service_data.off_peak_price){
							$(".package-off-peak-price").val(service_data.off_peak_price);
						}
						if(service_data.walk_in_price){
							$(".package-walk-in-price").val(service_data.walk_in_price);
						}
						if(service_data.duration){
							$(".package-duration").val(service_data.duration);
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
								$(".package-venues[value="+value+"]").prop("checked", true);
							});
						}

						var staff_pricing      = response.staff_pricing;
						$('.packages-staff-pricing-list').html('');
						if (staff_pricing) {
							$('.packages-staff-pricing-list').append(staff_pricing);
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
