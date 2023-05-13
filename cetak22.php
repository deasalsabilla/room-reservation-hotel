<h3>Detail Reservasi</h3>
<table  width="100%">
    <tr>
        <td width="15%">ID Booking</td>
        <td width="1%">:</td>
        <td width="60%">DE0987</td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>Dea</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>Cepu</td>
    </tr>
    <tr>
        <td>Tanggal Check In</td>
        <td>:</td>
        <td>DE0987</td>
    </tr>
    <tr>
        <td>Tanggal Check Out</td>
        <td>:</td>
        <td>DE0987</td>
    </tr>
</table>


<?php
include "koneksi.php";
$id = $_GET['id'];

$sql = "SELECT id_booking,nama,alamat,tgl_ci,tgl_co FROM tb_reservasi";
$ambildata = mysqli_query($koneksi, $sql);
$hasil = mysqli_fetch_array($ambildata);

if(!$hasil){
    die("Query error:". mysqli_error($koneksi));
}
?>