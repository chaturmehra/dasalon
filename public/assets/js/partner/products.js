$(document).ready(function(){
	$(document).on('click', '.delete-product', function(){
	  event.preventDefault();
	  var product_id    = $(this).attr('product-id');
	  var ajaxurl     = baseurl+'partner/products/delete-product'+'/' + product_id;
	  Swal.fire({
	    text: "Are you sure you want to delete this product?",
	    icon: "warning",
	    showCancelButton: !0,
	    buttonsStyling: !1,
	    confirmButtonText: "Yes, delete!",
	    cancelButtonText: "No, cancel",
	    customClass: {
	      confirmButton: "btn fw-bold btn-danger",
	      cancelButton: "btn fw-bold btn-active-light-primary"
	    }
	  })
	  .then((willDelete) => {
	    if(willDelete.value){
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
	            title: "Your have successfully deleted this product!",
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

	$(document).on('click', '.get-product-detail-by-id', function(event){
		event.preventDefault();
		var product_id    = $(this).attr('product-id');
		if(product_id){
			var ajaxurl = baseurl+'partner/products/get-product-detail-by-id'+'/' + product_id;
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

						var product_data = response.data[0];

						$("#partner_product_id").val(product_data.id);
						$(".product-name").text(product_data.product_name);
						$(".product-description").text(product_data.description);
						
						if (product_data.product_image) {
							var product_image = publicurl+product_data.product_image;
							$("#old_product_image").val(product_data.product_image);
							$(".product-image").css('background-image', 'url('+product_image+')');
						}else{
							var product_image = publicurl+'partner/assets/media/svg/files/blank-image.svg';
							$("#old_product_image").val("");
							$(".product-image").css('background-image', 'url('+product_image+')');
						}

						if(product_data.status){
							$(".product-status").text("Available");
						}else{
							$(".product-status").text("Not Available");
						}
						if(product_data.supply_price){
							$(".supply-price").val(product_data.supply_price);
						}
						if(product_data.selling_price){
							$(".selling-price").val(product_data.selling_price);
						}
						if(product_data.markup_price){
							$(".markup-price").val(product_data.markup_price);
						}
						if(product_data.sku){
							$(".sku").val(product_data.sku);
						}

						/*var stock_management = product_data.stock_management;
						if (stock_management) {
							var json_stock_management = JSON.parse(stock_management);
							console.log("json_stock_management", json_stock_management);
							// var split_venues = venues.split(",");
							$.each(json_stock_management, function(index, stock) {
								$(".stock-quantity[name=stock_management[stock_quantity]["+value+"][]]").val();
							});
						}*/

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
