

<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "classproject";

//Create Connection
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
} else {
    header('Location: employe_list.php');
}




$sql = "SELECT * FROM employee where employee_id = $id";
$result = mysqli_query($conn,$sql);

$etd = mysqli_fetch_assoc($result);



?>

<?php include_once('inc/header.php'); ?>



    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Employee</h1>
                
                <form action="employe_update.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Employee Name</label>
                    <input type="text" class="form-control" name="e_name" value="<?php echo $etd['employee_name']; ?>" >
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Job Id</label>
                    <input type="text" class="form-control" name="j_id" value="<?php echo $etd['job_id']; ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Designation</label>
                    <input type="text" class="form-control" name="e_desg" value="<?php echo $etd['designation']; ?>">
                  </div>
                  
                 
                  
                   <div class="form-group">
                      
                      <label for="inputState">Shift</label>
                      <select name="e_shift" class="form-control" >
                        <option selected>Select One</option>
                        <option <?php if($etd['shift'] =='First'){ echo 'selected';} ?>  value="First">First</option>
                        <option <?php if($etd['shift'] =='Second'){ echo 'selected';} ?>  value="Second">Second</option>
                      </select>
                    </div>
                    

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" class="form-control" name="e_mob" value="<?php echo $etd['mobile']; ?>">
                    
                  </div>
                     <div class="form-group">
                    <label for="exampleInputPassword1">Email Address</label>
                    <input type="text" class="form-control" name="e_email" value="<?php echo $etd['email']; ?>" >
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInputPassword1">Employee Photo</label>
                    <p><img src="<?= $etd['photo'] ?>" width="100" alt="Photo"></p>
                    <input type="file" class="" name="e_image">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Comment</label>
                    <textarea  class="form-control" name="comment"><?php echo $etd['comment']; ?></textarea>
                    
                  </div>
                
                  
                  <button type="submit" class="btn btn-primary" name="submit">Update</button>
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

<!-- Page-Level Plugin Scripts - Forms -->

<!-- SB Admin Scripts - Include with every page -->
<script src="js/sb-admin.js"></script>

<!-- Page-Level Demo Scripts - Forms - Use for reference -->

</body>

</html>
