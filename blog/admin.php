<?php
	
	include_once 'Classes/databaseConnection.php';
    include_once 'Classes/getPosts.php';
    include_once 'Views/viewPosts.php';
    include_once 'Views/updatePosts.php';
    include_once 'Views/showCorrespondingContent.php';
    session_start();

?>

<!DOCTYPE html>
<html>
<head>
	    <link rel="stylesheet" type="text/css" href="style/style1.css">

	<title>Admin page</title>
</head>
<body>
	<section id="mainContainer">
		<?php
				if (isset($_SESSION['username'])){
					echo "<form action='Classes/logout.php' method='post'>";
					echo "<input type='submit' name='submit' value='Log out'>";
					echo "</form>";
				}
			?>
				<h1>Write a blog post! 寫博文！</h1>
		<article id="mainContent">
			
			<a href="http://localhost:8080/blog/">go back</a>
			<?php
				if (!isset($_SESSION['username'])) {
					echo "<h1>You have to log in to view his page!</h1>";
					echo "<form action='Classes/login.php' method='post'>
        				  <input id='user' type='text' name='username' placeholder='Username' value='admin'>
        				  <input id='pass' type='password' name='password' placeholder='Password' value='wrongpassword'>
        				  <input id='log' type='submit' name='submit' value='Log in'>
        				  </form>";
    			}
				?>

			<!-- INSERT POSTS -->
			<form action="Inserts/insertPost.php" method="post"> <!--change action="" what do you mean change action????-->
				
				<?php
				if (isset($_SESSION['username'])) {
					echo "<select>";
					$posts = new ViewPosts();
                    $posts->viewAllCategories();
					echo "<input type='text' name='title' placeholder='Post title'>";
					echo "<input id='textInput' type='text' name='content' placeholder='Post content'>";
					echo "<input type='submit' name='submit' value='insert'> "; 
					echo "</select>";
				} 
					
				?>
			
				
			</form>

			<!-- UPDATE POSTS -->
			<form action="Inserts/insertUpdate.php" method="post">
				
				<?php
				if (isset($_SESSION['username'])) {
					echo "<select name='select'>";
					$posts = new Update();
    				$posts->updatePosts();
    				echo "</select>";
    				echo "<input name='title' placeholder='New title here'>";
    				echo "<input name='content' placeholder='New content here'>";
    				echo "<input type='submit' name='submit' value='Update'>";
    				
    			}
				?>
				
			</form>

			<!-- DELETE POSTS -->
			<form action="Inserts/deletePost.php" method="post">
				<?php
				if (isset($_SESSION['username'])) {
					echo "<select name='select'>";
					$posts = new Update();
    				$posts->updatePosts();
    				echo "</select>";
    				echo "<input type='submit' name='delete' value='Delete'>";
    			}
				?>
			</form>
		</article>

	</section>

</body>
</html>