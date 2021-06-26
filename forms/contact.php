<?php
  $receiving_email_address = 'mrigank20.ash@gmail.com';
  $email_to = $receiving_email_address;
  $name = $_POST['name'];
  $email_from = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $formcontent = " From: $name \n Subject: $subject \n Message: $message";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  echo "Thank You";
?>
