<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Kamar</title>
    <link rel="stylesheet" href="status.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="status.css">
    <link rel="stylesheet" href="tambahstatus.css">
</head>
<body bgcolor="#371B58">
    <br>
    <h3 align="center">Daftar Status Kamar</h3>
    <table border="1" width="1350px">
        <tr bgcolor="#ffffff" height="30px" align="center">
            <br>
            <th>No</th>
            <th>No Kamar</th>
            <th>Tipe Kamar</th>
            <th>Status Kamar</th>
            <th>Ubah</th>
            <th>Hapus</th>
        </tr>
        <?php
            include"koneksi.php";

            $no =1;
            $hasil = mysqli_query($koneksi,"select * from tb_statuskmr") or die (mysqli_error($koneksi));
            while($data = mysqli_fetch_array($hasil)) {
                
                ?>
                <tr>
                    <td align="center" bgcolor="#FFD9C0"><?php echo $no++; ?></td>
                    <td align="center" bgcolor="#FFD9C0"><?php echo $data['no_kamar']; ?></td>
                    <td align="center" bgcolor="#FFD9C0"><?php echo $data['Tipe_kamar']; ?></td>
                    <td align="center" bgcolor="#FFD9C0"><?php echo $data['status_kamar']; ?></td>
                    <td width="10px" align="center"><a href="updatedata.php?id=<?php echo $data['no_kamar']?>"><input type="button" class="btn-update"></a></td>
                    <td width="10px" align="center"><a onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data ?')" href="hapus.php?id=<?php echo $data['no_kamar']?>"><input type="button" class="btn-delete"></a> </td>
                </tr>
                <?php
            }
        ?>
    </table>
    <br>
    <span style="float: right;">
        <button><a href="tambahdata.php" class="btn btn-primary">Tambah</a></button>
    </span>
<span style="float: right;">
    <button class="btn btn-secondary" name="kembali"style="width: 80px;height: 40px"><a href="index.php" style="color: #ffff; text-decoration:none;">Kembali</a></button> 
</span>
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>