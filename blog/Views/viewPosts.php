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