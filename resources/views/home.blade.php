@extends('layouts.app')

@section('content')
<div class="container-fluid p-5 bg-primary text-white text-center">
        <h2 class="">Welcome<br></h2>
</div>
<div class="container-fluid p-5 text-black text-center" >

  <a href="tickets" class="btn btn-primary">Tickets</a>
  <a href="customers" class="btn btn-primary">Customers</a>


</div>
<div class="container-fluid p-5 text-black text-center" >
  <a href="ticketcreate" class="btn btn-primary">Create ticket</a>
  <a href="customercreate" class="btn btn-primary">Create Customer</a>
</div>
<br>

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
