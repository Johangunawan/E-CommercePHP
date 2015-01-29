<?php
	include("koneksi.php");	
	$sql = "SELECT * FROM gallery";
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
			<h2 class="title">Photo Administration</h2>
			<a class="action" href="add_new.php">Add new</a>
			<table cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th class="no">No.</th>
						<th class="thumb">Thumbnail</th>
						<th class="title">Title</th>
						<th class="desc">Description</th>
						<th class="action">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						while($baris = mysqli_fetch_assoc($hasil)) {
					?>
						<tr>
							<td class="no"><?php echo htmlentities($baris["id"]); ?></td>
							<td class="thumb"><img src="<?php echo htmlentities($baris["image"]); ?>" /></td>
							<td class="title"><?php echo htmlentities($baris["title"]);?></td>
							<td class="desc"><?php echo htmlentities($baris["description"]);?></td>
							<td class="action"><a href="edit_photo.php?id=<?php echo urldecode($baris["id"]);?>">Edit</a> | <a href="delete_photo.php?id=<?php echo urldecode($baris["id"]);?>">Delete</a></td>
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