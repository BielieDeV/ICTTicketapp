@extends('layouts.app')

@section('content')
<div class="page-main is-expanded">
							<!--Page header-->
							<div class="container-fluid p-5 text-black text-center" >
							  <a href="tickets" class="btn btn-primary">Tickets</a>
							  <a href="customers" class="btn btn-primary">Customers</a>
							</div>
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2">Create Ticket</span></h4>
								</div>
							</div>
							<!--End Page header-->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-header border-0">
										<h4 class="card-title">New Ticket</h4>
									</div>
									<form action="/storeticket" method="post" id="formdata" enctype="multipart/form-data">
									@csrf
										<input type="hidden" name="_token" value="tgT6sZadzLBvL4gXu4RbC91DcOp0M8BMHi1niF5Q">
								</div>
										<div class="card-body">
											<div class="form-group ">
												<div class="row">
													<div class="col-md-3">
														<label class="form-label mb-0 mt-2">Ticket Subject <span class="text-red">*</span></label>
													</div>
													<div class="col-md-9">
														<input type="text" id="subject" class="form-control" placeholder="Subject" name="subject" value="">
													</div>
												</div>
											</div>
											<div class="form-group">
                        <div class="form-group">
  												<div class="row">
  													<div class="col-md-3">
  														<label class="form-label mb-0 mt-2">Customer</label>
  													</div>
														<div class="col-md-9">
															<select class="form-control form-select select2 select2-hidden-accessible" data-placeholder="Select Customer" name="customer" data-select2-id="select2-data-1-jz52" tabindex="-1" aria-hidden="true">
																<option label="Select Customer" data-select2-id="select2-data-3-qefy"></option>
																<option value="Critical">$customer</option>
															</select>
														</div>
  												</div>
  											</div>
												<div class="row">
													<div class="col-md-3">
														<label class="form-label mb-0 mt-2">Priority </label>
													</div>
													<div class="col-md-9">
														<select class="form-control form-select select2 select2-hidden-accessible" data-placeholder="Select Priority" name="priority" data-select2-id="select2-data-1-jz52" tabindex="-1" aria-hidden="true">
															<option label="Select Priority" data-select2-id="select2-data-3-qefy"></option>
															<option value="Critical">Critical</option>
															<option value="High">High</option>
															<option value="Medium">Medium</option>
															<option value="Low">Low</option>
														</select>
													</div>
                          <div class="card-footer">
                            <div class="form-group float-end">
                              <input type="submit" class="btn btn-secondary btn-lg" value="Create Ticket" onclick="this.disabled=true;this.form.submit();">
                            </div>
                          </div>
												</div>
											</div>
										</div>
									</form>
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
