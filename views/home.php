<?php include_once 'header.php'; 

 include_once '../model/db.php';
  $id = $_SESSION['id'];
  $sql="SELECT * FROM users WHERE user_status = 1";
  $result = mysqli_query($conn,$sql);
  ?>
  <center><h3>Home</h3></center>
  <div class="row">
  	<div class="col-sm-9">

  	</div>
  	<div class="col-sm-3">
  		<h2>Online Users</h2>
			<?php 
			if (mysqli_num_rows($result) > 0) {
			    while($row = mysqli_fetch_assoc($result)) {
			        echo '
			        <div class="media">
			        	<div class="media-left">
							<img src="../uploads/'.$row['profile_image'].'" class="img-circle" style="width:70px">
						</div>
						<div class="media-body">
							<h4 class="media-heading" style="color:green;">'.$row['username'].'</h4>
						</div>
					</div>';
			    }
			} else {
			    echo "<p>No User Online</p>";
			}?>
  	</div>
  </div>
 

  
<?php include_once 'footer.php'; ?>