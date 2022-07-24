<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
   <script src="../NEEHAL/View/js/registration.js"></script>
   <link rel="stylesheet" href="../NEEHAL/View/css/registration.css"></link>
</head>
<body>


<?php
   
   include "../NEEHAL/Model/dbRegistrationInsert.php";
   
   $fname = $lname = $dob = $gender = $nationality = $phone = $username = $password = $email =" ";
   $fnameErr = $lnameErr = $dobErr = $phoneErr = $usernameErr = $passwordErr = $emailErr =" ";
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
   if(empty($_POST["dob"])) 
   {
      $dobErr = "Please do not keep field empty";
      $flag = true;
   }
   if(empty($_POST["phone"])) 
   {
      $phoneErr = "Please do not keep field empty";
      $flag = true;
   }
   if(empty($_POST["username"])) 
   {
      $usernameErr = "Please do not keep field empty";
      $flag = true;
   }
   if(empty($_POST["password"])) 
   {
      $passwordErr = "Please do not keep field empty";
      $flag = true;
   }
   if(empty($_POST["email"])) 
   {
      $emailErr = "Please do not keep field empty";
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
      $username = test_input($_POST["username"]);
      $password = test_input($_POST["password"]);
      $email = test_input($_POST["email"]);

  
    $res = registration( $fname, $lname, $dob, $gender, $nationality, $phone, $username, $password, $email);
        if($res)
         {
        $successfulMessage = "Sucessfully registered!";
        }
        else {
        $errorMessage = "Error while registering.";
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

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name = "reg" onsubmit="return isValid()";>

<h1 id="h1tag"><b>REGISTRATION</h1><br>

<fieldset id="regfs">
   <legend id="reglgnd">BASIC INFORMATION:</legend><br><br>
<label for="fname">First Name:</label> <span style="color:red" >*</span>
<input type="text" id="fname" name="fname">
<span id="fnameErr" style="color:red;"></span>
<span style="color: red"><?php echo $fnameErr; ?></span>
<br></br>
<label for="lname">Last Name:</label> <span style="color:red" >*</span>
<input type="text" id="lname" name="lname">
<span id="lnameErr" style="color:red;"></span>
<span style="color: red"><?php echo $lnameErr ?></span>
<br></br>
<label for="dob"> Date of birth:</label> <span style="color:red" >*</span>
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
<span id="phoneErr" style="color:red;"></span>
<span style="color: red"><?php echo $phoneErr; ?></span>
<br></br>

</fieldset>
<br>
<fieldset id="regfs">
   <legend id="reglgnd">ACCOUNT INFORMATION:</legend><br><br>
<label for="username">Username:</label> <span style="color:red" >*</span>
<input type="text" id="username" name="username">
<span id="usernameErr" style="color:red;"></span>
<span style="color: red"><?php echo $usernameErr; ?></span>
<br></br>
<label for="password">Password:</label><span style="color:red" >*</span>
<input type="password" id="password" name="password" pattern="{8,}+">
<span id="passwordErr" style="color:red;"></span>
<span style="color: red"><?php echo $passwordErr; ?></span>
<br></br>
<label for="email">Email:</label><span style="color:red">*</span>
<input type="email" id="email" name="email">
<span id="emailErr" style="color:red;"></span>
<span style="color:red"><?php echo $emailErr; ?></span>
<br><br><br>

<input type="submit" name="Submit" value="Register" align="center"><br>

</fieldset>
      

</form>
<a href="../NEEHAL/Controller/login.php">,<p style = "text-align: right;">Go Back</p></a>
<span style="color: green"><?php echo $successfulMessage; ?></span>
<span style="color: red"><?php echo $errorMessage; ?></span>


</body>
  </html>