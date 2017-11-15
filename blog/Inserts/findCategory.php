<?php

	include '../Classes/databaseConnection.php';
	include '../Classes/getPosts.php';
	include '../Views/viewPosts.php';

	$category = $_POST['select'];
	
	$query = mysqli_query($conn, "SELECT * FROM post WHERE category_fk like '%$category%'");
	$result = mysqli_fetch_array($query);

	if ($result > 0){

	    echo "<p> title: " . $result['title'] . "</p><p> content: " . $result['content'] . "<p>";

	} else {
		echo "No posts is that category!";
	}

?>