<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tani-Ku</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .image {
            height: 600px;
            background-image: url('http://127.0.0.1:8000/assets/images/bg.jpg');
            background-size: cover;
            border-top-left-radius: 1rem !important;
            border-bottom-left-radius: 1rem !important;
        }

        .rounded-10 {
            border-radius: 1rem !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row min-vh-100">
            <div class="col-md m-auto">
                <div class="card rounded rounded-10 bg-light">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-6 image text-center d-flex align-items-center">
                                <img src="{{ asset('/assets/images/tani.png') }}" width="55%" class="m-auto">
                            </div>
                            <div class="col-md-6 p-5 border-left">
                                <h2 class="card-title text-center mb-5 fw-bold fs-1">REGISTRASI</h2>
                                <form action="#" class="pt-0 ">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name">
                                        <label for="floatingInput">Username</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Konfirmasi Password">
                                        <label for="floatingPassword">Konfirmasi Password</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Registrasi</button>
                                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                                        <div class="border-bottom w-100 ml-5"></div>
                                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                                        <div class="border-bottom w-100 mr-5"></div>
                                    </div>
                                    <a href="#" class="btn btn-danger w-100 text-white mb-3"><i
                                            class="fa-brands fa-google"></i> Sign Up With Google</a>
                                    <span href="#" class="btn btn-primary w-100 text-white"><i
                                            class="fa fa-facebook-f mr-2"></i> Sign Up With Facebook</span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-primary">
        <div class="container my-auto">
            <div class="copyright text-center my-auto text-white">
                <span>Copyright &copy; DotExE</span>
            </div>
        </div>
    </footer>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

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