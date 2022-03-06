@extends('layouts.app')

@section('content')
<div class="page">
			<div class="page-main">
							<!--Page header-->
								<div class="page-header d-xl-flex d-block">
									<div class="page-leftheader">
										<h4 class="page-title"><span class="font-weight-normal text-muted ms-2">Customer</span></h4>
									</div>
								</div>
							<!--End Page header-->

							<!--Form Start-->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0">
										<h4 class="card-title">Create Customer</h4>
									</div>

									<form method="POST" action="">

										<div class="card-body">
												<div class="row">
														<div class="col-sm-6 col-md-6">
															<div class="form-group">
																<label class="form-label">First Name <span class="text-red">*</span></label>
																<input type="text" class="form-control " name="firstname" value="">
															</div>
														</div>
														<div class="col-sm-6 col-md-6">
															<div class="form-group">
																<label class="form-label">Last Name <span class="text-red">*</span></label>
																<input type="text" class="form-control " name="lastname" value="">
															</div>
														</div>
														<div class="col-sm-6 col-md-6">
															<div class="form-group">
																<label class="form-label">Email address <span class="text-red">*</span></label>
																<input type="email" class="form-control  " name="email" value="">
															</div>
														</div>
														<div class="col-sm-6 col-md-6">
																<div class="form-group">
																	<label class="form-label">Mobile Number</label>
																	<input type="text" class="form-control " name="phone" value="">
																</div>
															</div>
													</div>
											</div>

											<div class="col-md-12 card-footer">
													<div class="form-group float-end">
														<input type="submit" class="btn btn-secondary" value="Create Customer" onclick="this.disabled=true;this.form.submit();">
													</div>
											</div>

										</form>
									</div>
							</div>
							<!--Form End-->

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
@endsection