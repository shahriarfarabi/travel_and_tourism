<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer_Add_Delete_Update</title>
</head>
<body>
	<form method="POST" action="../controller/add_customer.php">
		<h1 align="center">Travel & Tourism</h1>
		<center><img align="center" width="150px" height="110px"  
			src="../asset/customer.png"></center><br>

<center>
	<table>
		<tr>
			<td>Name</td>
			<td>
				<input type="text" name="name">
			</td>
		</tr>
		<tr>
			<td>Id</td>
			<td>
				<input type="text" name="id">
			</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>
				<input type="text" name="address">
			</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>
				<input type="text" name="phone">
			</td>
		</tr>
		<tr>
			<td>NID Number</td>
			<td>
				<input type="text" name="nid">
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<br>
				<input type="submit" name="submit">
			</td>
		</tr>
	</table>
</center>

<h1 align="center">Customer List</h1>
<?php
	$file = fopen("../models/customers.txt", "r");

	echo "<pre>";
	while (!feof($file)) {
		echo fgets($file);
	}
	echo "</pre>";

	fclose($file);
?>
	<!-- <table border="1" align="center">
		<tr>
			<th>S/N</th>
			<th>Name</th>
			<th>Id</th>
			<th align="center">Address</th>
			<th>Phone</th>
			<th>NID Number</th>
			<th align="center" colspan="2">Action</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Asif</td>
			<td>A0011</td>
			<td>House 0055, Block A, Bashundhara R/A,Dhaka-1229 </td>
			<td>01631122331</td>
			<td>9454985779</td>
			<td><a href="Edit.html">Edit</td>
			<td><a href="Edit.html">Delete</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Sanjida</td>
			<td>A0012</td>
			<td>House 0011, Sector 14, Uttara, Dhaka-1230 </td>
			<td>01797917013</td>
			<td>6893822154</td>
			<td><a href="Edit.html">Edit</td>
			<td><a href="Edit.html">Delete</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Aiswarjah</td>
			<td>A0013</td>
			<td>House 0099, Block C, Bashundhara R/A,Dhaka-1229 </td>
			<td>01796676104</td>
			<td>9848711080</td>
			<td><a href="Edit.html">Edit</td>
			<td><a href="Edit.html">Delete</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Nishat</td>
			<td>A0014</td>
			<td>House 0044, Kachukhet Road, Mirpur 14, Dhaka-1216 </td>
			<td>01637921013</td>
			<td>6724570430</td>
			<td><a href="Edit.html">Edit</td>
			<td><a href="Edit.html">Delete</td>
		</tr>
		<tr>
			<td>5</td>
			<td>Munira</td>
			<td>A0015</td>
			<td>House 0055, Stadium Road, Chandpur Sadar, Chandpur-3600 </td>
			<td>01797918098</td>
			<td>9070976269</td>
			<td><a href="Edit.html">Edit</td>
			<td><a href="Edit.html">Delete</td>
		</tr>
</table> -->	
<h1 align="center"><a href="Dashboard.html">Home</h1>	
</form>			
</body>
</html>