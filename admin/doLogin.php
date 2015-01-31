<?php
ob_start();
session_start();
?>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	include("koneksi.php");	
	$sql= mysqli_query($con,"select * from user where Username = '$_POST[username]' and Password = '$_POST[password]'");
	
	//$hasil = mysqli_fetch_array($sql);
	
	if ($hasil = mysqli_fetch_array($sql))
	{
		//echo "berhasil";
		//session_start();
		  
		  $_SESSION["namauser"]     = '$_POST[username]';
		  //$_SESSION["password"]     = "";
		  header('location: admin.php');
	}
	else
	{
		
		header('location: login.php');
	}
	
	
?>

</body>
</html>