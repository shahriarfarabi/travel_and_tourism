<?php
	if (isset($_POST['enter']) || isset($_POST['exit'])) {

		date_default_timezone_set('Asia/Dhaka');
		$date = date('d-m-y');
		$time = date('h:i:s');
		$enter = "Enter";
		$exit = "Exit";

		if (isset($_POST['enter'])) {

			$file = fopen("../models/attendance.txt", "a");
			fwrite($file, $date."    ");
			fwrite($file, $time."    ");
			fwrite($file, $enter."\n");
			fclose($file);

			echo "Enter successfully";

			header('location: ../view/employee_attendance.php');

		}
		else{

			$file = fopen("../models/attendance.txt", "a");


			fwrite($file, $date."    ");
			fwrite($file, $time."    ");
			fwrite($file, $exit."\n");
			fclose($file);

			echo "Exit successfully";

			header('location: ../view/employee_attendance.php');

		}


	}
 ?>