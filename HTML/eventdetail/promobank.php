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
                        <img class="event-photo" src="../../asset/event/PROMO - PROMO BANK BUAT KAMU!.jpg" alt="" srcset="">
                    </div>
                </div>
                <div class="col-6 cinema-description">
                    <p class="cinema-name">PROMO - PROMO BANK BUAT KAMU!</p>
                    <p class="title">HOLA CINEPOLITOS!</p>
                    <p class="title">CUMA DI CINEPOLIS YANG BISA ADA PROMO TIAP HARI</p>
                    <br>
                    <div class="desc">
                        <p>Di tahun 2022 ini, kalian dapat menikmati beragam promo di Cinepolis.</p>
                        <p>Jadi, kalian ga bakalan bosen deh apalagi promonya seru-seru banget.</p>
                        <br>
                        <p>Nonton film blockbuster, anime atau film lokal bareng pacar, gebetan, teman, atau keluarga jadi lebih seru dan tentunya nyaman di kantong.</p>
                        <p>Jadi semakin seru kan nonton di Cinepolis.</p>
                        <br>
                        <p>Yuk, kepoin promo-promonya di bawah ini:</p>
                    </div>
                    <div class="desc">
                        <p class="title">TIAP RABU (OCBC NISP)</p>
                        <ul>
                            <li>Buy 1 Get 1 Tiket untuk studio VIP dengan <b>Kartu Voyage OCBC s/d 22 Februari 2023.</b> Max 1 free tiket/kartu/hari (termasuk tanggal merah).</li>
                            <li>Buy 3 Get 4 Tiket studio Regular, Macro XE dengan <b>Kartu Platinum OCBC s/d 22 Februari 2023.</b> Max 1 free tiket/kartu/hari (termasuk tanggal merah).</li>
                        </ul>

                        <p class="title">TIAP SABTU (PANIN)</p>
                        <ul>
                            <li>Buy 1 Get 1 Tiket untuk studio VIP, Macro XE, Regular dengan <b>Kartu Platinum & Infinite Panin s/d 31 Desember 2022.</b> Max 1 free tiket/kartu/hari (termasuk tanggal merah).</li>
                            <li>Buy 1 Get 1 Tiket untuk studio Regular 2D/3D dengan <b>Kartu Gold Panin s/d 31 Desember 2022.</b> Max 1 free tiket/kartu/hari (termasuk tanggal merah).</li>
                        </ul>

                        <p class="title">TIAP SABTU DAN MINGGU (BRI)</p>
                        <ul>
                            <li>Disc. 50% Untuk Tiket Kedua untuk studio Regular, Deluxe, Macro XE dengan <b>Kartu Debit/Kredit BRI s/d 31 Maret 2022.</b> Max 1 free tiket/kartu/hari.</li>
                        </ul>

                        <p class="title">TIAP HARI (BRI, CIMB OCTO MOBILE, QRIS NOBU, NOBUNEO, SHOPEEPAY)</p>
                        <ul>
                           <li>Buy 1 Get 1 Free Tiket Regular, Deluxe, Macro XE dengan Kartu Debit/Kredit BRI khusus tanggal <b>26 ??? 28 di bulan Januari, Februari dan Maret 2022.</b> Max. 1 free tiket/kartu/hari.</li>
                           <li>Cashback 20% (Max. 15000) dengan <b>CIMB Octo Mobile</b> dari total transaksi, setiap hari <b>s/d 30 Juni 2022.</b> Max 1 free tiket/kartu/hari (Max 2 promo/guest/bulan).</li>
                           <li>Direct Cashback Up to 30% (Max. 6000 koin) dari total transaksi menggunakan <b>Shopeepay</b>, setiap hari <b>s/d 31 Desember 2022.</b> Max 1 promo/user/bulan.</li>
                        </ul>
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
                                    <a href="../eventdetail/gopay.php"><img src="../../asset/event/HEMAT DIMANA-MANA BAYAR NONTON PAKAI GOPAY.jpg" class="event-thumbnail" alt="..."></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="event-body">
                                    <a class="title-link" href="../eventdetail/gopay.php"><h5 class="event-title">HEMAT DENGAN GOPAY</h5></a>
                                    <p class="event-text">Makin hemat dapet diskon sampai Rp 15.000 nonton di Cin??polis cuma pakai GoPay</p>
                                    <a href="../eventdetail/gopay.php" class="btn btn-primary event-button">Detail</a>
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
                                    <a href="../eventdetail/junior.php"><img src="../../asset/event/CINEPOLIS JUNIOR.jpg" class="event-thumbnail" alt="..."></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="event-body">
                                    <a class="title-link" href="../eventdetail/junior.php"><h5 class="event-title">CIN??POLIS JUNIOR</h5></a>
                                    <p class="event-text">Ingin menikmati nonton film bareng si kecil? Yuk disimak info Cin??polis Junior dibawah ini!</p>
                                    <a href="../eventdetail/junior.php" class="btn btn-primary event-button">Detail</a>
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
                <h4 class="content">ABOUT CIN??POLIS</h4>
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
                <a class="link" href="#"><p class="list-content">CIN??POLIS VIP</p></a>
                <a class="link" href="#"><p class="list-content">CIN??POLIS MACRO XE</p></a>
                <a class="link" href="#"><p class="list-content">CIN??POLIS JOMO</p></a>
                <a class="link" href="#"><p class="list-content">CIN??POLIS LUXE</p></a>
                <a class="link" href="#"><p class="list-content">CIN??POLIS JUNIOR</p></a>
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