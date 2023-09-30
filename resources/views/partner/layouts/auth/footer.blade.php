   <!--begin::Drawer-->
<div
    id="kt_drawer_example_notification"
    class="bg-white"
    data-kt-drawer="true"
    data-kt-drawer-activate="true"
    data-kt-drawer-toggle="#kt_drawer_example_notification_toggle"
    data-kt-drawer-close="#kt_drawer_example_notification_close"
    data-kt-drawer-overlay="true"
    data-kt-drawer-permanent="true"
    data-kt-drawer-width="{default:'300px', 'md': '700px', 'xl': '950px'}"
>
    <!--begin::Card-->
    <div class="card rounded-0 w-100 brlft bggrey">
        <!--begin::Card header-->
        <div class="card-header pe-5">
            <!--begin::Title-->
            <div class="card-title">
                Notification
            </div>
            <!--end::Title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 close_form" id="kt_drawer_example_notification_close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="hover-scroll-overlay-y pt-3 px-5">

          <div class="card card-flush">

            <div class="card-body py-5">
              
              <!--begin:::Tabs-->
          <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold">
            <!--begin:::Tab item-->
            <li class="nav-item">
              <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#headernotification">Notification</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
              <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#headeractivity">Activity</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
              <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#headeralert">Alert</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
              <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#headerappointment">Appointment & Sales</a>
            </li>
            <!--end:::Tab item-->
          </ul>
          <!--end:::Tabs-->

            </div>

          </div>

      <!--begin:::Tab content-->
      <div class="tab-content" id="myTabContent">

        <!--begin:::Tab pane-->
        <div class="tab-pane fade show active" id="headernotification" role="tabpanel">

          <div class="card card-flush mt-6">

            <div class="card-header align-items-center pt-10 pb-5 gap-2 gap-md-5">

              <!--begin::Search-->
              <div class="d-flex align-items-center justify-content-between w-100">
                <div class="d-flex align-items-center position-relative">
                  <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                  <input type="text" class="form-control form-control-solid w-100 ps-12" placeholder="Filter by Client Name" />
                </div>
                <div class="d-flex align-items-center gap-2">
                    <label class="form-label mb-0">Date:</label>
                    <input class="form-control form-control-solid" placeholder="Pick date rage" id="kt_daterangepicker_1"/>
                </div>
              </div>
              <!--end::Search-->

            </div>

            <div class="card-body">

              <div class="d-flex flex-column gap-4">
                
                <div class="p-5 brdr">
                  <div class="d-flex">
                    <div class="symbol symbol-100px symbol-circle me-3 mb-4">
                      <img src="{{ asset('/public/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                    </div>
                    <div class="d-flex justify-content-start flex-column gap-1">
                      <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                      <a href="https://wa.me/9587456915">
                              <i class="fa-brands fa-whatsapp"></i>
                              <span class="text-gray-400 fw-semibold fs-6">9587456915</span>
                            </a>
                            <div class="rating mt-1">
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                      </div>
                      <span class="text-gray-400 fs-6 mt-6">Trust all is well. We've missed you at our salon for the past 45 days. Currently, we're featuring exciting offers and discounts. To secure your spot, kindly book your appointment in advance</span>
                    </div>
                    <div class="w-300px">
                      <span class="text-gray-400 fs-6">7 jul 2023</span>
                      <span class="text-gray-400 fs-6">1:30 pm</span>
                    </div>
                  </div>
                </div>

                <div class="p-5 brdr">
                  <div class="d-flex">
                    <div class="symbol symbol-100px symbol-circle me-3 mb-4">
                      <img src="{{ asset('/public/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                    </div>
                    <div class="d-flex justify-content-start flex-column gap-1">
                      <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                      <a href="https://wa.me/9587456915">
                              <i class="fa-brands fa-whatsapp"></i>
                              <span class="text-gray-400 fw-semibold fs-6">9587456915</span>
                            </a>
                            <div class="rating mt-1">
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                      </div>
                      <span class="text-gray-400 fs-6 mt-6">Trust all is well. We've missed you at our salon for the past 45 days. Currently, we're featuring exciting offers and discounts. To secure your spot, kindly book your appointment in advance</span>
                    </div>
                    <div class="w-300px">
                      <span class="text-gray-400 fs-6">7 jul 2023</span>
                      <span class="text-gray-400 fs-6">1:30 pm</span>
                    </div>
                  </div>
                </div>

                <div class="p-5 brdr">
                  <div class="d-flex">
                    <div class="symbol symbol-100px symbol-circle me-3 mb-4">
                      <img src="{{ asset('/public/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                    </div>
                    <div class="d-flex justify-content-start flex-column gap-1">
                      <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                      <a href="https://wa.me/9587456915">
                              <i class="fa-brands fa-whatsapp"></i>
                              <span class="text-gray-400 fw-semibold fs-6">9587456915</span>
                            </a>
                            <div class="rating mt-1">
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                      </div>
                      <span class="text-gray-400 fs-6 mt-6">Trust all is well. We've missed you at our salon for the past 45 days. Currently, we're featuring exciting offers and discounts. To secure your spot, kindly book your appointment in advance</span>
                    </div>
                    <div class="w-300px">
                      <span class="text-gray-400 fs-6">7 jul 2023</span>
                      <span class="text-gray-400 fs-6">1:30 pm</span>
                    </div>
                  </div>
                </div>

                <div class="p-5 brdr">
                  <div class="d-flex">
                    <div class="symbol symbol-100px symbol-circle me-3 mb-4">
                      <img src="{{ asset('/public/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                    </div>
                    <div class="d-flex justify-content-start flex-column gap-1">
                      <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                      <a href="https://wa.me/9587456915">
                              <i class="fa-brands fa-whatsapp"></i>
                              <span class="text-gray-400 fw-semibold fs-6">9587456915</span>
                            </a>
                            <div class="rating mt-1">
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                      </div>
                      <span class="text-gray-400 fs-6 mt-6">Trust all is well. We've missed you at our salon for the past 45 days. Currently, we're featuring exciting offers and discounts. To secure your spot, kindly book your appointment in advance</span>
                    </div>
                    <div class="w-300px">
                      <span class="text-gray-400 fs-6">7 jul 2023</span>
                      <span class="text-gray-400 fs-6">1:30 pm</span>
                    </div>
                  </div>
                </div>

                <div class="p-5 brdr">
                  <div class="d-flex">
                    <div class="symbol symbol-100px symbol-circle me-3 mb-4">
                      <img src="{{ asset('/public/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                    </div>
                    <div class="d-flex justify-content-start flex-column gap-1">
                      <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                      <a href="https://wa.me/9587456915">
                              <i class="fa-brands fa-whatsapp"></i>
                              <span class="text-gray-400 fw-semibold fs-6">9587456915</span>
                            </a>
                            <div class="rating mt-1">
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                      </div>
                      <span class="text-gray-400 fs-6 mt-6">Trust all is well. We've missed you at our salon for the past 45 days. Currently, we're featuring exciting offers and discounts. To secure your spot, kindly book your appointment in advance</span>
                    </div>
                    <div class="w-300px">
                      <span class="text-gray-400 fs-6">7 jul 2023</span>
                      <span class="text-gray-400 fs-6">1:30 pm</span>
                    </div>
                  </div>
                </div>

                <div class="p-5 brdr">
                  <div class="d-flex">
                    <div class="symbol symbol-100px symbol-circle me-3 mb-4">
                      <img src="{{ asset('/public/assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                    </div>
                    <div class="d-flex justify-content-start flex-column gap-1">
                      <span class="text-gray-800 fw-bold text-hover-primary fs-6">Emma Smith</span>
                      <a href="https://wa.me/9587456915">
                              <i class="fa-brands fa-whatsapp"></i>
                              <span class="text-gray-400 fw-semibold fs-6">9587456915</span>
                            </a>
                            <div class="rating mt-1">
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                          <div class="rating-label checked">
                              <i class="ki-duotone ki-star fs-5"></i>
                          </div>
                      </div>
                      <span class="text-gray-400 fs-6 mt-6">Trust all is well. We've missed you at our salon for the past 45 days. Currently, we're featuring exciting offers and discounts. To secure your spot, kindly book your appointment in advance</span>
                    </div>
                    <div class="w-300px">
                      <span class="text-gray-400 fs-6">7 jul 2023</span>
                      <span class="text-gray-400 fs-6">1:30 pm</span>
                    </div>
                  </div>
                </div>

              </div>

            </div>
            <!--end:::Tab pane-->

          </div>

        </div>

        <!--begin:::Tab pane-->
        <div class="tab-pane fade" id="headeractivity" role="tabpanel">

          <!--begin::Timeline-->
          <div class="card mt-6">
            <!--begin::Card head-->
            <div class="card-header card-header-stretch">
              <!--begin::Title-->
              <div class="card-title d-flex align-items-center">
                <i class="ki-duotone ki-calendar-8 fs-1 text-primary me-3 lh-0">
                  <span class="path1"></span>
                  <span class="path2"></span>
                  <span class="path3"></span>
                  <span class="path4"></span>
                  <span class="path5"></span>
                  <span class="path6"></span>
                </i>
                <h3 class="fw-bold m-0 text-gray-800">Jan 23, 2023</h3>
              </div>
              <!--end::Title-->
              <!--begin::Toolbar-->
              <div class="card-toolbar m-0">
                <!--begin::Tab nav-->
                <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bold" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a id="kt_activity_today_tab" class="nav-link justify-content-center text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_activity_today">Today</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a id="kt_activity_week_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_week">Week</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a id="kt_activity_month_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_month">Month</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a id="kt_activity_year_tab" class="nav-link justify-content-center text-active-gray-800 text-hover-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_year">2023</a>
                  </li>
                </ul>
                <!--end::Tab nav-->
              </div>
              <!--end::Toolbar-->
            </div>
            <!--end::Card head-->
            <!--begin::Card body-->
            <div class="card-body">
              <!--begin::Tab Content-->
              <div class="tab-content">
                <!--begin::Tab panel-->
                <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_activity_today_tab">
                  <!--begin::Timeline-->
                  <div class="timeline">
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                              <img src="{{ asset('/public/assets/media/avatars/300-14.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                        <!--begin::Timeline details-->
                        <div class="overflow-auto pb-5">
                          <!--begin::Record-->
                          <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                            <!--begin::Title-->
                            <a href="../../demo1/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
                            <!--end::Title-->
                            <!--begin::Label-->
                            <div class="min-w-175px pe-2">
                              <span class="badge badge-light text-muted">Application Design</span>
                            </div>
                            <!--end::Label-->
                            <!--begin::Users-->
                            <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                              <!--begin::User-->
                              <div class="symbol symbol-circle symbol-25px">
                                <img src="{{ asset('/public/assets/media/avatars/300-2.jpg') }}" alt="img" />
                              </div>
                              <!--end::User-->
                              <!--begin::User-->
                              <div class="symbol symbol-circle symbol-25px">
                                <img src="{{ asset('/public/assets/media/avatars/300-14.jpg') }}" alt="img" />
                              </div>
                              <!--end::User-->
                              <!--begin::User-->
                              <div class="symbol symbol-circle symbol-25px">
                                <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
                              </div>
                              <!--end::User-->
                            </div>
                            <!--end::Users-->
                            <!--begin::Progress-->
                            <div class="min-w-125px pe-2">
                              <span class="badge badge-light-primary">In Progress</span>
                            </div>
                            <!--end::Progress-->
                            <!--begin::Action-->
                            <a href="../../demo1/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                            <!--end::Action-->
                          </div>
                          <!--end::Record-->
                          <!--begin::Record-->
                          <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                            <!--begin::Title-->
                            <a href="../../demo1/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
                            <!--end::Title-->
                            <!--begin::Label-->
                            <div class="min-w-175px">
                              <span class="badge badge-light text-muted">CRM System Development</span>
                            </div>
                            <!--end::Label-->
                            <!--begin::Users-->
                            <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                              <!--begin::User-->
                              <div class="symbol symbol-circle symbol-25px">
                                <img src="{{ asset('/public/assets/media/avatars/300-20.jpg') }}" alt="img" />
                              </div>
                              <!--end::User-->
                              <!--begin::User-->
                              <div class="symbol symbol-circle symbol-25px">
                                <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
                              </div>
                              <!--end::User-->
                            </div>
                            <!--end::Users-->
                            <!--begin::Progress-->
                            <div class="min-w-125px">
                              <span class="badge badge-light-success">Completed</span>
                            </div>
                            <!--end::Progress-->
                            <!--begin::Action-->
                            <a href="../../demo1/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                            <!--end::Action-->
                          </div>
                          <!--end::Record-->
                        </div>
                        <!--end::Timeline details-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-flag fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n2">
                        <!--begin::Timeline heading-->
                        <div class="overflow-auto pe-3">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                              <img src="{{ asset('/public/assets/media/avatars/300-1.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="mb-5 pe-3">
                          <!--begin::Title-->
                          <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                              <img src="{{ asset('/public/assets/media/avatars/300-23.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                        <!--begin::Timeline details-->
                        <div class="overflow-auto pb-5">
                          <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                            <!--begin::Item-->
                            <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                              <!--begin::Icon-->
                              <img alt="" class="w-30px me-3" src="{{ asset('/public/assets/media/svg/files/pdf.svg') }}" />
                              <!--end::Icon-->
                              <!--begin::Info-->
                              <div class="ms-1 fw-semibold">
                                <!--begin::Desc-->
                                <a href="../../demo1/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                <!--end::Desc-->
                                <!--begin::Number-->
                                <div class="text-gray-400">1.9mb</div>
                                <!--end::Number-->
                              </div>
                              <!--begin::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                              <!--begin::Icon-->
                              <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{ asset('/public/assets/media/svg/files/doc.svg') }}" />
                              <!--end::Icon-->
                              <!--begin::Info-->
                              <div class="ms-1 fw-semibold">
                                <!--begin::Desc-->
                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                <!--end::Desc-->
                                <!--begin::Number-->
                                <div class="text-gray-400">18kb</div>
                                <!--end::Number-->
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-aligns-center">
                              <!--begin::Icon-->
                              <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{ asset('/public/assets/media/svg/files/css.svg') }}" />
                              <!--end::Icon-->
                              <!--begin::Info-->
                              <div class="ms-1 fw-semibold">
                                <!--begin::Desc-->
                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                <!--end::Desc-->
                                <!--begin::Number-->
                                <div class="text-gray-400">20mb</div>
                                <!--end::Number-->
                              </div>
                              <!--end::Icon-->
                            </div>
                            <!--end::Item-->
                          </div>
                        </div>
                        <!--end::Timeline details-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">Task
                          <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                          <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                              <img src="{{ asset('/public/assets/media/avatars/300-14.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                              <img src="{{ asset('/public/assets/media/avatars/300-2.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                        <!--begin::Timeline details-->
                        <div class="overflow-auto pb-5">
                          <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                            <!--begin::Item-->
                            <div class="overlay me-10">
                              <!--begin::Image-->
                              <div class="overlay-wrapper">
                                <img alt="img" class="rounded w-150px" src="{{ asset('/public/assets/media/stock/600x400/img-29.jpg') }}" />
                              </div>
                              <!--end::Image-->
                              <!--begin::Link-->
                              <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                              </div>
                              <!--end::Link-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="overlay me-10">
                              <!--begin::Image-->
                              <div class="overlay-wrapper">
                                <img alt="img" class="rounded w-150px" src="{{ asset('/public/assets/media/stock/600x400/img-31.jpg') }}" />
                              </div>
                              <!--end::Image-->
                              <!--begin::Link-->
                              <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                              </div>
                              <!--end::Link-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="overlay">
                              <!--begin::Image-->
                              <div class="overlay-wrapper">
                                <img alt="img" class="rounded w-150px" src="{{ asset('/public/assets/media/stock/600x400/img-40.jpg') }}" />
                              </div>
                              <!--end::Image-->
                              <!--begin::Link-->
                              <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                              </div>
                              <!--end::Link-->
                            </div>
                            <!--end::Item-->
                          </div>
                        </div>
                        <!--end::Timeline details-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-sms fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">New case
                          <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="overflow-auto pb-5">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mt-1 fs-6">
                              <!--begin::Info-->
                              <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                              <!--end::Info-->
                              <!--begin::User-->
                              <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                              <!--end::User-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                              <img src="{{ asset('/public/assets/media/avatars/300-4.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                        <!--begin::Timeline details-->
                        <div class="overflow-auto pb-5">
                          <!--begin::Notice-->
                          <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">
                              <span class="path1"></span>
                              <span class="path2"></span>
                              <span class="path3"></span>
                            </i>
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <!--begin::Content-->
                              <div class="mb-3 mb-md-0 fw-semibold">
                                <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
                                <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                              </div>
                              <!--end::Content-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Notice-->
                        </div>
                        <!--end::Timeline details-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-basket fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">New order
                          <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                  </div>
                  <!--end::Timeline-->
                </div>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <div id="kt_activity_week" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_week_tab">
                  <!--begin::Timeline-->
                  <div class="timeline">
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-flag fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n2">
                        <!--begin::Timeline heading-->
                        <div class="overflow-auto pe-3">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                              <img src="{{ asset('/public/assets/media/avatars/300-1.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="mb-5 pe-3">
                          <!--begin::Title-->
                          <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                              <img src="{{ asset('/public/assets/media/avatars/300-23.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                        <!--begin::Timeline details-->
                        <div class="overflow-auto pb-5">
                          <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                            <!--begin::Item-->
                            <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                              <!--begin::Icon-->
                              <img alt="" class="w-30px me-3" src="{{ asset('/public/assets/media/svg/files/pdf.svg') }}" />
                              <!--end::Icon-->
                              <!--begin::Info-->
                              <div class="ms-1 fw-semibold">
                                <!--begin::Desc-->
                                <a href="../../demo1/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                <!--end::Desc-->
                                <!--begin::Number-->
                                <div class="text-gray-400">1.9mb</div>
                                <!--end::Number-->
                              </div>
                              <!--begin::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                              <!--begin::Icon-->
                              <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{ asset('/public/assets/media/svg/files/doc.svg') }}" />
                              <!--end::Icon-->
                              <!--begin::Info-->
                              <div class="ms-1 fw-semibold">
                                <!--begin::Desc-->
                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                <!--end::Desc-->
                                <!--begin::Number-->
                                <div class="text-gray-400">18kb</div>
                                <!--end::Number-->
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-aligns-center">
                              <!--begin::Icon-->
                              <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{ asset('/public/assets/media/svg/files/css.svg') }}" />
                              <!--end::Icon-->
                              <!--begin::Info-->
                              <div class="ms-1 fw-semibold">
                                <!--begin::Desc-->
                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                <!--end::Desc-->
                                <!--begin::Number-->
                                <div class="text-gray-400">20mb</div>
                                <!--end::Number-->
                              </div>
                              <!--end::Icon-->
                            </div>
                            <!--end::Item-->
                          </div>
                        </div>
                        <!--end::Timeline details-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">Task
                          <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                          <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                              <img src="{{ asset('/public/assets/media/avatars/300-14.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                              <img src="{{ asset('/public/assets/media/avatars/300-2.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                        <!--begin::Timeline details-->
                        <div class="overflow-auto pb-5">
                          <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                            <!--begin::Item-->
                            <div class="overlay me-10">
                              <!--begin::Image-->
                              <div class="overlay-wrapper">
                                <img alt="img" class="rounded w-150px" src="{{ asset('/public/assets/media/stock/600x400/img-29.jpg') }}" />
                              </div>
                              <!--end::Image-->
                              <!--begin::Link-->
                              <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                              </div>
                              <!--end::Link-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="overlay me-10">
                              <!--begin::Image-->
                              <div class="overlay-wrapper">
                                <img alt="img" class="rounded w-150px" src="{{ asset('/public/assets/media/stock/600x400/img-31.jpg') }}" />
                              </div>
                              <!--end::Image-->
                              <!--begin::Link-->
                              <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                              </div>
                              <!--end::Link-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="overlay">
                              <!--begin::Image-->
                              <div class="overlay-wrapper">
                                <img alt="img" class="rounded w-150px" src="{{ asset('/public/assets/media/stock/600x400/img-40.jpg') }}" />
                              </div>
                              <!--end::Image-->
                              <!--begin::Link-->
                              <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                              </div>
                              <!--end::Link-->
                            </div>
                            <!--end::Item-->
                          </div>
                        </div>
                        <!--end::Timeline details-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-sms fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">New case
                          <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="overflow-auto pb-5">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mt-1 fs-6">
                              <!--begin::Info-->
                              <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                              <!--end::Info-->
                              <!--begin::User-->
                              <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                              <!--end::User-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                  </div>
                  <!--end::Timeline-->
                </div>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <div id="kt_activity_month" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_month_tab">
                  <!--begin::Timeline-->
                  <div class="timeline">
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                              <img src="{{ asset('/public/assets/media/avatars/300-2.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                        <!--begin::Timeline details-->
                        <div class="overflow-auto pb-5">
                          <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                            <!--begin::Item-->
                            <div class="overlay me-10">
                              <!--begin::Image-->
                              <div class="overlay-wrapper">
                                <img alt="img" class="rounded w-150px" src="{{ asset('/public/assets/media/stock/600x400/img-29.jpg') }}" />
                              </div>
                              <!--end::Image-->
                              <!--begin::Link-->
                              <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                              </div>
                              <!--end::Link-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="overlay me-10">
                              <!--begin::Image-->
                              <div class="overlay-wrapper">
                                <img alt="img" class="rounded w-150px" src="{{ asset('/public/assets/media/stock/600x400/img-31.jpg') }}" />
                              </div>
                              <!--end::Image-->
                              <!--begin::Link-->
                              <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                              </div>
                              <!--end::Link-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="overlay">
                              <!--begin::Image-->
                              <div class="overlay-wrapper">
                                <img alt="img" class="rounded w-150px" src="{{ asset('/public/assets/media/stock/600x400/img-40.jpg') }}" />
                              </div>
                              <!--end::Image-->
                              <!--begin::Link-->
                              <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                              </div>
                              <!--end::Link-->
                            </div>
                            <!--end::Item-->
                          </div>
                        </div>
                        <!--end::Timeline details-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-sms fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">New case
                          <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="overflow-auto pb-5">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mt-1 fs-6">
                              <!--begin::Info-->
                              <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                              <!--end::Info-->
                              <!--begin::User-->
                              <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                              <!--end::User-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-basket fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">New order
                          <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-flag fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n2">
                        <!--begin::Timeline heading-->
                        <div class="overflow-auto pe-3">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                              <img src="{{ asset('/public/assets/media/avatars/300-1.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="mb-5 pe-3">
                          <!--begin::Title-->
                          <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                              <img src="{{ asset('/public/assets/media/avatars/300-23.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                        <!--begin::Timeline details-->
                        <div class="overflow-auto pb-5">
                          <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                            <!--begin::Item-->
                            <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                              <!--begin::Icon-->
                              <img alt="" class="w-30px me-3" src="{{ asset('/public/assets/media/svg/files/pdf.svg') }}" />
                              <!--end::Icon-->
                              <!--begin::Info-->
                              <div class="ms-1 fw-semibold">
                                <!--begin::Desc-->
                                <a href="../../demo1/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                <!--end::Desc-->
                                <!--begin::Number-->
                                <div class="text-gray-400">1.9mb</div>
                                <!--end::Number-->
                              </div>
                              <!--begin::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                              <!--begin::Icon-->
                              <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{ asset('/public/assets/media/svg/files/doc.svg') }}" />
                              <!--end::Icon-->
                              <!--begin::Info-->
                              <div class="ms-1 fw-semibold">
                                <!--begin::Desc-->
                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                <!--end::Desc-->
                                <!--begin::Number-->
                                <div class="text-gray-400">18kb</div>
                                <!--end::Number-->
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-aligns-center">
                              <!--begin::Icon-->
                              <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{ asset('/public/assets/media/svg/files/css.svg') }}" />
                              <!--end::Icon-->
                              <!--begin::Info-->
                              <div class="ms-1 fw-semibold">
                                <!--begin::Desc-->
                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                <!--end::Desc-->
                                <!--begin::Number-->
                                <div class="text-gray-400">20mb</div>
                                <!--end::Number-->
                              </div>
                              <!--end::Icon-->
                            </div>
                            <!--end::Item-->
                          </div>
                        </div>
                        <!--end::Timeline details-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">Task
                          <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                          <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                              <img src="{{ asset('/public/assets/media/avatars/300-14.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                  </div>
                  <!--end::Timeline-->
                </div>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <div id="kt_activity_year" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_year_tab">
                  <!--begin::Timeline-->
                  <div class="timeline">
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="mb-5 pe-3">
                          <!--begin::Title-->
                          <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                              <img src="{{ asset('/public/assets/media/avatars/300-23.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                        <!--begin::Timeline details-->
                        <div class="overflow-auto pb-5">
                          <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                            <!--begin::Item-->
                            <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                              <!--begin::Icon-->
                              <img alt="" class="w-30px me-3" src="{{ asset('/public/assets/media/svg/files/pdf.svg') }}" />
                              <!--end::Icon-->
                              <!--begin::Info-->
                              <div class="ms-1 fw-semibold">
                                <!--begin::Desc-->
                                <a href="../../demo1/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                <!--end::Desc-->
                                <!--begin::Number-->
                                <div class="text-gray-400">1.9mb</div>
                                <!--end::Number-->
                              </div>
                              <!--begin::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                              <!--begin::Icon-->
                              <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{ asset('/public/assets/media/svg/files/doc.svg') }}" />
                              <!--end::Icon-->
                              <!--begin::Info-->
                              <div class="ms-1 fw-semibold">
                                <!--begin::Desc-->
                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                <!--end::Desc-->
                                <!--begin::Number-->
                                <div class="text-gray-400">18kb</div>
                                <!--end::Number-->
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-aligns-center">
                              <!--begin::Icon-->
                              <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="{{ asset('/public/assets/media/svg/files/css.svg') }}" />
                              <!--end::Icon-->
                              <!--begin::Info-->
                              <div class="ms-1 fw-semibold">
                                <!--begin::Desc-->
                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                <!--end::Desc-->
                                <!--begin::Number-->
                                <div class="text-gray-400">20mb</div>
                                <!--end::Number-->
                              </div>
                              <!--end::Icon-->
                            </div>
                            <!--end::Item-->
                          </div>
                        </div>
                        <!--end::Timeline details-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">Task
                          <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                          <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                              <img src="{{ asset('/public/assets/media/avatars/300-14.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                              <img src="{{ asset('/public/assets/media/avatars/300-2.jpg') }}" alt="img" />
                            </div>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                        <!--begin::Timeline details-->
                        <div class="overflow-auto pb-5">
                          <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                            <!--begin::Item-->
                            <div class="overlay me-10">
                              <!--begin::Image-->
                              <div class="overlay-wrapper">
                                <img alt="img" class="rounded w-150px" src="{{ asset('/public/assets/media/stock/600x400/img-29.jpg') }}" />
                              </div>
                              <!--end::Image-->
                              <!--begin::Link-->
                              <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                              </div>
                              <!--end::Link-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="overlay me-10">
                              <!--begin::Image-->
                              <div class="overlay-wrapper">
                                <img alt="img" class="rounded w-150px" src="{{ asset('/public/assets/media/stock/600x400/img-31.jpg') }}" />
                              </div>
                              <!--end::Image-->
                              <!--begin::Link-->
                              <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                              </div>
                              <!--end::Link-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="overlay">
                              <!--begin::Image-->
                              <div class="overlay-wrapper">
                                <img alt="img" class="rounded w-150px" src="{{ asset('/public/assets/media/stock/600x400/img-40.jpg') }}" />
                              </div>
                              <!--end::Image-->
                              <!--begin::Link-->
                              <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                              </div>
                              <!--end::Link-->
                            </div>
                            <!--end::Item-->
                          </div>
                        </div>
                        <!--end::Timeline details-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-sms fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">New case
                          <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="overflow-auto pb-5">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mt-1 fs-6">
                              <!--begin::Info-->
                              <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                              <!--end::Info-->
                              <!--begin::User-->
                              <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                              <!--end::User-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                      <!--begin::Timeline line-->
                      <div class="timeline-line w-40px"></div>
                      <!--end::Timeline line-->
                      <!--begin::Timeline icon-->
                      <div class="timeline-icon symbol symbol-circle symbol-40px">
                        <div class="symbol-label bg-light">
                          <i class="ki-duotone ki-basket fs-2 text-gray-500">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                          </i>
                        </div>
                      </div>
                      <!--end::Timeline icon-->
                      <!--begin::Timeline content-->
                      <div class="timeline-content mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                          <!--begin::Title-->
                          <div class="fs-5 fw-semibold mb-2">New order
                          <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
                          <!--end::Title-->
                          <!--begin::Description-->
                          <div class="d-flex align-items-center mt-1 fs-6">
                            <!--begin::Info-->
                            <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                            <!--end::Info-->
                            <!--begin::User-->
                            <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                            <!--end::User-->
                          </div>
                          <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                      </div>
                      <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                  </div>
                  <!--end::Timeline-->
                </div>
                <!--end::Tab panel-->
              </div>
              <!--end::Tab Content-->
            </div>
            <!--end::Card body-->
          </div>
          <!--end::Timeline-->

        </div>
        <!--end:::Tab pane-->

        <!--begin:::Tab pane-->
        <div class="tab-pane fade" id="headeralert" role="tabpanel">

          <div class="card mt-6">
            <!--begin::Card body-->
            <div class="card-body">
              
              <div class="d-flex flex-column gap-4">
                
                <div class="d-flex flex-column gap-4">
                  <span class="text-gray-800 fw-bold fs-4">Fill your August calendar with a blast campaign <i class="ki-duotone ki-rocket">
                   <i class="path1"></i>
                   <i class="path2"></i>
                  </i></span>
                  <span class="text-gray-600 fs-6">Last month, partners who sent a blast campaign had an average return on investment of 243%. Instantly reach your clients with a blast email or text message and get booked up for August</span>
                  <span class="text-gray-400 fs-6">20 days ago</span>
                  <div>
                    <a href="#" class="btn btn-sm btn-primary px-6">Send a campaign</a>
                  </div>
                </div>

                <div class="separator my-4"></div>

                <div class="d-flex flex-column gap-4">
                  <span class="text-gray-800 fw-bold fs-4">Fill your August calendar with a blast campaign <i class="ki-duotone ki-rocket">
                   <i class="path1"></i>
                   <i class="path2"></i>
                  </i></span>
                  <span class="text-gray-600 fs-6">Last month, partners who sent a blast campaign had an average return on investment of 243%. Instantly reach your clients with a blast email or text message and get booked up for August</span>
                  <span class="text-gray-400 fs-6">20 days ago</span>
                  <div>
                    <a href="#" class="btn btn-sm btn-primary px-6">Send a campaign</a>
                  </div>
                </div>

                <div class="separator my-4"></div>

                <div class="d-flex flex-column gap-4">
                  <span class="text-gray-800 fw-bold fs-4">Fill your August calendar with a blast campaign <i class="ki-duotone ki-rocket">
                   <i class="path1"></i>
                   <i class="path2"></i>
                  </i></span>
                  <span class="text-gray-600 fs-6">Last month, partners who sent a blast campaign had an average return on investment of 243%. Instantly reach your clients with a blast email or text message and get booked up for August</span>
                  <span class="text-gray-400 fs-6">20 days ago</span>
                  <div>
                    <a href="#" class="btn btn-sm btn-primary px-6">Send a campaign</a>
                  </div>
                </div>

                <div class="separator my-4"></div>

                <div class="d-flex flex-column gap-4">
                  <span class="text-gray-800 fw-bold fs-4">Fill your August calendar with a blast campaign <i class="ki-duotone ki-rocket">
                   <i class="path1"></i>
                   <i class="path2"></i>
                  </i></span>
                  <span class="text-gray-600 fs-6">Last month, partners who sent a blast campaign had an average return on investment of 243%. Instantly reach your clients with a blast email or text message and get booked up for August</span>
                  <span class="text-gray-400 fs-6">20 days ago</span>
                  <div>
                    <a href="#" class="btn btn-sm btn-primary px-6">Send a campaign</a>
                  </div>
                </div>

                <div class="separator my-4"></div>

                <div class="d-flex flex-column gap-4">
                  <span class="text-gray-800 fw-bold fs-4">Fill your August calendar with a blast campaign <i class="ki-duotone ki-rocket">
                   <i class="path1"></i>
                   <i class="path2"></i>
                  </i></span>
                  <span class="text-gray-600 fs-6">Last month, partners who sent a blast campaign had an average return on investment of 243%. Instantly reach your clients with a blast email or text message and get booked up for August</span>
                  <span class="text-gray-400 fs-6">20 days ago</span>
                  <div>
                    <a href="#" class="btn btn-sm btn-primary px-6">Send a campaign</a>
                  </div>
                </div>

              </div>

            </div>
            <!--end::Card body-->
          </div>

        </div>
        <!--end:::Tab pane-->

        <!--begin:::Tab pane-->
        <div class="tab-pane fade" id="headerappointment" role="tabpanel">

          <div class="card mt-6">
            <!--begin::Card body-->
            <div class="card-body">

              <!--begin::Accordion-->
              <div class="accordion accordion-icon-collapse" id="kt_accordion_3">
                  <!--begin::Item-->
                  <div class="mb-5">
                      <!--begin::Header-->
                      <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse" data-bs-target="#kt_accordion_3_item_1">
                          <div class="d-flex justify-content-between align-items-center w-100">
                            <div class="d-flex w-75">
                              <span class="accordion-icon">
                                  <i class="ki-duotone ki-plus-square fs-3 accordion-icon-off"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                  <i class="ki-duotone ki-minus-square fs-3 accordion-icon-on"><span class="path1"></span><span class="path2"></span></i>
                              </span>
                              <h3 class="fs-4 fw-semibold mb-0 ms-4"><a href="#">#23498</a> Feedback and Review received from customer</h3>
                            </div>
                            <div class="d-flex gap-2">
                        <span class="text-gray-600 fs-6">11:57 AM</span>
                        <span class="text-gray-600 fs-6">8 Aug 2023</span>
                      </div>
                          </div>
                      </div>
                      <!--end::Header-->

                      <!--begin::Body-->
                      <div id="kt_accordion_3_item_1" class="collapse show ps-10" data-bs-parent="#kt_accordion_3">
                          <div class="d-flex flex-column gap-2">
                            <div class="d-flex justify-content-between align-items-center w-100">
                              <div class="d-flex w-75">
                                <span class="fs-6 text-gray-600">appointment status changed to completed from started</span>
                              </div>
                              <div class="d-flex gap-2">
                          <span class="text-gray-600 fs-6">10:31 AM</span>
                          <span class="text-gray-600 fs-6">8 Aug 2023</span>
                        </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center w-100">
                              <div class="d-flex w-75">
                                <span class="fs-6 text-gray-600">status changed to started</span>
                              </div>
                              <div class="d-flex gap-2">
                          <span class="text-gray-600 fs-6">10:31 AM</span>
                          <span class="text-gray-600 fs-6">8 Aug 2023</span>
                        </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center w-100">
                              <div class="d-flex w-75">
                                <span class="fs-6 text-gray-600">Staff Ravi assigned to Service</span>
                              </div>
                              <div class="d-flex gap-2">
                          <span class="text-gray-600 fs-6">10:31 AM</span>
                          <span class="text-gray-600 fs-6">8 Aug 2023</span>
                        </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center w-100">
                              <div class="d-flex w-75">
                                <span class="fs-6 text-gray-600">status changed to confirm</span>
                              </div>
                              <div class="d-flex gap-2">
                          <span class="text-gray-600 fs-6">10:31 AM</span>
                          <span class="text-gray-600 fs-6">8 Aug 2023</span>
                        </div>
                            </div>
                          </div>
                      </div>
                      <!--end::Body-->
                  </div>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <div class="mb-5">
                      <!--begin::Header-->
                      <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_3_item_2">
                          <div class="d-flex justify-content-between align-items-center w-100">
                            <div class="d-flex w-75">
                              <span class="accordion-icon">
                                  <i class="ki-duotone ki-plus-square fs-3 accordion-icon-off"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                  <i class="ki-duotone ki-minus-square fs-3 accordion-icon-on"><span class="path1"></span><span class="path2"></span></i>
                              </span>
                              <h3 class="fs-4 fw-semibold mb-0 ms-4"><a href="#">#23498</a> Feedback and Review received from customer</h3>
                            </div>
                            <div class="d-flex gap-2">
                        <span class="text-gray-600 fs-6">11:57 AM</span>
                        <span class="text-gray-600 fs-6">8 Aug 2023</span>
                      </div>
                          </div>
                      </div>
                      <!--end::Header-->

                      <!--begin::Body-->
                      <div id="kt_accordion_3_item_2" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_3">
                          <div class="d-flex flex-column gap-2">
                            <div class="d-flex justify-content-between align-items-center w-100">
                              <div class="d-flex w-75">
                                <span class="fs-6 text-gray-600">appointment status changed to completed from started</span>
                              </div>
                              <div class="d-flex gap-2">
                          <span class="text-gray-600 fs-6">10:31 AM</span>
                          <span class="text-gray-600 fs-6">8 Aug 2023</span>
                        </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center w-100">
                              <div class="d-flex w-75">
                                <span class="fs-6 text-gray-600">status changed to started</span>
                              </div>
                              <div class="d-flex gap-2">
                          <span class="text-gray-600 fs-6">10:31 AM</span>
                          <span class="text-gray-600 fs-6">8 Aug 2023</span>
                        </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center w-100">
                              <div class="d-flex w-75">
                                <span class="fs-6 text-gray-600">Staff Ravi assigned to Service</span>
                              </div>
                              <div class="d-flex gap-2">
                          <span class="text-gray-600 fs-6">10:31 AM</span>
                          <span class="text-gray-600 fs-6">8 Aug 2023</span>
                        </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center w-100">
                              <div class="d-flex w-75">
                                <span class="fs-6 text-gray-600">status changed to confirm</span>
                              </div>
                              <div class="d-flex gap-2">
                          <span class="text-gray-600 fs-6">10:31 AM</span>
                          <span class="text-gray-600 fs-6">8 Aug 2023</span>
                        </div>
                            </div>
                          </div>
                      </div>
                      <!--end::Body-->
                  </div>
                  <!--end::Item-->

                  <!--begin::Item-->
                  <div class="mb-5">
                      <!--begin::Header-->
                      <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_3_item_3">
                          <div class="d-flex justify-content-between align-items-center w-100">
                            <div class="d-flex w-75">
                              <span class="accordion-icon">
                                  <i class="ki-duotone ki-plus-square fs-3 accordion-icon-off"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                  <i class="ki-duotone ki-minus-square fs-3 accordion-icon-on"><span class="path1"></span><span class="path2"></span></i>
                              </span>
                              <h3 class="fs-4 fw-semibold mb-0 ms-4"><a href="#">#23498</a> Feedback and Review received from customer</h3>
                            </div>
                            <div class="d-flex gap-2">
                        <span class="text-gray-600 fs-6">11:57 AM</span>
                        <span class="text-gray-600 fs-6">8 Aug 2023</span>
                      </div>
                          </div>
                      </div>
                      <!--end::Header-->

                      <!--begin::Body-->
                      <div id="kt_accordion_3_item_3" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_3">
                          <div class="d-flex flex-column gap-2">
                            <div class="d-flex justify-content-between align-items-center w-100">
                              <div class="d-flex w-75">
                                <span class="fs-6 text-gray-600">appointment status changed to completed from started</span>
                              </div>
                              <div class="d-flex gap-2">
                          <span class="text-gray-600 fs-6">10:31 AM</span>
                          <span class="text-gray-600 fs-6">8 Aug 2023</span>
                        </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center w-100">
                              <div class="d-flex w-75">
                                <span class="fs-6 text-gray-600">status changed to started</span>
                              </div>
                              <div class="d-flex gap-2">
                          <span class="text-gray-600 fs-6">10:31 AM</span>
                          <span class="text-gray-600 fs-6">8 Aug 2023</span>
                        </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center w-100">
                              <div class="d-flex w-75">
                                <span class="fs-6 text-gray-600">Staff Ravi assigned to Service</span>
                              </div>
                              <div class="d-flex gap-2">
                          <span class="text-gray-600 fs-6">10:31 AM</span>
                          <span class="text-gray-600 fs-6">8 Aug 2023</span>
                        </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center w-100">
                              <div class="d-flex w-75">
                                <span class="fs-6 text-gray-600">status changed to confirm</span>
                              </div>
                              <div class="d-flex gap-2">
                          <span class="text-gray-600 fs-6">10:31 AM</span>
                          <span class="text-gray-600 fs-6">8 Aug 2023</span>
                        </div>
                            </div>
                          </div>
                      </div>
                      <!--end::Body-->
                  </div>
                  <!--end::Item-->
              </div>
              <!--end::Accordion-->

            </div>
            <!--end::Card body-->
          </div>

        </div>
        <!--end:::Tab pane-->

      </div>

        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
<!--end::Drawer-->

   <!--begin::Scrolltop-->
   <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
      <i class="ki-outline ki-arrow-up"></i>
    </div>
   <!--end::Scrolltop-->
   <!--begin::Javascript-->
   <script>var hostUrl = "assets/";</script>
   <!--begin::Global Javascript Bundle(mandatory for all pages)-->
   <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
   <script src="{{ asset('/public/partner/assets/plugins/global/plugins.bundle.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/scripts.bundle.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/style.js')}}"></script>
   <!--end::Global Javascript Bundle-->
   <!--begin::Vendors Javascript(used for this page only)-->
   <script src="{{ asset('/public/partner/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
   <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
   <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
   <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
   <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
   <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
   <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
   <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
   <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
   <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
   <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
   <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
   <script src="{{ asset('/public/partner/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>
   <!--end::Vendors Javascript-->
   <!--begin::Custom Javascript(used for this page only)-->
   <script src="{{ asset('/public/partner/assets/js/custom/apps/ecommerce/reports/sales/sales.js')}}"></script>
   <!-- <script src="{{ asset('/public/partner/assets/js/custom/apps/user-management/users/list/table.js')}}"></script> -->
   <script src="{{ asset('/public/partner/assets/js/custom/apps/ecommerce/catalog/save-category.js')}}"></script>
   <!-- <script src="{{ asset('/public/partner/assets/js/custom/apps/user-management/users/list/export-users.js')}}"></script> -->
   <!-- <script src="{{ asset('/public/partner/assets/js/custom/apps/user-management/users/list/add.js')}}"></script> -->
   <script src="{{ asset('/public/partner/assets/js/widgets.bundle.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/widgets.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/apps/chat/chat.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/utilities/modals/new-target.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/utilities/modals/new-address.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/utilities/modals/users-search.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/utilities/modals/create-campaign.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/utilities/modals/create-app.js')}}"></script>

   <script src="{{ asset('/public/assets/plugins/custom/intlTelInput/js/intlTelInput-jquery.min.js') }}"></script>
   <script src="{{ asset('/public/assets/plugins/custom/intlTelInput/js/intlTelInput.js') }}"></script>
   
   <!--end::Custom Javascript-->
   <!--end::Javascript-->

   <script>
    jQuery(document).ready(function() { 
      var browserUser = "{{ getUserCountry() }}";
      var input = jQuery('.phone-number-intl');
      var countryCodeInput = jQuery('.country-code-intl');

      // Set the initial country
      countryCodeInput.val(browserUser);

      // Initialize intlTelInput on the phone input field with initialCountry
      input.intlTelInput({
          initialCountry: browserUser,
      });

      jQuery('.iti__country-list li').click(function(){
        // jQuery(".dialCode-intl").val(jQuery(this).data('dial-code'));
        var country_code = jQuery(this).data('country-code');
        jQuery(".country-code-intl").val(country_code.toUpperCase());
      })
    });
  </script>

   <script>
      // Define colors
      var green =  KTUtil.getCssVariableValue("--kt-success-active");
      var red =  KTUtil.getCssVariableValue("--kt-danger-active");      
   </script>
   <script>
      var KTLayoutSearch2 = (function () {
          var e,
              t,
              n,
              i,
              r,
              o,
              a,
              l,
              s,
              u,
              d,
              c,
              m,
              f = function (e) {
                  setTimeout(function () {
                      var i = KTUtil.getRandomInt(1, 3);
                      t.classList.add("d-none"), 3 === i ? (n.classList.add("d-none"), r.classList.remove("d-none")) : (n.classList.remove("d-none"), r.classList.add("d-none")), e.complete();
                  }, 1500);
              },
              p = function (e) {
                  t.classList.remove("d-none"), n.classList.add("d-none"), r.classList.add("d-none");
              };
          return {
              init: function () {
                  (e = document.querySelector("#kt_service_search")) &&
                      ((i = e.querySelector('[data-kt-search-element="wrapper"]')),
                      e.querySelector('[data-kt-search-element="form"]'),
                      (t = e.querySelector('[data-kt-search-element="main"]')),
                      (n = e.querySelector('[data-kt-search-element="results"]')),
                      (r = e.querySelector('[data-kt-search-element="empty"]')),
                      (o = e.querySelector('[data-kt-search-element="preferences"]')),
                      (a = e.querySelector('[data-kt-search-element="preferences-show"]')),
                      (l = e.querySelector('[data-kt-search-element="preferences-dismiss"]')),
                      (s = e.querySelector('[data-kt-search-element="advanced-options-form"]')),
                      (u = e.querySelector('[data-kt-search-element="advanced-options-form-show"]')),
                      (d = e.querySelector('[data-kt-search-element="advanced-options-form-cancel"]')),
                      (c = e.querySelector('[data-kt-search-element="advanced-options-form-search"]')),
                      (m = new KTSearch(e)).on("kt.search.process", f),
                      m.on("kt.search.clear", p),
                      a.addEventListener("click", function () {
                          i.classList.add("d-none"), o.classList.remove("d-none");
                      }),
                      l.addEventListener("click", function () {
                          i.classList.remove("d-none"), o.classList.add("d-none");
                      }),
                      u.addEventListener("click", function () {
                          i.classList.add("d-none"), s.classList.remove("d-none");
                      }),
                      d.addEventListener("click", function () {
                          i.classList.remove("d-none"), s.classList.add("d-none");
                      }),
                      c.addEventListener("click", function () {}));
              },
          };
      })();
      KTUtil.onDOMContentLoaded(function () {
          KTLayoutSearch2.init();
      });
   </script>
   <script type="text/javascript">
      // var element = document.getElementById('sellingitmchart');
      var elementapexch = document.getElementById('sellingitmchart');
      var elementapexch2 = document.getElementById('sellingitmchart2');
      var elementapexch3 = document.getElementById('sellingitmchart3');
      var elementapexch4 = document.getElementById('sellingitmchart4');
      var elementapexch5 = document.getElementById('sellingitmchart5');
      
      var labelColor = KTUtil.getCssVariableValue('--kt-gray-500');
      var borderColor = KTUtil.getCssVariableValue('--kt-gray-200');
      
      var options = {
          series: [{
              data: [44, 55, 41, 64, 22, 43, 21]
          }, {
              data: [53, 32, 33, 52, 13, 44, 32]
          }],
          chart: {
              fontFamily: 'inherit',
              type: 'bar',
              height: 430,
              toolbar: {
                  show: false
              }
          },
          plotOptions: {
              bar: {
                  horizontal: true,
                  columnWidth: ['30%'],
                  endingShape: 'rounded'
              },
          },
          legend: {
              show: false
          },
          dataLabels: {
              enabled: false
          },
          stroke: {
              show: true,
              width: 2,
              colors: ['transparent']
          },
          xaxis: {
              categories: ['Pedicure', 'Manicure', 'Hair color', 'Hair cut', 'Face clean up', 'Face de tan', 'Bridal make up'],
              axisBorder: {
                  show: false,
              },
              axisTicks: {
                  show: false
              },
              labels: {
                  style: {
                      colors: labelColor,
                      fontSize: '12px'
                  }
              }
          },
          yaxis: {
              labels: {
                  style: {
                      colors: labelColor,
                      fontSize: '12px'
                  }
              }
          },
          fill: {
              opacity: 1
          },
          states: {
              normal: {
                  filter: {
                      type: 'none',
                      value: 0
                  }
              },
              hover: {
                  filter: {
                      type: 'none',
                      value: 0
                  }
              },
              active: {
                  allowMultipleDataPointsSelection: false,
                  filter: {
                      type: 'none',
                      value: 0
                  }
              }
          },
          tooltip: {
              style: {
                  fontSize: '12px'
              },
              y: {
                  formatter: function (val) {
                      return '$' + val + ' thousands'
                  }
              }
          },
          colors: ['rgb(255, 199, 0)', 'rgb(219, 223, 233)'],
          grid: {
              borderColor: borderColor,
              strokeDashArray: 4,
              yaxis: {
                  lines: {
                      show: true
                  }
              }
          }
      };
      
      var chart = new ApexCharts(elementapexch, options);
      var chart2 = new ApexCharts(elementapexch2, options);
      var chart3 = new ApexCharts(elementapexch3, options);
      var chart4 = new ApexCharts(elementapexch4, options);
      var chart5 = new ApexCharts(elementapexch5, options);
      // chart.render();
      // chart2.render();
      // chart3.render();
      // chart4.render();
      // chart5.render();
   </script>
   <script type="text/javascript">
      var KTChartsWidget5 = (function () {
      var e = { self: null, rendered: !1 },
          t = function (e) {
              var t = document.getElementById("kt_charts_widget_5_cstm");
              if (t) {
                  var a = KTUtil.getCssVariableValue("--bs-border-dashed-color"),
                      l = {
                          series: [{ data: [15, 12, 10, 8, 7, 4, 3], show: !1 }],
                          chart: { type: "bar", height: 350, toolbar: { show: !1 } },
                          plotOptions: { bar: { borderRadius: 4, horizontal: !0, distributed: !0, barHeight: 23 } },
                          dataLabels: { enabled: !1 },
                          legend: { show: !1 },
                          colors: ["#3E97FF", "#F1416C", "#50CD89", "#FFC700", "#7239EA", "#50CDCD", "#3F4254"],
                          xaxis: {
                              categories: ["Rahul", "Akhilesh", "Sonia", "Mamta", "Manmohan", "Sam", "Tina"],
                              labels: {
                                  formatter: function (e) {
                                      return e + "K";
                                  },
                                  style: { colors: KTUtil.getCssVariableValue("--bs-gray-400"), fontSize: "14px", fontWeight: "600", align: "left" },
                              },
                              axisBorder: { show: !1 },
                          },
                          yaxis: { labels: { style: { colors: KTUtil.getCssVariableValue("--bs-gray-800"), fontSize: "14px", fontWeight: "600" }, offsetY: 2, align: "left" } },
                          grid: { borderColor: a, xaxis: { lines: { show: !0 } }, yaxis: { lines: { show: !1 } }, strokeDashArray: 4 },
                      };
                  (e.self = new ApexCharts(t, l)),
                      setTimeout(function () {
                          e.self.render(), (e.rendered = !0);
                      }, 200);
              }
          };
       return {
           init: function () {
               t(e),
                   KTThemeMode.on("kt.thememode.change", function () {
                       e.rendered && e.self.destroy(), t(e);
                   });
           },
       };
      })();
      
      var KTChartsWidget6 = (function () {
       var e = { self: null, rendered: !1 },
           t = function (e) {
               var t = document.getElementById("kt_charts_widget_6_cstm");
               if (t) {
                   var a = KTUtil.getCssVariableValue("--bs-gray-800"),
                       l = KTUtil.getCssVariableValue("--bs-border-dashed-color"),
                       r = {
                           series: [{ name: "Sales", data: [15, 12, 10, 8, 7] }],
                           chart: { fontFamily: "inherit", type: "bar", height: 350, toolbar: { show: !1 } },
                           plotOptions: { bar: { borderRadius: 8, horizontal: !0, distributed: !0, barHeight: 50, dataLabels: { position: "bottom" } } },
                           dataLabels: {
                               enabled: !0,
                               textAnchor: "start",
                               offsetX: 0,
                               formatter: function (e, t) {
                                   e *= 1e3;
                                   return wNumb({ thousand: "," }).to(e);
                               },
                               style: { fontSize: "14px", fontWeight: "600", align: "left" },
                           },
                           legend: { show: !1 },
                           colors: ["#3E97FF", "#F1416C", "#50CD89", "#FFC700", "#7239EA"],
                           xaxis: {
                               categories: ["Service", "Package", "Voucher", "Membership", "Product"],
                               labels: {
                                   formatter: function (e) {
                                       return e + "K";
                                   },
                                   style: { colors: [a], fontSize: "14px", fontWeight: "600", align: "left" },
                               },
                               axisBorder: { show: !1 },
                           },
                           yaxis: {
                               labels: {
                                   formatter: function (e, t) {
                                       return Number.isInteger(e) ? e + " - " + parseInt((100 * e) / 18).toString() + "%" : e;
                                   },
                                   style: { colors: a, fontSize: "14px", fontWeight: "600" },
                                   offsetY: 2,
                                   align: "left",
                               },
                           },
                           grid: { borderColor: l, xaxis: { lines: { show: !0 } }, yaxis: { lines: { show: !1 } }, strokeDashArray: 4 },
                           tooltip: {
                               style: { fontSize: "12px" },
                               y: {
                                   formatter: function (e) {
                                       return e + "K";
                                   },
                               },
                           },
                       };
                   (e.self = new ApexCharts(t, r)),
                       setTimeout(function () {
                           e.self.render(), (e.rendered = !0);
                       }, 200);
               }
           };
       return {
           init: function () {
               t(e),
                   KTThemeMode.on("kt.thememode.change", function () {
                       e.rendered && e.self.destroy(), t(e);
                   });
           },
       };
      })();
   </script>
   <script type="text/javascript">
      var KTChartsWidget10 = (function () {
         var e = { self: null, rendered: !1 },
             t = { self: null, rendered: !1 },
             a = { self: null, rendered: !1 },
             l = { self: null, rendered: !1 },
             x2 = { self: null, rendered: !1 },
             y2 = { self: null, rendered: !1 },
             r = function (e, t, a, l, r) {
                 var o = document.querySelector(a);
                 if (o) {
                     var i = parseInt(KTUtil.css(o, "height")),
                         s = KTUtil.getCssVariableValue("--bs-gray-900"),
                         n = KTUtil.getCssVariableValue("--bs-border-dashed-color"),
                         d = {
                             series: [{ name: "Achieved Target", data: l }],
                             chart: { fontFamily: "inherit", type: "bar", height: i, toolbar: { show: !1 } },
                             plotOptions: { bar: { horizontal: !1, columnWidth: ["22%"], borderRadius: 5, dataLabels: { position: "top" }, startingShape: "flat" } },
                             legend: { show: !1 },
                             dataLabels: {
                                 enabled: !0,
                                 offsetY: -30,
                                 style: { fontSize: "13px", colors: [s] },
                                 formatter: function (e) {
                                     return e + "K";
                                 },
                             },
                             stroke: { show: !0, width: 2, colors: ["transparent"] },
                             xaxis: {
                                 categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                                 axisBorder: { show: !1 },
                                 axisTicks: { show: !1 },
                                 labels: { style: { colors: KTUtil.getCssVariableValue("--bs-gray-500"), fontSize: "13px" } },
                                 crosshairs: { fill: { gradient: { opacityFrom: 0, opacityTo: 0 } } },
                             },
                             yaxis: {
                                 labels: {
                                     style: { colors: KTUtil.getCssVariableValue("--bs-gray-500"), fontSize: "13px" },
                                     formatter: function (e) {
                                         return parseInt(e) + "K";
                                     },
                                 },
                             },
                             fill: { opacity: 1 },
                             states: { normal: { filter: { type: "none", value: 0 } }, hover: { filter: { type: "none", value: 0 } }, active: { allowMultipleDataPointsSelection: !1, filter: { type: "none", value: 0 } } },
                             tooltip: {
                                 style: { fontSize: "12px" },
                                 y: {
                                     formatter: function (e) {
                                         return +e + "K";
                                     },
                                 },
                             },
                             colors: [KTUtil.getCssVariableValue("--bs-primary"), KTUtil.getCssVariableValue("--bs-primary-light")],
                             grid: { borderColor: n, strokeDashArray: 4, yaxis: { lines: { show: !0 } } },
                         };
                     e.self = new ApexCharts(o, d);
                     var m = document.querySelector(t);
                     !0 === r &&
                         setTimeout(function () {
                             e.self.render(), (e.rendered = !0);
                         }, 200),
                         m.addEventListener("shown.bs.tab", function (t) {
                             !1 === e.rendered && (e.self.render(), (e.rendered = !0));
                         });
                 }
             };
          return {
              init: function () {
                  var o = [30, 18, 43, 70, 13, 37, 23];
                  r(e, "#kt_charts_widget_10_tab_1_cstm", "#kt_charts_widget_10_chart_1_cstm", o, !0);
                  var i = [25, 55, 35, 50, 45, 20, 31];
                  r(t, "#kt_charts_widget_10_tab_2_cstm", "#kt_charts_widget_10_chart_2_cstm", i, !1);
                  var s = [45, 15, 35, 70, 45, 50, 21];
                  r(a, "#kt_charts_widget_10_tab_3_cstm", "#kt_charts_widget_10_chart_3_cstm", s, !1);
                  var n = [15, 55, 25, 50, 25, 60, 31];
                  r(l, "#kt_charts_widget_10_tab_4_cstm", "#kt_charts_widget_10_chart_4_cstm", n, !1);
                  var x1 = [15, 55, 25, 50, 25, 60, 31];
                  r(x2, "#kt_charts_widget_10_tab_5_cstm", "#kt_charts_widget_10_chart_5_cstm", x1, !1);
                  var y1 = [15, 55, 25, 50, 25, 60, 31];
                  r(y2, "#kt_charts_widget_10_tab_6_cstm", "#kt_charts_widget_10_chart_6_cstm", y1, !1),
                      KTThemeMode.on("kt.thememode.change", function () {
                          e.rendered && e.self.destroy(),
                              t.rendered && t.self.destroy(),
                              a.rendered && a.self.destroy(),
                              l.rendered && l.self.destroy(),
                              x2.rendered && x2.self.destroy(),
                              y2.rendered && y2.self.destroy(),
                              r(e, "#kt_charts_widget_10_tab_1_cstm", "#kt_charts_widget_10_chart_1_cstm", o, e.rendered),
                              r(t, "#kt_charts_widget_10_tab_2_cstm", "#kt_charts_widget_10_chart_2_cstm", i, t.rendered),
                              r(a, "#kt_charts_widget_10_tab_3_cstm", "#kt_charts_widget_10_chart_3_cstm", s, a.rendered),
                              r(l, "#kt_charts_widget_10_tab_4_cstm", "#kt_charts_widget_10_chart_4_cstm", n, l.rendered),
                              r(x2, "#kt_charts_widget_10_tab_5_cstm", "#kt_charts_widget_10_chart_5_cstm", x1, x2.rendered),
                              r(y2, "#kt_charts_widget_10_tab_6_cstm", "#kt_charts_widget_10_chart_6_cstm", y1, y2.rendered);
                      });
              },
          };
      })();
   </script>
   <script type="text/javascript">
      var KTChartsWidget19 = {
          init: function () {
              !(function () {
                  if ("undefined" != typeof am5) {
                      var e = document.getElementById("kt_charts_widget_19_chart_1_cstm");
                      if (e) {
                          var t,
                              a = function () {
                                  (t = am5.Root.new(e)).setThemes([am5themes_Animated.new(t)]);
                                  var a = t.container.children.push(am5radar.RadarChart.new(t, { panX: !1, panY: !1, wheelX: "panX", wheelY: "zoomX", innerRadius: am5.percent(20), startAngle: -90, endAngle: 180 })),
                                      l = [
                                          { category: "Membership", value: 80, full: 100, columnSettings: { fillOpacity: 1, fill: am5.color(KTUtil.getCssVariableValue("--bs-info")) } },
                                          { category: "Voucher", value: 35, full: 100, columnSettings: { fillOpacity: 1, fill: am5.color(KTUtil.getCssVariableValue("--bs-danger")) } },
                                          { category: "Package", value: 92, full: 100, columnSettings: { fillOpacity: 1, fill: am5.color(KTUtil.getCssVariableValue("--bs-primary")) } },
                                          { category: "Services", value: 68, full: 100, columnSettings: { fillOpacity: 1, fill: am5.color(KTUtil.getCssVariableValue("--bs-success")) } },
                                      ];
                                  a.set("cursor", am5radar.RadarCursor.new(t, { behavior: "zoomX" })).lineY.set("visible", !1);
                                  var r = am5radar.AxisRendererCircular.new(t, {});
                                  r.labels.template.setAll({ radius: 10 }), r.grid.template.setAll({ forceHidden: !0 });
                                  var o = a.xAxes.push(am5xy.ValueAxis.new(t, { renderer: r, min: 0, max: 100, strictMinMax: !0, numberFormat: "#'%'", tooltip: am5.Tooltip.new(t, {}) }));
                                  o.get("renderer").labels.template.setAll({ fill: am5.color(KTUtil.getCssVariableValue("--bs-gray-500")), fontWeight: "500", fontSize: 16 });
                                  var i = am5radar.AxisRendererRadial.new(t, { minGridDistance: 20 });
                                  i.labels.template.setAll({ centerX: am5.p100, fontWeight: "500", fontSize: 18, fill: am5.color(KTUtil.getCssVariableValue("--bs-gray-500")), templateField: "columnSettings" }),
                                      i.grid.template.setAll({ forceHidden: !0 });
                                  var s = a.yAxes.push(am5xy.CategoryAxis.new(t, { categoryField: "category", renderer: i }));
                                  s.data.setAll(l);
                                  var n = a.series.push(am5radar.RadarColumnSeries.new(t, { xAxis: o, yAxis: s, clustered: !1, valueXField: "full", categoryYField: "category", fill: t.interfaceColors.get("alternativeBackground") }));
                                  n.columns.template.setAll({ width: am5.p100, fillOpacity: 0.08, strokeOpacity: 0, cornerRadius: 20 }), n.data.setAll(l);
                                  var d = a.series.push(am5radar.RadarColumnSeries.new(t, { xAxis: o, yAxis: s, clustered: !1, valueXField: "value", categoryYField: "category" }));
                                  d.columns.template.setAll({ width: am5.p100, strokeOpacity: 0, tooltipText: "{category}: {valueX}%", cornerRadius: 20, templateField: "columnSettings" }),
                                      d.data.setAll(l),
                                      n.appear(1e3),
                                      d.appear(1e3),
                                      a.appear(1e3, 100);
                              };
                          am5.ready(function () {
                              a();
                          }),
                              KTThemeMode.on("kt.thememode.change", function () {
                                  t.dispose(), a();
                              });
                      }
                  }
              })()
          },
      };
      "undefined" != typeof module && (module.exports = KTChartsWidget19),
          KTUtil.onDOMContentLoaded(function () {
              KTChartsWidget19.init();
          });
   </script>
   <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function () {
        // Get all date range displays and buttons
        var dateRangeDisplays = document.querySelectorAll('.dateRangeDisplay');
        var prevButtons = document.querySelectorAll('.prevBtn');
        var nextButtons = document.querySelectorAll('.nextBtn');
      
        // Initialize each date range display
        dateRangeDisplays.forEach(function (dateRangeDisplay, index) {
          // Get the current date
          var currentDate = new Date();
      
          // Get the start of the current week (Sunday)
          var startOfWeek = new Date(currentDate);
          startOfWeek.setDate(currentDate.getDate() - currentDate.getDay());
      
          // Get the end of the current week (Saturday)
          var endOfWeek = new Date(currentDate);
          endOfWeek.setDate(currentDate.getDate() + (6 - currentDate.getDay()));
      
          // Update the date range display
          function updateDateRangeDisplay() {
            var startDateFormatted = formatDate(startOfWeek);
            var endDateFormatted = formatDate(endOfWeek);
            dateRangeDisplay.textContent = startDateFormatted + ' - ' + endDateFormatted;
          }
      
          // Format date to a desired string format
          function formatDate(date) {
            var month = date.toLocaleString('default', { month: 'long' });
            var day = date.getDate();
            return day + ' ' + month;
          }
      
          // Previous button click handler
          prevButtons[index].addEventListener('click', function () {
            // Move to the previous week
            startOfWeek.setDate(startOfWeek.getDate() - 7);
            endOfWeek.setDate(endOfWeek.getDate() - 7);
            currentDate.setDate(currentDate.getDate() - 7);
      
            // Update the display
            updateDateRangeDisplay();
          });
      
          // Next button click handler
          nextButtons[index].addEventListener('click', function () {
            // Move to the next week
            startOfWeek.setDate(startOfWeek.getDate() + 7);
            endOfWeek.setDate(endOfWeek.getDate() + 7);
            currentDate.setDate(currentDate.getDate() + 7);
      
            // Update the display
            updateDateRangeDisplay();
          });
      
          // Initial update of the date range display
          updateDateRangeDisplay();
        });
      });
   </script>
   <script type="text/javascript">
      function chngsign(e) {
      	let parch = e.parentElement.children;
      	for(let i=0; i<parch.length; i++) {
      		if(parch[i].classList.contains('active')) {
      			parch[i].classList.remove('active');
      		}
      	}
      	e.classList.add('active');
      	e.closest('.col-md-3').previousElementSibling.querySelector('.input-group-text').textContent=e.textContent;
      }
   </script>
</body>
<!--end::Body-->
</html>
