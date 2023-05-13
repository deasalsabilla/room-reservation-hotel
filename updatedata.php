<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "select * from tb_statuskmr where no_kamar='$id'");
$data = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Ubah Data Status Kamar
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">
                    <div class="form-group">
                        <label for="no_kamar">No Kamar</label>
                        <input type="number" name="no_kamar" class="form-control col-md-9" value="<?php echo $data['no_kamar']; ?>">
                    </div> <br>
                    <div class="form-group">
                        <label for="Tipe_kamar">Tipe Kamar</label>
                        <select class="form-control" name="Tipe_kamar" id="Tipe_kamar" aria-label="Default select example">
                            <option value="">--Pilih--</option>
                            <option value="Deluxe" <?php if ($data['Tipe_kamar'] == "Deluxe") echo "selected" ?>>Deluxe</option>
                            <option value="Junior Suite" <?php if ($data['Tipe_kamar'] == "Junior Suite") echo "selected" ?>>Junior Suite</option>
                            <option value="Suite" <?php if ($data['Tipe_kamar'] == "Suite") echo "selected" ?>>Suite</option>
                        </select>
                    </div> <br>
                    <div class="form-group">
                        <label for="status_kamar">Status Kamar</label>
                        <select class="form-control" name="status_kamar" id="status_kamar" aria-label="Default select example">   
                            <option value="">--Pilih--</option>
                            <option value="Occupied" <?php if ($data['status_kamar'] == "Occupied") echo "selected" ?>>Occupied</option>
                            <option value="Vacant" <?php if ($data['status_kamar'] == "Vacant") echo "selected" ?>>Vacant</option>
                            <option value="Out of Service" <?php if ($data['status_kamar'] == "Out of Services") echo "selected" ?>>Out of Services</option>
                        </select>
                    </div> <br>
                    <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Simpan</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                    <button class="btn btn-secondary"><a href="statuskamar.php" style="color:#ffff; text-decoration:none;">Kembali</a></button>
                </form>
            </div>


<?php

$no_kamar       = $_POST['no_kamar'];
$Tipe_kamar     = $_POST['Tipe_kamar'];
$status_kamar   = $_POST['status_kamar'];

if(isset($_POST['simpan'])){
    $hasil = mysqli_query($koneksi, "UPDATE tb_statuskmr SET no_kamar = '$no_kamar', Tipe_kamar = '$Tipe_kamar', status_kamar = '$status_kamar' WHERE no_kamar= '$id'") or die(mysqli_error(($koneksi))); 

    if ($hasil) {
        echo "<script> alert('Data Berhasil Di ubah')</script>";
        header("refresh:0,statuskamar.php");
    } else {
        echo "<script> alert('Data  tidak Berhasil Di ubah')</script>";
        header("refresh:0,statuskamar.php");
    }
}
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>