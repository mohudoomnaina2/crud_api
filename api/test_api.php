<?php
include('api.php');

if($_GET["action"] == 'fetch_all')
{
    $data = fetch_all();
}

echo json_encode($data);

?>