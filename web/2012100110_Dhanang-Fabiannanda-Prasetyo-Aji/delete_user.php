<?php
	include("koneksi.php");$id = $_GET['id'];
	
	$sql = "DELETE FROM user WHERE id=$id";
	mysqli_query($koneksi, $sql);
	header('Location: admin_user.php');
?>