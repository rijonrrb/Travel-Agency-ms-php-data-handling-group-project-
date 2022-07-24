	<?php

	session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.php");
	}
include'../RASHEDUL/model/updateAgentdb.php';
 $name = $phone = $email = $nid = "";
$idErr = $nameErr = $phoneErr = $emailErr = $nidErr = "";
$Successfull = $Error = "";
$flag = false;

if($_SERVER['REQUEST_METHOD']==="POST"){

	if(isset($_POST['pass'])){

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

	if (empty($_POST['id'])) {
		echo "Field can't be empty";
		$flag = true;
		// code...
	}


	if(!$flag)
	{
       $name = input_data($_POST['name']);
       $phone = input_data($_POST['phone']);
       $email = input_data($_POST['email']);
       $id = input_data($_POST['id']);
      
     
		  $result = updateAgent($name,$phone,$email,$id);
		  if($result){
		  	echo "<span style='color: blue;'><b>Agent updated successfully</b></span>";
		  }
		  else{
		  	echo "<span style='color: red;'><b>Can't updated agent</b></span>";
		  }
      
      
	}
	}
	else{
		echo"not pressing submit";
	}
	
	
}

 function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

	?>