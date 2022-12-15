<?php include('../koneksi.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!--CSS-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <script src="../script.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

        <title>Cinépolis News & Promotions</title>
    </head>

    <body class="body">
        <!--Header-->
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <!--Logo-->
                    <a class="navbar-brand navbar-logo-container" href="../HTML/home.php">
                    <img class="navbar-logo" src="../asset/cinepolis-logo.jpg" alt="Doctor">
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
                            <a class="nav-link" href="../HTML/home.php">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="../HTML/schedule.php">Schedule</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link"  href="../HTML/movie.php">Movies</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="../HTML/cinemas.php">Cinemas</a>
                            </li>
                            <li class="nav-item header-menu">
                            <a class="nav-link active" aria-current="page" href="../HTML/news_promotion.php">News & Promotion</a>
                            </li>
                        </ul>
                        </div>
                    </ul>
                    </div>
                </div>
                </nav>
        </header>

        <!--Event & Promotions-->
        <div class="container event">
            <h4 class="now-showing"><b>Event & Promotions</b></h4>
        </div>

        <div id="page1" class="container">
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="img-fluid rounded-start">
                                    <a href="../HTML/eventdetail/popcorn_smax.php"><img src="../asset/event/POPCORN SMAX RING.jpg" class="event-thumbnail" alt="..."></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="event-body">
                                    <a class="title-link" href="../HTML/eventdetail/popcorn_smax.php"><h5 class="event-title">POPCORN SMAX RING</h5></a>
                                    <p class="event-text">Popcorn pertama di Indonesia yang menggunakan REAL Topping.</p>
                                    <a href="../HTML/eventdetail/popcorn_smax.php" class="btn btn-primary event-button">Detail</a>
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
                                    <a href="../HTML/eventdetail/gopay.php"><img src="../asset/event/HEMAT DIMANA-MANA BAYAR NONTON PAKAI GOPAY.jpg" class="event-thumbnail" alt="..."></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="event-body">
                                    <a class="title-link" href="../HTML/eventdetail/gopay.php"><h5 class="event-title">HEMAT DENGAN GOPAY</h5></a>
                                    <p class="event-text">Makin hemat dapet diskon sampai Rp 15.000 nonton di Cinépolis cuma pakai GoPay</p>
                                    <a href="../HTML/eventdetail/gopay.php" class="btn btn-primary event-button">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="page2" style="display:none;" class="container">
        <div class="row ">
            <div class="col">
                <div class="card mb-4">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="img-fluid rounded-start">
                                <a href="../HTML/eventdetail/promobank.php"><img src="../asset/event/PROMO - PROMO BANK BUAT KAMU!.jpg" class="event-thumbnail" alt="..."></a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="event-body">
                                <a class="title-link" href="../HTML/eventdetail/promobank.php"><h5 class="event-title">PROMO BANK BUAT KAMU!</h5></a>
                                <p class="event-text">Cek promo bank kita yuk, biar nonton kamu makin nyaman dan aman!</p>
                                <a href="../HTML/eventdetail/promobank.php" class="btn btn-primary event-button">Detail</a>
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
                                <a href="../HTML/eventdetail/junior.php"><img src="../asset/event/CINEPOLIS JUNIOR.jpg" class="event-thumbnail" alt="..."></a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="event-body">
                                <a class="title-link" href="../HTML/eventdetail/junior.php"><h5 class="event-title">CINÉPOLIS JUNIOR</h5></a>
                                <p class="event-text">Ingin menikmati nonton film bareng si kecil? Yuk disimak info Cinépolis Junior dibawah ini!</p>
                                <a href="../HTML/eventdetail/junior.php" class="btn btn-primary event-button">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <!--Pagination-->
        <div class="container pagination-container">
            <nav aria-label="">
                <ul class="pagination justify-content-end">
                    <li id="prev" class="page-item disabled"><a class="page-link"><</a></li>
                    <li id="1" class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li id="2" class="page-item"><a class="page-link" href="#">2</a></li>
                    <li id="next" class="page-item disabled"><a class="page-link" href="#">></a></li>
                </ul>
            </nav>
        </div>
        
        <!--News-->
        <div class="container category-upcoming">
            <h4 class="now-showing"><b>News</b></h4>
        </div>

        <div class="container">
            <!--1st Row -->
            <div class="row ">
                <div class="col">
                    <div class="card mb-4">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="img-fluid rounded-start">
                                    <a href="../HTML/newsdetail/mpl.php"><img src="../asset/news/NONTON MPL ID SEASON 9 DI CINEPOLIS.jpg" class="news-thumbnail" alt="..."></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="news-body">
                                    <p class="news-text"><small class="text-muted">21-Feb-2022</small></p>
                                    <a class="title-link" href="../HTML/newsdetail/mpl.php"><h5 class="news-title">Nonton MPL ID Season 9 di Cinépolis</h5></a>
                                    <a href="../HTML/newsdetail/mpl.php" class="btn btn-primary news-button">Read More</a>
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
                                    <a href="../HTML/newsdetail/1917.php"><img src="../asset/news/INI FAKTA-FAKTA FILM 1917.jpg" class="news-thumbnail" alt="..."></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="news-body">
                                    <p class="news-text"><small class="text-muted">22-Jan-2020</small></p>
                                    <a class="title-link" href="../HTML/newsdetail/1917.php"><h5 class="news-title">INI FAKTA-FAKTA FILM 1917</h5></a>
                                    <a href="../HTML/newsdetail/1917.php" class="btn btn-primary news-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>

            <!--2nd Row -->
            <div class="row ">
                <div class="col">
                    <div class="card mb-4">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="img-fluid rounded-start">
                                    <a href="../HTML/newsdetail/mission_impossible.php"><img src="../asset/news/INI KARAKTER VILLAIN BARU DI MISSION IMPOSSIBLE.jpg" class="news-thumbnail" alt="..."></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="news-body">
                                    <p class="news-text"><small class="text-muted">21-Jan-2020</small></p>
                                    <a class="title-link" href="../HTML/newsdetail/mission_impossible.php"><h5 class="news-title">KARAKTER BARU DI MISSION IMPOSSIBLE</h5></a>
                                    <a href="../HTML/newsdetail/mission_impossible.php" class="btn btn-primary news-button">Read More</a>
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
                                    <a href="../HTML/newsdetail/avatar.php"><img src="../asset/news/YANG MENANTI DI SEKUELNYA AVATAR.jpg" class="news-thumbnail" alt="..."></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="news-body">
                                    <p class="news-text"><small class="text-muted">14-Jan-2020</small></p>
                                    <a class="title-link" href="../HTML/newsdetail/avatar.php"><h5 class="news-title">YANG MENANTI DI SEKUELNYA AVATAR</h5></a>
                                    <a href="../HTML/newsdetail/avatar.php" class="btn btn-primary news-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Pagination-->
        <div class="container pagination-container">
            <nav aria-label="">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled"><a class="page-link"><</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">></a></li>
                </ul>
            </nav>
        </div>

        <!--Social Media-->
        <div class="container event">
            <h4 class="now-showing"><b>Follow Us</b></h4>
        </div>

        <div class="container sosmed">
            <div class="row">
                <div class="col">
                    <div class="card border mb-3">
                        <div class="card-header" style=" text-align: center; background-color: #009BCB; color: white; font-weight:bolder"> <span><img src="../asset/twt.png" style="height:20px; margin-right: 10px; margin-bottom: 2px;" alt=""></span> Twitter</div>
                        <div class="twitter-body">
                            <a class="twitter-timeline" data-height="450" data-theme="light" href="https://twitter.com/cinepolisID?ref_src=twsrc%5Etfw">Tweets by cinepolisID</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="card border mb-3">
                        <div class="card-header" style=" text-align: center; background-color: #3B5B98; color: white; font-weight:bolder"> <span><img src="../asset/fb.png" style="height:20px; margin-right: 10px; margin-bottom: 2px;" alt=""></span> Facebook</div>
                        <div class="d-flex justify-content-center fb-page" data-href="https://web.facebook.com/cinepolisID/" data-tabs="timeline" data-width="600" data-height="457" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://web.facebook.com/cinepolisID/" class="fb-xfbml-parse-ignore"><a href="https://web.facebook.com/cinepolisID/">Cinépolis Indonesia</a></blockquote></div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="container subscribe">
            <div class="row">
                <h4 class="d-flex justify-content-center subscribe-title"><b>SUBSCRIBE TO OUR NEWSLETTER</b></h4>
            </div>
            <div class="row">
                <h4 class="d-flex justify-content-center subscribe-detail">and get the latest update on movies & promotions at Cinépolis</h4>
            </div>
            <div class="row d-flex justify-content-center form-email">
                <input class="input-email" type="text" id="email" name="email" placeholder="Enter your email here">
            </div>
            <div class="row form-email">
                <span class="d-flex justify-content-center ">
                    <input style="margin-top: 2px;" type="checkbox" value="agree">
                    <label class="label-agree" for="agree">I have read and agree to the <a style="color:#08285B;" class="link" href="#"> <u>Terms & Conditions.</u></a></label>
                </span>
                
            </div>
            <div class="row d-flex justify-content-center form-email">
                <a href="##" class="btn btn-primary email-button">Subscribe</a>
            </div>
        </div>

        <div class="white-space-movie"></div>

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
                    <a href="https://apps.apple.com/in/app/cinemaxx/id986733797"><img class="store-logo" src="../asset/Apps Store.jpg"></a>
                    </div>
                    <div class="col-4">
                    <a href="https://play.google.com/store/apps/details?id=com.cinemaxx.activity"><img class="store-logo" src="../asset/Google play.jpg"></a>
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

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0" nonce="qtEt4sVG"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>

            function replaceClass(id, oldClass, newClass) {
                var elem = $(`#${id}`);
                if (elem.hasClass(oldClass)) {
                    elem.removeClass(oldClass);
                }
                elem.addClass(newClass);
            }
    
            $(document).ready(function(){

                $("#1").click(function(){
                    $("#page1").show();
                    $("#page2").hide();
                    $("#page3").hide();
                });

                $("#1").click(function() {
                    replaceClass("1", "page-item", "page-item active");
                    replaceClass("2", "page-item active", "page-item");
                    replaceClass("3", "page-item active", "page-item");
                });

                $("#2").click(function(){
                    $("#page1").hide();
                    $("#page2").show();
                    $("#page3").hide();
                });

                $("#2").click(function() {
                    replaceClass("1", "page-item active", "page-item");
                    replaceClass("2", "page-item", "page-item active");
                    replaceClass("3", "page-item active", "page-item");
                });

                $("#3").click(function(){
                    $("#page1").hide();
                    $("#page2").hide();
                    $("#page3").show();
                });

                $("#3").click(function() {
                    replaceClass("1", "page-item active", "page-item");
                    replaceClass("2", "page-item active", "page-item");
                    replaceClass("3", "page-item", "page-item active");
                });
            });
        </script>
    </body>
</html>