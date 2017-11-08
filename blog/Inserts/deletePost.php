<?php
	
	include '../Classes/databaseConnection.php';

	date_default_timezone_set("Europe/Stockholm"); 
	
	//$title = $_POST['select'];
	//$content = $_POST['content'];
	$date = mysqli_real_escape_string($conn, $_POST['select']);
	//update post title, content where DATE=SELECT

	$sql = "DELETE FROM post WHERE date='$date'";
	if (mysqli_query($conn, $sql))
		{
			//echo 'post SUCCESSFULLY deleted!  <a href="http://localhost:8080/blog/admin.php">go back</a>';	
			//echo $sql;
			header("location: ../admin.php?=delete=success");
		}
		else
		{
			echo 'post NOT deleted! It is still there! <a href="http://localhost:8080/blog/admin.php">go back</a>';
		}

?>