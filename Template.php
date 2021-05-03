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
    require_once 'common.php';
    require_once 'templates.php';
?>      
    <div class="container">
        <div id="Title">
        <h3>List of Templates:</h3>
        </div>

        <table> 
            <thead>
            <th>S/N</th>
            <th>Template Name</th>
            <th>Action</th>
            </thead>
        <?php 
        foreach (getAllTemplates () as $template) : 
            ?>
            <tr>
                <td><?php echo $template['id']?></td>
                
                <td><?php echo $template['title']?></td>
                <td> <a href="edit-template.php?id=<?php echo $template['id']?>"> Edit</a> /
                     <a href="deleteTemplate.php?id=<?php echo $template['id']?>">Delete</a>
                </td>
            </tr>
            <?php endforeach;
            ?>
        </table>
<br>
<br>
<hr>
<br>
<form action="createTemplate.php" name="updateForm" method="POST" >
    <label>Title: </label><input type="textbox" name="title" placeholder="Enter the title here" >
    <br>
    <Label>Template Text: </Labe><input type="textbox" name="text" placeholder="Enter the template content here">
    <input type="submit" value="Add Template">
</form>  
</div>
</section>




</body>
</html>
