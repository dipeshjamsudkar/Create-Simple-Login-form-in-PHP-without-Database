<?php
require'config.php';
session_start();
if($_POST['email'] && $_POST['password'])
{
$email = $_POST['email'];
$pass = $_POST['password'];
if($email == $emailid && $pass == $password)
{
$_SESSION['email'] = $email;
header('Location: welcome.php');
}else{
$msg = "Please Enter Valid email & password";}
}
?>
<!-------------------------https://dipeshjamsudkar.rf.gd---------------------->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
        <title>HSC Examination 2022 - RESULT :: MAHARASHTRA STATE BOARD OF SECONDARY AND HIGHER SECONDARY EDUCATION, PUNE</title>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
 </head>
 <body>
<div class="container">    
	      <center> <img src="https://dipeshjamsudkar.rf.gd/img/icon.png" height="80px" width="105px" alt="dipeshjamsudkar" ></img>
	      <h5 class="brand-title">Login</h5>
	      <h4 style="color:red;"><?php echo $msg; ?> </h4>
	      
	  	  <form method="post" action="index.php">
	  	  <h3>Email</h3>
		  <input type="text" id="seatNumber" name="seatNumber" maxlength="7" value="" onkeypress='kypPress(event)' />
		  
		  <h3 for="pwd" >Password : </h3>
		  <input type="text" id="password" name="password" maxlength="20" value="" onkeypress='kypPress(event)' /> 
		 Demo Enter pass@123
		  
		  <button type="button" class="button">Login</button>    
		  <p id="div" ></p>    
	      </form>
	      </div>
	      </center>
	      
</body>
</html>
