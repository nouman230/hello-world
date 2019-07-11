<?php 
	session_start ();
	//initializing variables
	$username="";;
	$email="";
	$error =array();
	$conn = mysqli_connect('localhost','root','','practice');
	
	if(isset($_POST['reg_user']))
	{
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$password_1 = mysqli_real_escape_string($conn,$_POST['password_1']);
		
		if(empty ($username)) {
			array_push($error, "Username is required");
		}
		if(empty ($email)){
			array_push($error,"Email is required");
		}
		if(empty($password)){
			array_push($error,"Password is required");
		}
		if($password != password_1)
		{
			array_push($error, "Password do not matched")
		}
		$user_check_query="SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
		
		$result=mysqli_query($conn,$user_check_query);
		$user=mysqli_fetch_assoc($result);
		if ($user['username'] == $username)
		{
			array_push($error ,"Username already exists");
			if ($user['email'] == $email)
			{
				array_push($error, "Email aready exist");
			}
		}
		if(count($error) == 0)
		{
			$password = md5 ($password);
			$query = "INSERT INTO user (username ,email,password)
			VALUES('$username', '$email','$password')";
			mysqli_query($conn , $query);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are logged in ";
		header('location:index.php');}
	}
?>