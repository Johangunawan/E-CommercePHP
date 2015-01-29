<?php
	include("koneksi.php");
	include("function.php");
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	/*echo $username ."<br/>";
	echo $password;*/
	
	$sql = "SELECT * FROM user WHERE username = '$username'";
	$hasil = mysqli_query($koneksi, $sql);
	
	/*$pass = pass_crypt($password);
	echo $pass;
	
	$upass = mysqli_fetch_assoc($hasil);
	echo $upass['password'];*/
	
	if(mysqli_num_rows($hasil)){
		$pass = pass_crypt($password);
		$upass = mysqli_fetch_assoc($hasil);
		if($pass == $upass['password']){
			header('Location: admin.php');
		}
		else{
			header('Location: login.php');
		}
	}
	else{
		header('Location: login.php');
	}
?>