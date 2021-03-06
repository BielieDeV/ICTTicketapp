@extends('layouts.app')

@section('content')
<div class="page">
			<div class="page-main">
					<!--Page header-->
					<div class="container-fluid p-5 text-black text-center" >
						<a href="/ticketcreate" class="btn btn-primary">Create ticket</a>
						<a href="/tickets" class="btn btn-primary">Tickets</a>
						<a href="/customers" class="btn btn-primary">Customers</a>
						<a href="/customercreate" class="btn btn-primary">Create Customer</a>
					</div>
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2">Ticket Information</span></h4>
								</div>
							</div>
							<!--End Page header-->

							<!--Row-->
							<div class="row">
								<div class="col-xl-12 col-md-12 col-lg-12">
									<div class="row">
										<div class="col-xl-9 col-lg-12 col-md-12">
											<div class="card">
												<div class="card-header border-0 mb-1 d-block">
													<div class="d-sm-flex d-block">
														<div>
															<h4 class="card-title mb-1 fs-22">{{$ticket->subject}}</h4>
														</div>
													</div>
												</div>
												<div class="card-body pt-2 readmores px-6 mx-1">
													<div class="end">
														<span>Latest Update:{{$ticket->notes}}</span>
													</div>

												</div>
											</div>


											<div class="card">
												<div class="card-header border-0">
													<h4 class="card-title">Add Note</h4>
												</div>
												<form method="POST" action="/ticket/update" enctype="multipart/form-data">
													@csrf
													<input type="hidden" name="ticket_id" value="29">
													<div class="card-body status">
														<textarea class="summernote d-none " name="notes" aria-multiline="true" style="display: none;">{{$ticket->notes}}</textarea>
														<div class="note-editor note-frame panel panel-default">
															<div class="note-dropzone">
															<div class="note-dropzone-message">
															</div>
														</div>
														<div class="note-editing-area">
															<div class="note-handle">
																<div class="note-control-selection">
																	<div class="note-control-selection-bg"></div>
																	<div class="note-control-holder note-control-nw"></div>
																	<div class="note-control-holder note-control-ne"></div>
																	<div class="note-control-holder note-control-sw"></div>
																	<div class="note-control-sizing note-control-se"></div>
																	<div class="note-control-selection-info"></div>
																</div>
															</div>
															<textarea class="note-codable" aria-multiline="true"></textarea>
															<div class="note-editable" role="textbox" aria-multiline="true" spellcheck="true" autocorrect="true" style="height: 200px;" contenteditable="true">
																<p><br></p>
															</div>
														</div>
														<output class="note-status-output" role="status" aria-live="polite">
														</output>
										</div>
														<div class="custom-controls-stacked d-md-flex" id="text">
															<label class="form-label mt-1 me-5">Status</label>
															<span>{{$ticket->status}}</span>
														</div>
													</div>

													<div class="card-footer">
														<div class="form-group float-end">
															<input type="submit" class="btn btn-secondary" value="Add Note" onclick="this.form.submit();">
														</div>
													</div>
												</form>
											</div>
										</div>

										<div class="col-xl-3 col-lg-6 col-md-12">
											<div class="card">
												<div class="card-header  border-0">
													<div class="card-title">Ticket Information</div>
												</div>
												<div class="card-body pt-2 ps-0 pe-0 pb-0">
													<div class="table-responsive tr-lastchild">
														<table class="table mb-0 table-information">
															<tbody>
																<tr>
																	<td>
																		<span class="w-50">Ticket ID</span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="font-weight-semibold">{{$ticket->id}}</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<span class="w-50">Ticket Category</span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="font-weight-semibold">{{$ticket->category}}</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<span class="w-50">Ticket Priority</span>
																	</td>
																	<td>:</td>
																	<td name="priority">
																			<span class="badge badge-danger-dark" style="color:black">{{$ticket->priority}}</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<span class="w-50">Open Date</span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="font-weight-semibold">{{$ticket->created_at}}</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<span class="w-50">Status</span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="badge badge-info" style="color:black">{{$ticket->status}}</span>
																	</td>
																</tr>

															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header  border-0">
													<div class="card-title">Customer Details</div>
												</div>
												<div class="card-body text-center pt-2 px-0 pb-0 py-0">
													<div class="profile-pic">
														<div class="profile-pic-img mb-2">
															<span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Online" aria-label="Online"></span>

																<img src="http://localhost/storage/app/public/images/defaultprofile.png" class="brround avatar-xxl">

														</div>
														<a href="#" class="text-dark">
															<h5 class="mb-1 font-weight-semibold2">Customer Name</h5>
															<small class="text-muted ">test@rath.net
															</small>
														</a>
													</div>
													<div class="table-responsive text-start tr-lastchild">
														<table class="table mb-0 table-information">
															<tbody>
																<tr>
																	<td>
																		<span class="w-50">Mobile Number</span>
																	</td>
																	<td>:</td>
																	<td>
																		<span class="font-weight-semibold">1-973-758-2123</span>
																	</td>
																</tr>
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
					</div><!-- end app-content-->
			</div>
			<!--Footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
							<p class="mb-0">Copyright ?? 2022 <a href="https://web.facebook.com/profile.php?id=100078985773725"> Baltus Dreyer </a>. Developed by <a href="https://web.facebook.com/profile.php?id=100078985773725">Baltus Dreyer</a></p>
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->

		</div>

@endsection
