<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
	header("Location: login.html");
    return;
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unsuccessful CV Submission</title>
    <link rel="stylesheet" href="./Feedback.css">
</head>
<body>

    <header>  
        <div class="New">
        <h1>HappyTech Technology Company</h1>
        <a class="logout-button" href="logout.php" title="Logout"><img src="img/logout.png"/></a>

        <form>
        
        <label for="Candidate Name">Candidate's First Name:</label>
        <input type="text" id="Candidate Name" placeholder="Candidate's First Name here" required>
        <label for="Candidate's Last Name">Candidate's Last Name:</label>
        <input type="text" id="Last Name" placeholder="Candidate's Last name here" required>
        <br><br>
        <label for="Role">Role Applied For:</label>
        <input type="text" id="Role Applied For" placeholder="Role" required>
        <label for="Position ">Position Applied For:</label>
        <input type="text" id="Position Applied For" placeholder="Position Applied For" required>
<br><br>
        <label for="Department">Department:</label>
        <input type="text" id="Department" placeholder="Department" required>
        <label for="Date">Date:</label>
        <input type="date" id="Date" placeholder="Date" required>
        
        
<div id="Employer">
    <h3>Feedback By:</h3>

    <label for="Interviewer's Name">Interviewer's First Name:</label>
        <input type="text" id="Interviewer's Name" placeholder="Interviewer's FirstName" required>
        <label for="Interviewer's Last Name">Interviewer's LastName:</label>
        <input type="text" id="Last Name" placeholder="Interviewer's Last name" required>
        <br><br>
        <label for="Role">Role:</label>
        <input type="text" id="Role" placeholder="Role" required>
        <label for="Position ">Position:</label>
        <input type="text" id="Position" placeholder="Position" required>

</div>

</header>

<br><br>

<h2>Kindly select comments to be included in the feedback from below:</h2>

<ol>

<li><label for="CV1">CV does not match</label>
    <input type="checkbox" id="CV1"></li>
<li><label for="CV2">No relevant experience</label>
    <input type="checkbox" id="CV2"> </li>
<li><label for="CV3">No relevant background</label>
    <input type="checkbox" id="CV3"></li>
<li><label for="CV4">Health not suitable</label>
    <input type="checkbox" id="CV4"></li>
<li><label for="CV5">Over Qualification</label>
    <input type="checkbox" id="CV5"></li>
<li><label for="CV6">CV has required experience</label>
    <input type="checkbox" id="CV6"></li>

</ol>



<input type="submit" value="Save">
        </form>  
</body>
</html>
