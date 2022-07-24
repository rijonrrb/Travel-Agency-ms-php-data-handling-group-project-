<?php
session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.php");
	}
	include '../RASHEDUL/model/allAgentdb.php';	
	if(empty($_GET['id']) or empty($_GET['search']))
	{
       $userList = getAll();
	}
	else{
		$userList = getUser($_GET['id']);
	}

	
	echo "<table cellspacing='0' border='1' width='100%' height='auto'>";

		echo "<tr>";
			echo"<th width='5%''>ID</th>";
			echo"<th width='20%''>Name</th>";
			echo"<th width='10%''>Phone</th>";
			echo"<th width='15%''>Email</th>";
			echo"<th width='15%''>Nid</th>";
			echo"<th width='5%''>Image</th>";
			echo"<th width='10%''>Action</th>";
		echo"</tr>";
		  for ($i=0; $i <count($userList) ; $i++) { 
     	echo"<tr>";
    echo" <th>" .$userList[$i]["id"] ."</th>";
	 echo"<th>" .$userList[$i]["name"] . "</th>";
	 echo"<th>".$userList[$i]["phone"] ."</th>";
	echo" <th>".$userList[$i]["email"] ."</th>";
	 echo"<th>".$userList[$i]["nid"] ."</th>";
	 echo "<td>" . "<img style= 'width: 100px;height: 100px; text-align: center;' src='../RASHEDUL/image/".$userList[$i]['image'] . "'>" . "</td>";
	  echo"<th><a class='delete' href='" . $_SERVER['PHP_SELF'] . "?uid=" . $userList[$i]["id"] . "'>DELETE</a></th>";
     echo"</tr>";

     }
		
	echo"</table>";

	?>