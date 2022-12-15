<?php include('../koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Cinema</title>
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
    <center><h1>Tambah Cinema</h1></center>
    <form method="POST" action="../cinema/proses_tambah_cinema.php" enctype="multipart/form-data">
        <section class="base">
            <div>
                <label>Photo</label>
                <input type="file" name="photo" required="" />
            </div>
            <div>
                <label>Cinema Name</label>
                <input type="text" name="cinema_name" autofocus="" required="" />
            </div>
            <div>
                <label>City</label>
                <input type="text" name="city" required="" />
            </div>
            <div>
                <label>Address</label>
                <input type="text" name="address" required="" />
            </div>
            <div>
                <label>Working Hours</label>
                <input type="text" name="working_hours" required="" />
            </div>
            <div>
                <label>Began Operations</label>
                <input type="text" name="began_operations" required="" />
            </div>
            <div>
                <label>Ticket Price</label>
                <input type="text" name="ticket_price" required="" />
            </div>
            <div>
                <label>Cinema Class</label>
                <input type="text" name="cinema_class" required="" />
            </div>
            <div>
                <button type="submit">Simpan Cinema</button>
            </div>
        </section>
    </form>
</body>
</html>