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
										<div class="col-sm-12">
											<table class="table table-vcenter text-nowrap table-bordered table-striped ticketdeleterow w-100 dataTable no-footer dtr-inline" id="support-customerlist" role="grid" aria-describedby="support-customerlist_info" style="width: 1444px;">
												<thead>
													<tr role="row">
														<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 31px;" aria-label="S.No" width="10">Cust.No</th>
														<th  tabindex="0" rowspan="1" colspan="1" style="width: 367px;" >Name</th>
														<th  tabindex="0" rowspan="1" colspan="1" style="width: 87px;" >Cell</th>
														<th  tabindex="0" rowspan="1" colspan="1" style="width: 113px;" >SLA</th>
														<th  tabindex="0" rowspan="1" colspan="1" style="width: 162px;" >Customer Since</th>
												</thead>

												<tbody>
													@foreach ($customers as $customer)
													<tr class="odd">
														<td class="dtr-control"><a href="customer/{{$customer->id}}">{{$customer->id}}</a></td>
														<td>
															<div>
																<span class="h5">{{$customer->firstname}} {{$customer->lastname}}</span>
															</div>
	                    				<small class="fs-12 text-muted">
																<a class="font-weight-normal1">{{$customer->email}}</a>
															</small>
														</td>
														<td>{{$customer->cellnumber}}</td>
														@if ($customer->SLA == 1)
														<td>YES</td>
														@else
														<td>NO</td>
														@endif
														<td><span class="font-weight-normal">{{$customer->created_at}}</span></td>
													</tr>
													@endforeach
												</tbody>
											</table>
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
