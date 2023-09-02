(function($) {
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    oTable3 = $('#kt_datatable_example4').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
    $('#search_profilefeature').keyup(function(){
          oTable3.search($(this).val()).draw() ;
    });

    var $form = $("form[name='profilefeature_form']");
    
    $form.validate({
        rules: {
          feature: "required",
        }
    });
       
        /*submitHandler: function(form) {
            alert('checked');
            var formData = {
                feature: $("#feature").val(),
            };
            console.log(formData);
            
            $.ajax({
                url:'{{ url('/admin/save_profilefeature/')}}',
                data: formData,
                type: "POST",
                success:function(data)
                {
                    document.profilefeature_form.reset();
                    $('#kt_modal_scrollable_3').modal('hide');
                    $('#kt_datatable_example4').DataTable().ajax.reload();
                    swal("Your profile feature created successfully!", {
                    icon: "success",
                    });
                }
            });
        };*/

        $form.on('submit', function(e){
            e.preventDefault();

            alert('checked');
            var formData = {
                feature: $("#feature").val(),
            };
            console.log(formData);
            
            $.ajax({
                url:'{{ url('/admin/save_profilefeature/')}}',
                data: formData,
                type: "POST",
                success:function(data)
                {
                    document.profilefeature_form.reset();
                    $('#kt_modal_scrollable_3').modal('hide');
                    $('#kt_datatable_example4').DataTable().ajax.reload();
                    swal("Your profile feature created successfully!", {
                    icon: "success",
                    });
                }
            });

        });
    //);
});





$(document).ready(function() {
	//console.log("1");
  $('.checkbox-value1').on('click', '.permission-on', function() {
	
	var role_id = $(this).attr('role_id');
	var profilefeature_id = $(this).attr('profilefeature_id');
	console.log($(this));

    if ($(this).prop("checked")) {
      status = 1;
    } else {
		status = 0;
    }
	//var property_value: status,
	
    let request_url = 'edit-profilefeature-status';
    
	var formData = {
		profilefeature_id: profilefeature_id,
		role_id: role_id,
		property_value: status,
	}
	debugger;
	$.ajax({
		url: request_url,
		data: formData,
		type:'POST',
			beforeSend:function(){
				$('.spinner-cls').show();
		},
			success:function(data)
			{
				$('.spinner-cls').hide();
				swal("Your profile feature status has been changed!", {
					icon: "success",
				});
				$('#kt_datatable_example4').DataTable().ajax.reload();
			}
	});
})
          
} ) ;