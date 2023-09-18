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
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">User Authorization</h1>
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
                     <a href="{{ route('staff.index') }}" class="text-muted text-hover-primary">Staff</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">User Authorization</li>
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
                  <div class="card-header pt-7 min-h-60px">
                     <div class="title">
                        <h3 class="mb-0">
                           <span class="card-label fw-bold text-gray-800 fs-3">User authorization</span>
                        </h3>
                     </div>
                  </div>
                  <!--begin::Card body-->
                  <div class="card-body pt-0">
                     <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-bordered align-middle fs-6 gy-5 mt-7">
                           <!--begin::Table head-->
                           <thead>
                              <!--begin::Table row-->
                              <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                 <th class=""></th>
                                 <th class=""></th>
                                 <th class="">
                                    <strong>Owner</strong>
                                 </th>
                                 <th class="">
                                    <strong>Manager</strong>
                                 </th>
                              </tr>
                              <!--end::Table row-->
                           </thead>
                           <!--end::Table head-->
                           <tbody class="fw-bold text-gray-600">
                              <tr>
                                 <td>
                                    <strong>Access all locations</strong>
                                 </td>
                                 <td></td>
                                 <td>Multiple</td>
                                 <td>Multiple / Single</td>
                              </tr>
                              <tr>
                                 <td>Menu links</td>
                                 <td>Links & button inside the menu pages</td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              @foreach(userAuthorization() as $page => $subpages)
                              
                              <tr>
                                 <td>{{ $page }}</td>
                                 <td></td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid on-status-check">
                                       <input class="form-check-input user-auth-permission" type="checkbox" name="property_value[{{$page}}]" data-role="1" data-page="{{$page}}" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid on-status-check">
                                       <input class="form-check-input user-auth-permission" type="checkbox" name="property_value[{{$page}}]" data-role="2" data-page="{{$page}}"/>
                                    </label>
                                 </td>
                              </tr>
                              @foreach( $subpages as $key => $subpage )
                              <tr>
                                 <td></td>
                                 <td>{{ $subpage }}</td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid on-status-check">
                                       <input class="form-check-input user-auth-permission" type="checkbox" name="property_value[{{$page}}][{{$subpage}}]" data-role="1" data-page="{{$page}}" data-subpage="{{$subpage}}" />
                                    </label>
                                 </td>
                                 <td>
                                    <label class="form-check form-switch form-check-custom form-check-solid on-status-check">
                                       <input class="form-check-input user-auth-permission" name="property_value[{{$page}}][{{$subpage}}]" type="checkbox" data-page="{{$page}}" data-subpage="{{$subpage}}" data-role="2" />
                                    </label>
                                 </td>
                              </tr>
                              @endforeach
                              @endforeach
                           </tbody>
                        </table>
                     
                        <!--end::Table-->
                     </div>
                  </div>
                  <!--end::Card body-->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--end:::Main-->

@endsection

@push('scripts')
<script src="{{asset('/public/assets/js/partner/user-authorization.js')}}" type="text/javascript"></script>
@endpush()