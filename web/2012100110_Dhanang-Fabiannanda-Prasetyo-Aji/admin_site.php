<?php
	include("koneksi.php");
	
	$sql = "SELECT * FROM site_info";
	$hasil = mysqli_query($koneksi, $sql);
	$baris = mysqli_fetch_assoc($hasil)
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
		<h1 id="page-title"><?php echo htmlentities($baris['Site_name']); ?></h1>
		<h2 id="sub-title"><?php echo htmlentities($baris['Site_tagline']); ?></h2>
		<div id="links">
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
			<h2 class="title">Edit Photo</h2>
			<form id="edit-site" action="update_admin_site.php" method="POST">
				<div id="details">
					<div class="field">
						<label>Website Name</label>
						<input type="text" name="title" value="<?php echo htmlentities($baris['Site_name']); ?>" />
					</div>
					<div class="field">
						<label>Tagline</label>
						<input type="text" name="tagline" value="<?php echo htmlentities($baris['Site_tagline']); ?>" />
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