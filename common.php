<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
	header("Location: login.php");
    return;
}   
?>
<div>
   
    <header>
        <nav>
            <ul>
                <li class="current"><a href="Home.php">Home</a></li>
                <li><a href="Template.php">Templates</a></li>
                <li><a href="GenerateFeedback.php">Generate Feedback</a></li>
                <li><a href="SavedFeedback.php">Saved Feedback</a></li>
                <li><a class="logout-button" href="logout.php" title="Logout"><img src="img/logout.png"/></a></li>
            </ul>
        </nav>   
    </header>

    <h1>HappyTech Technology Company</h1>
    
</div>
