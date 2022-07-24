	<?php

	session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.php");
	}
include'../RASHEDUL/model/addAgentdb.php';
 $name = $phone = $email = $nid = "";
$idErr = $nameErr = $phoneErr = $emailErr = $nidErr = "";
$Successfull = $Error = "";
$flag = false;

if($_SERVER['REQUEST_METHOD']==="POST"){
	
	if (empty($_POST['name'])) {
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
	if (empty($_POST['nid'])) {
		echo "Field can't be empty";
		$flag = true;
		// code...
	}

	if(!$flag)
	{
       $name = input_data($_POST['name']);
       $phone = input_data($_POST['phone']);
       $email = input_data($_POST['email']);
       $nid = input_data($_POST['nid']);
      
     	  $destination = "../RASHEDUL/image/";
		  $fileName = $_FILES['image']['name'];
		  $tempFile = $_FILES['image']['tmp_name'];
		  move_uploaded_file($tempFile, $destination . "" . $fileName);
		  $result = addAgent($name,$phone,$email,$nid,$fileName);
		  if($result){
		  	echo " <span style='color: blue;''><b>Agent added successfully</b> </span>";
		  }
		  else{
		  	echo " <span style='color: red;''><b>Can't add agent</b> </span>";
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