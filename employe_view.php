<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "classproject";
	
	//Create Connection
	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM employee WHERE employee_id = $id";
	$result = mysqli_query($conn,$sql);
	
	$etd = mysqli_fetch_assoc($result);
  
?>
<?php include_once('inc/header.php'); ?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Employee Information</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <div class="row">
        <div class="col-lg-12">


            <table class="table table-hover table-dark">
                <tr>
                    <th>Employee Photo</th>
                    <td><img width="200" src="<?php echo $etd['photo']; ?>" alt=""> </td>
                </tr>

                <tr>
                    <th>Employee Name</th>
                    <td><?php echo $etd['employee_name']; ?></td>
                </tr>

                <tr>
                    <th>Job ID</th>
                    <td><?php echo $etd['job_id']; ?></td>
                </tr>

                <tr>
                    <th>Designation</th>
                    <td><?php echo $etd['designation']; ?></td>
                </tr>

                <tr>
                    <th>Shift</th>
                    <td><?php echo $etd['shift']; ?></td>
                </tr>
                
                <tr>
                    <th>Mobile</th>
                    <td><?php echo $etd['mobile']; ?></td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td><?php echo $etd['email']; ?></td>
                </tr>

                <tr>
                    <th>Comment</th>
                    <td><?php echo $etd['comment']; ?></td>
                </tr>

            </table>

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


    <!-- /.row -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Core Scripts - Include with every page -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- Page-Level Plugin Scripts - Grid -->

<!-- SB Admin Scripts - Include with every page -->
<script src="js/sb-admin.js"></script>

<!-- Page-Level Demo Scripts - Grid - Use for reference -->

</body>

</html>