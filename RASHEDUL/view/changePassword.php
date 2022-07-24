<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change_Password</title>
	<link rel="stylesheet" type="text/css" href="../RASHEDUL/view/css/change_pass.css">
	<script src="../RASHEDUL/view/js/changePass.js"></script>
</head>
<body>
		<?php
	session_start();
	if(!isset($_SESSION['userName'])){
		header("location:../RASHEDUL/view/login.html");
	}
	?>
	<?php
include '../RASHEDUL/view/header.html';
?>
<?php
include '../RASHEDUL/view/heading.php';
?>


<div class="form-class">
	<form  action="../RASHEDUL/controller/change_passAction.php" method = "POST" name="form" onsubmit="ajax(this);return false;">
		<fieldset class="fieldset" >
			<legend class="legend" ><b>Changing Password</b></legend><br>

			<label for="prepass">Current Password : </label>
			<input type="text" name="prepass" id="prepass" >
			<span id="prepassError" style="color: red; ">  </span><br><br>

			<label for="postpass">New Password : </label>
			<input type="Password" name="postpass" id="postpass">
			<span id="postpassError" style="color: red;">  </span><br><br>

			<label for="confirmpass">Confirm New Password : </label>
			<input type="Password" name="confirmpass" id="confirmpass">
			<span id="confirmpassError" style="color: red;"></span><br><br>
			<span id="msg"></span><br><br>
           
			<input class="submit" type="submit" name="pass" value="Change Password">
		</fieldset>
	</form>
</div>
<?php
	include '../RASHEDUL/view/footer.php';
	?>
</body>
</html>