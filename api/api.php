<?php
$conn = mysqli_connect('localhost','root','','api_testing') or die('DB Connection Failed');
function fetch_all()
{
    global $conn;
    $query = "SELECT * FROM tbl_sample ORDER BY id";
    $statement = mysqli_query($conn, $query);
    if(mysqli_num_rows($statement) > 0)
    {
        while($row = mysqli_fetch_assoc($statement))
        {
           $data[] = $row;
        }
        return $data;
    }
}

?>