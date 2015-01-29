<?php
	include("koneksi.php");	
	require("function.php");
	$sql="SELECT * FROM user";
	$hasil = mysqli_query($koneksi, $sql);
	
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
			<h2 class="title">User Administration</h2>
			<a href="add_user.php" class="action">Add new</a>
			<table cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th class="no">No.</th>
						<th class="thumb">Username</th>
						<th class="action">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						while($baris = mysqli_fetch_assoc($hasil)) {
					?>
						<tr>
							<td class="no"><?php echo htmlentities ($baris["id"]);?></td>
							<td class="title"><?php echo htmlentities ($baris["username"]);?></td>
							<td class="action"><a href="edit_user.php?id=<?php echo urldecode($baris["id"]);?>">Edit</a> | <a href="delete_user.php?id=<?php echo urldecode($baris["id"]);?>">Delete</a></td>
						</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div><!-- /#right -->
	</div><!-- /#utama -->
	<div id="copy">
		<span>&copy; 2014 Kalbis Institute</span>
	</div>
</div><!-- /#bungkus -->
</body>
</html>