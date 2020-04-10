<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "classproject";

$con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

$sql = "SELECT * FROM employee ORDER BY employee_id DESC";
$result = mysqli_query($con,$sql);

?>

<?php include_once('inc/header.php'); ?>



<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Employee List</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
       
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel panel-default">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-dark" id="myTable">
                        <thead>
                            <tr>
                                <th>Employee Id</th>
                                <th>Employee Name</th>
                                <th>Job Id</th>
                                <th>Designation</th>
                                <th>Shift</th>
                                <th>Mobile</th>
                                <th>Email Address</th>
                                <th>Photo</th>
                                <th>Comment</th>
                                <th>Actions</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $key => $row) { ?>
                            <tr>
                                <td><?php echo ++$key; ?></td>
                                <td><?php echo $row['employee_name']; ?></td>
                                <td><?php echo $row['job_id']; ?></td>
                                <td><?php echo $row['designation']; ?></td>
                                <td><?php echo $row['shift']; ?></td>
                                <td><?php echo $row['mobile']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td class="list_image"><img width="60" height="60" src="<?php echo $row['photo']; ?>" alt=""></td>
                                <td><?php echo $row['comment']; ?></td>
                                <td>
                                    <div class="btn-group">

                                        <a class="btn btn-sm btn-info"
                                            href="employe_view.php?id=<?php echo $row['employee_id']; ?>">View</a>
                                        <?php
                                  if($row['add_by']==$_SESSION['user_id']){
                                  
                                ?>

                                        <a class="btn btn-sm btn-success"
                                            href="employe_edit.php?id=<?php echo $row['employee_id']; ?>">Edit</a>

                                        <a class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you realy want to delete this?')"
                                            href="employe_delete.php?id=<?php echo $row['employee_id']; ?>">Delete</a>

                                        <?php
                                    } elseif($_SESSION['user_id']== 4) { ?>

                                        
                                        <a class="btn btn-sm btn-success"
                                            href="employe_edit.php?id=<?php echo $row['employee_id']; ?>">Edit</a>

                                        <a class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you realy want to delete this?')"
                                            href="employe_delete.php?id=<?php echo $row['employee_id']; ?>">Delete</a>

                                        <?php   }else{
                                    
                                         ?>
                                            <a class="btn btn-sm btn-success" href="#" disabled>Edit</a>

                                            <a class="btn btn-sm btn-danger" href="#" disabled>Delete</a>
                                        <?php }?>

                                    </div>
                                </td>

                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Employee Id</th>
                                <th>Employee Name</th>
                                <th>Job Id</th>
                                <th>Designation</th>
                                <th>Shift</th>
                                <th>Mobile</th>
                                <th>Email Address</th>
                                <th>Photo</th>
                                <th>Comment</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <style>

                </style>

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