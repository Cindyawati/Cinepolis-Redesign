<?php
    include('../koneksi.php');

    $poster = $_FILES['poster']['name'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $age_rating = $_POST['age_rating'];
    $duration = $_POST['duration'];
    $genre = $_POST['genre'];
    $year = $_POST['year'];
    $actor = $_POST['actor'];
    $sinopsis_indonesia = $_POST['sinopsis_indonesia'];
    $sinopsis_inggris = $_POST['sinopsis_inggris'];
    $link = $_POST['link'];

    if($poster != ""){
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $x = explode('.', $poster);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['poster']['tmp_name'];
        $angka_acak = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$poster;

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            move_uploaded_file($file_tmp, '../poster/temp/'.$nama_gambar_baru);

            $query = "INSERT INTO upcoming (poster, title, price, age_rating, duration, genre, year, actor, sinopsis_indonesia, sinopsis_inggris, link) VALUES ('$nama_gambar_baru', '$title', '$price', '$age_rating', '$duration', '$genre', '$year', '$actor', '$sinopsis_indonesia', '$sinopsis_inggris', '$link')";
            $result = mysqli_query($koneksi, $query);

            if(!$result) {
                die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
            } else {
                echo "<script>alert('Data berhasil ditambahkan!');window.location='../admin.php';</script>";
            }
        
        } else {
            echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='upcoming/tambah_film_upcoming.php';</script>"; 
        }

    } else {
        $query = "INSERT INTO upcoming (title, price, age_rating, duration, genre, year, actor, sinopsis_indonesia, sinopsis_inggris, link) VALUES ('$title', '$price', '$age_rating', '$duration', '$genre', '$year', '$actor', '$sinopsis_indonesia', '$sinopsis_inggris', '$link')";
        $result = mysqli_query($koneksi, $query);

        if(!$result) {
            die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil ditambahkan!');window.location='../admin.php';</script>";
        }
    }
?>