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
					echo "<form action='Inserts/insertComment.php' method='post'>";
					echo "<input type='hidden' name='date' value='" . $post['date'] . "'>";
					echo "<input type='hidden' name='id' value='" . $post['id'] . "'>";
					echo "<input type='text' name='message' placeholder='React to " . $post['title'] . "'>";
					echo "<input type='submit' name='submit' value='Submit reaction'>";
					echo "</form>";
					if (isset($_SESSION['login'])){
                	echo "<form action='Inserts/deleteComment.php' method='post'>";
					echo "<input type='hidden' name='date' value='" . $post['date'] . "'>";
                	echo "<input type='submit' name='submit' value='Delete all reactions related to this post'>";

                	echo "</form>";
					echo "<p>-----------------------------------------------------------------</p>";

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


		public function viewAllUpdatePosts() {
			$posts = $this->getAllPosts(); 
			foreach ($posts as $post) {
				echo "<form action='Inserts/insertUpdate.php' method='post'>";
				//echo "<form action='' method=''>";
				//echo "<select name='select'>";
				//$posts = new Update();
    			//$posts->updatePosts();
    			//echo "</select>";
    			echo "<select name='selectcat'>";
				$posts = new ViewPosts();
                $posts->viewAllCategories();
                echo "</select>";
    			echo "<select name='selecttag'>";
                $tags = new ViewPosts();
                $tags->viewAllTags(); 
                echo "</select>";

                echo "<input type='hidden' name='date' value='" . $post['date'] . "'></input>"; 
				echo "<input name='title' value='" . $post['title'] . "'></input>"; 
				echo "<input name='content' value='" . $post['content'] . "'></input>"; 
				echo "<input type='submit' name='submit' value='Update'>";
				//echo "<input type='submit' name='submit' value='Update'>";
				//echo "</form>";
				echo "</form>";

			}
		}

	}


?>