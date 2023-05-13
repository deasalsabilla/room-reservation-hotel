<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="booking.css">
</head>
<body>
    <h3 align="center">Data Booking</h3>
    <table border="1" width="1365px">
        <tr bgcolor="#ffffff" align="center">
            <th>No</th>
            <th>id_booking</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal C/I</th>
            <th>Tanggal C/O</th>
            <th>Cetak</th>
        </tr>
        <?php
            include"koneksi.php";

            $no =1;
            $data = mysqli_query($koneksi,"select * from tb_reservasi");
            while($hasil = mysqli_fetch_array($data)) {
                ?>
                <tr bgcolor="#FFD9C0" align="center">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $hasil['id_booking']; ?></td>
                    <td><?php echo $hasil['nama']; ?></td>
                    <td><?php echo $hasil['alamat']; ?></td>
                    <td><?php echo $hasil['tgl_ci']; ?></td>
                    <td><?php echo $hasil['tgl_co']; ?></td>
                    <td>
                        <button><a href="cetak.php?id=<?php echo $hasil['id_booking']; ?>" type="button" class="btn btn-dark" target="_blank">Cetak</a></button>
                    </td>
                </tr>
                <?php
            }
        ?>
            
    </table> 
    <br>
    <span style="float: right;">
        <button class="btn btn-secondary" name="kembali"><a href="index.php" style="color: #ffff; text-decoration:none; margin-bottom:20px">Kembali</a></button> 
    </span>
   

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>