<?php
	
	include '../Classes/databaseConnection.php';

	$tag = mysqli_real_escape_string($conn, $_POST['tag']);

	$sql = "INSERT INTO tags (tag) VALUES ('$tag');";
	//$sql = "INSERT INTO post (title, content, date) VALUES ('$title', '$content', now());";
	if (mysqli_query($conn, $sql))
		{
			//echo 'post SUCCESSFULLY inserted into database <a href="http://localhost:8080/blog/admin.php">go back</a>';
			//echo $sql;
			header("location: ../admin.php?insert=success");

		}
		else
		{
			//echo 'post NOT inserted into database <a href="http://localhost:8080/blog/admin.php">go back</a>';
			header("location: ../admin.php?insert=error");

		}

?>