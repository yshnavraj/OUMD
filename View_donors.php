<?php
  include_once 'database.php';
  session_start();
  if (!mysqli_connect_errno()) {
    $result = mysqli_query($con, "SELECT * FROM donor_details");

  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<style>
	body {
    margin: 0;
    font-family: 'Roboto', sans-serif;
    /*background-color: #8B6969;*/
    counter-reset: Count-Value;
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
tr td:first-child:before
    {
      counter-increment: Count-Value;   
      content: counter(Count-Value);
    }
    td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  font-weight: bolder;
}
.table
{
margin-top: 20px;

  min-height: 500px;
  }
  .table2 {
    display: flex;
    justify-content: center;
    margin: 30px auto;
  }
</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="/images/bg1.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>OUMD</title>

</head>
<body style="background-image: url('images/gif_back_1.gif');">

<div class="topnav">

  <a href="AdminH.php">Home</a>
  <a href="AddNGO.php">Add NGO</a>
  <a href="ViewRegisteredNGO's.php">View Registered NGO's</a>
  <a href="View_donors.php" class="active">View Donors</a>
  <div class="float_right">
  <a href="#admin" style="background-color:#333; color: white;" id="admin">Admin</a>
   <a href="admin_login.php">Logout</a>
  </div>
</div>
<div class="table2">
<table border="1" align="center" style="border: none; display: flex; justify-content="center";">
<tr><th>S. No.</th><th>Donor Name </th><td> E-Mail </th><th> Contact no </th><th> Address </th></tr>
<?php
    while($row = mysqli_fetch_assoc($result))
    {
      echo "<tr>";
      echo "<td></td>";
      echo "<td>" . $row['donor_name'] . "</td>";
  
      echo "<td>" . $row['donor_email'] . "</td>";
  
      echo "<td>" . $row['donor_contact'] . "</td>";

      echo "<td>" . $row['donor_address'] . "</td>";

      echo "</tr>";
  
    }
  ?>
</table>
</div>
</body>
</html>