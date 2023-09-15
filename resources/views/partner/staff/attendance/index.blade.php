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
                  <li class="breadcrumb-item text-muted">
                     <a href="{{ route('staff.index') }}" class="text-muted text-hover-primary">Staff</a>
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
                        <span class="text-gray-800 fs-4 fw-semibold dateRangeDisplay">Loading...</span>
                        <a class="nextBtn cursor-pointer">
                        <i class="bi bi-chevron-right fs-6"></i>
                        </a>
                     </div>
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-0">
                     <!--begin::Table-->
                     <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example2">
                        <!--begin::Table head-->
                        <thead>
                           <!--begin::Table row-->
                           <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                              <th class="min-w-50px">S No.</th>
                              <th class="min-w-100px">Name</th>
                              <th class="min-w-100px">Contact No.</th>
                              <th class="min-w-50px">Check-In-Time</th>
                              <th class="min-w-100px">Check-Out-Time</th>
                           </tr>
                           <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <tbody class="fw-bold text-gray-600">

                           @if($getStaff)
                           @foreach($getStaff as $skey => $staff)
                           <tr>
                              <td>{{ $skey+1 }}</td>
                              <td>{{ $staff->name }}</td>
                              <td>{{ $staff->phone }}</td>
                              <td>
                                 <button type="button" class="btn btn-primary modal_attendance_check" data-bs-toggle="modal" data-bs-target="#modal_attendance_admin_check" staff-id="{{ $staff->user_id }}">
                                    Check in
                                 </button>
                              </td>
                              <td>
                                 <button type="button" class="btn btn-primary modal_attendance_check" data-bs-toggle="modal" data-bs-target="#modal_attendance_admin_check_out" staff-id="{{ $staff->user_id }}">
                                    Check out
                                 </button>
                              </td>
                           </tr>
                           @endforeach
                           @endif
                        </tbody>
                     </table>
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
                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4 attendance-analytics-filter">
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
                              <div id="kt_charts_widget_chart_attendance" class="h-325px w-100 min-h-auto"></div>
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
                              <div id="kt_charts_widget_avg_working_hour" class="min-h-auto"></div>
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
                     <ul class="nav nav-pills nav-pills-custom">
                        <!--begin::Item-->
                        <li class="nav-item">
                           <!--begin::Link-->
                           <a class="active show_hide_staff_attendance" data-bs-toggle="pill" href="javascript:void(0)" staff-id="all">
                              <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="All">
                                 <span class="symbol-label bg-warning text-inverse-warning fw-bold">All</span>
                              </div>
                           </a>
                           <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        @if($getStaff)
                        @foreach($getStaff as $namekey => $staff_name)
                        @php
                        $full_name = $staff_name->name;
                        $name_parts = explode(' ', $full_name);
                        $shortName = '';
                        foreach ($name_parts as $part) {
                           $shortName .= substr($part, 0, 1);
                        }

                        @endphp
                        <li class="nav-item">
                           <!--begin::Link-->
                           <a data-bs-toggle="pill" href="javascript:void(0)" class="show_hide_staff_attendance" staff-id="{{ $staff_name->user_id }}">
                              <div class="symbol symbol-35px" data-bs-toggle="tooltip" title="{{ $staff_name->name }}">
                                 <span class="symbol-label bg-danger text-inverse-danger fw-bold">{{ strtoupper($shortName) }}</span>
                              </div>
                           </a>
                           <!--end::Link-->
                        </li>
                        @endforeach
                        @endif
                     </ul>
                     <!--end::Nav-->
                     <!--begin::Toolbar-->
                     <div class="card-toolbar">
                        <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4 attendance-daterangepicker">
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
                  <div class="card-body pt-0">
                     <!--begin::Tab Content-->
                     <div class="tab-content">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade active show">
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
                              <tbody class="fw-bold text-gray-600 attendance-register">
                                 @if($staffAttendance)
                                 @foreach($staffAttendance as $sakey => $staff_att)
                                 @php 
                                    $date = $staff_att->date; 
                                    $formatted_date = date("d M, D", strtotime($date));
                                    $ts1 = strtotime($staff_att->check_in);
                                    $ts2 = strtotime($staff_att->check_out);    
                                    if($ts1 && $ts2){
                                       $seconds_diff = $ts2 - $ts1;                            
                                       $time = ($seconds_diff/3600)." hr";
                                    }else{
                                       $time = "NA";
                                    }
                                    
                                 @endphp
                                 <tr class="staff_{{$staff_att->user_id}}">
                                    <td>{{ $staff_att->name }}</td>
                                    <td>{{ $formatted_date }}</td>
                                    <td>{{ $staff_att->check_in }}</td>
                                    <td>{{ $staff_att->check_out }}</td>
                                    <td>{{ $time }} </td>
                                 </tr>
                                 @endforeach
                                 @endif

                              </tbody>
                           </table>
                           <!--end::Table-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
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
   var seriesData = "@php echo implode(',', array_values($apexChartArray)); @endphp";
   seriesData = seriesData.split(",");
   var seriesAvgData = "@php echo implode(',', array_values($apexChartAvgArray)); @endphp";
   seriesAvgData = seriesAvgData.split(",");
   var categoriesData = "@php echo implode(',', array_keys($apexChartArray)); @endphp";
   categoriesData = categoriesData.split(",");

   var KTChartsWidgetAttendance = (function () {
    var e = { self: null, rendered: !1 },
        t = function (e) {
            var t = document.getElementById("kt_charts_widget_chart_attendance");
            if (t) {
                var a = parseInt(KTUtil.css(t, "height")),
                    l = KTUtil.getCssVariableValue("--bs-gray-900"),
                    r = KTUtil.getCssVariableValue("--bs-border-dashed-color"),
                    o = {
                        series: [{ name: "Spent time", data: seriesData }],
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
                            categories: categoriesData,
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
                        series: [{ name: "Average Working Hour", data: seriesAvgData, show: !1 }],
                        chart: { type: "bar", height: 350, toolbar: { show: !1 } },
                        plotOptions: { bar: { borderRadius: 4, horizontal: !0, distributed: !0, barHeight: 50 } },
                        dataLabels: { enabled: !1 },
                        legend: { show: !1 },
                        colors: ["#3E97FF", "#F1416C", "#50CD89", "#FFC700", "#7239EA", "#50CDCD", "#3F4254"],
                        xaxis: {
                            categories: categoriesData,
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