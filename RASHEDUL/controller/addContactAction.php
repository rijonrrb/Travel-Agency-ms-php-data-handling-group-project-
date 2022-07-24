	<?php
	include'../RASHEDUL/model/addContactdb.php';
	session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.php");
	}

$address = $phone = $email = $website = $fb = $ytube = "";
$addressErr = $phoneErr = $emailErr = $websiteErr = $fbErr = $ytubeErr = "";
$Successfull = $Error = "";
$flag = false;

if($_SERVER['REQUEST_METHOD']==="POST"){
	if (empty($_POST['address'])) {
		echo "address can't be empty";
		$flag = true;
		// code...
	}
	if (empty($_POST['phone'])) {
		echo "phone can't be empty";
		$flag = true;
		// code...
	}
	if (empty($_POST['email'])) {
		echo "email can't be empty";
		$flag = true;
		// code...
	}
	if (empty($_POST['web'])) {
		echo "web can't be empty";
		$flag = true;
		// code...
	}
	if (empty($_POST['ytube'])) {
		echo "ytube can't be empty";
		$flag = true;
		// code...
	}
	if (empty($_POST['fb'])) {
		echo "Fb can't be empty";
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

        $rowRes = get();
        if($rowRes===0){
        	$addRes = addContact($address,$phone,$website,$email,$ytube,$fb);
        	if($addRes){
        		echo "<span id='msg' style='color: green;''>Contact information added</span>";
        	}
        	else{

        		echo "<span id='msg' style='color: red;''>Failed to store contact information</span>";

        	}
        }
        else{
        	echo "<span id='msg' style='color: red;''>Contact information already exist</span>";
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