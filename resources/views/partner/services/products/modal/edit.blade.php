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
        <h2><span class="product-name"></span></h2>
        <span class="text-gray-400 fs-6"><span class="product-description"></span></span>
      </div>
    </div>
    <!--end::Title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
      <div class="d-flex gap-3 me-3">
        <span class="text-gray-800 fs-6">Status:</span>
        <span class="text-gray-400 fs-6"><span class="product-status"></span></span>
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
    <form class="form d-flex flex-column flex-lg-row" id="serviceeditform" enctype="multipart/form-data" method="post" action="{{ url('partner/products/update') }}">
      @csrf
      <input type="hidden" name="product_id" id="partner_product_id">
      <div class="d-flex flex-column gap-7 gap-lg-10">

        <div class="row">

          <div class="col-md-4">

            <!--begin::Thumbnail settings-->
            <div class="card card-flush py-4">
              <!--begin::Card header-->
              <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title">
                  <h2>Product image</h2>
                </div>
                <!--end::Card title-->
              </div>
              <!--end::Card header-->
              <!--begin::Card body-->
              <div class="card-body text-center pt-0">
                <!--begin::Image input-->
                <!--begin::Image input placeholder-->
                <style>.image-input-placeholder { background-image: url({{ asset('/public/assets/svg/files/blank-image.svg') }}"); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url({{ asset('/public/assets/svg/files/blank-image-dark.svg') }}"); }</style>
                <!--end::Image input placeholder-->
                <!--begin::Image input-->
                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                  <!--begin::Preview existing avatar-->
                  <div class="image-input-wrapper w-150px h-150px product-image"></div>
                  <!--end::Preview existing avatar-->
                  <!--begin::Label-->
                  <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-pencil fs-7">
                      <span class="path1"></span>
                      <span class="path2"></span>
                    </i>
                    <!--end::Icon-->
                    <!--begin::Inputs-->
                    <input type="file" name="product_image" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="avatar_remove" />
                    <input type="hidden" name="old_product_image" id="old_look_image" />
                    <!--end::Inputs-->
                  </label>
                  <!--end::Label-->
                  <!--begin::Cancel-->
                  <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                    <i class="ki-duotone ki-cross fs-2">
                      <span class="path1"></span>
                      <span class="path2"></span>
                    </i>
                  </span>
                  <!--end::Cancel-->
                  <!--begin::Remove-->
                  <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                    <i class="ki-duotone ki-cross fs-2">
                      <span class="path1"></span>
                      <span class="path2"></span>
                    </i>
                  </span>
                  <!--end::Remove-->
                </div>
                <!--end::Image input-->
                <!--begin::Description-->
                <div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                <!--end::Description-->
              </div>
              <!--end::Card body-->
            </div>
            <!--end::Thumbnail settings-->

          </div>

          <div class="col-md-8">

            <div class="card card-flush p-4">

              <div class="row align-items-end">

                <div class="col-md-12 my-3">

                  <div class="card-title">
                    <h2 class="required fs-3">Brand</h2>
                  </div>

                  <!--begin::Input-->
                  <input class="form-control brand-name" name="brand_name" value="Brand4" id="kt_tagify_product_brand3" placeholder="select or add brand" />
                  <!--end::Input-->

                </div>

                <div class="col-md-12 my-3">

                  <!--begin::Card title-->
                  <div class="card-title">
                    <h2 class="required fs-3">Category</h2>
                  </div>
                  <!--end::Card title-->

                  <!--begin::Input-->
                  <input class="form-control product-category" name="product_category" value="Product Cat2" id="kt_tagify_product_cat3" placeholder="select or add Category" />
                  <!--end::Input-->

                </div>

                <div class="col-md-12 my-3">

                  <!--begin::Card title-->
                  <div class="card-title">
                    <h2 class="required fs-3">Product Type</h2>
                  </div>
                  <!--end::Card title-->

                  <!--begin::Input-->
                  <input class="form-control product-type" name="product_type" value="Product type5" id="kt_tagify_product_type3" placeholder="select or add Product Type" />
                  <!--end::Input-->

                </div>

              </div>

            </div>

          </div>

        </div>


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
                    <label class="required fw-semibold fs-6">Supply price</label>
                    <div class="input-group mb-2">
                      <span class="input-group-text">{{ $partner_country_config->currency_sign }}</span>
                      <input type="text" class="form-control supply-price" aria-label="Amount (to the nearest dollar)" onchange="numberHandler(this)" name="supply_price"/>
                      <span class="input-group-text">.00</span>
                    </div>
                    <div class="text-muted fs-7">Price at which product is purchased</div>
                    <!--end::Input group-->
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="d-flex flex-column gap-1">
                    <label class="required fw-semibold fs-6">Selling Price</label>
                    <div class="input-group mb-2">
                      <span class="input-group-text">{{ $partner_country_config->currency_sign }}</span>
                      <input type="text" class="form-control selling-price" aria-label="Amount (to the nearest dollar)" onchange="numberHandler(this)" name="selling_price"/>
                      <span class="input-group-text">.00</span>
                    </div>
                    <div class="text-muted fs-7">Price at which product is offered to customer</div>
                    <!--end::Input group-->
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="d-flex flex-column gap-1">
                    <label class="required fw-semibold fs-6">Markup Price</label>
                    <div class="input-group mb-2">
                      <span class="input-group-text">{{ $partner_country_config->currency_sign }}</span>
                      <input type="text" class="form-control markup-price" aria-label="Amount (to the nearest dollar)" onchange="numberHandler(this)" name="markup_price"/>
                      <span class="input-group-text">.00</span>
                    </div>
                    <div class="text-muted fs-7">Price at which product is offered to customer</div>
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


        <!--begin::Pricing-->
        <div class="card card-flush py-4">

          <!--begin::Card header-->
          <div class="card-header">
            <div class="card-title">
              <div class="d-flex flex-column gap-3 mb-4">
                <h2>Inventory</h2>
                <span class="text-gray-400 fs-6">Manage stock level of this product through da Salon</span>
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
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6">SKU (Stock Keeping Unit)</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="sku" class="form-control sku" placeholder="SKU" />
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="d-flex flex-column gap-1">
                    <label class="required fw-semibold fs-6">Supplier</label>
                    <!--begin::Input-->
                    <input class="form-control supplier" name="supplier" value="Supplier2" id="kt_tagify_supplier3" placeholder="select or add Supplier"/>
                  </div>
                </div>

              </div>

            </div>
            <!--end::Input group-->

          </div>
          <!--end::Card body-->

        </div>
        <!--end::Pricing-->


        <div class="card card-flush py-4">

          <!--begin::Card header-->
          <div class="card-header">
            <div class="card-title">
              <div class="d-flex flex-column gap-3 mb-4">
                <h2>Stock Management</h2>
              </div>
            </div>
          </div>
          <!--end::Card header-->

          <!--begin::Card body-->
          <div class="card-body pt-0">

            <!--begin::Input group-->
            @if($venue_data_arr)
            @foreach($venue_data_arr as $key => $venue_data)
            <div class="fv-row @if($key !=0) mt-10 @endif">

              <div class="d-flex align-items-center gap-4 mb-5">
                @if( !empty($venue_data['venue_meta']['featured']) )
                <div class="quantity-icn">
                  <img src="{{ asset('/public/'. $venue_data['venue_meta']['featured']) }}">
                </div>
                @endif
                <h3 class="card-title align-items-start flex-column">
                  <input type="hidden" name="stock_management[venue_id][{{ $venue_data['id'] }}][]" class="venue_id" value="{{ $venue_data['id'] }}" class="venue-id">
                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ isset($venue_data['name']) ? $venue_data['name'] : "" }}</span>
                  <span class="text-muted d-block fw-light fs-7 mt-1">{{ isset($venue_data['venue_meta']['business_address']) ? $venue_data['venue_meta']['business_address'] : "" }}
                  </span>
                </h3>
              </div>

              <div class="row">

                <div class="col-sm-4">
                  <!--begin::Label-->
                  <label class="required fw-semibold fs-6 mb-2">Current stock quantity</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="text" name="stock_management[stock_quantity][{{ $venue_data['id'] }}][]" class="form-control stock-quantity" placeholder="0" onchange="numberHandler(this)"/>
                  <!--end::Input-->
                </div>

                <div class="col-sm-4">
                  <!--begin::Label-->
                  <label class="required fw-semibold fs-6 mb-2">Low stock level</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="text" name="stock_management[stock_level][{{ $venue_data['id'] }}][]" class="form-control stock-level" placeholder="0" onchange="numberHandler(this)"/>
                  <!--end::Input-->
                </div>

                <div class="col-sm-4">
                  <!--begin::Label-->
                  <label class="required fw-semibold fs-6 mb-2">Reorder qty</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="text" name="stock_management[reorder_qty][{{ $venue_data['id'] }}][]" class="form-control reorder-qty" placeholder="0" onchange="numberHandler(this)"/>
                  <!--end::Input-->
                </div>

              </div>

            </div>
            @endforeach
            @endif
            <!--end::Input group-->

          </div>
          <!--end::Card body-->

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