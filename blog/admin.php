<?php

include 'database.php';

if (isset$_POST["submit"]))
{
	
}

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
			<form action="post.php" method="post"> <!--takes your form to post.php where all the action happens-->
				<input type="text" name="title" placeholder="Post title">
				<input id="textInput" type="text" name="content" placeholder="Post content">
        		<input type="submit" value="insert"> 
			</form>
		</article>

	</section>

</body>
</html>