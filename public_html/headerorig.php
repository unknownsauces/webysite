<?php
session_start();
?>
<style>
*{
  margin: 0;
  padding: 0;
}
body
{
  background-image: url(https://images.unsplash.com/photo-1486870591958-9b9d0d1dda99?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80);
  background-size: auto;
  background-position: center
  font-family: sans-seriff;
}

.login-page
{
  width: 360px;
  padding: 10% 0 0;
  margin: auto;
}
.Form
{
  position: relative;
  z-index: 1;
  background: #000
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
}
.form input
{
  outline: none;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button
{
  text-transform: uppercase;
  outline: 0;
  background: teal;
  width: 100%;
  height: 4%;
  border: none;
  padding: 15px
  color #fff;
  font-size: 14px;
  cursor: pointer;
  transition: .5s;
}
.form button:hover,.form button:active
{
  background:green;
  border: none;
}
.form .message
{
  margin: 15px p p;
  color: #fff;
  font-size: 12px;
}

.login-box 11:hover{
  color:red
}
.text1{
  font-size: 60px;
  font-weight: 700;
  letter-spacing: 10px;
  margin-bottom: 20px;



}

.container1{
  outline: none;
  background: #fff;
  width: 8%;
  border: 10px;
  margin: 25 25 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  transition: .5s;
  font-family: sans-serif;
  }

  .container1 :hover{
    color: red;
  }


  .container2{
    outline: none;
    background: #f2f2f2;
    width: 8%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
    }
    .container3{
      outline: none;
      background: #f2f2f2;
      width: 8%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
      }
      .container4{
        outline: none;
        background: #f2f2f2;
        width: 8%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
        }


}

</style>

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

        </ul>
        <div class= "form">
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
