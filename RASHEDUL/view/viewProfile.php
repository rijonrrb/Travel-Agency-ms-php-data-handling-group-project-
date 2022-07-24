<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>UpdateProfile</title>
    <link rel="stylesheet" type="text/css" href="../RASHEDUL/view/css/updateProfile.css">
    <script src="../RASHEDUL/view/js/updateProfile.js"></script> 
</head>
<body>
   
 <?php
   session_start();
   if(!isset($_SESSION['userName'])){
      header("location: ../RASHEDUL/Controller/admin_login.php");
   }
   ?>

    <!-- 1st header -->
    <?php include '../RASHEDUL/view/header.html' ?>
    <!--2nd header -->
    <?php include '../RASHEDUL/view/heading.php' ?>
    <!--Main Part -->
<div class="update-form">
    <form  action="../RASHEDUL/controller/updateProfileAction.php" method = "POST" name="form" onsubmit="ajax(this);return false;">
        <fieldset class="fieldset">
            <legend style="color: black;font-size: 30px;"><b>Update Profile</b></legend><br>

            <img class="image" src="../RASHEDUL/image/<?php echo $_SESSION['image']; ?>"><br>
           <!-- <input class="imageUpload" type="file" name="image" id="image"> -->

            <label for="fname">First Name : </label>
            <input id="fname" type="text" name="fname" value="<?php echo $_SESSION['fname']; ?>" >
            <span id="fnameError" style="color: red;"></span><br><br>

            <label for="lname">Last Name : </label>
            <input id="lname" type="text" name="lname" value="<?php echo $_SESSION['lname']; ?>" >
            <span id="lnameError" style="color: red;"></span><br><br>

            <label for="phone">Phone No : </label>
            <input id="phone" type="tel" name="phone" value="<?php echo $_SESSION['phone']; ?>" >
            <span id="phoneError" style="color: red;"></span><br><br>

            <label for="email">Email : </label>
            <input id="email" type="email" name="email" value="<?php echo $_SESSION['email']; ?>" >
            <span id="phoneError" style="color: red;"></span><br><br>

             <label for="userName">User Name : </label>
            <input  type="text" name="userName" value="<?php echo $_SESSION['userName']; ?>" disabled >
            <span style="color: red;"></span> <?php echo "&nbsp"; ?>

             <label for="password">Password : </label>
            <input type="text" name="password" value="<?php echo $_SESSION['password']; ?>" disabled >
            <span style="color: red;"></span><br><br>
             <span id="msg"> </span><br><br>
          
            <input class="submit" type="submit" name="update" value="Update Profile" style="height: 40px;width: 150px;background-color: orange;">
        </fieldset>
    </form>
</div>
<!--footer -->
    <?php include '../RASHEDUL/View/footer.php' ?>


</body>
</html>