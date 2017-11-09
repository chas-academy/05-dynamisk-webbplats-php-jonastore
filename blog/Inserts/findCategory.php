<?php

	include '../Classes/databaseConnection.php';

	$category = mysqli_real_escape_string($conn, $_POST['select']);


	$sql = "GET * FROM post WHERE category ='$category'"
	
	if (!$sql){
		echo "<p>nothing to see here!</p>"
	}
	else {
		echo //result
	}

?>