<?php include_once 'header.php'; 

 include_once '../model/db.php';
  $id = $_SESSION['id'];
  $sql="SELECT * FROM users WHERE user_status = 1";
  $result = mysqli_query($conn,$sql);
  ?>
  
  <div class="row">
  	<div class="col-sm-9">

  	</div>
  	<div class="col-sm-3">
  		<h2>Online Users</h2>
			<?php 
			if (mysqli_num_rows($result) > 0) {
			    while($row = mysqli_fetch_assoc($result)) {
			        echo '<b><p style="color:green;">'.$row['username'].'</p></b><br>';
			    }
			} else {
			    echo "<p>No User Online</p>";
			}?>
  	</div>
  </div>
 

  
<?php include_once 'footer.php'; ?>