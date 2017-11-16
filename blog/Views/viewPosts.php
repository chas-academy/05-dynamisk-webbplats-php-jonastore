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
					echo "<p>#" . $post['tag'] .  "</p>";
					echo "<p>-----------------------------------------------------------------</p>";
					//echo "<p>Comment: " . $post['message'] . "</p>";
					$posts = new ViewPosts();
					$posts->viewAllComments();
					echo "<p>-----------------------------------------------------------------</p>";
					echo "<form action='Inserts/insertComment.php' method='post'>";
					echo "<input type='text' name='date' value='" . $post['date'] . "'>";
					echo "<input type='text' name='id' value='" . $post['id'] . "'>";
					echo "<input type='text' name='message' placeholder='Your comment'>";
					echo "<input type='submit' name='submit' value='Submit comment'>";
					echo "</form>";
					if (isset($_SESSION['username'])){
                	echo "<form action='Inserts/deleteComment.php' method='post'>";
					echo "<input type='hidden' name='date' value='" . $post['date'] . "'>";
                	echo "<input type='submit' name='submit' value='Delete comment'>";
                	echo "</form>";
            		}					

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
					echo "<option value='null'>" . "No tags available" . "</options>";
				} 
			else
				{
					foreach ($posts as $post) {
					echo "<option value='" . $post['tag_id'] . "'> #" . $post['tag'] . "</option>";
				}

			}
		}

		public function viewAllComments() {
			$posts = $this->getAllPosts();
			if (!$posts)
				{
					echo "<option value='null'>" . "No tags comments" . "</options>";
				} 
			else
				{
					foreach ($posts as $post) {
					echo "<p>" . $post['message'] . "</p>";
				}

			}
		}


	}


?>