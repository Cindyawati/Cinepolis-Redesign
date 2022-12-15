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

        <title>Order Confirmation</title>
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
                            <a class="nav-link active" aria-current="page" href="../HTML/schedule.php">Schedule</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link"  href="../HTML/movie.php">Movies</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="../HTML/cinemas.php">Cinemas</a>
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

        <div class="container event">
            <div class="row">
                <p>
                    <a style="color: #08285B; text-decoration: none;" href="../HTML/schedule.php">Select Show</a>
                    > 
                    <a style="color: #08285B; text-decoration: none;" href="../HTML/select_seat.php">Select Seat</a> 
                    > 
                    <a style="color: #08285B; text-decoration: none;" href="../HTML/payment_page.php">Payment Page</a>
                    > 
                Order Confirmation</p>
            </div>
        </div>

        <div class="order-complete d-flex justify-content-center">
            <img class="checklist-rounded" src="../asset/checklist-rounded.png" alt="">
            <div class="confirm-text">
                <h4 class="confirm-complete"><b>Order Success</b></h4>
                <p class="please-check">Please check your email!</p>
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
    </body>
</html>