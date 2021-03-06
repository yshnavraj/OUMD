<?php
  include_once 'database.php';
  session_start();
  if (!mysqli_connect_errno()) {
    $result = mysqli_query($con, "SELECT * FROM ngo_details");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="/images/bg1.png">
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
      display: flex;
      justify-content: center;
    }
    table {
      font-family: 'Prompt', sans-serif;
      border-collapse: collapse;
      width: 60%;
    }

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  font-weight: bolder;
}


  </style>
  <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
</head>
<body class="index_body">
<div class="topnav">
  <a href="donor_Home.php">Home</a>
  <a class="active" href="#">View Registered NGOs</a>
  <a href="Donate_medicines.php">Donate medicines</a>
  <a href="donations_list.php">My Donations</a>
  <div class="float_right">
    <a href="#" class="name_ngo">
      <?php echo $_SESSION['username']; ?>
    </a>
    <a href="donor_login.php">LOGOUT</a>
  </div>
</div>


<div class="content_ngo" style="padding:30px;">

<table class="table table-hover table-bordered table-striped">
  <tr>
    <th><u>S. No.</u></th>
    <th><u>NGO name</u></th>
    <th><u>Email</u></th>
    <th><u>Contact</u></th>
  </tr>
  <?php
    while($row = mysqli_fetch_assoc($result))
    {
      echo "<tr>";
      echo "<td></td>";
      echo "<td>" . $row['ngo_name'] . "</td>";
  
      echo "<td>" . $row['ngo_email'] . "</td>";
  
      echo "<td>" . $row['ngo_contact'] . "</td>";

      echo "</tr>";
  
    }
  ?>
</table>


</div>
<footer style="background-color: #7895f3; text-align: center;position: fixed; left:0; bottom: 0; width: 100%;">
  OUMD &copy; 2021
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


