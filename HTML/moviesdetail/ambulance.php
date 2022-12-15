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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Ambulance</title>
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
                            <a class="nav-link active" aria-current="page" href="../movie.php">Movies</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="../cinemas.php">Cinemas</a>
                            </li>
                            <li class="nav-item header-menu">
                            <a class="nav-link" href="../news_promotion.php">News & Promotion</a>
                            </li>
                        </ul>
                        </div>
                    </ul>
                    </div>
                </div>
            </nav>
        </header>

        <?php
            $query = "SELECT * FROM movie ORDER BY id ASC LIMIT 1";
            $result = mysqli_query($koneksi, $query);

            if(!$result) {
                die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
            }
            $no = 1;

            while ($row = mysqli_fetch_assoc($result)){
        ?>

        <div class="container jumbotron-detail ambulance p-5 mb-2 rounded-3 d-flex justify-content-center">
        <div class="container-fluid">
            <h1 class="banner-title"><?php echo $row['title']; ?></h1>
            <div class="movie-mini-desc">
                <!--Rating-->
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="fa fa-star star"></span>
                <span class="fa fa-star"></span>
                <p><?php echo $row['age_rating']; ?> · <?php echo $row['duration']; ?> · <?php echo $row['genre']; ?> · <?php echo $row['year']; ?></p>
                <p class="starring">Starring</p>
                <?php echo $row['actor']; ?>
            </div>
        </div>
        </div>

        <br>

        <div class="container movies-detail">
            <div class="row">
                <div class="col-3 movie-detail-poster">        
                    <img class="poster-detail" src="../../poster/temp/<?php echo $row['poster']; ?>"alt="Card image cap">
                </div>
                <div class="col-6 movie-description">
                    <h4 class="sypnosis-title"><b>Sypnosis</b></h4>
                    <p><span class="sypnosis-section">Bahasa Indonesia</span> - <?php echo $row['sinopsis_indonesia']; ?></p>
                    <p><span class="sypnosis-section">English</span> - <?php echo $row['sinopsis_inggris']; ?></p>
                    <a href="../schedule_bymovie.php?name=AMBULANCE" class="btn btn-primary to-schedule">
                        Buy Ticket
                    </a>
                </div>
                <div class="col-3 trailer">
                    <h4 class="trailer-title"><b>Trailer</b></h4>
                    <iframe class="div-round" src="https://www.youtube.com/embed/7NU-STboFeI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <?php
            $no++;
        }
        ?>
        <br>

        <div class="moviesdetail-now-showing">
            <div class="container title-indicator">
                <div class="row">
                <div class="col">
                    <h4 class="now-showing"><b>Now Showing</b></h4>
                </div>
                <div class="col">
                    <!--Controls-->
                    <svg class="product-control" data-bs-target="#nowshowing" data-bs-slide="next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><defs><style>.cls-1{fill:#08285B;}</style></defs><title>Chevron Right</title><g id="Layer_4" data-name="Layer 4"><path class="cls-1" d="M11.61,24.08a1,1,0,0,0,1.41,0l7.37-7.37a1,1,0,0,0,0-1.42L13,7.92a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42L18.27,16l-6.66,6.66A1,1,0,0,0,11.61,24.08Z"/></g></svg>
                    <svg class="product-control" data-bs-target="#nowshowing" data-bs-slide="prev" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><defs><style>.cls-1{fill:#08285B;}</style></defs><title>Chevron Left</title><g id="Layer_4" data-name="Layer 4"><path class="cls-1" d="M20.39,7.92a1,1,0,0,0-1.41,0l-7.37,7.37a1,1,0,0,0,0,1.42L19,24.08a1,1,0,0,0,1.41-1.42L13.73,16l6.66-6.66A1,1,0,0,0,20.39,7.92Z"/></g></svg>
                    <!--/.Controls-->
                </div>
                </div>
            </div>

            <div class="container">
                <!--Carousel-->
                <div id="nowshowing" class="carousel slide carousel-multi-item" data-interval="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#nowshowing" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#nowshowing" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>

                    <!--Logic-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                            <div class="row">
                            <?php
                                $query = "SELECT * FROM movie ORDER BY id ASC LIMIT 6";
                                $result = mysqli_query($koneksi, $query);

                                if(!$result) {
                                    die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                                }
                                $no = 1;

                                while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                
                            <div class="col-md-2">
                                <div class="card mb-2">
                                <a href=../<?php echo $row['link'];?>><img class="card-img-top" src="../../poster/temp/<?php echo $row['poster']; ?>"alt="Card image cap"></a>
                                <div class="card-body">
                                <a class="link-movie-title" href=../<?php echo $row['link'];?>><h4 class="card-title"><?php echo $row['title']; ?></h4></a>
                                <h4 class="card-age"><?php echo $row['age_rating']; ?></h4>
                                </div>
                                </div>
                            </div>

                            <?php
                                $no++;
                            }
                            ?>
                            </div>
                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">
                            <div class="row">
                            <?php
                                $query = "SELECT * FROM movie ORDER BY id ASC LIMIT 6 OFFSET 6";
                                
                                $result = mysqli_query($koneksi, $query);

                                if(!$result) {
                                    die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                                }
                                $no = 1;

                                while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                
                            <div class="col-md-2">
                                <div class="card mb-2">
                                <a href=../<?php echo $row['link'];?>><img class="card-img-top" src="../../poster/temp/<?php echo $row['poster']; ?>"alt="Card image cap"></a>
                                <div class="card-body">
                                <a class="link-movie-title" href=../<?php echo $row['link'];?>><h4 class="card-title"><?php echo $row['title']; ?></h4></a>
                                    <h4 class="card-age"><?php echo $row['age_rating']; ?></h4>
                                </div>
                                </div>
                            </div>

                            <?php
                                $no++;
                            }
                            ?>
                            </div>
                        </div>
                        <!--/.Second slide-->
                    </div>
                </div>
            </div>
        </div>

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