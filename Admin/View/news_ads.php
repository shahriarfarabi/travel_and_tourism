<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>news_ads</title>
</head>
<body>
<form method="POST" action="../controller/picture.php" enctype="multipart/form-data">
	

<h1 align="center">Travel & Tourism</h1>
<h1 align="center">News & Ads</h1>

			<table align="center">
				<tr>
					<td>
						Ads:
					</td>
					
					
				</tr>
				<tr>
					<td>
						<input type="file" name="pic">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Upload">
					</td>
				</tr>
				<?php
				$file = fopen("../models/picture.txt", "r");
				echo "<pre>";
				while (!feof($file)) {
					$name = fgets($file);
					echo "<tr>
					<td>
						<img width=\"800px\"/ height=\"500px\"/ src=\"../asset/image/$name\"/>
					</td>
				</tr>";

				}
				echo "</pre>";

				?>
				

			</table>
			<h1 align="center"><a href="Dashboard.html">Home</h1>
</form>
</body>
</html>