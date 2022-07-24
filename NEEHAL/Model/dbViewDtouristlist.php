 <?php
    function getAllUsers()
    {
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM TOURISTLISTINSERT");
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->fetch_all(MYSQLI_ASSOC);
    }


    function delete($touristid)
    {
    $conn = connect();
    $stmt = $conn->prepare("DELETE FROM TOURISTLISTINSERT WHERE touristid = ?");
    $stmt->bind_param("i",$touristid);
    $stmt->execute();
    }
 ?>