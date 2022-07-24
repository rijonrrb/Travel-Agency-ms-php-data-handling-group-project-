 <?php
    function getAllUsers()
    {
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM TSCHEMA");
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->fetch_all(MYSQLI_ASSOC);
    }


    function getUsers($customerid)
    {
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM TSCHEMA WHERE customerid = ?");
    $stmt->bind_param("i",$customerid);
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->fetch_all(MYSQLI_ASSOC);
    }


    function delete($customerid)
    {
    $conn = connect();
    $stmt = $conn->prepare("DELETE FROM TSCHEMA WHERE customerid = ?");
    $stmt->bind_param("i",$customerid);
    $stmt->execute();
    }
 ?>