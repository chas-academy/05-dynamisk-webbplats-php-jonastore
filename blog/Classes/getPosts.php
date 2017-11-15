
<?php		

	class Posts extends Database{

		protected function getAllPosts() {
			//$query = "SELECT * FROM post ORDER BY date DESC";
			$query = "SELECT post.title, post.content, post.date, categories.category, tags.tag, comments.message
					  FROM categories
					  INNER JOIN post ON categories.category_id = post.category_fk 
					  LEFT JOIN tags ON post.tag_fk = tags.tag_id
					  LEFT JOIN comments ON post.date= comments.postdate ORDER BY date DESC
					  ";

			$result = $this->connect()->query($query); 
				while ($row = $result->fetch_array()){ //returns the row result as an array with associative indices, or keys
					$postArr[] = $row;				   //put the rows in the $postArr array
				}
				return $postArr;
				
		}

		protected function getAllCategories() {
			$query = "SELECT * FROM categories
					  ORDER BY category_id ASC";
			$result = $this->connect()->query($query); 
				while ($row = $result->fetch_array()){ 
					$postArr[] = $row;				   
				}
				return $postArr;
		}

		protected function getAllTags() {
			$query = "SELECT * FROM tags 
			 		  ORDER BY tag_id DESC";
			$result = $this->connect()->query($query); 
				while ($row = $result->fetch_array()){ 
					$postArr[] = $row;				   
				}
				return $postArr;
		}

		protected function getAllComments() {
			//$query = "SELECT post.title, post.content, post.date, comments.name, comments.message 
			//FROM comments INNER JOIN post ON comments.comment_id = post.comment_fk";
			$query = "SELECT comments.message
					  FROM comments
					  INNER JOIN post ON post.date= comments.postdate ORDER BY date DESC";
			$result = $this->connect()->query($query); 
				while ($row = $result->fetch_array()){ //fetch_assoc?
					$postArr[] = $row;				   //put the rows in the $postArr array
				}
				return $postArr;
		}


	}


?>
