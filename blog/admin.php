<?php
	
	include_once 'Classes/databaseConnection.php';
    include_once 'Classes/getPosts.php';
    include_once 'Classes/viewPosts.php';
    include_once 'Classes/updatePosts.php';
    include_once 'Classes/showCorrespondingContent.php';

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

			<!-- INSERT POSTS -->
			<form action="Classes/insertPost.php" method="post"> <!--change action=""-->
				<input type="text" name="title" placeholder="Post title">
				<input id="textInput" type="text" name="content" placeholder="Post content">
        		<input type="submit" name="submit" value="insert"> 
			</form>

			<!-- UPDATE POSTS -->
			<form action="Classes/insertUpdate.php" method="post">
				<select name="select">
				<?php
					$posts = new Update();
    				$posts->updatePosts();

				?>
				<select>
				<input name='title' placeholder='New title here'>
				<input name='content' placeholder='New content here'>
				<input type='submit' name='submit' value='Update'></p>
			</form>

			<!-- DELETE POSTS -->
			<form action="Classes/deletePost.php" method="post">
				<select name="select">
				<?php
					$posts = new Update();
    				$posts->updatePosts();
				?>	
				</select>
				<input type='submit' name='delete' value='Delete'>
			</form>
			</form>
		</article>

	</section>

</body>
</html>