<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Tani-KU</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/tani.png" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Tiny slider CSS ======-->
    <link rel="stylesheet" href="assets/css/tiny-slider.css">

    <!--====== glightbox CSS ======-->
    <link rel="stylesheet" href="assets/css/glightbox.min.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css">

    <!--====== Selectr CSS ======-->
    <link rel="stylesheet" href="assets/css/selectr.css">

    <!--====== Nouislider CSS ======-->
    <link rel="stylesheet" href="assets/css/nouislider.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.5-alpha.min.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->


	<!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header_area">
        <div id="header_navbar" class="header_navbar">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-xl-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/">
                                <img id="logo" src="assets/images/tani.png" alt="Logo">TANI-KU
                            </a>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
								<ul id="nav" class="navbar-nav">
									<li class="nav-item">
									<a href="/">Home</a>
									</li>
									<li class="nav-item">
									<a href="#kategori">Category
										</a>

									</li>
									<li class="nav-item">
									<a href="#about">About
										</a>

									</li>
								</ul>
							</div>
							<ul class="header-btn d-md-flex">
								{{-- <li>
									<a href="#" class="main-btn account-btn">
										<span class="d-md-none"><i class="lni lni-user"></i></span>
										<span class="d-none d-md-block">Profile</span>
									</a>
									<ul class="dropdown-nav">
										<li><a href="profile-settings.html">Profile Settings</a></li>
										<li><a href="javascript:void(0)">Sign Out</a></li>
									</ul>
								</li> --}}
								
								<li>
									<a href="/register" class="main-btn btn-hover d-none d-md-block">Register</a>
								</li>
								<li>
									<a href="/login" class="main-btn btn-hover d-none d-md-block">Login</a>
								</li>
							</ul>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->
    </header>

    <!--====== HEADER PART ENDS ======-->
	<!--====== HERO PART START ======-->
	<section id="home" class="hero-area bg_cover">
		<div class="container">
			<div class="row">
				<div class="mx-auto col-lg-9 col-xl-9 col-md-10">
					<div class="text-center hero-content">
						<h1 class="mb-30 wow fadeInUp" data-wow-delay=".2s">Tani-ku</h1>
						<p class="wow fadeInUp" data-wow-delay=".4s">Selamat Datang di TaniKu yang merupakan sebuah platform yang didedikasikan  
 
							untuk mempermudah proses jual beli sayuran secara online. Situs ini menyediakan 
							
							berbagai informasi terkait seputar harga pasar terkini dari sayuran segar yang sudah 
							
							dipanen dan siap akan dijual.</p></br>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== HERO PART END ======-->

	<!--====== SEARCH PART START ======-->
	<div class="search-area">
		<div class="container">
			<div class="search-wrapper">
				<form action="#">
					<div class="row justify-content-center">
						<div class="col-lg-3 col-sm-5 col-10">
							<div class="search-input">
								<label for="keyword"><i class="lni lni-search-alt theme-color"></i></label>
								<input type="text" name="keyword" id="keyword" placeholder="Product keyword">
							</div>
						</div>
						<div class="col-lg-2 col-sm-5 col-10">
							<div class="search-btn">
								<button class="main-btn btn-hover">Search <i class="lni lni-search-alt"></i></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--====== SEARCH PART END ======-->

	<!--====== CATEGORY LIST PART START ======-->
	<section id ="kategori" class="category-list-area pt-130">
		<div class="container">
            <div class="category-list-wrapper">
                <div class="category-list-item">
                    <a href="/buah">
                        <div class="icon">
                            {{-- <i class="lni lni-car"></i> --}}
                            <i class="fa-solid fa-apple-whole"></i>
                        </div>
                        <h3>Buah</h3>
                    </a>
                </div>
                <div class="category-list-item">
                    <a href="/sayur">
                        <div class="icon">
                            {{-- <i class="lni lni-display"></i> --}}
                            <i class="fa-solid fa-carrot"></i>
                        </div>
                        <h3>Sayur</h3>
                    </a>
                </div>
                <div class="category-list-item">
                    <a href="/alat">
                        <div class="icon">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </div>
                        <h3>Peralatan</h3>
                    </a>
                </div>
                <div class="category-list-item">
                    <a href="category.html">
                        <div class="icon">
                            <i class="fa-brands fa-gg-circle"></i>
                        </div>
                        <h3>Coming Soon</h3>
                    </a>
                </div>
            </div>
        </div>
	</section>
	<!--====== CATEGORY LIST PART END ======-->

	<!--====== FEATURE PRODUCT PART START ======-->
	<section class="feature-product-area bg_cover">
		<div class="container">
			<div class="row">
				<div class="mx-auto col-lg-6 col-md-10">
					<div class="text-center section-title mb-60">
						<h1>Produk Tani</h1>
						<p>Hasil dari perkebunan yang sangat segar dan langsung dari petaninya</p>
					</div>
				</div>
			</div>

			<div class="product-carousel-wrapper">
				<div class="row feature-product-carousel">

					<div class="col-lg-4 col-md-6">
						<div class="single-product">
							<div class="product-img">
								<img src="assets/images/product/BUAH 1.png" alt="">
							</div>

							<div class="product-content">
								<div class="rating-wrapper">
									<h5 class="price theme-color">Rp 5.000 / gram</h5>
									<div class="rating">
										<span>2 Review</span>
										<i class="lni lni-star-filled"></i>
										<i class="lni lni-star-filled"></i>
										<i class="lni lni-star-filled"></i>
										<i class="lni lni-star-filled"></i>
										<i class="lni lni-star"></i>
									</div>
								</div>
								<h3 class="name"><a href="product-details.html">Golden Apple</a></h3>
								<p class="sort-des">Apel merupakan jenis buah-buahan, atau buah yang dihasilkan dari pohon apel.</p>
								<div class="product-bottom">
									<a href="javascript:void(0)" class="address-link"><i class="lni lni-map-marker"></i> Malang</a>
									<span class="theme-color"><i class="lni lni-heart"></i></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-product">
							<div class="product-img">
								<a href="javascript:void(0)" class="badge">New</a>
								<img src="assets/images/product/BUAH 2.png" alt="">
							</div>

							<div class="product-content">
								<div class="rating-wrapper">
									<h5 class="price theme-color">Rp 25.000 / kg</h5>
									<div class="rating">
										<span>2 Review</span>
										<i class="lni lni-star-filled"></i>
										<i class="lni lni-star-filled"></i>
										<i class="lni lni-star-filled"></i>
										<i class="lni lni-star-filled"></i>
										<i class="lni lni-star"></i>
									</div>
								</div>
								<h3 class="name"><a href="product-details.html">Tomat Besar</a></h3>
								<p class="sort-des">Tomat merupakan buah yang memilki warna merah menarik serta kaya akan kandungan vitamin seperti vitamin C.</p>
								<div class="product-bottom">
									<a href="javascript:void(0)" class="address-link"><i class="lni lni-map-marker"></i> Jogjakarta</a>
									<span class="theme-color"><i class="lni lni-heart"></i></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-product">
							<div class="product-img">
								<a href="javascript:void(0)" class="badge bottom">25% Discount</a>
								<img src="assets/images/product/brokoli1.jpg" alt="">
							</div>

							<div class="product-content">
								<div class="rating-wrapper">
									<h5 class="price theme-color">Rp 35.000 <del>Rp 40.000</del></h5>
									<div class="rating">
										<span>2 Review</span>
										<i class="lni lni-star-filled"></i>
										<i class="lni lni-star-filled"></i>
										<i class="lni lni-star-filled"></i>
										<i class="lni lni-star-filled"></i>
										<i class="lni lni-star"></i>
									</div>
								</div>
								<h3 class="name"><a href="product-details.html">Brokoli Hijau</a></h3>
								<p class="sort-des">Brokoli adalah tanaman yang sering dibudidayakan sebagai sayur.</p>
								<div class="product-bottom">
									<a href="javascript:void(0)" class="address-link"><i class="lni lni-map-marker"></i> Jakarta</a>
									<span class="theme-color"><i class="lni lni-heart"></i></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-product">
							<div class="product-img">
								<img src="assets/images/product/kubis1.jpg" alt="">
							</div>

							<div class="product-content">
								<div class="rating-wrapper">
									<h5 class="price theme-color">Rp 10.000</h5>
									<div class="rating">
										<span>2 Review</span>
										<i class="lni lni-star-filled"></i>
										<i class="lni lni-star-filled"></i>
										<i class="lni lni-star-filled"></i>
										<i class="lni lni-star-filled"></i>
										<i class="lni lni-star"></i>
									</div>
								</div>
								<h3 class="name"><a href="product-details.html">Kubis Segar</a></h3>
								<p class="sort-des">Kubis atau kol adalah tanaman dua tahunan hijau atau ungu berdaun, ditanam sebagai tanaman tahunan sayuran untuk kepala padat berdaunnya.</p>
								<div class="product-bottom">
									<a href="javascript:void(0)" class="address-link"><i class="lni lni-map-marker"></i> Magelang</a>
									<span class="theme-color"><i class="lni lni-heart"></i></span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--====== FEATURE PRODUCT PART ENDS ======-->

	<!--====== FOOTER PART START ======-->
	<section id="about">
	<footer class="footer-area">
		<div class="widget-wrapper">
			<div class="map-img">
				<img src="assets/images/footer/map-img.svg" alt="">
			</div>
			<div class="container">
				<div class="row">

					<div class="col-xl-4 col-md-7">
						<div class="footer-widget about">
							<a href="index.html" class="d-inline-block mb-30">
								<img src="assets/images/logo/tani.png" alt="">
							</a>
							<p class="text-white mb-25">Menjual berbagai sayuran dan buah-buahan, dan juga masih banyak lagi.</p>
							<ul class="social">
								<li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
								<li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
								<li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
								<li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
							</ul>
						</div>
					</div>

					

					<div class="col-xl-2 col-md-4 order-md-3 order-xl-2 col-sm-6">
						<div class="footer-widget">
							<h4>Support</h4>
							<ul class="link">
								<li><a href="javascript:void(0)">Live Chat</a></li>
								<li><a href="javascript:void(0)">Privacy Policy</a></li>
								<li><a href="javascript:void(0)">Purchase</a></li>
								<li><a href="javascript:void(0)">Protection</a></li>
								<li><a href="javascript:void(0)">Support</a></li>
							</ul>
						</div>
					</div>

					<div class="col-xl-2 col-md-4 order-md-4 order-xl-3 col-sm-6">
						<div class="footer-widget">
							<h4>Information</h4>
							<ul class="link">
								<li><a href="javascript:void(0)">Company</a></li>
								<li><a href="javascript:void(0)">Contact Info</a></li>
								<li><a href="javascript:void(0)">Blog & Articles</a></li>
								<li><a href="javascript:void(0)">Terms of Service</a></li>
								<li><a href="javascript:void(0)">Privacy Policy</a></li>
							</ul>
						</div>
					</div>

					<div class="col-xl-2 col-md-5 order-md-1 order-xl-4 col-sm-6">
						<div class="footer-widget">
							<h4>Contact Us</h4>
							<ul>
								<li>
									<span>Phone:</span>
									0345983672937
								</li>
								<li>
									<span>Email:</span>
									yourmail@gmail.com
								</li>
								<li>
									<span>Location:</span>
									Jawa, Indonesia
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="copy-right">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center">
							<p>Designed & Developed By <a href="https://graygrids.com/" rel="nofollow" target="_blank">GrayGrids</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	</section>
	<!--====== FOOTER PART ENDS ======-->

	<!--====== BACK TOP TOP PART START ======-->
	<a href="#" class="back-to-top btn-hover"><i class="lni lni-chevron-up"></i></a>
	<!--====== BACK TOP TOP PART ENDS ======-->


    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>

    <!--====== Tiny slider js ======-->
    <script src="assets/js/tiny-slider.js"></script>

    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== glightbox js ======-->
    <script src="assets/js/glightbox.min.js"></script>

    <!--====== Selectr js ======-->
    <script src="assets/js/selectr.min.js"></script>

    <!--====== Nouislider js ======-->
    <script src="assets/js/nouislider.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <script src="https://kit.fontawesome.com/201674d4a6.js" crossorigin="anonymous"></script>

    <script>
        //======== tiny slider for feature-product-carousel
        tns({
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 20,
            nav: false,
            controls: true,
            controlsPosition: 'bottom',
            controlsText: [
                '<span class="prev"><i class="lni lni-chevron-left"></i></span>',
                '<span class="next"><i class="lni lni-chevron-right"></i></span>'
            ],
            container: ".feature-product-carousel",
            items: 1,
            center: false,
            autoplayTimeout: 5000,
            swipeAngle: false,
            speed: 400,
            responsive: {
                768: {
                    items: 2,
                },

                992: {
                    items: 2,
                },

                1200: {
                    items: 3,
                }
            }
        });

        //======== tiny slider for testimonial
        tns({
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 20,
            nav: true,
            controls: false,
            container: ".testimonial-carousel",
            items: 1,
            center: false,
            autoplayTimeout: 5000,
            swipeAngle: false,
            speed: 400,
            responsive: {
                768: {
                    items: 2,
                },
                1200: {
                    items: 3,
                }
            }
        });
    </script>

</body>

</html>