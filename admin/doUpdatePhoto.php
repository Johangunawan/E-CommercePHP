<?php
ob_start();
session_start();
?>

<?php
	include("koneksi.php");
	$idgaleri=$_GET['id'];
	$titel=$_POST['title'];
	$deskripsi=$_POST['desc'];
	$sql= mysqli_query($con,"update gallery set Title = '$titel', Description = '$deskripsi' where Id = '$idgaleri'") or die(mysql_error());
	
	if($sql)
	{
		//echo "update gallery set Title = '$titel', Description = '$deskripsi' where Id = '$idgaleri'" ;
		header('location: admin_photo.php');
	}
	else
	{
		//echo $sql ;
		header('location: admin_photo.php');
	}
	/*
	echo $idgaleri ;
	echo $titel ;
	echo $deskripsi ;*/
	
?>