<?php
include '../RASHEDUL/model/authenticate.php';
    $userName = $password = "";
    $userError = $passwordError = "";
	$flag = false;
	$Successful = $Error = "";

	function input_data($data) 
  {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }


	if($_SERVER['REQUEST_METHOD']==="POST"){
		
		if(empty($_POST['userName'])){
				$userError = "Field can' be empty";
				$flag = true;
		}

		if(empty($_POST['password'])){
				$passwordError = "Field can' be empty";
				$flag = true;
		}

		if(!$flag){

			$userName = input_data($_POST['userName']);
			$password = input_data($_POST['password']);

			$result = login($userName,$password);
			if($result){
				session_start();
				$_SESSION['fname']=$result['fname'];
				$_SESSION['lname']=$result['lname'];
				$_SESSION['gender']=$result['gender'];
				$_SESSION['dob']=$result['dob'];
				$_SESSION['religion']=$result['religion'];
				$_SESSION['praddress']=$result['praddress'];
				$_SESSION['peaddress']=$result['peaddress'];
				$_SESSION['phone']=$result['phone'];
				$_SESSION['email']=$result['email'];
				$_SESSION['userName']=$result['userName'];
				$_SESSION['password']=$result['password'];
				$_SESSION['image']=$result['image'];
				setcookie("fname", $result['fname'], time() + (86400 * 30), "/");
				setcookie("lname", $result['lname'], time() + (86400 * 30), "/");
				//setcookie("userName", $result['userName'], time() + (86400 * 30), "/");
				//setcookie("password", $result['password'], time() + (86400 * 30), "/");
				echo "login done";
				//sleep(3);
				header("location:../RASHEDUL/view/dashbord.php");

			}
			else{
				echo "Failed to login";
			}

			
		}
	}
?>