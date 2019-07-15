<?php 
	include_once '../css/login.css';
  session_start();
  if ($_SESSION) {
    header('location:home.php');
  }
?>

<html>
<head>
  <title>Login</title>
  	<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
      <link rel = "stylesheet" type="text/css" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
  <form method="post" action="../controller/LoginController.php" id="login_form">
  	<h1>Login</h1>
  	<div class="form-group">
	  <input type="text" name="email" placeholder="email" value="">
	 </div>
  	
  	<div class="form-group">
  		<input type="password"  placeholder="Password" name="password">
  	</div>

  	<div class="form-group">
  		<button type="submit" class="btn btn-primary" name="login" id="login_btn">Login</button>
      Not Yet Registered <a href="register.php">Register</a>
  	</div>
  </form>
  </body>
</html>