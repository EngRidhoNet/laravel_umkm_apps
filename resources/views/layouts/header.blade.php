<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link href="{{asset('css/tiny-slider.css')}}" rel="stylesheet">
	<link href="{{asset('css/style.css')}}" rel="stylesheet">
	<title>Post UMKM</title>
	<style>
		.card {
			min-height: 2px;
			/* Sesuaikan sesuai kebutuhan */
		}

		@keyframes slideInLeft {
			from {
				opacity: 0;
				transform: translateX(-100%);
			}

			to {
				opacity: 1;
				transform: translateX(0);
			}
		}

		/* Animasi masuk dari kanan */
		@keyframes slideInRight {
			from {
				opacity: 0;
				transform: translateX(100%);
			}

			to {
				opacity: 1;
				transform: translateX(0);
			}
		}

		/* Menerapkan animasi untuk elemen-elemen tertentu */
		.animate-from-left {
			animation: slideInLeft 1s ease-out;
		}

		.animate-from-right {
			animation: slideInRight 1s ease-out;
		}

		/* Opsional: Memberikan jarak antara kartu */
		.card {
			margin: 10px;
		}

		#chat1 .form-outline .form-control~.form-notch div {
			pointer-events: none;
			border: 1px solid;
			border-color: #eee;
			box-sizing: border-box;
			background: transparent;
		}

		#chat1 .form-outline .form-control~.form-notch .form-notch-leading {
			left: 0;
			top: 0;
			height: 100%;
			border-right: none;
			border-radius: .65rem 0 0 .65rem;
		}

		#chat1 .form-outline .form-control~.form-notch .form-notch-middle {
			flex: 0 0 auto;
			max-width: calc(100% - 1rem);
			height: 100%;
			border-right: none;
			border-left: none;
		}

		#chat1 .form-outline .form-control~.form-notch .form-notch-trailing {
			flex-grow: 1;
			height: 100%;
			border-left: none;
			border-radius: 0 .65rem .65rem 0;
		}

		#chat1 .form-outline .form-control:focus~.form-notch .form-notch-leading {
			border-top: 0.125rem solid #39c0ed;
			border-bottom: 0.125rem solid #39c0ed;
			border-left: 0.125rem solid #39c0ed;
		}

		#chat1 .form-outline .form-control:focus~.form-notch .form-notch-leading,
		#chat1 .form-outline .form-control.active~.form-notch .form-notch-leading {
			border-right: none;
			transition: all 0.2s linear;
		}

		#chat1 .form-outline .form-control:focus~.form-notch .form-notch-middle {
			border-bottom: 0.125rem solid;
			border-color: #39c0ed;
		}

		#chat1 .form-outline .form-control:focus~.form-notch .form-notch-middle,
		#chat1 .form-outline .form-control.active~.form-notch .form-notch-middle {
			border-top: none;
			border-right: none;
			border-left: none;
			transition: all 0.2s linear;
		}

		#chat1 .form-outline .form-control:focus~.form-notch .form-notch-trailing {
			border-top: 0.125rem solid #39c0ed;
			border-bottom: 0.125rem solid #39c0ed;
			border-right: 0.125rem solid #39c0ed;
		}

		#chat1 .form-outline .form-control:focus~.form-notch .form-notch-trailing,
		#chat1 .form-outline .form-control.active~.form-notch .form-notch-trailing {
			border-left: none;
			transition: all 0.2s linear;
		}

		#chat1 .form-outline .form-control:focus~.form-label {
			color: #39c0ed;
		}

		#chat1 .form-outline .form-control~.form-label {
			color: #bfbfbf;
		}

		#chat3 .form-control {
			border-color: transparent;
		}

		#chat3 .form-control:focus {
			border-color: transparent;
			box-shadow: inset 0px 0px 0px 1px transparent;
		}

		.badge-dot {
			border-radius: 50%;
			height: 10px;
			width: 10px;
			margin-left: 2.9rem;
			margin-top: -.75rem;
		}	
	</style>
</head>

<body>

	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-biru-gelap shadow-lg" arial-label="Furni navigation bar" style="background: linear-gradient(to right, #0DBDE5, #2DB08B)">

		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img src="{{asset('images/logorevv.png')}}" alt="" width="60">
			</a>
			<a class="navbar-brand" href="index.html">Pos<span>UMKM</span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li class="nav-item active">
						<a class="nav-link" href="{{url('/')}}">Beranda</a>
					</li>
					<li><a class="nav-link" href="{{url('/event')}}">Event</a></li>
					<li><a class="nav-link" href="about.html">UMKM</a></li>
					<li><a class="nav-link" href="about.html">KonsultasiUMKM</a></li>

				</ul>

				<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<li><a class="nav-link" href="#"><img src="{{asset('images/user.svg')}}"></a></li>
					<li><a class="btn btn-secondary me-2" href="{{ route('login') }}">Login</a></li>
				</ul>
			</div>
		</div>

	</nav>
	<!-- End Header/Navigation -->