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
          <form action= "includes/login.php" method= "post">
            <input type="text" name="mailuid" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="login-submit"> Login</button>
          </form>
          <a href="signup.php">Signup</a>
          <form action= "includes/signup.inc.php" method= "post">
            <button type="submit" name="logout-submit"> Logout</button>


        </div>
      </nav>
    </header>
