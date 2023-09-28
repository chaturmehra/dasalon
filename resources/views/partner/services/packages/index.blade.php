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
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Services</h1>
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
                  <li class="breadcrumb-item text-muted">Packages</li>
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
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                           <!--begin::User-->
                           <div class="d-flex flex-column">
                              <!--begin::Name-->
                              <div class="d-flex align-items-center mb-2">
                                 <a href="{{ route('packages.index') }}" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Packages</a>
                                 <a href="{{ route('packages.index') }}"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>
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
                        <h3 class="text-dark text-center fw-bold">No Packages added</h3>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="text-center text-gray-600 fw-semibold pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        </div>
                        <!--end::Text-->
                        <!--begin::Action-->
                        <div class="text-center mt-5 mb-9">
                           <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable22">Add Package</a>
                        </div>
                        <!--end::Action-->
                     </div>
                     <!--end::Section-->
                     <!--begin::Illustration-->
                     <div class="text-center px-4">
                        <img class="mw-100 mh-200px" alt="image" src="{{ asset('/public/partner/assets/media/illustrations/sketchy-1/1.png') }}" />
                     </div>
                     <!--end::Illustration-->
                  </div>
                  <!--end::Wrapper-->
               </div>
            </div>
            <!--begin::Products-->
            <div class="card card-flush mt-8">
               <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                  <!--begin:::Tabs-->
                  <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                     <!--begin:::Tab item-->
                     <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#managetbl">Manage Package</a>
                     </li>
                     <!--end:::Tab item-->
                     <!--begin:::Tab item-->
                     <!--end:::Tab item-->
                  </ul>
                  <!--end:::Tabs-->
               </div>
               <div class="tab-content">
                  <div class="tab-pane fade active show" id="managetbl" role="tab-panel">
                     <!--begin::Card header-->
                     <div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-5">
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
                           <div class="card-toolbar">
                              <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable22">
                                 <i class="ki-duotone ki-plus fs-2"></i>Add Package
                                 </button>
                              </div>
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
                                 <th>Package Name</th>
                                 <th>Gender</th>
                                 <th>Duration</th>
                                 <th>Walk-in</th>
                                 <th>Online</th>
                                 <th>Off-Peak</th>
                                 <th>Qty Sold</th>
                                 <th>Status</th>
                                 <th class="text-end">Action</th>
                              </tr>
                              <!--end::Table row-->
                           </thead>
                           <!--end::Table head-->
                           <!--begin::Table body-->
                           <tbody class="fw-bold text-gray-600 alntop">
                              @if(!empty($packageLists))
                               @foreach($packageLists as $key => $packageList)
                               @php 
                                  $status = $packageList['status']; 
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

                                  $full_name = $packageList['servicename'];
                                  $name_parts = explode(' ', $full_name);
                                  $shortName = '';
                                  foreach ($name_parts as $part) {
                                    $shortName .= substr($part, 0, 1);
                                  }

                               @endphp
                              <tr>
                                 <td>
                                    <a href="#" id="kt_drawer_example_permanent_toggle">
                                       <div class="d-flex gap-3">
                                          <div data-qa="color-sample-blue" class="color-ind">
                                             <div class="color-ind-single blue" title="blue">
                                             </div>
                                          </div>
                                          <div class="d-flex justify-content-start flex-column">
                                             <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $packageList['package_name'] }}</span>
                                             <span class="text-muted fw-semibold text-muted d-block fs-7">
                                             {{ $packageList['servicename'] }}
                                             </span>
                                          </div>
                                       </div>
                                    </a>
                                 </td>
                                 <td>{{ $packageList['gender'] }}</td>
                                 <td>{{ $packageList['duration'] }}</td>
                                 <td>
                                    <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $partner_country_config->currency_sign }}{{ $packageList['walk_in_price'] }}</span>
                                 </td>
                                 <td>
                                    <span class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $partner_country_config->currency_sign }}{{ $packageList['online_price'] }}</span>
                                 </td>
                                 <td>{{ $partner_country_config->currency_sign }}{{ $packageList['off_peak_price'] }}</td>
                                 <td>30</td>
                                 <td>
                                    <span class="badge badge-light-{{$class}}">{{ $text }}</span>
                                 </td>
                                 <td class="text-end">
                                    <a href="javascript:void(0)" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="javascript:void(0)" id="kt_drawer_example_permanent_toggle2" class="menu-link px-3 get-package-detail-by-id" package-id="{{ $packageList['pp_id'] }}">Edit</a>
                                       </div>
                                       <!--end::Menu item-->

                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                        <a href="javascript:void(0)" class="menu-link px-3 status-change" status-value="{{ $statusVal }}" package-id="{{ $packageList['pp_id'] }}">{{ $statusText }}
                                        </a>
                                       </div>
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
               </div>
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

