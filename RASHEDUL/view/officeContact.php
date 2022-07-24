<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Office Contact</title>
</head>
<body>
	<?php
	session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.php");
	}
	?>
	<?php
	include '../RASHEDUL/view/header.html';

	?>
	<?php
	include '../RASHEDUL/view/heading.php';

	?>
	<div style="width: 100%; height:auto; background-color: rgb(153, 153, 255); text-align: center;">
		<table width="100%" height="350px">
			<tr>
				<td width="50%" height="350px" style="text-align: center;">
					<img src="../RASHEDUL/image/add.png" width=50% height="200px"><br>
					<a href="../RASHEDUL/view/addContact.php" style="background-color: red; color: white;width: 100%;">Add Contact Information</a>
				</td>
				<td width="50%" height="350px" style="text-align: center;">
					<img src="../RASHEDUL/image/update.png" width=50% height="200px"><br>
					<a href="../RASHEDUL/view/updateContact.php"style="background-color: red; color: white;">Update Contact Information</a>
				</td>
			</tr>
		</table>
	
</div>

	<?php 
	include '../RASHEDUL/view/footer.php';
	?>


</body>
</html>