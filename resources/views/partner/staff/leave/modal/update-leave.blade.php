<div class="modal fade" tabindex="-1" id="modal_attendance_staff_leave_update">
   <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <div class="d-flex gap-2">
              <h5 class="modal-title">Update Leave</h5>
            </div>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <form class="form" method="post" action="{{ url('partner/staff/leave/update')}}">
               @csrf
               <input type="hidden" name="staff_leave_id" class="update_staff_id">
               <!--begin::Scroll-->
               <div class="d-flex flex-column scroll-y me-n7 pe-7">

                  <div class="d-flex flex-column gap-5 mb-7">
                     <div>
                        <!--begin::Label-->
                        <label class="required fw-semibold fs-6 mb-2">Staff</label>
                        <!--end::Label-->
                        <div class="form-floating border rounded">
                          <select class="form-select form-select-transparent update-staff-id kt_docs_select2_users" id="update-staff-id" data-placeholder="Select an option" name="staff_id" required="required" >
                              <option></option>
                              @if(!empty($staffLeave))
                              @foreach($staffLeave->unique() as $sl_key => $sl_staff)
                              @php 
                                 $full_name = $sl_staff->name;
                                 $name_parts = explode(' ', $full_name);
                                 $shortName = '';
                                 foreach ($name_parts as $part) {
                                    $shortName .= substr($part, 0, 1);
                                 }
                                 if($sl_staff->profile_image){
                                    $path = asset('/public'.$sl_staff->profile_image);
                                 }else{
                                    $path = asset('/public/partner/assets/media/avatars/blank.png');
                                 }
                              @endphp
                              <option value="{{ $sl_staff->user_id }}" data-kt-select2-user="{{ $path }}">{{ $sl_staff->name }}</option>
                              @endforeach
                              @endif
                           </select>
                      </div>
                   </div>
                   <div class="fv-row">
                     <label for="" class="form-label required">Reason for Holiday</label>
                     <textarea class="form-control update leave_remarks" data-kt-autosize="true" placeholder="Reason for Holiday" name="leave_remarks"></textarea>
                  </div>
                  <div class="d-flex gap-5">
                     <!--begin::Input group-->
                     <div class="fv-row">
                       <label for="" class="form-label required">From</label>
                       <input class="form-control kt_datepicker update leave_start_date" placeholder="From" required="required" name="start_date"/>  
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row">
                       <label for="" class="form-label required">To</label>
                       <input class="form-control kt_datepicker update leave_end_date" placeholder="To" required="required" name="end_date"/>  
                    </div>
                    <!--end::Input group-->
                 </div>
              </div>

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

            </div>
            <!--end::Scroll-->

            </form>

         </div>
      </div>
   </div>
</div>