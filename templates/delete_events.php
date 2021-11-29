<?php

include("../../db.php");

$ev_id=$_GET["ev_id"];



	$sql="DELETE FROM events WHERE ev_id='$ev_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		// echo "Record deleted successfully";
  		header("Location:events.php");
	} 
	else 
	{
  		echo "Error deleting record:" . $conn->error;
	}

?>



