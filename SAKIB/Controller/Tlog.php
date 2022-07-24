<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<link rel="stylesheet" href="../View/css/Tlogin.css"></link>

<body id="lbody">


<?php 

include "../Model/dbLogin.php";


$usernameErr = $passwordErr = "";
$login = "";
$flag = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 

 


if (empty($_POST["username"])) 
    {  
       $usernameErr = " Username is required";
       $flag = True;  
    } 

 

if (empty($_POST["password"])) 
    {  
       $passwordErr = " Password is required";
       $flag = True;  
    } 
 
if(!$flag) 
    {
        $username = input_data($_POST['username']);
        $password = input_data($_POST['password']);

        $res = login($username,$password);
        if ($res)
        {
            setcookie("uname",$username,time() + 60*60*24);
            session_start();
            $_SESSION['username'] = $username;
            header("Location: ../View/TourGuide.php");
        }
        else
        {
            $login = "Username/password is incorect";
        }

}
}
  function input_data($data) 
  {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

?>

<h2 id="heading">LOGIN</h2>
<br>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    <fieldset id="loginfs">
        <br><br><br>
<label for="username"><b>Enter your username:</b></label> <span style="color:red" >*</span>
<input type="username" id="username" name="username"><span style="color: red"><?php echo $usernameErr; ?></span>
<br></br>
<label for="password"><b>Enter your password:</b></label> <span style="color:red" >*</span>
<input type="password" id="password" name="password"><span style="color: red"><?php echo $passwordErr; ?></span>
<br></br><br><br>
<input type="submit" name="Submit" value="LOGIN"> <span style="color: red"><?php echo "<p>". $login . "</p>"?> </span>
<br><br><br><br><br>

<p align=right>Do not have an account? <a href="../Controller/registration.php">Signup here</a></p>

</fieldset>
<br><br>


</form>

 

</body>
  </html>