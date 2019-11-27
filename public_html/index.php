<?php
  require "header.php";

?>
<main>
  <div class="container">
    <button class="btn btn1">Hover Me</button>
    <button class="btn btn2">Hover Me</button>
    <button class="btn btn3">Hover Me</button>
    <button class="btn btn4">Hover Me</button>
  </div>
  
  <div>
    <section>

<?php
        if (isset($_SESSION['userId'])) {
            echo '<span style="font-family:TimesNewRoman" font-size: 40px;>This text is infdghgfhgfh Arial</span>';
        }
        else {
            echo '<p>You are logged out </p>';
        }
?>

    </section>

  </div>


</main>

<?php
  require "footer.php";

?>
