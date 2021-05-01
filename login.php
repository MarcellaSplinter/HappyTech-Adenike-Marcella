<?php
ob_start(); 
session_start();
$loginError = '';
$passwordError = '';
  require_once "db_connection.php";
if (isset($_POST['uname']) && !empty($_POST['psw'])){
	$query = "select * from users where login LIKE '".$_POST['uname']."'";
	$result = $connection ->query ($query)->fetch_all(MYSQLI_ASSOC);
	$row = count($result ) > 0 ? $result[0]: null;
	// check if username and password is correct
	if($row !== NULL){
		if($row['PASSWORD'] === $_POST['psw']){

			$_SESSION['loggedin'] = true;
    		$_SESSION['username'] = 'user';
		
			header("Location: Home.html"); 
			return;
		}
		else { 
			$passwordError = 'Incorrect password, please enter correct password';
		}
	} else {
		$loginError = 'Please enter valid username';
	}	
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Candara, Helvetica, sans-serif;}
h2 {text-align: center;}

body {
  background-color: #e6e3ca;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #a0a0a0;
  color: black;
  padding: 14px 20px;
  border: none;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 200px;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}



/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

.main{
	max-width: 800px;
	margin: 0 auto;
}


.center {
  margin-top: 20px;
  position: absolute;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  display: block;
}

.error {
	color: red;
}

</style>
</head>
<body>

<div class="main">
	<h2>HappyTech HR tool</h2> 

	<div id="id01">
	  
	  <form class="modal-content animate" action="login.php" method="post">
		<div class="imgcontainer">
		  <img src="img/logo.png" alt="Avatar" class="avatar">
		</div>

		<div class="container">
		  <label for="uname"><b>Username</b></label>
		  <input type="text" placeholder="Enter Username" name="uname" required>
<p class = 'error'> <?php echo $loginError; ?>
</p>
		  <label for="psw"><b>Password</b></label>
		  <input type="password" placeholder="Enter Password" name="psw" required>
		  <p class = 'error'> <?php echo $passwordError; ?>
		  </p>
		  <button type="submit" class="center" name="submit" >Login</button>
	
		</div>		
	  </form>
	</div>
</div>

</body>
</html>
