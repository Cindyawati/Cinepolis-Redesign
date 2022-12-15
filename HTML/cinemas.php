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

        <title>Cinépolis Cinemas</title>
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
                            <a class="nav-link active" aria-current="page" href="../HTML/cinemas.php">Cinemas</a>
                            </li>
                            <li class="nav-item header-menu">
                            <a class="nav-link" href="../HTML/news_promotion.php">News & Promotion</a>
                            </li>
                        </ul>
                        </div>
                    </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!--Search-->
        <div class="container search">
            <div class="row select">
                <div id="select-city" class="col-3">
                    <label class="title-select-city" >Select City</label>
                    <br>
                    <select class="select-city-item" id="select1">
                        <option value="allcity">Select a City</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Denpasar">Denpasar</option>
                        <option value="Malang">Malang</option>
                        <option value="Medan">Medan</option>
                        <option value="Jakarta_Pusat">Jakarta Pusat</option>
                        <option value="Jakarta_Selatan">Jakarta Selatan</option>
                        <option value="Jakarta_Utara">Jakarta Utara</option>
                    </select>
                </div>
                <div style="display: none;" id="cinema-class" class="col-3">
                    <label class="title-select-city">Select Cinema Class</label>
                    <br>
                    <select class="select-class-item" id="select2">
                        <option value="allclass">Select a Class</option>
                        <option value="Regular">Regular</option>
                        <option value="VIP">VIP</option>
                        <option value="Macro">Macro XE</option>
                        <option value="Junior">Junior</option>
                        <option value="Jomo">Jomo</option>
                        <option value="Luxe">Luxe</option>
                    </select>
                </div>
            </div>
        </div>

        <!--Cinemas-->
        <div class="container event">
            <h4 class="now-showing"><b>Cinema</b></h4>
        </div>

        <div class="container">
            <div id="cinema-1" class="row cinema-list">
                <div id="JakartaPusat" class="col-4">
                    <div class="card">
                        <a href="../HTML/cinemasdetail/gajah_mada.php"><img src="../asset/cinemas/Gajah Mada.png" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <a class="title-link" href="../HTML/cinemasdetail/gajah_mada.php"><h5 class="cinema-title">Gajah Mada Plaza | Jakarta Pusat</h5></a>
                                    <span class="class-title"><img class="class-image" src="../asset/class/Regular.png">Regular</span>
                                </div>
                                <div class="col-2">
                                    <a href="../HTML/cinemasdetail/gajah_mada.php" class="btn btn-primary cinema-button">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="JakartaSelatan" class="col-4">
                    <div class="card">
                        <a href="../HTML/cinemasdetail/plaza_semanggi.php"><img src="../asset/cinemas/Plaza Semanggi.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <a class="title-link" href="../HTML/cinemasdetail/plaza_semanggi.php"><h5 class="cinema-title">Plaza Semanggi | Jakarta Selatan</h5></a>
                                    <span class="class-title"><img class="class-image" src="../asset/class/Regular.png">Regular</span>
                                </div>
                                <div class="col-2">
                                    <a href="../HTML/cinemasdetail/plaza_semanggi.php" class="btn btn-primary cinema-button">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="JakartaUtara" class="col-4">
                    <div class="card">
                        <a href="../HTML/cinemasdetail/mangga_dua.php"><img src="../asset/cinemas/Mangga Dua Square.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <a class="title-link" href="../HTML/cinemasdetail/mangga_dua.php"><h5 class="cinema-title">Mangga Dua Square | Jakarta Utara</h5></a>
                                    <span class="class-title"><img class="class-image" src="../asset/class/Regular.png">Regular</span>
                                </div>
                                <div class="col-2">
                                    <a href="../HTML/cinemasdetail/mangga_dua.php" class="btn btn-primary cinema-button">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div id="cinema-2" class="row cinema-list">
                <div id="Bogor" class="col-4">
                    <div class="card">
                        <a href="../HTML/cinemasdetail/bellanova_country.php"><img src="../asset/cinemas/Bellanova Country Mall.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <a class="title-link" href="../HTML/cinemasdetail/bellanova_country.php"><h5 class="cinema-title">Bellanova Country Mall | Bogor</h5></a>
                                    <span class="class-title"><img class="class-image" src="../asset/class/Regular.png">Regular</span>
                                </div>
                                <div class="col-2">
                                    <a href="../HTML/cinemasdetail/bellanova_country.php" class="btn btn-primary cinema-button">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Bogor2" class="col-4">
                    <div class="card">
                        <a href="../HTML/cinemasdetail/ekalokasari.php"><img src="../asset/cinemas/Lippo Plaza Ekalokasari.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <a class="title-link" href="../HTML/cinemasdetail/ekalokasari.php"><h5 class="cinema-title">Lippo Plaza Ekalokasari | Bogor</h5></a>
                                    <span>
                                        <span class="class-title"><img class="class-image" src="../asset/class/Regular.png">Regular</span>
                                        <span class="class-title"><img class="class-image" src="../asset/class/VIP.gif">VIP</span>
                                        <span class="class-title"><img class="class-image" src="../asset/class/JOMO.gif">Jomo</span>
                                    </span>
                                </div>
                                <div class="col-2">
                                    <a href="../HTML/cinemasdetail/ekalokasari.php" class="btn btn-primary cinema-button">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Medan" class="col-4">
                    <div class="card">
                        <a href="../HTML/cinemasdetail/sun_plaza.php"><img src="../asset/cinemas/Sun Plaza Medan.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <a class="title-link" href="../HTML/cinemasdetail/sun_plaza.php"><h5 class="cinema-title">Sun Plaza Medan | Medan</h5></a>
                                    <span>
                                        <span class="class-title"><img class="class-image" src="../asset/class/Regular.png">Regular</span>
                                        <span class="class-title"><img class="class-image" src="../asset/class/VIP.gif">VIP</span>
                                        <span class="class-title"><img class="class-image" src="../asset/class/MACRO XE.gif">Macro XE</span>
                                        <span class="class-title"><img class="class-image" src="../asset/class/Junior.gif">Junior</span>
                                    </span>
                                </div>
                                <div class="col-2">
                                    <a href="../HTML/cinemasdetail/sun_plaza.php" class="btn btn-primary cinema-button">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div id="cinema-3" class="row cinema-list">
                <div id="Malang" class="col-4">
                    <div class="card">
                        <a href="../HTML/cinemasdetail/malang_town.php"><img src="../asset/cinemas/Malang Town Square.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                <a class="title-link" href="../HTML/cinemasdetail/malang_town.php"><h5 class="cinema-title">Malang Town Square | Malang</h5></a>
                                    <span>
                                        <span class="class-title"><img class="class-image" src="../asset/class/Regular.png">Regular</span>
                                        <span class="class-title"><img class="class-image" src="../asset/class/LUXE.gif">LUXE</span>
                                    </span>
                                </div>
                                <div class="col-2">
                                    <a href="../HTML/cinemasdetail/malang_town.php" class="btn btn-primary cinema-button">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="BekasiTimur" class="col-4">
                    <div class="card">
                        <a href="../HTML/cinemasdetail/blu_plaza.php"><img src="../asset/cinemas/Blu Plaza.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <a class="title-link" href="../HTML/cinemasdetail/blu_plaza.php"><h5 class="cinema-title">Blu Plaza | Bekasi Timur</h5></a>
                                    <span class="class-title"><img class="class-image" src="../asset/class/Regular.png">Regular</span>
                                </div>
                                <div class="col-2">
                                    <a href="../HTML/cinemasdetail/blu_plaza.php" class="btn btn-primary cinema-button">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Bali" class="col-4">
                    <div class="card">
                        <a href="../HTML/cinemasdetail/kuta.php"><img src="../asset/cinemas/Lippo Mall Kuta.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <a class="title-link" href="../HTML/cinemasdetail/kuta.php"><h5 class="cinema-title">Lippo Mall Kuta | Kuta, Bali</h5></a>
                                    <span>
                                        <span class="class-title"><img class="class-image" src="../asset/class/Regular.png">Regular</span>
                                        <span class="class-title"><img class="class-image" src="../asset/class/VIP.gif">VIP</span>
                                    </span>
                                </div>
                                <div class="col-2">
                                    <a href="../HTML/cinemasdetail/kuta.php" class="btn btn-primary cinema-button">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row" id="cinema-not-found" style="display: none;">
                <p class="not-found">Hasil yang dicari tidak ditemukan!</p>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(function() {
                $("#cinema-class").hide();
                $("#select1").change(function() {
                    if ($(this).val() == "Bekasi") {
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").hide();
                        $("#cinema-3").show();

                        $("#Malang").hide();
                        $("#BekasiTimur").show();
                        $("#Bali").hide();

                        $("br").hide();
                    }

                    else if ($(this).val() == "Bogor"){
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").show();
                        $("#cinema-3").hide();

                        $("#Bogor").show();
                        $("#Medan").hide();
                        $("#Bogor2").show();

                        $("br").hide();
                    }

                    else if ($(this).val() == "Denpasar"){
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").hide();
                        $("#cinema-3").show();

                        $("#Malang").hide();
                        $("#BekasiTimur").hide();
                        $("#Bali").show();

                        $("br").hide();
                    }

                    else if ($(this).val() == "Malang"){
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").hide();
                        $("#cinema-3").show();

                        $("#Malang").show();
                        $("#BekasiTimur").hide();
                        $("#Bali").hide();

                        $("br").hide();
                    }

                    else if ($(this).val() == "Medan"){
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").show();
                        $("#cinema-3").hide();

                        $("#Bogor").hide();
                        $("#Medan").show();
                        $("#Bogor2").hide();

                        $("br").hide();
                    }

                    else if ($(this).val() == "Jakarta_Pusat"){
                        $("#cinema-class").show();

                        $("#cinema-1").show();
                        $("#cinema-2").hide();
                        $("#cinema-3").hide();

                        $("#JakartaPusat").show();
                        $("#JakartaSelatan").hide();
                        $("#JakartaUtara").hide();

                        $("br").hide();
                    }

                    else if ($(this).val() == "Jakarta_Selatan"){
                        $("#cinema-class").show();

                        $("#cinema-1").show();
                        $("#cinema-2").hide();
                        $("#cinema-3").hide();

                        $("#JakartaPusat").hide();
                        $("#JakartaSelatan").show();
                        $("#JakartaUtara").hide();

                        $("br").hide();
                    }

                    else if ($(this).val() == "Jakarta_Utara"){
                        $("#cinema-class").show();

                        $("#cinema-1").show();
                        $("#cinema-2").hide();
                        $("#cinema-3").hide();

                        $("#JakartaPusat").hide();
                        $("#JakartaSelatan").hide();
                        $("#JakartaUtara").show();

                        $("br").hide();
                    }

                    else if ($(this).val() == "allcity"){
                        $("#cinema-class").show();

                        $("#cinema-1").show();
                        $("#cinema-2").hide();
                        $("#cinema-3").hide();

                        $("#JakartaPusat").show();
                        $("#JakartaSelatan").show();
                        $("#JakartaUtara").show();

                        $("br").show();
                    }
                });

                $("#select2").change(function() {
                    /* Bekasi */
                    if ($(this).val() == "Regular" & $("#select1").val() == "Bekasi"){
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").hide();
                        $("#cinema-3").show();

                        $("#Malang").hide();
                        $("#BekasiTimur").show();
                        $("#Bali").hide();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    } 

                    else if ($(this).val() == "VIP" & $("#select1").val() == "Bekasi") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Macro" & $("#select1").val() == "Bekasi") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Junior" & $("#select1").val() == "Bekasi") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Jomo" & $("#select1").val() == "Bekasi") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Luxe" & $("#select1").val() == "Bekasi") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "allclass" & $("#select1").val() == "Bekasi") {
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").hide();
                        $("#cinema-3").show();

                        $("#Malang").hide();
                        $("#BekasiTimur").show();
                        $("#Bali").hide();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    }

                    /* Bogor */

                    if ($(this).val() == "Regular" & $("#select1").val() == "Bogor"){
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").show();
                        $("#cinema-3").hide();

                        $("#Bogor").show();
                        $("#Bogor2").show();
                        $("#Medan").hide();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    } 

                    else if ($(this).val() == "VIP" & $("#select1").val() == "Bogor") {
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").show();
                        $("#cinema-3").hide();

                        $("#Bogor").hide();
                        $("#Bogor2").show();
                        $("#Medan").hide();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    }

                    else if ($(this).val() == "Macro" & $("#select1").val() == "Bogor") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Junior" & $("#select1").val() == "Bogor") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Jomo" & $("#select1").val() == "Bogor") {
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").show();
                        $("#cinema-3").hide();

                        $("#Bogor").hide();
                        $("#Bogor2").show();
                        $("#Medan").hide();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    }

                    else if ($(this).val() == "Luxe" & $("#select1").val() == "Bogor") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "allclass" & $("#select1").val() == "Bogor") {
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").show();
                        $("#cinema-3").hide();

                        $("#Bogor").show();
                        $("#Bogor2").show();
                        $("#Medan").hide();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    }

                    /* Denpasar */

                    if ($(this).val() == "Regular" & $("#select1").val() == "Denpasar"){
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").hide();
                        $("#cinema-3").show();

                        $("#Malang").hide();
                        $("#BekasiTimur").hide();
                        $("#Bali").show();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    } 

                    else if ($(this).val() == "VIP" & $("#select1").val() == "Denpasar") {
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").hide();
                        $("#cinema-3").show();

                        $("#Malang").hide();
                        $("#BekasiTimur").hide();
                        $("#Bali").show();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    }

                    else if ($(this).val() == "Macro" & $("#select1").val() == "Denpasar") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Junior" & $("#select1").val() == "Denpasar") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Jomo" & $("#select1").val() == "Denpasar") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Luxe" & $("#select1").val() == "Denpasar") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "allclass" & $("#select1").val() == "Denpasar") {
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").hide();
                        $("#cinema-3").show();

                        $("#Malang").hide();
                        $("#BekasiTimur").hide();
                        $("#Bali").show();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    }

                    /* Malang */

                    if ($(this).val() == "Regular" & $("#select1").val() == "Malang"){
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").hide();
                        $("#cinema-3").show();

                        $("#Malang").show();
                        $("#BekasiTimur").hide();
                        $("#Bali").hide();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    } 

                    else if ($(this).val() == "VIP" & $("#select1").val() == "Malang") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Macro" & $("#select1").val() == "Malang") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Junior" & $("#select1").val() == "Malang") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Jomo" & $("#select1").val() == "Malang") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Luxe" & $("#select1").val() == "Malang") {
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").hide();
                        $("#cinema-3").show();

                        $("#Malang").show();
                        $("#BekasiTimur").hide();
                        $("#Bali").hide();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    }

                    else if ($(this).val() == "allclass" & $("#select1").val() == "Malang") {
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").hide();
                        $("#cinema-3").show();

                        $("#Malang").show();
                        $("#BekasiTimur").hide();
                        $("#Bali").hide();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    }

                    /* Medan */

                    if ($(this).val() == "Regular" & $("#select1").val() == "Medan"){
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").show();
                        $("#cinema-3").hide();

                        $("#Bogor").hide();
                        $("#Bogor2").hide();
                        $("#Medan").show();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    } 

                    else if ($(this).val() == "VIP" & $("#select1").val() == "Medan") {
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").show();
                        $("#cinema-3").hide();

                        $("#Bogor").hide();
                        $("#Bogor2").hide();
                        $("#Medan").show();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    }

                    else if ($(this).val() == "Macro" & $("#select1").val() == "Medan") {
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").show();
                        $("#cinema-3").hide();

                        $("#Bogor").hide();
                        $("#Bogor2").hide();
                        $("#Medan").show();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    }

                    else if ($(this).val() == "Junior" & $("#select1").val() == "Medan") {
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").show();
                        $("#cinema-3").hide();

                        $("#Bogor").hide();
                        $("#Bogor2").hide();
                        $("#Medan").show();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    }

                    else if ($(this).val() == "Jomo" & $("#select1").val() == "Medan") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Luxe" & $("#select1").val() == "Medan") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "allclass" & $("#select1").val() == "Malang") {
                        $("#cinema-class").show();

                        $("#cinema-1").hide();
                        $("#cinema-2").show();
                        $("#cinema-3").hide();

                        $("#Bogor").hide();
                        $("#Bogor2").hide();
                        $("#Medan").show();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    }

                    /* Jakarta Pusat */

                    if ($(this).val() == "Regular" & $("#select1").val() == "Jakarta_Pusat"){
                        $("#cinema-class").show();

                        $("#cinema-1").show();
                        $("#cinema-2").hide();
                        $("#cinema-3").hide();

                        $("#JakartaPusat").show();
                        $("#JakartaSelatan").hide();
                        $("#JakartaUtara").hide();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    } 

                    else if ($(this).val() == "VIP" & $("#select1").val() == "Jakarta_Pusat") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Macro" & $("#select1").val() == "Jakarta_Pusat") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Junior" & $("#select1").val() == "Jakarta_Pusat") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Jomo" & $("#select1").val() == "Jakarta_Pusat") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Luxe" & $("#select1").val() == "Jakarta_Pusat") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "allclass" & $("#select1").val() == "Jakarta_Pusat") {
                        $("#cinema-class").show();

                        $("#cinema-1").show();
                        $("#cinema-2").hide();
                        $("#cinema-3").hide();

                        $("#JakartaPusat").show();
                        $("#JakartaSelatan").hide();
                        $("#JakartaUtara").hide();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    }

                    /* Jakarta Selatan */

                    if ($(this).val() == "Regular" & $("#select1").val() == "Jakarta_Selatan"){
                        $("#cinema-class").show();

                        $("#cinema-1").show();
                        $("#cinema-2").hide();
                        $("#cinema-3").hide();

                        $("#JakartaPusat").hide();
                        $("#JakartaSelatan").show();
                        $("#JakartaUtara").hide();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    } 

                    else if ($(this).val() == "VIP" & $("#select1").val() == "Jakarta_Selatan") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Macro" & $("#select1").val() == "Jakarta_Selatan") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Junior" & $("#select1").val() == "Jakarta_Selatan") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Jomo" & $("#select1").val() == "Jakarta_Selatan") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Luxe" & $("#select1").val() == "Jakarta_Selatan") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "allclass" & $("#select1").val() == "Jakarta_Selatan") {
                        $("#cinema-class").show();

                        $("#cinema-1").show();
                        $("#cinema-2").hide();
                        $("#cinema-3").hide();

                        $("#JakartaPusat").hide();
                        $("#JakartaSelatan").show();
                        $("#JakartaUtara").hide();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    }

                    /* Jakarta Utara */

                    if ($(this).val() == "Regular" & $("#select1").val() == "Jakarta_Utara"){
                        $("#cinema-class").show();

                        $("#cinema-1").show();
                        $("#cinema-2").hide();
                        $("#cinema-3").hide();

                        $("#JakartaPusat").hide();
                        $("#JakartaSelatan").hide();
                        $("#JakartaUtara").show();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    } 

                    else if ($(this).val() == "VIP" & $("#select1").val() == "Jakarta_Utara") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Macro" & $("#select1").val() == "Jakarta_Utara") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Junior" & $("#select1").val() == "Jakarta_Utara") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Jomo" & $("#select1").val() == "Jakarta_Utara") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "Luxe" & $("#select1").val() == "Jakarta_Utara") {
                        $(".cinema-list").hide();
                        $("#cinema-not-found").show();
                    }

                    else if ($(this).val() == "allclass" & $("#select1").val() == "Jakarta_Utara") {
                        $("#cinema-class").show();

                        $("#cinema-1").show();
                        $("#cinema-2").hide();
                        $("#cinema-3").hide();

                        $("#JakartaPusat").hide();
                        $("#JakartaSelatan").hide();
                        $("#JakartaUtara").show();

                        $("br").hide();
                        $("#cinema-not-found").hide();
                    }

                    /*Special Case*/

                    if ($(this).val() == "allclass" & $("#select1").val() == "allcity") {
                        $("#cinema-class").show();

                        $("#JakartaPusat").show();
                        $("#JakartaSelatan").show();
                        $("#JakartaUtara").show();
                        $("#Bogor").show();
                        $("#Bogor2").show();
                        $("#Medan").show();
                        $("#Malang").show();
                        $("#BekasiTimur").show();
                        $("#Bali").show();

                        $("#cinema-1").show();
                        $("#cinema-2").show();
                        $("#cinema-3").show();

                        $("br").show();
                        $("#cinema-not-found").hide();
                    }
                });
            });
        </script>
    </body>
</html>