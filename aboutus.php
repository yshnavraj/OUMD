<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Roboto', sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  margin-bottom: 50px;
  border-style:solid; 
}

.about-section {
  padding: 40px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

footer {
  text-align: center;
  padding: 3px;
  background-color: DarkSalmon;
  color: white;
}
</style>
</head>
<body>

<div class="about-section">
  <h1>Online Unused Medicine Donations to Ngo's</h1>
  <a href="index.php" style="text-align: left;text-decoration:none;padding:10px;color:white;background-color: #4caf50">Home</a>
</div>

<h2 style="text-align:center">OUMD</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/anim_don.png" alt="medicine" style="width:100%">
      <div class="container">
        <h2><u>Why Medicine?</u></h2>
        <p>Our health is a fundamental part of human life. Without it, we are nothing. Reports show, nearly 2 billion people have no access to medicinesausing a cascade of preventable misery and suffering.</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/bg1.png" alt="Mike" style="height:230px;width:100%">
      <div class="container">
        <h2><u>Our Vision.</u></h2>
        <p>Our website drives future of healthcare by connecting people with surplus medications. Our system is built to ensure compliance and and provide full liability production.</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/hp-donation.jpg" alt="John" style="height:230px;width:100%">
      <div class="container">
        <h2><u>Join us.</u></h2>
        <p>Anyone one can join us to help and be part of our vision. You can join us as a Donor or Ngo's and be part of this unused medicine donation programme.</p>
      </div>
    </div>
  </div>
</div>

<footer>
  <p>Let's Donate<br>
  <a href="contact_us.php">contact</a></p>
</footer>

</body>
</html>
