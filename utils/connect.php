<?php

$DBURL = getenv('JAWSDB_URL');

$connectionString = explode("mysql://", $DBURL);
$connectionString = explode(":", $connectionString[1]);

$user = $connectionString[0];
$pass = explode("@", $connectionString[1])[0];
$db_url = explode("@", $connectionString[1])[1];
$dbname = explode("/", $connectionString[2])[1];

$dsn = 'mysql:host=' . $db_url . ';dbname=' . $dbname;
$db_connect = new PDO($dsn, $user, $pass);
