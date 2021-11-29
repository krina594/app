<?php

include("../../db.php");

$c_id=$_GET["c_id"];



	$sql="DELETE FROM contact WHERE c_id='$c_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		// echo "Record deleted successfully";
  		header("Location:contact.php");
	} 
	else 
	{
  		echo "Error deleting record:" . $conn->error;
	}

?>



