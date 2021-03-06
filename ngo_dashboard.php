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
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400&display=swap" rel="stylesheet">
  <title>OUMD</title>

  <style>
    .content_ngo {
      margin: 0;
      padding: 100px 40px;
      display: flex;
    }


    .content_ngo .right_side {
      margin-left: 10px;
      background-color: #E2DDB5;
      border-radius: 10px;
      padding-top: 10px;
      padding-left: 30px;
      padding-right: 20px;
      color: black;
      font-weight: bold;
      text-align: justify;
      text-justify: inter-word;
    }

    .content_ngo .right_side .quotes .heading_p {
      font-size: 30px;
      font-family: 'Prompt', sans-serif;
    }
    .quotes .content_p {
      font-size: 20px;
      font-family: 'Prompt', sans-serif;
    }
    

  </style>
</head>
<body class="index_body">

<div class="topnav">
  <a class="active" href="ngo_dashboard.php">Home</a>
  <a class="" href="available_medicine.php">Available Medicine</a>
  <a class="" href="requested_medicine.php">Requested Medicine</a>
  <div class="float_right">
    <a href="#" class="name_ngo">
      <?php echo $_SESSION['username']; ?>
    </a>
    <a href="ngo_logout.php">LOGOUT</a>
  </div>
</div>


<div class="content_ngo">

  <div class="left_side">
    <img src="images/motherteresa.jpg" alt="">
  </div>

  <div class="right_side">

    <div class="quotes">
      <p class="heading_p">NGO's: They see the need, not the cause.</p>

      <p class="content_p">Globalization during the 20th century gave rise to the importance of NGOs. Many problems could not be solved with in a nation. International treaties and international organizations such as the World Trade Organization were centred mainly on the interests of capitalist enterprises. In an attempt to counterbalance this trend, NGOs have developed to emphasize humanitarian issues, developmental aid and sustainable development. NGOs include groups and institutions that are entirely or largely independent of government and that have primarily humanitarian or cooperative rather than commercial objectives. They are private agencies in industrial countries that support international development; indeginous groups organizaed regionally or nationally; and member-groups in villages.</p>
    </div>

  </div>

</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php
  
  unset($_SESSION["error"]);
?>