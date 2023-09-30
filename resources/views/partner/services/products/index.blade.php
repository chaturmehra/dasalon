@extends('partner.layouts.auth.app')
@section('content') 

<!--Begin:::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
   <!--begin::Content wrapper-->
   <div class="d-flex flex-column flex-column-fluid">

      <!--begin::Toolbar-->
      <div id="kt_app_toolbar" class="app-toolbar pt-6 pb-0">
         <!--begin::Toolbar container-->
         <div id="kt_app_toolbar_container" class="app-container container-xl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
               <!--begin::Title-->
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Settings</h1>
               <!--end::Title-->
               <!--begin::Breadcrumb-->
               <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     <a href="{{ url('partner/dashboard') }}" class="text-muted text-hover-primary">Home</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     <a href="{{ route('services.index') }}" class="text-muted text-hover-primary">Services</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">Products</li>
                  <!--end::Item-->
               </ul>
               <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
         </div>
         <!--end::Toolbar container-->
      </div>
      <!--end::Toolbar-->


      <!--begin::Content-->
      <div id="kt_app_content" class="app-content flex-column-fluid">
         <!--begin::Content container-->
         <div id="kt_app_content_container" class="app-container container-xl">

            <!--begin::Navbar-->
            <div class="card mb-5 mb-xxl-8">
               <div class="card-body pt-9 pb-0">

                  <!--begin::Details-->
                  @if(session()->has('success'))
                  <div class="card-header display-message">
                     <div class="alert alert-success">
                        {{ session()->get('success') }}
                     </div>
                  </div>
                  @endif
                  @if(session()->has('error'))
                  <div class="card-header display-message">
                     <div class="alert alert-danger">
                        {{ session()->get('error') }}
                     </div>
                  </div>
                  @endif
                  @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
                  @endif
                        <div class="d-flex flex-wrap flex-sm-nowrap">

                           <!--begin::Info-->
                           
                           <div class="flex-grow-1">
                              <!--begin::Title-->
                              <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                   <!--begin::User-->
                                   <div class="d-flex flex-column">
                                       <!--begin::Name-->
                                       <div class="d-flex align-items-center mb-2">
                                           <a href="{{ route('products.index') }}" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Product</a>
                                           <a href="{{ route('products.index') }}"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>
                                       </div>
                                       <!--end::Name-->
                                       
                                   </div>
                                   <!--end::User-->

                               </div>
                              <!--end::Title-->

                              <!--begin::Stats-->
                              <div class="d-flex flex-wrap flex-stack">
                                   <!--begin::Wrapper-->
                                   <div class="d-flex flex-column flex-grow-1 pe-8">
                                       <!--begin::Stats-->
                                       <div class="d-flex flex-wrap">
                                           <!--begin::Stat-->
                                           <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                               <!--begin::Number-->
                                               <div class="d-flex align-items-center">
                                                   <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$" data-kt-initialized="1">$4,500</div>
                                               </div>
                                               <!--end::Number-->

                                               <!--begin::Label-->
                                               <div class="fw-semibold fs-6 text-gray-400">Earnings</div>
                                               <!--end::Label-->
                                           </div>
                                           <!--end::Stat-->

                                           <!--begin::Stat-->
                                           <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                               <!--begin::Number-->
                                               <div class="d-flex align-items-center">
                                                   <i class="ki-outline ki-arrow-down fs-3 text-danger me-2"></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="80" data-kt-initialized="1">80</div>
                                               </div>
                                               <!--end::Number-->

                                               <!--begin::Label-->
                                               <div class="fw-semibold fs-6 text-gray-400">Projects</div>
                                               <!--end::Label-->
                                           </div>
                                           <!--end::Stat-->

                                           <!--begin::Stat-->
                                           <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                               <!--begin::Number-->
                                               <div class="d-flex align-items-center">
                                                   <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>                                    <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">%60</div>
                                               </div>
                                               <!--end::Number-->                                

                                               <!--begin::Label-->
                                               <div class="fw-semibold fs-6 text-gray-400">Success Rate</div>
                                               <!--end::Label-->
                                           </div>
                                           <!--end::Stat-->
                                       </div>
                                       <!--end::Stats-->
                                   </div>
                                   <!--end::Wrapper-->

                                   
                               </div>
                              <!--end::Stats-->

                           </div>
                           <!--end::Info-->

                        </div>
                     <!--end::Details-->

                     @include('partner.services.tab')

               </div>
            </div>
            <!--end::Navbar-->

            <div class="card card-flush">

               <div class="card-body pb-0">

                  <!--begin::Wrapper-->
                  <div class="d-flex flex-column px-9">
                     <!--begin::Section-->
                     <div class="pt-10 pb-0">
                        <!--begin::Title-->
                        <h3 class="text-dark text-center fw-bold">No Products added</h3>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="text-center text-gray-600 fw-semibold pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        </div>
                        <!--end::Text-->
                        <!--begin::Action-->
                        <div class="text-center mt-5 mb-9">
                           <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable22">Add Product</a>
                        </div>
                        <!--end::Action-->
                     </div>
                     <!--end::Section-->
                     <!--begin::Illustration-->
                     <div class="text-center px-4">
                        <img class="mw-100 mh-200px" alt="image" src="{{asset('/public/assets/media/illustrations/sketchy-1/1.png')}}" />
                     </div>
                     <!--end::Illustration-->
                  </div>
                  <!--end::Wrapper-->

               </div>

            </div>

            <!--begin::Products-->
            <div class="card card-flush mt-8">

               <div class="card-header">
                  <h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Manage Product</h2>
               </div>

               <!--begin::Card header-->
               <div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-5">

                  <!--begin::Card title-->
                  <div class="card-title">
                     <!--begin::Search-->
                     <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                        <input type="text" data-kt-filter-subtable="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
                     </div>
                     <!--end::Search-->

                  </div>
                  <!--end::Card title-->

                  <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                     <div class="card-toolbar">
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">

                           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable22">
                               <i class="ki-duotone ki-plus fs-2"></i>Add Product
                           </button>

                        </div>
                     </div>
                  </div>

               </div>
               <!--end::Card header-->

               <!--begin::Card body-->
               <div class="card-body pt-0">

                  <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_docs_datatable_subtable1">
                     <!--begin::Table head-->
                     <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                           <th>Product</th>
                           <th>Brand</th>
                           <th>Supplier</th>
                           <th>Pack Size</th>
                           <th>Supply Price</th>
                           <th>Retail Price</th>
                           <th>Stock</th>
                           <th>Stock Level</th>
                           <th class="text-end">Action</th>
                        </tr>
                        <!--end::Table row-->
                     </thead>
                     <!--end::Table head-->


                     <!--begin::Table body-->
                     <tbody class="fw-bold text-gray-600 alntop">
                        @if(!empty($productLists))
                          @foreach($productLists as $key => $productList)
                          @php 
                             $status = $productList['status']; 
                             if($status){
                                $text        = "Enabled";
                                $class       = "success";
                                $statusVal   = 0;
                                $statusText  = "Disable";
                             }else{
                                $text        = "Disabled";
                                $class       = "danger";
                                $statusVal   = 1;
                                $statusText  = "Enable";
                             }

                             $full_name = $productList['product_name'];
                             $name_parts = explode(' ', $full_name);
                             $shortName = '';
                             foreach ($name_parts as $part) {
                               $shortName .= substr($part, 0, 1);
                             }

                          @endphp
                        <tr>
                           <td>
                              <a href="javascript:void(0)" id="kt_drawer_example_permanent_toggle2" class="get-product-detail-by-id" product-id="{{ $productList['id'] }}">
                                 <div class="d-flex gap-3">
                                    <div class="prdimg">
                                       @if( !empty($productList['product_image']) )
                                       <img src="{{asset('/public'.$productList['product_image'])}}" alt="{{ $productList['product_name'] }}" />
                                       @else
                                       <span class="symbol-label bg-danger text-inverse-danger fw-bold">{{ $shortName }}</span>
                                       @endif
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                       <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $productList['product_name'] }}</span>
                                       <span class="text-muted fw-semibold text-muted d-block fs-7">
                                          {{ $productList['product_category'] }}
                                       </span>
                                    </div>
                                 </div>
                              </a>
                           </td>
                           <td>{{ $productList['brand_name'] }}</td>
                           <td>{{ $productList['supplier'] }}</td>
                           <td></td>
                           <td>
                              <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $partner_country_config->currency_sign }}{{ $productList['supply_price'] }}</span>
                           </td>
                           <td>
                              <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $partner_country_config->currency_sign }}{{ $productList['selling_price'] }}</span>
                           </td>
                           <td></td>
                           <td></td>
                           <td>
                              <div class="d-flex gap-3 align-items-center justify-content-end">
                                 <a href="javascript:void(0)" id="kt_drawer_example_permanent_toggle2" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 get-product-detail-by-id" product-id="{{ $productList['id'] }}">Edit</a>
                                 <a href="javascript:void(0)" class="delete-product" product-id="{{ $productList['id'] }}">
                                    <i class="bi bi-trash3-fill fs-2x clrred"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        @endforeach
                        @endif


                     </tbody>
                     <!--end::Table body-->
                  </table>

               </div>
               <!--end::Card body-->

            </div>
            <!--end::Products-->

         </div>
         <!--end::Content container-->
      </div>
      <!--end::Content-->
      

   </div>
   <!--end::Content wrapper-->
