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
        		$('.service-sub-category').html(data);
        	}
        });
    });
});