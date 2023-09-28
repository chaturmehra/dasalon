@extends('admin.layouts.auth.app')
@section('content')


<!--Begin:::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
  <!--begin::Content wrapper-->
  <div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar pt-3 pt-lg-6">
      <!--begin::Toolbar container-->
      <div id="kt_app_toolbar_container" class="app-container container-xl d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
          <!--begin::Title-->
          <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Recommendations (package)</h1>
          <!--end::Title-->
          <!--begin::Breadcrumb-->
          <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">
              <a href="{{ url('/admin/setting') }}" class="text-muted text-hover-primary">Home</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <span class="bullet bg-gray-400 w-5px h-2px"></span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">Recommendations (package)</li>
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
      <div id="kt_app_content_container" class="app-container container">
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
                      <a href="services-recommendations.html" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Recommendations (package)</a>
                      <a href="services-offers-management-voucher.html">
                        <i class="ki-outline ki-verify fs-1 text-primary"></i>
                      </a>
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
                          <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>
                          <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$" data-kt-initialized="1">$4,500</div>
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
                          <i class="ki-outline ki-arrow-down fs-3 text-danger me-2"></i>
                          <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="80" data-kt-initialized="1">80</div>
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
                          <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>
                          <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">%60</div>
                        </div>
                        <!--end::Number-->
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
            <!--begin::Navs--> @include('admin.services.tab')
            <!--End::Navs-->
          </div>
        </div>
        <!--end::Navbar-->
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7">
          <div class="card card-flush">
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
              <!--begin:::Tabs-->
              <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                <!--begin:::Tab item-->
                <!-- <li class="nav-item">
                   <a class="nav-link text-active-primary pb-4 " ref="{{url('admin/services/offers-management')}}">Recommended package</a>
                </li> -->
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                  <a class="nav-link text-active-primary pb-4  active" href="{{url('admin/services/offers-management/voucher')}}">Voucher</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                 <li class="nav-item">
                  <a class="nav-link text-active-primary pb-4 " href="services-offers-management-membership.html">Membership</a>
                </li> 
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                 <li class="nav-item">
                  <a class="nav-link text-active-primary pb-4 " href="services-offers-management-giftcard.html">Gift Card</a>
                </li> 
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                  <a class="nav-link text-active-primary pb-4" href="services-offers-management-promocode.html">Promo Code</a>
                </li> 
                <!--end:::Tab item-->
              </ul>
              <!--end:::Tabs-->
            </div>
          </div>
          <!--begin::Products-->
         <div class="card card-flush">
                      <div class="card-header">
                        <h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Manage Vouchers</h2>
                      </div>
                      <!--begin::Card header-->
                      <div class="card-header align-items-center gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                          <!--begin::Search-->
                          <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                            <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
                          </div>
                          <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                          <div class="m-0">
                            <!--begin::Export dropdown-->
                            <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                              <i class="ki-duotone ki-exit-down fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                              </i> Export Report </button>
                            <!--begin::Menu-->
                            <div id="kt_datatable_example_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-export="pdf"> Export as PDF </a>
                              </div>
                              <!--end::Menu item-->
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-export="excel"> Export as Excel </a>
                              </div>
                              <!--end::Menu item-->
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-export="csv"> Export as CSV </a>
                              </div>
                              <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                            <!--end::Export dropdown-->
                          </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-0">
                          <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_datatable_example1">
                            <!--begin::Table head-->
                            <thead>
                              <!--begin::Table row-->
                              <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th>Voucher Name</th>
                                <th>Partner</th>
                                <th>Created on</th>
                                <th>Gender</th>
                                <th>Duration</th>
                                <th>Sessions</th>
                                <th>Price</th>
                                <th>Validity</th>
                                <th>Qty Sold</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                              </tr>
                              <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600 alntop">
                              <tr>
                                <td>
                                  <a href="#" id="kt_drawer_example_permanent_toggle2">
                                    <div class="d-flex gap-3">
                                      <div data-qa="color-sample-blue" class="color-ind">
                                        <div class="color-ind-single blue" title="blue"></div>
                                      </div>
                                      <div class="d-flex justify-content-start flex-column">
                                        <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Voucher1</span>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7"> Hair cut, shampoo, blow dye </span>
                                      </div>
                                    </div>
                                  </a>
                                </td>
                                <td>Partner1</td>
                                <td>6 Jun 2023</td>
                                <td>Male</td>
                                <td>60 min</td>
                                <td>20</td>
                                <td>
                                  <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$195</span>
                                </td>
                                <td>1 year</td>
                                <td>30</td>
                                <td>
                                  <span class="badge badge-light-success">Enabled</span>
                                </td>
                                <td class="text-end">
                                  <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                  </a>
                                  <!--begin::Menu-->
                                  <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                      <a href="#" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                      <a href="" class="menu-link px-3">Enable</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                      <a href="" class="menu-link px-3">Disable</a>
                                    </div>
                                  </div>
                                  <!--end::Menu-->
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <a href="#" id="kt_drawer_example_permanent_toggle2">
                                    <div class="d-flex gap-3">
                                      <div data-qa="color-sample-dark" class="color-ind">
                                        <div class="color-ind-single dark" title="dark"></div>
                                      </div>
                                      <div class="d-flex justify-content-start flex-column">
                                        <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Voucher2</span>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7"> Facial, D tan </span>
                                      </div>
                                    </div>
                                  </a>
                                </td>
                                <td>Partner2</td>
                                <td>6 Jun 2023</td>
                                <td>Male</td>
                                <td>60 min</td>
                                <td>20</td>
                                <td>
                                  <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$195</span>
                                </td>
                                <td>1 year</td>
                                <td>30</td>
                                <td>
                                  <span class="badge badge-light-success">Enabled</span>
                                </td>
                                <td class="text-end">
                                  <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                  </a>
                                  <!--begin::Menu-->
                                  <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                      <a href="#" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                      <a href="" class="menu-link px-3">Enable</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                      <a href="" class="menu-link px-3">Disable</a>
                                    </div>
                                  </div>
                                  <!--end::Menu-->
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <a href="#" id="kt_drawer_example_permanent_toggle2">
                                    <div class="d-flex gap-3">
                                      <div data-qa="color-sample-green" class="color-ind">
                                        <div class="color-ind-single green" title="green"></div>
                                      </div>
                                      <div class="d-flex justify-content-start flex-column">
                                        <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Voucher3</span>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7"> Manicure, Pedicure, Makeup </span>
                                      </div>
                                    </div>
                                  </a>
                                </td>
                                <td>Partner3</td>
                                <td>6 Jun 2023</td>
                                <td>Male</td>
                                <td>60 min</td>
                                <td>20</td>
                                <td>
                                  <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$195</span>
                                </td>
                                <td>1 year</td>
                                <td>30</td>
                                <td>
                                  <span class="badge badge-light-success">Enabled</span>
                                </td>
                                <td class="text-end">
                                  <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                  </a>
                                  <!--begin::Menu-->
                                  <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                      <a href="#" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                      <a href="" class="menu-link px-3">Enable</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                      <a href="" class="menu-link px-3">Disable</a>
                                    </div>
                                  </div>
                                  <!--end::Menu-->
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <a href="#" id="kt_drawer_example_permanent_toggle2">
                                    <div class="d-flex gap-3">
                                      <div data-qa="color-sample-orange" class="color-ind">
                                        <div class="color-ind-single orange" title="orange"></div>
                                      </div>
                                      <div class="d-flex justify-content-start flex-column">
                                        <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Voucher4</span>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7"> Straightening, Rebonding </span>
                                      </div>
                                    </div>
                                  </a>
                                </td>
                                <td>Partner4</td>
                                <td>6 Jun 2023</td>
                                <td>Male</td>
                                <td>60 min</td>
                                <td>20</td>
                                <td>
                                  <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$195</span>
                                </td>
                                <td>1 year</td>
                                <td>30</td>
                                <td>
                                  <span class="badge badge-light-danger">Disabled</span>
                                </td>
                                <td class="text-end">
                                  <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                  </a>
                                  <!--begin::Menu-->
                                  <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                      <a href="#" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                      <a href="" class="menu-link px-3">Enable</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                      <a href="" class="menu-link px-3">Disable</a>
                                    </div>
                                  </div>
                                  <!--end::Menu-->
                                </td>
                              </tr>
                            </tbody>
                            <!--end::Table body-->
                          </table>
                        </div>
                        <!--end::Card body-->
                      </div>
                      <!--end::Products-->
                    </div>
          <!--end::Products-->
        </div>
      </div>
      <!--end::Content container-->
    </div>
    <!--end::Content-->
  </div>
  <!--end::Content wrapper-->
