<?php 
require_once 'templates.php';
$id = $_GET ["id"];
deleteTemplateById($id);
header("Location: Template.php");
?>