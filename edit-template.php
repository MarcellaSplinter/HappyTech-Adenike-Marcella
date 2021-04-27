<?php
require_once 'templates.php';

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
	header("Location: login.html");
    return;
}   
$template = getTemplateById ($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit <?php echo $template['title']?></title>
    <link rel="stylesheet" href="./Feedback.css">
</head>
<body>
    
    <header>  
        <div class="New">
        <h1>HappyTech Technology Company</h1>
        <a class="logout-button" href="logout.php" title="Logout"><img src="img/logout.png"/></a>

        <form method="POST" name="candidate" action="edit-template.php?id=<?php echo $_GET ["id"] ?>"> 
        
        <label for="Candidate Name">Candidate's First Name:</label>
        <input type="text" id="Candidate Name" placeholder="Candidate's First Name here" >
        <label for="Candidate's Last Name">Candidate's Last Name:</label>
        <input type="text" id="Last Name" placeholder="Candidate's Last name here" >
        <br><br>
        <label for="Role">Role Applied For:</label>
        <input type="text" id="Role Applied For" placeholder="Role" >
        <label for="Position ">Position Applied For:</label>
        <input type="text" id="Position Applied For" placeholder="Position Applied For" >
<br><br>
        <label for="Department">Department:</label>
        <input type="text" id="Department" placeholder="Department" >
        <label for="Date">Date:</label>
        <input type="date" id="Date" placeholder="Date" >
        
        
<div id="Employer">
    <h3>Feedback By:</h3>

    <label for="Interviewer's Name">Interviewer's First Name:</label>
        <input type="text" id="Interviewer's Name" placeholder="Interviewer's FirstName" >
        <label for="Interviewer's Last Name">Interviewer's LastName:</label>
        <input type="text" id="Last Name" placeholder="Interviewer's Last name" >
        <br><br>
        <label for="Role">Role:</label>
        <input type="text" id="Role" placeholder="Role" >
        <label for="Position ">Position:</label>
        <input type="text" id="Position" placeholder="Position" >

</div>

</header>
</form>
<br><br>

<h2>Kindly enter the template text to be included in the feedback form below:</h2>

<form action="updateTemplate.php?id=<?php echo $_GET ["id"] ?>" name="updateForm" method="POST" >
    <label>Title: </label><input type="textbox" name="title" value="<?php echo $template['title'] ?? '' ?>" >
    <br>
    <Label>Template Text: </Labe><input type="textbox" name="text" value="<?php echo $template['contents'] ?>">
    <input type="submit" value="Save">
</form>  

</body>
</html>
