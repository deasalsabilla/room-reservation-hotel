<?php
function registrasi($data){
    global $koneksi;

    
    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($koneksi,$data["password"]);
    $password2 = mysqli_real_escape_string($koneksi,$data["password2"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($koneksi, "SELECT  username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Username sudah terdaftar');
            </script>";
        return false;
    }

    // cek konfirmasi password
    if($password !== $password2){
        echo "<script>
                alert('konfirmasi password tidak sesuai');
            </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru  ke database
    mysqli_query($koneksi, "INSERT INTO user VALUES('$username','$password')");

    return mysqli_affected_rows($koneksi);

}
?>