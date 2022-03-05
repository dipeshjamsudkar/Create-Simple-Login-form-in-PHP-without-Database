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
<form method="post" action="index.php">
<h1> Login</h1>
<h4 style="color:red;"><?php echo $msg; ?> <h4>

<span> Email </span> <br>
<input type="email" placeholder="email" name="email" required><br>
<span> Password </span> <br>
<input type="password" placeholder="password...." name="password" required><br>
<br>
<input type="submit" value="Login" >
</form>