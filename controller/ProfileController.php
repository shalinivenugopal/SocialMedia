<?php 
include_once '../model/db.php';
session_start();
  //$db = mysqli_connect('localhost', 'root', '', 'shalini');
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $dob = $_POST['dob'];
  $bio = $_POST['bio'];
  $relationship = array("single", "married");
  $hobby = array("coding", "blogging", "music", "dance", "sleeping");
  $relationship = serialize($relationship);
  $hobby = serialize($hobby);

    if(mysqli_num_rows($r) > 0){
    $data = mysqli_fetch_array($r);
    $_SESSION['id']=$data['id'];
    $_SESSION['name']=$data['name'];
    $_SESSION['mobile']=$data['mobile'];
    $_SESSION['dob']=$data['dob'];
    $_SESSION['bio']=$data['bio'];
    $_SESSION['relationship']=$data['relationship'];
    $_SESSION['hobby']=$data['hobby'];

    $query = $conn->query($query);
    $row = $query->fetch_assoc();

    $relationship = $row["relationship"];
    $relationship = unserialize($relationship);

    $hobby = $row["hobby"];
    $hobby = unserialize($hobby);
    
   //  if (isset($_POST['upload'])) {
   // $file_name = $_FILES['file']['name'];
   // $file_type = $_FILES['file']['type'];
   // $file_size = $_FILES['file']['size'];
   // $file_tem_loc = $_FILES['file']['tmp_name'];
   // $file_store = "upload/".$file_name;
   // if (move_uploaded_file($file_tem_loc, $file_store)) {
   //   echo "Files are Uploaded";
   // }

    $sql="UPDATE users (name,mobile,dob,bio,relationship,hobby) VALUES ('$name', '$mobile', '$dob', '$bio', '$relationship', '$hobby')";
    $r = mysqli_query($conn,$sql);
    //header('location:../views/home.php');
  }else{
    header('location:../views/login.php?status=error');
  }

  
 }

?>