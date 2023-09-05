$(document).ready(function(){
    $(".select_category").change(function(){
        // debugger;
           var category_id = $(this).val();
           var ajaxurl = 'services-config/get-subcategory'+'/' + category_id;
           $.ajax({
              url:ajaxurl,
              type:'GET',
                  beforeSend:function(){
                    $('.spinner-cls').show();
              },
                  success:function(data)
                  {
                    // debugger;
                      $('#dis_subcategory').html(data);
                  }
              });
    });
});