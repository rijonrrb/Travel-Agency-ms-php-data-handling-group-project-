<?php
include '../RASHEDUL/model/dbConnect.php';
    function getAll(){

	$conn = connect();
	$stmt = $conn->prepare("SELECT * FROM agent");
	$stmt->execute();
	$record = $stmt->get_result();
	return $record->fetch_all(MYSQLI_ASSOC);
}

function getUser($userName){

	$conn = connect();
	$stmt = $conn->prepare("SELECT * FROM agent WHERE id=?");
	$stmt->bind_param("s",$userName);
	$stmt->execute();
	$record = $stmt->get_result();
	return $record->fetch_all(MYSQLI_ASSOC);
}
function delete($id){

	$conn = connect();
	$stmt = $conn->prepare("DELETE FROM agent WHERE id=?");
	$stmt->bind_param("s",$id);
	return $stmt->execute();

}




?>