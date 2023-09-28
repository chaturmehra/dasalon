@extends('admin.layouts.auth.app')
@section('content')


<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
       
		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar pt-3 pt-lg-6">
			<!--begin::Toolbar container-->
			<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<!--begin::Title-->
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Partner - Service mapping</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="{{ url('/admin/setting') }}" class="text-muted text-hover-primary">Home</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--end::Item-->

						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Partner - Service mapping</li>
						<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page title-->
			</div>
			<!--end::Toolbar container-->
		</div>
		<!--end::Toolbar-->
        
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-fluid">

				<!--begin::Navbar-->
				@include('admin.services.tab')
				<!--end::Navbar-->

			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->

	</div>
	<!--end::Content wrapper-->
</div>
<div class="card card-flush mt-8">

<div class="card-header">
	                   @if(session()->has('success'))
                        <div class="card-header display-message">
                           <div class="alert alert-success">
                              {{ session()->get('success') }}
                           </div>
                        </div>
                        @endif
                        @if(session()->has('error'))
                        <div class="card-header display-message">
                           <div class="alert alert-danger">
                              {{ session()->get('error') }}
                           </div>
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="card-header display-message">
                           <div class="alert alert-danger">
                              <ul>
                                 @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                                 @endforeach
                              </ul>
                           </div>
                        </div>
                     @endif
	<h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Partner Service Mapping</h2>
</div>

<!--begin::Card header-->
<div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-5">

	<!--begin::Card title-->
	<div class="card-title">
		<!--begin::Search-->
		<div class="d-flex align-items-center position-relative my-1">
				<i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
				<input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
			</div>
			<!--end::Search-->
		</div>
		<!--end::Card title-->

		<!--begin::Card toolbar-->
		<div class="card-toolbar">
			<!--begin::Add Country-->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_servicepartnermapping">
			    <i class="ki-duotone ki-plus fs-2"></i>Service Partner Mapping
			</button>
			<!--end::Add Country-->
		</div>
		<!--end::Toolbar-->

	</div>
	<!--end::Card header-->

	<!--begin::Card body-->
	<div class="card-body pt-0">

		<table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_datatable_example">
			<!--begin::Table head-->
			<thead>
				<!--begin::Table row-->
				<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
					<th class="min-w-100px">Id</th>
					<th class="min-w-150px">Country</th>
					<th class="min-w-150px">Business Type</th>
					<th class="min-w-150px">Service category</th>
					<th class="min-w-150px">Service sub-category</th>
					<th class="min-w-50px">Enable/Disable</th>
				</tr>
				<!--end::Table row-->
			</thead>
			<!--end::Table head-->


			<!--begin::Table body-->
			<tbody class="fw-bold text-gray-600"> 
				@php
				$i=1;
				@endphp
				@foreach($service_data as $data)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$getcounty[0]->name}}</td>
					<td>{{$data->businesstype}}</td>
					<td>{{$data->category}}</td>
					<td>{{$data->servicesubcategory}}</td>

					<td>
						<div class="form-check form-switch form-check-custom form-check-solid">
						    <input class="form-check-input status" type="checkbox" name="status" p_id='{{$data->id}}' id="status-toggle" {{ $data->status == 1 ? 'checked' : '' }} />
						</div>
					</td>
				</tr>
              @endforeach
              
			</tbody>
			<!--end::Table body-->
		</table>

	</div>
	<!--end::Card body-->

</div>
@include('admin.services.partner-mapping.model.partner_service_mapping_add');
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('.status').click(function () {
            var status = $(this).prop('checked');
            var p_id   = $(this).attr('p_id'); 
            //console.log(p_id)
            $.ajax({
                type: 'POST',
                url:  "{{ url('admin/services/status')}}", 
                data: {
                    _token: '{{ csrf_token() }}', 
                    p_id: p_id, 
                    status: status
                },
                success: function (response) {
	                    
	            Swal.fire({
	                        text: response.message,
	                        icon: response.status === 'success' ? "success" : "error",
	                        buttonsStyling: !1,
	                        confirmButtonText: "Ok, got it!",
	                        customClass: {
	                            confirmButton: "btn btn-primary"
	                        }
	                    });
	             },
                error: function (xhr, status, error) {
                    
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>


@endpush