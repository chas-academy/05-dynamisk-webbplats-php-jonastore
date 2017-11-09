<?php
		
	class Update extends Posts{

		//public beacause this is what's get instanciated and shows on the website
		public function updatePosts() {
			$posts = $this->getAllPosts();
			foreach ($posts as $post) {
				echo "<option name='title' value='" . $post['date'] . "'>" . $post['title'] . "</option>";
				//echo "<input name='' value='" . $post['content'] . "'>"; 
				//echo "<option name='id' value='" . $post['id'] . "'></option>"; 

				//gör en ny UpdateInput som skriver up input kopplat till vilken titel som är vald i denna klassen
			}
		}
	}


?>