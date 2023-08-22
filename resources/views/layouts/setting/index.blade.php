@extends('admin.layouts.auth.app')



@section('content') 



					<!--Begin:::Main-->
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
									<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Setting Config</h1>
									<!--end::Title-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="/dasalon/admin/home.html" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-400 w-5px h-2px"></span>
										</li>
										<!--end::Item-->

										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Setting Config</li>
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
								<div class="card mb-5 mb-xxl-8">
									<div class="card-body pt-9 pb-0">

										@include('admin.setting.tab')
								<!--end::Navbar-->

								<!--begin::Products-->
								<div class="card card-flush mb-8">

									<div class="card-header">
										<h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">System Admin</h2>
									</div>
									<!--begin::Card header-->
									<div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-5">

										<!--begin::Card title-->
										<div class="card-title">
											<!--begin::Search-->
											<div class="d-flex align-items-center position-relative my-1">
												<i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
												<input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
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
													    <i class="ki-duotone ki-plus fs-2"></i>Add Admin
													</button>
													<!--end::Add Country-->

												</div>
												<!--end::Toolbar-->
												<!--begin::Modal - Add task-->

												<div class="modal fade" tabindex="-1" id="kt_modal_scrollable">
												    <div class="modal-dialog modal-dialog-scrollable">
												        <div class="modal-content">
												            <div class="modal-header">
												                <h5 class="modal-title">Add Country</h5>

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
																			<label class="required fw-semibold fs-6 mb-2">Name</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Name"/>
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->

																		<!--begin::Input group-->
																		<div class="fv-row mb-7">
																			<!--begin::Label-->
																			<label for="kt_docs_select2_country" class="form-label">Select a country</label>
																			<div class="form-floating border rounded">
																			    <select class="form-select" placeholder="..." id="kt_docs_select2_country">
																			        <option></option>
													                                <option value="AF" data-kt-select2-country="/dasalon/admin/assets/media/flags/afghanistan.svg">Afghanistan</option>
													                                <option value="AX" data-kt-select2-country="/dasalon/admin/assets/media/flags/aland-islands.svg">Aland Islands</option>
													                                <option value="AL" data-kt-select2-country="/dasalon/admin/assets/media/flags/albania.svg">Albania</option>
													                                <option value="DZ" data-kt-select2-country="/dasalon/admin/assets/media/flags/algeria.svg">Algeria</option>
													                                <option value="AS" data-kt-select2-country="/dasalon/admin/assets/media/flags/american-samoa.svg">American Samoa</option>
													                                <option value="AD" data-kt-select2-country="/dasalon/admin/assets/media/flags/andorra.svg">Andorra</option>
													                                <option value="AO" data-kt-select2-country="/dasalon/admin/assets/media/flags/angola.svg">Angola</option>
													                                <option value="AI" data-kt-select2-country="/dasalon/admin/assets/media/flags/anguilla.svg">Anguilla</option>
													                                <option value="AG" data-kt-select2-country="/dasalon/admin/assets/media/flags/antigua-and-barbuda.svg">Antigua and Barbuda</option>
													                                <option value="AR" data-kt-select2-country="/dasalon/admin/assets/media/flags/argentina.svg">Argentina</option>
													                                <option value="AM" data-kt-select2-country="/dasalon/admin/assets/media/flags/armenia.svg">Armenia</option>
													                                <option value="AW" data-kt-select2-country="/dasalon/admin/assets/media/flags/aruba.svg">Aruba</option>
													                                <option value="AU" data-kt-select2-country="/dasalon/admin/assets/media/flags/australia.svg">Australia</option>
													                                <option value="AT" data-kt-select2-country="/dasalon/admin/assets/media/flags/austria.svg">Austria</option>
													                                <option value="AZ" data-kt-select2-country="/dasalon/admin/assets/media/flags/azerbaijan.svg">Azerbaijan</option>
													                                <option value="BS" data-kt-select2-country="/dasalon/admin/assets/media/flags/bahamas.svg">Bahamas</option>
													                                <option value="BH" data-kt-select2-country="/dasalon/admin/assets/media/flags/bahrain.svg">Bahrain</option>
													                                <option value="BD" data-kt-select2-country="/dasalon/admin/assets/media/flags/bangladesh.svg">Bangladesh</option>
													                                <option value="BB" data-kt-select2-country="/dasalon/admin/assets/media/flags/barbados.svg">Barbados</option>
													                                <option value="BY" data-kt-select2-country="/dasalon/admin/assets/media/flags/belarus.svg">Belarus</option>
													                                <option value="BE" data-kt-select2-country="/dasalon/admin/assets/media/flags/belgium.svg">Belgium</option>
													                                <option value="BZ" data-kt-select2-country="/dasalon/admin/assets/media/flags/belize.svg">Belize</option>
													                                <option value="BJ" data-kt-select2-country="/dasalon/admin/assets/media/flags/benin.svg">Benin</option>
													                                <option value="BM" data-kt-select2-country="/dasalon/admin/assets/media/flags/bermuda.svg">Bermuda</option>
													                                <option value="BT" data-kt-select2-country="/dasalon/admin/assets/media/flags/bhutan.svg">Bhutan</option>
													                                <option value="BO" data-kt-select2-country="/dasalon/admin/assets/media/flags/bolivia.svg">Bolivia, Plurinational State of</option>
													                                <option value="BQ" data-kt-select2-country="/dasalon/admin/assets/media/flags/bonaire.svg">Bonaire, Sint Eustatius and Saba</option>
													                                <option value="BA" data-kt-select2-country="/dasalon/admin/assets/media/flags/bosnia-and-herzegovina.svg">Bosnia and Herzegovina</option>
													                                <option value="BW" data-kt-select2-country="/dasalon/admin/assets/media/flags/botswana.svg">Botswana</option>
													                                <option value="BR" data-kt-select2-country="/dasalon/admin/assets/media/flags/brazil.svg">Brazil</option>
													                                <option value="IO" data-kt-select2-country="/dasalon/admin/assets/media/flags/british-indian-ocean-territory.svg">British Indian Ocean Territory</option>
													                                <option value="BN" data-kt-select2-country="/dasalon/admin/assets/media/flags/brunei.svg">Brunei Darussalam</option>
													                                <option value="BG" data-kt-select2-country="/dasalon/admin/assets/media/flags/bulgaria.svg">Bulgaria</option>
													                                <option value="BF" data-kt-select2-country="/dasalon/admin/assets/media/flags/burkina-faso.svg">Burkina Faso</option>
													                                <option value="BI" data-kt-select2-country="/dasalon/admin/assets/media/flags/burundi.svg">Burundi</option>
													                                <option value="KH" data-kt-select2-country="/dasalon/admin/assets/media/flags/cambodia.svg">Cambodia</option>
													                                <option value="CM" data-kt-select2-country="/dasalon/admin/assets/media/flags/cameroon.svg">Cameroon</option>
													                                <option value="CA" data-kt-select2-country="/dasalon/admin/assets/media/flags/canada.svg">Canada</option>
													                                <option value="CV" data-kt-select2-country="/dasalon/admin/assets/media/flags/cape-verde.svg">Cape Verde</option>
													                                <option value="KY" data-kt-select2-country="/dasalon/admin/assets/media/flags/cayman-islands.svg">Cayman Islands</option>
													                                <option value="CF" data-kt-select2-country="/dasalon/admin/assets/media/flags/central-african-republic.svg">Central African Republic</option>
													                                <option value="TD" data-kt-select2-country="/dasalon/admin/assets/media/flags/chad.svg">Chad</option>
													                                <option value="CL" data-kt-select2-country="/dasalon/admin/assets/media/flags/chile.svg">Chile</option>
													                                <option value="CN" data-kt-select2-country="/dasalon/admin/assets/media/flags/china.svg">China</option>
													                                <option value="CX" data-kt-select2-country="/dasalon/admin/assets/media/flags/christmas-island.svg">Christmas Island</option>
													                                <option value="CC" data-kt-select2-country="/dasalon/admin/assets/media/flags/cocos-island.svg">Cocos (Keeling) Islands</option>
													                                <option value="CO" data-kt-select2-country="/dasalon/admin/assets/media/flags/colombia.svg">Colombia</option>
													                                <option value="KM" data-kt-select2-country="/dasalon/admin/assets/media/flags/comoros.svg">Comoros</option>
													                                <option value="CK" data-kt-select2-country="/dasalon/admin/assets/media/flags/cook-islands.svg">Cook Islands</option>
													                                <option value="CR" data-kt-select2-country="/dasalon/admin/assets/media/flags/costa-rica.svg">Costa Rica</option>
													                                <option value="CI" data-kt-select2-country="/dasalon/admin/assets/media/flags/ivory-coast.svg">Côte d'Ivoire</option>
													                                <option value="HR" data-kt-select2-country="/dasalon/admin/assets/media/flags/croatia.svg">Croatia</option>
													                                <option value="CU" data-kt-select2-country="/dasalon/admin/assets/media/flags/cuba.svg">Cuba</option>
													                                <option value="CW" data-kt-select2-country="/dasalon/admin/assets/media/flags/curacao.svg">Curaçao</option>
													                                <option value="CZ" data-kt-select2-country="/dasalon/admin/assets/media/flags/czech-republic.svg">Czech Republic</option>
													                                <option value="DK" data-kt-select2-country="/dasalon/admin/assets/media/flags/denmark.svg">Denmark</option>
													                                <option value="DJ" data-kt-select2-country="/dasalon/admin/assets/media/flags/djibouti.svg">Djibouti</option>
													                                <option value="DM" data-kt-select2-country="/dasalon/admin/assets/media/flags/dominica.svg">Dominica</option>
													                                <option value="DO" data-kt-select2-country="/dasalon/admin/assets/media/flags/dominican-republic.svg">Dominican Republic</option>
													                                <option value="EC" data-kt-select2-country="/dasalon/admin/assets/media/flags/ecuador.svg">Ecuador</option>
													                                <option value="EG" data-kt-select2-country="/dasalon/admin/assets/media/flags/egypt.svg">Egypt</option>
													                                <option value="SV" data-kt-select2-country="/dasalon/admin/assets/media/flags/el-salvador.svg">El Salvador</option>
													                                <option value="GQ" data-kt-select2-country="/dasalon/admin/assets/media/flags/equatorial-guinea.svg">Equatorial Guinea</option>
													                                <option value="ER" data-kt-select2-country="/dasalon/admin/assets/media/flags/eritrea.svg">Eritrea</option>
													                                <option value="EE" data-kt-select2-country="/dasalon/admin/assets/media/flags/estonia.svg">Estonia</option>
													                                <option value="ET" data-kt-select2-country="/dasalon/admin/assets/media/flags/ethiopia.svg">Ethiopia</option>
													                                <option value="FK" data-kt-select2-country="/dasalon/admin/assets/media/flags/falkland-islands.svg">Falkland Islands (Malvinas)</option>
													                                <option value="FJ" data-kt-select2-country="/dasalon/admin/assets/media/flags/fiji.svg">Fiji</option>
													                                <option value="FI" data-kt-select2-country="/dasalon/admin/assets/media/flags/finland.svg">Finland</option>
													                                <option value="FR" data-kt-select2-country="/dasalon/admin/assets/media/flags/france.svg">France</option>
													                                <option value="PF" data-kt-select2-country="/dasalon/admin/assets/media/flags/french-polynesia.svg">French Polynesia</option>
													                                <option value="GA" data-kt-select2-country="/dasalon/admin/assets/media/flags/gabon.svg">Gabon</option>
													                                <option value="GM" data-kt-select2-country="/dasalon/admin/assets/media/flags/gambia.svg">Gambia</option>
													                                <option value="GE" data-kt-select2-country="/dasalon/admin/assets/media/flags/georgia.svg">Georgia</option>
													                                <option value="DE" data-kt-select2-country="/dasalon/admin/assets/media/flags/germany.svg">Germany</option>
													                                <option value="GH" data-kt-select2-country="/dasalon/admin/assets/media/flags/ghana.svg">Ghana</option>
													                                <option value="GI" data-kt-select2-country="/dasalon/admin/assets/media/flags/gibraltar.svg">Gibraltar</option>
													                                <option value="GR" data-kt-select2-country="/dasalon/admin/assets/media/flags/greece.svg">Greece</option>
													                                <option value="GL" data-kt-select2-country="/dasalon/admin/assets/media/flags/greenland.svg">Greenland</option>
													                                <option value="GD" data-kt-select2-country="/dasalon/admin/assets/media/flags/grenada.svg">Grenada</option>
													                                <option value="GU" data-kt-select2-country="/dasalon/admin/assets/media/flags/guam.svg">Guam</option>
													                                <option value="GT" data-kt-select2-country="/dasalon/admin/assets/media/flags/guatemala.svg">Guatemala</option>
													                                <option value="GG" data-kt-select2-country="/dasalon/admin/assets/media/flags/guernsey.svg">Guernsey</option>
													                                <option value="GN" data-kt-select2-country="/dasalon/admin/assets/media/flags/guinea.svg">Guinea</option>
													                                <option value="GW" data-kt-select2-country="/dasalon/admin/assets/media/flags/guinea-bissau.svg">Guinea-Bissau</option>
													                                <option value="HT" data-kt-select2-country="/dasalon/admin/assets/media/flags/haiti.svg">Haiti</option>
													                                <option value="VA" data-kt-select2-country="/dasalon/admin/assets/media/flags/vatican-city.svg">Holy See (Vatican City State)</option>
													                                <option value="HN" data-kt-select2-country="/dasalon/admin/assets/media/flags/honduras.svg">Honduras</option>
													                                <option value="HK" data-kt-select2-country="/dasalon/admin/assets/media/flags/hong-kong.svg">Hong Kong</option>
													                                <option value="HU" data-kt-select2-country="/dasalon/admin/assets/media/flags/hungary.svg">Hungary</option>
													                                <option value="IS" data-kt-select2-country="/dasalon/admin/assets/media/flags/iceland.svg">Iceland</option>
													                                <option value="IN" data-kt-select2-country="/dasalon/admin/assets/media/flags/india.svg">India</option>
													                                <option value="ID" data-kt-select2-country="/dasalon/admin/assets/media/flags/indonesia.svg">Indonesia</option>
													                                <option value="IR" data-kt-select2-country="/dasalon/admin/assets/media/flags/iran.svg">Iran, Islamic Republic of</option>
													                                <option value="IQ" data-kt-select2-country="/dasalon/admin/assets/media/flags/iraq.svg">Iraq</option>
													                                <option value="IE" data-kt-select2-country="/dasalon/admin/assets/media/flags/ireland.svg">Ireland</option>
													                                <option value="IM" data-kt-select2-country="/dasalon/admin/assets/media/flags/isle-of-man.svg">Isle of Man</option>
													                                <option value="IL" data-kt-select2-country="/dasalon/admin/assets/media/flags/israel.svg">Israel</option>
													                                <option value="IT" data-kt-select2-country="/dasalon/admin/assets/media/flags/italy.svg">Italy</option>
													                                <option value="JM" data-kt-select2-country="/dasalon/admin/assets/media/flags/jamaica.svg">Jamaica</option>
													                                <option value="JP" data-kt-select2-country="/dasalon/admin/assets/media/flags/japan.svg">Japan</option>
													                                <option value="JE" data-kt-select2-country="/dasalon/admin/assets/media/flags/jersey.svg">Jersey</option>
													                                <option value="JO" data-kt-select2-country="/dasalon/admin/assets/media/flags/jordan.svg">Jordan</option>
													                                <option value="KZ" data-kt-select2-country="/dasalon/admin/assets/media/flags/kazakhstan.svg">Kazakhstan</option>
													                                <option value="KE" data-kt-select2-country="/dasalon/admin/assets/media/flags/kenya.svg">Kenya</option>
													                                <option value="KI" data-kt-select2-country="/dasalon/admin/assets/media/flags/kiribati.svg">Kiribati</option>
													                                <option value="KP" data-kt-select2-country="/dasalon/admin/assets/media/flags/north-korea.svg">Korea, Democratic People's Republic of</option>
													                                <option value="KW" data-kt-select2-country="/dasalon/admin/assets/media/flags/kuwait.svg">Kuwait</option>
													                                <option value="KG" data-kt-select2-country="/dasalon/admin/assets/media/flags/kyrgyzstan.svg">Kyrgyzstan</option>
													                                <option value="LA" data-kt-select2-country="/dasalon/admin/assets/media/flags/laos.svg">Lao People's Democratic Republic</option>
													                                <option value="LV" data-kt-select2-country="/dasalon/admin/assets/media/flags/latvia.svg">Latvia</option>
													                                <option value="LB" data-kt-select2-country="/dasalon/admin/assets/media/flags/lebanon.svg">Lebanon</option>
													                                <option value="LS" data-kt-select2-country="/dasalon/admin/assets/media/flags/lesotho.svg">Lesotho</option>
													                                <option value="LR" data-kt-select2-country="/dasalon/admin/assets/media/flags/liberia.svg">Liberia</option>
													                                <option value="LY" data-kt-select2-country="/dasalon/admin/assets/media/flags/libya.svg">Libya</option>
													                                <option value="LI" data-kt-select2-country="/dasalon/admin/assets/media/flags/liechtenstein.svg">Liechtenstein</option>
													                                <option value="LT" data-kt-select2-country="/dasalon/admin/assets/media/flags/lithuania.svg">Lithuania</option>
													                                <option value="LU" data-kt-select2-country="/dasalon/admin/assets/media/flags/luxembourg.svg">Luxembourg</option>
													                                <option value="MO" data-kt-select2-country="/dasalon/admin/assets/media/flags/macao.svg">Macao</option>
													                                <option value="MG" data-kt-select2-country="/dasalon/admin/assets/media/flags/madagascar.svg">Madagascar</option>
													                                <option value="MW" data-kt-select2-country="/dasalon/admin/assets/media/flags/malawi.svg">Malawi</option>
													                                <option value="MY" data-kt-select2-country="/dasalon/admin/assets/media/flags/malaysia.svg">Malaysia</option>
													                                <option value="MV" data-kt-select2-country="/dasalon/admin/assets/media/flags/maldives.svg">Maldives</option>
													                                <option value="ML" data-kt-select2-country="/dasalon/admin/assets/media/flags/mali.svg">Mali</option>
													                                <option value="MT" data-kt-select2-country="/dasalon/admin/assets/media/flags/malta.svg">Malta</option>
													                                <option value="MH" data-kt-select2-country="/dasalon/admin/assets/media/flags/marshall-island.svg">Marshall Islands</option>
													                                <option value="MQ" data-kt-select2-country="/dasalon/admin/assets/media/flags/martinique.svg">Martinique</option>
													                                <option value="MR" data-kt-select2-country="/dasalon/admin/assets/media/flags/mauritania.svg">Mauritania</option>
													                                <option value="MU" data-kt-select2-country="/dasalon/admin/assets/media/flags/mauritius.svg">Mauritius</option>
													                                <option value="MX" data-kt-select2-country="/dasalon/admin/assets/media/flags/mexico.svg">Mexico</option>
													                                <option value="FM" data-kt-select2-country="/dasalon/admin/assets/media/flags/micronesia.svg">Micronesia, Federated States of</option>
													                                <option value="MD" data-kt-select2-country="/dasalon/admin/assets/media/flags/moldova.svg">Moldova, Republic of</option>
													                                <option value="MC" data-kt-select2-country="/dasalon/admin/assets/media/flags/monaco.svg">Monaco</option>
													                                <option value="MN" data-kt-select2-country="/dasalon/admin/assets/media/flags/mongolia.svg">Mongolia</option>
													                                <option value="ME" data-kt-select2-country="/dasalon/admin/assets/media/flags/montenegro.svg">Montenegro</option>
													                                <option value="MS" data-kt-select2-country="/dasalon/admin/assets/media/flags/montserrat.svg">Montserrat</option>
													                                <option value="MA" data-kt-select2-country="/dasalon/admin/assets/media/flags/morocco.svg">Morocco</option>
													                                <option value="MZ" data-kt-select2-country="/dasalon/admin/assets/media/flags/mozambique.svg">Mozambique</option>
													                                <option value="MM" data-kt-select2-country="/dasalon/admin/assets/media/flags/myanmar.svg">Myanmar</option>
													                                <option value="NA" data-kt-select2-country="/dasalon/admin/assets/media/flags/namibia.svg">Namibia</option>
													                                <option value="NR" data-kt-select2-country="/dasalon/admin/assets/media/flags/nauru.svg">Nauru</option>
													                                <option value="NP" data-kt-select2-country="/dasalon/admin/assets/media/flags/nepal.svg">Nepal</option>
													                                <option value="NL" data-kt-select2-country="/dasalon/admin/assets/media/flags/netherlands.svg">Netherlands</option>
													                                <option value="NZ" data-kt-select2-country="/dasalon/admin/assets/media/flags/new-zealand.svg">New Zealand</option>
													                                <option value="NI" data-kt-select2-country="/dasalon/admin/assets/media/flags/nicaragua.svg">Nicaragua</option>
													                                <option value="NE" data-kt-select2-country="/dasalon/admin/assets/media/flags/niger.svg">Niger</option>
													                                <option value="NG" data-kt-select2-country="/dasalon/admin/assets/media/flags/nigeria.svg">Nigeria</option>
													                                <option value="NU" data-kt-select2-country="/dasalon/admin/assets/media/flags/niue.svg">Niue</option>
													                                <option value="NF" data-kt-select2-country="/dasalon/admin/assets/media/flags/norfolk-island.svg">Norfolk Island</option>
													                                <option value="MP" data-kt-select2-country="/dasalon/admin/assets/media/flags/northern-mariana-islands.svg">Northern Mariana Islands</option>
													                                <option value="NO" data-kt-select2-country="/dasalon/admin/assets/media/flags/norway.svg">Norway</option>
													                                <option value="OM" data-kt-select2-country="/dasalon/admin/assets/media/flags/oman.svg">Oman</option>
													                                <option value="PK" data-kt-select2-country="/dasalon/admin/assets/media/flags/pakistan.svg">Pakistan</option>
													                                <option value="PW" data-kt-select2-country="/dasalon/admin/assets/media/flags/palau.svg">Palau</option>
													                                <option value="PS" data-kt-select2-country="/dasalon/admin/assets/media/flags/palestine.svg">Palestinian Territory, Occupied</option>
													                                <option value="PA" data-kt-select2-country="/dasalon/admin/assets/media/flags/panama.svg">Panama</option>
													                                <option value="PG" data-kt-select2-country="/dasalon/admin/assets/media/flags/papua-new-guinea.svg">Papua New Guinea</option>
													                                <option value="PY" data-kt-select2-country="/dasalon/admin/assets/media/flags/paraguay.svg">Paraguay</option>
													                                <option value="PE" data-kt-select2-country="/dasalon/admin/assets/media/flags/peru.svg">Peru</option>
													                                <option value="PH" data-kt-select2-country="/dasalon/admin/assets/media/flags/philippines.svg">Philippines</option>
													                                <option value="PL" data-kt-select2-country="/dasalon/admin/assets/media/flags/poland.svg">Poland</option>
													                                <option value="PT" data-kt-select2-country="/dasalon/admin/assets/media/flags/portugal.svg">Portugal</option>
													                                <option value="PR" data-kt-select2-country="/dasalon/admin/assets/media/flags/puerto-rico.svg">Puerto Rico</option>
													                                <option value="QA" data-kt-select2-country="/dasalon/admin/assets/media/flags/qatar.svg">Qatar</option>
													                                <option value="RO" data-kt-select2-country="/dasalon/admin/assets/media/flags/romania.svg">Romania</option>
													                                <option value="RU" data-kt-select2-country="/dasalon/admin/assets/media/flags/russia.svg">Russian Federation</option>
													                                <option value="RW" data-kt-select2-country="/dasalon/admin/assets/media/flags/rwanda.svg">Rwanda</option>
													                                <option value="BL" data-kt-select2-country="/dasalon/admin/assets/media/flags/st-barts.svg">Saint Barthélemy</option>
													                                <option value="KN" data-kt-select2-country="/dasalon/admin/assets/media/flags/saint-kitts-and-nevis.svg">Saint Kitts and Nevis</option>
													                                <option value="LC" data-kt-select2-country="/dasalon/admin/assets/media/flags/st-lucia.svg">Saint Lucia</option>
													                                <option value="MF" data-kt-select2-country="/dasalon/admin/assets/media/flags/sint-maarten.svg">Saint Martin (French part)</option>
													                                <option value="VC" data-kt-select2-country="/dasalon/admin/assets/media/flags/st-vincent-and-the-grenadines.svg">Saint Vincent and the Grenadines</option>
													                                <option value="WS" data-kt-select2-country="/dasalon/admin/assets/media/flags/samoa.svg">Samoa</option>
													                                <option value="SM" data-kt-select2-country="/dasalon/admin/assets/media/flags/san-marino.svg">San Marino</option>
													                                <option value="ST" data-kt-select2-country="/dasalon/admin/assets/media/flags/sao-tome-and-prince.svg">Sao Tome and Principe</option>
													                                <option value="SA" data-kt-select2-country="/dasalon/admin/assets/media/flags/saudi-arabia.svg">Saudi Arabia</option>
													                                <option value="SN" data-kt-select2-country="/dasalon/admin/assets/media/flags/senegal.svg">Senegal</option>
													                                <option value="RS" data-kt-select2-country="/dasalon/admin/assets/media/flags/serbia.svg">Serbia</option>
													                                <option value="SC" data-kt-select2-country="/dasalon/admin/assets/media/flags/seychelles.svg">Seychelles</option>
													                                <option value="SL" data-kt-select2-country="/dasalon/admin/assets/media/flags/sierra-leone.svg">Sierra Leone</option>
													                                <option value="SG" data-kt-select2-country="/dasalon/admin/assets/media/flags/singapore.svg">Singapore</option>
													                                <option value="SX" data-kt-select2-country="/dasalon/admin/assets/media/flags/sint-maarten.svg">Sint Maarten (Dutch part)</option>
													                                <option value="SK" data-kt-select2-country="/dasalon/admin/assets/media/flags/slovakia.svg">Slovakia</option>
													                                <option value="SI" data-kt-select2-country="/dasalon/admin/assets/media/flags/slovenia.svg">Slovenia</option>
													                                <option value="SB" data-kt-select2-country="/dasalon/admin/assets/media/flags/solomon-islands.svg">Solomon Islands</option>
													                                <option value="SO" data-kt-select2-country="/dasalon/admin/assets/media/flags/somalia.svg">Somalia</option>
													                                <option value="ZA" data-kt-select2-country="/dasalon/admin/assets/media/flags/south-africa.svg">South Africa</option>
													                                <option value="KR" data-kt-select2-country="/dasalon/admin/assets/media/flags/south-korea.svg">South Korea</option>
													                                <option value="SS" data-kt-select2-country="/dasalon/admin/assets/media/flags/south-sudan.svg">South Sudan</option>
													                                <option value="ES" data-kt-select2-country="/dasalon/admin/assets/media/flags/spain.svg">Spain</option>
													                                <option value="LK" data-kt-select2-country="/dasalon/admin/assets/media/flags/sri-lanka.svg">Sri Lanka</option>
													                                <option value="SD" data-kt-select2-country="/dasalon/admin/assets/media/flags/sudan.svg">Sudan</option>
													                                <option value="SR" data-kt-select2-country="/dasalon/admin/assets/media/flags/suriname.svg">Suriname</option>
													                                <option value="SZ" data-kt-select2-country="/dasalon/admin/assets/media/flags/swaziland.svg">Swaziland</option>
													                                <option value="SE" data-kt-select2-country="/dasalon/admin/assets/media/flags/sweden.svg">Sweden</option>
													                                <option value="CH" data-kt-select2-country="/dasalon/admin/assets/media/flags/switzerland.svg">Switzerland</option>
													                                <option value="SY" data-kt-select2-country="/dasalon/admin/assets/media/flags/syria.svg">Syrian Arab Republic</option>
													                                <option value="TW" data-kt-select2-country="/dasalon/admin/assets/media/flags/taiwan.svg">Taiwan, Province of China</option>
													                                <option value="TJ" data-kt-select2-country="/dasalon/admin/assets/media/flags/tajikistan.svg">Tajikistan</option>
													                                <option value="TZ" data-kt-select2-country="/dasalon/admin/assets/media/flags/tanzania.svg">Tanzania, United Republic of</option>
													                                <option value="TH" data-kt-select2-country="/dasalon/admin/assets/media/flags/thailand.svg">Thailand</option>
													                                <option value="TG" data-kt-select2-country="/dasalon/admin/assets/media/flags/togo.svg">Togo</option>
													                                <option value="TK" data-kt-select2-country="/dasalon/admin/assets/media/flags/tokelau.svg">Tokelau</option>
													                                <option value="TO" data-kt-select2-country="/dasalon/admin/assets/media/flags/tonga.svg">Tonga</option>
													                                <option value="TT" data-kt-select2-country="/dasalon/admin/assets/media/flags/trinidad-and-tobago.svg">Trinidad and Tobago</option>
													                                <option value="TN" data-kt-select2-country="/dasalon/admin/assets/media/flags/tunisia.svg">Tunisia</option>
													                                <option value="TR" data-kt-select2-country="/dasalon/admin/assets/media/flags/turkey.svg">Turkey</option>
													                                <option value="TM" data-kt-select2-country="/dasalon/admin/assets/media/flags/turkmenistan.svg">Turkmenistan</option>
													                                <option value="TC" data-kt-select2-country="/dasalon/admin/assets/media/flags/turks-and-caicos.svg">Turks and Caicos Islands</option>
													                                <option value="TV" data-kt-select2-country="/dasalon/admin/assets/media/flags/tuvalu.svg">Tuvalu</option>
													                                <option value="UG" data-kt-select2-country="/dasalon/admin/assets/media/flags/uganda.svg">Uganda</option>
													                                <option value="UA" data-kt-select2-country="/dasalon/admin/assets/media/flags/ukraine.svg">Ukraine</option>
													                                <option value="AE" data-kt-select2-country="/dasalon/admin/assets/media/flags/united-arab-emirates.svg">United Arab Emirates</option>
													                                <option value="GB" data-kt-select2-country="/dasalon/admin/assets/media/flags/united-kingdom.svg">United Kingdom</option>
													                                <option value="US" data-kt-select2-country="/dasalon/admin/assets/media/flags/united-states.svg" selected="">United States</option>
													                                <option value="UY" data-kt-select2-country="/dasalon/admin/assets/media/flags/uruguay.svg">Uruguay</option>
													                                <option value="UZ" data-kt-select2-country="/dasalon/admin/assets/media/flags/uzbekistan.svg">Uzbekistan</option>
													                                <option value="VU" data-kt-select2-country="/dasalon/admin/assets/media/flags/vanuatu.svg">Vanuatu</option>
													                                <option value="VE" data-kt-select2-country="/dasalon/admin/assets/media/flags/venezuela.svg">Venezuela, Bolivarian Republic of</option>
													                                <option value="VN" data-kt-select2-country="/dasalon/admin/assets/media/flags/vietnam.svg">Vietnam</option>
													                                <option value="VI" data-kt-select2-country="/dasalon/admin/assets/media/flags/virgin-islands.svg">Virgin Islands</option>
													                                <option value="YE" data-kt-select2-country="/dasalon/admin/assets/media/flags/yemen.svg">Yemen</option>
													                                <option value="ZM" data-kt-select2-country="/dasalon/admin/assets/media/flags/zambia.svg">Zambia</option>
													                                <option value="ZW" data-kt-select2-country="/dasalon/admin/assets/media/flags/zimbabwe.svg">Zimbabwe</option>
																			    </select>
																			</div>
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->

																		<!--begin::Input group-->
																		<div class="fv-row mb-7">
																			<!--begin::Label-->
																			<label class="required fw-semibold fs-6 mb-2">Phone</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input type="text" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Phone"/>
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->

																		<!--begin::Input group-->
																		<div class="fv-row mb-7">
																			<!--begin::Label-->
																			<label class="required fw-semibold fs-6 mb-2">Email</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input type="email" name="" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Email"/>
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->

																		<!--begin::Input group-->
																		<div class="fv-row mb-7">
																			<!--begin::Main wrapper-->
																			<div class="fv-row" data-kt-password-meter="true">
																			    <!--begin::Wrapper-->
																			    <div class="mb-1">
																			        <!--begin::Label-->
																			        <label class="form-label fw-semibold fs-6 mb-2">
																			            Password
																			        </label>
																			        <!--end::Label-->

																			        <!--begin::Input wrapper-->
																			        <div class="position-relative mb-3">
																			            <input class="form-control form-control-lg form-control-solid"
																			                type="password" placeholder="" name="new_password" autocomplete="off" />

																			            <!--begin::Visibility toggle-->
																			            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
																			                data-kt-password-meter-control="visibility">
																			                    <i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
																			                    <i class="ki-duotone ki-eye d-none fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
																			            </span>
																			            <!--end::Visibility toggle-->
																			        </div>
																			        <!--end::Input wrapper-->

																			        <!--begin::Highlight meter-->
																			        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
																			            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
																			            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
																			            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
																			            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
																			        </div>
																			        <!--end::Highlight meter-->
																			    </div>
																			    <!--end::Wrapper-->

																			    <!--begin::Hint-->
																			    <div class="text-muted">
																			        Use 8 or more characters with a mix of letters, numbers & symbols.
																			    </div>
																			    <!--end::Hint-->
																			</div>
																			<!--end::Main wrapper-->
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
													<th class="min-w-125px">Name</th>
													<th class="min-w-125px">Country</th>
													<th class="min-w-125px">Phone</th>
													<th class="min-w-125px">Email</th>
													<th class="min-w-125px">Status</th>
													<th class="text-end min-w-100px">Actions</th>
												</tr>
											</thead>
											<tbody class="text-gray-600 fw-semibold">
												<tr>
													<td>1</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Manveer</td>
													<td>India</td>
													<td>8945761235</td>
													<td>manveer@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>5</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>6</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>7</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>8</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>9</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>10</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
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

									<div class="card-header">
										<h2 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">System Manager</h2>
									</div>

									<!--begin::Card header-->
									<div class="card-header align-items-center pb-5 gap-2 gap-md-5 pt-5">

										<!--begin::Card title-->
										<div class="card-title">
											<!--begin::Search-->
											<div class="d-flex align-items-center position-relative my-1">
												<i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
												<input type="text" data-kt-filter2="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
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
													<a href="view-manager-roles.html" class="btn btn-primary me-5">
													    <i class="ki-duotone ki-plus fs-2"></i>View Roles
													</a>
													<!--end::Add Country-->

													<!--begin::Add Country-->
													<a href="add-system-manager.html" class="btn btn-primary">
													    <i class="ki-duotone ki-plus fs-2"></i>Add Manager
													</a>
													<!--end::Add Country-->

												</div>
												<!--end::Toolbar-->

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
													<th class="min-w-125px">Name</th>
													<th class="min-w-125px">Country</th>
													<th class="min-w-125px">Phone</th>
													<th class="min-w-125px">Email</th>
													<th class="min-w-125px">Status</th>
													<th class="text-end min-w-100px">Actions</th>
												</tr>
											</thead>
											<tbody class="text-gray-600 fw-semibold">
												<tr>
													<td>1</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Manveer</td>
													<td>India</td>
													<td>8945761235</td>
													<td>manveer@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>5</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>6</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>7</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>8</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>9</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
												</tr>
												<tr>
													<td>10</td>
													<td>Harry</td>
													<td>America</td>
													<td>1111111111</td>
													<td>harry@gmail.com</td>
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
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="" class="menu-link px-3">Manage</a>
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


							</div>
							<!--end::Content container-->
						</div>
						<!--end::Content-->

						</div>
						<!--end::Content wrapper-->
					</div>
					<!--end:::Main-->




  @endsection