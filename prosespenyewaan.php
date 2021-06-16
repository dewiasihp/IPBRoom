<?php
include "function.php";

$id_transaksi = $_POST['id_transaksi'];
$tanggal = $_POST['tanggal'];
$jam_mulai = $_POST['jam_mulai'];
$jam_akhir = $_POST['jam_akhir'];
$keperluan = $_POST['keperluan'];
$pembayaran = $_POST['pembayaran'];

$simpan = mysqli_query($koneksi, "INSERT INTO transaksi VALUES ('$id_transaksi','$keperluan', '$tanggal', '$jam_mulai', '$jam_akhir', '$pembayaran')");

if ($simpan){
	echo "<script> alert ('Berhasil Disimpan')</script>";
	header ("refresh:0;index-user.php");
} else {
	echo "<script>alert ('Tidak Berhasil Disimpan')</script>";
	header ("refresh:0;index-user.php");
}

?>
