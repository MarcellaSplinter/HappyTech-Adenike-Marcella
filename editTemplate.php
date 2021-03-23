<?php
include("dbConn.php");

    $id = $_GET["id"];

    $sql = "SELECT id, name FROM Templates WHERE id = ".$id;
    $templateResult = $conn->query($sql);
    $template = $templateResult->fetch();

    $reviewSQL = "SELECT id, description FROM Review WHERE template_id = ".$id;
    $reviews = $conn->query($reviewSQL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Edit Template | Happy Tech</title>
    <link rel="stylesheet" href="./Feedback.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        var counter=0;
        var totalNumberofReviews=10;
        $(document).ready(function(e){
                //variables
counter=0;
                var html ='<div> Review: <input type="text" name="review" placeholder="Write something..." size="75" /><a href="#" id="remove">X</a></div>';
                
         
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

        function AddTextField(num)
        {
               if(num < totalNumberofReviews)
               {
                var html ='<div> Review: <input type="text" name="review'+num+'" placeholder="Write something..." size="75" /><a href="#" id="remove">X</a></div>';
                $("#addmore").append(html); 
                counter+=1;  
               }
               else
               {
                       alert("Maximum number of reviews reached!");
               }

        }
        function RemoveTextField(num)
        {
                var html ='<div> Review: <input type="text" name="review'+num+'" placeholder="Write something..." size="75" /><a href="#" id="remove">X</a></div>';
                $("#addmore").append(html); 
                counter-=1;  
        }
        </script>
        
</head>
<body>
<form action="InterviewEdit.php" method="POST">
    <h3>Edit <?php echo $template['name']; ?> Template</h3>

    <header>  
        <div class="New">
        <h1>HappyTech Technology Company</h1>

<br>
        
 
    
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

<?php if (isset($reviews) && !empty($reviews)) { 
        foreach ($reviews as $review) {       
?>
<div>
Review: <input type="text" name="review" placeholder="Write something..." value="<?php echo $review['description']; ?>" size="75" />
</div>
<?php } } ?>

<div id="addmore">
Review: <input type="text" name="review" placeholder="Write something..." size="75" />
<a href="#" onclick="AddTextField(counter)">Add More Review</a>

</div>


<br><br>
<input type="submit" name="save"  value="Save"/>
<input type="hidden" name='templateId' value="<?php echo $id; ?>" />
        </form>        
</body>
</html>



