<div class="modal fade multistepform_venue" id="kt_modal_update_details" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-xl">
      <div class="modal-content modal-rounded">
         <div class="modal-header py-7 d-flex justify-content-between">
            <h2>Update Venue detail</h2>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 close_form" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <!--begin::Stepper-->
            <div class="stepper stepper-pills" id="kt_stepper_example_basic_update">
               <!--begin::Nav-->
               <div class="stepper-nav flex-center flex-wrap mb-10 justify-content-between gap-5">
                  <!--begin::Step 1-->
                  <div class="stepper-item current" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Venue details
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 1-->
                  <!--begin::Step 2-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Venue address
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 2-->
                  <!--begin::Step 3-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Venue Photos
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 3-->
                  <!--begin::Step 4-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Business type
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 4-->
                  <!--begin::Step 5-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Operating hours
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 5-->
                  <!--begin::Step 6-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Off Peak hours
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 6-->
                  <!--begin::Step 7-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Amenities
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 7-->
                  <!--begin::Step 8-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Complete
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 8-->
               </div>
               <!--end::Nav-->
               <!--begin::Form-->
               <form class="mx-auto" novalidate="novalidate" id="kt_stepper_example_basic_edit_form" action="{{ url('partner/update-venue-setting') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="venue_id" id="edit_venue_id">
                  <input type="hidden" name="latitude" id="edit_venue_latitude">
                  <input type="hidden" name="longitude" id="edit_venue_longitude">
                  <!--begin::Group-->
                  <div class="mb-5">
                     <!--begin::Step 1-->
                     <div class="current" data-kt-stepper-element="content">
                        <div class="row align-items-end">
                           <div class="col-12 mb-7">
                              <div class="fv-row">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800 mb-4 required">Venue name</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-6 my-3">This is the location name of your business. <br>  
                                       Recommended to enter your location name if you have multiple venues
                                    </span>
                                 </h3>
                                 <!--begin::Input-->
                                 <input type="text" name="venue_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Venue name" id="edit_venue_name" required>
                                 <!--end::Input-->
                              </div>
                           </div>
                           
                           <div class="col-12 mb-7">
                              <div class="fv-row">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800 mb-4 required">Phone number</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-6 my-3">Phone number of this venue which will appear on the Business profile of this venue
                                    </span>
                                 </h3>
                                 <!--begin::Input-->
                                 <input type="text" name="phone_number" class="form-control form-control-solid mb-3 mb-lg-0 phone-number-intl" placeholder="Phone Number" id="edit_venue_phone" required>
                                 <!--end::Input-->
                              </div>
                           </div>
                           <div class="col-12 mb-7">
                              <div class="fv-row">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800 mb-4 required">Email address</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-6 my-3">Venue manager email address
                                    </span>
                                 </h3>
                                 <!--begin::Input-->
                                 <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0" id="edit_venue_email" placeholder="Email address" required>
                                 <!--end::Input-->
                              </div>
                           </div>
                           <div class="col-12 mb-7">
                              <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 mb-4">Billing details</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-6 mt-5">Select amenities available
                                 </span>
                              </h3>
                              <input type="text" name="billing_details" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Business name - venue name" id="edit_venue_billing_details" required>
                           </div>
                        </div>
                     </div>
                     <!--end::Step 1-->
                     <!--begin::Step 2-->
                     <div data-kt-stepper-element="content">
                        <div class="d-flex-flex-column">
                           <div class="d-flex flex-column scroll-y me-n7 pe-7">
                              <!--begin::Input group-->
                              <div class="fv-row mb-7">
                                 <!--begin::Label-->
                                 <label class="required fw-semibold fs-6 mb-2 required">Where's your business located?</label>
                                 <!--end::Label-->
                                 <!--begin::Input-->
                                 <input type="text" name="business_location" class="form-control form-control-solid mb-3 mb-lg-0 business-location" placeholder="business locationn" id="edit_venue_business_location" required/>
                                 <!--end::Input-->
                              </div>
                              <!--end::Input group-->
                           </div>
                           <!--end::Scroll-->
                           <div class="card">
                              <div class="card-body brdr">
                                 <div class="row">
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Address</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="business_address" class="form-control form-control-solid mb-3 mb-lg-0 venue-business-address" id="edit_venue_business_address" placeholder="Address" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <div class="mb-0">
                                          <label class="form-label">Apt./Suite etc</label>
                                          <!--begin::Input-->
                                          <input type="text" name="business_aptsuite" class="form-control form-control-solid mb-3 mb-lg-0 venue-business-aptsuite" placeholder="Apt./Suite" id="edit_venue_business_aptsuite"  required>
                                          <!--end::Input-->
                                       </div>
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">District</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="district" class="form-control form-control-solid mb-3 mb-lg-0 venue-district" placeholder="District" id="edit_venue_district" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">City</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="city" class="form-control form-control-solid mb-3 mb-lg-0 venue-city" placeholder="City" id="edit_venue_city" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Region</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="region" class="form-control form-control-solid mb-3 mb-lg-0 venue-region" placeholder="Region" id="edit_venue_region" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Postcode</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="postcode" class="form-control form-control-solid mb-3 mb-lg-0 venue-postcode" placeholder="Postcode" id="edit_venue_postcode" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Country</label>
                                       <!--end::Label-->
                                       <!--begin::Input-->
                                       <input type="text" name="country" class="form-control form-control-solid mb-3 mb-lg-0 venue-country" placeholder="Country" id="edit_venue_country" required>
                                       <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 mb-7">
                                       <div class="mb-0">
                                          <label class="form-label">Directions</label>
                                          <textarea class="form-control form-control form-control-solid" data-kt-autosize="true" placeholder="Directions" id="edit_venue_directions" name="directions"></textarea>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-check my-10">
                              <input class="form-check-input edit_business_address_check" type="checkbox" id="flexCheckDefault" name="business_address_check" />
                              <label class="form-check-label" for="flexCheckDefault">
                                 I dont have a business address(mobile and online services only)
                              </label>
                           </div>
                           <div class="card">
                              <div class="card-body brdr">
                                 <span class="card-label fw-bold text-gray-800 mb-4">Map location</span>
                                 <span class="text-gray-400 fw-semibold d-block fs-6 mt-5">Drag the map so the pin matches the exact location of your business location
                                 </span>
                                 <hr>
                                 <div class="row">
                                    <div class="col-12 map" id="edit-map" style="height: 400px;">
                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.664954374128!2d103.8950833744703!3d1.3777013986092788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da163beca5d721%3A0xe869e5868a79ea59!2sPunggol%20Park!5e0!3m2!1sen!2sin!4v1683635051463!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--end::Step 2-->
                     <!--begin::Step 3-->
                     <div data-kt-stepper-element="content">
                        <div class="row w-100">
                           <div class="col-md-3">
                              <!--begin::Input group-->
                              <div class="fv-row mb-7 d-flex flex-column">
                                 <label class="required fw-semibold fs-6 mb-5">Add Featured Image</label>
                                 <div class="image-input image-input-empty" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-125px h-125px" id="edit_featured_img"></div>
                                    <!--end::Image preview wrapper-->
                                    <!--begin::Edit button-->
                                    <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Change avatar">
                                    <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="featured" accept=".png, .jpg, .jpeg" required/>
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
                  <div class="col-md-9">
                     <!--begin::Input group-->
                     <div class="fv-row mb-7 d-flex flex-column">
                        <label class="required fw-semibold fs-6 mb-5">Add other Images</label>
                        <div class="d-flex flex-wrap gap-5 align-items-end">
                           <div class="image-input image-input-empty" data-kt-image-input="true">
                              <!--begin::Image preview wrapper-->
                              <div class="image-input-wrapper w-125px h-125px" id="edit_otherimg1"></div>
                              <!--end::Image preview wrapper-->
                              <!--begin::Edit button-->
                              <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                              data-kt-image-input-action="change"
                              data-bs-toggle="tooltip"
                              data-bs-dismiss="click"
                              title="Change avatar">
                              <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                              <!--begin::Inputs-->
                              <input type="file" name="imgother1" accept=".png, .jpg, .jpeg" required/>
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
                  <div class="image-input image-input-empty" data-kt-image-input="true">
                     <!--begin::Image preview wrapper-->
                     <div class="image-input-wrapper w-125px h-125px" id="edit_otherimg2"></div>
                     <!--end::Image preview wrapper-->
                     <!--begin::Edit button-->
                     <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                     data-kt-image-input-action="change"
                     data-bs-toggle="tooltip"
                     data-bs-dismiss="click"
                     title="Change avatar">
                     <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
                     <!--begin::Inputs-->
                     <input type="file" name="imgother2" accept=".png, .jpg, .jpeg" required/>
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
         <div class="image-input image-input-empty" data-kt-image-input="true">
            <!--begin::Image preview wrapper-->
            <div class="image-input-wrapper w-125px h-125px" id="edit_otherimg3"></div>
            <!--end::Image preview wrapper-->
            <!--begin::Edit button-->
            <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
            data-kt-image-input-action="change"
            data-bs-toggle="tooltip"
            data-bs-dismiss="click"
            title="Change avatar">
            <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
            <!--begin::Inputs-->
            <input type="file" name="imgother3" accept=".png, .jpg, .jpeg" required/>
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
<div class="image-input image-input-empty" data-kt-image-input="true">
   <!--begin::Image preview wrapper-->
   <div class="image-input-wrapper w-125px h-125px" id="edit_otherimg4"></div>
   <!--end::Image preview wrapper-->
   <!--begin::Edit button-->
   <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
   data-kt-image-input-action="change"
   data-bs-toggle="tooltip"
   data-bs-dismiss="click"
   title="Change avatar">
   <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
   <!--begin::Inputs-->
   <input type="file" name="imgother4" accept=".png, .jpg, .jpeg" required/>
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
</div>
</div>
<!--end::Input group-->
</div>
</div>
</div>
<!--end::Step 3-->
<!--begin::Step 4-->
<div data-kt-stepper-element="content">
   <div class="row">
      <div class="col-md-6 mb-7">
         <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-800 mb-4">Gender restriction</span>
            <span class="text-gray-400 fw-semibold d-block fs-6 mt-5">If you are business caters to a specific gender, please chose here
            </h3>
         </div>
         <div class="col-md-6 mb-7">
            <div class="fv-row mb-7">
               <div class="d-flex flex-wrap gap-5">
                  <div class="form-check form-check-custom form-check-solid">
                     <input class="form-check-input me-2 edit_gender_restriction" type="radio" id="unisex" value="Unisex" name="gender_restriction"/>
                     <label class="fw-semibold fs-6" for="unisex">Unisex</label>
                  </div>
                  <div class="form-check form-check-custom form-check-solid">
                     <input class="form-check-input me-2 edit_gender_restriction" type="radio" id="male" value="Male" name="gender_restriction"/>
                     <label class="fw-semibold fs-6" for="male">Male Only</label>
                  </div>
                  <div class="form-check form-check-custom form-check-solid">
                     <input class="form-check-input me-2 edit_gender_restriction" type="radio" id="female" value="Female" name="gender_restriction"/>
                     <label class="fw-semibold fs-6" for="female">Female Only</label>
                  </div>
               </div>
            </div>
         </div>
         <hr class="mt-0 mb-10">
         <div class="col-md-6 mb-7">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bold text-gray-800 mb-4">Venue Business Type</span>
            </h3>
         </div>
         <div class="col-md-6 mb-7">
            <div class="fv-row mb-7">
               <div class="row">
                  @if(!empty($businesstypes))
                  @foreach($businesstypes as $businesstype)
                  <div class="col-md-6 mb-5">
                     <!--begin::Option-->
                     <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center">
                        <!--begin::Radio-->
                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                           <input class="form-check-input edit_venuebusiness" type="checkbox" value="{{ $businesstype->bt_id }}" name="venuebusiness[]" />
                        </span>
                        <!--end::Radio-->
                                          <!-- <div class="icn ms-3">
                                             <img src="{{ asset('/public/partner/assets/media/icons/duotune/communication/com001.svg') }}">
                                          </div> -->
                                          <!--begin::Info-->
                                          <span class="ms-3">
                                             <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ $businesstype->businesstype }}</span>
                                             </h3>
                                          </span>
                                          <!--end::Info-->
                                       </label>
                                       <!--end::Option-->
                                    </div>
                                    @endforeach
                                    @endif
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--end::Step 4-->
                     <!--begin::Step 5-->
                     <div data-kt-stepper-element="content">
                        <div class="card card-flush w-100">
                           <!--begin::Card header-->
                           <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                              <!--begin::Card title-->
                              <div class="card-title">
                                 <h2>Operating hours</h2>
                              </div>
                              <!--end::Card title-->
                           </div>
                           <!--end::Card header-->
                           <div class="card-body pt-0">
                              <!--begin:::Tabs-->
                              <div class="d-flex gap-5 openhoursnav">
                                 <!--begin:::Tab item-->
                                 <div class="form-check form-check-custom">
                                    <input class="form-check-input edit_openhours" type="radio" value="open_for_selected_hours" name="openhours" id="openhoursnav1" onclick="funcShowDiv()" />
                                    <label class="form-check-label nav-link" for="openhoursnav1" onclick="funcShowDiv()">
                                       Open for selected hours
                                    </label>
                                 </div>
                                 <!--end:::Tab item-->
                                 <!--begin:::Tab item-->
                                 <div class="form-check form-check-custom">
                                    <input class="form-check-input edit_openhours" type="radio" value="always_open" name="openhours" id="openhoursnav2" onclick="funcShowDiv()"/>
                                    <label class="form-check-label nav-link" for="openhoursnav2" onclick="funcShowDiv()">
                                       Always open
                                    </label>
                                 </div>
                                 <!--end:::Tab item-->
                                 <!--begin:::Tab item-->
                                 <div class="form-check form-check-custom">
                                    <input class="form-check-input edit_openhours" type="radio" value="appointment_only" name="openhours" id="openhoursnav3" onclick="funcShowDiv()"/>
                                    <label class="form-check-label nav-link" for="openhoursnav3" onclick="funcShowDiv()">
                                       By appointment only
                                    </label>
                                 </div>
                                 <!--end:::Tab item-->
                              </div>
                              <!--end:::Tabs-->
                              <hr class="my-10">
                              <div class="operatingdiv edit" id="operatinghourstab1">
                                 <h3 class="card-title mb-7">
                                    <span class="card-label fw-bold text-gray-800">Open for selected hours</span>
                                 </h3>
                                 <div class="card-body brdr">
                                    <h3 class="card-title mb-7">
                                       <span class="card-label fw-bold text-gray-800">Operating days</span>
                                    </h3>
                                    <div class="d-flex align-items-center flex-wrap gap-4 mb-10">
                                       <div class="form-check d-flex align-items-center gap-5 px-0 edit-working-days">
                                          <div class="form-check">
                                             <input class="form-check-input edit_operating_days" type="checkbox" name="operating_days[]" value="mon" id="selhours1" onchange="showOpEditDivData(this)"/>
                                             <label class="form-check-label" for="selhours1">
                                                Mon
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input edit_operating_days" type="checkbox" name="operating_days[]" value="tue" id="selhours2" onchange="showOpEditDivData(this)"/>
                                             <label class="form-check-label" for="selhours2">
                                                Tue
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input edit_operating_days" type="checkbox" name="operating_days[]" value="wed" id="selhours3" onchange="showOpEditDivData(this)"/>
                                             <label class="form-check-label" for="selhours3">
                                                Wed
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input edit_operating_days" type="checkbox" name="operating_days[]" value="thu" id="selhours4" onchange="showOpEditDivData(this)"/>
                                             <label class="form-check-label" for="selhours4">
                                                Thu
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input edit_operating_days" type="checkbox" name="operating_days[]" value="fri" id="selhours5" onchange="showOpEditDivData(this)"/>
                                             <label class="form-check-label" for="selhours5">
                                                Fri
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input edit_operating_days" type="checkbox" name="operating_days[]" value="sat" id="selhours6" onchange="showOpEditDivData(this)"/>
                                             <label class="form-check-label" for="selhours6">
                                                Sat
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input edit_operating_days" type="checkbox" name="operating_days[]" value="sun" id="selhours7" onchange="showOpEditDivData(this)"/>
                                             <label class="form-check-label" for="selhours7">
                                                Sun
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                    <h3 class="card-title mb-7">
                                       <span class="card-label fw-bold text-gray-800">Operating hours</span>
                                    </h3>
                                    <div class="d-flex align-items-center flex-wrap gap-4 mb-7">
                                       <div class="mb-7 mb-sm-0">
                                          <label for="" class="form-label">Open</label>
                                          <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                             <input type="text" name="operating_open_hours" class="form-control edit_operating_open_hours" data-td-target=".kt_td_picker_time_only"/>
                                             <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                <i class="ki-outline ki-time fs-3"></i>
                                             </span>
                                          </div>
                                       </div>
                                       <div>
                                          <label for="" class="form-label">Close</label>
                                          <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                             <input type="text" name="operating_close_hours" class="form-control edit_operating_close_hours" data-td-target=".kt_td_picker_time_only"/>
                                             <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                <i class="ki-outline ki-time fs-3"></i>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div>
                                       <label class="form-check form-switch form-check-custom form-check-solid">
                                          <input class="form-check-input edit_advance_setting" name="advance_setting" type="checkbox" onchange="showopEditHrDiv(this)"/>
                                          <span class="form-check-label">
                                             Advance setting
                                          </span>
                                       </label>
                                    </div>
                                    <div class="card-body brdr showopEditHrDiv1 d-none mt-8 edit-add-close-op-hours">
                                       <h3 class="card-title mb-7">
                                          <span class="card-label fw-bold text-gray-800">Add closed period during operating hours</span>
                                       </h3>
                                       <!--begin::Table-->
                                       <table class="table align-middle table-row-dashed fs-6 gy-5">
                                          <thead>
                                             <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-125px">Days</th>
                                                <th class="min-w-150px">Open</th>
                                                <th class="min-w-150px">Close</th>
                                                <th class="min-w-150px">Add time set</th>
                                                <th class="min-w-150px"></th>
                                             </tr>
                                          </thead>
                                          <tbody class="text-gray-600 fw-semibold edit-advance-setting-op-hours">
                                             <tr class="d-none mon">
                                                <td>
                                                   Mon
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" id="edit_adv_setting_mon_open" name="adv_setting_mon['open']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" id="edit_adv_setting_mon_close" name="adv_setting_mon['close']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td colspan="2">
                                                   <button type="button" class="btn btn-primary edit-mon addweekoff">
                                                      Add
                                                   </button>
                                                   <div class="edit-mon divweekoff">
                                                      <div class="d-flex flex-wrap inpttimewd">
                                                         <div class="mb-7 mb-sm-0">
                                                            <label for="" class="form-label">Open</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" id="edit_adv_setting_mon_timeset_open" name="adv_setting_mon['timeset_open']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                                  <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div>
                                                            <label for="" class="form-label">Close</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" id="edit_adv_setting_mon_timeset_close" name="adv_setting_mon['timeset_close']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                                  <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="d-none tue">
                                                <td>
                                                   Tue
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" id="edit_adv_setting_tue_open" name="adv_setting_tue['open']" id="edit_adv_setting_tue_open"class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" id="edit_adv_setting_tue_close" name="adv_setting_tue['close']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td colspan="2">
                                                   <button type="button" class="btn btn-primary edit-tue addweekoff">
                                                      Add
                                                   </button>
                                                   <div class="edit-tue divweekoff">
                                                      <div class="d-flex flex-wrap inpttimewd">
                                                         <div class="mb-7 mb-sm-0">
                                                            <label for="" class="form-label">Open</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" id="edit_adv_setting_tue_timeset_open" name="adv_setting_tue['timeset_open']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                                  <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div>
                                                            <label for="" class="form-label">Close</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" id="edit_adv_setting_tue_timeset_close" name="adv_setting_tue['timeset_close']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                                  <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="d-none wed">
                                                <td>
                                                   Wed
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" id="edit_adv_setting_wed_open" name="adv_setting_wed['open']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" id="edit_adv_setting_wed_close" name="adv_setting_wed['close']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td colspan="2">
                                                   <button type="button" class="btn btn-primary edit-wed addweekoff">
                                                      Add
                                                   </button>
                                                   <div class="edit-wed divweekoff">
                                                      <div class="d-flex flex-wrap inpttimewd">
                                                         <div class="mb-7 mb-sm-0">
                                                            <label for="" class="form-label">Open</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" id="edit_adv_setting_wed_timeset_open" name="adv_setting_wed['timeset_open']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                                  <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div>
                                                            <label for="" class="form-label">Close</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" id="edit_adv_setting_wed_timeset_close" name="adv_setting_wed['timeset_close']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                                  <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="d-none thu">
                                                <td>
                                                   Thu
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" id="edit_adv_setting_thu_open" name="adv_setting_thu['open']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" id="edit_adv_setting_thu_close" name="adv_setting_thu['close']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td colspan="2">
                                                   <button type="button" class="btn btn-primary edit-thu addweekoff">
                                                      Add
                                                   </button>
                                                   <div class="edit-thu divweekoff">
                                                      <div class="d-flex flex-wrap inpttimewd">
                                                         <div class="mb-7 mb-sm-0">
                                                            <label for="" class="form-label">Open</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" id="edit_adv_setting_thu_timeset_open" name="adv_setting_thu['timeset_open']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                                  <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div>
                                                            <label for="" class="form-label">Close</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" id="edit_adv_setting_thu_timeset_close" name="adv_setting_thu['timeset_close']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                                  <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="d-none fri">
                                                <td>
                                                   Fri
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" id="edit_adv_setting_fri_open" name="adv_setting_fri['open']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" id="edit_adv_setting_fri_close" name="adv_setting_fri['close']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td colspan="2">
                                                   <button type="button" class="btn btn-primary edit-fri addweekoff">
                                                      Add
                                                   </button>
                                                   <div class="edit-fri divweekoff">
                                                      <div class="d-flex flex-wrap inpttimewd">
                                                         <div class="mb-7 mb-sm-0">
                                                            <label for="" class="form-label">Open</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" id="edit_adv_setting_fri_timeset_open" name="adv_setting_fri['timeset_open']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                                  <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div>
                                                            <label for="" class="form-label">Close</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" id="edit_adv_setting_fri_timeset_close" name="adv_setting_fri['timeset_close']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                                  <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="d-none sat">
                                                <td>
                                                   Sat
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" id="edit_adv_setting_sat_open" name="adv_setting_sat['open']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" id="edit_adv_setting_sat_close" name="adv_setting_sat['close']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td colspan="2">
                                                   <button type="button" class="btn btn-primary edit-sat addweekoff">
                                                      Add
                                                   </button>
                                                   <div class="edit-sat divweekoff">
                                                      <div class="d-flex flex-wrap inpttimewd">
                                                         <div class="mb-7 mb-sm-0">
                                                            <label for="" class="form-label">Open</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" id="edit_adv_setting_sat_timeset_open" name="adv_setting_sat['timeset_open']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                                  <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div>
                                                            <label for="" class="form-label">Close</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" id="edit_adv_setting_sat_timeset_close" name="adv_setting_sat['timeset_close']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                                  <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="d-none sun">
                                                <td>
                                                   Sun
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" id="edit_adv_setting_sun_open" name="adv_setting_sun['open']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   <div>
                                                      <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                         <input type="text" id="edit_adv_setting_sun_close" name="adv_setting_sun['close']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                         <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                         </span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td colspan="2">
                                                   <button type="button" class="btn btn-primary edit-sun addweekoff">
                                                      Add
                                                   </button>
                                                   <div class="edit-sun divweekoff">
                                                      <div class="d-flex flex-wrap inpttimewd">
                                                         <div class="mb-7 mb-sm-0">
                                                            <label for="" class="form-label">Open</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" id="edit_adv_setting_sun_timeset_open" name="adv_setting_sun['timeset_open']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                                  <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div>
                                                            <label for="" class="form-label">Close</label>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" id="edit_adv_setting_sun_timeset_close" name="adv_setting_sun['timeset_close']" class="form-control" data-td-target=".kt_td_picker_time_only"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                                  <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                       <!--end::Table-->
                                    </div>
                                 </div>
                              </div>
                              <div class="operatingdiv edit" id="operatinghourstab2">
                                 <h3 class="card-title mb-7">
                                    <span class="card-label fw-bold text-gray-800">Always open</span>
                                 </h3>
                                 <div class="card-body brdr">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                       <thead>
                                          <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                             <th class="min-w-125px">Operating days</th>
                                             <th class="min-w-125px">Operating hours</th>
                                          </tr>
                                       </thead>
                                       <tbody class="text-gray-600 fw-semibold">
                                          <tr>
                                             <td>
                                                <div class="form-check">
                                                   <input class="form-check-input edit_always_open" type="checkbox" value="mon" id="operatingd1" name="always_open[]" />
                                                   <label class="form-check-label" for="operatingd1">
                                                      Mon
                                                   </label>
                                                </div>
                                             </td>
                                             <td>24 hours</td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-check">
                                                   <input class="form-check-input edit_always_open" name="always_open[]" type="checkbox" value="tue" id="operatingd2" />
                                                   <label class="form-check-label" for="operatingd2">
                                                      Tue
                                                   </label>
                                                </div>
                                             </td>
                                             <td>24 hours</td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-check">
                                                   <input class="form-check-input edit_always_open" type="checkbox" name="always_open[]" value="wed" id="operatingd3" />
                                                   <label class="form-check-label" for="operatingd3">
                                                      Wed
                                                   </label>
                                                </div>
                                             </td>
                                             <td>24 hours</td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-check">
                                                   <input class="form-check-input edit_always_open" type="checkbox" name="always_open[]" value="thu" id="operatingd4" />
                                                   <label class="form-check-label" for="operatingd4">
                                                      Thu
                                                   </label>
                                                </div>
                                             </td>
                                             <td>24 hours</td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-check">
                                                   <input class="form-check-input edit_always_open" type="checkbox" name="always_open[]" value="fri" id="operatingd5" />
                                                   <label class="form-check-label" for="operatingd5">
                                                      Fri
                                                   </label>
                                                </div>
                                             </td>
                                             <td>24 hours</td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-check">
                                                   <input class="form-check-input edit_always_open" type="checkbox" name="always_open[]" value="sat" id="operatingd6" />
                                                   <label class="form-check-label" for="operatingd6">
                                                      Sat
                                                   </label>
                                                </div>
                                             </td>
                                             <td>24 hours</td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-check">
                                                   <input class="form-check-input edit_always_open" type="checkbox" name="always_open[]" value="sun" id="operatingd7" />
                                                   <label class="form-check-label" for="operatingd7">
                                                      Sun
                                                   </label>
                                                </div>
                                             </td>
                                             <td>24 hours</td>
                                          </tr>
                                    <!-- <tr>
                                       <td class="pb-0">
                                          <button type="submit" class="btn btn-primary">
                                          <span class="indicator-label">Submit</span>
                                          <span class="indicator-progress">Please wait...
                                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                          </span>
                                          </button>
                                       </td>
                                    </tr> -->
                                 </tbody>
                              </table>
                              <!--end::Table-->
                           </div>
                        </div>
                        <div class="operatingdiv edit" id="operatinghourstab3">
                           <h3 class="card-title mb-7">
                              <span class="card-label fw-bold text-gray-800">By appointment only</span>
                           </h3>
                           <div class="card-body brdr">
                              <!--begin::Table-->
                              <table class="table align-middle table-row-dashed fs-6 gy-5">
                                 <thead>
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                       <th class="min-w-125px">Operating days</th>
                                       <th class="min-w-125px">Operating hours</th>
                                    </tr>
                                 </thead>
                                 <tbody class="text-gray-600 fw-semibold">
                                    <tr>
                                       <td>
                                          <div class="form-check">
                                             <input class="form-check-input edit_appointment_only" type="checkbox" name="appointment_only[]" value="mon" id="apponly1" />
                                             <label class="form-check-label" for="apponly1">
                                                Mon
                                             </label>
                                          </div>
                                       </td>
                                       <td>By appointment only</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <div class="form-check">
                                             <input class="form-check-input edit_appointment_only" type="checkbox" name="appointment_only[]" value="tue" id="apponly2" />
                                             <label class="form-check-label" for="apponly2">
                                                Tue
                                             </label>
                                          </div>
                                       </td>
                                       <td>By appointment only</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <div class="form-check">
                                             <input class="form-check-input edit_appointment_only" type="checkbox" name="appointment_only[]" value="wed" id="apponly3" />
                                             <label class="form-check-label" for="apponly3">
                                                Wed
                                             </label>
                                          </div>
                                       </td>
                                       <td>By appointment only</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <div class="form-check">
                                             <input class="form-check-input edit_appointment_only" type="checkbox" name="appointment_only[]" value="thu" id="apponly4" />
                                             <label class="form-check-label" for="apponly4">
                                                Thu
                                             </label>
                                          </div>
                                       </td>
                                       <td>By appointment only</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <div class="form-check">
                                             <input class="form-check-input edit_appointment_only" type="checkbox" name="appointment_only[]" value="fri" id="apponly5" />
                                             <label class="form-check-label" for="apponly5">
                                                Fri
                                             </label>
                                          </div>
                                       </td>
                                       <td>By appointment only</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <div class="form-check">
                                             <input class="form-check-input edit_appointment_only" type="checkbox" name="appointment_only[]" value="sat" id="apponly6" />
                                             <label class="form-check-label" for="apponly6">
                                                Sat
                                             </label>
                                          </div>
                                       </td>
                                       <td>By appointment only</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <div class="form-check">
                                             <input class="form-check-input edit_appointment_only" type="checkbox" name="appointment_only[]" value="sun" id="apponly7" />
                                             <label class="form-check-label" for="apponly7">
                                                Sun
                                             </label>
                                          </div>
                                       </td>
                                       <td>By appointment only</td>
                                    </tr>
                                    <!-- <tr>
                                       <td class="pb-0">
                                          <button type="submit" class="btn btn-primary">
                                          <span class="indicator-label">Submit</span>
                                          <span class="indicator-progress">Please wait...
                                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                          </span>
                                          </button>
                                       </td>
                                    </tr> -->
                                 </tbody>
                              </table>
                              <!--end::Table-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--end::Step 5-->
               <!--begin::Step 6-->
               <div data-kt-stepper-element="content">
                  <div class="card card-flush w-100">
                     <div class="card-body pt-0">
                        <div class="mt-10 showopEditHrDiv2 edit-off-peakphours">
                           <table class="table align-middle table-row-dashed fs-6 gy-5">
                              <thead>
                                 <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">Day</th>
                                    <th class="min-w-150px">Add off peak hour</th>
                                    <th class="min-w-150px"></th>
                                    <th class="min-w-150px">Add off time set</th>
                                    <th class="min-w-150px"></th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr class="d-none mon">
                                    <td>Mon</td>
                                    <td colspan="2">
                                       <button type="button" class="btn btn-primary edit-oph-mon-se addweekoff">
                                          Add
                                       </button>
                                       <div class="edit-oph-mon-se divweekoff">
                                          <div class="d-flex flex-wrap inpttimewd">
                                             <div class="mb-7 mb-sm-0">
                                                <label for="" class="form-label">off peak start</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only"
                                                   name="off_peak_hour_mon['start']" id="edit_off_peak_hour_mon_start" />
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div>
                                                <label for="" class="form-label">off peak end</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_mon['end']" id="edit_off_peak_hour_mon_end" />
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td colspan="2">
                                       <button type="button" class="btn btn-primary edit-oph-mon-to addweekoff">
                                          Add
                                       </button>
                                       <div class="edit-oph-mon-to divweekoff">
                                          <div class="d-flex flex-wrap inpttimewd">
                                             <div class="mb-7 mb-sm-0">
                                                <label for="" class="form-label">Open</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_mon['timeset_open']" id="edit_off_peak_hour_mon_timeset_open" />
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div>
                                                <label for="" class="form-label">Close</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_mon['timeset_close']" id="edit_off_peak_hour_mon_timeset_close" />
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="d-none tue">
                                    <td>Tue</td>
                                    <td colspan="2">
                                       <button type="button" class="btn btn-primary edit-oph-tue-se addweekoff">
                                          Add
                                       </button>
                                       <div class="edit-oph-tue-se divweekoff">
                                          <div class="d-flex flex-wrap inpttimewd">
                                             <div class="mb-7 mb-sm-0">
                                                <label for="" class="form-label">off peak start</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_tue['start']" id="edit_off_peak_hour_tue_start" />
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div>
                                                <label for="" class="form-label">off peak end</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_tue['end']" id="edit_off_peak_hour_tue_end" />
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td colspan="2">
                                       <button type="button" class="btn btn-primary edit-oph-tue-to addweekoff">
                                          Add
                                       </button>
                                       <div class="edit-oph-tue-to divweekoff">
                                          <div class="d-flex flex-wrap inpttimewd">
                                             <div class="mb-7 mb-sm-0">
                                                <label for="" class="form-label">Open</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_tue['timeset_open']" id="edit_off_peak_hour_tue_timeset_open" />
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div>
                                                <label for="" class="form-label">Close</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_tue['timeset_close']" id="edit_off_peak_hour_tue_timeset_close" />
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="d-none wed">
                                    <td>Wed</td>
                                    <td colspan="2">
                                       <button type="button" class="btn btn-primary edit-oph-wed-se addweekoff">
                                          Add
                                       </button>
                                       <div class="edit-oph-wed-se divweekoff">
                                          <div class="d-flex flex-wrap inpttimewd">
                                             <div class="mb-7 mb-sm-0">
                                                <label for="" class="form-label">off peak start</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_wed['start']" id="edit_off_peak_hour_wed_start" />
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div>
                                                <label for="" class="form-label">off peak end</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_wed['end']" id="edit_off_peak_hour_wed_end" />
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td colspan="2">
                                       <button type="button" class="btn btn-primary edit-oph-wed-to addweekoff">
                                          Add
                                       </button>
                                       <div class="edit-oph-wed-to divweekoff">
                                          <div class="d-flex flex-wrap inpttimewd">
                                             <div class="mb-7 mb-sm-0">
                                                <label for="" class="form-label">Open</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_wed['timeset_open']" id="edit_off_peak_hour_wed_timeset_open" />
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div>
                                                <label for="" class="form-label">Close</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_wed['timeset_close']" id="edit_off_peak_hour_wed_timeset_close" />
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="d-none thu">
                                    <td>Thu</td>
                                    <td colspan="2">
                                       <button type="button" class="btn btn-primary edit-oph-thu-se addweekoff">
                                          Add
                                       </button>
                                       <div class="edit-oph-thu-se divweekoff">
                                          <div class="d-flex flex-wrap inpttimewd">
                                             <div class="mb-7 mb-sm-0">
                                                <label for="" class="form-label">off peak start</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_thu['start']" id="edit_off_peak_hour_thu_start" />
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div>
                                                <label for="" class="form-label">off peak end</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_thu['end']" id="edit_off_peak_hour_thu_end" />
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td colspan="2">
                                       <button type="button" class="btn btn-primary edit-oph-thu-to addweekoff">
                                          Add
                                       </button>
                                       <div class="edit-oph-thu-to divweekoff">
                                          <div class="d-flex flex-wrap inpttimewd">
                                             <div class="mb-7 mb-sm-0">
                                                <label for="" class="form-label">Open</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_thu['timeset_open']" id="edit_off_peak_hour_thu_timeset_open" />
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div>
                                                <label for="" class="form-label">Close</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_thu['timeset_close']" id="edit_off_peak_hour_thu_timeset_close"/>
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="d-none fri">
                                    <td>Fri</td>
                                    <td colspan="2">
                                       <button type="button" class="btn btn-primary edit-oph-fri-se addweekoff">
                                          Add
                                       </button>
                                       <div class="edit-oph-fri-se divweekoff">
                                          <div class="d-flex flex-wrap inpttimewd">
                                             <div class="mb-7 mb-sm-0">
                                                <label for="" class="form-label">off peak start</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_fri['start']" id="edit_off_peak_hour_fri_start"/>
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div>
                                                <label for="" class="form-label">off peak end</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_fri['end']" id="edit_off_peak_hour_fri_end"/>
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td colspan="2">
                                       <button type="button" class="btn btn-primary edit-oph-fri-to addweekoff">
                                          Add
                                       </button>
                                       <div class="edit-oph-fri-to divweekoff">
                                          <div class="d-flex flex-wrap inpttimewd">
                                             <div class="mb-7 mb-sm-0">
                                                <label for="" class="form-label">Open</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_fri['timeset_open']" id="edit_off_peak_hour_fri_timeset_open"/>
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div>
                                                <label for="" class="form-label">Close</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_fri['timeset_close']" id="edit_off_peak_hour_fri_timeset_close"/>
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="d-none sat">
                                    <td>Sat</td>
                                    <td colspan="2">
                                       <button type="button" class="btn btn-primary edit-oph-sat-se addweekoff">
                                          Add
                                       </button>
                                       <div class="edit-oph-sat-se divweekoff">
                                          <div class="d-flex flex-wrap inpttimewd">
                                             <div class="mb-7 mb-sm-0">
                                                <label for="" class="form-label">off peak start</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_sat['start']" id="edit_off_peak_hour_sat_start"/>
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div>
                                                <label for="" class="form-label">off peak end</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_sat['end']" id="edit_off_peak_hour_sat_end"/>
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td colspan="2">
                                       <button type="button" class="btn btn-primary edit-oph-sat-to addweekoff">
                                          Add
                                       </button>
                                       <div class="edit-oph-sat-to divweekoff">
                                          <div class="d-flex flex-wrap inpttimewd">
                                             <div class="mb-7 mb-sm-0">
                                                <label for="" class="form-label">Open</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_sat['timeset_open']" id="edit_off_peak_hour_sat_timeset_open"/>
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div>
                                                <label for="" class="form-label">Close</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_sat['timeset_close']" id="edit_off_peak_hour_sat_timeset_close"/>
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr class="d-none sun">
                                    <td>Sun</td>
                                    <td colspan="2">
                                       <button type="button" class="btn btn-primary edit-oph-sun-se addweekoff">
                                          Add
                                       </button>
                                       <div class="edit-oph-sun-se divweekoff">
                                          <div class="d-flex flex-wrap inpttimewd">
                                             <div class="mb-7 mb-sm-0">
                                                <label for="" class="form-label">off peak start</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_sun['start']" id="edit_off_peak_hour_sun_start"/>
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div>
                                                <label for="" class="form-label">off peak end</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_sun['end']" id="edit_off_peak_hour_sun_end"/>
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td colspan="2">
                                       <button type="button" class="btn btn-primary edit-oph-sun-to addweekoff">
                                          Add
                                       </button>
                                       <div class="edit-oph-sun-to divweekoff">
                                          <div class="d-flex flex-wrap inpttimewd">
                                             <div class="mb-7 mb-sm-0">
                                                <label for="" class="form-label">Open</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_sun['timeset_open']" id="edit_off_peak_hour_sun_timeset_open"/>
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div>
                                                <label for="" class="form-label">Close</label>
                                                <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                   <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" name="off_peak_hour_sun['timeset_close']" id="edit_off_peak_hour_sun_timeset_close"/>
                                                   <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                      <i class="ki-outline ki-time fs-3"></i>
                                                   </span>
                                                </div>
                                             </div>
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" onclick="funcHide(this)">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <!--end::Step 6-->
               <!--begin::Step 7-->
               <div data-kt-stepper-element="content">
                  <!--begin::Scroll-->
                  <div class="d-flex flex-column me-n7 pe-7 gap-7 amenities-tab">
                     @if(!empty($amenities))
                     @php $i=0; @endphp
                     @foreach($amenities as $key => $amenity)
                     @if($key == $amenity[0]['amenity_category_id'])
                     <span class="card-label fw-bold text-gray-800 mb-4">{{ $amenity[0]['amenity_category'] }}</span>
                     <div class="row">
                        @foreach($amenity as $am_val)
                        <div class="col-md-4 mb-5">
                           <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckammenity{{$i}}">
                              <!--begin::Radio-->
                              <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                 <input class="form-check-input edit_venue_amenity" type="checkbox" value="{{ $am_val['id'] }}" id="flexCheckammenity{{$i}}" name="amenity[]" />
                              </span>
                              <!--end::Radio-->
                              <div class="icn ms-3">
                                 <img src="{{ asset('public'.$am_val['amenity_icon']) }}">
                              </div>
                              <!--begin::Info-->
                              <span class="ms-3">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ $am_val['amenity_name'] }}</span>
                                 </h3>
                              </span>
                              <!--end::Info-->
                           </label>
                        </div>
                        @php $i++; @endphp
                        @endforeach
                     </div>
                     @endif
                     @endforeach
                     @endif
                  </div>
                  <!--end::Scroll-->
               </div>
               <!--end::Step 7-->
               <!--begin::Step 8-->
               <div data-kt-stepper-element="content">
                  <div class="w-100">
                     <!--begin::Heading-->
                     <div class="pb-12 text-center">
                        <!--begin::Title-->
                        <h1 class="fw-bold text-dark">Venue details Completed</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="fw-semibold text-muted fs-4">You will receive an email with with the summary of your newly Venue Setup</div>
                        <!--end::Description-->
                     </div>
                     <!--end::Heading-->
                     <!--begin::Illustration-->
                     <div class="text-center px-4">
                        <img src="{{ asset('/public/partner/assets/media/illustrations/sketchy-1/9.png') }}" alt="" class="mww-100 mh-350px" />
                     </div>
                     <!--end::Illustration-->
                  </div>
               </div>
               <!--end::Step 8-->
            </div>
            <!--end::Group-->
            <!--begin::Actions-->
            <div class="d-flex flex-stack mt-10">
               <!--begin::Wrapper-->
               <div class="me-2">
                  <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                     Back
                  </button>
               </div>
               <!--end::Wrapper-->
               <!--begin::Wrapper-->
               <div>
                  <button type="submit" class="btn btn-primary" data-kt-stepper-action="submit">
                     <span class="indicator-label">
                        Submit
                     </span>
                     <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                     </span>
                  </button>
                  <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                     Continue
                  </button>
               </div>
               <!--end::Wrapper-->
            </div>
            <!--end::Actions-->
         </form>
         <!--end::Form-->
      </div>
      <!--end::Stepper-->
   </div>
</div>
</div>
</div>