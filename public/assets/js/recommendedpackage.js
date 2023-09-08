
$(document).ready(function(){
    $(".select_category2").change(function(){
        
           var category_id = $(this).val();
        //    alert(category_id);
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
                      $('#getdis_subcategory').html(data);
                  }
              });
    });
  
    $("body").on('change', '#getdis_subcategory', function(){
        
           var subcategory_id = $(this).val();
           var ajaxurl = 'services-config/get-service'+'/' + subcategory_id;
           
           $.ajax({
              url:ajaxurl,
              type:'GET',
                  beforeSend:function(){
                    $('.spinner-cls').show();
              },
                  success:function(data)
                  {
                    //debugger;
                    console.log(data);
                      $('#dis_service').html(data);
                  }
              });
    });
  });