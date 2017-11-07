<?php

include 'db.php';

class InsertPost extends Database {


	public function post($table, $fields){
		$sql = "";
		$sql .= "INSERT INTO" . $table;
		$sql .= " (" . implode(",", array_keys($fields)).") VALUES ";
		$sql .= "('" . implode("','", array_values($fields))."')";
		//echo $sql;
		$query = mysqli_query($this->con, $sql);
		if($query){
			return true;
		}
	}
}

$obj = new InsertPost;
if(isset($_POST["submit"])){
	$myArr = array(
		"title" => $_POST["title"],
		"content" => $_POST["content"]
	);
	if($obj->post('post', $myArr)){
		header("location:admin.php?msg=success");
	}
}

?>