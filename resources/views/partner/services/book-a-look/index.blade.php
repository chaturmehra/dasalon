@extends('partner.layouts.auth.app')
@section('content') 

<!--Begin:::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
   <!--begin::Content wrapper-->
   <div class="d-flex flex-column flex-column-fluid">

      <!--begin::Toolbar-->
      <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
         <!--begin::Toolbar container-->
         <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
               <!--begin::Title-->
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Settings</h1>
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
                  <li class="breadcrumb-item text-muted">Settings</li>
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
                              <!--begin::Title-->
                              <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                   <!--begin::User-->
                                   <div class="d-flex flex-column">
                                       <!--begin::Name-->
                                       <div class="d-flex align-items-center mb-2">
                                           <a href="{{ route('bookalook.index') }}" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Book a look</a>
                                           <a href="{{ route('bookalook.index') }}"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>
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
                        <h3 class="text-dark text-center fw-bold">No Book a look added</h3>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="text-center text-gray-600 fw-semibold pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        </div>
                        <!--end::Text-->
                        <!--begin::Action-->
                        <div class="text-center mt-5 mb-9">
                           <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable22">Add Book a look</a>
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
                  <h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Manage Book a look</h2>
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
                               <i class="ki-duotone ki-plus fs-2"></i>Add Book a look
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
                           <th>Look</th>
                           <th>Gender</th>
                           <th>Duration</th>
                           <th>Walk-in</th>
                           <th>Online</th>
                           <th>Off-Peak</th>
                           <th>Status</th>
                           <th class="text-end">Action</th>
                        </tr>
                        <!--end::Table row-->
                     </thead>
                     <!--end::Table head-->


                     <!--begin::Table body-->
                     <tbody class="fw-bold text-gray-600 alntop">
                      @if(!empty($bookaLookLists))
                       @foreach($bookaLookLists as $key => $bookaLookList)
                       @php 
                          $status = $bookaLookList['status']; 
                          if($status){
                             $text = "Enabled";
                             $class = "success";
                             $statusVal = 0;
                             $statusText = "Disable";
                          }else{
                             $text = "Disabled";
                             $class = "danger";
                             $statusVal = 1;
                             $statusText = "Enable";
                          }

                          $full_name = $bookaLookList['servicename'];
                          $name_parts = explode(' ', $full_name);
                          $shortName = '';
                          foreach ($name_parts as $part) {
                            $shortName .= substr($part, 0, 1);
                          }

                       @endphp
                        <tr>
                           <td>
                              <div class="d-flex gap-3 cursor-pointer" id="kt_drawer_example_permanent_toggle2">
                                 <div class="prdimg symbol symbol-circle symbol-50px overflow-hidden cursor-pointer">
                                  @if( !empty($bookaLookList['look_image']) )
                                    <img src="{{asset('/public/'.$bookaLookList['look_image'])}}" alt="{{ $bookaLookList['servicename'] }}" class="w-100" />
                                  @else
                                    <span class="symbol-label bg-danger text-inverse-danger fw-bold">{{ $shortName }}</span>
                                  @endif
                                 </div>
                                 <div class="d-flex justify-content-start flex-column">
                                    <a href="javascript:void(0)" class="text-dark fw-bold text-hover-primary mb-1 fs-6 get-bookalook-detail-by-id" bookalook-id="{{ $bookaLookList['pbal_id'] }}">{{ $bookaLookList['servicename'] }}</a>
                                    <span class="text-muted fw-semibold text-muted d-block fs-7">
                                       {{ $bookaLookList['servicesubcategory'] }}
                                    </span>
                                 </div>
                              </div>
                           </td>
                           <td>{{ $bookaLookList['gender'] }}</td>
                           <td>{{ $bookaLookList['duration'] }}</td>
                           <td>
                              <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $bookaLookList['walk_in_price'] }}</span>
                           </td>
                           <td>
                              <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $bookaLookList['online_price'] }}</span>
                           </td>
                           <td>
                              <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $bookaLookList['off_peak_price'] }}</span>
                           </td>
                           <td>
                              <span class="badge badge-light-{{$class}}">{{ $text }}</span>
                           </td>
                           <td class="text-end">
                              <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                              <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                              <!--begin::Menu-->
                              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3">
                                    <a href="javascript:void(0)" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3 get-bookalook-detail-by-id" bookalook-id="{{ $bookaLookList['pbal_id'] }}">Edit</a>
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                                 <div class="menu-item px-3">
                                  <a href="javascript:void(0)" class="menu-link px-3 status-change" status-value="{{ $statusVal }}" bookalook-id="{{ $bookaLookList['pbal_id'] }}">{{ $statusText }}
                                  </a>
                                 </div>
                                 <!--end::Menu item-->
                                 <!--begin::Menu item-->
                              </div>
                              <!--end::Menu-->
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

@include('partner.services.book-a-look.modal.add')
@include('partner.services.book-a-look.modal.edit')
<!--end::Modals-->

@endsection
@push('scripts')
<script type="text/javascript">
   var input_service = document.querySelector("#kt_tagify_service");
   var service_list = "@php echo implode(',', getServices()); @endphp";
   service_list = service_list.split(",");   

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

   productDrp(input_service, service_list);
</script>

