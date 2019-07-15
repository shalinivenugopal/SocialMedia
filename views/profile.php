<?php include_once 'header.php'; 
  include_once '../model/db.php';
  $id = $_SESSION['id'];
  $sql="SELECT * FROM users WHERE id = $id";
  $result = mysqli_query($conn,$sql);
  $data = mysqli_fetch_array($result);
?>
  <center><h2>Profile</h2></center>
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
        <input type="date" format="DD-MM-YYYY" class="form-control" placeholder="Enter Date Of Birth" value="<?php echo $data['dob'] ?>" name="dob">
     </div>
     <div class="form-group">
        <label>Bio Data</label>
        <input type="text" class="form-control" placeholder="Enter Short Bio-data" value="<?php echo $data['bio'] ?>" name="bio">
     </div>
     <div class="form-group">
        <label>Married Status</label><br>
        <label><input type="radio" name="relationship" value="single" <?php if($data['relationship'] == 'single'){echo 'checked';} ?> >Single</label>&emsp;
        <label><input type="radio" name="relationship" value="married" <?php if($data['relationship'] == 'married'){echo 'checked';} ?> >Married</label>    
     </div>
     <div class="form-group">
        <label><input type="checkbox" name="hobby[]" value="coding" <?php if (!empty(unserialize($data['hobby']))) {
          if (in_array('coding', unserialize($data['hobby']))) {
            echo 'checked';
          }
        } ?>>Coding</label>&emsp;
        <label><input type="checkbox" name="hobby[]" value="blogging"<?php if (!empty(unserialize($data['hobby']))) {
          if (in_array('blogging', unserialize($data['hobby']))) {
            echo 'checked';
          }
        } ?>>Blogging</label>&emsp;
        <label><input type="checkbox" name="hobby[]" value="music"<?php if (!empty(unserialize($data['hobby']))) {
          if (in_array('music', unserialize($data['hobby']))) {
            echo 'checked';
          }
        } ?>>Music</label>&emsp;
        <label><input type="checkbox" name="hobby[]" value="dance"<?php if (!empty(unserialize($data['hobby']))) {
          if (in_array('dance', unserialize($data['hobby']))) {
            echo 'checked';
          }
        } ?>>Dance</label>&emsp;
        <label><input type="checkbox" name="hobby[]" value="sleeping"<?php if (!empty(unserialize($data['hobby']))) {
          if (in_array('sleeping', unserialize($data['hobby']))) {
            echo 'checked';
          }
        } ?>>Sleeping</label>
     </div>
     <br>
     <div class="form-group">
        <label for="upload">Profile Image</label>
        <input type="file" name="profile_image">
     </div>
     <button type="submit" class="btn btn-primary">Update</button>
  </form>
<?php include_once 'footer.php'; ?>