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

        <title>Select Seat</title>
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

        <!--Cinemas-->
        <div class="container event">
            <div class="row">
                <p>
                    <a style="color: #08285B; text-decoration: none;" href="../HTML/schedule.php">Select Show</a>
                    > 
                Select Seat</p>
            </div>
        </div>

        <div class="container schedule-section">
            <div class="row">
                <div class="col-6 section-screen">
                    <div class="row screen"></div>
                    <p>Screen</p>
                    <div class="row group-seat">
                        <div class="groupb">
                            <!--I-->
                            <div id="rowI" class="row"></div>
                            <!--H-->
                            <div id="rowH" class="row"></div>
                            <!--G-->
                            <div id="rowG" class="row"></div>
                            <!--F-->
                            <div id="rowF" class="row"></div>
                            <!--E-->
                            <div id="rowE" class="row"></div>
                            <!--D-->
                            <div id="rowD" class="row"></div>
                        </div>
                        <div class="groupa">
                            <!--C-->
                            <div id="rowC" class="row"></div>
                            <!--B-->
                            <div id="rowB" class="row"></div>
                            <!--A-->
                            <div id="rowA" class="row"></div>
                        </div>
                    </div>
                    <div class="seat-category">
                        <div class="row seat-category-container">
                            <div class="col">
                                <span class="seat-category-title">
                                    <div class="seat-not-avail"><p>Not Available</p></div>
                                </span>
                            </div>
                            <div class="col">
                                <span class="seat-category-title">
                                    <div class="seat-selected"><p>Selected</p></div>
                                </span>
                            </div>
                            <div class="col">
                                <span class="seat-category-title">
                                    <div class="seat-avail"><p>Available</p></div>
                                </span>
                            </div>
                            <div class="col">
                                <span class="seat-category-title">
                                    <div class="seat-taken"><p>Taken</p></div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row section-movie">
                        <div class="youarewatching">
                            <div class="card border mb-3">
                                <div class="card-header youarewatching-titlecontainer">
                                    <p class="youarewatching-title">You are Watching</p>
                                </div>
                                <div class="youarewatching-detail">
                                    <div class="row">
                                        <div class="col-3">
                                            <p>Movie Title</p>
                                            <p>Cinema</p>
                                            <p>Showtime</p>
                                            <p>Format</p>
                                            <p>Cinema No</p>
                                        </div>
                                        <div class="col-9 detail-black">
                                            <p>: <?php echo str_replace ("-", " ", $_GET['name']);?> (13+)</p>
                                            <p>: <?php echo str_replace ("-", " ", $_GET['cinema']);?></p>
                                            <p>: THURSDAY, March 17, 2022 - <?php echo $_GET['time'];?></p>
                                            <p>: REGULAR | 2D</p>
                                            <p>: CINEMA 01</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row section-movie">
                        <div class="youarewatching">
                            <div class="card border mb-3">
                                <div class="card-header youarewatching-titlecontainer">
                                    <p class="youarewatching-title">Your Ticket Order</p>
                                </div>
                                <div class="youarewatching-detail">
                                    <div class="row">
                                        <div class="col-3">
                                            <p>Seat(s) Selected</p>
                                            <p>Total Seat(s)</p>
                                            <p>Price Per Ticket</p>
                                            <p>Ticket Total</p>
                                            <p>Booking Fee</p>
                                            <p>Total Price</p>
                                        </div>
                                        <div class="col-9 detail-black">
                                            <p id="fix-seat">: </p>
                                            <p id="total-seat">: 0</p>
                                            <p>: RP <?php echo $_GET['price'];?></p>
                                            <p id="ticket-total">: RP 0</p>
                                            <p>: RP 3,000</p>
                                            <p>: RP 43,000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4 class="note-title"><b>Note</b></h4>
                        <div class="note">
                            <p>* Kursi yang dipilih akan tetap diblokir selama 15 menit setiap transaksi.</p>
                            <p>* Tiket tidak dapat dikembalikan.</p>
                            <p>* Anak usia < 12 tahun diperbolehkan menonton.</p>
                            <p>* Untuk PPKM level 1 & 2 mengikuti kebijakan di setiap kota.</p>
                        </div>
                    </div>
                    <div id="orderbuttonnext" class="row container-button-order" style="opacity: 0">
                    <!-- <a href="../HTML/payment_page.php" class="btn btn-primary order-button">Next</a> -->

                    <a class="btn btn-primary order-button" href= <?php echo "../HTML/payment_page.php?name=" . $_GET['name'] . "&cinema=" . $_GET['cinema'] . "&time=" . $_GET['time'] . "&price=" . $_GET['price']?>>Next</a>
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
            var count = 1;

            var rowA = ['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'A11', 'A12', 'A13', 'A14'];
            for (var i = 0; i < rowA.length; i++) {
                var buttons = $('<div class="takenseat-button" id=#' + rowA[i] + '>' + rowA[i] + '</div>')
                buttons.appendTo('#rowA');
            };

            var rowB = ['B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'B8', 'B9', 'B10', 'B11', 'B12', 'B13', 'B14'];
            for (var i = 0; i < rowB.length; i++) {
                var buttons = $('<button class="seat-button" id=#' + rowB[i] + ' type="button">' + rowB[i] + '</button>').click(function(){
                    if (count == 0) {
                        $(this).removeClass("selected-seat-button").addClass('seat-button');
                        count = 1;
                        jQuery('#orderbuttonnext').css('opacity', '0');
                        $("#fix-seat").text(": ");
                        $("#total-seat").text(": 0");
                        $("#ticket-total").text(": RP 0");
                        $(".seat-button").removeAttr( 'style' );
                    }
                    else {
                        $(this).removeClass("seat-button").addClass('selected-seat-button');
                        count = 0;
                        jQuery('#orderbuttonnext').removeAttr( 'style' );
                        $("#fix-seat").text(": " + $(".selected-seat-button").text());
                        $("#total-seat").text(": 1");
                        $("#ticket-total").text(": RP 40,000");
                        $(".seat-button").css("pointer-events", "none");
                        localStorage.setItem('seat', $(".selected-seat-button").text());
                    }
                });
                buttons.appendTo('#rowB');
            };

            var rowC = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', 'C10', 'C11', 'C12', 'C13', 'C14'];
            for (var i = 0; i < rowC.length; i++) {
                var buttons = $('<button class="seat-button" id=#' + rowC[i] + ' type="button">' + rowC[i] + '</button>').click(function(){
                    if (count == 0) {
                        $(this).removeClass("selected-seat-button").addClass('seat-button');
                        count = 1;
                        jQuery('#orderbuttonnext').css('opacity', '0');
                        $("#fix-seat").text(": ");
                        $("#total-seat").text(": 0");
                        $("#ticket-total").text(": RP 0");
                        $(".seat-button").removeAttr( 'style' );
                    }
                    else {
                        $(this).removeClass("seat-button").addClass('selected-seat-button');
                        count = 0;
                        jQuery('#orderbuttonnext').removeAttr( 'style' );
                        $("#fix-seat").text(": " + $(".selected-seat-button").text());
                        $("#total-seat").text(": 1");
                        $("#ticket-total").text(": RP 40,000");
                        $(".seat-button").css("pointer-events", "none");
                        localStorage.setItem('seat', $(".selected-seat-button").text());
                    }
                });
                buttons.appendTo('#rowC');
            };

            var rowD = ['D1', 'D2', 'D3', 'D4', 'D5', 'D6', 'D7', 'D8', 'D9', 'D10', 'D11', 'D12'];
            for (var i = 0; i < rowD.length; i++) {
                var buttons = $('<button class="seat-button" id=#' + rowD[i] + ' type="button">' + rowD[i] + '</button>').click(function(){
                    if (count == 0) {
                        $(this).removeClass("selected-seat-button").addClass('seat-button');
                        count = 1;
                        jQuery('#orderbuttonnext').css('opacity', '0');
                        $("#fix-seat").text(": ");
                        $("#total-seat").text(": 0");
                        $("#ticket-total").text(": RP 0");
                        $(".seat-button").removeAttr( 'style' );
                    }
                    else {
                        $(this).removeClass("seat-button").addClass('selected-seat-button');
                        count = 0;
                        jQuery('#orderbuttonnext').removeAttr( 'style' );
                        $("#fix-seat").text(": " + $(".selected-seat-button").text());
                        $("#total-seat").text(": 1");
                        $("#ticket-total").text(": RP 40,000");
                        $(".seat-button").css("pointer-events", "none");
                        localStorage.setItem('seat', $(".selected-seat-button").text());
                    }
                });
                buttons.appendTo('#rowD');
            };

            var rowE = ['E1', 'E2', 'E3', 'E4', 'E5', 'E6', 'E7', 'E8', 'E9', 'E10', 'E11', 'E12'];
            for (var i = 0; i < rowE.length; i++) {
                var buttons = $('<button class="seat-button" id=#' + rowE[i] + ' type="button">' + rowE[i] + '</button>').click(function(){
                    if (count == 0) {
                        $(this).removeClass("selected-seat-button").addClass('seat-button');
                        count = 1;
                        jQuery('#orderbuttonnext').css('opacity', '0');
                        $("#fix-seat").text(": ");
                        $("#total-seat").text(": 0");
                        $("#ticket-total").text(": RP 0");
                        $(".seat-button").removeAttr( 'style' );
                    }
                    else {
                        $(this).removeClass("seat-button").addClass('selected-seat-button');
                        count = 0;
                        jQuery('#orderbuttonnext').removeAttr( 'style' );
                        $("#fix-seat").text(": " + $(".selected-seat-button").text());
                        $("#total-seat").text(": 1");
                        $("#ticket-total").text(": RP 40,000");
                        $(".seat-button").css("pointer-events", "none");
                        localStorage.setItem('seat', $(".selected-seat-button").text());
                    }
                });
                buttons.appendTo('#rowE');
            };

            var rowF = ['F1', 'F2', 'F3', 'F4', 'F5', 'F6', 'F7', 'F8', 'F9', 'F10', 'F11', 'F12'];
            for (var i = 0; i < rowF.length; i++) {
                var buttons = $('<button class="seat-button" id=#' + rowF[i] + ' type="button">' + rowF[i] + '</button>').click(function(){
                    if (count == 0) {
                        $(this).removeClass("selected-seat-button").addClass('seat-button');
                        count = 1;
                        jQuery('#orderbuttonnext').css('opacity', '0');
                        $("#fix-seat").text(": ");
                        $("#total-seat").text(": 0");
                        $("#ticket-total").text(": RP 0");
                        $(".seat-button").removeAttr( 'style' );
                    }
                    else {
                        $(this).removeClass("seat-button").addClass('selected-seat-button');
                        count = 0;
                        jQuery('#orderbuttonnext').removeAttr( 'style' );
                        $("#fix-seat").text(": " + $(".selected-seat-button").text());
                        $("#total-seat").text(": 1");
                        $("#ticket-total").text(": RP 40,000");
                        $(".seat-button").css("pointer-events", "none");
                        localStorage.setItem('seat', $(".selected-seat-button").text());
                    }
                });
                buttons.appendTo('#rowF');
            };

            var rowG = ['G1', 'G2', 'G3', 'G4', 'G5', 'G6', 'G7', 'G8', 'G9', 'G10', 'G11', 'G12'];
            for (var i = 0; i < rowG.length; i++) {
                var buttons = $('<button class="seat-button" id=#' + rowG[i] + ' type="button">' + rowG[i] + '</button>').click(function(){
                    if (count == 0) {
                        $(this).removeClass("selected-seat-button").addClass('seat-button');
                        count = 1;
                        jQuery('#orderbuttonnext').css('opacity', '0');
                        $("#fix-seat").text(": ");
                        $("#total-seat").text(": 0");
                        $("#ticket-total").text(": RP 0");
                        $(".seat-button").removeAttr( 'style' );
                    }
                    else {
                        $(this).removeClass("seat-button").addClass('selected-seat-button');
                        count = 0;
                        jQuery('#orderbuttonnext').removeAttr( 'style' );
                        $("#fix-seat").text(": " + $(".selected-seat-button").text());
                        $("#total-seat").text(": 1");
                        $("#ticket-total").text(": RP 40,000");
                        $(".seat-button").css("pointer-events", "none");
                        localStorage.setItem('seat', $(".selected-seat-button").text());
                    }
                });
                buttons.appendTo('#rowG');
            };

            var rowH = ['H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7', 'H8', 'H9', 'H10', 'H11', 'H12'];
            for (var i = 0; i < rowH.length; i++) {
                var buttons = $('<div class="notavailseat-button" id=#' + rowH[i] + '>' + rowH[i] + '</div>')
                buttons.appendTo('#rowH');
            };

            var rowI = ['I1', 'I2', 'I3', 'I4', 'I5', 'I6', 'I7', 'I8', 'I9', 'I10', 'I11', 'I12'];
            for (var i = 0; i < rowI.length; i++) {
                var buttons = $('<div class="notavailseat-button" id=#' + rowI[i] + '>' + rowI[i] + '</div>')
                buttons.appendTo('#rowI');
            };
        </script>
    </body>
</html>