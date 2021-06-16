<?php
include "function.php";

$id = $_GET['ID_TRANSAKSI'];

$hapus = mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_Transaksi = $id");


if ($hapus){
	echo "<script> alert ('Penyewaan Dibatalkan')</script>";
	header ("refresh:2;index-admin.php");
} else {
	echo "<script> alert ('Penyewaan Gagal Dibatalkan')</script>";
	header ("refresh:2;index-admin.php");
}

?>