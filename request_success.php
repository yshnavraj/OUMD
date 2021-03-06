<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="/images/bg1.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400&display=swap" rel="stylesheet">
  <title>OUMD</title>

  <style>
    body
    {
      
      counter-reset: Count-Value;     
    }
    tr td:first-child:before
    {
      counter-increment: Count-Value;   
      content: counter(Count-Value);
    }
    .content_ngo {
      margin: 0;
      padding-top: 100px;
      padding-bottom: 100px;
      justify-content: center;
    }
    table {
      font-family: 'Prompt', sans-serif;
      border-collapse: collapse;
    }

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  font-weight: bolder;
}
.button1 {
      background-color: #7895f3;
      padding: 5px;
      border-radius: 3px;
      box-shadow: 1px 1px 4px 1px black;
      border: none;
      color: black;
      text-decoration: none;
    }
    .button1:hover {
      border: none;
      color: black;
      text-decoration: none;
    }
    .back_btn {
      text-decoration: none;
    }
    .fa  {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding-top: 17px;
      padding-bottom: 14px;
      padding-left: 16px;
      padding-right: 5px;
      font-size: 17px;
    }
    /* css for request form */
    body {
  margin: 0;
  padding: 0;
  background-color: #a2a2a2;
  justify-content: center;
  height: 100vh;
}

input, button {
  border: 2px solid rgba(0, 0, 0, 0.6);
  background-image: none;
  background-color: #dadad3;
  box-shadow: none;
  padding: 5px;
}
input:focus, button:focus {
  outline: none;
}


button {
  cursor: pointer;
  font-weight: 500;
}

.request-card {
  border: 1px solid black;
  max-width: 980px;
  background-color: #fff;
  margin: 40px auto;
  border-radius: 15px;
  box-shadow: -0.6rem 0.6rem 0 rgba(29, 30, 28, 0.26);
}
.request-header {
  text-align: center;
  padding: 8px;
  font-size: 14px;
  font-weight: 700;
  border-bottom: 1px solid black;
}
.request-body {
  padding: 20px;
  display: flex;
  flex-direction: column;
}
.request-body__message {
  margin-top: 10px;
}
.request-body button {
  margin-top: 10px;
  align-self: flex-end;
}
.success_msg {
  display: flex;
  justify-content: center;
  margin-top: 50px;
  margin-left: 480px;
  margin-right: 480px;
  background-color: #FDF8FF;
  padding: 10px 10px;
  border-radius: 10px;
  box-shadow: 1px 1px 0px 0.1px black;
}
.success_msg h4 {
  color: brown;
  font-weight: bold;
} 
  </style>
<script type="text/javascript">
    function preventBack() {
      window.history.forward();
    }
    setTimeout("preventBack()", 0);
    widnow.onload = function() {
      null;
    }
    </script>
</head>
<body class="index_body">

<div class="topnav"><i class="fa fa-angle-left"></i> 
  <a class="back_btn" href="ngo_dashboard.php"> Back</a>
  <div class="float_right">
    <a href="#" class="name_ngo">
      <?php echo $_SESSION['username']; ?>
    </a>
    <a href="ngo_logout.php">LOGOUT</a>
  </div>
</div>

<div class="success_msg">

  <h4>Requested Successfully!!</h4>

</div>

<footer style="background-color: #7895f3; position: fixed; text-align: center;left:0; bottom: 0; width: 100%;">
  OUMD &copy; 2021
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</script>

</body>
</html>
