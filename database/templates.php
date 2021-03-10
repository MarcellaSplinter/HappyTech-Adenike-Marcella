<?php 
require_once 'db_connection.php';
function getAllTemplates ()            
{
    global $connection;
    $query = "select * from templates";
	$result = $connection ->query ($query)->fetch_all(MYSQLI_ASSOC);
    return $result;

    
}
function getTemplateById ($id)            
{
    global $connection;
    $query = "select * from templates where id = ".$id;
	$result = $connection ->query ($query)->fetch_all(MYSQLI_ASSOC);
    return count($result) > 0 ? $result[0] : null;
	
    
}
