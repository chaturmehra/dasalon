<div class="modal fade" id="kt_modal_scrollable22" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="fw-bold text-dark">Add Membership</h1>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">

        <!--begin::Scroll-->
        <div class="d-flex flex-column scroll-y me-n7 pe-7">

          <!--begin::Form-->
          <form class="form d-flex flex-column flex-lg-row" method="post" action="{{ url('partner/memberships/store') }}">
                  @csrf
            <!--begin::Aside column-->
            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-400px mb-7 me-lg-10">


              <!--begin::Status-->
              <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                  <!--begin::Card title-->
                  <div class="card-title">
                    <h2 class="required fs-3">Membership Status</h2>
                  </div>
                  <!--end::Card title-->
                  <div class="card-toolbar">
                    <label class="form-check form-switch form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" checked="checked" name="membership_status" required="required"/>
                    </label>
                  </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                  <!--begin::Description-->
                  <div class="text-muted fs-7">The service will not be available for online booking if disabled. Disabled services are available for walk-in or offline usage.</div>
                  <!--end::Description-->
                </div>
                <!--end::Card body-->
              </div>
              <!--end::Status-->


              <!--begin::Location-->
              <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                  <!--begin::Card title-->
                  <div class="card-title">
                    <div class="d-flex flex-column gap-1">
                      <h2 class="required fs-3">Create Membership - Locations</h2>
                      <span class="text-gray-400 fs-7">Service will be created at all chosen locations</span>
                    </div>
                  </div>
                  <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">

                  <div class="row">
                    @if($venue_data_arr)
                      @foreach($venue_data_arr as $key => $venue_data)
                      <!--begin::Col-->
                      <div class="col-md-12 mb-5">
                        <!--begin::Option-->
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center flex-wrap">

                         <!--begin::Radio-->
                         <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                          <input class="form-check-input" type="checkbox" name="venues[]" value="{{ $venue_data['id'] }}" />
                       </span>
                       <!--end::Radio-->

                       @if( !empty($venue_data['venue_meta']['featured']) )
                       <div class="quantity-icn ms-3">
                          <img src="{{ asset('/public/'. $venue_data['venue_meta']['featured']) }}">
                       </div>
                       @endif

                       <!--begin::Info-->
                       <span class="mt-3 w-100">
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
            <!--end::Card body-->
          </div>
          <!--end::Location-->


          <!--begin::Status-->
          <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
              <!--begin::Card title-->
              <div class="card-title">
                <h2 class="required fs-3">Preview</h2>
              </div>
              <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">

              <div class="d-flex flex-column gap-7 w-100 align-items-center">

                <div class="color_option">
                  <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-gray-800 mb-4">Membership color</span>
                  </h3>
                  <input type="hidden" name="membership_color" id="membership_color" value="blue">
                  <div class="select_voucher_color" data-qa="color-select-field">

                    <div data-qa="color-sample-blue" class="color-ind2 active">
                      <div class="color-ind-single blue" title="blue" onclick="clrChange2(this)">
                      </div>
                    </div>

                    <div data-qa="color-sample-dark" class="color-ind2">
                      <div class="color-ind-single dark" title="dark" onclick="clrChange2(this)">
                      </div>
                    </div>

                    <div data-qa="color-sample-green" class="color-ind2">
                      <div class="color-ind-single green" title="green" onclick="clrChange2(this)">
                      </div>
                    </div>

                    <div data-qa="color-sample-orange" class="color-ind2">
                      <div class="color-ind-single orange" title="orange" onclick="clrChange2(this)">
                      </div>
                    </div>

                    <div data-qa="color-sample-purple" class="color-ind2">
                      <div class="color-ind-single purple" title="purple" onclick="clrChange2(this)">
                      </div>
                    </div>

                  </div>

                </div>

                <div data-qa="voucher-preview-color-blue" class="email_preview_in6" id="clrbgdiv2">

                  <p class="pcls1 pcls2 pcls11" data-qa="code">Voucher code: 
                    <span class="">XXXXXX</span>
                  </p>

                  <button class="email_preview_in8" data-qa="book-now-button">
                    <div class="btndiv"></div>
                    <div class="btndiv2 mb-5">
                      <p class="pcls1 pcls2 pcls12">Book now</p>
                    </div>
                  </button>

                  <div class="email_preview_in9">
                    <p class="pcls1 pcls2 pcls13" data-qa="validity-period">Valid for 3 years</p>
                    <p class="pcls1 pcls2" data-qa="usage-limit-text">For multiple-use until redeemed</p>
                  </div>

                </div>

              </div>

            </div>
            <!--end::Card body-->
          </div>
          <!--end::Status-->

        </div>
        <!--end::Aside column-->

        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10 w-75">

          <div class="d-flex flex-column gap-7 gap-lg-10">

            <!--begin::General options-->
            <div class="card card-flush py-4">
              <!--begin::Card header-->
              <div class="card-header">
                <div class="card-title">
                  <h2 class="required fs-3">Membership name</h2>
                </div>
              </div>
              <!--end::Card header-->
              <!--begin::Card body-->
              <div class="card-body pt-0">
                <!--begin::Input group-->
                <div class="fv-row">
                  <!--begin::Input-->
                  <input type="text" name="membership_name" class="form-control mb-2" placeholder="Membership name" />
                  <!--end::Input-->
                  <!--begin::Description-->
                  <div class="text-muted fs-7">A membership name is required and recommended to be unique</div>
                  <!--end::Description-->
                </div>
                <!--end::Input group-->
              </div>
              <!--end::Card header-->

              <!--begin::Card header-->
              <div class="card-header">
                <div class="card-title">
                  <h2 class="required fs-3">Description</h2>
                </div>
              </div>
              <!--end::Card header-->
              <!--begin::Card body-->
              <div class="card-body pt-0">
                <!--begin::Input group-->
                <div class="fv-row">
                  <!--begin::Input-->
                  <textarea class="form-control mb-2" data-kt-autosize="true" placeholder="Description" name="membership_description"></textarea>
                  <!--end::Input-->
                  <!--begin::Description-->
                  <div class="text-muted fs-7">Provide a description to the membership for better understanding. This will be visible to online clients.</div>
                  <!--end::Description-->
                </div>
                <!--end::Input group-->
              </div>
              <!--end::Card header-->

            </div>
            <!--end::General options-->



            <!--begin::General options-->
            <div class="card card-flush py-4">
              <!--begin::Card header-->
              <div class="card-header">
                <div class="card-title">
                  <h2 class="fs-3">Membership detail</h2>
                </div>
              </div>
              <!--end::Card header-->
              <!--begin::Card body-->
              <div class="card-body pt-0">

                <div class="card-title">
                  <label class="required fw-semibold fs-6 mb-2">Validity</label>
                </div>
                <div>
                  <!--begin::Input-->
                  <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" data-dropdown-parent="#kt_modal_scrollable22" data-allow-clear="true" name="validity" required="required">
                   <option value="" selected disabled></option>
                   @foreach(voucherValidity() as $vKey => $validity)
                   <option value="{{ $vKey }}">{{ $validity }}</option>
                   @endforeach
                 </select>
                  <!--end::Input-->
                </div>

              </div>
              <!--end::Card header-->

            </div>
            <!--end::General options-->


            <!--begin::Pricing-->
            <div class="card card-flush py-4">

              <!--begin::Card header-->
              <div class="card-header">
                <div class="card-title">
                  <div class="d-flex flex-column gap-3 mb-4">
                    <h2>Pricing</h2>
                  </div>
                </div>
              </div>
              <!--end::Card header-->

              <!--begin::Card body-->
              <div class="card-body pt-0">

                <!--begin::Input group-->
                <div class="fv-row">

                  <div class="row">

                    <div class="col-sm-6">
                      <div class="d-flex flex-column gap-1">
                        <label class="required fw-semibold fs-6">Total value</label>
                        <div class="input-group mb-2">
                          <span class="input-group-text">{{ $partner_country_config->currency_sign }}</span>
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="total_value" />
                          <span class="input-group-text">.00</span>
                        </div>
                        <div class="text-muted fs-7">Overall value of services which members enjoy</div>
                        <!--end::Input group-->
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="d-flex flex-column gap-1">
                        <label class="required fw-semibold fs-6">Membership price</label>
                        <div class="input-group mb-2">
                          <span class="input-group-text">{{ $partner_country_config->currency_sign }}</span>
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="membership_price" />
                          <span class="input-group-text">.00</span>
                        </div>
                        <div class="text-muted fs-7">The discounted price which members pay to enjoy the services worth total value</div>
                        <!--end::Input group-->
                      </div>
                    </div>

                  </div>

                </div>
                <!--end::Input group-->

              </div>
              <!--end::Card body-->

            </div>
            <!--end::Pricing-->
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
          <!--end::Main column-->
        </form>
        <!--end::Form-->

      </div>
      <!--end::Scroll-->
    </div>

  </div>
</div>
</div>