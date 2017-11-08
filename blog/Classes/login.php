<?php

if (isset($_POST['submit']))//if submit button is clicked, execute the following code

	include 'databaseConnection.php';

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password =	mysqli_real_escape_string($conn, $_POST['password']);
?>