<?php 
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$name = "kuiswebpro";
	
	$koneksi = mysqli_connect($host, $user, $pass, $name);
	
	if(mysqli_connect_errno()) {
		echo "Koneksi Gagal:";
		echo mysqli_connect_error();
		echo "(" . mysqli_connect_errno() . ")";
		die();
	} else {
		//echo "Koneksi Database Berhasil.";
	}
?>