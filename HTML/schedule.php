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

        <title>Schedule</title>
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

        <!--Search-->
        <div class="container search">
            <div class="row select">
                <div id="select-city" class="col-3">
                    <label class="title-select-city" >Select City</label>
                    <br>
                    <select class="select-city-item" id="schedulecity">
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
                <div id="schedule_date" class="col-3">
                    <label class="title-select-city">Date</label>
                    <br>
                    <form method="get">
                        <select class="select-class-item" id="scheduledate" name="scheduledate">
                            <option id="173" value="173">Thursday, March 17</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>

        <div id="blank_space" class="container blank-space"></div>

        <!--Bekasi-->
        <div style="display: none;" id="bekasi-section">
            <div class="container event">
                <h4 id="cinema-title" class="now-showing"><b>Blu Plaza | Bekasi Timur</b></h4>
            </div>

            <div class="container schedule-section">
                <div class="row">
                    <div class="col-4 section-movie">
                        <div class="row schedule-category">
                            <p>Movies</p>
                        </div>
                    </div>
                    <div class="col-8 section-movie">
                        <div class="row schedule-category">
                            <p>Schedule</p>
                        </div>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Moonfall</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>13:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:20 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=BLUE-PLAZA-|-BEKASI-TIMUR&name=MOONFALL&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Ambulance</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>16:40 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>19:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">The Batman</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=BLUE-PLAZA-|-BEKASI-TIMUR&name=THE-BATMAN&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=BLUE-PLAZA-|-BEKASI-TIMUR&name=THE-BATMAN&time=21:40&price=40,000"  class="btn btn-primary schedule-button">
                            <p>21:40 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--Bogor-->
        <div style="display: none;" id="bogor-section">
            <div class="container event">
                <h4 id="cinema-title" class="now-showing"><b>Bellanova Country Mall | Bogor</b></h4>
            </div>

            <div class="container schedule-section">
                <div class="row">
                    <div class="col-4 section-movie">
                        <div class="row schedule-category">
                            <p>Movies</p>
                        </div>
                    </div>
                    <div class="col-8 section-movie">
                        <div class="row schedule-category">
                            <p>Schedule</p>
                        </div>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Jujutsu Kaisen 0</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=BELLANOVA-COUNTRY-MALL-|-BOGOR&name=JUJUTSU-KAISEN-0&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=BELLANOVA-COUNTRY-MALL-|-BOGOR&name=JUJUTSU-KAISEN-0&time=22:20&price=40,000"  class="btn btn-primary schedule-button">
                            <p>22:20 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Garis Waktu</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=BELLANOVA-COUNTRY-MALL-|-BOGOR&name=GARIS-WAKTU-0&time=20:30&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=BELLANOVA-COUNTRY-MALL-|-BOGOR&name=GARIS-WAKTU-0&time=21:40&price=40,000"  class="btn btn-primary schedule-button">
                            <p>21:40 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
            </div>

            <br>

            <div class="container event">
                <h4 id="cinema-title" class="now-showing"><b>Lippo Plaza Ekalokasari | Bogor</b></h4>
            </div>

            <div class="container schedule-section">
                <div class="row">
                    <div class="col-4 section-movie">
                        <div class="row schedule-category">
                            <p>Movies</p>
                        </div>
                    </div>
                    <div class="col-8 section-movie">
                        <div class="row schedule-category">
                            <p>Schedule</p>
                        </div>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Moonfall</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>13:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:20 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=LIPPO-PLAZA-EKALOKASARI-|-BOGOR&name=MOONFALL&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Ambulance</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>16:40 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>19:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">The Batman</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=LIPPO-PLAZA-EKALOKASARI-|-BOGOR&name=THE-BATMAN&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=LIPPO-PLAZA-EKALOKASARI-|-BOGOR&name=THE-BATMAN&time=21:40&price=40,000"  class="btn btn-primary schedule-button">
                            <p>21:40 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
            </div>

            <br>
        </div>

        <!--Denpasar-->
        <div style="display: none;" id="denpasar-section">
            <div class="container event">
                <h4 id="cinema-title" class="now-showing"><b>Lippo Mall Kuta | Kuta, Bali</b></h4>
            </div>

            <div class="container schedule-section">
                <div class="row">
                    <div class="col-4 section-movie">
                        <div class="row schedule-category">
                            <p>Movies</p>
                        </div>
                    </div>
                    <div class="col-8 section-movie">
                        <div class="row schedule-category">
                            <p>Schedule</p>
                        </div>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Uncharted</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=LIPPO-MALL-KUTA-|-KUTA,-BALI&name=UNCHARTED&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Ambulance</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=LIPPO-MALL-KUTA-|-KUTA,-BALI&name=AMBULANCE&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">The Batman</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--Malang-->
        <div style="display: none;" id="malang-section">
            <div class="container event">
                <h4 id="cinema-title" class="now-showing"><b>Malang Town Square | Malang</b></h4>
            </div>

            <div class="container schedule-section">
                <div class="row">
                    <div class="col-4 section-movie">
                        <div class="row schedule-category">
                            <p>Movies</p>
                        </div>
                    </div>
                    <div class="col-8 section-movie">
                        <div class="row schedule-category">
                            <p>Schedule</p>
                        </div>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Jujutsu Kaisen 0</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=MALANG-TOWN-SQUARE-|-MALANG&name=JUJUTSU-KAISEN-0&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=MALANG-TOWN-SQUARE-|-MALANG&name=JUJUTSU-KAISEN-0&time=21:40&price=40,000"  class="btn btn-primary schedule-button">
                            <p>21:40 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">The Other Side</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--Medan-->
        <div style="display: none;" id="medan-section">
            <div class="container event">
                <h4 id="cinema-title" class="now-showing"><b>Sun Plaza Medan | Medan</b></h4>
            </div>

            <div class="container schedule-section">
                <div class="row">
                    <div class="col-4 section-movie">
                        <div class="row schedule-category">
                            <p>Movies</p>
                        </div>
                    </div>
                    <div class="col-8 section-movie">
                        <div class="row schedule-category">
                            <p>Schedule</p>
                        </div>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Moonfall</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>13:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:20 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=SUN-PLAZA-MEDAN-|-MEDAN&name=MOONFALL&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Ambulance</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>16:40 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>19:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">The Batman</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=SUN-PLAZA-MEDAN-|-MEDAN&name=THE-BATMAN&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=SUN-PLAZA-MEDAN-|-MEDAN&name=THE-BATMAN&time=21:40&price=40,000"  class="btn btn-primary schedule-button">
                            <p>21:40 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!--Jakarta Pusat-->
        <div style="display: none;" id="jakpus-section">
            <div class="container event">
                <h4 id="cinema-title" class="now-showing"><b>Gajah Mada Plaza | Jakarta Pusat</b></h4>
            </div>

            <div class="container schedule-section">
                <div class="row">
                    <div class="col-4 section-movie">
                        <div class="row schedule-category">
                            <p>Movies</p>
                        </div>
                    </div>
                    <div class="col-8 section-movie">
                        <div class="row schedule-category">
                            <p>Schedule</p>
                        </div>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Ambulance</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=GAJAH-MADA-PLAZA-|-JAKARTA-PUSAT&name=AMBULANCE&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=GAJAH-MADA-PLAZA-|-JAKARTA-PUSAT&name=AMBULANCE&time=22:40&price=40,000"  class="btn btn-primary schedule-button">
                            <p>22:40 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Moonfall</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=GAJAH-MADA-PLAZA-|-JAKARTA-PUSAT&name=MOONFALL&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=GAJAH-MADA-PLAZA-|-JAKARTA-PUSAT&name=MOONFALL&time=22:40&price=40,000"  class="btn btn-primary schedule-button">
                            <p>22:40 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Jujutsu Kaisen 0</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=GAJAH-MADA-PLAZA-|-JAKARTA-PUSAT&name=JUJUTSU-KAISEN-0&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=GAJAH-MADA-PLAZA-|-JAKARTA-PUSAT&name=JUJUTSU-KAISEN-0&time=22:40&price=40.000&" class="btn btn-primary schedule-button">
                            <p>22:40 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!--Jakarta Selatan-->
        <div style="display: none;" id="jaksel-section">
            <div class="container event">
                <h4 id="cinema-title" class="now-showing"><b>Plaza Semanggi | Jakarta Selatan</b></h4>
            </div>

            <div class="container schedule-section">
                <div class="row">
                    <div class="col-4 section-movie">
                        <div class="row schedule-category">
                            <p>Movies</p>
                        </div>
                    </div>
                    <div class="col-8 section-movie">
                        <div class="row schedule-category">
                            <p>Schedule</p>
                        </div>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Ambulance</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=PLAZA-SEMANGGI-|-JAKARTA-SELATAN&name=AMBULANCE&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=PLAZA-SEMANGGI-|-JAKARTA-SELATAN&name=AMBULANCE&time=22:40&price=40,000"  class="btn btn-primary schedule-button">
                            <p>22:40 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Moonfall</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=PLAZA-SEMANGGI-|-JAKARTA-SELATAN&name=MOONFALL&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=PLAZA-SEMANGGI-|-JAKARTA-SELATAN&name=MOONFALL&time=22:40&price=40,000"  class="btn btn-primary schedule-button">
                            <p>22:40 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--Jakarta Utara-->
        <div style="display: none;" id="jaktara-section">
            <div class="container event">
                <h4 id="cinema-title" class="now-showing"><b>Mangga Dua Square | Jakarta Utara</b></h4>
            </div>

            <div class="container schedule-section">
                <div class="row">
                    <div class="col-4 section-movie">
                        <div class="row schedule-category">
                            <p>Movies</p>
                        </div>
                    </div>
                    <div class="col-8 section-movie">
                        <div class="row schedule-category">
                            <p>Schedule</p>
                        </div>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Uncharted</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=MANGGA-DUA-SQUARE-|-JAKARTA-UTARA&name=UNCHARTED&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">Ambulance</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="select_seat.php?cinema=MANGGA-DUA-SQUARE-|-JAKARTA-UTARA&name=AMBULANCE&time=20:50&price=40,000"  class="btn btn-primary schedule-button">
                            <p>20:50 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                    </div>
                </div>
                <div class="row schedule-item">
                    <div class="col-4">
                        <p class="schedule-movie-title">The Batman</p>
                    </div>
                    <div class="col-8">
                    <p class="schedule-cinema-class">Regular</p>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>15:00 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
                        <a href="#" class="btn btn-primary schedule-button-unavailable">
                            <p>18:30 (2D)</p>
                            <p>IDR 40.000</p>
                        </a>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg-OMhuP-IlRH9sENBO0LRn5q-8nbTov4-1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>

            $('[name="scheduledate"]').change(function(){
                var href = $(this).val(); 
                $('.schedule-button').attr('href','select_seat.php?cinema=BLUE-PLAZA-|-BEKASI-TIMUR&name=MOONFALL&time=20-50&price=40-000&date='-href);
            });

            /* Bekasi */
            $("#schedulecity").change(function() {
                if ($(this).val() == "Bekasi"){
                    $("#blank_space").hide();
                    $("#bekasi-section").show();
                    $("#bogor-section").hide();
                    $("#denpasar-section").hide();
                    $("#malang-section").hide();
                    $("#medan-section").hide();
                    $("#jakpus-section").hide();
                    $("#jaksel-section").hide();
                    $("#jaktara-section").hide();
                }
            });

            /* Bogor */
            $("#schedulecity").change(function() {
                if ($(this).val() == "Bogor"){
                    $("#blank_space").hide();
                    $("#bekasi-section").hide();
                    $("#bogor-section").show();
                    $("#denpasar-section").hide();
                    $("#malang-section").hide();
                    $("#medan-section").hide();
                    $("#jakpus-section").hide();
                    $("#jaksel-section").hide();
                    $("#jaktara-section").hide();
                }
            });

            /* Denpasar */
            $("#schedulecity").change(function() {
                if ($(this).val() == "Denpasar"){
                    $("#blank_space").hide();
                    $("#bekasi-section").hide();
                    $("#bogor-section").hide();
                    $("#denpasar-section").show();
                    $("#malang-section").hide();
                    $("#medan-section").hide();
                    $("#jakpus-section").hide();
                    $("#jaksel-section").hide();
                    $("#jaktara-section").hide();
                }
            });

            /* Malang */
            $("#schedulecity").change(function() {
                if ($(this).val() == "Malang"){
                    $("#blank_space").hide();
                    $("#bekasi-section").hide();
                    $("#bogor-section").hide();
                    $("#denpasar-section").hide();
                    $("#malang-section").show();
                    $("#medan-section").hide();
                    $("#jakpus-section").hide();
                    $("#jaksel-section").hide();
                    $("#jaktara-section").hide();
                }
            });

            /* Medan */
            $("#schedulecity").change(function() {
                if ($(this).val() == "Medan"){
                    $("#blank_space").hide();
                    $("#bekasi-section").hide();
                    $("#bogor-section").hide();
                    $("#denpasar-section").hide();
                    $("#malang-section").hide();
                    $("#medan-section").show();
                    $("#jakpus-section").hide();
                    $("#jaksel-section").hide();
                    $("#jaktara-section").hide();
                }
            });

            /* Jakarta Pusat */
            $("#schedulecity").change(function() {
                if ($(this).val() == "Jakarta_Pusat"){
                    $("#blank_space").hide();
                    $("#bekasi-section").hide();
                    $("#bogor-section").hide();
                    $("#denpasar-section").hide();
                    $("#malang-section").hide();
                    $("#medan-section").hide();
                    $("#jakpus-section").show();
                    $("#jaksel-section").hide();
                    $("#jaktara-section").hide();
                }
            });

            /* Jakarta Selatan */
            $("#schedulecity").change(function() {
                if ($(this).val() == "Jakarta_Selatan"){
                    $("#blank_space").hide();
                    $("#bekasi-section").hide();
                    $("#bogor-section").hide();
                    $("#denpasar-section").hide();
                    $("#malang-section").hide();
                    $("#medan-section").hide();
                    $("#jakpus-section").hide();
                    $("#jaksel-section").show();
                    $("#jaktara-section").hide();
                }
            });

            /* Jakarta Utara */
            $("#schedulecity").change(function() {
                if ($(this).val() == "Jakarta_Utara"){
                    $("#blank_space").hide();
                    $("#bekasi-section").hide();
                    $("#bogor-section").hide();
                    $("#denpasar-section").hide();
                    $("#malang-section").hide();
                    $("#medan-section").hide();
                    $("#jakpus-section").hide();
                    $("#jaksel-section").hide();
                    $("#jaktara-section").show();
                }
            });
        </script>
    </body>
</html>