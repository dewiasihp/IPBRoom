<?php
include "function.php";

$id = $_POST['id_ruangan'];
$nama = $_POST['nama'];
$kapasitas = $_POST['kapasitas'];
$lokasi = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$foto = $_FILES['foto']['name'];
$foto = $_FILES['foto']['name'];
$foto_ruangan = $_FILES['foto']['tmp_name'];

$dirupload = "images/";
$terupload = move_uploaded_file($foto_ruangan, $dirupload.$foto);


$simpan = mysqli_query( $koneksi, "INSERT INTO ruangan VALUES ('$id ', '$nama', '$kapasitas', '$lokasi', '$keterangan', '$harga', '$foto')");

if ($simpan){
	echo "<script> alert ('Berhasil Disimpan')</script>";
	header ("refresh:0;index-admin.php");
} else {
	echo "<script> alert ('Tidak Berhasil Disimpan')</script>";
	header ("refresh:0;index-admin.php");
}

?>