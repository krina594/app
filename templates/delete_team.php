<?php

include("../../db.php");

$t_id=$_GET["t_id"];



	$sql="DELETE FROM team WHERE t_id='$t_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		// echo "Record deleted successfully";
  		header("Location:team.php");
	} 
	else 
	{
  		echo "Error deleting record:" . $conn->error;
	}

?>



