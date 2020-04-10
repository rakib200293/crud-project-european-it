<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "classproject";
	
	//Create Connection
	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM teachers WHERE teacher_id = $id";
	$result = mysqli_query($conn,$sql);
	
	$std = mysqli_fetch_assoc($result);
  
?>
<?php include_once('inc/header.php'); ?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Teacher Information</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <div class="row">
        <div class="col-lg-12">


            <table class="table table-hover table-dark">

                <tr>
                    <th>Teacher Name</th>
                    <td><?php echo $std['teacher_name']; ?></td>
                </tr>

                <tr>
                    <th>Joining Date</th>
                    <td><?php echo $std['join_date']; ?></td>
                </tr>

                <tr>
                    <th>Teacher Sallery</th>
                    <td><?php echo $std['sallery']; ?></td>
                </tr>

                <tr>
                    <th>Subject</th>
                    <td><?php echo $std['subject']; ?></td>
                </tr>



                <tr>
                    <th>Teacher Photo</th>
                    <td><img width="250" src="<?php echo $std['teacher_pic']; ?>" alt=""> </td>
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