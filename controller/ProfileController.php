<?php 
include_once '../model/db.php';
session_start();

  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $dob = $_POST['dob'];
  $bio = $_POST['bio'];
  $relationship = $_POST['relationship'];
  $hobby = serialize($_POST['hobby']);

  $id = $_SESSION['id'];

  $sql = "UPDATE `users` SET `mobile`='$mobile',`dob`='$dob',`bio`='$bio',`relationship`='$relationship',`hobby`='$hobby' WHERE id = $id";

  if (isset($_FILES['profile_image'])) {
    $file_name = basename($_FILES["profile_image"]["name"]);
    $target_file = "../uploads/" . $file_name;
    move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file);
    $sql = "UPDATE `users` SET `mobile`='$mobile',`dob`='$dob',`bio`='$bio',`relationship`='$relationship',`hobby`='$hobby',`profile_image`='$file_name' WHERE id = $id";
  }

  if(mysqli_query($conn,$sql)){
    header('location:../views/profile.php?status=success');
  }else{
    header('location:../views/profile.php?status=error');
  }
?>