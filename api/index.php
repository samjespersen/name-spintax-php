<?php

require '../utils/connect.php';
$output = [];

$method = $_SERVER["REQUEST_METHOD"];

if ($method === "GET") {

    if (isset($_GET["first_name"])) {
        $id = $_GET["first_name"];
        $sql = "SELECT name FROM first_names WHERE id = '$id'";
        $first_name = $db_connect->query($sql);
        $first_name = mysqli_fetch_assoc($first_name);
        $output[] = $first_name["name"];
    }

    if (isset($_GET["last_name"])) {
        $id = $_GET["last_name"];
        $sql = "SELECT name FROM last_names WHERE id = '$id'";
        $last_name = $db_connect->query($sql);
        $last_name = mysqli_fetch_assoc($last_name);
        $output[] = $last_name["name"];
    }

    $json_response = json_encode($output);
    echo $json_response;
}
