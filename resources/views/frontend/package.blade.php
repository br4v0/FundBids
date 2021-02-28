@include('frontend.header')
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-sm-12">				
				<!-- Packages List Section -->
				<div class="packages">
					<h5 class="text-uppercase mb-3">Popular <span class="text-color-primary">Packages</span></h5>
					<div class="row mt-5">
						<div class="col-sm-6 col-12">
							<div class="package-box text-center mb-sm-0 mb-4">
								<a href="{{url('package-details')}}" class="d-block">
									<div class="icon-box mb-4">
										<img src="{{ asset('/website/images/icons/line-chart.svg') }}" alt="growth-icon">
									</div>
									<div class="title-box">
										<h3>Fundbids Growth Plan</h3>
									</div>
								</a>
							</div>
						</div>
						<div class="col-sm-6 col-12">
							<div class="package-box text-center mb-sm-0 mb-4">
								<a href="{{url('package-details')}}" class="d-block">
									<div class="icon-box mb-4">
										<img src="{{ asset('/website/images/icons/profit.svg') }}" alt="bonus-icon">
									</div>
									<div class="title-box">
										<h3>Fundbids Bonus Fund</h3>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- End Packages List Section -->
				<!-- Collection Section -->
				<div class="collection mt-5 pt-2">
					<h5 class="text-uppercase mb-3">Saving <span class="text-color-primary">Collection</span></h5>
					<div class="collection-flex mt-5">
						<div class="collection-box bg-white text-center mb-4">
							<div class="icon-box mb-3">
								<img src="{{ asset('/website/images/packages/icons/high-return.svg') }}" width="55" alt="bonus-icon">
							</div>
							<div class="title-box">
								<h5>High Return</h5>
							</div>
						</div>
						<div class="collection-box bg-white text-center mb-4">
							<div class="icon-box mb-3">
								<img src="{{ asset('/website/images/packages/icons/better-than-fd.svg') }}" width="55" alt="bonus-icon">
							</div>
							<div class="title-box">
								<h5>Better Than FD</h5>
							</div>
						</div>
						<div class="collection-box bg-white text-center mb-4">
							<div class="icon-box mb-3">
								<img src="{{ asset('/website/images/packages/icons/top-companies.svg') }}" width="55" alt="bonus-icon">
							</div>
							<div class="title-box">
								<h5>Top Companies</h5>
							</div>
						</div>
						<div class="collection-box bg-white text-center mb-4">
							<div class="icon-box mb-3">
								<img src="{{ asset('/website/images/packages/icons/smart-sell.svg') }}" width="55" alt="bonus-icon">
							</div>
							<div class="title-box">
								<h5>Smart Sell</h5>
							</div>
						</div>
						<div class="collection-box bg-white text-center mb-4">
							<div class="icon-box mb-3">
								<img src="{{ asset('/website/images/packages/icons/tax-saving.svg') }}" width="55" alt="bonus-icon">
							</div>
							<div class="title-box">
								<h5>Tax Saving</h5>
							</div>
						</div>
						<div class="collection-box bg-white text-center mb-4">
							<div class="icon-box mb-3">
								<img src="{{ asset('/website/images/packages/icons/smart-save.svg') }}" width="55" alt="bonus-icon">
							</div>
							<div class="title-box">
								<h5>Smart Save</h5>
							</div>
						</div>
					</div>
				</div>
				<!-- End Collection Section -->				
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