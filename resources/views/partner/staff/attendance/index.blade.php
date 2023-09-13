@extends('partner.layouts.auth.app')
@section('content') 

<!--Begin:::Main-->
<meta name="csrf-token" content="{{ csrf_token() }}">
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
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Attendance</h1>
               <!--end::Title-->
               <!--begin::Breadcrumb-->
               <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     <a href="{{ url('partner/dashbaord') }}" class="text-muted text-hover-primary">Home</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">Attendance</li>
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
            <div class="d-flex flex-column flex-row-fluid gap-7">
               <div class="card card-flush">
                  <!--begin::Card header-->
                  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
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
                     <div class="d-flex gap-3 align-items-center">
                        <a class="prevBtn cursor-pointer">
                        <i class="bi bi-chevron-left fs-6"></i>
                        </a>
                        <span class="text-gray-800 fs-4 fw-semibold dateRangeDisplay">10 September - 16 September</span>
                        <a class="nextBtn cursor-pointer">
                        <i class="bi bi-chevron-right fs-6"></i>
                        </a>
                     </div>
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-0">
                     <!--begin::Table-->
                     <div id="kt_datatable_example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="table-responsive">
                           <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_datatable_example2">
                              <!--begin::Table head-->
                              <thead>
                                 <!--begin::Table row-->
                                 <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-50px sorting" tabindex="0" aria-controls="kt_datatable_example2" rowspan="1" colspan="1" aria-label="S No.: activate to sort column ascending" style="width: 100.125px;">S No.</th>
                                    <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_datatable_example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 210.031px;">Name</th>
                                    <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_datatable_example2" rowspan="1" colspan="1" aria-label="Contact No.: activate to sort column ascending" style="width: 210.031px;">Contact No.</th>
                                    <th class="min-w-50px sorting" tabindex="0" aria-controls="kt_datatable_example2" rowspan="1" colspan="1" aria-label="Check-In-Time: activate to sort column ascending" style="width: 230.562px;">Check-In-Time</th>
                                    <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_datatable_example2" rowspan="1" colspan="1" aria-label="Check-Out-Time: activate to sort column ascending" style="width: 231.75px;">Check-Out-Time</th>
                                 </tr>
                                 <!--end::Table row-->
                              </thead>
                              <!--end::Table head-->
                              <tbody class="fw-bold text-gray-600">
                                 @if($getStaff)
                                 @foreach($getStaff as $skey => $staff)
                                 <tr class="odd">
                                    <td>{{ $skey+1 }}</td>
                                    <td>{{ $staff->name }}</td>
                                    <td>{{ $staff->phone }}</td>
                                    <td data-order="Invalid date">
                                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_attendance_admin_check" staff-id="{{ $staff->user_id }}">
                                       Check in
                                       </button>
                                    </td>
                                    <td>
                                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_attendance_admin_check" staff-id="{{ $staff->user_id }}">
                                       Check out
                                       </button>
                                    </td>
                                 </tr>
                                 @endforeach
                                 @endif
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <!--end::Table-->
                  </div>
                  <!--end::Card body-->
               </div>
               <div class="card card-flush mt-5">
                  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                     <!--begin::Card title-->
                     <div class="card-title">
                        <h2>Attendance Analytics</h2>
                     </div>
                     <!--end::Card title-->
                     <!--begin::Toolbar-->
                     <div class="card-toolbar">
                        <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                           <!--begin::Display range-->
                           <div class="text-gray-600 fw-bold">15 Aug 2023 - 13 Sep 2023</div>
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
                  <div class="card-body pt-0">
                     <div class="row">
                        <div class="col-md-6">
                           <!--begin::Header-->
                           <div class="d-flex justify-content-between">
                              <!--begin::Title-->
                              <h3 class="d-flex align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800">Total Working Hour</span>
                                 <span class="text-gray-400 mt-1 fw-semibold fs-6">Hours per course</span>
                              </h3>
                              <!--end::Title-->
                           </div>
                           <div class="mt-10">
                              <!--begin::Chart-->
                              <div id="kt_charts_widget_chart_attendance" class="h-325px w-100 min-h-auto" style="min-height: 340px;">
                                 <div id="apexcharts12clmr1j" class="apexcharts-canvas apexcharts12clmr1j apexcharts-theme-light" style="width: 501px; height: 325px;">
                                    <svg id="SvgjsSvg1211" width="501" height="325" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                       <g id="SvgjsG1213" class="apexcharts-inner apexcharts-graphical" transform="translate(58.65625, 30)">
                                          <defs id="SvgjsDefs1212">
                                             <linearGradient id="SvgjsLinearGradient1217" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1218" stop-opacity="0" stop-color="rgba(216,227,240,0)" offset="0"></stop>
                                                <stop id="SvgjsStop1219" stop-opacity="0" stop-color="rgba(190,209,230,0)" offset="1"></stop>
                                                <stop id="SvgjsStop1220" stop-opacity="0" stop-color="rgba(190,209,230,0)" offset="1"></stop>
                                             </linearGradient>
                                             <clipPath id="gridRectMask12clmr1j">
                                                <rect id="SvgjsRect1222" width="438.34375" height="256.11199999999997" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                             </clipPath>
                                             <clipPath id="forecastMask12clmr1j"></clipPath>
                                             <clipPath id="nonForecastMask12clmr1j"></clipPath>
                                             <clipPath id="gridRectMarkerMask12clmr1j">
                                                <rect id="SvgjsRect1223" width="436.34375" height="258.11199999999997" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                             </clipPath>
                                          </defs>
                                          <rect id="SvgjsRect1221" width="17.29375" height="254.11199999999997" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1217)" class="apexcharts-xcrosshairs" y2="254.11199999999997" filter="none" fill-opacity="0.9"></rect>
                                          <g id="SvgjsG1270" class="apexcharts-xaxis" transform="translate(0, 0)">
                                             <g id="SvgjsG1271" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                                <text id="SvgjsText1273" font-family="inherit" x="30.881696428571427" y="283.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                                   <tspan id="SvgjsTspan1274">Harry</tspan>
                                                   <title>Harry</title>
                                                </text>
                                                <text id="SvgjsText1276" font-family="inherit" x="92.64508928571428" y="283.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                                   <tspan id="SvgjsTspan1277">Lisa</tspan>
                                                   <title>Lisa</title>
                                                </text>
                                                <text id="SvgjsText1279" font-family="inherit" x="154.40848214285714" y="283.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                                   <tspan id="SvgjsTspan1280">Tom</tspan>
                                                   <title>Tom</title>
                                                </text>
                                                <text id="SvgjsText1282" font-family="inherit" x="216.171875" y="283.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                                   <tspan id="SvgjsTspan1283">Sam</tspan>
                                                   <title>Sam</title>
                                                </text>
                                                <text id="SvgjsText1285" font-family="inherit" x="277.93526785714283" y="283.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                                   <tspan id="SvgjsTspan1286">Dazy</tspan>
                                                   <title>Dazy</title>
                                                </text>
                                                <text id="SvgjsText1288" font-family="inherit" x="339.69866071428567" y="283.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                                   <tspan id="SvgjsTspan1289">Simon</tspan>
                                                   <title>Simon</title>
                                                </text>
                                                <text id="SvgjsText1291" font-family="inherit" x="401.4620535714285" y="283.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;">
                                                   <tspan id="SvgjsTspan1292">Ron</tspan>
                                                   <title>Ron</title>
                                                </text>
                                             </g>
                                          </g>
                                          <g id="SvgjsG1310" class="apexcharts-grid">
                                             <g id="SvgjsG1311" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1313" x1="0" y1="0" x2="432.34375" y2="0" stroke="#e1e3ea" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1314" x1="0" y1="63.52799999999999" x2="432.34375" y2="63.52799999999999" stroke="#e1e3ea" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1315" x1="0" y1="127.05599999999998" x2="432.34375" y2="127.05599999999998" stroke="#e1e3ea" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1316" x1="0" y1="190.58399999999997" x2="432.34375" y2="190.58399999999997" stroke="#e1e3ea" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1317" x1="0" y1="254.11199999999997" x2="432.34375" y2="254.11199999999997" stroke="#e1e3ea" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                             </g>
                                             <g id="SvgjsG1312" class="apexcharts-gridlines-vertical"></g>
                                             <line id="SvgjsLine1319" x1="0" y1="254.11199999999997" x2="432.34375" y2="254.11199999999997" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                             <line id="SvgjsLine1318" x1="0" y1="1" x2="0" y2="254.11199999999997" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                          </g>
                                          <g id="SvgjsG1224" class="apexcharts-bar-series apexcharts-plot-series">
                                             <g id="SvgjsG1225" class="apexcharts-series" rel="1" seriesName="Spentxtime" data:realIndex="0">
                                                <path id="SvgjsPath1229" d="M 22.23482142857143 254.11199999999997L 22.23482142857143 144.7616Q 22.23482142857143 139.7616 27.23482142857143 139.7616L 32.528571428571425 139.7616Q 37.528571428571425 139.7616 37.528571428571425 144.7616L 37.528571428571425 144.7616L 37.528571428571425 254.11199999999997L 37.528571428571425 254.11199999999997z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask12clmr1j)" pathTo="M 22.23482142857143 254.11199999999997L 22.23482142857143 144.7616Q 22.23482142857143 139.7616 27.23482142857143 139.7616L 32.528571428571425 139.7616Q 37.528571428571425 139.7616 37.528571428571425 144.7616L 37.528571428571425 144.7616L 37.528571428571425 254.11199999999997L 37.528571428571425 254.11199999999997z" pathFrom="M 22.23482142857143 254.11199999999997L 22.23482142857143 254.11199999999997L 37.528571428571425 254.11199999999997L 37.528571428571425 254.11199999999997L 37.528571428571425 254.11199999999997L 37.528571428571425 254.11199999999997L 37.528571428571425 254.11199999999997L 22.23482142857143 254.11199999999997" cy="139.7616" cx="82.99821428571428" j="0" val="54" barHeight="114.35039999999998" barWidth="17.29375"></path>
                                                <path id="SvgjsPath1235" d="M 83.99821428571428 254.11199999999997L 83.99821428571428 170.1728Q 83.99821428571428 165.1728 88.99821428571428 165.1728L 94.29196428571429 165.1728Q 99.29196428571429 165.1728 99.29196428571429 170.1728L 99.29196428571429 170.1728L 99.29196428571429 254.11199999999997L 99.29196428571429 254.11199999999997z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask12clmr1j)" pathTo="M 83.99821428571428 254.11199999999997L 83.99821428571428 170.1728Q 83.99821428571428 165.1728 88.99821428571428 165.1728L 94.29196428571429 165.1728Q 99.29196428571429 165.1728 99.29196428571429 170.1728L 99.29196428571429 170.1728L 99.29196428571429 254.11199999999997L 99.29196428571429 254.11199999999997z" pathFrom="M 83.99821428571428 254.11199999999997L 83.99821428571428 254.11199999999997L 99.29196428571429 254.11199999999997L 99.29196428571429 254.11199999999997L 99.29196428571429 254.11199999999997L 99.29196428571429 254.11199999999997L 99.29196428571429 254.11199999999997L 83.99821428571428 254.11199999999997" cy="165.1728" cx="144.76160714285714" j="1" val="42" barHeight="88.93919999999999" barWidth="17.29375"></path>
                                                <path id="SvgjsPath1241" d="M 145.76160714285714 254.11199999999997L 145.76160714285714 100.29199999999997Q 145.76160714285714 95.29199999999997 150.76160714285714 95.29199999999997L 156.05535714285713 95.29199999999997Q 161.05535714285713 95.29199999999997 161.05535714285713 100.29199999999997L 161.05535714285713 100.29199999999997L 161.05535714285713 254.11199999999997L 161.05535714285713 254.11199999999997z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask12clmr1j)" pathTo="M 145.76160714285714 254.11199999999997L 145.76160714285714 100.29199999999997Q 145.76160714285714 95.29199999999997 150.76160714285714 95.29199999999997L 156.05535714285713 95.29199999999997Q 161.05535714285713 95.29199999999997 161.05535714285713 100.29199999999997L 161.05535714285713 100.29199999999997L 161.05535714285713 254.11199999999997L 161.05535714285713 254.11199999999997z" pathFrom="M 145.76160714285714 254.11199999999997L 145.76160714285714 254.11199999999997L 161.05535714285713 254.11199999999997L 161.05535714285713 254.11199999999997L 161.05535714285713 254.11199999999997L 161.05535714285713 254.11199999999997L 161.05535714285713 254.11199999999997L 145.76160714285714 254.11199999999997" cy="95.29199999999997" cx="206.525" j="2" val="75" barHeight="158.82" barWidth="17.29375"></path>
                                                <path id="SvgjsPath1247" d="M 207.525 254.11199999999997L 207.525 26.175999999999988Q 207.525 21.175999999999988 212.525 21.175999999999988L 217.81875 21.175999999999988Q 222.81875 21.175999999999988 222.81875 26.175999999999988L 222.81875 26.175999999999988L 222.81875 254.11199999999997L 222.81875 254.11199999999997z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask12clmr1j)" pathTo="M 207.525 254.11199999999997L 207.525 26.175999999999988Q 207.525 21.175999999999988 212.525 21.175999999999988L 217.81875 21.175999999999988Q 222.81875 21.175999999999988 222.81875 26.175999999999988L 222.81875 26.175999999999988L 222.81875 254.11199999999997L 222.81875 254.11199999999997z" pathFrom="M 207.525 254.11199999999997L 207.525 254.11199999999997L 222.81875 254.11199999999997L 222.81875 254.11199999999997L 222.81875 254.11199999999997L 222.81875 254.11199999999997L 222.81875 254.11199999999997L 207.525 254.11199999999997" cy="21.175999999999988" cx="268.28839285714287" j="3" val="110" barHeight="232.93599999999998" barWidth="17.29375"></path>
                                                <path id="SvgjsPath1253" d="M 269.28839285714287 254.11199999999997L 269.28839285714287 210.4072Q 269.28839285714287 205.4072 274.28839285714287 205.4072L 279.58214285714286 205.4072Q 284.58214285714286 205.4072 284.58214285714286 210.4072L 284.58214285714286 210.4072L 284.58214285714286 254.11199999999997L 284.58214285714286 254.11199999999997z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask12clmr1j)" pathTo="M 269.28839285714287 254.11199999999997L 269.28839285714287 210.4072Q 269.28839285714287 205.4072 274.28839285714287 205.4072L 279.58214285714286 205.4072Q 284.58214285714286 205.4072 284.58214285714286 210.4072L 284.58214285714286 210.4072L 284.58214285714286 254.11199999999997L 284.58214285714286 254.11199999999997z" pathFrom="M 269.28839285714287 254.11199999999997L 269.28839285714287 254.11199999999997L 284.58214285714286 254.11199999999997L 284.58214285714286 254.11199999999997L 284.58214285714286 254.11199999999997L 284.58214285714286 254.11199999999997L 284.58214285714286 254.11199999999997L 269.28839285714287 254.11199999999997" cy="205.4072" cx="330.0517857142857" j="4" val="23" barHeight="48.70479999999999" barWidth="17.29375"></path>
                                                <path id="SvgjsPath1259" d="M 331.0517857142857 254.11199999999997L 331.0517857142857 74.8808Q 331.0517857142857 69.8808 336.0517857142857 69.8808L 341.3455357142857 69.8808Q 346.3455357142857 69.8808 346.3455357142857 74.8808L 346.3455357142857 74.8808L 346.3455357142857 254.11199999999997L 346.3455357142857 254.11199999999997z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask12clmr1j)" pathTo="M 331.0517857142857 254.11199999999997L 331.0517857142857 74.8808Q 331.0517857142857 69.8808 336.0517857142857 69.8808L 341.3455357142857 69.8808Q 346.3455357142857 69.8808 346.3455357142857 74.8808L 346.3455357142857 74.8808L 346.3455357142857 254.11199999999997L 346.3455357142857 254.11199999999997z" pathFrom="M 331.0517857142857 254.11199999999997L 331.0517857142857 254.11199999999997L 346.3455357142857 254.11199999999997L 346.3455357142857 254.11199999999997L 346.3455357142857 254.11199999999997L 346.3455357142857 254.11199999999997L 346.3455357142857 254.11199999999997L 331.0517857142857 254.11199999999997" cy="69.8808" cx="391.81517857142853" j="5" val="87" barHeight="184.23119999999997" barWidth="17.29375"></path>
                                                <path id="SvgjsPath1265" d="M 392.81517857142853 254.11199999999997L 392.81517857142853 153.23199999999997Q 392.81517857142853 148.23199999999997 397.81517857142853 148.23199999999997L 403.1089285714285 148.23199999999997Q 408.1089285714285 148.23199999999997 408.1089285714285 153.23199999999997L 408.1089285714285 153.23199999999997L 408.1089285714285 254.11199999999997L 408.1089285714285 254.11199999999997z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask12clmr1j)" pathTo="M 392.81517857142853 254.11199999999997L 392.81517857142853 153.23199999999997Q 392.81517857142853 148.23199999999997 397.81517857142853 148.23199999999997L 403.1089285714285 148.23199999999997Q 408.1089285714285 148.23199999999997 408.1089285714285 153.23199999999997L 408.1089285714285 153.23199999999997L 408.1089285714285 254.11199999999997L 408.1089285714285 254.11199999999997z" pathFrom="M 392.81517857142853 254.11199999999997L 392.81517857142853 254.11199999999997L 408.1089285714285 254.11199999999997L 408.1089285714285 254.11199999999997L 408.1089285714285 254.11199999999997L 408.1089285714285 254.11199999999997L 408.1089285714285 254.11199999999997L 392.81517857142853 254.11199999999997" cy="148.23199999999997" cx="453.57857142857137" j="6" val="50" barHeight="105.87999999999998" barWidth="17.29375"></path>
                                                <g id="SvgjsG1227" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                                   <g id="SvgjsG1228" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1234" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1240" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1246" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1252" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1258" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1264" className="apexcharts-bar-goals-groups"></g>
                                                </g>
                                             </g>
                                             <g id="SvgjsG1226" class="apexcharts-datalabels" data:realIndex="0">
                                                <g id="SvgjsG1231" class="apexcharts-data-labels" transform="rotate(0)">
                                                   <text id="SvgjsText1233" font-family="inherit" x="29.88169642857143" y="127.76159999999999" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="600" fill="#181c32" class="apexcharts-datalabel" cx="29.88169642857143" cy="127.76159999999999" style="font-family: inherit;">54</text>
                                                </g>
                                                <g id="SvgjsG1237" class="apexcharts-data-labels" transform="rotate(0)">
                                                   <text id="SvgjsText1239" font-family="inherit" x="91.64508928571428" y="153.1728" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="600" fill="#181c32" class="apexcharts-datalabel" cx="91.64508928571428" cy="153.1728" style="font-family: inherit;">42</text>
                                                </g>
                                                <g id="SvgjsG1243" class="apexcharts-data-labels" transform="rotate(0)">
                                                   <text id="SvgjsText1245" font-family="inherit" x="153.40848214285714" y="83.29199999999997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="600" fill="#181c32" class="apexcharts-datalabel" cx="153.40848214285714" cy="83.29199999999997" style="font-family: inherit;">75</text>
                                                </g>
                                                <g id="SvgjsG1249" class="apexcharts-data-labels" transform="rotate(0)">
                                                   <text id="SvgjsText1251" font-family="inherit" x="215.171875" y="9.175999999999988" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="600" fill="#181c32" class="apexcharts-datalabel" cx="215.171875" cy="9.175999999999988" style="font-family: inherit;">110</text>
                                                </g>
                                                <g id="SvgjsG1255" class="apexcharts-data-labels" transform="rotate(0)">
                                                   <text id="SvgjsText1257" font-family="inherit" x="276.9352678571429" y="193.4072" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="600" fill="#181c32" class="apexcharts-datalabel" cx="276.9352678571429" cy="193.4072" style="font-family: inherit;">23</text>
                                                </g>
                                                <g id="SvgjsG1261" class="apexcharts-data-labels" transform="rotate(0)">
                                                   <text id="SvgjsText1263" font-family="inherit" x="338.6986607142857" y="57.880799999999994" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="600" fill="#181c32" class="apexcharts-datalabel" cx="338.6986607142857" cy="57.880799999999994" style="font-family: inherit;">87</text>
                                                </g>
                                                <g id="SvgjsG1267" class="apexcharts-data-labels" transform="rotate(0)">
                                                   <text id="SvgjsText1269" font-family="inherit" x="400.46205357142856" y="136.23199999999997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="600" fill="#181c32" class="apexcharts-datalabel" cx="400.46205357142856" cy="136.23199999999997" style="font-family: inherit;">50</text>
                                                </g>
                                             </g>
                                          </g>
                                          <line id="SvgjsLine1320" x1="0" y1="0" x2="432.34375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                          <line id="SvgjsLine1321" x1="0" y1="0" x2="432.34375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                          <g id="SvgjsG1322" class="apexcharts-yaxis-annotations"></g>
                                          <g id="SvgjsG1323" class="apexcharts-xaxis-annotations"></g>
                                          <g id="SvgjsG1324" class="apexcharts-point-annotations"></g>
                                       </g>
                                       <g id="SvgjsG1293" class="apexcharts-yaxis" rel="0" transform="translate(28.65625, 0)">
                                          <g id="SvgjsG1294" class="apexcharts-yaxis-texts-g">
                                             <text id="SvgjsText1296" font-family="inherit" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1297">120H</tspan>
                                                <title>120H</title>
                                             </text>
                                             <text id="SvgjsText1299" font-family="inherit" x="20" y="94.928" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1300">90H</tspan>
                                                <title>90H</title>
                                             </text>
                                             <text id="SvgjsText1302" font-family="inherit" x="20" y="158.456" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1303">60H</tspan>
                                                <title>60H</title>
                                             </text>
                                             <text id="SvgjsText1305" font-family="inherit" x="20" y="221.98399999999998" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1306">30H</tspan>
                                                <title>30H</title>
                                             </text>
                                             <text id="SvgjsText1308" font-family="inherit" x="20" y="285.51199999999994" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1309">0H</tspan>
                                                <title>0H</title>
                                             </text>
                                          </g>
                                       </g>
                                       <g id="SvgjsG1214" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 162.5px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                       <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div>
                                       <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                          <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span>
                                          <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                             <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                             <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                             <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                       <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                 </div>
                              </div>
                              <!--end::Chart-->
                           </div>
                        </div>
                        <div class="col-md-6">
                           <!--begin::Header-->
                           <div class="d-flex justify-content-between">
                              <!--begin::Title-->
                              <h3 class="d-flex align-items-start flex-column">
                                 <span class="card-label fw-bold text-gray-800">Average Working Hour</span>
                                 <span class="text-gray-400 mt-1 fw-semibold fs-6">8k social visitors</span>
                              </h3>
                              <!--end::Title-->
                           </div>
                           <div class="mt-10">
                              <div id="kt_charts_widget_avg_working_hour" class="min-h-auto" style="min-height: 365px;">
                                 <div id="apexchartsgxfacvt7" class="apexcharts-canvas apexchartsgxfacvt7 apexcharts-theme-light" style="width: 501px; height: 350px;">
                                    <svg id="SvgjsSvg1325" width="501" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                       <g id="SvgjsG1327" class="apexcharts-inner apexcharts-graphical" transform="translate(67.96875, 30)">
                                          <defs id="SvgjsDefs1326">
                                             <linearGradient id="SvgjsLinearGradient1331" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1332" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop1333" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1334" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                             </linearGradient>
                                             <clipPath id="gridRectMaskgxfacvt7">
                                                <rect id="SvgjsRect1336" width="413.41477966308594" height="277.494" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                             </clipPath>
                                             <clipPath id="forecastMaskgxfacvt7"></clipPath>
                                             <clipPath id="nonForecastMaskgxfacvt7"></clipPath>
                                             <clipPath id="gridRectMarkerMaskgxfacvt7">
                                                <rect id="SvgjsRect1337" width="413.41477966308594" height="281.494" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                             </clipPath>
                                          </defs>
                                          <rect id="SvgjsRect1335" width="0" height="277.494" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1331)" class="apexcharts-xcrosshairs" y2="277.494" filter="none" fill-opacity="0.9"></rect>
                                          <g id="SvgjsG1373" class="apexcharts-yaxis apexcharts-xaxis-inversed" rel="0">
                                             <g id="SvgjsG1374" class="apexcharts-yaxis-texts-g apexcharts-xaxis-inversed-texts-g" transform="translate(-43.28900146484375, 0)">
                                                <text id="SvgjsText1376" font-family="Helvetica, Arial, sans-serif" x="-15" y="23.622909090909094" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#3f4254" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1377">Harry</tspan>
                                                   <title>Harry</title>
                                                </text>
                                                <text id="SvgjsText1379" font-family="Helvetica, Arial, sans-serif" x="-15" y="63.2649090909091" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#3f4254" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1380">Lisa</tspan>
                                                   <title>Lisa</title>
                                                </text>
                                                <text id="SvgjsText1382" font-family="Helvetica, Arial, sans-serif" x="-15" y="102.9069090909091" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#3f4254" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1383">Tom</tspan>
                                                   <title>Tom</title>
                                                </text>
                                                <text id="SvgjsText1385" font-family="Helvetica, Arial, sans-serif" x="-15" y="142.5489090909091" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#3f4254" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1386">Sam</tspan>
                                                   <title>Sam</title>
                                                </text>
                                                <text id="SvgjsText1388" font-family="Helvetica, Arial, sans-serif" x="-15" y="182.1909090909091" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#3f4254" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1389">Dazy</tspan>
                                                   <title>Dazy</title>
                                                </text>
                                                <text id="SvgjsText1391" font-family="Helvetica, Arial, sans-serif" x="-15" y="221.83290909090908" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#3f4254" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1392">Simon</tspan>
                                                   <title>Simon</title>
                                                </text>
                                                <text id="SvgjsText1394" font-family="Helvetica, Arial, sans-serif" x="-15" y="261.4749090909091" text-anchor="start" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#3f4254" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1395">Ron</tspan>
                                                   <title>Ron</title>
                                                </text>
                                             </g>
                                          </g>
                                          <g id="SvgjsG1356" class="apexcharts-xaxis apexcharts-yaxis-inversed">
                                             <g id="SvgjsG1357" class="apexcharts-xaxis-texts-g" transform="translate(0, -9.333333333333334)">
                                                <text id="SvgjsText1358" font-family="Helvetica, Arial, sans-serif" x="409.41477966308594" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#b5b5c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1360">16K</tspan>
                                                   <title>16K</title>
                                                </text>
                                                <text id="SvgjsText1361" font-family="Helvetica, Arial, sans-serif" x="306.96108474731443" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#b5b5c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1363">12K</tspan>
                                                   <title>12K</title>
                                                </text>
                                                <text id="SvgjsText1364" font-family="Helvetica, Arial, sans-serif" x="204.507389831543" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#b5b5c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1366">8K</tspan>
                                                   <title>8K</title>
                                                </text>
                                                <text id="SvgjsText1367" font-family="Helvetica, Arial, sans-serif" x="102.05369491577153" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#b5b5c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1369">4K</tspan>
                                                   <title>4K</title>
                                                </text>
                                                <text id="SvgjsText1370" font-family="Helvetica, Arial, sans-serif" x="-0.39999999999997726" y="307.494" text-anchor="middle" dominant-baseline="auto" font-size="14px" font-weight="600" fill="#b5b5c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1372">0K</tspan>
                                                   <title>0K</title>
                                                </text>
                                             </g>
                                          </g>
                                          <g id="SvgjsG1396" class="apexcharts-grid">
                                             <g id="SvgjsG1397" class="apexcharts-gridlines-horizontal"></g>
                                             <g id="SvgjsG1398" class="apexcharts-gridlines-vertical">
                                                <line id="SvgjsLine1399" x1="0" y1="0" x2="0" y2="277.494" stroke="#e1e3ea" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1401" x1="102.65369491577148" y1="0" x2="102.65369491577148" y2="277.494" stroke="#e1e3ea" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1403" x1="205.307389831543" y1="0" x2="205.307389831543" y2="277.494" stroke="#e1e3ea" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1405" x1="307.9610847473145" y1="0" x2="307.9610847473145" y2="277.494" stroke="#e1e3ea" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1407" x1="410.614779663086" y1="0" x2="410.614779663086" y2="277.494" stroke="#e1e3ea" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                             </g>
                                             <line id="SvgjsLine1400" x1="0" y1="278.494" x2="0" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                             <line id="SvgjsLine1402" x1="102.65369491577148" y1="278.494" x2="102.65369491577148" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                             <line id="SvgjsLine1404" x1="205.307389831543" y1="278.494" x2="205.307389831543" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                             <line id="SvgjsLine1406" x1="307.9610847473145" y1="278.494" x2="307.9610847473145" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                             <line id="SvgjsLine1408" x1="410.614779663086" y1="278.494" x2="410.614779663086" y2="284.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                             <line id="SvgjsLine1410" x1="0" y1="277.494" x2="409.41477966308594" y2="277.494" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                             <line id="SvgjsLine1409" x1="0" y1="1" x2="0" y2="277.494" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                          </g>
                                          <g id="SvgjsG1338" class="apexcharts-bar-series apexcharts-plot-series">
                                             <g id="SvgjsG1339" class="apexcharts-series" rel="1" seriesName="series-1" data:realIndex="0">
                                                <path id="SvgjsPath1343" d="M 0.1 9.9105L 379.92635593414303 9.9105Q 383.92635593414303 9.9105 383.92635593414303 13.9105L 383.92635593414303 25.731500000000004Q 383.92635593414303 29.731500000000004 379.92635593414303 29.731500000000004L 379.92635593414303 29.731500000000004L 0.1 29.731500000000004L 0.1 29.731500000000004z" fill="rgba(62,151,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgxfacvt7)" pathTo="M 0.1 9.9105L 379.92635593414303 9.9105Q 383.92635593414303 9.9105 383.92635593414303 13.9105L 383.92635593414303 25.731500000000004Q 383.92635593414303 29.731500000000004 379.92635593414303 29.731500000000004L 379.92635593414303 29.731500000000004L 0.1 29.731500000000004L 0.1 29.731500000000004z" pathFrom="M 0.1 9.9105L 0.1 9.9105L 0.1 29.731500000000004L 0.1 29.731500000000004L 0.1 29.731500000000004L 0.1 29.731500000000004L 0.1 29.731500000000004L 0.1 9.9105" cy="49.5525" cx="383.92635593414303" j="0" val="15" barHeight="19.821" barWidth="383.826355934143"></path>
                                                <path id="SvgjsPath1345" d="M 0.1 49.5525L 303.1610847473145 49.5525Q 307.1610847473145 49.5525 307.1610847473145 53.5525L 307.1610847473145 65.3735Q 307.1610847473145 69.3735 303.1610847473145 69.3735L 303.1610847473145 69.3735L 0.1 69.3735L 0.1 69.3735z" fill="rgba(241,65,108,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgxfacvt7)" pathTo="M 0.1 49.5525L 303.1610847473145 49.5525Q 307.1610847473145 49.5525 307.1610847473145 53.5525L 307.1610847473145 65.3735Q 307.1610847473145 69.3735 303.1610847473145 69.3735L 303.1610847473145 69.3735L 0.1 69.3735L 0.1 69.3735z" pathFrom="M 0.1 49.5525L 0.1 49.5525L 0.1 69.3735L 0.1 69.3735L 0.1 69.3735L 0.1 69.3735L 0.1 69.3735L 0.1 49.5525" cy="89.1945" cx="307.1610847473145" j="1" val="12" barHeight="19.821" barWidth="307.06108474731445"></path>
                                                <path id="SvgjsPath1347" d="M 0.1 89.1945L 251.98423728942868 89.1945Q 255.98423728942868 89.1945 255.98423728942868 93.1945L 255.98423728942868 105.0155Q 255.98423728942868 109.0155 251.98423728942868 109.0155L 251.98423728942868 109.0155L 0.1 109.0155L 0.1 109.0155z" fill="rgba(80,205,137,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgxfacvt7)" pathTo="M 0.1 89.1945L 251.98423728942868 89.1945Q 255.98423728942868 89.1945 255.98423728942868 93.1945L 255.98423728942868 105.0155Q 255.98423728942868 109.0155 251.98423728942868 109.0155L 251.98423728942868 109.0155L 0.1 109.0155L 0.1 109.0155z" pathFrom="M 0.1 89.1945L 0.1 89.1945L 0.1 109.0155L 0.1 109.0155L 0.1 109.0155L 0.1 109.0155L 0.1 109.0155L 0.1 89.1945" cy="128.8365" cx="255.98423728942868" j="2" val="10" barHeight="19.821" barWidth="255.88423728942868"></path>
                                                <path id="SvgjsPath1349" d="M 0.1 128.8365L 200.80738983154293 128.8365Q 204.80738983154293 128.8365 204.80738983154293 132.8365L 204.80738983154293 144.6575Q 204.80738983154293 148.6575 200.80738983154293 148.6575L 200.80738983154293 148.6575L 0.1 148.6575L 0.1 148.6575z" fill="rgba(255,199,0,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgxfacvt7)" pathTo="M 0.1 128.8365L 200.80738983154293 128.8365Q 204.80738983154293 128.8365 204.80738983154293 132.8365L 204.80738983154293 144.6575Q 204.80738983154293 148.6575 200.80738983154293 148.6575L 200.80738983154293 148.6575L 0.1 148.6575L 0.1 148.6575z" pathFrom="M 0.1 128.8365L 0.1 128.8365L 0.1 148.6575L 0.1 148.6575L 0.1 148.6575L 0.1 148.6575L 0.1 148.6575L 0.1 128.8365" cy="168.4785" cx="204.80738983154293" j="3" val="8" barHeight="19.821" barWidth="204.70738983154294"></path>
                                                <path id="SvgjsPath1351" d="M 0.1 168.4785L 175.21896610260006 168.4785Q 179.21896610260006 168.4785 179.21896610260006 172.4785L 179.21896610260006 184.2995Q 179.21896610260006 188.2995 175.21896610260006 188.2995L 175.21896610260006 188.2995L 0.1 188.2995L 0.1 188.2995z" fill="rgba(114,57,234,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgxfacvt7)" pathTo="M 0.1 168.4785L 175.21896610260006 168.4785Q 179.21896610260006 168.4785 179.21896610260006 172.4785L 179.21896610260006 184.2995Q 179.21896610260006 188.2995 175.21896610260006 188.2995L 175.21896610260006 188.2995L 0.1 188.2995L 0.1 188.2995z" pathFrom="M 0.1 168.4785L 0.1 168.4785L 0.1 188.2995L 0.1 188.2995L 0.1 188.2995L 0.1 188.2995L 0.1 188.2995L 0.1 168.4785" cy="208.1205" cx="179.21896610260006" j="4" val="7" barHeight="19.821" barWidth="179.11896610260007"></path>
                                                <path id="SvgjsPath1353" d="M 0.1 208.1205L 98.45369491577146 208.1205Q 102.45369491577146 208.1205 102.45369491577146 212.1205L 102.45369491577146 223.9415Q 102.45369491577146 227.9415 98.45369491577146 227.9415L 98.45369491577146 227.9415L 0.1 227.9415L 0.1 227.9415z" fill="rgba(80,205,205,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgxfacvt7)" pathTo="M 0.1 208.1205L 98.45369491577146 208.1205Q 102.45369491577146 208.1205 102.45369491577146 212.1205L 102.45369491577146 223.9415Q 102.45369491577146 227.9415 98.45369491577146 227.9415L 98.45369491577146 227.9415L 0.1 227.9415L 0.1 227.9415z" pathFrom="M 0.1 208.1205L 0.1 208.1205L 0.1 227.9415L 0.1 227.9415L 0.1 227.9415L 0.1 227.9415L 0.1 227.9415L 0.1 208.1205" cy="247.7625" cx="102.45369491577146" j="5" val="4" barHeight="19.821" barWidth="102.35369491577147"></path>
                                                <path id="SvgjsPath1355" d="M 0.1 247.7625L 72.86527118682861 247.7625Q 76.86527118682861 247.7625 76.86527118682861 251.7625L 76.86527118682861 263.5835Q 76.86527118682861 267.5835 72.86527118682861 267.5835L 72.86527118682861 267.5835L 0.1 267.5835L 0.1 267.5835z" fill="rgba(63,66,84,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgxfacvt7)" pathTo="M 0.1 247.7625L 72.86527118682861 247.7625Q 76.86527118682861 247.7625 76.86527118682861 251.7625L 76.86527118682861 263.5835Q 76.86527118682861 267.5835 72.86527118682861 267.5835L 72.86527118682861 267.5835L 0.1 267.5835L 0.1 267.5835z" pathFrom="M 0.1 247.7625L 0.1 247.7625L 0.1 267.5835L 0.1 267.5835L 0.1 267.5835L 0.1 267.5835L 0.1 267.5835L 0.1 247.7625" cy="287.4045" cx="76.86527118682861" j="6" val="3" barHeight="19.821" barWidth="76.76527118682861"></path>
                                                <g id="SvgjsG1341" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                                   <g id="SvgjsG1342" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1344" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1346" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1348" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1350" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1352" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1354" className="apexcharts-bar-goals-groups"></g>
                                                </g>
                                             </g>
                                             <g id="SvgjsG1340" class="apexcharts-datalabels" data:realIndex="0"></g>
                                          </g>
                                          <line id="SvgjsLine1411" x1="0" y1="0" x2="409.41477966308594" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                          <line id="SvgjsLine1412" x1="0" y1="0" x2="409.41477966308594" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                          <g id="SvgjsG1413" class="apexcharts-yaxis-annotations"></g>
                                          <g id="SvgjsG1414" class="apexcharts-xaxis-annotations"></g>
                                          <g id="SvgjsG1415" class="apexcharts-point-annotations"></g>
                                       </g>
                                       <g id="SvgjsG1328" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 175px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                       <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                       <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                          <span class="apexcharts-tooltip-marker" style="background-color: rgb(62, 151, 255);"></span>
                                          <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                             <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                             <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                             <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                       <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card card-flush mt-5">
                  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                     <!--begin::Card title-->
                     <div class="card-title">
                        <h2>Attendance Register</h2>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <div class="card-header align-items-center py-5 gap-2 gap-md-5 pt-0">
                     <!--begin::Nav-->
                     <ul class="nav nav-pills nav-pills-custom" role="tablist">
                        <!--begin::Item-->
                        <li class="nav-item" role="presentation">
                           <!--begin::Link-->
                           <a class="active" data-bs-toggle="pill" href="#attendanceregister1" aria-selected="true" role="tab">
                              <div class="symbol symbol-35px" data-bs-toggle="tooltip" data-bs-original-title="All" data-kt-initialized="1">
                                 <span class="symbol-label bg-warning text-inverse-warning fw-bold">All</span>
                              </div>
                           </a>
                           <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item" role="presentation">
                           <!--begin::Link-->
                           <a data-bs-toggle="pill" href="#attendanceregister2" aria-selected="false" tabindex="-1" role="tab">
                              <div class="symbol symbol-35px" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                 <span class="symbol-label bg-danger text-inverse-danger fw-bold">SR</span>
                              </div>
                           </a>
                           <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item" role="presentation">
                           <!--begin::Link-->
                           <a data-bs-toggle="pill" href="#attendanceregister3" aria-selected="false" tabindex="-1" role="tab">
                              <div class="symbol symbol-35px" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                 <span class="symbol-label bg-primary text-inverse-primary fw-bold">SR</span>
                              </div>
                           </a>
                           <!--end::Link-->
                        </li>
                        <!--end::Item-->
                     </ul>
                     <!--end::Nav-->
                     <!--begin::Toolbar-->
                     <div class="card-toolbar">
                        <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                           <!--begin::Display range-->
                           <div class="text-gray-600 fw-bold">15 Aug 2023 - 13 Sep 2023</div>
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
                  <div class="card-body pt-0">
                     <!--begin::Tab Content-->
                     <div class="tab-content">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade active show" id="attendanceregister1" role="tabpanel">
                           <!--begin::Table-->
                           <table class="table align-middle table-row-dashed fs-6 gy-5">
                              <!--begin::Table head-->
                              <thead>
                                 <!--begin::Table row-->
                                 <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-50px">Name</th>
                                    <th class="min-w-50px">Date</th>
                                    <th class="min-w-50px">Check In</th>
                                    <th class="min-w-50px">Check Out</th>
                                    <th class="min-w-50px">No. of hours</th>
                                 </tr>
                                 <!--end::Table row-->
                              </thead>
                              <!--end::Table head-->
                              <tbody class="fw-bold text-gray-600">
                                 <tr>
                                    <td>Harry</td>
                                    <td>28 Feb, Tue</td>
                                    <td>10:02 AM</td>
                                    <td>08:05 PM</td>
                                    <td>10 hr</td>
                                 </tr>
                                 <tr>
                                    <td>Sam</td>
                                    <td>28 Feb, Tue</td>
                                    <td>10:02 AM</td>
                                    <td>08:05 PM</td>
                                    <td>10 hr</td>
                                 </tr>
                                 <tr>
                                    <td>Lisa</td>
                                    <td>28 Feb, Tue</td>
                                    <td>10:02 AM</td>
                                    <td>08:05 PM</td>
                                    <td>10 hr</td>
                                 </tr>
                                 <tr>
                                    <td>Marry</td>
                                    <td>28 Feb, Tue</td>
                                    <td>10:02 AM</td>
                                    <td>08:05 PM</td>
                                    <td>10 hr</td>
                                 </tr>
                              </tbody>
                           </table>
                           <!--end::Table-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="attendanceregister2" role="tabpanel">
                           <!--begin::Table-->
                           <table class="table align-middle table-row-dashed fs-6 gy-5">
                              <!--begin::Table head-->
                              <thead>
                                 <!--begin::Table row-->
                                 <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-50px">Name</th>
                                    <th class="min-w-50px">Date</th>
                                    <th class="min-w-50px">Check In</th>
                                    <th class="min-w-50px">Check Out</th>
                                    <th class="min-w-50px">No. of hours</th>
                                 </tr>
                                 <!--end::Table row-->
                              </thead>
                              <!--end::Table head-->
                              <tbody class="fw-bold text-gray-600">
                                 <tr>
                                    <td>Harry</td>
                                    <td>28 Feb, Tue</td>
                                    <td>10:02 AM</td>
                                    <td>08:05 PM</td>
                                    <td>10 hr</td>
                                 </tr>
                                 <tr>
                                    <td>Sam</td>
                                    <td>28 Feb, Tue</td>
                                    <td>10:02 AM</td>
                                    <td>08:05 PM</td>
                                    <td>10 hr</td>
                                 </tr>
                                 <tr>
                                    <td>Lisa</td>
                                    <td>28 Feb, Tue</td>
                                    <td>10:02 AM</td>
                                    <td>08:05 PM</td>
                                    <td>10 hr</td>
                                 </tr>
                                 <tr>
                                    <td>Marry</td>
                                    <td>28 Feb, Tue</td>
                                    <td>10:02 AM</td>
                                    <td>08:05 PM</td>
                                    <td>10 hr</td>
                                 </tr>
                              </tbody>
                           </table>
                           <!--end::Table-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="attendanceregister3" role="tabpanel">
                           <!--begin::Table-->
                           <table class="table align-middle table-row-dashed fs-6 gy-5">
                              <!--begin::Table head-->
                              <thead>
                                 <!--begin::Table row-->
                                 <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-50px">Name</th>
                                    <th class="min-w-50px">Date</th>
                                    <th class="min-w-50px">Check In</th>
                                    <th class="min-w-50px">Check Out</th>
                                    <th class="min-w-50px">No. of hours</th>
                                 </tr>
                                 <!--end::Table row-->
                              </thead>
                              <!--end::Table head-->
                              <tbody class="fw-bold text-gray-600">
                                 <tr>
                                    <td>Harry</td>
                                    <td>28 Feb, Tue</td>
                                    <td>10:02 AM</td>
                                    <td>08:05 PM</td>
                                    <td>10 hr</td>
                                 </tr>
                                 <tr>
                                    <td>Sam</td>
                                    <td>28 Feb, Tue</td>
                                    <td>10:02 AM</td>
                                    <td>08:05 PM</td>
                                    <td>10 hr</td>
                                 </tr>
                                 <tr>
                                    <td>Lisa</td>
                                    <td>28 Feb, Tue</td>
                                    <td>10:02 AM</td>
                                    <td>08:05 PM</td>
                                    <td>10 hr</td>
                                 </tr>
                                 <tr>
                                    <td>Marry</td>
                                    <td>28 Feb, Tue</td>
                                    <td>10:02 AM</td>
                                    <td>08:05 PM</td>
                                    <td>10 hr</td>
                                 </tr>
                              </tbody>
                           </table>
                           <!--end::Table-->
                        </div>
                        <!--end::Tap pane-->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--end:::Main-->

