
<?php		

	class Posts extends Database{

		protected function getAllPosts() {
			$query = "SELECT * FROM post ORDER BY date DESC";
			$result = $this->connect()->query($query); 
				while ($row = $result->fetch_assoc()){ //comment this
					$postArr[] = $row;				   //put the rows in the $postArr array
				}
				return $postArr;
		}

		protected function getAllCategories() {
			$query = "SELECT * FROM categories ORDER BY category_id ASC";
			$result = $this->connect()->query($query); 
				while ($row = $result->fetch_assoc()){ //comment this
					$postArr[] = $row;				   //put the rows in the $postArr array
				}
				return $postArr;
		}

		protected function getAllTags() {
			$query = "SELECT * FROM tags ORDER BY tag_id DESC";
			$result = $this->connect()->query($query); 
				while ($row = $result->fetch_assoc()){ //comment this
					$postArr[] = $row;				   //put the rows in the $postArr array
				}
				return $postArr;
		}

	}


?>
