<html lang="en">
<head>
  <title>DOC Tracker | Admin</title>
  <!--CSS Sheets-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/main.css">
  <?php
  include("../connect.php");
  /**
   * Start the session.
   */
  session_id("admin");
  session_start();

  ?>
</head>
<body>
  <!--Nav Bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
       <div class="container">
         <a class="navbar-brand" href="#">Admin Panel</a>
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
               <a class="nav-link" href="account">Account</a>
             </li>
             <li>
               <span class="navbar-text">|&nbsp;</span>
             </li>
             <?php
            // Make the SESSION username variable a different variable

             $str = $_SESSION['username'];
            // Check if user is loggged in to display namne
             if ($_SESSION['logged_in']==true) {
               // Display Name                                                $str[0] (Picks the First Name in the Array ONLY)
                 echo " <span class='navbar-text welcometext'> Welcome,<em> ".$str[0]."</em>!</span>";
                 echo "<li class='nav-item'><a class='nav-link' href='logout.php'>Logout</a></li>";
             } elseif (!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])) {
                 //User not logged in. Redirect them back to the login.php page.
                 header('Location: login.php');
                 exit();
             }

             if (in_array($_SESSION['user_id'], $admins)) {
               echo "<li><span class='navbar-text'>|</span></li>";
               echo "<li class='nav-item'><a class='nav-link' target='_blank' href='admin'><em><strong>Admin Panel</strong></em></a></li>";

             }
             else {
               echo "";
             }
   ?>
         </ul>
       </div>
     </div>
   </nav>
