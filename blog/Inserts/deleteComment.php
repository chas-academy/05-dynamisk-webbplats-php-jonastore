<?php
	
	include '../Classes/databaseConnection.php';

	$date = $_POST['date'];

	$query = "DELETE FROM comments WHERE postdate='$date'";
	$query2 = "DELETE FROM post_comments WHERE comment_fk='$date'";
	if (mysqli_query($conn, $query2))
		{
			header("location: ../index.php?delete=success");
		}
		else
		{
			echo 'post NOT deleted! It is still there! <a href="http://localhost:8080/blog/index.php">go back</a>';
		}
	if (mysqli_query($conn, $query))
		{
			
			header("location: ../index.php?delete=success");
		}
		else
		{
			echo 'post NOT deleted! It is still there! <a href="http://localhost:8080/blog/index.php">go back</a>';
		}

?>