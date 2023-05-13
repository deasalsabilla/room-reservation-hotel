<?php 

require 'koneksi.php';
require 'function.php';
$sql = mysqli_query($koneksi, "select * from user");
$data = mysqli_fetch_array($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="daftar.css">
</head>
<body>
<h2 align="center">Form Daftar Pengguna</h2>
<?php

if(isset($_POST['simpan'])){
    if(registrasi($_POST) > 0) {
        echo "<script>
                alert('User baru berhasil ditambahkan');
              </script>";
        header("Location: login.php");
    }else{
        echo mysqli_error($koneksi);
    }
}

?>
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Input Data Pengguna
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control col-md-9" class="input" placeholder="Masukkan Username" value="<?php echo $email?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control col-md-9" class="input" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <label for="konfirmasi_password">Konfirmasi Password</label>
                        <input type="password" name="password2" id="password2" class="form-control col-md-9" class="input"  placeholder="Masukkan Konfirmasi Password">
                    </div>
                   <br>
                    <button type="submit" class="btn btn-primary" name="simpan" value="simpan" onclick="return confirm('Apakah anda yakin untuk menyimpan data?')">Simpan</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                </form>
            </div>
        </div>
    </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>  