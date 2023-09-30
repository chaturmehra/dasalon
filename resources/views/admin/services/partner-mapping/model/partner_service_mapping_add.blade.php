<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
<i class="ki-outline ki-arrow-up"></i>
</div>
<!--end::Scrolltop-->

<!--begin::Modal - Add task-->
<div class="modal fade" tabindex="-1" id="kt_modal_servicepartnermapping">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Service Partner Mapping</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2 close_form" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <!--begin::Form-->
				<form  action="{{url('admin/services/mapping')}}" method="POST" class="form">
					@csrf
					<!--begin::Scroll-->
					<div class="d-flex flex-column scroll-y me-n7 pe-7">

						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="required fw-semibold fs-6 mb-2">Business Type</label>
							<!--end::Label-->
							<!--begin::Input-->
							<select class="form-select mb-2" data-control="select2" data-placeholder="Business Type..." name="businesstypeid" >
							    <option></option>
							    @foreach($businesstpes as $business)
								<option value="{{$business->bt_id}}">{{$business->businesstype}}</option>
								 @endforeach
							</select>
							<!--end::Input-->
						</div>
						<!--end::Input group-->

						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="required fw-semibold fs-6 mb-2">Category</label>
							<!--end::Label-->
							<!--begin::Input-->
							<select class="form-select mb-2 select_category2" data-control="select2" data-placeholder="Select a Category..." name="servicecategory">
							    <option></option>
							    @foreach($ServiceCategory as $servicecategory)
							        <option value="{{ $servicecategory->id }}">{{ $servicecategory->category }}</option>
							    @endforeach
							</select>
							<!--end::Input-->
						</div>
						<!--end::Input group-->

						<!--begin::Input group-->
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="required fw-semibold fs-6 mb-2">Sub category</label>
							<!--end::Label-->
							<!--begin::Input-->
							<select class="form-select mb-2 select_subcategory" data-control="select2" data-placeholder="Select sub-category..." name="getdis_subcategory" id="getdis_subcategory" >
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


