<div class="modal fade" tabindex="-1" id="modal_attendance_admin_check_update">
   <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title"><span class="formatted-date"></span></h5>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 close_form" data-bs-dismiss="modal" aria-label="Close">
               <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
         </div>
         <div class="modal-body">
            <form class="form" method="post" action="{{ url('partner/staff/checkin-attendance-update') }}">
               @csrf
               <input type="hidden" name="staff_id" class="update_att_staff_id">
               <input type="hidden" name="attendance_date" class="attendance_date">
               <!--begin::Scroll-->
               <div class="d-flex flex-column scroll-y me-n7 pe-7">
                  <div class="d-flex flex-column gap-5 mb-7">
                     <div>
                        <h4><span class="update_att_staff_name"></span></h4>
                     </div>
                     <div class="fv-row">
                        <div class="input-group kt_td_picker_time_only" data-td-target-input="nearest" data-td-target-toggle="nearest">
                           <input type="text" name="check_in" class="form-control check-in-time-update" data-td-target=".kt_td_picker_time_only" placeholder="Check in" required="required" />
                           <span class="input-group-text" data-td-target=".kt_td_picker_time_only" data-td-toggle="datetimepicker">
                           <i class="ki-outline ki-time fs-3"></i>
                           </span>
                        </div>
                     </div>
                  </div>
                  <!--begin::Actions-->
                  <div class="modal-footer">
                     <button type="button" class="btn btn-light" data-bs-dismiss="modal">Discard</button>
                     <button type="submit" class="btn btn-primary">
                     <span class="indicator-label">Update</span>
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