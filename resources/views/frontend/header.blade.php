<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fund Bids || Home</title>
	<link rel="stylesheet" href="{{ asset('/website/bootstrap/css/bootstrap.min.css') }}">		
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">		
	<link rel="stylesheet" href="{{ asset('/website/css/style.css') }}">		
	<link rel="stylesheet" href="{{ asset('/website/css/responsive.css') }}">		
	<link rel="stylesheet" href="{{ asset('/website/css/font.css') }}">
	<link rel="stylesheet" href="{{ asset('/website/fonts/soleil/stylesheet.css') }}">
	<link rel="stylesheet" href="{{ asset('/website/fonts/BlackerPro/stylesheet.css') }}">
	<link rel="stylesheet" href="{{ asset('/website/library/aos/aos.css') }}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
</head>

<body>

<!-- Header -->
<div class="header">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="index.php"><img src="{{ asset('/website/images/logos/logo-black.png') }}"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{url('/')}}">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('/about')}}">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('/why-choose-us')}}">Why Fundbids</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('/package')}}">Packages</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('/contact')}}">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('/user-login')}}">Login</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>
<!-- End Header -->