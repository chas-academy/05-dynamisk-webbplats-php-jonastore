<?php

//if (!$this->request->isPost());
	//skicka fel om requesten INTE är en post

//setcookie('user', $user->getId())
//rensa kakor när du håller på med detta

session_start();

include 'databaseConnection.php';

if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = mysqli_query($conn, "SELECT * FROM users WHERE username='" . $username . "' AND password='" . $password . "'");
	$result = mysqli_num_rows($sql);

	if ($result > 0) {
		$_SESSION['username'] = $result;
		header("location: ../admin.php?login=success");
	}
	else {
		header("location: ../admin.php?login=failure");
	}

}




?>