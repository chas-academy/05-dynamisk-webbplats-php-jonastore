<?php
	
	//$conn = mysqli_connect("localhost", "root", "root", "blogDatabase");

	include '../Classes/databaseConnection.php';

	date_default_timezone_set("Europe/Stockholm"); 
	
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);
	$category_id = mysqli_real_escape_string($conn, $_POST['selectcat']);
	$tag_id = mysqli_real_escape_string($conn, $_POST['selecttag']);
	$date = mysqli_real_escape_string($conn, $_POST['select']);
	//update post title, content where DATE=SELECT

	//GET SOME SECURITY IN HERE MAN vvvvvvvvvv DONE?

	$query = "UPDATE post SET 
	title='$title', content='$content', category_fk='$category_id', tag_fk='$tag_id' 
	WHERE date='$date'";
	if (mysqli_query($conn, $query))
		{
			//echo 'post SUCCESSFULLY updated! <a href="http://localhost:8080/blog/admin.php">go back</a>';	
			//echo $sql;
			header("location: ../admin.php?update=success");
		}
		else
		{
			//echo 'post NOT updated <a href="http://localhost:8080/blog/admin.php">go back</a>';
			header("location: ../admin.php?insert=error");
		}

?>