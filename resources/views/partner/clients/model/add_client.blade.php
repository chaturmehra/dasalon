<div class="modal fade" id="kt_modal_scrollable" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-xl">
            <div class="modal-content">
               <div class="modal-header">
                  <!--begin::Card header-->
                  <div class="card-header pt-7" id="kt_chat_contacts_header">
                     <!--begin::Card title-->
                     <div class="card-title">
                        <h2>Add New Client</h2>
                     </div>
                     <!--end::Card title-->
                  </div>

                  <!--end::Card header-->
                  <!--begin::Close-->
                  <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                     <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                  </div>
                  <!--end::Close-->
               </div>
               <div class="modal-body">
                  <!--begin::Contacts-->
                  <div class="card card-flush h-lg-100">
                     <!--begin::Card body-->
                     <div class="card-body pt-5">
                        <!--begin::Form-->
                        <form id="" class="form" method="post" action="{{ url('partner/client/add') }}" enctype="multipart/form-data">
                           <!--begin::Row-->
                            @csrf
                           <div class="row">
                              <!--begin::Col-->
                              <div class="col-md-3">
                                 <!--begin::Input group-->
                                 <div class="mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-3">
                                    <span>Client Image</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" >
                                    <i class="ki-duotone ki-information fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    </i>
                                    </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Image input wrapper-->
                                    <div class="mt-1">
                                       <!--begin::Image placeholder-->
                                       <style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
                                       <!--end::Image placeholder-->
                                       <!--begin::Image input-->
                                       <div class="image-input image-input-outline image-input-placeholder image-input-empty image-input-empty" data-kt-image-input="true">
                                          <!--begin::Preview existing avatar-->
                                          <div class="image-input-wrapper w-100px h-100px" style="background-image: url('')"></div>
                                          <!--end::Preview existing avatar-->
                                          <!--begin::Edit-->
                                          <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Upload Photo">
                                             <i class="ki-duotone ki-pencil fs-7">
                                             <span class="path1"></span>
                                             <span class="path2"></span>
                                             </i>
                                             <!--begin::Inputs-->
                                             <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                             <input type="hidden" name="image_remove" />
                                             <!--end::Inputs-->
                                          </label>
                                          <!--end::Edit-->
                                          <!--begin::Cancel-->
                                          <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel photo">
                                          <i class="ki-duotone ki-cross fs-2">
                                          <span class="path1"></span>
                                          <span class="path2"></span>
                                          </i>
                                          </span>
                                          <!--end::Cancel-->
                                          <!--begin::Remove-->
                                          <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove photo">
                                          <i class="ki-duotone ki-cross fs-2">
                                          <span class="path1"></span>
                                          <span class="path2"></span>
                                          </i>
                                          </span>
                                          <!--end::Remove-->
                                       </div>
                                       <!--end::Image input-->
                                    </div>
                                    <!--end::Image input wrapper-->
                                 </div>
                                 <!--end::Input group-->
                              </div>
                              <!--end::Col-->
                              <!--begin::Col-->
                              <div class="col-md-9">
                                 <!--begin::Input group-->
                                 <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                    <span class="required">Name</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control client_name form-control-solid" name="name" value="" required/>
                                    <!--end::Input-->
                                 </div>
                                 <!--end::Input group-->
                                 <!--begin::Input group-->
                                 <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                    <span>Gender</span>
                                    </label>
                                    <!--end::Label-->
                                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" data-dropdown-parent="#kt_modal_scrollable" name="gender">
                                       <option></option>
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                       <option value="Non binary">Non binary</option>
                                       <option value="Unknown">Unknown</option>
                                    </select>
                                 </div>
                                 <!--end::Input group-->
                              </div>
                              <!--end::Col-->
                           </div>
                           <!--end::Row-->
                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                              <!--begin::Label-->
                              <label class="fs-6 fw-semibold form-label mt-3">
                              <span class="required">Phone no.</span>
                              </span>
                              </label>
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input type="text" class="form-control form-control-solid client_phone phone-number-intl" name="phone" value="" required/>

                              <input type="hidden" class="country-code-intl" name="country_code">
                              <!--end::Input-->
                           </div>
                           <!--end::Input group-->
                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                              <!--begin::Label-->
                              <label class="fs-6 fw-semibold form-label mt-3">
                              <span class="required">Email id</span>
                              </label>
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input type="email" class="form-control form-control-solid client_email" name="email" value=""  required />
                              <!--end::Input-->
                           </div>
                           <!--end::Input group-->
                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                              <!--begin::Label-->
                              <label class="fs-6 fw-semibold form-label mt-3">
                              <span class="required">Date of birth</span>
                              </label>
                              <!--end::Label-->
                              <!--begin::Input-->
                              <br>
                              <div class="row">
                              <div class="col-md-4">

                              <label for="day" class="required fw-semibold form-label mt-3 ">Day:</label>
                              <input type="text" id="birth_day" name="birth_day" min="1" max="31" placeholder="Enter The Day" class=" form-control form-control-solid mb-2"required>
                              </div>
                              <div class="col-md-4">
                              <label for="month" class="required fw-semibold form-label mt-3">Month:</label>
                               <select id="birth_month" name="birth_month" required class=" form-control form-control-solid form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an Month">
                                 <option value="" disabled selected>Select a Month</option>
                                     <?php
                                     for ($month = 1; $month <= 12; $month++) {
                                        $monthName = date('F', mktime(0, 0, 0, $month, 1));
                                         echo '<option value="' . $month . '">' . $monthName .  '</option>';
                                     }
                                     ?>
                              </select>
                           </div>
                           <div class="col-md-4">
                              <label for="year" class="fw-semibold form-label mt-3">Year:</label>
                              <select id="birth_year" name="birth_year"class=" form-control form-control-solid form-select "data-control="select2" data-hide-search="true" data-placeholder="Select an Year">
                              <option value="0" selected>Select a Year</option>
                                     <?php
                                     for ($year = 2023; $year >= 1900; $year--) {
                                         echo '<option value="' . $year . '">' . $year . '</option>';
                                     }
                                     ?>
                           </select>
                           </div>
                        </div>
                        </div>
                           <!--end::Input group-->
                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                              <div class="brdr">
                                 <!--begin::Label-->
                                 <label class="fs-6 fw-semibold form-label mt-3 p-4 pb-0">
                                 <span>Address</span>
                                 </label>
                                 <!--end::Label-->
                                 <hr>
                                 <!-- <a href="#" class="d-flex align-items-center gap-2 icnclr p-4 pt-0 pb-5 mt-5">
                                 <i class="bi bi-plus-circle fs-2"></i>
                                 <span>Add new address</span> </a>-->
                                 <textarea class="form-control form-control-solid" name="address"></textarea>
                                 

                              </div>
                           </div>
                           <!--end::Input group-->
                           <!--begin::Input group-->
                           <div class="fv-row mb-7">
                              <!--begin::Label-->
                              <label class="fs-6 fw-semibold form-label mt-3">
                              <span>Notes</span>
                              </label>
                              <!--end::Label-->
                              <!--begin::Input-->
                              <textarea class="form-control form-control-solid" name="notes"></textarea>
                              <!--end::Input-->
                           </div>
                           <!--end::Input group-->
                           <!--begin::Separator-->
                           <div class="separator mb-6"></div>
                           <!--end::Separator-->
                           <!--begin::Action buttons-->
                           <div class="d-flex justify-content-end">
                              <!--begin::Button-->
                              <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                              <!--end::Button-->
                              <!--begin::Button-->
                              <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary" >
                              <span class="indicator-label">Save</span>
                              <span class="indicator-progress">Please wait...
                              <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                              </button>
                              <!--end::Button-->
                           </div>
                           <!--end::Action buttons-->
                        </form>
                        <!--end::Form-->
                     </div>
                     <!--end::Card body-->
                  </div>
                  <!--end::Contacts-->
               </div>
            </div>
         </div>
      </div>
