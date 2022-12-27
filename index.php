<?php
include ('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>aplikasi bank sampah</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="logo.peg" alt="">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li>|</li>
                    <li><a href="jadwal.php">JADWAL</a></li>
                    <li>|</li>        
                    <li><a href="sampah_masuk.php">SAMPAH MASUK</a></li>
                    <li>|</li>
                    <li><a href="sampah_keluar.php">SAMPAH KELUAR</a></li>
                    <li>|</li>
                    <li><a href="kontak.php">KONTAK KAMI</a></li>
                    <li>|</li>
                    <li><a href="user.php">LOGIN</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <h1>aplikasi bank sampah</h1>
            <div class="btn">
                <a class="log" href="user.php">
                    <button type="button">Login</button>
                </a>
                <a class="reg" href="user.php">
                    <button type="button">Regitrasi</button>
                </a>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>