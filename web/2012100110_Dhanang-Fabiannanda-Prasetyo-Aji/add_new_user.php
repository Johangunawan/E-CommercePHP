<?php
	include("koneksi.php");
	require_once("function.php");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$pass = pass_crypt($password);
	
	$sql = "INSERT INTO user (username, password) VALUES ('$username', '$pass')";
	mysqli_query($koneksi, $sql);
	header('Location: admin_user.php');
?>