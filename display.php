<?php
	
	include 'connect.php';
	
	$sql = "SELECT * FROM info";
	
	$x = mysqli_query($connect,$sql);
	
	if(mysqli_num_rows($x))
	{
		
		echo "<table>";
			
			echo "<tr>";
				echo "<th>Id</th>";
				echo "<th>Name</th>";
				echo "<th>Age</th>";
				echo "<th>Contact Number</th>";
				echo "<th>Date</th>";
			echo "</tr>";

			while($a = mysqli_fetch_assoc($x))
			{
				echo "<tr>";
					echo "<td>".$a['Id']."</td>";
					echo "<td>".$a['Name']."</td>";
					echo "<td>".$a['Age']."</td>";
					echo "<td>".$a['Phone']."</td>";
					echo "<td>".$a['Date']."</td>";
				echo "</tr>";
			}
		
		echo "</table>";
		
		
	}else{
		
		echo "Table is Empty  ".mysqli_error($connect);
	}
	
	mysqli_close($connect);
?>