<?php
  session_start();
  $connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
  $db = mysqli_select_db($connection,"portal"); // Selecting Database from Server
  $error = "Successfully Donated.... Thank you for supporting the cause!!";
  if(isset($_POST['Submit'])){ // Fetching variables of the form which travels in URL
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $medicine_name = $_POST['medicine_name'];
    $date = $_POST['expiry_date'];
    

    if($full_name !=''&&$email !=''){
      //Insert Query of SQL
      $query3 = mysqli_query($connection, "select * from donor_details where donor_email = '$email';");
      $row = mysqli_fetch_assoc($query3);
      $id = $row['donor_id'];
      $_SESSION['id'] = $id;
      $query = mysqli_query($connection,"insert into donated_medicine (donor_id, donor_name,donor_email,med_name,donor_contact,expiry_date) values ('$id', '$full_name','$email', '$medicine_name','$phone', '$date')");
      $query2 = mysqli_query($connection, "insert into available_medicine (med_name, med_exp, donor_name, contact) values('$medicine_name', '$date', '$full_name', '$phone');");
      $_SESSION["error"] = $error;
    }
    else {
      $_SESSION["error"] = "Enter data Correctly!!";
    }
    
  }
  mysqli_close($connection); // Closing Connection with Server
?>
<html>  
<head>   
<title>  
Registration Page  
</title>  
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
</head>  
<body> 

<div class="about-section">
        <h1>Online Unused Medicine Donations to Ngo's</h1>
        <a href="donor_Home.php" style="text-align: left;text-decoration: none;padding:10px;color:white;background-color: #4caf50">Home</a>
    </div>
<div class="bg-img">
  <div class="register_form">  
<form method="POST" action="">  
<h2 style=";text-align: center;color: #26466D;"><u>Medicine Details</u></h2>
<div class="form_elemts"> 
<label><b>Full name : <b></label>         
<input type="text" name="full_name" size="20" style="height: 30px;" /> <br> <br>  
<label> Email of the user : </label>     
<input type="text" name="email" size="15" style="height: 30px;"/> <br> <br>           
<label>   
<label>   
Phone :  
</label>  
<input type="text" name="phone" style="height: 30px;width: 150px;"size="10"/> 
<br> <br>  
<label> Medicine name : </label>     
<input type="text" name="medicine_name" size="15" style="height: 30px;"/> <br> <br>  
<label> Expiry Date : </label>       
<input type="Date" name="expiry_date" size="15" style="height: 30px;"/> <br> <br>  
<br> 
<input type="Submit" style="width: 100%;height: 30px;margin-left: 0px;background-color: #40B640 " name="Submit" value="Submit"/>

<?php
      if(isset($_SESSION["error"])){
        $error = $_SESSION["error"];
        echo "<span style=\"color: green;\" >$error</span>";
      }
?>
</div>  
</form>
</div> 
</div>  

</form>
</div>  
</body>  
</html>  
<?php
  unset($_SESSION["error"]);
?>