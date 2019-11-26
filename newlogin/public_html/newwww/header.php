<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name = "description" content = "This is an exmple of a meta description">
    <title></title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li> <a href="index.php">Home</a></li>
          <li> <a href="#">Portfolio</a></li>
          <li> <a href="#">About Me</a></li>
          <li> <a href="#">Contact</a></li>
        </ul>
        <div>
          <?php
            if (isset($_SESSION['userId'])) {
                echo '<form action= "includes/logout.inc.php" method= "post">
                  <button type="submit" name="logout-submit"> Logout</button>
                </form>';
              }
            else {
                echo '<form action= "includes/login.inc.php" method= "post">
                  <input type="text" name="mailuid" placeholder="Username/Email...">
                  <input type="password" name="pwd" placeholder="Password...">
                  <button type="submit" name="login-submit"> Login</button>
                </form>
                <a href="signup.php">Signup</a>';
              }

           ?>



        </div>
      </nav>
    </header>
