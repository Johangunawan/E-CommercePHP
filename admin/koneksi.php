<html>
<head>
	<title></title>
	<script></script>
	<style></style>
</head>
<body>
<?php
	// localhost, id, pass, nama databes
	$con=mysqli_connect("localhost","root","","maria");
	
	//print("Buka koneksi ... <br/>");
	
	// check connection
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to Mysql: ", mysqli_connect_error();
	}
	else
	{
		//print("Berhasil .... <br/>");
	}
	
	//print("tutup koneksi ... <br>");
	//mysqli_close($con);
	
?>	
</body>
</html>


