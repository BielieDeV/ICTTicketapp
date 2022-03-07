@extends('layouts.app')

@section('content')
<div class="page">
			<div class="page-main is-expanded">
							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2">Dashboard</span></h4>
								</div>
							</div>
							<!--End Page header-->

							<!--Row-->
							<div class="row">
								<div class="col-xl-12 col-md-12 col-lg-12">
									<div class="row">
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"><span class="fs-14 font-weight-semibold">All Tickets</span>
																<h3 class="mb-0 mt-1 mb-2">30</h3>
															</div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold">Active Tickets</span>
															<h3 class="mb-0 mt-1  mb-2">15</h3> </div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary brround my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold">Closed Tickets</span>
																<h3 class="mb-0 mt-1 mb-2">9</h3>
															</div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="card mb-0">
												<div class="card-header border-0">
													<h4 class="card-title">Tickets Summary</h4>
												</div>
												<div class="card-body">
													<div class="table-responsive">
																	<div id="supportticket-dashe_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
																		<div class="row">
																			<div class="col-md-12 col-lg-1">
																				<div class="dataTables_length" id="supportticket-dashe_length">
																					<label>Show <select name="supportticket-dashe_length" aria-controls="supportticket-dashe" class="form-select form-select-sm select2-hidden-accessible" data-select2-id="select2-data-1-7ofg" tabindex="-1" aria-hidden="true">
																						<option value="10" data-select2-id="select2-data-3-ivk2">10</option>
																						<option value="25">25</option>
																						<option value="50">50</option>
																						<option value="100">100</option>
																					</select>
																					<span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-6qy4" style="width: 100%;">
																						<span class="selection">
																							<span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-supportticket-dashe_length-ak-container" aria-controls="select2-supportticket-dashe_length-ak-container">
																								<span class="select2-selection__rendered" id="select2-supportticket-dashe_length-ak-container" role="textbox" aria-readonly="true" title="10">10</span>
																								<span class="select2-selection__arrow" role="presentation">
																									<b role="presentation"></b>
																								</span>
																							</span>
																						</span>
																						<span class="dropdown-wrapper" aria-hidden="true">
																						</span>
																					</span>
																					 entries</label>
																				</div>
																			</div>
																			<div class="col-md-12 col-lg-4">
																				<div class="dt-buttons btn-group flex-wrap">
																					 <button class="btn btn-outline-light ticketdelete" tabindex="0" aria-controls="supportticket-dashe" type="button">
																						 <span>
																							 <i class="fe fe-trash">
																							 </i> Delete</span>
																						 </button>
																						 <button class="btn btn-outline-light" tabindex="0" aria-controls="supportticket-dashe" type="button">
																							 <span>
																								  <i class="fe fe-refresh-cw"></i>
																								 </span>
																							 </button>
																						 </div>
																					 </div>
																					 <div class="col-md-12 col-lg-7">
																						 <div id="supportticket-dashe_filter" class="dataTables_filter">
																							 <label>Search:
																								 <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="supportticket-dashe">
																							 </label>
																						 </div>
																					 </div>
																					 <div id="supportticket-dashe_processing" class="dataTables_processing card" style="display: none;">Processing...</div>
																				 </div>
																				 <table class="table table-vcenter text-nowrap table-bordered table-striped w-100 ticketdeleterow dataTable no-footer dtr-inline collapsed" id="supportticket-dashe" role="grid" aria-describedby="supportticket-dashe_info" style="width: 1470px;">
																		<thead>
																			<tr role="row">
																				<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 34px;" aria-label="S.No">S.No</th>
																				<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 18px;" aria-label="" width="10">
																					<input type="checkbox" id="customCheckAll">
																					<label for="customCheckAll"></label>
																				</th>
																				<th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 181px;" aria-label="#ID: activate to sort column ascending">#ID</th>
																				<th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 114px;" aria-label="User: activate to sort column ascending">User</th>
																				<th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 260px;" aria-label="Title: activate to sort column ascending">Title</th>
																				<th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 67px;" aria-label="Priority: activate to sort column ascending">Priority</th>
																				<th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 86px;" aria-label="Category: activate to sort column ascending">Category</th>
																				<th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 87px;" aria-label="Date: activate to sort column ascending">Date</th>
																				<th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 87px;" aria-label="Status: activate to sort column ascending">Status</th>
																				<th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 166px;" aria-label="Assign To: activate to sort column ascending">Assign To</th>
																				<th class="sorting" tabindex="0" aria-controls="supportticket-dashe" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Last Reply: activate to sort column ascending">Last Reply</th>
																				<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Actions">Actions</th>
																			</tr>
																		</thead>
																		<tbody id="refresh">

																		<tr class="odd"><td class="dtr-control">1</td>
																			<td>
																				<input type="checkbox" name="student_checkbox[]" class="checkall" value="29"></td>
																				<td>
																					<a href="">{{$ticketnumber}}</a>
																					 <span class="badge badge-danger-light">Overdue</span>
																				 </td>
																				 <td>Pasquale Kessler</td>
																				 <td>
																					 <a href="">Et quasi aliquid voluptatem ipsam animi...</a>
																				 </td>
																				 <td><span class="badge badge-danger-light">High</span>
																				 </td>
																				 <td>est</td>
																				 <td>May-12-2012</td>
																				 <td>
																					 <span class="badge badge-info">Inprogress</span>
																				 </td>
																				<td style="display: none;">9 years ago</td>
																	<td style="display: none;">
																		<div class="d-flex">
																			<a href="" class="action-btns1 edit-testimonial">
																				<i class="feather feather-edit text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"></i>
																			</a>
																			<a href="javascript:void(0)" data-id="29" class="action-btns1" id="show-delete">
																				<i class="feather feather-trash-2 text-danger" data-id="29" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete">
																				</i>
																			</a>
																		</div>
																	</td>
																</tr>
																</table>
																<div class="dataTables_info" id="supportticket-dashe_info" role="status" aria-live="polite">Showing 1 to 10 of 30 entries</div>
																<div class="dataTables_paginate paging_simple_numbers" id="supportticket-dashe_paginate">
																	<ul class="pagination">
																		<li class="paginate_button page-item previous disabled" id="supportticket-dashe_previous">
																		<a href="#" aria-controls="supportticket-dashe" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
																	</li>
																	<li class="paginate_button page-item active">
																		<a href="#" aria-controls="supportticket-dashe" data-dt-idx="1" tabindex="0" class="page-link">1</a>
																	</li>
																	<li class="paginate_button page-item ">
																		<a href="#" aria-controls="supportticket-dashe" data-dt-idx="2" tabindex="0" class="page-link">2</a>
																	</li>
																	<li class="paginate_button page-item ">
																		<a href="#" aria-controls="supportticket-dashe" data-dt-idx="3" tabindex="0" class="page-link">3</a>
																	</li>
																	<li class="paginate_button page-item next" id="supportticket-dashe_next">
																		<a href="#" aria-controls="supportticket-dashe" data-dt-idx="4" tabindex="0" class="page-link">Next</a>
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
							</div>
						</div>
					</div><!-- end app-content-->
			</div>
			<!--Footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
							<p class="mb-0">Copyright © 2022 <a href="https://web.facebook.com/profile.php?id=100078985773725"> Baltus Dreyer </a>. Developed by <a href="https://web.facebook.com/profile.php?id=100078985773725">Baltus Dreyer</a></p>
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->

		</div>
@endsection
