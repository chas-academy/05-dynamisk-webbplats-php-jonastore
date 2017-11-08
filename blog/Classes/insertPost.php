<?php
	
	$conn = mysqli_connect("localhost", "root", "root", "blogDatabase");

	include 'databaseConnection.php';

	date_default_timezone_set("Europe/Stockholm"); 
	
	$title = $_POST['title'];
	$content = $_POST['content'];

	$sql = "INSERT INTO post (title, content, date) VALUES ('$title', '$content', now());";
	if (mysqli_query($conn, $sql))
		{
			echo 'post SUCCESSFULLY inserted into database <a href="http://localhost:8080/blog/admin.php">go back</a>';
			echo $sql;
		}
		else
		{
			echo 'post NOT inserted into database <a href="http://localhost:8080/blog/admin.php">go back</a>';
		}

?>