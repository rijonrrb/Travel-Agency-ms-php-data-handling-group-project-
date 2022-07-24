<?php
session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.html");
	}
		//define("filepath", "../RASHEDUL/Controller/package.txt");
	include'../RASHEDUL/model/updatePackagedb.php';
$id = $duration = $price = "";
$Successfull = $Error = "";
$flag = false;

if($_SERVER['REQUEST_METHOD']==="POST"){

	if (empty($_POST['id'])) {
		echo "Id can't be empty";
		$flag = true;
		// code...
	}
	
	if (empty($_POST['duration'])) {
		echo "duration can't be empty";
		$flag = true;
		// code...
	}
	if (empty($_POST['price'])) {
		echo "price can't be empty";
		$flag = true;
		// code...
	}

	if(!$flag)
	{
 
       $id = input_data($_POST['id']);
       $duration = input_data($_POST['duration']);
       $price = input_data($_POST['price']);

       $res = updatePackage($id,$duration,$price);
       if($res){
       	echo"<span id='msg' style='color: green;''>Package information Updated</span>";
       }
       else
       {
       	echo"<span id='msg' style='color: red;''>Package Updating failed</span>";
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