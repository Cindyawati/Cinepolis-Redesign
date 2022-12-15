<?php
    include('../koneksi.php');

    $photo = $_FILES['photo']['name'];
    $cinema_name = $_POST['cinema_name'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $working_hours = $_POST['working_hours'];
    $began_operations = $_POST['began_operations'];
    $ticket_price = $_POST['ticket_price'];
    $cinema_class = $_POST['cinema_class'];

    if($photo != ""){
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $x = explode('.', $photo);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['photo']['tmp_name'];
        $angka_acak = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$photo;

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            move_uploaded_file($file_tmp, '../asset/cinemas/temp/'.$nama_gambar_baru);

            $query = "INSERT INTO cinema (photo, cinema_name, city, address, working_hours, began_operations, ticket_price, cinema_class) VALUES ('$nama_gambar_baru', '$cinema_name', '$city', '$address', '$working_hours', '$began_operations', '$ticket_price', '$cinema_class')";
            $result = mysqli_query($koneksi, $query);

            if(!$result) {
                die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
            } else {
                echo "<script>alert('Data berhasil ditambahkan!');window.location='../admin.php';</script>";
            }
        
        } else {
            echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='cinema/tambah_cinema.php';</script>"; 
        }

    } else {
        $query = "INSERT INTO cinema (cinema_name, city, address, working_hours, began_operations, ticket_price, cinema_class) VALUES ('$cinema_name', '$city', '$address', '$working_hours', '$began_operations', '$ticket_price', '$cinema_class')";
        $result = mysqli_query($koneksi, $query);

        if(!$result) {
            die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil ditambahkan!');window.location='../admin.php';</script>";
        }
    }
?>