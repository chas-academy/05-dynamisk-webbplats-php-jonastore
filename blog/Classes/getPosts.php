
<?php		

	class Posts extends Database{

		protected function getAllPosts() {
			$sql = "SELECT * FROM post ORDER BY date DESC";
			$result = $this->connect()->query($sql); 
				while ($row = $result->fetch_assoc()){ //comment this
					$postArr[] = $row;				   //put the rows in the $postArr array
				}
				return $postArr;
		}

		protected function getAllCategories() {
			$sql = "SELECT * FROM categories ORDER BY category_id ASC";
			$result = $this->connect()->query($sql); 
				while ($row = $result->fetch_assoc()){ //comment this
					$postArr[] = $row;				   //put the rows in the $postArr array
				}
				return $postArr;
		}

		protected function getAllTags() {
			$sql = "SELECT * FROM categories ORDER BY category_id ASC";
			$result = $this->connect()->query($sql); 
				while ($row = $result->fetch_assoc()){ //comment this
					$postArr[] = $row;				   //put the rows in the $postArr array
				}
				return $postArr;
		}

	}


?>
