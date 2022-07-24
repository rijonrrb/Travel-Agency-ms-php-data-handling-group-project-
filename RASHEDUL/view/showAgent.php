<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>All_Agent</title>
	<script src="../RASHEDUL/controller/showAgenctAction.php"></script>
</head>
<body>

	<?php
session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../RASHEDUL/view/login.php");
	}
	include '../RASHEDUL/view/header.html';
	?>
	<!-- 2nd layer-->
<?php
	include '../RASHEDUL/view/heading.php';
	?>
	<?php
	include'../RASHEDUL/model/allAgentdb.php';
	$userList = getAll();
	if(!empty($_GET['id'])){
		$res=delete($_GET['id']);
          if($res){
          	$userList = getAll();
          }
          else{
          		$userList = getAll();
          }
	}

	?>
	<div style="width: 100%; height:auto; background-color: rgb(153, 153, 255); text-align: center;">
	<form  action="../RASHEDUL/controller/showAgenctAction.php" method = "GET" name="form" onsubmit="ajax(this);return false;">
		<fieldset>
			<legend style="color: black;font-size: 30px;"><b>All Tour Agent</b></legend><br>

			<label for="id">Package ID :</label>
			<input type="text" name="id" id="id">
			<span id="idError" style="color: red;"></span>
            <?php echo "&nbsp"; ?>
			<input type="submit" name="search" value="Search" style="height: 20px;width: 110px;background-color: orange;">
		</fieldset>
		<th></th>

	</form>
	</fieldset>



</div>
<div id="msg" style="width: 100%;height: auto;background-color: rgb(255, 255, 153);">
	<?php
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
	  echo"<th><a class='delete' href='" . $_SERVER['PHP_SELF'] . "?id=" . $userList[$i]["id"] . "'>DELETE</a></th>";
     echo"</tr>";

     }
		
	echo"</table>";
	?>
</div>

	<!--Last Layer -->
	<?php
	include '../RASHEDUL/View/footer.php';
	?>

</body>
</html>
