

<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "classproject";
	
	//Create Connection
	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	
	$sql = "SELECT * FROM teachers";
	$result = mysqli_query($conn,$sql);
	
  
?>

     <?php include_once('inc/header.php'); ?>

 


        <div id="page-wrapper">
            <div class="row">
			
             <div class="col-lg-12">
				<div class="panel panel-default">
						<div class="panel panel-heading">
							<h1 class="page-header">Add New Teacher</h1>
						</div>
                    
						<div class="panel panel-body">
						<form action="teacher_store.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="exampleInputEmail1">Teacher Name<span class="star"> *</span></label>
							<input type="text" class="form-control" name="tname" placeholder="Enter  your name" >
							<span class="error"> <?= ($_SESSION['err']['name_err']) ?? '' ?></span>
							
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Joining Date<span class="star"> *</span></label>
							<input type="date" class="form-control" name="join" >
							<span class="error"> <?= ($_SESSION['err']['join_err']) ?? '' ?></span>
						</div>
						
						<div class="form-group">
							<label for="exampleInputPassword1">Salary<span class="star"> *</span></label>
							<input type="text" class="form-control" name="sellary" placeholder="Enter your Sellary" >
							<span class="error"> <?= ($_SESSION['err']['sal_err']) ?? '' ?></span>
						</div>
						
						
						
						<div class="form-group">
							
							<label for="inputState">Subject</label>
							<select name="sub" class="form-control" >
								<option selected>Select One</option>
								<option value="Web Design">Web Design</option>
								<option value="Web Development">Web Development</option>
								<option value="Wordpress">Wordpress</option>
								<option value="Laravel">Laravel</option>
								<option value="Graphic Design">Graphic Design</option>
								<option value="Networking">Networking</option>
								
							</select>
							
							</div>
							
						
						<div class="form-group">
							<label for="exampleInputPassword1">Teacher Photo</label>
							<input type="file" class="" name="timage" >
						</div>
						
						
						<button type="submit" class="btn btn-primary" name="submit">Submit</button>
						</form>

						</div>
                  <?php
					if(isset($_SESSION['err'])){
						unset($_SESSION['err']);
					}
					?>
                </div>
				<!-- /.col-lg-12 -->
				

				</div>

				<!-- <div class="col-lg-2">
                </div> -->

            </div>
            
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
