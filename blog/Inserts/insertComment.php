<?php
	
	include '../Classes/databaseConnection.php';

	date_default_timezone_set("Europe/Stockholm"); 

	//$name = mysqli_real_escape_string($conn, $_POST['name']);
	$message = mysqli_real_escape_string($conn, $_POST['message']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);

	//$query = "UPDATE categories SET message='$message' WHERE date='$date'";
	$query = "INSERT INTO comments (message, postdate) VALUES ('$message', '$date')";
	//$sql = "INSERT INTO post (title, content, date) VALUES ('$title', '$content', now());";
	if (mysqli_query($conn, $query))
		{
			//echo 'post SUCCESSFULLY inserted into database <a href="http://localhost:8080/blog/index.php">go back</a>';
			//echo $sql;
			header("location: ../index.php?insert=success");

		}
		else
		{
			$queryEdit = "UPDATE comments SET message='$message' WHERE postdate='$date'";
			if (mysqli_query($conn, $queryEdit)){
				header("location: ../index.php?insert=success");
			} else {
				echo 'Update not inserted! <a href="http://localhost:8080/blog/index.php">go back</a>';
				echo $queryEdit;
				//header("location: ../index.php?insert=error");
			}
			//echo 'You have already commented on this post! <a href="http://localhost:8080/blog/index.php">go back</a>';
			//echo $query;
			//header("location: ../index.php?insert=error");

		}

?>