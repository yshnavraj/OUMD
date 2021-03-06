<?php
session_start();
include_once 'database.php';
if(isset($_POST['admin'])) {
	$admin_name = $_POST['admin'];
	$password = $_POST['pass'];

	$sql = "select * from admin_table where admin_name = '$admin_name' and password = '$password'";

	$result = mysqli_query($con, $sql);
	$total = mysqli_num_rows($result);
	if($total == 1) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['admin_name'];
		header("location:AdminH.php");
	}
	else {
		include_once 'AdminH.php';
	}

}
?>

<html> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">

<title>Admin Login * OUMD</title>
<style> 
	/*set border to the form*/ 
	body {
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background-color: #E9D2D2;
  }
  .about-section {
    padding: 20px;
    text-align: center;
    background-color: #474e5d;
    color: white;
  }
	form { 
    border: 3px solid #f1f1f1; 
    width: 50%;
    background-color: white;
  } 
  h2 {
    color: black;
    padding-left: 10px;
  }
	/*assign full width inputs*/ 
	
	input[type=text], input[type=submit],
	input[type=password] { 
		width: 100%; 
		padding: 12px 20px; 
		margin: 8px 0; 
		display: inline-block; 
		border: 1px solid #ccc; 
		box-sizing: border-box; 
	} 
	/*set a style for the buttons*/ 
	
	button { 
		background-color: aqua; 
		color: black; 
    padding: 14px 20px; 
    font-weight: bold;
		margin: 8px 0; 
		border: none; 
		cursor: pointer; 
		width: 100%; 
	} 
	.imgcontainer { 
		text-align: center; 
		margin: 24px 0 12px 0; 
	} 
	/*set image properties*/ 
	
	img.avatar { 
		width: 40%; 
		border-radius: 50%; 
	} 
	/*set padding to the container*/ 
	
	.container { 
		padding: 16px; 
	} 

	.admin_form {
		margin-top: 50px;
		display: flex;
		box-shadow: 3px 3px 3px 3px #DF9D9D;
		margin-left :25%;
		border-radius: 10px;
		border-color: #A96E6E;
	}
	/*set the forgot password text*/ 
	
	/*set styles for span and cancel button on small screens*/ 
	
</style> 

<body> 
    <div class="about-section">
        <h1>Online Unused Medicine Donations to Ngo's</h1>
        <a href="index.php" style="text-align: left;text-decoration: none;padding:10px;color:white;background-color: #4caf50">Home</a>
    </div>
	<h2 style="text-align: center;"><b><u>Admin Login -- OUMD</u></b></h2> 
	<!--Step 1 : Adding HTML-->
	<form class="admin_form" action="" method="POST"> 
		<div class="imgcontainer"> 
			<img src= "images/admin_img.png" alt="Avatar" class="avatar"> 
		</div> 

		<div class="container"> 
			<label><b>Username</b></label> 
			<input type="text" placeholder="Enter Username" name="admin" required> 

			<label><b>Password</b></label> 
			<input type="password" placeholder="Enter Password" name="pass" required> 

			<input type="submit" name="submit" value="Login" /> 
    </div> 
    <span ></span>
	</form> 

</body> 

</html> 
