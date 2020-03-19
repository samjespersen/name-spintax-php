<?php

require('./connect.php');

$dropTables = "DROP TABLE IF EXISTS first_names,last_names";
$createFirstNameTables = "CREATE TABLE first_names(id SERIAL PRIMARY KEY, name VARCHAR(64))";
$createLastNameTables = "CREATE TABLE last_names(id SERIAL PRIMARY KEY, name VARCHAR(64))";

$db_connect->query($dropTables) or die("couldn't drop!");
$db_connect->query($createFirstNameTables) or die("couldn't create first names!");
$db_connect->query($createLastNameTables) or die("couldn't create last names!");

echo "Tables dropped and created";
