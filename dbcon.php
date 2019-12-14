<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "ecorner_web_hashiq_csd55";
	
	//create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//print_r($conn);
	
	if (!$conn)
	{
		die("Connection Failed : -   " . mysqli_connect_error());
		//die("Connection Failed");
	}
?>