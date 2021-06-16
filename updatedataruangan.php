<?php
include "function.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$kapasitas = $_POST['kapasitas'];
$lokasi = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];

$update = mysqli_query( $koneksi, "UPDATE ruangan SET id_Ruangan='$id', Nama='$nama', Kapasitas='$kapasitas', Lokasi='$lokasi', Keterangan ='$keterangan'");

if ($update){
	echo "<script> alert ('Data Berhasil Diubah')</script>";
	header ("refresh:0;index-admin.php");
} else {
	echo "<script>alert ('Data Tidak Berhasil Diubah')</script>";
	header ("index-admin.php");
}
?>