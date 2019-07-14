<?php 
include_once '../model/db.php';
session_start();
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$sql="SELECT * FROM users WHERE email='$email' and password='$password'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0){
		$data = mysqli_fetch_array($result);
		$_SESSION['username']=$data['username'];
		$_SESSION['email']=$data['email'];
		header('location:../views/profile.php');
	}else{
		header('location:../views/login.php?status=error');
	}
?>