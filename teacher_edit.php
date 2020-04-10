<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "classproject";
	
	//Create Connection
	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	
	$id = $_GET['id'];
	
	
	
	$sql = "SELECT * FROM teachers WHERE teacher_id = $id";
	$result = mysqli_query($conn,$sql);
	
	$std = mysqli_fetch_assoc($result);
	
	
	
	
  
?>

    <?php include_once('inc/header.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Teacher</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			
		
			
			<div class="row">
                <div class="col-lg-12">
				
				
				
				
				
				<form action="teacher_update.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
					  <div class="form-group">
						<label for="exampleInputEmail1">Teacher Name</label>
						<input type="text" class="form-control" name="tname" placeholder="Enter  your name" value="<?php echo $std['teacher_name']; ?>">
						
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Joining Date</label>
						<input type="date" class="form-control" name="join" placeholder="Enter your roll" value="<?php echo $std['join_date']; ?>">
					  </div>
					  
					  <div class="form-group">
						<label for="exampleInputPassword1">Sellay</label>
						<input type="text" class="form-control" name="sellary" placeholder="Enter your registration" value="<?php echo $std['sallery']; ?>">
					  </div>
					  
					 
					  
					   <div class="form-group">
					      
						  <label for="inputState">Subject</label>
						  <select name="sub" class="form-control">
							<option selected>Select One</option>
							<option <?php if($std['subject'] =='Web Design'){ echo 'selected';} ?> value="Web Design">Web Design</option>
							<option <?php if($std['subject'] =='Web Development'){ echo 'selected';} ?> value="Web Development">Web Development</option>
							<option <?php if($std['subject'] =='Wordpress'){ echo 'selected';} ?> value="Wordpress">Wordpress</option>
							<option <?php if($std['subject'] =='Laravel'){ echo 'selected';} ?> value="Laravel">Laravel</option>
							<option <?php if($std['subject'] =='Graphic Design'){ echo 'selected';} ?> value="Graphic Design">Graphic Design</option>
							<option <?php if($std['subject'] =='Networking'){ echo 'selected';} ?> value="Networking">Networking</option>
						  </select>
						</div>
						
					
					   <div class="form-group">
						<label for="exampleInputPassword1">Teacher Photo</label>
						<p><img src="<?= $std['teacher_pic']; ?>" width="100" alt="Photo"></p>
						<input type="file" class="" name="timage" >
					  </div>
					  
					  
					  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
					</form>
				
				
                   
									
                </div>
                <!-- /.col-lg-12 -->
            </div>
   
   
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Buttons -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Buttons - Use for reference -->

</body>

</html>
