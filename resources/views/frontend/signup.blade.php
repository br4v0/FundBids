@include('frontend.header')
<!-- LeftRight Section -->
<div class="section auth-wrapper" style="background-image:url({{ asset('/website/images/auth/authbg.jpg') }});">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
				<div class="auth-panel">
					<form>
						<h4 class="text-color-primary text-center mb-5">Signup in to <span class="text-white">Fundbids</span></h4>
						<div class="form-group">
							<label>User Name</label>
							<input type="text" class="form-control" placeholder="User Name">
						</div>
						<div class="form-group">
							<label>Mobile Number</label>
							<input type="text" class="form-control" placeholder="Mobile Number">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<label>What is the purpose of your investment?</label>
							<select class="form-control">
								<option selected disabled>Please Select</option>
								<option>Option 1</option>
								<option>Option 2</option>
								<option>Option 3</option>
								<option>Option 4</option>
							</select>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" placeholder="Password">
						</div>
						<div class="btn-panel text-center mt-5">
							<a href="javascript:void();" class="btn btn-design btn-white btn-corner shadow-none">Sign Up</a>
						</div>
						<div class="text-center mt-4">
							<p class="text-white font-14">Already Member? <a href="login.php" class="btn-link text-color-primary font-weight-bold">Sign In</a><p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@include('frontend.footer')