</div>
<!--end:::Main-->

<!--begin::Modals-->

@include('partner.services.products.modal.add')
@include('partner.services.products.modal.edit')
<!--end::Modals-->

@endsection
@push('scripts')
<script type="text/javascript">
   var barnd_list = ['Brand1', 'Brand2', 'Brand3', 'Brand4', 'Brand5', 'Brand6', 'Brand7', 'Brand8', 'Brand9', 'Brand10'];
   var product_cat_list = ['Product Cat1', 'Product Cat2', 'Product Cat3', 'Product Cat4', 'Product Cat5', 'Product Cat6', 'Product Cat7', 'Product Cat8', 'Product Cat9', 'Product Cat10'];
   var product_type_list = ['Product type1', 'Product type2', 'Product type3', 'Product type4', 'Product type5', 'Product type6', 'Product type7', 'Product type8', 'Product type9', 'Product type10'];
   var supplier_list = ['Supplier1', 'Supplier2', 'Supplier3', 'Supplier4', 'Supplier5', 'Supplier6', 'Supplier7', 'Supplier8', 'Supplier9', 'Supplier10'];


   var input_product_brand = document.querySelector("#kt_tagify_product_brand");
   var input_product_cat = document.querySelector("#kt_tagify_product_cat");
   var input_product_type = document.querySelector("#kt_tagify_product_type");
   var input_supplier = document.querySelector("#kt_tagify_supplier");


   var input_product_brand2 = document.querySelector("#kt_tagify_product_brand2");
   var input_product_cat2 = document.querySelector("#kt_tagify_product_cat2");
   var input_product_type2 = document.querySelector("#kt_tagify_product_type2");
   var input_supplier2 = document.querySelector("#kt_tagify_supplier2");


   var input_product_brand3 = document.querySelector("#kt_tagify_product_brand3");
   var input_product_cat3 = document.querySelector("#kt_tagify_product_cat3");
   var input_product_type3 = document.querySelector("#kt_tagify_product_type3");
   var input_supplier3 = document.querySelector("#kt_tagify_supplier3");
   

   function productDrp(input, list) {
      new Tagify(input, {
          whitelist: list,
          maxTags: 1,
          dropdown: {
              maxItems: 40,           // <- mixumum allowed rendered suggestions
              classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
              enabled: 0,             // <- show suggestions on focus
              closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
          }
      });
   }

   productDrp(input_product_brand, barnd_list);
   productDrp(input_product_cat, product_cat_list);
   productDrp(input_product_type, product_type_list);
   productDrp(input_supplier, supplier_list);

   productDrp(input_product_brand2, barnd_list);
   productDrp(input_product_cat2, product_cat_list);
   productDrp(input_product_type2, product_type_list);
   productDrp(input_supplier2, supplier_list);

   productDrp(input_product_brand3, barnd_list);
   productDrp(input_product_cat3, product_cat_list);
   productDrp(input_product_type3, product_type_list);
   productDrp(input_supplier3, supplier_list);
