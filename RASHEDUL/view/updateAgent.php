<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>updateAgent</title>
	<link rel="stylesheet" type="text/css" href="../RASHEDUL/view/css/updateAgent.css">
	<script src="../RASHEDUL/view/js/updateAgent.js"></script>
</head>
<body>
	<?php
	session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.php");
	}
	include'../RASHEDUL/model/updateAgentdb.php';
	?>

	<?php
	include '../RASHEDUL/view/header.html';
	?>
	<?php
	include '../RASHEDUL/view/heading.php';

	?>
	
	<div class="overall" >
	<form  action="../RASHEDUL/controller/updateAgentAction.php" method = "POST" enctype="multipart/form-data" name="form" onsubmit="ajax(this); return false;">
		<fieldset >
			<!--<legend style="color: black;font-size: 30px;"><b>Add Tour Agent Information</b></legend><br>-->
			<div class="form">

				
					
			<br><br>
			<h1><u>Updating Agent</u></h1>

			<label for="id">ID : </label>
			<input class="id" type="text" name="id" id="id">
			<span id="idError" style="color: red;"></span>
			<input class="search" type="submit" name="pass" value="Search"><br><br>
			
			<label for="name">Name : </label>
			<input class="name" type="text" name="name" id="name">
			<span id="nameError" style="color: red;"></span><br><br>
			

			<label for="phone">Phone Number : </label>
			<input class="phone" type="tel" name="phone" id="phone">
			<span id="phoneError" style="color: red;"></span><br><br>
		

			<label for="email">Email : </label>
			<input class="email" type="email" name="email" id="email">
			<span id="emailError" style="color: red;"></span><br><br>


            <span id="msg"><b></b> </span><br><br>
			<input class="submit" type="submit" name="pass" value="Update">
			</div>

		
		</fieldset>
	</form>
</div>

	<!--footer -->
	<?php include '../RASHEDUL/View/footer.php' ?>

</body>
</html>