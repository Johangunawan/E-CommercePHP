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
			<a href="login.php">Login</a>
		</div>
	</div><!-- /#top -->
	<div id="pic-box">
	<?php
		while($baris = mysqli_fetch_assoc($hasil)){
			?>
				<div class="kotak">
					<img src="<?php echo htmlentities($baris['image']); ?>" />
					<span class="title"><?php echo htmlentities($baris['title']); ?></span>
					<span class="desc"><?php echo htmlentities($baris['description']); ?></span>
				</div>
			<?php
		}
	?>
	</div><!-- /#pic-box -->
	<div id="copy">
		<span>&copy; 2014 Kalbis Institute</span>
	</div>
</div><!-- /#bungkus -->
</body>
</html>