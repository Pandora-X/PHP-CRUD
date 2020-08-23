<?php
	
	
	#HTML PHP Connection
	
		
		include 'connect.php';
	
	
		if($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			
			$tn = $_POST['ct'];
			
			$n1 = $_POST['n1'];
			$t1 = $_POST['t1'];
			$l1 = $_POST['l1'];
			$a1 = $_POST['a1'];
			
			$n2 = $_POST['n2'];
			$t2 = $_POST['t2'];
			$l2 = $_POST['l2'];
			$a2 = $_POST['a2'];
			
			$n3 = $_POST['n3'];
			$t3 = $_POST['t3'];
			$l3 = $_POST['l3'];
			$a3 = $_POST['a3'];
			
			$n4 = $_POST['n4'];
			$t4 = $_POST['t4'];
			$l4 = $_POST['l4'];
			$a4 = $_POST['a4'];
			
			
			$sql ="CREATE TABLE $tn(
					
					$n1 $t1($l1) $a1,
					$n2 $t2($l2) $a2,
					$n3 $t3($l3) $a3,
					$n4 $t4($l4) $a4,
					Date TIMESTAMP
			)";
			
			
			if(mysqli_query($connect,$sql))
			{
				echo "Table Created Successfully";
			}else{
				echo "Invalid Query  ".mysqli_error($connect);
			}
			
			mysqli_close($connect);
			
		}
	
	echo "<br>";
	echo "<br>";
	echo "<a href='insert.html' target='_blank'>Insert Data</a>";
?>