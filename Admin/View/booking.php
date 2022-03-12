<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>booking</title>
</head>
<body>
	<form method="POST" action="../controller/booking_check.php">
	<h1 align="center">Travel & Tourism</h1>
<center><img align="center" width="200px" height="200px"  
			src="../asset/booking.png"></center><br>
<h1 align="center">Booking Reports</h1>
<center>
	<table>
		<tr>

			<td>Book this package</td>
			<td>
				<select name="package">
	<option>4 Days Bali Saver</option>
	<option>5 Days Maldives</option>
	<option>4 Days Sikkim</option>
	<option>4 Days Bangkok</option>
</select>
			</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>
				<input type="text" name="name">
			</td>
			</tr>
				<tr>
			<td>Email</td>
			<td>
				<input type="text" name="email">
			</td>
			</tr>
			<tr>
			<td>№ People</td>
			<td>
				<input type="text" name="people">
			</td>
			</tr>
			<tr>
			<td>Phone</td>
			<td>
				<input type="text" name="phone">
			</td>
			</tr>
			<tr>
			<td>Date</td>
			<td>
				<input type="date" name="date">
			</td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="submit">
			</td>
		</tr>
		
		</table>

		<?php
			$file = fopen("../models/booking.txt", "r");

			echo "<pre>";
			while (!feof($file)) {
				echo fgets($file);
			}
			echo "</pre>";

			fclose($file);
		?>
<h1 align="center"><a href="Dashboard.html">Home</h1>
	</form>
</body>
</html>