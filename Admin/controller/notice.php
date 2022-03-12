<?php
	if (isset($_POST['submit'])) {

		$subject = $_POST['subject'];
		$notice = $_POST['notice'];

		if ($subject == "" || $notice == "") {
			echo "Fill all the information";
		}else{

			$file = fopen("../models/notice.txt", "a");
			

			fwrite($file, $subject."    ");
			fwrite($file, $notice."\n");
			fclose($file);

			echo "Added successfully";

			header('location: ../view/upload_notice.php');

		}


	}
 ?>