<?php

  include_once '../css/register.css';

  include_once '../controller/RegisterController.php';
//include('css/register.css'); 

?>


<html>
<head>
  <title>Register</title>
	  <link rel="stylesheet" type="text/css" href="css/register.css">
<!--   		<link rel = "stylesheet" type="text/css" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 -->
</head>
<body>
  <form method="post" action="/views/register.php" id="register_form">
  	<h1>Register</h1>
  	<div>
	  <input type="text" name="username" placeholder="UserName" value="">
	  <!-- <?php if (isset($name_error)): ?>
	  	<span><?php echo $name_error; ?></span>
	  <?php endif ?> -->
  	</div>
  	<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
      <input type="email" name="email" placeholder="Email" value="">
      <?php if (isset($email_error)): ?>
      	<span><?php echo $email_error; ?></span>
      <?php endif ?>
  	</div>
  	<div>
  		<input type="password"  placeholder="Password" name="password">
  	</div>
  	<div>
  		<button type="submit" name="register" id="reg_btn">Register</button>
  	</div>
  </form>
  </body>
</html>