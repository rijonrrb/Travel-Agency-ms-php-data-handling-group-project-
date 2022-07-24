<?php
	if(!isset($_SESSION['userName'])||!isset($_COOKIE['fname'])){
		header("location:../RASHEDUL/view/login.html");
	}


$fname = $lname = "";
if(isset($_COOKIE['fname'])){
	$fname = $_COOKIE['fname'];
}
if(isset($_COOKIE['lname'])){
	$lname = $_COOKIE['lname'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Heading</title>
	<link rel="stylesheet" type="text/css" href="../RASHEDUL/view/css/heading.css">
</head>
<body>

		
		<table cellpadding="0" cellspacing="0" border="0" align="center" bgcolor="#84E881" height = "50" width="100%">
		<tr bgcolor="#84E881" height = "50" width="100%">
			<td  height = "50" width="20%"><a href="../RASHEDUL/view/dashbord.php"><img src="../RASHEDUL/image/logo.png" height="100" width="100%"></a></td>
			<td  height = "50" width="60%" align="center" ><b style="font-size: 50px;"><?php echo "Welcome" . " " .$fname . " " .$lname; ?></b></td>
			<td class="home"   height = "50" width="5%" align="center"><a class="hometext" href="../RASHEDUL/view/dashbord.php" style="color: red;  ;"><img src="../RASHEDUL/image/icons8-home-24.png"><br><b >Home Page</b> </a></td>
			<td class="cpass"  height = "50" width="5%"><a class="cpassText" href="../RASHEDUL/view/changePassword.php" style="color: red;  ;"><img src="../RASHEDUL/image/change_password.png"> <br><b>Change Password</b></a></td>
			<td class="update"  height = "50" width="5%"><a class="updateText" href="../RASHEDUL/view/viewProfile.php" style="color: red;  ;"><img src="../RASHEDUL/image/viewProfile.png"><br><b>View Profile</b> </a></td>
			<td class="logout"  height = "50" width="5%">
				<a class="logoutText" href="../RASHEDUL/controller/logout.php" style="color: red;  ;"><img src="../RASHEDUL/image/logout.png"><br><b>Logout</b> </a>
	
			</td>
		</tr>
	</table>
	
	


</body>
</html>