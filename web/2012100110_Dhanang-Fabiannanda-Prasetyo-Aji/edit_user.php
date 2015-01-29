<?php
	include("koneksi.php");
	$id = $_GET['id'];
	$sql = "SELECT * FROM user WHERE id=$id";
	$hasil = mysqli_query($koneksi, $sql);
	$baris = mysqli_fetch_assoc($hasil);
	
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
			<a href="login.html">Logout</a>
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
			<h2 class="title">Edit User</h2>
			<form id="edit-site" action="update_user.php?id=<?php echo urldecode($baris['id']); ?>" method="POST">
				<div id="details">
					<div class="field">
						<label>Username</label>
						<input type="text" name="username" value="<?php echo htmlentities($baris['username']); ?>" />
					</div>
					<div class="field">
						<label>Password</label>
						<input type="password" name="password" />
					</div>
					<div class="field">
						<label>Repeat Password</label>
						<input type="password" name="repassword" />
					</div>
				</div>
				<input type="submit" name="update" value="Update" />
			</form>
		</div><!-- /#right -->
	</div><!-- /#utama -->
	<div id="copy">
		<span>&copy; 2014 Kalbis Institute</span>
	</div>
</div><!-- /#bungkus -->
</body>
</html>