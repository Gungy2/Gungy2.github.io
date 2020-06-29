<?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "gungureanuvranceanu@gmail.com";

    if (mail($to, $subject, $message, "From: ".$email)) {
      echo("<h1>Great success!");
    } else {
      echo("<h1>Something went wrong!");
    }
  }
?>