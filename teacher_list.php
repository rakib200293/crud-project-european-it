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
            <h1 class="page-header">Teachers Lists</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">



                <table class="table table-bordered table-hover table-dark" id="myTable">
                    <thead>
                        <tr>
                            <th>Teacher Id</th>
                            <th>Teacher Name</th>
                            <th>Joining Date</th>
                            <th>Teacher Sellary</th>
                            <th>Student Subject</th>
                            <th>Teacher Pic</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                         $i=1;
					while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['teacher_name']; ?></td>
                            <td><?php echo $row['join_date']; ?></td>
                            <td><?php echo $row['sallery']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td class="list_image"><img width="60" height="60" src="<?php echo $row['teacher_pic']; ?>" alt=""> </td>
                            <td>
                              <div class="btn-group">
                                <a class="btn btn-sm btn-info"
                                    href="teacher_view.php?id=<?php echo $row['teacher_id']; ?>">View</a>
                                <a class="btn btn-sm btn-success"
                                    href="teacher_edit.php?id=<?php echo $row['teacher_id']; ?>">Edit</a>
                                <a class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you realy want to delete this?')"
                                    href="teacher_delete.php?id=<?php echo $row['teacher_id']; ?>">Delete</a>
                                  </div>  
                            </td>
                        </tr>
                        <?php $i++; ?>

                        <?php } ?>
                    <tbody>
                    <tfoot>
                        <tr>
                            <th>Teacher Id</th>
                            <th>Teacher Name</th>
                            <th>Joining Date</th>
                            <th>Teacher Sellary</th>
                            <th>Student Subject</th>
                            <th>Teacher Pic</th>
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
<script src="js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

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