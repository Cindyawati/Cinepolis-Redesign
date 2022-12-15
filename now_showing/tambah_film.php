<?php include('../koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Now Showing Movie</title>
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
    <center><h1>Tambah Film Now Showing</h1></center>
    <form method="POST" action="../now_showing/proses_tambah.php" enctype="multipart/form-data">
        <section class="base">
            <div>
                <label>Poster</label>
                <input type="file" name="poster" required="" />
            </div>
            <div>
                <label>Title</label>
                <input type="text" name="title" autofocus="" required="" />
            </div>
            <div>
                <label>Price</label>
                <input type="text" name="price" required="" />
            </div>
            <div>
                <label>Age Rating</label>
                <input type="text" name="age_rating" required="" />
            </div>
            <div>
                <label>Duration</label>
                <input type="text" name="duration" required="" />
            </div>
            <div>
                <label>Genre</label>
                <input type="text" name="genre" required="" />
            </div>
            <div>
                <label>Year</label>
                <input type="text" name="year" required="" />
            </div>
            <div>
                <label>Actor</label>
                <input type="text" name="actor" required="" />
            </div>
            <div>
                <label>Sinopsis Bahasa Indonesia</label>
                <input type="text" name="sinopsis_indonesia" required="" />
            </div>
            <div>
                <label>Sinopsis Bahasa Inggris</label>
                <input type="text" name="sinopsis_inggris" required="" />
            </div>
            <div>
                <label>Link</label>
                <input type="text" name="link" required="" />
            </div>
            <div>
                <button type="submit">Simpan Produk</button>
            </div>
        </section>
    </form>
</body>
</html>