<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add_Umra</title>
	<script src="../RASHEDUL/view/js/addUmra.js"></script>
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
	<div style="width: 100%; height:400px; background-color: rgb(153, 153, 255); text-align: center;">
	<form  action="../RASHEDUL/controller/addUmraAction.php" method = "POST" name="form" onsubmit="ajax(this);return false;">
		<fieldset >
			<legend style="color: black;font-size: 30px;"><b>Add Umra Package Information</b></legend><br>


			<label for="name">Umra Package Name :</label>
			<input class="name" type="text" name="name" id="name" >
			<span id="nameError" style="color: red;"></span><br><br>
			

			<label for="category">Umra Package Category :</label>
			<input class="category" type="text" name="category" id="category" >
			<span id="categoryError" style="color: red;"></span><br><br>

			<label for="duration">Duration :</label>
			<input class="duration" type="text" name="duration" id="duration">
			<span id="durationError" style="color: red;"></span><br><br>

			<label for="price">Price :</label>
			<input class="price" type="text" name="price" id="price" >
			<span id="priceError" style="color: red;"></span><br><br>
            <span id="msg"> </span><br><br>
			<input type="submit" name="pass" value="Store" style="height: 40px;width: 150px;background-color: orange;">
		</fieldset>
	</form>
</div>

	<!--footer -->
	<?php include '../RASHEDUL/View/footer.php' ?>

</body>
</html>