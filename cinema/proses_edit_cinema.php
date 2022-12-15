<?php
    include('../koneksi.php');

    $id = $_POST['id'];
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

            $query = "UPDATE cinema SET photo = '$nama_gambar_baru', cinema_name = '$cinema_name', city = '$city', address = '$address', working_hours = '$working_hours', began_operations = '$began_operations', ticket_price = '$ticket_price', cinema_class = '$cinema_class'";
            $query .= "WHERE id = '$id'";
            $result = mysqli_query($koneksi, $query);

            if(!$result) {
                die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
            } else {
                echo "<script>alert('Data berhasil diubah!');window.location='../admin.php';</script>";
            }
        
        } else {
            echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='cinema/edit_cinema.php';</script>"; 
        }

    } else {
        $query = "UPDATE cinema SET cinema_name = '$cinema_name', city = '$city', address = '$address', working_hours = '$working_hours', began_operations = '$began_operations', ticket_price = '$ticket_price', cinema_class = '$cinema_class'";
        $query .= "WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);

        if(!$result) {
            die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil diubah!');window.location='../admin.php';</script>";
        }
    }
?>