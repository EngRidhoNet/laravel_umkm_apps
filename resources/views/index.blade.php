	<!-- Start Hero Section -->@include('layouts.header')
	<div class="shadow-lg">
		<div class="hero shadow-lg " style="padding:8 0 0 0">
			<div class="container ">
				<div class="row justify-content-between">
					<div class="col-lg-5">
						<div class="intro-excerpt">
							<h1 style="color:black">Pos<span clsas="d-block" style="color: black"> UMKM</span></h1>
							<p class="mb-4" style="color: black;">Pos UMKM adalah Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi aspernatur asperiores modi delectus. Commodi harum vitae facilis nulla ullam ipsa molestiae possimus consectetur, dolorem eius. Minus quisquam eius repudiandae dolore.</p>
							<p><a href="" class="btn btn-secondary me-2">Apply Project</a><a href="{{route('event')}}" class="btn btn-grey-outline" style="color: white">Berita</a></p>
						</div>
					</div>
					<div class="col-lg-7">
						<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
							<ol class="carousel-indicators">
								<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
								<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
								<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="{{asset('images/banner 2.jpg')}}" alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="{{asset('images/banner1.jpg')}}" alt="Second slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="{{asset('images/banner 2.jpg')}}" alt="Third slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Hero Section -->

		<!-- start of section feature -->
		<!DOCTYPE html>
		<html lang="id">

		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Animasi Kartu</title>

			<style>
				/* Animasi masuk dari kiri */
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
			</style>

		</head>

		<body>
			<div class="py-5 my-auto" style="background: linear-gradient(to right, #0DBDE5, #2DB08B)">
				<div class="container py-5 my-auto" style="min-height: 10vh; display: flex; flex-direction: column; justify-content: center;">
					<div class="row text-center">
						<!-- Kartu 1: Animasi dari kiri -->
						<div class="col-md-2 animate-from-left">
							<div class="card shadow-sm p-3 mb-5 bg-white rounded-lg" style="height: 150px; border-radius: 10px;">
								<div href="{{route('umkm')}}">
									<img src="{{asset('images/umkm.png')}}" class="card-img-top mx-auto" alt="Galeri UMKM" style="width: 50%;">
									<div class="card-body">
										<h5 class="card-title" style="font-size: 14px;">UMKM</h5>
									</div>
								</div>
							</div>
						</div>
						<!-- Kartu 2: Animasi dari kanan -->
						<div class="col-md-2 animate-from-right">
							<div class="card shadow-sm p-3 mb-5 bg-white rounded-lg" style="height: 150px; border-radius: 10px;">
								<img src="{{asset('images/konsultasi.png')}}" class="card-img-top mx-auto" alt="Konsultasi UMKM" style="width: 50%;">
								<div class="card-body">
									<h5 class="card-title" style="font-size: 14px;">Kategori</h5>
								</div>
							</div>
						</div>
						<!-- Kartu 3: Animasi dari kiri -->
						<div class="col-md-2 animate-from-left">
							<div class="card shadow-sm p-3 mb-5 bg-white rounded-lg" style="height: 150px; border-radius: 10px;">
								<img src="{{asset('images/informasi.png')}}" class="card-img-top mx-auto" alt="Informasi Bisnis" style="width: 50%;">
								<div class="card-body">
									<h5 class="card-title" style="font-size: 14px;">Semua Lowongan</h5>
								</div>
							</div>
						</div>
						<!-- Kartu 4: Animasi dari kanan -->
						<div class="col-md-2 animate-from-right">
							<div class="card shadow-sm p-3 mb-5 bg-white rounded-lg" style="height: 150px; border-radius: 10px;">
								<img src="{{asset('images/chat.png')}}" class="card-img-top mx-auto" alt="Chat" style="width: 50%;">
								<div class="card-body">
									<h5 class="card-title" style="font-size: 14px;">Chat</h5>
								</div>
							</div>
						</div>
						<!-- Kartu 5: Animasi dari kiri -->
						<div class="col-md-2 animate-from-left">
							<div class="card shadow-sm p-3 mb-5 bg-white rounded-lg" style="height: 150px; border-radius: 10px;">
								<img src="{{asset('images/blog.png')}}" class="card-img-top mx-auto" alt="Blog" style="width: 50%;">
								<div class="card-body">
									<h5 class="card-title" style="font-size: 14px;">Blog</h5>
								</div>
							</div>
						</div>
						<!-- Kartu 6: Animasi dari kanan -->
						<div class="col-md-2 animate-from-right">
							<div class="card shadow-sm p-3 mb-5 bg-white rounded-lg" style="height: 150px; border-radius: 10px;">
								<img src="{{asset('images/kontak.png')}}" class="card-img-top mx-auto" alt="Contact Us" style="width: 50%;">
								<div class="card-body">
									<h5 class="card-title" style="font-size: 14px;">Contact Us</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>

		</html>

		<!-- end of section feature -->

		<!-- Start Product Section -->
		<div class="shadow-lg">
			<div class="product-section shadow-sm">
				<div class="container">
					<div class="row">
						<!-- Start Column 1 -->
						<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
							<h2 class="mb-4 section-title">Temukan Project UMKM Di Sekitar Malang Raya</h2>
							<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
							<p><a href="shop.html" class="btn">Explore</a></p>
						</div>
						<!-- End Column 1 -->

						<!-- Start Column 2 -->
						<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
							<a class="product-item" href="cart.html">
								<img src="{{asset('images/logosme.jpg')}}" class="img-fluid product-thumbnail">
								<h3 class="product-title">Marketing skills and video editing</h3>
								<strong class="product-price">Wildho Marketing Agency</strong>

								<span class="icon-cross">
									<img src="{{asset('images/logosme.jpg')}}" class="img-fluid">
								</span>
							</a>
						</div>
						<!-- End Column 2 -->

						<!-- Start Column 3 -->
						<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
							<a class="product-item" href="cart.html">
								<img src="{{asset('images/logosme.jpg')}}" class="img-fluid product-thumbnail">
								<h3 class="product-title">Wildho Marketing Agency</h3>
								<strong class="product-price"></strong>

								<span class="icon-cross">
									<img src="{{asset('images/logosme.jpg')}}" class="img-fluid">
								</span>
							</a>
						</div>
						<!-- End Column 3 -->
						<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
							<a class="product-item" href="cart.html">
								<img src="{{asset('images/plus.png')}}" class="img-fluid product-thumbnail">
								<h3 class="product-title">More</h3>
								<strong class="product-price"></strong>

								<span class="icon-cross">
									<img src="{{asset('images/plus.png')}}" class="img-fluid">
								</span>
							</a>
						</div>


						<!-- End Column 4 -->

					</div>
				</div>
			</div>
		</div>
		<!-- End Product Section -->
		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">Recent Blog</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="#" class="more">View All Posts</a>
					</div>
				</div>

				<div class="row">

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/post-1.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">First Time Home Owner Ideas</a></h3>
								<div class="meta">
									<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/post-2.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">How To Keep Your Furniture Clean</a></h3>
								<div class="meta">
									<span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/post-3.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
								<div class="meta">
									<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Blog Section -->
		<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('js/tiny-slider.js')}}"></script>
		<script src="{{asset('js/tiny-slider.js')}}"></script>
		@include('layouts.footer')
		</body>

		</html>