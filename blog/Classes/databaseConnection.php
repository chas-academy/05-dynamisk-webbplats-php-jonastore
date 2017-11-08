<?php
		
	$conn = mysqli_connect("localhost", "root", "root", "blogDatabase");

	class Database {

		//these guys remain private so that ONLY methods INSIDE the dBase class have access to them!
		//private $servername;
		//private $username;
		//private $password;		//REMOVE THIS?
		//private $databaseName;

		//this is PROTECTED so that we can use this when we extend this class further into new classes, like $this->connect()
		public function connect() {
			$this->servername = "localhost";	
			$this->username = "root";
			$this->password = "root";
			$this->databaseName = "blogDatabase";

			$conn = new mysqli($this->servername, $this->username, $this->password, $this->databaseName);
			
			return $conn;
		}

	}

?>