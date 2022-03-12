<?php
	if (isset($_POST['submit'])) {

		$package = $_POST['package'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$people = $_POST['people'];
		$phone = $_POST['phone'];
		$date = $_POST['date'];

		if ($package == "" || $name == "" || $email == "" || $people == "" || $phone == "" || $date == "") {
			echo "Fill all the information";
		}else{

			$file = fopen("../models/booking.txt", "a");
			

			fwrite($file, $package."    ");
			fwrite($file, $name."    ");
			fwrite($file, $email."    ");
			fwrite($file, $people."    ");
			fwrite($file, $phone."    ");
			fwrite($file, $date."\n");
			fclose($file);

			echo "Added successfully";

			header('location: ../view/booking.php');

		}


	}
 ?>