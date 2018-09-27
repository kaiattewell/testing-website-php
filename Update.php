<?php
	$num= $_POST['num'];
	$name= $_POST['name'];
	$type1= $_POST['type1'];
	$type2= $_POST['type2'];
	$gen= $_POST['gen'];
	$leg= $_POST['leg'];
	$con=mysqli_connect("35.233.11.254","root","admin","Pokemon");
	mysqli_query($con,"UPDATE `pokelist` SET Name = '$name', Type1 = '$type1', Type2 = '$type2', Generation = '$gen', Legendary = '$leg' WHERE Number = '$num' ");
	$records=mysqli_query($con,"SELECT * from `pokelist` WHERE Number = '$num' ");
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
