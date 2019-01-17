<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<?php 
	session_start();
	if(isset($_SESSION['username'])) {
	header('location:tampil.php'); }
	require_once("confirm.php");
?>
<body>
	<br/>
	<br/>
	<center><h3>LOGIN</h3></center>
	<div>
	<img src="images.jpeg" class="gmbr">
	</div>
	<br/>
	<div class="login">
	<br/>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>
</html>