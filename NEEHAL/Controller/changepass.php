

<!DOCTYPE html>
<html>
<head>
   
<title>Registration</title>
<link rel="stylesheet" href="../NEEHAL/View/css/changepass.css"></link>
<script src="../NEEHAL/View/js/changepass.js"></script>
</head>
<body>
<?php


include "../NEEHAL/Model/dbUpdateChangePass.php";
// define variables to empty values  
$passwordoErr = $passwordErr = $passwordrErr  = "";  
$passwordo = $password = $passwordr = "";  
$flag = false;
$successfulMessage = $errorMessage = "";
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  


//String Validation  
    if (empty($_POST["passwordo"])) 
    {  
        $passwordoErr = " Cannot be empty "; 
        $flag = True;
    } 
  
      if (empty($_POST["password"])) 
    {  
        $passwordErr = " Cannot be empty "; 
        $flag = True;
    } 
    
    if (empty($_POST["passwordr"])) 
    {  
        $passwordrErr = " Cannot be empty ";
        $flag = True;  
    } 
     

   
    if(!$flag) 
    {
      $passwordo = input_data($_POST["passwordo"]);
      $password = input_data($_POST["password"]);
      $passwordr = input_data($_POST["passwordr"]);

    if ($password == $passwordr)
    {

    $un = "";
    if(isset($_COOKIE['uname'])) {
    $un = $_COOKIE['uname'];
    }

        $res = pass($password, $un, $passwordo);
        if($res) {
        $successfulMessage = "Successfully done....";
        }
        else {
        $errorMessage = "Error while saving.";
        }
  }
  else
  {
       $passE = "Password mismatched";
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
<br><br>
<p id="pass">CHANGE YOUR PASSWORD</p>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name = "changepass" onsubmit="return isValid()";>
    <br><br>
 <fieldset id="passfs">
 <legend id="lgnd"></legend>
 <br><br>
 <label for="password">Enter Old Password:</label>
 <input type="password" id="passwordo" name="passwordo">
 <span id="passwordoErr" style="color:red;"></span>
 <span style="color: red"><?php echo $passwordoErr; ?> </span><br><br>
 <label for="password">Enter New Password:</label>
 <input type="password" id="password" name="password">
 <span id="passwordErr" style="color:red;"></span>
 <span style="color: red"><?php echo $passwordErr; ?> </span><br><br>
 <label for="passwordr">Re-enter New Password:</label>
 <input type="password" id="passwordr" name="passwordr">
 <span id="passwordrErr" style="color:red;"></span>
 <span style="color: red"><?php echo $passwordrErr; ?> </span><br>
 <br><br>
 <input type="submit" name="Submit"value="Change password" align="center">
 </fieldset>
 <br><br>
 
 </form>
 <br>
<p align="right"><a href="../NEEHAL/View/TourGuide.php">Back</a></p>
<br>
<span style="color: green"><?php echo "<b>".$successfulMessage."</b>"; ?></span>
<span style="color: red"><?php echo "<b>".$errorMessage."</b>"; ?></span>

</body>
</html>