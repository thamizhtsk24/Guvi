<!DOCTYPE html>
<html>
<head>
	<title>User registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>login</h2>
	</div>


<form method="post" action="login.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="Username">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="Password" name="Password_1">
	</div>
	
	<div class="input-group">
		<button type="submit" name="login" class="btn">Login</button>
	</div>
	<p>
		Not having account? <a href="registration.php">Sign up</a>
	</p>
</form>
</body>
</html>
                   