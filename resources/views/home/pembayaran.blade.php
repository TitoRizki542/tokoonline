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

    <script>
        var nilai = 1; // Nilai awal

        function tambah() {
          nilai++;
          updateNilai();
        }

        function kurang() {
          nilai--;
          updateNilai();
        }

        function updateNilai() {
          var nilaiElem = document.getElementById("nilai");
          nilaiElem.innerHTML = nilai;
        }
      </script>

</head>

<body>
    <div class="container">
        <div class="row min-vh-100">
            <div class="col-md m-auto">
                <div class="card rounded rounded-0 bg-light">
                    <div class="card-body p-0">
                            <div class="col-md-12 p-5 border-center">
                                    <div class="mt-4 text-center">
                                              <form>
                                                <label for="metode">Metode Pembayaran : </label>
                                                <select id="metode" name="metode">
                                                  <option value="transfer">Pilih Metode</option>
                                                  <option value="transfer">Dana</option>
                                                  <option value="kartu">GoPay</option>
                                                  <option value="paypal">OVO</option>
                                                  <option value="transfer">Mandiri</option>
                                                  <option value="kartu">BRI</option>
                                                  <option value="paypal">BCA</option>
                                                  <option value="paypal">Bank Jateng</option>
                                                </select>
                                              </form>
                                              <form>
                                                <label for="jml_pembelian">Jumlah Pembelian : </label>
                                                  <button onclick="kurang()"> - </button>
                                                  <span id="nilai">1</span>
                                                  <button onclick="tambah()"> + </button>
                                              </form>
                                              <form>
                                                <label for="catatan">Jumlah Pembayaran : </label>
                                                <input type="text" id="jml_pembayaran" name="jml_pembayaran">
                                              </form>
                                        <a href="/detail_jeruk" class="main-btn btn-hover" width="150px">Kembali</a>
                                        <a href="/konfirmasi" class="main-btn btn-hover" width="150px">Beli</a>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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