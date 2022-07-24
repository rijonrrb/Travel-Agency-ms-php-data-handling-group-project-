<?php
include'../RASHEDUL/model/updateProfiledb.php';
$fname = $lname = $phone = $email = $userName = $password="";
   $fnameErr = $lnameErr = $phoneErr = $emailErr = "";
   $success = $error = "";
   $flag = false;
   session_start();

   if($_SERVER['REQUEST_METHOD']==="POST")
   {

   	if(empty($_POST['fname'])){
   		echo "First name can't be empty";
   		$flag = true;
   	}

   	if(empty($_POST['lname'])){
   		echo "Last name can't be empty";
   		$flag = true;
   	}

         if(empty($_POST['email'])){
         echo "Email can't be empty";
         $flag = true;
      }
   	if(empty($_POST['phone'])){
   		echo "Phone can't be empty";
   		$flag = true;
   	}

   	

   	if(!$flag){

   		$fname = input_data($_POST['fname']);
   		$lname = input_data($_POST['lname']);
   		$phone = input_data($_POST['phone']);
   		$email = input_data($_POST['email']);
 if(isset($_SESSION['userName'])) {
    $userName = $_SESSION['userName'];
    }
    if(isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
    }
    $result = updateProfile($fname,$lname,$phone,$email,$userName,$password);
    if($result){
            //Cookie
    setcookie("fname", $fname, time() + (86400 * 30), "/");
    setcookie("lname", $lname, time() + (86400 * 30), "/");
      echo "<span style='color: green;''><b>Profile Updated Successfully</b> </span>";
      $_SESSION['fname']=$fname;
      $_SESSION['lname']=$lname;
      $_SESSION['phone']=$phone;
      $_SESSION['email']=$email;


    }
    else{
       echo " <span style='color: red;''><b>Updating failed</b> </span>";

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