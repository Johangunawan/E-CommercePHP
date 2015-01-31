<?php
ob_start();
session_start();
?>

<?php
	include("koneksi.php");
	$nama=$_POST['name'];
	$tag=$_POST['tagline'];
	$sql= mysqli_query($con,"update site_info set Site_name = '$nama', Site_tagline = '$tag'") or die(mysql_error());
	
	if($sql)
	{
		//echo "update site_info set Site_name = '$nama', Site_tagline = '$tag'" ;
		header('location: admin_site.php');
	}
	else
	{
		//echo "update site_info set Site_name = '$nama', Site_tagline = '$tag'" ;
		header('location: admin_site.php');
	}
	/*
	echo $idgaleri ;
	echo $titel ;
	echo $deskripsi ;*/
	
?>