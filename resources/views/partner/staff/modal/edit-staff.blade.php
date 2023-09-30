<div class="modal fade" id="kt_modal_update_scrollable22" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-xl">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="fw-bold text-dark">Update Staff details</h1>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 close_form" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <!--begin::Scroll-->
            <div class="d-flex flex-column scroll-y me-n7 pe-7">
               <!--begin::Form-->
               <form class="form d-flex flex-column flex-lg-row" method="post" action="{{ url('partner/staff/update-staff') }}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="user_id" id="edit_staff_id">
                  <input type="hidden" name="staff_id" id="main_staff_id">
                  <input type="hidden" name="commission_data" id="edit_commission_data">
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
                              <div class="image-input-wrapper w-150px h-150px edit-profile-image"></div>
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
                                 <input type="file" name="profile_image" accept=".png, .jpg, .jpeg" />
                                 <input type="hidden" name="old_profile_image" id="old_profile_image" />
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
                           <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="staff_role" required="required" id="edit-role">
                              <option value="">Please select role</option>
                              @if(!empty($roles))
                              @foreach($roles as $key => $role)
                              @if($role->role_name != "Owner")
                              <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                              @endif
                              @endforeach
                              @endif
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
                              <input class="form-check-input" type="checkbox" name="online_status" id="edit-online-status" />
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
                              <input class="form-check-input" type="checkbox" name="staff_status" id="edit-staff-status" />
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
                           <input class="form-control kt_datepicker" placeholder="Joining date" name="joining_date" id="edit-joining-date" /> 
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
                              <a href="javascript:void(0)" class="btn btn-sm btn-secondary get-commission-by-id" data-bs-toggle="modal" data-bs-target="#edit-commission" data-bs-dismiss="modal">Edit</a>
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
                              @if(!empty($venue_data_arr))
                              @foreach($venue_data_arr as $key => $venue_data)
                              <!--begin::Col-->
                              <div class="col-md-12 mb-5">
                                 <!--begin::Option-->
                                 <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 align-items-center flex-wrap">
                                    <!--begin::Radio-->
                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                    <input class="form-check-input edit-venues" type="checkbox" name="venues[]" value="{{ $venue_data['id'] }}" />
                                    </span>
                                    <!--end::Radio-->
                                    @if( !empty($venue_data['venue_meta']['featured']) )
                                    <div class="quantity-icn ms-3">
                                       <img src="{{ asset('/public/'. $venue_data['venue_meta']['featured']) }}">
                                    </div>
                                    @endif
                                    <!--begin::Info-->
                                    <span class="mt-3 w-100">
                                       <h3 class="card-title align-items-start flex-column">
                                          <span class="card-label fw-bold text-gray-800 fs-4 mb-4">{{ isset($venue_data['name']) ? $venue_data['name'] : "" }}</span>
                                          <span class="text-muted d-block fw-light fs-7 mt-1">{{ isset($venue_data['venue_meta']['business_address']) ? $venue_data['venue_meta']['business_address'] : "" }}
                                          </span>
                                       </h3>
                                    </span>
                                    <!--end::Info-->
                                 </label>
                                 <!--end::Option-->
                              </div>
                              <!--end::Col-->
                              @endforeach
                              @endif

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
                                       <input type="text" class="form-control form-control-solid" name="name" placeholder="Staff Name" id="edit-staff-name" required="required" />
                                       <!--end::Input-->
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-7">
                                    <div class="card-title">
                                       <h2 class="required fs-3">Gender</h2>
                                    </div>
                                    <div class="fv-row">
                                       <!--begin::Input-->
                                       <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select Role" data-hide-search="true" name="gender" required="required" id="edit-gender">
                                          <option value="">Please select</option>
                                          <option value="Male">Male</option>
                                          <option value="Female">Female</option>
                                          <option value="Non binary">Non binary</option>
                                          <option value="Others">Others</option>
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
                                       <input type="text" class="form-control form-control-solid" name="phone" placeholder="Phone no." id="edit-staff-phone" required="required"/>
                                       <!--end::Input-->
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="card-title">
                                       <h2 class="required fs-3">Email</h2>
                                    </div>
                                    <div class="fv-row">
                                       <!--begin::Input-->
                                       <input type="email" class="form-control form-control-solid" name="email" placeholder="Email" id="edit-staff-email" required="required"/>
                                       <!--end::Input-->
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <a href="#" class="d-flex align-items-center gap-2 icnclr pt-0 pb-0 mt-7 justify-content-end" data-bs-toggle="modal" data-bs-target="#editsynccalendar">
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
                                 <textarea class="form-control mb-2" data-kt-autosize="true" placeholder="Description" name="profile_description" id="edit-profile-description"></textarea>
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
                                       <input type="text" class="form-control form-control-solid" name="facebook" placeholder="Facebook" id="edit-facebook" />
                                       <!--end::Input-->
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="card-title">
                                       <h2 class="required fs-3">Instagram</h2>
                                    </div>
                                    <div class="fv-row">
                                       <!--begin::Input-->
                                       <input type="text" class="form-control form-control-solid" name="instagram" placeholder="Instagram" id="edit-instagram" />
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
                                    <div class="form-check d-flex align-items-center gap-5 px-0 editstaffworkingdays">
                                       <div class="form-check">
                                          <input class="form-check-input edit-working-days" type="checkbox" value="mon" id="selhours1" onchange="showEditStaffDataN(this)" name="staff_working_days[]" />
                                          <label class="form-check-label" for="selhours1">
                                          Mon
                                          </label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input edit-working-days" type="checkbox" value="tue" name="staff_working_days[]" id="selhours2" onchange="showEditStaffDataN(this)"/>
                                          <label class="form-check-label" for="selhours2">
                                          Tue
                                          </label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input edit-working-days" type="checkbox" value="wed" name="staff_working_days[]" id="selhours3" onchange="showEditStaffDataN(this)"/>
                                          <label class="form-check-label" for="selhours3">
                                          Wed
                                          </label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input edit-working-days" type="checkbox" value="thu" name="staff_working_days[]" id="selhours4" onchange="showEditStaffDataN(this)"/>
                                          <label class="form-check-label" for="selhours4">
                                          Thu
                                          </label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input edit-working-days" type="checkbox" value="fri" name="staff_working_days[]" id="selhours5" onchange="showEditStaffDataN(this)"/>
                                          <label class="form-check-label" for="selhours5">
                                          Fri
                                          </label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input edit-working-days" type="checkbox" value="sat" name="staff_working_days[]" id="selhours6" onchange="showEditStaffDataN(this)"/>
                                          <label class="form-check-label" for="selhours6">
                                          Sat
                                          </label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input edit-working-days" type="checkbox" value="sun" name="staff_working_days[]" id="selhours7" onchange="showEditStaffDataN(this)"/>
                                          <label class="form-check-label" for="selhours7">
                                          Sun
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="d-flex">
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input edit_advance_setting" type="checkbox" name="staff_advance_setting" onchange="showEditStaffSettingDiv(this)"/>
                                    <span class="form-check-label">
                                    Advance setting
                                    </span>
                                    </label>
                                 </div>
                                 <div class="edit staff-add-setting-div d-none">
                                    <div class="row">
                                       <div class="col-md-12 mb-7">
                                          <div class="card card-body">
                                             <div class="row">
                                                <div class="col-md-4 mb-7 mb-md-0">
                                                   <!--begin::Label-->
                                                   <label class="required fw-semibold fs-6 mb-2">Schedule type</label>
                                                   <!--end::Label-->
                                                   <!--begin::Input-->
                                                   <select class="form-select" data-control="select2" data-placeholder="Every week" data-dropdown-parent="#kt_modal_update_scrollable22" onchange="weekSelect(this)" name="schedule_type" id="edit-schedule-type">
                                                      <option></option>
                                                      @foreach(scheduleType() as $key => $schedule_type)
                                                      <option value="{{ $key }}">{{ $schedule_type }}</option>
                                                      @endforeach
                                                   </select>
                                                   <!--end::Input-->
                                                </div>
                                                <div class="col-md-4 mb-7 mb-md-0">
                                                   <label for="" class="form-label">Start date</label>
                                                   <input class="form-control kt_datepicker w-100" placeholder="Start date" name="start_date" id="edit-start-date"/> 
                                                </div>
                                                <div class="col-md-4">
                                                   <!--begin::Label-->
                                                   <label class="required fw-semibold fs-6 mb-2">Ends</label>
                                                   <!--end::Label-->
                                                   <div class="d-flex gap-4 edit posrel d-none">
                                                      <input class="form-control kt_datepicker w-100" placeholder="End date" name="end_date" id="edit-end-date" /> 
                                                      <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto endsbtncls" onclick="delworkinghrend(this)">
                                                         <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                      </div>
                                                   </div>
                                                   <div class="end-date-type-option">
                                                      <!--begin::Input-->
                                                      <select class="form-select end-date" data-control="select2" data-dropdown-parent="#kt_modal_update_scrollable22" data-placeholder="Ends" onchange="workinghrend(this)" name="end_date_type" id="edit-end-date-type">
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
                                          <div class="card card-body editadvancesettingdiv">
                                             <div class="d-flex flex-column add-staff-days gap-5">
                                                <div class="d-flex justify-content-between mon edit staff-ind-shift flex-wrap d-none">
                                                   <div class="workingdays d-flex flex-column">
                                                      <h4>Monday</h4>
                                                      <span attr-hour="hour">hours</span>
                                                   </div>
                                                   <div class="d-flex flex-column gap-3">
                                                      <div class="monday d-flex flex-column gap-3">
                                                         <div class="d-flex flex-wrap gap-5 single-add-shift-div">
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="start" name="monday_hours[start][]" />
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="end" name="monday_hours[end][]" />
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto btncls" onclick="delStaffTime(this)">
                                                               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" onclick="duplicateStaffTime(this)" class="mt-3">Add a shift</a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="d-flex justify-content-between tue edit staff-ind-shift flex-wrap d-none">
                                                   <div class="workingdays d-flex flex-column">
                                                      <h4>Tuesday</h4>
                                                      <span attr-hour="hour">hours</span>
                                                   </div>
                                                   <div class="d-flex flex-column gap-3">
                                                      <div class="tuesday d-flex flex-column gap-3">
                                                         <div class="d-flex flex-wrap gap-5 single-add-shift-div">
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="start" name="tuesday_hours[start][]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="end" name="tuesday_hours[end][]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto btncls" onclick="delStaffTime(this)">
                                                               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" onclick="duplicateStaffTime(this)" class="mt-3">Add a shift</a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="d-flex justify-content-between wed edit staff-ind-shift flex-wrap d-none">
                                                   <div class="workingdays d-flex flex-column">
                                                      <h4>Wednesday</h4>
                                                      <span attr-hour="hour">hours</span>
                                                   </div>
                                                   <div class="d-flex flex-column gap-3">
                                                      <div class="wednesday d-flex flex-column gap-3">
                                                         <div class="d-flex flex-wrap gap-5 single-add-shift-div">
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="start" name="wednesday_hours[start][]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="end" name="wednesday_hours[end][]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto btncls" onclick="delStaffTime(this)">
                                                               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" onclick="duplicateStaffTime(this)" class="mt-3">Add a shift</a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="d-flex justify-content-between thu edit staff-ind-shift flex-wrap d-none">
                                                   <div class="workingdays d-flex flex-column">
                                                      <h4>Thursday</h4>
                                                      <span attr-hour="hour">hours</span>
                                                   </div>
                                                   <div class="d-flex flex-column gap-3">
                                                      <div class="thursday d-flex flex-column gap-3">
                                                         <div class="d-flex flex-wrap gap-5 single-add-shift-div">
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="start" name="thursday_hours[start][]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="end" name="thursday_hours[end][]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto btncls" onclick="delStaffTime(this)">
                                                               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" onclick="duplicateStaffTime(this)" class="mt-3">Add a shift</a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="d-flex justify-content-between fri edit staff-ind-shift flex-wrap d-none">
                                                   <div class="workingdays d-flex flex-column">
                                                      <h4>Friday</h4>
                                                      <span attr-hour="hour">hours</span>
                                                   </div>
                                                   <div class="d-flex flex-column gap-3">
                                                      <div class="friday d-flex flex-column gap-3">
                                                         <div class="d-flex flex-wrap gap-5 single-add-shift-div">
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="start" name="friday_hours[start][]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="end" name="friday_hours[end][]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto btncls" onclick="delStaffTime(this)">
                                                               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" onclick="duplicateStaffTime(this)" class="mt-3">Add a shift</a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="d-flex justify-content-between sat edit staff-ind-shift flex-wrap d-none">
                                                   <div class="workingdays d-flex flex-column">
                                                      <h4>Saturday</h4>
                                                      <span attr-hour="hour">hours</span>
                                                   </div>
                                                   <div class="d-flex flex-column gap-3">
                                                      <div class="saturday d-flex flex-column gap-3">
                                                         <div class="d-flex flex-wrap gap-5 single-add-shift-div">
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="start" name="saturday_hours[start][]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="end" name="saturday_hours[end][]" />
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto btncls" onclick="delStaffTime(this)">
                                                               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <a href="javascript:void(0)" onclick="duplicateStaffTime(this)" class="mt-3">Add a shift</a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="d-flex justify-content-between sun edit staff-ind-shift flex-wrap d-none">
                                                   <div class="workingdays d-flex flex-column">
                                                      <h4>Sunday</h4>
                                                      <span attr-hour="hour">hours</span>
                                                   </div>
                                                   <div class="d-flex flex-column gap-3">
                                                      <div class="sunday d-flex flex-column gap-3">
                                                         <div class="d-flex flex-wrap gap-5 single-add-shift-div">
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="start" name="sunday_hours[start][]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                            <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                               <input type="text" class="form-control" data-td-target=".kt_td_picker_time_only" placeholder="end" name="sunday_hours[end][]"/>
                                                               <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                                                               <i class="ki-outline ki-time fs-3"></i>
                                                               </span>
                                                            </div>
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto btncls" onclick="delStaffTime(this)">
                                                               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                                            </div>
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