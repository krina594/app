<?php

include("../../db.php");

$do_id=$_GET["do_id"];



	$sql="DELETE FROM donars WHERE do_id='$do_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		// echo "Record deleted successfully";
  		header("Location:donar.php");
	} 
	else 
	{
  		echo "Error deleting record:" . $conn->error;
	}

?>



