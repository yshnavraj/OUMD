<?php
  include_once 'database.php';
  session_start();
  if (!mysqli_connect_errno()) {
    $result = mysqli_query($con, "SELECT * FROM available_medicine");

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
      display: flex;
      justify-content: center;
      width: 30%;
      margin-left: 35%;
    }
    .button1:hover {
      border: none;
      color: black;
      text-decoration: none;
    }
    .note_msg {
      margin-left: 70px;
      display: flex;
    }
    .note_msg p {
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

<div class="topnav">
  <a class="" href="ngo_dashboard.php">Home</a>
  <a class="active" href="available_medicine.php">Available Medicine</a>
  <a class="" href="requested_medicine.php">Requested Medicine</a>
  <div class="float_right">
    <a href="#" class="name_ngo">
      <?php echo $_SESSION['username']; ?>
    </a>
    <a href="ngo_logout.php">LOGOUT</a>
  </div>
</div>


<div class="content_ngo">

<table class="table table-hover table-bordered table-striped" id="table1">
  <tr>
    <th><b>Medicine ID</b></th>
    <td><u>Medicine Name</u></td>
    <td><u>Expiry Date</u></td>
    <td><u>Donor Name</u></td>
    <td><u>Contact Details</u></td>
  </tr>
  <?php
    while($row = mysqli_fetch_assoc($result))
    {
      echo "<tr>";
      echo "<td value=".$row['med_id'].">" . $row['med_id'] . "</td>";

      echo "<td value=".$row['med_name'].">" . $row['med_name'] . "</td>";
  
      echo "<td value=".$row['med_exp'].">" . $row['med_exp'] . "</td>";
  
      echo "<td value=".$row['donor_name'].">" . $row['donor_name'] . "</td>";
      
      echo "<td value=".$row['contact'].">" . $row['contact'] . "</td>";

      echo "</tr>";
  
    }
  ?>
</table>
<a href="request_form.php" class="button1">Request Medicine</a>
</div>
<div class="note_msg">
  <p>Note:</p> &nbsp; Please note medicine details before proceeding to Request Medicine
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</script>

</body>
</html>


