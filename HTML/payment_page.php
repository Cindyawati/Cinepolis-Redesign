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

        <title>Payment Page</title>
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
                Payment Page</p>
            </div>
        </div>

        <div class="container schedule-section">
            <div class="row">
                <div class="col-6">
                    <div>
                        <h4 class="timer"><b>Please complete your booking in <span class="countdown">10:00</span> Minutes</b></h4>
                    </div>
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
                                            <p id="selected-seat">: </p>
                                            <p>: 1</p>
                                            <p>: RP <?php echo $_GET['price'];?></p></p>
                                            <p>: RP <?php echo $_GET['price'];?></p></p>
                                            <p>: RP 3,000</p>
                                            <p>: RP 43,000</p>
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
                                    <p class="youarewatching-title">Your Order Summary</p>
                                </div>
                                <div class="youarewatching-detail">
                                    <div class="row">
                                        <div class="col-3">
                                            <p>Ticket Amount</p>
                                            <p>Booking Fee</p>
                                            <br>
                                            <p><b style="font-size: 12px;">Total Amount</b></p>
                                        </div>
                                        <div class="col-9 detail-black">
                                            <p>: RP 40,000</p>
                                            <p>: RP 3,000</p>
                                            <br>
                                            <p><b style="font-size: 12px;">: RP 43,000</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4 class="note-title"><b>Note</b></h4>
                        <div class="note">
                            <p>* Untuk memasuki cinema pastikan kamu sudah mematuhi protokol kesehatan.</p>
                            <p>* Tiket yang sudah dibeli tidak dapat diubah atau dibatalkan.</p>
                            <p>* Anak usia < 12 tahun diperbolehkan menonton.</p>
                            <p>* Untuk PPKM level 1 & 2 mengikuti kebijakan di setiap kota.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h4 class="timer"><b>My Details</b></h4>
                        <p class="details-explanation">The following details are required to complete your booking and to receive your booking confirmation email.</p>
                    </div>

                    <form class="form-detail novalidate">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="name" class="form-control" id="name" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="mobilenumber" class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobilenumber" required>
                                    <div id="mobilenumberhelp" class="form-text">Example: 08112345678</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea type="text" class="form-control" id="address" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="confirmemail" class="form-label">Confirm Email</label>
                                    <input type="email" class="form-control" id="confirmemail" required>
                                </div>
                            </div>
                            <div id="confirmemailhelp" class="form-text">* Please double check that you've entered your email address correctly. <br> We will send your Booking ID to it.</div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="paymentmethod" class="form-label">Payment Method</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio">
                                        <label class="form-check-label">
                                            Credit Card
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio">
                                        <label class="form-check-label">
                                            Doku Wallet
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio">
                                        <label class="form-check-label">
                                            OVO
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio">
                                        <label class="form-check-label">
                                            Kredivo
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="promocode" class="form-label">Promo Code</label>
                                    <input type="text" class="form-control" id="promocode">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label agreement" for="invalidCheck">
                                By clicking on the "Confirm & Purchase" button, I agree to the Terms & Conditions and acknowledge that there will be no refunds, exchanges or cancelations. View our Privacy Policy here.
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col figure-container">
                                <img class="digicert d-flex justify-content-center" src="../asset/digicert.png">
                                <figcaption class="caption">Wildcard SSL Certificate</figcaption>
                            </div>
                            <div class="col">
                                <a href="../HTML/order_confirmation.php" class="btn btn-primary final-payment-button">Confirm & Purchase</a>
                            </div>
                        </div>
                    </form>
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
            $("#selected-seat").text(": " + localStorage.getItem('seat'));
        </script>
    </body>
</html>