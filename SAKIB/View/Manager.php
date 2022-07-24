<?php 
	session_start();

	$username = "";

	if(isset($_SESSION['username'])) 
	{
		$username = $_SESSION['username'];
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Travel Agency</title>
<link rel="stylesheet" href="../View/css/Manager.css"></link>
</head>
<body style="background-color:red;">
<?php	
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

session_unset();
session_destroy();

header("location:../Controller/Login.php");

}
	
?>
   <?php
	include '../View/heading.php';
	?>
	<!-- 2nd layer-->
   <?php
	include '../View/Body.php';
	?>
<br><br><br><br><br>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

<div id="m1"><input type="submit" value="Logout" id="sub"></div>

</form>
</body>
</html>