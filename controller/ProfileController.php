<?php 
  $db = mysqli_connect('localhost', 'root', '', 'php');
  $name = "";
  $mobile = "";
  $dob = "";
  $bio = "";
  $relationship = "";
  $hobby = "";
  if (isset($_POST['submit'])) {
  	//$id = 0;
  	$name = $_POST['name'];
  	$mobile = $_POST['mobile'];
  	$dob = $_POST['dob'];
    $bio = $_POST['bio'];
    $relationship = $_POST['relationship'];
    $hobby = $_POST['hobby'];

    //$status = 0;

    $query = "INSERT INTO profile (name,mobile,dob,bio,relationship,hobby) VALUES ('$name', '$mobile', '$dob', '$bio', '$relationship', '$hobby')";
    mysqli_query($db,$query);
    //$emailQuery =$db->query("SELECT * FROM users WHERE email = '$email'");
    //$emailCount = mysqli_num_rows($emailQuery);

        //if($emailCount != 0){
          //$errors[] = 'That email already exists in our database.';
        //}
  	// $sql_u = "SELECT * FROM users WHERE username='$username'";
  	// $sql_e = "SELECT * FROM users WHERE email='$email'";
  	// $res_u = mysqli_query($db, $sql_u);
  	// $res_e = mysqli_query($db, $sql_e);

  	//if (mysqli_num_rows($email) > 0) {
      //$email_error = "Sorry... email already taken";  
  	//}else{
      //     $query = "INSERT INTO users (username, email, password) 
      	//    	  VALUES ('$username', '$email', '".md5($password)."')";
          // $results = mysqli_query($db, $query);
           echo 'Saved!';
           exit();

                      //header('location: views/login.php');

  	//}
  }

?>