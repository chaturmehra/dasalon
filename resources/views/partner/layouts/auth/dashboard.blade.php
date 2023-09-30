@extends('partner.layouts.auth.app')

@section('content') 
   <!--Begin:::Main-->
   <!--begin::Main-->
   <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
      <!--begin::Content wrapper-->
      <div class="d-flex flex-column flex-column-fluid">
         <!--begin::Content-->
         <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xl">
               <div class="mb-xl-10 toastmsg">
                  <div class="toast show bg-primary p-5" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                     <div class="toast-body">
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        <div class="row gy-5 g-xl-10">
                           <div class="col-md-9">
                              <h4 class="mb-5">Learn how to get started on Dasalon</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                              </p>
                              <a href="#" class="btn btn-sm btn-flex align-self-center px-3 justify-content-center bg-white">Book Appointment with our expert</a>
                           </div>
                           <div class="col-md-3">
                              <img src="{{ asset('/public/assets/media/illustrations/misc/upgrade.svg') }}" width="150">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--begin::Row-->
               <div class="row gy-5 g-xl-10">
                  <!--begin::Col-->
                  <div class="col-sm-6 col-xl-2 mb-xl-10">
                     <!--begin::Card widget 2-->
                     <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                           <!--begin::Icon-->
                           <div class="m-0">
                              <i class="ki-outline ki-compass fs-2hx text-gray-600"></i>
                           </div>
                           <!--end::Icon-->
                           <!--begin::Section-->
                           <div class="d-flex flex-column my-7">
                              <!--begin::Number-->
                              <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">327</span>
                              <!--end::Number-->
                              <!--begin::Follower-->
                              <div class="m-0">
                                 <span class="fw-semibold fs-6 text-gray-400">Recent Sales</span>
                              </div>
                              <!--end::Follower-->
                           </div>
                           <!--end::Section-->
                           <!--begin::Badge-->
                           <span class="badge badge-light-success fs-base">
                           <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.1%</span>
                           <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                     </div>
                     <!--end::Card widget 2-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-sm-6 col-xl-2 mb-xl-10">
                     <!--begin::Card widget 2-->
                     <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                           <!--begin::Icon-->
                           <div class="m-0">
                              <i class="ki-outline ki-chart-simple fs-2hx text-gray-600"></i>
                           </div>
                           <!--end::Icon-->
                           <!--begin::Section-->
                           <div class="d-flex flex-column my-7">
                              <!--begin::Number-->
                              <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">27,5M</span>
                              <!--end::Number-->
                              <!--begin::Follower-->
                              <div class="m-0">
                                 <span class="fw-semibold fs-6 text-gray-400">Recent Appointments</span>
                              </div>
                              <!--end::Follower-->
                           </div>
                           <!--end::Section-->
                           <!--begin::Badge-->
                           <span class="badge badge-light-success fs-base">
                           <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.1%</span>
                           <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                     </div>
                     <!--end::Card widget 2-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-sm-6 col-xl-2 mb-xl-10">
                     <!--begin::Card widget 2-->
                     <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                           <!--begin::Icon-->
                           <div class="m-0">
                              <i class="ki-outline ki-abstract-39 fs-2hx text-gray-600"></i>
                           </div>
                           <!--end::Icon-->
                           <!--begin::Section-->
                           <div class="d-flex flex-column my-7">
                              <!--begin::Number-->
                              <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">149M</span>
                              <!--end::Number-->
                              <!--begin::Follower-->
                              <div class="m-0">
                                 <span class="fw-semibold fs-6 text-gray-400">Total Clients</span>
                              </div>
                              <!--end::Follower-->
                           </div>
                           <!--end::Section-->
                           <!--begin::Badge-->
                           <span class="badge badge-light-danger fs-base">
                           <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.47%</span>
                           <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                     </div>
                     <!--end::Card widget 2-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-sm-6 col-xl-2 mb-xl-10">
                     <!--begin::Card widget 2-->
                     <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                           <!--begin::Icon-->
                           <div class="m-0">
                              <i class="ki-outline ki-map fs-2hx text-gray-600"></i>
                           </div>
                           <!--end::Icon-->
                           <!--begin::Section-->
                           <div class="d-flex flex-column my-7">
                              <!--begin::Number-->
                              <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">89M</span>
                              <!--end::Number-->
                              <!--begin::Follower-->
                              <div class="m-0">
                                 <span class="fw-semibold fs-6 text-gray-400">C Total Visit</span>
                              </div>
                              <!--end::Follower-->
                           </div>
                           <!--end::Section-->
                           <!--begin::Badge-->
                           <span class="badge badge-light-success fs-base">
                           <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.1%</span>
                           <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                     </div>
                     <!--end::Card widget 2-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
                     <!--begin::Card widget 2-->
                     <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                           <!--begin::Icon-->
                           <div class="m-0">
                              <i class="ki-outline ki-abstract-35 fs-2hx text-gray-600"></i>
                           </div>
                           <!--end::Icon-->
                           <!--begin::Section-->
                           <div class="d-flex flex-column my-7">
                              <!--begin::Number-->
                              <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">72.4%</span>
                              <!--end::Number-->
                              <!--begin::Follower-->
                              <div class="m-0">
                                 <span class="fw-semibold fs-6 text-gray-400">Returning Clients</span>
                              </div>
                              <!--end::Follower-->
                           </div>
                           <!--end::Section-->
                           <!--begin::Badge-->
                           <span class="badge badge-light-danger fs-base">
                           <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.647%</span>
                           <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                     </div>
                     <!--end::Card widget 2-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
                     <!--begin::Card widget 2-->
                     <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                           <!--begin::Icon-->
                           <div class="m-0">
                              <i class="ki-outline ki-abstract-26 fs-2hx text-gray-600"></i>
                           </div>
                           <!--end::Icon-->
                           <!--begin::Section-->
                           <div class="d-flex flex-column my-7">
                              <!--begin::Number-->
                              <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">106M</span>
                              <!--end::Number-->
                              <!--begin::Follower-->
                              <div class="m-0">
                                 <span class="fw-semibold fs-6 text-gray-400">New Clients</span>
                              </div>
                              <!--end::Follower-->
                           </div>
                           <!--end::Section-->
                           <!--begin::Badge-->
                           <span class="badge badge-light-success fs-base">
                           <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.1%</span>
                           <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                     </div>
                     <!--end::Card widget 2-->
                  </div>
                  <!--end::Col-->
               </div>
               <!--end::Row-->
               <!--begin::Row-->
               <div class="row gy-5 g-xl-10">
                  <div class="col-lg-6 col-xxl-6 mb-10">
                     <!--begin::Tab content-->
                     <div class="tab-content mt-5">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="homedatetable1" role="tab-panel">
                           <!--begin::Timeline widget 3-->
                           <div class="card h-md-100">
                              <!--begin::Header-->
                              <div class="card-header border-0 pt-5">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">What’s up Today</span>
                                    <span class="text-muted mt-1 fw-semibold fs-7">Total 6 Appointments Today</span>
                                 </h3>
                              </div>
                              <!--end::Header-->
                              <!--begin::Body-->
                              <div class="card-body pt-7 px-0">
                                 <!--begin::Nav-->             
                                 <ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5" role="tablist">
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger active" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1" aria-selected="true" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">Fr</span>
                                       <span class="fs-6 fw-bold">20</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_2" aria-selected="false" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">Sa</span>
                                       <span class="fs-6 fw-bold">21</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_3" aria-selected="false" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">Su</span>
                                       <span class="fs-6 fw-bold">22</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_4" aria-selected="false" role="tab">
                                       <span class="fs-7 fw-semibold">Tu</span>
                                       <span class="fs-6 fw-bold">23</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_5" aria-selected="false" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">Tu</span>
                                       <span class="fs-6 fw-bold">24</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_6" aria-selected="false" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">We</span>
                                       <span class="fs-6 fw-bold">25</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_7" aria-selected="false" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">Th</span>
                                       <span class="fs-6 fw-bold">26</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_8" aria-selected="false" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">Fri</span>
                                       <span class="fs-6 fw-bold">27</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_9" aria-selected="false" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">Sa</span>
                                       <span class="fs-6 fw-bold">28</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_10" aria-selected="false" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">Su</span>
                                       <span class="fs-6 fw-bold">29</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                 </ul>
                                 <!--end::Nav-->
                                 <!--begin::Tab Content (ishlamayabdi)-->
                                 <div class="tab-content mb-2 px-9">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade active show" id="kt_timeline_widget_3_tab_content_1" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_2" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_3" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->  
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_4" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_5" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_6" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_7" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_8" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_9" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_10" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_11" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                 </div>
                                 <!--end::Tab Content-->   
                              </div>
                              <!--end: Card Body-->
                           </div>
                           <!--end::Timeline widget 3--> 
                        </div>
                        <!--end::Tab pane-->
                     </div>
                  </div>
                  <!--end::Tab content-->
                  <div class="col-lg-6 col-xl-6 col-xxl-6 mb-10">
                     <!--begin::Tab content-->
                     <div class="tab-content mt-5">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="homedatetable1" role="tab-panel">
                           <!--begin::Timeline widget 3-->
                           <div class="card h-md-100">
                              <!--begin::Header-->
                              <div class="card-header border-0 pt-5">
                                 <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Actions Required - Upcoming appointments</span>
                                 </h3>
                              </div>
                              <!--end::Header-->
                              <!--begin::Body-->
                              <div class="card-body pt-7 px-0">
                                 <!--begin::Nav-->             
                                 <ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5" role="tablist">
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger active" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1" aria-selected="true" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">Fr</span>
                                       <span class="fs-6 fw-bold">20</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_2" aria-selected="false" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">Sa</span>
                                       <span class="fs-6 fw-bold">21</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_3" aria-selected="false" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">Su</span>
                                       <span class="fs-6 fw-bold">22</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_4" aria-selected="false" role="tab">
                                       <span class="fs-7 fw-semibold">Tu</span>
                                       <span class="fs-6 fw-bold">23</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_5" aria-selected="false" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">Tu</span>
                                       <span class="fs-6 fw-bold">24</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_6" aria-selected="false" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">We</span>
                                       <span class="fs-6 fw-bold">25</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_7" aria-selected="false" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">Th</span>
                                       <span class="fs-6 fw-bold">26</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_8" aria-selected="false" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">Fri</span>
                                       <span class="fs-6 fw-bold">27</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_9" aria-selected="false" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">Sa</span>
                                       <span class="fs-6 fw-bold">28</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item p-0 ms-0" role="presentation">
                                       <!--begin::Date-->
                                       <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_10" aria-selected="false" role="tab" tabindex="-1">
                                       <span class="fs-7 fw-semibold">Su</span>
                                       <span class="fs-6 fw-bold">29</span>                      
                                       </a>             
                                       <!--end::Date-->       
                                    </li>
                                    <!--end::Nav item-->
                                 </ul>
                                 <!--end::Nav-->
                                 <!--begin::Tab Content (ishlamayabdi)-->
                                 <div class="tab-content mb-2 px-9">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade active show" id="kt_timeline_widget_3_tab_content_1" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_2" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_3" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->  
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_4" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_5" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_6" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_7" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_8" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_9" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_10" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_11" role="tabpanel">
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                       <!--begin::Wrapper-->
                                       <div class="d-flex align-items-center mb-6">
                                          <!--begin::Bullet-->
                                          <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-50px mh-100 me-4 bg-warning"></span>
                                          <!--end::Bullet-->
                                          <!--begin::Info-->
                                          <div class="d-flex justify-content-between align-items-center flex-grow-1 hometable">
                                             <div class="d-flex flex-column w-auto">
                                                <!--begin::Time-->
                                                <span class="text-gray-800 fw-semibold fs-3">
                                                10:20 - 11:00 AM
                                                </span>
                                                <!--end::Time-->
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                11 jul 2023                                        
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column text-start w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                Hair cut & gentle blow dry</span>
                                                <span class="text-gray-600 fw-semibold fs-6">
                                                40 min                                        
                                                </span>
                                             </div>
                                             <!--begin::Users group-->
                                             <div class="symbol-group symbol-hover flex-nowrap w-auto mx-auto">
                                                <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="Michael Eberon">
                                                   <img alt="Pic" src="{{ asset('/public/assets/media/avatars/300-11.jpg') }}" />
                                                </div>
                                             </div>
                                             <!--end::Users group-->
                                             <div class="w-auto mx-auto">
                                                <span class="text-gray-400 fw-semibold fs-7">
                                                20$                                        
                                                </span>
                                             </div>
                                             <div class="ms-auto">
                                                <span class="badge badge-primary">New</span>
                                             </div>
                                          </div>
                                          <!--end::Info-->
                                       </div>
                                       <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tap pane-->    
                                 </div>
                                 <!--end::Tab Content-->   
                              </div>
                              <!--end: Card Body-->
                           </div>
                           <!--end::Timeline widget 3--> 
                        </div>
                        <!--end::Tab pane-->
                     </div>
                  </div>
                  <!--end::Tab content-->
               </div>
               <!--end::Row-->
               <!--begin::Row-->
               <div class="row g-5 g-xl-8">
                  <!--begin::Col-->
                  <div class="col-xl-6">
                     <!--begin::Mixed Widget 10-->
                     <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0 d-flex justify-content-start flex-column overflow-hidden">
                           <!--begin::Hidden-->
                           <div class="d-flex flex-stack flex-wrap flex-grow-0 card-body">
                              <div class="d-flex flex-column me-2">
                                 <span class="fw-bold text-gray-800 d-block fs-3">Sales</span>
                                 <div class="d-flex gap-3 align-items-center">
                                    <a class="prevBtn cursor-pointer">
                                    <i class="bi bi-chevron-left fs-6"></i>
                                    </a>
                                    <span class="text-gray-400 fs-4 fw-semibold dateRangeDisplay">Loading...</span>
                                    <a class="nextBtn cursor-pointer">
                                    <i class="bi bi-chevron-right fs-6"></i>
                                    </a>
                                 </div>
                              </div>
                              <div>
                                 <div class="fw-bold fs-3 text-info">$15,300</div>
                                 <div class="fw-bold fs-6 text-info">$15,300</div>
                              </div>
                           </div>
                           <!--end::Hidden-->
                           <!--begin::Chart-->
                           <div class="mixed-widget-10-chart" data-kt-color="info" style="height: 200px"></div>
                           <!--end::Chart-->
                        </div>
                     </div>
                     <!--end::Mixed Widget 10-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-xl-6">
                     <!--begin::Mixed Widget 10-->
                     <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0 d-flex justify-content-start flex-column overflow-hidden">
                           <!--begin::Hidden-->
                           <div class="d-flex flex-stack flex-wrap flex-grow-0 card-body">
                              <div class="d-flex flex-column me-2">
                                 <span class="fw-bold text-gray-800 d-block fs-3">Clients</span>
                                 <div class="d-flex gap-3 align-items-center">
                                    <a class="prevBtn cursor-pointer">
                                    <i class="bi bi-chevron-left fs-6"></i>
                                    </a>
                                    <span class="text-gray-400 fs-4 fw-semibold dateRangeDisplay">Loading...</span>
                                    <a class="nextBtn cursor-pointer">
                                    <i class="bi bi-chevron-right fs-6"></i>
                                    </a>
                                 </div>
                              </div>
                              <div>
                                 <div class="fw-bold fs-3 text-warning">$15,300</div>
                                 <div class="fw-bold fs-6 text-warning">$15,300</div>
                              </div>
                           </div>
                           <!--end::Hidden-->
                           <!--begin::Chart-->
                           <div class="mixed-widget-10-chart" data-kt-color="warning" style="height: 200px"></div>
                           <!--end::Chart-->
                        </div>
                     </div>
                     <!--end::Mixed Widget 10-->
                  </div>
                  <!--end::Col-->
               </div>
               <!--end::Row-->
               <!--begin::Row-->
               <div class="row g-5 g-xl-8">
                  <!--begin::Col-->
                  <div class="col-xl-6">
                     <!--begin::Mixed Widget 10-->
                     <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-5 d-flex justify-content-between flex-column overflow-hidden gap-4">
                           <span class="fw-bold text-gray-800 d-block fs-2">Review & Ratings</span>
                           <span class="text-gray-400 d-block fs-6">11 July, 2023</span>
                           <div class="brdr p-2 d-flex justify-content-between align-items-center cursor-pointer" id="kt_drawer_example_permanent_toggle">
                              <div class="symbol-group symbol-hover flex-nowrap">
                                 <div class="symbol symbol-35px" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                    <span class="symbol-label bg-warning text-inverse-warning fw-bold">AW</span>
                                 </div>
                              </div>
                              <span class="text-gray-400 d-block fs-6 ms-2">Manicure & Pedicure</span>
                              <div class="rating ms-auto">
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="brdr p-2 d-flex justify-content-between align-items-center cursor-pointer" id="kt_drawer_example_permanent_toggle">
                              <div class="symbol-group symbol-hover flex-nowrap">
                                 <div class="symbol symbol-35px" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                    <span class="symbol-label bg-info text-inverse-info fw-bold">NK</span>
                                 </div>
                              </div>
                              <span class="text-gray-400 d-block fs-6 ms-2">Manicure & Pedicure</span>
                              <div class="rating ms-auto">
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="brdr p-2 d-flex justify-content-between align-items-center cursor-pointer" id="kt_drawer_example_permanent_toggle">
                              <div class="symbol-group symbol-hover flex-nowrap">
                                 <div class="symbol symbol-35px" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">JS</span>
                                 </div>
                              </div>
                              <span class="text-gray-400 d-block fs-6 ms-2">Manicure & Pedicure</span>
                              <div class="rating ms-auto">
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                              </div>
                           </div>
                           <span class="text-gray-400 d-block fs-6">11 July, 2023</span>
                           <div class="brdr p-2 d-flex justify-content-between align-items-center cursor-pointer" id="kt_drawer_example_permanent_toggle">
                              <div class="symbol-group symbol-hover flex-nowrap">
                                 <div class="symbol symbol-35px" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">JS</span>
                                 </div>
                              </div>
                              <span class="text-gray-400 d-block fs-6 ms-2">Manicure & Pedicure</span>
                              <div class="rating ms-auto">
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                                 <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-3"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--end::Mixed Widget 10-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-xl-6">
                     <!--begin::Mixed Widget 10-->
                     <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0 d-flex justify-content-start flex-column overflow-hidden">
                           <!--begin::Hidden-->
                           <div class="d-flex flex-stack flex-wrap flex-grow-0 card-body">
                              <div class="me-2">
                                 <span class="fw-bold text-gray-800 d-block fs-3">Top Selling Category</span>
                                 <span class="text-gray-400 fw-bold">8k social visitors</span>
                              </div>
                              <div>
                                 <a href="#" class="btn btn-sm btn-light">View all</a>
                              </div>
                           </div>
                           <!--end::Hidden-->
                           <!--begin::Body-->
                           <div class="card-body pt-5 ps-6">
                              <div id="kt_charts_widget_6_cstm" class="min-h-auto"></div>
                           </div>
                           <!--end::Body-->
                        </div>
                     </div>
                     <!--end::Mixed Widget 10-->
                  </div>
                  <!--end::Col-->
               </div>
               <!--end::Row-->
               <!--begin::Row-->
               <div class="row g-5 g-xl-8">
                  <!--begin::Col-->
                  <div class="col-xl-6">
                     <!--begin::Mixed Widget 10-->
                     <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0 d-flex justify-content-start flex-column overflow-hidden">
                           <!--begin::Hidden-->
                           <div class="d-flex flex-stack flex-wrap flex-grow-0 card-body">
                              <div class="me-2">
                                 <span class="fw-bold text-gray-800 d-block fs-3">Top Selling Item</span>
                              </div>
                              <div>
                                 <!-- <a href="#" class="btn btn-sm btn-light">View all</a> -->
                              </div>
                           </div>
                           <!--end::Hidden-->
                           <div class="card-body pb-0">
                              <!--begin:::Tabs-->
                              <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-5">
                                 <!--begin:::Tab item-->
                                 <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-2 me-2 active" data-bs-toggle="tab" href="#sellingitem_service">Services</a>
                                 </li>
                                 <!--end:::Tab item-->
                                 <!--begin:::Tab item-->
                                 <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-2 mx-2" data-bs-toggle="tab" href="#sellingitem_package">Package</a>
                                 </li>
                                 <!--end:::Tab item-->
                                 <!--begin:::Tab item-->
                                 <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-2 mx-2" data-bs-toggle="tab" href="#sellingitem_voucher">Voucher</a>
                                 </li>
                                 <!--end:::Tab item-->
                                 <!--begin:::Tab item-->
                                 <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-2 mx-2" data-bs-toggle="tab" href="#sellingitem_membership">Membership</a>
                                 </li>
                                 <!--end:::Tab item-->
                                 <!--begin:::Tab item-->
                                 <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-2 mx-2" data-bs-toggle="tab" href="#sellingitem_product">Product</a>
                                 </li>
                                 <!--end:::Tab item-->
                              </ul>
                              <!--end:::Tabs-->
                           </div>
                           <!--begin:::Tab content-->
                           <div class="tab-content" id="myTabContent">
                              <!--begin:::Tab pane-->
                              <div class="tab-pane fade show active" id="sellingitem_service" role="tabpanel">
                                 <div id="sellingitmchart"></div>
                              </div>
                              <!--end:::Tab pane-->
                              <!--begin:::Tab pane-->
                              <div class="tab-pane fade" id="sellingitem_package" role="tabpanel">
                                 <div id="sellingitmchart2"></div>
                              </div>
                              <!--end:::Tab pane-->
                              <!--begin:::Tab pane-->
                              <div class="tab-pane fade" id="sellingitem_voucher" role="tabpanel">
                                 <div id="sellingitmchart3"></div>
                              </div>
                              <!--end:::Tab pane-->
                              <!--begin:::Tab pane-->
                              <div class="tab-pane fade" id="sellingitem_membership" role="tabpanel">
                                 <div id="sellingitmchart4"></div>
                              </div>
                              <!--end:::Tab pane-->
                              <!--begin:::Tab pane-->
                              <div class="tab-pane fade" id="sellingitem_product" role="tabpanel">
                                 <div id="sellingitmchart5"></div>
                              </div>
                              <!--end:::Tab pane-->
                           </div>
                        </div>
                     </div>
                     <!--end::Mixed Widget 10-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-xl-6">
                     <!--begin::Mixed Widget 10-->
                     <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header flex-nowrap pt-5">
                           <!--begin::Title-->
                           <h3 class="card-title align-items-start flex-column">
                              <span class="card-label fw-bold text-dark">Top Performing Staff</span>
                              <span class="text-gray-400 pt-2 fw-semibold fs-6">8k social visitors</span>
                           </h3>
                           <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5 ps-6">
                           <div id="kt_charts_widget_5_cstm" class="min-h-auto"></div>
                        </div>
                        <!--end::Body-->
                     </div>
                     <!--end::Mixed Widget 10-->
                  </div>
                  <!--end::Col-->
               </div>
               <!--end::Row-->
               <!--begin::Row-->
               <div class="row g-5 g-xl-8">
                  <!--begin::Col-->
                  <div class="col-xl-8">
                     <!--begin::Chart widget 10-->
                     <div class="card card-flush h-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                           <!--begin::Title-->
                           <h3 class="card-title align-items-start flex-column">
                              <span class="card-label fw-bold text-gray-800">Freight Tonnage</span>
                              <span class="text-gray-400 mt-1 fw-semibold fs-6">3,567,457 tons</span>
                           </h3>
                           <!--end::Title-->
                           <!--begin::Toolbar-->
                           <div class="card-toolbar">
                              <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                              <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                                 <!--begin::Display range-->
                                 <div class="text-gray-600 fw-bold">Loading date range...</div>
                                 <!--end::Display range-->
                                 <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0">
                                 <span class="path1"></span>
                                 <span class="path2"></span>
                                 <span class="path3"></span>
                                 <span class="path4"></span>
                                 <span class="path5"></span>
                                 <span class="path6"></span>
                                 </i>
                              </div>
                              <!--end::Daterangepicker-->
                           </div>
                           <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column justify-content-between pb-5 px-0">
                           <!--begin::Nav-->
                           <ul class="nav nav-pills nav-pills-custom mb-3 mx-9">
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-90px h-85px pt-5 pb-2 active" data-bs-toggle="pill" id="kt_charts_widget_10_tab_1_cstm" href="#kt_charts_widget_10_tab_content_1_cstm">
                                    <!--begin::Icon-->
                                    <div class="nav-icon mb-3">
                                       <i class="ki-duotone ki-ship fs-1 p-0">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       <span class="path3"></span>
                                       </i>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <span class="nav-text text-gray-800 fw-bold fs-7 lh-1">All</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                 </a>
                                 <!--end::Link-->
                              </li>
                              <!--end::Item-->
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-90px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_10_tab_2_cstm" href="#kt_charts_widget_10_tab_content_2_cstm">
                                    <!--begin::Icon-->
                                    <div class="nav-icon mb-3">
                                       <i class="ki-duotone ki-truck fs-1 p-0">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       <span class="path3"></span>
                                       <span class="path4"></span>
                                       <span class="path5"></span>
                                       </i>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <span class="nav-text text-gray-800 fw-bold fs-7 lh-1">Service</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                 </a>
                                 <!--end::Link-->
                              </li>
                              <!--end::Item-->
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-90px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_10_tab_3_cstm" href="#kt_charts_widget_10_tab_content_3_cstm">
                                    <!--begin::Icon-->
                                    <div class="nav-icon mb-3">
                                       <i class="ki-duotone ki-airplane-square fs-1 p-0">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <span class="nav-text text-gray-800 fw-bold fs-7 lh-1">Package</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                 </a>
                                 <!--end::Link-->
                              </li>
                              <!--end::Item-->
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-90px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_10_tab_4_cstm" href="#kt_charts_widget_10_tab_content_4_cstm">
                                    <!--begin::Icon-->
                                    <div class="nav-icon mb-3">
                                       <i class="ki-duotone ki-bus fs-1 p-0">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       <span class="path3"></span>
                                       <span class="path4"></span>
                                       <span class="path5"></span>
                                       </i>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <span class="nav-text text-gray-800 fw-bold fs-7 lh-1">Voucher</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                 </a>
                                 <!--end::Link-->
                              </li>
                              <!--end::Item-->
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-90px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_10_tab_5_cstm" href="#kt_charts_widget_10_tab_content_5_cstm">
                                    <!--begin::Icon-->
                                    <div class="nav-icon mb-3">
                                       <i class="ki-duotone ki-bus fs-1 p-0">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       <span class="path3"></span>
                                       <span class="path4"></span>
                                       <span class="path5"></span>
                                       </i>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <span class="nav-text text-gray-800 fw-bold fs-7 lh-1">Membership</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                 </a>
                                 <!--end::Link-->
                              </li>
                              <!--end::Item-->
                              <!--begin::Item-->
                              <li class="nav-item mb-3 me-3 me-lg-6">
                                 <!--begin::Link-->
                                 <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-90px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_10_tab_6_cstm" href="#kt_charts_widget_10_tab_content_6_cstm">
                                    <!--begin::Icon-->
                                    <div class="nav-icon mb-3">
                                       <i class="ki-duotone ki-bus fs-1 p-0">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       <span class="path3"></span>
                                       <span class="path4"></span>
                                       <span class="path5"></span>
                                       </i>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <span class="nav-text text-gray-800 fw-bold fs-7 lh-1">Product</span>
                                    <!--end::Title-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                 </a>
                                 <!--end::Link-->
                              </li>
                              <!--end::Item-->
                           </ul>
                           <!--end::Nav-->
                           <!--begin::Tab Content-->
                           <div class="tab-content ps-4 pe-6">
                              <!--begin::Tap pane-->
                              <div class="tab-pane fade active show" id="kt_charts_widget_10_tab_content_1_cstm">
                                 <!--begin::Chart-->
                                 <div id="kt_charts_widget_10_chart_1_cstm" class="min-h-auto" style="height: 270px"></div>
                                 <!--end::Chart-->
                              </div>
                              <!--end::Tap pane-->
                              <!--begin::Tap pane-->
                              <div class="tab-pane fade" id="kt_charts_widget_10_tab_content_2_cstm">
                                 <!--begin::Chart-->
                                 <div id="kt_charts_widget_10_chart_2_cstm" class="min-h-auto" style="height: 270px"></div>
                                 <!--end::Chart-->
                              </div>
                              <!--end::Tap pane-->
                              <!--begin::Tap pane-->
                              <div class="tab-pane fade" id="kt_charts_widget_10_tab_content_3_cstm">
                                 <!--begin::Chart-->
                                 <div id="kt_charts_widget_10_chart_3_cstm" class="min-h-auto" style="height: 270px"></div>
                                 <!--end::Chart-->
                              </div>
                              <!--end::Tap pane-->
                              <!--begin::Tap pane-->
                              <div class="tab-pane fade" id="kt_charts_widget_10_tab_content_4_cstm">
                                 <!--begin::Chart-->
                                 <div id="kt_charts_widget_10_chart_4_cstm" class="min-h-auto" style="height: 270px"></div>
                                 <!--end::Chart-->
                              </div>
                              <!--end::Tap pane-->
                              <!--begin::Tap pane-->
                              <div class="tab-pane fade" id="kt_charts_widget_10_tab_content_5_cstm">
                                 <!--begin::Chart-->
                                 <div id="kt_charts_widget_10_chart_5_cstm" class="min-h-auto" style="height: 270px"></div>
                                 <!--end::Chart-->
                              </div>
                              <!--end::Tap pane-->
                              <!--begin::Tap pane-->
                              <div class="tab-pane fade" id="kt_charts_widget_10_tab_content_6_cstm">
                                 <!--begin::Chart-->
                                 <div id="kt_charts_widget_10_chart_6_cstm" class="min-h-auto" style="height: 270px"></div>
                                 <!--end::Chart-->
                              </div>
                              <!--end::Tap pane-->
                           </div>
                           <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                     </div>
                     <!--end::Chart widget 10-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-xl-4">
                     <!--begin::Chart widget 19-->
                     <div class="card card-flush h-100 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                           <!--begin::Title-->
                           <h3 class="card-title align-items-start flex-column">
                              <span class="card-label fw-bold text-dark">Monthly target</span>
                              <span class="text-gray-400 pt-2 fw-semibold fs-6">Based on 10% growth over last month</span>
                           </h3>
                           <!--end::Title-->
                           <a href="#" data-bs-toggle="modal" data-bs-target="#monthlytarget">
                           <span class="text-gray-400 pt-2 fw-semibold fs-6">Set target</span>
                           </a>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                           <!--begin::Chart container-->
                           <div id="kt_charts_widget_19_chart_1_cstm" class="w-100 h-400px mt-n4"></div>
                           <!--end::Chart container-->
                        </div>
                        <!--end::Body-->
                     </div>
                     <!--end::Chart widget 19-->
                  </div>
                  <!--end::Col-->
               </div>
               <!--end::Row-->
               <!--begin::Row-->
               <div class="row g-5 g-xl-8 mt-5">
                  <!--begin::Col-->
                  <div class="col-md-6">
                     <div class="card card-flush h-100 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-7 mb-4">
                           <!--begin::Title-->
                           <h3 class="card-title align-items-start flex-column">
                              <span class="card-label fw-bold text-dark">Best rated staff</span>
                           </h3>
                           <!--end::Title-->
                           <div class="d-flex gap-3 align-items-center">
                              <a class="prevBtn cursor-pointer">
                              <i class="bi bi-chevron-left fs-6"></i>
                              </a>
                              <span class="text-gray-400 fs-4 fw-semibold dateRangeDisplay">Loading...</span>
                              <a class="nextBtn cursor-pointer">
                              <i class="bi bi-chevron-right fs-6"></i>
                              </a>
                           </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                           <div class="d-flex flex-column gap-4">
                              <div class="brdr p-2 d-flex justify-content-between align-items-center">
                                 <div class="symbol-group symbol-hover flex-nowrap">
                                    <div class="symbol symbol-35px">
                                       <span class="symbol-label bg-warning text-inverse-warning fw-bold">JR</span>
                                    </div>
                                 </div>
                                 <div class="ms-2">
                                    <span class="text-gray-800 d-block fs-4">Jack Rawt</span>
                                    <span class="text-gray-400 d-block fs-6">No. of services: <span>559</span></span>
                                 </div>
                                 <div class="rating ms-auto">
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-3"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-3"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-3"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-3"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-3"></i>
                                    </div>
                                 </div>
                              </div>
                              <div class="brdr p-2 d-flex justify-content-between align-items-center">
                                 <div class="symbol-group symbol-hover flex-nowrap">
                                    <div class="symbol symbol-35px">
                                       <span class="symbol-label bg-warning text-inverse-warning fw-bold">JS</span>
                                    </div>
                                 </div>
                                 <div class="ms-2">
                                    <span class="text-gray-800 d-block fs-4">John Shukla</span>
                                    <span class="text-gray-400 d-block fs-6">No. of services: <span>628</span></span>
                                 </div>
                                 <div class="rating ms-auto">
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-3"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-3"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-3"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-3"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-3"></i>
                                    </div>
                                 </div>
                              </div>
                              <span class="text-gray-400 d-block fs-6">11 July, 2023</span>
                              <div class="brdr p-2 d-flex justify-content-between align-items-center">
                                 <div class="symbol-group symbol-hover flex-nowrap">
                                    <div class="symbol symbol-35px">
                                       <span class="symbol-label bg-warning text-inverse-warning fw-bold">SG</span>
                                    </div>
                                 </div>
                                 <div class="ms-2">
                                    <span class="text-gray-800 d-block fs-4">Sonia Gandhi</span>
                                    <span class="text-gray-400 d-block fs-6">No. of services: <span>323</span></span>
                                 </div>
                                 <div class="rating ms-auto">
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-3"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-3"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-3"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-3"></i>
                                    </div>
                                    <div class="rating-label checked">
                                       <i class="ki-duotone ki-star fs-3"></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--end::Body-->
                     </div>
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-md-6">
                     <div class="card card-flush h-100 mb-5 mb-xl-10">
                        <!--begin::Header-->
                        <div class="card-header pt-7 mb-4">
                           <!--begin::Title-->
                           <h3 class="card-title align-items-start flex-column">
                              <span class="card-label fw-bold text-dark">Next 30 Days Birthday</span>
                              <span class="text-gray-400 pt-2 fw-semibold fs-6">wish your client and delight them with Birthday special discount</span>
                           </h3>
                           <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                           <!--begin::Table-->
                           <table class="table align-middle table-row-dashed fs-6 gy-3 tdmid">
                              <!--begin::Table head-->
                              <thead>
                                 <!--begin::Table row-->
                                 <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-100px">Name</th>
                                    <th class="w-150px">Contact No.</th>
                                    <th class="w-150px">Date</th>
                                    <th class="w-100px">BSD</th>
                                 </tr>
                                 <!--end::Table row-->
                              </thead>
                              <!--end::Table head-->
                              <!--begin::Table body-->
                              <tbody class="fw-bold text-gray-600">
                                 <tr>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td>Suresh</td>
                                    <!--end::Product ID-->
                                    <td>9836575438</td>
                                    <!--begin::Date added-->
                                    <td>17 july</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td>
                                       <a href="#" data-bs-toggle="modal" data-bs-target="#birthdayspecial">
                                       <i class="bi bi-cash-coin fs-1"></i>
                                       </a>
                                    </td>
                                    <!--end::Price-->
                                 </tr>
                                 <tr>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td>Raina</td>
                                    <!--end::Product ID-->
                                    <td>9836575438</td>
                                    <!--begin::Date added-->
                                    <td>21 july</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td>
                                       <a href="#" data-bs-toggle="modal" data-bs-target="#birthdayspecial">
                                       <i class="bi bi-cash-coin fs-1"></i>
                                       </a>
                                    </td>
                                    <!--end::Price-->
                                 </tr>
                                 <tr>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td>Suresh</td>
                                    <!--end::Product ID-->
                                    <td>9836575438</td>
                                    <!--begin::Date added-->
                                    <td>17 july</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td>
                                       <a href="#" data-bs-toggle="modal" data-bs-target="#birthdayspecial">
                                       <i class="bi bi-cash-coin fs-1"></i>
                                       </a>
                                    </td>
                                    <!--end::Price-->
                                 </tr>
                                 <tr>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td>Raina</td>
                                    <!--end::Product ID-->
                                    <td>9836575438</td>
                                    <!--begin::Date added-->
                                    <td>21 july</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td>
                                       <a href="#" data-bs-toggle="modal" data-bs-target="#birthdayspecial">
                                       <i class="bi bi-cash-coin fs-1"></i>
                                       </a>
                                    </td>
                                    <!--end::Price-->
                                 </tr>
                              </tbody>
                              <!--end::Table body-->
                           </table>
                           <!--end::Table-->
                        </div>
                        <!--end::Body-->
                     </div>
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-12">
                     <div class="card card-flush h-xxl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7 mb-4">
                           <!--begin::Title-->
                           <h3 class="card-title align-items-start flex-column">
                              <span class="card-label fw-bold text-gray-800">Expiring Voucher / Membership</span>
                              <span class="text-gray-400 mt-1 fw-semibold fs-6">Intimate client so that they can consume it before it get expire</span>
                           </h3>
                           <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                           <div class="row">
                              <div class="col-md-6 my-3">
                                 <div class="card-body brdr">
                                    <div class="d-flex gap-4">
                                       <div class="symbol symbol-75px symbol-circle me-3">
                                          <img src="{{ asset('/public/assets/media/avatars/300-3.jpg') }}" class="" alt="">
                                       </div>
                                       <div class="d-flex flex-column">
                                          <span class="text-gray-800 fw-bold fs-5">Emma Smith</span>
                                          <span class="text-gray-400 fs-6 mb-4">9587456915</span>
                                          <span class="text-gray-800 fw-bold fs-5">The VIP Members</span>
                                          <div class="d-flex gap-5">
                                             <span class="text-gray-400 fs-6 mb-4">Service value: <span class="text-gray-800 fw-semibold">SGD 2900</span></span>
                                             <span class="text-gray-400 fs-6 mb-4">Valdity: <span class="text-gray-800 fw-semibold">No expiry</span></span>	
                                          </div>
                                          <div class="progress">
                                             <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <div class="d-flex justify-content-end">
                                             <span class="text-gray-400 fs-6">70%</span>	
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 my-3">
                                 <div class="card-body brdr">
                                    <div class="d-flex gap-4">
                                       <div class="symbol symbol-75px symbol-circle me-3">
                                          <img src="{{ asset('/public/assets/media/avatars/300-3.jpg') }}" class="" alt="">
                                       </div>
                                       <div class="d-flex flex-column">
                                          <span class="text-gray-800 fw-bold fs-5">Emma Smith</span>
                                          <span class="text-gray-400 fs-6 mb-4">9587456915</span>
                                          <span class="text-gray-800 fw-bold fs-5">Smooth leg throughout the year</span>
                                          <div class="d-flex gap-5">
                                             <span class="text-gray-400 fs-6 mb-4">Sessions:  <span class="text-gray-800 fw-semibold">8</span></span>
                                             <span class="text-gray-400 fs-6 mb-4">Valdity: <span class="text-gray-800 fw-semibold">6 months</span></span>	
                                          </div>
                                          <div class="progress">
                                             <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <div class="d-flex justify-content-end">
                                             <span class="text-gray-400 fs-6">6/8</span>	
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--end::Body-->
                     </div>
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-12">
                     <div class="card card-flush h-xxl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                           <!--begin::Title-->
                           <h3 class="card-title align-items-start flex-column">
                              <span class="card-label fw-bold text-gray-800">Product sale & stock alert</span>
                              <span class="text-gray-400 mt-1 fw-semibold fs-6">Product sale & stock alert</span>
                           </h3>
                           <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                           <!--begin::Table-->
                           <table class="table align-middle table-row-dashed fs-6 gy-3 tdmid">
                              <!--begin::Table head-->
                              <thead>
                                 <!--begin::Table row-->
                                 <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-100px">Product Name</th>
                                    <th class="w-100px">Brand</th>
                                    <th class="w-100px">Pack size</th>
                                    <th class="w-100px">Stock on hand</th>
                                    <th class="w-100px">Average Sale (monthly)</th>
                                    <th class="w-100px">Qty Sold</th>
                                    <th class="w-100px">Order Qty (Alert)</th>
                                 </tr>
                                 <!--end::Table row-->
                              </thead>
                              <!--end::Table head-->
                              <!--begin::Table body-->
                              <tbody class="fw-bold text-gray-600">
                                 <tr>
                                    <td>Shampoo</td>
                                    <td>Loreal</td>
                                    <td>100</td>
                                    <td>200</td>
                                    <td>150</td>
                                    <td>500</td>
                                    <td>100</td>
                                 </tr>
                                 <tr>
                                    <td>Face Massage Cream</td>
                                    <td>Lakme</td>
                                    <td>100</td>
                                    <td>200</td>
                                    <td>150</td>
                                    <td>500</td>
                                    <td>100</td>
                                 </tr>
                                 <tr>
                                    <td>Hair Styling Gel</td>
                                    <td>Loreal</td>
                                    <td>100</td>
                                    <td>200</td>
                                    <td>150</td>
                                    <td>500</td>
                                    <td>100</td>
                                 </tr>
                              </tbody>
                              <!--end::Table body-->
                           </table>
                           <!--end::Table-->
                        </div>
                        <!--end::Body-->
                     </div>
                  </div>
                  <!--end::Col-->
               </div>
               <!--end::Row-->
            </div>
            <!--end::Content container-->
         </div>
         <!--end::Content-->
      </div>
      <!--end::Content wrapper-->
   </div>
   <!--end:::Main-->
