<?php
 $conn = mysqli_connect("localhost","root","","e_commerce");

 // Check connection
 if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     exit();
   }

$result = mysqli_query($conn, "SELECT * FROM product");

function query($query_kedua)
{
    global $conn;
    $result = mysqli_query($conn, $query_kedua);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function hapusProduct($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM product WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function hapusCategory($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM category WHERE id=$id");
    return mysqli_affected_rows($conn);
}

?>