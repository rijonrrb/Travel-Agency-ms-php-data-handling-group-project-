<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Umra Package</title>
</head>
<body>
	<?php
	session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.html");
	}
	?>
	<?php
	include '../RASHEDUL/View/header.html';

	?>
	<?php
	include '../RASHEDUL/View/heading.php';

	?>
	<div style="width: 100%; height:auto; background-color: rgb(153, 153, 255); text-align: center;">
		<table width="100%" height="350px">
		     <tr style="width: 100%;height: 175px;" >
		     	<td width="50%" height="175px" align="center">
		     		<img src="../RASHEDUL/image/add.png" width=50% height="200px"><br>
		     		<a href="../RASHEDUL/view/addUmra.php" style="background-color: rgb(255, 0, 0);color: white;">Add Umra Package Information</a></td>
		     	<td width="50%" height="175px">
		     		<img src="../RASHEDUL/image/update.png" width=50% height="200px"><br>
		     		<a href="../RASHEDUL/view/updateUmra.php" style="background-color: rgb(255, 0, 0);color: white;">Update Umra Package Information</a></td>
		     </tr>
		     <tr style="width: 100%;height: 175px;" >
		     	<td colspan="2"  width="50%" height="175px">
		     		<img src="../RASHEDUL/image/all.png" width=25% height="200px"><br>
		     		<a href="../RASHEDUL/view/showUmra.php" style="background-color: rgb(255, 0, 0);color: white;">Show Umra Package Information</a></td>
		     
		     </tr>
		</table>
	
</div>

	<?php 
	include '../RASHEDUL/View/footer.php';
	?>


</body>
</html>