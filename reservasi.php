<?php
include "koneksi.php";

$sql = mysqli_query($koneksi, "select * from tb_reservasi");
$data = mysqli_fetch_array($sql)
?>
<?php
include "koneksi.php";

$auto = mysqli_query($koneksi,"select max(id_booking) as max_code from tb_reservasi");
$hasil = mysqli_fetch_array($auto);
$code = $hasil['max_code'];
$urutan = (int)substr($code, 1, 3);
$urutan++;
$huruf = "B";
$booking = $huruf . sprintf("%03s",$urutan);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <h2 align="center">Form Reservasi</h2>
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Input Data Reservasi
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">
                    <div class="form-group">
                        <label for="id_booking">ID Booking</label>
                        <input type="text" name="id_booking" class="form-control col-md-9" value="<?php echo $booking ?>"readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control col-md-9" placeholder="Masukkan Nama" value="<?php echo $nama ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control col-md-9" placeholder="Masukkan Alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="number" name="telepon" class="form-control col-md-9" placeholder="Masukkan Nomor Telepon">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control col-md-9" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <label for="tipe_kamar">Tipe Kamar</label>
                        <select class="form-control" name="tipe_kamar" id="tipe_kamar" aria-label="Default select example" required>
                            <option value="">--Pilih--</option>
                            <option value="Deluxe" <?php if ($tipe_kamar == "Deluxe") echo "selected" ?>>Deluxe</option>
                            <option value="Junior Suite" <?php if ($tipe_kamar == "Junior Suite") echo "selected" ?>>Junior Suite</option>
                            <option value="Suite" <?php if ($tipe_kamar == "Suite") echo "selected" ?>>Suite</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jmlkmr">Jumlah Kamar</label>
                        <input type="number" name="jumlah_kamar" class="form-control col-md-9" placeholder="Masukkan Jumlah" value="<?php echo $jumlah_kamar ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_ci">Tanggal Check-In</label>
                        <input type="date" name="tgl_ci" class="form-control col-md-9" placeholder="Masukkan Tanggal Check-In" value="<?php echo $tgl_ci ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_co">Tanggal Check-Out</label>
                        <input type="date" name="tgl_co" class="form-control col-md-9" placeholder="Masukkan Tanggal Check-Out" value="<?php echo $tgl_co ?>" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan" onclick="return confirm('Apakah Anda Yakin Untuk Menyimpan Data ?')">Simpan</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                    <button class="btn btn-secondary"><a href="reservasi1.php" style="color: #ffff; text-decoration:none;">Kembali</a></button>
                </form>
            </div>
        </div>
    </div>
<?php
    include "koneksi.php";

    $id_booking          = $_POST['id_booking'];
    $nama                = $_POST['nama'];
    $alamat              = $_POST['alamat'];
    $telepon             = $_POST['telepon'];
    $email               = $_POST['email'];
    $tipe_kamar          = $_POST['tipe_kamar'];
    $jumlah_kamar        = $_POST['jumlah_kamar'];
    $tgl_ci              = $_POST['tgl_ci'];
    $tgl_co              = $_POST['tgl_co'];
  
    if (isset($_POST['simpan'])) {
        $q1 = mysqli_query($koneksi, "INSERT INTO tb_reservasi(id_booking,nama,alamat,telepon,email,tipe_kamar,jumlah_kamar,tgl_ci,tgl_co) VALUES ('$id_booking','$nama','$alamat','$telepon','$email','$tipe_kamar','$jumlah_kamar','$tgl_ci','$tgl_co')"); 
        if ($q1) {
            echo "<script> alert('Data Berhasil Di simpan');
            document.location='reservasi1.php'</script>";
        } else {
            echo "<script> alert('Data  tidak Berhasil Di simpan')
            document.location='reservasi.php'</script>";  
        }
    }
?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>