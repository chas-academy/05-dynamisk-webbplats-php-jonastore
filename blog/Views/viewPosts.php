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
					echo "<p>Comments:</p>";
					echo "<p>-----------------------------------------------------------------</p>";

					echo "<form action='Inserts/insertComment.php' method='post'>";
					echo "<input type='text' name='name' placeholder='Your name'>";
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

		public function viewAllTags() {
			$posts = $this->getAllTags();
			if (!$posts)
				{
					echo "<p>nothing to see here</p>";
				} 
			else
				{
					foreach ($posts as $post) {
					echo "<option value='" . $post['tag'] . "'>" . $post['tag'] . "</option>";
				}

			}
		}

	}


?>