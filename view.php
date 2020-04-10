<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "classproject";
	
	//Create Connection
	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM students WHERE student_id = $id";
	$result = mysqli_query($conn,$sql);
	
	$std = mysqli_fetch_assoc($result);
  
?>
<?php include_once('inc/header.php'); ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Student Information</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <div class="row">
        <div class="col-lg-12">


            <table class="table table-bordered table-hover table-dark">

                <tr>
                    <th>Student Name</th>
                    <td><?php echo $std['student_name']; ?></td>
                </tr>

                <tr>
                    <th>Student Roll</th>
                    <td><?php echo $std['student_roll']; ?></td>
                </tr>

                <tr>
                    <th>Student Registration</th>
                    <td><?php echo $std['student_reg']; ?></td>
                </tr>

                <tr>
                    <th>Student Shift</th>
                    <td><?php echo $std['shift']; ?></td>
                </tr>

                <tr>
                    <th>Student Gender</th>
                    <td><?php echo $std['gender'];?></td>
				</tr>

				<tr>
                    <th>Institute Name</th>
                    <td><?php echo $std['institute_name'];?></td>
                </tr>

                <tr>
                    <th>Student Department</th>
                    <td><?php echo $std['department']; ?></td>
                </tr>

                <tr>
                    <th>Student Photo</th>
                    <td><img width="200" src="<?php echo $std['student_pic']; ?>" alt=""> </td>
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