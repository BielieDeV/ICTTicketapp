@extends('layouts.app')

@section('content')
				<div class="page">
					<div class="page-main">
						<div class="container-fluid p-5 text-black text-center" >
							<a href="ticketcreate" class="btn btn-primary">Create ticket</a>
							<a href="customers" class="btn btn-primary">Customers</a>
						</div>

								<!-- Section -->
								<section>
									<div class="banner" style="padding:15px; text-align:center; text-color:black">
										<div class="header-text mb-0">
											<div class="container ">
												<div class="row text-white">
													<div class="col">
														<h1 class="mb-0" style="color:black">Edit Customer</h1>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<!-- Section -->

								<!--Section-->
								<section>
									<div class="cover-image sptb">
										<div class="container ">
											<div class="row">
												<div class="col-xl-3">
												<div class="card">
													<div class="card-body text-center item-user">
														<div class="profile-pic">
															<div class="profile-pic-img">
																<span class="bg-success dots" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="online"></span>

																<img src="" class="brround avatar-xxl" alt="default">

															</div>
															<h5 class="mt-3 mb-1 font-weight-semibold2">{{$customer->firstname}}</h5>
															<small class="text-muted ">{{$customer->email}}</small>
														</div>
													</div>
												</div>
											</div>


												<div class="col-xl-9">
													<div class="card">
														<div class="card-header border-0">
															<h4 class="card-title">Profile Details</h4>
														</div>
														<div class="card-body">
															<form method="POST" action="/customer/update">
																@csrf
																<div class="row">
																	<div class="col-sm-6 col-md-6">
																		<div class="form-group">
																			<label class="form-label">First Name<span class="text-red">*</span></label>
																			<input type="text" class="form-control " name="firstname" value="{{$customer->firstname}}">
																		</div>
																	</div>
																	<div class="col-sm-6 col-md-6">
																		<div class="form-group">
																			<label class="form-label">Last Name<span>*</span></label>
																			<input type="text" class="form-control " name="lastname" value="{{$customer->lastname}}">
																		</div>
																	</div>
																	<div class="col-sm-6 col-md-6">
																		<div class="form-group">
																			<label class="form-label">Email address</label>
																			<input type="text" class="form-control" name="email" value="{{$customer->email}}" readonly="">
																		</div>
																	</div>
																	<div class="col-sm-6 col-md-6">
																		<div class="form-group">
																			<label class="form-label">Mobile Number</label>
																			<input type="text" class="form-control " value="{{$customer->cellnumber}}" name="cellnumber">
																		</div>
																		<div class="form-group">
																			<label class="form-label">SLA</label>
																			<select type="select" class="form-control " value="No" name="SLA">
																					<option value="1">Yes</option>
																					<option value="0">No</option>
																			</select>
																		</div>
																	</div>
																	<div class="col-md-12 card-footer ">
																		<div class="form-group">
																			<input type="submit" class="btn btn-secondary float-end " value="Save Changes" onclick="this.form.submit();">
																		</div>
																	</div>
																</div>
															</form>
														</div>
														<div class="card">
														<div class="card-header">
															<div class="card-title">Delete Account</div>
														</div>
														<div class="card-body">
															<p>Once you delete this account, you can not access this account . You need to re-register the customer.</p>

														</div>
															<form method="POST" action="customer.delete" enctype="multipart/form-data">
																@csrf
																<div class="card-footer text-end">
																	<button class="btn btn-danger my-1" name="accounttodelete" value="{{$customer->email}}">Delete Account</button>
															</form
														</div>
													</div>
												</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<!--Section-->



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
