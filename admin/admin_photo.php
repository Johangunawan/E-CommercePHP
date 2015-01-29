<?php
//session_destroy();
session_start();
error_reporting(0);

if (empty($_SESSION['namauser']) ){
  header('location: login.php');
  //echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else
{
	include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administration</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body class="admin">
<div id="bungkus">
	<div id="top">
		<h1 id="page-title">Shoes Project</h1><br />
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
				<li><a href="#">User</a></li>
			</ul>
		</div><!-- /#left -->
		<div id="right">
			<h2 class="title">Product</h2>
			<a class="action">Add new</a>
			<table cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th class="no">No.</th>
						<th class="thumb">Thumbnail</th>
						<th class="title">Title</th>
						<th class="desc">Description</th>
						<th class="action">Action</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$result = mysqli_query($con,"Select * from gallery");
					
					$i = 1;
					//$totalrow = mysqli_num_rows($result);
	
					while($row = mysqli_fetch_array($result)) // fetch untuk ngambil araay result
					{
						echo "<tr>";
						echo "<td class='no'>" . $i . "</td>";
						echo "<td class='thumb'><img src='gambar/" . $row[3] . "' /></td>";
						echo "<td class='title'>" . $row[1] . "</td>";
						echo "<td class='desc'>" . $row[2] . "</td>";
						echo "<td class='action'><a href='edit_photo.php?id=" . $row[0] . "'>Edit</a> | <a href='doDelete.php?id=" . $row[0] . "'>Delete</a></td>" ;
						echo "</tr>";
						$i++;
					}

				?>
				</tbody>
			</table>
		</div><!-- /#right -->
	</div><!-- /#utama -->
	<div id="copy">
		<span>&copy; 2014 Shoes Project</span>
	</div>
</div><!-- /#bungkus -->
</body>
</html>
<?php
}
?>