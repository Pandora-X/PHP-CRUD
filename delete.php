<?php
	
	include 'connect.php';
	
	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		$id = $_POST['id'];
		
	}

	$sql = "DELETE FROM info where Id = $id";
	
	if(mysqli_query($connect,$sql))
	{
		echo "Row $id Deleted Successfully";
	}else{
		echo "Invalid Query Or Row doesn't exists ".mysqli_error($connect);
	}

	mysqli_close($connect);
?>