<?php
	if (isset($_POST['submit'])) {

		$file_info = $_FILES['pic'];
		$file = $file_info['name'];
		$filename = $file_info['tmp_name'];
		$destination = '../asset/image/' . $file_info['name'];
		if(move_uploaded_file($filename, $destination)){
			

			$file = fopen("../models/picture.txt", "a");
			

			fwrite($file, $file_info['name']."\n");
			fclose($file);

			echo "Added successfully";

			header('location: ../view/news_ads.php');


		}
	}
?>