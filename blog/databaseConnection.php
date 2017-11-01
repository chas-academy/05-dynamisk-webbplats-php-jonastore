<?php
		

	class dBase {

		//these guys remain private so that ONLY methods INSIDE this class have access to them!
		private $servername;
		private $username;
		private $password;
		private $databaseName;

		//this is PROTECTED so that we can use this when we extend this class further into new classes, like $this->connect()
		protected function connect() {
			$this->servername = "localhost";	
			$this->username = "root";
			$this->password = "root";
			$this->databaseName = "blogDatabase";

			$conn = new mysqli($this->servername, $this->username, $this->password, $this->databaseName);

			return $conn;
		}


	}



?>