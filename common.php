<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
	header("Location: login.php");
    return;
}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./Feedback.css">

</head>
<body>
    <header>
        
            <h1>HappyTech Technology Company</h1>
            <a class="logout-button" href="logout.php" title="Logout"><img src="img/logout.png"/></a>
