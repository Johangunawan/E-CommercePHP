<!DOCTYPE html>
<html>
<head>
	<title>Administration Shoes Project</title>
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
			<h2 class="title">Edit Photo</h2>
			<form id="edit-site" action="doAdminSite.php" method="POST">
				<div id="details">
					<div class="field">
						<label>Website Name</label>
						<input type="text" name="name" value="Kalbis Gallery" />
					</div>
					<div class="field">
						<label>Tagline</label>
						<input type="text" name="tagline" value="Lorem ipsum dolor sit amet" />
					</div>
				</div>
				<input type="submit" name="update" value="Update" />
			</form>
		</div><!-- /#right -->
	</div><!-- /#utama -->
	<div id="copy">
		<span>&copy; 2014 Shoes Project</span>
	</div>
</div><!-- /#bungkus -->
</body>
</html>