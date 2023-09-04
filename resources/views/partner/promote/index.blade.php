@extends('partner.layouts.auth.app')
@section('content') 
<!--Begin:::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
   <!--begin::Content wrapper-->
   <div class="d-flex flex-column flex-column-fluid">


      <!--begin::Toolbar-->
      <div id="kt_app_toolbar" class="app-toolbar pt-6 pb-0">
         <!--begin::Toolbar container-->
         <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
               <!--begin::Title-->
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Promote</h1>
               <!--end::Title-->
               <!--begin::Breadcrumb-->
               <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     <a href="/dasalon/partners/home.html" class="text-muted text-hover-primary">Home</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">Promote</li>
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
                  <div class="d-flex flex-wrap flex-sm-nowrap">

                     <!--begin::Info-->
                     <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                         <!--begin::User-->
                         <div class="d-flex flex-column">
                           <!--begin::Name-->
                           <div class="d-flex align-items-center mb-2">
                             <a href="promote.html" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Promote</a>
                             <a href="promote.html"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>
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

   <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
      <li class="nav-item mt-2">
       <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="promote.html">
         Promote                   
      </a>
   </li>
   <!--end::Nav item-->
   <!--begin::Nav item-->
   <li class="nav-item mt-2">
    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="promocode.html">
      Promo Code                    
   </a>
</li>
<!--end::Nav item-->
<!--begin::Nav item-->
<li class="nav-item mt-2">
 <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="digital-promotion.html">
   Digital Promotion                   
</a>
</li>
<!--end::Nav item-->

</ul>

</div>
</div>
<!--end::Navbar-->