</div>
<!--end::Wrapper-->

</div>
<!--end::Page-->
</div>
<!--end::App-->
<div class="modal fade" tabindex="-1" id="kt_modal_1">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h3 class="modal-title">Modal title</h3>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 close_form" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <p>Modal body text goes here.</p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
         </div>
      </div>
   </div>
</div>
<!--begin::Modals-->
<div class="modal fade" tabindex="-1" id="birthdayspecial">
   <div class="modal-dialog modal-xl">
      <div class="modal-content modal-rounded">
         <div class="modal-header py-7 d-flex justify-content-between">
            <div>
               <h3 class="modal-title">Birthday Special Discount</h3>
               <span class="text-gray-400 fs-6">lorem ipsum dolar dit amet</span>
            </div>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 close_form" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <div class="card card-flush w-100 mx-auto">
               <div class="card-body brdr">
                  <div class="d-flex flex-column gap-3">
                     <div class="fv-row mb-6">
                        <!--begin::Label-->
                        <label class="required fw-semibold fs-6 mb-2">Promotion value</label>
                        <!--end::Label-->
                        <div class="row">
                           <div class="col-md-9">
                              <div class="input-group input-group-solid mb-5">
                                 <span class="input-group-text">%</span>
                                 <input type="text" class="form-control" placeholder="10" />
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="promval input-group-text mb-5">
                                 <span class="active" onclick="chngsign(this)">%</span>
                                 <span onclick="chngsign(this)">$</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex flex-column gap-10 mb-6 promvalstepper">
                        <label class="form-check form-switch form-check-custom form-check-solid">
                           <input class="form-check-input" type="checkbox" value=""/>
                           <span class="form-check-label">
                              <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 fs-4 mb-4">Limit total number of uses</span>
                                 <span class="text-gray-400 d-block fs-6 mt-2">Set the total amount of times this promotion can be used
                                 </span>
                              </h3>
                           </span>
                        </label>
                        <label class="form-check form-switch form-check-custom form-check-solid">
                           <input class="form-check-input" type="checkbox" value=""/>
                           <span class="form-check-label">
                              <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 fs-4 mb-4">Set minimum purchase amount</span>
                                 <span class="text-gray-400 d-block fs-6 mt-2">The client must spend a minimum amount to qualify for this promotion 
                                 </span>
                              </h3>
                           </span>
                        </label>
                        <label class="form-check form-switch form-check-custom form-check-solid">
                           <input class="form-check-input" type="checkbox" value=""/>
                           <span class="form-check-label">
                              <h3 class="card-title align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800 fs-4 mb-4">Create and send automatically to customer</span>
                                 <span class="text-gray-400 d-block fs-6 mt-2">Send promocode automatically 7 days before birthday
                                 </span>
                              </h3>
                           </span>
                        </label>
                     </div>
                     <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-sm btn-primary">
                        Submit
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" tabindex="-1" id="monthlytarget">
   <div class="modal-dialog modal-xl">
      <div class="modal-content modal-rounded">
         <div class="modal-header py-7 d-flex justify-content-between">
            <div>
               <h3 class="modal-title">Set monthly target</h3>
               <span class="text-gray-400 fs-6">July</span>
            </div>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 close_form" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <div class="card card-flush w-100 mx-auto">
               <div class="card-body">
                  <!--begin::Table-->
                  <table class="table align-middle table-row-dashed fs-6 gy-3 tdmid">
                     <!--begin::Table head-->
                     <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                           <th class="w-100px"></th>
                           <th class="w-100px">Last month</th>
                           <th class="w-100px">value</th>
                           <th class="w-100px">% Growth</th>
                           <th class="w-100px">Qty</th>
                        </tr>
                        <!--end::Table row-->
                     </thead>
                     <!--end::Table head-->
                     <!--begin::Table body-->
                     <tbody class="fw-bold text-gray-600">
                        <tr>
                           <td>Service</td>
                           <td>$15,500</td>
                           <td>
                              <!--begin::Input-->
                              <input type="numberr" name="" class="form-control form-control-solid" required/>
                              <!--end::Input-->
                           </td>
                           <td>
                              <!--begin::Input-->
                              <input type="numberr" name="" class="form-control form-control-solid" required/>
                              <!--end::Input-->
                           </td>
                           <td>
                              <!--begin::Input-->
                              <input type="numberr" name="" class="form-control form-control-solid" required/>
                              <!--end::Input-->
                           </td>
                        </tr>
                        <tr>
                           <td>Package</td>
                           <td>$4,500</td>
                           <td>
                              <!--begin::Input-->
                              <input type="numberr" name="" class="form-control form-control-solid" required/>
                              <!--end::Input-->
                           </td>
                           <td>
                              <!--begin::Input-->
                              <input type="numberr" name="" class="form-control form-control-solid" required/>
                              <!--end::Input-->
                           </td>
                           <td>
                              <!--begin::Input-->
                              <input type="numberr" name="" class="form-control form-control-solid" required/>
                              <!--end::Input-->
                           </td>
                        </tr>
                        <tr>
                           <td>Voucher</td>
                           <td>$6,570</td>
                           <td>
                              <!--begin::Input-->
                              <input type="numberr" name="" class="form-control form-control-solid" required/>
                              <!--end::Input-->
                           </td>
                           <td>
                              <!--begin::Input-->
                              <input type="numberr" name="" class="form-control form-control-solid" required/>
                              <!--end::Input-->
                           </td>
                           <td>
                              <!--begin::Input-->
                              <input type="numberr" name="" class="form-control form-control-solid" required/>
                              <!--end::Input-->
                           </td>
                        </tr>
                        <tr>
                           <td>Membership</td>
                           <td>$12,730</td>
                           <td>
                              <!--begin::Input-->
                              <input type="numberr" name="" class="form-control form-control-solid" required/>
                              <!--end::Input-->
                           </td>
                           <td>
                              <!--begin::Input-->
                              <input type="numberr" name="" class="form-control form-control-solid" required/>
                              <!--end::Input-->
                           </td>
                           <td>
                              <!--begin::Input-->
                              <input type="numberr" name="" class="form-control form-control-solid" required/>
                              <!--end::Input-->
                           </td>
                        </tr>
                        <tr>
                           <td>Product</td>
                           <td>$4,300</td>
                           <td>
                              <!--begin::Input-->
                              <input type="numberr" name="" class="form-control form-control-solid" required/>
                              <!--end::Input-->
                           </td>
                           <td>
                              <!--begin::Input-->
                              <input type="numberr" name="" class="form-control form-control-solid" required/>
                              <!--end::Input-->
                           </td>
                           <td>
                              <!--begin::Input-->
                              <input type="numberr" name="" class="form-control form-control-solid" required/>
                              <!--end::Input-->
                           </td>
                        </tr>
                     </tbody>
                     <!--end::Table body-->
                  </table>
                  <!--end::Table-->                      
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--end::Modals-->
<!--begin::Drawer-->
<div
   id="kt_drawer_example_permanent"
   class="bg-white"
   data-kt-drawer="true"
   data-kt-drawer-activate="true"
   data-kt-drawer-toggle="#kt_drawer_example_permanent_toggle"
   data-kt-drawer-close="#kt_drawer_example_permanent_close"
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
            Review & Rating
         </div>
         <!--end::Title-->
         <!--begin::Card toolbar-->
         <div class="card-toolbar">
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 close_form" id="kt_drawer_example_permanent_close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <!--end::Card toolbar-->
      </div>
      <!--end::Card header-->
      <!--begin::Card body-->
      <div class="card-body hover-scroll-overlay-y p-5">
         <div class="d-flex justify-content-between align-items-center">
            <!--begin::Search-->
            <div id="kt_service_search" class="header-search d-flex align-items-center w-50" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
               <!--begin::Tablet and mobile search toggle-->
               <div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
                  <div class="d-flex btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-35px h-md-35px">
                     <i class="ki-outline ki-magnifier fs-1"></i>
                  </div>
               </div>
               <!--end::Tablet and mobile search toggle-->
               <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
               <form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                  <!--begin::Hidden input(Added to disable form autocomplete)-->
                  <input type="hidden" />
                  <!--end::Hidden input-->
                  <!--begin::Icon-->
                  <i class="ki-outline ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"></i>
                  <!--end::Icon-->
                  <!--begin::Input-->
                  <input type="text" class="search-input form-control ps-13" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                  <!--end::Input-->
                  <!--begin::Spinner-->
                  <span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                  <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                  </span>
                  <!--end::Spinner-->
                  <!--begin::Reset-->
                  <span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
                  <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
                  </span>
                  <!--end::Reset-->
               </form>
               <!--end::Form-->
               <!--begin::Menu-->
               <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-350px w-md-400px">
                  <!--begin::Wrapper-->
                  <div data-kt-search-element="wrapper">
                     <!--begin::Recently viewed-->
                     <div data-kt-search-element="results" class="d-none">
                        <!--begin::Items-->
                        <div class="scroll-y mh-200px mh-lg-350px">
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Hair & styling</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Nails</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Eyebrow & eyelashes</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Massage</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Barbering</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Barbering</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Hair removal</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Facials & skincare</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Injectables & filters</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Body</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Tatto & piercing</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Makeup</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Medical & dental</span>
                              </div>
                           </a>
                           <!--end::Item-->
                        </div>
                        <!--end::Items-->
                     </div>
                     <!--end::Recently viewed-->
                     <!--begin::Recently viewed-->
                     <div class="" data-kt-search-element="main">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack fw-semibold mb-4">
                           <!--begin::Label-->
                           <span class="text-muted fs-6 me-2">Top categories:</span>
                           <!--end::Label-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Items-->
                        <div class="scroll-y mh-200px mh-lg-325px">
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Hair & styling</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Nails</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Eyebrow & eyelashes</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Massage</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Barbering</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Barbering</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Hair removal</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Facials & skincare</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Injectables & filters</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Body</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Tatto & piercing</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Makeup</span>
                              </div>
                           </a>
                           <!--end::Item-->
                           <!--begin::Item-->
                           <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                              <div class="btn btn-outline btn-flex btn-color-muted flex-column w-50px h-50px align-items-center justify-content-center me-2">
                                 <i class="fas fa-spa fs-1 p-0"></i>
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                 <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Medical & dental</span>
                              </div>
                           </a>
                           <!--end::Item-->
                        </div>
                        <!--end::Items-->
                     </div>
                     <!--end::Recently viewed-->
                     <!--begin::Empty-->
                     <div data-kt-search-element="empty" class="text-center d-none">
                        <!--begin::Icon-->
                        <div class="pt-10 pb-10">
                           <i class="ki-outline ki-search-list fs-4x opacity-50"></i>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Message-->
                        <div class="pb-15 fw-semibold">
                           <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                           <div class="text-muted fs-7">Please try again with a different query</div>
                        </div>
                        <!--end::Message-->
                     </div>
                     <!--end::Empty-->
                  </div>
                  <!--end::Wrapper-->
               </div>
               <!--end::Menu-->
            </div>
            <!--end::Search-->
            <!--begin::Filter menu-->
            <div class="m-0">
               <!--begin::Menu toggle-->
               <a href="#" class="btn btn-sm btn-light btn-flex btn-color-gray-700 fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
               <i class="ki-duotone ki-filter fs-6 text-muted me-1">
               <span class="path1"></span>
               <span class="path2"></span>
               </i>Filter by rating</a>
               <!--end::Menu toggle-->
               <!--begin::Menu 1-->
               <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true">
                  <!--begin::Form-->
                  <div class="px-7 py-5">
                     <div class="d-flex flex-column gap-5">
                        <label class="d-flex gap-2 align-items-center form-check form-check-custom form-check-sm cursor-pointer">
                           <input class="form-check-input" type="checkbox" value="" />
                           <div class="rating">
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                           </div>
                           <span data-kt-element="bullet" class="bullet bullet-horizontal d-flex align-items-center min-w-100px mw-200 bg-warning"></span>
                           <span class="text-gray-400 fs-6 ms-auto">21</span>
                        </label>
                        <label class="d-flex gap-2 align-items-center form-check form-check-custom form-check-sm cursor-pointer">
                           <input class="form-check-input" type="checkbox" value="" />
                           <div class="rating">
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                           </div>
                           <span data-kt-element="bullet" class="bullet bullet-horizontal d-flex align-items-center min-w-100px mw-200 bg-secondary opacity-50"></span>
                           <span class="text-gray-400 fs-6 ms-auto">0</span>
                        </label>
                        <label class="d-flex gap-2 align-items-center form-check form-check-custom form-check-sm cursor-pointer">
                           <input class="form-check-input" type="checkbox" value="" />
                           <div class="rating">
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                           </div>
                           <span data-kt-element="bullet" class="bullet bullet-horizontal d-flex align-items-center min-w-100px mw-200 bg-secondary opacity-50"></span>
                           <span class="text-gray-400 fs-6 ms-auto">0</span>
                        </label>
                        <label class="d-flex gap-2 align-items-center form-check form-check-custom form-check-sm cursor-pointer">
                           <input class="form-check-input" type="checkbox" value="" />
                           <div class="rating">
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                           </div>
                           <span data-kt-element="bullet" class="bullet bullet-horizontal d-flex align-items-center min-w-100px mw-200 bg-secondary opacity-50"></span>
                           <span class="text-gray-400 fs-6 ms-auto">0</span>
                        </label>
                        <label class="d-flex gap-2 align-items-center form-check form-check-custom form-check-sm cursor-pointer">
                           <input class="form-check-input" type="checkbox" value="" />
                           <div class="rating">
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                           </div>
                           <span data-kt-element="bullet" class="bullet bullet-horizontal d-flex align-items-center min-w-100px mw-200 bg-secondary opacity-50"></span>
                           <span class="text-gray-400 fs-6 ms-auto">0</span>
                        </label>
                     </div>
                  </div>
                  <!--end::Form-->
               </div>
               <!--end::Menu 1-->
            </div>
            <!--end::Filter menu-->
         </div>
         <div class="d-flex flex-column gap-4 mt-7">
            <span class="fw-semibold text-gray-800 fs-4">Filter by staff</span>
            <div class="d-flex flex-wrap gap-10">
               <a href="#" class="d-flex flex-column gap-3">
                  <div class="symbol symbol-50px">
                     <i class="ki-duotone ki-element-11 fs-50x">
                     <i class="path1"></i>
                     <i class="path2"></i>
                     <i class="path3"></i>
                     <i class="path4"></i>
                     </i>
                  </div>
                  <span class="text-gray-400 fs-6">All</span>
               </a>
               <a href="#" class="d-flex flex-column gap-3">
                  <div class="symbol symbol-50px">
                     <img src="{{ asset('/public/assets/media/avatars/300-6.jpg') }}" alt="">
                  </div>
                  <span class="text-gray-400 fs-6">Suresh</span>
               </a>
               <a href="#" class="d-flex flex-column gap-3">
                  <div class="symbol symbol-50px">
                     <img src="{{ asset('/public/assets/media/avatars/300-1.jpg') }}" alt="">
                  </div>
                  <span class="text-gray-400 fs-6">John</span>
               </a>
               <a href="#" class="d-flex flex-column gap-3">
                  <div class="symbol symbol-50px">
                     <img src="{{ asset('/public/assets/media/avatars/300-2.jpg') }}" alt="">
                  </div>
                  <span class="text-gray-400 fs-6">Rajesh</span>
               </a>
               <a href="#" class="d-flex flex-column gap-3">
                  <div class="symbol symbol-50px">
                     <img src="{{ asset('/public/assets/media/avatars/300-5.jpg') }}" alt="">
                  </div>
                  <span class="text-gray-400 fs-6">Manoj</span>
               </a>
               <a href="#" class="d-flex flex-column gap-3">
                  <div class="symbol symbol-50px">
                     <img src="{{ asset('/public/assets/media/avatars/300-20.jpg') }}" alt="">
                  </div>
                  <span class="text-gray-400 fs-6">Harry</span>
               </a>
               <a href="#" class="d-flex flex-column gap-3">
                  <div class="symbol symbol-50px">
                     <img src="{{ asset('/public/assets/media/avatars/300-23.jpg') }}" alt="">
                  </div>
                  <span class="text-gray-400 fs-6">Tim</span>
               </a>
            </div>
         </div>
         <div class="d-flex flex-column gap-5 mt-7">
            <div class="card-body brdr">
               <div class="d-flex justify-content-between flex-wrap">
                  <div class="d-flex flex-column gap-4 w-75 pe-4">
                     <div class="d-flex">
                        <div class="symbol symbol-75px symbol-circle me-3">
                           <img src="{{ asset('/public/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                        </div>
                        <div class="d-flex justify-content-start flex-column gap-2 ms-4">
                           <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                           <a href="https://wa.me/9587456915" class="clrgrn">
                           <i class="fa-brands fa-whatsapp"></i>
                           <span class="fw-semibold fs-6">9587456915</span>
                           </a>
                           <div class="rating">
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                     <span class="text-gray-400 fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. </span>
                  </div>
                  <div class="d-flex flex-column gap-4 w-25">
                     <span class="fs-4 fw-bold text-dark text-end">Manicure & Pedicure</span>
                     <span class="text-gray-400 fs-6 fw-semibold text-end">7 july, 2023</span>
                     <span class="text-gray-400 fs-6 fw-semibold text-end">By Suresh Raina</span>
                     <div class="d-flex gap-3 justify-content-end mt-auto">
                        <a href="#" class="btn btn-sm btn-bg-light btn-color-muted px-4">Report</a>
                        <a href="#" class="btn btn-sm btn-primary px-4">Reply</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-body brdr">
               <div class="d-flex justify-content-between flex-wrap">
                  <div class="d-flex flex-column gap-4 w-75 pe-4">
                     <div class="d-flex">
                        <div class="symbol symbol-75px symbol-circle me-3">
                           <img src="{{ asset('/public/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                        </div>
                        <div class="d-flex justify-content-start flex-column gap-2 ms-4">
                           <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                           <a href="https://wa.me/9587456915" class="clrgrn">
                           <i class="fa-brands fa-whatsapp"></i>
                           <span class="fw-semibold fs-6">9587456915</span>
                           </a>
                           <div class="rating">
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                     <span class="text-gray-400 fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. </span>
                  </div>
                  <div class="d-flex flex-column gap-4 w-25">
                     <span class="fs-4 fw-bold text-dark text-end">Manicure & Pedicure</span>
                     <span class="text-gray-400 fs-6 fw-semibold text-end">7 july, 2023</span>
                     <span class="text-gray-400 fs-6 fw-semibold text-end">By Suresh Raina</span>
                     <div class="d-flex gap-3 justify-content-end mt-auto">
                        <a href="#" class="btn btn-sm btn-bg-light btn-color-muted px-4">Report</a>
                        <a href="#" class="btn btn-sm btn-primary px-4">Reply</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-body brdr">
               <div class="d-flex justify-content-between flex-wrap">
                  <div class="d-flex flex-column gap-4 w-75 pe-4">
                     <div class="d-flex">
                        <div class="symbol symbol-75px symbol-circle me-3">
                           <img src="{{ asset('/public/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                        </div>
                        <div class="d-flex justify-content-start flex-column gap-2 ms-4">
                           <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                           <a href="https://wa.me/9587456915" class="clrgrn">
                           <i class="fa-brands fa-whatsapp"></i>
                           <span class="fw-semibold fs-6">9587456915</span>
                           </a>
                           <div class="rating">
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                     <span class="text-gray-400 fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. </span>
                  </div>
                  <div class="d-flex flex-column gap-4 w-25">
                     <span class="fs-4 fw-bold text-dark text-end">Manicure & Pedicure</span>
                     <span class="text-gray-400 fs-6 fw-semibold text-end">7 july, 2023</span>
                     <span class="text-gray-400 fs-6 fw-semibold text-end">By Suresh Raina</span>
                     <div class="d-flex gap-3 justify-content-end mt-auto">
                        <a href="#" class="btn btn-sm btn-bg-light btn-color-muted px-4">Report</a>
                        <a href="#" class="btn btn-sm btn-primary px-4">Reply</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-body brdr">
               <div class="d-flex justify-content-between flex-wrap">
                  <div class="d-flex flex-column gap-4 w-75 pe-4">
                     <div class="d-flex">
                        <div class="symbol symbol-75px symbol-circle me-3">
                           <img src="{{ asset('/public/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                        </div>
                        <div class="d-flex justify-content-start flex-column gap-2 ms-4">
                           <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                           <a href="https://wa.me/9587456915" class="clrgrn">
                           <i class="fa-brands fa-whatsapp"></i>
                           <span class="fw-semibold fs-6">9587456915</span>
                           </a>
                           <div class="rating">
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                              <div class="rating-label checked">
                                 <i class="ki-duotone ki-star fs-7"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                     <span class="text-gray-400 fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. </span>
                  </div>
                  <div class="d-flex flex-column gap-4 w-25">
                     <span class="fs-4 fw-bold text-dark text-end">Manicure & Pedicure</span>
                     <span class="text-gray-400 fs-6 fw-semibold text-end">7 july, 2023</span>
                     <span class="text-gray-400 fs-6 fw-semibold text-end">By Suresh Raina</span>
                     <div class="d-flex gap-3 justify-content-end mt-auto">
                        <a href="#" class="btn btn-sm btn-bg-light btn-color-muted px-4">Report</a>
                        <a href="#" class="btn btn-sm btn-primary px-4">Reply</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--end::Card-->
</div>
<!--end::Drawer-->
<!--end::Drawers-->

@endsection
