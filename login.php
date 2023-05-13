<?php
    

require "koneksi.php";

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
    
    
    //cek username
    if(mysqli_num_rows($result)===1){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
            //set session
            $_SESSION["login"] = true;
            
            header(("Location:index.php"));
            exit;
        } else{
            echo "<script> alert('Password yang anda masukkan salah')</script>";
            header("refresh:0,login.php"); 
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body style="background-color: #D5ECC2;">
    <form action="" method="post">
        <h3>MASUK</h3>
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username"><br>
        
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password"><br>

        <p>Belum punya akun?<a href="daftar.php">Daftar di sini</a></p>
        <button type="submit" class="btn btn-primary" value="login" name="login">Masuk</button>
        
        
    </form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>