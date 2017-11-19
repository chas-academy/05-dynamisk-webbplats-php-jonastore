<?php
	
	include '../Classes/databaseConnection.php';

	date_default_timezone_set("Europe/Stockholm"); 

	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);
	$category = mysqli_real_escape_string($conn, $_POST['select']);
	$tag = mysqli_real_escape_string($conn, $_POST['selecttag']);


	$query = "INSERT INTO post (title, content, category_fk, tag_fk, date)
	VALUES ('$title', '$content', '$category', '$tag', NOW());";
	if (mysqli_query($conn, $query))
		{

			header("location: ../admin.php?insert=success");

		}
		else
		{
			echo 'post NOT inserted into database <a href="http://localhost:8080/blog/admin.php">go back</a>';
			echo $query;

		}
	
?>