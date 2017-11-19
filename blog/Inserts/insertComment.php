<?php
	
	include '../Classes/databaseConnection.php';

	date_default_timezone_set("Europe/Stockholm"); 

	$message = mysqli_real_escape_string($conn, $_POST['message']);
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);

	$query = "INSERT INTO comments (message, postdate) VALUES ('$message', '$date')";
	$query2 = "INSERT INTO post_comments (comment_fk, post_fk) VALUES ('$date', '$id')";
	if (mysqli_query($conn, $query))
		{

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
			}

			header("location: ../index.php?insert=error");

		}
	if (mysqli_query($conn, $query2))
		{
			
			header("location: ../index.php?insert=success");

		}
		else
		{
			
			header("location: ../index.php?insert=error");

		}
	
?>