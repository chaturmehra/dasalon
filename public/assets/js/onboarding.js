$(document).ready(function(){
    $(".select_country8").change(function(){
        // debugger;
           var gperiod_country_id = $(this).val();
           // console.log(gperiod_country_id);
           var ajaxurl = 'subscription/get-typeone'+'/' + gperiod_country_id;
           $.ajax({
              url:ajaxurl,
              type:'GET',
                  beforeSend:function(){
                    $('.spinner-cls').show();
              },
                  success:function(data)
                  { 
                    // debugger;
                    var res = JSON.parse(data)
                    // console.log(res.status);
                    // console.log(res.gperiod_type1);
                      $('#dis_typeone').val(res.gperiod_type1);
                  }
              });
    });
});

$(document).ready(function(){
    $(".select_country9").change(function(){
        // debugger;
           var gperiod_country_id1 = $(this).val();
           // console.log(gperiod_country_id);
           var ajaxurl = 'subscription/get-typetwo'+'/' + gperiod_country_id1;
           $.ajax({
              url:ajaxurl,
              type:'GET',
                  beforeSend:function(){
                    $('.spinner-cls').show();
              },
                  success:function(data)
                  { 
                    // debugger;
                    var res = JSON.parse(data)
                   
                      $('#dis_typetwo').val(res.gperiod_type2);
                  }
              });
    });
});

$(document).ready(function(){
    $(".select_countryon").change(function(){
        // debugger;
           var gperiod_country_id2 = $(this).val();
           // console.log(gperiod_country_id);
           var ajaxurl = 'subscription/get-fees'+'/' + gperiod_country_id2;
           $.ajax({
              url:ajaxurl,
              type:'GET',
                  beforeSend:function(){
                    $('.spinner-cls').show();
              },
                  success:function(data)
                  { 
                    // debugger;
                    var res = JSON.parse(data)
                   
                      $('#dis_onboardfee').val(res.gperiod_type3);
                  }
              });
    });
});