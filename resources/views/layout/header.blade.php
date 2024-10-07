
	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-biru-gelap shadow" aria-label="Furni navigation bar">

		<div class="container">
			<img src="{{asset('images/POSUMKMbg.png')}}" style="width: 5%; height: auto;" class="">
			<a class="navbar-brand" href="index.html">Pos<span>UMKM</span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li class="nav-item active">
						<a class="nav-link" href="index.html">Beranda</a>
					</li>
					<li><a class="nav-link" href="zz.html">Event</a></li>
					<li><a class="nav-link" href="about.html">UMKM</a></li>
					<li><a class="nav-link" href="about.html">Konsultasi UMKM</a></li>

				</ul>

				<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<li><a class="nav-link" href="#"><img src="{{asset('images/user.svg')}}"></a></li>
					<li><a class="btn btn-secondary me-2" href="{{ route('login') }}">Login</a></li>
				</ul>
			</div>
		</div>

	</nav>
