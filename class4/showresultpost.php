<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>


<?php
  session_start();
if(isset($_POST['btn_post']) && $_FILES['image']){
          $name=$_POST['name'];
          $roll=$_POST['roll'];
          $registration=$_POST['registration'];
          $department=$_POST['department'];
          $shift=$_POST['shift'];
          $semester=$_POST['semester'];
          $email=$_POST['email'];
          $gender=$_POST['gender'];
          $image_name=$_FILES['image']['name'];
          $image_tmp_location=$_FILES['image']['tmp_name'];
          $image_size=$_FILES['image']['size'];
          $auto_image_name=time().$image_name;
          $directory="uploads/$auto_image_name";
         move_uploaded_file($image_tmp_location, $directory);

         $_SESSION['student']=[$name,$roll,$registration,$department,$shift,$semester,$email,$gender,$image_name];






}



?>
   <div class="container">
<div >
<table class="table table-bordered">
  <h3>Student Information - Post Method</h3>
  <tr>
   <td>Name</td>
   <td>Roll</td>
   <td>Registration</td>
   <td>Department</td>
   <td>Shift</td>
   <td>Semester</td>
   <td>Email</td>
   <td>Image</td>
   <td>Gender</td>

  </tr>
    <tr>
     <td><?php echo $name?></td>
     <td><?php echo $roll?></td>
     <td><?php echo $registration?></td>
     <td><?php echo $department?></td>
     <td><?php echo $shift?></td>
     <td><?php echo $semester?></td>
     <td><?php echo $email?></td>
     <td><?php echo $image_name?></td>
     <td><?php echo $gender?></td>
    </tr>
</table>

     </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
