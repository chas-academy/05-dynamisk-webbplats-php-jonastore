<?php
	
	//connection for the inserts and login
	$conn = mysqli_connect("blog-226744.mysql.binero.se", "226744_rj29876", "dynamic12", "226744-blog");

	//class for inheritance with the get and view classes
	class Database {
		//this is PROTECTED so that we can use this when we extend this class further into new classes, like $this->connect()
		protected function connect() {
			$servername = "blog-226744.mysql.binero.se";	
			$username = "226744_rj29876";
			$password = "dynamic12";
			$databaseName = "226744-blog";

			$conn = new mysqli($servername, $username, $password, $databaseName);
					
			return $conn;
		}

	}

?>