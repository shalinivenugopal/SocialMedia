<?php 

  $db = mysqli_connect('localhost', 'root', '', 'php');


  	// $sql_u = "SELECT * FROM users WHERE username='$username'";
  	// $sql_e = "SELECT * FROM users WHERE email='$email'";
  	// $res_u = mysqli_query($db, $sql_u);
  	// $res_e = mysqli_query($db, $sql_e);

  	if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // username and password sent from form 
 
/*$myusername= ucfirst ($_POST['uname']); 
$mypass=($_POST ['password']); 
$mypassword=md5($mypass);*/
$email = $_POST['email'];
$password = $_POST['password'];
 
$sql="SELECT * FROM users WHERE email='$email' and password='$password'";
mysqli_query($db,$sql);
/*$row=mysql_fetch_array($result);
$active=$row['active'];*/
 
//$count=mysqli_num_rows($result);

          echo 'Saved!';
           exit();

}

?>