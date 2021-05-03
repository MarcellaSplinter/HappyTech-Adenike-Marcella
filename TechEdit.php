<?php 

//echo print_r($_POST);

require_once __DIR__ . '/vendor/autoload.php';
require_once 'templates.php';

$mpdf = new \Mpdf\Mpdf(); 
ob_start();

echo "Candidate Information";
echo "<br>";
echo 'First Name: ' . $_POST['fname'];
echo "<br>";
echo 'Last Name: ' . $_POST['lname'];
echo "<br>";
echo 'Role Applied for: ' . $_POST['role'];
echo "<br>";
echo 'Position Applied for: ' . $_POST['position'];
echo "<br>";
echo 'Department: ' . $_POST['department'];
echo "<br>";
echo isset($_POST['dates']) ? 'Date: ' . $_POST['dates'] : 'Date: ';
echo "<br>";
echo 'Feedback given: ' . $_POST['templateText'];
echo "<br>";
echo "<br>";
echo 'Interviewer\'s information';
echo "<br>";
echo 'First Name: ' . $_POST['iname'];
echo "<br>";
echo 'Last Name:' . $_POST['inname'];

$output = ob_get_contents(); 
echo $output;

ob_end_clean();
$name = $_POST['fname'] . '-' . date("YmdHi") . '.pdf';

$feedbackId = addFeedback($name , $output, $_POST['templateText']);
$mpdf->WriteHTML($output);
$mpdf->Output('feedback/' . $name); 
?>
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
    <?php
        require_once 'common.php'
    ?>
<div class="container">
        <div id="Title">
        <h3>Feedback Output:</h3>
        </div>

<?php echo "Candidate information:"; ?>
<h4> Candidate's FirstName: <?php echo $_POST['fname'] ?></h4>
<h4> Candidate's LastNmae: <?php echo $_POST['lname'] ?></h4>
<h4> Role Applied for: <?php echo $_POST['role'] ?></h4>
<h4>Position Applied for: <?php echo $_POST['position'] ?></h4>
<h4>Department: <?php echo $_POST['department'] ?></h4>
<h4>Feedback given: <?php echo  $_POST['templateText'] ?></h4>
<h4>Date: <?php echo isset($_POST['dates']) ? $_POST['dates'] : ''; ?></h4>
<?php echo "Interviewer's information are:"?>
<h4>Interviewer's FirstName: <?php echo $_POST['iname'] ?></h4>
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
</div>
</body>
</html>
