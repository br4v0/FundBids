@include('frontend.header')
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-sm-12">				
				<!-- Packages List Section -->
				<div class="packages-details">
					<h4 class="mb-3">Fundbids Growth Plan</h4>
					<div class="mb-4"><canvas id="myChart"></canvas></div>
					<div class="fund-detail mb-4">
						<h5 class="mb-3">Fund Details</h5>
						<div class="row">
							<div class="col-lg-6">
								<div class="detail-list d-flex align-items-center justify-content-between border-bottom pb-2 mb-lg-0 mb-3">
									<h6 class="text-color-primary">Risk</h6>
									<p>Very High</p>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="detail-list d-flex align-items-center justify-content-between border-bottom pb-2">
									<h6 class="text-color-primary">Minimam Amount</h6>
									<p>₹1000</p>
								</div>
							</div>
						</div>
					</div>
					<div class="fund-overview mb-4">
						<h5 class="mb-3">Fund Overview</h5>
						<div class="overview-video">
							<iframe width="100%" height="350" style="border:none;" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
						</div>
					</div>
					<div class="return-calculator mb-4">
						<h5 class="mb-3">Return Calculator</h5>
						<div class="calculator-tab">								
							<ul class="nav nav-pills mb-4">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="pill" href="#Monthly">Monthly</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="pill" href="#One-Time">One Time</a>
								</li>								  
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="Monthly">
									<div class="cal-title d-flex align-items-center justify-content-between border-bottom pb-2 mb-4">
										<h6>Minimam Monthly Amount</h6>
										<p class="text-black">₹1000</p>
									</div>
									<div class="cal-amount d-flex align-items-center justify-content-between mb-4">
										<h6 class="font-14">Amount Per Month</h6>
										<p class="text-black">₹<span id="rangeAmnt"></span></p>
									</div>
									<div class="cal-range mb-4">
										<input type="range" id="calRange" min="1000" max="100000" value="1000" class="rangeSlider">
									</div>
									<div class="cal-duration mb-4">
										<h6 class="mb-3">Duration</h6>
										<div class="duration-btn">
											<span class="active">6M</span>
											<span>12M</span>
										</div>
									</div>
									<div class="cal-approx-amount d-flex align-items-center justify-content-between">
										<h6 class="mb-3">Approx Amount Get</h6>
										<div class="amount text-right">
											<span class="d-block">₹1000</span>
											<span>with 100% returns per annum</span>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="One-Time">
									<div class="cal-title d-flex align-items-center justify-content-between border-bottom pb-2 mb-4">
										<h6>Minimam Amount</h6>
										<p class="text-black">₹1000</p>
									</div>
									<div class="cal-amount d-flex align-items-center justify-content-between mb-4">
										<h6 class="font-14">Amount</h6>
										<p class="text-black">₹<span>1000</span></p>
									</div>
									<div class="cal-range mb-4">
										<input type="range" min="1000" max="100000" value="1000" class="rangeSlider">
									</div>
									<div class="cal-duration mb-4">
										<h6 class="mb-3">Duration <small class="font-weight-bold">(Minimum Time Limit 3 Month)</small></h6>
										<div class="duration-btn">
											<span class="active">3M</span>
											<span>6M</span>
											<span>9M</span>
										</div>
									</div>
									<div class="cal-approx-amount d-flex align-items-center justify-content-between">
										<h6 class="mb-3">Approx Amount Get</h6>
										<div class="amount text-right">
											<span class="d-block">₹1000</span>
											<span>with 5% returns per annum</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Packages List Section -->			
			</div>
			<div class="col-lg-4 col-md-5 col-sm-12">
				<div class="login-widget text-center mt-md-0 mt-4">
					<div class="icon-box"><img src="{{ asset('/website/images/packages/login-widget.svg') }}"></div>
					<h5>Go to investment online</h5>
					<p>The most convenient way to buy & manage your funds online.</p>
					<div class="btn-panel">
						<a href="javascript:void();" class="btn btn-design btn-secondary btn-corner">Login/Register</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('frontend.footer')