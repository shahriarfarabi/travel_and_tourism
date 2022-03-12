<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload Notice</title>
</head>
<body>
	<form method="POST" action="../controller/notice.php">
<h1 align="center">Travel & Tourism</h1>
<center><img align="center" width="175px" height="175px"  
			src="../asset/post_message.png"></center><br>
			<center>
	<table>
		<tr>
			<td>Subject</td>
			<td>
				<input type="text" name="subject">
			</td>
		</tr>
		<tr>
			<td>Notice</td>
			<td>
				<input type="text" name="notice">
			</td>
			<tr>
			<td align="center" colspan="2">
				<br>
				<input type="submit" name="submit">
			</td>
		</tr>
		</table>

		<?php
			$file = fopen("../models/notice.txt", "r");

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