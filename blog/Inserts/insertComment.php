<?php
	
	include '../Classes/databaseConnection.php';

	date_default_timezone_set("Europe/Stockholm"); 

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$message = mysqli_real_escape_string($conn, $_POST['message']);

	$query = "INSERT INTO comments (name, message, date) VALUES ('$name', '$message', now());";
	//$sql = "INSERT INTO post (title, content, date) VALUES ('$title', '$content', now());";
	if (mysqli_query($conn, $query))
		{
			//echo 'post SUCCESSFULLY inserted into database <a href="http://localhost:8080/blog/admin.php">go back</a>';
			//echo $sql;
			header("location: ../index.php?insert=success");

		}
		else
		{
			echo 'post NOT inserted into database <a href="http://localhost:8080/blog/admin.php">go back</a>';
			echo $query;
			//header("location: ../index.php?insert=error");

		}

?>