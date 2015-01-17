<?php
	require_once("koneksi.php");
	
	$id = $_GET['id'];
	
	$sql = "DELETE FROM gallery WHERE id=$id";
	mysqli_query($koneksi, $sql);
	
	header('Location: admin_photo.php')
?>