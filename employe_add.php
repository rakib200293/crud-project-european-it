

<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "classproject";

//Create Connection
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

// Initialize variables to null.
$nameError ="";
$emailError ="";
$genderError ="";
$websiteError ="";

$sql = "SELECT * FROM employee";
$result = mysqli_query($conn,$sql);


?>

<?php include_once('inc/header.php'); ?>



    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12 ">

                <h1 class="page-header">Add New Employee</h1>
                
                <form action="employe_store.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Employee Name <span class="star"> *</span></label>
                    <input type="text" class="form-control" name="e_name" placeholder="Enter name" >
                    <span class="error"> <?= ($_SESSION['err']['name_err']) ?? '' ?></span>
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Job Id<span class="star"> *</span></label>
                    <input type="text" class="form-control" name="e_id" placeholder="Job id" >
                    <span class="error"> <?= ($_SESSION['err']['jobid_err']) ?? '' ?></span>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Designation<span class="star"> *</span></label>
                    <input type="text" class="form-control" name="e_desg" placeholder="Designation" >
                    <span class="error"> <?= ($_SESSION['err']['des_err']) ?? '' ?></span>
                  </div>
                  
                 
                  
                   <div class="form-group">
                      
                      <label for="inputState">Shift</label>
                      <select name="e_shift" class="form-control" >
                        <option selected>Select One</option>
                        <option value="First">First</option>
                        <option value="Second">Second</option>
                      </select>
                    </div>
                    

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile<span class="star"> *</span></label>
                    <input type="text" class="form-control" name="e_mob" placeholder="Mobile" >
                    <span class="error"> <?= ($_SESSION['err']['mob_err']) ?? '' ?></span>
                    
                  </div>
                     <div class="form-group">
                    <label for="exampleInputPassword1">Email Address<span class="star"> *</span></label>
                    <input type="text" class="form-control" name="e_email" placeholder="Email" >
                    <span class="error"> <?= ($_SESSION['err']['email_err']) ?? '' ?></span>
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInputPassword1">Employee Photo</label>
                    <input type="file" class="" name="e_image" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Comment<span class="star"> *</span></label>
                    <textarea name="comment" class="form-control" placeholder="Comment" ></textarea>
                    <span class="error"> <?= ($_SESSION['err']['comm_err']) ?? '' ?></span>
                    
                  </div>
                  
                  
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>

                <?php
                  if (isset($_SESSION['err'])) {
                    unset($_SESSION['err']);
                  }
                ?>
                
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

<!-- Page-Level Plugin Scripts - Forms -->

<!-- SB Admin Scripts - Include with every page -->
<script src="js/sb-admin.js"></script>

<!-- Page-Level Demo Scripts - Forms - Use for reference -->

</body>

</html>
