<?php

  include_once '../css/register.css';

  include_once '../controller/ProfileController.php';

?>


<html>
<head>
  <title>Profile</title>
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 -->    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link rel = "stylesheet" type="text/css" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
</head>
<body>

<div class="container">
  <h2>Edit Profile</h2>
  <form action="../controller/ProfileController.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <input type="number" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile">
    </div>
    <div class="form-group">
      <input type="date" format="dd-mm-yyyy" class="form-control" id="dob" placeholder="Enter Date Of Birth" name="dob">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="bio" placeholder="Enter Short Bio-data" name="bio">
    </div>
    <div class="radio">
      &emsp;&emsp;&emsp;<label><input type="radio" name="relationship">Single</label>&emsp;
      <label><input type="radio" name="relationship">Married</label>    
    </div>
    <div class="checkbox">
      &emsp;&emsp;&emsp;<label><input type="checkbox" name="coding" value="">Coding</label>&emsp;
      <label><input type="checkbox" name="blogging" value="">Blogging</label>&emsp;
      <label><input type="checkbox" name="music" value="">Music</label>&emsp;
      <label><input type="checkbox" name="dance" value="">Dance</label>&emsp;
      <label><input type="checkbox" name="sleeping" value="">Sleeping</label>
    </div><br>
    <!-- <div class="form-group">
      <label for="fileToUpload">Upload an Image</label>
      <input type="file" id="fileToUpload"  name="fileToUpload">
    </div> -->
    
    
    &emsp;&emsp;&emsp;<button type="submit" name="submit"  class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>

<!-- https://www.javatpoint.com/php-interview-questions -->