
<?php
session_id("admin");
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["logged_in"]);
unset($_SESSION["username"]);
header("Location: index.php");
?>