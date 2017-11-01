
<?php
		

	class Posts extends dBase{

		protected function getAllPosts() {
			$sql = "SELECT * FROM post ORDER BY date DESC"; //change order
			$result = $this->connect()->query($sql);
			$numRows = $result->num_rows; //delcated in order to be able to check if we got anything from the db
			if ($numRows > 0){
				while ($row = $result->fetch_assoc()){
					$data[] = $row;
				}
				return $data;
			}
		}
	}


?>
