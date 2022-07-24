<!DOCTYPE html>
<html>
<head>
<title>Travel Agency</title>
<link rel="stylesheet" href="../View/css/Creg.css"></link>
</head>
<body>
<?php
include '../Model/dbmanager.php';
// define variables to empty values  
$fname = $lname = $fullname = $gender = $dob = $religion = $praddress = $peaddress  =$phone = $email = $username = $password = ""; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
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
      $username = input_data($_POST["username"]);
      $password = input_data($_POST["password"]);

        $res = reg($fname, $lname, $fullname, $gender, $dob, $religion, $praddress, $peaddress,  $phone, $email, $username, $password);
        if($res) {
        header("Location: ../Controller/Clogn.php");
        }
        else {
        echo "Error while saving.";
        }
    }
  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }
?>
<h1 style="text-align: center;">Registration form</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" >
  <fieldset>
    <legend><h3>Basic Information</h3></legend>
    <label for="fname">Enter your first name:</label>
    <input type="text" id="fname" name="fname">
     <br><br>
    <label for="lname">Enter your Last name:</label>
    <input type="text" id="lname" name="lname">
    <br><br>
    <label for="fullname">Enter your Full name:</label>
    <input type="text" id="fullname" name="fullname">
     <br><br>
    <label for="gender">Gender :</label>
    <select name="gender" id="gender">
    <option></option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Others">Others</option>
    </select>
    <br><br>
    <label for="DOB">Date of birth:</label>
    <input type="date" id="dob" name="dob">
    <br><br>
    <label for="religion">Choose your Religion:</label>
    <select name="religion" id="religion">
    <option></option>
    <option value="Islam">Islam</option>
    <option value="Hinduism">Hinduism</option>
    <option value="Christianity">Christianity</option>
    <option value="Buddhism">Buddhism</option>
    <option value="Sikhism">Sikhism</option>
    </select>
    <br><br>
    
  </fieldset>
  <fieldset>
    <legend><h3>Contact Information</h3></legend>
    <label for="Praddress">Enter your Present Address:</label>
    <textarea name="Praddress" id="Praddress" rows="3" cols="30"></textarea>
     <br><br>
    <label for="Peaddress">Enter your Permanent Address:</label>
    <textarea name="Peaddress" id="Peaddress" rows="3" cols="30"></textarea>
     <br><br>
    <label for="phone">Enter your phone number:</label>
    <input type="tel" id="phone" name="phone" >
     <br><br>
    <label for="email">Enter your Email:</label>
    <input type="email" id="email" name="email">
    <br><br>
    </fieldset>
    <fieldset>
    <legend><h3>Account Information</h3></legend>
    <label for="username">Enter your Username:</label>
    <input type="text" id="username" name="username">
    <br><br>
    <label for="password">Enter your Password:</label>
    <input type="password" id="password" name="password">
    <br>
  </fieldset>
  <br><br><input type="submit" value="Submit" id="subb">
</form>
 <br>
<div id="reg"></div>
 <a href="../Controller/Clog.php" style="text-decoration: none;width: 55%;padding: 8px;color: white;background-color: #DC143C;text-align: center;">Go Back</a><br>
</body>
</html>