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
.button2 {background-color: #5CB85C;} /* Blue */
}
</style>
</head>

<body>
<div class="container">
<button class="btn btn-success btn-lg float-right" type="submit"> <h1>Hello, <?php echo $userData['username'];?></h1>    </button>
<br>
<br>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>login system!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Login System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    
      <li class="nav-item active">
        <a class="nav-link" href=" fill_profile.php"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Add profile info / Update Profile <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="add_report.php"> <b>   Add Report / Add Prescription </b> </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="firstpage.html"> <b>Home page </b> </a>
        
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        
      
      </li>
  </ul>
</div>
</div>

<b> <a href="logout.php"  style="color:white">Logout</a> </b>
</div>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>




<?php
$conn = mysqli_connect("localhost", "root", "", "login_registration");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$id=$userData['user_id'];
$sql = "SELECT id,Bloodgroup,Weight,Height,Blood_Pressure,Suger_Level,Cholestrol,Disability,medical_issue,allergi,user_id   FROM registration Where user_id='$id' ";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$Bloodgroup=$row["Bloodgroup"];
$Weight=$row["Weight"];
$Height=$row["Height"];
$Blood_Pressure=$row["Blood_Pressure"];
$Suger_Level=$row["Suger_Level"];
$Cholestrol=$row["Cholestrol"];
$Disability=$row["Disability"];
$medical_issue=$row["medical_issue"];
$allergi=$row["allergi"];

}
echo "</table>";

}
 else {
    echo str_repeat("&nbsp;", 32);
    echo  "<p> <font color=red font face='verdana' size='5pt' text-align: center;>  First Add Profile Information To Continue Further</font> </p>";
 }
    
$conn->close();
?>
</table>
</body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <title>Profile Form  Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body  >

    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Medical Profile Information</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="Bloodgroup">Bloodgroup</label>
                
                &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp
                
                <?php echo $Bloodgroup;?>
               
              </div>
              <div class="form-group">
                <label for="Weight">Weight</label>
                &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp 
                <?php echo $Weight;?>
              </div>
              
              <div class="form-group">
                <label for="Height">Height</label>
                &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp 
                <?php echo $Height;?>
              </div>

              <div class="form-group">
                <label for="Blood Pressure">Blood Pressure</label>
                &nbsp &nbsp &nbsp &nbsp
                <?php echo $Blood_Pressure;?>
              </div>

              <div class="form-group">
                <label for="Suger Level">Suger Level</label>
                &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp
                <?php echo $Suger_Level;?>
              </div>

              <div class="form-group">
                <label for="Cholestrol">Cholestrol</label>
                &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp
                <?php echo $Cholestrol;?>
              </div>
              <div class="form-group">
                <label for="Disability">Disability (If "Yes" Mention It Below otherwise write "NA")</label>
                &nbsp &nbsp &nbsp &nbsp
                <?php echo $Disability;?>
              </div>
              <div class="form-group">
                <label for="Suger Level">Serious Medical Issues (If "Yes" Mention It Below otherwise write "NA")</label>
                &nbsp &nbsp &nbsp &nbsp
                <?php echo $medical_issue;?>
              </div>
              <div class="form-group">
                <label for="Suger Level">Allergical Problem (If "Yes" Mention It Below otherwise write "NA")</label>
                &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp
                <?php echo $allergi;?>
              </div>
              
            </form>
          </div>
          
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
 
  
</div>
  </body>
</html>
