<?php 
require_once 'templates.php';

$id = $_GET ["id"];
$title = $_POST['title'];
$text = $_POST['text'];
updateTemplateById($id, $text, $title);
header("Location: Template.php");
?>