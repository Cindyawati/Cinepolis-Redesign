<?php include('../koneksi.php');
$id = $_GET['id'];

$query = "DELETE FROM cinema where id = '$id'";
$result = mysqli_query($koneksi, $query);

if(!$result) {
    die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
} else {
    echo "<script>alert('Data berhasil dihapus!');window.location='../admin.php';</script>";
}