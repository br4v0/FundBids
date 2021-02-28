@include('frontend.header')
<!-- Home Banner -->
<div class="home-banner py-5" style="background-image:url({{ asset('/website/images/home/banner-bg-pattern.jpg') }});">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6">
				<div class="img-box mb-md-0 mb-3">
					<img src="{{ asset('/website/images/home/1.jpg') }}" class="w-100 rounded" alt="banner-image" data-aos="zoom-in-left" data-aos-duration="1000">
				</div>
			</div>
			<div class="col-md-6">
				<div class="content-box text-center">
					<h1 class="line-height-45 mb-2" data-aos="fade-left" data-aos-duration="1000">Go to investment online</h1>
					<p class="font-16 mb-3" data-aos="fade-left" data-aos-duration="2000">The most convenient way to buy & manage your funds online.</p>
					<div class="btn-panel" data-aos="zoom-in" data-aos-duration="1000">
						<a href="javascript:void();" class="btn btn-design btn-secondary btn-corner">Create Accounts</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Home Banner -->

<!-- Feature Bar -->
<div class="featurebar bg-color-primary py-lg-0 py-3">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="featurebar-box text-center">
					<a href="javascript:void();" class="d-block text-white py-3" data-scroll-nav="0">
						<i class="fas fa-user"></i>
						<h4 class="mt-2">Fast Account Open</h4>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="featurebar-box text-center">
					<a href="javascript:void();" class="d-block text-white py-3" data-scroll-nav="1">
						<i class="fas fa-money-bill-wave"></i>
						<h4 class="mt-2">Easy & Paperless Transaction</h4>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="featurebar-box text-center">
					<a href="javascript:void();" class="d-block text-white py-3" data-scroll-nav="2">
						<i class="fas fa-info-circle"></i>
						<h4 class="mt-2">Scheme Information</h4>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="featurebar-box text-center">
					<a href="javascript:void();" class="d-block text-white py-3" data-scroll-nav="3">
						<i class="fas fa-share-alt"></i>
						<h4 class="mt-2">Track Investment</h4>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Feature Bar -->

<!-- Fast Account Open -->
<div class="section fast-account-open" data-scroll-index="0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5">
				<div class="content-box text-center mb-lg-0 mb-5" data-aos="fade-right" data-aos-duration="1000">
					<h5 class="text-color-primary text-uppercase mb-2">Fast Account Open</h5>
					<p>No forms to fill. No PIN requests. <br>Start investing as soon as you create your account.</p>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="row justify-content-center">
					<div class="col-md-5" data-aos="fade-left" data-aos-duration="1000">
						<div class="descriptin-box mb-md-0 mb-4">
							<div class="img-box mb-3">
								<img src="{{ asset('/website/images/icons/biz-card-sq.png') }}" alt="icon">
							</div>
							<h3 class="text-uppercase font-14 font-weight-bold mb-2">Simple Registration</h3>
							<p>All we need is your PAN & date of birth. You can proceed by verifying your bank account number.</p>
						</div>
					</div>
					<div class="col-md-5" data-aos="fade-left" data-aos-duration="2000">
						<div class="descriptin-box">
							<div class="img-box mb-3">
								<img src="{{ asset('/website/images/icons/easy_fast_signup.png') }}" alt="icon">
							</div>
							<h3 class="text-uppercase font-14 font-weight-bold mb-2">Login In Simple</h3>
							<p>No more remembering username & password. Key in your PAN &  your email or mobile!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Fast Account Open -->

<!-- LeftRight Section -->
<div class="section leftright-wrapper bg-gray" data-scroll-index="1">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-md-1 order-2">
				<div class="img-box" data-aos="fade-up" data-aos-duration="1000">
					<img src="{{ asset('/website/images/home/2.jpg') }}" class="w-100 rounded" alt="image">
				</div>
			</div>
			<div class="col-md-6 order-md-2 order-1">
				<div class="content-box pl-md-5 mb-md-0 mb-4" data-aos="fade-left" data-aos-duration="1000">
					<h5 class="text-color-primary text-uppercase text-center mb-3">Easy & Paperless Transaction</h5>
					<div class="list-design d-flex w-100 mb-3">
						<div class="icon">
							<img src="{{ asset('/website/images/icons/invest.svg') }}" width="35">
						</div>
						<div class="text ml-2">
							Invest in an existing or open a new folio. No forms, no signatures. Invest outside the login too!
						</div>
					</div>
					<div class="list-design d-flex w-100">
						<div class="icon">
							<img src="{{ asset('/website/images/icons/transaction.svg') }}" width="35">
						</div>
						<div class="text ml-2">
							Do all transactions – Buy & Sell investments. Change your money amount preferences. No paper, no signature!
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End LeftRight Section -->

<!-- LeftRight Section -->
<div class="section leftright-wrapper" data-scroll-index="2">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6">
				<div class="content-box pr-md-5 mb-md-0 mb-4" data-aos="fade-right" data-aos-duration="1000">
					<h5 class="text-color-primary text-center text-uppercase mb-3">Scheme Information</h5>
					<div class="list-design d-flex w-100 mb-3">
						<div class="icon">
							<img src="{{ asset('/website/images/icons/scheme.svg') }}" width="35">
						</div>
						<div class="text ml-2">
							See all our schemes in a single page. Browse by category and plan type
						</div>
					</div>
					<div class="list-design d-flex w-100">
						<div class="icon">
							<img src="{{ asset('/website/images/icons/graph.svg') }}" width="35">
						</div>
						<div class="text ml-2">
							Make informed investing decisions. View historic performance, returns calculator, latest portfolio & much more for each scheme.
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="img-box" data-aos="fade-left" data-aos-duration="1000">
					<img src="{{ asset('/website/images/home/3.jpg') }}" class="w-100 rounded" alt="image">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End LeftRight Section -->

<!-- LeftRight Section -->
<div class="section leftright-wrapper bg-gray" data-scroll-index="3">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-md-1 order-2">
				<div class="img-box" data-aos="fade-up" data-aos-duration="1000">
					<img src="{{ asset('/website/images/home/4.jpg') }}" class="w-100 rounded" alt="image">
				</div>
			</div>
			<div class="col-md-6 order-md-2 order-1">
				<div class="content-box pl-md-5 mb-md-0 mb-4" data-aos="fade-left" data-aos-duration="1000">
					<h5 class="text-color-primary text-center text-uppercase mb-3">Track Investment</h5>
					<div class="list-design d-flex w-100 mb-3">
						<div class="icon">
							<img src="{{ asset('/website/images/home/3.jpg') }}" width="35">
						</div>
						<div class="text ml-2">
							See how your investments are doing.
						</div>
					</div>
					<div class="list-design d-flex w-100">
						<div class="icon">
							<img src="{{ asset('/website/images/icons/profit.svg') }}" width="35">
						</div>
						<div class="text ml-2">
							View portfolio's current value, cost of investment, annualized returns & more
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End LeftRight Section -->
@include('frontend.footer')