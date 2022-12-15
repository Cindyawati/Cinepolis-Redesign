<?php include('../koneksi.php'); 

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM cinema where id = '$id'";
        $result = mysqli_query($koneksi, $query);
        if(!$result){
            die("Query Error :".mysqli_errno($koneksi). " - ".mysqli_error($koneksi));
        }
        $data = mysqli_fetch_assoc($result);

        if(!count($data)) {
            echo "<script>alert('Data tidak ditemukan pada tabel.');window.location='../admin.php';</script>";
        }
    } else {
        echo "<script>alert('Masukan ID yang ingin di edit');window.location='../admin.php';</script>";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Cinema</title>
    <style type="text/css">
        * {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        h1 {
            text-transform: uppercase;
            color: salmon;
        }
        .base {
            width: 400px;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
        }
        label {
            margin-top: 10px;
            float: left;
            text-align: left;
            width: 100%;
        }
        input {
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background-color: #f8f8f8;
            border: 2px solid #ccc;
            outline-color: salmon;
        }
        button {
            background-color: salmon;
            color: #fff;
            padding: 10px;
            font-size: 12px;
            border: 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <center><h1>Edit Cinema <?php echo $data['cinema_name']; ?></h1></center>
    <form method="POST" action="../cinema/proses_edit_cinema.php" enctype="multipart/form-data">
        <section class="base">
            <div>
                <label>Photo</label>
                <img src="../asset/cinemas/temp/ echo $data['photo']; ?>" style="width:120px; float: left; margin-bottom: 5px;">
                <input type="file" name="photo" />
                <i style="float:left; font-size: 11px; color: red;">Abaikan jika tidak merubah gambar</i>
            </div>
            <div>
                <br>
                <label>Cinema Name</label>
                <input type="text" name="cinema_name" autofocus="" required="" value="<?php echo $data['cinema_name']; ?>" />
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
            </div>
            <div>
                <label">City</label>
                <input type="text" name="city" required="" value="<?php echo $data['city']; ?>"/>
            </div>
            <div>
                <label">Address</label>
                <input type="text" name="address" required="" value="<?php echo $data['address']; ?>"/>
            </div>
            <div>
                <label">Working Hours</label>
                <input type="text" name="working_hours" required="" value="<?php echo $data['working_hours']; ?>"/>
            </div>
            <div>
                <label">Began Operations</label>
                <input type="text" name="began_operations" required="" value="<?php echo $data['began_operations']; ?>"/>
            </div>
            <div>
                <label">Ticket Price</label>
                <input type="text" name="ticket_price" required="" value="<?php echo $data['ticket_price']; ?>"/>
            </div>
            <div>
                <label">Cinema Class</label>
                <input type="text" name="cinema_class" required="" value="<?php echo $data['cinema_class']; ?>"/>
            </div>
            <div>
                <button type="submit">Simpan Perubahan</button>
            </div>
        </section>
    </form>
</body>
</html>