<div class="row">

   <div class="col-lg-3 col-md-4 col-sm-6 my-3">

      <!--begin::Engage widget 1-->
      <div class="card h-md-100" dir="ltr">
         <!--begin::Body-->
         <div class="card-body d-flex flex-column flex-center">
            <!--begin::Heading-->
            <div class="mb-2">
               <!--begin::Title-->
               <h1 class="fw-semibold text-gray-800 text-center lh-lg">Promote My Business</h1>
               <!--end::Title-->
               <!--begin::Illustration-->
               <div class="py-10 text-center">
                  <img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="" />
                  <img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="" />
               </div>
               <!--end::Illustration-->
            </div>
            <!--end::Heading-->
            <!--begin::Links-->
            <div class="text-center mb-1">
               <!--begin::Link-->
               <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_scrollable" data-bs-toggle="modal">Try Now</a>
               <!--end::Link-->
               <!--begin::Link-->
               <a class="btn btn-sm btn-light" href="../../demo1/dist/apps/user-management/users/view.html">Learn More</a>
               <!--end::Link-->
            </div>
            <!--end::Links-->
         </div>
         <!--end::Body-->
      </div>
      <!--end::Engage widget 1-->

   </div>

   <div class="col-lg-3 col-md-4 col-sm-6 my-3">

      <!--begin::Engage widget 1-->
      <div class="card h-md-100" dir="ltr">
         <!--begin::Body-->
         <div class="card-body d-flex flex-column flex-center">
            <!--begin::Heading-->
            <div class="mb-2">
               <!--begin::Title-->
               <h1 class="fw-semibold text-gray-800 text-center lh-lg">Promote My Services</h1>
               <!--end::Title-->
               <!--begin::Illustration-->
               <div class="py-10 text-center">
                  <img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="" />
                  <img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="" />
               </div>
               <!--end::Illustration-->
            </div>
            <!--end::Heading-->
            <!--begin::Links-->
            <div class="text-center mb-1">
               <!--begin::Link-->
               <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_scrollable" data-bs-toggle="modal">Try Now</a>
               <!--end::Link-->
               <!--begin::Link-->
               <a class="btn btn-sm btn-light" href="../../demo1/dist/apps/user-management/users/view.html">Learn More</a>
               <!--end::Link-->
            </div>
            <!--end::Links-->
         </div>
         <!--end::Body-->
      </div>
      <!--end::Engage widget 1-->

   </div>

   <div class="col-lg-3 col-md-4 col-sm-6 my-3">

      <!--begin::Engage widget 1-->
      <div class="card h-md-100" dir="ltr">
         <!--begin::Body-->
         <div class="card-body d-flex flex-column flex-center">
            <!--begin::Heading-->
            <div class="mb-2">
               <!--begin::Title-->
               <h1 class="fw-semibold text-gray-800 text-center lh-lg">Promote My Package</h1>
               <!--end::Title-->
               <!--begin::Illustration-->
               <div class="py-10 text-center">
                  <img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="" />
                  <img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="" />
               </div>
               <!--end::Illustration-->
            </div>
            <!--end::Heading-->
            <!--begin::Links-->
            <div class="text-center mb-1">
               <!--begin::Link-->
               <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_scrollable" data-bs-toggle="modal">Try Now</a>
               <!--end::Link-->
               <!--begin::Link-->
               <a class="btn btn-sm btn-light" href="../../demo1/dist/apps/user-management/users/view.html">Learn More</a>
               <!--end::Link-->
            </div>
            <!--end::Links-->
         </div>
         <!--end::Body-->
      </div>
      <!--end::Engage widget 1-->

   </div>

   <div class="col-lg-3 col-md-4 col-sm-6 my-3">

      <!--begin::Engage widget 1-->
      <div class="card h-md-100" dir="ltr">
         <!--begin::Body-->
         <div class="card-body d-flex flex-column flex-center">
            <!--begin::Heading-->
            <div class="mb-2">
               <!--begin::Title-->
               <h1 class="fw-semibold text-gray-800 text-center lh-lg">Promote My Voucher</h1>
               <!--end::Title-->
               <!--begin::Illustration-->
               <div class="py-10 text-center">
                  <img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="" />
                  <img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="" />
               </div>
               <!--end::Illustration-->
            </div>
            <!--end::Heading-->
            <!--begin::Links-->
            <div class="text-center mb-1">
               <!--begin::Link-->
               <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_scrollable" data-bs-toggle="modal">Try Now</a>
               <!--end::Link-->
               <!--begin::Link-->
               <a class="btn btn-sm btn-light" href="../../demo1/dist/apps/user-management/users/view.html">Learn More</a>
               <!--end::Link-->
            </div>
            <!--end::Links-->
         </div>
         <!--end::Body-->
      </div>
      <!--end::Engage widget 1-->

   </div>

   <div class="col-lg-3 col-md-4 col-sm-6 my-3">

      <!--begin::Engage widget 1-->
      <div class="card h-md-100" dir="ltr">
         <!--begin::Body-->
         <div class="card-body d-flex flex-column flex-center">
            <!--begin::Heading-->
            <div class="mb-2">
               <!--begin::Title-->
               <h1 class="fw-semibold text-gray-800 text-center lh-lg">Promote My Membership</h1>
               <!--end::Title-->
               <!--begin::Illustration-->
               <div class="py-10 text-center">
                  <img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="" />
                  <img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="" />
               </div>
               <!--end::Illustration-->
            </div>
            <!--end::Heading-->
            <!--begin::Links-->
            <div class="text-center mb-1">
               <!--begin::Link-->
               <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_scrollable" data-bs-toggle="modal">Try Now</a>
               <!--end::Link-->
               <!--begin::Link-->
               <a class="btn btn-sm btn-light" href="../../demo1/dist/apps/user-management/users/view.html">Learn More</a>
               <!--end::Link-->
            </div>
            <!--end::Links-->
         </div>
         <!--end::Body-->
      </div>
      <!--end::Engage widget 1-->

   </div>

   <div class="col-lg-3 col-md-4 col-sm-6 my-3">

      <!--begin::Engage widget 1-->
      <div class="card h-md-100" dir="ltr">
         <!--begin::Body-->
         <div class="card-body d-flex flex-column flex-center">
            <!--begin::Heading-->
            <div class="mb-2">
               <!--begin::Title-->
               <h1 class="fw-semibold text-gray-800 text-center lh-lg">Promote My Gift Card</h1>
               <!--end::Title-->
               <!--begin::Illustration-->
               <div class="py-10 text-center">
                  <img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="" />
                  <img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="" />
               </div>
               <!--end::Illustration-->
            </div>
            <!--end::Heading-->
            <!--begin::Links-->
            <div class="text-center mb-1">
               <!--begin::Link-->
               <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_scrollable" data-bs-toggle="modal">Try Now</a>
               <!--end::Link-->
               <!--begin::Link-->
               <a class="btn btn-sm btn-light" href="../../demo1/dist/apps/user-management/users/view.html">Learn More</a>
               <!--end::Link-->
            </div>
            <!--end::Links-->
         </div>
         <!--end::Body-->
      </div>
      <!--end::Engage widget 1-->

   </div>

   <div class="col-lg-3 col-md-4 col-sm-6 my-3">

      <!--begin::Engage widget 1-->
      <div class="card h-md-100" dir="ltr">
         <!--begin::Body-->
         <div class="card-body d-flex flex-column flex-center">
            <!--begin::Heading-->
            <div class="mb-2">
               <!--begin::Title-->
               <h1 class="fw-semibold text-gray-800 text-center lh-lg">Promote My Prooduct</h1>
               <!--end::Title-->
               <!--begin::Illustration-->
               <div class="py-10 text-center">
                  <img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="" />
                  <img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="" />
               </div>
               <!--end::Illustration-->
            </div>
            <!--end::Heading-->
            <!--begin::Links-->
            <div class="text-center mb-1">
               <!--begin::Link-->
               <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_scrollable" data-bs-toggle="modal">Try Now</a>
               <!--end::Link-->
               <!--begin::Link-->
               <a class="btn btn-sm btn-light" href="../../demo1/dist/apps/user-management/users/view.html">Learn More</a>
               <!--end::Link-->
            </div>
            <!--end::Links-->
         </div>
         <!--end::Body-->
      </div>
      <!--end::Engage widget 1-->

   </div>

   <div class="col-lg-3 col-md-4 col-sm-6 my-3">

      <!--begin::Engage widget 1-->
      <div class="card h-md-100" dir="ltr">
         <!--begin::Body-->
         <div class="card-body d-flex flex-column flex-center">
            <!--begin::Heading-->
            <div class="mb-2">
               <!--begin::Title-->
               <h1 class="fw-semibold text-gray-800 text-center lh-lg">Promote My Promo Code</h1>
               <!--end::Title-->
               <!--begin::Illustration-->
               <div class="py-10 text-center">
                  <img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="" />
                  <img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="" />
               </div>
               <!--end::Illustration-->
            </div>
            <!--end::Heading-->
            <!--begin::Links-->
            <div class="text-center mb-1">
               <!--begin::Link-->
               <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_scrollable" data-bs-toggle="modal">Try Now</a>
               <!--end::Link-->
               <!--begin::Link-->
               <a class="btn btn-sm btn-light" href="../../demo1/dist/apps/user-management/users/view.html">Learn More</a>
               <!--end::Link-->
            </div>
            <!--end::Links-->
         </div>
         <!--end::Body-->
      </div>
      <!--end::Engage widget 1-->

   </div>

</div>

</div>
<!--end::Content container-->
</div>
<!--end::Content-->


</div>
<!--end::Content wrapper-->
</div>
<!--end:::Main-->

