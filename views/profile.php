<?php include_once 'header.php'; 
include_once '../model/db.php';
$id = $_SESSION['id'];
  $sql="SELECT * FROM users WHERE id = $id";
  $result = mysqli_query($conn,$sql);
  $data = mysqli_fetch_array($result);
?>
  <h2>Profile</h2>
  <form action="../controller/ProfileController.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control"  placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label>Mobile</label>
      <input type="number" class="form-control" value="<?php echo $data['mobile'] ?>" placeholder="Enter mobile number" name="mobile">
    </div>
    <div class="form-group">
      <label>DOB</label>
      <input type="date" format="DD-MM-YYYY" class="form-control" placeholder="Enter Date Of Birth" name="dob">
    </div>
    <div class="form-group">
      <label>Bio Data</label>
      <input type="text" class="form-control" placeholder="Enter Short Bio-data" name="bio">
    </div>
    <div class="form-group">
      <label>Married Status</label><br>
      <label><input type="radio" name="relationship" value="single">Single</label>&emsp;
      <label><input type="radio" name="relationship" value="married">Married</label>    
    </div>
    <div class="form-group">
      <label><input type="checkbox" name="hobby[]" value="coding">Coding</label>&emsp;
      <label><input type="checkbox" name="hobby[]" value="blogging">Blogging</label>&emsp;
      <label><input type="checkbox" name="hobby[]" value="music">Music</label>&emsp;
      <label><input type="checkbox" name="hobby[]" value="dance">Dance</label>&emsp;
      <label><input type="checkbox" name="hobby[]" value="sleeping">Sleeping</label>
    </div><br>
    <div class="form-group">
      <label for="upload">Profile Image</label>
      <input type="file" name="profile_image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<?php include_once 'footer.php'; ?>