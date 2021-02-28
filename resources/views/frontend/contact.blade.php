@include('frontend.header')


<!-- Inner Banner -->
<div class="inner-banner" style="background-image:url({{ asset('/website/images/banners/about.png') }});">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12">
				<div class="content-box text-center">
					<h1 class="text-white line-height-45" data-aos="fade-left" data-aos-duration="1000"><span class="text-color-secondary">Contact </span>Us</h1>					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Inner Banner -->

<!-- Contact Section -->
<div class="section contact-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-6 order-md-1 order-2">
				<div class="content-box">
					<h5 class="text-uppercase mb-3">Contact <span class="text-color-primary">Details</span></h5>
					<p class="mb-3">Fundbids Limited is a privately owned investment platform. Our aim is to offer customers the simplest and most cost-effective way to invest their earnings for long-term financial growth.</p>
					<div class="detail-list">
						<div class="list-item mb-3">
							<h6 class="text-color-primary mb-1">Email</h6>
							<p class="font-14">info@fundbids.com</p>
						</div>
						<div class="list-item mb-3">
							<h6 class="text-color-primary mb-1">Phone Number</h6>
							<p class="font-14">+91 81282 22810</p>
						</div>
						<div class="list-item mb-3">
							<h6 class="text-color-primary mb-1">Whatsapp Number</h6>
							<p class="font-14">+971 55 723 9892</p>
						</div>
						<div class="list-item">
							<h6 class="text-color-primary mb-1">Address</h6>
							<p class="font-14">Dubai</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 order-md-2 order-1">
				<div class="contact-form mb-md-0 mb-5">
					<h5 class="text-uppercase text-center mb-4">Get In Touch <span class="text-color-primary">With Us</span></h5>
					<form>
						<div class="form-group">
							<label>Full Name</label>
							<input type="text" class="form-control" placeholder="Full Name">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="number" class="form-control" placeholder="Phone">
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea rows="4" class="form-control" placeholder="Write A Message"></textarea>
						</div>
						<div class="btn-panel text-center mt-4">
							<a href="javascript:void();" class="btn btn-design btn-primary btn-corner">Submit</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Contact Section -->

@include('frontend.footer')