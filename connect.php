<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$DB = "test11";
	
	$connect = mysqli_connect($servername, $username, $password, $DB);
		
		if(!$connect)
		{
			die("Error in Connection  ".mysqli_connect_error());
		}

?>