<?php
session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.php");
	}

	include '../RASHEDUL/model/allUmradb.php';	
	if(empty($_GET['id']) or empty($_GET['search']))
	{
       $userList = getAll();
       	echo "<table cellspacing='0' border='1' width='100%' height='auto'>";

		echo "<tr>";
			echo"<th width='20%''>ID</th>";
			echo"<th width='20%''>Name</th>";
			echo"<th width='20%''>category</th>";
			echo"<th width='20%''>Duration</th>";
			echo"<th width='20%''>Price</th>";
			echo"<th width='20%''>Action</th>";

		echo"</tr>";
		  for ($i=0; $i <count($userList) ; $i++) { 
     	echo"<tr>";
    echo" <th>" .$userList[$i]["id"] ."</th>";
	 echo"<th>" .$userList[$i]["name"] . "</th>";
	 echo"<th>".$userList[$i]["category"] ."</th>";
	echo" <th>".$userList[$i]["duration"] ."</th>";
	echo" <th>".$userList[$i]["price"] ."</th>";
	  echo"<th><a class='delete' href='" . $_SERVER['PHP_SELF'] . "?id=" . $userList[$i]["id"] . "'>DELETE</a></th>";
     echo"</tr>";

     }
		
	echo"</table>";
	}
	else{
		$userList = getUser($_GET['id']);
			echo "<table cellspacing='0' border='1' width='100%' height='auto'>";

		echo "<tr>";
			echo"<th width='20%''>ID</th>";
			echo"<th width='20%''>Name</th>";
			echo"<th width='20%''>category</th>";
			echo"<th width='20%''>Duration</th>";
			echo"<th width='20%''>Price</th>";
			echo"<th width='20%''>Action</th>";

		echo"</tr>";
		   
     	echo"<tr>";
    echo" <th>" .$userList["id"] ."</th>";
	 echo"<th>" .$userList["name"] . "</th>";
	 echo"<th>".$userList["category"] ."</th>";
	echo" <th>".$userList["duration"] ."</th>";
	echo" <th>".$userList["price"] ."</th>";
	  echo"<th><a class='delete' href='" . $_SERVER['PHP_SELF'] . "?id=" . $userList["id"] . "'>DELETE</a></th>";
     echo"</tr>";

    
		
	echo"</table>";
	}


?>