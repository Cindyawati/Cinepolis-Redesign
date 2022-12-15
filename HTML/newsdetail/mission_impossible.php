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
                        <img class="event-photo" src="../../asset/news/INI KARAKTER VILLAIN BARU DI MISSION IMPOSSIBLE.jpg" alt="" srcset="">
                    </div>
                </div>
                <div class="col-6 cinema-description">
                    <p class="cinema-name">INI KARAKTER VILLAIN BARU DI MISSION IMPOSSIBLE</p>
                    <div class="desc">
                        <i><p>Mission Accepted!</p></i>
                        <br>
                        <p>Nicholas Hoult telah resmi bergabung bersama Tom Cruise dan deretan pemeran lainnya di dua film Mission Impossible selanjutnya.</p>
                        <br>
                        <p>Melansir dari Variety, Nicholas tampaknya bakal memerankan karakter jahatnya nih dan akan berhadapan dengan Ethan Hunt dan kawan-kawan.</p>
                        <br>
                        <p>Nicholas Hoult jadi aktor keempat yang resmi bergabung ke dalam dua film Mission Impossible 7 dan 8. Sebelumnya dikabarkan ada Pom Klementieff, Hayley Atwell, Shea Whigham, dan Rebecca Ferguson yang terlebih dahulu masuk jajaran cast Mission Impossible 7.</p>
                        <br>
                        <p>Sebelumnya, aktor berusia 30 tahun itu sukses memerankan karakter Beast di empat filmnya X-Men, dan bermain di film Mad Max: Fury Road, Tolkien, dan Rebel in the Rye.</p>
                        <br>
                        <p>Christopher McQuarrie masih menduduki kursi sutradara setelah sebelumnya sukses dengan film Mission Impossible: Fallout yang berhasil meraih rating bagus dari kritikus di situs Rotten Tomatoes dengan Tomatometer 97% dan rating 87% berhasil diraih dari segi audience score. Mantap!</p>
                        <br>
                        <p>Para penggemar franchise Mission Impossible masih harus bersabar menunggu sebab Mission Impossible 7 dijadwalkan tayang pada Juli 2021 dan diikuti dengan Mission Impossible 8 yang akan tayang pada Agustus 2022. Nah, jangan ketinggalan update film-film terbaru lainnya di Cinépolis ya.</p>
                        <br>
                        <p>Sumber gambar: <a href="movies.mxdwn.com">movies.mxdwn.com</a></p>
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
                                    <a href="../newsdetail/avatar.php"><img src="../../asset/news/YANG MENANTI DI SEKUELNYA AVATAR.jpg" class="news-thumbnail" alt="..."></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="news-body">
                                    <p class="news-text"><small class="text-muted">14-Jan-2020</small></p>
                                    <a class="title-link" href="../newsdetail/avatar.php"><h5 class="news-title">YANG MENANTI DI SEKUELNYA AVATAR</h5></a>
                                    <a href="../newsdetail/avatar.php" class="btn btn-primary news-button">Read More</a>
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