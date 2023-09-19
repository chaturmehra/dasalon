<div class="modal fade" id="kt_modal_scrollable22" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="fw-bold text-dark">Add Service(At Venue)</h1>

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
          <form class="form d-flex flex-column flex-lg-row" method="post" action="{{ url('partner/service/store') }}">
            @csrf
            <input type="hidden" name="service_type" value="at_venue">
            <!--begin::Aside column-->
            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-400px mb-7 me-lg-10">

              <!--begin::Status-->
              <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                  <!--begin::Card title-->
                  <div class="card-title">
                    <h2 class="required fs-3">Category</h2>
                  </div>
                  <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                  <!--begin::Select2-->
                  <select class="form-select mb-2 service-category" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="category" required="required">
                    <option></option>
                    @if( !empty($categories) )
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                    @endif
                  </select>
                  <!--end::Select2-->
                  <!--begin::Description-->
                  <div class="text-muted fs-7">List of service category</div>
                  <!--end::Description-->
                </div>
                <!--end::Card body-->

                <!--begin::Card header-->
                <div class="card-header">
                  <!--begin::Card title-->
                  <div class="card-title">
                    <h2 class="required fs-3">Sub category</h2>
                  </div>
                  <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                  <!--begin::Select2-->
                  <select class="form-select mb-2" id="add-service-sub-category" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="sub_category" required="required">
                    
                  </select>
                  <!--end::Select2-->
                  <!--begin::Description-->
                  <div class="text-muted fs-7">List of service category</div>
                  <!--end::Description-->
                </div>
                <!--end::Card body-->
              </div>
              <!--end::Status-->


              <!--begin::Status-->
              <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                  <!--begin::Card title-->
                  <div class="card-title">
                    <h2 class="required fs-3">Service Status</h2>
                  </div>
                  <!--end::Card title-->
                  <div class="card-toolbar">
                    <label class="form-check form-switch form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" name="service_status" checked="checked" />
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
                      <h2 class="required fs-3">Create Service - Locations</h2>
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

                        <div class="quantity-icn ms-3">
                          <img src="{{ asset('/public/'. $venue_data['venue_meta']['featured']) }}">
                        </div>

                        <!--begin::Info-->
                        <span class="mt-3 w-100">
                          <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ $venue_data['name'] }}</span>
                            <span class="text-muted d-block fw-light fs-7 mt-1">{{ $venue_data['venue_meta']['business_address'] }}
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
                  <h2 class="required fs-3">Service name</h2>
                </div>
              </div>
              <!--end::Card header-->
              <!--begin::Card body-->
              <div class="card-body pt-0">
                <!--begin::Input group-->
                <div class="fv-row">
                  <!--begin::Input-->
                  <input class="form-control d-flex align-items-center" placeholder="Add service" id="kt_tagify_service" name="service_name" required="required"/>
                  <!--end::Input-->
                  <!--begin::Description-->
                  <div class="text-muted fs-7 mt-1">A service name is required and recommended to be unique</div>
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
                  <textarea class="form-control mb-2" data-kt-autosize="true" placeholder="Description" name="description" required="required"></textarea>
                  <!--end::Input-->
                  <!--begin::Description-->
                  <div class="text-muted fs-7">Provide a description to the service for better understanding. This will be visible to online clients.</div>
                  <!--end::Description-->
                </div>
                <!--end::Input group-->
              </div>
              <!--end::Card header-->

            </div>
            <!--end::General options-->

            <!--begin::Pricing-->
            <div class="card card-flush py-4">

              <!--begin::Card header-->
              <div class="card-header">
                <div class="card-title">
                  <h2 class="required fs-3">Gender</h2>
                </div>
              </div>
              <!--end::Card header-->
              <!--begin::Card body-->
              <div class="card-body pt-0">

                <!--begin::Input group-->
                <div class="fv-row mb-2">
                  <!--begin::Row-->
                  <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9">
                    <!--begin::Col-->
                    <div class="col">
                      <!--begin::Option-->
                      <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
                        <!--begin::Radio-->
                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                          <input class="form-check-input" type="radio" name="gender_option" value="Female" checked="checked" />
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
                    <div class="col">
                      <!--begin::Option-->
                      <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
                        <!--begin::Radio-->
                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                          <input class="form-check-input" type="radio" name="gender_option" value="Male" />
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
                    <div class="col">
                      <!--begin::Option-->
                      <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
                        <!--begin::Radio-->
                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                          <input class="form-check-input" type="radio" name="gender_option" value="Unisex" />
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
                  <!--end::Row-->
                </div>
                <!--end::Input group-->

              </div>
              <!--end::Card body-->

              <!--begin::Card header-->
              <div class="card-header">
                <div class="card-title">
                  <h2 class="required fs-3">Duration</h2>
                </div>
              </div>
              <!--end::Card header-->

              <!--begin::Card body-->
              <div class="card-body pt-0">

                <!--begin::Input group-->
                <div class="fv-row">

                  <!--begin::Tax-->
                  <div class="d-flex flex-wrap gap-5">
                    <!--begin::Input group-->
                    <div class="fv-row w-100 flex-md-root">
                      <!--begin::Input-->
                      <input type="text" class="form-control mb-2" placeholder="Duration" name="duration" required="required"/>
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                  </div>
                  <!--end:Tax-->

                </div>
                <!--end::Input group-->

              </div>
              <!--end::Card body-->

            </div>
            <!--end::Pricing-->


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

                    <div class="col-sm-4">
                      <div class="d-flex flex-column gap-1">
                        <label class="required fw-semibold fs-6">Walk-in price</label>
                        <div class="input-group mb-2">
                          <span class="input-group-text">$</span>
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="walk_in_price" required="required"/>
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
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="online_price" required="required"/>
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
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="off_peak_price" required="required"/>
                          <span class="input-group-text">.00</span>
                        </div>
                        <div class="text-muted fs-7">A discounted price, available to people who walk-in during the salon's off peak hours.</div>
                        <!--end::Input group-->
                      </div>
                    </div>

                  </div>

                </div>
                <!--end::Input group-->

              </div>
              <!--end::Card body-->

            </div>

            <div class="card card-flush py-4">

              <!--begin::Card header-->
              <div class="card-header">
                <div class="card-title">
                  <div class="d-flex flex-column gap-3">
                    <h2>Staff pricing</h2>
                    <span class="text-muted fs-7">Add staff to service, so that customer can book online appointment with their choice of staff</span>
                    <span class="text-muted fs-7">A premium price for a service, available to clients who request a specific stylist who specializes in a particular service (optional)</span>
                  </div>
                </div>
              </div>
              <!--end::Card header-->

              <!--begin::Card body-->
              <div class="card-body pt-0">

                <!--begin::Input group-->
                <div class="fv-row">

                  <!--begin::Input group-->
                  <div  data-kt-ecommerce-catalog-add-category="auto-options">
                    <!--begin::Repeater-->
                    <div id="kt_ecommerce_add_category_conditions">
                      <!--begin::Form group-->
                      <div class="form-group">
                        <div data-repeater-list="kt_ecommerce_add_category_conditions" class="d-flex flex-column gap-0">
                          <div data-repeater-item="" class="form-group d-flex align-items-end gap-5">


                            <div class="row mt-7">

                              <div class="col-sm-4">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Staff</label>
                                <div class="form-floating border rounded">
                                  <select class="form-select form-select-transparent kt_docs_select2_users" data-placeholder="Select an option" data-dropdown-parent="#kt_modal_scrollable22" name="staff_pricing['staff_id'][]">
                                    <option></option>
                                    @if( !empty($getStaff) )
                                      @foreach($getStaff as $staff)
                                        <option value="{{ $staff->user_id }}" data-kt-select2-user="{{ asset('/public/'.$staff->profile_image) }}">{{ $staff->name }}</option>
                                      @endforeach
                                    @endif
                                  </select>
                                </div>

                              </div>  

                              <div class="col-sm-4">
                                <div class="d-flex flex-column gap-1">
                                  <label class="fw-semibold fs-6 mb-2">Online Price</label>
                                  <div class="input-group mb-0">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="staff_pricing['online_price'][]" />
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
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="staff_pricing['off_peak_price'][]" />
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