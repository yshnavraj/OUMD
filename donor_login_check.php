<?php

include_once 'database.php';
session_start();
$error = "email/password incorrect";

$_SESSION["error"] = $error;
header("location: donor_login.php"); 


?>