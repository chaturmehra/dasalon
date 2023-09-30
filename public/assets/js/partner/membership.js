$(document).ready(function(){
	$(document).on('click', '.status-change', function(event){
		event.preventDefault();
		var status_val  = $(this).attr('status-value');
		var membership_id  = $(this).attr('membership-id');
		var ajaxurl     = baseurl+'partner/memberships/edit-memberships-status'+'/' + membership_id+'/'+status_val;
		Swal.fire({
			text: "Are you sure you want to change this membership status?",
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
							title: "Your have successfully changed membership status!",
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

	$(document).on('click', '.get-membership-detail-by-id', function(event){
		event.preventDefault();
		var membership_id    = $(this).attr('membership-id');
		if(membership_id){
			var ajaxurl = baseurl+'partner/memberships/get-membership-detail-by-id'+'/' + membership_id;
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

						var membership_data = response.data[0];

						$("#partner_membership_id").val(membership_data.pm_id);
						$(".membership-name").text(membership_data.membership_name);
						$(".membership-description").text(membership_data.description);
						
						if(membership_data.status){
							$(".membership-status").text("Active");
						}else{
							$(".membership-status").text("Inactive");
						}
						if(membership_data.total_value){
							$(".total-service-value").val(membership_data.total_value);
						}
						if(membership_data.membership_price){
							$(".membership-price").val(membership_data.membership_price);
						}
						if(membership_data.validity){
							$(".validity").val(membership_data.validity).trigger('change');
						}
						if(membership_data.membership_color){
							$(".edit.email_preview_in6").addClass(membership_data.membership_color);
						}else{
							$(".edit.email_preview_in6").addClass("blue");
						}

						if (membership_data.gender == "Female"){
							$('.gender-option[value="Female"]').prop("checked", true);
						}else if(membership_data.gender == "Male"){
							$('.gender-option[value="Male"]').prop("checked", true);
						}else if(membership_data.gender == "Unisex"){
							$('.gender-option[value="Unisex"]').prop("checked", true);
						}

						var venues     = membership_data.venues;
						if (venues) {
							var split_venues = venues.split(",");
							$.each(split_venues, function(index, value) {
								$(".membership-venues[value="+value+"]").prop("checked", true);
							});
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
