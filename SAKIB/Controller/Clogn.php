<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Travel Agency</title>
<link rel="stylesheet" href="../View/css/Clogn.css"></link>
</head>
<body>
<?php 
include '../Model/dbmanager.php';
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

    $username = input_data($_POST["username"]);
    $password = input_data($_POST["password"]); 
    
    $res = login($username,$password);
    if($res)
    {
    setcookie("uname", $username, time() + 60*60*24);
    session_start();
    $_SESSION['username'] = $username;
    header("Location: ../view/Cuser.php");
    }
    else 
    {
    $login =  "Username/Password doesn't match";
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



<span style="color: white;text-align:center"><h1>Login Page</h1></span> 
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		<fieldset id="fd">
			<legend><h3>User Info</h3></legend>

			<label for="username">User Name:</label>
			<input type="text" name="username" id="username" >
			<span style="color: red"><?php echo $usernameErr; ?> </span><br><br>
			</span><label for="password">Password:</label>
			<input type="password" name="password" id="password" >
			<span style="color: red"><?php echo $passwordErr; ?> </span><br><br>
			<input type="submit" name="submit" value="Login" id="sub">
             <div style= "text-align:center"><span style="color: red"><?php echo "<h1>". $login . "</h1>"?> </span></div>
		</fieldset>
	</form>
    

</body>
</html>