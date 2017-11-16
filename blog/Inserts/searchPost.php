<?php
	include '../Classes/databaseConnection.php';

	$search = $_POST['search'];

	$query = mysqli_query($conn, "SELECT * FROM post WHERE content LIKE '%$search%' OR title LIKE '%$search%'");
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../style/style1.css">
    <title>Blog main page</title>
</head>
<body>

<h3>Here are your results, hombre!</h3>
<a href="../">GO BACK</a>
<div id="results">
<pre>
	<?php
	while ($post = $query->fetch_array()){
	    echo "<p> title: 标 " . $post['title'] . " 题</p><p> content: " . $post['content'] . "<p>";
	    echo "<p>---------------------------------------------------------------------</p>";
		
		}
	?>	
</pre>
</div>
<img src="">
</body>
</html>
