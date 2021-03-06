<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Roboto', sans-serif;
}

* {
  box-sizing: border-box;
  margin: 0;
  
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.about-section {
  padding: 40px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
footer {
  text-align: center;
  padding: 3px;
  background-color: #474e5d;
  color: white;
}
.fa {
  padding: 10px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 3px 1px;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="about-section">
  <h1>Online Unused Medicine Donations to Ngo's</h1>
  <br>
  <a href="index.php" style="text-align: left;text-decoration:none;padding:10px;color:white;background-color: #4caf50">Home</a>
</div>
<div class="container">
  <div style="text-align:center">
    <h2 style="color:red"><b><u>Contact Us</u></b></h2>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/recycle_don.png" style="width:80%;height: 480px;border-style:solid;margin-left:50px;margin-top: 10px;">
    </div>
    <div class="column">
      <form method="post" action="">
        <label for="name">Your Name*</label>
        <input type="text" id="fname" name="name" placeholder="Your name.." required>
        <label for="email">Your Email*</label>
       <input type="text" id="fname" name="email" placeholder="Your email.." required>
        <label for="subject">Your Comments</label>
        <textarea id="subject" name="subject" placeholder="...." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
  <footer>
  <p>contact: <u>+91 7485968541</u>
    <br>
    email_id: <u>oumdforpoor@gmail.com</u></p>
  <p>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-youtube"></a>
    <a href="#" class="fa fa-instagram"></a>
  </p>
</footer>
</div>

</body>
</html>
