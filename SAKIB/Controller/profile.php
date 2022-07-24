<!DOCTYPE html>
<html>
<head>
<title>Travel Agency</title>
<link rel="stylesheet" href="../View/css/pro.css"></link>
</head>
<body>
    <?php
include '../Model/dbmanager.php';
// define variables to empty values  
$fnameErr = $lnameErr = $fullnameErr = $genderErr = $dobErr = $religionErr = $praddressErr = $peaddressErr  =$phoneErr = $emailErr = $usernameErr  = "";  
$fname = $lname = $fullname = $gender = $dob = $religion = $praddress = $peaddress  =$phone = $email = $username = "";  
$flag = false;
$successfulMessage = $errorMessage = "";
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  


//String Validation  
    if (empty($_POST["fname"])) 
    {  
        $fnameErr = " first Name is required"; 
        $flag = True;
    } 
  
    
    if (empty($_POST["lname"])) 
    {  
        $lnameErr = " Last Name is required";
        $flag = True;  
    } 
     
    if (empty($_POST["fullname"])) 
    {  
        $fullnameErr = " Full Name is required";
        $flag = True;  
    } 
    if (empty($_POST["gender"])) 
    {  
        $genderErr = " Gender is required";
        $flag = True;  
    } 
      

    if (empty($_POST["dob"])) 
    {  
        $dobErr = " Date of birth is required";
        $flag = True;  
    }  

    if (empty($_POST["religion"])) 
    {  
        $religionErr = " Religion is required";
        $flag = True;  
    } 
    if (empty($_POST["Praddress"])) 
    {  
        $praddressErr = " Present Address is required";
        $flag = True;  
    } 
        if (empty($_POST["Peaddress"])) 
    {  
        $peaddressErr = " Permanent Address is required";
        $flag = True;  
    } 
        if (empty($_POST["phone"])) 
    {  
        $phoneErr = " Phone number is required";
        $flag = True;  
    } 

    if (empty($_POST["email"])) 
    {  
       $emailErr = " Email is required";
       $flag = True;  
    } 

    /*if (empty($_POST["username"])) 
    {  
       $usernameErr = " Username is required";
       $flag = True;  
    }*/


    if(!$flag) 
    {
      $fname = input_data($_POST["fname"]);
      $lname = input_data($_POST["lname"]);
      $fullname = input_data($_POST["fullname"]);
      $gender = input_data($_POST["gender"]);
      $dob = input_data($_POST["dob"]);
      $religion = input_data($_POST["religion"]);
      $praddress = input_data($_POST["Praddress"]);
      $peaddress = input_data($_POST["Peaddress"]);
      $email = input_data($_POST["email"]);
      $phone = input_data($_POST["phone"]);
      
    $un = "";
    if(isset($_COOKIE['uname'])) {
    $un = $_COOKIE['uname'];
    }


        $res = update($fname, $lname, $fullname, $gender, $dob, $religion, $praddress, $peaddress,  $phone, $email, $un);
        if($res) {
        $successfulMessage = "Successfully done....";
        }
        else {
        $errorMessage = "Error while saving.";
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
<h1>Profile Edit</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" >
  <fieldset>
    <legend><h3>Basic Information</h3></legend>
    <label for="fname">Enter your first name:</label>
    <input type="text" id="fname" name="fname">
    <span style="color: red"><?php echo $fnameErr; ?> </span> <br><br>
    <label for="lname">Enter your Last name:</label>
    <input type="text" id="lname" name="lname">
    <span style="color: red"><?php echo $lnameErr; ?> </span><br><br>
    <label for="fullname">Enter your Full name:</label>
    <input type="text" id="fullname" name="fullname">
    <span style="color: red"><?php echo $fullnameErr; ?> </span> <br><br>
    <label for="gender">Gender :</label>
    <select name="gender" id="gender">
    <option></option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Others">Others</option>
    </select>
    <span style="color: red"><?php echo $genderErr; ?> </span><br><br>
    <label for="DOB">Date of birth:</label>
    <input type="date" id="dob" name="dob">
    <span style="color: red"><?php echo "&nbsp;&nbsp;".$dobErr; ?> </span><br><br>
    <label for="religion">Choose your Religion:</label>
    <select name="religion" id="religion">
    <option></option>
    <option value="Islam">Islam</option>
    <option value="Hinduism">Hinduism</option>
    <option value="Christianity">Christianity</option>
    <option value="Buddhism">Buddhism</option>
    <option value="Sikhism">Sikhism</option>
    </select>
    <span style="color: red"><?php echo $religionErr; ?> </span><br><br>
    
  </fieldset>
  <fieldset>
    <legend><h3>Contact Information</h3></legend>
    <label for="Praddress">Enter your Present Address:</label>
    <textarea name="Praddress" rows="3" cols="30"></textarea>
    <span style="color: red"><?php echo $praddressErr; ?> </span> <br><br>
    <label for="Peaddress">Enter your Permanent Address:</label>
    <textarea name="Peaddress" rows="3" cols="30"></textarea>
    <span style="color: red"><?php echo $peaddressErr; ?> </span> <br><br>
    <label for="phone">Enter your phone number:</label>
    <input type="tel" id="phone" name="phone" >
    <span style="color: red"><?php echo $phoneErr; ?> </span> <br><br>
    <label for="email">Enter your Email:</label>
    <input type="email" id="email" name="email">
    <span style="color: red"><?php echo $emailErr; ?> </span><br><br>
  </fieldset>
  <br><div style="text-align : center"><input type="submit" value="Submit" id="subb"></div>
</form>
 <br>
 <a href="../view/Manager.php">Go Back</a><br>
 <span style="color: green"><?php echo "<b>".$successfulMessage."</b>"; ?></span>
<span style="color: red"><?php echo "<b>".$errorMessage."</b>"; ?></span>

</body>
</html>