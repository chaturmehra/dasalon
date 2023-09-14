<div class="modal fade" tabindex="-1" id="kt_modal_businessdetail">
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
         <a href="#" data-bs-toggle="modal" data-bs-target="#changeemail" data-bs-dismiss="modal">change</a>
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
         <a href="#" data-bs-toggle="modal" data-bs-target="#changephone" data-bs-dismiss="modal">change</a>
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
