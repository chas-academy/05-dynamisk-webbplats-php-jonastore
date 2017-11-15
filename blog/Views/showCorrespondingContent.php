<?php
		
	class ShowUpdateContent extends Posts{

		//public beacause this is what's get instanciated and shows on the website
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