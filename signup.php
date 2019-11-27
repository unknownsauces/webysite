<?php
  require "header.php";
?>
  <main>
<h1>Signup</h1>
<?php
if (isset($_GET['error'])) {
  if ($_GET['error'] == "emptyfields") {
    echo '<p> Please fill in all fields </p>';
  }
  elseif ($_GET['error'] == "invaliduidmail") {
    echo '<p> Invalid Username and Email! </p>';
  }
  elseif ($_GET['error'] == "invaliduid") {
    echo '<p> Invalid Username! </p>';
  }
  elseif ($_GET['error'] == "invalidmail") {
    echo '<p> Invalid Email! </p>';
  }
  elseif ($_GET['error'] == "passwordcheck") {
    echo '<p> Your passwords do not match!  </p>';
  }
  elseif ($_GET['error'] == "usertaken") {
    echo '<p> Username taken dumbass! </p>';
  }
}
elseif ($_GET['signup'] == "success") {
  echo '<p Signup successful </p>';
}
 ?>

<form action="includes/signup.inc.php" method="post">
  <input type="text" name="uid" placeholder="Username">
  <input type="text" name="mail" placeholder="E-mail">
  <input type="password" name="pwd" placeholder="Password">
  <input type="password" name="pwd-repeat" placeholder="Repeat Password">
  <button type="submit" name="signup-submit">Signup!</button>

</form>
  </main>

<?php
  require "footer.php"
?>
