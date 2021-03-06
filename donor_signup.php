<?php
  session_start();
  $connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
  $db = mysqli_select_db($connection,"portal"); // Selecting Database from Server
  $error = "Registered as Donor successfully...!!";
  $error1 = "Fill all the fields";
  if(isset($_POST['full_name'])){ // Fetching variables of the form which travels in URL
    $full_name = $_POST['full_name'];
    $profession = $_POST['profession'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email_id = $_POST['email'];
    $pass = $_POST['pass'];

    if($full_name !=''||$email_id !=''){
      //Insert Query of SQL
      $query = mysqli_query($connection,"insert into donor_details(donor_name, donor_email, password, donor_contact,donor_address, donor_profession) values ('$full_name', '$email_id', '$pass', '$phone', '$address', '$profession');");
      $_SESSION["error"] = $error;
    }
    else{
      $_SESSION["error"] = $error1;
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
        <a href="index.php" style="text-align: left;text-decoration: none;padding:10px;color:white;background-color: #4caf50">Home</a>
    </div>
<div class="bg-img">
  <div class="register_form">  
<form method="POST" action="">  
<h2 style=";text-align: center;color: #26466D;"><u>Donor Registration</u></h2>

<?php
      if(isset($_SESSION["error1"])){
        $error = $_SESSION["error1"];
        echo "<span style=\"color: red;\" >$error1</span>";
      }
?>
<div class="form_elemts"> 
<label><b>Full Name : <b></label>         
<input type="text" name="full_name" size="20" style="height: 30px;" /> <br> <br>  
<label> Profession : </label>         
<input type="text" name="profession" size="15" style="height: 30px;"/> <br> <br>   
<label>   

<label>   
Gender :  
</label><br>  
<input type="radio" name="gender" value="Male" /> Male <br>  
<input type="radio" name="gender" value="Female" /> Female <br>  
<input type="radio" name="gender" value="Other" /> Other  
<br>  
<br>  
  
<label>   
Phone :  
</label>    
<input type="text" name="phone" style="height: 30px;width: 150px;"size="10"/> <br> <br>  
Address :  
<br>  
<textarea cols="50" rows="5" name="address">  
</textarea>  
<br> <br>  
Email:  
<input type="email" id="email" name="email" style="height: 30px;" /> <br>    
<br> <br>  
Password:  
<input type="Password" id="pass" name="pass" style="height: 30px;"> <br>   
<br> <br>  
<input type="Submit" style="width: 100%;height: 30px;margin-left: 0px;background-color: #40B640 " name="Submit" value="Submit"/>
<?php
      if(isset($_SESSION["error"])){
        $error = $_SESSION["error"];
        echo "<span style=\"color: green;\" >$error</span>";
      }
?>
<div class="link login-link text-center">Already a member? <a href="donor_login.php">Login here</a></div>
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
  unset($_SESSION["error1"]);
?>