<?php
session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.html");
	}
	include'../RASHEDUL/model/updateUmradb.php';

$id = $name = $category = $duration = $price = "";


$flag = false;

if($_SERVER['REQUEST_METHOD']==="POST"){
	
	if (empty($_POST['id'])) {
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
       $id = input_data($_POST['id']);

       $duration = input_data($_POST['duration']);
       $price = input_data($_POST['price']);

       $res = updateUmra($duration,$price,$id);
       if($res){
       	echo"<span  style='color: green;''>Umra Package information Updated</span>";
       }
       else{
       	echo"<span  style='color: red;''>Updating failed.!!!</span>";
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