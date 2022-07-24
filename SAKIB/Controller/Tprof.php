<!DOCTYPE html>
<html>
<head>
   
	<meta charset="utf-8">
	<title></title>
   <link rel="stylesheet" href="../View/css/profile.css"></link>
</head>

<body>


<?php
   include "../Model/dbUpdateProfile.php";
   $fname = $lname = $dob = $gender = $nationality = $phone =" ";
   $fnameErr = $lnameErr = $dobErr = $phoneErr  =" ";
   $flag = false;
   $successfulMessage = "";
   $errorMessage = "";
   
   

if($_SERVER['REQUEST_METHOD'] == "POST") 
{

  if(empty($_POST["fname"])) 
   {
      $fnameErr = "Please do not keep field empty";
      $flag = true;
   }
  if(empty($_POST["lname"])) 
   {
      $lnameErr = "Please do not keep field empty";
      $flag = true;
   }
   if(empty($_POST["phone"])) 
   {
      $phoneErr = "Please do not keep field empty";
      $flag = true;
   }

 
  if(!$flag) 
    {
      $fname = test_input($_POST["fname"]);
      $lname = test_input($_POST["lname"]);
      $dob = test_input($_POST["dob"]);
      $gender = test_input($_POST["gender"]);
      $nationality = test_input($_POST["nationality"]);
      $phone = test_input($_POST["phone"]);


  
    $un = "";
    if(isset($_COOKIE['uname'])) {
    $un = $_COOKIE['uname'];
    }

 
    $res = updateProfile($fname , $lname , $dob , $gender, $nationality , $phone ,$un);
     if($res)
     {
      $successfulMessage = "Successfully updated";
     }
     else
     {
      $errorMessage = "Failed to update!";
     }
    }
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}



?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" >

<br>
<h1 id="h1tag"><b>Edit Profile</h1><br>

<fieldset id="profile" >

   <label id="profilelgnd"><b>BASIC INFORMATION:</b></label><br><br><br>
<label for="fname">First Name:</label> <span style="color:red" >*</span>
<input type="text" id="fname" name="fname">
<span style="color: red"><?php echo $fnameErr; ?></span>
<br></br>
<label for="lname">Last Name:</label> <span style="color:red" >*</span>
<input type="text" id="lname" name="lname">
<span style="color: red"><?php echo $lnameErr ?></span>
<br></br>
<label for="dob"> Date of birth:</label> 
<span style="color:red" >*</span>
<input type="date" id="dob" name="dob">
<br></br>
<label for="gender">Gender:</label>
<input type="radio"  name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<br></br>
<label for="nationality">Nationality:</label>
<select id="nationality" name="nationality">
   <option value=""selected></option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="United States">United States</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Turkey">Turkey</option>
</select> 
<br></br>
<label for="phone">Phone Number:</label> <span style="color:red" >*</span>
<input type="tel" id="phone" name="phone" max="13">
<span style="color: red"><?php echo $phoneErr; ?></span>
<br></br><br>

<input type="submit" name="Submit" value="SUBMIT" align="center">

</fieldset>
<br>

       <br>
       

</form>
<a href="../View/TourGuide.php">,<p style = "text-align: right;">Go Back</p></a>
<span style="color: green"><?php echo $successfulMessage; ?></span>
<span style="color: red"><?php echo $errorMessage; ?></span>


</body>
  </html>