</div><!--end:::Main-->

<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
              <i class="ki-outline ki-arrow-up"></i>
            </div>
            <!--end::Scrolltop-->
            <!--begin::Drawer-->
            <div id="kt_drawer_example_permanent2" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_drawer_example_permanent_toggle2" data-kt-drawer-close="#kt_drawer_example_permanent_close2" data-kt-drawer-overlay="true" data-kt-drawer-permanent="true" data-kt-drawer-width="{default:'300px', 'md': '700px', 'xl': '950px'}">
              <!--begin::Card-->
              <div class="card rounded-0 w-100">
                <!--begin::Card header-->
                <div class="card-header pe-5">
                  <!--begin::Title-->
                  <div class="card-title">
                    <div class="d-flex flex-column gap-3 mb-4">
                      <h2>Annual hair care</h2>
                      <span class="text-gray-400 fs-6">Get 12 hair cut at a price of 10 hair cut</span>
                    </div>
                  </div>
                  <!--end::Title-->
                  <!--begin::Card toolbar-->
                  <div class="card-toolbar">
                    <div class="d-flex gap-3 me-3">
                      <span class="text-gray-800 fs-6">Status:</span>
                      <span class="text-gray-400 fs-6">Active</span>
                    </div>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="kt_drawer_example_permanent_close2">
                      <i class="ki-duotone ki-cross fs-2x">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </div>
                    <!--end::Close-->
                  </div>
                  <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body hover-scroll-overlay-y py-10">
                  <!--begin::Form-->
                  <form class="form d-flex flex-column flex-lg-row" id="serviceeditform">
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100">
                      <!--begin::General options-->
                      <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                          <div class="card-title">
                            <h2 class="required fs-3">Select Audience</h2>
                          </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                          <!--begin::Input group-->
                          <div class="fv-row mb-4">
                            <div class="card-title">
                              <label class="required fw-semibold fs-6">Partner type</label>
                            </div>
                            <div class="d-flex justify-content-between align-items-center gap-5">
                              <!--begin::Input-->
                              <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                                <option></option>
                                <option value="1" selected>Salon</option>
                                <option value="2" selected>Freelancer</option>
                                <option value="3">Salon with home service</option>
                              </select>
                              <!--end::Input-->
                              <!--begin::Description-->
                              <div class="text-muted fs-7">50</div>
                              <!--end::Description-->
                            </div>
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="fv-row mb-4">
                            <div class="card-title">
                              <label class="required fw-semibold fs-6">Business type</label>
                            </div>
                            <div class="d-flex justify-content-between align-items-center gap-5">
                              <!--begin::Input-->
                              <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                                <option></option>
                                <option value="1" selected>Beauty Salon</option>
                                <option value="2" selected>Hair Salon</option>
                                <option value="3" selected>Nail Salon</option>
                                <option value="4" selected>Manicure / Pedicure</option>
                                <option value="3">Massage / Therapeut</option>
                                <option value="3">Weight loss</option>
                                <option value="3">Therapy center</option>
                                <option value="3">Tattoo & Piercing</option>
                                <option value="3">Waxing salon</option>
                                <option value="3">Massage</option>
                                <option value="3">Spa</option>
                                <option value="3">General wellness</option>
                                <option value="3">Aesthetics</option>
                                <option value="3">Barbershop</option>
                              </select>
                              <!--end::Input-->
                              <!--begin::Description-->
                              <div class="text-muted fs-7">50</div>
                              <!--end::Description-->
                            </div>
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="fv-row">
                            <div class="card-title">
                              <label class="required fw-semibold fs-6">Unique id</label>
                            </div>
                            <div class="d-flex justify-content-between align-items-center gap-5">
                              <!--begin::Input-->
                              <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple" value="VHDFYHAQ, CHJBDJHD">
                                <option></option>
                                <option value="1" selected>VHDFYHAQ</option>
                                <option value="2" selected>CHJBDJHD</option>
                                <option value="3">BJBDDBJD</option>
                              </select>
                              <!--end::Input-->
                              <!--begin::Description-->
                              <div class="text-muted fs-7">2</div>
                              <!--end::Description-->
                            </div>
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
                            <h2 class="required fs-3">Added service</h2>
                          </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-2 pb-5">
                          <!--begin::Input group-->
                          <div class="fv-row">
                            <input class="form-control d-flex align-items-center" value="service1, service2, service3" placeholder="Add service" id="kt_tagify_service_edit" />
                          </div>
                          <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                      </div>
                      <!--end::General options-->
                      <div class="card card-flush py-4">
                        <div class="card-header">
                          <div class="card-title">
                            <h2 class="required fs-3">Gender</h2>
                          </div>
                        </div>
                        <div class="card-body pt-2">
                          <div class="d-flex gap-4">
                            <!--begin::Col-->
                            <div>
                              <!--begin::Option-->
                              <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start py-5 px-4">
                                <!--begin::Radio-->
                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                  <input class="form-check-input" type="radio" name="gender_option" value="1" />
                                </span>
                                <!--end::Radio-->
                                <!--begin::Info-->
                                <span class="badge badge-danger ms-4">
                                  <i class="bi bi-gender-female me-2 fs-3 clrwht"></i> Female </span>
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
                                  <input class="form-check-input" type="radio" name="gender_option" value="2" checked="checked" />
                                </span>
                                <!--end::Radio-->
                                <!--begin::Info-->
                                <span class="badge badge-info ms-4">
                                  <i class="bi bi-gender-male me-2 fs-3 clrwht"></i> Male </span>
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
                                  <input class="form-check-input" type="radio" name="gender_option" value="3" />
                                </span>
                                <!--end::Radio-->
                                <!--begin::Info-->
                                <span class="badge badge-warning ms-4">
                                  <i class="bi bi-gender-ambiguous me-2 fs-3 clrwht"></i> Unisex </span>
                                <!--end::Info-->
                              </label>
                              <!--end::Option-->
                            </div>
                            <!--end::Col-->
                          </div>
                        </div>
                        <div class="card-header">
                          <!--begin::Card title-->
                          <div class="card-title">
                            <h2 class="required fs-3">Discount</h2>
                          </div>
                          <!--end::Card title-->
                        </div>
                        <div class="card-body pt-2 pb-4">
                          <div class="input-group input-group-solid mb-5">
                            <span class="input-group-text">%</span>
                            <input type="number" class="form-control" placeholder="Discount" value="10" />
                          </div>
                        </div>
                      </div>
                      <div class="card card-flush py-4">
                        <div class="card-header">
                          <div class="card-title">
                            <div class="d-flex flex-column gap-3 mb-2">
                              <h2>Number of sessions and validity</h2>
                            </div>
                          </div>
                        </div>
                        <div class="card-body pt-0 pb-4">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="d-flex flex-column gap-1">
                                <label class="required fw-semibold fs-6">Number of sessions</label>
                                <input type="text" name="" class="form-control mb-3 mb-lg-0" placeholder="no. of sessions" value="10" />
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="d-flex flex-column gap-1">
                                <label class="required fw-semibold fs-6">Validity</label>
                                <!--begin::Input-->
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" data-allow-clear="true">
                                  <option></option>
                                  <option value="1">14 days</option>
                                  <option value="2" selected>1 month</option>
                                  <option value="3">2 months</option>
                                  <option value="4">3 months</option>
                                  <option value="5">4 months</option>
                                  <option value="6">6 months</option>
                                  <option value="7">1 year</option>
                                  <option value="8">3 years</option>
                                  <option value="9">5 years</option>
                                  <option value="10">Never</option>
                                </select>
                                <!--end::Input-->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="#" class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                          <span class="indicator-label">Save Changes</span>
                          <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                          </span>
                        </button>
                        <!--end::Button-->
                      </div>
                    </div>
                  </form>
                </div>
                <!--end::Card-->
              </div>
            </div>
@endsection