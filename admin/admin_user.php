<!DOCTYPE html>
<html>
<head>
	<title>Administration Shoes Project</title>
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
				<li><a href="#">User</a></li>
			</ul>
		</div><!-- /#left -->
		<div id="right">
			<h2 class="title">User Administration</h2>
			<a class="action">Add new</a>
			<table cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th class="no">No.</th>
						<th class="thumb">Username</th>
						<th class="action">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="no">1</td>
						<td class="title">admin</td>
						<td class="action"><a href="edit_photo.php">Edit</a> | <a href="delete_photo.php">Delete</a></td>
					</tr>
					<tr>
						<td class="no">2</td>
						<td class="title">editor</td>
						<td class="action"><a href="edit_photo.php">Edit</a> | <a href="delete_photo.php">Delete</a></td>
					</tr>
					<tr>
						<td class="no">3</td>
						<td class="title">user</td>
						<td class="action"><a href="edit_photo.php">Edit</a> | <a href="delete_photo.php">Delete</a></td>
					</tr>
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