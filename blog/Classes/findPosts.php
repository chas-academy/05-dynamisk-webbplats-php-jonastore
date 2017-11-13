<?php

//if (!$this->request->isPost());
	//skicka fel om requesten INTE är en post

//setcookie('user', $user->getId())
//rensa kakor när du håller på med detta

session_start();

include 'databaseConnection.php';

if(isset($_POST['submit'])){

	$category = $_POST['select'];

	$sql = "SELECT * FROM post WHERE category='" . $category . "'";
	//$result = mysqli_num_rows($sql);

	if ($sql == true) {
		header("location: ../index.php?login=success");
		
	}
	else {
		header("location: ../index.php?login=failure");
	}

}




?>