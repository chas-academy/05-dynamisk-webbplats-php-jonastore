<?php
	
	include '../Classes/databaseConnection.php';

	date_default_timezone_set("Europe/Stockholm"); 

	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);
	$category = mysqli_real_escape_string($conn, $_POST['select']);

	//gör något nedan med TAGS och CATEGORIES. Lös innan onsdag nästa vecka!!
	//$category = mysqli_real_escape_string($conn, $_POST['select']);
	//$tag = mysqli_real_escape_string($conn, $_POST['tag']);
	//$sql = "INSERT INTO posts (title, content, date, category, tag) VALUES ('$title', '$content', now(), '$tag', '$category')";
	//skriv en $join som du sedan lägger in i $sql??

	$query = "INSERT INTO post (title, content, category_fk, date) VALUES ('$title', '$content', '$category', NOW());";
	//$sql = "INSERT INTO post (title, content, date) VALUES ('$title', '$content', now());";
	if (mysqli_query($conn, $query))
		{
			//echo 'post SUCCESSFULLY inserted into database <a href="http://localhost:8080/blog/admin.php">go back</a>';
			//echo $sql;
			header("location: ../admin.php?insert=success");

		}
		else
		{
			echo 'post NOT inserted into database <a href="http://localhost:8080/blog/admin.php">go back</a>';
			echo $query;
			//header("location: ../admin.php?insert=error");

		}

?>