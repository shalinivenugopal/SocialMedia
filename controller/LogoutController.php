<?php
include_once '../model/db.php';
session_start();
$id = $_SESSION['id'];
$sql="UPDATE users SET user_status ='0' where id='$id'";
$result = mysqli_query($conn,$sql);
session_destroy();
header("location:../views/login.php");
?>