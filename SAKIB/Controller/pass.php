<!DOCTYPE html>
<html>
<head>
<title>Travel Agency</title>
<link rel="stylesheet" href="../View/css/pass.css"></link>
</head>
<body>
<?php
include '../Model/dbmanager.php';
// define variables to empty values  
$passwordErr = $passwordoErr = $passwordrErr  = "";  
$password = $passwordo = $passwordr = ""; 
$passE = ""; 
$flag = false;
$successfulMessage = $errorMessage = "";
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  


//String Validation  
    if (empty($_POST["passwordo"])) 
    {  
        $passwordoErr = " Field dosen't be empty "; 
        $flag = True;
    } 
  
      if (empty($_POST["password"])) 
    {  
        $passwordErr = " Field dosen't be empty "; 
        $flag = True;
    } 
    
    if (empty($_POST["passwordr"])) 
    {  
        $passwordrErr = " Field dosen't be empty ";
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
       $passE = "Password mismatch";
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

<h1>Change Password ???</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
 <fieldset>
 <legend><h3>Password</h3></legend>
 <label for="password">Enter Old Password:</label>
 <input type="password" id="passwordo" name="passwordo">
 <span style="color: red"><?php echo $passwordoErr; ?> </span><br><br>
 <label for="password">Enter New Password:</label>
 <input type="password" id="password" name="password">
 <span style="color: red"><?php echo $passwordErr; ?> </span><br><br>
 <label for="passwordr">Re-enter New Password:</label>
 <input type="password" id="passwordr" name="passwordr">
 <span style="color: red"><?php echo $passwordrErr; ?> </span><br>
 </fieldset>
 <br><br><div style="text-align : center"><input type="submit" value="Submit" id="subb"></div>
 </form>
 <br>
<div style="text-align : center"><a href="../view/Manager.php">Go Back</a><br>
<span style="color: green"><?php echo "<b>".$successfulMessage."</b>"; ?></span>
<span style="color: red"><?php echo "<b>".$errorMessage."</b>"; ?></span>
<span style="color: red"><?php echo $passE; ?> </span><br>

</body>
</html>