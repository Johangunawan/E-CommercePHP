<?php
	include("koneksi.php");
	
	$judul = $_POST['judul'];
	$ket = $_POST['ket'];
	
	$id = $_GET['id'];
	
	$sql = "UPDATE gallery SET title='$judul', description='$ket' WHERE id=$id";
	mysqli_query($koneksi, $sql);
	header('Location: admin_photo.php');
?>