<?php
		
	class ViewPosts extends Posts{

		//public beacause this is what's get instanciated and shows on the website
		public function viewAllPosts() {
			$posts = $this->getAllPosts();
			if (!$posts)
				{
					echo "<p>nothing to see here</p>";
				} 
			else
				{
					foreach ($posts as $post) {
					echo "<h3>标 " . $post['title'] . " 题</h3>";
					echo "<p>" . $post['content'] . "</p>"; 
					echo "<p class='date'>" . $post['date'] . "</p>";
					echo "<p>Category : " . $post['category'] .  "</p>";
					echo "<p>-----------------------------------------------------------------</p>";
					echo "<p>Comments: " . $post['message'] . "</p>";
					//$posts = new ViewPosts();
					//$posts->viewAllComments();
					echo "<p>-----------------------------------------------------------------</p>";
					echo "<form action='Inserts/insertComment.php' method='post'>";
					echo "<input type='hidden' name='date' value='" . $post['date'] . "'>";
					//echo "<input type='text' name='name' placeholder='Your name'>";
					echo "<input type='text' name='message' placeholder='Your comment'>";
					echo "<input type='submit' name='submit' value='Submit comment'>";
					echo "</form>";

					

				}

			}
		}

		public function viewAllCategories() {
			$posts = $this->getAllCategories();
			if (!$posts)
				{
					echo "<p>nothing to see here</p>";
				} 
			else
				{
					foreach ($posts as $post) {
					echo "<option value='" . $post['category_id'] . "'>" . $post['category'] . "</option>";
				}

			}
		}

		public function viewAllComments() {
			$posts = $this->getAllComments();
			if (!$posts)
				{
					echo "<p>no comments today</p>";
				} 
			else
				{
					foreach ($posts as $post) {
					echo "<p> comment: " . $post['message'] . "</p>";
				}

			}
		}

	}


?>