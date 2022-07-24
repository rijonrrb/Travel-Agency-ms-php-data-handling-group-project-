<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pakcage_Information</title>
</head>
<body>

	<?php
	session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.html");
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
		     <tr style="width: 100%;height: 175px;" >
		     	<td width="50%" height="175px" align="center">
		     		<img src="../RASHEDUL/image/add.png" width=50% height="200px"><br>
		     		<a href="../RASHEDUL/view/addPackage.php" style="background-color: rgb(255, 0, 0);color: white;">Add Package Information</a></td>
		     	<td width="50%" height="175px">
		     		<img src="../RASHEDUL/image/update.png" width=50% height="200px"><br>
		     		<a href="../RASHEDUL/view/updatePackage.php" style="background-color: rgb(255, 0, 0);color: white;">Update Package Information</a></td>
		     </tr>
		     <tr style="width: 100%;height: 175px;" >
		     	<td colspan="2"  width="50%" height="175px">
		     		<img src="../RASHEDUL/image/all.png" width=25% height="200px"><br>
		     		<a href="../RASHEDUL/view/showPackage.php" style="background-color: rgb(255, 0, 0);color: white;">Show Package Information</a></td>
		     
		     </tr>
		</table>
	
</div>



	<?php 
	include '../RASHEDUL/view/footer.php';
	?>

</body>
</html>