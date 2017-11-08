<?php
    include 'Classes/databaseConnection.php';
    include 'Classes/getPosts.php';
    include 'Classes/viewPosts.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/style1.css">
    <title>Blog main page</title>
</head>
<body>


<header id="headerContainer">
    <section id="headerContent">
        <h1>世界上最糟糕的博客 &#128004;</h1><!--худший блог в мире 世界上最糟糕的博客 дэлхийн хамгийн муу блог 自分を殺そう-->
        <form action="index.php" method="post">
        <input id="user" type="text" name="username" placeholder="Username">
        <input id="pass" type="password" name="password" placeholder="Password">
        <input id="log" type="submit" name="submit" value="Log in">
        </form>
    </section>
</header>

 <main id="container">
    <section class="row" id="mainContainer">
        <article id="mainContent">


<?php
    $posts = new ViewPosts();
    $posts->viewAllPosts();
?>

        </article>
    </section>
    
    </main>
    
</body>
</html>