
<html lang="en">
<head>
  <title>DOC Tracker</title>
  <!--CSS Sheets-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/main.css">
  <?php
  include("connect.php");
  /**
   * Start the session.
   */
  session_start();

  ?>
</head>
<body>
  <!--Nav Bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
       <div class="container">
         <a class="navbar-brand" href="#">Defenders Of Christ</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item active">
               <a class="nav-link" href="index.php">Home
                 <span class="sr-only">(current)</span>
               </a>
             </li>
             <li>
               <span class="navbar-text">|</span>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">About</a>
             </li>
             <li>
               <span class="navbar-text">|</span>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">Contact</a>
             </li>
             <li>
               <span class="navbar-text">|</span>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">Account</a>
             </li>
             <li>
               <span class="navbar-text">|&nbsp;</span>
             </li>
               <?php
               $str = $_SESSION['username'];

               if ($_SESSION['logged_in']==true) {
                   echo " <span class='navbar-text welcometext'> Welcome,<em> ".$str[0]."</em>!</span>";
                   //echo "<a href='logout.php'><span>Logout</span></a></li>";
                   echo "<li class='nav-item'><a class='nav-link' href='logout.php'>Logout</a></li>";
               } elseif ($_SESSION['logged_in ']==false) {
                   echo "<a href='register.php'><span>Login/Register</span></a></li>";

               }
     ?>
           </ul>
         </div>
       </div>
     </nav>
<!--End Nav Bar-->
<?php

/**
 * Check if the user is logged in.
 */
if (!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])) {
    //User not logged in. Redirect them back to the login.php page.
    header('Location: login.php');
    exit;
}


/**
 * Print out something that only logged in users can see.
 */
 ?>
 <div class="alert alert-info" role="alert"><center>You are currently logged in!</center></div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
