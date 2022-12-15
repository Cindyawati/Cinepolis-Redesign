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

        <title>News</title>
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
                        <img class="event-photo" src="../../asset/news/NONTON MPL ID SEASON 9 DI CINEPOLIS.jpg" alt="" srcset="">
                    </div>
                </div>
                <div class="col-6 cinema-description">
                    <p class="cinema-name">NONTON MPL ID SEASON 9 DI CINÉPOLIS</p>
                    <div class="desc">
                        <p>MPL Indonesia Season 9 yang resmi diselenggarakan pada tanggal 18 Februari 2022 ini kembali membuat kejutan dengan menjadi turnamen esports pertama di Indonesia yang dapat disaksikan di layar lebar. Menggandeng Cinepolis Cinemas Indonesia, sebagai bioskop global dengan jumlah layar terbesar kedua di dunia, kini MPL Indonesia bisa dinikmati di Cinepolis yang tersebar di seluruh Tanah Air. Masyarakat dapat membeli tiketnya di platform tiket.com.</p>
                        <br>
                        <p>Seperti diketahui, MPL Indonesia Season 9 saat ini masih tertutup untuk public. Sebagai alternatifnya, fans MPL Indonesia yang tak dapat hadir di venue dapat menyaksikan pertandingan yang tak kalah menarik di Cinepolis cinemas tentunya dengan protokol kesehatan yang berlaku. Demi mencegah penularan covid-19, Cinepolis telah menerapkan 71 protokol kesehatan dengan ketat bagi siapapun yang hendak menyaksikan MPL Indonesia di Cinepolis.</p>
                        <br>
                        <p>Untuk harga tiket, dibagi menjadi beberapa kategori. Jika ingin menonton satu pertandingan MPL Indonesia, dapat membeli tiket Rp.40.000. Selanjutnya, ada One Day Pass yang dibagi menjadi dua kategori tiket. Kemudian, ada pula One Day Pass yang di bundling dengan paket makanan dan minuman. Selain melalui aplikasi tiket.com, tiket dapat dibeli di website resmi Cinepolis (<a href="https://www.cinepolis.co.id">https://www.cinepolis.co.id</a>), aplikasi mobile Cinepolis, GOTIX, TIX ID, atau dengan menyambangi Cinepolis secara langsung.</p>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <!--Other Event & Promotions-->
        <div class="container event">
            <h4 class="now-showing"><b>Other News</b></h4>
        </div>

        <div id="page1" class="container">
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="img-fluid rounded-start">
                                    <a href="../newsdetail/1917.php"><img src="../../asset/news/INI FAKTA-FAKTA FILM 1917.jpg" class="news-thumbnail" alt="..."></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="news-body">
                                    <p class="news-text"><small class="text-muted">22-Jan-2020</small></p>
                                    <a class="title-link" href="../newsdetail/1917.php"><h5 class="news-title">INI FAKTA-FAKTA FILM 1917</h5></a>
                                    <a href="../newsdetail/1917.php" class="btn btn-primary news-button">Read More</a>
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
                                    <a href="../newsdetail/mission_impossible.php"><img src="../../asset/news/INI KARAKTER VILLAIN BARU DI MISSION IMPOSSIBLE.jpg" class="news-thumbnail" alt="..."></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="news-body">
                                    <p class="news-text"><small class="text-muted">21-Jan-2020</small></p>
                                    <a class="title-link" href="../newsdetail/mission_impossible.php"><h5 class="news-title">KARAKTER BARU DI MISSION IMPOSSIBLE</h5></a>
                                    <a href="../newsdetail/mission_impossible.php" class="btn btn-primary news-button">Read More</a>
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