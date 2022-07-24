<?php

include'../RASHEDUL/model/dbConnect.php';
include'../RASHEDUL/model/adminregdb.php';

include'../RASHEDUL/model/userCheck.php';
	//value inititalizing
	$fname = $lname = $gender = $dob = $religion = $praddress = $peaddress = $phone = $email =  $user = $password = "";
	//error msg initializing 
		$fnameError = $lnameError = $genderError = $dobError = $religionError = $praddressError = $peaddressError = $phoneError = $emailError  = $userError = $passwordError = "";

		$Successful = $Error = "";

		$flag = false;
function input_data($data) 
  {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }
  if($_SERVER['REQUEST_METHOD']==="POST"){
  	//validating
			if(empty($_POST['fname'])){
				echo  "Field can' be empty";
				$flag = true;
			}

			if(empty($_POST['lname'])){
				echo "Field can' be empty";
					$flag = true;
			}

			if(empty($_POST['gender'])){
				echo "Field can' be empty";
					$flag = true;
			}

			if(empty($_POST['dob'])){
				echo "Field can' be empty";
					$flag = true;
			}

			if(empty($_POST['religion'])){
				echo "Field can' be empty";
					$flag = true;
			}

			if(empty($_POST['praddress'])){
				echo "Field can' be empty";
					$flag = true;
			}

			if(empty($_POST['peaddress'])){
				echo "Field can' be empty";
				$flag = true;
			}

			if(empty($_POST['phoneNumber'])){
				echo "Field can' be empty";
				$flag = true;
			}

			if(empty($_POST['mail'])){
				echo "Field can' be empty";
				$flag = true;
			}

		

			if(empty($_POST['userName'])){
				echo "Field can' be empty";
				$flag = true;
			}

			if(empty($_POST['password'])){
				echo "Field can' be empty";
				$flag = true;
			}
				//if all field validated
			if(!$flag)
			{
				$fname = input_data($_POST['fname']);
				$lname = input_data($_POST['lname']);
				$gender = input_data($_POST['gender']);
				$dob = input_data($_POST['dob']);
				$religion = input_data($_POST['religion']);
				$praddress = input_data($_POST['praddress']);
				$peaddress = input_data($_POST['peaddress']);
				$phone = input_data($_POST['phoneNumber']);
				$email = input_data($_POST['mail']);
				
				$user = input_data($_POST['userName']);
				$password = input_data($_POST['password']);
				$destination = "../RASHEDUL/image/";
		  $fileName = $_FILES['image']['name'];
		  $tempFile = $_FILES['image']['tmp_name'];
		  move_uploaded_file($tempFile, $destination . "" . $fileName);

				
				
				$getResult = get($user);
				if($getResult){
					echo "User name already exist";
				}
				else{
					 $result = register($fname,$lname,$gender,$dob,$religion,$praddress,$peaddress,$phone,$email,$user,$password,$fileName);
              if($result){
              	echo "Registration Successfully Done...!!!";
              	
              }
              else{
              	echo "Registration failed";
              }

				

				}

			 



            

       

			}

  }
?>