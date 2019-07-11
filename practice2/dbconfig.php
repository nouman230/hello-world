<?php
	$Servername='localhost';
	$Username='root';
	$Password='';
	$dbname='practice';
	$conn= mysqli_connect($Servrname,$Username,$Password,$dbaname);
	if(!$conn)
	{
		die("connection failed :" .mysqli_connect_error);
	}	
	error_reporting (0);
?>