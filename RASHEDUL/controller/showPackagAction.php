<?php
session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.php");
	}

	include '../RASHEDUL/model/allPackagedb.php';	
	if(empty($_GET['id']) or empty($_GET['search']))
	{
       $userList = getAll();
	}
	else{
		$userList = getUser($_GET['id']);
	}

	echo "<table cellspacing='0' border='1' width='100%' height='auto'>";

		echo "<tr>";
			echo"<th width='20%''>ID</th>";
			echo"<th width='20%''>Destination</th>";
			echo"<th width='20%''>Duration</th>";
			echo"<th width='20%''>Price</th>";
			echo"<th width='20%''>Action</th>";

		echo"</tr>";
		  for ($i=0; $i <count($userList) ; $i++) { 
     	echo"<tr>";
    echo" <th>" .$userList[$i]["id"] ."</th>";
	 echo"<th>" .$userList[$i]["destination"] . "</th>";
	 echo"<th>".$userList[$i]["duration"] ."</th>";
	echo" <th>".$userList[$i]["price"] ."</th>";
	  echo"<th><a class='delete' href='" . $_SERVER['PHP_SELF'] . "?id=" . $userList[$i]["id"] . "'>DELETE</a></th>";
     echo"</tr>";

     }
		
	echo"</table>";
?>