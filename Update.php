<?php
include("Connect.php");

	$kode = $_POST["kode"];
	$nama = $_POST["nama"];
	$deskripsi = $_POST["deskripsi"];
	$stok = $_POST["stok"];
	$harga = $_POST["harga"];
	$berat = $_POST["berat"];

	mysql_query("update barang set nama='$nama',deskripsi='$deskripsi',stok='$stok',harga='$harga',berat='berat' where kode='$kode'");
		header("location:tampil.php?");
	
?>