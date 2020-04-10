<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
   <div class="container">
<div >
<table class="table table-bordered table-hover mt-5">
  <h3 >Manage Student Information : </h3>
  <tr class="bg-info">
   <td>Name</td>
   <td>Roll</td>
   <td>Registration</td>
   <td>Department</td>
   <td>Semester</td>
   <td>Shift</td>
   <td>Email</td>
   <td>Image</td>
   <td>Gender</td>
    <td>Action</td>
 </tr>
  <?php
  $link=new mysqli('localhost','root','','student_management');
  if(isset($_GET['sid'])){
          $sid=$_GET['sid'];
          $sql="DELETE FROM tbl_students WHERE id='$sid'";
          $result=$link->query($sql);
        }


  $sql="SELECT *FROM tbl_students";
  $result=$link->query($sql);
  foreach($result as $value){

  ?>
    <tr>
     <td><?php echo $value['name']?></td>
     <td><?php echo $value['roll']?></td>
     <td><?php echo $value['registration'] ?></td>
     <td><?php echo $value['department'] ?></td>
     <td><?php echo $value['semester'] ?></td>
     <td><?php echo $value['shift'] ?></td>
     <td><?php echo $value['email'] ?></td>
     <td><img src="uploads/<?php echo $value['image']?>" height="100px" width="100px"></td>
     <td><?php echo $value['gender'] ?></td>
     <td><a onclick="return confirm('Are you sure want to delete tis student !!')" class="btn btn-danger" href="?sid=<?php echo $value['id'] ?>">Delete</a> ||
    <a class="btn btn-success" href="update_student.php?suid=<?php echo $value['id'] ?>">Edit</td>

    </tr>
<?php } ?>
</table>

     </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
