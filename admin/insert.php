<?php
ob_start();
session_start();
include("koneksi.php");
$idgaleri = $_GET['id'];
?>

<?php
				$gbr = "";
				$ttl = "";
				$desc = "";
				$result = mysqli_query($con,"Select * from gallery where Id = '$idgaleri'");
				while($row = mysqli_fetch_array($result)) // fetch untuk ngambil araay result
				{
					$id1=$row[0];
					$gbr = $row[3];
					$ttl = $row[1];
					$desc = $row[2];
				}
			?>
<?php
	$sql="";
	$sql= mysqli_query($con,"INSERT INTO `keranjang`(`id`, `title`, `description`, `image`) VALUES ('$id1','$ttl','$desc','$gbr')") or die(mysql_error());
	
	if($sql)
	{
		header('location: index-web.php');
	}
	else
	{
		header('location: index-web.php');
	}
	
?>