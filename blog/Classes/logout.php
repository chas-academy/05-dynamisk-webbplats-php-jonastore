<?php

	if (isset($_POST['submit'])){
		session_start();
		session_destroy(); //session unset?
		header("location: ../index.php");
	}


?>