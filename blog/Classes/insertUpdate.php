<?php
	
	$conn = mysqli_connect("localhost", "root", "root", "blogDatabase");

	include 'databaseConnection.php';

	date_default_timezone_set("Europe/Stockholm"); 
	
	//$title = $_POST['select'];
	//$content = $_POST['content'];
	//$date = $_POST['date'];
	//update post title, content where DATE=SELECT

	$sql = "UPDATE post SET title='$_POST[title]', content='$_POST[content]' WHERE date='$_POST[select]'";
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