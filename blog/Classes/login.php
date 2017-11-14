<?php

//if (!$this->request->isPost());
	//skicka fel om requesten INTE är en post

//setcookie('user', $user->getId())
//rensa kakor när du håller på med detta

include 'databaseConnection.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];


if(isset($_POST['submit'])){


	$sql = mysqli_query($conn, "SELECT * FROM users WHERE username='" . $username . "' AND password='" . $password . "'");
	$numRows = mysqli_num_rows($sql);

	if ($numRows > 0) {
		$_SESSION['username'] = $username;
		header("location: ../admin.php?login=success");
	}
	else {
		header("location: ../admin.php?login=failure");
	}

}




?>