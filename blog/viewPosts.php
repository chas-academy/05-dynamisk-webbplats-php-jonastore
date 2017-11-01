<?php
		
	class ViewPosts extends Posts{
		//public beacause this is what's get instanciated and shows on the website
		public function viewAllPosts() {
			$datas = $this->getAllPosts();
			foreach ($datas as $data) {
				echo "<h3>" . $data['title'] . "</h3>";
				echo "<p>" . $data['content'] . "</p>"; 
				echo "<p class='date'>" . $data['date'] . "</p>";
				echo "<p>❀ ✿ ✶ ✴ ❄ ❉ ❋ ❖ ⊹❀ ✿ ✶ ✴ ❄ ❉ ❋ ❖ ⊹❀ ✿ ✶ ✴ ❄ ❉ ❋ ❖ ⊹</p>";
			}
		}
	}

?>