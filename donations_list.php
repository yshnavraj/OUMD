<?php
  include_once 'database.php';
  session_start();
  $id = $_SESSION['id'];
  if (!mysqli_connect_errno()) {
    $result = mysqli_query($con, "SELECT * FROM donated_medicine where donor_id = '$id';");
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
  <style>
  /* below body tag has to be there. do not delete */
    body
    {  
      height: 100vh;
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

</head>
<body class="index_body">
<div class="topnav">
  <a href="donor_Home.php">Home</a>
  <a class="" href="donor_View_ngos.php">View Registered NGOs</a>
  <a href="Donate_medicines.php">Donate medicines</a>
  <a class="active" href="donations_list.php">My Donations</a>
  <div class="float_right">
    <a href="#" class="name_ngo">
      <?php echo $_SESSION['username']; ?>
    </a>
    <a href="donor_login.php">LOGOUT</a>
  </div>
</div>


<div class="content_ngo" style="padding: 30px;">

<table class="table table-hover table-bordered table-striped">
  <tr>
    <th>Medicine ID</th>
    <th>Medicine Name</th>
    <th>Expiry Date</th>
  </tr>
  <?php
    while($row = mysqli_fetch_assoc($result))
    {
      echo "<tr>";
      echo "<td>" . $row['med_id']. "</td>";

      echo "<td>" . $row['med_name'] . "</td>";
  
      echo "<td>" . $row['expiry_date'] . "</td>";

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


