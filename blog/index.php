<?php
    include 'Classes/databaseConnection.php';
    include 'Classes/getPosts.php';
    include 'Views/viewPosts.php';
    session_start();

    $query = mysqli_query($conn, "SELECT DISTINCT comments.message, post.*
                                  FROM post
                                  JOIN post_comments ON post_comments.post_fk = post.id
                                  JOIN comments ON comments.postdate = post_comments.comment_fk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Blog main page</title>
</head>
<body>


<header id="headerContainer">
    <section id="headerContent">
        <h1>世界上最糟糕的博客 &#128004;</h1><!--худший блог в мире 世界上最糟糕的博客 дэлхийн хамгийн муу блог 自分を殺そう &#128004;-->
        <form id='loginForm' action="Classes/login.php" method="post">
        <!-- HIDES THE LOGIN FORM IF SESSION IS ACTIVE! -->
        <?php
        if (!isset($_SESSION['login'])) {
        echo "<input id='user' type='text' name='username' placeholder='Username' value='admin'>";
        echo "<input id='pass' type='password' name='password' placeholder='Password' value='wrongpassword'>";
        echo "<input id='log' type='submit' name='submit' value='Sign in'>";
        }
        if (isset($_SESSION['login'])) {
        echo "<input type='submit' name='submit' value='Admin page'>";
        }
        ?>
        </form>
    </section>
</header>
<main>
    <section class="row" id="mainContainer">

        <article id="searchFields">

            <!-- SEARCH FORM -->
                   <form action="Inserts/searchPost.php" method="post">    
                    <input type='text' name='search' placeholder='Search...'>
                    <input type='submit' name='submit' value='Find Posts'>
                </form>
                
                    <!-- SEARCH BY CATEGORY -->
            <form action="Inserts/findCategory.php" method="post">    
                <select name='select'>
                    <?php
                        $posts = new ViewPosts();
                        $posts->viewAllCategories();
                    ?>
                </select>
                <input type='submit' name='submit' value='Find Posts'>
            </form>
    
                <!-- SEARCH BY TAG -->
                   <form action="Inserts/findTag.php" method="post">    
                    <select name='select'>
                        <?php
                            $posts = new ViewPosts();
                            $posts->viewAllTags();
                        ?>
                    </select>
                    <input type='submit' name='submit' value='Find Posts'>
                </form>
    
        </article>




        

        <!-- MAIN CONTENT -->
        <article id="mainContent">

        <!-- MESSAGE BOARD -->      
        <h3>&#128517; Reaction Board! &#128531;</h3>
        <select multiple="multiple" id="messageBox">
        <?php
            while ($post = $query->fetch_array()){ 
            echo "<option>Reaction to '" . $post['title'] . "': " . $post['message'] . "</option>";
            echo "<option>------------------------------------------------------------------</option>";
            }
            //echo "</select>"; 
            //echo "<form>";
        ?>
        </select>
        <?php
            /* BLOG POSTS */
            $posts = new ViewPosts();
            $posts->viewAllPosts();
            
        ?>
    
        </article>
    </section>
    
</main>
    
</body>
</html>