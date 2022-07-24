<!DOCTYPE html>
<html>
<head>
<title>Travel Agency</title>
<link rel="stylesheet" href="../View/css/guideU.css"></link>
</head>
<body>
    <?php
include '../Model/dbguideD.php';
// define variables to empty values  
$guideidErr = $fullnameErr = $genderErr = $dobErr = $religionErr = $PraddressErr = $PeaddressErr  =$phoneErr = $emailErr = $countryErr = $regionErr = $typeErr = $timeErr = "";  
$guideid = $fullname = $gender = $dob = $religion = $Praddress = $Peaddress  =$phone = $email = $country = $region = $type = $time = "";  
$flag = false;
$successfulMessage = $errorMessage = "";
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  


//String Validation  
    if (empty($_POST["guideid"])) 
    {  
       $guideidErr = " Field Cannot be empty ";
       $flag = True;  
    } 
    if (empty($_POST["fullname"])) 
    {  
        $fullnameErr = " Field Cannot be empty ";
        $flag = True;  
    } 
    if (empty($_POST["gender"])) 
    {  
        $genderErr = " Field Cannot be empty ";
        $flag = True;  
    }      

    if (empty($_POST["dob"])) 
    {  
        $dobErr = " Field Cannot be empty ";
        $flag = True;  
    }  

    if (empty($_POST["religion"])) 
    {  
        $religionErr = " Field Cannot be empty ";
        $flag = True;  
    } 
    if (empty($_POST["Praddress"])) 
    {  
        $PraddressErr = " Field Cannot be empty ";
        $flag = True;  
    } 
        if (empty($_POST["Peaddress"])) 
    {  
        $PeaddressErr = " Field Cannot be empty ";
        $flag = True;  
    } 
        if (empty($_POST["phone"])) 
    {  
        $phoneErr = " Field Cannot be empty ";
        $flag = True;  
    } 

    if (empty($_POST["email"])) 
    {  
       $emailErr = " Field Cannot be empty ";
       $flag = True;  
    } 

    if (empty($_POST["country"])) 
    {  
       $countryErr = " Field Cannot be empty ";
       $flag = True;  
    } 

    if (empty($_POST["region"])) 
    {  
       $regionErr = " Field Cannot be empty ";
       $flag = True;  
    } 
    if (empty($_POST["type"])) 
    {  
       $typeErr = " Field Cannot be empty ";
       $flag = True;  
    } 

    if (empty($_POST["time"])) 
    {  
       $timeErr = " Field Cannot be empty ";
       $flag = True;  
    } 


    
    if(!$flag) 
    {
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
      $time = input_data($_POST["time"]);
      

       $res = update($fullname, $gender, $dob, $religion, $Praddress, $Peaddress, $email,  $phone, $country, $region, $type, $time,$guideid);
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
<?php
include '../view/gheading.php';
?>
<h1>Tour guide details updating</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" >
    <fieldset>
    <legend>Basic Information</legend>
    <label for="guideid">Which Tour guide details you want to change ?(Enter Id) :</label>
    <input type="text" id="guideid" name="guideid">
    <span style="color: red"><?php echo $guideidErr; ?> </span> <br><br>
    <label for="fullname">Enter Tour guide Full name:</label>
    <input type="text" id="fullname" name="fullname">
    <span style="color: red"><?php echo $fullnameErr; ?> </span> <br><br>
    <label for="gender">Gender :</label>
    <input type="radio" name="gender"<?php if (isset($gender) && $gender=="Male") echo "checked";?>value="Male">
    <label for="Male">Male</label>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">
    <label for="Female">Female</label>
    <input type="radio" name="gender"<?php if (isset($gender) && $gender=="Others") echo "checked";?>value="Others">
    <label for="Others">Others</label>
    <span style="color: red"><?php echo $genderErr; ?> </span><br><br>
    <label for="dob">Enter Tour guide Date of birth:</label>
    <input type="date" id="dob" name="dob">
    <span style="color: red"><?php echo "&nbsp;&nbsp;".$dobErr; ?> </span><br><br>
    <label for="religion">Choose Tour guide's Religion:</label>
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
    <legend>Contact Information</legend>
    <label for="Praddress">Enter Customer Present Address:</label>
    <textarea name="Praddress" rows="3" cols="30"></textarea>
    <span style="color: red"><?php echo $PraddressErr; ?> </span> <br><br>
    <label for="Peaddress">Enter Customer Permanent Address:</label>
    <textarea name="Peaddress" rows="3" cols="30"></textarea>
    <span style="color: red"><?php echo $PeaddressErr; ?> </span> <br><br>
    <label for="phone">Enter Customer phone number:</label>
    <input type="tel" id="phone" name="phone" >
    <span style="color: red"><?php echo $phoneErr; ?> </span> <br><br>
    <label for="email">Enter Customer Email:</label>
    <input type="email" id="email" name="email">
    <span style="color: red"><?php echo $emailErr; ?> </span><br><br>
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
    <span style="color: red"><?php echo $countryErr; ?> </span><br><br>
    <label for="region">Enter guiding region:</label>
    <input type="text" id="region" name="region">
    <span style="color: red"><?php echo $regionErr; ?> </span><br><br>

    <label for="type">Choose Level of tour Guide:</label>
    <select name="type" id="type">
    <option></option>
    <option value="A Level">A Level</option>
    <option value="B Level">B Level</option>
    <option value="C Level">C Level</option>
    <option value="D Level">D Level</option>
    </select>
    <span style="color: red"><?php echo $typeErr; ?> </span><br><br>

    <label for="time">Choose Max duration of Guiding:</label>
    <select name="time" id="time">
    <option></option>
    <option value="3 days">3 days</option>
    <option value="3-5 days">3-5 days</option>
    <option value="4-6 days">4-6 days</option>
    <option value="7 days">7 days</option>
    </select>
    <span style="color: red"><?php echo $timeErr; ?> </span><br><br>
    </fieldset>
  <br><br><div style="text-align : center"><input type="submit" value="Submit" id="subb"></div>
</form>
 <br>
 
 <span style="color: green"><?php echo "<b>".$successfulMessage."</b>"; ?></span>
<span style="color: red"><?php echo "<b>".$errorMessage."</b>"; ?></span>

</body>
</html>