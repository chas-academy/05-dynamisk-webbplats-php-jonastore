<?php
	
	include '../Classes/databaseConnection.php';

	date_default_timezone_set("Europe/Stockholm"); 
	
	//$title = $_POST['select'];
	//$content = $_POST['content'];
	$date = mysqli_real_escape_string($conn, $_POST['select']);
	//update post title, content where DATE=SELECT
	$query = "DELETE FROM post WHERE date='$date'";
	$query2 = "DELETE FROM post_comments WHERE comment_fk='$date'";
	if (mysqli_query($conn, $query2))
		{
			//echo 'post SUCCESSFULLY deleted!  <a href="http://localhost:8080/blog/admin.php">go back</a>';	
			//echo $sql;
			header("location: ../admin.php?delete=success");
		}
		else
		{
			echo 'post NOT deleted! It is still there! <a href="http://localhost:8080/blog/admin.php">go back</a>';
		}
	if (mysqli_query($conn, $query))
		{
			//echo 'post SUCCESSFULLY deleted!  <a href="http://localhost:8080/blog/admin.php">go back</a>';	
			//echo $sql;
			header("location: ../admin.php?delete=success");
		}
		else
		{
			echo 'post NOT deleted! It is still there! <a href="http://localhost:8080/blog/admin.php">go back</a>';
		}

?>