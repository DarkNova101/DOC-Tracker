<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <!--CSS Sheets-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/main.css">
        <!--Meta Tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
      <!-- Begin Nav Bar-->
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
                 <li class="nav-item">
                   <a class="nav-link" href="#">About</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="#">Contact</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="#">Account</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="#">Login</a>
                 </li>
               </ul>
             </div>
           </div>
         </nav>
         <!-- End Nav Bar -->
         <div class="alert alert-info" role="alert">
           <center>Hey! Please login before accessing the rest of the site!</center>
         </div>
         <!-- Begin Login Page -->
         <table align="center">
           <thead>
             <tr><th><h2>Login</h2></th></tr>
           </thead>
           <tbody>
             <tr>
        <form action="login.php" method="post">
            <td><label for="username">Username/Email</label>
            <input type="text" id="username" name="username"></td>
          </tr><tr>
            <td><label for="password">Password</label>
            <input type="text" id="password" name="password"></td>
            </tr><tr>
            <td><input type="submit" name="login" value="Login"></td></tr>
        </form>
        <tr>
          <td>
            <h6>Need an account? Make one <a href="register.php">here</a>!
            </td>
          </tr>
      </tbody>
    </table>
    <!-- End Login Page -->
    </body>
</html>

<?php

//login.php

/**
 * Start the session.
 */
session_start();

/**
 * Include ircmaxell's password_compat library.
 */
require 'lib/password.php';

/**
 * Include our MySQL connection.
 */
require 'connect.php';


//If the POST var "login" exists (our submit button), then we can
//assume that the user has submitted the login form.
if(isset($_POST['login'])){

    //Retrieve the field values from our login form.
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

    //Retrieve the user account information for the given username.
    $sql = "SELECT id, username, password, email FROM users WHERE username = :username OR email = :email";
    $stmt = $pdo->prepare($sql);

    //Bind value.
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':email', $username);

    //Execute.
    $stmt->execute();

    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //If $row is FALSE.
    if($user === false){
        //Could not find a user with that username!
        //PS: You might want to handle this error in a more user-friendly manner!
        echo "<center><div class='alert alert-danger alert-dismissible fade show' role='alert'>Incorrect Username or Password<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button></div></center>";
    } else{
        //User account found. Check to see if the given password matches the
        //password hash that we stored in our users table.

        //Compare the passwords.
        $validPassword = password_verify($passwordAttempt, $user['password']);
        //If $validPassword is TRUE, the login has been successful.
        if($validPassword){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['logged_in'] = time();
            $userid = $user['id'];

            $username = $pdo->query("SELECT Name from users WHERE id='$userid'")->fetch();
            $_SESSION['username'] = $username;

            //Redirect to our protected page, which we called home.php
            header('Location: index.php');
            exit;

        } else{
            //$validPassword was FALSE. Passwords do not match.
            echo "<div class='alert alert-danger' role='alert'>Incorrect Username or Password</div>";
        }
    }

}

?>
