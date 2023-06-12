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

    <!--====== HERO PART START ======-->
    <section id="home" class="hero-area bg_cover">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-lg-9 col-xl-9 col-md-10">
                    <div class="text-center hero-content">
                        <h1 class="mb-30 wow fadeInUp" data-wow-delay=".2s">Transaksi Sukses !</h1>
                            <a href="/" class="main-btn btn-hover">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== HERO PART END ======-->


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