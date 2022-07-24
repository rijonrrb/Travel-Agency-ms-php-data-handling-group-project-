<?php
	session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.html");
	}
		//define("filepath", "../RASHEDUL/Controller/package.txt");
	include'../RASHEDUL/model/addPackagedb.php';
$destination = $duration = $price = "";
$Successfull = $Error = "";
$flag = false;

if($_SERVER['REQUEST_METHOD']==="POST"){

	if (empty($_POST['destination'])) {
		echo "Field can't be empty";
		$flag = true;
		// code...
	}
	
	if (empty($_POST['duration'])) {
		echo "Field can't be empty";
		$flag = true;
		// code...
	}
	if (empty($_POST['price'])) {
		echo "Field can't be empty";
		$flag = true;
		// code...
	}

	if(!$flag)
	{
 
       $destination = input_data($_POST['destination']);
       $duration = input_data($_POST['duration']);
       $price = input_data($_POST['price']);

       $res = addPackage($destination,$duration,$price);
       if($res){
       	echo"<span id='msg' style='color: green;''>Package information added</span>";
       }
       else
       {
       	echo"<span id='msg' style='color: red;''>Package Adding failed</span>";
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