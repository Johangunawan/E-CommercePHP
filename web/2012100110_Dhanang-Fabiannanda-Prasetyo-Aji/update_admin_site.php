<?php
	include("koneksi.php");
	
	$webname = $_POST['title'];
	$tagline = $_POST['tagline'];
	
	$sql = "UPDATE site_info SET Site_name='$webname', Site_tagline='$tagline'";
	mysqli_query($koneksi, $sql);
	header('Location: admin_site.php');
?>