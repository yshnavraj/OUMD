<?php
    include 'database.php';
    session_start();  
    if(isset($_POST['email'])) {
      $donor_email = $_POST['email'];
      $password = $_POST['pass'];

      $sql = "select * from donor_details where donor_email = '".$donor_email."' and password = '".$password."' limit 1";

      $result = mysqli_query($con, $sql);
      $total = mysqli_num_rows($result);
      if($total == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['donor_id'];
        $_SESSION['username'] = $row['donor_name'];
        header("location:donor_Home.php");
      }
      else {
        include_once 'donor_login_check.php';
      }

    }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
<style>
body, html {
  height: 100%;
  font-family: 'Roboto', sans-serif;
  background-color: #E7C4C4;
}

* {
  margin: 0;
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("images/img.jpeg");

  min-height: 500px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 60px;
  max-width: 500px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
 .about-section {
    padding: 40px;
    text-align: center;
    background-color: #474e5d;
    color: white;
</style>
</head>
<body>
<div class="about-section">
        <h1>Online Unused Medicine Donations to Ngo's</h1>
        <br>
        <a href="index.php" style="text-align: left;text-decoration: none;padding:10px;color:white;background-color: #4caf50">Home</a>
</div>
<h1 style="text-align:center; font:bold; font-size:30px;color: #330000">Donor Login</h1>
<div class="bg-img">
  <form method="POST"  class="container">
    <h1>Login</h1>
    <?php
      if(isset($_SESSION["error"])){
        $error = $_SESSION["error"];
        echo "<span style=\"color: red;\" >$error</span>";
      }
    ?>  
    <br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>



    <button type="submit" class="btn">Login</button>
    <br>
    <br>
    <a href="donor_signup.php" style="color: black; float: right;">Sign Up</a>
  </form>
</div>



</body>
</html>
