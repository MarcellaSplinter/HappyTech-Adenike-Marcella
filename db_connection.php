<?php
$user_name = "root";
$db_name = "project";
$host = "localhost";
$connection = new mysqli($host, $user_name , "", $db_name );
if ($connection->connect_errno) {
    echo "Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
}
?>


