<?php
  include_once 'database.php';
  session_start();
  if (!mysqli_connect_errno()) {
    
    $med_id = $_POST['med_id'];
    $med_name = $_POST['med_name'];
    $donor_name = $_POST['donor_name'];
    $contact = $_POST['donor_contact'];

    $query1 = mysqli_query($con, "select * from available_medicine where med_id = '$med_id' and med_name = '$med_name' and donor_name = '$donor_name' and contact = '$contact';");
    $check = mysqli_num_rows($query1);
    $row = mysqli_fetch_assoc($query1);
    
    if($check == 1) {
      $expiry_date = $row['med_exp'];
      $query2 = mysqli_query($con, "insert into requested_medicine_ngo (med_id, med_name, med_exp, donor_name, contact) values('$med_id', '$med_name','$expiry_date', '$donor_name', '$contact');");

      $query2 = mysqli_query($con, "delete from available_medicine where med_id = '$med_id';");
      
      header("location: request_success.php");
    } else {
      include_once 'request_error.php';
    }
  }
?>