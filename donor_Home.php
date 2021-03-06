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
    .content_ngo .right_side .quotes .heading_p {
      font-size: 30px;
      font-family: 'Prompt', sans-serif;
    }

  </style>

</head>
<body class="index_body">

<div class="topnav">
  <a class="active" href="">Home</a>
  <a href="donor_View_ngos.php">View Registered NGOs</a>
  <a href="Donate_medicines.php">Donate medicines</a>
  <a href="donations_list.php">My Donations</a>
  <div class="float_right">
    <a href="#" class="name_ngo" style="color: white;">
      <?php echo $_SESSION['username']; ?>
    </a>
    <a href="donor_logout.php">LOGOUT</a>
  </div>
</div>


<div class="content_ngo">

  <div class="left_side">
    <img src="images/Med_1.png" style="width:450px;border-radius:2px;height: 400px;padding-top:10px;"alt="">
  </div>

  <div class="right_side">

    <div class="quotes">
      <p class="heading_p">Need of Donations.</p>

      <p class="content_p">Providing access to medicines and health care is one of the most challenging issues, the society is facing today. There are poor and needy persons who are not able to buy expensive medicines and the poor persons at old age homes who are dependent on your charity It's a request to help in donating the medicines that unused and Neverthless, we never found an issue with that because there are nice people who make a charity of medicines i.e., people like you donate, still the needs aren't met. We try our best to help them. We request everyone to make as much as donations for medicines so that world for the golden ager and poor people can be a better place. Click on Donate Medicines sections and donate!. Thank you always for making donations. </p>
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