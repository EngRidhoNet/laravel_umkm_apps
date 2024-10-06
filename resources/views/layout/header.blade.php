<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-biru-gelap shadow" aria-label="Furni navigation bar" style="background: linear-gradient(to right, #2eaf88 , #0dbde6);">

	<div class="container">
		<img src="{{asset('images/logorev.png')}}" style="width: 5%; height: auto;" class="">
		<a class="navbar-brand" href="index.html">Pos<span>UMKM</span></a>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsFurni " style="">
			<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
				<li class="nav-item active">
				<li><a class="nav-link" href="{{ url('/') }}" style="color:black !important">Beranda</a></li>
				<li><a class="nav-link" href="{{ url('/event') }}" style="color:black !important">Event</a></li>
				<li><a class="nav-link" href="about.html" style="color:black !important">UMKM</a></li>
				<li><a class="nav-link" href="about.html" style="color:black !important">Konsultasi UMKM</a></li>


			</ul>

			<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
				<li><a class="nav-link" href="#"><img src="{{asset('images/user.svg')}}"></a></li>
				<li><a class="btn btn-secondary me-2" href="{{ route('login') }}">Login</a></li>
			</ul>
		</div>
	</div>

</nav>