<?php include('../koneksi.php'); 

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM movie where id = '$id'";
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
    <title>Edit Movie</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style type="text/css">
        * {
            font-family: 'Montserrat';
        }
        h1 {
            color: #08285B;
            font-size: 30px;
            margin-top: 50px;
            font-weight: bolder;
        }
        .base {
            width: 400px;
            padding: 20px;
            padding-top: 0px;
            margin-left: auto;
            margin-right: auto;
        }
        label {
            margin-top: 6px;
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
            outline-color: #08285B;
        }
        button {
            color: #fff;
            padding: 10px;
            font-size: 12px;
            margin-top: 20px;

            background-color: #08285B;
            border: #08285B;
            border-color: #08285B;

            border-radius: 4px;
        }
    </style>
</head>
<body>
    <center><h1>Edit Film <?php echo $data['title']; ?></h1></center>
    <form method="POST" action="../now_showing/proses_edit.php" enctype="multipart/form-data">
        <section class="base">
            <div style="margin-bottom: 10px;">
                <label style="font-weight:bolder; margin-bottom:4px" >Poster</label>
                <img src="../poster/temp/<?php echo $data['poster']; ?>" style="width:120px; float: left; margin-bottom: 10px;">
                <input type="file" name="poster" />
                <i style="float:left; font-size: 12px; color: #08285B;">*Abaikan jika tidak merubah gambar produk</i>
            </div>
            <div>
                <br>
                <label">Title</label>
                <input type="text" name="title" autofocus="" required="" value="<?php echo $data['title']; ?>" />
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
            </div>
            <div>
                <label">Price</label>
                <input type="text" name="price" required="" value="<?php echo $data['price']; ?>"/>
            </div>
            <div>
                <label">Age Rating</label>
                <input type="text" name="age_rating" required="" value="<?php echo $data['age_rating']; ?>"/>
            </div>
            <div>
                <label">Duration</label>
                <input type="text" name="duration" required="" value="<?php echo $data['duration']; ?>"/>
            </div>
            <div>
                <label">Genre</label>
                <input type="text" name="genre" required="" value="<?php echo $data['genre']; ?>"/>
            </div>
            <div>
                <label">Year</label>
                <input type="text" name="year" required="" value="<?php echo $data['year']; ?>"/>
            </div>
            <div>
                <label">Actor</label>
                <input type="text" name="actor" required="" value="<?php echo $data['actor']; ?>"/>
            </div>
            <div>
                <label">Sinopsis Bahasa Indonesia</label>
                <input type="text" name="sinopsis_indonesia" required="" value="<?php echo $data['sinopsis_indonesia']; ?>"/>
            </div>
            <div>
                <label">Sinopsis Bahasa Inggris</label>
                <input type="text" name="sinopsis_inggris" required="" value="<?php echo $data['sinopsis_inggris']; ?>"/>
            </div>
            <div>
                <label">Link</label>
                <input type="text" name="link" required="" value="<?php echo $data['link']; ?>"/>
            </div>
            <div>
                <button type="submit">Simpan Perubahan</button>
            </div>
        </section>
    </form>
</body>
</html>