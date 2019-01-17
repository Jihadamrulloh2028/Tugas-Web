<html>
	<head>
	<title>Kelola Data Barang</title>
		<link rel="stylesheet" type="text/css" href="home.css"/>
	</head>
	
	<body>
		<h2>KELOLA DATA BARANG</h2>
		<br>
		<br>
			<form action = "Tmb.php" method = "post" p align ="center">
		<table width= 50% height=5% align="center">
	<tr>
		<td><b>Input Data Barang</b></td>
	</tr>
	</table>
	<br>
		<table width= 50% height=5% align="center">
	<tr>
		<td>Kode :</td>
		<td><input type="text" name="kode" class="hd"></td>
	</tr>
	<tr>
		<td>Nama :</td>
		<td><input type="text" name="nama" class="hd"></td>
	</tr>
	<tr>
		<td>Deskripsi :</td>
		<td><textarea name="deskripsi" class="hd"></textarea></td>
	</tr>
	<tr>
		<td>Stok :</td>
		<td><input type="text" name="stok" class="hd"></td>
	</tr>
	<tr>
		<td>Harga :</td>
		<td><input type="text" name="harga" class="hd"></td>
	</tr>
	<tr>
		<td>Berat :</td>
		<td><input type="text" name="berat" class="hd"> gram</td>
	</tr>
	<table>
		<p align="center"><input class="btn" type=submit value="Tambah"></p>
	</table>
	</body>
	
</html>
	