<?php

  include_once 'database.php';
  session_start();

  if(isset($_POST['submit'])) {
    $ngo_name = $_POST['username'];
    $exec_name = $_POST['exec_name'];
    $exec_email = $_POST['exec_email'];
    $donor_name = $_POST['donor_name'];
    $donor_email = $_POST['donor_email'];
    $donor_address = $_POST['donor_address'];
    $med_name = $_POST['med_name'];
    $quantity = $_POST['quantity'];

    $check1 = mysqli_query($con, "select * from executive_details where exec_name = '$exec_name' and exec_email = '$exec_email';");
    $check2 = mysqli_query($con, "select * from donor_details where donor_name = '$donor_name' and donor_email = '$donor_email';");

    $c1 = mysqli_num_rows($check1);
    $c2 = mysqli_num_rows($check2);
    if($c1 == 1 && $c2 == 1) {
      $res = mysqli_query($con, "insert into assign_exec_details (exec_name,exec_email,donor_name,donor_email,donor_address,med_name,quantity) values('$exec_name', '$exec_email', '$donor_name', '$donor_email', '$donor_address', '$med_name', '$quantity');");
      ?>
      <script>
        console.log("Data Inserted Successfully!!");
      </script>
      <?php
      header("location:assign_executive.php");
    }
    else {
      ?>
      <script>console.log("Enter data correctly");</script>
      <?php
    }
  }

?>



<html>  
<head>   
<title>  
Fill Executive Form  
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400&display=swap" rel="stylesheet">
</title>  
<style>
	body {
    margin: 0;
    font-family: 'Prompt', sans-serif;
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
</head>  
<body> 

<div class="about-section">
        <h1>Online Unused Medicine Donations to Ngo's</h1>
        <a href="assign_executive.php" style="text-align: left;text-decoration: none;padding:10px;color:white;background-color: #4caf50">Back</a>
    </div>
<div class="bg-img">
  <div class="register_form">  
<form method="POST" action="">  
<h2 style=";text-align: center;color: #26466D;"><u>Assign Executive</u></h2>
<div class="form_elemts"> 
<label><b>Executive's Name : <b></label>         
<input type="text" name="exec_name" size="20" style="height: 30px;" /> <br> <br>  
<label> Executive's Email-id : </label>     
<input type="text" name="exec_email" size="15" style="height: 30px;"/> <br> <br>  
<label> Donator's Name : </label>         
<input type="text" name="donor_name" size="15" style="height: 30px;"/> <br> <br>  
<label> Donator's Email Id : </label>         
<input type="text" name="donor_email" size="15" style="height: 30px;"/> <br> <br>   


<label> Donator's Address : </label>         
<input type="text" name="donor_address" size="15" style="height: 30px;"/> <br> <br>   
 

<label> Medicine Name : </label>         
<input type="text" name="med_name" size="15" style="height: 30px;"/> <br> <br>   

<label> Medicine Quantity : </label>         
<input type="number" name="quantity" size="15" style="height: 30px;"/> <br> <br>   

<label> Expiry Date : </label>         
<input type="date" name="exp_date" size="15" style="height: 30px;"/> <br> <br>   

<br> 
<input type="submit" name="submit" style="width: 100%;height: 30px;margin-left: 0px;background-color: #40B640 "value="Add Executive"/>
<input type="reset" style="width: 100%;height: 30px;margin-left: 0px;background-color: #40B640 "value="Reset"/>
</div>  
</form>
</div> 
</div>  

</form>
</div>  
</body>  
</html>  