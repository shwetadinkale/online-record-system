<?php
session_start();
require 'db_connection.php';
require 'login.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: home.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;

}
</style>    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" media="all" type="text/css">
<title>Home</title>
<style>
a, a:visited{
color: #0000EE;
}
a:hover{
color: #EE0000;
}
.button2 {background-color: #008CBA;} /* Blue */
}
</style>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="style.css" media="all" type="text/css">
</head>
<body >
     

<form action="" method="post">
<h2>User_Login</h2>

<div class="container">
<label for="email"><b>Email Address</b></label>
<input type="email" placeholder="Enter email" id="email" name="user_email" required>

<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter password" id="password" name="user_password" required>

<button type="submit" class="button2">Login</button>
</div>
<?php
if(isset($success_message)){
echo '<div class="success_message">'.$success_message.'</div>'; 
}
if(isset($error_message)){
echo '<div class="error_message">'.$error_message.'</div>'; 
}
?>
<div class="container" style="background-color:#f1f1f1">
<a href="signup.php"><button type="button" class="Regbtn">Create an account</button></a>
<a href="auth.php"><button type="button" class="Regbtn">Login As Authority</button></a>
</div>
</form>
</body></html>