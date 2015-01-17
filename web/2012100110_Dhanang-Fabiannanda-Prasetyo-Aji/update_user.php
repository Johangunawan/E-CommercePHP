<?php
	include("koneksi.php");
	require_once("function.php");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	
	$id = $_GET['id'];
	
	if($password == $repassword){
		$pass = pass_crypt($password);
		$sql = "UPDATE user SET username = '$username', password='$pass' WHERE id=$id";
		mysqli_query($koneksi, $sql);
		header('Location: admin_user.php');
	}
	else{
		
	}
?>