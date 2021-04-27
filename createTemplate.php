<?php 
require_once 'templates.php';

$title = $_POST['title'];
$text = $_POST['text'];
addNewTemplate($text, $title);
header("Location: Template.php");
?>