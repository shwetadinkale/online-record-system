<?php
session_start();
require 'db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);

}else{
header('Location: logout.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="">
<head>
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
</style>
</head>

<body>
<div class="container">
<button class="btn btn-success btn-lg float-right" type="submit"> <h1>Hello, <?php echo $userData['username'];?></h1>    </button>
<br>
<br>

<?php
  $user=$userData['username'];
  
  echo($userData['user_id']);
  

?>




<?php
	$Bloodgroup = $_POST['Bloodgroup'];
	$Weight = $_POST['Weight'];
	$Height = $_POST['Height'];
	$Blood_Pressure = $_POST['Blood_Pressure'];
	$Suger_Level = $_POST['Suger_Level'];
	$Cholestrol = $_POST['Cholestrol'];
	$Disability = $_POST['Disability'];
	$medical_issue = $_POST['medical_issue'];
	$allergi = $_POST['allergi'];
	$user_id=$userData['user_id'];
	
	

	// Database connection
	$conn = new mysqli('localhost','root','','login_registration');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Bloodgroup, Weight, Height, Blood_Pressure, Suger_Level, Cholestrol,Disability,medical_issue,allergi,user_id) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssssi", $Bloodgroup, $Weight, $Height, $Blood_Pressure, $Suger_Level, $Cholestrol, $Disability, $medical_issue, $allergi, $user_id);
		$execval = $stmt->execute();
		echo $execval;
		
		header("Location: http://localhost/ss/home.php");
		$stmt->close();
		$conn->close();
	}
?>