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
  

<div class="container mt-2">
<h3> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp patients Information </h3>
<hr>
<form  method="POST"> 
  <div class="form-row">
    <br>
    <br>
    <div class="form-group col-md-10">
    <br>
    <label for="weight"> &nbsp&nbsp Blood group</label>
    <input type="text" class="form-control" id="bloodgroup" name="bloodgroup">
    </div>

    <div class="form-group col-md-10">
    <label for="weight">&nbsp&nbsp  Weight (In Kg)</label>
      <input type="text" class="form-control" id="weight" name="weight">
    </div>


    <div class="form-group col-md-10">
      <label for="height"> &nbsp&nbsp Height (In Feets)</label>
      <input type="text" class="form-control" id="height" name="height">
    </div>
    

    <div class="form-group col-md-10">
      <label for="bp"> &nbsp&nbsp Blood Pressure</label>
      <input type="text" class="form-control" id="bp" name="bp">
    </div>

    <div class="form-group col-md-10">
      <label for="suger"> &nbsp&nbsp Suger Level</label>
      <input type="text" class="form-control" id="suger" name="suger">
    </div>

    <div class="form-group col-md-10">
      <label for="cholesterol"> &nbsp&nbsp Cholestrol</label>
      <input type="text" class="form-control" id="cholesterol" name="cholesterol">
    </div>


    <div class="form-group col-md-10">
      <label for="disability"> &nbsp&nbsp Disability (If "Yes" Mention It Below otherwise write "NA")</label>
      <input type="text" class="form-control" id="disability" name="disability">
    </div>

    <div class="form-group col-md-10">
      <label for="medical_issue"> &nbsp&nbsp Serious Medical Issues (If "Yes" Mention It Below otherwise write "NA")</label>
      <input type="text" class="form-control" id="medical_issue" name="medical_issue">
    </div>

    <div class="form-group col-md-10">
      <label for="allergi"> &nbsp&nbsp Allergical Problem (If "Yes" Mention It Below otherwise write "NA")</label>
      <input type="text" class="form-control" id="allergi" name="allergi">
    </div>

    

   




  </div>


  


  <input type="submit" name="update">
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<?php 
    if (isset($_POST['update']))
    {
    $hostname="localhost";
    $uname="root";
    $pwd="";
    $dbname="test";
    $connect=mysqli_connect($hostname,$uname,$pwd,$dbname);

    $bloodgroup=$_POST['bloodgroup'];
    $weight=$_POST['weight'];
    $height=$_POST['height'];
    $bp=$_POST['bp'];
    $suger=$_POST['suger'];
    $cholesterol=$_POST['cholesterol'];
    $disability=$_POST['disability'];
    $allergi=$_POST['allergi'];
    $query1="UPDATE 'profile_info' SET 'bloodgroup' = '$bloodgroup','weight'= '$weight','height'='$height','bp'='$bp','suger'='$suger','cholesterol'='$cholesterol','disability'='$disability','allergi'='$allergi' WHERE 'profile_info'.'id'='4';";
    $result=mysqli_query($connect,$query1);
    if($result)
    {
        echo "Data Updated....";
    }
    else
    {
        echo "Data Not Updated....";
    }
    mysqli_close($connect);

    }
    ?>