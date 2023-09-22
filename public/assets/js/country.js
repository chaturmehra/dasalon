$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

$("#kt_docs_select2_country").on('change', function(){

	var country_code = $(this).val();
	// Set the value of the select element to match the data-value of the item
	$.ajax({
		url: 'set-country'+'/' + country_code,
		type:'GET',
		beforeSend:function(){
			$('.spinner-cls').show();
		},
		success:function(data)
		{
			$('.spinner-cls').hide();
			swal("country set to active!", {
				icon: "success",
			});

		}
	});
});
