
<?php		

	class Posts extends Database{

		protected function getAllPosts() {
			//$query = "SELECT * FROM post ORDER BY date DESC";
			$query = "SELECT DISTINCT post.*, categories.category, tags.tag, comments.*
					  FROM categories
					  INNER JOIN post ON categories.category_id = post.category_fk 
					  LEFT JOIN tags ON post.tag_fk = tags.tag_id
					  LEFT JOIN post_comments ON post.id = post_comments.post_fk
					  LEFT JOIN comments ON comments.postdate = post_comments.comment_fk GROUP BY title
							  ";


			$result = $this->connect()->query($query); //creates a query to the database
				while ($row = $result->fetch_array()){ //returns the row result as an array with associative indices(keys)
					$fetchArr[] = $row;				   //put the rows in the $fetchArr array
				}
				return $fetchArr;
				
		}

		protected function getAllCategories() {
			$query = "SELECT * FROM categories
					  ORDER BY category_id ASC";
			$result = $this->connect()->query($query); 
				while ($row = $result->fetch_array()){ 
					$fetchArr[] = $row;				   
				}
				return $fetchArr;
		}

		protected function getAllTags() {
			$query = "SELECT * FROM tags 
			 		  ORDER BY tag_id DESC";
			$result = $this->connect()->query($query); 
				while ($row = $result->fetch_array()){ 
					$fetchArr[] = $row;				   
				}
				return $fetchArr;
		}

		protected function getAllComments() {
			$query = "SELECT * FROM comments 
			 		  ";
			$result = $this->connect()->query($query); 
				while ($row = $result->fetch_array()){ 
					$fetchArr[] = $row;				   
				}
				return $fetchArr;
		}

		protected function getJunction() {
			$query = "SELECT DISTINCT comments.message, post.*
              		  FROM post
              		  JOIN post_comments ON post_comments.post_fk = post.id
              		  JOIN comments ON comments.postdate = post_comments.comment_fk GROUP BY post_fk";
			$result = $this->connect()->query($query); 
				while ($row = $result->fetch_array()){ 
					$fetchArr[] = $row;				   
				}
				return $fetchArr;
		}





	}


?>
