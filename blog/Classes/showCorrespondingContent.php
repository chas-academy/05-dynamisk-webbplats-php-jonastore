<?php
		
	class ShowUpdateContent extends Posts{

		//public beacause this is what's get instanciated and shows on the website
		public function viewAllPosts() {
			$posts = $this->updatePosts(); 
			foreach ($posts as $post) {
				echo "<input name='title' value='" . $post['content'] . "'></input>"; 
				echo "<input name='content' value='" . $post['content'] . "'></input>"; 

			}
		}

	}


?>