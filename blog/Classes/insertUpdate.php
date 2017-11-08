<?php
	
	$conn = mysqli_connect("localhost", "root", "root", "blogDatabase");

	include 'databaseConnection.php';

	date_default_timezone_set("Europe/Stockholm"); 
	
	$title = $_POST['select'];
	$content = $_POST['content'];

	$sql = "UPDATE post SET title='$_POST[select]', content='$_POST[content]' WHERE title='$_POST[select]'";
	if (mysqli_query($conn, $sql))
		{
			echo 'post SUCCESSFULLY updated! <a href="http://localhost:8080/blog/admin.php">go back</a>';	
			echo $sql;
		}
		else
		{
			echo 'post NOT updated <a href="http://localhost:8080/blog/admin.php">go back</a>';
		}

?>