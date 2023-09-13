<div
   id="kt_drawer_editprofile"
   class="bg-white"
   data-kt-drawer="true"
   data-kt-drawer-activate="true"
   data-kt-drawer-toggle="#kt_drawer_editprofile_toggle"
   data-kt-drawer-close="#kt_drawer_editprofile_close"
   data-kt-drawer-overlay="true"
   data-kt-drawer-permanent="true"
   data-kt-drawer-width="{default:'300px', 'md': '600px'}"
   >
   <!--begin::Card-->
   <div class="card rounded-0 w-100">
      <!--begin::Card header-->
      <div class="card-header pe-5">
         <!--begin::Title-->
         <div class="card-title">
            Staff Profile
         </div>
         <!--end::Title-->
         <!--begin::Card toolbar-->
         <div class="card-toolbar">
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="kt_drawer_editprofile_close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <!--end::Card toolbar-->
      </div>
      <!--end::Card header-->
      <!--begin::Card body-->
      <div class="card-body hover-scroll-overlay-y pt-3">
         <!--begin::Body-->
         <div class="pt-5">
            <!--begin::Items-->
            <div class="brdr">
               <!--begin::Section-->
               <div class="d-flex justify-content-between align-items-start p-5">
                  <!--begin::Content-->
                  <div class="d-flex flex-column">
                     <!--begin::Title-->
                     <span class="text-gray-800 fw-bold fs-6">Name:</span>
                     <span class="text-gray-400 fw-semibold fs-6" id="staff-name"></span>
                     <!--end::Title-->
                  </div>
                  <!--end::Content-->
                  <div class="d-flex justify-content-end w-150px">
                     <a href="javascript:void(0)" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 update-staff-detail" data-bs-toggle="modal" data-bs-target="#kt_modal_update_scrollable22" >Edit</a>
                     <input type="hidden" name="staff_id" id="staff_id">
                  </div>
               </div>
               <!--end::Section-->
               <!--begin::Separator-->
               <div class="separator my-3"></div>
               <!--end::Separator-->
               <!--begin::Section-->
               <div class="d-flex justify-content-between align-items-start p-5">
                  <!--begin::Content-->
                  <div class="d-flex flex-column">
                     <!--begin::Title-->
                     <span class="text-gray-800 fw-bold fs-6">Email:</span>
                     <span class="text-gray-400 fw-semibold fs-6" id="staff-email"></span>
                     <!--end::Title-->
                  </div>
               </div>
               <!--end::Section-->
               <!--begin::Separator-->
               <div class="separator my-3"></div>
               <!--end::Separator-->
               <!--begin::Section-->
               <div class="d-flex justify-content-between align-items-start p-5">
                  <!--begin::Content-->
                  <div class="d-flex flex-column">
                     <!--begin::Title-->
                     <span class="text-gray-800 fw-bold fs-6">Phone:</span>
                     <span class="text-gray-400 fw-semibold fs-6" id="staff-phone"></span>
                     <span class="text-gray-400 fw-semibold fs-6 mt-1">Quickly sign in, easily recover passwords, and receive security notifications with this mobile number.</span>
                     <!--end::Title-->
                  </div>
               </div>
               <!--end::Section-->
               <!--begin::Separator-->
               <div class="separator my-3"></div>
               <!--end::Separator-->
               <!--begin::Section-->
               <div class="d-flex justify-content-between align-items-start p-5">
                  <!--begin::Content-->
                  <div class="d-flex flex-column">
                     <!--begin::Title-->
                     <span class="text-gray-800 fw-bold fs-6">Gender:</span>
                     <span class="text-gray-400 fw-semibold fs-6" id="staff-gender"></span>
                     <!--end::Title-->
                  </div>
               </div>
               <!--end::Section-->
               <!--begin::Separator-->
               <div class="separator my-3"></div>
               <!--end::Separator-->
               <!--begin::Section-->
               <div class="d-flex justify-content-between align-items-start p-5">
                  <!--begin::Content-->
                  <div class="d-flex flex-column">
                     <!--begin::Title-->
                     <span class="text-gray-800 fw-bold fs-6">Joining date:</span>
                     <span class="text-gray-400 fw-semibold fs-6 mt-1" id="staff-joining-date"></span>
                     <!--end::Title-->
                  </div>
               </div>
               <!--end::Section-->
               <!--begin::Separator-->
               <!--begin::Separator-->
               <div class="separator my-3"></div>
               <!--end::Separator-->
               <!--begin::Section-->
               <div class="d-flex justify-content-between align-items-start p-5">
                  <!--begin::Content-->
                  <div class="d-flex flex-column">
                     <!--begin::Title-->
                     <span class="text-gray-800 fw-bold fs-6">Facebook:</span>
                     <span class="text-gray-400 fw-semibold fs-6 mt-1" id="staff-facebook"></span>
                     <!--end::Title-->
                  </div>
               </div>
               <!--end::Section-->
               <!--begin::Separator-->
               <!--begin::Separator-->
               <div class="separator my-3"></div>
               <!--end::Separator-->
               <!--begin::Section-->
               <div class="d-flex justify-content-between align-items-start p-5">
                  <!--begin::Content-->
                  <div class="d-flex flex-column">
                     <!--begin::Title-->
                     <span class="text-gray-800 fw-bold fs-6">Instagram:</span>
                     <span class="text-gray-400 fw-semibold fs-6 mt-1" id="staff-instagram"></span>
                     <!--end::Title-->
                  </div>
               </div>
               <!--end::Section-->
               <!--begin::Separator-->
               <!--begin::Separator-->
               <div class="separator my-3"></div>
               <!--end::Separator-->
               <!--begin::Section-->
               <div class="d-flex justify-content-between align-items-start p-5">
                  <!--begin::Content-->
                  <div class="d-flex flex-column">
                     <!--begin::Title-->
                     <span class="text-gray-800 fw-bold fs-6">Working days:</span>
                     <span class="text-gray-400 fw-semibold fs-6 mt-1" id="staff-working-days"></span>
                     <!--end::Title-->
                  </div>
               </div>
               <!--end::Section-->
               <!--begin::Separator-->
               <div class="separator my-3"></div>
               <!--end::Separator-->
            </div>
            <!--end::Items-->
         </div>
         <!--end: Card Body-->
      </div>
      <!--end::Card body-->
   </div>
   <!--end::Card-->
</div>