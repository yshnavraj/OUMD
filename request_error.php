<?php

include_once 'database.php';
session_start();
$error = "Entered medicine details may not exist or details entered are Incorrect!! Please try again.";
  $_SESSION["error"] = $error;
  header("location: request_form.php"); 
?>
