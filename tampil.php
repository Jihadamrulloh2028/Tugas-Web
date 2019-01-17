<html>
	<head>
		<title>Kelola Data Barang</title>
		<link rel="stylesheet" type="text/css" href="home.css"/>
	</head>
	<body>
		<h2>KELOLA DATA BARANG</h2>
		<br>
		<br>
		
	<table width=80% height= 5% align="center">
		<tr align="center">
			<td><b>Data Barang </b></td>
			<td><a href=Tambah.php><button class="btn">Tambah</button></a></td>
		</tr>
	</table>
	<br>	
	<table width=80% height= 40% align="center" border=1 cellpadding=0 cellspacing=0>
		<tr align="center">
			<td>Kode</td>
			<td>Nama</td>
			<td>Harga</td>
			<td>Aksi</td>
		</tr>
	<?php
		include("Connect.php");
		$Query = mysql_query("SELECT * FROM barang");
		while($data = mysql_fetch_array($Query)){
	?>
	<tr p align="center">
		<td><?php echo $data['kode']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['harga']; ?></td>
		<td>
		<a href="Edit.php?no=<?php echo $data['id'];?>" class="link">Edit |</a>
		<a href="Hapus.php?id=<?php echo $data['id'];?>" class="link">Hapus</a>
	</tr>
	<?php
		}
	?>
	<br/>
	<br/>
		<table width=80% height= 15% align="center" border=0 cellpadding=0 cellspacing=0>
		<tr>
			<br>
			<br>
			<?php 
				session_start();
				if(!isset($_SESSION['username'])) {
				header('location:index.php'); }
				else { $username = $_SESSION['username']; }
				require_once("confirm.php");
				$query = mysql_query("SELECT * FROM login WHERE username = '$username'");
				$hasil = mysql_fetch_array($query);
			?>
		<td colspan=4 align="left"><a href="logout.php"><button class="btn">Log out</button></a></td>
		</tr>
		</table>
	</table>
	</body>
</html>		