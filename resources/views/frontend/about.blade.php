@include('frontend.header')

<!-- Inner Banner -->
<div class="inner-banner" style="background-image:url({{ asset('/website/images/about/1.jpg') }});">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12">
				<div class="content-box text-center">
					<h1 class="text-white line-height-45" data-aos="fade-left" data-aos-duration="1000"><span class="text-color-secondary">FundBids is India's online investment </span>platform & scheme funds</h1>					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Inner Banner -->

<!-- LeftRight Section -->
<div class="section leftright-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="content-box text-center" data-aos="fade-left" data-aos-duration="1000">
					<h5 class="text-uppercase mb-3">About <span class="text-color-primary">Fundbids</span></h5>
					<p>Fundbids Limited is a privately owned investment platform. 
					Our aim is to offer customers the simplest and most cost-effective way to invest their earnings for long-term financial growth. Our performance is distinguished by a record of superior risk adjusted returns customized for individuals, across an expanding range of products and through various economical conditions. As our firm is built on a strong foundation of intellectual and financial capital, we focus on attracting highly talented people and on creating an atmosphere that rewards initiative, independent thinking, and integrity. Our solid financial base, including strong capital, ensures our capacity to deliver on our commitments.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End LeftRight Section -->

<!-- BgImage Section -->
<div class="bg-wrapper bg-image" style="background-image:url({{ asset('/website/images/about/1.jpg') }});">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="content-box text-center" data-aos="fade-right" data-aos-duration="1000">
					<h5 class="text-uppercase text-white mb-3">Our <span class="text-color-secondary">vision</span></h5>
					<p class="text-white">We believe everyone in India should have access to a world-class investment platform and sophisticated investment advice. We're on a mission to deliver that.</p>
				</div>
			</div>			
		</div>
	</div>
</div>
<!-- End BgImage Section -->

<!-- LeftRight Section -->
<div class="section leftright-wrapper">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-md-1 order-2">
				<div class="img-box" data-aos="fade-up" data-aos-duration="1000">
					<img src="{{ asset('/website/images/about/3.jpg') }}" class="w-100 rounded" alt="image">
				</div>
			</div>
			<div class="col-md-6 order-md-2 order-1">
				<div class="content-box pl-md-5 mb-md-0 mb-4" data-aos="fade-left" data-aos-duration="1000">
					<h5 class="text-uppercase text-center mb-3">WHAT IS <span class="text-color-primary">FUNDBIDS ?</span></h5>
					<div class="list-design d-flex w-100 mb-3">
						<div class="icon">
							<img src="{{ asset('/website/images/icons/learn.png') }}" width="35">
						</div>
						<div class="text ml-2">
							We help you invest in fully-diversified portfolios of low-cost index funds, based on your risk profile.
						</div>
					</div>
					<div class="list-design d-flex w-100 mb-3">
						<div class="icon">
							<img src="{{ asset('/website/images/icons/technology.svg') }}" width="35">
						</div>
						<div class="text ml-2">
							We use cutting-edge technology to simplify the entire investing experience and provide you the best possible return.
						</div>
					</div>
					<div class="list-design d-flex w-100">
						<div class="icon">
							<img src="{{ asset('/website/images/icons/24-hours.svg') }}" width="35">
						</div>
						<div class="text ml-2">
							We do this by offering easy rebalancing, dividend reinvesting, and tax optimization - services that were very time consuming and complicated to do on your own or were only available to the ultra rich.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End LeftRight Section -->

<!-- LeftRight Section -->
<div class="section leftright-wrapper bg-gray">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12">
				<div class="content-box text-center" data-aos="fade-left" data-aos-duration="1000">
					<div class="img-box mb-4" data-aos="fade-up" data-aos-duration="1000">
						<img src="{{ asset('/website/images/about/paramveer.jpg') }}" width="100" height="100" class="mb-3" style="border-radius:50%;object-fit:cover;" alt="image">
						<h4 class="font-18">PARAMVEER SINGH (CEO)</h4>
					</div>
					<p>Paramveer Co-founded FUNDBIDS in 2020 and is a new generation executive with 7 years of experience across diverse roles equity strategy, management, operations and technology. Paramveer has previously worked at organisations including money Strategy, focusing on marketing and  sales management. Paramveer studied computer science, earning his Bachelor of Science from Atmiya University ,Gujrat.His an experienced with a large-scale systems, utilising his skill set to build  equity market and market analysing.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End LeftRight Section -->

@include('frontend.footer')
