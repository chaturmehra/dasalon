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
   <!--end::Vendors Javascript-->
   <!--begin::Custom Javascript(used for this page only)-->
   <script src="{{ asset('/public/partner/assets/js/custom/apps/ecommerce/reports/sales/sales.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/apps/user-management/users/list/table.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/apps/user-management/users/list/export-users.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/apps/user-management/users/list/add.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/widgets.bundle.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/widgets.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/apps/chat/chat.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/utilities/modals/new-target.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/utilities/modals/new-address.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/utilities/modals/users-search.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/utilities/modals/create-campaign.js')}}"></script>
   <script src="{{ asset('/public/partner/assets/js/custom/utilities/modals/create-app.js')}}"></script>
   <!--end::Custom Javascript-->
   <!--end::Javascript-->
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
      chart.render();
      chart2.render();
      chart3.render();
      chart4.render();
      chart5.render();
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