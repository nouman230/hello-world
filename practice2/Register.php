<?php
include_once ('dbconfig.php');?>
<html>
	<head>
		<title>Practice Session
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="header">
			<h2>Register</h2>
		</div>
		<form methd="post" action="index.php">
			<?php
			include ('error.php');?>
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" value="<?php echo $username;?>">
				</div><div class="input-group">
				<label>Email</label>
				<input type="email" name="email" value="<?php echo $email;?>">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password" value=<?php echo $password?>>
			</div>
			<div class="input-group">
				<label>Confirm Password</label>
				<input type="password" name="password_1">
			</div>
			<div class ="input-group">
				<button type ="submit" class="btn" name ="reg_user">Register</button>
			</div>
			<p>
				Already a member?<a href="login.php">Sign in </a>
			</p>
		</form>
	</body>		</html>
	
		