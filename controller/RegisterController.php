<?php 
  $db = mysqli_connect('localhost', 'root', '', 'php');
  $username = "";
  $email = "";
  if (isset($_POST['register'])) {
  	$id = 0;
  	$username = $_POST['username'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];
    $status = 0;

    $query = "INSERT INTO users (username,email,password,status) VALUES ('$username', '$email', '$password', $status)";
    mysqli_query($db,$query);
    $emailQuery =$db->query("SELECT * FROM users WHERE email = '$email'");
    $emailCount = mysqli_num_rows($emailQuery);

        if($emailCount != 0){
          $errors[] = 'That email already exists in our database.';
        }
  	// $sql_u = "SELECT * FROM users WHERE username='$username'";
  	// $sql_e = "SELECT * FROM users WHERE email='$email'";
  	// $res_u = mysqli_query($db, $sql_u);
  	// $res_e = mysqli_query($db, $sql_e);

  	if (mysqli_num_rows($email) > 0) {
      $email_error = "Sorry... email already taken";  
  	}else{
           $query = "INSERT INTO users (username, email, password) 
      	    	  VALUES ('$username', '$email', '".md5($password)."')";
           $results = mysqli_query($db, $query);
           echo 'Saved!';
           exit();

                      //header('location: views/login.php');

  	}
  }

?>