@extends('layouts.app')

@section('content')
<div class="page">
			<div class="page-main is-expanded">

						<!--Page header-->
						<div class="container-fluid p-5 text-black text-center" >
							<a href="ticketcreate" class="btn btn-primary">Create ticket</a>
							<a href="customercreate" class="btn btn-primary">Create Customer</a>
						</div>
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2">Customers</span></h4>
								</div>
							</div>
							<!--End Page header-->

							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0 d-sm-max-flex">
										<h4 class="card-title">Customers List</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<div id="support-customerlist_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
												<div class="row">
													<div class="col-sm-12 col-md-6">
														<div class="dataTables_length" id="support-customerlist_length">
															<label>Show
												<select name="support-customerlist_length" aria-controls="support-customerlist" class="form-select form-select-sm select2-hidden-accessible" data-select2-id="select2-data-1-ushg" tabindex="-1" aria-hidden="true">
													<option value="10" data-select2-id="select2-data-3-nb2s">10</option>
													<option value="25">25</option>
													<option value="50">50</option>
													<option value="100">100</option>
												</select>
												<span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-yc9g" style="width: 100%;">
													<span class="selection">
														<span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-support-customerlist_length-33-container" aria-controls="select2-support-customerlist_length-33-container">
															<span class="select2-selection__rendered" id="select2-support-customerlist_length-33-container" role="textbox" aria-readonly="true" title="10">10</span>
															<span class="select2-selection__arrow" role="presentation">
																<b role="presentation"></b>
															</span>
														</span>
													</span>
													<span class="dropdown-wrapper" aria-hidden="true">
													</span>
												</span> entries</label>
											</div>
										</div>

										<div class="col-sm-12 col-md-6">
											<div id="support-customerlist_filter" class="dataTables_filter">
												<label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="support-customerlist"></label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<table class="table table-vcenter text-nowrap table-bordered table-striped ticketdeleterow w-100 dataTable no-footer dtr-inline" id="support-customerlist" role="grid" aria-describedby="support-customerlist_info" style="width: 1444px;">
												<thead>
													<tr role="row">
														<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 31px;" aria-label="S.No" width="10">Cust.No</th>
														<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 18px;" aria-label="" width="10">
														<input type="checkbox" id="customCheckAll">
															<label for="customCheckAll"></label>
														</th>
														<th class="sorting" tabindex="0" aria-controls="support-customerlist" rowspan="1" colspan="1" style="width: 367px;" aria-label="Name: activate to sort column ascending">Name</th>
														<th class="sorting" tabindex="0" aria-controls="support-customerlist" rowspan="1" colspan="1" style="width: 87px;" aria-label="Gender: activate to sort column ascending">Cell</th>
														<th class="sorting" tabindex="0" aria-controls="support-customerlist" rowspan="1" colspan="1" style="width: 113px;" aria-label="User Type: activate to sort column ascending">SLA</th>
														<th class="sorting" tabindex="0" aria-controls="support-customerlist" rowspan="1" colspan="1" style="width: 162px;" aria-label="Register Date: activate to sort column ascending">Register Date</th>
												</thead>

												<tbody>
													<tr class="odd">
														<td class="dtr-control">1</td>
														<td><input type="checkbox" name="customer_checkbox[]" class="checkall" value="1"></td>
														<td>
															<div>
																<a href="#" class="h5">Timothy L. Brodbeck</a>
															</div>
	                    				<small class="fs-12 text-muted">
																<span class="font-weight-normal1">customer@gmail.com</span>
															</small>
															<a href="/customer" target="_blank">
																<span class="badge badge-success text-white f-12">Login as</span>
															</a>
														</td>
														<td>0720212232</td>
														<td>NO</td>
														<td><span class="badge badge-success-dark">May-11-2012</span></td>
													</tr>
												</tbody>
											</table>

											<div id="support-customerlist_processing" class="dataTables_processing card" style="display: none;">Processing...</div>

										</div>
									</div>

									<div class="row">
										<div class="col-sm-12 col-md-5">
											<div class="dataTables_info" id="support-customerlist_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div>
										</div>

										<div class="col-sm-12 col-md-7">
											<div class="dataTables_paginate paging_simple_numbers" id="support-customerlist_paginate">
												<ul class="pagination">
													<li class="paginate_button page-item previous disabled" id="support-customerlist_previous">
														<a href="#" aria-controls="support-customerlist" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
													</li>
													<li class="paginate_button page-item active">
														<a href="#" aria-controls="support-customerlist" data-dt-idx="1" tabindex="0" class="page-link">1</a>
													</li>
													<li class="paginate_button page-item ">
														<a href="#" aria-controls="support-customerlist" data-dt-idx="2" tabindex="0" class="page-link">2</a>
													</li>
													<li class="paginate_button page-item next" id="support-customerlist_next">
														<a href="#" aria-controls="support-customerlist" data-dt-idx="3" tabindex="0" class="page-link">Next</a>
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
