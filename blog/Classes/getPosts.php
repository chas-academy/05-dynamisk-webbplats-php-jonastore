
<?php		

	class Posts extends Database{

		protected function getAllPosts() {
			$sql = "SELECT * FROM post ORDER BY date DESC";
			$result = $this->connect()->query($sql); 
				while ($row = $result->fetch_assoc()){ //while associative array is corresponding to the selected row
					$postArr[] = $row;				   //put the rows in the $postArr array
				}
				return $postArr;
		}
	}


?>
