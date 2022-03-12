<?php
	if (isset($_POST['submit'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($_POST['username'] == "" && $_POST['password'] == "") {
			echo "Enter Username & Password";
		}
		else{

			if ($username == 'Admin' && $password == '123456')  {

				setcookie('flag', true, time()+3600, '/');
				header('location: ../view/Dashboard.html');	

			}
		}

	}
 ?>