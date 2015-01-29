<!DPCTYPE html>
<html>
<head>
	<title>Administrator Login</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body class="login">
<div id="bungkus">
	<div id="top" align="center">
		<h1 id="page-title">Shoes Project</h1>
		<h2 id="sub-title">Make Your Beautiful Step With Us</h2>
		<!--<div id="links">
			<a href="login.php">Login</a>
		</div>-->
	</div><!-- /#top -->
	<div id="login-box">
		<h2 id="login">Administrator Login</h2>
		<div id="form-login">
			<form action="doLogin.php" method="POST">
				<input type="text" name="username" placeholder="Username" />
				<input type="password" name="password" placeholder="Password" />
				<input type="submit" name="login" value="Login" />
			</form>
		</div><!-- /#form-login -->
	</div><!-- /#login-box -->
	<div id="copy">
		<span>&copy; 2014 Shoes Project</span>
	</div>
</div><!-- /#bungkus -->
</body>
</html>