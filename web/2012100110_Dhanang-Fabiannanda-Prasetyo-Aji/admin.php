<?php
	include("koneksi.php");	
	$sql = "SELECT * FROM user";
	$hasil = mysqli_query($koneksi, $sql);
	
	$sql3 = "SELECT * FROM gallery";
	$hasil3 = mysqli_query($koneksi, $sql3);
	
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
			<span id="username">admin</span> | 
			<a href="login.php">Logout</a>
		</div>
	</div><!-- /#top -->
	<div id="utama">
		<div id="left">
			<h2 class="title">Administration</h2>
			<ul id="menu">
				<li><a href="admin_photo.php">Photo</a></li>
				<li><a href="admin_site.php">Site Information</a></li>
				<li><a href="admin_user.php">User</a></li>
			</ul>
		</div><!-- /#left -->
		<div id="right">
			<h2 class="title">Dashboard</h2>
			<div class="info">
			<?php
				$jumlahPhoto = 0;
				while($baris3 = mysqli_fetch_assoc($hasil3)){
					$jumlahPhoto++;
				}
			?>
				<span>Number of Photo(s): <?php echo htmlentities($jumlahPhoto);?></span>
			<?php
				$jumlahUser = 0;
				while($baris = mysqli_fetch_assoc($hasil)){
					$jumlahUser++;
				}
			?>
				<span>Number of User(s): <?php echo htmlentities($jumlahUser);?></span>
			</div>
		</div><!-- /#right -->
	</div><!-- /#utama -->
	<div id="copy">
		<span>&copy; 2014 Kalbis Institute</span>
	</div>
</div><!-- /#bungkus -->
</body>
</html>