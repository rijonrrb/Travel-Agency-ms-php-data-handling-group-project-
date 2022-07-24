<!DOCTYPE html>
<html>
<head>
<title>Change Pass</title>
</head>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">

  <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="changepassword.css">
      <script src="changepassword.js"></script>
<body >

<?php

include'DbUpdate.php';

define("filepath", "registration.json");

$passwordErr = $passwordoErr = $passwordrErr  = "";  
$password = $passwordo = $passwordr = ""; 
$passE = ""; 
$flag = false;
$successfulMessage = $errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  

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


   $fileData = read();
   $users=json_decode($fileData);
    foreach($users as $user)
    {
    if($user->username === $un && $user->password === $passwordo)
     {

    $user->password = $password;

    $data_encode = json_encode($users);
    write("");
    $res = write($data_encode);
        if($res) {
        $successfulMessage = "Successfully done....";
        }
        else {
        $errorMessage = "Error while saving.";
        }
    }
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

function write($content) {
$file = fopen(filepath, "w");
$fw = fwrite($file, $content . "\n");
fclose($file);
return $fw;
}
?>
 
<h1>Change Password Section</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
 <fieldset>
 <label for="password">Enter Old Password:<span>*</span></label>
 <input type="password" id="passwordo" name="passwordo">
 <span style="color: red"><?php echo $passwordoErr; ?> </span><br><br>
 <label for="password">Enter New Password:<span>*</span></label>
 <input type="password" id="password" name="password">
 <span style="color: red"><?php echo $passwordErr; ?> </span><br><br>
 <label for="passwordr">Re-enter New Password:<span>*</span></label>
 <input type="password" id="passwordr" name="passwordr">
 <span style="color: red"><?php echo $passwordrErr; ?> </span><br>
 </fieldset>
 <br><br> 
      <button class= " btn btn-outline-info">Submit</button>
 </form>
 <br>
<span style="color: green"><?php echo "<b>".$successfulMessage."</b>"; ?></span>
<span style="color: red"><?php echo "<b>".$errorMessage."</b>"; ?></span>
<span style="color: red"><?php echo $passE; ?> </span><br>

 <?php
function read() {
$file = fopen(filepath, "r");
$fz = filesize(filepath);
$fr = "";
if($fz > 0) {
$fr = fread($file, $fz);
}
fclose($file);
return $fr;
}
?>
  <?php include'footer.php'?>
</body>
</html>