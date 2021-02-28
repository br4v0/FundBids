@include('frontend.header')
<!-- LeftRight Section -->
<div class="section auth-wrapper" style="background-image:url({{ asset('/website/images/auth/authbg.jpg') }});">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
				<div class="auth-panel">
					<form>
						<h4 class="text-color-primary text-center mb-5">Log in to <span class="text-white">Fundbids</span></h4>
						<div class="form-group">
							<label>User Name</label>
							<input type="text" class="form-control" placeholder="User Name">
						</div>						
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" placeholder="Password">
						</div>
						<div class="text-right">
							<a href="javascript:void();" class="btn-link text-white font-12">Forgot Password?</a>
						</div>
						<div class="btn-panel text-center mt-4">
							<a href="{{url('/user/profile')}}" class="btn btn-design btn-white btn-corner shadow-none">Log In</a>
						</div>
						<div class="text-center mt-4">
							<p class="text-white font-14">New Member? <a href="{{url('/signup')}}" class="btn-link text-color-primary font-weight-bold">Register Now</a><p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@include('frontend.footer')