<?php 
require_once 'db_connection.php';
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function getAllTemplates ()            
{
    global $connection;
    $query = "select * from templates";
	$result = $connection ->query ($query)->fetch_all(MYSQLI_ASSOC);
    return $result;
}

function getTemplateById ($id)            
{
    global $connection;
    $query = "select * from templates where id = ".$id;
	$result = $connection ->query ($query)->fetch_all(MYSQLI_ASSOC);
    return count($result) > 0 ? $result[0] : null;
   
}

function updateTemplateById ($id, $text, $title)            
{
    global $connection;
    $query = "update templates set title='" . $title . "', contents = '" . $text . "' where id = ".$id;
	$result = $connection ->query ($query);
    
}

function deleteTemplateById ($id)            
{
    global $connection;
    $query = "delete from templates where id = ".$id;
	$result = $connection ->query ($query);
    
}
function addNewTemplate($text, $title)
{
    global $connection;
    $query = "insert into templates (title, contents) select '" . $title . "', '" . $text . "';";
	$result = $connection ->query ($query);
}

function addFeedback($name, $content, $comments)
{
    global $connection;
    $query = "insert into feedback (name_of_feedback, content_feedback, comments) select '" . $name . "', '" . $content . "', '" . $comments . "';";
    $result = $connection ->query ($query);
        
}

function getFeedback()
{
    global $connection;
    $query = "select * from feedback;";
	$result = $connection ->query ($query)->fetch_all(MYSQLI_ASSOC);
    return $result;
        
}


function sendMail($name, $recipient)
{
    try {
    
        $email = new PHPMailer();

        $email->SetFrom(''); //Name is optional
        $email->SMTPAuth   = true;                                   //Enable SMTP authentication
        $email->Username   = 'user@example.com';                     //SMTP username
        $email->Password   = 'secret';                               //SMTP password
        $email->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $email->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        $email->Subject   = 'Feedback';
        $email->Body      = 'Please see attached our response to your recent application.';
        $email->AddAddress( $recipient );

        $email->AddAttachment( 'feedback/' . $name , $name );

        echo $email->Send();

    } catch (Exception $e) {
        echo 'Error';
        echo $e;
        echo "Message could not be sent. Mailer Error: {$email->ErrorInfo}";
    }
    
}