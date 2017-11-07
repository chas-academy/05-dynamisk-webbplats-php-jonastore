<?php
	
	include 'databaseConnection.php';
    include 'getPosts.php';
    include 'viewPosts.php';
    include 'post.php';

?>

<!DOCTYPE html>
<html>
<head>
	    <link rel="stylesheet" type="text/css" href="style/style1.css">

	<title>Admin page</title>
</head>
<body>
	<section id="mainContainer">
				<h1>Write a blog post! 寫博文！</h1>
		<article id="mainContent">
				<a href="http://localhost:8080/blog/">go back</a>
			<form action="post.php" method="post"> <!--change action=""-->
				<input type="text" name="title" placeholder="Post title">
				<input id="textInput" type="text" name="content" placeholder="Post content">
        		<input type="submit" name="submit" value="insert"> 
			</form>
		</article>

	</section>

</body>
</html>