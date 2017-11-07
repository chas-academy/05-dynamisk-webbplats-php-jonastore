<?php

/*$conn = mysqli_connect("localhost", "root", "root", "blogDatabase"); // hostname, username and password
if (!$conn) {
    echo 'no connection, hombre! ';
}
else {
    echo 'connection successful! ';
}

include 'databaseConnection.php';*/

date_default_timezone_set("Europe/Stockholm"); 


$title = $_POST['title'];
$content = $_POST['content'];

class InsertPost extends Database{

	public function insert()
	{
		$sql = "INSERT INTO post (title, content, date) VALUES ('$title', '$content', now())";
		if (!mysqli_query($conn, $sql))
		{
			echo 'post NOT inserted into database <a href="http://localhost:8080/blog/admin.php">go back</a>';
		}
		else
		{
			echo 'post SUCCESSFULLY inserted into database <a href="http://localhost:8080/blog/admin.php">go back</a>';
		}

	}
	
	
}



?>
