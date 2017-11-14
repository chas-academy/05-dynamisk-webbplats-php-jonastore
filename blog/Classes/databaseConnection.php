<?php
	
	//connection for the inserts and login
	$conn = mysqli_connect("localhost", "root", "root", "blogDatabase");

	//class for inheritance with the get and view classes
	class Database {
		//this is PROTECTED so that we can use this when we extend this class further into new classes, like $this->connect()
		protected function connect() {
			$servername = "localhost";	
			$username = "root";
			$password = "root";
			$databaseName = "blogDatabase";

			$conn = new mysqli($servername, $username, $password, $databaseName);
					
			return $conn;
		}

	}

?>