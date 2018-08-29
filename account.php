<?php
include("connect.php");
/**
 * Start the session.
 */
session_start();

/*
* Check if user is logged in
*/

if (!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])) {
    //User not logged in. Redirect them back to the login.php page.
    header('Location: login.php');
    exit();
}
 ?>
