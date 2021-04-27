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

function updateTemplateById ($id, $text, $title)            
{
    global $connection;
    $query = "update templates set title='" . $title . "', contents = '" . $text . "' where id = ".$id;
	$result = $connection ->query ($query);
    
}

function deleteTemplateById ($id)            
{
    global $connection;
    $query = "delete from templates where id = ".$id;
	$result = $connection ->query ($query);
    
}
function addNewTemplate($text, $title)
{
    global $connection;
    $query = "insert into templates (title, contents) select '" . $title . "', '" . $text . "';";
	$result = $connection ->query ($query);
}
