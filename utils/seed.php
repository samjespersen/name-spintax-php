<?php
require './connect.php';
$first_names_file = "../data/first-names.txt";
$last_names_file = "../data/last-names.txt";

$first_names_text = fopen($first_names_file, "r") or die("Unable to open " . $first_names_file);
$first_names = explode("\n", fread($first_names_text, filesize($first_names_file)));

$last_names_text = fopen($last_names_file, "r") or die("Unable to open " . $last_names_file);
$last_names = explode("\n", fread($last_names_text, filesize($last_names_file)));

$fNameCount = 0;
$lNameCount = 0;

foreach ($first_names as $key => $name) {
    if ($key < 30000) {

        $sql = "INSERT INTO first_names (name) VALUES " . '("' . $name . '")';
        $db_connect->query($sql) or die("you dun goofed $sql");
        $fNameCount++;
        echo $fNameCount . "/30000 first names loaded<br>";
    } else {
        break;
    }
}

foreach ($last_names as $key => $name) {
    if ($key < 30000) {

        $sql = "INSERT INTO last_names (name) VALUES " . '("' . $name . '")';
        $db_connect->query($sql) or die("you dun goofed $sql");
        $lNameCount++;
        echo $lNameCount . "/30000 last names loaded<br>";
    } else {
        break;
    }
}
