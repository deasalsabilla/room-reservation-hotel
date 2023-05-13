<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Reservasi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">Dream Hotel's</a></div>
            <div class="menu">
                <ul>
                    <li><a href="tentang.php">Fasilitas</a></li>
                    <li><a href="statuskamar.php">Status Kamar</a></li>
                    <li><a href="reservasi1.php">Reservasi</a></li>
                    <li><a href="booking.php">Data Booking</a></li>
                    <li><a href="logout.php" class="tbl-biru" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wraper">
        <section id="home">
            <img src="hotel.jpg" width="1350px">
        </section>
    </div>


</body>
</html>