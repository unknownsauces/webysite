


<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="logincss.css">
	<link rel="stylesheet" a href="font-awesome.min.css">
</head>
<body>
  <?php

  $host="btnhd.com";
  $user="root";
  $password="Jeffyjeffyjeffy123!@#";
  $db="demo";
    $servername = "localhost";
    $dBusername ="root";
    $dBPassword ="";
    $dBname = "loginform";

    $conn = mysql_connect($host,$user,$password,$dBname);
    echo "string";
  if (!$conn){
    die("connection failed:".mysql_connect_error());
  }

  ?>
	<div class="container">
	<img src="https://i.ytimg.com/vi/iwGFalTRHDA/hqdefault.jpg"/>
		<form>
		<div class="form-input">
		<input type="text" name="text" placeholder="Enter the User Name"/>
		</div>
		<div class="form-input">
		<input type="password" name="password" placeholder="password"/>
		</div>
		<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>
