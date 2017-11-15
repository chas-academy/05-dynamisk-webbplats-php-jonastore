<?php
	
	include '../Classes/databaseConnection.php';
	
	//$title = $_POST['select'];
	//$content = $_POST['content'];
	$date = $_POST['date'];
	//update post title, content where DATE=SELECT

	$query = "DELETE FROM comments WHERE postdate='$date'";
	if (mysqli_query($conn, $query))
		{
			//echo 'post SUCCESSFULLY deleted!  <a href="http://localhost:8080/blog/index.php">go back</a>';	
			//echo $query;
			header("location: ../index.php?delete=success");
		}
		else
		{
			echo 'post NOT deleted! It is still there! <a href="http://localhost:8080/blog/index.php">go back</a>';
		}

?>