<!--begin::Modal - Add commission-->
@include('partner.staff.attendance.modal.attendance-check-in')
@include('partner.staff.attendance.modal.attendance-check-out')
<!--end::Modal - Add commission-->

@endsection

@push('scripts')

<script type="text/javascript">
   var KTChartsWidgetAttendance = (function () {
       var e = { self: null, rendered: !1 },
           t = function (e) {
               var t = document.getElementById("kt_charts_widget_chart_attendance");
               if (t) {
                   var a = parseInt(KTUtil.css(t, "height")),
                       l = KTUtil.getCssVariableValue("--bs-gray-900"),
                       r = KTUtil.getCssVariableValue("--bs-border-dashed-color"),
                       o = {
                           series: [{ name: "Spent time", data: [54, 42, 75, 110, 23, 87, 50] }],
                           chart: { fontFamily: "inherit", type: "bar", height: a, toolbar: { show: !1 } },
                           plotOptions: { bar: { horizontal: !1, columnWidth: ["28%"], borderRadius: 5, dataLabels: { position: "top" }, startingShape: "flat" } },
                           legend: { show: !1 },
                           dataLabels: {
                               enabled: !0,
                               offsetY: -28,
                               style: { fontSize: "13px", colors: [l] },
                               formatter: function (e) {
                                   return e;
                               },
                           },
                           stroke: { show: !0, width: 2, colors: ["transparent"] },
                           xaxis: {
                               categories: ["Harry", "Lisa", "Tom", "Sam", "Dazy", "Simon", "Ron"],
                               axisBorder: { show: !1 },
                               axisTicks: { show: !1 },
                               labels: { style: { colors: KTUtil.getCssVariableValue("--bs-gray-500"), fontSize: "13px" } },
                               crosshairs: { fill: { gradient: { opacityFrom: 0, opacityTo: 0 } } },
                           },
                           yaxis: {
                               labels: {
                                   style: { colors: KTUtil.getCssVariableValue("--bs-gray-500"), fontSize: "13px" },
                                   formatter: function (e) {
                                       return e + "H";
                                   },
                               },
                           },
                           fill: { opacity: 1 },
                           states: { normal: { filter: { type: "none", value: 0 } }, hover: { filter: { type: "none", value: 0 } }, active: { allowMultipleDataPointsSelection: !1, filter: { type: "none", value: 0 } } },
                           tooltip: {
                               style: { fontSize: "12px" },
                               y: {
                                   formatter: function (e) {
                                       return +e + " hours";
                                   },
                               },
                           },
                           colors: [KTUtil.getCssVariableValue("--bs-primary"), KTUtil.getCssVariableValue("--bs-primary-light")],
                           grid: { borderColor: r, strokeDashArray: 4, yaxis: { lines: { show: !0 } } },
                       };
                   (e.self = new ApexCharts(t, o)),
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
   "undefined" != typeof module && (module.exports = KTChartsWidgetAttendance),
       KTUtil.onDOMContentLoaded(function () {
           KTChartsWidgetAttendance.init();
       });


    var KTChartsWidgetAvgWrkHr = (function () {
       var e = { self: null, rendered: !1 },
           t = function (e) {
               var t = document.getElementById("kt_charts_widget_avg_working_hour");
               if (t) {
                   var a = KTUtil.getCssVariableValue("--bs-border-dashed-color"),
                       l = {
                           series: [{ data: [15, 12, 10, 8, 7, 4, 3], show: !1 }],
                           chart: { type: "bar", height: 350, toolbar: { show: !1 } },
                           plotOptions: { bar: { borderRadius: 4, horizontal: !0, distributed: !0, barHeight: 50 } },
                           dataLabels: { enabled: !1 },
                           legend: { show: !1 },
                           colors: ["#3E97FF", "#F1416C", "#50CD89", "#FFC700", "#7239EA", "#50CDCD", "#3F4254"],
                           xaxis: {
                               categories: ["Harry", "Lisa", "Tom", "Sam", "Dazy", "Simon", "Ron"],
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
   "undefined" != typeof module && (module.exports = KTChartsWidgetAvgWrkHr),
    KTUtil.onDOMContentLoaded(function () {
        KTChartsWidgetAvgWrkHr.init();
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

<script src="{{asset('/public/assets/js/partner/attendance.js')}}" type="text/javascript"></script>
@endpush()