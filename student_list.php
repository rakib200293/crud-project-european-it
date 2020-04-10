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
            <h1 class="page-header">Student List</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">



                <table class="table table-bordered table-hover table-dark table-responsive" id="myTable">
                    <thead>
                        <tr>
                            <th>Student Id</th>
                            <th>Student Name</th>
                            <th>Student Roll</th>
                            <th>Student Reg</th>
                            <th>Student Shift</th>
                            <th>Student Gender</th>
                            <th>Student Institute</th>
                            <th>Student Dept</th>
                            <th>Student Pic</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($result as $key => $row) { ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $row['student_name']; ?></td>
                            <td><?php echo $row['student_roll']; ?></td>
                            <td><?php echo $row['student_reg']; ?></td>
                            <td><?php echo $row['shift']; ?></td>
                            <td><?php echo $row['gender'];?></td>
                            <td><?php echo $row['institute_name']; ?></td>
                            <td><?php echo $row['department']; ?></td>
                            <td class="list_image"><img width="60" height="60" src="<?php echo $row['student_pic']; ?>" alt="">
                            </td>
                            <td>
                                <div class="btn-group student-btn">
                                <a class="btn btn-sm btn-info"
                                    href="view.php?id=<?php echo $row['student_id']; ?>">View</a>
                                <a class="btn btn-sm btn-success"
                                    href="edit.php?id=<?php echo $row['student_id']; ?>">Edit</a>
                                <a class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you realy want to delete this?')"
                                    href="delete.php?id=<?php echo $row['student_id']; ?>">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>Student Id</th>
                            <th>Student Name</th>
                            <th>Student Roll</th>
                            <th>Student Reg</th>
                            <th>Student Shift</th>
                            <th>Student Gender</th>
                            <th>Student Institute</th>
                            <th>Student Dept</th>
                            <th>Student Pic</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>

                </table>




            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Core Scripts - Include with every page -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- Page-Level Plugin Scripts - Tables -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src="js/sb-admin.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
    $('#myTable').dataTable();
});
</script>

</body>

</html>