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
	<title>TGUIDE</title>
    <link rel="stylesheet"  href="../NEEHAL/View/css/tourguide.css">
</head>
<body id="tgbody">
<?php   
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

session_unset();
session_destroy();

header("location: ../NEEHAL/Controller/login.php");

}
    
?>
   <?php
    include '../NEEHAL/View/Wheading.php';
    ?>
    <!-- 2nd layer-->
   <?php
    include '../NEEHAL/Controller/Wbody.php';
    ?>

<br><br>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<div style= "text-align:right"><input type="submit" value="LOGOUT"></div>
</form>

</body>
</html>