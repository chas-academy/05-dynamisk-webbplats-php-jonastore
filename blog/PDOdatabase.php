<?php


class Database
{

	public $isConn;
	protected $dbData;
								//lots of default values over here
	public function __construct($username="root", $password="root", $server="localhost", $databaseName="blogDatabase", $options = []){
		$this->isConn = TRUE;
		try {
			$this->dbData = new PDO("mysql:host={$server};dbname={$databaseName};charset=utf8", $username, $password $options)
			$this->dbData->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
			$this->dbData->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		} catch (PDOexeption $e) {
			throw new Exception($e->getMessage());
		}

	}
	public function disconnect(){
		$this->dbData = NULL;
		$this->isConn = FALSE;
	}
}


?>