<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UpdateContact</title>
	<link rel="stylesheet" type="text/css" href="../RASHEDUL/view/css/addContact.css">
	<script src="../RASHEDUL/view/js/updateContact.js"></script>
</head>
<body>

	<?php
	session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.php");
	}
	include '../RASHEDUL/model/updateContatctdb.php';
	$result = get();
	?>
	<?php
	include '../RASHEDUL/View/header.html';

	?>
	<?php
	include '../RASHEDUL/view/heading.php';

	?>
	<div class="form-div" >
	<form  action="../RASHEDUL/controller/updateContactAction.php" method = "POST" name="form" onsubmit="ajax(this);return false;">
		<fieldset class="form-fieldset">
			<legend class="form-legend"><b>Update Contact Information</b></legend><br>

			<label for="address">Address</label>
			<textarea id="address" name="address" rows="3" cols="30"><?php echo $result['address']; ?></textarea>
			<span id="addressError" style="color: red;"></span>
			<?php echo "&nbsp"; ?>

			<label for="phone">Phone Number : </label>
			<input  type="tel" name="phone" id="phone" value="<?php echo $result['phone']; ?>">
			<span id="phoneError" style="color: red;"></span><br><br>

			<label for="email">Email : </label>
			<input type="email" name="email" id="email" value="<?php echo $result['email']; ?>">
			<span id="emailError" style="color: red;"></span>
			<?php echo "&nbsp"; ?>

			<label for="web">Website : </label>
			<input type="web" name="web" id="web" value="<?php echo $result['web']; ?>">
			<span id="webError" style="color: red;"></span><br><br>

				<label for="ytube">Youtube Channel : </label>
			<input type="web" name="ytube" id="ytube" value="<?php echo $result['youtube']; ?>">
			<span id="ytubeError" style="color: red;"></span><?php echo "&nbsp"; ?>

			<label for="fb">FB Link : </label>
			<input type="web" name="fb" id="fb" value="<?php echo $result['fb']; ?>">
			<span id="fbError" style="color: red;"></span><br><br>			
            <span id="msg"></span><br><br>
			<input class="submit" type="submit" name="pass" value="Update">
		</fieldset>
	</form>
</div>
	<?php 
	include '../RASHEDUL/view/footer.php';
	?>

</body>
</html>