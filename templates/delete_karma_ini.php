<?php

include("../../db.php");

$e_id=$_GET["e_id"];



	$sql="DELETE FROM karma_ini WHERE e_id='$e_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		// echo "Record deleted successfully";
  		header("Location:karma_ini.php");
	} 
	else 
	{
  		echo "Error deleting record:" . $conn->error;
	}

?>



