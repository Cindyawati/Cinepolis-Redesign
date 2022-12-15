<?php include('../../koneksi.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!--CSS-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../../style.css">
        <script src="../../script.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

        <title>Events</title>
    </head>

    <body class="body">
        <!--Header-->
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <!--Logo-->
                    <a class="navbar-brand navbar-logo-container" href="../home.php">
                    <img class="navbar-logo" src="../../asset/cinepolis-logo.jpg" alt="Doctor">
                    </a>
                    <!--Hamburger Responsive-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--Menu-->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <div class="position-absolute top-50 end-0 translate-middle-y">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item ">
                            <a class="nav-link" href="../home.php">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="../schedule.php">Schedule</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link"  href="../movie.php">Movies</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="../cinemas.php">Cinemas</a>
                            </li>
                            <li class="nav-item header-menu">
                            <a class="nav-link active" aria-current="page" href="../news_promotion.php">News & Promotion</a>
                            </li>
                        </ul>
                        </div>
                    </ul>
                    </div>
                </div>
            </nav>
        </header>

        <br>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="row">
                        <img class="event-photo" src="../../asset/event/HEMAT DIMANA-MANA BAYAR NONTON PAKAI GOPAY.jpg" alt="" srcset="">
                    </div>
                </div>
                <div class="col-6 cinema-description">
                    <p class="cinema-name">HEMAT DIMANA-MANA BAYAR PAKAI GOPAY</p>
                    <div class="desc">
                        <p>Ngabisin waktu emang paling asik sambil nonton film di bioskop, apalagi ditambah diskon harga sampai dengan Rp 15.000.</p>
                        <br>
                        <p>Nah, sekarang kamu bisa bayar tiket nonton di Cinépolis dengan mudah pake GoPay melalui Aplikasi Go-Tix! Enaknya lagi sekarang lagi ada promo Cinépolis dari GoPay, kamu bisa dapetin potongan banyak banget. Oke banget kan? Nonton makin asik + dompet aman. Yuk cek selengkapnya promo Cinépolis di bawah ini.</p>
                    </div>
                    <div class="desc">
                        <p class="title">Syarat dan Ketentuan</p>
                        <ol>
                            <li>Diskon yang didapatkan<b>sebesar 30%, maksimal Rp15.000</b></li>
                            <li>Periode promo: <b>2 - 24 April 2022</b></li>
                            <li>Promo berlaku untuk pembelian <b>tiket Cinépolis di GoTix melalui aplikasi Gojek</b></li>
                            <li>1 promo/pengguna/periode</li>
                            <li>Kuota promo terbatas</li>
                            <li>Info lebih lanjut: <a style="font-size: 14px;" href="#">bit.ly/ngabuburitalagt</a></li>
                        </ol> 
                    </div>
                </div>
            </div>
        </div>
        <br>

        <!--Other Event & Promotions-->
        <div class="container event">
            <h4 class="now-showing"><b>Other Event & Promotions</b></h4>
        </div>

        <div id="page1" class="container">
            <div class="row">
            <div class="col">
                    <div class="card mb-4">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="img-fluid rounded-start">
                                    <a href="../eventdetail/popcorn_smax.php"><img src="../../asset/event/POPCORN SMAX RING.jpg" class="event-thumbnail" alt="..."></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="event-body">
                                    <a class="title-link" href="../eventdetail/popcorn_smax.php"><h5 class="event-title">POPCORN SMAX RING</h5></a>
                                    <p class="event-text">Popcorn pertama di Indonesia yang menggunakan REAL Topping.</p>
                                    <a href="../eventdetail/popcorn_smax.php" class="btn btn-primary event-button">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="img-fluid rounded-start">
                                    <a href="../eventdetail/promobank.php"><img src="../../asset/event/PROMO - PROMO BANK BUAT KAMU!.jpg" class="event-thumbnail" alt="..."></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="event-body">
                                    <a class="title-link" href="../eventdetail/promobank.php"><h5 class="event-title">PROMO BANK BUAT KAMU!</h5></a>
                                    <p class="event-text">Cek promo bank kita yuk, biar nonton kamu makin nyaman dan aman!</p>
                                    <a href="../eventdetail/promobank.php" class="btn btn-primary event-button">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <!--Footer-->
        <div class="container footer">
            <div class="container">
            <!--Seperator-->
            <div class="row"><div class="col separator"></div></div>

            <!--Content-->
            <div class="row">
                <div class="col">
                <h4 class="content">ABOUT CINÉPOLIS</h4>
                <a class="link" href="#"><p class="list-content">OUR STORY</p></a>
                <a class="link" href="#"><p class="list-content">PRESS ROOM</p></a>
                <a class="link" href="#"><p class="list-content">CAREERS</p></a>
                </div>
                <div class="col">
                <h4 class="content">HELP / INFO</h4>
                <a class="link" href="#"><p class="list-content">FAQ</p></a>
                <a class="link" href="#"><p class="list-content">TERMS OF SERVICE</p></a>
                <a class="link" href="#"><p class="list-content">PRIVACY POLICY</p></a>
                <a class="link" href="#"><p class="list-content">CONTACT US</p></a>
                </div>
                <div class="col">
                <h4 class="content">CINEMAS</h4>
                <a class="link" href="#"><p class="list-content">LOCATIONS</p></a>
                <a class="link" href="#"><p class="list-content">CINÉPOLIS VIP</p></a>
                <a class="link" href="#"><p class="list-content">CINÉPOLIS MACRO XE</p></a>
                <a class="link" href="#"><p class="list-content">CINÉPOLIS JOMO</p></a>
                <a class="link" href="#"><p class="list-content">CINÉPOLIS LUXE</p></a>
                <a class="link" href="#"><p class="list-content">CINÉPOLIS JUNIOR</p></a>
                </div>
                <div class="col">
                <h4 class="content">MARKETING</h4>
                <a class="link" href="#"><p class="list-content">NEWS & PROMOTIONS</p></a>
                <a class="link" href="#"><p class="list-content">ADVERTISE WITH US</p></a>
                <a class="link" href="#"><p class="list-content">CORPORATE SALES</p></a>
                </div>
                <div class="col">
                <h4 class="content">GET THE FREE APP</h4>
                <div class="row">
                    <div class="col-4">
                    <a href="https://apps.apple.com/in/app/cinemaxx/id986733797"><img class="store-logo" src="../../asset/Apps Store.jpg"></a>
                    </div>
                    <div class="col-4">
                    <a href="https://play.google.com/store/apps/details?id=com.cinemaxx.activity"><img class="store-logo" src="../../asset/Google play.jpg"></a>
                    </div>
                </div>
                </div>
            </div>

            <!--Copyright-->
            <div class="row">
                <div class="col copyright">
                <p class="copyright-text">&copy;PT Cinemaxx Global Pasifik 2019, All Rights Reserved.</p>
                </div>
            </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>