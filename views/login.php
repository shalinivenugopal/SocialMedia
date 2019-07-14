<?php 
	include_once '../css/login.css';
?>
<html>
<head>
  <title>Login</title>
  	<link rel="stylesheet" href="css/login.css">
<!-- 	<link rel = "stylesheet" type="text/css" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 -->
</head>
<body>
  <form method="post" action="../controller/LoginController.php" id="login_form">
  	<h1>Login</h1>
  	<div>
	  <input type="text" name="email" placeholder="email" value="">
	 </div>
  	
  	<div>
  		<input type="password"  placeholder="Password" name="password">
  	</div>
  	<div>
  		<button type="submit" id="login_btn">Login</button>
      Not Yet Registered <a href="register.php">Register</a>
  	</div>
  </form>
  </body>
</html>