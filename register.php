<?php include('server.php');?> 
<!DOCTYPE html>
<html>
<head>
	<title>User registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>


<form method="post" action="register.php">
	<?php include('errors.php'); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="Username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="text" name="Email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="Password" name="Password_1">
	</div>
	<div class="input-group">
		<label>Confirm Password</label>
		<input type="Password" name="Password_2">
	</div>
	<div class="input-group">
		<button type="submit" name="register" class="btn">Register</button>
	</div>
	<p>
		Have an account already? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>
                   