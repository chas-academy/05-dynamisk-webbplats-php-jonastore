<?php
		
	class ShowUpdateContent extends Update{

		//public beacause this is what's get instanciated and shows on the website
		public function showContent() {
			$posts = $this->updatePosts(); 
			foreach ($posts as $post) {
				echo "<input name='content' value='" . $post['content'] . "'></input>"; 
			}
		}

	}


?>