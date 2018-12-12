<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Program Studi
								</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="#" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Program Studi
											</span>
										</a>
									</li>
								</ul>
							</div>
							<div>
								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
									<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
										<i class="la la-plus m--hide"></i>
										<i class="la la-ellipsis-h"></i>
									</a>
									<div class="m-dropdown__wrapper">
										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
										<div class="m-dropdown__inner">
											<div class="m-dropdown__body">
												<div class="m-dropdown__content">
													<ul class="m-nav">
														<li class="m-nav__section m-nav__section--first m--hide">
															<span class="m-nav__section-text">
																Quick Actions
															</span>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-share"></i>
																<span class="m-nav__link-text">
																	Activity
																</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-chat-1"></i>
																<span class="m-nav__link-text">
																	Messages
																</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-info"></i>
																<span class="m-nav__link-text">
																	FAQ
																</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																<span class="m-nav__link-text">
																	Support
																</span>
															</a>
														</li>
														<li class="m-nav__separator m-nav__separator--fit"></li>
														<li class="m-nav__item">
															<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
																Submit
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
							<div class="m-alert__icon">
								<i class="flaticon-exclamation m--font-brand"></i>
							</div>
							<div class="m-alert__text">
								Berikut adalah data Program studi yang ada di Universitas Krisnadwipayana.
							</div>
						</div>
						<div class="m-portlet m-portlet--mobile">
							
							<div class="m-portlet__body">
								<!--begin: Search Form -->
								<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
									<div class="row align-items-center">
										<div class="col-xl-8 order-2 order-xl-1">
											<div class="form-group m-form__group row align-items-center">
												<div class="col-md-4">
													<div class="m-form__group m-form__group--inline">
														<div class="m-form__label">
															<label>
																Status:
															</label>
														</div>
														<div class="m-form__control">
															<select class="form-control m-bootstrap-select" id="m_form_status">
																<option value="">
																	All
																</option>
																<option value="1">
																	Active
																</option>
																<option value="2">
																	Non Active
																</option>
															</select>
														</div>
													</div>
													<div class="d-md-none m--margin-bottom-10"></div>
												</div>
												<div class="col-md-4">
													<div class="m-input-icon m-input-icon--left">
														<input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
														<span class="m-input-icon__icon m-input-icon__icon--left">
															<span>
																<i class="la la-search"></i>
															</span>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 order-1 order-xl-2 m--align-right">
											<a href="../input.php" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
												<span>
													<i class="la la-plus-circle"></i>
													<span>
														Input Data
													</span>
												</span>
											</a>
											<div class="m-separator m-separator--dashed d-xl-none"></div>
										</div>
									</div>
								</div>
								<!--end: Search Form -->
		<!--begin: Datatable -->
								<table class="m-datatable" id="html_table" width="100%">
									<thead>
										<tr>
											
											<th title="Field #2">
												Kode
											</th>
											<th title="Field #3">
												Nama Prodi
											</th>
											<th title="Field #4">
												Ketua Prodi
											</th>
											<th title="Field #5">
												Status
											</th>
											<th title="Field #6">
												Action
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											
											<td>
												KP-001
											</td>
											<td>
												Elektro
											</td>
											<td>
												Sulistia
											</td>
											<td>
												1
											</td>
											<td>
												Action
											</td>
										</tr>
										<tr>
											
											<td>
												KP-002
											</td>
											<td>
												Sipil
											</td>
											<td>
												Jono
											</td>
											<td>
												2
											</td>
											<td>
												Action
											</td>
										</tr>
										<tr>
											
											<td>
												KP-003
											</td>
											<td>
												Planologi
											</td>
											<td>
												Budiman
											</td>
											<td>
												2
											</td>
											<td>
												Action
											</td>
										</tr>
										<tr>
											
											<td>
												KP-004
											</td>
											<td>
												Industri
											</td>
											<td>
												Jasmita
											</td>
											<td>
												2
											</td>
											<td>
												Action
											</td>
										</tr>
										<tr>
											
											<td>
												KP-005
											</td>
											<td>
												Informatika
											</td>
											<td>
												Budiman
											</td>
											<td>
												1
											</td>
											<td>
												Action
											</td>
										</tr>
										<tr>
											
											<td>
												KP-006
											</td>
											<td>
												Mesin
											</td>
											<td>
												Bagyo
											</td>
											<td>
												1
											</td>
											<td>
												Action
											</td>
										</tr>
										<tr>
											
											<td>
												KP-007
											</td>
											<td>
												Arsitektur
											</td>
											<td>
												Wagyo
											</td>
											<td>
												1
											</td>
											<td>
												Action
											</td>
										</tr>
									</tbody>
								</table>
								<!--end: Datatable -->
							</div>
						</div>
					</div>