<div class="modal fade multistepform_venue" id="kt_modal_scrollable" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-xl">
      <div class="modal-content modal-rounded">
         <div class="modal-header py-7 d-flex justify-content-between">
            <h2>Promote</h2>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <!--begin::Stepper-->
            <div class="stepper stepper-pills" id="kt_stepper_example_basic">
               <!--begin::Nav-->
               <div class="stepper-nav flex-center flex-wrap mb-10">
                  <!--begin::Step 1-->
                  <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Frame Size
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 1-->
                  <!--begin::Step 2-->
                  <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Template
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 2-->
                  <!--begin::Step 3-->
                  <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Details
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 3-->
                  <!--begin::Step 4-->
                  <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Services
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 4-->
                  <!--begin::Step 5-->
                  <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Platform
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 5-->
                  <!--begin::Step 6-->
                  <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Audience
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 6-->
                  <!--begin::Step 7-->
                  <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                     <!--begin::Wrapper-->
                     <div class="stepper-wrapper d-flex align-items-center">
                        <!--begin::Label-->
                        <div class="stepper-label">
                           <h3 class="stepper-title">
                              Publish
                           </h3>
                        </div>
                        <!--end::Label-->
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Line-->
                     <div class="stepper-line h-40px"></div>
                     <!--end::Line-->
                  </div>
                  <!--end::Step 7-->
               </div>
               <!--end::Nav-->
               <!--begin::Form-->
               <form class="form mx-auto" novalidate="novalidate" id="kt_stepper_example_basic_form">
                  <!--begin::Group-->
                  <div class="mb-5">
                     <!--begin::Step 1-->
                     <div class="current justify-content-center" data-kt-stepper-element="content">
                        <!--begin::Input group-->
                        <div class="d-flex flex-wrap align-items-center gap-4 mb-15" data-kt-buttons="true">
                           <!--begin::Option-->
                           <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center justify-content-center cl169 active">
                              <!--begin::Input-->
                              <input class="btn-check" type="radio" checked="checked" name="project_type" value="1" />
                              <!--end::Input-->
                              <!--begin::Label-->
                              <span class="d-flex">
                                 <!--begin::Info-->
                                 <span class="fs-1x fw-bold text-gray-900 d-block">9:16</span>
                                 <!--end::Info-->
                              </span>
                              <!--end::Label-->
                           </label>
                           <!--end::Option-->
                           <!--begin::Option-->
                           <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center justify-content-center cl11">
                              <!--begin::Input-->
                              <input class="btn-check" type="radio" name="project_type" value="2" />
                              <!--end::Input-->
                              <!--begin::Label-->
                              <span class="d-flex">
                                 <!--begin::Info-->
                                 <span class="fs-1x fw-bold text-gray-900 d-block">1:1</span>
                                 <!--end::Info-->
                              </span>
                              <!--end::Label-->
                           </label>
                           <!--end::Option-->
                           <!--begin::Option-->
                           <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center justify-content-center cl21">
                              <!--begin::Input-->
                              <input class="btn-check" type="radio" name="project_type" value="2" />
                              <!--end::Input-->
                              <!--begin::Label-->
                              <span class="d-flex">
                                 <!--begin::Info-->
                                 <span class="fs-1x fw-bold text-gray-900 d-block">2:1</span>
                                 <!--end::Info-->
                              </span>
                              <!--end::Label-->
                           </label>
                           <!--end::Option-->
                        </div>
                        <!--end::Input group-->
                     </div>
                     <!--end::Step 1-->
                     <!--begin::Step 2-->
                     <div data-kt-stepper-element="content">
                        <div class="w-100">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="d-flex flex-column align-items-center justify-content-center text-center gap-4 cl169 brdr p-4 mx-auto">
                                    <span class="fs-1x fw-bold text-gray-900 d-block">9:16</span>
                                    <span class="fs-7 fw-bold text-gray-400 d-block">
                                       Select from template or 
                                       <a href="">
                                          <label class="upldtmplt">
                                             <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                             <span>Click here</span>
                                             <!--end::Inputs-->
                                          </label>
                                       </a>
                                       to upload your own creative
                                    </span>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <h3 class="card-title align-items-start flex-column mb-7">
                                    <span class="card-label fw-bold text-gray-800 fs-4">Promote Service Template 9:16 ratio</span>
                                 </h3>
                                 <div class="brdr p-4">
                                    <div class="row">
                                       <div class="col-md-3 my-2">
                                          <a href="#">
                                          <img src="assets/media/img/promocrd.jpg">
                                          </a>
                                       </div>
                                       <div class="col-md-3 my-2">
                                          <a href="#">
                                          <img src="assets/media/img/promocrd.jpg">
                                          </a>
                                       </div>
                                       <div class="col-md-3 my-2">
                                          <a href="#">
                                          <img src="assets/media/img/promocrd.jpg">
                                          </a>
                                       </div>
                                       <div class="col-md-3 my-2">
                                          <a href="#">
                                          <img src="assets/media/img/promocrd.jpg">
                                          </a>
                                       </div>
                                       <div class="col-md-3 my-2">
                                          <a href="#">
                                          <img src="assets/media/img/promocrd.jpg">
                                          </a>
                                       </div>
                                       <div class="col-md-3 my-2">
                                          <a href="#">
                                          <img src="assets/media/img/promocrd.jpg">
                                          </a>
                                       </div>
                                       <div class="col-md-3 my-2">
                                          <a href="#">
                                          <img src="assets/media/img/promocrd.jpg">
                                          </a>
                                       </div>
                                       <div class="col-md-3 my-2">
                                          <a href="#">
                                          <img src="assets/media/img/promocrd.jpg">
                                          </a>
                                       </div>
                                       <div class="col-md-3 my-2">
                                          <a href="#">
                                          <img src="assets/media/img/promocrd.jpg">
                                          </a>
                                       </div>
                                       <div class="col-md-3 my-2">
                                          <a href="#">
                                          <img src="assets/media/img/promocrd.jpg">
                                          </a>
                                       </div>
                                       <div class="col-md-3 my-2">
                                          <a href="#">
                                          <img src="assets/media/img/promocrd.jpg">
                                          </a>
                                       </div>
                                       <div class="col-md-3 my-2">
                                          <a href="#">
                                          <img src="assets/media/img/promocrd.jpg">
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--end::Step 2-->
                     <!--begin::Step 3-->
                     <div data-kt-stepper-element="content">
                        <div class="w-100">
                           <div class="row">
                              <div class="col-md-7">
                                 <div class="row">
                                    <div class="col-md-3 fv-row mb-7">
                                       <h3 class="card-title align-items-start flex-column">
                                          <span class="card-label fw-bold text-gray-800 mb-4">Add Image</span>
                                       </h3>
                                    </div>
                                    <div class="col-md-9 fv-row promdt mb-7">
                                       <!--begin::Label-->
                                       <label class="d-block fw-semibold fs-6 mb-5">
                                       <span class="ms-1" data-bs-toggle="tooltip" title="">
                                       <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                       </span>
                                       </label>
                                       <!--end::Label-->
                                       <!--begin::Image input-->
                                       <div class="image-input image-input-empty image-input-outline image-input-placeholder" data-kt-image-input="true">
                                          <!--begin::Preview existing avatar-->
                                          <div class="image-input-wrapper w-125px h-125px"></div>
                                          <!--end::Preview existing avatar-->
                                          <!--begin::Label-->
                                          <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                             <i class="ki-outline ki-pencil fs-7"></i>
                                             <!--begin::Inputs-->
                                             <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                             <input type="hidden" name="avatar_remove" />
                                             <!--end::Inputs-->
                                          </label>
                                          <!--end::Label-->
                                          <!--begin::Cancel-->
                                          <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                          <i class="ki-outline ki-cross fs-2"></i>
                                          </span>
                                          <!--end::Cancel-->
                                          <!--begin::Remove-->
                                          <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                          <i class="ki-outline ki-cross fs-2"></i>
                                          </span>
                                          <!--end::Remove-->
                                       </div>
                                       <!--end::Image input-->
                                       <!--begin::Hint-->
                                       <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                       <!--end::Hint-->
                                    </div>
                                    <div class="col-md-3 fv-row mb-7">
                                       <h3 class="card-title align-items-start flex-column">
                                          <span class="card-label fw-bold text-gray-800 mb-4 fs-4">Adjust Salon Name</span>
                                       </h3>
                                    </div>
                                    <div class="col-md-9 fv-row mb-7">
                                       <div>
                                          <!--begin::Input-->
                                          <input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" value="Beauty Salon" required="" onkeyup="setSlnNm(this)">
                                          <!--end::Input-->
                                       </div>
                                    </div>
                                    <div class="col-md-3 fv-row mb-7">
                                       <h3 class="card-title align-items-start flex-column">
                                          <span class="card-label fw-bold text-gray-800 mb-4 fs-4">Add Message</span>
                                       </h3>
                                    </div>
                                    <div class="col-md-9 fv-row mb-7">
                                       <textarea class="form-control" name="service_placeholder" data-kt-autosize="true" placeholder="" value="ALLOW US TO PAMPER YOU" onkeyup="setSlnDsc(this)"></textarea>
                                    </div>
                                    <div class="col-6 fv-row">
                                       <h3 class="card-title align-items-start flex-column mb-7">
                                          <span class="card-label fw-bold text-gray-800 fs-4">Choose Background Color</span>
                                       </h3>
                                       <div class="d-flex gap-4 mb-7">
                                          <input type="color" name="" oninput="chngBgClr(this)">
                                       </div>
                                    </div>
                                    <div class="col-6 fv-row">
                                       <h3 class="card-title align-items-start flex-column mb-7">
                                          <span class="card-label fw-bold text-gray-800 fs-4">Choose text color</span>
                                       </h3>
                                       <div class="d-flex flex-wrap gap-4 mb-7">
                                          <label class="d-flex gap-4">
                                             <!--begin::Radio-->
                                             <input class="hidevis" type="radio" checked="checked" name="textcolor1" value="0" onchange="chTxtClr1(this)" />
                                             <div class="inpwht active"></div>
                                          </label>
                                          <label class="d-flex gap-4">
                                             <!--begin::Radio-->
                                             <input class="hidevis" type="radio" name="textcolor1" value="1" onchange="chTxtClr2(this)" />
                                             <div class="inpblck"></div>
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-6 fv-row">
                                       <h3 class="card-title align-items-start flex-column mb-7">
                                          <span class="card-label fw-bold text-gray-800 fs-4">Chose Heading background color</span>
                                       </h3>
                                       <div class="d-flex flex-wrap align-items-center gap-4 mb-7">
                                          <div>
                                             <input type="color" name="" oninput="chngBgClr2(this)">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-6 fv-row">
                                       <h3 class="card-title align-items-start flex-column mb-7">
                                          <span class="card-label fw-bold text-gray-800 fs-4">Chose Heading color</span>
                                       </h3>
                                       <div class="d-flex flex-wrap align-items-center gap-4 mb-7">
                                          <label class="d-flex gap-4">
                                             <!--begin::Radio-->
                                             <input class="hidevis" type="radio" checked="checked" name="textcolor2" value="0" onchange="chngBgTxtClr1(this)" />
                                             <div class="inpwht active"></div>
                                          </label>
                                          <label class="d-flex gap-4">
                                             <!--begin::Radio-->
                                             <input class="hidevis" type="radio" name="textcolor2" value="1" onchange="chngBgTxtClr2(this)" />
                                             <div class="inpblck"></div>
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-5">
                                 <div class="promcard">
                                    <div class="promcard-image">
                                       <img src="assets/media/img/hairservice.jpg">
                                    </div>
                                    <div class="promcard-cnt p-5">
                                       <div class="d-flex flex-column align-items-center justify-content-center gap-4 text-center">
                                          <div>
                                             <span class="fw-bold fs-1x promcard-slname">Beauty Saloon</span>
                                          </div>
                                          <div>
                                             <span class="fw-semibold text-uppercase fs-5 promcard-sldesc">Allow us to pamper you</span>
                                          </div>
                                          <div>
                                             <div class="d-inline-flex promcard-hd fw-semibold text-uppercase fs-5">
                                                Our Services
                                             </div>
                                          </div>
                                          <div class="promcard-sernm d-flex flex-wrap gap-4">
                                             <span class="fw-regular fs-5">- <span>Service1_1_1</span></span>
                                             <span class="fw-regular fs-5">- <span>Service1_1_2</span></span>
                                             <span class="fw-regular fs-5">- <span>Service1_1_3</span></span>
                                          </div>
                                          <div class="d-flex flex-column gap-4">
                                             <span class="fw-semibold text-uppercase fs-4">CALL US</span>
                                             <div class="d-inline-flex promcard-hd fw-semibold text-uppercase fs-5">
                                                0904567789
                                             </div>
                                          </div>
                                          <div>
                                             <span class="fw-regular fs-5">1234 Longonot Street, Hermiways Avenue Road 23456ty, Stall A</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--end::Step 3-->
                     <!--begin::Step 4-->
                     <div data-kt-stepper-element="content">
                        <div class="w-100">
                           <div class="row">
                              <div class="col-md-8">
                                 <div class="row">
                                    <div class="col-md-3 fv-row mb-7">
                                       <h3 class="card-title align-items-start flex-column">
                                          <span class="card-label fw-bold text-gray-800 mb-4">Show Price</span>
                                       </h3>
                                    </div>
                                    <div class="col-md-9 fv-row mb-7">
                                       <div class="d-flex gap-4 align-items-center">
                                          <label class="form-check" data-kt-button="true">
                                             <!--begin::Radio-->
                                             <input class="form-check-input" type="checkbox" value="facebook"/>
                                             <span class="form-check-label">
                                             Online
                                             </span>
                                          </label>
                                          <label class="form-check" data-kt-button="true">
                                             <!--begin::Radio-->
                                             <input class="form-check-input" type="checkbox" value="facebook"/>
                                             <span class="form-check-label">
                                             Off Peak
                                             </span>
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <!--begin::Tab Content-->
                                       <div class="tab-content">
                                          <!--begin::Tap pane-->
                                          <div class="tab-pane fade active show" id="package_cat1">
                                             <div class="row">
                                                <div class="col-md-3 mb-7">
                                                   <h3 class="card-title align-items-start flex-column mb-10">
                                                      <span class="card-label fw-bold text-gray-800 mb-4">Sub Category</span>
                                                   </h3>
                                                   <!--begin::Nav-->
                                                   <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2 d-flex flex-column gap-5 mx-5 subcatcol">
                                                      <!--begin::Item-->
                                                      <li class="nav-item">
                                                         <!--begin::Link-->
                                                         <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#package_subcat1_1" aria-selected="true" role="tab">
                                                         <span class="subcategory">Subcat1_1</span> <span>(4)</span>
                                                         </a>
                                                         <!--end::Link-->
                                                      </li>
                                                      <!--end::Item-->
                                                      <!--begin::Item-->
                                                      <li class="nav-item">
                                                         <!--begin::Link-->
                                                         <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#package_subcat1_2" aria-selected="false" role="tab">
                                                         <span class="subcategory">Subcat1_2</span> <span>(2)</span>
                                                         </a>
                                                         <!--end::Link-->
                                                      </li>
                                                      <!--end::Item-->
                                                      <!--begin::Item-->
                                                      <li class="nav-item">
                                                         <!--begin::Link-->
                                                         <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#package_subcat1_3" aria-selected="false" role="tab">
                                                         <span class="subcategory">Subcat1_3</span> <span>(3)</span>
                                                         </a>
                                                         <!--end::Link-->
                                                      </li>
                                                      <!--end::Item-->
                                                   </ul>
                                                   <!--end::Nav-->
                                                </div>
                                                <div class="col-md-9 mb-7">
                                                   <!--begin::Tab Content-->
                                                   <div class="tab-content">
                                                      <!--begin::Tap pane-->
                                                      <div class="tab-pane fade active show" id="package_subcat1_1">
                                                         <div class="searchboxdiv">
                                                            <div class="searchbox">
                                                               <i class="fas fa-search"></i>
                                                               <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                            </div>
                                                         </div>
                                                         <div class="select_service">
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_1_1</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck1_1_1" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck1_1_1">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_1_2</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck1_1_2" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck1_1_2">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_1_3</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck1_1_3" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck1_1_3">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--end::Tap pane-->
                                                      <!--begin::Tap pane-->
                                                      <div class="tab-pane fade" id="package_subcat1_2">
                                                         <div class="searchboxdiv">
                                                            <div class="searchbox">
                                                               <i class="fas fa-search"></i>
                                                               <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                            </div>
                                                         </div>
                                                         <div class="select_service">
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_2_1</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck1_2_1" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck1_2_1">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_2_2</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck1_2_2" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck1_2_2">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_2_3</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck1_2_3" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck1_2_3">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--end::Tap pane-->
                                                      <!--begin::Tap pane-->
                                                      <div class="tab-pane fade" id="package_subcat1_3">
                                                         <div class="searchboxdiv">
                                                            <div class="searchbox">
                                                               <i class="fas fa-search"></i>
                                                               <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                            </div>
                                                         </div>
                                                         <div class="select_service">
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_3_1</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck1_3_1" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck1_3_1">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_3_2</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck1_3_2" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck1_3_2">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service1_3_3</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck1_3_3" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck1_3_3">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--end::Tap pane-->
                                                   </div>
                                                   <!--end::Tab Content-->
                                                </div>
                                             </div>
                                          </div>
                                          <!--end::Tap pane-->
                                          <!--begin::Tap pane-->
                                          <div class="tab-pane fade" id="package_cat2">
                                             <div class="row">
                                                <div class="col-md-3 mb-7">
                                                   <h3 class="card-title align-items-start flex-column mb-10">
                                                      <span class="card-label fw-bold text-gray-800 mb-4">Package Sub Category</span>
                                                   </h3>
                                                   <!--begin::Nav-->
                                                   <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2 d-flex flex-column gap-5 mx-5 subcatcol">
                                                      <!--begin::Item-->
                                                      <li class="nav-item">
                                                         <!--begin::Link-->
                                                         <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#package_subcat2_1" aria-selected="true" role="tab">
                                                         <span class="subcategory">Subcat2_1</span> <span>(4)</span>
                                                         </a>
                                                         <!--end::Link-->
                                                      </li>
                                                      <!--end::Item-->
                                                      <!--begin::Item-->
                                                      <li class="nav-item">
                                                         <!--begin::Link-->
                                                         <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#package_subcat2_2" aria-selected="false" role="tab">
                                                         <span class="subcategory">Subcat2_2</span> <span>(2)</span>
                                                         </a>
                                                         <!--end::Link-->
                                                      </li>
                                                      <!--end::Item-->
                                                      <!--begin::Item-->
                                                      <li class="nav-item">
                                                         <!--begin::Link-->
                                                         <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#package_subcat2_3" aria-selected="false" role="tab">
                                                         <span class="subcategory">Subcat2_3</span> <span>(3)</span>
                                                         </a>
                                                         <!--end::Link-->
                                                      </li>
                                                      <!--end::Item-->
                                                   </ul>
                                                   <!--end::Nav-->
                                                </div>
                                                <div class="col-md-9 mb-7">
                                                   <!--begin::Tab Content-->
                                                   <div class="tab-content">
                                                      <!--begin::Tap pane-->
                                                      <div class="tab-pane fade active show" id="package_subcat2_1">
                                                         <div class="searchboxdiv">
                                                            <div class="searchbox">
                                                               <i class="fas fa-search"></i>
                                                               <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                            </div>
                                                         </div>
                                                         <div class="select_service">
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_1_1</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck2_1_1" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck2_1_1">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_1_2</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck2_1_2" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck2_1_2">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_1_3</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck2_1_3" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck2_1_3">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--end::Tap pane-->
                                                      <!--begin::Tap pane-->
                                                      <div class="tab-pane fade" id="package_subcat2_2">
                                                         <div class="searchboxdiv">
                                                            <div class="searchbox">
                                                               <i class="fas fa-search"></i>
                                                               <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                            </div>
                                                         </div>
                                                         <div class="select_service">
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_2_1</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck2_2_1" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck2_2_1">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_2_2</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck2_2_2" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck2_2_2">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_2_3</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck2_2_3" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck2_2_3">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--end::Tap pane-->
                                                      <!--begin::Tap pane-->
                                                      <div class="tab-pane fade" id="package_subcat2_3">
                                                         <div class="searchboxdiv">
                                                            <div class="searchbox">
                                                               <i class="fas fa-search"></i>
                                                               <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                            </div>
                                                         </div>
                                                         <div class="select_service">
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_3_1</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck2_3_1" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck2_3_1">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_3_2</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck2_3_2" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck2_3_2">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service2_3_3</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck2_3_3" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck2_3_3">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--end::Tap pane-->
                                                   </div>
                                                   <!--end::Tab Content-->
                                                </div>
                                             </div>
                                          </div>
                                          <!--end::Tap pane-->
                                          <!--begin::Tap pane-->
                                          <div class="tab-pane fade" id="package_cat3">
                                             <div class="row">
                                                <div class="col-md-3 mb-7">
                                                   <h3 class="card-title align-items-start flex-column mb-10">
                                                      <span class="card-label fw-bold text-gray-800 mb-4">Package Sub Category</span>
                                                   </h3>
                                                   <!--begin::Nav-->
                                                   <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2 d-flex flex-column gap-5 mx-5 subcatcol">
                                                      <!--begin::Item-->
                                                      <li class="nav-item">
                                                         <!--begin::Link-->
                                                         <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#package_subcat3_1" aria-selected="true" role="tab">
                                                         <span class="subcategory">Subcat3_1</span> <span>(4)</span>
                                                         </a>
                                                         <!--end::Link-->
                                                      </li>
                                                      <!--end::Item-->
                                                      <!--begin::Item-->
                                                      <li class="nav-item">
                                                         <!--begin::Link-->
                                                         <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#package_subcat3_2" aria-selected="false" role="tab">
                                                         <span class="subcategory">Subcat3_2</span> <span>(2)</span>
                                                         </a>
                                                         <!--end::Link-->
                                                      </li>
                                                      <!--end::Item-->
                                                      <!--begin::Item-->
                                                      <li class="nav-item">
                                                         <!--begin::Link-->
                                                         <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#package_subcat3_3" aria-selected="false" role="tab">
                                                         <span class="subcategory">Subcat3_3</span> <span>(3)</span>
                                                         </a>
                                                         <!--end::Link-->
                                                      </li>
                                                      <!--end::Item-->
                                                   </ul>
                                                   <!--end::Nav-->
                                                </div>
                                                <div class="col-md-9 mb-7">
                                                   <!--begin::Tab Content-->
                                                   <div class="tab-content">
                                                      <!--begin::Tap pane-->
                                                      <div class="tab-pane fade active show" id="package_subcat3_1">
                                                         <div class="searchboxdiv">
                                                            <div class="searchbox">
                                                               <i class="fas fa-search"></i>
                                                               <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                            </div>
                                                         </div>
                                                         <div class="select_service">
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_1_1</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck3_1_1" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck3_1_1">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_1_2</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck3_1_2" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck3_1_2">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_1_3</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck3_1_3" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck3_1_3">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--end::Tap pane-->
                                                      <!--begin::Tap pane-->
                                                      <div class="tab-pane fade" id="package_subcat3_2">
                                                         <div class="searchboxdiv">
                                                            <div class="searchbox">
                                                               <i class="fas fa-search"></i>
                                                               <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                            </div>
                                                         </div>
                                                         <div class="select_service">
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_2_1</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck3_2_1" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck3_2_1">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_2_2</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck3_2_2" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck3_2_2">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_2_3</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck3_2_3" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck3_2_3">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--end::Tap pane-->
                                                      <!--begin::Tap pane-->
                                                      <div class="tab-pane fade" id="package_subcat3_3">
                                                         <div class="searchboxdiv">
                                                            <div class="searchbox">
                                                               <i class="fas fa-search"></i>
                                                               <input type="text" placeholder="Search or add service" name="search-box" value="">
                                                            </div>
                                                         </div>
                                                         <div class="select_service">
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_3_1</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck3_3_1" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck3_3_1">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_3_2</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck3_3_2" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck3_3_2">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <h3 class="card-title align-items-start flex-column">
                                                                  <span class="card-label fw-bold text-gray-800 fs-4 mb-4 service_individual">Service3_3_3</span>
                                                                  <span class="text-gray-400 fw-semibold d-block fs-6 mt-3 service-description">
                                                                  <span class="me-4">2hr 30min</span> 
                                                                  <span>lorem ipsum dolar sit amet</span>
                                                                  </span>
                                                               </h3>
                                                               <div class="ser_price">
                                                                  <h3 class="card-title align-items-start flex-column">
                                                                     <span class="card-label fw-bold text-gray-800 fs-4 mb-4">$130</span>
                                                                     <span class="text-gray-400 fw-semibold d-block fs-6 mt-3">$150
                                                                     </span>
                                                                  </h3>
                                                               </div>
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="checkbox" value="" id="selectservicecheck3_3_3" onchange="selectSerFunc(this)"/>
                                                                  <label class="form-check-label" for="selectservicecheck3_3_3">
                                                                  Select
                                                                  </label>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!--end::Tap pane-->
                                                   </div>
                                                   <!--end::Tab Content-->
                                                </div>
                                             </div>
                                          </div>
                                          <!--end::Tap pane-->
                                       </div>
                                       <!--end::Tab Content-->
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="promcard">
                                    <div class="promcard-image">
                                       <img src="assets/media/img/hairservice.jpg">
                                    </div>
                                    <div class="promcard-cnt p-5">
                                       <div class="d-flex flex-column align-items-center justify-content-center gap-4 text-center">
                                          <div>
                                             <span class="fw-bold fs-1x promcard-slname">Beauty Saloon</span>
                                          </div>
                                          <div>
                                             <span class="fw-semibold text-uppercase fs-5 promcard-sldesc">Allow us to pamper you</span>
                                          </div>
                                          <div>
                                             <div class="d-inline-flex promcard-hd fw-semibold text-uppercase fs-5">
                                                Our Services
                                             </div>
                                          </div>
                                          <div class="promcard-sernm d-flex flex-wrap gap-4">
                                             <span class="fw-regular fs-5">- <span>Service1_1_1</span></span>
                                             <span class="fw-regular fs-5">- <span>Service1_1_2</span></span>
                                             <span class="fw-regular fs-5">- <span>Service1_1_3</span></span>
                                          </div>
                                          <div class="d-flex flex-column gap-4">
                                             <span class="fw-semibold text-uppercase fs-4">CALL US</span>
                                             <div class="d-inline-flex promcard-hd fw-semibold text-uppercase fs-5">
                                                0904567789
                                             </div>
                                          </div>
                                          <div>
                                             <span class="fw-regular fs-5">1234 Longonot Street, Hermiways Avenue Road 23456ty, Stall A</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--end::Step 4-->
                     <!--begin::Step 5-->
                     <div data-kt-stepper-element="content">
                        <div class="w-100">
                           <div class="row">
                              <div class="col-md-8">
                                 <div class="row">
                                    <div class="col-md-3 fv-row mb-7">
                                       <h3 class="card-title align-items-start flex-column">
                                          <span class="card-label fw-bold text-gray-800 mb-4">Share on</span>
                                       </h3>
                                    </div>
                                    <div class="col-md-9 fv-row mb-7">
                                       <div class="d-flex gap-5 align-items-center socialicns">
                                          <div>
                                             <a href="#">
                                             <img src="assets/media/svg/brand-logos/facebook-3.svg">
                                             </a>
                                          </div>
                                          <div>
                                             <a href="#">
                                             <img src="assets/media/svg/brand-logos/instagram-2-1.svg">
                                             </a>
                                          </div>
                                          <div>
                                             <a href="#">
                                             <img src="assets/media/img/whatsapp.png">
                                             </a>
                                          </div>
                                          <div>
                                             <a href="#">
                                             <img src="assets/media/img/gmail.png">
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 mb-7">
                                       <select class="form-select" data-control="select2" data-placeholder="Gender">
                                          <option></option>
                                          <option value="1">Male</option>
                                          <option value="2">Female</option>
                                       </select>
                                    </div>
                                    <div class="col-md-4 mb-7">
                                       <select class="form-select" data-control="select2" data-placeholder="Not visited in">
                                          <option></option>
                                          <option value="1">Last 1 month</option>
                                          <option value="2">Last 2 month</option>
                                          <option value="3">Last 3 month</option>
                                       </select>
                                    </div>
                                    <div class="col-md-4 mb-7">
                                       <select class="form-select" data-control="select2" data-placeholder="Service - Category">
                                          <option></option>
                                          <option value="1">Hair</option>
                                          <option value="2">Face</option>
                                          <option value="3">Spa</option>
                                       </select>
                                    </div>
                                    <div class="col-12 mb-7">
                                       <select class="form-select" data-control="select2" data-placeholder="Select Audience" multiple>
                                          <option></option>
                                          <option value="1">User1</option>
                                          <option value="2">User2</option>
                                          <option value="3">User3</option>
                                          <option value="4">User4</option>
                                          <option value="5">User5</option>
                                          <option value="6">User6</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="promcard">
                                    <div class="promcard-image">
                                       <img src="assets/media/img/hairservice.jpg">
                                    </div>
                                    <div class="promcard-cnt p-5">
                                       <div class="d-flex flex-column align-items-center justify-content-center gap-4 text-center">
                                          <div>
                                             <span class="fw-bold fs-1x promcard-slname">Beauty Saloon</span>
                                          </div>
                                          <div>
                                             <span class="fw-semibold text-uppercase fs-5 promcard-sldesc">Allow us to pamper you</span>
                                          </div>
                                          <div>
                                             <div class="d-inline-flex promcard-hd fw-semibold text-uppercase fs-5">
                                                Our Services
                                             </div>
                                          </div>
                                          <div class="promcard-sernm d-flex flex-wrap gap-4">
                                             <span class="fw-regular fs-5">- <span>Service1_1_1</span></span>
                                             <span class="fw-regular fs-5">- <span>Service1_1_2</span></span>
                                             <span class="fw-regular fs-5">- <span>Service1_1_3</span></span>
                                          </div>
                                          <div class="d-flex flex-column gap-4">
                                             <span class="fw-semibold text-uppercase fs-4">CALL US</span>
                                             <div class="d-inline-flex promcard-hd fw-semibold text-uppercase fs-5">
                                                0904567789
                                             </div>
                                          </div>
                                          <div>
                                             <span class="fw-regular fs-5">1234 Longonot Street, Hermiways Avenue Road 23456ty, Stall A</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--end::Step 5-->
                     <!--begin::Step 6-->
                     <div data-kt-stepper-element="content">
                     </div>
                     <!--end::Step 6-->
                     <!--begin::Step 7-->
                     <div data-kt-stepper-element="content">
                     </div>
                     <!--end::Step 7-->
                  </div>
                  <!--end::Group-->
                  <!--begin::Actions-->
                  <div class="d-flex flex-stack">
                     <!--begin::Wrapper-->
                     <div class="me-2">
                        <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                        Back
                        </button>
                     </div>
                     <!--end::Wrapper-->
                     <!--begin::Wrapper-->
                     <div>
                        <button type="button" class="btn btn-primary" data-kt-stepper-action="submit">
                        <span class="indicator-label">
                        Submit
                        </span>
                        <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                        </button>
                        <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                        Continue
                        </button>
                     </div>
                     <!--end::Wrapper-->
                  </div>
                  <!--end::Actions-->
               </form>
               <!--end::Form-->
            </div>
            <!--end::Stepper-->
         </div>
      </div>
   </div>
