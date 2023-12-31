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
                      <a href="services-recommendations.html">
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
                <li class="nav-item">
                  <a class="nav-link text-active-primary pb-4 active" href="{{url('admin/services/offers-management')}}">Recommended package</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                  <a class="nav-link text-active-primary pb-4 " href="{{url('admin/services/offers-management/voucher')}}">Voucher</a>
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
              <h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Manage Package</h2>
            </div>
            <!--begin::Card header-->
            <div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-0">
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
              <!--begin::Card toolbar-->
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
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
              <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_datatable_example1">
                <!--begin::Table head-->
                <thead>
                  <!--begin::Table row-->
                  <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th class="min-w-50px">S No.</th>
                    <th class="min-w-100px">Created</th>
                    <th class="min-w-100px">Name</th>
                    <th class="min-w-100px">Gender</th>
                    <th class="min-w-50px">Discount</th>
                    <th class="min-w-100px">Status</th>
                    <th class="text-end min-w-100px">Action</th>
                  </tr>
                  <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-bold text-gray-600">
                  <tr>
                    <td>1</td>
                    <td>10 Nov 2021, 10:30 am</td>
                    <td>Hair cut, shampoo, blow dye</td>
                    <td>Male</td>
                    <td>20%</td>
                    <td>
                      <div class="badge badge-light-success fw-bold">Enabled</div>
                    </td>
                    <td class="text-end">
                      <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions <i class="ki-duotone ki-down fs-5 ms-1"></i>
                      </a>
                      <!--begin::Menu-->
                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
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
                    <td>2</td>
                    <td>10 Nov 2020, 10:30 am</td>
                    <td>Facial, D tan</td>
                    <td>Female</td>
                    <td>30%</td>
                    <td>
                      <div class="badge badge-light-success fw-bold">Enabled</div>
                    </td>
                    <td class="text-end">
                      <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions <i class="ki-duotone ki-down fs-5 ms-1"></i>
                      </a>
                      <!--begin::Menu-->
                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
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
                    <td>3</td>
                    <td>10 Mar 2021, 10:30 am</td>
                    <td>Manicure, Pedicure, Makeup</td>
                    <td>Female</td>
                    <td>10%</td>
                    <td>
                      <div class="badge badge-light-success fw-bold">Enabled</div>
                    </td>
                    <td class="text-end">
                      <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions <i class="ki-duotone ki-down fs-5 ms-1"></i>
                      </a>
                      <!--begin::Menu-->
                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
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
                    <td>4</td>
                    <td>10 Nov 2020, 10:30 am</td>
                    <td>Straightening, Rebonding</td>
                    <td>Unisex</td>
                    <td>15%</td>
                    <td>
                      <div class="badge badge-light-success fw-bold">Enabled</div>
                    </td>
                    <td class="text-end">
                      <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions <i class="ki-duotone ki-down fs-5 ms-1"></i>
                      </a>
                      <!--begin::Menu-->
                      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
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
      </div>
      <!--end::Content container-->
    </div>
    <!--end::Content-->
  </div>
  <!--end::Content wrapper-->
</div><!--end:::Main-->

@endsection