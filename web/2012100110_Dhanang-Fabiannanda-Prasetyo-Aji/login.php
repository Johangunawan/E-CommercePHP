<?php
	include("koneksi.php");	
	$sql2 = "SELECT * FROM site_info";
	$hasil2 = mysqli_query($koneksi, $sql2);
	$baris2 = mysqli_fetch_assoc($hasil2);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kalbis Photo Gallery</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body class="admin">
<div id="bungkus">
	<div id="top">
		<h1 id="page-title"><?php echo htmlentities($baris2['Site_name']); ?></h1>
		<h2 id="sub-title"><?php echo htmlentities($baris2['Site_tagline']); ?></h2>
		<div id="links">
			<a href="login.php">Login</a>
		</div>
	</div><!-- /#top -->
	<div id="login-box">
		<h2 id="login">Administrator Login</h2>
		<div id="form-login">
			<form action="login_proses.php" method="POST">
				<input type="text" name="username" placeholder="Username" />
				<input type="password" name="password" placeholder="Password" />
				<input type="submit" name="login" value="Login" />
			</form>
		</div><!-- /#form-login -->
	</div><!-- /#login-box -->
	<div id="copy">
		<span>&copy; 2014 Kalbis Institute</span>
	</div>
</div><!-- /#bungkus -->
</body>
</html>