<?php
//session_destroy();
session_start();
error_reporting(0);

if (empty($_SESSION['namauser']) AND empty($_SESSION["password"])){
  header('location: login.php?err=Please Login');
  //echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else
{
	include("koneksi.php");
	$idgaleri = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shoes Project</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body class="admin">
<div id="bungkus">
	<div id="top">
		<h1 id="page-title">Shoes Project</h1>
		<h2 id="sub-title">Make Your Beautiful Step With Us</h2>
		<div id="links">
			<a href="login.php">Logout</a>
		</div>
	</div><!-- /#top -->
	<div id="utama">
		<div id="left">
			<h2 class="title">Administration</h2>
			<ul id="menu">
				<li><a href="#">Photo</a></li>
				<li><a href="#">Site Information</a></li>
				<li><a href="#">User</a></li>
			</ul>
		</div><!-- /#left -->
		<div id="right">
			<h2 class="title">Edit Photo</h2>
			<?php
				$gbr = "";
				$ttl = "";
				$desc = "";
				$result = mysqli_query($con,"Select * from gallery where Id = '$idgaleri'");
				while($row = mysqli_fetch_array($result)) // fetch untuk ngambil araay result
				{
					$gbr = $row[3];
					$ttl = $row[1];
					$desc = $row[2];
				}
			?>
			<form id="edit-photo" action="doUpdatePhoto.php?id=<?php echo $idgaleri; ?>" method="POST">
				<div id="photo">
					<img src="gambar/<?php echo $gbr; ?>" />
				</div>
				<div id="details">
					<div class="field">
						<label>Title</label>
						<input type="text" name="title" value="<?php echo $ttl; ?>" />
					</div>
					<div class="field">
						<label>Description</label>
						<input type="text" name="desc" value="<?php echo $desc; ?>" />
					</div>
				</div>
				<input type="submit" name="update" value="Update" />
			</form>
		</div><!-- /#right -->
	</div><!-- /#utama -->
	<div id="copy">
		<span>&copy; 2014 ShoesProject</span>
	</div>
</div><!-- /#bungkus -->
</body>
</html>
<?php
}
?>