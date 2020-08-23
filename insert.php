<?php
	
	include 'connect.php';
	
	if($_SERVER ['REQUEST_METHOD'] === 'POST')
	{
		$n = $_POST['n'];
		$a = $_POST['a'];
		$p = $_POST['p'];
		
	}

	$sql = "INSERT INTO info (Name,Age,Phone,Date)
			VALUES('$n','$a','$p',CURRENT_TIMESTAMP)";
			
	if(mysqli_query($connect,$sql))
	{
		echo "Data Inserted Successfully";
	}else{
		echo "Invalid Query  ".mysqli_error($connect);
	}		
	
	mysqli_close($connect);
?>