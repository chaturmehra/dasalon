<div class="modal fade" tabindex="-1" id="changeemailotp">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header py-4">
        <h3 class="modal-title">Verify Email</h3>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-toggle="modal" data-bs-target="#kt_modal_businessdetail" data-bs-dismiss="modal" aria-label="Close">
          <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
        </div>
        <!--end::Close-->
      </div>

      <div class="modal-body">

        <div class="row">

          <div class="col-12">
            <div class="fv-row">
              <!--begin::Input-->
              <input type="text" name="verify_old_email_otp" class="form-control form-control-solid mb-3 mb-lg-0 verify-old-email-otp" placeholder="Enter OTP" onchange="numberOtpHandler(this)">
              <!--end::Input-->
            </div>
          </div>
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary verify-partner-old-email">Verify</button>
      </div>
    </div>
  </div>
</div>