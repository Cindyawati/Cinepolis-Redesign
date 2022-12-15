<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Cinepolis</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!--CSS-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../cinepolis/adminstyle.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  </head>

    <body>

        <!-- Now Showing -->
        <div>
            <center><h1>Now Showing</h1></center>
            <center><button><a class="link" href="now_showing/tambah_film.php">+ &nbsp; Tambah Film</a></center></button>
            <table class="table now-showing-table">
                <thead>
                    <tr class="table-group-divider">
                        <th>No.</th>
                        <th class="poster">Poster</th>
                        <th>Title</th>
                        <th style="display: none;">Price</th>
                        <th>Age Rating</th>
                        <th>Duration</th>
                        <th>Genre</th>
                        <th>Year</th>
                        <th>Actor</th>
                        <th>Sinopsis Indonesia</th>
                        <th>Sinopsis Inggris</th>
                        <th style="display: none;">Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM movie ORDER BY id ASC";
                        $result = mysqli_query($koneksi, $query);

                        if(!$result) {
                            die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                        }
                        $no = 1;

                        while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><img style="width: 120px;" src="poster/temp/<?php echo $row['poster']; ?>"></td>
                        <td><?php echo $row['title']; ?></td>
                        <td style="display: none;">Rp <?php echo number_format($row['price'], 0,',','.'); ?></td>
                        <td><?php echo $row['age_rating']; ?></td>
                        <td><?php echo $row['duration']; ?></td>
                        <td><?php echo $row['genre']; ?></td>
                        <td><?php echo $row['year']; ?></td>
                        <td><?php echo $row['actor']; ?></td>
                        <td><?php echo substr($row['sinopsis_indonesia'], 0, 20); ?>...</td>
                        <td><?php echo substr($row['sinopsis_inggris'], 0, 20); ?>...</td>
                        <td style="display: none;"><?php echo $row['link']; ?></td>
                        <td>
                            <button><a class="link" href="now_showing/edit_film.php?id=<?php echo $row['id']; ?>">Edit</a></button>
                            <button><a class="link" href="now_showing/proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin ingin hapus data ini?')">Hapus</a></button>
                        </td>
                    </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <br>

        <!-- Upcoming -->
        <div>
            <center><h1>Coming Soon</h1></center>
            <center><button><a class="tambah-film"><a class="link" href="upcoming/tambah_film_upcoming.php">+ &nbsp; Tambah Film</a></center></button>
            <table class="table now-showing-table">
                <thead>
                    <tr class="table-group-divider">
                        <th>No.</th>
                        <th>Poster</th>
                        <th>Title</th>
                        <th style="display: none;">Price</th>
                        <th>Age Rating</th>
                        <th>Duration</th>
                        <th>Genre</th>
                        <th>Year</th>
                        <th>Actor</th>
                        <th>Sinopsis Indonesia</th>
                        <th>Sinopsis Inggris</th>
                        <th style="display: none;">Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM upcoming ORDER BY id ASC";
                        $result = mysqli_query($koneksi, $query);

                        if(!$result) {
                            die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                        }
                        $no = 1;

                        while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><img style="width: 120px;" src="poster/temp/<?php echo $row['poster']; ?>"></td>
                        <td><?php echo $row['title']; ?></td>
                        <td style="display: none;">Rp <?php echo number_format($row['price'], 0,',','.'); ?></td>
                        <td><?php echo $row['age_rating']; ?></td>
                        <td><?php echo $row['duration']; ?></td>
                        <td><?php echo $row['genre']; ?></td>
                        <td><?php echo $row['year']; ?></td>
                        <td><?php echo $row['actor']; ?></td>
                        <td><?php echo substr($row['sinopsis_indonesia'], 0, 20); ?>...</td>
                        <td><?php echo substr($row['sinopsis_inggris'], 0, 20); ?>...</td>
                        <td style="display: none;"><?php echo $row['link']; ?></td>
                        <td>
                            <button><a class="link" href="upcoming/edit_film_upcoming.php?id=<?php echo $row['id']; ?>">Edit</button>
                            <button><a class="link" href="upcoming/proses_hapus_upcoming.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin ingin hapus data ini?')">Hapus</a></button>
                        </td>
                    </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <br><br>

        <!-- Cinema 
        <center><h1>Data Cinema</h1></center>
        <center><a href="cinema/tambah_cinema.php">+ &nbsp; Tambah Cinema</a></center>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Working Hours</th>
                    <th>Began Operations</th>
                    <th>Ticket Price</th>
                    <th>Cinema Class</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM cinema ORDER BY id ASC";
                    $result = mysqli_query($koneksi, $query);

                    if(!$result) {
                        die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                    }
                    $no = 1;

                    while ($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><img style="width: 120px;" src="asset/cinemas/temp/<?php echo $row['photo']; ?>"></td>
                    <td><?php echo $row['cinema_name']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['working_hours']; ?></td>
                    <td><?php echo $row['began_operations']; ?></td>
                    <td><?php echo $row['ticket_price']; ?></td>
                    <td><?php echo $row['cinema_class']; ?></td>
                    <td>
                        <a href="cinema/edit_cinema.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="cinema/proses_hapus_cinema.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin ingin hapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
        -->
    </body>
</html>