<script type="text/javascript">

   let ser_duration, ser_walkin, ser_online, ser_Offpeak;

   let pack_arr = [
               {
                  name: 'Service1_1_1',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service1_1_2',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service1_1_3',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service1_2_1',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service1_2_2',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service1_2_3',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service1_3_1',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service1_3_2',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service1_3_3',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service2_1_1',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service2_1_2',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service2_1_3',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service2_2_1',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service2_2_2',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service2_2_3',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service2_3_1',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service2_3_2',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service2_3_3',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service3_1_1',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service3_1_2',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service3_1_3',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service3_2_1',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service3_2_2',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service3_2_3',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service3_3_1',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service3_3_2',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               },
               {
                  name: 'Service3_3_3',
                  duration: 25,
                  walkin: 40,
                  online: 39,
                  offpeak: 41,
                  time: '2hr 30min'
               }
   ]

   let durStr=[], walkinStr=[], onlineStr=[], offpeakStr=[], serarr=[];

   window.addEventListener("DOMContentLoaded", (event) => {

      ser_duration = document.querySelector('.ser_duration');
      ser_walkin = document.querySelector('.ser_walkin');
      ser_online = document.querySelector('.ser_online');
      ser_Offpeak = document.querySelector('.ser_Offpeak');

   });

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


   function remInfo(serTxt) {
      for (let i=0; i<serarr.length; i++) {
         if(serarr[i] == serTxt) {
            durStr.splice(i,1);
            walkinStr.splice(i,1);
            onlineStr.splice(i,1);
            offpeakStr.splice(i,1);
            serarr.splice(i,1);
         }
      }
      // ser_duration.textContent = durStr.join("+") + ' min';
      // ser_walkin.textContent = '$ ' + walkinStr.join("+");
      // ser_online.textContent = '$ ' + onlineStr.join("+");
      // ser_Offpeak.textContent = '$ ' + offpeakStr.join("+"); 

      ser_duration.textContent = durStr.reduce((acc, i) => acc + Number(i), 0) + ' min';
      ser_walkin.textContent = '$ ' + walkinStr.reduce((acc, i) => acc + Number(i), 0);
      ser_online.textContent = '$ ' + onlineStr.reduce((acc, i) => acc + Number(i), 0);
      ser_Offpeak.textContent = '$ ' + offpeakStr.reduce((acc, i) => acc + Number(i), 0);
   }

   function addInfo(serTxt) {

      for (let i=0; i<pack_arr.length; i++) {
         if(pack_arr[i].name == serTxt) {
               durStr.push(pack_arr[i].duration.toString());
               walkinStr.push(pack_arr[i].walkin.toString());
               onlineStr.push(pack_arr[i].online.toString());
               offpeakStr.push(pack_arr[i].offpeak.toString());
               serarr.push(serTxt);
         }
      }

      // ser_duration.textContent = durStr.join("+") + ' min';
      // ser_walkin.textContent = '$ ' + walkinStr.join("+");
      // ser_online.textContent = '$ ' + onlineStr.join("+");
      // ser_Offpeak.textContent = '$ ' + offpeakStr.join("+"); 

      ser_duration.textContent = durStr.reduce((acc, i) => acc + Number(i), 0) + ' min';
      ser_walkin.textContent = '$ ' + walkinStr.reduce((acc, i) => acc + Number(i), 0);
      ser_online.textContent = '$ ' + onlineStr.reduce((acc, i) => acc + Number(i), 0);
      ser_Offpeak.textContent = '$ ' + offpeakStr.reduce((acc, i) => acc + Number(i), 0);
   }


   function remPackInd(e) {
      let serviceNameList = document.querySelectorAll('.service_individual');

      for(let i=0; i<serviceNameList.length; i++) {
         if(serviceNameList[i].textContent == e.parentElement.querySelector('.ser_name').textContent) {
            let eChkElem = serviceNameList[i].closest('div').querySelector('.form-check > input');
            if(eChkElem.checked) {
               eChkElem.checked = false;
               eChkElem.nextElementSibling.textContent = "Select";
               eChkElem.nextElementSibling.classList.remove('selected');
            }
         }
      }

      // ser_duration.textContent = durStr.join("+") + ' min';
      // ser_walkin.textContent = '$ ' + walkinStr.join("+");
      // ser_online.textContent = '$ ' + onlineStr.join("+");
      // ser_Offpeak.textContent = '$ ' + offpeakStr.join("+");  

      ser_duration.textContent = durStr.reduce((acc, i) => acc + Number(i), 0) + ' min';
      ser_walkin.textContent = '$ ' + walkinStr.reduce((acc, i) => acc + Number(i), 0);
      ser_online.textContent = '$ ' + onlineStr.reduce((acc, i) => acc + Number(i), 0);
      ser_Offpeak.textContent = '$ ' + offpeakStr.reduce((acc, i) => acc + Number(i), 0);

      e.parentElement.remove();
   }


   let searchBox = document.querySelectorAll('[name="search-box"]');
   for(let j=0; j<searchBox.length; j++) {
      searchBox[j].addEventListener('keyup', function (e) {
         let currSerNm = e.target.closest('.searchboxdiv').nextElementSibling.children;
         for(let i=0; i<currSerNm.length; i++) {
            if(currSerNm[i].querySelector('.service_individual').textContent.toLowerCase().includes(e.target.value.toLowerCase())) {
               if(currSerNm[i].classList.contains("d-none")) {
                  currSerNm[i].classList.remove("d-none");
               }
               currSerNm[i].classList.add("d-flex");
            }
            else {
               if(currSerNm[i].classList.contains("d-flex")) {
                  currSerNm[i].classList.remove("d-flex");
               }
               currSerNm[i].classList.add("d-none");
            }
         }
        });
   }
</script>

<script src="{{asset('/public/assets/js/partner/bookalook.js')}}" type="text/javascript"></script>
<script src="{{asset('/public/partner/assets/js/add_booklook_staff_pricing.js')}}" type="text/javascript"></script>
<script src="{{asset('/public/partner/assets/js/edit_booklook_staff_pricing.js')}}" type="text/javascript"></script>
@endpush