@extends('admin.layouts.auth.app')

@section('content')

<!--Begin:::Main-->
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
   <!--begin::Toolbar-->
   <div id="kt_app_toolbar" class="app-toolbar pt-3 pt-lg-6">
      <!--begin::Toolbar container-->
      <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
         <!--begin::Page title-->
         <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Subscription Config</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
               <!--begin::Item-->
               <li class="breadcrumb-item text-muted">
                  <a href="{{ url('/admin/settings') }}" class="text-muted text-hover-primary">Home</a>
               </li>
               <!--end::Item-->
               <!--begin::Item-->
               <li class="breadcrumb-item">
                  <span class="bullet bg-gray-400 w-5px h-2px"></span>
               </li>
               <!--end::Item-->
               <!--begin::Item-->
               <li class="breadcrumb-item text-muted">Subscription Config</li>
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
      <div id="kt_app_content_container" class="app-container container-fluid">
         <!--begin::Navbar-->
         @include('admin.setting.tab')
         <!--end::Navbar-->
         <!--begin::Main column-->
         <div class="d-flex flex-column flex-row-fluid gap-7">
            <div class="card card-flush">
               <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                  <!--begin:::Tabs-->
                  <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                     <!--begin:::Tab item-->
                     <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#subscriptioinconfig1">On-boarding</a>
                     </li>
                     <!--end:::Tab item-->
                     <!--begin:::Tab item-->
                     <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#subscriptioinconfig2">Subscription tier & price</a>
                     </li>
                     <!--end:::Tab item-->
                     <!--begin:::Tab item-->
                     <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#subscriptioinconfig3">Subscription and Feature Mapping</a>
                     </li>
                     <!--end:::Tab item-->
                  </ul>
                  <!--end:::Tabs-->
               </div>
            </div>
            @if(session()->has('messageonb'))
                        <div class="card-header display-message">
                           <div class="alert alert-success">
                              {{ session()->get('messageonb') }}
                           </div>
                        </div>
                        @endif
            <!--begin::Tab content-->
            <div class="tab-content">
               <!--begin::Tab pane-->
               <div class="tab-pane fade active show" id="subscriptioinconfig1" role="tab-panel">
                  <!--begin::Products-->
                  <div class="card card-flush mb-8">
                     <div class="card-body align-items-center pb-0">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                           <span class="card-label fw-bold text-gray-800">Grace period type1</span>
                        </h3>
                        <!--end::Title--> 
                        
                   
                        <span class="text-gray-400 fw-semibold d-block fs-6">{{$onboardtype[0]['gperiod_type1']}}</span>
                      
                     </div>
                     <!--begin::Card header-->
                     <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        @if(session()->has('status'))
								<div class="card-header display-message">
									<div class="alert alert-success">
										{{ session()->get('status') }}
									</div>
								</div>
								@endif
								@if(session()->has('errorstatus'))
								<div class="card-header display-message">
									<div class="alert alert-danger">
										{{ session()->get('errorstatus') }}
									</div>
								</div>
								@endif
                        <div class="card-title">
                           <!--begin::Search-->
                           <div class="d-flex align-items-center position-relative my-1">
                              <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                              <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
                           </div>
                           <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                           <!--begin::Card toolbar-->
                           <div class="card-toolbar">
                              <!--begin::Toolbar-->
                              <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                 <!--begin::Add Country-->
                                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable">
                                 <i class="ki-duotone ki-plus fs-2"></i>Edit
                                 </button>
                                 <!--end::Add Country-->
                              </div>
                              <!--end::Toolbar-->
                              <!--begin::Modal - Add task-->
                              <div class="modal fade" tabindex="-1" id="kt_modal_scrollable">
                                 <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title">Edit</h5>
                                          <!--begin::Close-->
                                          <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                             <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                          </div>
                                          <!--end::Close-->
                                       </div>
                                       <div class="modal-body">
                                          <!--begin::Form-->
                                          <form class="form" action = "{{ url('admin/settings/onboarding')}}" method = "post">
                                              @csrf 
                                             <!--begin::Scroll-->
                                             <div class="d-flex flex-column scroll-y me-n7 pe-7">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                   <!--begin::Label-->
                                                   <label for="kt_docs_select2_country" class="form-label">Select a country</label>
                                                   <div class="form-floating border rounded">
                                                      <select class="form-select select_country8" placeholder="..." id="kt_docs_select2_country" name="gperiod_country">
                                                      <option value="">Select Country</option>
                                                      @foreach(getCountryConfigList() as $con_val)
																				<option value="{{$con_val->id}}" data-kt-select2-country="{{asset('/public/assets/media/flags/'.strtolower(str_replace(' ','-',$con_val->name.'.svg')))}}">{{$con_val->name}}</option>
																				@endforeach
                                                      </select>
                                                   </div>
                                                   <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                   <!--begin::Label-->
                                                   <label class="required fw-semibold fs-6 mb-2">Grace Period Type 1</label>
                                                   <!--end::Label-->
                                                   <!--begin::Input-->
                                                   <input type="number" name="gperiod_type1" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Grace Period Type 1" 
                                                   id="dis_typeone"/>
                                                   <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                             </div>
                                             <!--end::Scroll-->
                                             <!--begin::Actions-->
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
                                                <button type="submit" class="btn btn-primary">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                                </button>
                                             </div>
                                             <!--end::Actions-->
                                          </form>
                                          <!--end::Form-->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!--end::Modal - Add task-->
                           </div>
                           <!--end::Card toolbar-->
                        </div>
                        <!--end::Card toolbar-->
                     </div>
                     <!--end::Card header-->
                     <!--begin::Card body-->
                     <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example1">
                           <thead>
                              <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                 <th class="min-w-125px">S No.</th>
                                 <th class="min-w-125px">Country name</th>
                                 <th class="min-w-125px">Business name</th>
                                 <th class="min-w-125px">Partner Type</th>
                                 <th class="min-w-125px">Owner name</th>
                                 <th class="min-w-125px">Email</th>
                                 <th class="min-w-125px">Phone number</th>
                                 <th class="min-w-125px">Status</th>
                                 <th class="text-end min-w-100px">Actions</th>
                              </tr>
                           </thead>
                           <tbody class="text-gray-600 fw-semibold">
                              @php $count=1; @endphp
                             
                              @foreach($subtypeOne as $typeOne)
                              @php
                              $status = $typeOne->is_active;
													if($status==1){
													$status = "Enabled";
													$class 	= "success";
												}else{
												$status = "Disabled";
												$class 	= "danger";
											}
                              @endphp
                              <tr>
                                 <td>{{$count++}}</td>
                                 <td>{{$typeOne->countryname}}</td>
                                 <td>{{$typeOne->business_name}}</td>
                                 <td>Salon</td>
                                 <td>{{$typeOne->name}}</td>
                                 <td>{{$typeOne->email}}</td>
                                 <td>{{$typeOne->phone}}</td>
                                 <td>
                                    <div class="badge badge-light-{{$class}} fw-bold">{{$status}}</div>
                                 </td>
                                 <td class="text-end">
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="{{ url('/admin/typeone/enable-status/'.$typeOne->id) }}" class="menu-link px-3">Enable</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="{{ url('/admin/typeone/disable-status/'.$typeOne->id) }}" class="menu-link px-3">Disable</a>
                                       </div>
                                       <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                 </td>
                              </tr>
                             @endforeach                                
                           </tbody>
                        </table>
                        <!--end::Table-->
                     </div>
                     <!--end::Card body-->
                  </div>
                  <!--end::Products-->
                  <!--begin::Products-->
                  <div class="card card-flush mb-8">
                     <div class="card-body align-items-center pb-0">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                           <span class="card-label fw-bold text-gray-800">Grace period type2</span>
                        </h3>
                        <!--end::Title-->   
                        <span class="text-gray-400 fw-semibold d-block fs-6">{{$onboardtype[0]['gperiod_type2']}}</span>
                     </div>
                     <!--begin::Card header-->
                     <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                           <!--begin::Search-->
                           <div class="d-flex align-items-center position-relative my-1">
                              <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                              <input type="text" data-kt-filter2="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
                           </div>
                           <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                           <!--begin::Card toolbar-->
                           <div class="card-toolbar">
                              <!--begin::Toolbar-->
                              <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                 <!--begin::Add Country-->
                                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable1">
                                 <i class="ki-duotone ki-plus fs-2"></i>Edit
                                 </button>
                                 <!--end::Add Country-->
                              </div>
                              <!--end::Toolbar-->
                              <!--begin::Modal - Add task-->
                              <div class="modal fade" tabindex="-1" id="kt_modal_scrollable1">
                                 <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title">Edit</h5>
                                          <!--begin::Close-->
                                          <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                             <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                          </div>
                                          <!--end::Close-->
                                       </div>
                                       <div class="modal-body">
                                         <!--begin::Form-->
                                          <form class="form" action = "{{ url('admin/settings/onboarding')}}" method = "post">
                                               @csrf 
                                             <!--begin::Scroll-->
                                             <div class="d-flex flex-column scroll-y me-n7 pe-7">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                   <!--begin::Label-->
                                                   <label for="kt_docs_select2_country2" class="form-label">Select a country</label>
                                                    <div class="form-floating border rounded">
                                                      <select class="form-select select_country9" name="gperiod_country" placeholder="..." id="kt_docs_select2_country2">
                                                      <option value="">Select Country</option>
                                                      @foreach(getCountryConfigList() as $con_val)
                                                                                <option value="{{$con_val->id}}" data-kt-select2-country="{{asset('/public/assets/media/flags/'.strtolower(str_replace(' ','-',$con_val->name.'.svg')))}}">{{$con_val->name}}</option>
                                                                                @endforeach
                                                      </select>
                                                   </div>
                                                   <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                   <!--begin::Label-->
                                                   <label class="required fw-semibold fs-6 mb-2">Grace Period Type 2</label>
                                                   <!--end::Label-->
                                                   <!--begin::Input-->
                                                   <input type="number" name="gperiod_type2" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Grace Period Type 2" id="dis_typetwo"/>
                                                   <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                             </div>
                                             <!--end::Scroll-->
                                             <!--begin::Actions-->
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
                                                <button type="submit" class="btn btn-primary">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                                </button>
                                             </div>
                                             <!--end::Actions-->
                                          </form>
                                          <!--end::Form-->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!--end::Modal - Add task-->
                           </div>
                           <!--end::Card toolbar-->
                        </div>
                        <!--end::Card toolbar-->
                     </div>
                     <!--end::Card header-->
                     <!--begin::Card body-->
                     <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example2">
                           <thead>
                              <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                 <th class="min-w-125px">S No.</th>
                                 <th class="min-w-125px">Country name</th>
                                 <th class="min-w-125px">Business name</th>
                                 <th class="min-w-125px">Partner Type</th>
                                 <th class="min-w-125px">Owner name</th>
                                 <th class="min-w-125px">Email</th>
                                 <th class="min-w-125px">Phone number</th>
                                 <th class="min-w-125px">Status</th>
                                 <th class="text-end min-w-100px">Actions</th>
                              </tr>
                           </thead>
                           <tbody class="text-gray-600 fw-semibold">
                           @php $countTwo=1; @endphp
                           @foreach($subtypeTwo as $typeTwo)
                             @php
                             $statusTwo = $typeTwo->is_active;
                                                    if($statusTwo==1){
                                                    $statusTwo = "Enabled";
                                                    $classTwo 	= "success";
                                                }else{
                                                $statusTwo = "Disabled";
                                                $classTwo 	= "danger";
                                            }
                             @endphp
                             <tr>
                                <td>{{$countTwo++}}</td>
                                <td>{{$typeTwo->countryname}}</td>
                                <td>{{$typeTwo->business_name}}</td>
                                <td>Salon</td>
                                <td>{{$typeTwo->name}}</td>
                                <td>{{$typeTwo->email}}</td>
                                <td>{{$typeTwo->phone}}</td>
                                <td>
                                   <div class="badge badge-light-{{$classTwo}} fw-bold">{{$statusTwo}}</div>
                                </td>
                                <td class="text-end">
                                   <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                   <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                   <!--begin::Menu-->
                                   <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                      <!--begin::Menu item-->
                                      <div class="menu-item px-3">
                                         <a href="{{ url('/admin/typeone/enable-status/'.$typeTwo->id) }}" class="menu-link px-3">Enable</a>
                                      </div>
                                      <!--end::Menu item-->
                                      <!--begin::Menu item-->
                                      <div class="menu-item px-3">
                                         <a href="{{ url('/admin/typeone/disable-status/'.$typeTwo->id) }}" class="menu-link px-3">Disable</a>
                                      </div>
                                      <!--end::Menu item-->
                                   </div>
                                   <!--end::Menu-->
                                </td>
                             </tr>
                            @endforeach  
                           </tbody>
                        </table>
                        <!--end::Table-->
                     </div>
                     <!--end::Card body-->
                  </div>
                  <!--end::Products-->
                  <!--begin::Products-->
                  <div class="card card-flush">
                     <div class="card-body align-items-center pb-0">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                           <span class="card-label fw-bold text-gray-800">On-boarding fees</span>
                        </h3>
                        <!--end::Title-->   
                        <span class="text-gray-400 fw-semibold d-block fs-6">{{$onboardtype[0]['gperiod_type3']}}</span>
                     </div>
                     <!--begin::Card header-->
                     <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                           <!--begin::Search-->
                           <div class="d-flex align-items-center position-relative my-1">
                              <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                              <input type="text" data-kt-filter3="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
                           </div>
                           <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                           <!--begin::Card toolbar-->
                           <div class="card-toolbar">
                              <!--begin::Toolbar-->
                              <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                 <!--begin::Add Country-->
                                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_2">
                                 <i class="ki-duotone ki-plus fs-2"></i>Edit
                                 </button>
                                 <!--end::Add Country-->
                              </div>
                              <!--end::Toolbar-->
                              <!--begin::Modal - Add task-->
                              <div class="modal fade" tabindex="-1" id="kt_modal_scrollable_2">
                                 <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title">Edit</h5>
                                          <!--begin::Close-->
                                          <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                             <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                          </div>
                                          <!--end::Close-->
                                       </div>
                                       <div class="modal-body">
                                          <!--begin::Form-->
                                          <form class="form" action = "{{ url('admin/settings/onboarding')}}" method = "post">
                                               @csrf 
                                             <!--begin::Scroll-->
                                             <div class="d-flex flex-column scroll-y me-n7 pe-7">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                   <!--begin::Label-->
                                                   <label for="kt_docs_select2_country3" class="form-label">Select a country</label>
                                                   <div class="form-floating border rounded">
                                                      <select class="form-select select_countryon" name="gperiod_country" placeholder="..." id="kt_docs_select2_country3">
                                                      <option value="">Select Country</option>
                                                      @foreach(getCountryConfigList() as $con_val)
                                                                                <option value="{{$con_val->id}}" data-kt-select2-country="{{asset('/public/assets/media/flags/'.strtolower(str_replace(' ','-',$con_val->name.'.svg')))}}">{{$con_val->name}}</option>
                                                                                @endforeach
                                                      </select>
                                                   </div>
                                                   <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                   <!--begin::Label-->
                                                   <label class="required fw-semibold fs-6 mb-2">On-boarding fees</label>
                                                   <!--end::Label-->
                                                   <!--begin::Input-->
                                                   <input type="number" name="gperiod_type3" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="On-boarding fees" id="dis_onboardfee"/>
                                                   <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                             </div>
                                             <!--end::Scroll-->
                                             <!--begin::Actions-->
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
                                                <button type="submit" class="btn btn-primary">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                                </button>
                                             </div>
                                             <!--end::Actions-->
                                          </form>
                                          <!--end::Form-->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!--end::Modal - Add task-->
                           </div>
                           <!--end::Card toolbar-->
                        </div>
                        <!--end::Card toolbar-->
                     </div>
                     <!--end::Card header-->
                     <!--begin::Card body-->
                     <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example3">
                           <thead>
                              <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                 <th class="min-w-125px">S No.</th>
                                 <th class="min-w-125px">Country name</th>
                                 <th class="min-w-125px">Business name</th>
                                 <th class="min-w-125px">Partner Type</th>
                                 <th class="min-w-125px">Owner name</th>
                                 <th class="min-w-125px">Email</th>
                                 <th class="min-w-125px">Phone number</th>
                                 <th class="min-w-125px">Status</th>
                                 <th class="text-end min-w-100px">Actions</th>
                              </tr>
                           </thead>
                           <tbody class="text-gray-600 fw-semibold">
                           @php $countFees=1; @endphp
                           @foreach($onboardFees as $fees)
                             @php
                             $statusFee = $fees->is_active;
                                                    if($statusFee==1){
                                                    $statusFee = "Enabled";
                                                    $classFee 	= "success";
                                                }else{
                                                $statusFee = "Disabled";
                                                $classFee 	= "danger";
                                            }
                             @endphp
                             <tr>
                                <td>{{$countFees++}}</td>
                                <td>{{$fees->countryname}}</td>
                                <td>{{$fees->business_name}}</td>
                                <td>Salon</td>
                                <td>{{$fees->name}}</td>
                                <td>{{$fees->email}}</td>
                                <td>{{$fees->phone}}</td>
                                <td>
                                   <div class="badge badge-light-{{$classFee}} fw-bold">{{$statusFee}}</div>
                                </td>
                                <td class="text-end">
                                   <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                   <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                   <!--begin::Menu-->
                                   <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                      <!--begin::Menu item-->
                                      <div class="menu-item px-3">
                                         <a href="{{ url('/admin/typeone/enable-status/'.$fees->id) }}" class="menu-link px-3">Enable</a>
                                      </div>
                                      <!--end::Menu item-->
                                      <!--begin::Menu item-->
                                      <div class="menu-item px-3">
                                         <a href="{{ url('/admin/typeone/disable-status/'.$fees->id) }}" class="menu-link px-3">Disable</a>
                                      </div>
                                      <!--end::Menu item-->
                                   </div>
                                   <!--end::Menu-->
                                </td>
                             </tr>
                            @endforeach 
                           </tbody>
                        </table>
                        <!--end::Table-->
                     </div>
                     <!--end::Card body-->
                  </div>
                  <!--end::Products-->
               </div>
               <!--end::Tab pane-->
               <!--begin::Tab pane-->
               <div class="tab-pane fade" id="subscriptioinconfig2" role="tab-panel">
                  <!--begin::Products-->
                  <div class="card card-flush">
                  @if(session()->has('message'))
            <div class="card-header display-message">
               <div class="alert alert-success">
                  {{ session()->get('message') }}
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
                     <!--begin::Card header-->
                     <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                           <!--begin::Search-->
                           <div class="d-flex align-items-center position-relative my-1">
                              <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                              <input type="text" data-kt-filter4="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search" />
                           </div>
                           <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                           <!--begin::Card toolbar-->
                           <div class="card-toolbar">
                              <!--begin::Toolbar-->
                              <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                 <!--begin::Add Country-->
                                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_3">
                                 <i class="ki-duotone ki-plus fs-2"></i>Add Subscription Plan
                                 </button>
                                 <!--end::Add Country-->
                              </div>
                              <!--end::Toolbar-->
                              <!--begin::Modal - Add task-->
                              <div class="modal fade" tabindex="-1" id="kt_modal_scrollable_3">
                                 <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title">Add Subscription Plan</h5>
                                          <!--begin::Close-->
                                          <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                             <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                          </div>
                                          <!--end::Close-->
                                       </div>
                                       <div class="modal-body">
                                          <!--begin::Form-->
                                          <form class="form" action = "{{ url('admin/settings/subscriptionplan')}}" method = "post">
                                          @csrf  
                                          <!--begin::Scroll-->
                                             <div class="d-flex flex-column scroll-y me-n7 pe-7">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                   <!--begin::Label-->
                                                   <label class="required fw-semibold fs-6 mb-2">Plan name</label>
                                                   <!--end::Label-->
                                                   <!--begin::Input-->
                                                   <input type="text" name="planname" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Plan name"/>
                                                   <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                   <!--begin::Label-->
                                                   <label class="required fw-semibold fs-6 mb-2">Cost</label>
                                                   <!--end::Label-->
                                                   <!--begin::Input-->
                                                   <input type="number" name="cost" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Cost"/>
                                                   <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                   <!--begin::Label-->
                                                   <label for="kt_docs_select2_country4" class="form-label">Select a country</label>
                                                   <div class="form-floating border rounded">
                                                      <select class="form-select" name="country" placeholder="..." id="kt_docs_select2_country4">
                                                      <option value="">Select Country</option>
                                                      @foreach(getCountryConfigList() as $con_val)
                                                      <option value="{{$con_val->id}}" data-kt-select2-country="{{asset('/assets/media/flags/'.strtolower(str_replace(' ','-',$con_val->name.'.svg')))}}">{{$con_val->name}}</option>
                                                      @endforeach
                                                      </select>
                                                   </div>
                                                   <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                   <!--begin::Label-->
                                                   <label class="required fw-semibold fs-6 mb-2">Frequency</label>
                                                   <!--end::Label-->
                                                   <!--begin::Input-->
                                                   <select aria-label="Frequency" name="frequency" data-control="select2" data-placeholder="Frequency..." class="form-select mb-2">
                                                      <option></option>
                                                      <option>Monthly</option>
                                                      <option>Quarterly</option>
                                                      <option>Half yearly</option>
                                                      <option>Yearly</option>
                                                      <option>One time</option>
                                                   </select>
                                                   <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                             </div>
                                             <!--end::Scroll-->
                                             <!--begin::Actions-->
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
                                                <button type="submit" class="btn btn-primary">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                                </button>
                                             </div>
                                             <!--end::Actions-->
                                          </form>
                                          <!--end::Form-->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!--end::Modal - Add task-->
                           </div>
                           <!--end::Card toolbar-->
                        </div>
                        <!--end::Card toolbar-->
                     </div>
                     <!--end::Card header-->
                     <!--begin::Card body-->
                     <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example4">
                           <thead>
                              <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                 <th class="min-w-125px">S No.</th>
                                 <th class="min-w-125px">Plan name</th>
                                 <th class="min-w-125px">Cost</th>
                                 <th class="min-w-125px">Frequency</th>
                                 <th class="min-w-125px">Country</th>
                                 <th class="min-w-125px">Status</th>
                                 <th class="text-end min-w-100px">Actions</th>
                              </tr>
                           </thead>
                           <tbody class="text-gray-600 fw-semibold">
                           @if( !empty($subc) )
                     @foreach($subc as $key => $sub)
                        @php
                           $status = $sub->is_active;
                           if($status == 1 ){
                              $status = "Enabled";
                              $class 	= "success";
                           }else{
                              $status = "Disabled";
                              $class 	= "danger";
                           }
                        @endphp
                     <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $sub->planname }}</td>
                        <td>{{ $sub->cost }}</td>
                        <td>{{ $sub->frequency }}</td>
                        <td>{{ $sub->country }}</td>
                        <td>
                           <div class="badge badge-light-{{ $class }} fw-bold">{{ $status }}</div>
                        </td>
                                 <td class="text-end">
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="{{ url('/admin/add-sub/enable-status/'.$sub->id) }}" class="menu-link px-3">Enable</a>
                                       </div>
                                       <!--end::Menu item-->
                                       <!--begin::Menu item-->
                                       <div class="menu-item px-3">
                                          <a href="{{ url('/admin/add-sub/disable-status/'.$sub->id) }}" class="menu-link px-3">Disable</a>
                                       </div>
                                       <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
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
                  <!--end::Products-->
               </div>
               <!--end::Tab pane--> 
               <!--begin::Tab pane-->
               <div class="tab-pane fade" id="subscriptioinconfig3" role="tab-panel">
                  <!--begin::Row-->
                  <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
                     <!--begin::Col-->
                     <div class="col-md-4">
                        <!--begin::Card-->
                        <div class="card card-flush h-md-100">
                           <!--begin::Card header-->
                           <div class="card-header">
                              <!--begin::Card title-->
                              <div class="card-title">
                                 <h2>Premium</h2>
                              </div>
                              <!--end::Card title-->
                           </div>
                           <!--end::Card header-->
                           <!--begin::Card body-->
                           <div class="card-body pt-1">
                              <!--begin::Users-->
                              <div class="fw-bold text-gray-600 mb-5">Total users with this role: 5</div>
                              <!--end::Users-->
                              <!--begin::Permissions-->
                              <div class="d-flex flex-column text-gray-600">
                                 <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>All Admin Controls
                                 </div>
                                 <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>View and Edit Financial Summaries
                                 </div>
                                 <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>Enabled Bulk Reports
                                 </div>
                                 <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>View and Edit Payouts
                                 </div>
                                 <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>View and Edit Disputes
                                 </div>
                                 <div class='d-flex align-items-center py-2'>
                                    <span class='bullet bg-primary me-3'></span>
                                    <em>and 7 more...</em>
                                 </div>
                              </div>
                              <!--end::Permissions-->
                           </div>
                           <!--end::Card body-->
                           <!--begin::Card footer-->
                           <div class="card-footer flex-wrap pt-0">
                              <a href="settings-subscription-viewrole.html" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                              <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                           </div>
                           <!--end::Card footer-->
                        </div>
                        <!--end::Card-->
                     </div>
                     <!--end::Col-->
                     <!--begin::Col-->
                     <div class="col-md-4">
                        <!--begin::Card-->
                        <div class="card card-flush h-md-100">
                           <!--begin::Card header-->
                           <div class="card-header">
                              <!--begin::Card title-->
                              <div class="card-title">
                                 <h2>Advance</h2>
                              </div>
                              <!--end::Card title-->
                           </div>
                           <!--end::Card header-->
                           <!--begin::Card body-->
                           <div class="card-body pt-1">
                              <!--begin::Users-->
                              <div class="fw-bold text-gray-600 mb-5">Total users with this role: 14</div>
                              <!--end::Users-->
                              <!--begin::Permissions-->
                              <div class="d-flex flex-column text-gray-600">
                                 <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>Some Admin Controls
                                 </div>
                                 <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>View Financial Summaries only
                                 </div>
                                 <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>View and Edit API Controls
                                 </div>
                                 <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>View Payouts only
                                 </div>
                                 <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>View and Edit Disputes
                                 </div>
                                 <div class='d-flex align-items-center py-2'>
                                    <span class='bullet bg-primary me-3'></span>
                                    <em>and 3 more...</em>
                                 </div>
                              </div>
                              <!--end::Permissions-->
                           </div>
                           <!--end::Card body-->
                           <!--begin::Card footer-->
                           <div class="card-footer flex-wrap pt-0">
                              <a href="settings-subscription-viewrole.html" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                              <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                           </div>
                           <!--end::Card footer-->
                        </div>
                        <!--end::Card-->
                     </div>
                     <!--end::Col-->
                     <!--begin::Col-->
                     <div class="col-md-4">
                        <!--begin::Card-->
                        <div class="card card-flush h-md-100">
                           <!--begin::Card header-->
                           <div class="card-header">
                              <!--begin::Card title-->
                              <div class="card-title">
                                 <h2>Basic</h2>
                              </div>
                              <!--end::Card title-->
                           </div>
                           <!--end::Card header-->
                           <!--begin::Card body-->
                           <div class="card-body pt-1">
                              <!--begin::Users-->
                              <div class="fw-bold text-gray-600 mb-5">Total users with this role: 4</div>
                              <!--end::Users-->
                              <!--begin::Permissions-->
                              <div class="d-flex flex-column text-gray-600">
                                 <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>No Admin Controls
                                 </div>
                                 <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>View and Edit Financial Summaries
                                 </div>
                                 <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>Enabled Bulk Reports
                                 </div>
                                 <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>View Payouts only
                                 </div>
                                 <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>View Disputes only
                                 </div>
                                 <div class='d-flex align-items-center py-2'>
                                    <span class='bullet bg-primary me-3'></span>
                                    <em>and 2 more...</em>
                                 </div>
                              </div>
                              <!--end::Permissions-->
                           </div>
                           <!--end::Card body-->
                           <!--begin::Card footer-->
                           <div class="card-footer flex-wrap pt-0">
                              <a href="settings-subscription-viewrole.html" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                              <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                           </div>
                           <!--end::Card footer-->
                        </div>
                        <!--end::Card-->
                     </div>
                     <!--end::Col-->
                  </div>
                  <!--end::Row-->
                  <!--begin::Products-->
                  <div class="card card-flush">
                     <!--begin::Card header-->
                     <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                           <!--begin::Search-->
                           <div class="d-flex align-items-center position-relative my-1">
                              <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                              <input type="text" data-kt-filter5="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search" />
                           </div>
                           <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                     </div>
                     <!--end::Card header-->
                     <!--begin::Card body-->
                     <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example5">
                           <thead>
                              <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                 <th class="min-w-125px">S No.</th>
                                 <th class="min-w-125px">Plan name</th>
                                 <th class="min-w-125px">Cost</th>
                                 <th class="min-w-125px">Frequency</th>
                                 <th class="min-w-125px">Country</th>
                                 <th class="text-end"></th>
                              </tr>
                           </thead>
                           <tbody class="text-gray-600 fw-semibold">
                              <tr>
                                 <td>1</td>
                                 <td>Basic</td>
                                 <td>Rs 500</td>
                                 <td>Monthly</td>
                                 <td>America</td>
                                 <td class="text-end">
                                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Edit</a>
                                    <!--end::Menu-->
                                 </td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td>Advanced</td>
                                 <td>Rs 1000</td>
                                 <td>Yearly</td>
                                 <td>India</td>
                                 <td class="text-end">
                                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Edit</a>
                                    <!--end::Menu-->
                                 </td>
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td>Basic</td>
                                 <td>Rs 500</td>
                                 <td>Quarterly</td>
                                 <td>America</td>
                                 <td class="text-end">
                                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Edit</a>
                                    <!--end::Menu-->
                                 </td>
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td>Advanced</td>
                                 <td>Rs 750</td>
                                 <td>One time</td>
                                 <td>Argentina</td>
                                 <td class="text-end">
                                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Edit</a>
                                    <!--end::Menu-->
                                 </td>
                              </tr>
                              <tr>
                                 <td>5</td>
                                 <td>Basic</td>
                                 <td>Rs 500</td>
                                 <td>Monthly</td>
                                 <td>America</td>
                                 <td class="text-end">
                                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Edit</a>
                                    <!--end::Menu-->
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <!--end::Table-->
                     </div>
                     <!--end::Card body-->
                  </div>
                  <!--end::Products-->
               </div>
               <!--end::Tab pane-->
            </div>
            <!--end::Tab content-->
         </div>
         <!--end::Main column-->
      </div>
      <!--end::Content container-->
   </div>
   <!--end::Content-->
</div>
<!--end::Content wrapper-->
</div>
<!--end:::Main-->

@endsection
