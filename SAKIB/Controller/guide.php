<!DOCTYPE html>
<html>
<head>
<title>Travel Agency</title>
<link rel="stylesheet" href="../View/css/guideA.css"></link>
</head>
<body>

<?php
include '../view/gheading.php';
?>

<?php
include '../Model/dbguideD.php';
 
$guideid = $fullname = $gender = $dob = $religion = $Praddress = $Peaddress  =$phone = $email = $country = $region = $type = $timee = "";  
$flag = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      $guideid = input_data($_POST["guideid"]);
      $fullname = input_data($_POST["fullname"]);
      $gender = input_data($_POST["gender"]);
      $dob = input_data($_POST["dob"]);
      $religion = input_data($_POST["religion"]);
      $Praddress = input_data($_POST["Praddress"]);
      $Peaddress = input_data($_POST["Peaddress"]);
      $phone = input_data($_POST["phone"]);
      $email = input_data($_POST["email"]);
      $country = input_data($_POST["country"]);
      $region = input_data($_POST["region"]);
      $type = input_data($_POST["type"]);
      $timee = input_data($_POST["time"]);
      

        $res = reg($guideid, $fullname, $gender, $dob, $religion, $Praddress, $Peaddress, $email,  $phone, $country, $region, $type, $timee);
        if($res) {
        echo "Successfully done....";
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
<h1>Tour guide details adding</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" >
    <fieldset>
    <legend>Basic Information</legend>
    <label for="guideid">Enter Tour guide Id:</label>
    <input type="text" id="guideid" name="guideid">
    <br><br>
    <label for="fullname">Enter Tour guide Full name:</label>
    <input type="text" id="fullname" name="fullname">
    <br><br>
    <label for="gender">Gender :</label>
    <input type="radio" name="gender" value="Male">
    <label for="Male">Male</label>
    <input type="radio" name="gender"   value="Female">
    <label for="Female">Female</label>
    <input type="radio" name="gender" value="Others">
    <label for="Others">Others</label>
    <br><br>
    <label for="dob">Enter Tour guide Date of birth:</label>
    <input type="date" id="dob" name="dob">
    <br><br>
    <label for="religion">Choose Tour guide's Religion:</label>
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
    <legend>Contact Information</legend>
    <label for="Praddress">Enter Customer Present Address:</label>
    <textarea name="Praddress" id="Praddress" rows="3" cols="30"></textarea>
    <br><br>
    <label for="Peaddress">Enter Customer Permanent Address:</label>
    <textarea name="Peaddress" id="Peaddress" rows="3" cols="30"></textarea>
    <br><br>
    <label for="phone">Enter Customer phone number:</label>
    <input type="tel" id="phone" name="phone" >
    <br><br>
    <label for="email">Enter Customer Email:</label>
    <input type="email" id="email" name="email">
    <br><br>
    </fieldset>

    <fieldset>
    <legend>Guiding Information</legend>
    <label for="country">Select guiding country:</label>
    <select name="country" id="country">
    <option></option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="India">India</option>
    <option value="Chaina">Chaina</option>
    <option value="Nepal">Nepal</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Dubai">Dubai</option>
    <option value="Thailand">Thailand</option>
    </select>
    <br><br>
    <label for="region">Enter guiding region:</label>
    <input type="text" id="region" name="region">
    <br><br>

    <label for="type">Choose Level of tour Guide:</label>
    <select name="type" id="type">
    <option></option>
    <option value="A Level">A Level</option>
    <option value="B Level">B Level</option>
    <option value="C Level">C Level</option>
    <option value="D Level">D Level</option>
    </select>
    <br><br>

    <label for="time">Choose Max duration of Guiding:</label>
    <select name="time" id="time">
    <option></option>
    <option value="3 days">3 days</option>
    <option value="3-5 days">3-5 days</option>
    <option value="4-6 days">4-6 days</option>
    <option value="7 days">7 days</option>
    </select>
    <br><br>
    </fieldset>
  </fieldset>
  <br><br><div style="text-align : center"><input type="submit" value="Submit" id="subb"></div>
</form>
 <br>
 
<div id="guide"></div>

</body>
</html>