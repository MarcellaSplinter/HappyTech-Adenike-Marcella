<?php
    include("dbConn.php");

    $sql = "SELECT id, name FROM Templates";
    $templateResults = $conn->query($sql);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Feedback</title>
    <link rel ="stylesheet" href ="./Feedback.css">
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
                        
                <li class><a href="Home.php">Home</a></li>
            <li><a href="templates.php">Templates</a></li>
            <li class="current"><a href="Feedback.php">Generate Feedback</a></li>
            <li><a href="Savedfeedback.php">Saved Feedback</a></li>
            <li><a href="SentFeedback.php">Sent Feedback</a></li>
            <li><a href="Delete.php">Deleted Feedback</a></li>

                    </ul>
                </nav>
            </div>
        
        </header>
      
        
        <h3>Select feedback type:</h3>
<br>
      
            <ol>

<?php foreach ($templateResults as $template) { ?>
                <li><a href="Generatefeedback.php?id=<?php echo $template['id']; ?>"><?php echo $template['name']; ?></a></li>
                <br/>
<?php } ?>

            </ol>
  
</body>
</html>