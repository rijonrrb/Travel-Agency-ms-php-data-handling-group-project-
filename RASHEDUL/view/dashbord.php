
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashbord</title>

</head>
<body>

	<?php
	session_start();
	if(!isset($_SESSION['userName'])){
		
		header("location: ../RASHEDUL/view/login.php");
	}
	?>

	<!-- 1st layer -->
	<?php
	include '../RASHEDUL/view/header.html';
	?>
	<!-- 2nd layer-->
<?php
	include '../RASHEDUL/view/heading.php';
	?>
	<img src="../RASHEDUL/image/forntPoster.jpg" width="100%" height="400">
	<!--Last Layer -->
	<?php
	include '../RASHEDUL/View/footer.php';
	?>
	
</body>
</html>