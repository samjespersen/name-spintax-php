<?php

$DBURL = "mysql://qpj6lswa560ip0p7:umffjci4sv5nokll@dno6xji1n8fm828n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/ckm924vaihak7dac";

$connectionString = explode("mysql://", $DBURL);
$connectionString = explode(":", $connectionString[1]);

// $user = $connectionString[0];
// $pass = explode("@", $connectionString[1])[0];
// $db_url = explode("@", $connectionString[1])[1];
// $dbname = explode("/", $connectionString[2])[1];

$user = 'root';
$pass = '';
$db_url = 'localhost';
$dbname = 'test';

//PDO
$dsn = 'mysql:host=' . $db_url . ';dbname=' . $dbname;
$db_connect = new PDO($dsn, $user, $pass);

//mysqli
// $db_connect = new mysqli($db_url, $user, $pass, $dbname);
