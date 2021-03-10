<?php
    $templates = array(1 => "CV", 2 => "Interview", 3 => "Technical Interview", 4 => "Medical Examination Result", 5 => "Final Decision");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Templates</title>
    <link rel="stylesheet" href="./Feedback.css">

</head>
<body>
    
    <header>
              
        <h1>HappyTech Technology Company</h1>
        
            <div class="container">
                <div id="Title">
                    <h3>Candidates Feedback Application</h3>
                </div>
                
                <nav>
                    <ul>
                        
                        <li><a href="Home.php">Home</a></li>
                <li class="current"><a href="templates.php">Templates</a></li>

                <li><a href="Feedback.php">Generate Feedback</a></li>
                <li><a href="Savedfeedback.php">Saved Feedback</a></li>
                <li><a href="SentFeedback.php">Sent Feedback</a></li>
                <li><a href="Delete.php">Deleted Feedback</a></li>


                    </ul>
                </nav>
            </div>
        </section>
    </header>

    <h3>List of Templates:</h3>

    <table>
        <tr>
            <th>S/N</th>
            <th>Template Name</th>
            <th>Action</th>
        </tr>
    <?php foreach ($templates as $key => $value) { ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
            <td>
                <a href="editTemplate.php?id=<?php echo $key; ?>">Edit</a> &bull; <a href="Delete.php?id=<?php echo $key; ?>">Delete</a>
                
                

            </td>
        </tr>
    <?php } ?>
    </table>

   
    
</body>
</html>