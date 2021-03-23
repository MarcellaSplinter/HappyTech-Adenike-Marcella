<?php

$server = "localhost";
$username  = "root";
$password = "";
$dbname = "HappyTech_LTD";

$conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>