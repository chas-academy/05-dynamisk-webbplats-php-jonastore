<?php

	include '../Classes/databaseConnection.php';

	date_default_timezone_set("Europe/Stockholm"); 
	
	$id = mysqli_real_escape_string($conn, $_POST['title']);
	$tag = mysqli_real_escape_string($conn, $_POST['tag']);
	//update post title, content where DATE=SELECT

	//GET SOME SECURITY IN HERE MAN vvvvvvvvvv DONE?

	$query = "UPDATE tags SET tag_id='$id' WHERE tag='$tag'";
	if (mysqli_query($conn, $query))
		{
			//echo 'post SUCCESSFULLY updated! <a href="http://localhost:8080/blog/admin.php">go back</a>';	
			//echo $sql;
			header("location: ../admin.php?update=success");
		}
		else
		{
			//echo 'post NOT updated <a href="http://localhost:8080/blog/admin.php">go back</a>';
			header("location: ../admin.php?insert=error");
		}



?>