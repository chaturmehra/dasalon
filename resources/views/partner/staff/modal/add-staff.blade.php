<div class="modal fade" id="kt_modal_scrollable22" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-xl">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="fw-bold text-dark">Add Staff details</h1>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <!--begin::Scroll-->
            <div class="d-flex flex-column scroll-y me-n7 pe-7">
               <!--begin::Form-->
               <form class="form d-flex flex-column flex-lg-row">
                  <!--begin::Aside column-->
                  <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-400px mb-7 me-lg-10">
                     <!--begin::Thumbnail settings-->
                     <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <h2>Profile Image</h2>
                           </div>
                           <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                           <!--begin::Image input-->
                           <!--begin::Image input placeholder-->
                           <style>.image-input-placeholder { background-image: url({{ asset('/public/assets/media/svg/files/blank-image.svg') }}; } [data-bs-theme="dark"] .image-input-placeholder { background-image: url({{ asset('/public/assets/media/svg/files/blank-image-dark.svg') }}; }</style>
                           <!--end::Image input placeholder-->
                           <!--begin::Image input-->
                           <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                              <!--begin::Preview existing avatar-->
                              <div class="image-input-wrapper w-150px h-150px"></div>
                              <!--end::Preview existing avatar-->
                              <!--begin::Label-->
                              <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                 <!--begin::Icon-->
                                 <i class="ki-duotone ki-pencil fs-7">
                                 <span class="path1"></span>
                                 <span class="path2"></span>
                                 </i>
                                 <!--end::Icon-->
                                 <!--begin::Inputs-->
                                 <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                 <input type="hidden" name="avatar_remove" />
                                 <!--end::Inputs-->
                              </label>
                              <!--end::Label-->
                              <!--begin::Cancel-->
                              <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                              <i class="ki-duotone ki-cross fs-2">
                              <span class="path1"></span>
                              <span class="path2"></span>
                              </i>
                              </span>
                              <!--end::Cancel-->
                              <!--begin::Remove-->
                              <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                              <i class="ki-duotone ki-cross fs-2">
                              <span class="path1"></span>
                              <span class="path2"></span>
                              </i>
                              </span>
                              <!--end::Remove-->
                           </div>
                           <!--end::Image input-->
                           <!--begin::Description-->
                           <div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                           <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                     </div>
                     <!--end::Thumbnail settings-->
                     <!--begin::Status-->
                     <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <h2 class="required fs-3">Role</h2>
                           </div>
                           <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <!--begin::Select2-->
                           <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
                              <option></option>
                              <option value="published" selected="selected">Role1</option>
                              <option value="draft">Role2</option>
                              <option value="scheduled">Role3</option>
                           </select>
                           <!--end::Select2-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card header-->
                        <div class="card-header">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <h2 class="required fs-3">Online Status</h2>
                           </div>
                           <!--end::Card title-->
                           <div class="card-toolbar">
                              <label class="form-check form-switch form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="" checked="checked" />
                              </label>
                           </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <!--begin::Description-->
                           <div class="text-muted fs-7">The staff will be eligible for online booking if enabled.</div>
                           <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card header-->
                        <div class="card-header">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <h2 class="required fs-3">Staff Status</h2>
                           </div>
                           <!--end::Card title-->
                           <div class="card-toolbar">
                              <label class="form-check form-switch form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="" checked="checked" />
                              </label>
                           </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <!--begin::Description-->
                           <div class="text-muted fs-7">Status of the Staff in the system</div>
                           <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card header-->
                        <div class="card-header">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <h2 class="fs-3">Joining date</h2>
                           </div>
                           <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <input class="form-control kt_datepicker" placeholder="Joining date"/> 
                        </div>
                        <!--end::Card body-->
                     </div>
                     <!--end::Status-->
                     <!--begin::Location-->
                     <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <h2 class="fs-3">Commission%</h2>
                           </div>
                           <!--end::Card title-->
                           <div class="ht-fc">
                              <a href="#" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#commission" data-bs-dismiss="modal">Add</a>
                           </div>
                        </div>
                        <!--end::Card header-->
                     </div>
                     <!--end::Location-->
                     <!--begin::Location-->
                     <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <div class="d-flex flex-column gap-1">
                                 <h2 class="required fs-3">Venues</h2>
                                 <span class="text-gray-400 fs-7">Assign different venues to the staff</span>
                              </div>
                           </div>
                           <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <div class="row">
                              <!--begin::Col-->
                              <div class="col-md-12 mb-5">
                                 <!--begin::Option-->
                                 <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center flex-wrap">
                                    <!--begin::Radio-->
                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                    <input class="form-check-input" type="checkbox" value="" checked/>
                                    </span>
                                    <!--end::Radio-->
                                    <div class="quantity-icn ms-3">
                                       <img src="{{asset('/public/partner/assets/media/svg/salon.svg')}}">
                                    </div>
                                    <!--begin::Info-->
                                    <span class="mt-3 w-100">
                                       <h3 class="card-title align-items-start flex-column">
                                          <span class="card-label fw-bold text-gray-800 fs-4 mb-4">Alexandra road</span>
                                          <span class="text-muted d-block fw-light fs-7 mt-1">Alexandra Central Mall, 321 Alexandra Road, Singapore (Bukit Merah)
                                          </span>
                                       </h3>
                                    </span>
                                    <!--end::Info-->
                                 </label>
                                 <!--end::Option-->
                              </div>
                              <!--end::Col-->
                              <!--begin::Col-->
                              <div class="col-md-12">
                                 <!--begin::Option-->
                                 <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center flex-wrap">
                                    <!--begin::Radio-->
                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckVenue2" checked/>
                                    </span>
                                    <!--end::Radio-->
                                    <div class="quantity-icn ms-3">
                                       <img src="{{asset('/public/partner/assets/media/svg/salon.svg')}}">
                                    </div>
                                    <!--begin::Info-->
                                    <span class="mt-3 w-100">
                                       <h3 class="card-title align-items-start flex-column">
                                          <span class="card-label fw-bold text-gray-800 fs-4 mb-4">YJ Salons - Punggol</span>
                                          <span class="text-muted d-block fw-light fs-7 mt-1">Punggol Park, Hougang Avenue 10, Singapore (Hougang)
                                          </span>
                                       </h3>
                                    </span>
                                    <!--end::Info-->
                                 </label>
                                 <!--end::Option-->
                              </div>
                              <!--end::Col-->
                           </div>
                        </div>
                        <!--end::Card body-->
                     </div>
                     <!--end::Location-->
                  </div>
                  <!--end::Aside column-->
                  <!--begin::Main column-->
                  <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10 w-75">
                     <div class="d-flex flex-column gap-7 gap-lg-10">
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                           <!--begin::Card body-->
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-6 mb-7">
                                    <div class="card-title">
                                       <h2 class="required fs-3">Staff name</h2>
                                    </div>
                                    <div class="fv-row">
                                       <!--begin::Input-->
                                       <input type="text" class="form-control form-control-solid" name="input2" placeholder="Staff Name" value=""/>
                                       <!--end::Input-->
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-7">
                                    <div class="card-title">
                                       <h2 class="required fs-3">Gender</h2>
                                    </div>
                                    <div class="fv-row">
                                       <!--begin::Input-->
                                       <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select Role" data-hide-search="true">
                                          <option></option>
                                          <option value="1">Male</option>
                                          <option value="2">Female</option>
                                          <option value="2">Non binary</option>
                                          <option value="2">Others</option>
                                       </select>
                                       <!--end::Input-->
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-7 mb-md-0">
                                    <div class="card-title">
                                       <h2 class="required fs-3">Phone no.</h2>
                                    </div>
                                    <div class="fv-row">
                                       <!--begin::Input-->
                                       <input type="text" class="form-control form-control-solid" name="input2" placeholder="Phone no." value=""/>
                                       <!--end::Input-->
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="card-title">
                                       <h2 class="required fs-3">Email</h2>
                                    </div>
                                    <div class="fv-row">
                                       <!--begin::Input-->
                                       <input type="email" class="form-control form-control-solid" name="input2" placeholder="Email" value=""/>
                                       <!--end::Input-->
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <a href="#" class="d-flex align-items-center gap-2 icnclr pt-0 pb-0 mt-7 justify-content-end" data-bs-toggle="modal" data-bs-target="#synccalendar">
                                    <i class="bi bi-plus-circle fs-2"></i>
                                    <span>Sync a calendar</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <!--begin::Card header-->
                           <div class="card-header">
                              <div class="card-title">
                                 <h2 class="fs-3">Profile (optional)</h2>
                              </div>
                           </div>
                           <!--end::Card header-->
                           <!--begin::Card body-->
                           <div class="card-body pt-0">
                              <!--begin::Input group-->
                              <div class="fv-row">
                                 <!--begin::Input-->
                                 <textarea class="form-control mb-2" data-kt-autosize="true" placeholder="Description"></textarea>
                                 <!--end::Input-->
                              </div>
                              <!--end::Input group-->
                           </div>
                           <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                           <!--begin::Card body-->
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-6 mb-7 mb-md-0">
                                    <div class="card-title">
                                       <h2 class="required fs-3">Facebook</h2>
                                    </div>
                                    <div class="fv-row">
                                       <!--begin::Input-->
                                       <input type="text" class="form-control form-control-solid" name="input2" placeholder="Facebook" value=""/>
                                       <!--end::Input-->
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="card-title">
                                       <h2 class="required fs-3">Instagram</h2>
                                    </div>
                                    <div class="fv-row">
                                       <!--begin::Input-->
                                       <input type="text" class="form-control form-control-solid" name="input2" placeholder="Instagram" value=""/>
                                       <!--end::Input-->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--end::General options-->
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                           <div class="card-body">
                              <div class="d-flex flex-column w-100">
                                 <h3 class="card-title mb-7">
                                    <span class="card-label fw-bold text-gray-800">Working days</span>
                                 </h3>
                                 <div class="d-flex align-items-center flex-wrap gap-4 mb-10">
                                    <div class="form-check d-flex align-items-center gap-5 px-0 staffworkingdays">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="selhours1" onchange="showStaffDataN(this)" />
                                          <label class="form-check-label" for="selhours1">
                                          Mon
                                          </label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="selhours2" onchange="showStaffDataN(this)"/>
                                          <label class="form-check-label" for="selhours2">
                                          Tue
                                          </label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="selhours3" onchange="showStaffDataN(this)"/>
                                          <label class="form-check-label" for="selhours3">
                                          Wed
                                          </label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="selhours4" onchange="showStaffDataN(this)"/>
                                          <label class="form-check-label" for="selhours4">
                                          Thu
                                          </label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="selhours5" onchange="showStaffDataN(this)"/>
                                          <label class="form-check-label" for="selhours5">
                                          Fri
                                          </label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="selhours6" onchange="showStaffDataN(this)"/>
                                          <label class="form-check-label" for="selhours6">
                                          Sat
                                          </label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="selhours7" onchange="showStaffDataN(this)"/>
                                          <label class="form-check-label" for="selhours7">
                                          Sun
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="d-flex">
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" onchange="showStaffSettingDiv(this)"/>
                                    <span class="form-check-label">
                                    Advance setting
                                    </span>
                                    </label>
                                 </div>
                                 <div class="staff-add-setting-div d-none">
                                    <div class="row">
                                       <div class="col-md-12 mb-7">
                                          <div class="card card-body">
                                             <div class="row">
                                                <div class="col-md-4 mb-7 mb-md-0">
                                                   <!--begin::Label-->
                                                   <label class="required fw-semibold fs-6 mb-2">Schedule type</label>
                                                   <!--end::Label-->
                                                   <!--begin::Input-->
                                                   <select class="form-select" data-control="select2" data-placeholder="Every week" data-dropdown-parent="#kt_modal_scrollable22" onchange="weekSelect(this)">
                                                      <option></option>
                                                      <option value="1">Every week</option>
                                                      <option value="2">Every two week</option>
                                                      <option value="3">Every three week</option>
                                                      <option value="4">Every month</option>
                                                      <option value="5">Every six month</option>
                                                   </select>
                                                   <!--end::Input-->
                                                </div>
                                                <div class="col-md-4 mb-7 mb-md-0">
                                                   <label for="" class="form-label">Start date</label>
                                                   <input class="form-control kt_datepicker w-100" placeholder="Start date"/> 
                                                </div>
                                                <div class="col-md-4">
                                                   <!--begin::Label-->
                                                   <label class="required fw-semibold fs-6 mb-2">Ends</label>
                                                   <!--end::Label-->
                                                   <div class="d-flex gap-4 posrel d-none">
                                                      <input class="form-control kt_datepicker w-100" placeholder="End date"/> 
                                                      <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto endsbtncls" onclick="delworkinghrend(this)">
                                                         <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                      </div>
                                                   </div>
                                                   <div>
                                                      <!--begin::Input-->
                                                      <select class="form-select end-date" data-control="select2" data-dropdown-parent="#kt_modal_scrollable22" data-placeholder="Ends" onchange="workinghrend(this)">
                                                         <option></option>
                                                         <option value="1">Never</option>
                                                         <option value="2">Specific date</option>
                                                      </select>
                                                      <!--end::Input-->
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="card card-body advancesettingdiv">
                                             <div class="d-flex flex-column add-staff-days gap-5">
                                                <div class="d-flex justify-content-between staff-ind-shift flex-wrap d-none">
                                                   <div class="workingdays d-flex flex-column">
                                                      <h4>Monday</h4>
                                                      <span attr-hour="hour">hours</span>
                                                   </div>
                                                   <div class="d-flex flex-column gap-3">
                                                      <div class="d-flex flex-wrap gap-5 single-add-shift-div">
                                                         <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                            <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="start"/>
                                                            <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                            </span>
                                                         </div>
                                                         <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                            <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="end"/>
                                                            <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                            </span>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto btncls" onclick="delStaffTime(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" onclick="duplicateStaffTime(this)" class="mt-3">Add a shift</a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="d-flex justify-content-between staff-ind-shift flex-wrap d-none">
                                                   <div class="workingdays d-flex flex-column">
                                                      <h4>Tuesday</h4>
                                                      <span attr-hour="hour">hours</span>
                                                   </div>
                                                   <div class="d-flex flex-column gap-3">
                                                      <div class="d-flex flex-wrap gap-5 single-add-shift-div">
                                                         <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                            <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="start"/>
                                                            <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                            </span>
                                                         </div>
                                                         <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                            <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="end"/>
                                                            <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                            </span>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto btncls" onclick="delStaffTime(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" onclick="duplicateStaffTime(this)" class="mt-3">Add a shift</a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="d-flex justify-content-between staff-ind-shift flex-wrap d-none">
                                                   <div class="workingdays d-flex flex-column">
                                                      <h4>Wednessday</h4>
                                                      <span attr-hour="hour">hours</span>
                                                   </div>
                                                   <div class="d-flex flex-column gap-3">
                                                      <div class="d-flex flex-wrap gap-5 single-add-shift-div">
                                                         <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                            <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="start"/>
                                                            <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                            </span>
                                                         </div>
                                                         <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                            <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="end"/>
                                                            <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                            </span>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto btncls" onclick="delStaffTime(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" onclick="duplicateStaffTime(this)" class="mt-3">Add a shift</a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="d-flex justify-content-between staff-ind-shift flex-wrap d-none">
                                                   <div class="workingdays d-flex flex-column">
                                                      <h4>Thursday</h4>
                                                      <span attr-hour="hour">hours</span>
                                                   </div>
                                                   <div class="d-flex flex-column gap-3">
                                                      <div class="d-flex flex-wrap gap-5 single-add-shift-div">
                                                         <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                            <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="start"/>
                                                            <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                            </span>
                                                         </div>
                                                         <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                            <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="end"/>
                                                            <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                            </span>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto btncls" onclick="delStaffTime(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" onclick="duplicateStaffTime(this)" class="mt-3">Add a shift</a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="d-flex justify-content-between staff-ind-shift flex-wrap d-none">
                                                   <div class="workingdays d-flex flex-column">
                                                      <h4>Friday</h4>
                                                      <span attr-hour="hour">hours</span>
                                                   </div>
                                                   <div class="d-flex flex-column gap-3">
                                                      <div class="d-flex flex-wrap gap-5 single-add-shift-div">
                                                         <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                            <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="start"/>
                                                            <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                            </span>
                                                         </div>
                                                         <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                            <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="end"/>
                                                            <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                            </span>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto btncls" onclick="delStaffTime(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" onclick="duplicateStaffTime(this)" class="mt-3">Add a shift</a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="d-flex justify-content-between staff-ind-shift flex-wrap d-none">
                                                   <div class="workingdays d-flex flex-column">
                                                      <h4>Saturday</h4>
                                                      <span attr-hour="hour">hours</span>
                                                   </div>
                                                   <div class="d-flex flex-column gap-3">
                                                      <div class="d-flex flex-wrap gap-5 single-add-shift-div">
                                                         <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                            <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="start"/>
                                                            <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                            </span>
                                                         </div>
                                                         <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                            <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="end"/>
                                                            <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                            </span>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto btncls" onclick="delStaffTime(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" onclick="duplicateStaffTime(this)" class="mt-3">Add a shift</a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="d-flex justify-content-between staff-ind-shift flex-wrap d-none">
                                                   <div class="workingdays d-flex flex-column">
                                                      <h4>Sunday</h4>
                                                      <span attr-hour="hour">hours</span>
                                                   </div>
                                                   <div class="d-flex flex-column gap-3">
                                                      <div class="d-flex flex-wrap gap-5 single-add-shift-div">
                                                         <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                            <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="start"/>
                                                            <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                            </span>
                                                         </div>
                                                         <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                            <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="end"/>
                                                            <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                            <i class="ki-outline ki-time fs-3"></i>
                                                            </span>
                                                         </div>
                                                         <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto btncls" onclick="delStaffTime(this)">
                                                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" onclick="duplicateStaffTime(this)">Add a shift</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
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
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                     </div>
                  </div>
                  <!--end::Main column-->
               </form>
               <!--end::Form-->
            </div>
            <!--end::Scroll-->
         </div>
      </div>
   </div>
</div>