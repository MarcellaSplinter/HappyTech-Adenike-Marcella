<?php include 'db.php'?>
<?php mysqli_close($conn);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Feedback</title>
    <link rel="stylesheet" href="./Feedback.css">
</head>
<body>

<header> 
        <div class="New">
        <h1>HappyTech Technology Company</h1>

        <h3>CV Feedback</h3>

        <form action="TechEdit.php" method="POST">
    
        
        Candidate's Firstname: <input type="text" name="fname" placeholder="Candidate's First Name here" required>
        
        <br><br>

        Candidate's Last Name: <input type="text" name="lname" placeholder="Candidate's Last name here" required>
        
        <br><br>

        Role Applied For: <input type="text" name="role" placeholder="Role" required>
        
        <br><br>

        Position Applied For: <input type="text" name="position" placeholder="Position Applied For" required>

        <br><br>
        
        Department: <input type="text" name="department" placeholder="Department" required>
       
        <br><br>

        Date: <input type="date" name="date" placeholder="Date" required> 
        
        <br>

<div id="Employer">
    <h3>Feedback By:</h3>

    <br>

        Interviewer's First Name: <input type="text" name="iname" placeholder="Interviewer's FirstName" required>
        
        <br><br>

        Interviewer's LastName: <input type="text" name="inname" placeholder="Interviewer's Last name" required>
        
     
        </div>
</header>

    <p><input type="checkbox" name="review[]" value="Review A" /> Review A</p>
    <p><input type="checkbox" name="review[]" value="Review B" /> Review B</p>
    <p><input type="checkbox" name="review[]" value="Review C" /> Review C</p>
                


    
<h4>Feedback comment</h4>
<textarea name="feedback" cols="50" rows="10" placeholder="Type Feedback Comment Here" >
</textarea>

<input type="submit" name="save" value="Save">  
        
</form>   
        </body>
        </html>