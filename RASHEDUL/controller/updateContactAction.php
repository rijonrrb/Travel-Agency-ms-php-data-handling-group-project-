<?php
	session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.php");
	}
	include'../RASHEDUL/model/updateContatctdb.php';
$address = $phone = $email = $website = $fb = $ytube = "";
$addressErr = $phoneErr = $emailErr = $websiteErr = $fbErr = $ytubeErr = "";
$prevaddress = $prevphone = $prevemail = $prevwebsite = $prevfb = $prevytube = "";

$Successfull = $Error = "";
$flag = false;

if($_SERVER['REQUEST_METHOD']==="POST"){
	if (empty($_POST['address'])) {
		echo "Field can't be empty";
		$flag = true;
		// code...
	}
	if (empty($_POST['phone'])) {
		echo "Field can't be empty";
		$flag = true;
		// code...
	}
	if (empty($_POST['email'])) {
		echo "Field can't be empty";
		$flag = true;
		// code...
	}
	if (empty($_POST['web'])) {
		echo "Field can't be empty";
		$flag = true;
		// code...
	}
	if (empty($_POST['ytube'])) {
		echo "Field can't be empty";
		$flag = true;
		// code...
	}
	if (empty($_POST['fb'])) {
		echo "Field can't be empty";
		$flag = true;
		// code...
	}
	if(!$flag)
	{
       $address = input_data($_POST['address']);
       $phone = input_data($_POST['phone']);
       $email = input_data($_POST['email']);
       $website = input_data($_POST['web']);
       $ytube = input_data($_POST['ytube']);
       $fb = input_data($_POST['fb']);

       $res = updateContact($address,$phone,$email,$website,$ytube,$fb);
       if($res){
       	echo "<span id='msg' style='color: green;''>Contact information update successfully</span>";
       }
       else{
       	echo "<span id='msg' style='color: red;''>Updating failed</span>";
       }
    
        
	}
}

 function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

function write($content) {
$file = fopen(filepath, "w");
$fw = fwrite($file, $content . "\n");
fclose($file);
return $fw;
}

	?>