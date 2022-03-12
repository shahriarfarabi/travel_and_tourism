<?php
	if (isset($_POST['submit'])) {

		$title = $_POST['title'];
		$post = $_POST['post'];

		if ($title == "" || $post == "") {
			echo "Fill all the information";
		}else{

			$file = fopen("../models/post.txt", "a");
			

			fwrite($file, $title."    ");
			fwrite($file, $post."\n");
			fclose($file);

			echo "Added successfully";

			header('location: ../view/post_message.php');

		}


	}
 ?>