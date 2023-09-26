@extends('admin.layouts.auth.app')
@section('content')

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
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Recommended Partners</h1>
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
						<li class="breadcrumb-item text-muted">Recommended Partners</li>
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
				@include('admin.services.tab')
				<!--end::Navbar-->




              <div class="card card-flush">
              <form class="form" action = "{{ url('admin/services/recommendedpackage')}}" method = "post">
                        @csrf  
                        <div class="card-body align-items-center py-10">
                              <h1 class="fw-bold text-dark mb-9">Add package</h1>
                              @if(session()->has('messagerp'))
                           <div class="card-header display-message">
                                 <div class="alert alert-success">
                              {{ session()->get('messagerp') }}
                              </div>
                           </div>
                           @endif
                              <div class="row">
                                 <div class="col-md-3 fv-row mb-7">
                                    <h3 class="card-title align-items-start flex-column">
                                       <span class="card-label fw-bold text-gray-800 mb-4">Package Name</span>
                                    </h3>
                                 </div>
                                 <div class="col-md-9">
                                    <div class="row">
                                       <div class="col-md-6 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Package name</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <input type="text" name="packagename" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Package name" autocomplete="off" required/>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                       <div class="col-md-6 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Gender</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <select aria-label="Gender" name="gender" data-control="select2" data-placeholder="Gender..." class="form-select mb-2" required>
                                                <option></option>
                                                <option value="Unisex">Unisex</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                             </select>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3 fv-row mb-7">
                                    <h3 class="card-title align-items-start flex-column">
                                       <span class="card-label fw-bold text-gray-800 mb-4">Package Category</span>
                                    </h3>
                                 </div>
                                 <div class="col-md-9">
                                    <div class="row">
                                       <div class="col-md-6 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Category</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <select aria-label="Category" name="categoryid" data-control="select2" data-placeholder="Category..." class="form-select mb-2 select_category2" required>
                                             @foreach($catactive as $serc)     
                                                      <option></option>
                                                         <option value="{{$serc->id}}">{{$serc->category}}</option>
                                                         <!-- <option value="2">Face Care</option>
                                                         <option value="3">Nail</option> -->
                                                     @endforeach
                                             </select>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                       <div class="col-md-6 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Sub Category</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <select aria-label="Sub Category" name="getdis_subcategory" id="getdis_subcategory" data-control="select2" data-placeholder="Sub Category..." class="form-select mb-2 select_subcategory">
                                                
                                             </select>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3 fv-row mb-7">
                                    <h3 class="card-title align-items-start flex-column">
                                       <span class="card-label fw-bold text-gray-800 mb-4">Add Service</span>
                                    </h3>
                                 </div>
                                 <div class="col-md-9">
                                    <div class="row">
                                       <div class="col-12 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Select Service</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <select class="form-select form-select-solid" name="dis_service[]" id="dis_service" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple" required>
                                             
                                             <!-- <option></option>
                                                <option value="1">Hair Cut Style</option>
                                                <option value="2">Children Hair Cut</option>
                                                <option value="3">Men Hair Cut</option>
                                                <option value="4">Women Hair Cut</option> -->

                                            
                                             </select>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3 fv-row mb-7">
                                    <h3 class="card-title align-items-start flex-column">
                                       <span class="card-label fw-bold text-gray-800 mb-4">Select Audience</span>
                                    </h3>
                                 </div>
                                 <div class="col-md-9">
                                    <div class="row">
                                       <div class="col-md-4 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Partner type</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <select class="form-select form-select-solid" name="partnerid[]" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple" required>
                                             @foreach($pt as $p) 
                                             <option value="{{$p->id}}">{{$p->partner_name}}</option>  
                                             <!-- <option></option>
                                                <option value="1">Salon</option>
                                                <option value="2">Freelancer</option>
                                                <option value="3">Salon with home service</option> -->
                                             @endforeach
                                             </select>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                       <div class="col-md-4 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Business type</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <select class="form-select form-select-solid" name="businesstypeid[]" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple" required>
                                                <!-- <option></option> -->
                                               @foreach($bt as $b)
                                                <option value="{{$b->bt_id}}">{{$b->businesstype}}</option>
                                             @endforeach
                                             </select>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                       <div class="col-md-4 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Unique id</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <input type="text" name="uniqueid" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Unique id"  required/>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3 fv-row mb-7">
                                    <h3 class="card-title align-items-start flex-column">
                                       <span class="card-label fw-bold text-gray-800 mb-4">Discount</span>
                                    </h3>
                                 </div>
                                 <div class="col-md-9">
                                    <div class="row">
                                       <div class="col-md-4 fv-row mb-7">
                                          <!--begin::Input group-->
                                          <div class="fv-row">
                                             <!--begin::Label-->
                                             <label class="required fw-semibold fs-6 mb-2">Discount</label>
                                             <!--end::Label-->
                                             <!--begin::Input-->
                                             <input type="text" name="discount" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Discount" required/>
                                             <!--end::Input-->
                                          </div>
                                          <!--end::Input group-->
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3 fv-row offset-md-3">
                                    <button type="submit" class="btn btn-primary mt-5">
                                       <!--begin::Indicator label-->
                                       <span class="indicator-label">Save</span>
                                       <!--end::Indicator label-->
                                       <!--begin::Indicator progress-->
                                       <span class="indicator-progress">Please wait...
                                       <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                       <!--end::Indicator progress-->
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                     <!--begin::Products-->
                     <div class="card card-flush mt-8">
                        <div class="card-header">
                           <h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Manage Package</h2>
                        </div>
                        @if(session()->has('messagestatusrp'))
               <div class="card-header display-message">
                  <div class="alert alert-success">
                     {{ session()->get('messagestatusrp') }}
                  </div>
               </div>
               @endif
               @if(session()->has('errorstatusrp'))
               <div class="card-header display-message">
                  <div class="alert alert-success">
                     {{ session()->get('errorstatusrp') }}
                  </div>
               </div>
               @endif
                        <!--begin::Card header-->
                        <div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-5">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <!--begin::Search-->
                              <div class="d-flex align-items-center position-relative my-1">
                                 <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                 <input type="text" data-kt-filter-subtable2="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
                              </div>
                              <!--end::Search-->
                           </div>
                           <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_docs_datatable_subtable2">
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
                                    <th class="text-end"></th>
                                 </tr>
                                 <!--end::Table row-->
                              </thead>
                              <!--end::Table head-->
                              <!--begin::Table body-->
                              <tbody class="fw-bold text-gray-600">
                              @if( !empty($rp) )
                        @foreach($rp as $key => $r)
                           @php 
                              $status1 = $r->is_active;
                              if($status1 == 1 ){
                                 $status1 = "Enabled";
                                 $class   = "success";
                              }else{
                                 $status1 = "Disabled";
                                 $class   = "danger";
                              }
                           @endphp   
                              <!--begin::SubTable template-->
                                 <tr data-kt-docs-datatable-subtable="subtable_template">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{$r->created_at->format('d M Y, g:i a')}}</td>
                                    <td>{{$r->packagename}}</td>
                                    <td>{{$r->gender}}</td>
                                    <td>{{$r->discount}}</td>
                                    <td>
                                       <div class="badge badge-light-{{$class}} fw-bold">{{$status1}}</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="{{ url('/admin/rp/enable-status/'.$r->rp_id) }}" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="{{ url('/admin/rp/disable-status/'.$r->rp_id) }}" class="menu-link px-3">Disable</a>
                                          </div>
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                    <td>
                                       <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-docs-datatable-subtable="expand_row">
                                       <span class="svg-icon fs-3 m-0 toggle-off">...</span>
                                       <span class="svg-icon fs-3 m-0 toggle-on">...</span>
                                       </button>
                                    </td>
                                 </tr>
                                 <!--end::SubTable template-->
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

@endsection

