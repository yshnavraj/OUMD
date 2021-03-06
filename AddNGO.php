<?php
session_start();
include_once 'database.php';
if(isset($_POST['submit'])) {
  $ngo_name = $_POST['ngo_name'];
  $ngo_email = $_POST['ngo_email'];
  $ngo_contact = $_POST['ngo_contact'];
  $ngo_address = $_POST['ngo_address'];
  $ngo_password = $_POST['ngo_password'];
  $status = "NGO added Successfully";
  if($ngo_name != '' && $ngo_email != '' && $ngo_contact != '' && $ngo_address != '' && $ngo_password != '') {
    $query = mysqli_query($con, "insert into ngo_details (ngo_name, ngo_email, password, ngo_contact, ngo_address) values('$ngo_name', '$ngo_email', '$ngo_password', '$ngo_contact', '$ngo_address');");
    $_SESSION['status'] = $status;
  } else {
    $_SESSION['status'] = "Fill Data Correctly";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<style>
	body {
    margin: 0;
    font-family: 'Roboto', sans-serif;
    /*background-color: #8B6969;*/
    
  }
	.about-section {
		margin:0px; 
    	padding: 20px;
    	text-align: center;
    	background-color: #474e5d;
    	color: white;
    }

    .register_form{
    	background-color: #EABCBC;
    	width:30%;
    	float: right;
    	text-align: left;
    	margin-right: 50px;
    	padding: 30px 30px 20px 50px;

    }
    .register_form.form_elemts{
    	size: 0px;
    }
    .bg-img {
  /* The image used */
  margin-top: 20px;
  background-image: url("images/img.jpeg");
  min-height: 500px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="/images/bg1.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>OUMD</title>

</head>
<body style="background-image: url('images/gif_back_1.gif');">

<div class="topnav">

  <a href="AdminH.php">Home</a>
  <a href="aboutus.php" class="active">Add NGO</a>
  <a href="ViewRegisteredNGO's.php">View Registered NGO's</a>
  <a href="View_donors.php">View Donors</a>
  <div class="float_right">
  <a href="#admin" style="background-color:#333; color: white;" id="admin">Admin</a>
    <a href="admin_login.php">Logout</a>
  </div>
</div>
<div class="bg-img">
  <div class="register_form">  
<form action="" method="POST">  
<h2 style="text-align: center;color: #26466D;"><u>Add NGO</u></h2>
<div class="form_elemts"> 
<label><b> Name: <b></label>         
<input type="text" name="ngo_name" size="20" style="height: 30px;" /> <br> <br>  
<label> E-Mail : </label>     
<input type="text" name="ngo_email" size="20" style="height: 30px;"/> <br> <br>
<label> Phone :  </label> 
<input type="text" name="ngo_contact" style="height: 30px;width: 150px;"size="10"/> <br> <br>  
Address :  
<br>  
<input name="ngo_address" type="text" cols="20" rows="5"/>  
<br> <br>    
<label> Password: </label>
<input type="text" id="pass" name="ngo_password" style="height: 30px;"/><br> <br> 
<input type="submit" name="submit" style="width: 100%;height: 30px;margin-left: 0px;background-color: #40B640 "value="Add NGO"/>
<?php
      if(isset($_SESSION["status"])){
        $status = $_SESSION["status"];
        echo "<span style=\"color: green;\" >$status</span>";
      }
?>
</div>  
</form>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php
unset($_SESSION["status"]);
?>