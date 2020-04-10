<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "classproject";
	
	//Create Connection
	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

	
	if (isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0)) {

	$id = $_GET['id'];
	
	$sql = "SELECT * FROM students WHERE student_id = $id";
	$result = mysqli_query($conn,$sql);
	
	$std = mysqli_fetch_assoc($result);
	
	
	
	
  
?>

 <?php include_once('inc/header.php'); ?>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Students</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			
			<div class="row">
                <div class="col-lg-12">
                    <form action="update.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
					  <div class="form-group">
						<label for="exampleInputEmail1">Student Name</label>
						<input type="text" class="form-control" name="name" placeholder="Enter  your name" value="<?php echo $std['student_name']; ?>">
						
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Student Roll</label>
						<input type="text" class="form-control" name="roll" placeholder="Enter your roll" value="<?php echo $std['student_roll']; ?>">
					  </div>
					  
					  <div class="form-group">
						<label for="exampleInputPassword1">Student Registration</label>
						<input type="text" class="form-control" name="reg" placeholder="Enter your registration" value="<?php echo $std['student_reg']; ?>">
					  </div>
					  
					 
					  
					   <div class="form-group">
					      
						  <label for="inputState">Shift</label>
						  <select name="shift" class="form-control">
							<option selected>Select One</option>
							<option <?php if($std['shift'] =='First'){ echo 'selected';} ?> value="First">First</option>
							<option <?php if($std['shift'] =='Second'){ echo 'selected';} ?> value="Second">Second</option>
						  </select>
						</div>
						
						<fieldset class="form-group">
						<div class="row">
						  <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
						  <div class="col-sm-10">
							<div class="form-check">
							  <input class="form-check-input" type="radio" <?php if($std['gender'] =='Male'){ echo 'checked';} ?> name="sex" id="gridRadios1" value="Male" checked>
							  <label class="form-check-label" for="gridRadios1">
								Male
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" <?php if($std['gender'] =='Female'){ echo 'checked';} ?> name="sex" id="gridRadios2" value="Female">
							  <label class="form-check-label" for="gridRadios2">
								Female
							  </label>
							</div>
						
						  </div>
						</div>
					  </fieldset>
					  <div class="form-group">
						<label for="exampleInputEmail1">Institute Name</label>
						<input type="text" class="form-control" name="insname" placeholder="Enter Institute name" value="<?php echo $std['institute_name']; ?>" required>
						
					  </div>
						 <div class="form-group">
						<label for="exampleInputPassword1">Enter your department</label>
						<input type="text" class="form-control" name="dept" placeholder="Enter your department name" value="<?php echo $std['department']; ?>">
					  </div>
					  
					  <div class="form-group">
						<label for="exampleInputPassword1">Student Photo</label>
						<p><img src="<?php echo $std['student_pic']; ?>" width="100" alt="Student Photo"></p>
						<input type="file" class="" name="image" >
					  </div>
					  
					  
					  
					  
					  <button type="submit" class="btn btn-primary" name="submit">Update</button>
					</form>
									
                </div>
                <!-- /.col-lg-12 -->
            </div>
   
   
        </div>
        <!-- /#page-wrapper -->

<?php } ?>

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
