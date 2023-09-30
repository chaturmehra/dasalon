<div class="modal fade" id="kt_modal_scrollable22" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
 <div class="modal-dialog modal-xl">
     <div class="modal-content">
         <div class="modal-header">
             <h1 class="fw-bold text-dark">Add Product</h1>

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
            <form class="form d-flex flex-column flex-lg-row" method="post" action="{{ url('partner/products/store') }}" enctype="multipart/form-data">
            @csrf
               <!--begin::Aside column-->
               <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-400px mb-7 me-lg-10">

                  <!--begin::Thumbnail settings-->
                  <div class="card card-flush py-4">
                     <!--begin::Card header-->
                     <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                           <h2>Add Product Image</h2>
                        </div>
                        <!--end::Card title-->
                     </div>
                     <!--end::Card header-->
                     <!--begin::Card body-->
                     <div class="card-body text-center pt-0">
                        <!--begin::Image input-->
                        <!--begin::Image input placeholder-->
                        <style>.image-input-placeholder { background-image: url({{asset('/public/assets/svg/files/blank-image.svg')}}"); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url({{asset('/public/assets/svg/files/blank-image-dark.svg')}}"); }</style>
                        <!--end::Image input placeholder-->
                        <!--begin::Image input-->
                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                           <!--begin::Preview existing avatar-->
                           <div class="image-input-wrapper w-150px h-150px"></div>
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
                  
                  
                  <!--begin::Status-->
                  <div class="card card-flush py-4">
                     <!--begin::Card header-->
                     <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                           <h2 class="required fs-3">Brand name</h2>
                        </div>
                        <!--end::Card title-->
                     </div>
                     <!--end::Card header-->
                     <!--begin::Card body-->
                     <div class="card-body pt-0">
                        <!--begin::Input-->
                        <input class="form-control" name="brand_name" id="kt_tagify_product_brand2" placeholder="select or add brand" />
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7 mt-3">List of Brands</div>
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
                           <h2 class="required fs-3">Product Category</h2>
                        </div>
                        <!--end::Card title-->
                     </div>
                     <!--end::Card header-->
                     <!--begin::Card body-->
                     <div class="card-body pt-0">
                        <!--begin::Input-->
                        <input class="form-control" name="product_category" id="kt_tagify_product_cat2" placeholder="select or add Category" />
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7 mt-3">List of product category</div>
                        <!--end::Description-->
                     </div>
                     <!--end::Card body-->

                     <!--begin::Card header-->
                     <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                           <h2 class="required fs-3">Product type</h2>
                        </div>
                        <!--end::Card title-->
                     </div>
                     <!--end::Card header-->
                     <!--begin::Card body-->
                     <div class="card-body pt-0">
                        <!--begin::Input-->
                        <input class="form-control" name="product_type" id="kt_tagify_product_type2" placeholder="select or add Product Type" />
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7 mt-3">List of Product type</div>
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
                           <h2 class="required fs-3">Product available</h2>
                        </div>
                        <!--end::Card title-->
                        <div class="card-toolbar">
                           <label class="form-check form-switch form-check-custom form-check-solid">
                               <input class="form-check-input" type="checkbox" name="product_status" checked="checked" />
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
                              <h2 class="required fs-3">Product name</h2>
                           </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <!--begin::Input-->
                           <input type="text" class="form-control mb-2" placeholder="Product name" name="product_name" required="required" />
                           <!--end::Input-->
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
                              <h2 class="required fs-3">Measure</h2>
                           </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">

                           <div class="row align-items-end">
                              <div class="col-6 fv-row">
                                 <!--begin::Input group-->
                                 <div class="fv-row">
                                    <!--begin::Input-->
                                    <select aria-label="Quantity" data-control="select2" data-placeholder="Milliliters (ml)" class="form-select" onchange="chngunit(this)" name="measure" required="required">
                                       <option value="" selected disabled></option>
                                       @foreach(productMeasures() as $pKey => $measure)
                                       <option value="{{ $pKey }}">{{ $measure }}</option>
                                       @endforeach
                                    </select>
                                    <!--end::Input-->
                                 </div>
                                 <!--end::Input group-->
                              </div>
                              <div class="col-6 fv-row">
                                 <!--begin::Input group-->
                                 <div class="fv-row">
                                    <div class="input-group">
                                       <span class="input-group-text" id="basic-addon1">ml</span>
                                       <input type="text" class="form-control" placeholder="0.00" aria-label="Username" aria-describedby="basic-addon1" name="measure_value" onchange="numberHandler(this)" required="required"/>
                                    </div>
                                 </div>
                              </div>
                           </div>

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
                                       <label class="required fw-semibold fs-6">Supply price</label>
                                       <div class="input-group mb-2">
                                           <span class="input-group-text">{{ $partner_country_config->currency_sign }}</span>
                                           <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" onchange="numberHandler(this)" name="supply_price"  required="required"/>
                                           <span class="input-group-text">.00</span>
                                       </div>
                                       <div class="text-muted fs-7">Unit price at which product is purchased</div>
                                       <!--end::Input group-->
                                    </div>
                                 </div>

                                 <div class="col-sm-4">
                                    <div class="d-flex flex-column gap-1">
                                       <label class="required fw-semibold fs-6">Selling Price</label>
                                       <div class="input-group mb-2">
                                           <span class="input-group-text">{{ $partner_country_config->currency_sign }}</span>
                                           <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" onchange="numberHandler(this)" name="selling_price" required="required"/>
                                           <span class="input-group-text">.00</span>
                                       </div>
                                       <div class="text-muted fs-7">Unit price at which product is offered to customer</div>
                                       <!--end::Input group-->
                                    </div>
                                 </div>

                                 <div class="col-sm-4">
                                    <div class="d-flex flex-column gap-1">
                                       <label class="required fw-semibold fs-6">Markup Price</label>
                                       <div class="input-group mb-2">
                                           <span class="input-group-text">{{ $partner_country_config->currency_sign }}</span>
                                           <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" onchange="numberHandler(this)" name="markup_price"  required="required"/>
                                           <span class="input-group-text">.00</span>
                                       </div>
                                       <div class="text-muted fs-7">Margin gained by selling unit quantity</div>
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
                                       <input type="text" name="sku" class="form-control" placeholder="SKU" required="required"/>
                                    </div>
                                 </div>

                                 <div class="col-sm-6">
                                    <div class="d-flex flex-column gap-1">
                                       <label class="required fw-semibold fs-6">Supplier</label>
                                       <!--begin::Input-->
                                       <input class="form-control" name="supplier" value="supplier" id="kt_tagify_supplier2" placeholder="select or add Supplier" />
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
                                    <input type="hidden" name="stock_management[venue_id][{{ $venue_data['id'] }}][]" class="venue_id" value="{{ $venue_data['id'] }}">
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
                                    <input type="text" name="stock_management[stock_quantity][{{ $venue_data['id'] }}][]" class="form-control" placeholder="0" onchange="numberHandler(this)"/>
                                    <!--end::Input-->
                                 </div>

                                 <div class="col-sm-4">
                                    <!--begin::Label-->
                                    <label class="required fw-semibold fs-6 mb-2">Low stock level</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="stock_management[stock_level][{{ $venue_data['id'] }}][]" class="form-control" placeholder="0" onchange="numberHandler(this)"/>
                                    <!--end::Input-->
                                 </div>
                                 
                                 <div class="col-sm-4">
                                    <!--begin::Label-->
                                    <label class="required fw-semibold fs-6 mb-2">Reorder qty</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="stock_management[reorder_qty][{{ $venue_data['id'] }}][]" class="form-control" placeholder="0" onchange="numberHandler(this)"/>
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