<?php

include'../RASHEDUL/model/updatepassdb.php';
session_start();
$prepass = $postpass = $confirmpass = "";
$prepassErr = $postpassErr = $confirmpassErr = "";
$success = $error = "";
$flag = false;
if ($_SERVER['REQUEST_METHOD']==="POST") {
	
	if(empty($_POST['prepass'])){
		echo "Field can't be empty";
		$flag = true;
	}
	if(empty($_POST['postpass'])){
		echo "Field can't be empty";
		$flag = true;
	}
	if(empty($_POST['confirmpass'])){
		echo "Field can't be empty";
		$flag = true;
	}
	if( $_POST['postpass']!==$_POST['confirmpass']){
		echo "Password doesn't match";
		$flag = true;
	}
	if($_SESSION['password']!==$_POST['prepass']){
		echo "<span  style='color: red;''>It is not your previous password</span>";
		$flag = true;
	}
	if(!$flag){

		$prepass = input_data($_POST['prepass']);
		$postpass = input_data($_POST['postpass']);
		$confirmpass = input_data($_POST['confirmpass']);
		    $un = "";
    if(isset($_SESSION['userName'])) {
    $un = $_SESSION['userName'];
    }

    	$update = updatePass($un,$postpass);
    	if($update){
    		echo"<span  style='color: green;''>Update profile Successfully</span>";
    		$_SESSION['password']=$postpass;
    		setcookie("password", $postpass, time() + (86400 * 30), "/");
    	}
    	else{
    		echo"<span  style='color: red;''>Update profile Successfully</span>";
    	}
    }
  

  

	}

  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

?>