@include('partner.services.packages.modal.add')
@include('partner.services.packages.modal.edit')
<!--end::Modals-->

@endsection
@push('scripts')
<script type="text/javascript">
  var input_add_service = document.querySelector("#kt_tagify_service");
  var service_list = "@php echo implode(',', getServices()); @endphp";
  service_list = service_list.split(",");


  function productDrp(input, list) {
    new Tagify(input, {
        whitelist: list,
        maxTags: 20,
        dropdown: {
            maxItems: 40,           // <- mixumum allowed rendered suggestions
            classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
            enabled: 0,             // <- show suggestions on focus
            closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
        }
    });
  }

  productDrp(input_add_service, service_list);

  let pack_array = [
          {
            name: 'Service1',
            duration: 25,
            walkin: 40,
            online: 39,
            offpeak: 41,
            price: 40,
            time: '2hr 30min'
          },
          {
            name: 'Service2',
            duration: 25,
            walkin: 40,
            online: 39,
            offpeak: 41,
            price: 40,
            time: '2hr 30min'
          },
          {
            name: 'Service3',
            duration: 25,
            walkin: 40,
            online: 39,
            offpeak: 41,
            price: 40,
            time: '2hr 30min'
          },
          {
            name: 'Service4',
            duration: 25,
            walkin: 40,
            online: 39,
            offpeak: 41,
            price: 40,
            time: '2hr 30min'
          },
          {
            name: 'Service5',
            duration: 25,
            walkin: 40,
            online: 39,
            offpeak: 41,
            price: 40,
            time: '2hr 30min'
          },
          {
            name: 'Service6',
            duration: 25,
            walkin: 40,
            online: 39,
            offpeak: 41,
            price: 40,
            time: '2hr 30min'
          },
          {
            name: 'Service7',
            duration: 25,
            walkin: 40,
            online: 39,
            offpeak: 41,
            price: 40,
            time: '2hr 30min'
          },
          {
            name: 'Service8',
            duration: 25,
            walkin: 40,
            online: 39,
            offpeak: 41,
            price: 40,
            time: '2hr 30min'
          },
          {
            name: 'Service9',
            duration: 25,
            walkin: 40,
            online: 39,
            offpeak: 41,
            price: 40,
            time: '2hr 30min'
          },
          {
            name: 'Service10',
            duration: 25,
            walkin: 40,
            online: 39,
            offpeak: 41,
            time: '2hr 30min'
          }
  ]


  var packArr = {!! $partnerServicesArr !!};

  console.log("packArr", packArr);
  console.log("pack_array", pack_array);

  let pack_arr = packArr;

  let packageserind = document.querySelector('.packageserind');
  let packageserindPar = packageserind.parentElement;
  let clonepackageserind = packageserind.cloneNode(true);
  packageserind.remove();

  let ser_duration, ser_walkin, ser_online, ser_Offpeak, ser_totalprice;
  let durStr=[], walkinStr=[], onlineStr=[], offpeakStr=[], selArrNew = [];

  window.addEventListener("DOMContentLoaded", (event) => {
    ser_duration = document.querySelector('.ser_duration');
    ser_walkin = document.querySelector('.ser_walkin');
    ser_online = document.querySelector('.ser_online');
    ser_Offpeak = document.querySelector('.ser_Offpeak');
    ser_totalprice = document.querySelector('.ser_totalprice');

  });

  function serviceSelected(e) {
    let selArr = JSON.parse(e.value);
    for(let i=0; i<selArr.length; i++) {
      let cnt = selArr[i].value;
      if(!selArrNew.includes(cnt)) {
        selArrNew.push(cnt);
        serviceSelectedCalc(cnt);
      }
    }
  }

  function serviceSelectedCalc(serTxt) {
    let clonepackageserindnew = clonepackageserind.cloneNode(true);
    clonepackageserindnew.querySelector('.ser_name').textContent = serTxt;
    packageserindPar.append(clonepackageserindnew);

    for (let i=0; i<pack_arr.length; i++) {
      if(pack_arr[i].name == serTxt) {
          durStr.push(pack_arr[i].duration.toString());
          walkinStr.push(pack_arr[i].walkin.toString());
          onlineStr.push(pack_arr[i].online.toString());
          offpeakStr.push(pack_arr[i].offpeak.toString());
      }
    }

    ser_duration.value = durStr.reduce((acc, i) => acc + Number(i), 0) + ' min';
    ser_walkin.value = walkinStr.reduce((acc, i) => acc + Number(i), 0);
    ser_online.value = onlineStr.reduce((acc, i) => acc + Number(i), 0);
    ser_Offpeak.value = offpeakStr.reduce((acc, i) => acc + Number(i), 0);
  }

  function remPackInd(e) {
    let pos_e_Elem = packageserindPar.querySelectorAll('.packageserind');
    for (let i=0; i<pos_e_Elem.length; i++) {
      if(pos_e_Elem[i] == e.parentElement) {
        selArrNew.splice(i, 1);
        durStr.splice(i,1);
        walkinStr.splice(i,1);
        onlineStr.splice(i,1);
        offpeakStr.splice(i,1);
      }
    }

    ser_duration.value = durStr.reduce((acc, i) => acc + Number(i), 0) + ' min';
    ser_walkin.value = walkinStr.reduce((acc, i) => acc + Number(i), 0);
    ser_online.value = onlineStr.reduce((acc, i) => acc + Number(i), 0);
    ser_Offpeak.value = offpeakStr.reduce((acc, i) => acc + Number(i), 0);

    e.parentElement.remove();

    removeTagByValue(input_add_service, e.previousElementSibling.textContent);
  }

  function removeTagByValue(tagifyInput, valueToRemove) {
      var tags = JSON.parse(tagifyInput.value);
      var updatedTags = tags.filter(tag => tag.value !== valueToRemove);
      var updatedTagsNew = JSON.stringify(updatedTags)
      tagifyInput.value = updatedTagsNew;
  }

</script>

<script type="text/javascript">
  var input_add_service_edit = document.querySelector("#kt_tagify_service_edit");
  var service_list = "@php echo implode(',', getServices()); @endphp";
  service_list = service_list.split(",");
  

  function productDrp(input, list) {
    new Tagify(input, {
        whitelist: list,
        maxTags: 20,
        dropdown: {
            maxItems: 40,           // <- mixumum allowed rendered suggestions
            classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
            enabled: 0,             // <- show suggestions on focus
            closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
        }
    });
  }

  productDrp(input_add_service_edit, service_list_edit);

</script>

<script src="{{asset('/public/assets/js/partner/packages.js')}}" type="text/javascript"></script>
<script src="{{asset('/public/partner/assets/js/add_packages_staff_pricing.js')}}" type="text/javascript"></script>
<script src="{{asset('/public/partner/assets/js/edit_packages_staff_pricing.js')}}" type="text/javascript"></script>
@endpush