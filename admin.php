<?php
 session_start();
 require 'connect.php';
 require 'lib/password.php';

  ?>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/main.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin Panel </title>
</head>
<body>

<?php

if (!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])) {
    //User not logged in. Redirect them back to the .php page.
    header('Location: login.php');
    exit();
if (isset($_SESSION['user_id']) || isset($_SESSION['logged_in'])) {
    if (in_array($_SESSION['user_id'], $admins)) {

}
    else {
      $message  = "You do not have permission to access this page";
      echo "<script type='text/javascript'>alert('$message');</script>";  
        exit();
    }
}
 ?>