</div>

@endsection
@push('scripts')
<script>
         // Multistep form

         var element = document.querySelector("#kt_stepper_example_basic");

         // Initialize Stepper
         var stepper = new KTStepper(element);

         // Handle next step
         stepper.on("kt.stepper.next", function (stepper) {
             stepper.goNext(); // go next step
         });

         // Handle previous step
         stepper.on("kt.stepper.previous", function (stepper) {
             stepper.goPrevious(); // go previous step
         });
      </script>

      <script>
         let addSerNm = [];

         function selectSerFunc(e) {
            let mainDivSerInd = e.parentElement.parentElement;
            let serTxt = mainDivSerInd.querySelector('.service_individual').textContent;
            if(e.checked) {
               e.nextElementSibling.textContent = "Selected";
               e.nextElementSibling.classList.add('selected');
               addInfo(serTxt);
            }
            else {
               e.nextElementSibling.textContent = "Select";
               e.nextElementSibling.classList.remove('selected');
               remInfo(serTxt);
            }
         }

         function addInfo(serTxt) {
            let prmCrdElem = document.querySelector('.promcard');
            let promcardsernm = prmCrdElem.querySelector('.promcard-sernm')
            let span = `<span class="fw-regular fs-5">- <span>${serTxt}</span></span>`;
            promcardsernm.append(span);
            addSerNm.push(serTxt);
         }

         function chngBgClr(e) {
            let prmCrdElem = document.querySelector('.promcard');
            prmCrdElem.style.backgroundColor = e.value;
         }

         function chngBgClr2(e) {
            let prmCrdElem = document.querySelector('.promcard');
            let prmHdElem = prmCrdElem.querySelectorAll('.promcard-hd');
            for(let i=0; i<prmHdElem.length; i++) {
               prmHdElem[i].style.backgroundColor = e.value;
            }
         }

         function chngBgTxtClr1(e) {
            let prmCrdElem = document.querySelector('.promcard');
            let prmHdElem = prmCrdElem.querySelectorAll('.promcard-hd');
            for(let i=0; i<prmHdElem.length; i++) {
               console.log(prmHdElem[i]);
               prmHdElem[i].style.color = "#fff";
            }
            if(!e.nextElementSibling.classList.contains('active')) {
               e.nextElementSibling.classList.add('active');
            }
            if(e.parentElement.nextElementSibling.querySelector('div').classList.contains('active')) {
               e.parentElement.nextElementSibling.querySelector('div').classList.remove('active');
            }
         }

         function chngBgTxtClr2(e) {
            let prmCrdElem = document.querySelector('.promcard');
            let prmHdElem = prmCrdElem.querySelectorAll('.promcard-hd');
            for(let i=0; i<prmHdElem.length; i++) {
               console.log(prmHdElem[i]);
               prmHdElem[i].style.color = "#000";
            }
            if(!e.nextElementSibling.classList.contains('active')) {
               e.nextElementSibling.classList.add('active');
            }
            if(e.parentElement.previousElementSibling.querySelector('div').classList.contains('active')) {
               e.parentElement.previousElementSibling.querySelector('div').classList.remove('active');
            }
         }

         function chTxtClr1(e) {
            let prmCrdElem = document.querySelector('.promcard');
            let spanElem = prmCrdElem.querySelectorAll('span');
            for(let i=0; i<spanElem.length; i++) {
               spanElem[i].style.color = "#fff";
            }
            if(!e.nextElementSibling.classList.contains('active')) {
               e.nextElementSibling.classList.add('active');
            }
            if(e.parentElement.nextElementSibling.querySelector('div').classList.contains('active')) {
               e.parentElement.nextElementSibling.querySelector('div').classList.remove('active');
            }
         }

         function chTxtClr2(e) {
            let prmCrdElem = document.querySelector('.promcard');
            let spanElem = prmCrdElem.querySelectorAll('span');
            for(let i=0; i<spanElem.length; i++) {
               spanElem[i].style.color = "#000";
               spanElem[i].style.borderBottomColor = "#000";
            }
            if(!e.nextElementSibling.classList.contains('active')) {
               e.nextElementSibling.classList.add('active');
            }
            if(e.parentElement.previousElementSibling.querySelector('div').classList.contains('active')) {
               e.parentElement.previousElementSibling.querySelector('div').classList.remove('active');
            }
         }

         function setSlnNm(e) {
            let prmCrdElem = document.querySelector('.promcard');
            let slnNm = prmCrdElem.querySelector('.promcard-slname');
            slnNm.textContent = e.value;
         }

         function setSlnDsc(e) {
            let prmCrdElem = document.querySelector('.promcard');
            let slnDsc = prmCrdElem.querySelector('.promcard-sldesc');
            slnDsc.textContent = e.value;
         }
      </script>
@endpush