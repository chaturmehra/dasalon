 <div class="modal fade" id="importclient" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-xl">
            <div class="modal-content">
               <div class="modal-header">
                  <!--begin::Card header-->
                  <div class="card-header pt-7" id="kt_chat_contacts_header">
                     <!--begin::Card title-->
                     <div class="card-title">
                        <h2>Import Clients</h2>
                     </div>
                     <!--end::Card title-->
                  </div>
                  <!--end::Card header-->
                  <!--begin::Close-->
                  <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                     <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                  </div>
                  <!--end::Close-->
               </div>
               <div class="modal-body">
                  <!--begin::Wrapper-->
                   <form action="{{ url('partner/client/import') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                   <div class="w-75 m-auto">
                     <!--begin::Contacts-->
                     <div class="card card-flush h-lg-100 importclientdiv mb-10">
                        <div class="d-flex flex-column gap-5 align-items-center">
                           <span class="fs-4 fw-semibold text-muted">Import clients</span>
                           <span class="text-gray-900 fs-1 fw-bold">Upload file</span>
                           <p class="text-gray-800 fs-4">Upload a CSV file with your client data, or download and fill the template below. <a href="#">Learn more</a></p>
                        </div>
                        <div class="card-body brdr">
                        
                           <label>
                              <input type="file"   name="file" accept=".csv" />
                              <div>
                                 <span>
                                    <svg viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M10.554 12.974a6.25 6.25 0 1 0-1.553 12.305H12a.75.75 0 0 1 0 1.5H9a7.754 7.754 0 0 1-7.401-5.472 7.75 7.75 0 0 1 9.327-9.786.75.75 0 1 1-.372 1.453Z" fill="#6950f3"></path>
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M22.925 7.255a9.25 9.25 0 0 0-12.175 8.774.75.75 0 0 1-1.5 0 10.75 10.75 0 1 1 19.35 6.45.75.75 0 1 1-1.2-.9 9.25 9.25 0 0 0-4.475-14.324Z" fill="#6950f3"></path>
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M19 15.28a.75.75 0 0 1 .53.219l4.243 4.243a.75.75 0 0 1-1.06 1.06L19 17.09l-3.712 3.712a.75.75 0 0 1-1.061-1.06l4.243-4.243a.75.75 0 0 1 .53-.22Z" fill="#6950f3"></path>
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M19 15.28a.75.75 0 0 1 .75.75v10a.75.75 0 0 1-1.5 0v-10a.75.75 0 0 1 .75-.75Z" fill="#6950f3"></path>
                                    </svg>
                                 </span>
                              </div>
                              <p>Upload CSV file</p>
                           </label>
                           <div>
                              <p class="text-gray-800 fs-4 mb-0">Don’t have a file? Fill our template with your client information and upload.</p>
                              <a class="fs-4" href="{{ asset('public/csv/client.csv') }}">Download template</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary my-5">
                        Save
                        </button>
                        <!--end::Input group-->
                     </div>
                  </form>   
                  </div>
               </div>
            </div>
         </div>
      </div>