@extends('partner.layouts.auth.app')



@section('content') 



					<!--Begin:::Main-->
					
					<!--Begin:::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">

							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar pt-6 pb-0">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Settings</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="/dasalon/partners/home.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Settings</li>
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

									
									<!--begin::Row-->

									
										<div Class="row">
										<div class="col-xl-4">       
        
<!--begin::List widget 20-->
<div class="card h-xl-100">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-dark">Account Settings</span>
		</h3>

        <!--begin::Toolbar-->
        <div class="card-toolbar">   
            <a href="#" class="btn btn-sm btn-light">Add Business</a>             
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-6">
                    
           

             
                    
            
             
                    
            <!--begin::Item-->
            <div class="d-flex flex-stack">  
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary">B</div>
                </div>
                <!--end::Symbol-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                    <!--begin:Author-->                    
                    <div class="flex-grow-1 me-2">
                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable">Business Details</a>
                        
                        <span class="text-muted fw-semibold d-block fs-7">Business and contact details</span>
                    </div>
                    <!--end:Author-->                      
                    
                    <!--begin::Actions-->
                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable">
                        <i class="ki-outline ki-arrow-right fs-2"></i>                    </a>
                    <!--begin::Actions-->    
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->

                            <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->
				
				
				<!--begin::Item-->
				
				
				
              <div class="d-flex flex-stack">  
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary">V</div>
                </div>
                <!--end::Symbol-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                    <!--begin:Author-->                    
                    <div class="flex-grow-1 me-2">
                        <a href="venue-setting.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Vanue Setup</a>
                        
                        <span class="text-muted fw-semibold d-block fs-7">vanue details and setting</span>
                    </div>
                    <!--end:Author-->                      
                    
                    <!--begin::Actions-->
                    <a href="venue-setting.html" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                        <i class="ki-outline ki-arrow-right fs-2"></i>                    </a>
                    <!--begin::Actions-->    
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->


                            <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->
				<!--begin::Item-->
             <div class="d-flex flex-stack">  
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary">S</div>
                </div>
                <!--end::Symbol-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                    <!--begin:Author-->                    
                    <div class="flex-grow-1 me-2">
                        <a href="staff.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Staff Setup</a>
                        
                        <span class="text-muted fw-semibold d-block fs-7">Team details and working hours</span>
                    </div>
                    <!--end:Author-->                      
                    
                    <!--begin::Actions-->
                    <a href="staff.html" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                        <i class="ki-outline ki-arrow-right fs-2"></i>                    </a>
                    <!--begin::Actions-->    
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->

                            <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->
				<!--begin::Item-->
             <div class="d-flex flex-stack">  
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary">A</div>
                </div>
                <!--end::Symbol-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                    <!--begin:Author-->                    
                    <div class="flex-grow-1 me-2">
                        <a href="appointments.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Appointment Setup</a>
                        
                        <span class="text-muted fw-semibold d-block fs-7">Setting for online Booling</span>
                    </div>
                    <!--end:Author-->                      
                    
                    <!--begin::Actions-->
                    <a href="appointments.html" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                        <i class="ki-outline ki-arrow-right fs-2"></i>                    </a>
                    <!--begin::Actions-->    
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->
			       <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->
				<!--begin::Item-->
             <div class="d-flex flex-stack">  
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary">I</div>
                </div>
                <!--end::Symbol-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                    <!--begin:Author-->                    
                    <div class="flex-grow-1 me-2">
                        <a href="" class="text-gray-800 text-hover-primary fs-6 fw-bold">Intergration</a>
                        
                        <span class="text-muted fw-semibold d-block fs-7">Connect google Instragram etc.</span>
                    </div>
                    <!--end:Author-->                      
                    
                    <!--begin::Actions-->
                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                        <i class="ki-outline ki-arrow-right fs-2"></i>                    </a>
                    <!--begin::Actions-->    
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->
			       <!--begin::Separator-->
                <div class="separator separator-dashed my-4"></div>
                <!--end::Separator-->
				<!--begin::Item-->
             <div class="d-flex flex-stack">  
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary">P</div>
                </div>
                <!--end::Symbol-->

                <!--begin::Section-->
                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                    <!--begin:Author-->                    
                    <div class="flex-grow-1 me-2">
                        <a href="" class="text-gray-800 text-hover-primary fs-6 fw-bold">Payment</a>
                        
                        <span class="text-muted fw-semibold d-block fs-7">Setup Payment details</span>
                    </div>
                    <!--end:Author-->                      
                    
                    <!--begin::Actions-->
                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                        <i class="ki-outline ki-arrow-right fs-2"></i>                    </a>
                    <!--begin::Actions-->    
                </div>
                <!--end::Section-->
            </div>
            <!--end::Item-->

			<div class="modal fade" tabindex="-1" id="kt_modal_scrollable">
		    <div class="modal-dialog modal-dialog-scrollable">
		        <div class="modal-content modal-rounded">
		            <div class="modal-header py-7 d-flex justify-content-between">
		                <h2>Business details</h2>	                

		                <!--begin::Close-->
		                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
		                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
		                </div>
		                <!--end::Close-->
		            </div>

		            <div class="modal-body">
		                
		            	<!--begin::Form-->
						<form class="form">
							<!--begin::Scroll-->
							<div class="d-flex flex-column scroll-y me-n7 pe-7">

								<div class="row">
									
									<div class="col-12">
										<!--begin::Input group-->
										<div class="fv-row mb-7 d-flex flex-column">
											<label class="required fw-semibold fs-6 mb-2">Business logo</label>
											<div class="image-input image-input-empty" data-kt-image-input="true">
											    <!--begin::Image preview wrapper-->
											    <div class="image-input-wrapper w-125px h-125px"></div>
											    <!--end::Image preview wrapper-->

											    <!--begin::Edit button-->
											    <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
											    data-kt-image-input-action="change"
											    data-bs-toggle="tooltip"
											    data-bs-dismiss="click"
											    title="Change avatar">
											        <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>

											        <!--begin::Inputs-->
											        <input type="file" name="avatar" accept=".png, .jpg, .jpeg"/>
											        <input type="hidden" name="avatar_remove" />
											        <!--end::Inputs-->
											    </label>
											    <!--end::Edit button-->

											    <!--begin::Cancel button-->
											    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
											    data-kt-image-input-action="cancel"
											    data-bs-toggle="tooltip"
											    data-bs-dismiss="click"
											    title="Cancel avatar">
											        <i class="ki-outline ki-cross fs-3"></i>
											    </span>
											    <!--end::Cancel button-->

											    <!--begin::Remove button-->
											    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
											    data-kt-image-input-action="remove"
											    data-bs-toggle="tooltip"
											    data-bs-dismiss="click"
											    title="Remove avatar">
											        <i class="ki-outline ki-cross fs-3"></i>
											    </span>
											    <!--end::Remove button-->
											</div>
											<!--end::Image input-->
										</div>
										<!--end::Input group-->
									</div>

									<div class="col-12">
										<div class="fv-row mb-7">
											<!--begin::Label-->
											<label class="required fw-semibold fs-6 mb-2">Business name</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Business name" value="Business 1">
											<!--end::Input-->
										</div>
									</div>

									<div class="col-md-6">
										<div class="fv-row mb-7">
											<!--begin::Label-->
											<label class="required fw-semibold fs-6 mb-2">Email</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="email" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="email" value="harry@gmail.com">
											<!--end::Input-->
											<a href="javascript:void(0)" data-bs-stacked-modal="#kt_modal_stacked_2">change</a>
										</div>
									</div>

									<div class="col-md-6">
										<div class="fv-row mb-7">
											<!--begin::Label-->
											<label class="required fw-semibold fs-6 mb-2">Phone</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="phone" value="9988774455">
											<!--end::Input-->
											<a href="javascript:void(0)" data-bs-stacked-modal="#kt_modal_stacked_3">change</a>
										</div>
									</div>

									<div class="col-12">
										<div class="fv-row mb-7 d-flex flex-column gap-3">
											<span class="card-label fw-semibold text-gray-800 mb-1">Website and Social Media</span>
											<!--begin::Input-->
											<input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Website" value="">
											<!--end::Input-->
											<!--begin::Input-->
											<input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Facebook" value="">
											<!--end::Input-->
											<!--begin::Input-->
											<input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Instagram" value="">
											<!--end::Input-->
										</div>
									</div>

							</div>
							<!--end::Scroll-->

							<!--begin::Actions-->
							<div class="modal-footer">
				                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
				                <button type="submit" class="btn btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
									</span>
								</button>
				            </div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->

		            </div>

		        </div>
		    </div>
		</div>


		<div class="modal fade" tabindex="-1" id="kt_modal_stacked_2">
			<div class="modal-dialog modal-sm">
			    <div class="modal-content">
			        <div class="modal-header py-4">
			            <h3 class="modal-title">Change Email</h3>

			            <!--begin::Close-->
			            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
			                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
			            </div>
			            <!--end::Close-->
			        </div>

			        <div class="modal-body">

			        	<div class="row">

							<div class="col-12">
								<div class="fv-row mb-7">
									<!--begin::Input-->
									<input type="email" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="email">
									<!--end::Input-->
									<a href="#" class="mt-5 d-inline-block">Send OTP</a>
								</div>
							</div>

							<div class="col-12">
								<div class="fv-row">
									<!--begin::Input-->
									<input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter OTP">
									<!--end::Input-->
								</div>
							</div>
			        	</div>

			        </div>

			        <div class="modal-footer">
			            <button type="button" class="btn btn-primary">Verify</button>
			        </div>
			    </div>
			</div>
		</div>

		<div class="modal fade" tabindex="-1" id="kt_modal_stacked_3">
			<div class="modal-dialog modal-sm">
			    <div class="modal-content">
			        <div class="modal-header py-4">
			            <h3 class="modal-title">Change Phone</h3>

			            <!--begin::Close-->
			            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
			                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
			            </div>
			            <!--end::Close-->
			        </div>

			        <div class="modal-body">

			        	<div class="row">

							<div class="col-12">
								<div class="fv-row mb-7">
									<!--begin::Input-->
									<input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="phone">
									<!--end::Input-->
									<a href="#" class="mt-5 d-inline-block">Send OTP</a>
								</div>
							</div>

							<div class="col-12">
								<div class="fv-row">
									<!--begin::Input-->
									<input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter OTP">
									<!--end::Input-->
								</div>
							</div>
			        	</div>

			        </div>

			        <div class="modal-footer">
			            <button type="button" class="btn btn-primary">Verify</button>
			        </div>
			    </div>
			</div>
		</div>

                          
             
                    
            

             
           
    </div>
    <!--end::Body-->
</div>
<!--end::List widget 20-->
    </div>
	
									<!--end::Row-->
									
									

								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
							

						</div>
						<!--end::Content wrapper-->
					</div>
					<!--end:::Main-->



					</div>



  @endsection