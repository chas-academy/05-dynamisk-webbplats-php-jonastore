<?php
	
	$conn = mysqli_connect("localhost", "root", "root", "blogDatabase");

	include 'databaseConnection.php';

	date_default_timezone_set("Europe/Stockholm"); 
	
	//$title = $_POST['select'];
	//$content = $_POST['content'];
	//$date = $_POST['select'];
	//update post title, content where DATE=SELECT

	$sql = "DELETE FROM post WHERE date='$_POST[select]'";
	if (mysqli_query($conn, $sql))
		{
			echo 'post SUCCESSFULLY deleted!  <a href="http://localhost:8080/blog/admin.php">go back</a>';	
			echo $sql;
		}
		else
		{
			echo 'post NOT deleted! It is still there! <a href="http://localhost:8080/blog/admin.php">go back</a>';
		}

?>