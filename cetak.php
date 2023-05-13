<?php
require_once __DIR__ . '/vendor/autoload.php';
require "koneksi.php";



$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [100, 120]]);
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk booking</title>
</head>
<body>
<style>
    table, th, td{
        padding: 5px;
        vertical-align: top;
    }
    .judul{
        margin-bottom: 0px;
        font-size: 16px;
        font-weight: bold;
    }
</style>
    <h1 align="center">Dream Hotels</h1>';
$id = $_GET['id'];

$data = mysqli_query($koneksi,"SELECT * FROM tb_reservasi WHERE id_booking='$id'");
$hasil = mysqli_fetch_array($data);

if(!$hasil){
    die("Query error:". mysqli_error($koneksi));
}
$html .='
    <h3 class="judul">Detail Reservasi</h3>
<table  width="100%">
    <tr>
        <td width="15%">ID Booking</td>
        <td width="1%">:</td>
        <td width="60%">'.$hasil['id_booking'].'</td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>'. $hasil['nama'] .'</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>'. $hasil['alamat'] .'</td>
    </tr>
    <tr>
        <td>Tanggal Check In</td>
        <td>:</td>
        <td>'. $hasil['tgl_ci'] .'</td>
    </tr>
    <tr>
        <td>Tanggal Check Out</td>
        <td>:</td>
        <td>'. $hasil['tgl_co'] .'</td>
    </tr>
</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>