</script>

<script type="text/javascript">

   function showstockquant(e) {
      let stockQuant = document.querySelectorAll('.stock-quant');
      let lowStQty = document.querySelector('.low-stock-quant')
      for(let i=0; i<stockQuant.length; i++) {
         if(e.checked) {
            stockQuant[i].classList.remove('d-none');
            lowStQty.classList.remove('d-none');
         }
         else {
            stockQuant[i].classList.add('d-none');
            lowStQty.classList.add('d-none');
         }
      }

   }


   let quantity = ['ml', 'l', 'Fl. oz.', 'g', 'kg', 'gal', 'oz', 'lb', 'cm', 'ft', 'in']
   function chngunit(e) {
      if(e.value == '12') {
         e.closest('.col-6.fv-row').nextElementSibling.classList.add('d-none');
         e.closest('.col-6.fv-row').nextElementSibling.querySelector('input[type="text"]').value='';
         
      }  
      for(let i=0;i<quantity.length; i++){
         if(i == e.value-1){
            if(e.closest('.col-6.fv-row').nextElementSibling.classList.contains('d-none')) {
               e.closest('.col-6.fv-row').nextElementSibling.classList.remove('d-none');  
            }
            e.closest('.col-6.fv-row').nextElementSibling.querySelector('.input-group-text').textContent=quantity[i];
            e.closest('.col-6.fv-row').nextElementSibling.querySelector('input[type="text"]').value='';
            e.closest('.col-6.fv-row').nextElementSibling.querySelector('input[type="text"]').placeholder='0.00';
         }
      }
   }
</script>
<script src="{{asset('/public/assets/js/partner/products.js')}}" type="text/javascript"></script>
@endpush