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
               <h2><span class="voucher-name"></span></h2>
               <span class="text-gray-400 fs-6"><span class="voucher-description"></span></span>
            </div>
         </div>
            <!--end::Title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
               <div class="d-flex gap-3 me-3">
                  <span class="text-gray-800 fs-6">Status:</span>
                  <span class="text-gray-400 fs-6"><span class="voucher-status"></span></span>
               </div>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="kt_drawer_example_permanent_close2">
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
         <form class="form d-flex flex-column flex-lg-row" id="serviceeditform" method="post" action="{{ url('partner/vouchers/update') }}">
          @csrf
          <input type="hidden" name="pv_id" id="partner_voucher_id">
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
                        <input class="form-control d-flex align-items-center edit-service-option" placeholder="Add service" id="kt_tagify_service_edit" name="selected_services"/>
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
                                    <input class="form-check-input gender-option" type="radio" name="gender_option" value="Female" />
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
                                    <input class="form-check-input gender-option" type="radio" name="gender_option" value="Male" checked="checked" />
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
                                    <input class="form-check-input gender-option" type="radio" name="gender_option" value="Unisex" />
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
                        <input type="text" class="form-control mb-2 voucher-duration" placeholder="Duration" name="duration">
                     </div>

                  </div>

               </div>

               <div class="card card-flush p-4">
                    
                <div class="card-title">
                  <div class="d-flex flex-column gap-3 mb-4">
                    <h2>Number of sessions and validity</h2>
                  </div>
                </div>

                <div class="row">

                  <div class="col-sm-6">
                    <div class="d-flex flex-column gap-1">
                      <label class="required fw-semibold fs-6">Number of sessions</label>
                      <input type="text" name="number_session" class="form-control mb-3 mb-lg-0 number-session" placeholder="no. of sessions" onchange="numberHandler(this)" />
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="d-flex flex-column gap-1">
                      <label class="required fw-semibold fs-6">Validity</label>
                      <select class="form-select form-select-solid validity" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" name="validity" required="required">
                       <option value="" selected disabled></option>
                       @foreach(voucherValidity() as $vKey => $validity)
                       <option value="{{ $vKey }}">{{ $validity }}</option>
                       @endforeach
                     </select>
                    </div>
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

                  <div class="col-sm-6">
                    <div class="d-flex flex-column gap-1">
                      <label class="required fw-semibold fs-6">Total service value</label>
                      <div class="text-muted fs-7">Total of walking price of all the services included in this voucher</div>
                      <div class="input-group mb-2">
                          <span class="input-group-text">{{ $partner_country_config->currency_sign }}</span>
                          <input type="text" class="form-control total-service-value" aria-label="Amount (to the nearest dollar)" name="total_service_value" onchange="numberHandler(this)"/>
                          <span class="input-group-text">.00</span>
                      </div>
                      <!--end::Input group-->
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="d-flex flex-column gap-1">
                      <label class="required fw-semibold fs-6">Voucher Price</label>
                      <div class="text-muted fs-7">Discounted price to promote voucher sale</div>
                      <div class="input-group mb-2">
                          <span class="input-group-text">{{ $partner_country_config->currency_sign }}</span>
                          <input type="text" class="form-control voucher-price" aria-label="Amount (to the nearest dollar)" name="voucher_price" onchange="numberHandler(this)"/>
                          <span class="input-group-text">.00</span>
                      </div>
                      <!--end::Input group-->
                    </div>
                  </div>

                </div>

              </div>

               <div class="card card-flush p-4">

                  <div class="card-title">
                     <div class="d-flex flex-column gap-3 mb-4">
                        <h2>Venue</h2>
                     </div>
                  </div>

                  <div class="row align-items-end">

                     @if($venue_data_arr)
                      @foreach($venue_data_arr as $key => $venue_data)
                      <!--begin::Col-->
                      <div class="col-md-6 mb-4">
                        <!--begin::Option-->
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center" for="flexCheckVenue1">

                          <!--begin::Radio-->
                          <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                            <input class="form-check-input voucher-venues" type="checkbox" name="venues[]" value="{{ $venue_data['id'] }}" />
                          </span>
                          <!--end::Radio-->
                          @if( !empty($venue_data['venue_meta']['featured']) )
                          <div class="quantity-icn ms-3">
                            <img src="{{ asset('/public/'. $venue_data['venue_meta']['featured']) }}">
                          </div>
                          @endif
                          <!--begin::Info-->
                          <span class="ms-3">
                            <h3 class="card-title align-items-start flex-column">
                              <span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ isset($venue_data['name']) ? $venue_data['name'] : "" }}</span>
                              <span class="text-muted d-block fw-light fs-7 mt-1">{{ isset($venue_data['venue_meta']['business_address']) ? $venue_data['venue_meta']['business_address'] : "" }}
                              </span>
                            </h3>
                          </span>
                          <!--end::Info-->

                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Col-->
                      @endforeach
                      @endif

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