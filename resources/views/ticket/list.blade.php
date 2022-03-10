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
																<h3 class="mb-0 mt-1 mb-2">{{$ticketcount}}</h3>
															</div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- <div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold">Active Tickets</span>
															<h3 class="mb-0 mt-1  mb-2"></h3> </div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary brround my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div> -->
										<!-- <div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<a href="" class="admintickets"></a>
												<div class="card-body">
													<div class="row">
														<div class="col-8">
															<div class="mt-0 text-start"> <span class="fs-14 font-weight-semibold">Closed Tickets</span>
																<h3 class="mb-0 mt-1 mb-2"></h3>
															</div>
														</div>
														<div class="col-4">
															<div class="icon1 bg-primary my-auto  float-end"> <i class="las la-ticket-alt"></i> </div>
														</div>
													</div>
												</div>
											</div>
										</div> -->
										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="card mb-0">
												<div class="card-header border-0">
													<h4 class="card-title">Tickets Summary</h4>
												</div>
												<div class="card-body">
													<div class="table-responsive">
																	<div id="supportticket-dashe_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
																			 <table class="table table-vcenter text-nowrap table-bordered table-striped w-100 ticketdeleterow dataTable no-footer dtr-inline collapsed" id="supportticket-dashe" role="grid" aria-describedby="supportticket-dashe_info" style="width: 1470px;">
																		<thead>
																			<tr role="row">
																				<th  tabindex="0"  rowspan="1" colspan="1" style="width: 181px;" >#ID</th>
																				<th  tabindex="0"  rowspan="1" colspan="1" style="width: 114px;" >Customer</th>
																				<th  tabindex="0"  rowspan="1" colspan="1" style="width: 260px;" >Title</th>
																				<th  tabindex="0"  rowspan="1" colspan="1" style="width: 67px;" >Priority</th>
																				<th  tabindex="0"  rowspan="1" colspan="1" style="width: 87px;" >Date</th>
																				<th  tabindex="0"  rowspan="1" colspan="1" style="width: 87px;">Status</th>
																				<th  tabindex="0"  rowspan="1" colspan="1" style="width: 166px;" >Assigned To</th>
																			</tr>
																		</thead>
																		<tbody>
																			@foreach ($tickets as $ticket)
																		<tr class="odd" ><td class="dtr-control"><a href="ticket.view/{{$ticket->id}}">{{$ticket->id}}</a></td>

																				 <td>{{$ticket->customer}}</td>
																				 <td>
																					 <span>{{$ticket->subject}}</span>
																				 </td>
																				 <td><span class="badge" style="color:black">{{$ticket->priority}}</span>
																				 </td>
																				 <td>{{$ticket->created_at}}</td>
																				 <td>
																					 <span class="badge" style="color:black">{{$ticket->status}}</span>
																				 </td>
																				<td>{{$ticket->assingedto}}</td>
																</tr>@endforeach
																</table>
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
