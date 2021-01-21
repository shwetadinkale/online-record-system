







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
  
  
  

?>



<!DOCTYPE html>
<html>
  <head>
    <title>Profile Form  Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Fill Information in Profile Page</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="Bloodgroup">Bloodgroup</label>
                <input
                  type="text"
                  class="form-control"
                  id="Bloodgroup"
                  name="Bloodgroup"
                />
              </div>
              <div class="form-group">
                <label for="Weight">Weight</label>
                <input
                  type="text"
                  class="form-control"
                  id="Weight"
                  name="Weight"
                />
              </div>
              
              <div class="form-group">
                <label for="Height">Height</label>
                <input
                  type="text"
                  class="form-control"
                  id="Height"
                  name="Height"
                />
              </div>
              <div class="form-group">
                <label for="Blood Pressure">Blood Pressure</label>
                <input
                  type="Blood_Pressure"
                  class="form-control"
                  id="Blood_Pressure"
                  name="Blood_Pressure"
                />
              </div>
              <div class="form-group">
                <label for="Suger Level">Suger Level</label>
                <input
                  type="Suger_Level"
                  class="form-control"
                  id="Suger_Level"
                  name="Suger_Level"
                />
              </div>
              <div class="form-group">
                <label for="Cholestrol">Cholestrol</label>
                <input
                  type="Cholestrol"
                  class="form-control"
                  id="Cholestrol"
                  name="Cholestrol"
                />
              </div><div class="form-group">
                <label for="Disability">Disability (If "Yes" Mention It Below otherwise write "NA")</label>
                <input
                  type="Disability"
                  class="form-control"
                  id="Disability"
                  name="Disability"
                />
              </div><div class="form-group">
                <label for="Suger Level">Serious Medical Issues (If "Yes" Mention It Below otherwise write "NA")</label>
                <input
                  type="medical_issue"
                  class="form-control"
                  id="medical_issue"
                  name="medical_issue"
                />
              </div><div class="form-group">
                <label for="Suger Level">Allergical Problem (If "Yes" Mention It Below otherwise write "NA")</label>
                <input
                  type="allergi"
                  class="form-control"
                  id="allergi"
                  name="allergi"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
          
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
 
  
</div>
  </body>
</html>