@extends('layouts.app')

@section('content')

				<div class="page">
					<div class="page-main">


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
															<a href="#" class="text-dark">
																<h5 class="mt-3 mb-1 font-weight-semibold2">Timothy L. Brodbeck</h5>

															</a>
															<small class="text-muted ">customer@gmail.com</small>
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
															<form method="POST" action="" enctype="multipart/form-data">
																<div class="row">
																	<div class="col-sm-6 col-md-6">
																		<div class="form-group">
																			<label class="form-label">First Name<span class="text-red">*</span></label>
																			<input type="text" class="form-control " name="firstname" value="Timothy">

																		</div>
																	</div>
																	<div class="col-sm-6 col-md-6">
																		<div class="form-group">
																			<label class="form-label">Last Name<span class="text-red">*</span></label>
																			<input type="text" class="form-control " name="lastname" value="L. Brodbeck">

																		</div>
																	</div>
																		<div class="form-group">
																			<label class="form-label">Email address</label>
																			<input type="email" class="form-control" value="customer@gmail.com" readonly="">

																		</div>
																	</div>
																	<div class="col-sm-6 col-md-6">
																		<div class="form-group">
																			<label class="form-label">Mobile Number</label>
																			<input type="text" class="form-control " value="1-217-896-7697" name="phone">
																		</div>
																		<div class="form-group">
																			<label class="form-label">SLA</label>
																			<select type="select" class="form-control " value="Yes" name="SLA">
																					<option value="Yes">Yes</option>
																					<option value="No">No</option>
																			</select>
																		</div>
																	</div>



																	<div class="col-md-12 card-footer ">
																		<div class="form-group">
																			<input type="submit" class="btn btn-secondary float-end " value="Save Changes" onclick="this.disabled=true;this.form.submit();">
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
															<p>Once you delete this account, you can not access your account with the same credentials. You need to re-register your account.</p>

														</div>
														<div class="card-footer text-end">
															<button class="btn btn-danger my-1" data-id="1" id="accountdelete" style="pointer-events: auto; cursor: not-allowed;" disabled="">Delete Account</button>
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
