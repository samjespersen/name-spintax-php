<?php

require '../utils/connect.php';
require './search_functions.php';

$output = [];

$method = $_SERVER["REQUEST_METHOD"];

if ($method === "GET") {
    if (isset($_GET["first_name"])) {
        $id = $_GET["first_name"];
        $output[] = name_query("first_names", $id);
    }

    if (isset($_GET["last_name"])) {
        $id = $_GET["last_name"];
        $output[] = name_query("last_names", $id);
    }

    $json_response = json_encode($output);
    echo $json_response;
}
