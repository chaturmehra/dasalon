$(document).ready(function(){
	$(document).on('click', '.status-change', function(event){
		event.preventDefault();
		var status_val  = $(this).attr('status-value');
		var voucher_id  = $(this).attr('voucher-id');
		var ajaxurl     = baseurl+'partner/vouchers/edit-vouchers-status'+'/' + voucher_id+'/'+status_val;
		Swal.fire({
			text: "Are you sure you want to change this voucher status?",
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
							title: "Your have successfully changed voucher status!",
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

	$(document).on('click', '.get-voucher-detail-by-id', function(event){
		event.preventDefault();
		var voucher_id    = $(this).attr('voucher-id');
		if(voucher_id){
			var ajaxurl = baseurl+'partner/vouchers/get-voucher-detail-by-id'+'/' + voucher_id;
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

						var voucher_data = response.data[0];

						$("#partner_voucher_id").val(voucher_data.pv_id);
						$(".voucher-name").text(voucher_data.voucher_name);
						$(".voucher-description").text(voucher_data.description);
						
						if (response.serviceNameArr) {
							$(".edit-service-option").val(response.serviceNameArr);
						}
						if(voucher_data.status){
							$(".voucher-status").text("Active");
						}else{
							$(".voucher-status").text("Inactive");
						}
						if(voucher_data.number_session){
							$(".number-session").val(voucher_data.number_session);
						}
						if(voucher_data.total_service_value){
							$(".total-service-value").val(voucher_data.total_service_value);
						}
						if(voucher_data.voucher_price){
							$(".voucher-price").val(voucher_data.voucher_price);
						}
						if(voucher_data.duration){
							$(".voucher-duration").val(voucher_data.duration);
						}
						if(voucher_data.validity){
							$(".validity").val(voucher_data.validity).trigger('change');
						}

						if (voucher_data.gender == "Female"){
							$('.gender-option[value="Female"]').prop("checked", true);
						}else if(voucher_data.gender == "Male"){
							$('.gender-option[value="Male"]').prop("checked", true);
						}else if(voucher_data.gender == "Unisex"){
							$('.gender-option[value="Unisex"]').prop("checked", true);
						}

						var venues     = voucher_data.venues;
						if (venues) {
							var split_venues = venues.split(",");
							$.each(split_venues, function(index, value) {
								$(".voucher-venues[value="+value+"]").prop("checked", true);
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
