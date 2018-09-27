<html>

<?php
	$search= $_POST['search'];
	$con=mysqli_connect("35.233.11.254","root","admin","Pokemon");
	$records=mysqli_query($con,"Delete from `pokelist` WHERE Name = '$search' ");
	//header("location:myfriend.php");
	
	

?>
 
The pokemon has been deleted.
</html>
