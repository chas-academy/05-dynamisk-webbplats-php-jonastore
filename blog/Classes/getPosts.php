
<?php		

	class Posts extends Database{

		protected function getAllPosts() {
			//$query = "SELECT * FROM post ORDER BY date DESC";
			$query = "SELECT post.title, post.content, post.date, categories.category 
			FROM categories INNER JOIN post ON categories.category_id = post.category_fk 
			ORDER BY date DESC";
			$result = $this->connect()->query($query); 
				while ($row = $result->fetch_assoc()){ //returns the row result as an associative array, an array with key in it
					$postArr[] = $row;				   //put the rows in the $postArr array
				}
				return $postArr;
		}

		protected function getAllCategories() {
			$query = "SELECT * FROM categories
					  ORDER BY category_id ASC";
			$result = $this->connect()->query($query); 
				while ($row = $result->fetch_assoc()){ //comment this
					$postArr[] = $row;				   //put the rows in the $postArr array
				}
				return $postArr;
		}

		protected function getAllTags() {
			$query = "SELECT * FROM tags 
			 		  ORDER BY tag_id DESC";
			$result = $this->connect()->query($query); 
				while ($row = $result->fetch_assoc()){ //comment this
					$postArr[] = $row;				   //put the rows in the $postArr array
				}
				return $postArr;
		}


	}


?>
