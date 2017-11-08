<?php
	
	//$conn = mysqli_connect("localhost", "root", "root", "blogDatabase");

	include '../Classes/databaseConnection.php';

	date_default_timezone_set("Europe/Stockholm"); 
	
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);
	$date = mysqli_real_escape_string($conn, $_POST['select']);
	//update post title, content where DATE=SELECT

	//GET SOME SECURITY IN HERE MAN vvvvvvvvvv DONE?

	$sql = "UPDATE post SET title='$title', content='$content' WHERE date='$date'";
	if (mysqli_query($conn, $sql))
		{
			//echo 'post SUCCESSFULLY updated! <a href="http://localhost:8080/blog/admin.php">go back</a>';	
			//echo $sql;
			header("location: ../admin.php?=update=success");
		}
		else
		{
			echo 'post NOT updated <a href="http://localhost:8080/blog/admin.php">go back</a>';
		}

?>