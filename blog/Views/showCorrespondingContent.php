<?php
		
	class ShowUpdateContent extends Posts{

		//public beacause this is what's get instanciated and shows on the website
		public function viewAllUpdatePosts() {
			$posts = $this->getAllPosts(); 
			foreach ($posts as $post) {
				echo "<input name='title' value='" . $post['title'] . "'></input>"; 
				echo "<input name='content' value='" . $post['content'] . "'></input>"; 
				echo "<input type='submit' name='submit' value='Update'>";

			}
		}

	}


?>