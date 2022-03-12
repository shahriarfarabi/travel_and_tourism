<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>employee_attendance</title>
</head>
<body>
	<form method="POST" action="../controller/attendance.php">
	
	<h1 align="center">Travel & Tourism</h1>
		<center><img align="center" width="190px" height="180px"  
			src="../asset/attendance.png"></center><br>
	<table align="center">
	<tr>
		<td>
			<input type="submit" name="enter" value="Enter">
		</td>
		<td>
			<input type="submit" name="exit" value="Exit">
		</td>
	</tr>
</table>

<h1 align="center">Employee Attendance List</h1>
<h2 align="center"><a href="Dashboard.html">Home</a></h2>

<?php
	$file = fopen("../models/attendance.txt", "r");

	echo "<pre>";
	while (!feof($file)) {
		echo fgets($file);
	}
	echo "</pre>";

	fclose($file);
?>
</form>
</body>
</html>