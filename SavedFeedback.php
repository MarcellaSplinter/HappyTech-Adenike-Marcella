<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Feedback</title>
    <link rel="stylesheet" href="./Feedback.css">
</head>
<body>
        
<?php
    require_once 'common.php';
    require_once 'templates.php';

    $feedbacks = getFeedback();
?>
    <div class="container">
        <div id="Title">
            <h3>Saved Feedback</h3>
        </div>
        <table>
        <thead>
            <tr>
                <th>Name</th><th>Content</th><th>Comments</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($feedbacks as $feedback) { ?>

            <tr>
                <td><?php echo $feedback['name_of_feedback']?></td>
                <td><?php echo $feedback['content_feedback']?></td>
                <td><?php echo $feedback['comments']?></td>
            </tr>
        <?php } ?>

            
        </tbody>

        </table>     
    
    </div>
    

</body>
</html>