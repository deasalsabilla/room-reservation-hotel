<?php
include_once "koneksi.php";

$kamar = $_GET['id'];
$query="DELETE FROM tb_statuskmr WHERE no_kamar=$kamar";
$hapus = mysqli_query($koneksi, $query);

if($hapus){
    echo "<script> alert('Data Berhasil Di Hapus')</script>";
    header("refresh:0,statuskamar.php");
}else{
    echo "<script> alert('Data Tidak Berhasil Di Hapus')</script>";
    header("refresh:0,statuskamar.php");
}
?>
