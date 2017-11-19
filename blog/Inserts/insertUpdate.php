 <?php
	

	include '../Classes/databaseConnection.php';
	include '../Classes/getPosts.php';
	include '../Views/showCorrespondingContent.php';
	include '../Views/updatePosts.php';
	include '../Views/viewPosts.php';

	date_default_timezone_set("Europe/Stockholm"); 
	
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);
	$category_id = mysqli_real_escape_string($conn, $_POST['selectcat']);
	$tag_id = mysqli_real_escape_string($conn, $_POST['selecttag']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);


	$query = "UPDATE post SET 
	title='$title', content='$content', category_fk='$category_id', tag_fk='$tag_id' 
	WHERE date='$date'";
	if (mysqli_query($conn, $query))
		{

			header("location: ../admin.php?update=success");
		}
		else
		{
			header("location: ../admin.php?insert=error");
		}

?>