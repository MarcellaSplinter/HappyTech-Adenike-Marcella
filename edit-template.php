<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit <?php echo $template['title']?></title>
    <link rel="stylesheet" href="./Feedback.css">
</head>
<body>
    
<?php
    require_once 'templates.php';
    require_once 'common.php';
    $template = getTemplateById ($_GET['id']);
?>

<div class="container">

    <p>Kindly enter the template text to be included in the feedback form below:</p>

    <form action="updateTemplate.php?id=<?php echo $_GET ["id"] ?>" name="updateForm" method="POST" >
        <label>Title: </label><input type="textbox" name="title" value="<?php echo $template['title'] ?? '' ?>" >
        <br>
        <Label>Template Text: </Labe><input type="textbox" name="text" value="<?php echo $template['contents'] ?>">
        <br>
        <input type="submit" value="Save">
    </form>  

</div>

</body>
</html>
