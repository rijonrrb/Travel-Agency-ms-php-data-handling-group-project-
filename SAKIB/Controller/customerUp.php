<!DOCTYPE html>
<html>
<head>
<title>Travel Agency</title>
<link rel="stylesheet" href="../View/css/cusU.css"></link>
</head>
<body>
    <?php
include '../Model/dbcusD.php';
// define variables to empty values  
$customeridErr = $fullnameErr = $genderErr = $dobErr = $religionErr = $praddressErr = $peaddressErr  =$phoneErr = $emailErr = $packageErr = $packagetimeErr = $packageidErr = $paymentmErr = $paymentsErr = "";  
$customerid = $fullname = $gender = $dob = $religion = $praddress = $peaddress  =$phone = $email = $package = $packagetime = $packageid = $paymentm = $payments = "";  
$flag = false;
$successfulMessage = $errorMessage = "";
$edit = "";

//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  


//String Validation  
    if (empty($_POST["customerid"])) 
    {  
       $customeridErr = " Customer Id is required";
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

    if (empty($_POST["package"])) 
    {  
       $packageErr = " Package type is required";
       $flag = True;  
    } 

    if (empty($_POST["packageid"])) 
    {  
       $packageidErr = " Package ID is required";
       $flag = True;  
    } 
    if (empty($_POST["packagetime"])) 
    {  
       $packagetimeErr = " Purchase time is required";
       $flag = True;  
    } 

    if (empty($_POST["paymentm"])) 
    {  
       $paymentmErr = " Payment method is required";
       $flag = True;  
    } 

    if (empty($_POST["payments"])) 
    {  
       $paymentsErr = " Payment status is required";
       $flag = True;  
    } 
    
    if(!$flag) 
    {
      $customerid = input_data($_POST["customerid"]);
      $fullname = input_data($_POST["fullname"]);
      $gender = input_data($_POST["gender"]);
      $dob = input_data($_POST["dob"]);
      $religion = input_data($_POST["religion"]);
      $praddress = input_data($_POST["Praddress"]);
      $peaddress = input_data($_POST["Peaddress"]);
      $email = input_data($_POST["email"]);
      $phone = input_data($_POST["phone"]);
      $package = input_data($_POST["package"]);
      $packageid = input_data($_POST["packageid"]);
      $packagetime = input_data($_POST["packagetime"]);
      $paymentm = input_data($_POST["paymentm"]);
      $payments = input_data($_POST["payments"]);
      

        $res = update($fullname, $gender, $dob, $religion, $praddress, $peaddress, $email,  $phone, $package, $packageid, $packagetime, $paymentm, $payments,$customerid);
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
include '../view/Cheading.php';
?>
<h1>Customer details Editing</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
  <fieldset>
    <label for="customerid">Which customer details you want to change ?(Enter Id) :</label>
    <input type="text" id="customerid" name="customerid">
    <span style="color: red"><?php echo $customeridErr; ?> </span> <br><br>
    <label for="fullname">Enter Customer Full name:</label>
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
    <label for="DOB">Enter Customer Date of birth:</label>
    <input type="date" id="dob" name="dob">
    <span style="color: red"><?php echo "&nbsp;&nbsp;".$dobErr; ?> </span><br><br>
    <label for="religion">Choose Customer Religion:</label>
    <select name="religion" id="religion">
    <option></option>
    <option value="Islam">Islam</option>
    <option value="Hinduism">Hinduism</option>
    <option value="Christianity">Christianity</option>
    <option value="Buddhism">Buddhism</option>
    <option value="Sikhism">Sikhism</option>
    </select>
    <span style="color: red"><?php echo $religionErr; ?> </span><br><br>
    
    <label for="Praddress">Enter Customer Present Address:</label>
    <textarea name="Praddress" rows="3" cols="30"></textarea>
    <span style="color: red"><?php echo $praddressErr; ?> </span> <br><br>
    <label for="Peaddress">Enter Customer Permanent Address:</label>
    <textarea name="Peaddress" rows="3" cols="30"></textarea>
    <span style="color: red"><?php echo $peaddressErr; ?> </span> <br><br>
    <label for="phone">Enter Customer phone number:</label>
    <input type="tel" id="phone" name="phone" >
    <span style="color: red"><?php echo $phoneErr; ?> </span> <br><br>
    <label for="email">Enter Customer Email:</label>
    <input type="email" id="email" name="email">
    <span style="color: red"><?php echo $emailErr; ?> </span><br><br>

    <label for="package">Enter Customer Package type:</label>
    <select name="package" id="package">
    <option></option>
    <option value="Tour Package">Tour Package</option>
    <option value="Visa Package">Visa Package</option>
    <option value="Umrah Package">Umrah Package</option>
    <option value="Hotel Package">Hotel Package</option>
    <option value="Transportation Package">Transportation Package</option>
    </select>
    <span style="color: red"><?php echo $packageErr; ?> </span><br><br>

    <label for="packageid">Enter Customer Package id:</label>
    <input type="text" id="packageid" name="packageid">
    <span style="color: red"><?php echo $packageidErr; ?> </span><br><br>

    <label for="packagetime">Enter Package purchase time:</label>
    <input type="date" id="packagetime" name="packagetime">
    <span style="color: red"><?php echo $packagetimeErr; ?> </span><br><br>

    <label for="paymentm">Choose Customer payment method:</label>
    <select name="paymentm" id="paymentm">
    <option></option>
    <option value="Card">Card</option>
    <option value="Mobile Banking">Mobile Banking</option>
    <option value="Cash">Cash</option>
    </select>
    <span style="color: red"><?php echo $paymentmErr; ?> </span><br><br>

    <label for="payments">Choose Customer Payment status:</label>
    <select name="payments" id="payments">
    <option></option>
    <option value="Full">Full</option>
    <option value="Partial">Partial</option>
    </select>
    <span style="color: red"><?php echo $religionErr; ?> </span><br><br>

  </fieldset>
  <br><br><div style="text-align : center"><input type="submit" value="Submit" id="subb"></div>
</form>
 <br>
 
  <span style="color: green"><?php echo "<b>".$edit."</b>"; ?></span>
 <span style="color: green"><?php echo "<b>".$successfulMessage."</b>"; ?></span>
<span style="color: red"><?php echo "<b>".$errorMessage."</b>"; ?></span>

</body>
</html>