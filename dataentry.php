<html>
<?php
	$search= $_POST['search'];
	$con=mysqli_connect("35.233.11.254","root","admin","Pokemon");
	$records=mysqli_query($con,"SELECT * from `pokelist` WHERE Name = '$search' ");
	//header("location:myfriend.php");
	
		while($rec=mysqli_fetch_array($records)){
		echo "<table border='1'>";
		
		echo "<tr>";
		echo "<td>"."Number: "."</td>"."<td>".$rec[0]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Name: "."</td>"."<td>".$rec[1]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Type: "."</td>"."<td>".$rec[2]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Secondary Type: "."</td>"."<td>".$rec[3]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Generation: "."</td>"."<td>".$rec[4]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>"."Legendary: "."</td>"."<td>".$rec[5]."</td>";
		echo "</tr>";
			}
	echo "</table>";
	

?>


	
	

</html>
