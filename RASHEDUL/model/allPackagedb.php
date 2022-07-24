<?php
include '../RASHEDUL/model/dbConnect.php';
    function getAll(){

	$conn = connect();
	$stmt = $conn->prepare("SELECT * FROM package");
	$stmt->execute();
	$record = $stmt->get_result();
	return $record->fetch_all(MYSQLI_ASSOC);
}

function getUser($id){

	$conn = connect();
	$stmt = $conn->prepare("SELECT * FROM package WHERE id=?");
	$stmt->bind_param("s",$id);
	$stmt->execute();
	$record = $stmt->get_result();
	return $record->fetch_assoc();
}
function delete($id){

	$conn = connect();
	$stmt = $conn->prepare("DELETE FROM package WHERE id=?");
	$stmt->bind_param("s",$id);
	return $stmt->execute();

}




?>