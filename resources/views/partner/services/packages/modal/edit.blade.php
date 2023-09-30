<div
    id="kt_drawer_example_permanent2"
    class="bg-white"
    data-kt-drawer="true"
    data-kt-drawer-activate="true"
    data-kt-drawer-toggle="#kt_drawer_example_permanent_toggle2"
    data-kt-drawer-close="#kt_drawer_example_permanent_close2"
    data-kt-drawer-overlay="true"
    data-kt-drawer-permanent="true"
    data-kt-drawer-width="{default:'300px', 'md': '700px', 'xl': '950px'}"
>
    <!--begin::Card-->
    <div class="card rounded-0 w-100">
        <!--begin::Card header-->
        <div class="card-header pe-5">
            <!--begin::Title-->
            <div class="card-title">
            <div class="d-flex flex-column gap-3 mb-4">
               <h2>Haircut and Highlight</h2>
               <span class="text-gray-400 fs-6">This package includes a haircut and hair highlights</span>
            </div>
         </div>
            <!--end::Title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
               <div class="d-flex gap-3 me-3">
                  <span class="text-gray-800 fs-6">Status:</span>
                  <span class="text-gray-400 fs-6">Active</span>
               </div>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 close_form" id="kt_drawer_example_permanent_close2">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body hover-scroll-overlay-y py-10">

         <!--begin::Form-->
         <form class="form d-flex flex-column flex-lg-row" id="serviceeditform">

            <div class="d-flex flex-column gap-7 gap-lg-10">

               <!--begin::General options-->
               <div class="card card-flush py-4">
                  <!--begin::Card header-->
                  <div class="card-header">
                     <div class="card-title">
                        <h2 class="required fs-3">Added service</h2>
                     </div>
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-0">
                     <!--begin::Input group-->
                     <div class="fv-row">
                        <input class="form-control d-flex align-items-center" value="service1, service2, service3" placeholder="Add service" id="kt_tagify_service_edit" />
                     </div>
                     <!--end::Input group-->
                  </div>
                  <!--end::Card header-->

               </div>
               <!--end::General options-->

               <div class="card card-flush p-4">

                  <div class="row align-items-end">

                     <div class="col-md-6 my-3">
                        
                        <div class="card-title">
                           <h2 class="required fs-3">Gender</h2>
                        </div>
                        
                        <div class="d-flex gap-4">
                           <!--begin::Col-->
                           <div>
                              <!--begin::Option-->
                              <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start py-5 px-4">
                                 <!--begin::Radio-->
                                 <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                    <input class="form-check-input" type="radio" name="gender_option" value="1" />
                                 </span>
                                 <!--end::Radio-->
                                 <!--begin::Info-->
                                 <span class="badge badge-danger ms-4">
                                       <i class="bi bi-gender-female me-2 fs-3 clrwht"></i>
                                       Female
                                    </span>
                                 <!--end::Info-->
                              </label>
                              <!--end::Option-->
                           </div>
                           <!--end::Col-->
                           <!--begin::Col-->
                           <div>
                              <!--begin::Option-->
                              <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start py-5 px-4">
                                 <!--begin::Radio-->
                                 <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                    <input class="form-check-input" type="radio" name="gender_option" value="2" checked="checked" />
                                 </span>
                                 <!--end::Radio-->
                                 <!--begin::Info-->
                                 <span class="badge badge-info ms-4">
                                       <i class="bi bi-gender-male me-2 fs-3 clrwht"></i>
                                       Male
                                    </span>
                                 <!--end::Info-->
                              </label>
                              <!--end::Option-->
                           </div>
                           <!--end::Col-->
                           <!--begin::Col-->
                           <div>
                              <!--begin::Option-->
                              <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start py-5 px-4">
                                 <!--begin::Radio-->
                                 <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                    <input class="form-check-input" type="radio" name="gender_option" value="3" />
                                 </span>
                                 <!--end::Radio-->
                                 <!--begin::Info-->
                                 <span class="badge badge-warning ms-4">
                                       <i class="bi bi-gender-ambiguous me-2 fs-3 clrwht"></i>
                                       Unisex
                                    </span>
                                 <!--end::Info-->
                              </label>
                              <!--end::Option-->
                           </div>
                           <!--end::Col-->
                        </div>

                     </div>

                     <div class="col-md-6 my-3">
                        
                        <!--begin::Card title-->
                        <div class="card-title">
                           <h2 class="required fs-3">Duration</h2>
                        </div>
                        <!--end::Card title-->

                        
                        <input type="text" name="" class="form-control mb-3 mb-lg-0" placeholder="Duration" value="" />

                     </div>

                  </div>

               </div>

               <div class="card card-flush p-4">
                        
                  <div class="card-title">
                     <div class="d-flex flex-column gap-3 mb-4">
                        <h2>Pricing</h2>
                     </div>
                  </div>

                  <div class="row">
                                 
                     <div class="col-sm-4">
                        <div class="d-flex flex-column gap-1">
                           <label class="required fw-semibold fs-6">Walk-in price</label>
                           <div class="input-group mb-2">
                               <span class="input-group-text">$</span>
                               <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                               <span class="input-group-text">.00</span>
                           </div>
                           <div class="text-muted fs-7">Price for anyone who walks into the salon without an appointment</div>
                           <!--end::Input group-->
                        </div>
                     </div>

                     <div class="col-sm-4">
                        <div class="d-flex flex-column gap-1">
                           <label class="required fw-semibold fs-6">Online Price</label>
                           <div class="input-group mb-2">
                               <span class="input-group-text">$</span>
                               <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                               <span class="input-group-text">.00</span>
                           </div>
                           <div class="text-muted fs-7">Price available to clients who book their services online in advance</div>
                           <!--end::Input group-->
                        </div>
                     </div>

                     <div class="col-sm-4">
                        <div class="d-flex flex-column gap-1">
                           <label class="required fw-semibold fs-6">Off Peak Price</label>
                           <div class="input-group mb-2">
                               <span class="input-group-text">$</span>
                               <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                               <span class="input-group-text">.00</span>
                           </div>
                           <div class="text-muted fs-7">A discounted price, available to people who walk-in during the salon's off peak hours.</div>
                           <!--end::Input group-->
                        </div>
                     </div>

                  </div>

               </div>

               <div class="card card-flush p-4">

                  <div class="card-title">
                     <div class="d-flex flex-column gap-3">
                        <h2>Staff pricing</h2>
                        <span class="text-muted fs-7">Add staff to service, so that customer can book online appointment with their choice of staff</span>
                        <span class="text-muted fs-7">A premium price for a service, available to clients who request a specific stylist who specializes in a particular service (optional)</span>
                     </div>
                  </div>

                  <!--begin::Input group-->
                  <div  data-kt-ecommerce-catalog-add-category="auto-options">
                     <!--begin::Repeater-->
                     <div id="kt_ecommerce_edit_packages_conditions">
                        <!--begin::Form group-->
                        <div class="form-group">
                           <div data-repeater-list="kt_ecommerce_edit_packages_conditions" class="d-flex flex-column gap-0">
                              <div data-repeater-item="" class="form-group d-flex align-items-end gap-5">


                                 <div class="row mt-7">
                                 
                                    <div class="col-sm-4">
                                       <!--begin::Label-->
                                       <label class="required fw-semibold fs-6 mb-2">Staff</label>
                                       <!--end::Label-->
                                       <div class="form-floating border rounded">
                                          <select class="form-select form-select-transparent kt_docs_select2_users" data-placeholder="Select an option">
                                             <option></option>
                                             <option value="0" data-kt-select2-user="assets/media/avatars/300-25.jpg">Brian Cox</option>
                                             <option value="1" data-kt-select2-user="assets/media/avatars/300-9.jpg">Francis Mitcham</option>
                                             <option value="0" data-kt-select2-user="assets/media/avatars/300-23.jpg">Dan Wilson</option>
                                             <option value="1" data-kt-select2-user="assets/media/avatars/300-12.jpg">Ana Crown</option>
                                             <option value="0" data-kt-select2-user="assets/media/avatars/300-13.jpg">John Miller</option>
                                             <option value="1" data-kt-select2-user="assets/media/avatars/300-21.jpg">Ethan Wilder</option>
                                             <option value="0" data-kt-select2-user="assets/media/avatars/300-6.jpg">Emma Smith</option>
                                             <option value="1" data-kt-select2-user="assets/media/avatars/300-1.jpg">Max Smith</option>
                                          </select>
                                       </div>
                                    </div>   

                                    <div class="col-sm-4">
                                       <div class="d-flex flex-column gap-1">
                                          <label class="fw-semibold fs-6 mb-2">Online Price</label>
                                          <div class="input-group mb-0">
                                              <span class="input-group-text">$</span>
                                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                                              <span class="input-group-text">.00</span>
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>

                                    <div class="col-sm-4">
                                       <div class="d-flex flex-column gap-1">
                                          <label class="fw-semibold fs-6 mb-2">Off Peak Price</label>
                                          <div class="input-group mb-0">
                                              <span class="input-group-text">$</span>
                                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                                              <span class="input-group-text">.00</span>
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>

                                 </div>

                                 <!--begin::Button-->
                                 <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                                    <i class="ki-duotone ki-cross fs-2">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                    </i>
                                 </button>
                                 <!--end::Button-->
                              </div>
                           </div>
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group mt-5">
                           <!--begin::Button-->
                           <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                           <i class="ki-duotone ki-plus fs-2"></i>Add another condition</button>
                           <!--end::Button-->
                        </div>
                        <!--end::Form group-->
                     </div>
                     <!--end::Repeater-->
                  </div>
                  <!--end::Input group-->

               </div>

               <div class="card card-flush p-4">

                  <div class="card-title">
                     <div class="d-flex flex-column gap-3 mb-4">
                        <h2>Venue</h2>
                     </div>
                  </div>

                  <div class="row align-items-end">

                     <!--begin::Col-->
                         <div class="col-md-6 mb-4">
                             <!--begin::Option-->
                             <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckVenue1">
                              
                                 <!--begin::Radio-->
                                 <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                     <input class="form-check-input" type="checkbox" value="" id="flexCheckVenue1" checked/>
                                 </span>
                                 <!--end::Radio-->

                                 <div class="quantity-icn ms-3">
                              <img src="assets/media/svg/salon.svg">
                           </div>

                                 <!--begin::Info-->
                                 <span class="ms-3">
                                    <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 fs-4 mb-4">Alexandra road</span>
                                 <span class="text-muted d-block fw-light fs-7 mt-1">Alexandra Central Mall, 321 Alexandra Road, Singapore (Bukit Merah)
                                 </span>
                              </h3>
                                 </span>
                                 <!--end::Info-->

                             </label>
                             <!--end::Option-->
                         </div>
                         <!--end::Col-->

                         <!--begin::Col-->
                         <div class="col-md-6 mb-4">
                             <!--begin::Option-->
                             <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckVenue2">
                              
                                 <!--begin::Radio-->
                                 <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                     <input class="form-check-input" type="checkbox" value="" id="flexCheckVenue2" checked/>
                                 </span>
                                 <!--end::Radio-->

                                 <div class="quantity-icn ms-3">
                              <img src="assets/media/svg/salon.svg">
                           </div>

                                 <!--begin::Info-->
                                 <span class="ms-3">
                                    <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 fs-4 mb-4">YJ Salons - Punggol</span>
                                 <span class="text-muted d-block fw-light fs-7 mt-1">Punggol Park, Hougang Avenue 10, Singapore (Hougang)
                                 </span>
                              </h3>
                                 </span>
                                 <!--end::Info-->

                             </label>
                             <!--end::Option-->
                         </div>
                         <!--end::Col-->

                         <!--begin::Col-->
                         <div class="col-md-6 mb-4">
                             <!--begin::Option-->
                             <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckVenue1">
                              
                                 <!--begin::Radio-->
                                 <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                     <input class="form-check-input" type="checkbox" value="" id="flexCheckVenue1" checked/>
                                 </span>
                                 <!--end::Radio-->

                                 <div class="quantity-icn ms-3">
                              <img src="assets/media/svg/salon.svg">
                           </div>

                                 <!--begin::Info-->
                                 <span class="ms-3">
                                    <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 fs-4 mb-4">Alexandra road</span>
                                 <span class="text-muted d-block fw-light fs-7 mt-1">Alexandra Central Mall, 321 Alexandra Road, Singapore (Bukit Merah)
                                 </span>
                              </h3>
                                 </span>
                                 <!--end::Info-->

                             </label>
                             <!--end::Option-->
                         </div>
                         <!--end::Col-->

                         <!--begin::Col-->
                         <div class="col-md-6 mb-4">
                             <!--begin::Option-->
                             <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckVenue2">
                              
                                 <!--begin::Radio-->
                                 <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                     <input class="form-check-input" type="checkbox" value="" id="flexCheckVenue2" checked/>
                                 </span>
                                 <!--end::Radio-->

                                 <div class="quantity-icn ms-3">
                              <img src="assets/media/svg/salon.svg">
                           </div>

                                 <!--begin::Info-->
                                 <span class="ms-3">
                                    <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 fs-4 mb-4">YJ Salons - Punggol</span>
                                 <span class="text-muted d-block fw-light fs-7 mt-1">Punggol Park, Hougang Avenue 10, Singapore (Hougang)
                                 </span>
                              </h3>
                                 </span>
                                 <!--end::Info-->

                             </label>
                             <!--end::Option-->
                         </div>
                         <!--end::Col-->

                  </div>

               </div>

               <div class="d-flex justify-content-end">
                  <!--begin::Button-->
                  <a href="#" class="btn btn-light me-5">Cancel</a>
                  <!--end::Button-->
                  <!--begin::Button-->
                  <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                     <span class="indicator-label">Save Changes</span>
                     <span class="indicator-progress">Please wait...
                     <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                  </button>
                  <!--end::Button-->
               </div>

            </div>

         </form>

      </div>
      <!--end::Card-->
   </div>

</div>