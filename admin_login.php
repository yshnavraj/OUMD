<!DOCTYPE html> 
<html> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&display=swap" rel="stylesheet">

<title>Admin Login * OUMD</title>
<style> 
	/*set border to the form*/ 
	body {
    margin: 0;
    padding-left: 35%;
    font-family: 'Montserrat', sans-serif;
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
	
	input[type=text], 
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
	/*set the forgot password text*/ 
	
	/*set styles for span and cancel button on small screens*/ 
	
</style> 

<body> 

	<h2>Admin Login -- OUMD</h2> 
	<!--Step 1 : Adding HTML-->
	<form action="#"> 
		<div class="imgcontainer"> 
			<img src= "images/admin_img.png" alt="Avatar" class="avatar"> 
		</div> 

		<div class="container"> 
			<label><b>Username</b></label> 
			<input type="text" placeholder="Enter Username" name="uname" required> 

			<label><b>Password</b></label> 
			<input type="password" placeholder="Enter Password" name="psw" required> 

			<button type="submit">Login</button> 
    </div> 
    <span ></span>
	</form> 

</body> 

</html> 
