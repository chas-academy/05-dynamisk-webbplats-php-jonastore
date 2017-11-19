<?php
	
	include '../Classes/databaseConnection.php';

	date_default_timezone_set("Europe/Stockholm"); 
	
	
	$date = mysqli_real_escape_string($conn, $_POST['select']);
	$query = "DELETE FROM post WHERE date='$date'";
	$query2 = "DELETE FROM post_comments WHERE comment_fk='$date'";
	if (mysqli_query($conn, $query2))
		{

			header("location: ../admin.php?delete=success");
		}
		else
		{
			echo 'post NOT deleted! It is still there! <a href="http://localhost:8080/blog/admin.php">go back</a>';
		}
	if (mysqli_query($conn, $query))
		{
			header("location: ../admin.php?delete=success");
		}
		else
		{
			echo 'post NOT deleted! It is still there! <a href="http://localhost:8080/blog/admin.php">go back</a>';
		}

?>