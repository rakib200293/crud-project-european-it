

<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "classproject";
	
	//Create Connection
	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	
	$sql = "SELECT * FROM students";
	$result = mysqli_query($conn,$sql);
	
  
?>

   <?php include_once('inc/header.php'); ?>



        <div id="page-wrapper">
            <div class="row">

				
                <div class="col-lg-12">
				  <div class="panel panel-default"> 
				       <div class="panel panel-heading">
							<h1 class="page-header">Add New Student</h1>
						</div>

						<div class="panel panel-body">
					
								<form action="store.php" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label for="exampleInputEmail1">Student Name<span class="star"> *</span></label>
									<input type="text" class="form-control" name="name" placeholder="Enter  your name" >
									<span class="error"> <?= ($_SESSION['err']['name_err']) ?? '' ?></span>
									
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Student Roll<span class="star"> *</span></label>
									<input type="text" class="form-control" name="roll" placeholder="Enter your roll" >
									<span class="error"> <?= ($_SESSION['err']['roll_err']) ?? '' ?></span>
								</div>
								
								<div class="form-group">
									<label for="exampleInputPassword1">Student Registration<span class="star"> *</span></label>
									<input type="text" class="form-control" name="reg" placeholder="Enter your registration" >
									<span class="error"> <?= ($_SESSION['err']['reg_err']) ?? '' ?></span>
								</div>
								
								
								
								<div class="form-group">
									
									<label for="inputState">Shift</label>
									<select name="shift" class="form-control" >
										<option selected>Select One</option>
										<option value="First">First</option>
										<option value="Second">Second</option>
									</select>
									</div>
									
									<fieldset class="form-group">
									<div class="row">
									<legend class="col-form-label col-sm-2 pt-0">Gender</legend>
									<div class="col-sm-10">
										<div class="form-check">
										<input class="form-check-input" type="radio" name="sex" id="gridRadios1" value="Male" checked >
										<label class="form-check-label" for="gridRadios1" required>
											Male
										</label>
										</div>
										<div class="form-check">
										<input class="form-check-input" type="radio" name="sex" id="gridRadios2" value="Female" >
										<label class="form-check-label" for="gridRadios2">
											Female
										</label>
										</div>
									
									</div>
									</div>
								</fieldset>

								<div class="form-group">
									<label for="exampleInputEmail1">Institute Name<span class="star"> *</span></label>
									<input type="text" class="form-control" name="insname" placeholder="Enter Institute name" >
									<span class="error"> <?= ($_SESSION['err']['inst_err']) ?? '' ?></span>
									
								</div>
									<div class="form-group">
									<label for="exampleInputPassword1">Enter your department<span class="star"> *</span></label>
									<input type="text" class="form-control" name="dept" placeholder="Enter your department name" >
									<span class="error"> <?= ($_SESSION['err']['dept_err']) ?? '' ?></span>
								</div>
								
								<div class="form-group">
									<label for="exampleInputPassword1">Student Photo</label>
									<input type="file" class="" name="image" >
								</div>
								
								
								<button type="submit" class="btn btn-primary" name="submit">Submit</button>
								</form>
						</div>
					<?php
                  if (isset($_SESSION['err'])) {
                    unset($_SESSION['err']);
                  }
				?>
				  </div>
					
                </div>
                <!-- /.col-lg-12 -->
			</div>

			<!-- <div class="col-lg-2">
			</div> -->
            
        </div>
        <!-- /#page-wrapper -->
		

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Forms -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Forms - Use for reference -->

</body>

</html>
