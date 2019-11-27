<?php
session_start();
?>
<style>

body
{
  background-image: url(https://images.unsplash.com/photo-1486870591958-9b9d0d1dda99?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80);
  background-size: auto;
  background-position: center
  font-family: sans-seriff;
}

p {

  color: black;
  text-align: center;
  padding: 14px 16px;
  font-family: "Georgia";
  font-size: 40px;
  padding: 10px 20px;
  background: none;




}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: teal;



}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: black;
}

 form.poo {
    float: left;
  }
.button {
  color: red;

}
.button:hover {
  color: blue;
}
.cheese{
color: red;
font-size: 50px;

}
</style>

$cheese1 = all good
$cheese2= nogood
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name = "description" content = "This is an exmple of a meta description">
    <title></title>
    <link rel="stylesheet" href="mainlogincss.css">
  </head>
  <body>



    <header>

      <nav>
        <ul>
          <div class = "container1">
          <li> <a href="index.php">Home</a></li></div>
          <div class = "container2">
          <li> <a href="11">Portfolio</a></li></div>
          <div class = "container3">
          <li> <a href="22">About Me</a></li></div>
          <div class = "container4">
          <li> <a href="33">Contact</a></li></div>

          <li><a href="signup.php">Signup</a></li>

        <div class= "form">
          <?php
            if (isset($_SESSION['userId'])) {
                echo '<form class= "poo" action= "includes/logout.inc.php" method= "post">
                  <button class ="button" type="submit" name="logout-submit"> Logout</button>
                </form>';



              }
            else {
                echo '<form action= "includes/login.inc.php" method= "post">
                  <input type="text" name="mailuid" placeholder="Username/Email...">
                  <input type="password" name="pwd" placeholder="Password...">
                  <button type="submit" name="login-submit"> Login</button>
                </form>
              ';
              }

           ?>
</ul>


        </div>
      </nav>
    </header>
