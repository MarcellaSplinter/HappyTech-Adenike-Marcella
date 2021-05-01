<?php 

//echo print_r($_POST);

require_once __DIR__ . '/vendor/autoload.php';
require_once 'templates.php';

$mpdf = new \Mpdf\Mpdf(); 
ob_start();

echo "Candidate Information";
echo "\r\n";
echo 'First Name:' . $_POST['fname'];
echo "\r\n";
echo 'Last Name:' . $_POST['lname'];
echo "\r\n";
echo 'Role Applied for:' . $_POST['role'];
echo "\r\n";
echo 'Position Applied for:' . $_POST['position'];
echo "\r\n";
echo 'Department:' . $_POST['department'];
echo "\r\n";
echo 'Date:' . isset($_POST['dates']) ? $_POST['dates'] : '';
echo "\r\n";
echo 'Interviewers information';
echo "\r\n";
echo 'First Name: ' . $_POST['iname'];
echo "\r\n";
echo 'Last Name:' . $_POST['inname'];

$output = ob_get_contents(); 
echo $output;

ob_end_clean();


$feedbackId = addFeedback($_POST['fname'] . '.pdf' , $output, $_POST['templateText']);
$mpdf->WriteHTML($output);
$mpdf->Output('feedback/' . $feedbackId . '-' . $_POST['fname'].".pdf"); 


?>;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Feedback.css">
</head>
<body>
<?php echo $_POST['fname'] ?>
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
<h4>Date: <?php echo isset($_POST['dates']) ? $_POST['dates'] : ''; ?></h4>
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
<?php echo $_POST['templateText'] ?>


<?php echo $output ?>




</body>
</html>
