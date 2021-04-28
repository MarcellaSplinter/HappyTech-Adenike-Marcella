<?php 

require_once 'templates.php';

$templates = getAllTemplates(); //ackOptions();

//$id = $_GET['id'];

//$sql = "SELECT template_id, name FROM Templates WHERE id = ".$id;
//$templateQuery = $conn->query($sql);
//$template = $templateQuery->fetch();

//$reviewSql = "SELECT id, description FROM Review WHERE template_id = ".$id;
//$reviews = [];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Feedback</title>
    <link rel="stylesheet" href="./Feedback.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>

<header> 
        <div class="New">
        <h1>HappyTech Technology Company</h1>

        <form action="TechEdit.php" method="POST">
       
        Candidate's Firstname: <input type="text" name="fname" placeholder="Candidate's First Name here" required/>
        
        <br><br>

        Candidate's Last Name: <input type="text" name="lname" placeholder="Candidate's Last name here" required/>
        
        <br><br>

        Role Applied For: <input type="text" name="role" placeholder="Role" required/>
        
        <br><br>

        Position Applied For: <input type="text" name="position" placeholder="Position Applied For" required/>

        <br><br>
        
        Department: <input type="text" name="department" placeholder="Department" required/>
       
        <br><br>

        Date: <input type="date" name="dates" placeholder="Date" required/> 
        
        <br>

<div id="Employer">
    <h3>Feedback By:</h3>

    <br>

        Interviewer's First Name: <input type="text" name="iname" placeholder="Interviewer's FirstName" required/>
        
        <br><br>

        Interviewer's LastName: <input type="text" name="inname" placeholder="Interviewer's Last name" required/>
        
     
        </div>
</header>
<br>
<label>Select Template Text Type:</label>
<select id="selectTemplate">
    <?php 
    foreach($templates as $template) { ?>

    <option value="<?php echo $template['contents']?>"><?php echo $template['title']?></option>
   
    }
    <?php } ?>
</select>
<script>
   
   $("#selectTemplate").on('change', function() {
    var selectedTemplate = $('#selectTemplate').find(":selected").val();
    $("#templateText").val(selectedTemplate);
    });

</script>

<input id="templateText" type="hidden" name="templateText" value="<?php echo count($templates) > 0 ? array_values($templates)[0]['contents'] : '' ?>">

<input type="submit" value="Save"/>  

</form>

<!-- <?php foreach($reviews as $review) { ?>
    <p><input type="checkbox" name="review[]" value="<?php echo $review['id']; ?>" /> <?php echo $review['description']; ?></p>
<?php } ?>
     -->
<!-- <h4>Feedback comment</h4>
<textarea name="feedback" cols="50" rows="10" placeholder="Type Feedback Comment Here" >
</textarea>

<input type="submit" name="save" value="Save"/>  
        
</form>    -->
        </body>
        </html>