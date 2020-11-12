<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht-device-widht, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <h1>Halo Selamat Datang <?= $_POST ["nama"] ?>!</h1>
    <h3>Data Anda Akan Kami Proses</h3>
    <p>Nama : <?= $_POST ["nama"] ?></p>
    <p>Alamat: <?= $_POST ["alamat"] ?></p>
</body>
</html>
   