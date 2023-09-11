@extends('admin.layouts.auth.app')

@section('content')

<!--Begin:::Main-->
<meta name="csrf-token" content="{{ csrf_token() }}">
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
               <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Subscription Config</h1>
               <!--end::Title-->
               <!--begin::Breadcrumb-->
               <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     <a href="{{ url('/admin/settings') }}" class="text-muted text-hover-primary">Home</a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-400 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">Subscription Config</li>
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
            @include('admin.setting.tab')
            <!--end::Navbar-->
            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7">
               <div class="card card-flush">
                  <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                     <!--begin:::Tabs-->
                     <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#subscriptioinconfig1">On-boarding</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#subscriptioinconfig2">Subscription tier & price</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                           <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#subscriptioinconfig3">Subscription and Feature Mapping</a>
                        </li>
                        <!--end:::Tab item-->
                     </ul>
                     <!--end:::Tabs-->
                  </div>
               </div>
               <!--begin::Tab content-->
               <div class="tab-content">
                  <!--begin::Tab pane-->
                  <div class="tab-pane fade active show" id="subscriptioinconfig1" role="tab-panel">
                     <!--begin::Products-->
                     <div class="card card-flush mb-8">
                        <div class="card-body align-items-center pb-0">
                           <!--begin::Title-->
                           <h3 class="card-title align-items-start flex-column">
                              <span class="card-label fw-bold text-gray-800">Grace period type1</span>
                           </h3>
                           <!--end::Title-->   
                           <span class="text-gray-400 fw-semibold d-block fs-6">10</span>
                        </div>
                        <!--begin::Card header-->
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <!--begin::Search-->
                              <div class="d-flex align-items-center position-relative my-1">
                                 <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                 <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
                              </div>
                              <!--end::Search-->
                           </div>
                           <!--end::Card title-->
                           <!--begin::Card toolbar-->
                           <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                              <!--begin::Card toolbar-->
                              <div class="card-toolbar">
                                 <!--begin::Toolbar-->
                                 <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                    <!--begin::Add Country-->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable">
                                    <i class="ki-duotone ki-plus fs-2"></i>Edit
                                    </button>
                                    <!--end::Add Country-->
                                 </div>
                                 <!--end::Toolbar-->
                                 <!--begin::Modal - Add task-->
                                 <div class="modal fade" tabindex="-1" id="kt_modal_scrollable">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title">Edit</h5>
                                             <!--begin::Close-->
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                             <!--end::Close-->
                                          </div>
                                          <div class="modal-body">
                                             <!--begin::Form-->
                                             <form class="form">
                                                <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7">
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label for="kt_docs_select2_country" class="form-label">Select a country</label>
                                                      <div class="form-floating border rounded">
                                                         <select class="form-select" placeholder="..." id="kt_docs_select2_country">
                                                            <option></option>
                                                            <option value="AF" data-kt-select2-country="{{ asset('/assets/media/flags/afghanistan.svg') }}">Afghanistan</option>
                                                            <option value="AX" data-kt-select2-country="{{ asset('/assets/media/flags/aland-islands.svg') }}">Aland Islands</option>
                                                            <option value="AL" data-kt-select2-country="{{ asset('/assets/media/flags/albania.svg') }}">Albania</option>
                                                            <option value="DZ" data-kt-select2-country="{{ asset('/assets/media/flags/algeria.svg') }}">Algeria</option>
                                                            <option value="AS" data-kt-select2-country="{{ asset('/assets/media/flags/american-samoa.svg') }}">American Samoa</option>
                                                            <option value="AD" data-kt-select2-country="{{ asset('/assets/media/flags/andorra.svg') }}">Andorra</option>
                                                            <option value="AO" data-kt-select2-country="{{ asset('/assets/media/flags/angola.svg') }}">Angola</option>
                                                            <option value="AI" data-kt-select2-country="{{ asset('/assets/media/flags/anguilla.svg') }}">Anguilla</option>
                                                            <option value="AG" data-kt-select2-country="{{ asset('/assets/media/flags/antigua-and-barbuda.svg') }}">Antigua and Barbuda</option>
                                                            <option value="AR" data-kt-select2-country="{{ asset('/assets/media/flags/argentina.svg') }}">Argentina</option>
                                                            <option value="AM" data-kt-select2-country="{{ asset('/assets/media/flags/armenia.svg') }}">Armenia</option>
                                                            <option value="AW" data-kt-select2-country="{{ asset('/assets/media/flags/aruba.svg') }}">Aruba</option>
                                                            <option value="AU" data-kt-select2-country="{{ asset('/assets/media/flags/australia.svg') }}">Australia</option>
                                                            <option value="AT" data-kt-select2-country="{{ asset('/assets/media/flags/austria.svg') }}">Austria</option>
                                                            <option value="AZ" data-kt-select2-country="{{ asset('/assets/media/flags/azerbaijan.svg') }}">Azerbaijan</option>
                                                            <option value="BS" data-kt-select2-country="{{ asset('/assets/media/flags/bahamas.svg') }}">Bahamas</option>
                                                            <option value="BH" data-kt-select2-country="{{ asset('/assets/media/flags/bahrain.svg') }}">Bahrain</option>
                                                            <option value="BD" data-kt-select2-country="{{ asset('/assets/media/flags/bangladesh.svg') }}">Bangladesh</option>
                                                            <option value="BB" data-kt-select2-country="{{ asset('/assets/media/flags/barbados.svg') }}">Barbados</option>
                                                            <option value="BY" data-kt-select2-country="{{ asset('/assets/media/flags/belarus.svg') }}">Belarus</option>
                                                            <option value="BE" data-kt-select2-country="{{ asset('/assets/media/flags/belgium.svg') }}">Belgium</option>
                                                            <option value="BZ" data-kt-select2-country="{{ asset('/assets/media/flags/belize.svg') }}">Belize</option>
                                                            <option value="BJ" data-kt-select2-country="{{ asset('/assets/media/flags/benin.svg') }}">Benin</option>
                                                            <option value="BM" data-kt-select2-country="{{ asset('/assets/media/flags/bermuda.svg') }}">Bermuda</option>
                                                            <option value="BT" data-kt-select2-country="{{ asset('/assets/media/flags/bhutan.svg') }}">Bhutan</option>
                                                            <option value="BO" data-kt-select2-country="{{ asset('/assets/media/flags/bolivia.svg') }}">Bolivia, Plurinational State of</option>
                                                            <option value="BQ" data-kt-select2-country="{{ asset('/assets/media/flags/bonaire.svg') }}">Bonaire, Sint Eustatius and Saba</option>
                                                            <option value="BA" data-kt-select2-country="{{ asset('/assets/media/flags/bosnia-and-herzegovina.svg') }}">Bosnia and Herzegovina</option>
                                                            <option value="BW" data-kt-select2-country="{{ asset('/assets/media/flags/botswana.svg') }}">Botswana</option>
                                                            <option value="BR" data-kt-select2-country="{{ asset('/assets/media/flags/brazil.svg') }}">Brazil</option>
                                                            <option value="IO" data-kt-select2-country="{{ asset('/assets/media/flags/british-indian-ocean-territory.svg') }}">British Indian Ocean Territory</option>
                                                            <option value="BN" data-kt-select2-country="{{ asset('/assets/media/flags/brunei.svg') }}">Brunei Darussalam</option>
                                                            <option value="BG" data-kt-select2-country="{{ asset('/assets/media/flags/bulgaria.svg') }}">Bulgaria</option>
                                                            <option value="BF" data-kt-select2-country="{{ asset('/assets/media/flags/burkina-faso.svg') }}">Burkina Faso</option>
                                                            <option value="BI" data-kt-select2-country="{{ asset('/assets/media/flags/burundi.svg') }}">Burundi</option>
                                                            <option value="KH" data-kt-select2-country="{{ asset('/assets/media/flags/cambodia.svg') }}">Cambodia</option>
                                                            <option value="CM" data-kt-select2-country="{{ asset('/assets/media/flags/cameroon.svg') }}">Cameroon</option>
                                                            <option value="CA" data-kt-select2-country="{{ asset('/assets/media/flags/canada.svg') }}">Canada</option>
                                                            <option value="CV" data-kt-select2-country="{{ asset('/assets/media/flags/cape-verde.svg') }}">Cape Verde</option>
                                                            <option value="KY" data-kt-select2-country="{{ asset('/assets/media/flags/cayman-islands.svg') }}">Cayman Islands</option>
                                                            <option value="CF" data-kt-select2-country="{{ asset('/assets/media/flags/central-african-republic.svg') }}">Central African Republic</option>
                                                            <option value="TD" data-kt-select2-country="{{ asset('/assets/media/flags/chad.svg') }}">Chad</option>
                                                            <option value="CL" data-kt-select2-country="{{ asset('/assets/media/flags/chile.svg') }}">Chile</option>
                                                            <option value="CN" data-kt-select2-country="{{ asset('/assets/media/flags/china.svg') }}">China</option>
                                                            <option value="CX" data-kt-select2-country="{{ asset('/assets/media/flags/christmas-island.svg') }}">Christmas Island</option>
                                                            <option value="CC" data-kt-select2-country="{{ asset('/assets/media/flags/cocos-island.svg') }}">Cocos (Keeling) Islands</option>
                                                            <option value="CO" data-kt-select2-country="{{ asset('/assets/media/flags/colombia.svg') }}">Colombia</option>
                                                            <option value="KM" data-kt-select2-country="{{ asset('/assets/media/flags/comoros.svg') }}">Comoros</option>
                                                            <option value="CK" data-kt-select2-country="{{ asset('/assets/media/flags/cook-islands.svg') }}">Cook Islands</option>
                                                            <option value="CR" data-kt-select2-country="{{ asset('/assets/media/flags/costa-rica.svg') }}">Costa Rica</option>
                                                            <option value="CI" data-kt-select2-country="{{ asset('/assets/media/flags/ivory-coast.svg') }}">Côte d'Ivoire</option>
                                                            <option value="HR" data-kt-select2-country="{{ asset('/assets/media/flags/croatia.svg') }}">Croatia</option>
                                                            <option value="CU" data-kt-select2-country="{{ asset('/assets/media/flags/cuba.svg') }}">Cuba</option>
                                                            <option value="CW" data-kt-select2-country="{{ asset('/assets/media/flags/curacao.svg') }}">Curaçao</option>
                                                            <option value="CZ" data-kt-select2-country="{{ asset('/assets/media/flags/czech-republic.svg') }}">Czech Republic</option>
                                                            <option value="DK" data-kt-select2-country="{{ asset('/assets/media/flags/denmark.svg') }}">Denmark</option>
                                                            <option value="DJ" data-kt-select2-country="{{ asset('/assets/media/flags/djibouti.svg') }}">Djibouti</option>
                                                            <option value="DM" data-kt-select2-country="{{ asset('/assets/media/flags/dominica.svg') }}">Dominica</option>
                                                            <option value="DO" data-kt-select2-country="{{ asset('/assets/media/flags/dominican-republic.svg') }}">Dominican Republic</option>
                                                            <option value="EC" data-kt-select2-country="{{ asset('/assets/media/flags/ecuador.svg') }}">Ecuador</option>
                                                            <option value="EG" data-kt-select2-country="{{ asset('/assets/media/flags/egypt.svg') }}">Egypt</option>
                                                            <option value="SV" data-kt-select2-country="{{ asset('/assets/media/flags/el-salvador.svg') }}">El Salvador</option>
                                                            <option value="GQ" data-kt-select2-country="{{ asset('/assets/media/flags/equatorial-guinea.svg') }}">Equatorial Guinea</option>
                                                            <option value="ER" data-kt-select2-country="{{ asset('/assets/media/flags/eritrea.svg') }}">Eritrea</option>
                                                            <option value="EE" data-kt-select2-country="{{ asset('/assets/media/flags/estonia.svg') }}">Estonia</option>
                                                            <option value="ET" data-kt-select2-country="{{ asset('/assets/media/flags/ethiopia.svg') }}">Ethiopia</option>
                                                            <option value="FK" data-kt-select2-country="{{ asset('/assets/media/flags/falkland-islands.svg') }}">Falkland Islands (Malvinas)</option>
                                                            <option value="FJ" data-kt-select2-country="{{ asset('/assets/media/flags/fiji.svg') }}">Fiji</option>
                                                            <option value="FI" data-kt-select2-country="{{ asset('/assets/media/flags/finland.svg') }}">Finland</option>
                                                            <option value="FR" data-kt-select2-country="{{ asset('/assets/media/flags/france.svg') }}">France</option>
                                                            <option value="PF" data-kt-select2-country="{{ asset('/assets/media/flags/french-polynesia.svg') }}">French Polynesia</option>
                                                            <option value="GA" data-kt-select2-country="{{ asset('/assets/media/flags/gabon.svg') }}">Gabon</option>
                                                            <option value="GM" data-kt-select2-country="{{ asset('/assets/media/flags/gambia.svg') }}">Gambia</option>
                                                            <option value="GE" data-kt-select2-country="{{ asset('/assets/media/flags/georgia.svg') }}">Georgia</option>
                                                            <option value="DE" data-kt-select2-country="{{ asset('/assets/media/flags/germany.svg') }}">Germany</option>
                                                            <option value="GH" data-kt-select2-country="{{ asset('/assets/media/flags/ghana.svg') }}">Ghana</option>
                                                            <option value="GI" data-kt-select2-country="{{ asset('/assets/media/flags/gibraltar.svg') }}">Gibraltar</option>
                                                            <option value="GR" data-kt-select2-country="{{ asset('/assets/media/flags/greece.svg') }}">Greece</option>
                                                            <option value="GL" data-kt-select2-country="{{ asset('/assets/media/flags/greenland.svg') }}">Greenland</option>
                                                            <option value="GD" data-kt-select2-country="{{ asset('/assets/media/flags/grenada.svg') }}">Grenada</option>
                                                            <option value="GU" data-kt-select2-country="{{ asset('/assets/media/flags/guam.svg') }}">Guam</option>
                                                            <option value="GT" data-kt-select2-country="{{ asset('/assets/media/flags/guatemala.svg') }}">Guatemala</option>
                                                            <option value="GG" data-kt-select2-country="{{ asset('/assets/media/flags/guernsey.svg') }}">Guernsey</option>
                                                            <option value="GN" data-kt-select2-country="{{ asset('/assets/media/flags/guinea.svg') }}">Guinea</option>
                                                            <option value="GW" data-kt-select2-country="{{ asset('/assets/media/flags/guinea-bissau.svg') }}">Guinea-Bissau</option>
                                                            <option value="HT" data-kt-select2-country="{{ asset('/assets/media/flags/haiti.svg') }}">Haiti</option>
                                                            <option value="VA" data-kt-select2-country="{{ asset('/assets/media/flags/vatican-city.svg') }}">Holy See (Vatican City State)</option>
                                                            <option value="HN" data-kt-select2-country="{{ asset('/assets/media/flags/honduras.svg') }}">Honduras</option>
                                                            <option value="HK" data-kt-select2-country="{{ asset('/assets/media/flags/hong-kong.svg') }}">Hong Kong</option>
                                                            <option value="HU" data-kt-select2-country="{{ asset('/assets/media/flags/hungary.svg') }}">Hungary</option>
                                                            <option value="IS" data-kt-select2-country="{{ asset('/assets/media/flags/iceland.svg') }}">Iceland</option>
                                                            <option value="IN" data-kt-select2-country="{{ asset('/assets/media/flags/india.svg') }}">India</option>
                                                            <option value="ID" data-kt-select2-country="{{ asset('/assets/media/flags/indonesia.svg') }}">Indonesia</option>
                                                            <option value="IR" data-kt-select2-country="{{ asset('/assets/media/flags/iran.svg') }}">Iran, Islamic Republic of</option>
                                                            <option value="IQ" data-kt-select2-country="{{ asset('/assets/media/flags/iraq.svg') }}">Iraq</option>
                                                            <option value="IE" data-kt-select2-country="{{ asset('/assets/media/flags/ireland.svg') }}">Ireland</option>
                                                            <option value="IM" data-kt-select2-country="{{ asset('/assets/media/flags/isle-of-man.svg') }}">Isle of Man</option>
                                                            <option value="IL" data-kt-select2-country="{{ asset('/assets/media/flags/israel.svg') }}">Israel</option>
                                                            <option value="IT" data-kt-select2-country="{{ asset('/assets/media/flags/italy.svg') }}">Italy</option>
                                                            <option value="JM" data-kt-select2-country="{{ asset('/assets/media/flags/jamaica.svg') }}">Jamaica</option>
                                                            <option value="JP" data-kt-select2-country="{{ asset('/assets/media/flags/japan.svg') }}">Japan</option>
                                                            <option value="JE" data-kt-select2-country="{{ asset('/assets/media/flags/jersey.svg') }}">Jersey</option>
                                                            <option value="JO" data-kt-select2-country="{{ asset('/assets/media/flags/jordan.svg') }}">Jordan</option>
                                                            <option value="KZ" data-kt-select2-country="{{ asset('/assets/media/flags/kazakhstan.svg') }}">Kazakhstan</option>
                                                            <option value="KE" data-kt-select2-country="{{ asset('/assets/media/flags/kenya.svg') }}">Kenya</option>
                                                            <option value="KI" data-kt-select2-country="{{ asset('/assets/media/flags/kiribati.svg') }}">Kiribati</option>
                                                            <option value="KP" data-kt-select2-country="{{ asset('/assets/media/flags/north-korea.svg') }}">Korea, Democratic People's Republic of</option>
                                                            <option value="KW" data-kt-select2-country="{{ asset('/assets/media/flags/kuwait.svg') }}">Kuwait</option>
                                                            <option value="KG" data-kt-select2-country="{{ asset('/assets/media/flags/kyrgyzstan.svg') }}">Kyrgyzstan</option>
                                                            <option value="LA" data-kt-select2-country="{{ asset('/assets/media/flags/laos.svg') }}">Lao People's Democratic Republic</option>
                                                            <option value="LV" data-kt-select2-country="{{ asset('/assets/media/flags/latvia.svg') }}">Latvia</option>
                                                            <option value="LB" data-kt-select2-country="{{ asset('/assets/media/flags/lebanon.svg') }}">Lebanon</option>
                                                            <option value="LS" data-kt-select2-country="{{ asset('/assets/media/flags/lesotho.svg') }}">Lesotho</option>
                                                            <option value="LR" data-kt-select2-country="{{ asset('/assets/media/flags/liberia.svg') }}">Liberia</option>
                                                            <option value="LY" data-kt-select2-country="{{ asset('/assets/media/flags/libya.svg') }}">Libya</option>
                                                            <option value="LI" data-kt-select2-country="{{ asset('/assets/media/flags/liechtenstein.svg') }}">Liechtenstein</option>
                                                            <option value="LT" data-kt-select2-country="{{ asset('/assets/media/flags/lithuania.svg') }}">Lithuania</option>
                                                            <option value="LU" data-kt-select2-country="{{ asset('/assets/media/flags/luxembourg.svg') }}">Luxembourg</option>
                                                            <option value="MO" data-kt-select2-country="{{ asset('/assets/media/flags/macao.svg') }}">Macao</option>
                                                            <option value="MG" data-kt-select2-country="{{ asset('/assets/media/flags/madagascar.svg') }}">Madagascar</option>
                                                            <option value="MW" data-kt-select2-country="{{ asset('/assets/media/flags/malawi.svg') }}">Malawi</option>
                                                            <option value="MY" data-kt-select2-country="{{ asset('/assets/media/flags/malaysia.svg') }}">Malaysia</option>
                                                            <option value="MV" data-kt-select2-country="{{ asset('/assets/media/flags/maldives.svg') }}">Maldives</option>
                                                            <option value="ML" data-kt-select2-country="{{ asset('/assets/media/flags/mali.svg') }}">Mali</option>
                                                            <option value="MT" data-kt-select2-country="{{ asset('/assets/media/flags/malta.svg') }}">Malta</option>
                                                            <option value="MH" data-kt-select2-country="{{ asset('/assets/media/flags/marshall-island.svg') }}">Marshall Islands</option>
                                                            <option value="MQ" data-kt-select2-country="{{ asset('/assets/media/flags/martinique.svg') }}">Martinique</option>
                                                            <option value="MR" data-kt-select2-country="{{ asset('/assets/media/flags/mauritania.svg') }}">Mauritania</option>
                                                            <option value="MU" data-kt-select2-country="{{ asset('/assets/media/flags/mauritius.svg') }}">Mauritius</option>
                                                            <option value="MX" data-kt-select2-country="{{ asset('/assets/media/flags/mexico.svg') }}">Mexico</option>
                                                            <option value="FM" data-kt-select2-country="{{ asset('/assets/media/flags/micronesia.svg') }}">Micronesia, Federated States of</option>
                                                            <option value="MD" data-kt-select2-country="{{ asset('/assets/media/flags/moldova.svg') }}">Moldova, Republic of</option>
                                                            <option value="MC" data-kt-select2-country="{{ asset('/assets/media/flags/monaco.svg') }}">Monaco</option>
                                                            <option value="MN" data-kt-select2-country="{{ asset('/assets/media/flags/mongolia.svg') }}">Mongolia</option>
                                                            <option value="ME" data-kt-select2-country="{{ asset('/assets/media/flags/montenegro.svg') }}">Montenegro</option>
                                                            <option value="MS" data-kt-select2-country="{{ asset('/assets/media/flags/montserrat.svg') }}">Montserrat</option>
                                                            <option value="MA" data-kt-select2-country="{{ asset('/assets/media/flags/morocco.svg') }}">Morocco</option>
                                                            <option value="MZ" data-kt-select2-country="{{ asset('/assets/media/flags/mozambique.svg') }}">Mozambique</option>
                                                            <option value="MM" data-kt-select2-country="{{ asset('/assets/media/flags/myanmar.svg') }}">Myanmar</option>
                                                            <option value="NA" data-kt-select2-country="{{ asset('/assets/media/flags/namibia.svg') }}">Namibia</option>
                                                            <option value="NR" data-kt-select2-country="{{ asset('/assets/media/flags/nauru.svg') }}">Nauru</option>
                                                            <option value="NP" data-kt-select2-country="{{ asset('/assets/media/flags/nepal.svg') }}">Nepal</option>
                                                            <option value="NL" data-kt-select2-country="{{ asset('/assets/media/flags/netherlands.svg') }}">Netherlands</option>
                                                            <option value="NZ" data-kt-select2-country="{{ asset('/assets/media/flags/new-zealand.svg') }}">New Zealand</option>
                                                            <option value="NI" data-kt-select2-country="{{ asset('/assets/media/flags/nicaragua.svg') }}">Nicaragua</option>
                                                            <option value="NE" data-kt-select2-country="{{ asset('/assets/media/flags/niger.svg') }}">Niger</option>
                                                            <option value="NG" data-kt-select2-country="{{ asset('/assets/media/flags/nigeria.svg') }}">Nigeria</option>
                                                            <option value="NU" data-kt-select2-country="{{ asset('/assets/media/flags/niue.svg') }}">Niue</option>
                                                            <option value="NF" data-kt-select2-country="{{ asset('/assets/media/flags/norfolk-island.svg') }}">Norfolk Island</option>
                                                            <option value="MP" data-kt-select2-country="{{ asset('/assets/media/flags/northern-mariana-islands.svg') }}">Northern Mariana Islands</option>
                                                            <option value="NO" data-kt-select2-country="{{ asset('/assets/media/flags/norway.svg') }}">Norway</option>
                                                            <option value="OM" data-kt-select2-country="{{ asset('/assets/media/flags/oman.svg') }}">Oman</option>
                                                            <option value="PK" data-kt-select2-country="{{ asset('/assets/media/flags/pakistan.svg') }}">Pakistan</option>
                                                            <option value="PW" data-kt-select2-country="{{ asset('/assets/media/flags/palau.svg') }}">Palau</option>
                                                            <option value="PS" data-kt-select2-country="{{ asset('/assets/media/flags/palestine.svg') }}">Palestinian Territory, Occupied</option>
                                                            <option value="PA" data-kt-select2-country="{{ asset('/assets/media/flags/panama.svg') }}">Panama</option>
                                                            <option value="PG" data-kt-select2-country="{{ asset('/assets/media/flags/papua-new-guinea.svg') }}">Papua New Guinea</option>
                                                            <option value="PY" data-kt-select2-country="{{ asset('/assets/media/flags/paraguay.svg') }}">Paraguay</option>
                                                            <option value="PE" data-kt-select2-country="{{ asset('/assets/media/flags/peru.svg') }}">Peru</option>
                                                            <option value="PH" data-kt-select2-country="{{ asset('/assets/media/flags/philippines.svg') }}">Philippines</option>
                                                            <option value="PL" data-kt-select2-country="{{ asset('/assets/media/flags/poland.svg') }}">Poland</option>
                                                            <option value="PT" data-kt-select2-country="{{ asset('/assets/media/flags/portugal.svg') }}">Portugal</option>
                                                            <option value="PR" data-kt-select2-country="{{ asset('/assets/media/flags/puerto-rico.svg') }}">Puerto Rico</option>
                                                            <option value="QA" data-kt-select2-country="{{ asset('/assets/media/flags/qatar.svg') }}">Qatar</option>
                                                            <option value="RO" data-kt-select2-country="{{ asset('/assets/media/flags/romania.svg') }}">Romania</option>
                                                            <option value="RU" data-kt-select2-country="{{ asset('/assets/media/flags/russia.svg') }}">Russian Federation</option>
                                                            <option value="RW" data-kt-select2-country="{{ asset('/assets/media/flags/rwanda.svg') }}">Rwanda</option>
                                                            <option value="BL" data-kt-select2-country="{{ asset('/assets/media/flags/st-barts.svg') }}">Saint Barthélemy</option>
                                                            <option value="KN" data-kt-select2-country="{{ asset('/assets/media/flags/saint-kitts-and-nevis.svg') }}">Saint Kitts and Nevis</option>
                                                            <option value="LC" data-kt-select2-country="{{ asset('/assets/media/flags/st-lucia.svg') }}">Saint Lucia</option>
                                                            <option value="MF" data-kt-select2-country="{{ asset('/assets/media/flags/sint-maarten.svg') }}">Saint Martin (French part)</option>
                                                            <option value="VC" data-kt-select2-country="{{ asset('/assets/media/flags/st-vincent-and-the-grenadines.svg') }}">Saint Vincent and the Grenadines</option>
                                                            <option value="WS" data-kt-select2-country="{{ asset('/assets/media/flags/samoa.svg') }}">Samoa</option>
                                                            <option value="SM" data-kt-select2-country="{{ asset('/assets/media/flags/san-marino.svg') }}">San Marino</option>
                                                            <option value="ST" data-kt-select2-country="{{ asset('/assets/media/flags/sao-tome-and-prince.svg') }}">Sao Tome and Principe</option>
                                                            <option value="SA" data-kt-select2-country="{{ asset('/assets/media/flags/saudi-arabia.svg') }}">Saudi Arabia</option>
                                                            <option value="SN" data-kt-select2-country="{{ asset('/assets/media/flags/senegal.svg') }}">Senegal</option>
                                                            <option value="RS" data-kt-select2-country="{{ asset('/assets/media/flags/serbia.svg') }}">Serbia</option>
                                                            <option value="SC" data-kt-select2-country="{{ asset('/assets/media/flags/seychelles.svg') }}">Seychelles</option>
                                                            <option value="SL" data-kt-select2-country="{{ asset('/assets/media/flags/sierra-leone.svg') }}">Sierra Leone</option>
                                                            <option value="SG" data-kt-select2-country="{{ asset('/assets/media/flags/singapore.svg') }}">Singapore</option>
                                                            <option value="SX" data-kt-select2-country="{{ asset('/assets/media/flags/sint-maarten.svg') }}">Sint Maarten (Dutch part)</option>
                                                            <option value="SK" data-kt-select2-country="{{ asset('/assets/media/flags/slovakia.svg') }}">Slovakia</option>
                                                            <option value="SI" data-kt-select2-country="{{ asset('/assets/media/flags/slovenia.svg') }}">Slovenia</option>
                                                            <option value="SB" data-kt-select2-country="{{ asset('/assets/media/flags/solomon-islands.svg') }}">Solomon Islands</option>
                                                            <option value="SO" data-kt-select2-country="{{ asset('/assets/media/flags/somalia.svg') }}">Somalia</option>
                                                            <option value="ZA" data-kt-select2-country="{{ asset('/assets/media/flags/south-africa.svg') }}">South Africa</option>
                                                            <option value="KR" data-kt-select2-country="{{ asset('/assets/media/flags/south-korea.svg') }}">South Korea</option>
                                                            <option value="SS" data-kt-select2-country="{{ asset('/assets/media/flags/south-sudan.svg') }}">South Sudan</option>
                                                            <option value="ES" data-kt-select2-country="{{ asset('/assets/media/flags/spain.svg') }}">Spain</option>
                                                            <option value="LK" data-kt-select2-country="{{ asset('/assets/media/flags/sri-lanka.svg') }}">Sri Lanka</option>
                                                            <option value="SD" data-kt-select2-country="{{ asset('/assets/media/flags/sudan.svg') }}">Sudan</option>
                                                            <option value="SR" data-kt-select2-country="{{ asset('/assets/media/flags/suriname.svg') }}">Suriname</option>
                                                            <option value="SZ" data-kt-select2-country="{{ asset('/assets/media/flags/swaziland.svg') }}">Swaziland</option>
                                                            <option value="SE" data-kt-select2-country="{{ asset('/assets/media/flags/sweden.svg') }}">Sweden</option>
                                                            <option value="CH" data-kt-select2-country="{{ asset('/assets/media/flags/switzerland.svg') }}">Switzerland</option>
                                                            <option value="SY" data-kt-select2-country="{{ asset('/assets/media/flags/syria.svg') }}">Syrian Arab Republic</option>
                                                            <option value="TW" data-kt-select2-country="{{ asset('/assets/media/flags/taiwan.svg') }}">Taiwan, Province of China</option>
                                                            <option value="TJ" data-kt-select2-country="{{ asset('/assets/media/flags/tajikistan.svg') }}">Tajikistan</option>
                                                            <option value="TZ" data-kt-select2-country="{{ asset('/assets/media/flags/tanzania.svg') }}">Tanzania, United Republic of</option>
                                                            <option value="TH" data-kt-select2-country="{{ asset('/assets/media/flags/thailand.svg') }}">Thailand</option>
                                                            <option value="TG" data-kt-select2-country="{{ asset('/assets/media/flags/togo.svg') }}">Togo</option>
                                                            <option value="TK" data-kt-select2-country="{{ asset('/assets/media/flags/tokelau.svg') }}">Tokelau</option>
                                                            <option value="TO" data-kt-select2-country="{{ asset('/assets/media/flags/tonga.svg') }}">Tonga</option>
                                                            <option value="TT" data-kt-select2-country="{{ asset('/assets/media/flags/trinidad-and-tobago.svg') }}">Trinidad and Tobago</option>
                                                            <option value="TN" data-kt-select2-country="{{ asset('/assets/media/flags/tunisia.svg') }}">Tunisia</option>
                                                            <option value="TR" data-kt-select2-country="{{ asset('/assets/media/flags/turkey.svg') }}">Turkey</option>
                                                            <option value="TM" data-kt-select2-country="{{ asset('/assets/media/flags/turkmenistan.svg') }}">Turkmenistan</option>
                                                            <option value="TC" data-kt-select2-country="{{ asset('/assets/media/flags/turks-and-caicos.svg') }}">Turks and Caicos Islands</option>
                                                            <option value="TV" data-kt-select2-country="{{ asset('/assets/media/flags/tuvalu.svg') }}">Tuvalu</option>
                                                            <option value="UG" data-kt-select2-country="{{ asset('/assets/media/flags/uganda.svg') }}">Uganda</option>
                                                            <option value="UA" data-kt-select2-country="{{ asset('/assets/media/flags/ukraine.svg') }}">Ukraine</option>
                                                            <option value="AE" data-kt-select2-country="{{ asset('/assets/media/flags/united-arab-emirates.svg') }}">United Arab Emirates</option>
                                                            <option value="GB" data-kt-select2-country="{{ asset('/assets/media/flags/united-kingdom.svg') }}">United Kingdom</option>
                                                            <option value="US" data-kt-select2-country="{{ asset('/assets/media/flags/united-states.svg') }}" selected="">United States</option>
                                                            <option value="UY" data-kt-select2-country="{{ asset('/assets/media/flags/uruguay.svg') }}">Uruguay</option>
                                                            <option value="UZ" data-kt-select2-country="{{ asset('/assets/media/flags/uzbekistan.svg') }}">Uzbekistan</option>
                                                            <option value="VU" data-kt-select2-country="{{ asset('/assets/media/flags/vanuatu.svg') }}">Vanuatu</option>
                                                            <option value="VE" data-kt-select2-country="{{ asset('/assets/media/flags/venezuela.svg') }}">Venezuela, Bolivarian Republic of</option>
                                                            <option value="VN" data-kt-select2-country="{{ asset('/assets/media/flags/vietnam.svg') }}">Vietnam</option>
                                                            <option value="VI" data-kt-select2-country="{{ asset('/assets/media/flags/virgin-islands.svg') }}">Virgin Islands</option>
                                                            <option value="YE" data-kt-select2-country="{{ asset('/assets/media/flags/yemen.svg') }}">Yemen</option>
                                                            <option value="ZM" data-kt-select2-country="{{ asset('/assets/media/flags/zambia.svg') }}">Zambia</option>
                                                            <option value="ZW" data-kt-select2-country="{{ asset('/assets/media/flags/zimbabwe.svg') }}">Zimbabwe</option>
                                                         </select>
                                                      </div>
                                                      <!--end::Input-->
                                                   </div>
                                                   <!--end::Input group-->
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label class="required fw-semibold fs-6 mb-2">Grace Period Type 1</label>
                                                      <!--end::Label-->
                                                      <!--begin::Input-->
                                                      <input type="number" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Grace Period Type 1" value="10"/>
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
                                 <!--end::Modal - Add task-->
                              </div>
                              <!--end::Card toolbar-->
                           </div>
                           <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <!--begin::Table-->
                           <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example1">
                              <thead>
                                 <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">S No.</th>
                                    <th class="min-w-125px">Country name</th>
                                    <th class="min-w-125px">Business name</th>
                                    <th class="min-w-125px">Partner Type</th>
                                    <th class="min-w-125px">Owner name</th>
                                    <th class="min-w-125px">Email</th>
                                    <th class="min-w-125px">Phone number</th>
                                    <th class="min-w-125px">Status</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                 </tr>
                              </thead>
                              <tbody class="text-gray-600 fw-semibold">
                                 <tr>
                                    <td>1</td>
                                    <td>America</td>
                                    <td>Javed Habib</td>
                                    <td>Salon</td>
                                    <td>Harry</td>
                                    <td>harry@gmail.com</td>
                                    <td>5247185642</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>India</td>
                                    <td>Javed Habib</td>
                                    <td>Salon</td>
                                    <td>Harry</td>
                                    <td>harry@gmail.com</td>
                                    <td>5247185642</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>Argentina</td>
                                    <td>Javed Habib</td>
                                    <td>Salon</td>
                                    <td>Harry</td>
                                    <td>harry@gmail.com</td>
                                    <td>5247185642</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>America</td>
                                    <td>Javed Habib</td>
                                    <td>Salon</td>
                                    <td>Harry</td>
                                    <td>harry@gmail.com</td>
                                    <td>5247185642</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td>India</td>
                                    <td>Javed Habib</td>
                                    <td>Salon</td>
                                    <td>Harry</td>
                                    <td>harry@gmail.com</td>
                                    <td>5247185642</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                     </div>
                     <!--end::Products-->
                     <!--begin::Products-->
                     <div class="card card-flush mb-8">
                        <div class="card-body align-items-center pb-0">
                           <!--begin::Title-->
                           <h3 class="card-title align-items-start flex-column">
                              <span class="card-label fw-bold text-gray-800">Grace period type2</span>
                           </h3>
                           <!--end::Title-->   
                           <span class="text-gray-400 fw-semibold d-block fs-6">20</span>
                        </div>
                        <!--begin::Card header-->
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <!--begin::Search-->
                              <div class="d-flex align-items-center position-relative my-1">
                                 <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                 <input type="text" data-kt-filter2="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
                              </div>
                              <!--end::Search-->
                           </div>
                           <!--end::Card title-->
                           <!--begin::Card toolbar-->
                           <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                              <!--begin::Card toolbar-->
                              <div class="card-toolbar">
                                 <!--begin::Toolbar-->
                                 <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                    <!--begin::Add Country-->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable1">
                                    <i class="ki-duotone ki-plus fs-2"></i>Edit
                                    </button>
                                    <!--end::Add Country-->
                                 </div>
                                 <!--end::Toolbar-->
                                 <!--begin::Modal - Add task-->
                                 <div class="modal fade" tabindex="-1" id="kt_modal_scrollable1">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title">Edit</h5>
                                             <!--begin::Close-->
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                             <!--end::Close-->
                                          </div>
                                          <div class="modal-body">
                                             <!--begin::Form-->
                                             <form class="form">
                                                <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7">
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label for="kt_docs_select2_country2" class="form-label">Select a country</label>
                                                      <div class="form-floating border rounded">
                                                         <select class="form-select" placeholder="..." id="kt_docs_select2_country2">
                                                            <option></option>
                                                            <option value="AF" data-kt-select2-country="{{ asset('/assets/media/flags/afghanistan.svg') }}">Afghanistan</option>
                                                            <option value="AX" data-kt-select2-country="{{ asset('/assets/media/flags/aland-islands.svg') }}">Aland Islands</option>
                                                            <option value="AL" data-kt-select2-country="{{ asset('/assets/media/flags/albania.svg') }}">Albania</option>
                                                            <option value="DZ" data-kt-select2-country="{{ asset('/assets/media/flags/algeria.svg') }}">Algeria</option>
                                                            <option value="AS" data-kt-select2-country="{{ asset('/assets/media/flags/american-samoa.svg') }}">American Samoa</option>
                                                            <option value="AD" data-kt-select2-country="{{ asset('/assets/media/flags/andorra.svg') }}">Andorra</option>
                                                            <option value="AO" data-kt-select2-country="{{ asset('/assets/media/flags/angola.svg') }}">Angola</option>
                                                            <option value="AI" data-kt-select2-country="{{ asset('/assets/media/flags/anguilla.svg') }}">Anguilla</option>
                                                            <option value="AG" data-kt-select2-country="{{ asset('/assets/media/flags/antigua-and-barbuda.svg') }}">Antigua and Barbuda</option>
                                                            <option value="AR" data-kt-select2-country="{{ asset('/assets/media/flags/argentina.svg') }}">Argentina</option>
                                                            <option value="AM" data-kt-select2-country="{{ asset('/assets/media/flags/armenia.svg') }}">Armenia</option>
                                                            <option value="AW" data-kt-select2-country="{{ asset('/assets/media/flags/aruba.svg') }}">Aruba</option>
                                                            <option value="AU" data-kt-select2-country="{{ asset('/assets/media/flags/australia.svg') }}">Australia</option>
                                                            <option value="AT" data-kt-select2-country="{{ asset('/assets/media/flags/austria.svg') }}">Austria</option>
                                                            <option value="AZ" data-kt-select2-country="{{ asset('/assets/media/flags/azerbaijan.svg') }}">Azerbaijan</option>
                                                            <option value="BS" data-kt-select2-country="{{ asset('/assets/media/flags/bahamas.svg') }}">Bahamas</option>
                                                            <option value="BH" data-kt-select2-country="{{ asset('/assets/media/flags/bahrain.svg') }}">Bahrain</option>
                                                            <option value="BD" data-kt-select2-country="{{ asset('/assets/media/flags/bangladesh.svg') }}">Bangladesh</option>
                                                            <option value="BB" data-kt-select2-country="{{ asset('/assets/media/flags/barbados.svg') }}">Barbados</option>
                                                            <option value="BY" data-kt-select2-country="{{ asset('/assets/media/flags/belarus.svg') }}">Belarus</option>
                                                            <option value="BE" data-kt-select2-country="{{ asset('/assets/media/flags/belgium.svg') }}">Belgium</option>
                                                            <option value="BZ" data-kt-select2-country="{{ asset('/assets/media/flags/belize.svg') }}">Belize</option>
                                                            <option value="BJ" data-kt-select2-country="{{ asset('/assets/media/flags/benin.svg') }}">Benin</option>
                                                            <option value="BM" data-kt-select2-country="{{ asset('/assets/media/flags/bermuda.svg') }}">Bermuda</option>
                                                            <option value="BT" data-kt-select2-country="{{ asset('/assets/media/flags/bhutan.svg') }}">Bhutan</option>
                                                            <option value="BO" data-kt-select2-country="{{ asset('/assets/media/flags/bolivia.svg') }}">Bolivia, Plurinational State of</option>
                                                            <option value="BQ" data-kt-select2-country="{{ asset('/assets/media/flags/bonaire.svg') }}">Bonaire, Sint Eustatius and Saba</option>
                                                            <option value="BA" data-kt-select2-country="{{ asset('/assets/media/flags/bosnia-and-herzegovina.svg') }}">Bosnia and Herzegovina</option>
                                                            <option value="BW" data-kt-select2-country="{{ asset('/assets/media/flags/botswana.svg') }}">Botswana</option>
                                                            <option value="BR" data-kt-select2-country="{{ asset('/assets/media/flags/brazil.svg') }}">Brazil</option>
                                                            <option value="IO" data-kt-select2-country="{{ asset('/assets/media/flags/british-indian-ocean-territory.svg') }}">British Indian Ocean Territory</option>
                                                            <option value="BN" data-kt-select2-country="{{ asset('/assets/media/flags/brunei.svg') }}">Brunei Darussalam</option>
                                                            <option value="BG" data-kt-select2-country="{{ asset('/assets/media/flags/bulgaria.svg') }}">Bulgaria</option>
                                                            <option value="BF" data-kt-select2-country="{{ asset('/assets/media/flags/burkina-faso.svg') }}">Burkina Faso</option>
                                                            <option value="BI" data-kt-select2-country="{{ asset('/assets/media/flags/burundi.svg') }}">Burundi</option>
                                                            <option value="KH" data-kt-select2-country="{{ asset('/assets/media/flags/cambodia.svg') }}">Cambodia</option>
                                                            <option value="CM" data-kt-select2-country="{{ asset('/assets/media/flags/cameroon.svg') }}">Cameroon</option>
                                                            <option value="CA" data-kt-select2-country="{{ asset('/assets/media/flags/canada.svg') }}">Canada</option>
                                                            <option value="CV" data-kt-select2-country="{{ asset('/assets/media/flags/cape-verde.svg') }}">Cape Verde</option>
                                                            <option value="KY" data-kt-select2-country="{{ asset('/assets/media/flags/cayman-islands.svg') }}">Cayman Islands</option>
                                                            <option value="CF" data-kt-select2-country="{{ asset('/assets/media/flags/central-african-republic.svg') }}">Central African Republic</option>
                                                            <option value="TD" data-kt-select2-country="{{ asset('/assets/media/flags/chad.svg') }}">Chad</option>
                                                            <option value="CL" data-kt-select2-country="{{ asset('/assets/media/flags/chile.svg') }}">Chile</option>
                                                            <option value="CN" data-kt-select2-country="{{ asset('/assets/media/flags/china.svg') }}">China</option>
                                                            <option value="CX" data-kt-select2-country="{{ asset('/assets/media/flags/christmas-island.svg') }}">Christmas Island</option>
                                                            <option value="CC" data-kt-select2-country="{{ asset('/assets/media/flags/cocos-island.svg') }}">Cocos (Keeling) Islands</option>
                                                            <option value="CO" data-kt-select2-country="{{ asset('/assets/media/flags/colombia.svg') }}">Colombia</option>
                                                            <option value="KM" data-kt-select2-country="{{ asset('/assets/media/flags/comoros.svg') }}">Comoros</option>
                                                            <option value="CK" data-kt-select2-country="{{ asset('/assets/media/flags/cook-islands.svg') }}">Cook Islands</option>
                                                            <option value="CR" data-kt-select2-country="{{ asset('/assets/media/flags/costa-rica.svg') }}">Costa Rica</option>
                                                            <option value="CI" data-kt-select2-country="{{ asset('/assets/media/flags/ivory-coast.svg') }}">Côte d'Ivoire</option>
                                                            <option value="HR" data-kt-select2-country="{{ asset('/assets/media/flags/croatia.svg') }}">Croatia</option>
                                                            <option value="CU" data-kt-select2-country="{{ asset('/assets/media/flags/cuba.svg') }}">Cuba</option>
                                                            <option value="CW" data-kt-select2-country="{{ asset('/assets/media/flags/curacao.svg') }}">Curaçao</option>
                                                            <option value="CZ" data-kt-select2-country="{{ asset('/assets/media/flags/czech-republic.svg') }}">Czech Republic</option>
                                                            <option value="DK" data-kt-select2-country="{{ asset('/assets/media/flags/denmark.svg') }}">Denmark</option>
                                                            <option value="DJ" data-kt-select2-country="{{ asset('/assets/media/flags/djibouti.svg') }}">Djibouti</option>
                                                            <option value="DM" data-kt-select2-country="{{ asset('/assets/media/flags/dominica.svg') }}">Dominica</option>
                                                            <option value="DO" data-kt-select2-country="{{ asset('/assets/media/flags/dominican-republic.svg') }}">Dominican Republic</option>
                                                            <option value="EC" data-kt-select2-country="{{ asset('/assets/media/flags/ecuador.svg') }}">Ecuador</option>
                                                            <option value="EG" data-kt-select2-country="{{ asset('/assets/media/flags/egypt.svg') }}">Egypt</option>
                                                            <option value="SV" data-kt-select2-country="{{ asset('/assets/media/flags/el-salvador.svg') }}">El Salvador</option>
                                                            <option value="GQ" data-kt-select2-country="{{ asset('/assets/media/flags/equatorial-guinea.svg') }}">Equatorial Guinea</option>
                                                            <option value="ER" data-kt-select2-country="{{ asset('/assets/media/flags/eritrea.svg') }}">Eritrea</option>
                                                            <option value="EE" data-kt-select2-country="{{ asset('/assets/media/flags/estonia.svg') }}">Estonia</option>
                                                            <option value="ET" data-kt-select2-country="{{ asset('/assets/media/flags/ethiopia.svg') }}">Ethiopia</option>
                                                            <option value="FK" data-kt-select2-country="{{ asset('/assets/media/flags/falkland-islands.svg') }}">Falkland Islands (Malvinas)</option>
                                                            <option value="FJ" data-kt-select2-country="{{ asset('/assets/media/flags/fiji.svg') }}">Fiji</option>
                                                            <option value="FI" data-kt-select2-country="{{ asset('/assets/media/flags/finland.svg') }}">Finland</option>
                                                            <option value="FR" data-kt-select2-country="{{ asset('/assets/media/flags/france.svg') }}">France</option>
                                                            <option value="PF" data-kt-select2-country="{{ asset('/assets/media/flags/french-polynesia.svg') }}">French Polynesia</option>
                                                            <option value="GA" data-kt-select2-country="{{ asset('/assets/media/flags/gabon.svg') }}">Gabon</option>
                                                            <option value="GM" data-kt-select2-country="{{ asset('/assets/media/flags/gambia.svg') }}">Gambia</option>
                                                            <option value="GE" data-kt-select2-country="{{ asset('/assets/media/flags/georgia.svg') }}">Georgia</option>
                                                            <option value="DE" data-kt-select2-country="{{ asset('/assets/media/flags/germany.svg') }}">Germany</option>
                                                            <option value="GH" data-kt-select2-country="{{ asset('/assets/media/flags/ghana.svg') }}">Ghana</option>
                                                            <option value="GI" data-kt-select2-country="{{ asset('/assets/media/flags/gibraltar.svg') }}">Gibraltar</option>
                                                            <option value="GR" data-kt-select2-country="{{ asset('/assets/media/flags/greece.svg') }}">Greece</option>
                                                            <option value="GL" data-kt-select2-country="{{ asset('/assets/media/flags/greenland.svg') }}">Greenland</option>
                                                            <option value="GD" data-kt-select2-country="{{ asset('/assets/media/flags/grenada.svg') }}">Grenada</option>
                                                            <option value="GU" data-kt-select2-country="{{ asset('/assets/media/flags/guam.svg') }}">Guam</option>
                                                            <option value="GT" data-kt-select2-country="{{ asset('/assets/media/flags/guatemala.svg') }}">Guatemala</option>
                                                            <option value="GG" data-kt-select2-country="{{ asset('/assets/media/flags/guernsey.svg') }}">Guernsey</option>
                                                            <option value="GN" data-kt-select2-country="{{ asset('/assets/media/flags/guinea.svg') }}">Guinea</option>
                                                            <option value="GW" data-kt-select2-country="{{ asset('/assets/media/flags/guinea-bissau.svg') }}">Guinea-Bissau</option>
                                                            <option value="HT" data-kt-select2-country="{{ asset('/assets/media/flags/haiti.svg') }}">Haiti</option>
                                                            <option value="VA" data-kt-select2-country="{{ asset('/assets/media/flags/vatican-city.svg') }}">Holy See (Vatican City State)</option>
                                                            <option value="HN" data-kt-select2-country="{{ asset('/assets/media/flags/honduras.svg') }}">Honduras</option>
                                                            <option value="HK" data-kt-select2-country="{{ asset('/assets/media/flags/hong-kong.svg') }}">Hong Kong</option>
                                                            <option value="HU" data-kt-select2-country="{{ asset('/assets/media/flags/hungary.svg') }}">Hungary</option>
                                                            <option value="IS" data-kt-select2-country="{{ asset('/assets/media/flags/iceland.svg') }}">Iceland</option>
                                                            <option value="IN" data-kt-select2-country="{{ asset('/assets/media/flags/india.svg') }}">India</option>
                                                            <option value="ID" data-kt-select2-country="{{ asset('/assets/media/flags/indonesia.svg') }}">Indonesia</option>
                                                            <option value="IR" data-kt-select2-country="{{ asset('/assets/media/flags/iran.svg') }}">Iran, Islamic Republic of</option>
                                                            <option value="IQ" data-kt-select2-country="{{ asset('/assets/media/flags/iraq.svg') }}">Iraq</option>
                                                            <option value="IE" data-kt-select2-country="{{ asset('/assets/media/flags/ireland.svg') }}">Ireland</option>
                                                            <option value="IM" data-kt-select2-country="{{ asset('/assets/media/flags/isle-of-man.svg') }}">Isle of Man</option>
                                                            <option value="IL" data-kt-select2-country="{{ asset('/assets/media/flags/israel.svg') }}">Israel</option>
                                                            <option value="IT" data-kt-select2-country="{{ asset('/assets/media/flags/italy.svg') }}">Italy</option>
                                                            <option value="JM" data-kt-select2-country="{{ asset('/assets/media/flags/jamaica.svg') }}">Jamaica</option>
                                                            <option value="JP" data-kt-select2-country="{{ asset('/assets/media/flags/japan.svg') }}">Japan</option>
                                                            <option value="JE" data-kt-select2-country="{{ asset('/assets/media/flags/jersey.svg') }}">Jersey</option>
                                                            <option value="JO" data-kt-select2-country="{{ asset('/assets/media/flags/jordan.svg') }}">Jordan</option>
                                                            <option value="KZ" data-kt-select2-country="{{ asset('/assets/media/flags/kazakhstan.svg') }}">Kazakhstan</option>
                                                            <option value="KE" data-kt-select2-country="{{ asset('/assets/media/flags/kenya.svg') }}">Kenya</option>
                                                            <option value="KI" data-kt-select2-country="{{ asset('/assets/media/flags/kiribati.svg') }}">Kiribati</option>
                                                            <option value="KP" data-kt-select2-country="{{ asset('/assets/media/flags/north-korea.svg') }}">Korea, Democratic People's Republic of</option>
                                                            <option value="KW" data-kt-select2-country="{{ asset('/assets/media/flags/kuwait.svg') }}">Kuwait</option>
                                                            <option value="KG" data-kt-select2-country="{{ asset('/assets/media/flags/kyrgyzstan.svg') }}">Kyrgyzstan</option>
                                                            <option value="LA" data-kt-select2-country="{{ asset('/assets/media/flags/laos.svg') }}">Lao People's Democratic Republic</option>
                                                            <option value="LV" data-kt-select2-country="{{ asset('/assets/media/flags/latvia.svg') }}">Latvia</option>
                                                            <option value="LB" data-kt-select2-country="{{ asset('/assets/media/flags/lebanon.svg') }}">Lebanon</option>
                                                            <option value="LS" data-kt-select2-country="{{ asset('/assets/media/flags/lesotho.svg') }}">Lesotho</option>
                                                            <option value="LR" data-kt-select2-country="{{ asset('/assets/media/flags/liberia.svg') }}">Liberia</option>
                                                            <option value="LY" data-kt-select2-country="{{ asset('/assets/media/flags/libya.svg') }}">Libya</option>
                                                            <option value="LI" data-kt-select2-country="{{ asset('/assets/media/flags/liechtenstein.svg') }}">Liechtenstein</option>
                                                            <option value="LT" data-kt-select2-country="{{ asset('/assets/media/flags/lithuania.svg') }}">Lithuania</option>
                                                            <option value="LU" data-kt-select2-country="{{ asset('/assets/media/flags/luxembourg.svg') }}">Luxembourg</option>
                                                            <option value="MO" data-kt-select2-country="{{ asset('/assets/media/flags/macao.svg') }}">Macao</option>
                                                            <option value="MG" data-kt-select2-country="{{ asset('/assets/media/flags/madagascar.svg') }}">Madagascar</option>
                                                            <option value="MW" data-kt-select2-country="{{ asset('/assets/media/flags/malawi.svg') }}">Malawi</option>
                                                            <option value="MY" data-kt-select2-country="{{ asset('/assets/media/flags/malaysia.svg') }}">Malaysia</option>
                                                            <option value="MV" data-kt-select2-country="{{ asset('/assets/media/flags/maldives.svg') }}">Maldives</option>
                                                            <option value="ML" data-kt-select2-country="{{ asset('/assets/media/flags/mali.svg') }}">Mali</option>
                                                            <option value="MT" data-kt-select2-country="{{ asset('/assets/media/flags/malta.svg') }}">Malta</option>
                                                            <option value="MH" data-kt-select2-country="{{ asset('/assets/media/flags/marshall-island.svg') }}">Marshall Islands</option>
                                                            <option value="MQ" data-kt-select2-country="{{ asset('/assets/media/flags/martinique.svg') }}">Martinique</option>
                                                            <option value="MR" data-kt-select2-country="{{ asset('/assets/media/flags/mauritania.svg') }}">Mauritania</option>
                                                            <option value="MU" data-kt-select2-country="{{ asset('/assets/media/flags/mauritius.svg') }}">Mauritius</option>
                                                            <option value="MX" data-kt-select2-country="{{ asset('/assets/media/flags/mexico.svg') }}">Mexico</option>
                                                            <option value="FM" data-kt-select2-country="{{ asset('/assets/media/flags/micronesia.svg') }}">Micronesia, Federated States of</option>
                                                            <option value="MD" data-kt-select2-country="{{ asset('/assets/media/flags/moldova.svg') }}">Moldova, Republic of</option>
                                                            <option value="MC" data-kt-select2-country="{{ asset('/assets/media/flags/monaco.svg') }}">Monaco</option>
                                                            <option value="MN" data-kt-select2-country="{{ asset('/assets/media/flags/mongolia.svg') }}">Mongolia</option>
                                                            <option value="ME" data-kt-select2-country="{{ asset('/assets/media/flags/montenegro.svg') }}">Montenegro</option>
                                                            <option value="MS" data-kt-select2-country="{{ asset('/assets/media/flags/montserrat.svg') }}">Montserrat</option>
                                                            <option value="MA" data-kt-select2-country="{{ asset('/assets/media/flags/morocco.svg') }}">Morocco</option>
                                                            <option value="MZ" data-kt-select2-country="{{ asset('/assets/media/flags/mozambique.svg') }}">Mozambique</option>
                                                            <option value="MM" data-kt-select2-country="{{ asset('/assets/media/flags/myanmar.svg') }}">Myanmar</option>
                                                            <option value="NA" data-kt-select2-country="{{ asset('/assets/media/flags/namibia.svg') }}">Namibia</option>
                                                            <option value="NR" data-kt-select2-country="{{ asset('/assets/media/flags/nauru.svg') }}">Nauru</option>
                                                            <option value="NP" data-kt-select2-country="{{ asset('/assets/media/flags/nepal.svg') }}">Nepal</option>
                                                            <option value="NL" data-kt-select2-country="{{ asset('/assets/media/flags/netherlands.svg') }}">Netherlands</option>
                                                            <option value="NZ" data-kt-select2-country="{{ asset('/assets/media/flags/new-zealand.svg') }}">New Zealand</option>
                                                            <option value="NI" data-kt-select2-country="{{ asset('/assets/media/flags/nicaragua.svg') }}">Nicaragua</option>
                                                            <option value="NE" data-kt-select2-country="{{ asset('/assets/media/flags/niger.svg') }}">Niger</option>
                                                            <option value="NG" data-kt-select2-country="{{ asset('/assets/media/flags/nigeria.svg') }}">Nigeria</option>
                                                            <option value="NU" data-kt-select2-country="{{ asset('/assets/media/flags/niue.svg') }}">Niue</option>
                                                            <option value="NF" data-kt-select2-country="{{ asset('/assets/media/flags/norfolk-island.svg') }}">Norfolk Island</option>
                                                            <option value="MP" data-kt-select2-country="{{ asset('/assets/media/flags/northern-mariana-islands.svg') }}">Northern Mariana Islands</option>
                                                            <option value="NO" data-kt-select2-country="{{ asset('/assets/media/flags/norway.svg') }}">Norway</option>
                                                            <option value="OM" data-kt-select2-country="{{ asset('/assets/media/flags/oman.svg') }}">Oman</option>
                                                            <option value="PK" data-kt-select2-country="{{ asset('/assets/media/flags/pakistan.svg') }}">Pakistan</option>
                                                            <option value="PW" data-kt-select2-country="{{ asset('/assets/media/flags/palau.svg') }}">Palau</option>
                                                            <option value="PS" data-kt-select2-country="{{ asset('/assets/media/flags/palestine.svg') }}">Palestinian Territory, Occupied</option>
                                                            <option value="PA" data-kt-select2-country="{{ asset('/assets/media/flags/panama.svg') }}">Panama</option>
                                                            <option value="PG" data-kt-select2-country="{{ asset('/assets/media/flags/papua-new-guinea.svg') }}">Papua New Guinea</option>
                                                            <option value="PY" data-kt-select2-country="{{ asset('/assets/media/flags/paraguay.svg') }}">Paraguay</option>
                                                            <option value="PE" data-kt-select2-country="{{ asset('/assets/media/flags/peru.svg') }}">Peru</option>
                                                            <option value="PH" data-kt-select2-country="{{ asset('/assets/media/flags/philippines.svg') }}">Philippines</option>
                                                            <option value="PL" data-kt-select2-country="{{ asset('/assets/media/flags/poland.svg') }}">Poland</option>
                                                            <option value="PT" data-kt-select2-country="{{ asset('/assets/media/flags/portugal.svg') }}">Portugal</option>
                                                            <option value="PR" data-kt-select2-country="{{ asset('/assets/media/flags/puerto-rico.svg') }}">Puerto Rico</option>
                                                            <option value="QA" data-kt-select2-country="{{ asset('/assets/media/flags/qatar.svg') }}">Qatar</option>
                                                            <option value="RO" data-kt-select2-country="{{ asset('/assets/media/flags/romania.svg') }}">Romania</option>
                                                            <option value="RU" data-kt-select2-country="{{ asset('/assets/media/flags/russia.svg') }}">Russian Federation</option>
                                                            <option value="RW" data-kt-select2-country="{{ asset('/assets/media/flags/rwanda.svg') }}">Rwanda</option>
                                                            <option value="BL" data-kt-select2-country="{{ asset('/assets/media/flags/st-barts.svg') }}">Saint Barthélemy</option>
                                                            <option value="KN" data-kt-select2-country="{{ asset('/assets/media/flags/saint-kitts-and-nevis.svg') }}">Saint Kitts and Nevis</option>
                                                            <option value="LC" data-kt-select2-country="{{ asset('/assets/media/flags/st-lucia.svg') }}">Saint Lucia</option>
                                                            <option value="MF" data-kt-select2-country="{{ asset('/assets/media/flags/sint-maarten.svg') }}">Saint Martin (French part)</option>
                                                            <option value="VC" data-kt-select2-country="{{ asset('/assets/media/flags/st-vincent-and-the-grenadines.svg') }}">Saint Vincent and the Grenadines</option>
                                                            <option value="WS" data-kt-select2-country="{{ asset('/assets/media/flags/samoa.svg') }}">Samoa</option>
                                                            <option value="SM" data-kt-select2-country="{{ asset('/assets/media/flags/san-marino.svg') }}">San Marino</option>
                                                            <option value="ST" data-kt-select2-country="{{ asset('/assets/media/flags/sao-tome-and-prince.svg') }}">Sao Tome and Principe</option>
                                                            <option value="SA" data-kt-select2-country="{{ asset('/assets/media/flags/saudi-arabia.svg') }}">Saudi Arabia</option>
                                                            <option value="SN" data-kt-select2-country="{{ asset('/assets/media/flags/senegal.svg') }}">Senegal</option>
                                                            <option value="RS" data-kt-select2-country="{{ asset('/assets/media/flags/serbia.svg') }}">Serbia</option>
                                                            <option value="SC" data-kt-select2-country="{{ asset('/assets/media/flags/seychelles.svg') }}">Seychelles</option>
                                                            <option value="SL" data-kt-select2-country="{{ asset('/assets/media/flags/sierra-leone.svg') }}">Sierra Leone</option>
                                                            <option value="SG" data-kt-select2-country="{{ asset('/assets/media/flags/singapore.svg') }}">Singapore</option>
                                                            <option value="SX" data-kt-select2-country="{{ asset('/assets/media/flags/sint-maarten.svg') }}">Sint Maarten (Dutch part)</option>
                                                            <option value="SK" data-kt-select2-country="{{ asset('/assets/media/flags/slovakia.svg') }}">Slovakia</option>
                                                            <option value="SI" data-kt-select2-country="{{ asset('/assets/media/flags/slovenia.svg') }}">Slovenia</option>
                                                            <option value="SB" data-kt-select2-country="{{ asset('/assets/media/flags/solomon-islands.svg') }}">Solomon Islands</option>
                                                            <option value="SO" data-kt-select2-country="{{ asset('/assets/media/flags/somalia.svg') }}">Somalia</option>
                                                            <option value="ZA" data-kt-select2-country="{{ asset('/assets/media/flags/south-africa.svg') }}">South Africa</option>
                                                            <option value="KR" data-kt-select2-country="{{ asset('/assets/media/flags/south-korea.svg') }}">South Korea</option>
                                                            <option value="SS" data-kt-select2-country="{{ asset('/assets/media/flags/south-sudan.svg') }}">South Sudan</option>
                                                            <option value="ES" data-kt-select2-country="{{ asset('/assets/media/flags/spain.svg') }}">Spain</option>
                                                            <option value="LK" data-kt-select2-country="{{ asset('/assets/media/flags/sri-lanka.svg') }}">Sri Lanka</option>
                                                            <option value="SD" data-kt-select2-country="{{ asset('/assets/media/flags/sudan.svg') }}">Sudan</option>
                                                            <option value="SR" data-kt-select2-country="{{ asset('/assets/media/flags/suriname.svg') }}">Suriname</option>
                                                            <option value="SZ" data-kt-select2-country="{{ asset('/assets/media/flags/swaziland.svg') }}">Swaziland</option>
                                                            <option value="SE" data-kt-select2-country="{{ asset('/assets/media/flags/sweden.svg') }}">Sweden</option>
                                                            <option value="CH" data-kt-select2-country="{{ asset('/assets/media/flags/switzerland.svg') }}">Switzerland</option>
                                                            <option value="SY" data-kt-select2-country="{{ asset('/assets/media/flags/syria.svg') }}">Syrian Arab Republic</option>
                                                            <option value="TW" data-kt-select2-country="{{ asset('/assets/media/flags/taiwan.svg') }}">Taiwan, Province of China</option>
                                                            <option value="TJ" data-kt-select2-country="{{ asset('/assets/media/flags/tajikistan.svg') }}">Tajikistan</option>
                                                            <option value="TZ" data-kt-select2-country="{{ asset('/assets/media/flags/tanzania.svg') }}">Tanzania, United Republic of</option>
                                                            <option value="TH" data-kt-select2-country="{{ asset('/assets/media/flags/thailand.svg') }}">Thailand</option>
                                                            <option value="TG" data-kt-select2-country="{{ asset('/assets/media/flags/togo.svg') }}">Togo</option>
                                                            <option value="TK" data-kt-select2-country="{{ asset('/assets/media/flags/tokelau.svg') }}">Tokelau</option>
                                                            <option value="TO" data-kt-select2-country="{{ asset('/assets/media/flags/tonga.svg') }}">Tonga</option>
                                                            <option value="TT" data-kt-select2-country="{{ asset('/assets/media/flags/trinidad-and-tobago.svg') }}">Trinidad and Tobago</option>
                                                            <option value="TN" data-kt-select2-country="{{ asset('/assets/media/flags/tunisia.svg') }}">Tunisia</option>
                                                            <option value="TR" data-kt-select2-country="{{ asset('/assets/media/flags/turkey.svg') }}">Turkey</option>
                                                            <option value="TM" data-kt-select2-country="{{ asset('/assets/media/flags/turkmenistan.svg') }}">Turkmenistan</option>
                                                            <option value="TC" data-kt-select2-country="{{ asset('/assets/media/flags/turks-and-caicos.svg') }}">Turks and Caicos Islands</option>
                                                            <option value="TV" data-kt-select2-country="{{ asset('/assets/media/flags/tuvalu.svg') }}">Tuvalu</option>
                                                            <option value="UG" data-kt-select2-country="{{ asset('/assets/media/flags/uganda.svg') }}">Uganda</option>
                                                            <option value="UA" data-kt-select2-country="{{ asset('/assets/media/flags/ukraine.svg') }}">Ukraine</option>
                                                            <option value="AE" data-kt-select2-country="{{ asset('/assets/media/flags/united-arab-emirates.svg') }}">United Arab Emirates</option>
                                                            <option value="GB" data-kt-select2-country="{{ asset('/assets/media/flags/united-kingdom.svg') }}">United Kingdom</option>
                                                            <option value="US" data-kt-select2-country="{{ asset('/assets/media/flags/united-states.svg') }}" selected="">United States</option>
                                                            <option value="UY" data-kt-select2-country="{{ asset('/assets/media/flags/uruguay.svg') }}">Uruguay</option>
                                                            <option value="UZ" data-kt-select2-country="{{ asset('/assets/media/flags/uzbekistan.svg') }}">Uzbekistan</option>
                                                            <option value="VU" data-kt-select2-country="{{ asset('/assets/media/flags/vanuatu.svg') }}">Vanuatu</option>
                                                            <option value="VE" data-kt-select2-country="{{ asset('/assets/media/flags/venezuela.svg') }}">Venezuela, Bolivarian Republic of</option>
                                                            <option value="VN" data-kt-select2-country="{{ asset('/assets/media/flags/vietnam.svg') }}">Vietnam</option>
                                                            <option value="VI" data-kt-select2-country="{{ asset('/assets/media/flags/virgin-islands.svg') }}">Virgin Islands</option>
                                                            <option value="YE" data-kt-select2-country="{{ asset('/assets/media/flags/yemen.svg') }}">Yemen</option>
                                                            <option value="ZM" data-kt-select2-country="{{ asset('/assets/media/flags/zambia.svg') }}">Zambia</option>
                                                            <option value="ZW" data-kt-select2-country="{{ asset('/assets/media/flags/zimbabwe.svg') }}">Zimbabwe</option>
                                                         </select>
                                                      </div>
                                                      <!--end::Input-->
                                                   </div>
                                                   <!--end::Input group-->
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label class="required fw-semibold fs-6 mb-2">Grace Period Type 2</label>
                                                      <!--end::Label-->
                                                      <!--begin::Input-->
                                                      <input type="number" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Grace Period Type 2" value="20"/>
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
                                 <!--end::Modal - Add task-->
                              </div>
                              <!--end::Card toolbar-->
                           </div>
                           <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <!--begin::Table-->
                           <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example2">
                              <thead>
                                 <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">S No.</th>
                                    <th class="min-w-125px">Country name</th>
                                    <th class="min-w-125px">Business name</th>
                                    <th class="min-w-125px">Partner Type</th>
                                    <th class="min-w-125px">Owner name</th>
                                    <th class="min-w-125px">Email</th>
                                    <th class="min-w-125px">Phone number</th>
                                    <th class="min-w-125px">Status</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                 </tr>
                              </thead>
                              <tbody class="text-gray-600 fw-semibold">
                                 <tr>
                                    <td>1</td>
                                    <td>America</td>
                                    <td>Javed Habib</td>
                                    <td>Salon</td>
                                    <td>Harry</td>
                                    <td>harry@gmail.com</td>
                                    <td>5247185642</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>India</td>
                                    <td>Javed Habib</td>
                                    <td>Salon</td>
                                    <td>Harry</td>
                                    <td>harry@gmail.com</td>
                                    <td>5247185642</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>Argentina</td>
                                    <td>Javed Habib</td>
                                    <td>Salon</td>
                                    <td>Harry</td>
                                    <td>harry@gmail.com</td>
                                    <td>5247185642</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>America</td>
                                    <td>Javed Habib</td>
                                    <td>Salon</td>
                                    <td>Harry</td>
                                    <td>harry@gmail.com</td>
                                    <td>5247185642</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td>India</td>
                                    <td>Javed Habib</td>
                                    <td>Salon</td>
                                    <td>Harry</td>
                                    <td>harry@gmail.com</td>
                                    <td>5247185642</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                     </div>
                     <!--end::Products-->
                     <!--begin::Products-->
                     <div class="card card-flush">
                        <div class="card-body align-items-center pb-0">
                           <!--begin::Title-->
                           <h3 class="card-title align-items-start flex-column">
                              <span class="card-label fw-bold text-gray-800">On-boarding fees</span>
                           </h3>
                           <!--end::Title-->   
                           <span class="text-gray-400 fw-semibold d-block fs-6">100</span>
                        </div>
                        <!--begin::Card header-->
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <!--begin::Search-->
                              <div class="d-flex align-items-center position-relative my-1">
                                 <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                 <input type="text" data-kt-filter3="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
                              </div>
                              <!--end::Search-->
                           </div>
                           <!--end::Card title-->
                           <!--begin::Card toolbar-->
                           <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                              <!--begin::Card toolbar-->
                              <div class="card-toolbar">
                                 <!--begin::Toolbar-->
                                 <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                    <!--begin::Add Country-->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_2">
                                    <i class="ki-duotone ki-plus fs-2"></i>Edit
                                    </button>
                                    <!--end::Add Country-->
                                 </div>
                                 <!--end::Toolbar-->
                                 <!--begin::Modal - Add task-->
                                 <div class="modal fade" tabindex="-1" id="kt_modal_scrollable_2">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title">Edit</h5>
                                             <!--begin::Close-->
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                             <!--end::Close-->
                                          </div>
                                          <div class="modal-body">
                                             <!--begin::Form-->
                                             <form class="form">
                                                <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7">
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label for="kt_docs_select2_country3" class="form-label">Select a country</label>
                                                      <div class="form-floating border rounded">
                                                         <select class="form-select" placeholder="..." id="kt_docs_select2_country3">
                                                            <option></option>
                                                            <option value="AF" data-kt-select2-country="{{ asset('/assets/media/flags/afghanistan.svg') }}">Afghanistan</option>
                                                            <option value="AX" data-kt-select2-country="{{ asset('/assets/media/flags/aland-islands.svg') }}">Aland Islands</option>
                                                            <option value="AL" data-kt-select2-country="{{ asset('/assets/media/flags/albania.svg') }}">Albania</option>
                                                            <option value="DZ" data-kt-select2-country="{{ asset('/assets/media/flags/algeria.svg') }}">Algeria</option>
                                                            <option value="AS" data-kt-select2-country="{{ asset('/assets/media/flags/american-samoa.svg') }}">American Samoa</option>
                                                            <option value="AD" data-kt-select2-country="{{ asset('/assets/media/flags/andorra.svg') }}">Andorra</option>
                                                            <option value="AO" data-kt-select2-country="{{ asset('/assets/media/flags/angola.svg') }}">Angola</option>
                                                            <option value="AI" data-kt-select2-country="{{ asset('/assets/media/flags/anguilla.svg') }}">Anguilla</option>
                                                            <option value="AG" data-kt-select2-country="{{ asset('/assets/media/flags/antigua-and-barbuda.svg') }}">Antigua and Barbuda</option>
                                                            <option value="AR" data-kt-select2-country="{{ asset('/assets/media/flags/argentina.svg') }}">Argentina</option>
                                                            <option value="AM" data-kt-select2-country="{{ asset('/assets/media/flags/armenia.svg') }}">Armenia</option>
                                                            <option value="AW" data-kt-select2-country="{{ asset('/assets/media/flags/aruba.svg') }}">Aruba</option>
                                                            <option value="AU" data-kt-select2-country="{{ asset('/assets/media/flags/australia.svg') }}">Australia</option>
                                                            <option value="AT" data-kt-select2-country="{{ asset('/assets/media/flags/austria.svg') }}">Austria</option>
                                                            <option value="AZ" data-kt-select2-country="{{ asset('/assets/media/flags/azerbaijan.svg') }}">Azerbaijan</option>
                                                            <option value="BS" data-kt-select2-country="{{ asset('/assets/media/flags/bahamas.svg') }}">Bahamas</option>
                                                            <option value="BH" data-kt-select2-country="{{ asset('/assets/media/flags/bahrain.svg') }}">Bahrain</option>
                                                            <option value="BD" data-kt-select2-country="{{ asset('/assets/media/flags/bangladesh.svg') }}">Bangladesh</option>
                                                            <option value="BB" data-kt-select2-country="{{ asset('/assets/media/flags/barbados.svg') }}">Barbados</option>
                                                            <option value="BY" data-kt-select2-country="{{ asset('/assets/media/flags/belarus.svg') }}">Belarus</option>
                                                            <option value="BE" data-kt-select2-country="{{ asset('/assets/media/flags/belgium.svg') }}">Belgium</option>
                                                            <option value="BZ" data-kt-select2-country="{{ asset('/assets/media/flags/belize.svg') }}">Belize</option>
                                                            <option value="BJ" data-kt-select2-country="{{ asset('/assets/media/flags/benin.svg') }}">Benin</option>
                                                            <option value="BM" data-kt-select2-country="{{ asset('/assets/media/flags/bermuda.svg') }}">Bermuda</option>
                                                            <option value="BT" data-kt-select2-country="{{ asset('/assets/media/flags/bhutan.svg') }}">Bhutan</option>
                                                            <option value="BO" data-kt-select2-country="{{ asset('/assets/media/flags/bolivia.svg') }}">Bolivia, Plurinational State of</option>
                                                            <option value="BQ" data-kt-select2-country="{{ asset('/assets/media/flags/bonaire.svg') }}">Bonaire, Sint Eustatius and Saba</option>
                                                            <option value="BA" data-kt-select2-country="{{ asset('/assets/media/flags/bosnia-and-herzegovina.svg') }}">Bosnia and Herzegovina</option>
                                                            <option value="BW" data-kt-select2-country="{{ asset('/assets/media/flags/botswana.svg') }}">Botswana</option>
                                                            <option value="BR" data-kt-select2-country="{{ asset('/assets/media/flags/brazil.svg') }}">Brazil</option>
                                                            <option value="IO" data-kt-select2-country="{{ asset('/assets/media/flags/british-indian-ocean-territory.svg') }}">British Indian Ocean Territory</option>
                                                            <option value="BN" data-kt-select2-country="{{ asset('/assets/media/flags/brunei.svg') }}">Brunei Darussalam</option>
                                                            <option value="BG" data-kt-select2-country="{{ asset('/assets/media/flags/bulgaria.svg') }}">Bulgaria</option>
                                                            <option value="BF" data-kt-select2-country="{{ asset('/assets/media/flags/burkina-faso.svg') }}">Burkina Faso</option>
                                                            <option value="BI" data-kt-select2-country="{{ asset('/assets/media/flags/burundi.svg') }}">Burundi</option>
                                                            <option value="KH" data-kt-select2-country="{{ asset('/assets/media/flags/cambodia.svg') }}">Cambodia</option>
                                                            <option value="CM" data-kt-select2-country="{{ asset('/assets/media/flags/cameroon.svg') }}">Cameroon</option>
                                                            <option value="CA" data-kt-select2-country="{{ asset('/assets/media/flags/canada.svg') }}">Canada</option>
                                                            <option value="CV" data-kt-select2-country="{{ asset('/assets/media/flags/cape-verde.svg') }}">Cape Verde</option>
                                                            <option value="KY" data-kt-select2-country="{{ asset('/assets/media/flags/cayman-islands.svg') }}">Cayman Islands</option>
                                                            <option value="CF" data-kt-select2-country="{{ asset('/assets/media/flags/central-african-republic.svg') }}">Central African Republic</option>
                                                            <option value="TD" data-kt-select2-country="{{ asset('/assets/media/flags/chad.svg') }}">Chad</option>
                                                            <option value="CL" data-kt-select2-country="{{ asset('/assets/media/flags/chile.svg') }}">Chile</option>
                                                            <option value="CN" data-kt-select2-country="{{ asset('/assets/media/flags/china.svg') }}">China</option>
                                                            <option value="CX" data-kt-select2-country="{{ asset('/assets/media/flags/christmas-island.svg') }}">Christmas Island</option>
                                                            <option value="CC" data-kt-select2-country="{{ asset('/assets/media/flags/cocos-island.svg') }}">Cocos (Keeling) Islands</option>
                                                            <option value="CO" data-kt-select2-country="{{ asset('/assets/media/flags/colombia.svg') }}">Colombia</option>
                                                            <option value="KM" data-kt-select2-country="{{ asset('/assets/media/flags/comoros.svg') }}">Comoros</option>
                                                            <option value="CK" data-kt-select2-country="{{ asset('/assets/media/flags/cook-islands.svg') }}">Cook Islands</option>
                                                            <option value="CR" data-kt-select2-country="{{ asset('/assets/media/flags/costa-rica.svg') }}">Costa Rica</option>
                                                            <option value="CI" data-kt-select2-country="{{ asset('/assets/media/flags/ivory-coast.svg') }}">Côte d'Ivoire</option>
                                                            <option value="HR" data-kt-select2-country="{{ asset('/assets/media/flags/croatia.svg') }}">Croatia</option>
                                                            <option value="CU" data-kt-select2-country="{{ asset('/assets/media/flags/cuba.svg') }}">Cuba</option>
                                                            <option value="CW" data-kt-select2-country="{{ asset('/assets/media/flags/curacao.svg') }}">Curaçao</option>
                                                            <option value="CZ" data-kt-select2-country="{{ asset('/assets/media/flags/czech-republic.svg') }}">Czech Republic</option>
                                                            <option value="DK" data-kt-select2-country="{{ asset('/assets/media/flags/denmark.svg') }}">Denmark</option>
                                                            <option value="DJ" data-kt-select2-country="{{ asset('/assets/media/flags/djibouti.svg') }}">Djibouti</option>
                                                            <option value="DM" data-kt-select2-country="{{ asset('/assets/media/flags/dominica.svg') }}">Dominica</option>
                                                            <option value="DO" data-kt-select2-country="{{ asset('/assets/media/flags/dominican-republic.svg') }}">Dominican Republic</option>
                                                            <option value="EC" data-kt-select2-country="{{ asset('/assets/media/flags/ecuador.svg') }}">Ecuador</option>
                                                            <option value="EG" data-kt-select2-country="{{ asset('/assets/media/flags/egypt.svg') }}">Egypt</option>
                                                            <option value="SV" data-kt-select2-country="{{ asset('/assets/media/flags/el-salvador.svg') }}">El Salvador</option>
                                                            <option value="GQ" data-kt-select2-country="{{ asset('/assets/media/flags/equatorial-guinea.svg') }}">Equatorial Guinea</option>
                                                            <option value="ER" data-kt-select2-country="{{ asset('/assets/media/flags/eritrea.svg') }}">Eritrea</option>
                                                            <option value="EE" data-kt-select2-country="{{ asset('/assets/media/flags/estonia.svg') }}">Estonia</option>
                                                            <option value="ET" data-kt-select2-country="{{ asset('/assets/media/flags/ethiopia.svg') }}">Ethiopia</option>
                                                            <option value="FK" data-kt-select2-country="{{ asset('/assets/media/flags/falkland-islands.svg') }}">Falkland Islands (Malvinas)</option>
                                                            <option value="FJ" data-kt-select2-country="{{ asset('/assets/media/flags/fiji.svg') }}">Fiji</option>
                                                            <option value="FI" data-kt-select2-country="{{ asset('/assets/media/flags/finland.svg') }}">Finland</option>
                                                            <option value="FR" data-kt-select2-country="{{ asset('/assets/media/flags/france.svg') }}">France</option>
                                                            <option value="PF" data-kt-select2-country="{{ asset('/assets/media/flags/french-polynesia.svg') }}">French Polynesia</option>
                                                            <option value="GA" data-kt-select2-country="{{ asset('/assets/media/flags/gabon.svg') }}">Gabon</option>
                                                            <option value="GM" data-kt-select2-country="{{ asset('/assets/media/flags/gambia.svg') }}">Gambia</option>
                                                            <option value="GE" data-kt-select2-country="{{ asset('/assets/media/flags/georgia.svg') }}">Georgia</option>
                                                            <option value="DE" data-kt-select2-country="{{ asset('/assets/media/flags/germany.svg') }}">Germany</option>
                                                            <option value="GH" data-kt-select2-country="{{ asset('/assets/media/flags/ghana.svg') }}">Ghana</option>
                                                            <option value="GI" data-kt-select2-country="{{ asset('/assets/media/flags/gibraltar.svg') }}">Gibraltar</option>
                                                            <option value="GR" data-kt-select2-country="{{ asset('/assets/media/flags/greece.svg') }}">Greece</option>
                                                            <option value="GL" data-kt-select2-country="{{ asset('/assets/media/flags/greenland.svg') }}">Greenland</option>
                                                            <option value="GD" data-kt-select2-country="{{ asset('/assets/media/flags/grenada.svg') }}">Grenada</option>
                                                            <option value="GU" data-kt-select2-country="{{ asset('/assets/media/flags/guam.svg') }}">Guam</option>
                                                            <option value="GT" data-kt-select2-country="{{ asset('/assets/media/flags/guatemala.svg') }}">Guatemala</option>
                                                            <option value="GG" data-kt-select2-country="{{ asset('/assets/media/flags/guernsey.svg') }}">Guernsey</option>
                                                            <option value="GN" data-kt-select2-country="{{ asset('/assets/media/flags/guinea.svg') }}">Guinea</option>
                                                            <option value="GW" data-kt-select2-country="{{ asset('/assets/media/flags/guinea-bissau.svg') }}">Guinea-Bissau</option>
                                                            <option value="HT" data-kt-select2-country="{{ asset('/assets/media/flags/haiti.svg') }}">Haiti</option>
                                                            <option value="VA" data-kt-select2-country="{{ asset('/assets/media/flags/vatican-city.svg') }}">Holy See (Vatican City State)</option>
                                                            <option value="HN" data-kt-select2-country="{{ asset('/assets/media/flags/honduras.svg') }}">Honduras</option>
                                                            <option value="HK" data-kt-select2-country="{{ asset('/assets/media/flags/hong-kong.svg') }}">Hong Kong</option>
                                                            <option value="HU" data-kt-select2-country="{{ asset('/assets/media/flags/hungary.svg') }}">Hungary</option>
                                                            <option value="IS" data-kt-select2-country="{{ asset('/assets/media/flags/iceland.svg') }}">Iceland</option>
                                                            <option value="IN" data-kt-select2-country="{{ asset('/assets/media/flags/india.svg') }}">India</option>
                                                            <option value="ID" data-kt-select2-country="{{ asset('/assets/media/flags/indonesia.svg') }}">Indonesia</option>
                                                            <option value="IR" data-kt-select2-country="{{ asset('/assets/media/flags/iran.svg') }}">Iran, Islamic Republic of</option>
                                                            <option value="IQ" data-kt-select2-country="{{ asset('/assets/media/flags/iraq.svg') }}">Iraq</option>
                                                            <option value="IE" data-kt-select2-country="{{ asset('/assets/media/flags/ireland.svg') }}">Ireland</option>
                                                            <option value="IM" data-kt-select2-country="{{ asset('/assets/media/flags/isle-of-man.svg') }}">Isle of Man</option>
                                                            <option value="IL" data-kt-select2-country="{{ asset('/assets/media/flags/israel.svg') }}">Israel</option>
                                                            <option value="IT" data-kt-select2-country="{{ asset('/assets/media/flags/italy.svg') }}">Italy</option>
                                                            <option value="JM" data-kt-select2-country="{{ asset('/assets/media/flags/jamaica.svg') }}">Jamaica</option>
                                                            <option value="JP" data-kt-select2-country="{{ asset('/assets/media/flags/japan.svg') }}">Japan</option>
                                                            <option value="JE" data-kt-select2-country="{{ asset('/assets/media/flags/jersey.svg') }}">Jersey</option>
                                                            <option value="JO" data-kt-select2-country="{{ asset('/assets/media/flags/jordan.svg') }}">Jordan</option>
                                                            <option value="KZ" data-kt-select2-country="{{ asset('/assets/media/flags/kazakhstan.svg') }}">Kazakhstan</option>
                                                            <option value="KE" data-kt-select2-country="{{ asset('/assets/media/flags/kenya.svg') }}">Kenya</option>
                                                            <option value="KI" data-kt-select2-country="{{ asset('/assets/media/flags/kiribati.svg') }}">Kiribati</option>
                                                            <option value="KP" data-kt-select2-country="{{ asset('/assets/media/flags/north-korea.svg') }}">Korea, Democratic People's Republic of</option>
                                                            <option value="KW" data-kt-select2-country="{{ asset('/assets/media/flags/kuwait.svg') }}">Kuwait</option>
                                                            <option value="KG" data-kt-select2-country="{{ asset('/assets/media/flags/kyrgyzstan.svg') }}">Kyrgyzstan</option>
                                                            <option value="LA" data-kt-select2-country="{{ asset('/assets/media/flags/laos.svg') }}">Lao People's Democratic Republic</option>
                                                            <option value="LV" data-kt-select2-country="{{ asset('/assets/media/flags/latvia.svg') }}">Latvia</option>
                                                            <option value="LB" data-kt-select2-country="{{ asset('/assets/media/flags/lebanon.svg') }}">Lebanon</option>
                                                            <option value="LS" data-kt-select2-country="{{ asset('/assets/media/flags/lesotho.svg') }}">Lesotho</option>
                                                            <option value="LR" data-kt-select2-country="{{ asset('/assets/media/flags/liberia.svg') }}">Liberia</option>
                                                            <option value="LY" data-kt-select2-country="{{ asset('/assets/media/flags/libya.svg') }}">Libya</option>
                                                            <option value="LI" data-kt-select2-country="{{ asset('/assets/media/flags/liechtenstein.svg') }}">Liechtenstein</option>
                                                            <option value="LT" data-kt-select2-country="{{ asset('/assets/media/flags/lithuania.svg') }}">Lithuania</option>
                                                            <option value="LU" data-kt-select2-country="{{ asset('/assets/media/flags/luxembourg.svg') }}">Luxembourg</option>
                                                            <option value="MO" data-kt-select2-country="{{ asset('/assets/media/flags/macao.svg') }}">Macao</option>
                                                            <option value="MG" data-kt-select2-country="{{ asset('/assets/media/flags/madagascar.svg') }}">Madagascar</option>
                                                            <option value="MW" data-kt-select2-country="{{ asset('/assets/media/flags/malawi.svg') }}">Malawi</option>
                                                            <option value="MY" data-kt-select2-country="{{ asset('/assets/media/flags/malaysia.svg') }}">Malaysia</option>
                                                            <option value="MV" data-kt-select2-country="{{ asset('/assets/media/flags/maldives.svg') }}">Maldives</option>
                                                            <option value="ML" data-kt-select2-country="{{ asset('/assets/media/flags/mali.svg') }}">Mali</option>
                                                            <option value="MT" data-kt-select2-country="{{ asset('/assets/media/flags/malta.svg') }}">Malta</option>
                                                            <option value="MH" data-kt-select2-country="{{ asset('/assets/media/flags/marshall-island.svg') }}">Marshall Islands</option>
                                                            <option value="MQ" data-kt-select2-country="{{ asset('/assets/media/flags/martinique.svg') }}">Martinique</option>
                                                            <option value="MR" data-kt-select2-country="{{ asset('/assets/media/flags/mauritania.svg') }}">Mauritania</option>
                                                            <option value="MU" data-kt-select2-country="{{ asset('/assets/media/flags/mauritius.svg') }}">Mauritius</option>
                                                            <option value="MX" data-kt-select2-country="{{ asset('/assets/media/flags/mexico.svg') }}">Mexico</option>
                                                            <option value="FM" data-kt-select2-country="{{ asset('/assets/media/flags/micronesia.svg') }}">Micronesia, Federated States of</option>
                                                            <option value="MD" data-kt-select2-country="{{ asset('/assets/media/flags/moldova.svg') }}">Moldova, Republic of</option>
                                                            <option value="MC" data-kt-select2-country="{{ asset('/assets/media/flags/monaco.svg') }}">Monaco</option>
                                                            <option value="MN" data-kt-select2-country="{{ asset('/assets/media/flags/mongolia.svg') }}">Mongolia</option>
                                                            <option value="ME" data-kt-select2-country="{{ asset('/assets/media/flags/montenegro.svg') }}">Montenegro</option>
                                                            <option value="MS" data-kt-select2-country="{{ asset('/assets/media/flags/montserrat.svg') }}">Montserrat</option>
                                                            <option value="MA" data-kt-select2-country="{{ asset('/assets/media/flags/morocco.svg') }}">Morocco</option>
                                                            <option value="MZ" data-kt-select2-country="{{ asset('/assets/media/flags/mozambique.svg') }}">Mozambique</option>
                                                            <option value="MM" data-kt-select2-country="{{ asset('/assets/media/flags/myanmar.svg') }}">Myanmar</option>
                                                            <option value="NA" data-kt-select2-country="{{ asset('/assets/media/flags/namibia.svg') }}">Namibia</option>
                                                            <option value="NR" data-kt-select2-country="{{ asset('/assets/media/flags/nauru.svg') }}">Nauru</option>
                                                            <option value="NP" data-kt-select2-country="{{ asset('/assets/media/flags/nepal.svg') }}">Nepal</option>
                                                            <option value="NL" data-kt-select2-country="{{ asset('/assets/media/flags/netherlands.svg') }}">Netherlands</option>
                                                            <option value="NZ" data-kt-select2-country="{{ asset('/assets/media/flags/new-zealand.svg') }}">New Zealand</option>
                                                            <option value="NI" data-kt-select2-country="{{ asset('/assets/media/flags/nicaragua.svg') }}">Nicaragua</option>
                                                            <option value="NE" data-kt-select2-country="{{ asset('/assets/media/flags/niger.svg') }}">Niger</option>
                                                            <option value="NG" data-kt-select2-country="{{ asset('/assets/media/flags/nigeria.svg') }}">Nigeria</option>
                                                            <option value="NU" data-kt-select2-country="{{ asset('/assets/media/flags/niue.svg') }}">Niue</option>
                                                            <option value="NF" data-kt-select2-country="{{ asset('/assets/media/flags/norfolk-island.svg') }}">Norfolk Island</option>
                                                            <option value="MP" data-kt-select2-country="{{ asset('/assets/media/flags/northern-mariana-islands.svg') }}">Northern Mariana Islands</option>
                                                            <option value="NO" data-kt-select2-country="{{ asset('/assets/media/flags/norway.svg') }}">Norway</option>
                                                            <option value="OM" data-kt-select2-country="{{ asset('/assets/media/flags/oman.svg') }}">Oman</option>
                                                            <option value="PK" data-kt-select2-country="{{ asset('/assets/media/flags/pakistan.svg') }}">Pakistan</option>
                                                            <option value="PW" data-kt-select2-country="{{ asset('/assets/media/flags/palau.svg') }}">Palau</option>
                                                            <option value="PS" data-kt-select2-country="{{ asset('/assets/media/flags/palestine.svg') }}">Palestinian Territory, Occupied</option>
                                                            <option value="PA" data-kt-select2-country="{{ asset('/assets/media/flags/panama.svg') }}">Panama</option>
                                                            <option value="PG" data-kt-select2-country="{{ asset('/assets/media/flags/papua-new-guinea.svg') }}">Papua New Guinea</option>
                                                            <option value="PY" data-kt-select2-country="{{ asset('/assets/media/flags/paraguay.svg') }}">Paraguay</option>
                                                            <option value="PE" data-kt-select2-country="{{ asset('/assets/media/flags/peru.svg') }}">Peru</option>
                                                            <option value="PH" data-kt-select2-country="{{ asset('/assets/media/flags/philippines.svg') }}">Philippines</option>
                                                            <option value="PL" data-kt-select2-country="{{ asset('/assets/media/flags/poland.svg') }}">Poland</option>
                                                            <option value="PT" data-kt-select2-country="{{ asset('/assets/media/flags/portugal.svg') }}">Portugal</option>
                                                            <option value="PR" data-kt-select2-country="{{ asset('/assets/media/flags/puerto-rico.svg') }}">Puerto Rico</option>
                                                            <option value="QA" data-kt-select2-country="{{ asset('/assets/media/flags/qatar.svg') }}">Qatar</option>
                                                            <option value="RO" data-kt-select2-country="{{ asset('/assets/media/flags/romania.svg') }}">Romania</option>
                                                            <option value="RU" data-kt-select2-country="{{ asset('/assets/media/flags/russia.svg') }}">Russian Federation</option>
                                                            <option value="RW" data-kt-select2-country="{{ asset('/assets/media/flags/rwanda.svg') }}">Rwanda</option>
                                                            <option value="BL" data-kt-select2-country="{{ asset('/assets/media/flags/st-barts.svg') }}">Saint Barthélemy</option>
                                                            <option value="KN" data-kt-select2-country="{{ asset('/assets/media/flags/saint-kitts-and-nevis.svg') }}">Saint Kitts and Nevis</option>
                                                            <option value="LC" data-kt-select2-country="{{ asset('/assets/media/flags/st-lucia.svg') }}">Saint Lucia</option>
                                                            <option value="MF" data-kt-select2-country="{{ asset('/assets/media/flags/sint-maarten.svg') }}">Saint Martin (French part)</option>
                                                            <option value="VC" data-kt-select2-country="{{ asset('/assets/media/flags/st-vincent-and-the-grenadines.svg') }}">Saint Vincent and the Grenadines</option>
                                                            <option value="WS" data-kt-select2-country="{{ asset('/assets/media/flags/samoa.svg') }}">Samoa</option>
                                                            <option value="SM" data-kt-select2-country="{{ asset('/assets/media/flags/san-marino.svg') }}">San Marino</option>
                                                            <option value="ST" data-kt-select2-country="{{ asset('/assets/media/flags/sao-tome-and-prince.svg') }}">Sao Tome and Principe</option>
                                                            <option value="SA" data-kt-select2-country="{{ asset('/assets/media/flags/saudi-arabia.svg') }}">Saudi Arabia</option>
                                                            <option value="SN" data-kt-select2-country="{{ asset('/assets/media/flags/senegal.svg') }}">Senegal</option>
                                                            <option value="RS" data-kt-select2-country="{{ asset('/assets/media/flags/serbia.svg') }}">Serbia</option>
                                                            <option value="SC" data-kt-select2-country="{{ asset('/assets/media/flags/seychelles.svg') }}">Seychelles</option>
                                                            <option value="SL" data-kt-select2-country="{{ asset('/assets/media/flags/sierra-leone.svg') }}">Sierra Leone</option>
                                                            <option value="SG" data-kt-select2-country="{{ asset('/assets/media/flags/singapore.svg') }}">Singapore</option>
                                                            <option value="SX" data-kt-select2-country="{{ asset('/assets/media/flags/sint-maarten.svg') }}">Sint Maarten (Dutch part)</option>
                                                            <option value="SK" data-kt-select2-country="{{ asset('/assets/media/flags/slovakia.svg') }}">Slovakia</option>
                                                            <option value="SI" data-kt-select2-country="{{ asset('/assets/media/flags/slovenia.svg') }}">Slovenia</option>
                                                            <option value="SB" data-kt-select2-country="{{ asset('/assets/media/flags/solomon-islands.svg') }}">Solomon Islands</option>
                                                            <option value="SO" data-kt-select2-country="{{ asset('/assets/media/flags/somalia.svg') }}">Somalia</option>
                                                            <option value="ZA" data-kt-select2-country="{{ asset('/assets/media/flags/south-africa.svg') }}">South Africa</option>
                                                            <option value="KR" data-kt-select2-country="{{ asset('/assets/media/flags/south-korea.svg') }}">South Korea</option>
                                                            <option value="SS" data-kt-select2-country="{{ asset('/assets/media/flags/south-sudan.svg') }}">South Sudan</option>
                                                            <option value="ES" data-kt-select2-country="{{ asset('/assets/media/flags/spain.svg') }}">Spain</option>
                                                            <option value="LK" data-kt-select2-country="{{ asset('/assets/media/flags/sri-lanka.svg') }}">Sri Lanka</option>
                                                            <option value="SD" data-kt-select2-country="{{ asset('/assets/media/flags/sudan.svg') }}">Sudan</option>
                                                            <option value="SR" data-kt-select2-country="{{ asset('/assets/media/flags/suriname.svg') }}">Suriname</option>
                                                            <option value="SZ" data-kt-select2-country="{{ asset('/assets/media/flags/swaziland.svg') }}">Swaziland</option>
                                                            <option value="SE" data-kt-select2-country="{{ asset('/assets/media/flags/sweden.svg') }}">Sweden</option>
                                                            <option value="CH" data-kt-select2-country="{{ asset('/assets/media/flags/switzerland.svg') }}">Switzerland</option>
                                                            <option value="SY" data-kt-select2-country="{{ asset('/assets/media/flags/syria.svg') }}">Syrian Arab Republic</option>
                                                            <option value="TW" data-kt-select2-country="{{ asset('/assets/media/flags/taiwan.svg') }}">Taiwan, Province of China</option>
                                                            <option value="TJ" data-kt-select2-country="{{ asset('/assets/media/flags/tajikistan.svg') }}">Tajikistan</option>
                                                            <option value="TZ" data-kt-select2-country="{{ asset('/assets/media/flags/tanzania.svg') }}">Tanzania, United Republic of</option>
                                                            <option value="TH" data-kt-select2-country="{{ asset('/assets/media/flags/thailand.svg') }}">Thailand</option>
                                                            <option value="TG" data-kt-select2-country="{{ asset('/assets/media/flags/togo.svg') }}">Togo</option>
                                                            <option value="TK" data-kt-select2-country="{{ asset('/assets/media/flags/tokelau.svg') }}">Tokelau</option>
                                                            <option value="TO" data-kt-select2-country="{{ asset('/assets/media/flags/tonga.svg') }}">Tonga</option>
                                                            <option value="TT" data-kt-select2-country="{{ asset('/assets/media/flags/trinidad-and-tobago.svg') }}">Trinidad and Tobago</option>
                                                            <option value="TN" data-kt-select2-country="{{ asset('/assets/media/flags/tunisia.svg') }}">Tunisia</option>
                                                            <option value="TR" data-kt-select2-country="{{ asset('/assets/media/flags/turkey.svg') }}">Turkey</option>
                                                            <option value="TM" data-kt-select2-country="{{ asset('/assets/media/flags/turkmenistan.svg') }}">Turkmenistan</option>
                                                            <option value="TC" data-kt-select2-country="{{ asset('/assets/media/flags/turks-and-caicos.svg') }}">Turks and Caicos Islands</option>
                                                            <option value="TV" data-kt-select2-country="{{ asset('/assets/media/flags/tuvalu.svg') }}">Tuvalu</option>
                                                            <option value="UG" data-kt-select2-country="{{ asset('/assets/media/flags/uganda.svg') }}">Uganda</option>
                                                            <option value="UA" data-kt-select2-country="{{ asset('/assets/media/flags/ukraine.svg') }}">Ukraine</option>
                                                            <option value="AE" data-kt-select2-country="{{ asset('/assets/media/flags/united-arab-emirates.svg') }}">United Arab Emirates</option>
                                                            <option value="GB" data-kt-select2-country="{{ asset('/assets/media/flags/united-kingdom.svg') }}">United Kingdom</option>
                                                            <option value="US" data-kt-select2-country="{{ asset('/assets/media/flags/united-states.svg') }}" selected="">United States</option>
                                                            <option value="UY" data-kt-select2-country="{{ asset('/assets/media/flags/uruguay.svg') }}">Uruguay</option>
                                                            <option value="UZ" data-kt-select2-country="{{ asset('/assets/media/flags/uzbekistan.svg') }}">Uzbekistan</option>
                                                            <option value="VU" data-kt-select2-country="{{ asset('/assets/media/flags/vanuatu.svg') }}">Vanuatu</option>
                                                            <option value="VE" data-kt-select2-country="{{ asset('/assets/media/flags/venezuela.svg') }}">Venezuela, Bolivarian Republic of</option>
                                                            <option value="VN" data-kt-select2-country="{{ asset('/assets/media/flags/vietnam.svg') }}">Vietnam</option>
                                                            <option value="VI" data-kt-select2-country="{{ asset('/assets/media/flags/virgin-islands.svg') }}">Virgin Islands</option>
                                                            <option value="YE" data-kt-select2-country="{{ asset('/assets/media/flags/yemen.svg') }}">Yemen</option>
                                                            <option value="ZM" data-kt-select2-country="{{ asset('/assets/media/flags/zambia.svg') }}">Zambia</option>
                                                            <option value="ZW" data-kt-select2-country="{{ asset('/assets/media/flags/zimbabwe.svg') }}">Zimbabwe</option>
                                                         </select>
                                                      </div>
                                                      <!--end::Input-->
                                                   </div>
                                                   <!--end::Input group-->
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label class="required fw-semibold fs-6 mb-2">On-boarding fees</label>
                                                      <!--end::Label-->
                                                      <!--begin::Input-->
                                                      <input type="number" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="On-boarding fees" value="100"/>
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
                                 <!--end::Modal - Add task-->
                              </div>
                              <!--end::Card toolbar-->
                           </div>
                           <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <!--begin::Table-->
                           <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example3">
                              <thead>
                                 <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">S No.</th>
                                    <th class="min-w-125px">Country name</th>
                                    <th class="min-w-125px">Business name</th>
                                    <th class="min-w-125px">Partner Type</th>
                                    <th class="min-w-125px">Owner name</th>
                                    <th class="min-w-125px">Email</th>
                                    <th class="min-w-125px">Phone number</th>
                                    <th class="min-w-125px">Status</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                 </tr>
                              </thead>
                              <tbody class="text-gray-600 fw-semibold">
                                 <tr>
                                    <td>1</td>
                                    <td>America</td>
                                    <td>Javed Habib</td>
                                    <td>Salon</td>
                                    <td>Harry</td>
                                    <td>harry@gmail.com</td>
                                    <td>5247185642</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>India</td>
                                    <td>Javed Habib</td>
                                    <td>Salon</td>
                                    <td>Harry</td>
                                    <td>harry@gmail.com</td>
                                    <td>5247185642</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>Argentina</td>
                                    <td>Javed Habib</td>
                                    <td>Salon</td>
                                    <td>Harry</td>
                                    <td>harry@gmail.com</td>
                                    <td>5247185642</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>America</td>
                                    <td>Javed Habib</td>
                                    <td>Salon</td>
                                    <td>Harry</td>
                                    <td>harry@gmail.com</td>
                                    <td>5247185642</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td>India</td>
                                    <td>Javed Habib</td>
                                    <td>Salon</td>
                                    <td>Harry</td>
                                    <td>harry@gmail.com</td>
                                    <td>5247185642</td>
                                    <td>
                                       <div class="badge badge-light-success fw-bold">Enabled</div>
                                    </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                     </div>
                     <!--end::Products-->
                  </div>
                  <!--end::Tab pane-->
                  <!--begin::Tab pane-->
                  <div class="tab-pane fade" id="subscriptioinconfig2" role="tab-panel">
                     <!--begin::Products-->
                     <div class="card card-flush">
                     @if(session()->has('message'))
               <div class="card-header display-message">
                  <div class="alert alert-success">
                     {{ session()->get('message') }}
                  </div>
               </div>
               @endif
               @if(session()->has('error'))
               <div class="card-header display-message">
                  <div class="alert alert-danger">
                     {{ session()->get('error') }}
                  </div>
               </div>
               @endif
                        <!--begin::Card header-->
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <!--begin::Search-->
                              <div class="d-flex align-items-center position-relative my-1">
                                 <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                 <input type="text" data-kt-filter4="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search" />
                              </div>
                              <!--end::Search-->
                           </div>
                           <!--end::Card title-->
                           <!--begin::Card toolbar-->
                           <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                              <!--begin::Card toolbar-->
                              <div class="card-toolbar">
                                 <!--begin::Toolbar-->
                                 <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                    <!--begin::Add Country-->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_3">
                                    <i class="ki-duotone ki-plus fs-2"></i>Add Subscription Plan
                                    </button>
                                    <!--end::Add Country-->
                                 </div>
                                 <!--end::Toolbar-->
                                 <!--begin::Modal - Add task-->
                                 <div class="modal fade" tabindex="-1" id="kt_modal_scrollable_3">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title">Add Subscription Plan</h5>
                                             <!--begin::Close-->
                                             <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                                             </div>
                                             <!--end::Close-->
                                          </div>
                                          <div class="modal-body">
                                             <!--begin::Form-->
                                             <form class="form" action = "{{ url('admin/settings/subscriptionplan')}}" method = "post">
                                             @csrf  
                                             <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7">
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label class="required fw-semibold fs-6 mb-2">Plan name</label>
                                                      <!--end::Label-->
                                                      <!--begin::Input-->
                                                      <input type="text" name="planname" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Plan name"/>
                                                      <!--end::Input-->
                                                   </div>
                                                   <!--end::Input group-->
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label class="required fw-semibold fs-6 mb-2">Cost</label>
                                                      <!--end::Label-->
                                                      <!--begin::Input-->
                                                      <input type="number" name="cost" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Cost"/>
                                                      <!--end::Input-->
                                                   </div>
                                                   <!--end::Input group-->
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label for="kt_docs_select2_country4" class="form-label">Select a country</label>
                                                      <div class="form-floating border rounded">
                                                         <select class="form-select" name="country" placeholder="..." id="kt_docs_select2_country4">
                                                         <option value="">Select Country</option>
                                                         @foreach(getCountryConfigList() as $con_val)
                                                         <option value="{{$con_val->id}}" data-kt-select2-country="{{asset('/assets/media/flags/'.strtolower(str_replace(' ','-',$con_val->name.'.svg')))}}">{{$con_val->name}}</option>
                                                         @endforeach
                                                         </select>
                                                      </div>
                                                      <!--end::Input-->
                                                   </div>
                                                   <!--end::Input group-->
                                                   <!--begin::Input group-->
                                                   <div class="fv-row mb-7">
                                                      <!--begin::Label-->
                                                      <label class="required fw-semibold fs-6 mb-2">Frequency</label>
                                                      <!--end::Label-->
                                                      <!--begin::Input-->
                                                      <select aria-label="Frequency" name="frequency" data-control="select2" data-placeholder="Frequency..." class="form-select mb-2">
                                                         <option></option>
                                                         <option>Monthly</option>
                                                         <option>Quarterly</option>
                                                         <option>Half yearly</option>
                                                         <option>Yearly</option>
                                                         <option>One time</option>
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
                                 <!--end::Modal - Add task-->
                              </div>
                              <!--end::Card toolbar-->
                           </div>
                           <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <!--begin::Table-->
                           <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example4">
                              <thead>
                                 <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">S No.</th>
                                    <th class="min-w-125px">Plan name</th>
                                    <th class="min-w-125px">Cost</th>
                                    <th class="min-w-125px">Frequency</th>
                                    <th class="min-w-125px">Country</th>
                                    <th class="min-w-125px">Status</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                 </tr>
                              </thead>
                              <tbody class="text-gray-600 fw-semibold">
                              @if( !empty($subc) )
                        @foreach($subc as $key => $sub)
                           @php
                              $status = $sub->is_active;
                              if($status == 1 ){
                                 $status = "Enabled";
                                 $class 	= "success";
                              }else{
                                 $status = "Disabled";
                                 $class 	= "danger";
                              }
                           @endphp
                        <tr>
                           <td>{{ $key+1 }}</td>
                           <td>{{ $sub->planname }}</td>
                           <td>{{ $sub->cost }}</td>
                           <td>{{ $sub->frequency }}</td>
                           <td>{{ $sub->country }}</td>
                           <td>
                              <div class="badge badge-light-{{ $class }} fw-bold">{{ $status }}</div>
                           </td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                       <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                       <!--begin::Menu-->
                                       <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="{{ url('/admin/add-sub/enable-status/'.$sub->id) }}" class="menu-link px-3">Enable</a>
                                          </div>
                                          <!--end::Menu item-->
                                          <!--begin::Menu item-->
                                          <div class="menu-item px-3">
                                             <a href="{{ url('/admin/add-sub/disable-status/'.$sub->id) }}" class="menu-link px-3">Disable</a>
                                          </div>
                                          <!--end::Menu item-->
                                       </div>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 @endforeach
                        @endif
                              </tbody>
                           </table>
                           <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                     </div>
                     <!--end::Products-->
                  </div>
                  <!--end::Tab pane--> 
                  <!--begin::Tab pane-->
                  <div class="tab-pane fade" id="subscriptioinconfig3" role="tab-panel">
                     <!--begin::Row-->
                     <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
                        <!--begin::Col-->
                        <div class="col-md-4">
                           <!--begin::Card-->
                           <div class="card card-flush h-md-100">
                              <!--begin::Card header-->
                              <div class="card-header">
                                 <!--begin::Card title-->
                                 <div class="card-title">
                                    <h2>Premium</h2>
                                 </div>
                                 <!--end::Card title-->
                              </div>
                              <!--end::Card header-->
                              <!--begin::Card body-->
                              <div class="card-body pt-1">
                                 <!--begin::Users-->
                                 <div class="fw-bold text-gray-600 mb-5">Total users with this role: 5</div>
                                 <!--end::Users-->
                                 <!--begin::Permissions-->
                                 <div class="d-flex flex-column text-gray-600">
                                    <div class="d-flex align-items-center py-2">
                                       <span class="bullet bg-primary me-3"></span>All Admin Controls
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                       <span class="bullet bg-primary me-3"></span>View and Edit Financial Summaries
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                       <span class="bullet bg-primary me-3"></span>Enabled Bulk Reports
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                       <span class="bullet bg-primary me-3"></span>View and Edit Payouts
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                       <span class="bullet bg-primary me-3"></span>View and Edit Disputes
                                    </div>
                                    <div class='d-flex align-items-center py-2'>
                                       <span class='bullet bg-primary me-3'></span>
                                       <em>and 7 more...</em>
                                    </div>
                                 </div>
                                 <!--end::Permissions-->
                              </div>
                              <!--end::Card body-->
                              <!--begin::Card footer-->
                              <div class="card-footer flex-wrap pt-0">
                                 <a href="settings-subscription-viewrole.html" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                                 <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                              </div>
                              <!--end::Card footer-->
                           </div>
                           <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4">
                           <!--begin::Card-->
                           <div class="card card-flush h-md-100">
                              <!--begin::Card header-->
                              <div class="card-header">
                                 <!--begin::Card title-->
                                 <div class="card-title">
                                    <h2>Advance</h2>
                                 </div>
                                 <!--end::Card title-->
                              </div>
                              <!--end::Card header-->
                              <!--begin::Card body-->
                              <div class="card-body pt-1">
                                 <!--begin::Users-->
                                 <div class="fw-bold text-gray-600 mb-5">Total users with this role: 14</div>
                                 <!--end::Users-->
                                 <!--begin::Permissions-->
                                 <div class="d-flex flex-column text-gray-600">
                                    <div class="d-flex align-items-center py-2">
                                       <span class="bullet bg-primary me-3"></span>Some Admin Controls
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                       <span class="bullet bg-primary me-3"></span>View Financial Summaries only
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                       <span class="bullet bg-primary me-3"></span>View and Edit API Controls
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                       <span class="bullet bg-primary me-3"></span>View Payouts only
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                       <span class="bullet bg-primary me-3"></span>View and Edit Disputes
                                    </div>
                                    <div class='d-flex align-items-center py-2'>
                                       <span class='bullet bg-primary me-3'></span>
                                       <em>and 3 more...</em>
                                    </div>
                                 </div>
                                 <!--end::Permissions-->
                              </div>
                              <!--end::Card body-->
                              <!--begin::Card footer-->
                              <div class="card-footer flex-wrap pt-0">
                                 <a href="settings-subscription-viewrole.html" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                                 <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                              </div>
                              <!--end::Card footer-->
                           </div>
                           <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4">
                           <!--begin::Card-->
                           <div class="card card-flush h-md-100">
                              <!--begin::Card header-->
                              <div class="card-header">
                                 <!--begin::Card title-->
                                 <div class="card-title">
                                    <h2>Basic</h2>
                                 </div>
                                 <!--end::Card title-->
                              </div>
                              <!--end::Card header-->
                              <!--begin::Card body-->
                              <div class="card-body pt-1">
                                 <!--begin::Users-->
                                 <div class="fw-bold text-gray-600 mb-5">Total users with this role: 4</div>
                                 <!--end::Users-->
                                 <!--begin::Permissions-->
                                 <div class="d-flex flex-column text-gray-600">
                                    <div class="d-flex align-items-center py-2">
                                       <span class="bullet bg-primary me-3"></span>No Admin Controls
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                       <span class="bullet bg-primary me-3"></span>View and Edit Financial Summaries
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                       <span class="bullet bg-primary me-3"></span>Enabled Bulk Reports
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                       <span class="bullet bg-primary me-3"></span>View Payouts only
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                       <span class="bullet bg-primary me-3"></span>View Disputes only
                                    </div>
                                    <div class='d-flex align-items-center py-2'>
                                       <span class='bullet bg-primary me-3'></span>
                                       <em>and 2 more...</em>
                                    </div>
                                 </div>
                                 <!--end::Permissions-->
                              </div>
                              <!--end::Card body-->
                              <!--begin::Card footer-->
                              <div class="card-footer flex-wrap pt-0">
                                 <a href="settings-subscription-viewrole.html" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                                 <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                              </div>
                              <!--end::Card footer-->
                           </div>
                           <!--end::Card-->
                        </div>
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                     <!--begin::Products-->
                     <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                           <!--begin::Card title-->
                           <div class="card-title">
                              <!--begin::Search-->
                              <div class="d-flex align-items-center position-relative my-1">
                                 <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                                 <input type="text" data-kt-filter5="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search" />
                              </div>
                              <!--end::Search-->
                           </div>
                           <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                           <!--begin::Table-->
                           <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example5">
                              <thead>
                                 <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">S No.</th>
                                    <th class="min-w-125px">Plan name</th>
                                    <th class="min-w-125px">Cost</th>
                                    <th class="min-w-125px">Frequency</th>
                                    <th class="min-w-125px">Country</th>
                                    <th class="text-end"></th>
                                 </tr>
                              </thead>
                              <tbody class="text-gray-600 fw-semibold">
                                 <tr>
                                    <td>1</td>
                                    <td>Basic</td>
                                    <td>Rs 500</td>
                                    <td>Monthly</td>
                                    <td>America</td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Edit</a>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>Advanced</td>
                                    <td>Rs 1000</td>
                                    <td>Yearly</td>
                                    <td>India</td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Edit</a>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td>Basic</td>
                                    <td>Rs 500</td>
                                    <td>Quarterly</td>
                                    <td>America</td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Edit</a>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td>Advanced</td>
                                    <td>Rs 750</td>
                                    <td>One time</td>
                                    <td>Argentina</td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Edit</a>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td>Basic</td>
                                    <td>Rs 500</td>
                                    <td>Monthly</td>
                                    <td>America</td>
                                    <td class="text-end">
                                       <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Edit</a>
                                       <!--end::Menu-->
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <!--end::Table-->
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
<!--end:::Main-->

@endsection
