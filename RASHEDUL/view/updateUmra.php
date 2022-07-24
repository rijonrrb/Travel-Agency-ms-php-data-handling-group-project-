<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update_Umra</title>
	<script src="../RASHEDUL/view/js/updateUmra.js"></script>
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
	<form  action="../RASHEDUL/controller/updateUmraAction.php" method = "POST" name="form" onsubmit="ajax(this);return false;">
		<fieldset >
			<legend style="color: black;font-size: 30px;"><b>Update Umra Package Information</b></legend><br>


			<label for="id">Package ID :</label>
			<input class="name" type="text" name="id" id="id" >
			<span id="idError" style="color: red;"></span><br><br>
			

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