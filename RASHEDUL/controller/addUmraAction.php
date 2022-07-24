<?php

	session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.html");
	}
	include'../RASHEDUL/model/addUmradb.php';

$id = $name = $category = $duration = $price = "";


$flag = false;

if($_SERVER['REQUEST_METHOD']==="POST"){
	
	if (empty($_POST['name'])) {
		echo "Field can't be empty";
		$flag = true;
		// code...
	}
	if (empty($_POST['category'])) {
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
       $name = input_data($_POST['name']);
       $category = input_data($_POST['category']);
       $duration = input_data($_POST['duration']);
       $price = input_data($_POST['price']);

       $res = addUmra($name,$category,$duration,$price);
       if($res){
       	echo"<span id='msg' style='color: green;''>Umra Package information added</span>";
       }
       else{
       	echo"<span id='msg' style='color: red;''>Umra Package information added</span>";
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

