<div class="modal fade" tabindex="-1" id="modal_attendance_staff_apply">
   <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <!-- <div class="d-flex gap-2">
               <a href="#" class="symbol symbol-35px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="All">
                  <span class="symbol-label bg-warning text-inverse-warning fw-bold">All</span>
               </a>
               <a href="#" class="symbol symbol-35px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Lauren">
                  <span class="symbol-label bg-danger text-inverse-danger fw-bold">L</span>
               </a>
               <a href="#" class="symbol symbol-35px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Lauren">
                  <span class="symbol-label bg-primary text-inverse-primary fw-bold">L</span>
               </a>
            </div> -->
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-auto" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <form class="form" method="post" action="{{ url('partner/staff/leave')}}">
               @csrf
               <!--begin::Scroll-->
               <div class="d-flex flex-column scroll-y me-n7 pe-7">

                  <div class="d-flex flex-column gap-5 mb-7">
                     <div>
                        <!--begin::Label-->
                        <label class="required fw-semibold fs-6 mb-2">Staff</label>
                        <!--end::Label-->
                        <div class="form-floating border rounded">
                          <select class="form-select form-select-transparent kt_docs_select2_users" data-placeholder="Select an option" name="staff_id" required="required" >
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
                     <textarea class="form-control leave_remarks" data-kt-autosize="true" placeholder="Reason for Holiday" name="leave_remarks"></textarea>
                  </div>
                  <div class="d-flex gap-5">
                     <!--begin::Input group-->
                     <div class="fv-row">
                       <label for="" class="form-label required">From</label>
                       <input class="form-control kt_datepicker leave_start_date" placeholder="From" required="required" name="start_date"/>  
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row">
                       <label for="" class="form-label required">To</label>
                       <input class="form-control kt_datepicker leave_end_date" placeholder="To" required="required" name="end_date"/>  
                    </div>
                    <!--end::Input group-->
                 </div>
              </div>

              <!--begin::Actions-->
              <div class="modal-footer">
                 <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
                 <button type="submit" class="btn btn-primary" onclick="return validateLeaveForm()">
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