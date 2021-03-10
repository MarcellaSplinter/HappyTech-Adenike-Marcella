
<?php
    $templates = array(1 => "CV", 2 => "Interview", 3 => "Technical Interview", 4 => "Medical Examination Result", 5 => "Final Decision");

    $id = $_GET["id"];
    $selectedTemplate = $templates[$id];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Edit Template | Happy Tech</title>
    <link rel="stylesheet" href="./Feedback.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(e){
                //variables

                var html ='<div>Review: <textarea name="Review[]" id="childreview" col="3" row="10"></textarea><a href="#" id="remove">X</a></div>';
                
         
                //Add Rows to the form

                $('#add').click(function(e){
                        $("#addmore").append(html);
                        
                });

                //remove rows from the form
                $('#addmore').on('click', '#remove', function(e){
                        $(this).parent('div').remove();

                });

                //populate value from the first row
        });
        </script>
        
</head>
<body>
    <h3>Edit <?php echo $selectedTemplate; ?> Template</h3>

    <header>  
        <div class="New">
        <h1>HappyTech Technology Company</h1>

<br>
        
        <form action="InterviewEdit.php" method="POST">
    
        Candidate's FirstName: <input type="text" name="fname" id="Candidate Name"  placeholder="FirstName here" disabled>
        
        <br><br>

        Candidate's LastName: <input type="text" name="lname" id="LastName" placeholder="LastName here" disabled>
        
        <br><br>
        
        Role Applied For: <input type="text" name="role" id="Role" placeholder="Role" disabled>
        <br><br>
        Position Applied For: <input type="text" name="position" id="Position" placeholder="Position" disabled>

        <br><br>
        
        Department: <input type="text" name="department" id="Department" placeholder="Department" disabled>
        
        <br><br>

        Date: <input type="date" id="Date" placeholder="Date" disabled>
        
        <br>

<div id="Employer">
    
<h3>Feedback By:</h3>

    
        Interviewer's FirstName: <input type="text" name="interviewer's fname" id="Interviewer's name" placeholder="FirstName here" disabled>
       
        <br><br>

        Interviewer's LastName: <input type="text" name="interviewer's lname" id="Interviewer's lname" placeholder="LastName here" disabled>
        
</div>

</header>

<br><br>

<h3>Add Review</h3>

<div id="addmore">
Review: <textarea name="Review[]" id="review" col="3" row="10"></textarea>
<a href="#" id="add">Add More Review</a>
</div>


<br><br>
<input type="submit" name="review" value="Save">  

        </form>     
</body>
</html>



