<?php

include("dbConn.php");

$totalNumberofReviews = 10;
$reviews=Array();

    if (isset ($_POST['save'])){
        
        if(isset($_POST['review']))
        {
            $reviews[0] =$_POST['review'];
            for($i = 0; $i < $totalNumberofReviews = 10; $i++)
            {
                if(isset($_POST['review'.$i]))
                {
                    $reviews[$i+1]=$_POST['review'.$i];
                }
            }
        
        }
    }

    $templateId = $_POST['templateId'];

       $array = [1,2,3,4];
        foreach ( $reviews as $review) {
  
           // echo $review . "<br>"; 
            
            $sql = "INSERT INTO Review (description, template_id) VALUES ('$review', '$templateId')";
            $conn->exec($sql);
            
            
    
        }

   $conn = null;
?>
