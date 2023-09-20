<div class="modal fade" tabindex="-1" id="commission">
   <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Add Commission %</h5>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable22" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <!--begin::Scroll-->
            <div class="d-flex flex-column scroll-y me-n7 pe-7">
               <div class="row">
                  <div class="col-12">
                     <div class="d-flex flex-column gap-5">
                        <div class="row align-items-center">
                           <div class="col-md-6 mb-7">
                              <h3 class="card-title">
                                 <span class="card-label fw-bold text-gray-800">Service</span>
                              </h3>
                           </div>
                           <div class="col-md-6 mb-7">
                              <!--begin::Input-->
                              <input type="text" name="service" id="add_service" class="form-control mb-3 mb-lg-0" placeholder="commission" onchange="numberHandler(this)"/>
                              <!--end::Input-->
                           </div>
                           <div class="col-md-6 mb-7">
                              <h3 class="card-title">
                                 <span class="card-label fw-bold text-gray-800">Book a Look</span>
                              </h3>
                           </div>
                           <div class="col-md-6 mb-7">
                              <!--begin::Input-->
                              <input type="text" name="book_look" id="add_book_look" class="form-control mb-3 mb-lg-0" placeholder="commission" onchange="numberHandler(this)"/>
                              <!--end::Input-->
                           </div>
                           <div class="col-md-6 mb-7">
                              <h3 class="card-title">
                                 <span class="card-label fw-bold text-gray-800">Package</span>
                              </h3>
                           </div>
                           <div class="col-md-6 mb-7">
                              <!--begin::Input-->
                              <input type="text" name="package" id="add_package" class="form-control mb-3 mb-lg-0" placeholder="commission" onchange="numberHandler(this)"/>
                              <!--end::Input-->
                           </div>
                           <div class="col-md-6 mb-7">
                              <h3 class="card-title">
                                 <span class="card-label fw-bold text-gray-800">Voucher</span>
                              </h3>
                           </div>
                           <div class="col-md-6 mb-7">
                              <!--begin::Input-->
                              <input type="text" name="voucher" id="add_voucher" class="form-control mb-3 mb-lg-0" placeholder="commission" onchange="numberHandler(this)"/>
                              <!--end::Input-->
                           </div>
                           <div class="col-md-6 mb-7">
                              <h3 class="card-title">
                                 <span class="card-label fw-bold text-gray-800">Membership</span>
                              </h3>
                           </div>
                           <div class="col-md-6 mb-7">
                              <!--begin::Input-->
                              <input type="text" name="membership" id="add_membership" class="form-control mb-3 mb-lg-0" placeholder="commission" onchange="numberHandler(this)"/>
                              <!--end::Input-->
                           </div>
                           <div class="col-md-6 mb-7">
                              <h3 class="card-title">
                                 <span class="card-label fw-bold text-gray-800">Product</span>
                              </h3>
                           </div>
                           <div class="col-md-6">
                              <!--begin::Input-->
                              <input type="text" name="product" id="add_product" class="form-control mb-3 mb-lg-0" placeholder="commission" onchange="numberHandler(this)"/>
                              <!--end::Input-->
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                     <button type="button" class="btn btn-primary my-5 add-commission" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable22" data-bs-dismiss="modal">
                        Save
                     </button>
                     <!--end::Input group-->
                  </div>
               </div>
            </div>
            <!--end::Scroll-->
         </div>
      </div>
   </div>
</div>