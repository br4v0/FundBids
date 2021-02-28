@include('frontend.header')
<!-- Dashboard Banner -->
<div class="dashboard-banner d-none" style="background-image:url('images/dashboard/dash-bg-banner.jpg');">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12">
				<div class="content-box text-center">
					<h1 class="text-white line-height-45"><span class="text-color-secondary">Welcome </span>Paramveer Singh</h1>
					<ol class="breadcrumb mt-3">
						<li class="breadcrumb-item"><a href="javascript:void();">Home</a></li>
						<li class="breadcrumb-item"><a href="javascript:void();">Library</a></li>
						<li class="breadcrumb-item active">Data</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Dashboard Banner -->

<!-- Dashboard -->
<div class="dashboard-wrapper">
	<div class="row">
		<div class="col-lg-3 col-md-4">
			<div class="dash-sidebar">
				<ul>
					<li class="active"><a href="javascript:void();"><i class="fas fa-user-alt"></i> <span>My Profile<span></a></li>
					<li><a href="javascript:void();"><i class="fas fa-certificate"></i> Documents Verification</a></li>
					<li><a href="javascript:void();"><i class="fas fa-money-bill-wave-alt"></i> Payments Status/Transactions</a></li>
					<li><a href="javascript:void();"><i class="fas fa-wallet"></i> Pending Payments</a></li>
					<li><a href="javascript:void();"><i class="fas fa-chart-line"></i> Income Chart</a></li>
					<li><a href="javascript:void();"><i class="fas fa-hand-holding-usd"></i> Invest Fund</a></li>
				</ul>
				<div class="btn-panel text-center mt-4 mb-4">
					<a href="javascript:void();" class="btn btn-design btn-primary btn-corner box-shadow-0">Logout</a>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-md-8">
			<div class="dash-panel">
				<div class="dash--inner">
					<div class="row">
						<div class="col-lg-7 offset-lg-1">
							<div class="dash-profile mt-4">
								<div class="profile-item mb-3">
									<h3 class="font-18 text-color-primary mb-2">Name</h3>
									<p class="font-14">Paramveer Singh</p>
								</div>
								<div class="profile-item mb-3">
									<h3 class="font-18 text-color-primary mb-2">Email</h3>
									<p class="font-14">param@gmail.com</p>
								</div>
								<div class="profile-item mb-3">
									<h3 class="font-18 text-color-primary mb-2">Phone</h3>
									<p class="font-14">+91 12345 67890</p>
								</div>
								<div class="profile-item text-color-primary mb-3">
									<h3 class="font-18 mb-2">Address</h3>
									<p class="font-14">Address Here.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Dashboard -->
@include('frontend.footer')