<?php

  //include_once '../css/register.css';

  include_once '../controller/ProfileController.php';
//include('css/register.css'); 

?>


<html>
<head>
  <title>Profile</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!--<link rel="stylesheet" type="text/css" href="css/register.css">
    <link rel = "stylesheet" type="text/css" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 -->
</head>
<body>

<div class="container">
  <h2>Edit Profile</h2>
  <form action="../controller/ProfileController.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="mobile">Mobile Number:</label>
      <input type="number" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile">
    </div>
    <div class="form-group">
      <label for="DOB">Date of Birth:</label>
      <input type="date" format="dd-mm-yyyy" class="form-control" id="dob" placeholder="Enter Date Of Birth" name="dob">
    </div>
    <div class="form-group">
      <label for="bio">Bio-Data:</label>
      <input type="text" class="form-control" id="bio" placeholder="Enter Short Bio-data" name="bio">
    </div>
    <div class="form-group">
      <label for="relationship" name="relationship">Relationship Status:</label>&emsp;
      <label><input type="radio" name="relationship">Single</label>&emsp;
      <label><input type="radio" name="relationship">Married</label>    
    </div>
    <div class="checkbox">
      <h5><b>Hobby:<b></h5>
      <label><input type="checkbox" name="coding">Coding</label>&emsp;
      <label><input type="checkbox" name="blogging">Blogging</label>&emsp;
      <label><input type="checkbox" name="music">Music</label>&emsp;
      <label><input type="checkbox" name="dance">Dance</label>&emsp;
      <label><input type="checkbox" name="sleeping">Sleeping</label>
    </div>
    <div class="form-group">
      <label for="fileToUpload">Upload an Image</label>
      <input type="file" id="fileToUpload"  name="fileToUpload">
    </div>
    
    
    <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>