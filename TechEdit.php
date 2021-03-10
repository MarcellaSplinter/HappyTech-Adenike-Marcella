
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo "Candidate's information are:"; ?>
<h4> Candidate's FirstName: <?php echo $_POST['fname'] ?></h4>
<?php echo "<br>" ?>
<h4> Candidate's LastNmae: <?php echo $_POST['lname'] ?></h4>
<?php echo "<br>" ?>
<h4> Role Applied for: <?php echo $_POST['role'] ?></h4>
<?php echo "<br>" ?>
<h4>Position Applied for: <?php echo $_POST['position'] ?></h4>
<?php echo "<br>" ?>
<h4>Department: <?php echo $_POST['department'] ?></h4>
<?php echo "<br>" ?>
<h4>Date: <?php echo $_POST['date'] ?></h4>
<?php echo "<br>" ?>
<?php echo "Interviewer's information are:"?>
<h4>Interviewer's FirstName: <?php echo $_POST['iname'] ?></h4>
<?php echo "<br>" ?>
<h4>Interviewer's LastName: <?php echo $_POST['inname'] ?></h4>

<?php if (isset($_POST['save'])){
    if(!empty($_POST['review']))
    {
        echo '<p> Application Reviews:</p>';
        foreach($_POST['review'] as $review)
        {
            echo '<p>' .$review. '</p>';
        }
        
    }
    else{
        echo 'Please select a review';
    }
}

?>

<?php echo "Feedback Commment:"?>
<?php echo "<br>" ?>
<?php echo $_POST['feedback'] ?>







</body>
</html>
